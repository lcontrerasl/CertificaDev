<?php

class Modalidad {

    var $idModalidad;
    var $nombreModalidad;

    function __construct() {
        
    }

    function getIdModalidad() {
        return $this->idModalidad;
    }

    function getNombreModalidad() {
        return $this->nombreModalidad;
    }

    function setIdModalidad($idModalidad) {
        $this->idModalidad = $idModalidad;
    }

    function setNombreModalidad($nombreModalidad) {
        $this->nombreModalidad = $nombreModalidad;
    }

    function create() {
        $conexion = new Conexion();
        $conn = $conexion->obtenerConexion();

        $sql = 'INSERT INTO modalidad '
                . '('
                . 'nombreModalidad'
                . ') VALUES ('
                . '\'' . $this->nombreModalidad . '\''
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

        $sql = 'SELECT ' . $params . ' FROM modalidad ' . $inner . ' WHERE 1 = 1 ' . $filter . ' ORDER BY idModalidad DESC';
        $result = $conn->query($sql);

        $modalidades = Array();

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $modalidades[] = $row;
            }
        } else {
            echo "0 results ";
        }
        $conn->close();
        return $modalidades;
    }

    function update() {
        $conexion = new Conexion();
        $conn = $conexion->obtenerConexion();

        $sql = 'UPDATE modalidad SET '
                . 'nombreModalidad=\'' . $this->nombreModalidad . '\' '
                . 'WHERE idModalidad = ' . $this->idModalidad;

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

        $sql = 'DELETE FROM modalidad WHERE idModalidad = ' . $this->idModalidad;

        if ($conn->query($sql) === TRUE) {
            echo 'Record deleted successfully';
        } else {
            echo 'Error deleting record: ' . $conn->error;
        }

        $conn->close();
    }

}
