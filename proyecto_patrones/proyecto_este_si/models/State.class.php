<?php

namespace Proyecto;

use Exception;


require_once 'Venta.class.php';
//require_once 'Restaurant.class.php';
require_once 'Pedido.class.php';
require_once 'FabricaPedidosVegana.class.php';
require_once 'FabricaPedidosCarne.class.php';


class State
{



    public function __construct()
    {

     
    }

    public function generar()
    {
        try {

            $fabrica = new FabricaPedidosVegana();
            $platoentrada=$fabrica->crearPlatoEntrada('Lechuga' ,  1, 'Lechuga', '2.000');
            $platofondo= $fabrica->crearPlatoFondo('Porotos', 1, 'Porotos' , '4.000');
            

            $pedido= new Pedido($platofondo, $platoentrada);

            $venta = new Venta($pedido);

            $r=Array();


            /*
            $venta->agregaProducto(new Producto('vehículo 1'));
            $venta->agregaProducto(new Producto('Accesorio 2'));
            
            //$pedido->muestra();
            $r[]=Array("pedido1"=>$venta->muestra());
            $venta->estadoSiguiente();
            //$venta->agregaProducto(new Producto('Accesorio 3'));
            $venta->elimina();
            $venta->muestra();
            $r[]=Array("pedido1"=>$venta->muestra());
            
            $pedido2 = new Pedido();
           // $pedido2->agregaProducto(new Producto('vehículo 11'));
            //$pedido2->agregaProducto(new Producto('Accesorio 21'));
            $r[]=Array("pedido2"=>$pedido2->muestra());
            $pedido2->estadoSiguiente();
            $r[]=Array("pedido2"=>$pedido2->muestra());
            $pedido2->estadoSiguiente();
            $pedido2->elimina();
            $r[]=Array("pedido2"=>$pedido2->muestra());
         
           /* 
        */
           
          
            $respuesta = array('Estado' => "success",
                'Response' => $r);
            return $respuesta;
        } catch (Exception $e) {
            $respuesta = array('Estado' => "Error",
                'Response' => $e->getMessage());
            return $respuesta;
        }
    }

}
