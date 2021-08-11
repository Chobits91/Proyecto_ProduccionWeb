<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);

include('../Helpers/conecction.php');
include_once('../LogicaNegocio/loginBussines.php');
include_once('../LogicaNegocio/userBussines.php');
include_once('../LogicaNegocio/gamesBussines.php');
include_once('../LogicaNegocio/categoriaBussines.php');
include_once('../LogicaNegocio/plataformaBussines.php');
include_once('../LogicaNegocio/perfilBussines.php');
include_once('../LogicaNegocio/desarrolladorBussines.php');
include_once('../Funciones/funciones.php');


$bLogin = new loginBussines($con);
$bUser = new userBussines($con);
$bPerfil = new perfilBusiness($con);
$bProduct = new gamesBussines($con);
$bCategory = new categoriaBussines($con);
$bPlataforma = new plataformaBussines($con);
$bDesarrollador = new desarrolladorBussines($con);

// if (isset($_POST['login'])) {
//     $bLogin->login($_POST);
// }

// if (isset($_GET['logout'])) {
//     $bLogin->logout();
// }

// if (!$bLogin->isLog()) {
//     
// }
?>

<header>

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="estilos/estilos.css">
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
                <li class="nav-item"><a class="nav-link" href="index.php"><img src="imagenes/iconos/iconologo30.jpg" alt="Icono logo" width="30" height="30" class="img-fluid rounded-circle float-left">GAMESTORE</a></li>
                <li class="nav-item"><a class="nav-link" href="listadoproductos.php"><img src="imagenes/iconos/iconocatalogo30.png" alt="Icono catálogo 30" width="30" height="30" class="img-fluid float-left">CATÁLOGO</a></li>
                <li class="nav-item"><a class="nav-link" href="contacto.php"><img src="imagenes/iconos/iconocontacto30.png" alt="Icono contacto 30" width="30" height="30" class="img-fluid float-left">CONTACTO</a></li>
                <li class="nav-item"><a class="nav-link" href="../BackEnd/login.php"><i class="fas fa-sign-in-alt fa-lg"></i> LOGIN</a></li>
            </ul>
        </div>
    </nav>

</header>