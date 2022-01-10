<?php
namespace Proyecto;

require_once 'PlatoFondo.class.php';


class FondoVegano extends PlatoFondo
{

    /**
     *
     * @param array $ingredientes                 
     * @param int $id_plato     
     * @param string $nombre       
     */
    public function __construct($ingredientes, $id_plato, $nombre)
    {
        parent::__construct($ingredientes, $id_plato, $nombre);
    }



    public function verPlatoFondo()
    {  
        return array(
    
        'ingredientes' =>  $this->ingredientes,
        'id_plato' => $this->id_plato,
        'nombre' => $this->nombre,
        );
    }


}

?>
