<?PHP
include "../core/categorieC.php";
$cat=new CategorieC();
if (isset($_POST["id"])){
	$cat->supprimerCategorie($_POST["id"]);
	header('Location: checkout_categorie.php');
}

?>