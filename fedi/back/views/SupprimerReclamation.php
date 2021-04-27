<?PHP
include "../core/reclamationC.php";
$reclam=new reclamtionC();
if (isset($_POST["id"])){
	$reclam->supprimerReclamtion($_POST["id"]);
	header('Location: checkout_reclamation.php');
}

?>