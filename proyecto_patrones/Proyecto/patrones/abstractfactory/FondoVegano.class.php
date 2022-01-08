<?php
namespace Proyecto;

require_once 'PlatoFondo.class.php';


class FondoVegano extends PlatoFondo
{
//Falta definir las variables
    /**
     *
     * @param string $modelo            
     * @param string $color            
     * @param int $potencia            
     */
    public function __construct($modelo, $color, $potencia)
    {
        parent::__construct($modelo, $color, $potencia);
    }

    public function mostrar()
    {
      
        return array(
            'tipo' =>  "Electrico",
            'modelo' =>  $this->modelo,
        'color' => $this->color,
        'potencia' => $this->potencia,
        );
    }
}

?>
