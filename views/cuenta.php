<?php
    include('heade.php');
    
?>
<link rel="stylesheet" href="style/style.css">
<body>
    <h1><center>¡¡Bienvenido <?php echo $usuario ?> !!</center></h1>
    <br>
    <form action="../conexionBD/insert_image.php" method="post">
        <div>
            <center><label for="my-imput">Selecciona una imagen</label></center>
            <br>
            <center><input type="file" name="imagen" id="my-imput" ></center>
            <br>
        </div>
        <center><input type="submit" value="Guardar" name="guardar"></center>
    </form>
</body>
<?php
    include('footer.php');
?>