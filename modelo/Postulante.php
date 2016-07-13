<?php

class Postulante {

    var $idPostulante;
    var $nombrePostulante;
    var $ap_paternoPostulante;
    var $ap_maternoPostulante;
    var $rutPostulante;
    var $mailPostulante;
    var $fonoPostulante;
    var $direccionPostulante;
    var $experienciaPostulante;
    var $fechaNacPostulante;
    var $sexo_idSexo;
    var $curso_idCurso;
    var $comuna_idComuna;
    var $modalidad_idModalidad;
    var $educacion_idEducacion;
    var $estado_postulacion_idEstado_postulacion;

    function __construct() {
        
    }

    function getIdPostulante() {
        return $this->idPostulante;
    }

    function getNombrePostulante() {
        return $this->nombrePostulante;
    }

    function getAp_paternoPostulante() {
        return $this->ap_paternoPostulante;
    }

    function getAp_maternoPostulante() {
        return $this->ap_maternoPostulante;
    }

    function getRutPostulante() {
        return $this->rutPostulante;
    }

    function getMailPostulante() {
        return $this->mailPostulante;
    }

    function getFonoPostulante() {
        return $this->fonoPostulante;
    }

    function getDireccionPostulante() {
        return $this->direccionPostulante;
    }

    function getExperienciaPostulante() {
        return $this->experienciaPostulante;
    }

    function getFechaNacPostulante() {
        return $this->fechaNacPostulante;
    }

    function getSexo_idSexo() {
        return $this->sexo_idSexo;
    }

    function getCurso_idCurso() {
        return $this->curso_idCurso;
    }

    function getComuna_idComuna() {
        return $this->comuna_idComuna;
    }

    function getModalidad_idModalidad() {
        return $this->modalidad_idModalidad;
    }

    function getEducacion_idEducacion() {
        return $this->educacion_idEducacion;
    }

    function getEstado_postulacion_idEstado_postulacion() {
        return $this->estado_postulacion_idEstado_postulacion;
    }

    function setIdPostulante($idPostulante) {
        $this->idPostulante = $idPostulante;
    }

    function setNombrePostulante($nombrePostulante) {
        $this->nombrePostulante = $nombrePostulante;
    }

    function setAp_paternoPostulante($ap_paternoPostulante) {
        $this->ap_paternoPostulante = $ap_paternoPostulante;
    }

    function setAp_maternoPostulante($ap_maternoPostulante) {
        $this->ap_maternoPostulante = $ap_maternoPostulante;
    }

    function setRutPostulante($rutPostulante) {
        $this->rutPostulante = $rutPostulante;
    }

    function setMailPostulante($mailPostulante) {
        $this->mailPostulante = $mailPostulante;
    }

    function setFonoPostulante($fonoPostulante) {
        $this->fonoPostulante = $fonoPostulante;
    }

    function setDireccionPostulante($direccionPostulante) {
        $this->direccionPostulante = $direccionPostulante;
    }

    function setExperienciaPostulante($experienciaPostulante) {
        $this->experienciaPostulante = $experienciaPostulante;
    }

    function setFechaNacPostulante($fechaNacPostulante) {
        $this->fechaNacPostulante = $fechaNacPostulante;
    }

    function setSexo_idSexo($sexo_idSexo) {
        $this->sexo_idSexo = $sexo_idSexo;
    }

    function setCurso_idCurso($curso_idCurso) {
        $this->curso_idCurso = $curso_idCurso;
    }

    function setComuna_idComuna($comuna_idComuna) {
        $this->comuna_idComuna = $comuna_idComuna;
    }

    function setModalidad_idModalidad($modalidad_idModalidad) {
        $this->modalidad_idModalidad = $modalidad_idModalidad;
    }

    function setEducacion_idEducacion($educacion_idEducacion) {
        $this->educacion_idEducacion = $educacion_idEducacion;
    }

