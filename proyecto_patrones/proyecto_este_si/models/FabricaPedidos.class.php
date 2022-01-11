<?php

namespace Proyecto;

interface FabricaPedidos {

    public function crearPlatoEntrada($ingredientes, $id_plato, $nombre, $precio);

    public function crearPlatoFondo($ingredientes, $id_plato, $nombre, $precio);
}
