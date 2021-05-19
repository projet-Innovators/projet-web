<?PHP session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>GURU Able - Free Lite Admin Template </title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CodedThemes">
    <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="CodedThemes">
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
</head>

<body>


    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a class="mobile-search morphsearch-search" href="#">
                            <i class="ti-search"></i>
                        </a>
                        <a href="index.php">
                            <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>

                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <a href="#!">
                                    <i class="ti-bell"></i>
                                    <span class="badge bg-c-pink"></span>
                                </a>
                                <ul class="show-notification">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center" src="assets/images/user.png" alt="Generic placeholder image">
                                            <div class="media-body">
                                            <?php     if(isset($_SESSION['Nom']))
                                                {
                                            ?> <h5 class="notification-user"> <?php echo $_SESSION['Nom'] ?></h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>   <?php
                                                
                                              } ?>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center" src="assets/images/user.png" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center" src="assets/images/user.png" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <?PHP if(isset($_SESSION['Nom'])) { ?>
                            <li class="user-profile header-notification">
                                <a href="#!">
                                    <img src="../images/avatar.jpg" class="img-radius" alt="User-Profile-Image">
                                    <span><?PHP echo $_SESSION['Nom'] ?></span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li>
                                        <a href="#!">
                                            <i class="ti-settings"></i> Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-email"></i> My Messages
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-lock"></i> Lock Screen
                                        </a>
                                    </li>
                                    <li>
                                    <a href="../../front/views/logout.php">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                    <?php } ?>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-40 img-radius" src="assets/images/avatar-4.jpg" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span>John Doe</span>
                                        <span id="more-details">UX Designer<i class="ti-angle-down"></i></span>
                                    </div>
                                </div>

                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="#"><i class="ti-user"></i>View Profile</a>
                                            <a href="#!"><i class="ti-settings"></i>Settings</a>
                                            <a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pcoded-search">
                                <span class="searchbar-toggle"> </span>
                                <div class="pcoded-search-box ">
                                    <input type="text" placeholder="Search">
                                    <span class="search-icon"><i class="ti-search" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Gestion Utilisateur</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="checkout_categorie.php">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Categorie</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                               
                                <li class="active">
                                    <a href="checkout_produit.php">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Produit</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="checkout_promo.php">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Promotion</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>

                            </ul>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Gestion livraison</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="afficherlivraison.php">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">livraison</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                </ul>
                                
                          
                            
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Gestion livreur</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="afficherlivreur.php">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">livreur</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>

                            </ul>
                           
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Gestion Reclamation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="checkout_reclamation.php">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Reclamation</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>

                            </ul>

                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Gestion Utilisateur</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="sign-up.php">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Utilisateur</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                </ul>
                                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Gestion Commandes</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="checkout-commande.php">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Commandes</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                </ul>


                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <div class="page-header card">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <i class="icofont icofont-file-code bg-c-blue"></i>
                                                    <div class="d-inline">
                                                        <h4>Gestion utilisateur</h4>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item">
                                                            <a href="index.php">
                                                                <i class="icofont icofont-home"></i>
                                                            </a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Gestion produit</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="checkout_produit.php">Produit</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->

                                    <!-- Page body start -->
                                    <div class="page-body">
                                    <?php
include "../entities/Utilisateur.php" ;
include "../core/UtilisateurC.php" ; ?>
									

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
<form name="f1" method="GET" action="AjouterUtilisateur.php" >
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

<?PHP


	if (isset($_GET['Nom']) and isset($_GET['rechercher']) ){
		$UtilisateuRC=new UtilisateurC();
	   $liste=$UtilisateuRC->rechercherListeUtilisateur($_GET['Nom']);
	    echo " Résultat trouvé " ;
	   foreach($liste as $row)
{
	?>
	<ul >
	<li><?PHP echo "ID"." : ".$row['Id']; ?></li>
	<li><?PHP echo "Nom"." : ".$row['Nom']; ?></li>
	<li><?PHP echo "Prenom"." : ".$row['Prenom']; ?></li>
    <li><?PHP echo "Date_de_naissance"." : ".$row['Date_de_naissance']; ?></li>
	<li><?PHP echo "Sexe"." : ".$row['Sexe']; ?></li>
	<li><?PHP echo "Role"." : ".$row['Role']; ?></li>
	
	<li><?PHP echo "Password"." : ".$row['Password']; ?></li>
	<li><?PHP echo "Email"." : ".$row['Email']; ?></li>
	
	
	
</ul>
	<?PHP
	}
	
}


?> 

                                                
                                                  
                                   
                                        <div class="fixed-button">
                                            <a href="https://codedthemes.com/item/guru-able-admin-template/" target="_blank" class="btn btn-md btn-primary">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Upgrade To Pro
                                            </a>
                                        </div>
                                        <!-- Warning Section Starts -->
                                        <!-- Older IE warning message -->
                                        <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers
        to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
                                        <!-- Warning Section Ends -->
                                        <!-- Required Jquery -->

                              
                                        <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
                                        <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
                                        <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
                                        <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
                                        <!-- jquery slimscroll js -->
                                        <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
                                        <!-- modernizr js -->
                                        <script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
                                        <script type="text/javascript" src="assets/js/modernizr/css-scrollbars.js"></script>
                                        <!-- classie js -->
                                        <script type="text/javascript" src="assets/js/classie/classie.js"></script>
                                        <!-- Custom js -->
                                        <script type="text/javascript" src="assets/js/script.js"></script>
                                        <script src="assets/js/pcoded.min.js"></script>
                                        <script src="assets/js/demo-12.js"></script>
                                        <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
                                        <script>
                                        function CopyToClipboard(containerid) {
if (document.selection) { 
    var range = document.body.createTextRange();
    range.moveToElementText(document.getElementById(containerid));
    range.select().createTextRange();
    document.execCommand("copy"); 

} else if (window.getSelection) {
    var range = document.createRange();
     range.selectNode(document.getElementById(containerid));
     window.getSelection().addRange(range);
     document.execCommand("copy");
     alert("text copied") 
}
}
    function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
</script>
</body>

</html>