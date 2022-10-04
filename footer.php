 <div class="footer" id="footer">
	<div class="row" id="frow">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div class="footer_milieu">
					<h2>Suivez-nous</h2>
					<div class="fs">
						<h4>
							<a href="#"><img src="IMG/face.png" class="img-circle" height="35px" alt="Facebook"> <strong> Facebook</strong></a>
						</h4>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div>
					<h2>Partenaires</h2>
					
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div>
					<h2>Contacts</h2>
					<div class="fs">
						<h4>Email: info.acrest@gmail.com</h4>
						<h4>Tel: +237 677860638</h4>
						<p>© Shell ISAP 2019</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div id="newsletter">
					<h2>Newsletter</h2>
					<form method="post" action="footer.php">
						<input type="email" name="email_newsletter" placeholder="Entrez adresse email" required="" autocomplete="off" >
						<button class="btn btn-primary" type="submit" id="bouton">
							<span class="glyphicon glyphicon-ok-sign" style="color: #ccff00"></span>Send
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
    <?php
        if (isset($_POST['email_newsletter'])) {
            include_once("Models/Inscription.class.php");

            $inscription = new Inscription(); 

            if ($inscription -> inscrire_newsletter( $_POST['email_newsletter']) == 0) {
            	header('location: /a');
            } else{
            	header('location: /a?echec');
            }
        }
    ?>