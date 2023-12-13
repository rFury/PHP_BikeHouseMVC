<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bike House</title>
    <link rel="stylesheet" href="indexAdmin.css">
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
                            $url="indexUser.php";
                    echo "<a href='$url' style='color: red;'>Home</a>"; 
                    ?>
                </li>
                <li> <?php
                            $url="../BikeAdminListing/BikeAdminListing.php";
                    echo "<a href='$url'>Bikes</a>"; 
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
                <a href="../AdminLogin/indexLoginAdmin.php" class="btn sign-in">Logout</a>
            </div>
        </nav>
    </header>
    <section class="hero">
        <div class="hero-content">
            <h2 style="color: black;">Welcome to Bike World</h2>
            <p>Your one-stop shop for premium bicycles and accessories.</p>
            <a href="#" class="btn">Shop Now</a>
        </div>
      </section>
      <section class="featured-bikes">
        <h3>Featured Bikes</h3>
        <div class="bike-card">
            <img src="../Img/dBike.jpg" alt="Mountain Bike">
            <h4>Mountain Bike</h4>
            <p>Explore the great outdoors with our rugged mountain bikes.</p>
            <span class="price">$7.499</span>
        </div>
        <div class="bike-card">
            <img src="../Img/s1000rr.jpg" alt="Road Bike">
            <h4>Road Bike</h4>
            <p>Speed through the city on our sleek and efficient road bikes.</p>
            <span class="price">$30.599</span>
        </div>
        <br>
        <a href="signIn.html"><button type="button" >More</button></a>
      </section>
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