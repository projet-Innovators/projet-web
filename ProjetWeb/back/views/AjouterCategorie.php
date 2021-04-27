<?PHP

include "../core/categorieC.php";

if (isset($_POST['nom'])){
$categorie1=new Categorie($_POST['id'],$_POST['nom']);
$categorieC1=new CategorieC();
$categorieC1-> ajouterCategorie($categorie1);
//echo("<script> window.location.replace(\"checkout_categorie.php\")</script>");
header('Location: checkout_categorie.php');

}else{
	echo "vérifier les champs";
}
//*/

?>



