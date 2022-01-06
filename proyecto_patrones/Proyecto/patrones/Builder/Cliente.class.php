<?php
namespace Proyecto;

require_once 'ConstructorDocumentoVehiculo.class.php';
//Adaptar a proyecto, es el cliente del builder este
class Vendedor
{
    /**
     * 
     * @var ConstructorDocumentacionVehiculo
     */
    protected $constructor;
    
    /**
     *
     * @param ConstructorDocumentacionVehiculo $constructor            
     */
    public function __construct(ConstructorDocumentacionVehiculo $constructor)
    {
        $this->constructor = $constructor;
    }

    /**
     *
     * @param string $nombreCliente            
     * @return Documentacion
     */
    public function construye($nombreCliente)
    {
        $this->constructor->construyeFormularioDePedido($nombreCliente);
        $this->constructor->construyeSolicitudMatriculacion($nombreCliente);
        return $this->constructor->resultado();
    }
}

?>
