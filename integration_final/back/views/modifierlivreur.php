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
include "../entities/livreur.php";
include "../core/livreurc.php";
if (isset($_GET['id'])){
    $livreur1c=new livreurc();
    $result3=$livreur1c->recupererlivreur($_GET['idl']);
    foreach($result3 as $row){
        $id=$row['idl'];
        $nom=$row['nom'];
        $prenom=$row['prenom'];
        $date=$row['date'];
    
?>
  <aside id="left-panel" class="left-panel" width="100000px">
       
           

             <nav class="navbar navbar-expand-sm navbar-default">
 <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>
            <img
    src="fron.png" 
    height="500px" 
    width="10000px" 
/>


            </nav>
    </aside><!-- /#left-panel -->


<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">modification</h2>
<form method="POST">
<table>
<caption>Modifier commande</caption>
<tr>
<td>id===>:</td>
<td><input type="number" name="idl" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>Nom     ===>   :</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>prenom     ===>    :</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<td>date     ===>    :</td>
<td><input type="text" name="date" value="<?PHP echo $date ?>"></td>
</tr>


<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $id ;?>"></td>
</tr>
</table>
</form>
<?PHP
    }
}
else {echo "verifier";}
if (isset($_POST['modifier'])){
    $livreur1=new livreur($_POST['idl'],$_POST['nom'],$_POST['prenom'],$_POST['date']);
    $livreur1c->modifierlivreur($livreur1,$_POST['id_ini']);
    echo $_POST['id_ini'];
    header('Location: afficherlivreur.php');
}
?>
</body>
</HTMl>