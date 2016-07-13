<?php
include_once '../modelo/Modalidad.php';
include_once '../modelo/Conexion.php';

$modalidad = new Modalidad();
$modalidades = $modalidad->read('*', '', 'AND idModalidad = ' . $_GET['idModalidad']);
$modalidad = $modalidades[0];
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
                            <h1 class="page-header">Registro Modalidad</h1>
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
                                        <form method="post" action="../controlador/modalidad/editarModalidad.php">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Nombre</label>
                                                    <input type="text" name="nombreModalidad" class="form-control" value="<?= $modalidad['nombreModalidad']; ?>">
                                                    <p class="help-block">Ingrese el rut del modalidad.</p>
                                                </div>
                                                <input type="hidden" name="idModalidad" value="<?= $modalidad['idModalidad']; ?>">
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
