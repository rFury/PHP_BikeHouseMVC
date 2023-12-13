<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bike House</title>
    <link rel="stylesheet" href="BuyBike.css">
</head>
<body style="    margin: 0;
    padding: 0;" >
    <header>
        <nav>
            <div class="logo">
                <h1 style="font-size: 20px;"><b>Bike World</b></h1>
            </div>
            <ul>
                <li> <?php 
                            $url="../AdminIndex/indexAdmin.php";
                    echo "<a href='$url''>Home</a>"; 
                    ?>
                </li>
                <li> <?php 
                            $url="../BikeAdminListing/BikeAdminListing.php";
                    echo "<a href='$url'>Bikes</a>"; 
                    ?>
                </li>
                <li> <?php 
                            $url="../AccessoryAdminListing/AccessoryAdminListing.php";
                    echo "<a href='$url' style='color: red;''>Accessory</a>"; 
                    ?>
                </li>
                <li><a href="../ClientListing/ClientListing.php">Clients</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div class="nav-buttons">
                <a href="../AdminLogin/indexLoginAdmin.php" class="btn sign-in">Logout</a>
            </div>
        </nav>
    </header>
    <form action="../PHP/UpdateUser.php" method="post">
    <div class="bike-details">
        <h1>Accessories</h1>
        <?php
            require_once("../PHP/ModifyUser.php");
        ?>
        <button type="submit" class="btn buy-bikeX">Modify !</button>
      </div>
      </form>
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