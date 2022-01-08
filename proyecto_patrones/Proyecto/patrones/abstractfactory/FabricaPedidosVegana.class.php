<?php
namespace Proyecto;

require_once 'FabricaPedidos.class.php';
require_once 'EntradaVegana.class.php';
require_once 'FondoVegano.class.php';

class FabricaVehiculoElectrico implements FabricaVehiculo
{

    //Falta definir las variables
    /**
     *
     * @param string $modelo            
     * @param string $color            
     * @param int $potencia            
     * @param double $espacio            
     * @return Automovil
     */
    public function crearPlatoEntrada($modelo, $color, $potencia, $espacio)
    {
        return new AutomovilElectrico($modelo, $color, 
                $potencia, $espacio);
    }

    /**
     *
     * @param string $modelo            
     * @param string $color            
     * @param int $potencia            
     * @return Scooter
     */
    public function crearPlatoFondo($modelo, $color, $potencia)
    {
        return new ScooterElectrico($modelo, $color, $potencia);
    }
}

?>
