<?php
include("lien_en_tete.php");
include("en_tete.php");
include('menu.php');
?>

<style type="text/css">
	.presentation{
		display: none;    /* Ce code css agit uniquement lorsque cette page est ouverte; il naura aucun effet sur les autres page */
	}
	#container_specialite{
		padding: 25px 75px ;
		background-image: url("../fichier/ev3.jpg");
	}
	#container_specialite figure{
		display: inline-block;
		padding: 10px 20px;
	}
	#container_specialite figcaption a{
		font-size: 16px;
	color: rgb(0,162,232);
	font-style: italic;
	font-weight: bold;
	}
	#container_tech{
		
	}
</style>

<div class="container" id="container_specialite">
	
	<figure>
		<img src="IMG/logos/aqua.png" alt="" height="70" class="img-circle">
		<figcaption>
			<a href="spe_aquaculture.php" class="afficher_aquaculture">Aquaculture </a>
		</figcaption>
	</figure>
	<figure>
		<img src="IMG/logos/prod_animale.png" alt="" height="70" class="img-circle">
		<figcaption>
			<a href="spe_prod_animale.php" class="afficher_prod_animale"> Production Animale </a>
		</figcaption>
	</figure>
	<figure>
		<img src="IMG/aq2.png" alt="" height="70" class="img-circle">
		<figcaption>
			<a href="spe_prod_vegetale.php" class="afficher_prod_vegetale"> Production Végétale </a>
		</figcaption>
	</figure>
	<figure id="titre_img">
		<img src="IMG/agriculture5.png">
		<figcaption class="figure-caption text-center"><strong>Culture en serre</strong></figcaption>
	</figure> <br>

	<figure>
		<img src="IMG/logos/hydrau.jpg" alt="" height="70" class="img-circle">
		<figcaption> <a href="spe_hydro_traitement.php" class="afficher_hydro_traitement">Hydraulique, Traitement<br> des Eaux & Assainissement </a>
     </figcaption>
	</figure><br>
	<figure id="titre_img" >
		<img src="IMG/acrest 5m waterwheel.jpg" >
		<figcaption class="figure-caption text-center"><strong>Roue à aubes ACREST</strong></figcaption>
	</figure><br>

	<figure>
		<img src="IMG/logos/gest_env.jpg" alt="" height="70" class="img-circle">
		<figcaption><a href="spe_gestion_environnement.php" class="afficher_gestion_env">Gestion Environnementale</a></figcaption>
	</figure><br>
	<figure id="titre_img" >
		<img src="IMG/Production du charbon A3.jpg" style="height:500px; " >
		<figcaption class="figure-caption text-center"><strong>Production du charbon ACREST</strong></figcaption>
	</figure><br>

	<figure>
		<img src="IMG/logos/electrotechnique.jpg" alt="" height="70" class="img-circle">
		<figcaption><a href="spe_electrotechnique.php" class="afficher_electrotechnique">Electrotechnique</a></figcaption>
	</figure>
	<figure>
		<img src="IMG/logos/ener.jpg" alt="" height="70" class="img-circle">
		<figcaption>
			<a href="spe_energie_renouvelable.php" class="afficher_energie_renouvelable">Energies Renouvelable</a>
		</figcaption>
	</figure><br>
	<figure id="titre_img">
		<img src="IMG/wind-energy.jpg"   >
		<figcaption class="figure-caption text-center"><strong>éolienne ACREST</strong></figcaption>
	</figure><br>

	<figure>
		<img src="IMG/logos/bat.jpg" alt="" height="70" class="img-circle">
		<figcaption><a href="spe_batiment.php" class="afficher"> Bâtiment </a></figcaption>
	</figure>
	<figure>
		<img src="IMG/logos/tp.jpg" alt="" height="70" class="img-circle">
		<figcaption>
			<a href="spe_travaux_public" class="afficher_travaux_public">Travaux Publics</a>
		</figcaption>
	</figure>
	<figure>
		<img src="IMG/logos/urbanisme.jpg" alt="" height="70" class="img-circle">
		<figcaption>
			<a href="spe_urbanisme.php" class="afficher_urbanisme">Urbanisme</a>
		</figcaption>
	</figure>
	<figure>
		<img src="IMG/logos/menuiserie.jpg" alt="" height="70" class="img-circle">
		<figcaption>
			<a href="spe_menuiserie.php" class="afficher_menusierie">Menusuirie & Ebénisterie</a>
		</figcaption>
	</figure><br>
	<figure id="titre_img">
		<img src="IMG/g_civil01.jpg"  >
		<figcaption class="figure-caption text-center"><strong>Construction pont en arc. ACREST</strong></figcaption>
	</figure><br>

	<figure>
		<img src="IMG/logos/alimentaire.jpg" alt="" height="70" class="img-circle">
		<figcaption>
			<a href="spe_ind_alimentaire.php" class="afficher_ind_alimentaire">Industrie Alimentaire</a>
		</figcaption>
	</figure><br>
	<figure id="titre_img" >
		<img src="IMG/vin de rafia.jpg"  >
		<figcaption class="figure-caption text-center"><strong>Mise en bouteille & conservation du vin de rafia ACREST</strong></figcaption>
	</figure><br>

	<figure>
		<img src="IMG/logos/metal.png" alt="" height="70" class="img-circle">
		<figcaption>
			<a href="spe_const_metallique.php" class="afficher_construction">Construction Métallique</a>
		</figcaption>
	</figure>
	<figure>
		<img src="IMG/logos/meca.png" alt="" height="70" class="img-circle">
		<figcaption>
			<a href="spe_meca_elect_auto.php" class="afficher_meca_auto">Mécanique et électronique<br> Automobile</a>
		</figcaption>
	</figure>
	<figure>
		<img src="IMG/logos/const_fabrication.jpg" alt="" height="70" class="img-circle">
		<figcaption>
			<a href="spe_const_fabri_meca.php" class="afficher_fabrication">Construction &<br>Fabrication Mécaniques</a>
		</figcaption>
	</figure><br>
	<figure id="titre_img" >
		<img src="IMG/passe partout.jpg"  >
		<figcaption class="figure-caption text-center"><strong>Véhicule PassePartout ACREST</strong></figcaption>
	</figure><br>

	<figure>
		<img src="IMG/logos/marketing.png" alt="" height="70" class="img-circle">
		<figcaption>
			<a href="spe_marketing.php" class="afficher_marketing">Marketing - Commerce<br>Vente</a>
		</figcaption>
	</figure><br>
	<figure id="titre_img" >
		<img src="IMG/marketing.jpg"  >
		<figcaption class="figure-caption text-center"><strong>Marketing</strong></figcaption>
	</figure><br>

	<figure>
		<img src="IMG/logos/compta.png" alt="" height="70" class="img-circle">
		<figcaption>
			<a href="spe_comptabilite.php" class="afficher_comptabilite">Comptabilite</a>
		</figcaption>
	</figure>
	<figure>
		<img src="IMG/logos/gestion_projet.png" alt="" height="70" class="img-circle">
		<figcaption>
			<a href="spe_gestion_projet.php" class="afficher_gestion_projet">Gestion des Projets</a>
		</figcaption>
	</figure>
	<figure>
		<img src="IMG/logos/trans1.webp" alt="" height="70" class="img-circle">
		<figcaption>
			<a href="spe_logistique.php" class="afficher_logistique">Logistique
		</figcaption>
	</figure>
	
	<figure>
		<img src="IMG/logos/microfinance.jpg" alt="" height="70" class="img-circle">
		<figcaption>
			<a href="spe_microfinance.php" class="afficher_microfinance">Microfinance</a>
		</figcaption>
	</figure>
	<figure>
		<img src="IMG/logos/gest_coll_territ.png" alt="" height="70" class="img-circle">
		<figcaption>
			<a href="spe_gest_coll_territ.php" class="afficher_collectivite">Gestion des Collectivités<br> Territoriales</a>
		</figcaption>
	</figure><br>
	<figure id="titre_img" >
		<img src="IMG/gestion.jpg"  >
		<figcaption class="figure-caption text-center"><strong></strong></figcaption>
	</figure><br>

	<figure>
		<img src="IMG/logos/textile.jpg" alt="" height="70" class="img-circle">
		<figcaption>
			<a href="spe_ind_textile.php" class="afficher_ind_textile">Industrie du Textile &<br>de l’Habillement
         </a>
		</figcaption>
	</figure><br>
	<figure id="titre_img" >
		<img src="IMG/ind_hab.jpg"  >
		<figcaption class="figure-caption text-center"><strong></strong></figcaption>
	</figure><br>

	<figure>
		<img src="IMG/logos/femme.jpg" alt="" height="70" class="img-circle">
		<figcaption>
			<a href="spe_sage_femme.php" class="afficher_sage_femme">Sage Femme</a>
		</figcaption>
	</figure>
	<figure>
		<img src="IMG/logos/odon.jpg" alt="" height="70" class="img-circle">
		<figcaption>
			<a href="spe_odontostomatologie" class="afficher_odontostomatologie">Odontostomatologie</a>
		</figcaption>
	</figure>
	<figure>
		<img src="IMG/logos/science_inf.jpg" alt="" height="70" class="img-circle">
		<figcaption>
			<a href="spe_science_infirmiere.php" class="afficher_science_infirmiere">Science Infirmière</a>
		</figcaption>
	</figure><br>
	<figure id="titre_img" >
		<img src="IMG/.jpg"  >
		<figcaption class="figure-caption text-center"><strong></strong></figcaption>
	</figure><br>

	<figure>
		<img src="IMG/logos/logiciel.jpg" alt="" height="70" class="img-circle">
		<figcaption>
			 <a href="spe_genie_logiciel" class="afficher_geni_log">Génie Logiciel</a>
		</figcaption>
	</figure>
	<figure>
		<img src="IMG/logos/maintenance.jpg" alt="" height="70" class="img-circle">
		<figcaption>
			<a href="spe_maintenance_info.php" class="afficher_maintenance_info">Maintenance des Systemes<br> Informatiques</a>
		</figcaption>
	</figure><br>
	<figure id="titre_img" >
		<img src="IMG/passe partouss="figure-caption text-center"><strong></strong></figcaption>
	</figure>
</div>

<?php include("footer.php"); ?>