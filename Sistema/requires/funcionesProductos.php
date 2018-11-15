<?php
    /**
     *  CRUD PRODUCTOS.
     */

    function listarProductos()
    {
        $link = conectar();
        $sql = "SELECT  idProducto, prdNombre, prdPrecio, 
                        mkNombre, catNombre, 
                        prdPresentacion, prdStock, prdImagen
                    FROM productos p, marcas m, categorias c
                    WHERE p.idMarca=m.idMarca
                      AND p.idCategoria=c.idCategoria";
        $resultado = mysqli_query($link, $sql)
                                or die(mysqli_error($link));
        return $resultado;
    }


    function subirArchivo()
    {
    $ruta = "images/productos";

    $prdImagen='noDisponible.jpg';

    if( $_FILES['prdImagen']['error'] == 0 ){
        $temporal = $_FILES['prdImagen']['tmp_name'];
        $prdImagen = $_FILES['prdImagen']['name'];

        move_uploaded_file($temporal, $ruta.$prdImagen);
    }

    return $prdImagen;

}

    function agregarProducto()
    {
        $link = conectar();
        //Capturamos datos enviados por el form
        $prdNombre = $_POST['prdNombre'];
        $prdPrecio = $_POST['prdPrecio'];
        $idMarca = $_POST['idMarca'];
        $idCategoria = $_POST['idCategoria'];
        $prdPresentacion = $_POST['prdPresentacion'];
        $prdStock = $_POST['prdStock'];
        $prdImagen = subirArchivo();

        $sql = "INSERT INTO productos VALUES (NULL,'".$prdNombre."','".$prdPrecio."',
        '".$idMarca."','".$idCategoria."','".$prdPresentacion."','".$prdStock."',
        '".$prdImagen."')";

        $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));

        return $resultado;
    }

    function verProductoPorId()
    {
        $idProducto = $_GET['idProducto'];
        $link = conectar();
        $sql = "SELECT  idProducto, prdNombre, prdPrecio, 
                        mkNombre, catNombre, 
                        prdPresentacion, prdStock, prdImagen
                    FROM productos p, marcas m, categorias c
                    WHERE p.idMarca=m.idMarca
                      AND p.idCategoria=c.idCategoria
                      AND idProducto = ".$idProducto;
        $resultado = mysqli_query($link, $sql)
                            or die(mysqli_error($link));
        return $producto = mysqli_fetch_array($resultado);

    }

    //agregarProducto()
    //editarProducto()
    //borrarProducto()