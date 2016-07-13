<?php
session_start();
$usuarioConectado;
if (!isset($_SESSION['usuarioConectado'])) {
    $url = '../';
    header('Location: ' . $url, true, $permanet ? 301 : 302);
    exit();
} else {
    $usuarioConectado = $_SESSION['usuarioConectado'];
}
?>
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Sistema de Administración</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i><?= $usuarioConectado['nombreUsuario'] . ' ' . $usuarioConectado['ap_paternoUsuario']; ?>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="edicionUsuario.php?idUsuario=<?= $usuarioConectado['idUsuario']; ?>"><i class="fa fa-user fa-fw"></i> Perfil de Usuario</a>
                </li>
                <li class="divider"></li>
                <li><a href="../"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="#"><i class="fa fa-map-marker fa-fw"></i> Comuna<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="registroComuna.php">Registro</a>
                        </li>
                        <li>
                            <a href="listadoComunas.php">Listado</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-users fa-fw"></i> Sexo<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="registroSexo.php">Registro</a>
                        </li>
                        <li>
                            <a href="listadoSexos.php">Listado</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-university fa-fw"></i> Educación<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="registroEducacion.php">Registro</a>
                        </li>
                        <li>
                            <a href="listadoEducaciones.php">Listado</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-play fa-fw"></i> Curso<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="registroCurso.php">Registro</a>
                        </li>
                        <li>
                            <a href="listadoCursos.php">Listado</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-sun-o fa-fw"></i> Modalidad<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="registroModalidad.php">Registro</a>
                        </li>
                        <li>
                            <a href="listadoModalidades.php">Listado</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-magic fa-fw"></i> Estado Postulación<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="registroEstado_postulacion.php">Registro</a>
                        </li>
                        <li>
                            <a href="listadoEstado_postulaciones.php">Listado</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-angellist fa-fw"></i> Postulación<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="listadoPostulantes.php">Listado</a>
                        </li>
                        <li>
                            <a href="buscadores.php">Buscadores</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>