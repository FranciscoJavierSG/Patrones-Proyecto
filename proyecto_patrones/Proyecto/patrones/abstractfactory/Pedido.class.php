<?php
namespace Proyecto;

require_once 'PlatoEntrada.class.php';
require_once 'PlatoFondo.class.php';
require_once 'Venta.class.php';

class EntradaCarnica 
{

    public int $id_plato;
    public String $nombre;
    public int $precio;

    public function __construct($id_plato, $nombre, $precio)
    {
        $this->id_plato = $id_plato;
        $this->nombre = $nombre;
        $this->precio = $precio;
      
    }
    public function mostrarPedido(){
        return array(
            'id plato' => $this->$id_plato,
            'Nombre' => $this->$id_plato,
            'Precio' => $this->$precio
        );
    }

}

?>
