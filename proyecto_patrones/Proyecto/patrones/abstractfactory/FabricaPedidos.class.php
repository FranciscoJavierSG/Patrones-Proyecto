<?php
namespace Proyecto;

interface FabricaPedidos
{

    //Hay que cambiar los parametros
    /**
     *
     * @param string $modelo            
     * @param string $color            
     * @param int $potencia            
     * @param double $espacio            
     * @return Automovil
     */
    public function crearPlatoEntrada($modelo, $color, $potencia,  $espacio);

    /**
     *
     * @param string $modelo            
     * @param string $color            
     * @param int $potencia            
     * @return Scooter
     */
    public function crearPlatoFondo($modelo, $color, $potencia);
}

?>
