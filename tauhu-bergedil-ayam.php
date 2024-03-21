<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Box icons -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
  />
  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="styles.css" />
  <link rel="icon" type="image/x-icon" href="iconpasarutp.png">
  <title>Tauhu Bergedil Ayam</title>
</head>

<body>
<!-- Navigation -->
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
          <i class="bx bx-search"></i>
        </div>
        <div class="search-icon">
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
        <i class="bx bx-search"></i>
      </div>
      <div class="icon">
        <i class="bx bx-heart"></i>
        <span class="d-flex">0</span>
      </div>
    </div>

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

    <span class="breadcrumb__link"> > </span>
    <span class="breadcrumb__link">Tauhu Bergedil Ayam</span>
  </div>
</section>

<!-- Product Details -->
<section class="section product-detail">
  <div class="details container">
    <div class="left image-container">
      <div class="main">
        <img src="tauhu-bergedil-ayam.jpeg" id="zoom" alt="" />
      </div>
    </div>
    <div class="right">
      <span>Food/Desserts</span>
      <h1>Tauhu Bergedil Ayam</h1>
      <div class="price">RM8.00</div>

      <form class="form">
        <a href="https://forms.gle/ZmR1uWBHoqygZe1a9" class="addCart">Order Now</a>
      </form>
      <h3>Product Detail</h3>
      <p>
        - Craving for some TAUHU BERGEDIL AYAM? Come order with us and support our MPU4 project!<br/> <br/>
        - You can get 6 pieces for RM8 only!😻 Add on sambal kicap +RM1 <br/> <br/>
        - We provide delivery on Saturday & Sunday to all village with charge RM1 <br/> <br/>
        - You can also pickup at V5J and we open at carbooth sales this Saturday.<br/> <br/>
      </p>
    </div>
  </div>
</section>

<!-- More Products -->
<section class="section featured">
  <div class="top container">
    <h1>More Products</h1>
    <a href="#" class="view-more">View more</a>
  </div>
  <div class="product-center container">
    <div class="product-item">
      <div class="overlay">
        <a href="" class="product-thumb">
          <img src="tauhu-bergedil-ayam.jpeg" alt="" />
        </a>
      </div>
      <div class="product-info">
        <span>FOOD</span>
        <a href="">Tauhu Bergedil Ayam</a>
        <h4>RM8.00</h4>
      </div>
    </div>
    <div class="product-item">
      <div class="overlay">
        <a href="" class="product-thumb">
          <img src="ipad-air-4.jpeg" alt="" />
        </a>
        <span class="discount">Negotiable</span>
      </div>
      <div class="product-info">
        <span>PRELOVED</span>
        <a href="">Ipad Air 4th Generation</a>
        <h4>RM2,000.00</h4>
      </div>
    </div>
    <div class="product-item">
      <div class="overlay">
        <a href="" class="product-thumb">
          <img src="valorant-acc.jpeg" alt="" />
        </a>
        <span class="discount">Negotiable</span>
      </div>
      <div class="product-info">
        <span>PRELOVED</span>
        <a href="">Valorant Account</a>
        <h4>RM550</h4>
      </div>
      <ul class="icons">
        <li><i class="bx bx-heart"></i></li>
        <li><a href="valorant-acc.php"><i class="bx bx-search"></i></a></li>
      </ul>
    </div>
    <div class="product-item">
      <div class="overlay">
        <a href="" class="product-thumb">
          <img src="double-tape.jpeg" alt="" />
        </a>
      </div>
      <div class="product-info">
        <span>PRELOVED</span>
        <a href="">Double Tape</a>
        <h4>RM15.00</h4>
      </div>
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
      <a href="preloved.html">Preloved</a>
      <a href="preorder.html">Preorder</a>
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
<!-- Custom Script -->
<script src="./js/index.js"></script>
<script
  src="https://code.jquery.com/jquery-3.4.0.min.js"
  integrity="sha384-JUMjoW8OzDJw4oFpWIB2Bu/c6768ObEthBMVSiIx4ruBIEdyNSUQAjJNFqT5pnJ6"
  crossorigin="anonymous"
></script>
<script src="zoomsl.min.js"></script>
<script>
  $(function () {
    console.log("hello");
    $("#zoom").imagezoomsl({
      zoomrange: [4, 4],
    });
  });
</script>
</body>
</html>
