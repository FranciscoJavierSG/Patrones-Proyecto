<?php

namespace StateProyecto;

require_once 'EstadoVenta.class.php';
require_once 'Venta.class.php';
require_once 'PorPagar.class.php';
require_once 'Restaurant.class.php';

class Consumiendo extends EstadoVenta {

    public function __construct(Venta $venta) {
        parent::__construct($venta);
    }

    public function estadoSiguiente() {
        return new PorPagar($this->venta);
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
