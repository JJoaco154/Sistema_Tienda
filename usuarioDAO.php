<?php
require_once 'conexion.php';
require_once 'usuario.php';

class UsuarioDAO {
    public static function obtenerTodos($conexion) { // esto me levanta todos los usuarios de la base de datos y me los guarda en un array de objetos usuario
        $usuario = [];
        
        $sql = $conexion->fetch_query("select * from usuarios");

        while ($fila = $sql->fetch_assoc()) {
            $usuario[] = new Usuario(
                $fila['id'],
                $fila['nombre'],
                $fila['email'],
                $fila['password'],
            );
        }
        return $usuario;
    }


    public function buscarUsuarioId($conexion, $id) { // esto me busca especificamente en la bdd donde conincide el id y me lo debuelve en un objeto usuario
        $sql = $conexion->fetch_query("select * from usuarios where id = $id");

        if ($fila = $sql->fetch_assoc()) {
            $usuario = new Usuario(
                $fila['id'],
                $fila['nombre'],
                $fila['email'],
                $fila['password']
            );
        }
        return $usuario;
    }

}

?>