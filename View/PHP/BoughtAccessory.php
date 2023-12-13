<?php
    require_once('../../Controller/AccessoryController.php');
    require_once('../../Controller/UserController.php');
    $Acc = new AccessoryController;
    $userX = new UserController;
    $q=$_POST['qnt'];
    $s=$_POST['prix'];
    $idu=$_POST['idC'];
    $ida=$_POST['ida'];
    $userX->buyAcc($idu,$ida,$s*$q,$q);
    $Acc->supprimerAccFromStock($ida,$q);
    header("Location: ../AccessoryListing/AccessoryListing.php?id=".urlencode($idu));
    exit();
    
    /*else {
        header("Location: ../Functions/BuyBike.php?id=".urlencode($idu)."&idb=".urlencode($idb));
        exit();
    }*/
    

?>
