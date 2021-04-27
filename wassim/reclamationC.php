<?PHP
include "../config.php";
include "../entities/reclamation.php";
class reclamtionC {

	
	
	function ajouterReclamtion($reclamtion){
		$sql="insert into reclamation (idclient,objet,capture,contenu,etat) values (:id, :objet,:capture,:contenu,:etat)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$reclamtion->getId();
        $objet=$reclamtion->getObjet();
        $capture=$reclamtion->getCapture();
        $contenu=$reclamtion->getContenu();
        $etat=0;
		$req->bindValue(':id',$id);
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
	function modifierReclamtion($reclamtion,$id){
		$sql="UPDATE reclamation SET etat=:etat WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $etat=$reclamtion->getEtat();
       
		$datas = array(':etat'=>$etat);
		$req->bindValue(':id',$id);
	
		$req->bindValue(':etat',$etat);
	
		
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	
	
	}
}
	


?>