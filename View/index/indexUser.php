<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bike House</title>
    <link rel="stylesheet" href="indexUser.css">
    
</head>
<body style="    margin: 0;
    padding: 0;" >
    <header>
        <nav>
            <div class="logo">
                <h1 style="font-size: 20px;"><b>Bike World</b></h1>
            </div>
            <ul>
                <li> <?php $id=$_GET['id'];
                            $url="indexUser.php?id=".urlencode($id);
                    echo "<a href='$url' style='color: red;'>Home</a>"; 
                    ?>
                </li>
                <li> <?php $id=$_GET['id'];
                            $url="../BikeListing/BikeListing.php?id=".urlencode($id);
                    echo "<a href='$url'>Bikes</a>"; 
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
    <section class="hero">
        <div class="hero-content">
            <h2 style="color: black;">Welcome to Bike World</h2>
            <p>Your one-stop shop for premium bicycles and accessories.</p>
            <a href="../BikeListing/BikeListing.php" class="btn">Shop Now</a>
        </div>
      </section>
      <section class="featured-bikes">
    <h3>Featured Bikes</h3>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide bike-card">
                <img src="../Img/dBike.jpg" alt="Mountain Bike">
                <h4>Mountain Bike</h4>
                <p>Explore the great outdoors with our rugged mountain bikes.</p>
                <span class="price">$7.499</span>
            </div>
            <div class="swiper-slide bike-card">
                <img src="../Img/s1000rr.jpg" alt="Road Bike">
                <h4>Road Bike</h4>
                <p>Speed through the city on our sleek and efficient road bikes.</p>
                <span class="price">$30.599</span>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
        <br>
        <a href="../SearchBike/SearchBike.php"><button type="button" >More</button></a>
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