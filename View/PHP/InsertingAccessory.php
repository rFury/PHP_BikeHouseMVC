<?php
    require_once('../../Model/Accessory.php');
    require_once('../../Controller/AccessoryController.php');
    $Controller= new AccessoryController;
    $acc = new Accessory;
    $acc->setNom($_POST['AccessoryName']);
    $acc->setType($_POST['AccessoryType']);
    $acc->setPrix($_POST['AccessoryPrice']);
    $acc->setDetail($_POST['AccessoryDetails']);
    $acc->setQuantite($_POST['AccessoryQuantity']);
    $acc->setMarque($_POST['AccessoryBrand']);
    $acc->setAnnee($_POST['AccessoryYear']);
    $acc->setImg("../../Img/".urlencode($acc->getNom()).".jpg");
    $acc->setStock("In Stock");
    $res=$Controller->rechercherAccessoryByName($acc->getNom(),$acc->getMarque());
    if ($res!=0) {
        header("Location: ../AccessoryAdminListing/AccessoryAdminListing.php?error=AlreadyInserted");
        exit();
    }
    else
    {
        $Controller->insertAccessory($acc);
        header("Location: ../AccessoryAdminListing/AccessoryAdminListing.php");
        exit();
    }

?>