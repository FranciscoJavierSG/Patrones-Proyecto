<?php

namespace Proyecto;

require_once 'EstadoVenta.class.php';
require_once 'TipoVenta.class.php';
require_once 'Restaurant.class.php';

class Venta {

    private $id_venta; //Falta la asignación del id
    protected $estadoVenta;
    protected $id_pedido; //id del pedido que se entrega en la tabla Pedido a la tabla Venta

    public function __construct() {
        //$this->id_venta = new Venta(); ??????????
        $this->estadoVenta = new TipoVenta();
        $this->id_pedido = new Pedido();
    }

    public function estadoSiguiente() {
        $this->estadoVenta = $this->estadoVenta->estadoSiguiente();
    }

    public function getEstado($id_pedido) {
        return $this->$id_pedido->estadoVenta; // no sé si ta bueno
    }

    public function crearVenta() {
        $this->id_venta = new Venta(); // no sé si ta bueno
    }

    public function verVenta() {
        return $this->$id_venta; // no sé si ta bueno
    }

    public function editarVenta() {
        //ni idea
    }

    public function getHistorialVenta() {
        //ni idea
    }

    public function eliminarVenta() {
        $this->id_pedido->eliminarVenta();
    }

}
