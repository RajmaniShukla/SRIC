<?php
/**
 * Database Configuration Template
 * 
 * Copy this file to db.php and update with your credentials:
 *   cp db.example.php db.php
 * 
 * ⚠️ SECURITY: Never commit db.php to version control!
 */

// Database configuration
$host = "localhost";           // Database host
$user = "your_db_username";    // Database username
$pass = "your_db_password";    // Database password (use strong password!)
$db   = "ric";                 // Database name

// Create connection
$conn = mysqli_connect($host, $user, $pass);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Select database
if (!mysqli_select_db($conn, $db)) {
    die("Database selection failed: " . mysqli_error($conn));
}

// Set charset to UTF-8
mysqli_set_charset($conn, "utf8");

/**
 * For production, consider using environment variables:
 * 
 * $host = getenv('DB_HOST') ?: 'localhost';
 * $user = getenv('DB_USER') ?: 'root';
 * $pass = getenv('DB_PASS') ?: '';
 * $db   = getenv('DB_NAME') ?: 'ric';
 */
?>
