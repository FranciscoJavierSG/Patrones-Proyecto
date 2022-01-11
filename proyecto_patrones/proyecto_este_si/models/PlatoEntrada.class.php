<?php

namespace Proyecto;

abstract class PlatoEntrada {
    public $nombre;
    public $id_plato;
    public $precio;

    public function __construct($nombre, $id_plato, $precio) {
        $this->nombre = $nombre;
        $this->id_plato = $id_plato;
        $this->precio = $precio;
    }
    
    public abstract function verPlatoEntrada();
}
