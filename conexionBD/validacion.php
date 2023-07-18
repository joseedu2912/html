<?php
    include('conexion.php');
    session_start();

    $email = $_POST['emailInicio'];
    $pass = $_POST['passwordInicio'];

    $sql = "SELECT * FROM users WHERE email = '$email' and contraseña = '$pass'";
    $query = mysqli_query($conexion,$sql);
    $row = mysqli_fetch_array($query);
    if($row>=1){
        //while($row['nombre']):
        $_SESSION['nombre']=$row['nombre'];
        $_SESSION['email']=$row['email'];
        //endwhile;
        header("Location: ../views/inicio.php");
        
    }else{
        $error ="Usuario y/o contraseña incorrectos";
        header("Location: ../index.html");
    }
    
?>