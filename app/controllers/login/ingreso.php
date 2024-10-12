<?php
include ("../../config.php");

$email = $_POST["email"];
$password_user = $_POST["password_user"];

$sql = "SELECT * FROM tb_usuarios WHERE email = '$email' AND password_user = '$password_user'";
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
$contador = 0;

foreach ($usuarios as $usuario) {
  $contador = $contador + 1;
  $rs_email = $usuario['email'];
  echo $rs_nombres = $usuario['nombres'];
}

if ($contador == 0) {
  //echo " no accedio al sistema";
  session_start();
  $_SESSION['mensaje'] = "Datos incorrectos";
  header('location:'.$URL.'/login/index.php');
  exit();
} else{
  echo "credenciales correctas";
  session_start();
  $_SESSION['mostrar_alerta'] = true;
  $_SESSION['sesion_email'] = $email;
  header('location:'.$URL.'/index.php');
}
