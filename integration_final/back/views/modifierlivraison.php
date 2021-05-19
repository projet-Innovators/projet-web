

<HTML> 

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body>
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
  <aside id="left-panel" class="left-panel" width="100000px">
       
           

             <nav class="navbar navbar-expand-sm navbar-default">
 <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
            </div>
       


            </nav>
    </aside><!-- /#left-panel -->


                <div class="container">
                    <div class="jumbotron">
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
<?PHP
	}
}
else {echo "verifier";}
if (isset($_POST['modifier'])){
	$livraison1=new livraison($_POST['id'],$_POST['nom'],$_POST['adresse'],$_POST['total'],$_POST['date'],$_POST['etat'],$_POST['livreur']);
	$livraison1c->modifierlivraison($livraison1,$_POST['id_ini']);
	echo $_POST['id_ini'];
	header('Location: afficherlivraison.php');
}
?>
</body>
</HTMl>