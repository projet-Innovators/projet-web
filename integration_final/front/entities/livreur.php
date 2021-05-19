<?PHP
class livreur{

	private $idl;
	private $nom;
	private $prenom;
	

    
	function __construct($id,$nom,$prenom){
		$this->idl=$id;
		$this->nom=$nom;
		$this->prenom=$prenom;
	}
	
	function getid(){
		return $this->idl;
	}

	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	

	function setnom($nom){
		$this->nom=$nom;
	}
	function setprenom($prenom){
		$this->prenom=$prenom;
	}

	
}

?>