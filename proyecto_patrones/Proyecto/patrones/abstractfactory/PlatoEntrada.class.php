<?php
namespace Proyecto;

abstract class PlatoEntrada
{
    //Como en todas las weas, faltan las variables
    /**
     * 
     * @var array
     */
    public $ingredientes;
    /**
     * 
     * @var bool
     */
    public $disponible;
 
    /**
     *
     * @param array $ingredientes          
     * @param bool $disponible        
     *           
     */
    public function __construct($ingredientes, $disponible)
    {
        $this->ingredientes = $ingredientes;
        $this->disponible = $disponible;
      
    }

    public abstract function verPlatoEntrada();

    public abstract function crearPlatoEntrada();

    public abstract function eliminarPlatoEntrada();

    public abstract function editarPlatoEntrada();
}

?>
