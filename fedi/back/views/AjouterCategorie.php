<?PHP

include "../core/categorieC.php";

if (isset($_POST['nom']) and isset($_POST['image'])){
	 
$categorie1=new Categorie($_POST['id'],$_POST['nom'],$_POST['image']);
$categorieC1=new CategorieC();
$categorieC1-> ajouterCategorie($categorie1);
//echo("<script> window.location.replace(\"checkout_categorie.php\")</script>");
header('Location: checkout_categorie.php');

}else{
	echo "vérifier les champs";
}
//*/

?>



