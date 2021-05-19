<?php
 class noter{
     private $id;
      private $iduser;
	 private $idarticle;
	  private $note;
	  
	    
 
    public function __construct(){
		
	
		
		}
		
		
 
      
		public function setId($id)
		{
			$this->id=$id;
		}
		
		public function setIduser($iduser)
		{
			$this->iduser=$iduser;
		}
		
		
		public function setIdarticle($idarticle)
		{
			$this->idarticle=$idarticle;
		}
		
		
	
		public function setNote($note)
		{
			$this->note=$note;
		}
		
		public function getId(){
			return $this->id;
		}
	public function getIduser()
		{
			return $this->iduser;
		}
		public function getIdarticle(){
			return $this->idarticle;
		}
		
		
		
	public function getNote(){
			return $this->note;
		}
		
		
}

?>