<?php

namespace Proyecto;

require_once 'FabricaPedidos.class.php';
require_once 'EntradaVegana.class.php';
require_once 'FondoVegano.class.php';

class FabricaPedidosVegana implements FabricaPedidos {

    public function crearPlatoEntrada($ingredientes, $id_plato, $nombre, $precio) {
        return new EntradaVegana($ingredientes, $id_plato, $nombre, $precio);
    }

    public function crearPlatoFondo($ingredientes, $id_plato, $nombre, $precio) {
        return new FondoVegano($ingredientes, $id_plato, $nombre, $precio);
    }
}
