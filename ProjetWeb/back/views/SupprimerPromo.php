<?PHP
include "../core/promoC.php";
$promo=new PromoC();
if (isset($_POST["Id"])){
	$promo->supprimerPromo($_POST["Id"]);
	header('Location: checkout_promo.php');
}

?>