<!DOCTYPE html>
<html lang="es">
<?php
require "header.php";
?>

<body class="login">
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="back-card">
            <form class="box" action="index.php" method="POST">
              <input type="text" name="usuario" placeholder="Usuario">
              <input type="password" name="pass" placeholder="Contraseña">
              <input type="submit" name="login" value="Iniciar sesión">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<!-- <body>

  <form action="index.php" method="post">
    <div class="imgcontainer">
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="usuario"><b>Usuario</b></label>
      <input type="text" placeholder="Ingrese Usuario" name="usuario">

      <label for="pass"><b>Password</b></label>
      <input type="password" placeholder="Ingrese Contraseña" name="pass">
      <button type="submit" name="login"> Login </button>

    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" class="cancelbtn">Cancel</button>

    </div>
  </form>

  <pre> <?php echo var_dump($bUser->getUser(1)); ?> </pre>

</body> -->

</html>