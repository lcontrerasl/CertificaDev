<?php
include_once '../modelo/Estado_postulacion.php';
include_once '../modelo/Conexion.php';

$estado_postulacion = new Estado_postulacion();
$estado_postulaciones = $estado_postulacion->read('*', '', '');
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
                            <h1 class="page-header">Estado de Postulaciones</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3>Listado Estado de Postulaciones</h3>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        # 
                                                    </th>
                                                    <th>
                                                        Nombre
                                                    </th>
                                                    <th>

                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                for ($i = 0; $i < count($estado_postulaciones); $i++) {
                                                    $estado_postulacionAux = $estado_postulaciones[$i];
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <?= ($i + 1) ?> 
                                                        </td>
                                                        <td>
                                                            <?= $estado_postulacionAux['nombreEstado_postulacion']; ?> 
                                                        </td>
                                                        <td>
                                                            <a href="edicionEstado_postulacion.php?idEstado_postulacion=<?= $estado_postulacionAux['idEstado_postulacion']; ?>" class="btn btn-success">
                                                                Detalle
                                                            </a>
                                                            <a href="" class="btn btn-danger">
                                                                Eliminar
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
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
