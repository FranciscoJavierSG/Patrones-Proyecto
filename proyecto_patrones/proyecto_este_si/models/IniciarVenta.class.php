<?php

namespace Proyecto;

require_once 'EstadoVenta.class.php';
require_once 'Venta.class.php';
require_once 'VentaEnEspera.class.php';
require_once 'Restaurant.class.php';

class IniciarVenta extends EstadoVenta {

    public function __construct(Venta $venta) {
        echo 'alo';
        parent::__construct($venta);
    }

    public function estadoSiguiente() {
        return new VentaEnEspera($this->venta);
    }
    
    public function verVenta() {
    }

    public function editarVenta() {
    }

    public function eliminarVenta() {
    }
}
