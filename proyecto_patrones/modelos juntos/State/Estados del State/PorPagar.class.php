<?php

namespace Proyecto;

require_once 'EstadoVenta.class.php';
require_once 'Venta.class.php';
require_once 'Pagado.class.php';
require_once 'Restaurant.class.php';

class PorPagar extends EstadoVenta {

    public function __construct(Venta $venta) {
        parent::__construct($venta);
    }

    public function estadoSiguiente() {
        return new Pagado($this->venta);
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
