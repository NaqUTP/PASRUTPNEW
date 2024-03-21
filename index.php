<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Boxicons -->
  <link
    href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
    rel="stylesheet"
  />
  <!-- Glide js -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.css">
  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="styles.css" />
  <link rel="icon" type="image/x-icon" href="iconpasarutp.png">
  <title>Pasar UTP</title>
</head>
<body>
<!-- Header -->
<header class="header" id="header">
  <!-- Top Nav -->
  <div class="navigation">
    <div class="nav-center container d-flex">
      <a href="index.php" class="logo"><h1>Pasar UTP</h1></a>

      <ul class="nav-list d-flex">
        <li class="nav-item">
          <a href="index.php" class="nav-link">HOME</a>
        </li>
        <li class="nav-item">
          <a href="preloved.php" class="nav-link">PRELOVED</a>

        </li>
        <li class="nav-item">
          <a href="preorder.php" class="nav-link">PREORDER</a>
        </li>
        <li class="nav-item">
          <a href="food.php" class="nav-link">FOOD</a>
        </li>
        <li class="nav-item">
          <a href="services.php" class="nav-link">SERVICES</a>
        </li>
        <li class="nav-item">
          <a href="books.php" class="nav-link">BOOKS</a>
        </li>
          <li class="nav-item">
              <a href="SELL.php" class="nav-link">SELL</a>
          </li>
        <li class="icons d-flex">
          <a href="login.html" class="icon">
            <i class="bx bx-user"></i>
          </a>
          <div class="icon">
            <i class="bx bx-search"></i>
          </div>
          <div class="icon">
            <i class="bx bx-heart"></i>
            <span class="d-flex">0</span>
          </div>
        </li>
      </ul>

      <div class="icons d-flex">
        <a href="login.html" class="icon">
          <i class="bx bx-user"></i>
        </a>
        <div class="icon">
          <i class="bx bx-heart"></i>
          <span class="d-flex">0</span>
        </div>
      </div>

     <div class="container">
        <input id="searchbar" onkeyup="search_animal(event)" type="text" name="search" placeholder="Search Products..">

      <div class="hamburger">
        <i class="bx bx-menu-alt-left"></i>
      </div>
    </div>
  </div>

  <div class="hero">
    <div class="glide" id="glide_1">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
          <li class="glide__slide">
            <div class="center">
              <div class="left">
                <span class="">Welcome to,</span>
                <h1 class="">Pasar UTP!</h1>
                <p>By UTPians, For UTPians. <br/> <br/>#JauhiScammer <br/> <br/>#NoJoyBuyer</p>
                <a href="index.html" class="hero-btn">SHOP NOW</a>
              </div>
              <div class="right">
                <img class="img1" src="iconpasarutp.png" alt="">
              </div>
            </div>
          </li>
          <li class="glide__slide">
            <div class="center">
              <div class="left">
                <span>Launching Month!</span>
                <h1>FREE FEE SERVICE!</h1>
                <p>You can buy everything that you want here with no fee service!</p>
                <a href="index.html" class="hero-btn">SHOP NOW</a>
              </div>
              <div class="right">
                <img class="img2" src="image-2.jpeg" alt="">
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</header>

<!-- New Arrivals -->
<section class="section new-arrival">
  <div class="title">
    <h1>NEW ADDED ITEMS</h1>
    <p>All the latest items from the sellers among UTP students</p>
  </div>



    <div class="product-center">
        <?php
        // Fetch new listings from the database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "pasarutpreg";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM products"; // Modify this query according to your database structure
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Generate HTML markup for each new listing dynamically
                echo "<div class='product-item'>";
                echo "<div class='overlay'>";
                echo "<a href='product_" . $row['id'] . ".php' class='product-thumb'>"; // Link directly to the generated PHP file
                echo "<img src='uploads/" . $row['image'] . "' alt='' />";
                echo "</a>";
                echo "</div>";
                echo "<div class='product-info'>";
                echo "<a href='product_" . $row['id'] . ".php'>" . $row['description'] . "</a>"; // Link directly to the generated PHP file
                echo "<h4>RM" . $row['price'] . "</h4>";
                echo "</div>";
                echo "<ul class='icons'>";
                echo "<li><i class='bx bx-heart'></i></li>";
                echo "<li><a href='product_" . $row['id'] . ".php'><i class='bx bx-search'></i></a></li>"; // Link directly to the generated PHP file
                echo "</ul>";
                echo "</div>";
            }
        } else {
            echo "No new listings found.";
        }

        // Close the database connection
        $conn->close();
        ?>
    </div>
