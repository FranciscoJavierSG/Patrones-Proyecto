<?php
namespace Proyecto;

abstract class PlatoFondo
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

    public abstract function verPlatoFondo();

    public abstract function crearPlatoFondo();

    public abstract function eliminarPlatoFondo();

    public abstract function editarPlatoFondo();
}

?>
