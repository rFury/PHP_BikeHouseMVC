<?php
    require_once('../../Controller/AdminController.php');
    $admin = new AdminController;
    $solde = $_POST['solde'];
    $id = $_POST['id'];
    $admin->UpdateUserSolde($id,$solde);
    header("Location: ../ClientListing/ClientListing.php");
    exit();
    

?>
