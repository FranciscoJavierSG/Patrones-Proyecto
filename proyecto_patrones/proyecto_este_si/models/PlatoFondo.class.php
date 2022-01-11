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
     * @var string
     */

    public $nombre;
 
    /**
     * 
     * @var int
     */
    public $id_plato;
    /**
     * 
     * @var int
     */

    public $precio;
    /**
     *
     * @param array $nombre           
     * @param int $id_plato  
     * @param string $precio
     *           
     */
    public function __construct($ingredientes,$nombre, $id_plato, $precio)
    {
        $this->ingredientes=$ingredientes;
        $this->nombre = $nombre;
        $this->id_plato = $id_plato;
        $this->precio = $precio;
      
    }

    public abstract function verPlatoFondo();


}

?>
