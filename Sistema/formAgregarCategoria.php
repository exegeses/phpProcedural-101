<?php  include 'includes/header.html';  ?>
<?php  include 'includes/nav.php';  ?>

<main class="container">
    <h1>Formulario de alta de una Categoria</h1>

<form action="agregarCategoria.php" method="post">
	Categoria:
	<input type="text" name="catNombre" class="form-control">
	<br>
	<button class="btn btn-success">Enviar</button>
	<a href="adminCategorias.php" class="btn btn-light">
	Volver al panel de Categorias</a>
</form>

</main>

<?php  include 'includes/footer.php';  ?>