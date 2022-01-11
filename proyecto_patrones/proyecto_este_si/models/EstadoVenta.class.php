<?php

namespace Proyecto;

require_once 'Venta.class.php';
require_once 'Restaurant.class.php';

abstract class EstadoVenta {

    protected $venta;

    public function __construct(Venta $Venta) {
        $this->venta = $Venta;
    }

    public abstract function estadoSiguiente();

    public function getEstado() {
    }

    public function editarVenta() {
    }

    public function getListaComida() {
    }

    public abstract function eliminarVenta();
}
