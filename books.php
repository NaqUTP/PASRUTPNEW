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
<!-- Header -->
<header class="header" id="header">
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
          <a href="preorder.php" class="nav-link">PREORDER</a>
        </li>
        <li class="nav-item">
          <a href="food.php" class="nav-link">FOOD</a>
        </li>
        <li class="nav-item">
          <a href="services.php" class="nav-link">SERVICES</a>
        </li>
        <li class="nav-item">
          <a href="books.html" class="nav-link">BOOKS</a>
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
      <span class="breadcrumb__link">BOOKS</span>
  </section>

  <!-- Preloved Products -->
  <section class="section new-arrival">
    <div class="title">
      <h1>BOOKS PRODUCTS</h1>
      <p>All the book items from the sellers among UTP students</p>
    </div>

    <div class="product-center">
      <div class="product-item">
        <div class="overlay">
          <a href="asrama-fixi.html" class="product-thumb">
            <img src="asrama-fixi.jpeg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>BOOKS</span>
          <a href="asrama-fixi.html">Asrama FIXI</a>
          <h4>RM10.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="asrama-fixi.html"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="kiub-fixi.php" class="product-thumb">
            <img src="kiub-fixi.jpeg" alt="" />
          </a>
        </div>

        <div class="product-info">
          <span>BOOKS</span>
          <a href="kiub-fixi.php">Kiub FIXI</a>
          <h4>RM10.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="kiub-fixi.php"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="puaka-fixi.php" class="product-thumb">
            <img src="puaka-fixi.jpeg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>BOOKS</span>
          <a href="puaka-fixi.php">Puaka FIXI</a>
          <h4>RM10.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="puaka-fixi.php"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="chemistry-i-workbook.html" class="product-thumb">
            <img src="chemistry-I-workbook.jpeg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>BOOKS</span>
          <a href="chemistry-i-workbook.html">Chemistry I Workbook</a>
          <h4>RM7.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="chemistry-i-workbook.html"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="phy-ii-fbp0025.php" class="product-thumb">
            <img src="phy-ii-fbp0025.jpeg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>BOOKS</span>
          <a href="phy-ii-fbp0025.php">Physics II (FBP0025)</a>
          <h4>RM20.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="phy-ii-fbp0025.php"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="chem-ii-fbc0025.html" class="product-thumb">
            <img src="chem-ii-fbc0025.jpeg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>BOOKS</span>
          <a href="chem-ii-fbc0025.jpeg">Chemistry II (FBC0025)</a>
          <h4>RM30.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="chem-ii-fbc0025.html"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="malaysian-economy-3rd-edition.php" class="product-thumb">
            <img src="malaysian-economy-3rd-edition.jpeg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>BOOKS</span>
          <a href="malaysian-economy-3rd-edition.php">Malaysian Economy Third Edition</a>
          <h4>RM40.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="malaysian-economy-3rd-edition.php"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="bm-4th-edition.html" class="product-thumb">
            <img src="bm-4th-edition.jpeg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>BOOKS</span>
          <a href="bm-4th-edition.html">Business Management Fourth Edition</a>
          <h4>RM35.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="bm-4th-edition.html"><i class="bx bx-search"></i></a></li>
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
        <a href="preorder.php">Preorder</a>
        <a href="food.php">Food</a>
        <a href="services.php">Services</a>
        <a href="books.html">Books</a>
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
