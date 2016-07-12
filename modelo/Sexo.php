<?php

class Sexo {

    var $idSexo;
    var $nombreSexo;

    function __construct() {
        
    }

    function getIdSexo() {
        return $this->idSexo;
    }

    function getNombreSexo() {
        return $this->nombreSexo;
    }

    function setIdSexo($idSexo) {
        $this->idSexo = $idSexo;
    }

    function setNombreSexo($nombreSexo) {
        $this->nombreSexo = $nombreSexo;
    }

    function create() {
        $conexion = new Conexion();
        $conn = $conexion->obtenerConexion();

        $sql = 'INSERT INTO sexo '
                . '('
                . 'nombreSexo'
                . ') VALUES ('
                . '\'' . $this->nombreSexo . '\''
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

        $sql = 'SELECT ' . $params . ' FROM sexo ' . $inner . ' WHERE 1 = 1 ' . $filter . ' ORDER BY idSexo DESC';
        $result = $conn->query($sql);

        $sexos = Array();

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $sexos[] = $row;
            }
        } else {
            echo "0 results ";
        }
        $conn->close();
        return $sexos;
    }

    function update() {
        $conexion = new Conexion();
        $conn = $conexion->obtenerConexion();

        $sql = 'UPDATE sexo SET '
                . 'nombreSexo=\'' . $this->nombreSexo . '\' '
                . 'WHERE idSexo = ' . $this->idSexo;

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

        $sql = 'DELETE FROM sexo WHERE idSexo = ' . $this->idSexo;

        if ($conn->query($sql) === TRUE) {
            echo 'Record deleted successfully';
        } else {
            echo 'Error deleting record: ' . $conn->error;
        }

        $conn->close();
    }

}
