<?php
if (file_exists('../Model/Accessory.php')) {
    require_once('../Model/Accessory.php');
} else {
    require_once('../../Model/Accessory.php');
}
if (file_exists('../Config/connect.php')) {
    require_once('../Config/connect.php');
} else {
    require_once('../../Config/connect.php');
}
class AccessoryController extends connexion
{
    function __construct()
    {
        parent::__construct();
    }

    function getQuantite($idAcc)
    {
        $pdo = $this->getCnx();
        $req = "SELECT quantite FROM accessory WHERE idAcc=:id";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':id', $idAcc);
        $stmt->execute();
        return $stmt->fetch();
    }

    function listAccessories()
    {
        $pdo = $this->getCnx();
        $req = "SELECT * FROM accessory GROUP BY prix desc";
        $res = $pdo->query($req);
        return $res;
    }

    function listUserAccessories($id)
    {
        $pdo = $this->getCnx();
        $req = "SELECT * FROM accessory WHERE idAcc IN (SELECT idAcc FROM buyacc WHERE id=:id)";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt;
    }

    function listSearchedAccessoryType($type, $nom)
    {
        $pdo = $this->getCnx();
        $req = "SELECT * FROM accessory WHERE $type=:nom ORDER BY prix desc";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':nom', $nom);
        $stmt->execute();
        return $stmt;
    }
    function listAccessoriesByPrice($nom)
    {
        $pdo = $this->getCnx();
        $req = "SELECT * FROM accessory WHERE prix<=:nom ORDER BY prix desc";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':nom', $nom);
        $stmt->execute();
        return $stmt;
    }

    function rechercherAccessory($id)
    {
        $pdo = $this->getCnx();
        $req = "SELECT * FROM accessory WHERE idAcc = :id";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }
    function rechercherAccessoryByName($nom, $marque)
    {
        $pdo = $this->getCnx();
        $req = "SELECT * FROM accessory WHERE Nom = :nom and marque=:marque";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':marque', $marque);
        $stmt->execute();
        $stmt->fetch();
        return $stmt->rowCount();
    }

    function supprimerAccFromStock($idAcc,$q)
    {
        $qnt = $this->getQuantite($idAcc);
        $pdo = $this->getCnx();
        $stock = "In Stock";
        if ($q == $qnt['quantite']) {
            $stock = "Out of Stock";
        }
        $req = "UPDATE accessory SET stock=:stock , quantite=quantite-:q WHERE idAcc=:id";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':id', $idAcc);
        $stmt->bindParam(':stock', $stock);
        $stmt->bindParam(':q', $q);
        $stmt->execute();
    }

    function insertAccessory(Accessory $Acc)
    {
        $pdo = $this->getCnx();
        $req = "INSERT INTO accessory (img ,Nom, Type, prix, detail, annee, quantite, marque ,stock) VALUES (:img, :Nom, :Type, :prix, :detail, :annee, :quantite, :marque, :stock)";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':Nom', $Acc->getNom());
        $stmt->bindParam(':Type', $Acc->getType());
        $stmt->bindParam(':prix', $Acc->getPrix());
        $stmt->bindParam(':detail', $Acc->getDetail());
        $stmt->bindParam(':annee', $Acc->getAnnee());
        $stmt->bindParam(':quantite', $Acc->getQuantite());
        $stmt->bindParam(':marque', $Acc->getMarque());
        $stmt->bindParam(':stock', $Acc->getStock());
        $stmt->bindParam(':img', $Acc->getImg());
        $stmt->execute();
    }

    function deleteAccessory($id)
    {
        $pdo = $this->getCnx();
        $req = "DELETE FROM accessory WHERE idAcc = :id";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    function updateAccessory(Accessory $Acc)
    {
        $pdo = $this->getCnx();
        if ($Acc->getQuantite() > 0) {
            $Acc->setStock("In Stock");
        } else {
            $Acc->setStock("Out of Stock");
        }
        $req = "UPDATE accessory SET Type = :Type, prix = :prix, detail = :detail, annee = :annee, quantite = :quantite, marque = :marque, stock=:stock WHERE idAcc = :idAcc";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':Type', $Acc->getType());
        $stmt->bindParam(':prix', $Acc->getPrix());
        $stmt->bindParam(':detail', $Acc->getDetail());
        $stmt->bindParam(':annee', $Acc->getAnnee());
        $stmt->bindParam(':quantite', $Acc->getQuantite());
        $stmt->bindParam(':marque', $Acc->getMarque());
        $stmt->bindParam(':idAcc', $Acc->getIdAcc());
        $stmt->bindParam(':stock', $Acc->getStock());
        $stmt->execute();
    }
}
?>