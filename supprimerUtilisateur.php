<?PHP
include "UtilisateurC.php";
$UtilisateurC=new UtilisateurC();
if (isset($_POST["Id"])){
	$UtilisateurC->supprimerUtilisateur($_POST["Id"]);
	header('Location:sample-page.html');
	
}

?>