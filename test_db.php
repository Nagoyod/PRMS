<?php
require_once 'wp_admin/conn.php';

if ($conn->ping()) {
    echo "<h1>✅ Success!</h1>";
    echo "Connected to host: " . getenv('DB_HOST') . "<br>";
    echo "Database in use: " . getenv('DB_DATABASE');
} else {
    echo "<h1>❌ Connection Error</h1>";
    echo "Error: " . $conn->error;
}
?>
