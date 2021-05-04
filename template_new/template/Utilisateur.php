<?php
class Utilisateur
{
	private $Id ;
	private $Nom ;
	private $Prenom ;
	private $Email ;
	private $Password ;
    private $Date_de_naissance;
	private $Sexe ;
	
 

	public function getId()
	{
		return $this->Id ;
	}
	public function getNom()
	{
		return  $this->Nom ;
	}
	public function getPrenom()
	{
		return $this->Prenom ;
	}
	public function getPassword()
	{
		return $this->Password ;
	}
	public function getEmail()
	{
		return $this->Email ;
	}
    public function getDate_de_naissance()
	{
		return $this->Date_de_naissance ;
	}
	public function getSexe()
	{
		return  $this->Sexe ;
	}
	

	public function setId($Id)
	{
		$this->Id=$Id ;
	}
	public function setNom($Nom)
	{
		 $this->Nom=$Nom ;
	}
	public function setPrenom($Prenom)
	{
		$this->Prenom=$Prenom ;
	}
    public function setDate_de_naissance($Date_de_naissance)
	{
		$this->Date_de_naissance=$Date_de_naissance ;
	}
	public function setPassword($Password)
	{
		 $this->Password=$Password ;
	}
	public function setSexe($Sexe)
	{
		 $this->Sexe=$Sexe ;
	}
	public function setEmail($Email)
	{
		 $this->Email=$Email ;
	}

  
	public function __construct($Nom,$Prenom,$Email,$Password,$Date_de_naissance,$Sexe)
	{
		
		$this->Nom=$Nom ;
		$this->Prenom=$Prenom ;
		$this->Email=$Email;
		$this->Password=$Password;
        $this->Date_de_naissance=$Date_de_naissance ;
        $this->Sexe=$Sexe;
	
      
	}
}
?>