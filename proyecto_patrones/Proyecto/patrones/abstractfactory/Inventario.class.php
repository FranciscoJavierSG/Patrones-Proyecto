<?php
namespace Proyecto;

require_once 'Ingrediente.class.php';


class Inventario {

    /**
     *
     * @param bool $disponible                         
     * @param array $ingrediente    
     * return $disponible
     */
   

     //Mi duda es como entregarle los ingredientes a esta clase (podria usar un constructor? 
     // podria sacarlos implementando los metodos de ingrediente tambien!)
     public function eliminarIngrediente();
     public function modificiarIngrediente();
     public function modificarStock();

     //Esta funcion deberia mostrar los ingredientes
     public function verIngrediente();

     //Esta funcion retorna el booleano
     public function validarStockIngrediente();


}

?>