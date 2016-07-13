<?php
include_once '../modelo/Estado_postulacion.php';
include_once '../modelo/Conexion.php';

$estado_postulacion = new Estado_postulacion();
$estado_postulaciones = $estado_postulacion->read('*', '', 'AND idEstado_postulacion = ' . $_GET['idEstado_postulacion']);
$estado_postulacion = $estado_postulaciones[0];
?>
<!DOCTYPE html>
<html lang="en">

    <?php
    include_once './modulos/head.php';
    ?>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <?php
            include_once './modulos/nav.php';
            ?>

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Registro Estado de Postulación</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Basic Form Elements
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <form method="post" action="../controlador/estado_postulacion/editarEstado_postulacion.php">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Nombre</label>
                                                    <input type="text" name="nombreEstado_postulacion" class="form-control" value="<?= $estado_postulacion['nombreEstado_postulacion']; ?>">
                                                    <p class="help-block">Ingrese el rut del estado_postulacion.</p>
                                                </div>
                                                <input type="hidden" name="idEstado_postulacion" value="<?= $estado_postulacion['idEstado_postulacion']; ?>">
                                                <button type="submit" class="btn btn-default">Editar</button>
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
