<?PHP
include "../config.php" ;
class UtilisateurC
{
			
		
	function valider_email($dob) {
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
			$req->BindValue(':Role',$Utilisateur->getRole()) ;

			$req->BindValue(':Password',$Utilisateur->getPassword()) ;
			$req->BindValue(':Email',$Utilisateur->getEmail()) ;
		   

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
		
		echo "Nom: ".$Utilisateur->getNom()."<br>";
		echo "Prenom: ".$Utilisateur->getPrenom()."<br>";
        echo "Date_de_naissance: ".$Utilisateur->getDate_de_naissance()."<br>";
		echo "Sexe: ".$Utilisateur->getSexe()."<br>";
		echo "Role: ".$Utilisateur->getRole()."<br>";
		echo "Password: ".$Utilisateur->getPassword()."<br>";
		echo "Email: ".$Utilisateur->getEmail()."<br>";
        
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
		$sql="UPDATE Utilisateur SET Nom=:Nom,Prenom=:Prenom ,Date_de_naissance=:Date_de_naissance, Sexe=:Sexe, Role =:Role, Password=:Password, Email =:Email  WHERE Id=:Id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
        $Nom=$Utilisateur->getNom();
        $Prenom=$Utilisateur->getPrenom();
		$Date_de_naissance=$Utilisateur->getDate_de_naissance();
        $Sexe=$Utilisateur->getSexe();
        $Role=$Utilisateur->getRole();
	    $Password=$Utilisateur->getPassword();
        $Email=$Utilisateur->getEmail();
		
		$datas = array( ':Id'=>$Id, ':Nom'=>$Nom,':Prenom'=>$Prenom,':Date_de_naissance'=>$Date_de_naissance, ':Sexe'=>$Sexe,':Role'=>$Role, ':Password'=>$Password,':Email'=>$Email);
		
		$req->bindValue(':Id',$Id);
		$req->bindValue(':Nom',$Nom);
		$req->bindValue(':Prenom',$Prenom);
		$req->bindValue(':Date_de_naissance',$Date_de_naissance);
		$req->bindValue(':Sexe',$Sexe);
		$req->bindValue(':Role',$Role);
		$req->bindValue(':Password',$Password);
		$req->bindValue(':Email',$Email);
		
		
		
            $s=$req->execute();
			
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
	}
	function rechercherListeUtilisateur($Nom){
		$sql="SELECT * from Utilisateur where Nom='$Nom' ";
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
   


