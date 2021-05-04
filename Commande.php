<?php
class Commande
{
	private $Id ;
	private $Panier ;
	private $Total ;
    private $Paiement;
	private $Quantite;

  

	public function getId()
	{
		return $this->Id ;
	}
	public function getPanier()
	{
		return  $this->Panier ;
	}
	public function getTotal()
	{
		return $this->Total ;
	}
    public function getPaiement()
	{
		return $this->Paiement ;
	}
	public function getQuantite()
	{
		return $this->Quantite ;
	}
    
	public function setId($Id)
	{
		$this->Id=$Id ;
	}
	public function setPanier($Panier)
	{
		 $this->Panier=$Panier ;
	}
	public function setTotal($Total)
	{
		$this->Total=$Total ;
	}
    public function setPaiement($Paiement)
	{
		$this->Paiement=$Paiement ;
	}
	public function setQuantite($Quantite)
	{
		$this->Quantite=$Quantite ;
	}
	
  
	public function __construct($Panier,$Total,$Paiement,$Quantite)
	{
		
		 $this->Panier=$Panier ;
		$this->Total=$Total ;
        $this->Paiement=$Paiement ;
		$this->Quantite=$Quantite ;
	}
}
?>