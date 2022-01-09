<?php
namespace Proyecto;

require_once 'FabricaPedidos.class.php';
require_once 'EntradaCarnica.class.php';
require_once 'FondoCarnico.class.php';

class FabricaPedidosCarnica implements FabricaPedidos
{

    /**
     *
     * @param array $ingredientes        
     * @param bool $disponible          
     * @return EntradaCarnica
     */
    public function crearPlatoEntrada($ingredientes, $disponible)
    {
        return new EntradaCarnica($ingredientes, $disponible);
    }

    /**
     *
     * @param array $ingredientes        
     * @param bool $disponible            
     * @return FondoCarnico
     */
    public function crearPlatoFondo($ingredientes, $disponible)
    {
        return new FondoCarnico($ingredientes, $disponible);
    }


    /**
     *
     * @param array $ingredientes        
     * @param bool $disponible          
     * @return 
     */
    public function validarStockIngredientes($ingredientes, $disponible)
    {
       
        //FALTA


    }


}

?>
