<?php

namespace Proyecto;

use Exception;

require_once 'FabricaPedidosVegana.class.php';

require_once 'FabricaPedidosCarnica.class.php';

class Menu {

    public $opcion;
    public $num_platosEntrada;
    public $num_platosFondo;
    public $PlatosEntrada;
    public $PlatosFondo;

    public function __construct($opcion, $num_platosEntrada = 0, $num_platosFondo = 0) {
        $this->opcion = $opcion;
        $this->num_platosEntrada = $num_platosEntrada;
        $this->num_platosFondo = $num_platosFondo;
    }

    public function generar() {
        try {
            switch ($this->opcion) {
                case 1:
                    $fabrica = new FabricaPedidosVegana();
                    break;
                case 2:
                    $fabrica = new FabricaPedidosCarnica();
                    break;
                default:
                    throw new \Exception("Opción " . $this->opcion . " desconocida --Opciones disponibles:: opc 1: FabricaPedidosVegana -opc 2: FabricaPedidosCarnica ");
            }

            //revisar bien esto
            for ($i = 0; $i < $this->num_platosEntrada; $i++) {
                $PlatosEntrada[$i] = $fabrica->crearPlatoEntrada('Lechuga' . $i,  $i, 'Lechuga' . $i, '2.000' . $i);
            }
            for ($i = 0; $i < $this->num_platosFondo; $i++) {
                $PlatosFondo[$i] = $fabrica->crearPlatoFondo('Porotos' . $i, $i, 'Porotos' . $i, '4.000' . $i);
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
}
