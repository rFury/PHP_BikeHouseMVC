<?php
if (file_exists('../Model/Admin.php')) {
    require_once('../Model/Admin.php');
} else {
    require_once('../../Model/Admin.php');
}
if (file_exists('../Config/connect.php')) {
    require_once('../Config/connect.php');
} else {
    require_once('../../Config/connect.php');
}

class AdminController extends connexion
{
    function __construct()
    {
        parent::__construct();
    }

    function listusers()
    {
        $pdo = $this->getCnx();
        $req = "SELECT * FROM person WHERE id IN (SELECT id FROM client)";
        $res = $pdo->prepare($req);
        $res->execute();
        return $res->fetch();
    }

    function listAllUsers()
    {
        $pdo = $this->getCnx();
        $req = "SELECT * FROM person WHERE id IN (SELECT id FROM client)";
        $res = $pdo->prepare($req);
        $res->execute();
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }

    function recherche_adminid($nom, $passwordX)
    {
        $pdo = $this->getCnx();
        $req = "SELECT id FROM admin WHERE Nom = :nom AND passwordX = :passwordX";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':passwordX', $passwordX);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['id'];
    }

    function recherche_user($id)
    {
        $pdo = $this->getCnx();
        $req = "SELECT * FROM person WHERE id=(SELECT id FROM client WHERE id=:id)";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt;
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

    function verif_admin($nom, $passwordX)
    {
        $pdo = $this->getCnx();
        $req = "SELECT * FROM person WHERE passwordX = :passwordX AND Nom = :nom";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':passwordX', $passwordX);
        $stmt->bindParam(':nom', $nom);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($stmt->rowCount() == 1) {
            $req2 = "SELECT * FROM admin WHERE id = :id";
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
        $req = "DELETE FROM client WHERE id=:id";
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

    function UpdateUserSolde($id, $solde)
    {
        $pdo = $this->getCnx();
        $req = "UPDATE client SET solde=:solde WHERE id=:id";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':solde', $solde);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}

?>
