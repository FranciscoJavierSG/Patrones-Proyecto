<?php

namespace Proyecto;

//Constructor abstracto
abstract class GenerarPedido {

    public $entrada;
    public $plato_fondo;
    public $postre;

    public abstract function construyePedido($entrada, $plato_fondo, $postre);

    /*public function resultado() {
        return $this->documentacion;
    }*/
}
