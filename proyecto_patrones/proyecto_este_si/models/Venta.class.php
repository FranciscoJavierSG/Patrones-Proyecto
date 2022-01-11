<?php

namespace Proyecto;

require_once 'EstadoVenta.class.php';
require_once 'TipoVenta.class.php';
require_once 'Restaurant.class.php';
require_once 'Cliente.class.php';
require_once 'Pedido.class.php';

class Venta {

    protected $tipoVenta;
    protected $venta;
    protected $pedido;

    public function __construct($tipoDeVenta) {
        $this->tipoVenta = $tipoDeVenta;
        $this->venta = new IniciarVenta($this);
        //$this->pedido = new Pedido();
    }

    public function estadoSiguiente() {
        $this->venta = $this->venta->estadoSiguiente();
    }

    public function getEstado($venta) {
        return $this->venta; // no sé si ta bueno
    }

    public function crearVenta() {
    }

    public function verVenta() {
    }

    public function editarVenta() {
        //ni idea
    }



    public function eliminarVenta() {
        $this->venta->eliminarVenta();
    }
}
