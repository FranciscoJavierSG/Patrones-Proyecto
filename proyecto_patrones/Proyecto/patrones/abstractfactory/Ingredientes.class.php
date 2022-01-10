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

    //Habria que definir bien esto,  
    public function agregarIngrediente($stock,$nombre,$tipoIngrediente){
        $this->stock = $stock;
        $this->nombre = $nombre;
        $this->tipoIngrediente = $tipoIngrediente;
    }
    public function eliminarIngrediente($stock,$nombre,$tipoIngrediente){
        //Esta cosa seria algo asi como
        //Ingrediente tomate= null;?

    }
    public function verIngrediente($stock,$nombre,$tipoIngrediente){

        $this->stock = $stock;
        $this->nombre = $nombre;
        $this->tipoIngrediente = $tipoIngrediente;

        return array(
            'Stock '=> $this->stock,
            'Nombre' => $this->nombre,
            'Tipo de ingrediente' => $this->tipoIngrediente
            );
    }
    public function modificarIngrediente($stock,$nombre,$tipoIngrediente){

        //Esta deberia modificar el ingrediente y a la vez servir para modificar el stock aumentandolo
        


    }
    public function modificarStock($stock,$nombre,$tipoIngrediente){
        //Esto elimina el stock de un ingrediente
        $this->stock = $stock;
        $this->nombre = $nombre;
        $this->tipoIngrediente = $tipoIngrediente;
        if($this->stock <=0){
            return 'no hay stock';
        }else{
            $this->stock = $stock-1;
        }

    }

}

?>