<?php 
	$prdImagen = $_FILES['prdImagen'];
	//echo $_FILES['prdImagen']['type'];
?>
<pre><?php print_r($prdImagen) ?></pre>
<?php 
	
	function subirArchivo(){
			$ruta = "fotos/";
	
			$prdImagen='noDisponible.jpg';

		if( $_FILES['prdImagen']['error'] == 0 ){
			$temporal = $_FILES['prdImagen']['tmp_name'];
			$prdImagen = $_FILES['prdImagen']['name'];

			move_uploaded_file($temporal, $ruta.$prdImagen);
		}

		return $prdImagen;

	}
?>
