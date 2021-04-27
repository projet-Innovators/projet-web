
<?PHP
include "Utilisateur.php" ;
include "UtilisateurC.php" ;
	if (isset($_GET['Id']) and isset ($_GET['Nom']) and isset($_GET['Prenom'])and isset ($_GET['Date_de_naissance']) and isset($_GET['Sexe'])and isset ($_GET['Role']) and isset($_GET['Login']))
{	
$Utilisateur=new Utilisateur($_GET['Id'],$_GET['Nom'],$_GET['Prenom'],$_GET['Date_de_naissance'],$_GET['Sexe'],$_GET['Role'],$_GET['Login']);
$UtilisateurC=new UtilisateurC() ;
$UtilisateurC->AjouterUtilisateur($Utilisateur);
$UtilisateurC->AfficherUtilisateurs($Utilisateur);
}
else
	{
		echo "vérifier les champs";	
	}


?>
<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from demo.hasthemes.com/marten-preview/marten-v1/login-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Apr 2021 22:28:46 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Innovators - Pet Food eCommerce Bootstrap4 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- all css here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/simple-line-icons.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
