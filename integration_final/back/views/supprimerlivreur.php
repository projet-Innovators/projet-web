<?PHP
include "../core/livreurc.php";
$livreur1c=new livreurc();
if (isset($_POST["idL"])){
	$livreur1c->supprimerlivreur($_POST["idL"]);
	header('Location: afficherlivreur.php');
}

?>