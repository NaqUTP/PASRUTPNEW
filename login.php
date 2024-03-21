<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // MySQL database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pasarutpreg";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get email and password from the login form
    $email = $_POST['email'];
    $password = $_POST['psw'];

    // Validate user credentials
    $sql = "SELECT * FROM info WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User exists, set session variables
        $_SESSION['email'] = $email; // Set user ID after successful login



        // Redirect to home page or any other page
        header("Location: dummy.php");
        exit();
    } else {
        // Invalid credentials, redirect back to login page
        header("Location: login.html");
        exit();
    }

    // Close connection
    $conn->close();
}
?>
