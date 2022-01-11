<?php

namespace Proyecto;

class Restaurant {

    protected $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function muestra() {
        return "Venta:" . $this->nombre;
    }
}