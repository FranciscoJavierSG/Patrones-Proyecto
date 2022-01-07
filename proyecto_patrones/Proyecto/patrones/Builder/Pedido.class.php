<?php

namespace Proyecto;

//HAY QUE VER BIEN ESTO
require_once 'PrepararPedido.class.php';

class Pedido{
    
    protected $id_pedido;
    public $entrada;
    public $plato_fondo;
    public $postre;

    public function construyePedido() {//??????
        //$this->id_pedido = $var;no cacho de donde sale este, en vola falta algo que lo manipule
        $this->entrada = $entrada;
        $this->plato_fondo=$plato_fondo;
        $this->postre=$postre;


        return array('id_pedido' => '1',
                    'entrada' => $this->entrada,
                    'plato_fondo' => $this->plato_fondo,
                    'postre' => $this->postre );

    }
/*
    public function verPedido(){
        return array('id_pedido' => '1',
        'entrada' => $this->entrada,
        'plato_fondo' => $this->plato_fondo,
        'postre' => $this->postre );
    }
*/

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
