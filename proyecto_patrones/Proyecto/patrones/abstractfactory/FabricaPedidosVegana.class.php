<?php
namespace Proyecto;

require_once 'FabricaPedidos.class.php';
require_once 'EntradaVegana.class.php';
require_once 'FondoVegano.class.php';
require_once 'Ingredientes.class.php';

class FabricaPedidosVegana implements FabricaPedidos
{

    /**
     *
     * @param array $ingredientes         
     * @param int $id_plato     
     * @param string $nombre              
     * @return EntradaVegana
     */

    public function crearPlatoEntrada($ingredientes, $id_plato, $nombre)
    {
        return new EntradaVegana($ingredientes, $id_plato, $nombre);
    }

    /**
     *
     * @param array $ingredientes        
     * @param int $id_plato     
     * @param string $nombre            
     * @return FondoVegano
     */
    public function crearPlatoFondo($ingredientes, $id_plato, $nombre)
    {
        
        return new FondoVegano($ingredientes, $id_plato, $nombre);
    }



}

?>
