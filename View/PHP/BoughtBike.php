<?php
    require_once('../../Controller/BikeController.php');
    require_once('../../Controller/UserController.php');
    $bikeX = new BikeController;
    $userX = new UserController;
    $s=$_POST['prix'];
    $idu=$_POST['idC'];
    $idb=$_POST['idB'];
    $userX->buy($idu,$idb,$s);
    $bikeX->supprimerBikeFromStock($idb);
    header("Location: ../BikeListing/BikeListing.php?id=".urlencode($idu));
    exit();
    
    /*else {
        header("Location: ../Functions/BuyBike.php?id=".urlencode($idu)."&idb=".urlencode($idb));
        exit();
    }*/
    

?>
