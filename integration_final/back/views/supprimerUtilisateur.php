<?PHP
include "../core/UtilisateurC.php";
$UtilisateurC=new UtilisateurC();
if (isset($_POST["Id"])){
	$UtilisateurC->supprimerUtilisateur($_POST["Id"]);
	header('Location: sign-up.php');
}?>