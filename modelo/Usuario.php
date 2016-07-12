<?php

class Usuario {

    var $idUsuario;
    var $nombreUsuario;
    var $ap_paternoUsuario;
    var $ap_maternoUsuario;
    var $rutUsuario;
    var $passUsuario;

    function __construct() {
        
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getNombreUsuario() {
        return $this->nombreUsuario;
    }

    function getAp_paternoUsuario() {
        return $this->ap_paternoUsuario;
    }

    function getAp_maternoUsuario() {
        return $this->ap_maternoUsuario;
    }

    function getRutUsuario() {
        return $this->rutUsuario;
    }

    function getPassUsuario() {
        return $this->passUsuario;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setNombreUsuario($nombreUsuario) {
        $this->nombreUsuario = $nombreUsuario;
    }

    function setAp_paternoUsuario($ap_paternoUsuario) {
        $this->ap_paternoUsuario = $ap_paternoUsuario;
    }

    function setAp_maternoUsuario($ap_maternoUsuario) {
        $this->ap_maternoUsuario = $ap_maternoUsuario;
    }

    function setRutUsuario($rutUsuario) {
        $this->rutUsuario = $rutUsuario;
    }

    function setPassUsuario($passUsuario) {
        $this->passUsuario = $passUsuario;
    }

    function create() {
        $conexion = new Conexion();
        $conn = $conexion->obtenerConexion();

        $sql = 'INSERT INTO usuario '
                . '('
                . 'nombreUsuario,'
                . 'ap_paternoUsuario,'
                . 'ap_maternoUsuario,'
                . 'rutUsuario,'
                . 'passUsuario'
                . ') VALUES ('
                . '\'' . $this->nombreUsuario . '\','
                . '\'' . $this->ap_paternoUsuario . '\','
                . '\'' . $this->ap_maternoUsuario . '\','
                . '\'' . $this->rutUsuario . '\','
                . '\'' . $this->passUsuario . '\''
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

        $sql = 'SELECT ' . $params . ' FROM usuario ' . $inner . ' WHERE 1 = 1 ' . $filter . ' ORDER BY idUsuario DESC';
        $result = $conn->query($sql);

        $usuarios = Array();

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $usuarios[] = $row;
            }
        } else {
            echo "0 results ";
        }
        $conn->close();
        return $usuarios;
    }

    function update() {
        $conexion = new Conexion();
        $conn = $conexion->obtenerConexion();

        $sql = 'UPDATE usuario SET '
                . 'nombreUsuario=\'' . $this->nombreUsuario . '\', '
                . 'ap_paternoUsuario=\'' . $this->ap_paternoUsuario . '\', '
                . 'ap_maternoUsuario=\'' . $this->ap_maternoUsuario . '\', '
                . 'rutUsuario=\'' . $this->rutUsuario . '\', '
                . 'passUsuario=\'' . $this->passUsuario . '\' '
                . 'WHERE idUsuario = ' . $this->idUsuario;

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

        $sql = 'DELETE FROM usuario WHERE idUsuario = ' . $this->idUsuario;

        if ($conn->query($sql) === TRUE) {
            echo 'Record deleted successfully';
        } else {
            echo 'Error deleting record: ' . $conn->error;
        }

        $conn->close();
    }

}
