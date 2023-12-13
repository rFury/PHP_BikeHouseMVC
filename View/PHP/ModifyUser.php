<?php
    require_once('../../Controller/UserController.php');
    $ACC = new UserController;
    $id=$_GET['id'];
    $res = $ACC->recherche_user($id);
    $solde=$ACC->getBalance($id);
    echo "<img src='../../Img/account.avif' alt='{$res['Nom']}' style='max-width: 50%;margin-bottom: 15px;'>";
    echo "<h3>{$res['Nom']} {$res['Prenom']}</h3>";
    echo "<b>eMail : </b><input type='text' value='{$res['mail']}' class='styled-input' name='type' readonly><br>";
    echo "<b>Adresse : </b><input type='text' value='{$res['Adresse']}' class='styled-input' name='year' readonly><br>";
    echo "<b>Telephone : </b><input type='text' value='{$res['Telephone']}' class='styled-input' name='brand' readonly><br>";
    echo "<b>Password : </b><input type='text' value='{$res['passwordX']}' class='styled-input' name='brand' readonly><br>";
    echo "<input type='text' value='{$res['id']}' class='styled-input' name='id' style='display:none;'>";
    echo "<b>Balance $: </b><input type='text' value='$solde' id='solde' class='styled-input' name='solde' required>";
    
?>
