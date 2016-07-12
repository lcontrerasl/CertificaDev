<?php
include_once '../modelo/Sexo.php';
include_once '../modelo/Conexion.php';

$sexo = new Sexo();
$sexos = $sexo->read('*', '', 'AND idSexo = ' . $_GET['idSexo']);
$sexo = $sexos[0];
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
                            <h1 class="page-header">Registro Sexo</h1>
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
                                        <form method="post" action="../controlador/sexo/editarSexo.php">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Nombre</label>
                                                    <input type="text" name="nombreSexo" class="form-control" value="<?= $sexo['nombreSexo']; ?>">
                                                    <p class="help-block">Ingrese el rut del sexo.</p>
                                                </div>
                                                <input type="hidden" name="idSexo" value="<?= $sexo['idSexo']; ?>">
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
