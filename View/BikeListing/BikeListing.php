<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bike House</title>
    <link rel="stylesheet" href="BikeListing.css">
</head>
<body style="    margin: 0;
    padding: 0;">
    <header>
        <nav>
            <div class="logo">
                <h1 style="font-size: 20px;"><b>Bike World</b></h1>
            </div>
            <ul>
                <li> <?php $id=$_GET['id'];
                            $url="../index/indexUser.php?id=".urlencode($id);
                    echo "<a href='$url'>Home</a>"; 
                    ?>
                </li>
                <li> <?php $id=$_GET['id'];
                            $url="BikeListing.php?id=".urlencode($id);
                    echo "<a href='$url' style='color: red;''>Bikes</a>"; 
                    ?>
                </li>
                <li> <?php $id=$_GET['id'];
                            $url="../AccessoryListing/AccessoryListing.php?id=".urlencode($id);
                    echo "<a href='$url'>Accessory</a>"; 
                    ?>
                </li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div class="nav-buttons">
            <?php $id=$_GET['id'];
                            $url="../SearchAccessory/SearchAccessory.php?id=".urlencode($id);
                    echo "<a href='$url' class='btn buy-bike'>Search Accessory</a>"; 
                ?>
                <?php $id=$_GET['id'];
                            $url="../SearchBike/SearchBike.php?id=".urlencode($id);
                    echo "<a href='$url' class='btn buy-bike'>Search Bike</a>"; 
                ?>
                <?php $id=$_GET['id'];
                            $url="../Account/AccountUser.php?id=".urlencode($id);
                    echo "<a href='$url' class='btn sign-in'>Account</a>"; 
                ?>
                <a href="../Login/indexLoginUser.php" class="btn sign-in">Logout</a>
            </div>
        </nav>
    </header>
    <form action="" method="post"></form>
    <div class="bike-list">
        <h2>Bike Listings</h2>
        <table class="bike-table">
          <thead>
            <tr>
              <th>Image</th>
              <th>Name</th>
              <th>Description</th>
              <th>Price</th>
              <th>Type</th>
              <th>Frame Size (cm)</th>
              <th>Year</th>
              <th>Stock</th>
              <th>Buy</th>
            </tr>
          </thead>
          <tbody>
            <?php
                require_once('../PHP/BikeListing.php');
            ?>
          </tbody>
        </table>
        
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