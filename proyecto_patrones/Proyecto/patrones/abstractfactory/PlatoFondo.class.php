<?php
namespace Proyecto;

abstract class PlatoFondo
{
    //Como en todas las weas, faltan las variables
    /**
     * 
     * @var string
     */
    public $modelo;
    /**
     * 
     * @var string
     */
    public $color;
    /**
     * 
     * @var int
     */
    public $potencia;
    
    /**
     *
     * @param string $modelo            
     * @param string $color            
     * @param int $potencia            
     */
    public function __construct($modelo, $color, $potencia)
    {
        $this->modelo = $modelo;
        $this->color = $color;
        $this->potencia = $potencia;
    }

    public abstract function mostrar();
}

?>
