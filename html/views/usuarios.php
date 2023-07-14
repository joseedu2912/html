<?php
    include('../conexionBD/conexion.php');
    $sql = "SELECT * FROM users";
    $query = mysqli_query($conexion, $sql);
    $cont =1;
?>
<?php
    include('heade.php');
?>
<title>Usuarios</title>
<body>
    <div>
        <h1>Usuarios registrados</h1>
        <br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombres</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Mterno</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($query)):?>
                <tr>
                    <th><?= $cont ?></th>
                    <th><?= $row['nombre'] ?></th>
                    <th><?= $row['apellido_p'] ?></th>
                    <th><?= $row['apellido_m'] ?></th>
                    <th><?= $row['email'] ?></th>
                    <th><a href="actualizar.php?id=<?= $row['id'] ?>" class="btn btn-primary">Editar</a></th>
                    <th><a href="../conexionBD/delete.php?id=<?= $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>
                </tr>
                <?php 
                   $cont =$cont+1; 
                    endwhile?>
            </tbody>
        </table>
    </div>
</body>
<?php
    include('footer.php');
?>