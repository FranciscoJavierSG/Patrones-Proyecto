<?php

namespace Proyecto;

/*
require_once 'PedidoActual.class.php';
require_once 'Restaurant.class.php';
require_once 'ListaProducto.class.php';
*/
require_once 'EstadoVenta.class.php';
require_once 'TipoVenta.class.php';
require_once 'Restaurant.class.php';

class Venta {

    protected $id_venta; //Falta la asignación del id
    protected $estadoVenta;
    protected $id_pedido; //id del pedido que se entrega en la tabla Pedido a la tabla Venta

    public function __construct() {
        //$this->id_venta = ????????
        $this->estadoVenta = new TipoVenta();
        $this->id_pedido = new Pedido();
    }

    public function estadoSiguiente() {
    }

    public function getEstado() {
    }

    public function crearVenta() {
    }

    public function verVenta() {
    }

    public function editarVenta() {
    }

    public function getHistorialVenta() {
    }

    public function eliminarVenta() {
        $this->id_pedido->eliminarVenta();
    }

    /*
    public function agregaProducto(Producto $producto)
    {
        $this->estadoPedido->agregaProducto($producto);
    }

    /**
     *
     * @param Producto $producto
     */
    /*
    public function retiraProducto(Producto $producto)
    {
        $this->estadoPedido->retiraProducto($producto);
    }

    public function elimina()
    {
        $this->estadoPedido->elimina();
    }

    public function estadoSiguiente()
    {
        $this->estadoPedido = $this->estadoPedido->estadoSiguiente();
    }

    /**
     * @return ListaProducto
     */
    /*
    public function getProductos()
    {
        return $this->productos;
    }

    public function muestra()
    {
      
       $resp = Array();
        foreach ($this->productos as $producto) {
            $resp[]=  $producto->muestra();
        }
        return $resp;
       
    }
*/
}
