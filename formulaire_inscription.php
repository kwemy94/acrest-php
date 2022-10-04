<link rel="stylesheet" type="text/css" href="css/formulaire_inscription.css">
<?php include("lien_en_tete.php"); ?>
<div id="inscription1">
	<form id="form_inscription" method="post" action="inscription2.php">
		<fieldset>
			<legend>Information Générale</legend>

			<div class="input-group">
			    <input type="text" placeholder="Votre nom" name="nom" style="text-transform: uppercase;" required="">
		    </div>

		    <div class="input-group">
			    <input type="text" placeholder="Prenom" name="prenom" style="text-transform: capitalize;">
		    </div>

		    <div class="input-group">
			    <input class="input--style-3 js-datepicker" type="text" placeholder="Date de naissance" name="birthday" autocomplete="off"> <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>

			    <input type="text" name="lieu_naissance" placeholder="Lieu de naissance" style="text-transform: uppercase; margin-left: 35px;" required="">
            </div>

		    <div class="input-group">
		    	<input type="text" name="cni" placeholder="Numéro de CNI" required="">
		    </div>

		    <div class="input-group">
		    	<input type="text" name="telephone" placeholder="Téléphone" required="" required="">
		    </div>

		    <div class="input-group">
		    	<input type="email" name="email" placeholder="E-mail" required="">
		    </div>
            
            <div>
            	<select name="pays" required="">
            		<option disabled="" selected="">Pays d'origine</option>
            		<optgroup label="Afrique">
                        <option >Afrique Du Sud</option>
                        <option >Algérie</option>
                        <option >Angola</option>
                        <option >Bénin</option>
                        <option >Botswana</option>
                        <option >Burkina</option>
                        <option >Burundi</option>
                        <option >Cameroun</option>
                        <option >Cap-Vert</option>
                        <option >République Centre-Africaine</option>
                        <option >Comores</option>
                        <option >République Démocratique Du Congo</option>
                        <option >Congo</option>
                        <option >Côte d'Ivoire</option>
                        <option >Djibouti</option>
                        <option >Égypte</option>
                        <option >Éthiopie</option>
                        <option >Érythrée</option>
                        <option >Gabon</option>
                        <option >Gambie</option>
                        <option >Ghana</option>
                        <option >Guinée</option>
                        <option >Guinée-Bisseau</option>
                        <option >Guinée Équatoriale</option>
                        <option >Kenya</option>
                        <option >Lesotho</option>
                        <option >Liberia</option>
                        <option >Libye</option>
                        <option >Madagascar</option>
                        <option >Malawi</option>
                        <option >Mali</option>
                        <option>Maroc</option>
                        <option >Maurice</option>
                        <option >Mauritanie</option>
                        <option >Mozambique</option>
                        <option >Namibie</option> 
                        <option >Niger</option>
                        <option >Nigeria</option>
                        <option >Ouganda</option>
                        <option >Rwanda</option>
                        <option >Sao Tomé-et-Principe</option>
                        <option >Séngal</option>
                        <option >Seychelles</option>
                        <option >Sierra</option>
                        <option >Somalie</option>
                        <option >Soudan</option>
                        <option >Swaziland</option>
                        <option >Tanzanie</option>
                        <option >Tchad</option>
                        <option >Togo</option>
                        <option >Tunisie</option>
                        <option >Zambie</option>
                        <option >Zimbabwe</option>
                    </optgroup>

                    <optgroup label="Amérique">
                        <option >Antigua-et-Barbuda</option>
                        <option >Argentine</option> 
                        <option >Bahamas</option>
                        <option >Barbade</option>
                        <option >Belize</option>
                        <option >Bolivie</option>
                        <option >Brésil</option>
                        <option >Canada</option>
                        <option >Chili</option>
                        <option >Colombie</option>
                        <option >Costa Rica</option>
                        <option >Cuba</option>
                        <option >République Dominicaine</option>
                        <option >Dominique</option>
                        <option >Équateur</option>
                        <option >États Unis</option>
                        <option >Grenade</option>
                        <option >Guatemala</option>
                        <option >Guyana</option>
                        <option>Haïti</option>
                        <option >Honduras</option>
                        <option >Jamaïque</option>
                        <option >Mexique</option>
                        <option >Nicaragua</option>
                        <option >Panama</option>
                        <option >Paraguay</option>
                        <option >Pérou</option>
                        <option >Saint-Cristophe-et-Niévès</option>
                        <option >Sainte-Lucie</option>
                        <option >Salvador</option>
                        <option >Suriname</option>
                        <option >Trinité-et-Tobago</option>
                        <option >Uruguay</option>
                        <option >Venezuela</option>
                    </optgroup>

                    <optgroup label="Asie">
                        <option >Afghanistan</option>
                        <option >Arabie Saoudite</option>
                        <option >Arménie</option>
                        <option >Azerbaïdjan</option>
                        <option >Bahreïn</option>
                        <option >Bangladesh</option>
                        <option >Bhoutan</option>                                                                          <option>Birmanie</option>
                        <option >Brunéi</option>
                        <option >Cambodge</option>
                        <option >Chine</option>
                        <option >Corée Du Sud</option>
                        <option>Corée Du Nord</option>
                        <option >Émirats Arabe Unis</option>
                        <option >Géorgie</option>
                        <option >Inde</option>
                        <option >Indonésie</option>
                        <option >Iraq</option>
                        <option >Iran</option>
                        <option >Israël</option>
                        <option >Japon</option>
                        <option >Jordanie</option>
                        <option >Kazakhstan</option>
                        <option >Kirghistan</option>
                        <option >Koweït</option>
                        <option >Laos</option>
                        <option >Liban</option>
                        <option >Malaisie</option>
                        <option >Maldives</option>
                        <option >Mongolie</option>
                        <option >Népal</option>
                        <option >Oman</option>
                        <option >Ouzbékistan</option>
                        <option>Pakistan</option>
                        <option >Philippines</option>
                        <option >Qatar</option>
                        <option >Singapour</option>
                        <option >Sri Lanka</option>
                        <option >Syrie</option>
                        <option >Tadjikistan</option>
                        <option >Taïwan</option>
                        <option>Thaïlande</option>
                        <option >Timor oriental</option >
                        <option >Turkménistan</option>
                        <option >Turquie</option>
                        <option >Viêt Nam</option>
                        <option >Yemen</option>
                    </optgroup>
 
                    <optgroup label="Europe">
                        <option >Allemagne</option>
                        <option >Albanie</option>
                        <option >Andorre</option>
                        <option >Autriche</option>
                        <option >Biélorussie</option>
                        <option >Belgique</option>
                        <option >Bosnie-Herzégovine</option>
                        <option >Bulgarie</option>
                        <option >Croatie</option>
                        <option >Danemark</option>
                        <option >Espagne</option>
                        <option >Estonie</option>
                        <option >Finlande</option>
                        <option >France</option>
                        <option >Grèce</option>
                        <option >Hongrie</option>
                        <option >Irlande</option>
                        <option >Islande</option>
                        <option >Italie</option>
                        <option >Lettonie</option>
                        <option >Liechtenstein</option>
                        <option >Lituanie</option>
                        <option >Luxembourg</option>
                        <option >Ex-République Yougoslave de Macédoine</option>
                        <option >Malte</option>
                        <option >Moldavie</option>
                        <option >Monaco</option>
                        <option >Norvège</option>
                        <option>Pays-Bas</option>
                        <option>Pologne</option>
                        <option >Portugal</option>
                        <option >Roumanie</option>
                        <option >Royaume-Uni</option>
                        <option >Russie</option>
                        <option >Saint-Marin</option>
                        <option >Serbie-et-Monténégro</option>
                        <option >Slovaquie</option>
                        <option >Slovénie</option>
                        <option >Suède</option>
                        <option>Suisse</option>
                        <option >République Tchèque</option>
                        <option >Ukraine</option>
                        <option >Vatican</option>
                    </optgroup>
 
                    <optgroup label="Océanie">
                        <option >Australie</option>
                        <option >Fidji</option>
                        <option >Kiribati</option>
                        <option >Marshall</option>
                        <option >Micronésie</option>
                        <option >Nauru</option>
                        <option >Nouvelle-Zélande</option>
                        <option >Palaos</option>
                        <option >Papouasie-Nouvelle-Guinée</option>
                        <option >Salomon</option>
                        <option >Samoa</option>
                        <option >Tonga</option>
                        <option >Tuvalu</option>
                        <option >Vanuatu</option>
                    </optgroup> 
            	</select>
            </div>

		    <div class="input-group">
		    	     <input type="text" name="parent1" placeholder="Nom du pere" style="text-transform: uppercase;">
		    	     <input type="tel" name="tel_parent1" placeholder="Contact du père" style="margin-left: 35px;">
		    </div>

		    <div class="input-group">
		    	     <input type="text" name="parent2" placeholder="Nom de la mère" required="" style="text-transform:uppercase;">
		    	     <input type="text" name="tel_parent2" placeholder="Contact de la mère" style="margin-left: 35px;">
		    </div>
		    
		    <div class="input-group">
		    	     <input type="text" name="tuteur" placeholder="Nom tuteur">
		    	     <input type="text" name="tel_tuteur" placeholder="Contact tuteur" style="margin-left: 35px;">
		    </div >
                <div>
                      <h4>     
                          <input type="checkbox" name="confirmation1">
                          En cochant cette case, vous attestez que les informations ci-dessus sont correctes
                      </h4>
		</fieldset>

		<fieldset>
			<legend>Cursus à suivre</legend>
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
             
		    <div>
		    	<input type="text" name="option_diplome" placeholder="Option du diplome">
		    </div>

		    <div class="input-group">
		    	<select name="domaine" required="">
		    		<option selected="true" disabled="true">Domaine</option>
		    		<option>Agropastoral</option>
		    		<option>Eau et Environnement</option>
		    		<option>Industrie et Technologies</option>
		    		<option>Commerce Gestion Droit</option>
		    		<option>Tourisme Hôtellerie et Sciences Sociales</option>
		    		<option>Santé</option>
		    		<option>TIC</option>
		    	</select>
		    </div>

		    <div>
		    	<select name="filiere">
		    		<option selected="" disabled="">Filière</option>
		    		<option>Agriculture et Elévage</option>
		    		<option>Métiers de l'eau</option>
                    <option>Sciences Environnementales</option>
                    <option>Génie éléctrique</option>
                    <option>Genie Civil</option>
                    <option>Génie Biologique</option>
                    <option>Génie Mécanique et Productique</option>
                    <option>Commerce - Vente</option>
                    <option>Gestion</option>
                    <option>Arts et Métiers de la Culture</option>
                    <option>Etude médico-sanitaires</option>
                    <option>Génie Informatique</option>
		    	</select>
		    </div>

		</fieldset>
		<div class="input-group">
		    <input type="submit" value="Enregistrer">
		    <input type="reset" value="Annuler" name="">
		</div>

	</form>
</div>