<?php

class Estado_postulacion {

    var $idEstado_postulacion;
    var $nombreEstado_postulacion;

    function __construct() {
        
    }

    function getIdEstado_postulacion() {
        return $this->idEstado_postulacion;
    }

    function getNombreEstado_postulacion() {
        return $this->nombreEstado_postulacion;
    }

    function setIdEstado_postulacion($idEstado_postulacion) {
        $this->idEstado_postulacion = $idEstado_postulacion;
    }

    function setNombreEstado_postulacion($nombreEstado_postulacion) {
        $this->nombreEstado_postulacion = $nombreEstado_postulacion;
    }

    function create() {
        $conexion = new Conexion();
        $conn = $conexion->obtenerConexion();

        $sql = 'INSERT INTO estado_postulacion '
                . '('
                . 'nombreEstado_postulacion'
                . ') VALUES ('
                . '\'' . $this->nombreEstado_postulacion . '\''
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

        $sql = 'SELECT ' . $params . ' FROM estado_postulacion ' . $inner . ' WHERE 1 = 1 ' . $filter . ' ORDER BY idEstado_postulacion DESC';
        $result = $conn->query($sql);

        $estado_postulaciones = Array();

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $estado_postulaciones[] = $row;
            }
        } else {
            //echo "0 results ";
        }
        $conn->close();
        return $estado_postulaciones;
    }

    function update() {
        $conexion = new Conexion();
        $conn = $conexion->obtenerConexion();

        $sql = 'UPDATE estado_postulacion SET '
                . 'nombreEstado_postulacion=\'' . $this->nombreEstado_postulacion . '\' '
                . 'WHERE idEstado_postulacion = ' . $this->idEstado_postulacion;

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

        $sql = 'DELETE FROM estado_postulacion WHERE idEstado_postulacion = ' . $this->idEstado_postulacion;

        if ($conn->query($sql) === TRUE) {
            echo 'Record deleted successfully';
        } else {
            echo 'Error deleting record: ' . $conn->error;
        }

        $conn->close();
    }

}
