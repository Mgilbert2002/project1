<?php
// Database connection settings
$host = 'localhost';
$db   = 'security_guard_hiring';
$user = 'root';
$pass = ''; // Set your DB password
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>