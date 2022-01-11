<?php

namespace Proyecto;

require_once 'EstadoVenta.class.php';
//require_once 'TipoVenta.class.php';
require_once 'Restaurant.class.php';
require_once 'Pedido.class.php';

class Venta {

    
    protected $venta;
    protected $pedido;

    public function __construct(Pedido $pedido) {
        $this->pedido = $pedido;
        //echo 'alo';
        //esto esta malo o no funciona como deberia
        $this->venta = new IniciarVenta($this);
        echo 'alo';
        
        
    }

    public function estadoSiguiente() {
        $this->venta = $this->venta->estadoSiguiente();
    }

    public function getEstado() {
        return $this->venta; // no sé si ta bueno
    }

    public function verVenta() {
        //$this->venta->verVenta();
        /*return array(
            'venta' =>  $this->venta,
            'pedido' => $this->pedido
        );*/
    }

    public function editarVenta() {
        $this->venta->editarVenta();
    }

    public function eliminarVenta() {
        $this->venta->eliminarVenta();
    }
}
