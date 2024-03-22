<?php
// PASRUTPNEW-main/SUCCSELL.php
include('jwt_check.php');  // ← optional, but recommended to ensure user is logged in
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
<!-- Top Nav -->
<div class="navigation">
    <div class="nav-center container d-flex">
        <a href="dummy.php" class="logo"><h1>Pasar UTP</h1></a>

        <ul class="nav-list d-flex">
            <li class="nav-item">
                <a href="dummy.php" class="nav-link">HOME</a>
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
    </div>
</section>


<p>Your listing is successfully created! <a href="VIEWSELL.php">Click here</a> to continue.</p>
<p><a href="SELL.php">Back to Products</a></p>
<p><a href="logout.php">Log Out</a></p>

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
            <a href="https://www.linkedin.com/school/universiti-teknologi-petronas/"><span><i class='bx b

