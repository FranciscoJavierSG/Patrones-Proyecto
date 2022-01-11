<?php
namespace Proyecto;
require_once 'tipoIngrediente.php';
class Ingredientes {

    /**
     *
     * @param int $stock         
     * @param String $nombre
     * @param tipoIngrediente $tipoIngrediente                  
     * @return Ingrediente
     */

     public $stock;
     public $nombre;
     public $tipoIngrediente;

     public function __construct($stock, $nombre, $tipoIngrediente)
     {
         $this->id_plato = $id_plato;
         $this->nombre = $nombre;
         $this->tipoIngrediente = $tipoIngrediente;
       
     }

}

?>