</section>

<div class="product-center">
    <div class="product-item">
      <div class="overlay">
        <a href="baseballcarharttcap.html" class="product-thumb">
          <img src="baseball-cap-carhartt-1.jpeg" alt="" />
        </a>
      </div>
      <div class="product-info">
        <span>PRELOVED</span>
        <a href="baseballcarharttcap.html">Baseball Cap Carhartt</a>
        <h4>RM25.00</h4>
      </div>
    </div>
    <div class="product-item">
      <div class="overlay">
        <a href="durable-body-mountain-bike.html" class="product-thumb">
          <img src="durable-body-mountain-bike.jpeg" alt="" />
        </a>
        <span class="discount">Negotiable</span>
      </div>

      <div class="product-info">
        <span>PRELOVED</span>
        <a href="durable-body-mountain-bike.html">Durable Body Mountain Bike</a>
        <h4>RM520.00</h4>
      </div>
    </div>
    <div class="product-item">
      <div class="overlay">
        <a href="mistral-fan.php" class="product-thumb">
          <img src="mistral-fan.jpeg" alt="" />
        </a>
        <span class="discount">Negotiable</span>
      </div>
      <div class="product-info">
        <span>PRELOVED</span>
        <a href="mistral-fan.php">Mistral Fan</a>
        <h4>RM130.00</h4>
      </div>
    </div>
    <div class="product-item">
      <div class="overlay">
        <a href="nike-air-force.php" class="product-thumb">
          <img src="nike-air-force.jpeg" alt="" />
        </a>
        <span class="discount">Negotiable</span>
      </div>
      <div class="product-info">
        <span>PRELOVED</span>
        <a href="nike-air-force.php">Nike Air Force</a>
        <h4>RM80.00</h4>
      </div>
    </div>
    <div class="product-item">
      <div class="overlay">
        <a href="nike-court-royal.php" class="product-thumb">
          <img src="nike-court-royal-1.jpeg" alt="" />
        </a>
      </div>
      <div class="product-info">
        <span>PRELOVED</span>
        <a href="nike-court-royal.php">Nike Court Royal</a>
        <h4>RM80.00</h4>
      </div>      
    </div>
    <div class="product-item">
      <div class="overlay">
        <a href="sony-srs-xb-13.php" class="product-thumb">
          <img src="SONY-SRS-XB-13-1.jpeg" alt="" />
        </a>
        <span class="discount">Negotiable</span>
      </div>
      <div class="product-info">
        <span>PRELOVED</span>
        <a href="sony-srs-xb-13.php">Sony SRS XB-13</a>
        <h4>RM130.00</h4>
      </div>
    </div>
    <div class="product-item">
      <div class="overlay">
        <a href="kek-tapak-kuda.php" class="product-thumb">
          <img src="kek-tapak-kuda.jpeg" alt="" />
        </a>
      </div>
      <div class="product-info">
        <span>FOOD</span>
        <a href="kek-tapak-kuda.php">Kek Tapak Kuda</a>
        <h4>RM26.00</h4>
      </div>
    </div>
    <div class="product-item">
      <div class="overlay">
        <a href="hotwheels-proton-saga.html" class="product-thumb">
          <img src="hotwheels-proton-saga.jpeg" alt="" />
        </a>
      </div>
      <div class="product-info">
        <span>PRELOVED</span>
        <a href="hotwheels-proton-saga.html">HotWheels Proton Saga</a>
        <h4>RM80.00</h4>
      </div>
    </div>
  </div>
</section>


<!-- Promo -->

<section class="section banner">
  <div class="left">
    <span class="trend">Hot Item!</span>
    <h1>Ipad Air 4th Generation</h1>
    <p>Comes with <span class="color">Apple Pencil 2nd Gen</span> and more!</p>
    <a href="ipad-air-4th-generation.php" class="btn btn-1">Discover Now</a>
  </div>
  <div class="right">
    <img src="Ipad-Air-4th-Generation.jpeg" alt="">
  </div>
</section>




<!-- Featured -->

