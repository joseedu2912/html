<?php
    include('../conexionBD/update.php');
    include('heade.php');
?>
<title>actualizar</title>
<body>
    <div class="user-form">
        <form action="../conexionBD/edit_user.php" method="post">
            <h1>Editar usuario</h1>
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <input type="text" name="name" placeholder="Nombre" value="<?= $row['nombre'] ?>">
            <input type="text" name="lastNameP" placeholder="Apellido Paterno" value="<?= $row['apellido_p'] ?>">
            <input type="text" name="lastNameM" placeholder="Apellido Materno" value="<?= $row['apellido_m'] ?>">
            <input type="text" name="email" placeholder="email@ejemplo.com" value="<?= $row['email'] ?>">
            <input type="submit" value="Actualizar informacion">
        </form>
    </div>
</body>
<?php
    include('footer.php');
?>