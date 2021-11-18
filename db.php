<?php
$conn = new mysqli("localhost:88","root","","php_db2");

// Check connection
if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
}
?>