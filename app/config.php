<?php
define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','sistema_ventas');

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try {
    $pdo = new PDO($servidor, USUARIO, PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    echo "La conexión a la base de datos fue con exíto";
} catch (PDOException $e) {
    //print_r($e);
    echo "error al conectar la base de datos";
}


