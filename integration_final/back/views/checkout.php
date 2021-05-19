
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
   <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Aroma Shop - Checkout</title>
    <link rel="icon" href="img/Fevicon.png" type="image/png">

  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/nouislider/nouislider.min.css">
  
    <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

  <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Left Panel -->
                            <?PHP
                                include "../core/livraisonc.php";
                                $livraison1c=new livraisonc();
                                $listeEmployes=$livraison1c->afficherlivraison();
                                 
                                //var_dump($listeEmployes->fetchAll());
                                ?>
                                <td><a href="ajoutliv.php">
                    ajouter une livraison ?</a></td>ou 
                    <td><a href="ajoutcomm.html"> 
                     un livreur ?</a></td>
                    
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>nom</th>
                                            <th>adresse</th>
                                            <th>total</th>
                                            <th>date</th>
                                            <th>etat</th>
                                            <th>livreur</th>
                                            <th>supprimer</th>
                                            <th>modifier</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?PHP
    foreach($listeEmployes as $row){
        ?>
        <tr>
            <td><?PHP echo $row['id']; ?></td>
            <td><?PHP echo $row['nom']; ?></td>
            <td><?PHP echo $row['adresse']; ?></td>
            <td><?PHP echo $row['total']; ?></td>
            <td><?PHP echo $row['date']; ?></td>
            <td><?PHP echo $row['etat']; ?></td>
            <td><?PHP echo $row['livreur']; ?></td>
            <td><form method="POST" action="supprimerlivraison.php">
                    <input type="submit" name="supprimer" value="supprimer">
                    <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                </form>
            </td>
            <td><a href="modifierlivraison.php?id=<?PHP echo $row['id']; ?>">
                    Modifier</a></td>
        </tr>
        
        <?PHP
    }
    
    ?>

                                        
                                        
                                    </tbody>
                                </table>
                                
<td><a href="afficherlivreur.php"> 
                     les livreurs</a></td>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>

</body>

</html>
