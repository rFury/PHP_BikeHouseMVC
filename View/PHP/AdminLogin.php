<?php
    require_once('../../Controller/AdminController.php');
    $nom=$_POST['username'];
    $pw=$_POST['pass'];
    $admin=new AdminController;
    $res=$admin->verif_admin($nom,$pw);
    if($res){
        header("Location: ../AdminIndex/indexAdmin.php");
        exit();
    }
    else{
        header("Location: ../AdminLogin/indexLoginAdmin.php");
        exit();
    }
?>