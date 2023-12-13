<?php
    require_once('../../Controller/UserController.php');
    $user = new UserController;
    $id=$_GET['id'];
    $user->supprimer_user($id);
    header("Location: ../ClientListing/ClientListing.php");
    exit();
    
    /*else {
        header("Location: ../Functions/BuyBike.php?id=".urlencode($idu)."&idb=".urlencode($idb));
        exit();
    }*/
    

?>
