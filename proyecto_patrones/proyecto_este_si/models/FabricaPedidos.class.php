<?php
namespace Proyecto;

interface FabricaPedidos
{

    /**
     *
     * @param array $ingredientes   
     * @param int $id_plato     
     * @param string $nombre  
     * @param int $precio                          
     * @return PlatoEntrada
     */
    public function crearPlatoEntrada($ingredientes, $id_plato, $nombre, $precio);

    /**
     *
     * @param array $ingredientes  
     * @param int $id_plato     
     * @param string $nombre
     * @param int $precio                
     * @return PlatoFondo
     */
    public function crearPlatoFondo($ingredientes, $id_plato, $nombre, $precio);
}

?>