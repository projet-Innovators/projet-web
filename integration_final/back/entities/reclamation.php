<?PHP

class Reclamtion
{
	private $Id_Client;
	private $Objet;
	private $Capture;
	private $Contenu;
	private $Etat;

	function __construct($id_Client,$objet,$capture,$contenu,$etat)
	{
		$this->Id_Client=$id_Client;
		$this->Objet=$objet;
		$this->Capture=$capture;
		$this->Contenu=$contenu;
		$this->Etat=$etat;
	}
    function getId_Client(){return $this->Id_Client;}
    function getObjet(){return $this->Objet;}
    function getCapture(){return $this->Capture;}
    function getContenu(){return $this->Contenu;}
    function getEtat(){return $this->Etat;}
    
    function setId_Client($id_Client){
		$this->Id_Client=$id_Client;
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