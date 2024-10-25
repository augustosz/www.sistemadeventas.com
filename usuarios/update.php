<?php
include("../app/config.php");
include("../layout/sesion.php");

include("../layout/parte1.php");
include("../app/controllers/usuarios/update_usuarios.php");
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Actualizar datos de usuario</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">

        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->



  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">

          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Rellene con datos de usuario</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <form action="../app/controllers/usuarios/update.php" method="post">
                    <input type="text" name="id_usuario" value="<?php echo $id_usuario_get ?>" hidden>

                    <div class="form-group">
                      <label for="">Nombre</label>
                      <input type="text" name="nombres" id="" class="form-control" value="<?php echo $nombres ?>" placeholder="Ingrese el nombre de usuario" required>
                    </div>
                    <div class="form-group">
                      <label for="">Email</label>
                      <input type="email" name="email" id="" class="form-control" value="<?php echo $email ?>" placeholder="Ingrese el correo de usuario" required>
                    </div>
                    <div class="form-group">
                      <label for="">Contraseña</label>
                      <input type="text" name="password_user" id="" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="">Repita la contraseña</label>
                      <input type="text" name="password_repeat" id="" class="form-control">
                    </div>
                    <hr>
                    <div class="form-group">
                      <button type="submit" class="btn btn-success">Actualizar</button>
                      <a href="" class="btn btn-secondary">Cancelar</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div><!-- /.container-fluid -->
  </div><!-- /.content -->
</div>

<?php include("../layout/mensajes.php"); ?>
<?php include("../layout/parte2.php"); ?>