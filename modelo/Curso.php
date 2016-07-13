<?php

class Curso {

    var $idCurso;
    var $nombreCurso;

    function __construct() {
        
    }

    function getIdCurso() {
        return $this->idCurso;
    }

    function getNombreCurso() {
        return $this->nombreCurso;
    }

    function setIdCurso($idCurso) {
        $this->idCurso = $idCurso;
    }

    function setNombreCurso($nombreCurso) {
        $this->nombreCurso = $nombreCurso;
    }

    function create() {
        $conexion = new Conexion();
        $conn = $conexion->obtenerConexion();

        $sql = 'INSERT INTO curso '
                . '('
                . 'nombreCurso'
                . ') VALUES ('
                . '\'' . $this->nombreCurso . '\''
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

        $sql = 'SELECT ' . $params . ' FROM curso ' . $inner . ' WHERE 1 = 1 ' . $filter . ' ORDER BY idCurso DESC';
        $result = $conn->query($sql);

        $cursos = Array();

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $cursos[] = $row;
            }
        } else {
            echo "0 results ";
        }
        $conn->close();
        return $cursos;
    }

    function update() {
        $conexion = new Conexion();
        $conn = $conexion->obtenerConexion();

        $sql = 'UPDATE curso SET '
                . 'nombreCurso=\'' . $this->nombreCurso . '\' '
                . 'WHERE idCurso = ' . $this->idCurso;

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

        $sql = 'DELETE FROM curso WHERE idCurso = ' . $this->idCurso;

        if ($conn->query($sql) === TRUE) {
            echo 'Record deleted successfully';
        } else {
            echo 'Error deleting record: ' . $conn->error;
        }

        $conn->close();
    }

}
