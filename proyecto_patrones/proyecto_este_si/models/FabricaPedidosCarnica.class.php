<?php

namespace Proyecto;

require_once 'FabricaPedidos.class.php';
require_once 'EntradaCarnica.class.php';
require_once 'FondoCarnico.class.php';

class FabricaPedidosCarnica implements FabricaPedidos {

    public function crearPlatoEntrada($ingredientes, $id_plato, $nombre, $precio) {
        return new EntradaCarnica($ingredientes, $id_plato, $nombre, $precio);
    }

    public function crearPlatoFondo($ingredientes, $id_plato, $nombre, $precio) {
        return new FondoCarnico($ingredientes, $id_plato, $nombre, $precio);
    }
}
