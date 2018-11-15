<?php 
        require 'requires/conexion.php';
        require 'requires/funcionesUsuarios.php';
        $listadoUsuarios = listarUsuarios();
?>
<?php  include 'includes/header.html';  ?>
<?php  include 'includes/nav.php';  ?>

<main class="container">
    <h1>Panel de administración de usuarios</h1>

    <div class="col-md-10 mb-3">
        <a href="admin.php" class="btn btn-outline-secondary">Volver a Admin</a>
    </div>

    <table class="table table-striped table-hover table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Mombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th colspan="2">
                    Agregar
                </th>
            </tr>
        </thead>
        <tbody>
<?php
                while( $fila = mysqli_fetch_array($listadoUsuarios)){
?>          
        <tr>
            <td><?php echo $fila[0]; ?></td>
            <td><?php echo $fila[1]; ?></td>
            <td><?php echo $fila[2]; ?></td>
            <td><?php echo $fila[3]; ?></td>
            <td>modificar</td>
            <td>eliminar</td>
        </tr>
<?php
                }
?>                    
        </tbody>
    </table>

    <div class="col-md-10 mb-3">
        <a href="admin.php" class="btn btn-outline-secondary">Volver a Admin</a>
    </div>

</main>

<?php  include 'includes/footer.php';  ?>