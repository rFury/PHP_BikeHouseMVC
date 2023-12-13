<?php
    require_once('../../Controller/BikeController.php');
    $bikeX = new BikeController;
    if (isset($_POST['submit'])) {
        $type=$_POST['bikeSearch'];
        if ($type=="ALL") {
            $res =$bikeX->listBikes();
        }
        else if($type=="prix")
        {
            $name=$_POST[$type];
            $res =$bikeX->listBikesByPrice($name);
        }
        else{
            $name=$_POST[$type];
            $res = $bikeX->listSearchedBikeType($type,$name);}
        $idu=$_GET['id'];
        foreach ($res as $row) {
            $url="../Functions/BuyBike.php?id=".urlencode($idu)."&idb=".urlencode("$row[idBike]");
            echo("<tr>
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
