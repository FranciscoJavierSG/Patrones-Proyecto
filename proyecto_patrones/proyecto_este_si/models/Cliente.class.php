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

    public function __construct($id_cliente, $nombre, $correo, $telefono,Restaurant $ventas) {
        $this->id_cliente = $id_cliente;
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->telefono = $telefono;
        $this->ventas = $ventas;
    }
    public function getHistorialVenta() {
        //aca deberia ir un for hipotetico en el que se muestren las ventas y los datos del cliente,
        //sin embargo el cliente tiene un array de ventas documentado ahi arriba
        return array(
            'id_cliente' => $this->id_cliente,
            'nombre' => $this->nombre,
            'correo' => $this->correo,
            'telefono' => $this->telefono,
            'ventas' => $this->ventas,
        );
    }
    //redundante puesto en que en el historial deberia salir el nombre del cliente ,
    // sin embargo lo pide asi que lo hice igual
    public function verCliente() {
        return array(
            'id_cliente' => $this->id_cliente,
            'nombre' => $this->nombre,
            'correo' => $this->correo,
            'telefono' => $this->telefono
        );
    }

    //Aca habria que ingresar valores nuevos y reemplazarlos por los existentes,
    //Creo que solo con 1 edit basta...
    public function editarCliente(){}
    //Esto deberia volver null al cliente de un id o nombre determinado, cuando tenamos todo 
    //funcionando bien entonces lo implementaremos
    public function eliminarCliente(){}
}
