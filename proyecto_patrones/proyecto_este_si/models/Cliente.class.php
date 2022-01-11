<?php

namespace Proyecto;

require_once 'Restaurant.class.php';
require_once 'Menu.class.php';
class Cliente {

    public $id_cliente;
    public $nombre;
    public $correo;
    public $telefono;
    public $ventas;

    public function __construct($id_cliente, $nombre, $correo, $telefono,$ventas) {
        $this->id_cliente = $id_cliente;
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->telefono = $telefono;
        $this->ventas = $ventas;
    }
    public function getHistorialVenta() {
        return array(
            'id_cliente' => $this->id_cliente,
            'nombre' => $this->nombre,
            'correo' => $this->correo,
            'telefono' => $this->telefono,
            'ventas' => $this->ventas,
        );
    }

    public function verCliente() {
        return array(
            'id_cliente' => $this->id_cliente,
            'nombre' => $this->nombre,
            'correo' => $this->correo,
            'telefono' => $this->telefono
        );
    }

 
    public function editarCliente(){}

    public function eliminarCliente(){}
}
