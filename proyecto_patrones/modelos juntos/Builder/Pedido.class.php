<?php

namespace Proyecto;

//HAY QUE VER BIEN ESTO
require_once 'PrepararPedido.class.php';

class Pedido{
    //public $pedido;
    protected $id_pedido;
    public $entrada;
    public $plato_fondo;
    public $postre;

    public function construyePedido() {
        // no deberia ser simplemente un pedido y no deberia recibir el resto de leseras?
        // eso se hizo en el preparar pedido
        
        //??????
        /*//$this->id_pedido = $var;no cacho de donde sale este, en vola falta algo que lo manipule
        $this->entrada = $entrada;
        $this->plato_fondo=$plato_fondo;
        $this->postre=$postre;


        return array('id_pedido' => '1',
                    'entrada' => $this->entrada,
                    'plato_fondo' => $this->plato_fondo,
                    'postre' => $this->postre 

    }
/*
    public function verPedido(){
        return array('id_pedido' => '1',
        'entrada' => $this->entrada,
        'plato_fondo' => $this->plato_fondo,
        'postre' => $this->postre );
    }
*/b 

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
