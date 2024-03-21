<?php
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

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the user is logged in and has an email in the session
    session_start();
    if (!isset($_SESSION['email'])) {
        echo "Error: User is not logged in.";
        exit();
    }

    // Retrieve user's email from the session
    $user_email = $_SESSION['email'];

    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $image = $_FILES['image']['name']; // Name of the uploaded image file
    $contact = $_POST['contact'];

    // Sanitize input (optional)
    $description = mysqli_real_escape_string($conn, $description);
    $price = mysqli_real_escape_string($conn, $price);
    $quantity = mysqli_real_escape_string($conn, $quantity);
    $contact = mysqli_real_escape_string($conn, $contact);

    // Move uploaded image to designated folder
    $target_dir = "uploads/"; // Directory where uploaded images will be stored
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    // Insert data into the database
    $sql = "INSERT INTO products (description, price, quantity, image, email, contact) VALUES ('$description', '$price', '$quantity', '$image', '$user_email' , '$contact')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>window.location.href = 'SUCCSELL.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
