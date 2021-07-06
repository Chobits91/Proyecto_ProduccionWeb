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
                <h3 class="card-title">Agregar/Editar Producto</h3>


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
                                    <input type="text" class="form-control" name="nombre" value="<?php echo $user->getNombre() ?>" id="exampleInputEmail1" placeholder="Nombre">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Descripción</label>
                                    <input type="email" class="form-control" name="descripcion" value="<?php echo $user->getMail() ?>" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Precio</label>
                                    <input type="text" class="form-control" name="precio" value="<?php echo $user->getUsuario() ?>" id="exampleInputEmail1" placeholder="User">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Stock</label>
                                    <input type="password" class="form-control" name="stock" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Destacado</label>
                                    <input type="password" class="form-control" name="destacado" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Calificación</label>
                                    <input type="password" class="form-control" name="calificación" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Fecha de Lanzamiento</label>
                                    <input type="password" class="form-control" name="fechadelanzamiento" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Categoría</label>
                                    <select name="categoria[]" multiple=multiple class="custom-select form-control-border" id="exampleSelectBorder">
                                        <?php foreach ($bCategoria->getCategoria() as $categoria) { ?>
                                            <option value="<?php echo $categoria->getIDCategoria() ?>" <?php echo $producto->poseeCategoria($categoria->getIDCategoria()) ? 'selected' : '' ?>><?php echo $categoria->getNombre() ?></option>-->
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Plataforma</label>
                                    <select name="perfiles[]" multiple=multiple class="custom-select form-control-border" id="exampleSelectBorder">
                                        <?php foreach ($bPerfil->getPerfiles() as $perfil) { ?>
                                            <option value="<?php echo $perfil->getIDPerfil() ?>" <?php echo $user->poseePerfil($perfil->getIDPerfil()) ? 'selected' : '' ?>><?php echo $perfil->getNombre() ?></option>-->
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Desarrollador</label>
                                    <select name="perfiles[]" multiple=multiple class="custom-select form-control-border" id="exampleSelectBorder">
                                        <?php foreach ($bPerfil->getPerfiles() as $perfil) { ?>
                                            <option value="<?php echo $perfil->getIDPerfil() ?>" <?php echo $user->poseePerfil($perfil->getIDPerfil()) ? 'selected' : '' ?>><?php echo $perfil->getNombre() ?></option>-->
                                        <?php } ?>
                                    </select>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" name="userSubmit" class="btn btn-primary">Submit</button>
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