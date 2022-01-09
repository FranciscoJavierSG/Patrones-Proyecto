<?php
namespace Proyecto;

require_once 'PlatoEntrada.class.php';


class EntradaCarnica extends PlatoEntrada
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

    

    public function crearPlatoEntrada()
    {
      
      
     
    }

    public function verPlatoEntrada()
    {
      
        return array(
    
        'ingredientes' =>  $this->ingredientes,
        'disponible' => $this->disponible,
        'id_entrada' => $this->id_entrada,
        );
    }

    public function eliminarPlatoEntrada()
    {
      
      
     
    }

    public function editarPlatoEntrada()
    {
      
      
     
    }
}

?>
