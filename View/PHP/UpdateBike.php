<?php
    require_once('../../Model/Bike.php');
    require_once('../../Controller/BikeController.php');
    $Controller= new BikeController;
    $bike = new Bike;
    $details = $_POST['details'];
    $price = $_POST['prix'];
    $type = $_POST['type'];
    $year = $_POST['year'];
    $taille = $_POST['taille'];
    $nom = $_POST['Nom'];
    $idb = $_POST['id'];
    $bike->setIdBike($idb);
    $bike->setBikePrix($price);
    $bike->setBikeDetail($details);
    $bike->setBikeType($type);
    $bike->setBikeAnnee($year);
    $bike->setBikeTaille($taille);
    $bike->setBikeNom($nom);
    $bike->setBikeStock($_POST['stockStatus']);
    $Controller->UpdateBike($bike);
    header("Location: ../BikeAdminListing/BikeAdminListing.php");
    exit();
    

?>
