<?php include('session_check.php'); ?>


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
<!-- Top Nav -->
<div class="navigation">
  <div class="nav-center container d-flex">
    <a href="dummy.php" class="logo"><h1>Pasar UTP</h1></a>

    <ul class="nav-list d-flex">
      <li class="nav-item">
        <a href="dummy.php" class="nav-link">HOME</a>
      </li>
      <li class="nav-item">
        <a href="preloved.php" class="nav-link">PRELOVED</a>
      </li>
      <li class="nav-item">
        <a href="preorder.html" class="nav-link">PREORDER</a>
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
        <a href="wtb.html" class="nav-link">WTB!</a>
      </li>
      <li class="icons d-flex">
        <a href="profile.php" class="icon">
          <i class="bx bx-user"></i>
        </a>
        <div class="icon">
          <i class="bx bx-search"></i>
        </div>
        <div class="icon">
          <i class="bx bx-heart"></i>
          <span class="d-flex">0</span>
        </div>
        <a href="cart.html" class="icon">
          <i class="bx bx-cart"></i>
          <span class="d-flex">0</span>
        </a>
      </li>
    </ul>

    <div class="icons d-flex">
      <a href="profile.php" class="icon">
        <i class="bx bx-user"></i>
      </a>
      <div class="icon">
        <i class="bx bx-search"></i>
      </div>
      <div class="icon">
        <i class="bx bx-heart"></i>
        <span class="d-flex">0</span>
      </div>
      <a href="cart.html" class="icon">
        <i class="bx bx-cart"></i>
        <span class="d-flex">0</span>
      </a>
    </div>

    <div class="hamburger">
      <i class="bx bx-menu-alt-left"></i>
    </div>
  </div>
</div>

<!--=============== BREADCRUMB ===============-->
<section class="breadcrumb">
  <div class="breadcrumb__list flex container">
    <a href="index.php" class="breadcrumb__link">Home</a>
    <span class="breadcrumb__link"> > </span>
    <span class="breadcrumb__link">Preorder</span>