<section class="section new-arrival">
  <div class="title">
    <h1>Tech Items Featured</h1>
    <p>All the tech items from UTP students to sell</p>
  </div>

  <div class="product-center">
    <div class="product-item">
      <div class="overlay">
        <a href="logitech-brio-100-webcam.php" class="product-thumb">
          <img src="logitech-brio-100-webcam.jpeg" alt="" />
        </a>
      </div>
      <div class="product-info">
        <span>PRELOVED</span>
        <a href="logitech-brio-100-webcam.php">LogiTech Brio 100 Webcam</a>
        <h4>RM150.00</h4>
      </div>
    </div>
    <div class="product-item">
      <div class="overlay">
        <a href="ipad-7th-gen.php" class="product-thumb">
          <img src="ipad-7th-gen.jpeg" alt="" />
        </a>
      </div>

      <div class="product-info">
        <span>PRELOVED</span>
        <a href="ipad-7th-gen.php">Ipad 7th Gen</a>
        <h4>N/A</h4>
      </div>
    </div>
    <div class="product-item">
      <div class="overlay">
        <a href="powerbank.php" class="product-thumb">
          <img src="powerbank.jpeg" alt="" />
        </a>
      </div>
      <div class="product-info">
        <span>PRELOVED</span>
        <a href="powerbank.php">Powerbank</a>
        <h4>RM150.00</h4>
      </div>
    </div>
    <div class="product-item">
      <div class="overlay">
        <a href="jbl-flip-5.php" class="product-thumb">
          <img src="JBL-flip-5.jpeg" alt="" />
        </a>
      </div>
      <div class="product-info">
        <span>PRELOVED</span>
        <a href="jbl-flip-5.php">JBL Flip 5</a>
        <h4>RM350.00</h4>
      </div>
    </div>

</section>

<!-- Contact -->
<section class="section contact">
  <div class="row">
    <div class="col">
      <h2>EXCELLENT SUPPORT</h2>
      <p>We love our customers and they can reach us any time
        of day we will be at your service 24/7</p>
      <a href="" class="btn btn-1">Contact</a>
    </div>
    <div class="col">
      <form action="">
        <div>
          <input type="email" placeholder="Email Address">
          <a href="">Send</a>
        </div>
      </form>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="footer">
  <div class="row">
    <div class="col d-flex">
      <h4>INFORMATION</h4>
      <a href="">About us</a>
      <a href="">Contact Us</a>
      <a href="tnc.html">Terms & Conditions</a>
      <a href="shippingguide.html">Shipping Guide</a>
    </div>
    <div class="col d-flex">
      <h4>CATEGORIES</h4>
      <a href="preloved.php" Preloved></a>
      <a href="preorder.php">Preorder</a>
      <a href="food.php">Food</a>
      <a href="services.php">Services</a>
      <a href="books.php">Books</a>
    </div>
    <div class="col d-flex">
      <h4>OFFICIAL UTP <br/>SOCIAL MEDIA</h4>
      <a href="https://www.facebook.com/UTPOfficial/?locale=ms_MY"><span><i class='bx bxl-facebook' ></i></span></a>
      <a href="https://www.instagram.com/utpofficial/?hl=en"><span><i class='bx bxl-instagram' ></i></span></a>
      <a href="https://www.linkedin.com/school/universiti-teknologi-petronas/"><span><i class='bx bxl-linkedin' ></i></span></a>
      <a href="https://twitter.com/UTPOfficial?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><span><i class='bx bxl-twitter' ></i></span></a>
    </div>
  </div>
</footer>


<!-- PopUp -->
<div class="popup hide-popup">
  <div class="popup-content">
    <div class="popup-close">
      <i class='bx bx-x'></i>
    </div>
    <div class="popup-left">
      <div class="popup-img-container">
        <img class="popup-img" src="hype.jpeg" alt="popup">
      </div>
    </div>
    <div class="popup-right">
      <div class="right-content">
        <h1>Get Coupon Code <span>Free Service Fee</span></h1>
        <p>Sign up to our newsletter and get the coupon code for free service fee for your next purchase. No spam, we promise!
        </p>
        <form action="#">
          <input type="email" placeholder="Enter your email..." class="popup-form">
          <a href="#">Subscribe</a>
        </form>
      </div>
    </div>
  </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
<script src="slider.js"></script>
<script src="index.js"></script>
<script src="searchscript.js"></script>
</body>
</html>
