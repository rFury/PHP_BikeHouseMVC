<?php
    require_once('../../Model/Bike.php');
    require_once('../../Controller/BikeController.php');
    $Controller= new BikeController;
    $bikeX = new Bike;
    $bikeName = $_POST['bikeName'];
    $bikeType = $_POST['bikeType'];
    $bikePrice = $_POST['bikePrice'];
    $bikeDetails = $_POST['bikeDetails'];
    $bikeYear = $_POST['bikeYear'];
    $bikeSize = $_POST['bikeSize'];
    $bikeX->setBikeAnnee($bikeYear);
    $bikeX->setBikeDetail($bikeDetails);
    $bikeX->setBikeNom($bikeName);
    $bikeX->setBikePrix($bikePrice);
    $bikeX->setBikeTaille($bikeSize);
    $bikeX->setBikeType($bikeType);
    $bikeX->setImgBike("../../Img/".urlencode($bikeName).".jpg");
    $bikeX->setBikeStock("In Stock");
    $res=$Controller->rechercheBikeInStock($bikeX->getBikeNom(),$bikeX->getBikeAnnee());
    if ($res!=0) {
        header("Location: ../BikeAdminListing/BikeAdminListing.php?error=AlreadyInserted");
        exit();
    }
    else
    {
        $Controller->insertBike($bikeX);
        header("Location: ../BikeAdminListing/BikeAdminListing.php");
        exit();
    }
?>