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
                                    Formulario para el ingreso de Usuarios
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <form method="post" action="../controlador/usuario/registrarUsuario.php">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Nombre</label>
                                                    <input type="text" name="nombreUsuario" class="form-control">
                                                    <p class="help-block">Ingrese el nombre del usuario.</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Apellido Paterno</label>
                                                    <input type="text" name="ap_paternoUsuario" class="form-control">
                                                    <p class="help-block">Ingrese el apellido paterno del usuario.</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Apellido Materno</label>
                                                    <input type="text" name="ap_maternoUsuario" class="form-control">
                                                    <p class="help-block">Ingrese el apellido materno del usuario.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Rut</label>
                                                    <input type="text" name="rutUsuario" class="form-control">
                                                    <p class="help-block">Ingrese el rut del usuario.</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" name="passUsuario" class="form-control">
                                                    <p class="help-block">Ingrese la password del usuario.</p>
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
