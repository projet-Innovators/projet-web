<?PHP
include "config.php" ;
class UtilisateurC
{
	function AjouterUtilisateur($Utilisateur)
	{
		$sql = "insert into utilisateur (Id,Nom,Prenom,Date_de_naissance,Sexe,Role,Login) values(:Id,:Nom,:Prenom,:Date_de_naissance,:Sexe,:Role,:Login)";
		$db = config::getConnexion() ;
		try
		{
			$req = $db->prepare($sql) ;
			$req->BindValue(':Id',$Utilisateur->getId()) ;
			$req->BindValue(':Nom',$Utilisateur->getNom()) ;
			$req->BindValue(':Prenom',$Utilisateur->getPrenom()) ;
            $req->BindValue(':Date_de_naissance',$Utilisateur->getDate_de_naissance()) ;
			$req->BindValue(':Sexe',$Utilisateur->getSexe()) ;
			$req->BindValue(':Role',$Utilisateur->getRole()) ;
            $req->BindValue(':Login',$Utilisateur->getLogin()) ;
			$req->execute();
			return true ;
		}
		catch (Exception $e)
		{
            echo 'Erreur: '.$e->getMessage();
			return false ;
        }
	}
	
	function AfficherUtilisateurs($Utilisateur)
	{
		echo "Id: ".$Utilisateur->getId()."<br>";
		echo "Nom: ".$Utilisateur->getNom()."<br>";
		echo "Prénom: ".$Utilisateur->getPrenom()."<br>";
        echo "Date_de_naissance: ".$Utilisateur->getDate_de_naissance()."<br>";
		echo "Sexe: ".$Utilisateur->getSexe()."<br>";
		echo "Role: ".$Utilisateur->getRole()."<br>";
        echo "Login: ".$Utilisateur->getLogin()."<br>";
	}
	function AfficherUtilisateur()
	{
		$sql="SElECT * From Utilisateur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }}	
	function modifierUtilisateur($Utilisateur,$Id)
{
		$sql="UPDATE Utilisateur SET Id=:Idd, Nom=:Nom,Prenom=:Prenom ,Date_de_naissance=:Date_de_naissance, Sexe=:Sexe, Role =:Role, Login=:Login WHERE Id=:Id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$Idd=$Utilisateur->getId();
        $Nom=$Utilisateur->getNom();
        $Prenom=$Utilisateur->getPrenom();
		$Date_de_naissance=$Utilisateur->getDate_de_naissance();
        $Sexe=$Utilisateur->getSexe();
        $Role=$Utilisateur->getRole();
		$Login=$Utilisateur->getLogin();
		
		$datas = array(':Idd'=>$Idd, ':Id'=>$Id, ':Nom'=>$Nom,':Prenom'=>$Prenom,':Date_de_naissance'=>$Id, ':Sexe'=>$Nom,':Role'=>$Role,':Login'=>$Login);
		$req->bindValue(':Idd',$Idd);
		$req->bindValue(':Id',$Id);
		$req->bindValue(':Nom',$Nom);
		$req->bindValue(':Prenom',$Prenom);
		$req->bindValue(':Date_de_naissance',$Date_de_naissance);
		$req->bindValue(':Sexe',$Sexe);
		$req->bindValue(':Role',$Role);
		$req->bindValue(':Login',$Login);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	
	function supprimerUtilisateur($Id)
	{
		$sql="DELETE FROM Utilisateur where Id= :Id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Id',$Id);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function recupererUtilisateur($Id){
		$sql="SELECT * from Utilisateur where Id=$Id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}}
    ?>
    <!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Formulaire</title>
	<script language="javascript">
		function Afficher()
		{
			var id = document.f1.Id.value ;
			var nom = f1.Nom.value ;
			var prenom = f1.Prenom.Value ;
			var date_de_naissance = f1.Date_de_naissance.value ;
			var sexe = f1.Sexe.value ;
			var role = f1.Role.Value ;
			var login= f1.Login.Value ;
			if(id="" || isNaN(id))
				return 0 ;

			
			if(nom="")
				return 0 ;
				
			
			if(prenom="")
				return 0 ;
		
				
			
			if(date_de_naissance="")
				return 0 ;
				if(sexe="")
				return 0 ;
				
			
			if(role="")
				return 0 ;
				if(login="")
				return 0 ;
		}
	</script>
</head>
<body>
<form name="f1" method="GET" >
<table>
<caption>Ajouter Utilisateur</caption>
<tr>
<td>Id</td>
<td><input type="text" name="Id"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="Nom"></td>
</tr>
<tr>
<td>Prénom</td>
<td><input type="text" name="Prenom"></td>
</tr>
<tr>
<td>Date_de_naissance</td>
<td><input type="text" name="Date_de_naissance"></td>
</tr>
<tr>
<td>Sexe</td>
<td><input type="text" name="Sexe"></td>
</tr>
<tr>
<td>Role</td>
<td><input type="text" name="Role"></td>
</tr>
<tr>
<td>Login</td>
<td><input type="text" name="Login"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="ajouter" value="ajouter"/></td>
</tr>
</table>
</form>
</body>
</html> 
<?PHP

$Utilisateur1C=new UtilisateurC();
$listeUtilisateurs=$Utilisateur1C->AfficherUtilisateur() ;
?>
<table border="1">
<tr>
<th>Votre ID</th>
<th>Votre Nom</th>
<th>Votre Prenom</th>
<th>Votre Date_de_naissance</th>
<th>Votre Sexe</th>
<th>Votre Role</th>
<th>Votre Login</th>
<th>Supprimer</th>
<th>Modifier</th>
</tr>

<?PHP
foreach($listeUtilisateurs as $row)
{
	?>
	<tr>
	<td><?PHP echo $row['Id']; ?></td>
	<td><?PHP echo $row['Nom']; ?></td>
	<td><?PHP echo $row['Prenom']; ?></td>
    <td><?PHP echo $row['Date_de_naissance']; ?></td>
	<td><?PHP echo $row['Sexe']; ?></td>
	<td><?PHP echo $row['Role']; ?></td>
    <td><?PHP echo $row['Login']; ?></td>
	<td><form method="POST" action="supprimerUtilisateur.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['Id']; ?>" name="Id">
	</form>
	</td>
	<td><a href="modifierUtilisateur.php?Id=<?PHP echo $row['Id']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>



