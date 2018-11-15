<?php
        require 'requires/conexion.php';
        require 'requires/funcionesMarcas.php';
        include 'includes/header.html';
        include 'includes/nav.php';

    $listadoMarcas = listarMarcas();
    ?>

    <main class="container">
        <section>
            <h1>Formulario de alta de un nuevo Producto</h1>

            <form action="agregarProducto.php" method="post" enctype="multipart/form-data">
                Nombre:
                <br>
                <input type="text" class="form-control" name="prdNombre" placeholder="Nombre Producto">
                <br>

                Precio:
                <br>
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type="text" class="form-control" name="prdPrecio" placeholder="Precio">
                </div>
                <br>

                Marca:
                <br>
                <select name="idMarca" class="form-control form-control-lg" required>
                    <option value="">Seleccione una Marca</option>
                    <?php
                    while($fila = mysqli_fetch_array($listadoMarcas))
                    {
                        ?>
                        <option value="<?php echo $fila['idMarca'] ?>"><?php echo $fila['mkNombre']; ?></option>
                        <?php
                    }
                    ?>

                </select>
                <br>

                Categoría:
                <br>
                <select name="idCategoria" class="form-control form-control-lg" required>
                    <option value="">Seleccione una Categoría</option>
                </select>
                <br>

                Presentación:
                <br>
                <input type="text" class="form-control" name="prdPresentacion" placeholder="datos Presentación">
                <br>

                Stock:
                <br>
                <input type="text" class="form-control" name="prdStock" placeholder="datos Stock">
                <br>

                Imagen:
                <br>
                <input type="file" class="form-control" name="prdImagen">
                <br>
                <input type="submit" class="btn btn-success" value="Agregar Producto">
            </form>

</section>
</main>
<?php include 'includes/footer.php'; ?>