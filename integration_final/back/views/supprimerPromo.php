<?PHP
include "../core/produitC.php";
include "../core/promoC.php";
if (isset($_POST["Id"]) ){
	$Promo1C=new PromoC();
	$Promo1C->supprimerPromo($_POST["Id"]);
	$id=$_POST["Id"];
	//echo "supprimé";
	header('Location: checkout_produit');
}
else {
	echo"fail";
}
?>