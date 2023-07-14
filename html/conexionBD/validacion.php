<?php
    include('conexion.php');
    
    $email = $_POST['emailInicio'];
    $pass = $_POST['passwordInicio'];

    $sql = "SELECT * FROM users WHERE email = '$email' and contraseña = '$pass'";
    $query = mysqli_query($conexion,$sql);
    $row = mysqli_fetch_array($query);
    if($row>=1){
        header("Location: ../views/inicio.php");
        
    }else{   
        header("Location: ../index.html");
    }
    
?>