<?php
namespace Proyecto;

require_once 'FabricaPedidos.class.php';
require_once 'EntradaCarnica.class.php';
require_once 'FondoCarnico.class.php';
require_once 'Ingredientes.class.php';

class FabricaPedidosCarnica implements FabricaPedidos
{

    /**
     *
     * @param array $ingredientes        
     * @param int $id_plato     
     * @param string $nombre         
     * @return EntradaCarnica
     */


    public function crearPlatoEntrada($ingredientes, $id_plato, $nombre)
    {
        return new EntradaCarnica($ingredientes, $id_plato, $nombre);
    }

    /**
     *
     * @param array $ingredientes          
     * @param int $id_plato     
     * @param string $nombre         
     * @return FondoCarnico
     */
    public function crearPlatoFondo($ingredientes, $id_plato, $nombre)
    {
        return new FondoCarnico($ingredientes, $id_plato, $nombre);
    }

}

?>
