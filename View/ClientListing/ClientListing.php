<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bike House</title>
    <link rel="stylesheet" href="BikeAdminListing.css">
</head>
<body style="    margin: 0;
    padding: 0;">
    <header>
        <nav>
            <div class="logo">
                <h1 style="font-size: 20px;"><b>Bike World</b></h1>
            </div>
            <ul>
                <li> <?php
                            $url="../Adminindex/indexAdmin.php";
                    echo "<a href='$url'>Home</a>"; 
                    ?>
                </li>
                <li> <?php
                            $url="../BikeAdminListing/BikeAdminListing.php";
                    echo "<a href='$url' '>Bikes</a>"; 
                    ?>
                </li>
                <li> <?php
                            $url="../AccessoryAdminListing/AccessoryAdminListing.php";
                    echo "<a href='$url'>Accessory</a>"; 
                    ?>
                </li>
                <li><a href="../ClientListing/ClientListing.php" style='color: red;'>Clients</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div class="nav-buttons">
                <a href="../AdminLogin/indexLoginAdmin.php" class="btn sign-in">Logout</a>
            </div>
        </nav>
    </header>
    <div class="bike-list">
        <h2>USERS Listings</h2>
        <table class="bike-table">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nom</th>
              <th>Presnom</th>
              <th>eMail</th>
              <th>Telephone</th>
              <th>Adresse</th>
              <th>Balance</th>
              <th>Password</th>
              <th>Modify</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php
                require_once('../PHP/UserAdminListing.php');
            ?>
          </tbody>
        </table>
        <br>
        <br>        
      </div>
    <footer>
        <div class="footer-content">
            <div class="logo">
                <h1>Bike World</h1>
            </div>
            <p>&copy; 2023 Bike World</p>
        </div>
    </footer>
</body>
</html>