<?php 
require_once "../config.php";
class noteC{


public function existe($idarticle,$iduser){
			$sql="SELECT COUNT(*) AS nb_note FROM noter WHERE idarticle=".$idarticle." and iduser=".$iduser."";
			$db=config::getConnexion();
			try{
			$query = $db->prepare($sql);
$query->execute();
$result = $query->fetch();
$note = (int) $result['nb_note'];
			return $note;
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
}

public function sommenote($idarticle){
			$sql="SELECT SUM(note) AS nb_note FROM noter WHERE idarticle=".$idarticle." ";
			$db=config::getConnexion();
			try{
			$query = $db->prepare($sql);
$query->execute();
$result = $query->fetch();
$nbnote = (int) $result['nb_note'];
			return $nbnote;
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
}
public function countt(){
			$sql="SELECT COUNT(*) AS nb_note FROM noter";
			$db=config::getConnexion();
			try{
			$query = $db->prepare($sql);
$query->execute();
$result = $query->fetch();
$nb_note = (int) $result['nb_note'];
			return $nb_note;
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
}


public function ajouternote1($iduser ,$idarticle){
			$sql="INSERT INTO `noter`( `idarticle`, `iduser`,  `note`) VALUES (".$idarticle.",".$iduser.",1)";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);	
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
			
}


public function ajouternote3($iduser ,$idarticle){
			$sql="INSERT INTO `noter`( `idarticle`, `iduser`,  `note`) VALUES (".$idarticle.",".$iduser.",3)";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);	
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
			
}


public function ajouternote2($iduser ,$idarticle){
			$sql="INSERT INTO `noter`( `idarticle`, `iduser`,  `note`) VALUES (".$idarticle.",".$iduser.",2)";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);	
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
			
}

public function ajouternote4($iduser ,$idarticle){
			$sql="INSERT INTO `noter`( `idarticle`, `iduser`,  `note`) VALUES (".$idarticle.",".$iduser.",4)";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);	
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
			
}
public function ajouternote5($iduser ,$idarticle){
			$sql="INSERT INTO `noter`( `idarticle`, `iduser`,  `note`) VALUES (".$idarticle.",".$iduser.",5)";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);	
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
			
}











}
?>