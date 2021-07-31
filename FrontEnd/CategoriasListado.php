<?php

include('header.php');

if (isset($_GET['del'])) {
  $bCategory->deleteCategoria($_GET['del']);
  //redirect('CategoriaListado.php');
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Categorías
          <!-- <a href="ProductosForm.php"><i class="fas fa-plus"></i>
          </a> -->
        </h3>
        <div class="card-tools">
          <a class="btn btn-success" href="CategoriasForm.php">Agregar Categoría</a>
          <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button> -->
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($bCategory->getCategorias() as $categoria) { ?>
                      <tr>
                        <td><?php echo $categoria->getIDCategoria() ?></td>
                        <td><?php echo $categoria->getNombre() ?></td>
                        <td>
                          <a href="CategoriasForm.php?edit=<?php echo $categoria->getIDCategoria() ?>">EDITAR |<i class="fas fa-th"></i></a>
                          <a href="CategoriasListado.php?del=<?php echo $categoria->getIDCategoria() ?>">ELIMINAR<i class="fas fa-trash"></i></a>
                        </td>
                      </tr>
                    <?php } ?>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
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

include('footer.php');

?>