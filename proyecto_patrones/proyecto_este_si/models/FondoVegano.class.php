<?php

namespace Proyecto;

require_once 'PlatoFondo.class.php';

class FondoVegano extends PlatoFondo {

    public function __construct($ingredientes, $id_plato, $nombre, $precio) {
        parent::__construct($ingredientes, $id_plato, $nombre, $precio);
    }

    public function verPlatoFondo() {
        return array(
            'ingredientes' =>  $this->ingredientes,
            'id_plato' =>  $this->id_plato,
            'nombre' => $this->nombre,
            'precio' => $this->precio,
        );
    }
}
