<?php

class Usuario {
    private int $id;
    private string $nombre;
    private string $email;

    private string $contraseña;

    function __construct($id, $nombre, $email, $contraseña) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->contraseña = $contraseña;
    }

    function getId() {
        return $this->id;
    }

    function getContraseña() {
        return $this->contraseña;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getEmail() {
        return $this->email;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setContraseña($contraseña) {
        $this->contraseña = $contraseña;
    }
}

?>