<?php
    require_once('../../Controller/BikeController.php');
    require_once('../../Controller/AccessoryController.php');
    require_once('../../Controller/UserController.php');
    $bikeX = new bikeController;
    $userx= new userController;
    $acc= new AccessoryController;
    $idu=$_GET['id'];
    $resUser=$userx->listuser($idu);
    $res=$bikeX->listUserBikes($idu);
    $res2=$acc->listUserAccessories($idu);
    $solde=$userx->recherche_userSolde($idu);
    $cart=$userx->getCart($idu);
    echo "<img src='../Img/account.avif' alt='{$resUser['Nom']}' class='bike-image' style='width: 25%;'><br>";
    echo "<h3>{$resUser['Nom']}  {$resUser['Prenom']}</h3>";
    echo "<b>Balance : </b><input type='text' value='\${$solde['solde']}'class='styled-input' readonly><br>";
    echo "<b>mail : </b><input type='text' value='{$resUser['mail']}' class='styled-input' readonly><br>";
    echo "<b>Telephone : </b><input type='text' value='{$resUser['Telephone']}' class='styled-input' readonly><br>";
    echo "<b>AdresUserse : </b><input type='text' value='{$resUser['Adresse']}' class='styled-input' readonly><br>";
    echo ("<b>password : </b><div class='input-group'>
    <input type='password' id='passwordInput'value='{$resUser['passwordX']}' class='styled-input' readonly>
    <button onclick='togglePassword()'' class='toggle-btn'><img src='../../Img/eye.jpg' style='width: 25px;'></button>
    </div>");
    echo ("<div class='bike-list'>
    <h2>Bought Bikes Listing</h2>
    <table class='bike-table'>
      <thead>
        <tr>
          <th>Image</th>
          <th>Name</th>
          <th>Description</th>
          <th>Price</th>
          <th>Type</th>
          <th>Frame Size (cm)</th>
          <th>Year</th>
        </tr>
      </thead>
      <tbody>");

    foreach ($res as $row) {
        echo("<tr>
            <td><img src='$row[img]' alt='$row[Nom]' class='xd'></td>
            <td>$row[Nom]</td>
            <td>$row[detail]</td>
            <td>$$row[prix]</td>
            <td>$row[Type]</td>
            <td>$row[taille]</td>
            <td>$row[annee]</td>");}
    echo "</tbody></table></div>";
    echo ("<div class='bike-list'>
    <h2>Bought Accessories Listing</h2>
    <table class='bike-table'>
      <thead>
        <tr>
          <th>Image</th>
          <th>Name</th>
          <th>Type</th>
          <th>Price</th>
          <th>Description</th>
          <th>Year</th>
          <th>Quantity</th>
          <th>Brand</th>
        </tr>
      </thead>
      <tbody>");
      foreach($res2 as $row){
        $quantite=$userx->getUserQnt($idu,$row['idAcc']);
        echo("<tr>
        <td><img src='$row[img]' alt='$row[Nom]' style='
            max-width: 100px;
            max-height: 100px;
            display: block;
            margin: 0 auto;'></td>
            <td>$row[Nom]</td>
            <td>$row[Type]</td>
            <td>\$$row[prix]</td>
            <td>$row[detail]</td>
            <td>$row[annee]</td>
            <td>{$quantite}</td>
            <td>$row[marque]</td>");}
      echo "</tbody></table>
      <div style='    display: flex;
      flex-direction: row;
      align-items: center;justify-content: center;  '>
      <img src='../Img/Cart.png' alt='cart' style='width:30px;'>&nbsp
      <h3 style='color:green;'> <b style='color:black'> = </b> $$cart </h3>   <br>
      </div>
      </div>";

?>