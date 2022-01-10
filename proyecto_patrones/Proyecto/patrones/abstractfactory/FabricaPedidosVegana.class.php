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
     * @param bool $disponible                
     * @return EntradaVegana
     */

    //Logica que creo que es la correcta
    //Estos metodos deberian llamar a ingredientes primero ver si existe el ingredinete
    //si no existe arrojar error
    //Si existiese restarlo y fabricar el plato
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
