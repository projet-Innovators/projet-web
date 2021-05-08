<?PHP

include "../core/produitC.php";


if (isset($_POST['Nom']) and isset($_POST['Prix']) and isset($_POST['Quantite']) and isset($_POST['Description'])and isset($_POST['Idcat']) )
{
  print_r($_FILES);
  $targetDir = "images/";
  $fileName = basename($_FILES['Image']['name']);
  $targetFilePath = $targetDir . $fileName;
  $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

  move_uploaded_file($_FILES['Image']['tmp_name'],$targetFilePath); 
$Produit1=new Produit($_POST['Id'],$_POST['Idcat'],$_POST['Nom'],$_POST['Prix'],$fileName,$_POST['Quantite'],$_POST['Description']);
$Produit1C=new ProduitC();

$Produit1C->ajouterproduit($Produit1);




header('Location: checkout_produit.php');


}
else{
  
  echo"error";

}


?>

