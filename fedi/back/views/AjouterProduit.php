<?PHP

include "../core/produitC.php";
require __DIR__ . '/twilio-php-main/src/Twilio/autoload.php';
use Twilio\Rest\Client;

if (isset($_POST['Nom']) and isset($_POST['Prix']) and isset($_POST['Quantite']) and isset($_POST['Description'])and isset($_POST['Idcat']) )
{
  print_r($_FILES);
  $targetDir = "images/";
  $fileName = basename($_FILES['Image']['name']);
  $targetFilePath = $targetDir . $fileName;
  $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

  move_uploaded_file($_FILES['Image']['tmp_name'],$targetFilePath); 
$Produit1=new Produit($_POST['Id'],$_POST['Idcat'],$_POST['Nom'],$_POST['Prix'],$fileName,$_POST['Quantite'],$_POST['Description']);
$Produit1C=new ProduitC();

$Produit1C->ajouterproduit($Produit1);




// Your Account SID and Auth Token from twilio.com/console
$sid = 'ACe05973d5d740be1d1321823bb61cdc64';
$token = '43ad48d0d0c2889e639ffd0171755c79';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+21629537066',
    [
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+14028095174',
        // the body of the text message you'd like to send
        'body' => "innovators has a new product!! You can visit our web page!! "
    ]
);
header('Location: checkout_produit.php');


}
else{
  
  echo"error";

}


?>

