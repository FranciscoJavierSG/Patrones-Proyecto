<?php
namespace Proyecto;

interface FabricaPedidos
{

    //Hay que cambiar los parametros
    /**
     *
     * @param array $ingredientes   
     * @param int $id_plato     
     * @param string $nombre                
               
     * @return PlatoEntrada
     */
    public function crearPlatoEntrada($ingredientes, $id_plato, $nombre);

    /**
     *
     * @param array $ingredientes  
     * @param int $id_plato     
     * @param string $nombre                
     * @return PlatoFondo
     */
    public function crearPlatoFondo($ingredientes, $id_plato, $nombre);
}

?>