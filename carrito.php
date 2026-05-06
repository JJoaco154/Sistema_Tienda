<?php

require_once 'productos.php';
require_once 'usuario.php';

class Carrito {
    private array $productos = [];
    private float $total;
    private Usuario $usuario;

    private int $id;

    function __construct() {
        $this->productos = []; // asi es como se inicializa un array vacio en un constructor enphp
        $this->total = 0;
    }

    function agregarProducto(Producto $producto) {
        $this->productos[] = $producto; // Agrega el producto al array de productos pasado por paramentro
    }

    function eliminarProducto($id) {
        foreach ($this->productos as $index => $producto) {
            if ($producto->getId() == $id) {
                unset($this->productos[$index]); // Elimina el producto del array
                break;
            }
        }
    }

    function obtenerTotal() {
        $total = 0;
        foreach ($this->productos as $producto) {
            $total += $producto->getPrecio();
        }
        return $total;
    }

    function getProductos() {
        return $this->productos;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function setUsuario(Usuario $usuario) {
        $this->usuario = $usuario;
    }

    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }
}
?>