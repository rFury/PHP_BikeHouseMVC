<?php
require_once('../../Model/User.php');
require_once('../../Controller/UserController.php');
$userx = new User;
$Controller= new UserController;
$userx->setUserNom($_POST['username']);
$userx->setPasswordX($_POST['pass']);
$userx->setPrenom($_POST['userlastname']);
$userx->setMail($_POST['mail']);
$userx->setAdresse($_POST['adresse']);
$userx->setTelephone($_POST['tel']);
$res = $Controller->insertuser($userx);
if ($res) {
    header("Location: ../Login/indexLoginUser.php");
    exit();
} else {
    $erreur="There was an error creating the user.Please try again.";
    header("Location: ../Create/indexCreateUser.php?error=true");
    exit();
}

?>