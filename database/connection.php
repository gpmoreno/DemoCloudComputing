<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dataBase = "cp_escolastico";

// Create connection
$conn = new mysqli($servername, $username, $password, $dataBase);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<script>console.log('Connected successfully')</script>";
?> 