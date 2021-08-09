<?php

include('header.php');

if (isset($_POST['productSubmit'])) {
  unset($_POST['productSubmit']);

  if (!empty($_GET['edit'])) {
    $bProduct->modifyProducto($_GET['edit'], $_POST);
  } else {
    $bProduct->saveProducto($_POST);
  }
}

$id = 0;
if (!empty($_GET['edit'])) {
  $id = $_GET['edit'];
}

$producto = $bProduct->getProducto($id);

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->


  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Agregar/Editar Usuarios</h3>


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
                  <input type="text" class="form-control" name="nombre" value="<?php echo $producto->getNombre() ?>" id="exampleInputEmail1" placeholder="Nombre">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Descripción</label>
                  <input type="text" class="form-control" name="descripcion" value="<?php echo $producto->getDescripcion() ?>" id="exampleFormControlTextarea1" placeholder="Descripción">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Precio</label>
                  <input type="text" class="form-control" name="precio" value="<?php echo $producto->getPrecio() ?>" id="exampleInputEmail1" placeholder="Precio">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Stock</label>
                  <input type="text" class="form-control" name="stock" value="<?php echo $producto->getStock() ?>" id="exampleInputEmail1" placeholder="Stock">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Destacado</label>
                  <input type="text" class="form-control" name="destacado" value="<?php echo $producto->getDestacado() ?>" id="exampleInputEmail1" placeholder="Destacado">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Calificación</label>
                  <input type="text" class="form-control" name="calificación" value="<?php echo $producto->getCalificacion() ?>" id="exampleInputEmail1" placeholder="Calificación">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Fecha de Lanzamiento</label>
                  <input type="text" class="form-control" name="fechadelanzamiento" value="<?php echo $producto->getFechaLanzamiento() ?>" id="exampleInputEmail1" placeholder="Fecha de Lanzamiento">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Categoría</label>
                  <select name="categoria[]" multiple=multiple class="custom-select form-control-border" id="exampleSelectBorder">
                    <?php foreach ($bCategory->getCategorias() as $categoria) { ?>
                      <option value="<?php echo $categoria->getIDCategoria() ?>"><?php echo $categoria->getNombre() ?></option>
                      <?php /*echo $producto->poseeCategoria($categoria->getIDCategoria()) ? 'selected' : '' */ ?>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Plataforma</label>
                  <select name="plataforma[]" multiple=multiple class="custom-select form-control-border" id="exampleSelectBorder">
                    <?php foreach ($bPlataforma->getPlataformas() as $plataforma) { ?>
                      <option value="<?php echo $plataforma->getIDPlataforma() ?>"><?php echo $plataforma->getNombre() ?></option>
                      <?php /*echo $producto->poseePlataforma($plataforma->getIDPlataforma()) ? 'selected' : '' */ ?>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Desarrollador</label>
                  <select name="desarrollador[]" multiple=multiple class="custom-select form-control-border" id="exampleSelectBorder">
                    <?php foreach ($bDesarrollador->getDesarrolladores() as $desarrollador) { ?>
                      <option value="<?php echo $desarrollador->getIDDesarrollador() ?>"><?php echo $desarrollador->getNombre() ?></option>
                      <?php /*echo $producto->poseeDesarrollador($desarrollador->getIDDesarrollador()) ? 'selected' : '' */ ?>
                    <?php } ?>
                  </select>
                </div>
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