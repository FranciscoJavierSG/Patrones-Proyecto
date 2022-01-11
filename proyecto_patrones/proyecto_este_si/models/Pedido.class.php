<?php

namespace Proyecto;

require_once 'PlatoEntrada.class.php';
require_once 'PlatoFondo.class.php';


class Pedido {

    //public $id_pedido;
    public $id_platoFondo;
    public $id_platoEntrada;
    public $precioTotal;

    public function __construct(PlatoFondo $platoFondo, PlatoEntrada $platoEntrada) {
        //$this->id_pedido = $id_pedido; //ver bien esto
        $this->id_platoFondo = $platoFondo->id_plato;
        $this->id_platoEntrada = $platoEntrada->id_plato;
        $this->precioTotal = ($platoFondo->precio + $platoEntrada->precio);
    }

    public function mostrarPedido() {
        return array(
            //'id_pedido' => $this->id_pedido,
            'id_platoFondo' => $this->id_platoFondo,
            'id_platoEntrada' => $this->id_platoEntrada,
            'Precio_Total' => $this->precioTotal
        );
    }
}