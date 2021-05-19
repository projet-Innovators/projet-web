<?PHP

include "../core/promoC.php";
include "../core/produitC.php";

if (isset($_POST['idProd']) and  isset($_POST['date_fin']) and isset($_POST['taux']) ){

	$produit1C=new ProduitC();
	$listeProduits=$produit1C->afficherproduits();
	$promocc=new promoC();

	
    
$today=date("Y-m-d");
    $taux=$_POST['taux'];
	$yID=$_POST['idProd'];
    

	$sql="SELECT prix from produit  where id = $yID  ";
	$db = config::getConnexion();
	$idPrix=$db->query($sql);
	
	foreach($idPrix as $nn){
		$prix = $nn['prix'];
	}

	$prixF=$promocc->calcultaux($prix,$taux);

	if($prixF<$prix)
	{
		
	
$promo1=new promo($_POST['id'],$_POST['idProd'],$today,$_POST['date_fin'],$prixF,$taux);


//var_dump($promo1);

//Partie3
$promo1C=new promoC();


if($today<$_POST['date_fin']){
$promo1C->ajouterPromo($promo1);
header('Location: checkout_produit.php');
//echo ("$today=("y-m-d")");

}else
{

	echo("<script> alert(\"vérifier la date fin avec la date actuelle\")</script>");
	echo("<script> window.location.replace(\"checkout_produit.php\")</script>");
}
}else{
		
	echo("<script> alert(\"verifier le prix\")</script>");
	echo("<script> window.location.replace(\"checkout_produit.php\")</script>");


}
}

else{
	echo("<script> alert(\"verifier les champs\")</script>");
    header('Location: checkout_produit.php');
}
//*/

?>