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


    public $id_entrada
 
    /**
     *
     * @param array $ingredientes          
     * @param bool $disponible        
     *           
     */
    public function __construct($ingredientes, $disponible, $id_entrada)
    {
        $this->ingredientes = $ingredientes;
        $this->disponible = $disponible;
        $this->id_entrada = $id_entrada;
      
    }

    public abstract function verPlatoEntrada();

    public abstract function crearPlatoEntrada();

    public abstract function eliminarPlatoEntrada();

    public abstract function editarPlatoEntrada();
}

?>
