
<?PHP
include "Utilisateur.php" ;
include "UtilisateurC.php" ;

	if ( isset ($_GET['Nom']) and isset($_GET['Prenom'])and isset($_GET['Email'])and isset($_GET['Password'])and isset ($_GET['Date_de_naissance']) and isset($_GET['Sexe']))
{	
$Utilisateur=new Utilisateur($_GET['Nom'],$_GET['Prenom'],$_GET['Email'],$_GET['Password'],$_GET['Date_de_naissance'],$_GET['Sexe']);
$UtilisateurC=new UtilisateurC() ;
if($UtilisateurC->valider_email($_GET['Email']))
  {$UtilisateurC->AjouterUtilisateur($Utilisateur);

}

else {
	?> 	
	<p style="color:red">Adresse email deja utilisé</p> 
	
<?PHP
    echo "<br>";}


}
else
	{
		echo "vérifier les champs";	
	}
  


?> 