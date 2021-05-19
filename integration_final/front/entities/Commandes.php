<?php
class Commandes
{
	private $Id ;
	
	private $id_produit;
	
	private $Total ;
   
	private $id_user;

	private $Adresse;

	private $Date;
	
  

	public function getId()
	{
		return $this->Id ;
	}
	public function getid_produit()
	{
		return  $this->id_produit ;
	}
	public function getTotal()
	{
		return $this->Total ;
	}
    public function getid_user()
	{
		return $this->id_user ;
	}
	public function getAdresse()
	{
		return $this->Adresse;
	}
	public function getDate()
	{
		return $this->Date ;
	}
    
	public function setId($Id)
	{
		$this->Id=$Id ;
	}
	public function setid_produit($id_produit)
	{
		$this->id_produit=$id_produit ;
	}
	public function setid_user($id_user)
	{
		 $this->id_user=$id_user ;
	}
	public function setTotal($Total)
	{
		$this->Total=$Total ;
	}
    public function setAdresse($Adresse)
	{
		$this->Adresse=$Adresse ;
	}
	public function setDate($Date)
	{
		$this->Date=$Date ;
	}
	
  
	public function __construct($Adresse)
	{
		
	
        $this->Adresse=$Adresse ;
		
		
	
	}
}
?>