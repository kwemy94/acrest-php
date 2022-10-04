<?php
include("lien_en_tete.php");
include("en_tete.php");
include('menu.php');
?>
<div class="container_fluit" id="container_tech">
	<?php 
	    include("comptabilite.php");
	    include("gestion_projet.php");
	    include("logistique.php");
	    include("microfinance.php");
	    include("g_collectivite_terrictoriales.php");
	 ?>
</div>
<?php include("footer.php"); ?>