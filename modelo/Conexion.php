<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conexion
 *
 * @author frank
 */
class Conexion {

    function __construct() {
        
    }

    function obtenerConexion() {
        $conn = mysqli_connect('localhost', 'root', '', 'certificadev');
        if (mysqli_connect_errno()) {
            echo 'No se pudo conectar ' . mysqli_connect_error();
        }
        return $conn;
    }

}
