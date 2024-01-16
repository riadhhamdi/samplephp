<?php

// Get database credentials from environment variables
$host = getenv('DB_HOST');
$port = getenv('DB_PORT');
$dbname = getenv('DB_NAME');
$user = getenv('DB_USER');
$password = getenv('DB_PASSWORD');

// Attempt to establish a database connection
$dsn = "pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password";
try {
    $pdo = new PDO($dsn);
    echo "Connected to the database!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
