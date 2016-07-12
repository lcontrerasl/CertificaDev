<?php
include_once '../modelo/Usuario.php';
include_once '../modelo/Conexion.php';

$usuario = new Usuario();
$usuarios = $usuario->read('*', '', 'AND idUsuario = ' . $_GET['idUsuario']);
$usuario = $usuarios[0];
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
                            <h1 class="page-header">Registro Usuario</h1>
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
                                        <form method="post" action="../controlador/usuario/editarUsuario.php">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Nombre</label>
                                                    <input type="text" name="nombreUsuario" class="form-control" value="<?= $usuario['nombreUsuario']; ?>">
                                                    <p class="help-block">Ingrese el nombre del usuario.</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Apellido Paterno</label>
                                                    <input type="text" name="ap_paternoUsuario" class="form-control" value="<?= $usuario['ap_paternoUsuario']; ?>">
                                                    <p class="help-block">Ingrese el apellido paterno del usuario.</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Apellido Materno</label>
                                                    <input type="text" name="ap_maternoUsuario" class="form-control" value="<?= $usuario['ap_maternoUsuario']; ?>">
                                                    <p class="help-block">Ingrese el apellido materno del usuario.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Rut</label>
                                                    <input type="text" name="rutUsuario" class="form-control" value="<?= $usuario['rutUsuario']; ?>">
                                                    <p class="help-block">Ingrese el rut del usuario.</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" name="passUsuario" class="form-control" value="<?= $usuario['passUsuario']; ?>">
                                                    <p class="help-block">Ingrese la password del usuario.</p>
                                                </div>
                                                <input type="hidden" name="idUsuario" value="<?= $usuario['idUsuario']; ?>">
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
