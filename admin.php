<?php
require_once 'usuario.php';
require_once 'conexion.php';

class Admin {
    public $nombre = "Admin";
    public $contrasena = "admin123";

    public function __construct($nombre, $contrasena) {
        $this->nombre = $nombre;
        $this->contrasena = $contrasena;
    }

    public static function crear_insertar_Admin($contrasena) {
        return new Admin("Admin", $contrasena);
        $sql = $conexion->fetch_query("insert into usuarios(nombre, email, password) values('Admin', 'admin@example.com', '$contrasena')");
    }

    public function insertarUsuario($conexion, $nombre, $email, $contraseña) {
        $sql = $conexion->fetch_query("insert into usuarios(nombre, email, password) values ($nombre, $email, $contraseña)");
    }
    
    public function eliminarUsuario($conexion, $id) {
        $sql = $conexion->fetch_query("delete from usuarios where id = $id");
    }

    
}

?>