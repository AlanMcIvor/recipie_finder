<?php
// db_config.php
$host = 'localhost'; // Database host
$dbname = 'forkfulfinds'; // Database name
$username = 'forkfulfinds_admin'; // MySQL username
$password = 'Jr/NvxZeus3Jp7@_'; // MySQL password

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
