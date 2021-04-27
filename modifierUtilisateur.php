<HTML>
<head>
</head>
<body>
<?PHP
include "Utilisateur.php";
include "UtilisateurC.php";
if (isset($_GET['Id'])){
	$UtilisateurC=new UtilisateurC();
    $result=$UtilisateurC->recupererUtilisateur($_GET['Id']);
	foreach($result as $row){
		$Id=$row['Id'];
		$Nom=$row['Nom'];
		$Prenom=$row['Prenom'];
        $Date_de_naissance=$row['Date_de_naissance'];
		$Sexe=$row['Sexe'];
		$Role=$row['Role'];
        $Login=$row['Login'];
?>
<form method="POST">
<table>
<caption>Modifier Employe</caption>
<tr>
<td>Id</td>
<td><input type="text" name="Id" value="<?PHP echo $Id ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="Nom" value="<?PHP echo $Nom ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="Prenom" value="<?PHP echo $Prenom ?>"></td>
</tr>
<tr>
<td>Date_de_naissance</td>
<td><input type="text" name="Date_de_naissance" value="<?PHP echo $Date_de_naissance ?>"></td>
</tr>
<tr>
<td>Sexe</td>
<td><input type="text" name="Sexe" value="<?PHP echo $Sexe ?>"></td>
</tr>
<tr>
<td>Role</td>
<td><input type="text" name="Role" value="<?PHP echo $Role ?>"></td>
</tr>
<tr>
<td>Login</td>
<td><input type="text" name="Login" value="<?PHP echo $Login ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="Idd" value="<?PHP echo $_GET['Id'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$Utilisateur=new Utilisateur($_POST['Id'],$_POST['Nom'],$_POST['Prenom'],$_POST['Date_de_naissance'],$_POST['Sexe'],$_POST['Role'],$_POST['Login']);
	$UtilisateurC->modifierUtilisateur($Utilisateur,$_POST['Idd']);
	echo $_POST['Idd'];
	header('Location: auth-normal-sign-in.php');
}
?>
</body>
</HTMl>