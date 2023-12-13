<?php
    require_once('../../Model/Accessory.php');
    require_once('../../Controller/AccessoryController.php');
    $Controller= new AccessoryController;
    $Acc = new Accessory;
    $details = $_POST['details'];
    $price = $_POST['price'];
    $type = $_POST['type'];
    $year = $_POST['year'];
    $brand = $_POST['brand'];
    $ida = $_POST['ida'];
    $quantity = $_POST['quantity'];
    $Acc->setIdAcc($ida);
    $Acc->setPrix($price);
    $Acc->setMarque($brand);
    $Acc->setDetail($details);
    $Acc->setType($type);
    $Acc->setAnnee($year);
    $Acc->setQuantite($quantity);
    $Controller->UpdateAccessory($Acc);
    header("Location: ../AccessoryAdminListing/AccessoryAdminListing.php");
    exit();
    

?>
