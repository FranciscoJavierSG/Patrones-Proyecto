<?php
namespace Proyecto;

require_once 'FabricaPedidos.class.php';
require_once 'EntradaVegana.class.php';
require_once 'FondoVegano.class.php';
require_once 'Inventario.class.php';

class FabricaPedidosVegana implements FabricaPedidos
{

    /**
     *
     * @param array $ingredientes         
     * @param int $id_plato     
     * @param string $nombre     
     * @param int $precio           
     * @return EntradaVegana
     */

    public function crearPlatoEntrada($ingredientes, $id_plato, $nombre, $precio)
    {
        return new EntradaVegana($ingredientes, $id_plato, $nombre, $precio);
    }

    /**
     *
     * @param array $ingredientes        
     * @param int $id_plato     
     * @param string $nombre    
     * @param int $precio          
     * @return FondoVegano
     */
    public function crearPlatoFondo($ingredientes, $id_plato, $nombre, $precio)
    {
        
        return new FondoVegano($ingredientes, $id_plato, $nombre ,$precio);
    }



}

?>
