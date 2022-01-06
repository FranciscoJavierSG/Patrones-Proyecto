<?php

namespace StateProyecto;

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

        if ($this->venta->estadoVenta <= 1) {
            return new Consumiendo($this->venta);
        } else if ($this->venta->estadoVenta >= 2) {
            return new PorPagar($this->venta);
        }
    }

    public function getEstado() {
    }

    public function editarVenta() {
    }

    public function cancelar() {
    }

    public function getListaComida() {
    }

    public function eliminaVenta() {
        //$this->pedido->getProductos()->clear();
    }
}
