<?php
namespace Proyecto;

require_once 'PlatoEntrada.class.php';


class EntradaCarnica extends PlatoEntrada
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
