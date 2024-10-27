<?php
include("../app/config.php");
include("../layout/sesion.php");

include("../layout/parte1.php");
include("../app/controllers/roles/update_roles.php");
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Actualización de rol</h1>
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
              <h3 class="card-title">Rellene con datos de rol</h3>

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
                  <form action="../app/controllers/roles/update.php" method="post">

                    <input type="text" name="id_rol" value="<?php echo $id_rol_get;?>" hidden>
                    <div class="form-group">
                      <label for="">Rol</label>
                      <input type="text" name="rol" id="" class="form-control" placeholder="Ingrese el aqui el rol..." value="<?php echo $rol;?>" required>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-success">Aceptar</button>
                      <a href="<?php echo $URL;?>index.php" class="btn btn-secondary">Volver a inicio</a>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>

<?php include("../layout/parte2.php"); ?>