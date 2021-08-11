<?php

include('header.php');

if (isset($_POST['productSubmit'])) {
  unset($_POST['productSubmit']);

  if (!empty($_GET['edit'])) {
    $bPerfil->modifyPerfil($_GET['edit'], $_POST);
  } else {
    $bPerfil->savePerfil($_POST);
  }
}

$id = 0;
if (!empty($_GET['edit'])) {
  $id = $_GET['edit'];
}

$perfil = $bPerfil->getPerfil($id);

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->


  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Agregar/Editar Perfiles</h3>


      </div>
      <div class="card-body">
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <!-- /.card-header -->
            <!-- form start -->
            <form action="" method="post">
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input type="text" class="form-control" name="nombre" value="<?php echo $perfil->getNombre() ?>" id="exampleInputEmail1" placeholder="Nombre">
                </div>
                <!-- <div class="form-group">
                  <label for="exampleInputEmail1">Módulo</label>
                  <select name="modulo[]" multiple=multiple class="custom-select form-control-border" id="exampleSelectBorder">
                    <?php foreach ($bModule->getModulos() as $modulo) { ?>
                      <option value="<?php echo $modulo->getIDModulo() ?>"><?php echo $modulo->getNombre() ?></option>
                    <?php } ?>
                  </select>
                </div> -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" name="productSubmit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->