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
     * @param bool $disponible   
     * @param int $id_plato     
     * @param string $nombre         
     * @return EntradaCarnica
     */

     //Logica que creo que es la correcta
    //Estos metodos deberian llamar a ingredientes primero ver si existe el ingredinete
    //si no existe arrojar error
    //Si existiese restarlo y fabricar el plato
    public function crearPlatoEntrada($ingredientes, $disponible, $id_plato, $nombre)
    {
        return new EntradaCarnica($ingredientes, $disponible, $id_plato, $nombre);
    }

    /**
     *
     * @param array $ingredientes        
     * @param bool $disponible    
     * @param int $id_plato     
     * @param string $nombre         
     * @return FondoCarnico
     */
    public function crearPlatoFondo($ingredientes, $disponible, $id_plato, $nombre)
    {
        return new FondoCarnico($ingredientes, $disponible, $id_plato, $nombre);
    }

}

?>
