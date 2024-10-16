<?php
include("app/config.php");

session_start();

if (isset($_SESSION['sesion_email'])) {
  //echo "existe la sesion";
  $sesion_email = $_SESSION['sesion_email'];
  $sql = "SELECT * FROM tb_usuarios WHERE email = '$sesion_email'";
  $query = $pdo->prepare($sql);
  $query->execute();
  $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

  foreach ($usuarios as $usuario) {
    $sesion_nombre = $usuario['nombres'];
  }
} else {
  header('location:'.$URL.'/login/index.php');
}

?>