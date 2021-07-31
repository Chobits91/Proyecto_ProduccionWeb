<?php

include('header.php');

if (isset($_POST['categorySubmit'])) {
  unset($_POST['categorySubmit']);

  if (!empty($_GET['edit'])) {
    $bCategory->modifyCategoria($_GET['edit'], $_POST);
  } else {
    $bCategory->saveCategoria($_POST);
  }
}

$id = 0;
if (!empty($_GET['edit'])) {
  $id = $_GET['edit'];
}

$categoria = $bCategory->getCategoria($id);

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->


  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Agregar/Editar Categoría</h3>


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
                  <input type="text" class="form-control" name="nombre" value="<?php echo $categoria->getNombre() ?>" id="exampleInputEmail1" placeholder="Nombre">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" name="categorySubmit" class="btn btn-primary">Submit</button>
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