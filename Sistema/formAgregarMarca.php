<?php  include 'includes/header.html';  ?>
<?php  include 'includes/nav.php';  ?>

<main class="container">
    <h1>Formulario de alta de una Marca</h1>

    <form action="agregarMarca.php" method="post">
    	Marca:
    	<input type="text" name="mkNombre" class="form-control">
    	<br>
    	<button class="btn btn-success">Enviar</button>
    	<a href="adminMarcas.php" class="btn btn-light">Volver al panel de Marcas</a>
    </form>

</main>

<?php  include 'includes/footer.php';  ?>