<?php

namespace Proyecto;

require_once 'EstadoVenta.class.php';
require_once 'TipoVenta.class.php';
require_once 'Restaurant.class.php';

class Venta {

    protected $tipoVenta;
    protected $venta;
    protected $pedido;

    public function __construct(TipoVenta $tipoDeVenta) {
        $this->tipoVenta = $tipoDeVenta; 
        $this->venta = new IniciarVenta($this);
        $this->pedido = new Pedido();
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

    public function getHistorialVenta() {
        //hacer el historial para todas las ventas existentes (debe mostrar todos los datos del cliente, la venta y el pedido)
    }

    public function eliminarVenta() {
        $this->venta->eliminarVenta();
    }

}
