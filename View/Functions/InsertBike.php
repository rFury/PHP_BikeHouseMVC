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
                    echo "<a href='$url' style='color: red;''>Bikes</a>"; 
                    ?>
                </li>
                <li> <?php 
                            $url="../AccessoryAdminListing/AccessoryAdminListing.php";
                    echo "<a href='$url'>Accessory</a>"; 
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
        <h2>Insert Bike</h2>
        <form action="../PHP/InsertingBike.php" method="POST">
            <!-- Bike Details -->
            <label for="bikeName">Bike Name:</label>
            <input type="text" id="bikeName" name="bikeName" required><br>

            <label for="bikeType">Bike Type:</label>
            <input type="text" id="bikeType" name="bikeType" required><br>

            <label for="bikePrice">Price:</label>
            <input type="number" id="bikePrice" name="bikePrice" required><br>

            <label for="bikeDetails">Bike Details:</label>
            <textarea id="bikeDetails" name="bikeDetails" required></textarea><br>

            <label for="bikeYear">Year:</label>
            <input type="number" id="bikeYear" name="bikeYear" required><br>

            <label for="bikeSize">Size:</label>
            <input type="text" id="bikeSize" name="bikeSize" required><br>

            <button class="btn sell-bike">Insert Bike</button>
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
