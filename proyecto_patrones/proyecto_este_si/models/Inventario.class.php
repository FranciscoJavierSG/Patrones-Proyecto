<?php
namespace Proyecto;

require_once 'Ingredientes.class.php';

class Inventario extends Ingredientes{

    /**
     * @param bool $disponible                         
     * @param array $ingrediente    
     * return $disponible
     */
   
    public function __construct($stock, $nombre, $tipoIngrediente)
    {
        parent::__construct($stock, $nombre, $tipoIngrediente);
    }

     public function eliminarIngrediente($nombre){}
     
     public function modificiarIngrediente(){}
    
     public function modificarStock($stock,$ingrediente){}

     public function verIngrediente(){}

     public function validarStockIngrediente(){}


}

?>