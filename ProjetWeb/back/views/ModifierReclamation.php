<?php
include "../core/reclamationC.php";

if (isset($_GET['id'])) {

    $reclamC1 = new reclamtionC();

    $reclamC1->modifierReclamtion($_GET['id']);
 
    echo ("<script> window.location.replace(\"checkout_reclamation.php\")</script>");
}
