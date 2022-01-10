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
     * @var int
     */

    public $id_plato
    /**
     * 
     * @var string
     */

    public $nombre
 
    /**
     *
     * @param array $ingredientes          
     * @param bool $disponible    
     * @param int $id_plato   
     * @param string $nombre    
     *           
     */
    public function __construct($ingredientes, $disponible, $id_plato, $nombre)
    {
        $this->ingredientes = $ingredientes;
        $this->disponible = $disponible;
        $this->id_plato = $id_plato;
        $this->nombre = $nombre;
      
    }

    public abstract function verPlatoFondo();


}

?>
