<?php

namespace Proyecto;

require_once 'PlatoEntrada.class.php';

class EntradaCarnica extends PlatoEntrada {

    public function __construct($ingredientes,$id_plato, $nombre, $precio) {
        parent::__construct($ingredientes,$id_plato, $nombre, $precio);
    }

    public function verPlatoEntrada() {
        return array(
            'id_plato' =>  $this->id_plato,
            'nombre' => $this->nombre,
            'precio' => $this->precio,
        );
    }
}
