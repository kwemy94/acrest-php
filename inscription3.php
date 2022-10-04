
<div id="inscription1">
	<form method="post" action="inscription2.php" id="form_inscription">
		<fieldset>
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
             
		    <div>
		    	<input type="text" name="option_diplome" placeholder="Option du diplome">
		    </div>

		    <div class="domaine">
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
		<div class="">
		    <input type="submit" value="Enregistrer">
		    <input type="reset" value="Annuler" name="">
		</div>
	</form>
</div>