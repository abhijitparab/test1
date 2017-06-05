<?php


$conn = new mysqli("localhost", "root", "", "testdb");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>