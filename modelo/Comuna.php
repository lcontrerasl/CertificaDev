<?php

class Comuna {

    var $idComuna;
    var $nombreComuna;

    function __construct() {
        
    }

    function getIdComuna() {
        return $this->idComuna;
    }

    function getNombreComuna() {
        return $this->nombreComuna;
    }

    function setIdComuna($idComuna) {
        $this->idComuna = $idComuna;
    }

    function setNombreComuna($nombreComuna) {
        $this->nombreComuna = $nombreComuna;
    }

    function create() {
        $conexion = new Conexion();
        $conn = $conexion->obtenerConexion();

        $sql = 'INSERT INTO comuna '
                . '('
                . 'nombreComuna'
                . ') VALUES ('
                . '\'' . $this->nombreComuna . '\''
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

        $sql = 'SELECT ' . $params . ' FROM comuna ' . $inner . ' WHERE 1 = 1 ' . $filter . ' ORDER BY idComuna DESC';
        $result = $conn->query($sql);

        $comunas = Array();

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $comunas[] = $row;
            }
        } else {
            echo "0 results ";
        }
        $conn->close();
        return $comunas;
    }

    function update() {
        $conexion = new Conexion();
        $conn = $conexion->obtenerConexion();

        $sql = 'UPDATE comuna SET '
                . 'nombreComuna=\'' . $this->nombreComuna . '\' '
                . 'WHERE idComuna = ' . $this->idComuna;

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

        $sql = 'DELETE FROM comuna WHERE idComuna = ' . $this->idComuna;

        if ($conn->query($sql) === TRUE) {
            echo 'Record deleted successfully';
        } else {
            echo 'Error deleting record: ' . $conn->error;
        }

        $conn->close();
    }

}
