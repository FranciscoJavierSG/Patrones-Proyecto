<?php

namespace Proyecto;

require_once 'EstadoVenta.class.php';
require_once 'Venta.class.php';
require_once 'Consumiendo.class.php';
require_once 'PorPagar.php';
require_once 'Restaurant.class.php';

class VentaEntregada extends EstadoVenta {

    public function __construct(Venta $venta) {
        parent::__construct($venta);
    }

    public function estadoSiguiente() {

        if ($this->venta->tipoVenta >= 2) {
            return new Consumiendo($this->venta);
        } else if ($this->venta->tipoVenta <= 1) {
            return new PorPagar($this->venta);
        }
        
    }

}
