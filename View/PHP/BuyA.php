<?php
    require_once('../../Controller/AccessoryController.php');
    require_once('../../Controller/UserController.php');
    $ACC = new AccessoryController;
    $userx= new UserController;
    $idu=$_GET['id'];
    $ida=$_GET['ida'];
    $res = $ACC->rechercherAccessory($ida);
    $resUser=$userx->recherche_userSolde($idu);
    echo "<img src='{$res['img']}' alt='{$res['Nom']}' style='max-width: 50%;margin-bottom: 15px;'>";
    echo "<h3>{$res['Nom']}</h3>";
    echo "<b>Details : </b><input type='text' value='{$res['detail']}' class='styled-input' readonly><br>";
    echo "<b>Price $: </b><input type='text' value='{$res['prix']}' id='prix' name='prix' class='styled-input' readonly><br>";
    echo "<b>Type : </b><input type='text' value='{$res['Type']}' class='styled-input' readonly><br>";
    echo "<b>Year : </b><input type='text' value='{$res['annee']}' class='styled-input' readonly><br>";
    echo "<b>Brand : </b><input type='text' value='{$res['marque']}' class='styled-input' readonly><br>";
    echo "<input type='text' value='{$res['idAcc']}' class='styled-input' name='ida' readonly style='display:none;'>";
    echo "<input type='text' value='{$idu}' class='styled-input' name='idC' readonly style='display:none;'>";
    echo "<input type='text' value='{$resUser['solde']}' id='solde' class='styled-input' readonly style='display:none;'>";
    echo "<input type='text' value='{$res['quantite']}' id='qntF' class='styled-input' readonly style='display:none;'>";
    echo "<b>Quantity : </b><input onblur='checkBalance()' placeholder='Please enter the Quantity needed ...'' type='text'class='styled-input' id='qnt' name='qnt' ><br>";

    
?>
