<?php

namespace Proyecto;

require_once 'EstadoVenta.class.php';
require_once 'Venta.class.php';
require_once 'Consumiendo.class.php';
require_once 'Restaurant.class.php';

class VentaEntregada extends EstadoVenta {

    public function __construct(Venta $venta) {
        parent::__construct($venta);
    }

    public function estadoSiguiente() {
        return new Consumiendo($this->venta);
    }

    public function verVenta() {
    }

    public function editarVenta() {
    }

    public function eliminarVenta() {
    }
}
