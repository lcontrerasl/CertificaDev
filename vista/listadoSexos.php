<?php
include_once '../modelo/Sexo.php';
include_once '../modelo/Conexion.php';

$sexo = new Sexo();
$sexos = $sexo->read('*', '', '');
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
                            <h1 class="page-header">Sexos</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3>Listado de Sexos</h3>
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
                                                for ($i = 0; $i < count($sexos); $i++) {
                                                    $sexoAux = $sexos[$i];
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <?= ($i + 1) ?> 
                                                        </td>
                                                        <td>
                                                            <?= $sexoAux['nombreSexo']; ?> 
                                                        </td>
                                                        <td>
                                                            <a href="edicionSexo.php?idSexo=<?= $sexoAux['idSexo']; ?>" class="btn btn-success">
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

                                                            <a href="../controlador/sexo/eliminar.php?idSexo=<?= $sexoAux['idSexo']; ?>" onclick="return validar()" class="btn btn-danger">
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
