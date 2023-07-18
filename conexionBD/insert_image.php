<?php
    include('conexion.php');
    session_start();
    $imagen = $_FILES['imagen'];
    $directorio_destino = "html2/img";

    $tmp_name = $imagen['tmp_name'];

    $img_file= $imagen['name'];
    $img_type = $imagen['type'];

    if((strpos($img_type,"gif"))||(strpos($img_type,"jepg"))||(strpos($img_type,"jpg"))||
    (strpos($img_type,"png"))){
        $destino = $directorio_destino . '/' . $img_file;
        $email = $_SESSION['email'];
        $sql = "UPDATE users SET imagen = '$destino' WHERE email = '$email' ";
        $query = mysqli_query($conexion,$sql);
    
        if(move_uploaded_file($tmp_name, $destino)){  
            return true;
        }
    }
    return false;
?>