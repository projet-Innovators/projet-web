<?php
include "../core/reclamationC.php";

if (isset($_GET['id'])) {

    $reclamC1 = new reclamtionC();

  $dest = "mohamed.mezghani4444@gmail.com";
  $sujet = "Reclamation innovators";
  $corp = "Bonjour , votre reclamation a été traitée avec succès";
  $headers = "From: mohamed.mezghani@esprit.tn";
  if (mail($dest, $sujet, $corp, $headers)) {
    echo "Email envoyé avec succès à $dest ...";
  } else {
    echo "Échec de l'envoi de l'email...";
  }
    $reclamC1->modifierReclamtion($_GET['id']);
 
    echo ("<script> window.location.replace(\"checkout_reclamation.php\")</script>");
}
