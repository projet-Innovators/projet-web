
<?PHP
include "../core/produitC.php";

if (isset($_POST["Id"]) ){
	$Produit1C=new ProduitC();
	$Produit1C->supprimerproduit($_POST["Id"]);
	//echo "supprimé";
	header('Location: checkout_produit.php');
}
else {
	echo"fail";
}
?>