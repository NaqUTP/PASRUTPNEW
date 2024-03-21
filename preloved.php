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
          <a href="preloved.html" class="nav-link">PRELOVED</a>
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
      <span class="breadcrumb__link">Preloved</span>
  </section>
  <!-- Preloved Products -->
  <section class="section new-arrival">
    <div class="title">
      <h1>PRELOVED PRODUCTS</h1>
      <p>All the preloved items from the sellers among UTP students</p>
    </div>

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
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="baseballcarharttcap.html"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
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
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="durable-body-mountain-bike.html"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
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
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="mistral-fan.php"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
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
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="nike-air-force.php"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
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
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="nike-court-royal.php"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
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
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="sony-srs-xb-13.php"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="Apple-Watch-Series-5.html" class="product-thumb">
            <img src="Apple-Watch-Series-5.jpeg" alt="" />
          </a>
          <span class="discount">Negotiable</span>
        </div>
        <div class="product-info">
          <span>PRELOVED</span>
          <a href="Apple-Watch-Series-5.html">Apple Watch Series 5</a>
          <h4>RM650.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="Apple-Watch-Series-5.html"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
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
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="hotwheels-proton-saga.html"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="Coolermaster-MA612-Stealth-ARGB-cpu-cooler.html" class="product-thumb">
            <img src="Coolermaster-MA612-Stealth-ARGB-cpu-cooler.jpeg" alt="" />
          </a>
          <span class="discount">Negotiable</span>
        </div>
        <div class="product-info">
          <span>PRELOVED</span>
          <a href="Coolermaster-MA612-Stealth-ARGB-cpu-cooler.html">Coolermaster MA612 Stealth ARGB CPU Cooler</a>
          <h4>RM250.00-RM300.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="Coolermaster-MA612-Stealth-ARGB-cpu-cooler.html"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="gaming-mouse.html" class="product-thumb">
            <img src="gaming-mouse.jpeg" alt="" />
          </a>
        </div>

        <div class="product-info">
          <span>PRELOVED</span>
          <a href="gaming-mouse.html">Gaming Mouse</a>
          <h4>RM10.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="gaming-mouse.html"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="ipad-7th-gen.php" class="product-thumb">
            <img src="ipad-7th-gen.jpeg" alt="" />
          </a>
          <span class="discount">Negotiable</span>
        </div>
        <div class="product-info">
          <span>PRELOVED</span>
          <a href="ipad-7th-gen.php">Ipad 7th Generation</a>
          <h4>N/A</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="ipad-7th-gen.php"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="ipad-air-4th-generation.php" class="product-thumb">
            <img src="Ipad-Air-4th-Generation.jpeg" alt="" />
          </a>
          <span class="discount">Negotiable</span>
        </div>
        <div class="product-info">
          <span>PRELOVED</span>
          <a href="ipad-air-4th-generation.php">Ipad Air 4th Generation</a>
          <h4>RM2,800.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="ipad-air-4th-generation.php"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="ipad-air-4.php" class="product-thumb">
            <img src="ipad-air-4.jpeg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>PRELOVED</span>
          <a href="ipad-air-4.php">Ipad Air 4th Generation</a>
          <h4>RM2,000.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="ipad-air-4.php"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="Ipad-Air-4th-Generation-Space-Grey.php" class="product-thumb">
            <img src="Ipad-Air-4th-Generation-Space-Grey.jpeg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>PRELOVED</span>
          <a href="Ipad-Air-4th-Generation-Space-Grey.php">Ipad Air 4th Generation</a>
          <h4>RM2,500.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="Ipad-Air-4th-Generation-Space-Grey.php"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="ipad-tablet-case.php" class="product-thumb">
            <img src="IPAD-TABLET-CASE.jpeg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>PRELOVED</span>
          <a href="ipad-tablet-case.php">Ipad/Tablet Case</a>
          <h4>RM15.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="ipad-tablet-case.php"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
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
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="logitech-brio-100-webcam.php"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
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
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="jbl-flip-5.php"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="Marks-&-Spencer-Leather-Shoe.php" class="product-thumb">
            <img src="Marks-&-Spencer-Leather-Shoe.jpeg" alt="" />
          </a>
          <span class="discount">Negotiable</span>
        </div>

        <div class="product-info">
          <span>PRELOVED</span>
          <a href="Marks-&-Spencer-Leather-Shoe.php">Marks & Spencer Leather Shoe</a>
          <h4>RM79.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="Marks-&-Spencer-Leather-Shoe.php"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
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
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="powerbank.php"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="mizuno-monarcida-neo-2-select.php" class="product-thumb">
            <img src="mizuno-monarcida-neo-2-select.jpeg" alt="" />
          </a>
          <span class="discount">Negotiable</span>
        </div>
        <div class="product-info">
          <span>PRELOVED</span>
          <a href="mizuno-monarcida-neo-2-select.php">Mizuno Monarcida Neo 2 Select</a>
          <h4>RM290.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="mizuno-monarcida-neo-2-select.php"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="preloved-baju-kurung.php" class="product-thumb">
            <img src="preloved-baju-kurung.jpeg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>PRELOVED</span>
          <a href="preloved-baju-kurung.php">Preloved Baju Kurung</a>
          <h4>RM70.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="preloved-baju-kurung.php"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="puma-future-match-indoor.php" class="product-thumb">
            <img src="Puma-Future-Match-Indoor.jpeg" alt="" />
          </a>
          <span class="discount">Negotiable</span>
        </div>
        <div class="product-info">
          <span>PRELOVED</span>
          <a href="puma-future-match-indoor.php">Puma Future Match Indoor</a>
          <h4>RM150.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="puma-future-match-indoor.php"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="casio-bm5600.html" class="product-thumb">
            <img src="casio-bm5600.jpeg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>PRELOVED</span>
          <a href="casio-bm5600.html">Casio BM5600</a>
          <h4>RM300.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="casio-bm5600.html"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="ipad-air-5th-generation.php" class="product-thumb">
            <img src="ipad-air-5th-generation.jpeg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>PRELOVED</span>
          <a href="ipad-air-5th-generation.php">Ipad Air 5th Generation</a>
          <h4>RM3,100.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="ipad-air-5th-generation.php"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="lokelteez-JP35-Japanese-PREMIUM-KAEN-FLAME.php" class="product-thumb">
            <img src="lokelteez-JP35-Japanese-PREMIUM-KAEN-FLAME.jpeg" alt="" />
          </a>
          <span class="discount">Negotiable</span>
        </div>
        <div class="product-info">
          <span>PRELOVED</span>
          <a href="lokelteez-JP35-Japanese-PREMIUM-KAEN-FLAME.php">Lokelteez JP35 Japanese Premium Kaen Flame</a>
          <h4>RM45.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="lokelteez-JP35-Japanese-PREMIUM-KAEN-FLAME.php"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="polo-ralph-lauren.php" class="product-thumb">
            <img src="polo-ralph-lauren.jpeg" alt="" />
          </a>
        </div>

        <div class="product-info">
          <span>PRELOVED</span>
          <a href="polo-ralph-lauren.php">Polo Ralph Lauren</a>
          <h4>RM30.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="polo-ralph-lauren.php"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="romand-glasting-melting-lip.php" class="product-thumb">
            <img src="romand-glasting-melting-lip.jpeg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>PRELOVED</span>
          <a href="romand-glasting-melting-lip.php">Romand Glasting Melting Lip</a>
          <h4>RM30.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="romand-glasting-melting-lip.php"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="vintage-blouse.php" class="product-thumb">
            <img src="Vintage-Blouse.jpeg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>PRELOVED</span>
          <a href="vintage-blouse.php">Vintage Blouse</a>
          <h4>RM10.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="vintage-blouse.php"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="wardah-velvet-matte-(C03).php" class="product-thumb">
            <img src="wardah-velvet-matte-(C03).jpeg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>PRELOVED</span>
          <a href="wardah-velvet-matte-(C03).php">Wardah Velvet Matte (C03)</a>
          <h4>RM16.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="wardah-velvet-matte-(C03).php"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="casio-fx570ms.html" class="product-thumb">
            <img src="casio-fx570ms.jpeg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>PRELOVED</span>
          <a href="casio-fx570ms.html">Casio FX570MS</a>
          <h4>RM130.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="casio-fx570ms.html"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="flannel.html" class="product-thumb">
            <img src="flannel.jpeg" alt="" />
          </a>
          <span class="discount">Negotiable</span>
        </div>
        <div class="product-info">
          <span>PRELOVED</span>
          <a href="flannel.html">Flannel</a>
          <h4>RM18.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="flannel.html"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="hoodie-grey.html" class="product-thumb">
            <img src="hoodie-grey.jpeg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>PRELOVED</span>
          <a href="hoodie-grey.html">Hoodie Red</a>
          <h4>RM30.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="hoodie-grey.html"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="hoodie-red.html" class="product-thumb">
            <img src="hoodie-red.jpeg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>PRELOVED</span>
          <a href="hoodie-red.html">Hoodie Red</a>
          <h4>RM35.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="hoodie-red.html"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="hoodie-tommy.html" class="product-thumb">
            <img src="hoodie-tommy.jpeg" alt="" />
          </a>
        </div>

        <div class="product-info">
          <span>PRELOVED</span>
          <a href="hoodie-tommy.html">Hoodie Tommy Hilfiger</a>
          <h4>RM35.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="hoodie-tommy.html"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="samsung-buds-2.php" class="product-thumb">
            <img src="Samsung-Buds-2.jpeg" alt="" />
          </a>
          <span class="discount">Negotiable</span>
        </div>
        <div class="product-info">
          <span>PRELOVED</span>
          <a href="samsung-buds-2.php">Samsung Buds 2</a>
          <h4>RM220.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="samsung-buds-2.php"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="mlbb-account.php" class="product-thumb">
            <img src="Mlbb-account.jpeg" alt="" />
          </a>
          <span class="discount">Negotiable</span>
        </div>
        <div class="product-info">
          <span>PRELOVED</span>
          <a href="mlbb-account.php">MLBB Account</a>
          <h4>RM550.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="mlbb-account.php"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="badminton-racquet.html" class="product-thumb">
            <img src="Badminton-Racquet.jpeg" alt="" />
          </a>
          <span class="discount">Negotiable</span>
        </div>
        <div class="product-info">
          <span>PRELOVED</span>
          <a href="badminton-racquet.html">Badminton Racquet</a>
          <h4>RM150.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="badminton-racquet.html"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="elle-active-jacket.html" class="product-thumb">
            <img src="ELLE-Active-Jacket.jpeg" alt="" />
          </a>
          <span class="discount">Negotiable</span>
        </div>
        <div class="product-info">
          <span>PRELOVED</span>
          <a href="elle-active-jacket.html">ELLE Active Jacket</a>
          <h4>RM80.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="elle-active-jacket.html"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="Fantech-RGB-Headphone-Stand.html" class="product-thumb">
            <img src="Fantech-RGB-Headphone-Stand.jpeg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>PRELOVED</span>
          <a href="Fantech-RGB-Headphone-Stand.html">Fantech RGB Headphone Stand</a>
          <h4>RM35.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="Fantech-RGB-Headphone-Stand.html"><i class="bx bx-search"></i></a></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="viestar-jorts.php" class="product-thumb">
            <img src="Viestar-Jorts.jpeg" alt="" />
          </a>
          <span class="discount">Negotiable</span>
        </div>
        <div class="product-info">
          <span>PRELOVED</span>
          <a href="viestar-jorts.php">Viestar Jorts</a>
          <h4>RM59.00</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><a href="viestar-jorts.php"><i class="bx bx-search"></i></a></li>
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
        <a href="preloved.html"Preloved></a>
        <a href="preorder.php">Preorder</a>
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
