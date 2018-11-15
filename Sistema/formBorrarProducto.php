<?php
    require 'requires/conexion.php';
    require 'requires/funcionesProductos.php';
    $producto = verProductoPorId();
?>
<?php  include 'includes/header.html';  ?>
<?php  include 'includes/nav.php';  ?>

<main class="container">


    <div class="card border-danger col-md-8">
        <div class="alert alert-danger">
            <h1>Confirmación de baja de un producto</h1>
        </div>
        <div class="card-body text-danger">
            <h2>Nombre: <?php echo $producto['prdNombre']?></h2>
            Precio: <?php echo $producto['prdPrecio']; ?><br>
            Marca: <?php echo $producto['mkNombre']; ?><br>
            Categoría: <?php echo $producto['catNombre']; ?><br>
            Imagen: <img src="images/productos/<?php echo $producto['prdImagen']; ?>"><br>
            Presentación: <?php echo $producto['prdPresentacion']; ?><br>
            Stock: <?php echo $producto['prdStock']; ?><br>



        </div>
    </div>

</main>

<?php  include 'includes/footer.php';  ?>