<?php

include('header.php');

if (isset($_GET['del'])) {
  $bPerfil->deletePerfil($_GET['del']);
  //redirect('ProductosListado.php');
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Perfiles
          <!-- <a href="ProductosForm.php"><i class="fas fa-plus"></i>
          </a> -->
        </h3>
        <div class="card-tools">
          <a class="btn btn-success" href="PerfilesForm.php">Agregar perfil</a>
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
                    <?php foreach ($bPerfil->getPerfiles() as $perfil) { ?>
                      <tr>
                        <td><?php echo $perfil->getIDPerfil() ?></td>
                        <td><?php echo $perfil->getNombre() ?></td>
                        <td>
                          <a href="PerfilesForm.php?edit=<?php echo $perfil->getIDPerfil() ?>">EDITAR <i class="fas fa-pen-square"></i> | </a>
                          <a href="PerfilesListado.php?del=<?php echo $perfil->getIDPerfil() ?>">ELIMINAR <i class="fas fa-trash"></i></a>
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