<?php

namespace Proyecto;

require_once 'EstadoVenta.class.php';
require_once 'TipoVenta.class.php';
require_once 'Restaurant.class.php';
//require_once 'Cliente.class.php';
require_once 'Pedido.class.php';

class Venta {

    protected $venta;
    //protected $pedido;

    public function __construct(Pedido $Pedido) {
        $this->venta = new IniciarVenta($this);
        $this->pedido = $Pedido;
    }

    public function estadoSiguiente() {
        $this->venta = $this->venta->estadoSiguiente();
    }

    public function getEstado($venta) {
        return $this->venta; // no sé si ta bueno
    }

    public function verVenta() {
        //$this->venta->verVenta();
        return array(
            'id_plato' =>  $this->id_plato,
            'nombre' => $this->nombre,
            'precio' => $this->precio,
        );
    }

    public function editarVenta() {
        $this->venta->editarVenta();
    }

    public function eliminarVenta() {
        $this->venta->eliminarVenta();
    }
}
