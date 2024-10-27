<?php
include("../app/config.php");
include("../app/controllers/roles/listado_roles.php");

include("../layout/sesion.php");

include("../layout/parte1.php");
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Lista de roles</h1>
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
        <div class="col-6">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Roles registrados</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th class="col-1">Números</th>
                    <th>Tipo de rol</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $contador = 0;
                  foreach ($tb_roles as $rol) {
                    $id_rol = $rol['id_rol']; ?>
                    <tr>
                      <td><?php echo $contador = $contador + 1; ?></td>
                      <td><?php echo $rol['rol']; ?></td>
                      <td>
                        <center>
                          <div class="btn-group">
                            <a href="update.php?id=<?php echo $id_rol; ?>" type="button" class="btn btn-success"> <i class="fa fa-pencil-alt"></i> Actualizar</a>
                          </div>
                        </center>
                      </td>
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th class="col-1">Números</th>
                    <th>Tipo de rol</th>
                    <th>Acciones</th>
                  </tr>
                </tfoot>
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
<?php include("../layout/mensajes.php"); ?>

<script>
  $(function() {


    $("#example1").DataTable({
      /* cambio de idiomas de datatable */
      "pageLength": 5,
      language: {
        "emptyTable": "No hay información",
        "decimal": "",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Roles",
        "infoEmpty": "Mostrando 0 to 0 of 0 Roles",
        "infoFiltered": "(Filtrado de MAX total Roles)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Roles",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscador:",
        "zeroRecords": "Sin resultados encontrados",

        "paginate": {
          "first": "Primero",
          "last": "Ultimo",
          "next": "Siguiente",
          "previous": "Anterior"
        }

      },

      "responsive": true,
      "lengthChange": true,
      "autoWidth": false,

      /* Ajuste de botones */
      buttons: [{

          extend: 'collection',
          text: 'Reportes',
          orientation: 'landscape',

          buttons: [{
            text: 'Copiar',
            extend: 'copy'
          }, {
            extend: 'pdf',
          }, {
            extend: 'csv',
          }, {
            extend: 'excel',
          }, {
            text: 'Imprimir',
            extend: 'print'
          }]
        },
        {
          extend: 'colvis',
          text: 'Vista de columnas'
        }
      ],

      /*Fin de ajuste de botones*/
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>