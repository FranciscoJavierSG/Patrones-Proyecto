<?php
namespace State;
/*
require_once 'PedidoActual.class.php';
require_once 'Producto.class.php';
require_once 'ListaProducto.class.php';
*/
// esta es Venta  AJUSTAR a ESTE PROYECTO
class Venta
{
    /**
     * @var ListaProducto
     */
    protected $productos;
    /**
     * 
     * @var EstadoPedido
     */
    protected $estadoPedido;

    public function __construct()
    {
        $this->productos = new ListaProducto();
        $this->estadoPedido = new PedidoActual($this);
    }

    /**
     * 
     * @param Producto $producto
     */
    public function estadoSiguiente(){
    }
    public function getEstado(){
    }
    public function crearVenta(){
    }
    public function verVenta(){
    }
    public function editarVenta(){
    }
    public function getHistorialVenta(){
    }
    public function eliminarVenta(){
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

?>
