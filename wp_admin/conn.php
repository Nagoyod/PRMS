<?php
session_start();

$conn = new mysqli(
    getenv('DB_HOST'),
    getenv('DB_USER'),
    getenv('DB_PASSWORD'),
    getenv('DB_DATABASE')
);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
