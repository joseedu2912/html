<?php
    include('conexion.php');
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $lastnameP = $_POST['lastNameP'];
    $lastnameM = $_POST['lastNameM'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET nombre='$name',apellido_p='$lastnameP',apellido_m='$lastnameM',email='$email' WHERE id='$id'";
    $query = mysqli_query($conexion,$sql);

    if($query){
        header("Location: ../views/usuarios.php");
    }
    
?>