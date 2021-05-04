<?php
include "configcommande.php" ;
class CommandeC
{
	function AjouterCommande($Commande)
	{   $userid=$_SESSION['user'];
		$sql = "insert into commandes (Panier,Total,Paiement,Quantite,id_user) values(:Panier,:Total,:Paiement,:Quantite,'.$userid.' )";
		$db = configcommande::getConnexion() ;
		try
		{
			$req = $db->prepare($sql) ;

			$req->BindValue(':Panier',$Commande->getPanier()) ;
			$req->BindValue(':Total',$Commande->getTotal()) ;
            $req->BindValue(':Paiement',$Commande->getPaiement()) ;
		    $req->BindValue(':Quantite',$Commande->getQuantite()) ;
           
			$req->execute();
			return true ;
		}
		catch (Exception $e)
		{
            echo 'Erreur: '.$e->getMessage();
			return false ;
        }
		
	}
	
	function AfficherCommandes($Commande)
	{
		
		echo "Panier ".$Commande->getPanier()."<br>";
		echo "Total: ".$Commande->getTotal()."<br>";
        echo "Paiement: ".$Commande->getPaiement()."<br>";
		echo "Quantite: ".$Commande->getQuantite()."<br>";
        
	}
	function AfficherCommande()
	{
		$sql="SElECT * From commandes";
		$db = configcommande::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }}	
	function modifierCommande($Commande,$Id)
{
		$sql="UPDATE commandes SET Panier=:Panier,Total=:Total ,Paiement=:Paiement,Quantite=:Quantite WHERE Id=:Id";
		
		$db = configcommande::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
        $Panier=$Commande->getPanier();
        $Total=$Commande->getTotal();
		$Paiement=$Commande->getPaiement();
		$Quantite=$Commande->getQuantite();
      
	
		
		$datas = array( ':Id'=>$Id, ':Panier'=>$Panier,':Total'=>$Total,':Paiement'=>$Paiement,':Quantite'=>$Quantite);
		
		$req->bindValue(':Id',$Id);
		$req->bindValue(':Panier',$Panier);
		$req->bindValue(':Total',$Total);
		$req->bindValue(':Paiement',$Paiement);
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
	
	function supprimerCommande($Id)
	{
		$sql="DELETE FROM commandes where Id= :Id";
		$db = configcommande::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Id',$Id);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function recupererCommande($Id){
		$sql="SELECT * from commandes where Id=$Id";
		$db = configcommande::getConnexion();
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
			
			var Panier = f1.Panier.value ;
			var Total = f1.Total.Value ;
			var Paiement = f1.Paiement.value ;
	        var Quantite = f1.Quantite.value ; 
		
			if(id="" || isNaN(id))
				return 0 ;

			
			if(Panier="")
				return 0 ;
				
			
			if(Total="")
				return 0 ;
				
				if(Quantite="")
				return 0 ;
				
			
	
				
		}
	</script>
</head>
<body>
<form name="f1" method="GET" >
<table>
<tr>
 
<td>Panier</td>
<td><div class="input-group">
    <input type="text" class="form-control" placeholder="Choose panier" name="Panier"></div></td>
	</div>
<td>Total</td>
<td><div class="input-group">
	<input type="text" class="form-control"  placeholder="Choose Total" name="Total"></div></td>
	</tr>
	</div>
<tr>
<td>Paiement</td>
<td><div class="input-group">
	<input type="text" class="form-control" placeholder="Choose Paiement" name="Paiement"></div></td>

<td>Quantite</td>
<td><div class="input-group">
	<input type="text" class="form-control" placeholder="Choose Quantite" name="Quantite"></div></td>
	
</tr>
<tr>

<td class="button-box" >                                                   
<input type="submit" name="ajouter" value="ajouter"/>
</td>
</tr>
</table>
</form>
</body>
</html> 
<?PHP

$Commande1C=new CommandeC();
$listeCommandes=$Commande1C->AfficherCommande() ;
?>
<table border="1">
<tr>
<th>ID</th>
<th>Panier</th>
<th>Total</th>
<th>Paiement</th>
<th>Quantite</th>

<th>Supprimer</th>
<th>Modifier</th>
</tr>

<?PHP
foreach($listeCommandes as $row)
{
	?>
	<tr>
	<td><?PHP echo $row['Id']; ?></td>
	<td><?PHP echo $row['Panier']; ?></td>
	<td><?PHP echo $row['Total']; ?></td>
    <td><?PHP echo $row['Paiement']; ?></td>
	<td><?PHP echo $row['Quantite']; ?></td>
	
	<td><form method="POST" action="supprimerCommande.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['Id']; ?>" name="Id">
	</form>
	</td>
	<td><a href="modifierCommande.php?Id=<?PHP echo $row['Id']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>

