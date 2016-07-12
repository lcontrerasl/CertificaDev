<?php

class Educacion {

    var $idEducacion;
    var $nombreEducacion;

    function __construct() {
        
    }

    function getIdEducacion() {
        return $this->idEducacion;
    }

    function getNombreEducacion() {
        return $this->nombreEducacion;
    }

    function setIdEducacion($idEducacion) {
        $this->idEducacion = $idEducacion;
    }

    function setNombreEducacion($nombreEducacion) {
        $this->nombreEducacion = $nombreEducacion;
    }

    function create() {
        $conexion = new Conexion();
        $conn = $conexion->obtenerConexion();

        $sql = 'INSERT INTO educacion '
                . '('
                . 'nombreEducacion'
                . ') VALUES ('
                . '\'' . $this->nombreEducacion . '\''
                . ')';
        if ($conn->query($sql) === TRUE) {
            echo 'New record created successfully';
        } else {
            echo 'Error: ' . $sql . '<br>' . $conn->error;
        }
        $conn->close();
    }

    function read($params, $inner, $filter) {
        $conexion = new Conexion();
        $conn = $conexion->obtenerConexion();

        $sql = 'SELECT ' . $params . ' FROM educacion ' . $inner . ' WHERE 1 = 1 ' . $filter . ' ORDER BY idEducacion DESC';
        $result = $conn->query($sql);

        $educaciones = Array();

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $educaciones[] = $row;
            }
        } else {
            echo "0 results ";
        }
        $conn->close();
        return $educaciones;
    }

    function update() {
        $conexion = new Conexion();
        $conn = $conexion->obtenerConexion();

        $sql = 'UPDATE educacion SET '
                . 'nombreEducacion=\'' . $this->nombreEducacion . '\' '
                . 'WHERE idEducacion = ' . $this->idEducacion;

        if ($conn->query($sql) === TRUE) {
            echo 'Record updated successfully';
        } else {
            echo 'Error updating record: ' . $conn->error;
        }

        $conn->close();
    }

    function delete() {
        $conexion = new Conexion();
        $conn = $conexion->obtenerConexion();

        $sql = 'DELETE FROM educacion WHERE idEducacion = ' . $this->idEducacion;

        if ($conn->query($sql) === TRUE) {
            echo 'Record deleted successfully';
        } else {
            echo 'Error deleting record: ' . $conn->error;
        }

        $conn->close();
    }

}
