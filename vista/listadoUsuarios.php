<?php
include_once '../modelo/Usuario.php';
include_once '../modelo/Conexion.php';

$usuario = new Usuario();
$usuarios = $usuario->read('*', '', '');
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
                            <h1 class="page-header">Usuarios</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3>Listado de Usuarios</h3>
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
                                                        Rut
                                                    </th>
                                                    <th>

                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                for ($i = 0; $i < count($usuarios); $i++) {
                                                    $usuarioAux = $usuarios[$i];
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <?= ($i + 1) ?> 
                                                        </td>
                                                        <td>
                                                            <?= $usuarioAux['nombreUsuario'] . ' ' . $usuarioAux['ap_paternoUsuario']; ?> 
                                                        </td>
                                                        <td>
                                                            <?= $usuarioAux['rutUsuario']; ?> 
                                                        </td>
                                                        <td>
                                                            <a href="edicionUsuario.php?idUsuario=<?= $usuarioAux['idUsuario']; ?>" class="btn btn-success">
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
