<?php
namespace Proyecto;

interface FabricaPedidos
{

    //Hay que cambiar los parametros
    /**
     *
     * @param array $ingredientes        
     * @param bool $disponible            
               
     * @return PlatoEntrada
     */
    public function crearPlatoEntrada($ingredientes, $disponible);

    /**
     *
     * @param array $ingredientes        
     * @param bool $disponible            
     * @return PlatoFondo
     */
    public function crearPlatoFondo($ingredientes, $disponible);
}

?>