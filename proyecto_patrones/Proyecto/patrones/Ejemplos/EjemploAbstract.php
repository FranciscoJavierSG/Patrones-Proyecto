<?php

namespace Proyecto;

use Exception;
require_once '../abstractfactory/FabricaPedidos.class.php';
require_once '../abstractfactory/FabricaPedidosVegana.class.php';
require_once '../abstractfactory/FabricaPedidosCarnica.class.php';

class EjemploAbstractFactory
{
    public $opcion;
    public $num_PedidosVegana;
    public $num_PedidosCarnica;
    public $PedidosVegana;
    public $PedidosCarnica;

    public function __construct($opcion, $num_PedidosVegana=0, $num_PedidosCarnica=0)
    {

        $this->opcion = $opcion;
        $this->num_PedidosVegana = $num_PedidosVegana;
        $this->num_PedidosCarnica = $num_PedidosCarnica;
        
    }

    public function generar()
    {
        
        try {

            switch ($this->opcion) {
                case 1:
                    
                    //deberia ser masaNormal? o deberia llamar a otra cosa?
                    $fabrica = new PedidosVegana();
                    
                    break;
                case 2:
                    $fabrica = new PedidosCarnica();
                    
                    break;
                default:
                    throw new \Exception("Opción ".$this->opcion." desconocida --Opciones disponibles:: opc 1: PedidosVegana -opc 2: PedidosCarnica ");

            }
            //revisar bien esto
            for ($i = 0; $i < $this->num_PedidosVegana; $i++) {
                $PedidosVegana[$i] = $fabrica->crearPlatoEntrada('Normal'. $i, 'Normal'. $i, 'extra'. $i, 'tomate'. $i );
            }
            for ($i = 0; $i < $this->num_PedidosCarnica; $i++) {
                $PedidosCarnica[$i] = $fabrica->crearPlatoFondo('Delgada'. $i, 'Normal'. $i, 'extra'. $i, 'tomate'. $i);
            }

            
            $r = array("PedidosVegana" => $PedidosVegana,
                "PedidosCarnica" => $PedidosCarnica);
          
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