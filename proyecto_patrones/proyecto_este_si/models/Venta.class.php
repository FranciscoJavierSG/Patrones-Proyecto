<?php

namespace Proyecto;

require_once 'EstadoVenta.class.php';
//require_once 'TipoVenta.class.php';
require_once 'Restaurant.class.php';
require_once 'Pedido.class.php';
require_once 'IniciarVenta.class.php';

class Venta {

    protected $id_venta;
    protected $venta;
    protected $pedido;

    public function __construct(Pedido $pedido, $id_venta) {
        $this->pedido = $pedido;
        //esto esta malo o no funciona como deberia
        $this->venta = new IniciarVenta($this);
        $this->id_venta= $id_venta;
        
        
    }

    public function estadoSiguiente() {
        $this->venta = $this->venta->estadoSiguiente();
    }

    public function getEstado() {
        return $this->venta; // no sé si ta bueno
    }

    public function verVenta() {
        return array(
            'venta' =>  $this->venta,
            'pedido' => $this->pedido
        );
    }

    public function editarVenta() {
        $this->venta->editarVenta();
    }

    public function eliminarVenta() {
        $this->venta->eliminarVenta();
    }
}
