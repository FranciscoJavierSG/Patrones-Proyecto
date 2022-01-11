<?php

namespace Proyecto;

require_once 'EstadoVenta.class.php';
require_once 'Venta.class.php';
require_once 'Restaurant.class.php';

class Pagado extends EstadoVenta {

    public function __construct(Venta $venta) {
        parent::__construct($venta);
    }

}
