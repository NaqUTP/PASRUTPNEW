<?php
// PASRUTPNEW-main/jwt_check.php
// --------------------------------
// 1) Include Composer autoloader for JWT
require __DIR__ . '/vendor/autoload.php';
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

// 2) Get the token (either from an HTTP-Only cookie named 'token', or from Authorization header)
$jwt = null;

// Option A: HTTP-Only cookie
if (isset($_COOKIE['token']) && !empty($_COOKIE['token'])) {
    $jwt = $_COOKIE['token'];
}

// Option B: Authorization header "Bearer <token>"
if (!$jwt && isset($_SERVER['HTTP_AUTHORIZATION'])) {
    $authHeader = $_SERVER['HTTP_AUTHORIZATION'];
    if (strpos($authHeader, 'Bearer ') === 0) {
        $jwt = substr($authHeader, 7);
    }
}

// 3) If no token, redirect to login page
if (!$jwt) {
    header("Location: login.html");
    exit();
}

// 4) Decode & verify the token
$secretKey = 'TTP123';
// Use the same secret key you used in login_jwt.php

try {
    $decoded = JWT::decode($jwt, new Key($secretKey, 'HS256'));
    // $decoded is now an object with fields ['iat', 'exp', 'sub', 'email']
} catch (Exception $e) {
    // Token expired / invalid signature / any decode error
    header("Location: login.html");
    exit();
}

// 5) If you reach here, $decoded is valid. You can now use $decoded->email downstream.
?>
