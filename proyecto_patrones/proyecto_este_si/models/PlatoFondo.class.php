<?php

namespace Proyecto;

abstract class PlatoFondo {
    public $ingredientes;
    public $nombre;
    public $id_plato;
    public $precio;

    public function __construct($ingredientes, $nombre, $id_plato, $precio) {
        $this->ingredientes = $ingredientes;
        $this->nombre = $nombre;
        $this->id_plato = $id_plato;
        $this->precio = $precio;
    }

    public abstract function verPlatoFondo();
}
