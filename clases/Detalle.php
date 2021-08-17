<?php

class Detalle {
    private $id;
    private $id_pedido;
    private $producto;
    private $cantidad;
    private $precio_unitario;
    
    public function __construct($id, $id_pedido, $producto, $cantidad, $precio_unitario) {
        $this->id = $id;
        $this->id_pedido = $id_pedido;
        $this->producto = $producto;
        $this->cantidad = $cantidad;
        $this->precio_unitario = $precio_unitario;
    }

    public function get_subTotal() {
        return $this->cantidad * $this->precio_unitario;
    }

    public function getId() {
        return $this->id;
    }

    public function getIdPedido() {
        return $this->id_pedido;
    }

    public function getProducto() {
        return $this->producto;
    }

    public function getCantidad() {
        return $this->cantidad;
    }

    public function getPrecioUnitario() {
        return $this->precio_unitario;
    }
}
