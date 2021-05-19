<?php
include "../core/reclamationC.php";

if (isset($_GET['id'])) {

    $reclamC1 = new reclamtionC();
    $reclam=$reclamC1->recupererReclamation($_GET['id']);
    foreach ($reclam as $row) {
  
    

     
   
  $dest = $row['client'];
  $sujet = $row['objet'] ;
  $corp = $row['contenu'];
  $headers = "From: mohamed.mezghani@esprit.tn";
  if (mail($dest, $sujet, $corp, $headers)) {
    echo "Email envoyé avec succès à $dest ...";
  } else {
    echo "Échec de l'envoi de l'email...";
  }
    $reclamC1->modifierReclamtion($_GET['id']);

    echo ("<script> window.location.replace(\"checkout_reclamation.php\")</script>");
} }
