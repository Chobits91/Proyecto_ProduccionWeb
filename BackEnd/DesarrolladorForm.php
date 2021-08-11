<?php

include('header.php');

if (isset($_POST['desarrolladorSubmit'])) {
  unset($_POST['desarrolladorSubmit']);

  if (!empty($_GET['edit'])) {
    $bDesarrollador->modifyDesarrollador($_GET['edit'], $_POST);
  } else {
    $bDesarrollador->saveDesarrollador($_POST);
  }
}

$id = 0;
if (!empty($_GET['edit'])) {
  $id = $_GET['edit'];
}

$desarrollador = $bDesarrollador->getDesarrollador($id);

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->


  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Agregar/Editar Desarrollador</h3>


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
                  <input type="text" class="form-control" name="nombre" value="<?php echo $desarrollador->getNombre() ?>" id="exampleInputEmail1" placeholder="Nombre">
                </div>
               
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" name="desarrolladorSubmit" class="btn btn-primary">Submit</button>
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
<?php
//include('footer.php'); 
?>