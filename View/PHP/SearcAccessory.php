<?php
    require_once('../../Controller/AccessoryController.php');
    $acc = new AccessoryController;
    if (isset($_POST['submit'])) {
        $type=$_POST['AccessorySearch'];
        if ($type=="ALL") {
            $res =$acc->listAccessories();
        }
        else if($type=="prix")
        {
            $name=$_POST[$type];
            $res =$acc->listAccessoriesByPrice($name);
        }
        else{
            $name=$_POST[$type];
            $res = $acc->listSearchedAccessoryType($type,$name);}
        $idu=$_GET['id'];
        foreach ($res as $row) {
            $url="../Functions/BuyAccessory.php?id=".urlencode($idu)."&ida=".urlencode("$row[idAcc]");
            echo("<tr>
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
                <td>$row[marque]</td>
                <td>$row[quantite]</td>");
                if ($row['stock']=="Out of Stock") {
                    echo("<td style='color:red;'>$row[stock]</td>");
                }
                else {
                    echo("<td style='color:green;'>$row[stock]</td>");
                }
                if ($row['stock']=="In Stock") {
                    echo("<td><a href='$url'><img src='../../Img/cart.png' alt='cart' style='max-width: 50px;max-height: 50px;display: block;margin: 0 auto;'></a></td></tr>");
                }
                else
                {
                    echo("<td><a><img src='../../Img/close.png' alt='cart' style='max-width: 50px;max-height: 50px;display: block;margin: 0 auto;'></a></td></tr>");
                }
    
        }
    }

?>
