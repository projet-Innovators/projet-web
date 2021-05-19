<?PHP
include "../config.php";

class reclamtionC {

	
	
	function ajouterReclamtion($reclamtion){
		$sql="insert into reclamation (idClient,Objet,Capture,Contenu,Etat) values (:id_Client, :objet,:capture,:contenu,:etat)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_Client=$reclamtion->getId_Client();
        $objet=$reclamtion->getObjet();
        $capture=$reclamtion->getCapture();
        $contenu=$reclamtion->getContenu();
        $etat=0;
		$req->bindValue(':id_Client',$id_Client);
		$req->bindValue(':objet',$objet);
		$req->bindValue(':capture',$capture);
		$req->bindValue(':contenu',$contenu);
		$req->bindValue(':etat',$etat);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherReclamtions(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql= " SELECT * From reclamation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerReclamtion($id){
		$sql="DELETE FROM reclamation where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierReclamtion($id){
		$sql="UPDATE reclamation SET etat=:etat WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
       
       

		$req->bindValue(':id',$id);
	
		$req->bindValue(':etat',1);
	
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
 

        }
		
	
	
	}
	function recupererReclamation($Id){
		$sql="SELECT * from reclamation where id=$Id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}
	


?>