<?php
include "../entities/livreur.php";
include "../core/livreurc.php";
if(isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['date'])) 
{
$livreur1=new livreur($_POST['idl'],$_POST['nom'],$_POST['prenom'],$_POST['date']);
$livreur1c= new livreurc();
$livreur1c->ajouterlivreur($livreur1);
header('Location:afficherlivreur.php');
}


	

?>
