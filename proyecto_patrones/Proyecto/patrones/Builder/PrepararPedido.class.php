<?php
namespace Proyecto;

require_once 'PrepararPedido.class.php';
require_once 'Pedido.class.php';

// ESTA ES EL CONSTRUCTOR REAL
class PrepararPedido extends GenerarPedido
{
    public $pedido;
    public $entrada;
    public $plato_fondo;
    public $postre;

    public function __construct()
    {
        $this->pedido = new Documentacionhtml(); //????????????
    }

    public function construyePedido($entrada, $plato_fondo, $postre){

        $pedido = 
            "<HTML>
            La entrada es: $entrada
            El plato de fondo es: $plato_fondo
            El postre es: $postre
            </HTML>";
    }

    public function construyeFormularioDePedido($nombreCliente)
    {
        $documento = 
            "<HTML>Formulario de pedido Cliente: $nombreCliente</HTML>";
        $this->documentacion->agregaDocumento($documento);
    }

    public function construyeSolicitudMatriculacion(
            $nombreSolicitante)
    {
        $documento = '<HTML>Solicitud de matriculaci�n ' .
            "Solicitante : $nombreSolicitante</HTML>";
        $this->documentacion->agregaDocumento($documento);
    }
}

?>
