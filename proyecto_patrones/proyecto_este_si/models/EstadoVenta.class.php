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

    public abstract function verVenta();

    public abstract function editarVenta();

    public abstract function eliminarVenta();
}
