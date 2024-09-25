<?php

define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','javents');

$dns = "mysql:host=" .SERVIDOR. ";dbname=" .BD. ";charset=utf8";

try {
    $pdo = new PDO($dns,USUARIO, PASSWORD);
    //echo "Conexión exitosa";

} catch (PDOException $e) {
    //print_r($e);
    echo "error al conectar DB". $e->getMessage();

}

//vaiables globales

$URL = "http://localhost/www.javents.com";