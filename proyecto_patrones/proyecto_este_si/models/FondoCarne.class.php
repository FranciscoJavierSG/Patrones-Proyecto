<?php

namespace Proyecto;

require_once 'PlatoFondo.class.php';

class FondoCarne extends PlatoFondo {

    public function __construct($ingredientes, $id_plato, $nombre, $precio) {
        parent::__construct($ingredientes, $id_plato, $nombre, $precio);
    }

    public function verPlatoFondo() {
        return array(
            'id_plato' =>  $this->id_plato,
            'nombre' => $this->nombre,
            'precio' => $this->precio,
        );
    }
}