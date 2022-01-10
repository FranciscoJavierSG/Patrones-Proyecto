<?php
namespace Proyecto;

require_once 'PlatoFondo.class.php';


class FondoCarnico extends PlatoFondo
{
    /**
     *
     * @param array $ingredientes          
     * @param bool $disponible            
     * @param int $id_plato     
     * @param string $nombre    
     */
    public function __construct($ingredientes, $disponible, $id_plato, $nombre)
    {
        parent::__construct($ingredientes, $disponible, $id_plato, $nombre;
    }



    public function verPlatoFondo()
    {
      
        return array(
    
        'ingredientes' =>  $this->ingredientes,
        'disponible' => $this->disponible,
        'id_plato' => $this->id_plato,
        'nombre' => $this->nombre,
        );
    }


}

?>
