<?php
// PASRUTPNEW-main/PROCESSSELL.php
include('jwt_check.php');  // ← ensures user is logged in via JWT

$userEmail   = $decoded->email;

// 1) Connect to DB
$servername  = "localhost";
$dbUsername  = "root";
$dbPassword  = "";
$dbName      = "pasarutpreg";

$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 2) Only accept POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo "Invalid request method.";
    exit();
}

// 3) Get form fields
$productName = $_POST['product_name'] ?? '';
$description = $_POST['description']  ?? '';
$price       = $_POST['price']        ?? '';
$imageFile   = $_FILES['image']       ?? null;

// 4) Basic validation
if (empty($productName) || empty($description) || empty($price) || !$imageFile) {
    echo "All fields are required.";
    exit();
}

// 5) Handle file upload
$uploadDir   = __DIR__ . '/uploads/';
$filename    = basename($imageFile['name']);
$targetPath  = $uploadDir . $filename;

if (!move_uploaded_file($imageFile['tmp_name'], $targetPath)) {
    echo "Failed to upload image.";
    exit();
}

// 6) Insert into `products` table. We assume you have columns: name, description, price, image_path, seller_email, slug
//    Generate a “slug” based on product name (e.g. “Cool Shirt” → “cool-shirt”).
$slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $productName)));

$stmt = $conn->prepare("
    INSERT INTO products (name, description, price, image_path, seller_email, slug)
    VALUES (?, ?, ?, ?, ?, ?)
");
$floatval = floatval($price);
$stmt->bind_param(
    "ssdsss",
    $productName,
    $description,
    $floatval,
    'uploads/' . $filename,
    $userEmail,
    $slug
);

if ($stmt->execute()) {
    $stmt->close();
    // Redirect to a success page
    header("Location: SUCCSELL.php");
    exit();
} else {
    echo "Database insert failed: " . $conn->error;
    exit();
}
?>
