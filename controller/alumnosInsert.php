<?php 
    include '../database/connection.php';

    // Obtener alumnos
    $queryText = "SELECT * FROM alumnos";
    $resultado = $conn->query($queryText);
    echo $resultado->fetch_assoc();
?>
