<?PHP


class Promo{

		private $id;
		private $idProd;
        private $date_debut;
        private $date_fin;
        private $prix_nouveau;
		private $taux;

    



	function __construct($Id,$idp,$Date_debut,$Date_fin,$Prix_Nouveau,$taux){
		$this->id=$Id;
		$this->idProd=$idp;
		$this->date_debut=$Date_debut;
		$this->date_fin=$Date_fin;
		$this->prix_nouveau=$Prix_Nouveau;
		$this->taux=$taux;
		


	}
	
	function getid(){
		return $this->id;
	}
	function getidProd(){
		return $this->idProd;
	}
	function getdate_debut(){
		return $this->date_debut;
	}
	
	function getdate_fin(){
		return $this->date_fin;
	}
	function getprix_nouveau(){
		return $this->prix_nouveau;
	}
	function gettaux(){
		return $this->taux;
	}

	
	function setid($id){
		$this->id=$id;
	}
	function setidProd($idp){
		$this->idProd=$idp;
	}


	function setnom($Nom){
		$this->nom=$Nom;
	}
	
	function setdate_debut($Date_debut){
		 $this->date_debut=$Date_debut;
	}
	function setdate_fin($Date_fin){
		$this->date_fin=$Date_fin;
    }
    function setprix_nouveau($Prix_Nouveau){
		$this->prix_nouveau=$Prix_Nouveau;
	}


	
}

?>