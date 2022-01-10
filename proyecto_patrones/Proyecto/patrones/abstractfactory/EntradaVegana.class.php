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
     * @param int $id_entrada         
     */
    public function __construct($ingredientes, $disponible, $id_entrada)
    {
        parent::__construct($ingredientes, $disponible, $id_entrada);
    }

    public function crearPlatoEntrada($ingredientes, $disponible, $id_entrada)
    {
        return new PlatoEntrada(
            $ingredientes,
            $disponible,
            $id_entrada
        );
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

