<?PHP

include "../core/reclamationC.php";

if (isset($_POST['subject']) and isset($_POST['message'])){

	$targetDir = "images/";
	$fileName = basename($_FILES['photo']['nom']);
	$targetFilePath = $targetDir . $fileName;
	$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
 //   echo $fileName."--";
  //  echo $targetFilePath;
	move_uploaded_file($_FILES['photo']['nom'],$targetFilePath);

	

	$reclam=new Reclamtion("1",$_POST['subject'],$_POST['photo'],$_POST['message'],0);



$reclamC=new reclamtionC();


$reclamC-> ajouterReclamtion($reclam);
//echo("<script> window.location.replace(\"checkout_camping.php\")</script>");
header('Location: contact.php');

}else{
	echo "vérifier les champs";
}
//*/

?>



