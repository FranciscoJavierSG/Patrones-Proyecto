<?php

namespace Proyecto;

require_once 'Venta.class.php';
require_once 'Restaurant.class.php';

//EstadoVenta -> State
abstract class EstadoVenta {

    protected $venta;

    public function __construct(Venta $venta) {
        $this->venta = $venta;
    }

    public function estadoSiguiente() {
        
    }

    public function getEstado() {

    }

    public function editarVenta() {

    }

    public function cancelar() {

    }

    public function getListaComida() {
    }

    public function eliminarVenta(){

    }

    /**
     * 
     * @param Producto $producto
     */
    /*
    public abstract function agregaProducto(Producto $producto);
    
    /**
     * @return void
     */
    /*
    public abstract function elimina();
    
    /**
     * 
     * @param Producto $producto
     */
    /*
    public abstract function retiraProducto(Producto $producto);
    
    /**
     * @return EstadoPedido
     */
    /*
    public abstract function estadoSiguiente();
    */
}
