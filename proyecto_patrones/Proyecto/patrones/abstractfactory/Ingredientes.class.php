<?php
namespace Proyecto;
require_once 'tipoIngrediente.php';
class Ingredientes {

    /**
     *
     * @param array $ingrediente                      
     * @return $ingrediente
     */
    public function agregarIngrediente($ingrediente);
    public function eliminarIngrediente($ingrediente);
    public function verIngrediente();
    public function modificarIngrediente();
    public function modificarStock();

}

?>