<?php
// Database configuration details
$host = 'localhost';          // Hostname (usually 'localhost' for local development)
$dbname = 'interior_design_db';    // Database name
$username = 'root';           // MySQL username (default for XAMPP is 'root')
$password = '';               // MySQL password (default for XAMPP is empty)

// Try to establish a connection to the MySQL database using PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Set the PDO error mode to Exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Print a success message for debugging purposes
    echo "Database connection successful!";
} catch (PDOException $e) {
    // If there is an error, print an error message and stop the script
    die("Database connection failed: " . $e->getMessage());
}
?>