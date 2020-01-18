<?php
    $servername = "localhost";
<<<<<<< HEAD
    $username = "springstudent";
    $password = "springstudent";
    $dataBase = "cp_escolastico";
=======
    $username = "root";
    $password = "";
>>>>>>> bd1313cf6c197aa03e69b0d27117eac99ebdb544

// Create connection
$conn = new mysqli($servername, $username, $password, $dataBase);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 