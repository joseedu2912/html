<?php
    include('conexion.php');
    $id = $_GET['id'];

    $sql = "SELECT * FROM users WHERE id='$id'";
    $query = mysqli_query($conexion,$sql);
    $row =mysqli_fetch_array($query);
    
?>
