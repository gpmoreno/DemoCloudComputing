<?php
include("../database/connection.php"); 
$id=$_GET['id'];
$sql="delete from alumnos where id='".$id."'";
$result = $conn->query($sql);
header('location:../views/index.php')

?>