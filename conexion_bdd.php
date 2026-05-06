<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // esto sirve para que mysqli lance excepciones en caso de error, lo que facilita la depuración

try {$conexion = new mysqli("127.0.0.1:3306", "root", "root", "Tienda"); // creo un objeto conexion de tipo mysqli y le paso los parametros de conexion: host, usuario, contraseña y nombre de la base de datos
    $conexion->set_charset("utf8mb4"); // esto es importante para evitar problemas con caracteres especiales, emojis, etc. utf8mb4 es una versión mejorada de utf8 que soporta más caracteres
} catch (mysqli_sql_exception $e) { 
    // Esto te dirá si es la contraseña, el usuario o que la BD no existe
    die("Error de conexión: " . $e->getMessage());
}

?>