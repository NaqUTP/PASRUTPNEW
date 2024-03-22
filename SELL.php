<?php include('jwt_check.php'); ?>


<?php

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pasarutpreg";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve product data from the database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Loop through each product and generate PHP file
    while ($row = $result->fetch_assoc()) {
        $productId = $row['id'];
        $productDescription = $row['description'];
        $productPrice = $row['price'];
        $productQuantity = $row['quantity'];
        $productImage = $row['image'];
        $productContact = $row['contact'];

        // Generate PHP file content
        $phpFileContent = "

<?php
jwt_check.php;
?>

<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
  <title>$productDescription</title>
  <!-- Box icons -->
  
  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css\" />
  <!-- Custom StyleSheet -->
  <link rel=\"stylesheet\" href=\"styles.css\" />
  <link rel=\"icon\" type=\"image/x-icon\" href=\"iconpasarutp.png\">
</head>
<body>
<!-- Navigation -->
<div class=\"navigation\">
  <div class=\"nav-center container d-flex\">
    <a href=\"dummy.php\" class=\"logo\"><h1>Pasar UTP</h1></a>

    <ul class=\"nav-list d-flex\">
      <li class=\"nav-item\">
        <a href=\"dummy.php\" class=\"nav-link\">HOME</a>
      </li>
      <li class=\"nav-item\">
        <a href=\"preloved.php\" class=\"nav-link\">PRELOVED</a>
      </li>
      <li class=\"nav-item\">
        <a href=\"preorder.php\" class=\"nav-link\">PREORDER</a>
      </li>
      <li class=\"nav-item\">
        <a href=\"food.php\" class=\"nav-link\">FOOD</a>
      </li>
      <li class=\"nav-item\">
        <a href=\"services.php\" class=\"nav-link\">SERVICES</a>
      </li>
      <li class=\"nav-item\">
        <a href=\"services.php\" class=\"nav-link\">BOOKS</a>
      </li>
      <li class=\"nav-item\">
        <a href=\"wtb.html\" class=\"nav-link\">WTB!</a>
      </li>
      <li class=\"icons d-flex\">
        <a href=\"login.html\" class=\"icon\">
          <i class=\"bx bx-user\"></i>
        </a>
        <div class=\"icon\">
          <i class=\"bx bx-search\"></i>
        </div>
        <div class=\"icon\">
          <i class=\"bx bx-heart\"></i>
          <span class=\"d-flex\">0</span>
        </div>
        <a href=\"cart.html\" class=\"icon\">
          <i class=\"bx bx-cart\"></i>
          <span class=\"d-flex\">0</span>
        </a>
      </li>
    </ul>

    <div class=\"icons d-flex\">
      <a href=\"login.html\" class=\"icon\">
        <i class=\"bx bx-user\"></i>
      </a>
      <div class=\"icon\">
        <i class=\"bx bx-search\"></i>
      </div>
      <div class=\"icon\">
        <i class=\"bx bx-heart\"></i>
        <span class=\"d-flex\">0</span>
      </div>
      <a href=\"cart.html\" class=\"icon\">
        <i class=\"bx bx-cart\"></i>
        <span class=\"d-flex\">0</span>
      </a>
    </div>

    <div class=\"hamburger\">
      <i class=\"bx bx-menu-alt-left\"></i>
    </div>
  </div>
</div>

<!-- Breadcrumb -->
<section class=\"breadcrumb\">
  <div class=\"breadcrumb__list flex container\">
    <a href=\"dummy.php\" class=\"breadcrumb__link\">Home</a>
    <span class=\"breadcrumb__link\"> > </span>
    <span class=\"breadcrumb__link\"> > </span>
    <span class=\"breadcrumb__link\">$productDescription</span>
  </div>
</section>

<!-- Product Details -->
<section class=\"section product-detail\">
  <div class=\"details container\">
    <div class=\"left image-container\">
      <div class=\"main\">
       <img src=\"uploads/$productImage\" id=\"zoom\" alt=\"\" />

      </div>
    </div>
    <div class=\"right\">
      
      <h1>$productDescription</h1>
      <div class=\"price\">RM$productPrice</div>
      <h3>Product Detail</h3>
      <p>
        Quantity: $productQuantity<br/>
        Contact : $productContact<br/>
    </div>
  </div>


<footer class=\"footer\">

        <div class=\"row\">
            <div class=\"col d-flex\">
                <h4>INFORMATION</h4>
                <a href=\"\">About us</a>
                <a href=\"\">Contact Us</a>
                <a href=\"tnc.html\">Terms & Conditions</a>
                <a href=\"shippingguide.html\">Shipping Guide</a>
            </div>
            <div class=\"col d-flex\">
                <h4>CATEGORIES</h4>
                <a href=\"preloved.php\" Preloved></a>
                <a href=\"preorder.html\">Preorder</a>
                <a href=\"food.php\">Food</a>
                <a href=\"services.php\">Services</a>
                <a href=\"books.php\">Books</a>
                <a href=\"wtb.html\">WTB!</a>
            </div>
            <div class=\"col d-flex\">
                <h4>OFFICIAL UTP <br/>SOCIAL MEDIA</h4>
                <a href=\"https://www.facebook.com/UTPOfficial/?locale=ms_MY\"><span><i class='bx bxl-facebook' ></i></span></a>
                <a href=\"https://www.instagram.com/utpofficial/?hl=en\"><span><i class='bx bxl-instagram' ></i></span></a>
                <a href=\"https://www.linkedin.com/school/universiti-teknologi-petronas/\"><span><i class='bx bxl-linkedin' ></i></span></a>
                <a href=\"https://twitter.com/UTPOfficial?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor\"><span><i class='bx bxl-twitter' ></i></span></a>
            </div>
        </div>


</footer>
<!-- Custom Script -->
<script src=\"./js/index.js\"></script>
<script src=\"https://code.jquery.com/jquery-3.4.0.min.js\"></script>
<script src=\"zoomsl.min.js\"></script>
<script>
  $(function () {
    $(\"#zoom\").imagezoomsl({
      zoomrange: [4, 4],
    });
  });
