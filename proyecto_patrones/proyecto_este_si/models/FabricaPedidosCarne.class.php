<?php

namespace Proyecto;

require_once 'FabricaPedidos.class.php';
require_once 'EntradaCarne.class.php';
require_once 'FondoCarne.class.php';
//require_once 'Inventario.class.php';

class FabricaPedidosCarne implements FabricaPedidos {

    public function crearPlatoEntrada($ingredientes, $id_plato, $nombre, $precio) {
        return new EntradaCarne($ingredientes, $id_plato, $nombre, $precio);
    }

    public function crearPlatoFondo($ingredientes, $id_plato, $nombre, $precio) {
        return new FondoCarne($ingredientes, $id_plato, $nombre, $precio);
    }
}
