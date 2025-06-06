<?php include('jwt_check.php'); ?>


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
            <i class="bx bx-heart"></i>
            <span class="d-flex">0</span>
          </div>
        </li>
      </ul>

      <div class="icons d-flex">
        <a href="profile.php" class="icon">
          <i class="bx bx-user"></i>
        </a>
        <div class="icon">
          <i class="bx bx-heart"></i>
          <span class="d-flex">0</span>
        </div>
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
      <a href="index.php" class="breadcrumb__link">Home</a>
      <span class="breadcrumb__link"> > </span>
      <span class="breadcrumb__link">Services</span>
  </section>

  <!-- Preorder Products -->
  <section class="section new-arrival">
    <div class="title">
      <h1>SERVICES</h1>
      <p>All the services from the students and staffs in UTP to serve you.</p>
    </div>

    <div class="product-center">
      <div class="product-item">
        <div class="overlay">
          <a href="delivery-services.html" class="product-thumb">
            <img src="delivery-service.jpeg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>SERVICES</span>
          <a href="delivery-services.html">Delivery Service</a>
          <h4>RM3.00</h4>
        </div>
        <ul class="icons">
          <li><a href="delivery-services.html"><i class="bx bx-search"></i></a></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="beelisimo-s.html" class="product-thumb">
            <img src="Beelisimo.s.jpeg" alt="" />
          </a>
        </div>

        <div class="product-info">
          <span>SERVICES</span>
          <a href="beelisimo-s.html">Beelisimo.s</a>
          <h4>N/A</h4>
        </div>
        <ul class="icons">
          <li><a href="beelisimo-s.html"><i class="bx bx-search"></i></a></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="car-rental.html" class="product-thumb">
            <img src="car-rental.jpeg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>SERVICES</span>
          <a href="car-rental.html">Weekend Car Rental</a>
          <h4>From RM120.00</h4>
        </div>
        <ul class="icons">
          <li><a href="car-rental.html"><i class="bx bx-search"></i></a></li>
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
