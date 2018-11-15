<?php 
        require 'requires/conexion.php';
        require 'requires/funcionesCategorias.php';
        $listadoCategorias = listarCategorias();
?>
<?php include 'includes/header.html';  ?>
<?php include 'includes/nav.php';  ?>

<main class="container">
    <h1>Panel de administración de Categorias</h1>

    <div class="col-md-10 mb-3">
        <a href="admin.php" class="btn btn-outline-secondary">Volver a Admin</a>
    </div>

    <table class="table table-striped table-hover table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Categoria</th>
                <th colspan="2">
                    <a href="formAgregarCategoria.php"><img src="images/add.png"></a>
                </th>
            </tr>
        </thead>
        <tbody>
<?php
                while( $fila = mysqli_fetch_array($listadoCategorias)){ 
?>          
        <tr>
            <td><?php echo $fila[0]; ?></td>
            <td><?php echo $fila[1]; ?></td>
            <td>
            <a href="formEditarCategoria.php" class="btn btn-light">Modificar
            </td>
            <td>
                <a href="formBorrarCategoria.php" class="btn btn-light">Eliminar
            </td>
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