    function setEstado_postulacion_idEstado_postulacion($estado_postulacion_idEstado_postulacion) {
        $this->estado_postulacion_idEstado_postulacion = $estado_postulacion_idEstado_postulacion;
    }

    function create() {
        $conexion = new Conexion();
        $conn = $conexion->obtenerConexion();

        $sql = 'INSERT INTO postulante '
                . '('
                . 'nombrePostulante,'
                . 'ap_paternoPostulante,'
                . 'ap_maternoPostulante,'
                . 'rutPostulante,'
                . 'mailPostulante,'
                . 'fonoPostulante,'
                . 'direccionPostulante,'
                . 'experienciaPostulante,'
                . 'fechaNacPostulante,'
                . 'sexo_idSexo,'
                . 'curso_idCurso,'
                . 'comuna_idComuna,'
                . 'modalidad_idModalidad,'
                . 'educacion_idEducacion,'
                . 'estado_postulacion_idEstado_postulacion'
                . ') VALUES ('
                . '\'' . $this->nombrePostulante . '\','
                . '\'' . $this->ap_paternoPostulante . '\','
                . '\'' . $this->ap_maternoPostulante . '\','
                . '\'' . $this->rutPostulante . '\','
                . '\'' . $this->mailPostulante . '\','
                . '\'' . $this->fonoPostulante . '\','
                . '\'' . $this->direccionPostulante . '\','
                . '\'' . $this->experienciaPostulante . '\','
                . '\'' . $this->fechaNacPostulante . '\','
                . '' . $this->sexo_idSexo . ','
                . '' . $this->curso_idCurso . ','
                . '' . $this->comuna_idComuna . ','
                . '' . $this->modalidad_idModalidad . ','
                . '' . $this->educacion_idEducacion . ','
                . '' . $this->estado_postulacion_idEstado_postulacion . ''
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

        $sql = 'SELECT ' . $params . ' FROM postulante ' . $inner . ' WHERE 1 = 1 ' . $filter . ' ORDER BY idPostulante DESC';
        $result = $conn->query($sql);

        $postulantes = Array();

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $postulantes[] = $row;
            }
        } else {
            //echo "0 results ";
        }
        $conn->close();
        return $postulantes;
    }

    function update() {
        $conexion = new Conexion();
        $conn = $conexion->obtenerConexion();

        $sql = 'UPDATE postulante SET '
                . 'nombrePostulante=\'' . $this->nombrePostulante . '\', '
                . 'ap_paternoPostulante=\'' . $this->ap_paternoPostulante . '\', '
                . 'ap_maternoPostulante=\'' . $this->ap_maternoPostulante . '\', '
                . 'rutPostulante=\'' . $this->rutPostulante . '\', '
                . 'mailPostulante=\'' . $this->mailPostulante . '\', '
                . 'fonoPostulante=\'' . $this->fonoPostulante . '\', '
                . 'direccionPostulante=\'' . $this->direccionPostulante . '\', '
                . 'experienciaPostulante=\'' . $this->experienciaPostulante . '\', '
                . 'fechaNacPostulante=\'' . $this->fechaNacPostulante . '\', '
                . 'sexo_idSexo=\'' . $this->sexo_idSexo . '\', '
                . 'curso_idCurso=\'' . $this->curso_idCurso . '\', '
                . 'comuna_idComuna=\'' . $this->comuna_idComuna . '\', '
                . 'modalidad_idModalidad=\'' . $this->modalidad_idModalidad . '\', '
                . 'educacion_idEducacion=\'' . $this->educacion_idEducacion . '\', '
                . 'estado_postulacion_idEstado_postulacion=\'' . $this->estado_postulacion_idEstado_postulacion . '\' '
                . 'WHERE idPostulante = ' . $this->idPostulante;

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

        $sql = 'DELETE FROM postulante WHERE idPostulante = ' . $this->idPostulante;

        if ($conn->query($sql) === TRUE) {
            echo 'Record deleted successfully';
        } else {
            echo 'Error deleting record: ' . $conn->error;
        }

        $conn->close();
    }

}
