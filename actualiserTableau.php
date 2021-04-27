<?PHP
include "config.php";
class actualiserTableau{
 function getViewData(){
	
		$sql="SELECT  Id,Nom,Prenom,Date_de_naissance,Sexe,Role FROM `utilisateur` where id=64; ";
		$db = config::getConnexion();
		$result=$db->query($sql);  
		  
        $tableau=Array();
		foreach($result as $row){

			$tableau=Array ('Id'=>$row['Id'],'Nom'=>$row['Nom'],'Prenom'=>$row['Prenom'],'Date_de_naissance'=>$row['Date_de_naissance'],'Sexe'=>$row['Sexe'],'Role'=>$row['Role']);
			

		}

		$serializedData = json_encode($tableau);
		echo $serializedData;
		


}
 function main() 
    {
        try {
            $actualiserTableau= new actualiserTableau();
            $actualiserTableau->getViewData();
            
        }
        catch (Exception $e) {
            header("Content-type: text/plain; charset=UTF-8");
            echo $e->getMessage();
        }
    }

}

actualiserTableau::main();

?>