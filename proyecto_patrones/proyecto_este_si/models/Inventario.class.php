<?php

namespace Proyecto;

require_once 'Ingredientes.class.php';

class Inventario extends Ingredientes {

    /**
     *
     * @param bool $disponible                         
     * @param array $ingrediente    
     * return $disponible
     */

    //Aca le paso los datos desde otra parte como puede ser tanto desde la api como desde el codigo
    public function __construct($stock, $nombre, $tipoIngrediente) {
        parent::__construct($stock, $nombre, $tipoIngrediente);
    }

    //Mi duda es como entregarle los ingredientes a esta clase (podria usar un constructor? 
    // podria sacarlos implementando los metodos de ingrediente tambien!)
    public function eliminarIngrediente($nombre) {
    }
    public function modificiarIngrediente() {
    }
    public function modificarStock() {
    }

    //Esta funcion deberia mostrar los ingredientes
    public function verIngrediente() {
    }

    //Esta funcion retorna el booleano
    public function validarStockIngrediente() {
    }
}
