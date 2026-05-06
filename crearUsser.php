<?php
include("conexion_bdd.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verificar si se ha enviado el formulario, server hace referencia a la solicitud HTTP actual y REQUEST_METHOD verifica si el método de solicitud es POST, lo que indica que se ha enviado un formulario
    if(empty($_POST["nombre"]) || empty($_POST["contrasena"]) || empty($_POST["email"])) { // Verificar si los campos nombre, contraseña o email están vacíos, si alguno de ellos está vacío se muestra un mensaje de error
        echo "Los campos no pueden estar vacíos";
    } else {
        $usuario = $_POST["nombre"];
        $mail = $_POST["email"];
        $contrasena = $_POST["contrasena"];

        $sql = $conexion->query("INSERT INTO usuario (nombre, email, contraseña) VALUES ('$usuario', '$mail', '$contrasena')");

        if($sql) {
            echo "Usuario creado correctamente";
        } else {
            echo "Error al crear usuario";
        }
    }
}



?>