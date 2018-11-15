<?php
    /**
     *  CRUD PRODUCTOS.
     */

    function listarProductos()
    {
        $link = conectar();
        $sql = "SELECT idProducto, prdNombre, prdPrecio, 
                        m.mkNombre, c.catNombre, 
                        prdPresentacion, prdStock, prdImagen
                    FROM productos p, marcas m, categorias c
                    WHERE p.idMarca=m.idMarca
                      AND p.idCategoria=c.idCategoria";
        $resultado = mysqli_query($link, $sql)
                                or die(mysqli_error($link));
        return $resultado;
    }

    //verProductoPorId()
    //agregarProducto()
    //editarProducto()
    //borrartProducto()