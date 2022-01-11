<?php

namespace Proyecto;

require_once 'FabricaPedidos.class.php';
require_once 'EntradaCarnica.class.php';
require_once 'FondoCarnico.class.php';
require_once 'Inventario.class.php';

class FabricaPedidosCarnica implements FabricaPedidos {

    /**
     *
     * @param array $ingredientes         
     * @param int $id_plato     
     * @param string $nombre     
     * @param int $precio           
     * @return EntradaCarnica
     */

    public function crearPlatoEntrada($ingredientes, $id_plato, $nombre, $precio) {
        return new EntradaCarnica($ingredientes, $id_plato, $nombre, $precio);
    }

    /**
     *
     * @param array $ingredientes        
     * @param int $id_plato     
     * @param string $nombre    
     * @param int $precio          
     * @return FondoCarnica
     */
    public function crearPlatoFondo($ingredientes, $id_plato, $nombre, $precio) {

        return new FondoCarnico($ingredientes, $id_plato, $nombre, $precio);
    }
}
