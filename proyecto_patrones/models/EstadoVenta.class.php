<?php
namespace State;
/*
require_once 'Pedido.class.php';
require_once 'Producto.class.php';
*/
//Esto es el estado de venta, falta adaptarlo aun y faltan los states
abstract class EstadoVenta
{
    /**
     * 
     * @var Pedido
     */
    
    protected $pedido;

    /**
     * 
     * @param Pedido $pedido
     */
    public function __construct(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }

    public function estadoSiguiente(){
    }
    public function getEstado(){
    }
    public function editarVenta(){
    }
    public function cancelar(){
    }
    public function getListaComida(){
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


?>
