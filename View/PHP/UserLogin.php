<?php
    require_once('../../Controller/UserController.php');
    $nom=$_POST['username'];
    $pw=$_POST['pass'];
    $userx=new UserController;
    $res=$userx->verif_user($nom,$pw);
    $id=$userx->recherche_userid($nom,$pw);
    if($res){
        header("Location: ../index/indexUser.php?id=".urlencode($id));
        exit();
    }
    else{
        header("Location: ../Login/indexLoginUser.php?error=true");
        exit();
    }
?>