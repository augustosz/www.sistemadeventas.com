<?php
$id_usuario_get = $_GET['id'];

$sql_usuarios = "SELECT us.id_usuario, us.nombres, us.email, rol.rol 
                  FROM tb_usuarios AS us INNER JOIN tb_roles as rol 
                  ON us.id_rol = rol.id_rol
                  WHERE id_usuario = '$id_usuario_get'";

$query_usuarios = $pdo->prepare($sql_usuarios);
$query_usuarios->execute();
$tb_usuarios = $query_usuarios->fetchAll(PDO::FETCH_ASSOC);

foreach ($tb_usuarios as $usuario) {
  $nombres = $usuario['nombres'];
  $email = $usuario['email'];
  $rol = $usuario['rol'];
}