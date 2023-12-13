<?php
    require_once('../../Controller/BikeController.php');
    $b = new BikeController;
    $idb=$_GET['idb'];
    $res = $b->rechercheBike($idb);
    echo "<img src='{$res['img']}' alt='{$res['Nom']}' style='max-width: 50%;margin-bottom: 15px;'>";
    echo "<h3>{$res['Nom']}</h3>";
    echo "<b>Nom : </b><input type='text' value='{$res['Nom']}' class='styled-input' name='Nom' required><br>";
    echo "<b>Details : </b><input type='text' value='{$res['detail']}' class='styled-input' name='details' required><br>";
    echo "<b>Price $: </b><input type='text' value='{$res['prix']}' id='prix' name='prix' class='styled-input' required><br>";
    echo "<b>Type : </b><input type='text' value='{$res['Type']}' class='styled-input' name='type' required><br>";
    echo "<b>Year : </b><input type='text' value='{$res['annee']}' class='styled-input' name='year' required><br>";
    echo "<b>Taille : </b><input type='text' value='{$res['taille']}' class='styled-input' name='taille' required><br>";
    echo"<label for='stockStatus'><b>Stock :</b></label>
    <select id='stockStatus' name='stockStatus' class='styled-input' required>
        <option value='In Stock'";
        if ($res['stock'] === 'In Stock') echo 'selected';echo ">In Stock</option>
        <option value='Out of Stock'";
        if ($res['stock'] === 'Out of Stock') echo 'selected';echo">Out of Stock</option>
    </select>";
        echo "<input type='text' value='{$res['idBike']}' class='styled-input' name='id' style='display:none;'>";
    
?>
