<?php
include "configcommande.php" ;
class CommandeC
{
	
	

	function AfficherCommande()
	{
		$sql="SElECT * From commande";
		$db = configcommande::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }}	
	
	
	function recupererCommande($Id){
		$sql="SELECT * from commande where Id=$Id";
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
</html> 
<?PHP

$Commande1C=new CommandeC();
$listeCommandes=$Commande1C->AfficherCommande() ;
?>
<table border="1">
<tr>
<th>ID</th>
<th>client</th>
<th>Totale</th>
<th>Adresse</th>
<th>Date</th>

</tr>

<?PHP
foreach($listeCommandes as $row)
{
	?>
	<tr>
	<td><?PHP echo $row['Id']; ?></td>
	<td><?PHP echo $row['id_user']; ?></td>
	<td><?PHP echo $row['Totale']; ?></td>
    
	<td><?PHP echo $row['Adresse']; ?></td>
	<td><?PHP echo $row['Date']; ?></td>
	
	

	<?PHP
}
?>
</table>

