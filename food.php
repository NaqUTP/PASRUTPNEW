<?php
session_start();
?>

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
<script src="searchscript.js"></script>
  <!-- Top Nav -->
  <div class="navigation">
    <div class="nav-center container d-flex">
      <a href="index.html" class="logo"><h1>Pasar UTP</h1></a>

      <ul class="nav-list d-flex">
        <li class="nav-item">
          <a href="index.html" class="nav-link">HOME</a>
        </li>
        <li class="nav-item">
          <a href="preloved.html" class="nav-link">PRELOVED</a>
        </li>
        <li class="nav-item">
          <a href="preorder.html" class="nav-link">PREORDER</a>
        </li>
        <li class="nav-item">
          <a href="food.html" class="nav-link">FOOD</a>
        </li>
        <li class="nav-item">
          <a href="services.html" class="nav-link">SERVICES</a>
        </li>
        <li class="nav-item">
          <a href="books.php" class="nav-link">BOOKS</a>
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
          <a href="cart.html" class="icon">
            <i class="bx bx-cart"></i>
            <span class="d-flex">0</span>
          </a>
        </li>
      </ul>

      <div class="icons d-flex">
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
        <a href="cart.html" class="icon">
          <i class="bx bx-cart"></i>
          <span class="d-flex">0</span>
        </a>
      </div>

      <div class="container">
        <input id="searchbar" onkeyup="search_animal(event)" type="text" name="search" placeholder="Search Products..">

      <div class="hamburger">
        <i class="bx bx-menu-alt-left"></i>
      </div>
    </div>
  </div>
  <!--=============== BREADCRUMB ===============-->
  <section class="breadcrumb">
    <div class="breadcrumb__list flex container">
      <a href="index.html" class="breadcrumb__link">Home</a>
      <span class="breadcrumb__link"> > </span>
      <span class="breadcrumb__link">Food</span>
  </section>

  <!-- Preorder Products -->
  <section class="section new-arrival">
    <div class="title">
      <h1>FOOD PRODUCTS</h1>
      <p>All the food products from the sellers among UTP students</p>
    </div>

    <div class="product-center">
      <div class="product-item">
        <div class="overlay">
          <a href="fruitsmoothies.php" class="product-thumb">
            <img src="fruit-smoothies.jpeg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>FOOD</span>
          <a href="fruitsmoothies.php">Fruit Smoothies</a>
          <h4>RM6.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="fruitsmoothies.php"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="tauhu-bergedil-ayam.php" class="product-thumb">
            <img src="tauhu-bergedil-ayam.jpeg" alt="" />
          </a>
        </div>

        <div class="product-info">
          <span>FOOD</span>
          <a href="tauhu-bergedil-ayam.php">Tauhu Bergedil Ayam</a>
          <h4>RM8.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="tauhu-bergedil-ayam.php"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="shawarma-zinger.php" class="product-thumb">
            <img src="shawarma-zinger.jpeg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>FOOD</span>
          <a href="shawarma-zinger.php">Shawarma Zinger</a>
          <h4>RM5.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="shawarma-zinger.php"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
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
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="kek-tapak-kuda.php"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="meow-meow-ramyeon.php" class="product-thumb">
            <img src="meow-meow-ramyeon.jpeg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>FOOD</span>
          <a href="meow-meow-ramyeon.php">Meow Meow Ramyeon</a>
          <h4>From RM7.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="meow-meow-ramyeon.php"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="ramen.php" class="product-thumb">
            <img src="ramen.jpeg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>FOOD</span>
          <a href="ramen.php">Ramen</a>
          <h4>RM5.50</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="ramen.php"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="crispy-choco-tub.php" class="product-thumb">
            <img src="crispy-choco-tub.jpeg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>FOOD</span>
          <a href="crispy-choco-tub.php">Crispy Choco Tub</a>
          <h4>RM15.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="crispy-choco-tub.php"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="popia-nestum.php" class="product-thumb">
            <img src="POPIA-NESTUM-CRUNCHY-&-CREAMY.jpeg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>FOOD</span>
          <a href="popia-nestum.php">POPIA NESTUM CRUNCHY & CREAMY</a>
          <h4>From RM17.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="popia-nestum.php"><i class="bx bx-search"></i></a></li>
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
        <a href="preloved.html" Preloved></a>
        <a href="preorder.html">Preorder</a>
        <a href="food.html">Food</a>
        <a href="services.html">Services</a>
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
