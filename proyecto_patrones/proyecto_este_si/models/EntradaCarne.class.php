<?php

namespace Proyecto;

require_once 'PlatoEntrada.class.php';

class EntradaCarne extends PlatoEntrada {

    public function __construct($ingredientes,$id_plato, $nombre, $precio) {
        parent::__construct($ingredientes,$id_plato, $nombre, $precio);
    }

    public function verPlatoEntrada() {
        return array(
            'ingredientes' => $this->ingredientes,
            'id_plato' =>  $this->id_plato,
            'nombre' => $this->nombre,
            'precio' => $this->precio,
        );
    }
}
