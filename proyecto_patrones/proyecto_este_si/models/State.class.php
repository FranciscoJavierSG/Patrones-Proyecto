<?php

namespace Proyecto;

use Exception;


require_once 'Venta.class.php';
require_once 'Restaurant.class.php';
require_once 'Pedido.class.php';
require_once 'FabricaPedidosVegana.class.php';
require_once 'FabricaPedidosCarne.class.php';
require_once 'Cliente.class.php';


class State
{

    public function __construct()
    {
    }

    public function generarPedido()
    {
        try {
                   
            $fabrica = new FabricaPedidosVegana();
            
            $platoentrada=$fabrica->crearPlatoEntrada('Lechuga' ,  1, 'Lechuga', '2.000');
            $fabrica2 = new FabricaPedidosVegana();
            
            $platofondo= $fabrica2->crearPlatoFondo('Porotos', 1, 'Porotos' , '4.000');
            

            $r=Array();
            $pedido= new Pedido($platofondo, $platoentrada);

            $id_pedido =1;
            $venta = new Venta($pedido,$id_pedido);
            $restaurant=new Restaurant($venta);
            $cliente= new Cliente(1,'Francisco', 'Fracisciquito@gmail', 123456789, $venta);
            
            $r[]= Array("Pedido"=> $venta->verVenta());
            $venta->estadoSiguiente();
            $r[]= Array("Pedido2"=> $venta->verVenta());
            $venta->estadoSiguiente();
            $r[]= Array("Pedido3"=> $venta->verVenta());
            $venta->estadoSiguiente();
            $r[]= Array("Pedido4"=> $venta->verVenta());
            $venta->estadoSiguiente();
            $r[]= Array("Pedido5"=> $venta->verVenta());
            $venta->estadoSiguiente();
            $r[]= Array("Pedido6"=> $venta->verVenta());
            $r[]=Array("Cliente" => $cliente->getHistorialVenta());

     
          
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
