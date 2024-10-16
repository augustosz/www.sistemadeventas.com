<?php
include("../app/config.php");
include("../app/controllers/usuarios/listado_usuarios.php");

include("../layout/sesion.php");

include("../layout/parte1.php");?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Lista de usuarios</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">

        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  php
  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">

          <div class="card card-outline card-primary">

            <div class="card-header">
              <h3 class="card-title">Usuarios registrados</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered table-hover table-striped table-sm">
                <tr>
                  <th>Números</th>
                  <th>Nombres</th>
                  <th>Email</th>
                </tr>
                <tbody>
                  <?php
                  $contador = 0;
                  foreach ($tb_usuarios as $usuario) { ?>         
                   <tr>
                    <td><?php echo $contador = $contador +1;?></td>
                    <td><?php echo $usuario['nombres'];?></td>
                    <td><?php echo $usuario['email'];?></td>
                   </tr>
                  <?php 
                  }
                  ?>
                </tbody>

              </table> 
            </div>

            <!-- /.card-body -->
          </div>

        </div>
      </div>

      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>


<?php include("../layout/parte2.php"); ?>