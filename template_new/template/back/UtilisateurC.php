<?PHP
include "config.php" ;
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
    <!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Formulaire</title>
	
	<script language="javascript" type="text/javascript" src="actualiser.js"> </script>
</head>
<body >
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $("#btnPrint").live("click", function () {
            var divContents = $("#dvContainer").html();
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head><title>DIV Contents</title>');
            printWindow.document.write('</head><body>');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        });
    </script>
<form name="f1" method="GET" >
<table >
<tr>
 
<td>Nom</td>
<td><div class="input-group">
    <input type="text" class="form-control" placeholder="Choose name" name="Nom"></div></td>
	
<td>Prénom</td>
<td><div class="input-group">
	<input type="text" class="form-control"  placeholder="Choose surname" name="Prenom"></div></td>
	</tr>

	<tr>
	<td>Email</td>
<td><div class="input-group"><input type="Email" class="form-control" name="Email" placeholder="Email"></div></td>


<td>Mot de Passe</td>
<td><div class="input-group"><input type="Password" class="form-control" name="Password" placeholder="Mot de passe"></div></td>
</tr>
<tr>
<td>Date_de_naissance</td>
<td><div class="input-group">
	<input type="text" class="form-control" placeholder="Choose Date" name="Date_de_naissance"></div></td>
	
	<td>Sexe</td>
<td><div class="input-group">
	<input type="text" class="form-control" placeholder="Choose Sexe" name="Sexe"></div></td>
	</tr>
<tr>
<td>Role</td>
<td><div class="input-group">
	<input type="text" class="form-control" placeholder="Choose Role" name="Role"></div></td>
	
	
</tr>
<tr>

<td class="button-box" >                                                   
<input type="submit" name="ajouter" value="ajouter"/>
</td>
</tr>
</table>
</form>

<?PHP

$Utilisateur1C=new UtilisateurC();
$listeUtilisateurs=$Utilisateur1C->AfficherUtilisateur() ;
?>
<div id="dvContainer">
<table id="sortMe" class="table">
<thead>
    <tr>
	
<th data-type="number"><button>ID</button></th>
<th><button>Nom</button></th>
<th><button>Prenom</button></th>
<th><button>Date_de_naissance</button></th>
<th><button>Sexe</button></th>
<th><button>Role</button></th>
<th><button>Password</button></th>
<th><button>Email</button></th>
<th>supprimer</th>
<th>modifier</th>


</tr>
</thead>
<tbody>


<?PHP
 
 
 
foreach($listeUtilisateurs as $row)
{
	?>
	<tr id="table">
	<td><?PHP echo $row['Id']; ?></td>
	<td><?PHP echo $row['Nom']; ?></td>
	<td><?PHP echo $row['Prenom']; ?></td>
    <td><?PHP echo $row['Date_de_naissance']; ?></td>
	<td><?PHP echo $row['Sexe']; ?></td>
	<td><?PHP echo $row['Role']; ?></td>
	<td><?PHP echo $row['Password']; ?></td>
	<td><?PHP echo $row['Email']; ?></td>
	<td><form method="POST" action="supprimerUtilisateur.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['Id']; ?>" name="Id">
	</form>
	</td>
	<td><a href="modifierUtilisateur.php?Id=<?PHP echo $row['Id']; ?>">
	Modifier</a></td>
	</tr>
	
	<?PHP
}
?>
</tbody>
</table>
</div>

		<script>
document.addEventListener('DOMContentLoaded', function() {
    const table = document.getElementById('sortMe');
    const headers = table.querySelectorAll('th');
    const tableBody = table.querySelector('tbody');
    const rows = tableBody.querySelectorAll('tr');

    // Track sort directions
    const directions = Array.from(headers).map(function(header) {
        return '';
    });

    // Transform the content of given cell in given column
    const transform = function(index, content) {
        // Get the data type of column
        const type = headers[index].getAttribute('data-type');
        switch (type) {
            case 'number':
                return parseFloat(content);
            case 'string':
            default:
                return content;
        }
    };

    const sortColumn = function(index) {
        // Get the current direction
        const direction = directions[index] || 'asc';

        // A factor based on the direction
        const multiplier = (direction === 'asc') ? 1 : -1;

        const newRows = Array.from(rows);

        newRows.sort(function(rowA, rowB) {
            const cellA = rowA.querySelectorAll('td')[index].innerHTML;
            const cellB = rowB.querySelectorAll('td')[index].innerHTML;

            const a = transform(index, cellA);
            const b = transform(index, cellB);    

            switch (true) {
                case a > b: return 1 * multiplier;
                case a < b: return -1 * multiplier;
                case a === b: return 0;
            }
        });

        // Remove old rows
        [].forEach.call(rows, function(row) {
            tableBody.removeChild(row);
        });

        // Reverse the direction
        directions[index] = direction === 'asc' ? 'desc' : 'asc';

        // Append new row
        newRows.forEach(function(newRow) {
            tableBody.appendChild(newRow);
        });
    };

    [].forEach.call(headers, function(header, index) {
        header.addEventListener('click', function() {
            sortColumn(index);
        });
    });
});
</script>
<form  method="GET">  
 <input type="text" name="Nom" value="Nom"/><br />  
<input type="submit" name="rechercher" value="rechercher" />  

</form> 

<input type="button" value="imprimer" id="btnPrint" />




</body>
</html> 



