<?php
    require_once('../../Controller/AccessoryController.php');
    $ACC = new AccessoryController;
    $ida=$_GET['ida'];
    $res = $ACC->rechercherAccessory($ida);
    echo "<img src='{$res['img']}' alt='{$res['Nom']}' style='max-width: 50%;margin-bottom: 15px;'>";
    echo "<h3>{$res['Nom']}</h3>";
    echo "<b>Details : </b><input type='text' value='{$res['detail']}' class='styled-input' name='details' required><br>";
    echo "<b>Price $: </b><input type='text' value='{$res['prix']}' id='prix' name='price' class='styled-input' required><br>";
    echo "<b>Type : </b><input type='text' value='{$res['Type']}' class='styled-input' name='type' required><br>";
    echo "<b>Year : </b><input type='text' value='{$res['annee']}' class='styled-input' name='year' required><br>";
    echo "<b>Brand : </b><input type='text' value='{$res['marque']}' class='styled-input' name='brand' required><br>";
    echo "<input type='text' value='{$res['idAcc']}' class='styled-input' name='ida' style='display:none;'>";
    echo "<b>Quantity : </b><input type='text' value='{$res['quantite']}' id='qntF' class='styled-input' name='quantity' required>";
    
    
?>
