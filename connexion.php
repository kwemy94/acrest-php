<?php session_start();
          if (isset($_POST) && !empty($_POST['login']) && !empty($_POST['password'])) {
            # code...
            $long = strlen($_POST['password']);
            #saler le mot de passe avant sauvegarde
            $pwd = $long . '@=%' . $_POST['password'] . '+1#';
            # Hachage du pwd
            $pwd = hash('sha256', $pwd);

            try{
              $pdo = new PDO('mysql:host=localhost;dbname=acrest_polytechnique', 'root', '');
            } catch(Exception $e){
              die('Connexion error : '.$e -> getMessage());
            }
            
              $response = $pdo ->prepare('SELECT email, password FROM polytechnique WHERE email = :login AND password = :pwd');

              $response -> execute(array('login' => $_POST['login'], 'pwd' => $pwd ));
          

            $statut = 1;
            
            while ($donnee = $response -> fetch() && $statut == 1) {
              # code....
              $statut = 0;
            }
            # Test sur le statut pour continuer 
            
            $response -> closeCursor();

            if ($statut == 0) {
              $_SESSION['login'] = $_POST['login'];
              header('location: polytechnique.php');
            }
            else{
              header('location: connexion.php?error=informations erronée(s)');
            }
          }
    ?>  
<?php
include("lien_en_tete.php");                 
?>

    <!-- Icons font CSS-->
    <link href="Template/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="Template/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="Template/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="Template/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="Template/css/main.css" rel="stylesheet" media="all">
   
   <?php 
         include("en_tete.php");
         include("menu.php");
    ?> 


   
	<div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
		<div class="wrapper wrapper--w780">
			<div class="card card-3">
				<div class="card-heading"></div>
				<div class="card-body">

					<h2 class="title" style="color: black">Connexion ACREST Polytechnique</h2>
					<form action="connexion.php" method="post" name="form">
						
                        
                        <div>
                        	<?php if (isset($_GET) && !empty($_GET['error'])) {
                        		# code...
                        		echo'<h4 id=\'error\'>'.$_GET['error'].'</h4>';
                        	}
                        	?>
                        </div>

						<div class="input-group">
							<input class="input--style-3" type="email" placeholder="Matricule / Adresse email"
								autocomplete="off" name="login" required autofocus >
						</div>
						<div class="input-group">
							<input class="input--style-3" type="password" placeholder="Password"
								name="password" autocomplete="off" required="">
						</div>
						<div class="p-t-10" id="enregistrer">
							<button class="btn btn--pill btn--green" type="submit" id="ajout">Connexion</button>
                        </div>

                        <div class="" id="text">
							<h4>
								<a id="a" href="">Mot de passe oublie ?</a>
							</h4>
							<h4>
								Avez-vous un compte? <a id="a" href="inscription.php">Inscrivez-vous!</a>
							</h4>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>



<?php include("footer.php"); ?>




<script src="Template/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="Template/vendor/select2/select2.min.js"></script>
    <script src="Template/vendor/datepicker/moment.min.js"></script>
    <script src="Template/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="Template/js/global.js"></script>
