<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Bike</title>
    <!-- Add your CSS links for styling -->
    <link rel="stylesheet" href="BuyBike.css">
    <link rel="stylesheet" href="Insert.css">
</head>
<body>
<header>
        <nav>
            <div class="logo">
                <h1 style="font-size: 20px;"><b>Bike World</b></h1>
            </div>
            <ul>
                <li> <?php 
                            $url="../index/indexUser.php";
                    echo "<a href='$url''>Home</a>"; 
                    ?>
                </li>
                <li> <?php 
                            $url="../BikeAdminListing/BikeAdminListing.php";
                    echo "<a href='$url' '>Bikes</a>"; 
                    ?>
                </li>
                <li> <?php 
                            $url="../AccessoryAdminListing/AccessoryAdminListing.php";
                    echo "<a href='$url' style='color: red;'>Accessory</a>"; 
                    ?>
                </li>
                <li><a href="../ClientListing/ClientListing.php">Clients</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div class="nav-buttons">
                <a href="../Login/indexLoginAdmin.php" class="btn sign-in">Logout</a>
            </div>
        </nav>
    </header>

    <div class="insert-form">
        <h2>Insert Accessory</h2>
        <form action="../PHP/InsertingAccessory.php" method="POST">
            <label for="bikeName">Accessory Name:</label>
            <input type="text" id="bikeName" name="AccessoryName" required><br>

            <label for="bikeType">Accessory Type:</label>
            <input type="text" id="bikeType" name="AccessoryType" required><br>

            <label for="bikePrice">Price:</label>
            <input type="number" id="bikePrice" name="AccessoryPrice" required><br>

            <label for="bikeDetails">Accessory Details:</label>
            <textarea id="bikeDetails" name="AccessoryDetails" required></textarea><br>

            <label for="bikeYear">Year:</label>
            <input type="number" id="bikeYear" name="AccessoryYear" required><br>

            <label for="bikeYear">Quantity:</label>
            <input type="number" id="bikeYear" name="AccessoryQuantity" required><br>

            <label for="bikeSize">Brand:</label>
            <input type="text" id="bikeSize" name="AccessoryBrand" required><br>

            <button class="btn sell-bike">Insert Accessory</button>
        </form>
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
