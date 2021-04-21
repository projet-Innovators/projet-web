<?PHP

class Reclamtion
{
	private $Id_Client;
	private $Objet;
	private $Capture;
	private $Contenu;
	private $Etat;

	function __construct($id,$objet,$capture,$contenu,$etat)
	{
		$this->Id_Client=$id;
		$this->Objet=$objet;
		$this->Capture=$capture;
		$this->Contenu=$contenu;
		$this->Etat=$etat;
	}
    function getId(){return $this->Id_Client;}
    function getObjet(){return $this->Objet;}
    function getCapture(){return $this->Capture;}
    function getContenu(){return $this->Contenu;}
    function getEtat(){return $this->Etat;}
    
    function setId($id){
		$this->Id_Client=$id;
	}
	function setObjet($ob){
		$this->Objet=$ob;
	}
	function setType($capture){
		$this->Capture=$capture;
	}
	function setContenu($contenu){
		$this->Contenu=$contenu;
	}
    function setEtat($etat)
    {
    	$this->Etat=$etat;
    }

}

?>