
<?PHP
include "Commandes.php" ;
include "CommandesC.php" ;

	if ( isset($_GET['Adresse'])and isset($_GET['ajouter']) )
{	
$Commandes=new Commandes($_GET['Adresse']);
$CommandesC=new CommandesC() ;
$CommandesC->AjouterCommandes($Commandes);}
	


?> 