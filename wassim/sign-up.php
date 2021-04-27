

<?php
include "Utilisateur.php" ;
include "UtilisateurC.php" ;

	if ( isset ($_GET['Nom']) and isset($_GET['Prenom'])and isset ($_GET['Date_de_naissance']) and isset($_GET['Sexe']) and isset($_GET['Role']))
{	
$Utilisateur=new Utilisateur($_GET['Nom'],$_GET['Prenom'],$_GET['Date_de_naissance'],$_GET['Sexe'],$_GET['Role']);
$UtilisateurC=new UtilisateurC() ;
if($UtilisateurC->valider_la_date_de_naissance($_GET['Date_de_naissance']))
  {$UtilisateurC->AjouterUtilisateur($Utilisateur);
	$UtilisateurC->AfficherUtilisateurs($Utilisateur);
	
}

else {
	?> 	
	<p style="color:red">date de naissance invalide</p> 
	
<?php
    echo "<br>";}


}




	if (isset($_GET['Nom']) and isset($_GET['rechercher']) ){
		$UtilisateuRC=new UtilisateurC();
	   $liste=$UtilisateuRC->rechercherListeUtilisateur($_GET['Nom']);
	    echo " Résultat trouvé " ;
	   foreach($liste as $row)
{
	?>
	<ul >
	<li><?PHP echo "ID"." : ".$row['Id']; ?></li>
	<li><?PHP echo "Nom"." : ".$row['Nom']; ?></li>
	<li><?PHP echo "Prenom"." : ".$row['Prenom']; ?></li>
    <li><?PHP echo "Date_de_naissance"." : ".$row['Date_de_naissance']; ?></li>
	<li><?PHP echo "Sexe"." : ".$row['Sexe']; ?></li>
	<li><?PHP echo "Role"." : ".$row['Role']; ?></li>
	<li><?PHP echo "Login"." : ".$row['Login']; ?></li>
	
	
</ul>
	<?PHP
	}
	
}


?> 