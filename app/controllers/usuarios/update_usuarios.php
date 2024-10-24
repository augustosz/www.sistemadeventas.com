<?php
$id_usuario_get = $_GET['id'];

$sql_usuarios = "SELECT * FROM tb_usuarios WHERE id_usuario = '$id_usuario_get'";
$query_usuarios = $pdo->prepare($sql_usuarios);
$query_usuarios->execute();
$tb_usuarios = $query_usuarios->fetchAll(PDO::FETCH_ASSOC);

foreach ($tb_usuarios as $usuario) {
  $nombres = $usuario['nombres'];
  $email = $usuario['email'];
}