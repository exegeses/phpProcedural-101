<?php
    /**
     *  CRUD USUARIOS.
     * User: educacionit
     */

    function listarUsuarios()
    {
        $link = conectar();
        $sql = "SELECT idUsuario, usuNombre, usuApellido, usuEmail
                        FROM usuarios";
        $resultado = mysqli_query($link, $sql)
                                or die(mysqli_error($link));
        return $resultado;
    }

    //verUsuarioPorId()
    //agregarUsuario()
    //editarUsuario()
    //borrartUsuario()