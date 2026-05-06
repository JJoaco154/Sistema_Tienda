<?php

require_once 'productos.php';
require_once 'carrito.php';
require_once 'usuario.php';

class Pedido {
    private Carrito $carrito;
    private string $direccionEnvio;
    private DateTime $fechaPedido;

    private int $id;

    function __construct() {
        $this->carrito = new Carrito();
        $this->direccionEnvio = ' ';
        $this->fechaPedido = new DateTime();
    }

    function getCrrito() {
        return $this->carrito;
    }

    function getDireccionEnvio() {
        return $this->direccionEnvio;
    }

    function getFechaPedido() {
        return $this->fechaPedido;
    }

    function setCarrito(Carrito $carrito) {
        return $this->carrito = $carrito;
    }

    function setDireccionEnvio(string $direccionEnvio) {
        return $this->direccionEnvio = $direccionEnvio;
    }

    function setFechaPedido(DateTime $fechaPedido) {
        return $this->fechaPedido = $fechaPedido;
    }

    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

}