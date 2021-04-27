<?PHP
class Produit{
    private $id;
	private $IdCat;
	private $Nom;
	private $Prix;
	private $Image;
	private $Quantite;
	private $Description;
	
	

	function __construct($Id,$idCat,$nom,$prix,$image,$quantite,$description){
        $this->id=$Id;
		$this->IdCat=$idCat;
		$this->Nom=$nom;
		$this->Prix=$prix;
		$this->Image=$image;
		$this->Quantite=$quantite;
		$this->Description=$description;
	
	}


	function getId(){
		return $this->id;
	}	
	function getIdCat(){
		return $this->IdCat;
	}
	function getNom(){
		return $this->Nom;
	}
	function getPrix(){
		return $this->Prix;
	}
	
	function getImage(){
		return $this->Image;
	}
	function getDescription(){
		return $this->Description;
	}
    function getQuantite(){
		return $this->Quantite;
	}

	

	
	
	function setId($Id){
		$this->id=$Id;
	}
	function setIdCat($idCat){
		$this->IdCat=$idCat;
	}
	function setNom($nom){
		$this->Nom=$nom;
	}
	function setPrix($prix){
		$this->Prix=$prix;
	}
	
	function setImage($image){
		 $this->Image=$image;
	}
	function setDescription($description){
		$this->Description=$description;
	}

	function setQuantite($quantite){
		 $this->Quantite=$quantite;
	}


	
}

?>