<?php
class Utilisateur
{
	private $Id ;
	private $Nom ;
	private $Prenom ;

	
    private $Date_de_naissance;
	private $Sexe ;
	private $Role ;
	private $Password;
	private $Email ;
	
 

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
	public function getRole()
	{
		return  $this->Role ;
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

	public function setRole($Role)
	{
		 $this->Role=$Role ;
	}


	
  
	public function __construct($Nom,$Prenom,$Date_de_naissance,$Sexe,$Role,$Password,$Email)
	{
		
		$this->Nom=$Nom ;
		$this->Prenom=$Prenom ;
		$this->Role=$Role;
        $this->Date_de_naissance=$Date_de_naissance ;
        $this->Sexe=$Sexe;
		$this->Password=$Password;
		$this->Email=$Email;
	
      
	}
}
?>