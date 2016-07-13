<?php
include_once '../modelo/Conexion.php';
include_once '../modelo/Sexo.php';
include_once '../modelo/Comuna.php';
include_once '../modelo/Educacion.php';
include_once '../modelo/Modalidad.php';
include_once '../modelo/Curso.php';
$sexo = new Sexo();
$sexos = $sexo->read('*', '', '');
$comuna = new Comuna();
$comunas = $comuna->read('*', '', '');
$educacion = new Educacion();
$educaciones = $educacion->read('*', '', '');
$modalidad = new Modalidad();
$modalidades = $modalidad->read('*', '', '');
$curso = new Curso();
$cursos = $curso->read('*', '', '');
?>
<!DOCTYPE html>
<html lang="en">

    <?php
    include_once './modulos/head.php';
    ?>

    <body>

        <div id="wrapper">

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Registro Postulante</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Formulario para el ingreso de Postulantes
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <form method="post" action="../controlador/postulante/registrarPostulante.php">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Rut</label>
                                                    <input type="text" name="rutPostulante" class="form-control">
                                                    <p class="help-block">Ingrese el rut del postulante.</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Nombre</label>
                                                    <input type="text" name="nombrePostulante" class="form-control">
                                                    <p class="help-block">Ingrese el nombre del postulante.</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Apellido Paterno</label>
                                                    <input type="text" name="ap_paternoPostulante" class="form-control">
                                                    <p class="help-block">Ingrese el apellido paterno del postulante.</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Apellido Materno</label>
                                                    <input type="text" name="ap_maternoPostulante" class="form-control">
                                                    <p class="help-block">Ingrese el apellido materno del postulante.</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Fecha Nacimiento</label>
                                                    <input type="date" name="fechaNacPostulante" class="form-control">
                                                    <p class="help-block">Ingrese la fecha de nacimiento postulante.</p>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label>Sexo</label>
                                                        <?php
                                                        for ($i = 0; $i < count($sexos); $i++) {
                                                            $sexoAux = $sexos[$i];
                                                            ?>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="sexo_idSexo" id="sexo_idSexo" value="<?= $sexoAux['idSexo']; ?>"><?= $sexoAux['nombreSexo']; ?>
                                                                </label>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                    <p class="help-block">Ingrese el sexo del postulante.</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Teléfono</label>
                                                    <input type="text" name="fonoPostulante" class="form-control">
                                                    <p class="help-block">Ingrese el teléfono del postulante.</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="email" name="mailPostulante" class="form-control">
                                                    <p class="help-block">Ingrese el email del postulante.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Dirección</label>
                                                    <input type="text" name="direccionPostulante" class="form-control">
                                                    <p class="help-block">Ingrese la dirección del postulante.</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Comuna</label>
                                                    <select name="comuna_idComuna" class="form-control">
                                                        <?php
                                                        for ($i = 0; $i < count($comunas); $i++) {
                                                            $comuna = $comunas[$i];
                                                            ?>
                                                            <option value="<?= $comuna['idComuna']; ?>">
                                                                <?= $comuna['nombreComuna']; ?>
                                                            </option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    <p class="help-block">Ingrese la comuna del postulante.</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Educación</label>
                                                    <select name="educacion_idEducacion" class="form-control">
                                                        <?php
                                                        for ($i = 0; $i < count($educaciones); $i++) {
                                                            $educacion = $educaciones[$i];
                                                            ?>
                                                            <option value="<?= $educacion['idEducacion']; ?>">
                                                                <?= $educacion['nombreEducacion']; ?>
                                                            </option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    <p class="help-block">Ingrese la educación del postulante.</p>
                                                </div>
                                                <script>
                                                    function mostrar_cant_anos() {
                                                        if ($('#exp_prog').prop('checked')) {
                                                            $('#cant_anos').show();
                                                        } else {
                                                            $('#cant_anos').hide();
                                                        }
                                                    }
                                                </script>

                                                <div class="form-group">
                                                    <label>Experiencia laboral en el área de la programación</label>
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" id="exp_prog" onclick="mostrar_cant_anos()">
                                                    </label>
                                                </div>
                                                <div class="form-group" id="cant_anos" style="display: none">
                                                    <label>Experiencia Laboral</label>
                                                    <input type="number" value="0" min="0" name="experienciaPostulante" class="form-control">
                                                    <p class="help-block">Ingrese cantidad de años.</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Modalidad</label>
                                                    <select name="modalidad_idModalidad" class="form-control">
                                                        <?php
                                                        for ($i = 0; $i < count($modalidades); $i++) {
                                                            $modalidad = $modalidades[$i];
                                                            ?>
                                                            <option value="<?= $modalidad['idModalidad']; ?>">
                                                                <?= $modalidad['nombreModalidad']; ?>
                                                            </option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    <p class="help-block">Ingrese la educación del postulante.</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Curso</label>
                                                    <select name="curso_idCurso" class="form-control">
                                                        <?php
                                                        for ($i = 0; $i < count($cursos); $i++) {
                                                            $curso = $cursos[$i];
                                                            ?>
                                                            <option value="<?= $curso['idCurso']; ?>">
                                                                <?= $curso['nombreCurso']; ?>
                                                            </option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    <p class="help-block">Ingrese la educación del postulante.</p>
                                                </div>
                                                <button type="submit" class="btn btn-default">Guardar</button>
                                                <button type="reset" class="btn btn-default">Limpiar</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- Librerías -->
        <?php
        include_once './modulos/librerias.php';
        ?>

    </body>

</html>