</section>
<!-- Preloved Products -->
<section class="section new-arrival">
  <div class="title">
    <h1>PREORDER PRODUCTS</h1>
    <p>All the preorder items from the sellers among UTP students</p>
  </div>

  <div class="product-center">
    <div class="product-item">
      <div class="overlay">
        <a href="dodgeball-jersey.html" class="product-thumb">
          <img src="dodgeball-jersey.jpeg" alt="" />
        </a>
      </div>
      <div class="product-info">
        <span>PREORDER</span>
        <a href="dodgeball-jersey.html">Dodgeball Jersey</a>
        <h4>From RM43.00</h4>
      </div>
      <ul class="icons">
        <li><i class="bx bx-heart"></i></li>
        <li><a href="dodgeball-jersey.html"><i class="bx bx-search"></i></a></li>
        <li><i class="bx bx-cart"></i></li>
      </ul>
    </div>
    <div class="product-item">
      <div class="overlay">
        <a href="flowers.html" class="product-thumb">
          <img src="flowers.jpeg" alt="" />
        </a>
      </div>

      <div class="product-info">
        <span>PREORDER</span>
        <a href="flowers.html">Flowers</a>
        <h4>From RM6.00</h4>
      </div>
      <ul class="icons">
        <li><i class="bx bx-heart"></i></li>
        <li><a href="flowers.html"><i class="bx bx-search"></i></a></li>
        <li><i class="bx bx-cart"></i></li>
      </ul>
    </div>
    <div class="product-item">
      <div class="overlay">
        <a href="prestige-edition-by-spectrum.php" class="product-thumb">
          <img src="Prestige-Edition-by-Spectrum.jpeg" alt="" />
        </a>
      </div>
      <div class="product-info">
        <span>PREORDER</span>
        <a href="prestige-edition-by-spectrum.php">Prestige Edition by Spectrum</a>
        <h4>From RM55.00</h4>
      </div>
      <ul class="icons">
        <li><i class="bx bx-heart"></i></li>
        <li><a href="prestige-edition-by-spectrum.php"><i class="bx bx-search"></i></a></li>
        <li><i class="bx bx-cart"></i></li>
      </ul>
    </div>
    <div class="product-item">
      <div class="overlay">
        <a href="set-bahan-kisar-dan-tumis-inah-rasa.php" class="product-thumb">
          <img src="Set-bahan-kisar-dan-Tumis-Inah-Rasa.jpeg" alt="" />
        </a>
      </div>
      <div class="product-info">
        <span>PREORDER</span>
        <a href="set-bahan-kisar-dan-tumis-inah-rasa.php">Set Bahan Kisar dan Tumis Inah Rasa</a>
        <h4>N/A</h4>
      </div>
      <ul class="icons">
        <li><i class="bx bx-heart"></i></li>
        <li><a href="set-bahan-kisar-dan-tumis-inah-rasa.php"><i class="bx bx-search"></i></a></li>
        <li><i class="bx bx-cart"></i></li>
      </ul>
    </div>
    <div class="product-item">
      <div class="overlay">
        <a href="stylish-shirts.php" class="product-thumb">
          <img src="stylish-shirts.jpeg" alt="" />
        </a>
      </div>
      <div class="product-info">
        <span>PREORDER</span>
        <a href="stylish-shirts.php">Stylish Shirt</a>
        <h4>From RM40.00</h4>
      </div>
      <ul class="icons">
        <li><i class="bx bx-heart"></i></li>
        <li><a href="stylish-shirts.php"><i class="bx bx-search"></i></a></li>
        <li><i class="bx bx-cart"></i></li>
      </ul>
    </div>
    <div class="product-item">
      <div class="overlay">
        <a href="the-flower-shop.php" class="product-thumb">
          <img src="The-Flower-Shop.jpeg" alt="" />
        </a>
      </div>
      <div class="product-info">
        <span>PREORDER</span>
        <a href="the-flower-shop.php">The Flower Shop</a>
        <h4>From RM5.00</h4>
      </div>
      <ul class="icons">
        <li><i class="bx bx-heart"></i></li>
        <li><a href="the-flower-shop.php"><i class="bx bx-search"></i></a></li>
        <li><i class="bx bx-cart"></i></li>
      </ul>
    </div>
    <div class="product-item">
      <div class="overlay">
        <a href="the-university.php" class="product-thumb">
          <img src="the-university.jpeg" alt="" />
        </a>
      </div>
      <div class="product-info">
        <span>PREORDER</span>
        <a href="the-university.php">The University</a>
        <h4>From RM50.00</h4>
      </div>
      <ul class="icons">
        <li><i class="bx bx-heart"></i></li>
        <li><a href="the-university.php"><i class="bx bx-search"></i></a></li>
        <li><i class="bx bx-cart"></i></li>
      </ul>
    </div>
    <div class="product-item">
      <div class="overlay">
        <a href="utp-kkr-ramblers-limited-edition.php" class="product-thumb">
          <img src="UTP-KKR-RAMBLERS-LIMITED-EDITION-MERCHANDISE-2024.jpeg" alt="" />
        </a>
      </div>
      <div class="product-info">
        <span>PREORDER</span>
        <a href="utp-kkr-ramblers-limited-edition.php">UTP KKR RAMBLERS LIMITED EDITION MERCHANDISE 2024</a>
        <h4>From RM35.00</h4>
      </div>
      <ul class="icons">
        <li><i class="bx bx-heart"></i></li>
        <li><a href="utp-kkr-ramblers-limited-edition.php"><i class="bx bx-search"></i></a></li>
        <li><i class="bx bx-cart"></i></li>
      </ul>
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
      <a href="preorder.html">Preorder</a>
      <a href="food.php">Food</a>
      <a href="services.php">Services</a>
      <a href="books.php">Books</a>
      <a href="wtb.html">WTB!</a>
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
