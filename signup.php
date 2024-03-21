<?php
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

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['psw'];

    // Perform validation here

    // Insert user data into the database
    $sql = "INSERT INTO info (email, password) VALUES ('$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to a success page
        header("Location: captcha.html");
        exit(); // Ensure that subsequent code is not executed after redirection
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
