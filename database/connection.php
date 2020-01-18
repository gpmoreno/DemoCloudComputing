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
<<<<<<< HEAD
echo "Connected successfully";
=======
echo "<script>console.log('Connected successfully')</script>";
>>>>>>> d48d37113156fe17aff4c1dc513c5b4066edb5df
?> 