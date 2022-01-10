<?php
namespace Proyecto;

require_once 'PlatoEntrada.class.php';


class EntradaVegana extends PlatoEntrada
{
//Falta definir las variables
    /**
     *
     * @param array $ingredientes          
     * @param bool $disponible            
     * @param int $id_plato     
     * @param string $nombre       
     */
    public function __construct($ingredientes, $disponible, $id_plato, $nombre)
    {
        parent::__construct($ingredientes, $disponible, $id_plato, $nombre);
    }


    public function verPlatoEntrada()
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

