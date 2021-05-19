
<?PHP


include_once "../config.php" ;
   
if(isset ($_POST['Email']) and isset($_POST['Password'])) {
  
   
   $myemail = $_POST['Email'];
   $mypassword =$_POST['Password']; 
   $db = config::getConnexion() ;
   $sql = 'SELECT count(*) as row FROM utilisateur WHERE Password = ? and  Email =? ';
   
   $Req= $db->prepare( $sql);
   $Req->BindValue(1, $mypassword, PDO::PARAM_STR);
   $Req->BindValue(2, $myemail, PDO::PARAM_STR);
   $Req->execute();
   $result = $Req->fetch();
   $Sql = 'SELECT Id,Nom,Role  FROM utilisateur WHERE Password = ? and  Email =? ';
   
   $req= $db->prepare( $Sql);
   $req->BindValue(1, $mypassword, PDO::PARAM_STR);
   $req->BindValue(2, $myemail, PDO::PARAM_STR);
   $req->execute();
   $Result = $req->fetch();

   if( $result['row']==1) {

	 
	  $_SESSION['user'] = $myemail;
      $_SESSION['Id'] = $Result['Id'];
      $_SESSION['Nom'] = $Result['Nom'];
      $_SESSION['Role'] = $Result['Role'];
      if($_SESSION['Role']=='user')
      {
          ?>
        <meta http-equiv="Refresh" content="1; url=http://localhost/ProjetWeb/front/views/shop-page.php">
       
       <?php
	  
    }
    else
    ?>
    <meta http-equiv="Refresh" content="2; url=http://localhost/ProjetWeb/back/views/checkout_produit.php">
   
   <?php
	  
    }else {
	  echo"Your Login Name or Password is invalid ";
	 
   }
}


?> 	
<div class="login-form-container">
                                        <div class="login-register-form">
                                          
                                            <form  method="post">
                                                <input type="text" name="Email"  placeholder="Email">
                                                <input type="password" name="Password"  placeholder="Password">
                                                <div class="button-box">
                                                    <div class="login-toggle-btn">
                                                        <input type="checkbox">
                                                        <label>Remember me</label>
                                                        
                                                    </div>
                                                    <button type="submit"><span>Login</span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>