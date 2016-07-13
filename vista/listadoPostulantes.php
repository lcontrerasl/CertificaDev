<?php
include_once '../modelo/Postulante.php';
include_once '../modelo/Estado_postulacion.php';
include_once '../modelo/Conexion.php';

$postulante = new Postulante();
$postulantes = $postulante->read('*', '', '');
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
                            <h1 class="page-header">Postulantes</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3>Listado de Postulantes</h3>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        # 
                                                    </th>
                                                    <th>
                                                        Rut
                                                    </th>
                                                    <th>
                                                        Nombre
                                                    </th>
                                                    <th>
                                                        Estado
                                                    </th>
                                                    <th>

                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                for ($i = 0; $i < count($postulantes); $i++) {
                                                    $postulanteAux = $postulantes[$i];
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <?= ($i + 1) ?> 
                                                        </td>
                                                        <td>
                                                            <?= $postulanteAux['rutPostulante']; ?> 
                                                        </td>
                                                        <td>
                                                            <?= $postulanteAux['nombrePostulante']; ?> 
                                                        </td>
                                                        <td>
                                                            <?php
                                                            $estado_postulacion = new Estado_postulacion();
                                                            $estado_postulaciones = $estado_postulacion->read('*', '', 'AND idEstado_postulacion = ' . $postulanteAux['estado_postulacion_idEstado_postulacion']);
                                                            $estado_postulacion = $estado_postulaciones[0];
                                                            ?>
                                                            <?= $estado_postulacion['nombreEstado_postulacion']; ?> 
                                                            <?php
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <a href="edicionPostulante.php?idPostulante=<?= $postulanteAux['idPostulante']; ?>" class="btn btn-success">
                                                                Detalle
                                                            </a>
                                                            <script>
                                                                function validar() {
                                                                    var r = confirm('Está seguro de eliminar esta entidad?');
                                                                    if (r) {
                                                                        return true;
                                                                    } else {
                                                                        return false;
                                                                    }
                                                                }
                                                            </script>

                                                            <a href="../controlador/postulante/eliminar.php?idPostulante=<?= $postulanteAux['idPostulante']; ?>" onclick="return validar()" class="btn btn-danger">
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
