<?php
    require_once('../../Controller/AccessoryController.php');
    $acc=new AccessoryController;
    $res=$acc->listAccessories();
    foreach($res as $row){
        $url="../Functions/ModifyAccessory.php?ida=".urlencode("$row[idAcc]");
        echo("<tr>
            <td>$row[idAcc]</td>
            <td><img src='$row[img]' alt='$row[Nom]' style='
            max-width: 100px;
            max-height: 100px;
            display: block;
            margin: 0 auto;'></td>
            <td>$row[Nom]</td>
            <td>$row[Type]</td>
            <td>$$row[prix]</td>
            <td>$row[detail]</td>
            <td>$row[annee]</td>
            <td>$row[quantite]</td>
            <td>$row[marque]</td>");
            if ($row['stock']=="Out of Stock") {
                echo("<td style='color:red;'>$row[stock]</td>");
            }
            else {
                echo("<td style='color:green;'>$row[stock]</td>");
            }
            echo("<td><a href='$url'><img src='../../Img/edit.png' alt='cart' style='max-width: 50px;max-height: 50px;display: block;margin: 0 auto;'></a></td></tr>");
    }
?>