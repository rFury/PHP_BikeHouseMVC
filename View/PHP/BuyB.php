<?php
    require_once('../../Controller/BikeController.php');
    require_once('../../Controller/UserController.php');
    $bikeX = new BikeController;
    $userx= new UserController;
    $idu=$_GET['id'];
    $idb=$_GET['idb'];
    $res = $bikeX->rechercheBike($idb);
    $resU=$userx->recherche_userSolde($id);
    echo "<img src='{$res['img']}' alt='{$res['Nom']}' class='bike-image'>";
    echo "<h3>{$res['Nom']}</h3>";
    echo "<b>Details : </b><input type='text' value='{$res['detail']}' class='styled-input' readonly><br>";
    echo "<b>Price $: </b><input type='text' value='{$res['prix']}' id='prix' name='prix' class='styled-input' readonly><br>";
    echo "<b>Type : </b><input type='text' value='{$res['Type']}' class='styled-input' readonly><br>";
    echo "<b>Size : </b><input type='text' value='{$res['taille']}' class='styled-input' readonly><br>";
    echo "<b>Year : </b><input type='text' value='{$res['annee']}' class='styled-input' readonly><br>";
    echo "<input type='text' value='{$res['idBike']}' class='styled-input' name='idB' readonly style='display:none;'>";
    echo "<input type='text' value='{$idu}' class='styled-input' name='idC' readonly style='display:none;'>";
    echo "<input type='text' value='{$resU['solde']}' id='solde' class='styled-input' readonly style='display:none;'>";

?>
