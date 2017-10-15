<?php

$servername = 'localhost';
$username = 'nitinjotwani';
$password = 'public123';
$dbname = 'nitin_jotwani_website';

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>