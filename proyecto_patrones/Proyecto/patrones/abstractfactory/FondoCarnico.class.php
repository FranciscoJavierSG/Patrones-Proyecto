<?php
namespace Proyecto;

require_once 'PlatoFondo.class.php';


class FondoCarnico extends PlatoFondo
{
//Falta definir las variables
    /**
     *
     * @param array $ingredientes          
     * @param bool $disponible            
     * @param int $id_entrada         
     */
    public function __construct($ingredientes, $disponible, $id_entrada)
    {
        parent::__construct($ingredientes, $disponible, $id_entrada);
    }

    

    public function crearPlatoFondo()
    {
      
      
     
    }

    public function verPlatoFondo()
    {
      
        return array(
    
        'ingredientes' =>  $this->ingredientes,
        'disponible' => $this->disponible,
        'id_entrada' => $this->id_entrada,
        );
    }

    public function eliminarPlatoFondo()
    {
      
      
     
    }

    public function editarPlatoFondo()
    {
      
      
     
    }
}

?>
