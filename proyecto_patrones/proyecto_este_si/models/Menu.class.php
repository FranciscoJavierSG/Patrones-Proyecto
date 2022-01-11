<?php

namespace Proyecto;

use Exception;

require_once 'FabricaPedidosVegana.class.php';
require_once 'FabricaPedidosCarne.class.php';
require_once 'Inventario.class.php';

class Menu {

    public $opcion;
    public $num_platosEntrada;
    public $num_platosFondo;
    public $PlatosEntrada;
    public $PlatosFondo;
    public $stock;
    public $nombre;
    public $tipoIngrediente;

    public function __construct($opcion, $num_platosEntrada = 0, $num_platosFondo = 0,$stock,$nombre,$tipoIngrediente) {
        $this->opcion = $opcion;
        $this->num_platosEntrada = $num_platosEntrada;
        $this->num_platosFondo = $num_platosFondo;
        $this->stock = $stock;
        $this->nombre = $nombre;
        $this->tipoIngrediente = $tipoIngrediente;
    }

    public function generar() {
        try {

           
            //Crear inventario en el menu
            // $stock, $nombre, $tipoIngrediente , etc
           

            for($i = 0; $i < $this->num_platosEntrada; $i++){
                $inventario[$i] = new Inventario($this->stock, $this->nombre.$i, $this->tipoIngrediente);
            }

            switch ($this->opcion) {
                case 1:
                    $fabrica = new FabricaPedidosVegana();
                    break;
                case 2:
                    $fabrica = new FabricaPedidosCarne();
                    break;
                default:
                    throw new \Exception("Opción " . $this->opcion . " desconocida --Opciones disponibles:: opc 1: FabricaPedidosVegana -opc 2: FabricaPedidosCarne ");
            }
            $count=1;
            //revisar bien esto
            for ($i = 0; $i < $this->num_platosEntrada; $i++) {
                //Validar stock ingrediente();
                $PlatosEntrada[$i] = $fabrica->crearPlatoEntrada($inventario[$i],'Lasaña veg'.$i,$i, '2.000' . $i);
                $inventario[$i]->stock=$inventario[$i]->stock-$count;
                if($inventario[$i]->stock<=0){
                    break;
                }
                $count++;
                
            }
            $count=1;
            for ($i = 0; $i < $this->num_platosFondo; $i++) {
                $PlatosFondo[$i] = $fabrica->crearPlatoFondo($inventario[$i], 'Parrillada'.$i, $i, '4.000' . $i);
                $inventario[$i]->stock=$inventario[$i]->stock-$count;
                if($inventario[$i]->stock<=0){
                    break;
                }
                $count++;
               
                
            }


            $r = array(
                "PlatosEntrada" => $PlatosEntrada,
                "PlatosFondo" => $PlatosFondo
            );
            $respuesta = array(
                'Estado' => "success",
                'Response' => $r
            );
            return $respuesta;
        } catch (Exception $e) {
            $respuesta = array(
                'Estado' => "Error",
                'Response' => $e->getMessage()
            );
            return $respuesta;
        }
    }

    public function getMenu() {
    }

    public function editarMenu() {
    }

    public function editarPlato() {
    }

    public function eliminarPlato() {
    }
    
    public function validarPreparacionDisponible() {
    }
}
