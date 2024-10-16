Si se quiere hacer uso de sweetalert2 incluido en Admin LTE (esencial para uso sin conexión):

<head>
  <!-- resto de codigo -->
  <link rel="stylesheet" href="public/templates/AdminLTE-3.1.0/plugins/sweetalert2/sweetalert2.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <script src="public/templates/AdminLTE-3.1.0/plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- resto de código -->
</body>


Si queres un botón más guapete:
<li class="nav-item">
  <a href="<?php echo $URL; ?>app/controllers/login/cerrar_sesion.php" class="nav-link btn btn-danger">
    <i class="fas fa-sign-out-alt nav-icon"></i>
    <p>Cerrar sesión</p>
  </a>
</li>

No olvides modificar la dirección si es otra.


si a alguien más tiene el mismo problema lo más probable es que sea la base de datos, ya que ciertas columnas no tienen un valor po default.
en mi caso por ahora configure valores por default como null o timestamp a las otras columnas(las de fechas y token).

se puede probar esta consulta sql en phpmyadmin para ver los errores que se estan dando:

INSERT INTO tb_usuarios(nombres, email, password_user) VALUES ('pepe', 'pepe@gmail.com', '123')