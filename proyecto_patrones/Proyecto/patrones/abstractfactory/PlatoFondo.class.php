<?php
namespace Proyecto;

abstract class PlatoFondo
{

    /**
     * 
     * @var array
     */
    public $ingredientes;
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
     * @param int $id_plato   
     * @param string $nombre    
     *           
     */
    public function __construct($ingredientes, $id_plato, $nombre)
    {
        $this->ingredientes = $ingredientes;
        $this->id_plato = $id_plato;
        $this->nombre = $nombre;
      
    }

    public abstract function verPlatoFondo();


}

?>
