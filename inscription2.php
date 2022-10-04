<?php session_start(); ?>

<?php include("lien_en_tete.php"); ?>
<?php include("en_tete.php"); ?>
<?php include("menu.php"); ?>

<?php
include_once("Models/Generateur.class.php");
include_once("Models/Etudiant.class.php");
include_once("Models/Inscription.class.php");
$generateur = new Generateur();            /* fonction permettant de géérer un nombre léatoire */
?>


<?php 

      if (isset($_POST['nom']) && isset($_POST['birthday']) && isset($_POST['cni'])) {

        $_SESSION['statut'] = 3;

      	$_SESSION['info'] = array($_POST['nom'], $_POST['prenom'], $_POST['birthday'], $_POST['lieu_naiss'], $_POST['pays'], $_POST['cni'], $_POST['tel'], $_POST['email'], $_POST['parent1'], $_POST['parent2'], $_POST['c_parent'] );

    } else{
      	/* le test (if) ci dessous permet de restreindre l'acces à la seconde page d'inscription tant que le 1er formulaire n'a pas été soumis */
       if (isset($_SESSION['statut']) && $_SESSION['statut'] == 3) {
      		if (isset($_POST['diplome']) && isset($_POST['option_diplome']) && isset($_POST['filiere1']) && isset($_POST['filiere2']) && isset($_POST['filiere3'])) {

                $info = $_SESSION['info'];

                $etud = new Etudiant();

      	        $etud -> setNom($info[0]);
      	        $etud -> setPrenom($info[1]);

      	        $naiss = explode('/', $info[2]); 
      	        $etud -> setDate_naissance($naiss[2].'-'.$naiss[1].'-'.$naiss[0]);

      	        $etud -> setLieu($info[3]);
      	        $etud -> setPays($info[4]);
               	$etud -> setCni($info[5]);
             	  $etud -> setTelephone($info[6]);
            	  $etud -> setEmail($info[7]);
            	  $etud -> setPere($info[8]);
             	  $etud -> setMere($info[9]);
            	  $etud -> setContact_parent($info[10]);
       
                $code = $generateur -> aleatoire(11);
                $etud ->setCode_inscription($code) ;

                $etud ->setDiplome($_POST['diplome']);
                $etud ->setOption_diplome($_POST['option_diplome']);
                $etud ->setFiliere1($_POST['filiere1']);
                $etud ->setFiliere2($_POST['filiere2']);
                $etud ->setFiliere3($_POST['filiere3']);

                $etud ->setsp1($_POST['specialite_1']);
                $etud ->setsp2($_POST['specialite_2']);
                $etud ->setsp3($_POST['specialite_3']);

                $inscription = new Inscription();
                $statut = $inscription -> inscrire($etud);

                if ($statut == 0) {
                	$result = "succes";
                    unset($_SESSION);
                    header("location: /a?result=$result&alea=$code");
                } else {
        	        $result = "echec d'inscription";
        	        unset($_SESSION);
                	header("location: /a?result=$result");
                }
            }
        } else {
      	    #header('location: inscription.php');
        }
    }	
