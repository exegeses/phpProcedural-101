<?php
	require 'requires/conexion.php';
	require 'requires/funcionesMarcas.php';
	$chequeo = agregarMarca();
?>
<?php  include 'includes/header.html';  ?>
<?php  include 'includes/nav.php';  ?>

<main class="container">
    <h1>Alta de una nueva Marca</h1>
<?php

	if($chequeo)
	{

?>
    <div class="alert alert-success">

   		 Marca agregada con éxito

   		 <br>
   		 <a href="formAgregarMarca.php" class="btn btn-light">Agregar otra Marca</a>
   		 <a href="adminMarcas.php" class="btn btn-light">Volver al panel de Marcas</a>
    </div>

<?php

	}

?>

</main>

<?php  include 'includes/footer.php';  ?>