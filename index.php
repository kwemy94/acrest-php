<!DOCTYPE html>
<html>
<head>
	<title>ACREST Polytechnique</title>
	<?php include("lien_en_tete.php"); ?>
</head>
<body>
	<?php include("en_tete.php"); ?>
	 <?php include("menu.php"); ?>
	
	<?php include("slider.php"); ?>

	<?php include("corps_page.php"); ?>
 
	<?php include("footer.php"); ?>

    <?php 
         if (isset($_GET['result'])) {
         	if ($_GET['result'] == "succes") { 
               $alea = $_GET['alea'];
               echo"<script type='text/javascript'> alert('Effectuée! Sauvegarder votre code de paiement: $alea ');</script>";
               
         	} else{
         		echo"<script type='text/javascript'> alert('Echec d'inscription, try again');</script>";
         	}

         }
    ?>


</body>
</html>