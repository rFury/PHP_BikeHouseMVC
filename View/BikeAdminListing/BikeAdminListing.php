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
                            $url="BikeAdminListing.php";
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

                <a href="../AdminLogin/indexLoginAdmin.php" class="btn sign-in">Logout</a>
            </div>
        </nav>
    </header>
    <div class="bike-list">
        <h2>Bike Listings</h2>
        <?php
            $error=$_GET['error'];
            if($error=="AlreadyInserted")
            {
                echo "<h3 id='errorMessage' style='color: red;'>Bike Already Inserted</h3>";
            }
        ?>
        <table class="bike-table">
          <thead>
            <tr>
              <th>Id</th>
              <th>Image</th>
              <th>Name</th>
              <th>Description</th>
              <th>Price</th>
              <th>Type</th>
              <th>Frame Size (cm)</th>
              <th>Year</th>
              <th>Stock</th>
              <th>Modify</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php
                require_once('../PHP/BikeAdminListing.php');
            ?>
          </tbody>
        </table>
        <br>
        <br>        
        <a href="../Functions/InsertBike.php" class="btn buy-bike">Insert More Bikes</a>
      </div>
    <footer>
        <div class="footer-content">
            <div class="logo">
                <h1>Bike World</h1>
            </div>
            <p>&copy; 2023 Bike World</p>
        </div>
    </footer>
    <script>
        const errorMessage = document.getElementById('errorMessage');

        setTimeout(() => {
            errorMessage.style.display = 'none';
        },3000);
</script>
</body>
</html>