?>
<div class="container-fluit" id="inscription1">
	<form class="row" method="post" action="inscription2.php" id="form_inscription">
		<fieldset class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<legend>Cursus à suivre (2/2)</legend>
			<div class="pays">
			    <select name="diplome">
				    <option disabled="true" selected="true">Diplome d'admission</option>
				    <option>BACC</option>
				    <option>PROBATOIRE</option>
				    <option>BEPC</option>
				    <option>CAP</option>
				    <option>CEP</option>
				    <option>BTS</option>
				    <option>LICENCE</option>
				    <option>MASTER</option>
				    <option>DOCTORAT</option>
			    </select>
		    </div>
             
		    <div id="op_diplome">
		    	<input type="text" name="option_diplome" placeholder="Série: ex: Bacc D">
		    </div>
		    <div>
		    	<select name="filiere1" required="">
		    		<option selected="" disabled="">Filière (1er choix)</option>
		    		<option onclick="contenu_mobile_agriculture();">Agriculture et Elévage</option>
		    		<option onclick="contenu_mobile_metier_eau();">Métiers de l'eau</option>
            <option onclick="contenu_mobile_science_env();">Sciences Environnementales</option>
            <option onclick="contenu_mobile_g_electrique();">Génie éléctrique</option>
            <option onclick="contenu_mobile_g_civil();">Genie Civil</option>
            <option onclick="contenu_mobile_g_biologique();">Génie Biologique</option>
            <option onclick="contenu_mobile_g_meca();">Génie Mécanique et Productique</option>
            <option onclick="contenu_mobile_com_vente();">Commerce - Vente</option>
            <option onclick="contenu_mobile_gestion();">Gestion</option>
            <option onclick="contenu_mobile_culture();">Arts et Métiers de la Culture</option>
            <option onclick="contenu_mobile_sante();">Etude médico-sanitaires</option>
            <option onclick="contenu_mobile_tic();">Génie Informatique</option>
		    	</select>
		    </div>
        <div >
          <select name="specialite_1" id="specialites_mobile_1" required="" style="background-color: rgb(198,198,255);">
            
          </select>
        </div>

        <div>
          <select name="filiere2" required="">
            <option selected="" disabled="">Filière (2e choix)</option>
            <option onclick="contenu_mobile_agriculture1();">Agriculture et Elévage</option>
            <option onclick="contenu_mobile_metier_eau1();">Métiers de l'eau</option>
            <option onclick="contenu_mobile_science_env1();">Sciences Environnementales</option>
            <option onclick="contenu_mobile_g_electrique1();">Génie éléctrique</option>
            <option onclick="contenu_mobile_g_civil1();">Genie Civil</option>
            <option onclick="contenu_mobile_g_biologique1();">Génie Biologique</option>
            <option onclick="contenu_mobile_g_meca1();">Génie Mécanique et Productique</option>
            <option onclick="contenu_mobile_com_vente1();">Commerce - Vente</option>
            <option onclick="contenu_mobile_gestion1();">Gestion</option>
            <option onclick="contenu_mobile_culture1();">Arts et Métiers de la Culture</option>
            <option onclick="contenu_mobile_sante1();">Etude médico-sanitaires</option>
            <option onclick="contenu_mobile_tic1();">Génie Informatique</option>
          </select>
        </div>
        <div >
          <select name="specialite_2" id="specialites_mobile_2" required="" style="background-color: rgb(198,198,255);">
           
          </select>
        </div>

        <div>
          <select name="filiere3" required="">
            <option selected="" disabled="">Filière (3e choix)</option>
            <option onclick="contenu_mobile_agriculture3();">Agriculture et Elévage</option>
            <option onclick="contenu_mobile_metier_eau3();">Métiers de l'eau</option>
            <option onclick="contenu_mobile_science_env3();">Sciences Environnementales</option>
            <option onclick="contenu_mobile_g_electrique3();">Génie éléctrique</option>
            <option onclick="contenu_mobile_g_civil3();">Genie Civil</option>
            <option onclick="contenu_mobile_g_biologique3();">Génie Biologique</option>
            <option onclick="contenu_mobile_g_meca3();">Génie Mécanique et Productique</option>
            <option onclick="contenu_mobile_com_vente3();">Commerce - Vente</option>
            <option onclick="contenu_mobile_gestion3();">Gestion</option>
            <option onclick="contenu_mobile_culture3();">Arts et Métiers de la Culture</option>
            <option onclick="contenu_mobile_sante3();">Etude médico-sanitaires</option>
            <option onclick="contenu_mobile_tic3();">Génie Informatique</option>
          </select>
        </div>
        <div >
          <select name="specialite_3" id="specialites_mobile_3" required="" style="background-color: rgb(198,198,255);">
            
          </select>
        </div>

		</fieldset>
		<div class="">
		    <input type="submit" value="Enregistrer">
		    <input type="reset" value="Annuler" name="">
		</div>
	</form>
</div>

<?php include("footer.php"); ?>