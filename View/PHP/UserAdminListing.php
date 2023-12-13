<?php
    require_once('../../Controller/UserController.php');
    require_once('../../Controller/AdminController.php');
    $user=new UserController;
    $Admin=new AdminController;
    $res=$Admin->listAllusers();
    foreach($res as $row){
        $solde=$user->getBalance($row['id']);
        $url="../Functions/ModifyUser.php?id=".urlencode("$row[id]");
        $url2="../PHP/DeleteUser.php?id=".urlencode("$row[id]");
        echo("<tr>
            <td>$row[id]</td>
            <td>$row[Nom]</td>
            <td>$row[Prenom]</td>
            <td>$row[mail]</td>
            <td>$row[Telephone]</td>
            <td>$row[Adresse]</td>
            <td>$$solde</td>
            <td>$row[passwordX]</td>");
            echo("<td><a href='$url'><img src='../../Img/edit.png' alt='cart' style='max-width: 50px;max-height: 50px;display: block;margin: 0 auto;'></a></td>");
            echo("<td><a href='$url2'><img src='../../Img/close.png' alt='cart' style='max-width: 50px;max-height: 50px;display: block;margin: 0 auto;'></a></td></tr>");

    }
?>