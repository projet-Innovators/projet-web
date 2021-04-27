<?PHP
include "CommandeC.php";
$CommandeC=new CommandeC();
if (isset($_POST["Id"])){
	$CommandeC->supprimerCommande($_POST["Id"]);
	header('Location:breadcrumb.html');
}

?>