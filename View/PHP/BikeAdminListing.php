<?php
    require_once('../../Controller/BikeController.php');
    $bikeX = new BikeController;
    $res = $bikeX->listbikes();

    foreach ($res as $row) {
        $url="../Functions/ModifyBike.php?idb=".urlencode("$row[idBike]");
        echo("<tr>
        <form action='../../View/PHP/DeleteBFromStock.php' method='post'>
            <input type='text' value='{$row['idBike']}' class='styled-input' name='idB' readonly style='display:none;'>
            <td>$row[idBike]</td>
            <td><img src='$row[img]' alt='$row[Nom]' class='xd'></td>
            <td>$row[Nom]</td>
            <td>$row[detail]</td>
            <td>$$row[prix]</td>
            <td>$row[Type]</td>
            <td>$row[taille]</td>
            <td>$row[annee]</td>");
            if ($row['stock']=="Out of Stock") {
                echo("<td style='color:red;'>$row[stock]</td>");
            }
            else {
                echo("<td style='color:green;'>$row[stock]</td>");
            }
            echo("<td><a href='$url'><img src='../../Img/edit.png' alt='cart' style='max-width: 50px;max-height: 50px;display: block;margin: 0 auto;'></a></td>");
            echo("<td><button type='submit' style='border: none;background: none;cursor: pointer;width:100%;'><img src='../../Img/close.png' alt='cart' style='max-width: 50px;max-height: 50px;display: block;margin: 0 auto;'></button></td>");
            echo ("</form></tr>");

    }
?>
