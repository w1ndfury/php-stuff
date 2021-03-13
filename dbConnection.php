<?php

// DB connection
$conn = new mysqli('localhost','root','','my-form');

// Check connection
if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
}

?>