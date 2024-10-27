<?php
$id_rol_get = $_GET['id'];

$sql_roles = "SELECT * FROM tb_roles WHERE id_rol = '$id_rol_get'";
$query_roles = $pdo->prepare($sql_roles);
$query_roles->execute();
$tb_roles = $query_roles->fetchAll(PDO::FETCH_ASSOC);

foreach ($tb_roles as $rol) {
  $rol = $rol['rol'];
}