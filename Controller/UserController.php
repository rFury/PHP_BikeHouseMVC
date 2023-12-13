<?php
if (file_exists('../Model/User.php')) {
    require_once('../Model/User.php');
} else {
    require_once('../../Model/User.php');
}
if (file_exists('../Config/connect.php')) {
    require_once('../Config/connect.php');
} else {
    require_once('../../Config/connect.php');
}
class UserController extends connexion
{
    function __construct()
    {
        parent::__construct(); // Call the constructor of the parent class (connexion)
    }

    function listuser($user_id)
    {
        $pdo = $this->getCnx();
        $req = "SELECT * FROM person WHERE id=:id and id IN (SELECT id FROM client)";
        $res = $pdo->prepare($req);
        $res->bindParam(':id', $user_id);
        $res->execute();
        return $res->fetch();
    }

    function getBalance($id)
    {
        $pdo = $this->getCnx();
        $req = "SELECT solde FROM client WHERE id=$id";
        $res = $pdo->prepare($req);
        $res->execute();
        $x = $res->fetch();
        return $x['solde'];
    }
    function getCart($user_id)
    {
        $pdo = $this->getCnx(); 
        $queryBikePrice = "SELECT SUM(prix) FROM bike WHERE idBike IN (SELECT idBike FROM buybike WHERE id = :idc)";
        $stmtBikePrice = $pdo->prepare($queryBikePrice);
        $stmtBikePrice->bindParam(':idc', $user_id);
        $stmtBikePrice->execute();
        $totalBikePrice = $stmtBikePrice->fetchColumn();
        $queryAccessoryPrice = "SELECT SUM(a.prix * b.quantite) FROM accessory a JOIN buyacc b ON a.idAcc = b.idAcc WHERE b.id = :idc";
        $stmtAccessoryPrice = $pdo->prepare($queryAccessoryPrice);
        $stmtAccessoryPrice->bindParam(':idc', $user_id);
        $stmtAccessoryPrice->execute();
        $totalAccessoryPrice = $stmtAccessoryPrice->fetchColumn();
        $totalCartValue = $totalBikePrice + $totalAccessoryPrice;
        $totalCartValue=round($totalCartValue, 2);
        return $totalCartValue;
    }
    

    function insertuser(User $user)
    {
        $pdo = $this->getCnx();
        $req = "INSERT INTO person (Nom, Prenom, mail, Telephone, Adresse, passwordX) VALUES (:nom, :prenom, :mail, :telephone, :adresse, :passwordX)";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':nom', $user->getUserNom());
        $stmt->bindParam(':prenom', $user->getPrenom());
        $stmt->bindParam(':mail', $user->getMail());
        $stmt->bindParam(':telephone', $user->getTelephone());
        $stmt->bindParam(':adresse', $user->getAdresse());
        $stmt->bindParam(':passwordX', $user->getPasswordX());
        if ($stmt->execute()) {
            $lastInsertId = $pdo->lastInsertId();
            $req2 = "INSERT INTO client (id) VALUES (:id)";
            $stmt2 = $pdo->prepare($req2);
            $stmt2->bindParam(':id', $lastInsertId);
            if ($stmt2->execute()) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    function buy($user_id,$idB, $s)
    {
        $pdo = $this->getCnx();
        $req = "INSERT INTO buybike (idBike,id) VALUES (:idB,:id)";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':idB', $idB);
        $stmt->bindParam(':id', $user_id);
        if ($stmt->execute()) {
            $this->moinSolde($user_id,$s);
        }
    }

    function buyAcc($user_id,$ida, $s, $q)
    {
        $pdo = $this->getCnx();
        $req = "INSERT INTO buyacc (idAcc,id,quantite) VALUES (:ida,:id,:q)";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':ida', $ida);
        $stmt->bindParam(':id', $user_id);
        $stmt->bindParam(':q', $q);
        if ($stmt->execute()) {
            $this->moinSolde($user_id,$s);
        }
    }

    function moinSolde($user_id,$s)
    {
        $pdo = $this->getCnx();
        $req = "UPDATE client SET solde=solde-:s WHERE id=:id";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':s', $s);
        $stmt->bindParam(':id', $user_id);
        $stmt->execute();
    }

    function recherche_userid($nom, $passwordX)
    {
        $pdo = $this->getCnx();
        $req = "SELECT id FROM person WHERE Nom = :nom AND passwordX = :passwordX";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':passwordX', $passwordX);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['id'];
    }

    function getUserQnt($user_id,$idAcc)
    {
        $pdo = $this->getCnx();
        $req = "SELECT sum(quantite) as Q FROM buyacc WHERE id =:id  AND idAcc = :idacc";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':id', $user_id);
        $stmt->bindparam(':idacc', $idAcc);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['Q'];
    }

    function recherche_user($id)
    {
        $pdo = $this->getCnx();
        $req = "SELECT * FROM person WHERE id=(SELECT id FROM client WHERE id=:id)";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    function recherche_userSolde($id)
    {
        $pdo = $this->getCnx();
        $req = "SELECT solde FROM client WHERE id=:id";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    function verif_user($nom, $passwordX)
    {
        $pdo = $this->getCnx();
        $req = "SELECT * FROM person WHERE passwordX = :passwordX AND Nom = :nom";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':passwordX', $passwordX);
        $stmt->bindParam(':nom', $nom);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($stmt->rowCount() == 1) {
            $req2 = "SELECT * FROM client WHERE id = :id";
            $stmt2 = $pdo->prepare($req2);
            $stmt2->bindParam(':id', $user['id']);
            $stmt2->execute();

            if ($stmt2->rowCount() == 1) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    function supprimer_user($id)
    {
        $pdo = $this->getCnx();
        $req = "DELETE FROM person WHERE id=:id";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    function getuser($id)
    {
        $pdo = $this->getCnx();
        $req = "SELECT id, nom FROM client WHERE id=:id";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    function modifier_user($id, $nom)
    {
        $pdo = $this->getCnx();
        $req = "UPDATE client SET nom=:nom WHERE id=:id";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}

?>
