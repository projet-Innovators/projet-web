<?php require '..\views\inc\header.php'; ?>  

  <!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>S'identifier/S'enregistrer</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Accueil</a></li>
              <li class="breadcrumb-item active" aria-current="page">S'identifier/S'enregistrer</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->
  
  <!--================Login Box Area =================-->
	<section class="login_box_area section-margin">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<div class="hover">
							<h4>Nouveau sur notre site?</h4>
							<p>Des progrès sont réalisés chaque jour dans le domaine de la science et de la technologie, et un bon exemple en est le</p>
							<a class="button button-account" href="register_views.php">Creer un compte</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Connectez-vous pour entrer</h3>
						<form id="form1" name="form1" method="POST" action="connexion.php">
  <p>Login :
    <input type="text" name="login" id="login" class="form-control"/>
  </p>
  <p>Password : 
    <input type="password" name="pwd" id="pwd" class="form-control" />
  </p>
  <p>
    <input type="submit" name="button" id="button" class="button button-login w-100" value="Valider" />
   <a href="index.php"> <input class="button button-login w-100" value="mot de passe oublié" />
 </a>
  </p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->



  <?php require '../views\inc\footer.php'; ?>


