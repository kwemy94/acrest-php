<?php
session_start();
if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {  ?>

<?php require"lien_en_tete.php"; ?>
<?php include("en_tete.php"); ?>
<?php include("menu.php"); ?>

<div id="poly">
	<div class="row">
		<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
		    <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12">		    	
			    <div id="menu_poly">
			    	<a href=""><span class="glyphicon glyphicon-user" style="color: black"></span> <?php echo"<strong>". $_SESSION['login']."<strong>"; ?></a>
				   <button class="btn btn-light"  style="color: black;">
			    		<a href="admin/liste_inscription.php"><span class="glyphicon glyphicon-book" style="color: black"></span> Liste Préinscription</a>
			    	</button>
			    	<button class="btn btn-light"  style="color: black;">
			    		<a href="#admin/"><span class="glyphicon glyphicon-book" style="color: black"></span> Liste / Filière</a>
			    	</button>
			    	<button class="btn btn-light"  style="color: black;">
			    		<a href="#"><span class="glyphicon glyphicon-envelope" style="color: black"></span> Messagerie</a>
			    	</button>
			    	<button class="btn btn-light"  style="color: black;">
			    		<a href="#"><span class="glyphicon glyphicon-print" style="color: black"></span> Imprimer liste</a>
			    	</button>
			    	<button class="btn btn-light"  style="color: black;">
			    		<a href="#"><span class="glyphicon glyphicon-send" style="color: black"></span> Send newsletter</a>
			    	</button>
			    	<button class="btn btn-light"  style="color: black;">
			    		<a href="#"><span class="glyphicon glyphicon-list-alt" style="color: black"></span> Notification étudiant</a>
			    	</button>
                    <button class="btn btn-light" id="button" >
			    		<a href="deconnexion.php"><span class="glyphicon glyphicon-log-out" style="color: black"></span>Déconnexion</a>
			    	</button>
			    </div>
		    </div>
		    <div class=" col-lg-8 col-md-8 col-sm-8 col-xs-12" id="contenu_mobile">
			    <h3>Administration ACREST Polytechnique </h3>
		    </div>
	    </div>
	</div>
	
</div>

<?php include("footer.php"); ?>
<?php } 
      else{
      	header('location: connexion.php');
  }
      ?>