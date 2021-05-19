<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from demo.hasthemes.com/marten-preview/marten-v1/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Apr 2021 22:28:30 GMT -->
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
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <?PHP
include "../entities/livraison.php";
include "../core/livraisonc.php";
if (isset($_GET['id'])){
    $livraison1c=new livraisonc();
    $result=$livraison1c->recupererlivraison($_GET['id']);
    foreach($result as $row){
        $cin=$row['id'];
        $nom=$row['nom'];
        $prenom=$row['adresse'];
        $nbH=$row['etat'];
        $tarifH=$row['total'];
        $tarif=$row['date'];
        $tarifs=$row['livreur'];
?>
 
    <body>
        <header class="header-area">
            <div class="header-bottom transparent-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-5">
                            <div class="logo pt-39">
                                <a href="index.html"><img alt="" src="assets/img/logo/logo.png"></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 d-none d-lg-block">
                            <div class="main-menu text-center">
                                <nav>
                                    <ul>
                                        <li><a href="index.html">HOME</a> </li>
                                        <li class="mega-menu-position"><a href="shop-page.html">Food</a>
                                            
                                        </li>
                                        
                                        
                                        <li><a href="contact.html">contact us</a></li>
                                    </ul>
                                </nav>
                            </div>
                       </div>
                   </div>
               </div>
  <h2 class="title">modification</h2>
<center>
<form method="POST">
<table>
<caption>Modifier livraison</caption>
<tr>
<td>id===>:</td>
<td><input type="number" name="id" value="<?PHP echo $cin ?>"></td>
</tr>
<tr>
<td>Nom     ===>   :</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>adresse     ===>    :</td>
<td><input type="text" name="adresse" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>etat      ===> :</td>
<td><input type="text" name="etat" value="<?PHP echo $nbH ?>"></td>
</tr>
<tr>
<td>total      ===> :</td>
<td><input type="text" name="total" value="<?PHP echo $tarifH ?>"></td>
</tr>
<tr>
<td>date         ===> :</td>
<td><input type="date" name="date" value="<?PHP echo $tarif ?>"></td>
</tr>

                       

<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
</center>
<?PHP
    }
}
else {echo "verifier";}
if (isset($_POST['modifier'])){
    $livraison1=new livraison($_POST['id'],$_POST['nom'],$_POST['adresse'],$_POST['total'],$_POST['date'],$_POST['etat'],$_POST['livreur']);
    $livraison1c->modifierlivraison($livraison1,$_POST['id_ini']);
    echo $_POST['id_ini'];
    header('Location: hiv.php');
}
?>
    
    
    <!-- all js here -->
        <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/elevetezoom.js"></script>
        <script src="assets/js/ajax-mail.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>

<!-- Mirrored from demo.hasthemes.com/marten-preview/marten-v1/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Apr 2021 22:28:35 GMT -->
</html>
