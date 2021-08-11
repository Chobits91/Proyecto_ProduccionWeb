<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);

include('../Helpers/conecction.php');
include_once('../LogicaNegocio/loginBussines.php');
include_once('../LogicaNegocio/userBussines.php');
include_once('../LogicaNegocio/perfilBussines.php');
include_once('../LogicaNegocio/gamesBussines.php');
include_once('../LogicaNegocio/categoriaBussines.php');
include_once('../LogicaNegocio/plataformaBussines.php');
include_once('../LogicaNegocio/desarrolladorBussines.php');
include_once('../Funciones/funciones.php');
$bLogin = new loginBussines($con);
$bUser = new userBussines($con);
$bPerfil = new perfilBusiness($con);
$bProduct = new gamesBussines($con);
$bCategory = new categoriaBussines($con);
$bPlataforma = new plataformaBussines($con);
$bDesarrollador = new desarrolladorBussines($con);

if (isset($_POST['login'])) {
    $bLogin->login($_POST);
}
if (isset($_GET['logout'])) {
    $bLogin->logout();
}
if (!$bLogin->isLog()) {
    //header('Location:login.php');
}
?>

<header>

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../FrontEnd/lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../FrontEnd/estilos/estilos.css">
        <!-- Estilo Login -->
        <link rel="stylesheet" href="../FrontEnd/estilos/EstiloLogin.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
        <!--fuentes-->
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <title>GAME STORE</title>

    </head>

    <nav class="navbar navbar-expand-lg navbar-expand-md fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="../FrontEnd/index.php"><img src="../FrontEnd/imagenes/iconos/iconologo30.jpg" alt="Icono logo" width="30" height="30" class="img-fluid rounded-circle float-left">GAMESTORE</a></li>
                <li class="nav-item"><a class="nav-link" href="UsuariosListado.php"><i class="fas fa-users fa-lg"></i> USUARIOS</a></li>
                <li class="nav-item"><a class="nav-link" href="PerfilesListado.php"><i class="fas fa-id-badge fa-lg"></i> PERFILES</a></li>
                <!-- <li class="nav-item"><a class="nav-link" href="ComentariosListado.php"><i class="fas fa-comment fa-lg"></i> COMENTARIOS</a></li> -->
                <li class="nav-item"><a class="nav-link" href="ProductosListado.php"><i class="fab fa-product-hunt fa-lg"></i> PRODUCTOS</a></li>
                <li class="nav-item"><a class="nav-link" href="CategoriasListado.php"><i class="fas fa-copyright fa-lg"></i> CATEGORÍAS</a></li>
                <li class="nav-item"><a class="nav-link" href="PlataformasListado.php"><i class="fab fa-product-hunt fa-lg"></i> PLATAFORMAS</a></li>
                <li class="nav-item"><a class="nav-link" href="DesarrolladorListado.php"><i class="fas fa-code fa-lg"></i></i> DESARROLLADOR</a></li>
                <li class="nav-item"><a class="nav-link" href="login.php"><i class="fas fa-sign-out-alt fa-lg"></i></i></i> LOGOUT</a></li>
            </ul>
        </div>
    </nav>

</header>