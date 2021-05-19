<?PHP
include "../core/categorieC.php";
include "../entities/produit.php";
class ProduitC {

	
	function ajouterproduit($produit){
		$sql="INSERT INTO  produit (id,idCat,nom,prix,image,quantite,description) VALUES (:Id,:IdCat, :Nom,:Prix , :Image ,:Quantite , :Description)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $Id=$produit->getId();
		$IdCat=$produit->getIdCat();
        $Nom=$produit->getNom();
        $Prix=$produit->getPrix();
        $Image=$produit->getImage();
        $Quantite=$produit->getQuantite();
        $Description=$produit->getDescription();

        
       
      
		$req->bindValue(':Id',$Id);
		$req->bindValue(':IdCat',$IdCat);
		$req->bindValue(':Nom',$Nom);
		$req->bindValue(':Prix',$Prix);
		$req->bindValue(':Image',$Image); 
		$req->bindValue(':Quantite',$Quantite);
		$req->bindValue(':Description',$Description);

		
		
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherproduits(){
	
		$sql="SElECT * From produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerproduit($Id){
		$sql="DELETE FROM produit where Id= :Id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Id',$Id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierproduit($produit,$Id){
		$sql="UPDATE produit SET id=:idd,idCat=:IdCat ,nom=:Nom,prix=:Prix,image=:Image , quantite=:Quantite, description=:Description  WHERE id=:Id";
		
		$db = config::getConnexion();
		
try{		
        $req=$db->prepare($sql);
		$idd=$produit->getId();
		$IdCat=$produit->getIdCat();
        $Nom=$produit->getNom();
        $Prix=$produit->getPrix();
        $Image=$produit->getImage();
        $Quantite=$produit->getQuantite();
        $Description=$produit->getDescription();

      
       
		$datas = array(':idd'=>$idd, ':Id'=>$Id,':IdCat'=>$IdCat, ':Nom'=>$Nom,':Prix'=>$Prix, ':Image'=> $Image, ':Description'=>$Description, ':Quantite'=>$Quantite);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':Id',$Id);
		$req->bindValue(':IdCat',$IdCat);
		$req->bindValue(':Nom',$Nom);
		$req->bindValue(':Prix',$Prix);
		$req->bindValue(':Image',$Image);
		$req->bindValue(':Description',$Description);
		$req->bindValue(':Quantite',$Quantite);


		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererproduit($id){
		$sql="SELECT * from produit where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function recupererAllproduit(){
		$sql="SELECT * from produit ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function RecupCategories()
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From Categorie";
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