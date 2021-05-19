<?php


include_once'../config.php';
class UtilisateurC
{   function valider_email($dob) {
	$db = config::getConnexion() ;
	$sql = 'SELECT count(*) as row FROM utilisateur WHERE  Email =? ';
	$Req= $db->prepare( $sql);
	$Req->BindValue(1, $dob, PDO::PARAM_STR);
	$Req->execute();
	$result = $Req->fetch();
	if($result['row']==0) {
		  return true ;
		}
else {
	return false ;

		}
	}
	
	
	
	
	
	
	function valider_la_date_de_naissance($dob) {
	
	if(strlen($dob) == 10 ) {
			if(substr_count($dob,'-') == 2)
			{
				list($y,$m,$d) = explode('-',$dob);
				if (($y >= 1900 && $y <= 2021))
				{
					return true;
			    } else {
				   return false ;
				       }
			}
}else {
	return false ;
		}
			
		
	
   
  }
	function AjouterUtilisateur($Utilisateur)
	{    
		$sql = "insert into utilisateur (Nom,Prenom,Date_de_naissance,Sexe,Role,Password,Email) values(:Nom,:Prenom,:Date_de_naissance,:Sexe,:Role,:Password,:Email)";
		$db = config::getConnexion() ;
		try
		{
			$req = $db->prepare($sql) ;
		    
			$req->BindValue(':Nom',$Utilisateur->getNom()) ;
			$req->BindValue(':Prenom',$Utilisateur->getPrenom()) ;
            $req->BindValue(':Date_de_naissance',$Utilisateur->getDate_de_naissance()) ;
			$req->BindValue(':Sexe',$Utilisateur->getSexe()) ;
			$req->BindValue(':Role','user') ;
			$req->BindValue(':Password',$Utilisateur->getPassword()) ;
			$req->BindValue(':Email',$Utilisateur->getEmail()) ;
		   

			$req->execute();
			
			

			$name=$Utilisateur->getNom() ;
			$Req= $db->prepare(" SELECT Id FROM utilisateur WHERE Id = (SELECT MAX(id) FROM utilisateur) ; ");
			$Req->execute();
			$ID = $Req->fetch();
			
			$_SESSION['user']=$ID['Id'] ;
			
			return true ;
			
		}
		catch (Exception $e)
		{
            echo 'Erreur: '.$e->getMessage();
			return false ;
        }
	}}
	
    ?>
    <!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Formulaire</title>
</head>
<body>

<div class="login-form-container">
	  <div class="login-register-form">
<form name="f1" method="GET" action="#lg2" >
<table>


<tr>

<td><input type="text" name="Nom" placeholder="Nom" ></td>
</tr>
<tr>

<td><input type="text" name="Prenom" placeholder="Prenom"></td>
</tr>
<tr>

<td><input type="Email" name="Email" placeholder="Email"></td>
</tr>
<tr>

<td><input type="Password" name="Password" placeholder="Mot de passe"></td>
</tr>


<tr>

<td><input  type="text" name="Date_de_naissance" placeholder="Date de naissance"></td>
</tr>
<tr>

<td><input type="radio" name="Sexe" value="Femme" style="height:20px; width:35px; vertical-align: middle;">femme
<input type="radio" name="Sexe" value="Homme" style="height:20px; width:35px; vertical-align: middle;"> homme<br></td>
</tr>





<tr>
<td></td>
<td class="button-box" >                                                   
 <button type="submit" name="ajouter" value="ajouter" ><span>Ajouter</span></button>
</td>
</tr>
</table>


</form>
</div>  </div>
</body>
</html> 






