<?php
$sql_usuarios = "SELECT * FROM tb_usuarios";
$query_usuarios = $pdo->prepare($sql_usuarios);
$query_usuarios->execute();
$tb_usuarios = $query_usuarios->fetchAll(PDO::FETCH_ASSOC);