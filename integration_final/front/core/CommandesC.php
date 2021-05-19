
<?PHP
include "config_commandes.php" ;
class CommandesC
{  
			   
  
	function AjouterCommandes($Commandes)
	{    
		
		
		$sql = "insert into commande (Totale,id_user,Adresse) values(:Totale,:id_user,:Adresse)";
		$db = config_commandes::getConnexion() ;
		try
		{
			
			$req = $db->prepare($sql) ;
		    
			
			$req->BindValue(':Totale',$_GET['ajouter']) ;
			$req->BindValue(':id_user',$_SESSION['Id']) ;
			$req->BindValue(':Adresse',$Commandes->getAdresse()) ;
            
			
		
     
			$req->execute();
			return true ;
		}
		catch (Exception $e)
		{
            echo 'Erreur: '.$e->getMessage();
			return false ;
        }
	}
	}

	
    ?>
    <!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Formulaire</title>
</head>
<body>

	<script>
		function changeValue() {
var Prix_total=document.getElementById("prix").innerHTML ;
document.getElementById("ajouter").value =  Prix_total;}
	</script>
<h1>Panier</h1>
<div>
<form name="f1" method="GET" action=""  >
<select id="choix" style="height:10em" name="produits[]" multiple>

 </select>
 <p id="prix">00.00 DT</p>

 <input id="adr" type="text" name="Adresse" placeholder="Adresse">

<div class="button-box" >                                                   
 <button id="ajouter" type="submit" name="ajouter" value="" onclick="changeValue();" ><span>COMMANDER ></span></button>

</div>

</head>


</form>
	</div>
</body>
</html> 
