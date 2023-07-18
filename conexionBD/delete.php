
<?php
    include('conexion.php');
    
    $id = $_GET['id'];

    $sql = "DELETE FROM users WHERE id='$id'";
    $query = mysqli_query($conexion,$sql);

    if($query){
        header("Location: ../views/usuarios.php");
    }
?>