</script>
</body>
</html>


";

        // Save PHP file
        $filename = "product_" . $productId . ".php";
        file_put_contents($filename, $phpFileContent);
    }
} else {
    echo "No products found.";
}

$conn->close();
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

<!-- Add Product Form -->
<section class="section add-product">
    <div class="container">
        <h2>Add Product</h2>

        <?php
        // Check if the user is logged in

        if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
            // Redirect to the login page or display an error message
            header("Location: login.php");
            exit();
        }

        // User's email retrieved from the session
        $user_email = $_SESSION['email'];
        ?>

        <style>
            /* Style for form container */
            .form-container {
                max-width: 400px;
                margin: 0 auto;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
                background-color: #f9f9f9;
            }

            /* Style for form labels */
            label {
                display: block;
                margin-bottom: 10px;
            }

            /* Style for form input fields */
            input[type="text"],
            input[type="number"],
            input[type="file"] {
                width: 100%;
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box; /* Ensure padding and border are included in width */
            }

            /* Style for submit button */
            input[type="submit"] {
                background-color: #4CAF50;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                width: 100%;
            }

            input[type="submit"]:hover {
                background-color: #45a049;
            }
        </style>

        <div class="form-container">
            <form action="PROCESSSELL.php" method="POST" enctype="multipart/form-data">
                <label for="description">Description:</label>
                <input type="text" id="description" name="description" required>

                <label for="price">Price:</label>
                <input type="number" id="price" name="price" step="0.01" required>

                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" required>

                <label for="contact">Contact:</label>
                <input type="text" id="contact" name="contact" required>

                <label for="image">Image:</label>
                <input type="file" id="image" name="image" accept="image/*" required>

                <input type="hidden" name="user_email" value="<?php echo $user_email; ?>"> <!-- Add user's email as a hidden input -->

                <input type="submit" value="Submit">
            </form>
        </div>

        <!-- Button to go to My Listings page -->
        <a href="VIEWSELL.php">Click this to view Your Listings</a>
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
