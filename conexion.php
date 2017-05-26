<?php
/* Conectar a una base de datos de MySQL invocando al controlador */
$dsn = 'mysql:dbname=angeles;host=127.0.0.1';
$usuario = 'root';
$contraseña = '';

try {
    $bd = new PDO($dsn, $usuario, $contraseña);
    
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}

?>