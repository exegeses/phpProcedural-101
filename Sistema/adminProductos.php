<?php 
        require 'requires/conexion.php';
        require 'requires/funcionesProductos.php';
        $listadoProductos = listarProductos();
?>
<?php  include 'includes/header.html';  ?>
<?php  include 'includes/nav.php';  ?>

<main class="container">
    <h1>Panel de administración de Productos</h1>

    <div class="col-md-10 mb-3">
        <a href="admin.php" class="btn btn-outline-secondary">Volver a Admin</a>
    </div>

    <table class="table table-striped table-hover table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Marca</th>
                <th>Categoria</th>
                <th>Presentación</th>
                <th>Stock</th>
                <th>Imagen</th>
                <th colspan="2">
                    <a href="formAgregarProducto.php" class="btn btn-dark">Agregar Producto</a>
                </th>
            </tr>
        </thead>
        <tbody>
<?php
                while( $fila = mysqli_fetch_array($listadoProductos)){
?>          
        <tr>
            <td><?php echo $fila['prdNombre']; ?></td>
            <td><?php echo '$',$fila['prdPrecio']; ?></td>
            <td><?php echo $fila['mkNombre']; ?></td>
            <td><?php echo $fila['catNombre']; ?></td>
            <td><?php echo $fila['prdPresentacion']; ?></td>
            <td><?php echo $fila['prdStock']; ?></td>
            <td><img src="images/productos/<?php echo $fila['prdImagen'] ?>" style="width: 150px"></td>
            <td>
                <a href="formEditarProducto.php" class="btn btn-light">Modificar</a>
            </td>
            <td>
                <a href="formBorrarProducto.php?idProducto=<?php echo $fila['idProducto']; ?>" class="btn btn-light">Eliminar</a>
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