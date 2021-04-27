<?PHP

include "../core/promoC.php";
include "../core/produitC.php";

if (isset($_POST['idProd']) and isset($_POST['date_debut']) and isset($_POST['date_fin']) and isset($_POST['prix_nouveau']) ){

	$produit1C=new ProduitC();
	$listeProduits=$produit1C->afficherproduits();
	$promocc=new promoC();

	
    
$today=date("Y-m-d");
    $priiix=$_POST['prix_nouveau'];
	$yID=$_POST['idProd'];
    

	$sql="SELECT prix from produit  where id = $yID  ";
	$db = config::getConnexion();
	$idPrix=$db->query($sql);
	
	foreach($idPrix as $nn){
		$prix = $nn['prix'];
	}

	$tauxx=$promocc->calcultaux($prix,$priiix);

	if($priiix<$prix)
	{
		
	
$promo1=new promo($_POST['id'],$_POST['idProd'],$_POST['date_debut'],$_POST['date_fin'],$_POST['prix_nouveau'],$tauxx);


//var_dump($promo1);

//Partie3
$promo1C=new promoC();


if($_POST['date_fin']< $_POST['date_debut'])
{
	echo("<script> alert(\"il faut que la date fin soit superieur a la date debut\")</script>");
	echo("<script> document.Location.replace(\"checkout_promo.php\")</script>");

}
else if($today<$_POST['date_fin']){
$promo1C->ajouterPromo($promo1);
header('Location: checkout_promo.php');
//echo ("$today=("y-m-d")");

}else
{

	echo("<script> alert(\"vérifier la date fin avec la date actuelle\")</script>");
	echo("<script> window.location.replace(\"checkout_promo.php\")</script>");
}
}else{
		
	echo("<script> alert(\"verifier le prix\")</script>");
	echo("<script> window.location.replace(\"checkout_promo.php\")</script>");


}
}

else{
	echo("<script> alert(\"verifier les champs\")</script>");
    header('Location: checkout_promo.php');}
//*/

?>