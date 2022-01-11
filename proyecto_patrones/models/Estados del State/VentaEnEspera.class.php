<?php

namespace Proyecto;

require_once 'EstadoVenta.class.php';
require_once 'Venta.class.php';
require_once 'VentaEntregada.class.php';
require_once 'Restaurant.class.php';

class VentaEnEspera extends EstadoVenta {

    public function __construct(Venta $venta) {
        parent::__construct($venta);
    }

    public function estadoSiguiente() {
        return new VentaEntregada($this->venta);
    }

}
