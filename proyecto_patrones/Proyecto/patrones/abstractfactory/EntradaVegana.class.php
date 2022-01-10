<?php
namespace Proyecto;

require_once 'PlatoEntrada.class.php';


class EntradaVegana extends PlatoEntrada
{
//Falta definir las variables
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


    public function verPlatoEntrada()
    {
      
        return array(
    
        'ingredientes' =>  $this->ingredientes,
        'id_plato' => $this->id_plato,
        'nombre' => $this->nombre,
        );
    }


}

?>

