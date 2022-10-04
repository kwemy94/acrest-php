    <?php 
         session_start();
         $_SESSION['statut'] = 0;
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

	<div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
		<div class="wrapper wrapper--w780">
			<div class="card card-3">
				<div class="card-heading"></div>
				<div class="card-body">

					<h2 class="title" style="color: black">Information générale (1/2)</h2>
					<form action="inscription2.php" method="post" name="form">
						
						<div class="input-group">
							<input class="input--style-3" type="text" placeholder="Votre nom"
								autocomplete="off" name="nom" required autofocus >
						</div>
						<div class="input-group">
							<input class="input--style-3" type="text" placeholder="Prenom"
								name="prenom" autocomplete="off" style="text-transform: capitalize;">
						</div>
						<div class="input-group">
							<input class="input--style-3 js-datepicker" type="text"
								placeholder="Date de naissance" name="birthday" autocomplete="off" required=""> <i
								class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
						</div>
						<div class="input-group">
							<input class="input--style-3" type="text"
								placeholder="Lieu de naisssance" name="lieu_naiss" autocomplete="off" required style="text-transform: capitalize;">
						</div>
						<div class="input-group">
							<input class="input--style-3" type="text" placeholder="Pays d'origine"
								name="pays" autocomplete="off" required="">
						</div>
						<div class="input-group">
							<input class="input--style-3" type="text"
								placeholder="Numéro CNI / Passport" name="cni" autocomplete="off" required="">
						</div>
						<div class="input-group">
							<input class="input--style-3" type="email" placeholder="Email: example@domaine.com"
								name="email" autocomplete="off" required="">
						</div>
						
						<div class="input-group">
							<input class="input--style-3" type="text" placeholder="Teléphone"
								name="tel" autocomplete="off" required="">
						</div>
						<div class="input-group">
							<input class="input--style-3" type="text" autocomplete="off" placeholder="Nom du père"
								name="parent1" style="text-transform: capitalize;">
						</div>
						<div class="input-group">
							<input class="input--style-3" type="text" placeholder="Nom de la mère"
								autocomplete="off" name="parent2" required  style="text-transform: capitalize;">
						</div>
						<div class="input-group">
							<input class="input--style-3" type="text" placeholder="Contact parent"
								name=c_parent autocomplete="off">
						</div>
						
						<div class="p-t-10" id="enregistrer">
							<button class="btn btn--pill btn--green" type="submit" id="ajout">Continuer</button>

						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<script src="Template/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="Template/vendor/select2/select2.min.js"></script>
    <script src="Template/vendor/datepicker/moment.min.js"></script>
    <script src="Template/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="Template/js/global.js"></script>