<?PHP

include "../core/UtilisateurC.php";

include "../entities/Utilisateur.php";

if ( isset ($_GET['Nom']) and isset($_GET['Prenom'])and isset($_GET['Email'])and isset($_GET['Role'])and isset($_GET['Password'])and isset ($_GET['Date_de_naissance']) and isset($_GET['Sexe']))
{	
$Utilisateur=new Utilisateur($_GET['Nom'],$_GET['Prenom'],$_GET['Date_de_naissance'],$_GET['Sexe'],$_GET['Role'],$_GET['Password'],$_GET['Email']);
$UtilisateurC=new UtilisateurC() ;
if($UtilisateurC->valider_email($_GET['Email']))
  {$UtilisateurC->AjouterUtilisateur($Utilisateur);
	$UtilisateurC->AfficherUtilisateurs($Utilisateur);
	header('Location: sign-up.php');

}
	

else {
	
	?> 	
	<p style="color:red">Adresse email deja utilisé</p> 
	
<?php
    echo "<br>";}


}




?>



