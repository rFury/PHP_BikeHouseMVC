<?php
    require_once('../../Controller/BikeController.php');
    $bikeX = new BikeController;
    $idb=$_POST['idB'];
    $bikeX->supprimerBike($idb);
    header("Location: ../BikeAdminListing/BikeAdminListing.php");
    exit();
    
    /*else {
        header("Location: ../Functions/BuyBike.php?id=".urlencode($idu)."&idb=".urlencode($idb));
        exit();
    }*/
    

?>
