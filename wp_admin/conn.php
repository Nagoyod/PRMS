<?php
session_start();

$host = getenv('DB_HOST') ?: 'default';
$user = getenv('DB_USER') ?: 'root';
$password = getenv('DB_PASSWORD') ?: '123456789';
$database = getenv('DB_DATABASE') ?: '2906898_mpcdatabase';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
