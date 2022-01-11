<?php
namespace Proyecto;

require_once 'PlatoFondo.class.php';


class FondoCarnico extends PlatoFondo
{
    /**
     *
     * @param int $id_plato                         
     * @param string $nombre   
     * @param int $precio       
     */
    public function __construct($id_plato, $nombre, $precio)
    {
        parent::__construct($id_plato, $nombre, $precio);
    }



    public function verPlatoFondo()
    {  
        return array(
    
        'id_plato' =>  $this->id_plato,
        'nombre' => $this->nombre,
        'precio' => $this->precio,
        );
    }


}

?>
