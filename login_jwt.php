<?php
// PASRUTPNEW-main/login_jwt.php
// --------------------------------
// 1) Include Composer autoloader (installed via `composer require firebase/php-jwt`)
require __DIR__ . '/vendor/autoload.php';
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

// 2) Only handle POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Invalid request method']);
    exit();
}

// 3) Get posted credentials
$email    = $_POST['email'] ?? '';
$password = $_POST['psw']   ?? '';

// 4) Basic validation
if (empty($email) || empty($password)) {
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Email and password required']);
    exit();
}

// 5) Connect to your MySQL database
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "pasarutpreg";

$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);
if ($conn->connect_error) {
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Database connection failed']);
    exit();
}

// 6) Query the `info` table to verify credentials
//    (Original `login.php` used plain-text password checking on `info`. We replicate that here.)
//    If your `info` table actually stores hashed passwords, switch to password_verify() below.
$stmt = $conn->prepare("SELECT email, password FROM info WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->bind_result($dbEmail, $dbPassword);
$stmt->fetch();
$stmt->close();

if (!$dbEmail || $dbPassword !== $password) {
    // Invalid credentials
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Invalid credentials']);
    exit();
}

// 7) Credentials are valid → issue a JWT
$secretKey = 'TTP123';
// -- Change to a strong random string stored in an environment variable in production.

$issuedAt   = time();
$expire     = $issuedAt + 3600; // 1 hour from now

$payload = [
    'iat'   => $issuedAt,
    'exp'   => $expire,
    // We can store “sub” as the user’s email if there’s no numeric ID column
    'sub'   => $dbEmail,
    'email' => $dbEmail
];

// Encode the token
$jwt = JWT::encode($payload, $secretKey, 'HS256');

// 8) Return JSON containing the JWT
header('Content-Type: application/json');
echo json_encode(['token' => $jwt]);
exit();
?>
