<?php

// Create connection
$conn = new mysqli(getenv(MYSQL_HOST), getenv(MYSQL_ROOT_USER), getenv(MYSQL_ROOT_PASSWORD));

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
