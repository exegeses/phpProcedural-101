<?php

    const SERVER    = 'localhost';
    const USUARIO   = 'root';
    const CLAVE     = '';
    const BASE      = 'catalogo';

    function conectar(){
        $link = mysqli_connect(SERVER, USUARIO, CLAVE, BASE);
        //mysqli_set_charset($link, 'utf8');
        return $link;
    }