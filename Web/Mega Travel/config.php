<?php
// config.php: Database configuration
$host = 'localhost';  // your database host
$dbname = 'book_db';  // your database name
$username = 'root';    // your database username
$password = '';        // your database password

try {
    // Create a PDO instance for connecting to the database
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception for better debugging
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Handle connection error
    die("Connection failed: " . $e->getMessage());
}
?>
