<?php

namespace Proyecto;

//HAY QUE VER BIEN ESTO
require_once 'PrepararPedido.class.php';

class Pedido extends PrepararPedido {
    
    protected $id_pedido;
    public $entrada;
    public $plato_fondo;
    public $postre;

    public function construyePedido() {//??????
        $this->contenido[] = $documento;
    }

    /*public function imprime() {

        return array(
            'tipoDocumento' =>  "HTML",
            'contenido' =>  $this->contenido,

        );
    }*/
}

//<?php

//namespace Proyecto;

//abstract class Documentacion {
    /**
     * 
     * @var "Lista de string"
     */
//    protected $contenido = array();
    /**
     *
     * @param string $documento            
     */
//    public abstract function agregaDocumento($documento);

//    public abstract function imprime();

//}
