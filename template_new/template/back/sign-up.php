

<?php
include "Utilisateur.php" ;
include "UtilisateurC.php" ;
if ( isset ($_GET['Nom']) and isset($_GET['Prenom'])and isset($_GET['Email'])and isset($_GET['Role'])and isset($_GET['Password'])and isset ($_GET['Date_de_naissance']) and isset($_GET['Sexe']))
{	
$Utilisateur=new Utilisateur($_GET['Nom'],$_GET['Prenom'],$_GET['Date_de_naissance'],$_GET['Sexe'],$_GET['Role'],$_GET['Password'],$_GET['Email']);
$UtilisateurC=new UtilisateurC() ;
if($UtilisateurC->valider_email($_GET['Email']))
  {$UtilisateurC->AjouterUtilisateur($Utilisateur);
	$UtilisateurC->AfficherUtilisateurs($Utilisateur);

}
	

else {
	?> 	
	<p style="color:red">Adresse email deja utilisé</p> 
	
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
	
	<li><?PHP echo "Password"." : ".$row['Password']; ?></li>
	<li><?PHP echo "Email"." : ".$row['Email']; ?></li>
	
	
	
</ul>
	<?PHP
	}
	
}


?> 