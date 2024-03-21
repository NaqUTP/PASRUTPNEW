<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    // Redirect to login page if not logged in
    header("Location: login.html");
    exit();
}

// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pasarutpreg";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the email of the logged-in user from the session
$email = $_SESSION['email'];

// Prepare and execute query to fetch user data
$sql = "SELECT * FROM info WHERE email = '$email'";
$result = $conn->query($sql);

// Check if the query was successful
if ($result) {
    // Check if the query returned any results
    if ($result->num_rows > 0) {
        // Fetch user data
        $row = $result->fetch_assoc();

        // Close the database connection
        $conn->close();
    } else {
        // No user found, handle accordingly
        $conn->close();
        die("No user found");
    }
} else {
    // Query execution failed, handle accordingly
    $conn->close();
    die("Query execution failed: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Box icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="iconpasarutp.png">
    <title>User Profile</title>
</head>
<body>

<!-- Navigation -->
<div class="navigation">
    <div class="nav-center container d-flex">
        <a href="index.php" class="logo"><h1>Pasar UTP</h1></a>

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
                <a href="books.php" class="nav-link">BOOKS</a>
            </li>
            <li class="nav-item">
                <a href="#wtb" class="nav-link">WTB!</a>
            </li>
            <!-- Logout link -->
            <li class="nav-item">
                <a href="logout.php" class="nav-link">Logout</a>
            </li>
        </ul>

        <div class="icons d-flex">
            <a href="#" class="icon">
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


<!-- Profile Section -->
<section class="profile">
    <div class="container">
        <div class="profile-info">
            <h1>Welcome, <?php echo $row['email']; ?></h1> <!-- Dynamic PHP code here -->
            <div class="profile-details">
                <div class="details">
                    <p><strong>User:</strong> <?php echo $row['email']; ?></p> <!-- Dynamic PHP code here -->
                    <!-- Add more fields here as needed -->
                </div>
            </div>
            <div class="bio">
                <h2>Welcome Dear User!</h2>

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
            <a href="preloved.php">Preloved</a>
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

<!-- Custom Script -->
<script src="index.js"></script>
</body>
</html>
