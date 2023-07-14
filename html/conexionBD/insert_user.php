<?php
    include('conexion.php');
    
    $id = null;
    $name = $_POST['name'];
    $lastnameP = $_POST['lastNameP'];
    $lastnameM = $_POST['lastNameM'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $query = mysqli_query($conexion,$sql);
    $row = mysqli_fetch_array($query);
    if($row>=1){  
        header("Location: ../index.html");
    }else{
        $sql = "INSERT INTO users VALUES('$id','$name','$lastnameP','$lastnameM','$email','$pass')";
        $query = mysqli_query($conexion,$sql);

        if($query){
            header("Location: ../index.html");
        }
    }
    mysqli_free_result($query);
?>