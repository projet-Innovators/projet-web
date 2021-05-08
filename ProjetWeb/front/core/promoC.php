<?PHP

include "../entities/promo.php";

class PromoC {
	


	function ajouterPromo($promo){

		$sql="insert into promo (id,idProd,date_debut,date_fin,prix_nouveau,taux) values (:id, :idProd,:date_debut,:date_fin,:prix_nouveau,:taux)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
		$id=$promo->getid();
		$idProd=$promo->getidProd();
        $date_debut=$promo->getdate_debut();
        $date_fin=$promo->getdate_fin();
		$prix_nouveau=$promo->getprix_nouveau();
		$taux=$promo->gettaux();


		$req->bindValue(':id',$id);
		$req->bindValue(':idProd',$idProd);
		$req->bindValue(':date_debut',$date_debut);
		$req->bindValue(':date_fin',$date_fin);
		$req->bindValue(':prix_nouveau',$prix_nouveau);
		$req->bindValue(':taux',$taux);




		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	
	
	
function afficherpromos(){
		//$sql="SElECT * From promo e inner join formationphp.promo a on e.cin= a.cin";
		$sql="SElECT * From promo";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function supprimerPromo($Id){
		$sql="DELETE FROM promo WHERE Id= :Id";
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

function modifiePromo($promo,$id){
		$sql="UPDATE promo SET id=:idd, idProd=:idProd,date_debut=:date_debut,date_fin=:date_fin,prix_nouveau=:prix_nouveau WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$promo->getid();
        $idProd=$promo->getidProd();
        $date_debut=$promo->getdate_debut();
        $prix_an=$promo->getdate_fin();
        $prix_nouv=$promo->getprix_nouveau();
        $descrip=$promo->getdescription();
		$datas = array(':idd'=>$idd, ':id'=>$id, ':idProd'=>$idProd,':date_debut'=>$date_debut,':date_fin'=>$prix_an,':prix_nouveau'=>$prix_nouv);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);
		$req->bindValue(':idProd',$idProd);
		$req->bindValue(':date_debut',$date_debut);
		$req->bindValue(':date_fin',$prix_an);
		$req->bindValue(':prix_nouveau',$prix_nouv);

		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

    function calcultaux($prix_in,$prix_f)
	{
		$taux_promo=(($prix_in-$prix_f)/$prix_in)*100;
		return $taux_promo;


	}

	function recupererPromo($Id){
		$sql="SELECT * from promo where idProd=$Id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	
	/*function rechercherListepromos($tarif){
		$sql="SELECT * from promo where tarifHoraire=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}*/

}

?>