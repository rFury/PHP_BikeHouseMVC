<?php
if (file_exists('../Model/Bike.php')) {
    require_once('../Model/Bike.php');
} else {
    require_once('../../Model/Bike.php');
}
if (file_exists('../Config/connect.php')) {
    require_once('../Config/connect.php');
} else {
    require_once('../../Config/connect.php');
}
class BikeController extends connexion
{
    function __construct()
    {
        parent::__construct();
    }

    function listBikes()
    {
        $pdo = $this->getCnx();
        $req = "SELECT * FROM bike ORDER BY prix desc";
        $stmt = $pdo->prepare($req);
        $stmt->execute();
        return $stmt;
    }

    function listSearchedBikeType($type, $nom)
    {
        $pdo = $this->getCnx();
        $req = "SELECT * FROM bike WHERE $type=:nom ORDER BY prix desc";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':nom', $nom);
        $stmt->execute();
        return $stmt;
    }
    function listBikesByPrice($nom)
    {
        $pdo = $this->getCnx();
        $req = "SELECT * FROM bike WHERE prix<=:nom ORDER BY prix desc";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':nom', $nom);
        $stmt->execute();
        return $stmt;
    }
    function listSearchedBike($nom)
    {
        $pdo = $this->getCnx();
        $req = "SELECT * FROM bike WHERE Nom=:nom ORDER BY prix desc";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':nom', $nom);
        $stmt->execute();
        return $stmt;
    }

    function listUserBikes($id)
    {
        $pdo = $this->getCnx();
        $req = "SELECT * FROM bike WHERE idBike IN (SELECT idBike FROM buybike WHERE id=:id)";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt;
    }

    function insertBike(Bike $bike)
    {
        $pdo = $this->getCnx();
        $req = "INSERT INTO bike ( img, Nom, Type, prix, detail, annee, taille, stock) 
                VALUES (:img, :nom, :type, :prix, :detail, :annee, :taille, :stock)";
        $stmt = $pdo->prepare($req);
        $stmt->bindValue(':nom', $bike->getBikeNom());
        $stmt->bindValue(':type', $bike->getBikeType());
        $stmt->bindValue(':prix', $bike->getBikePrix());
        $stmt->bindValue(':detail', $bike->getBikeDetail());
        $stmt->bindValue(':annee', $bike->getBikeAnnee());
        $stmt->bindValue(':taille', $bike->getBikeTaille());
        $stmt->bindValue(':stock', $bike->getBikeStock());
        $stmt->bindValue(':img', $bike->getImgBike());
        $stmt->execute();
    }

    function rechercheBike($idBike)
    {
        $pdo = $this->getCnx();
        $req = "SELECT * FROM bike WHERE idBike = :id";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':id', $idBike);
        $stmt->execute();
        return $stmt->fetch();
    }

    function supprimerBike($idB)
    {
        $pdo = $this->getCnx();
        $req = "DELETE FROM bike WHERE idBike = :id";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':id', $idB);
        $stmt->execute();
    }

    function supprimerBikeFromStock($idB)
    {
        $pdo = $this->getCnx();
        $bike_stock = "Out of Stock";
        $req = "UPDATE bike SET stock=:stock WHERE idBike=:id";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':id', $idB);
        $stmt->bindParam(':stock', $bike_stock);
        $stmt->execute();
    }

    function getBike($idBike)
    {
        $pdo = $this->getCnx();
        $req = "SELECT idBike, nom FROM bike WHERE idBike = :id";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':id', $idBike);
        $stmt->execute();
        return $stmt->fetch();
    }

    function rechercheBikeInStock($bike_nom,$bike_annee)
    {
        $pdo = $this->getCnx();
        $req = "SELECT * FROM bike WHERE Nom=:nom AND annee=:annee";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':nom', $bike_nom);
        $stmt->bindParam(':annee', $bike_annee);
        $stmt->execute();
        $res = $stmt->fetch();
        if ($stmt->rowCount() == 1) {
            return $res['idBike'];
        } else {
            return 0;
        }
    }

    function UpdateBike(Bike $bike)
    {
        $pdo = $this->getCnx();
        $req = "UPDATE bike SET Type = :type, prix = :prix, detail = :detail, annee = :annee, Nom = :nom, taille=:taille ,stock=:stock WHERE idBike = :idb";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':idb', $bike->getIdBike());
        $stmt->bindParam(':nom', $bike->getBikeNom());
        $stmt->bindParam(':type', $bike->getBikeType());
        $stmt->bindParam(':prix', $bike->getBikePrix());
        $stmt->bindParam(':detail', $bike->getBikeDetail());
        $stmt->bindParam(':annee', $bike->getBikeAnnee());
        $stmt->bindParam(':taille', $bike->getBikeTaille());
        $stmt->bindParam(':stock', $bike->getBikeStock());
        $stmt->execute();
    }

    function UpdateBikeStock($bike_idBike,$bike_stock)
    {
        $pdo = $this->getCnx();
        $req = "UPDATE bike SET stock=:stock WHERE idBike = :idb";
        $stmt = $pdo->prepare($req);
        $stmt->bindParam(':stock', $bike_stock);
        $stmt->bindParam(':idb', $bike_idBike);
        $stmt->execute();
    }
}

?>