<?php
namespace Proyecto;

require_once 'FabricaPedidos.class.php';
require_once 'EntradaVegana.class.php';
require_once 'FondoVegano.class.php';

class FabricaPedidosVegana implements FabricaPedidos
{

    /**
     *
     * @param array $ingredientes        
     * @param bool $disponible                
     * @return EntradaVegana
     */
    public function crearPlatoEntrada($ingredientes, $disponible )
    {
        return new EntradaVegana($ingredientes, $disponible );
    }

    /**
     *
     * @param array $ingredientes        
     * @param bool $disponible            
     * @return FondoVegano
     */
    public function crearPlatoFondo($ingredientes, $disponible)
    {
        return new FondoVegano($ingredientes, $disponible);
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
