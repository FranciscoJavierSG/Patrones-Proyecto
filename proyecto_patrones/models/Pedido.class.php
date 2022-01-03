<?php
namespace Builder;

//HAY QUE VER BIEN ESTO
require_once 'Documentacion.class.php';

class Documentacionhtml extends Documentacion
{

    /**
     *
     * @param string $documento            
     */
    public function agregaDocumento($documento)
    {
     
            $this->contenido[] = $documento;
    
    }

    public function imprime()
    {
       
        return array(
            'tipoDocumento' =>  "HTML",
            'contenido' =>  $this->contenido,
        
        );
    }
}

?>


<?php
namespace Builder;

abstract class Documentacion
{
    /**
     * 
     * @var "Lista de string"
     */
    protected $contenido = array();
    
    /**
     *
     * @param string $documento            
     */
    public abstract function agregaDocumento($documento);

    public abstract function imprime();
}

?>
