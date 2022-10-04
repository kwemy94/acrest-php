<?php 
include_once("lien_en_tete.php");
include_once("en_tete.php");
include_once("menu.php");
define("MONTANT_PRE_INSCRIPTION", 300)
?>
<div class="container-fluit">
    <div class="row" id="row_p">
        <div class="col-md-4 col-sm-6 col-xs-12"></div>
        <div id="paiement"  class="col-md-4 col-sm-6 col-xs-12">
            <div id="s_paiement">
                <form method="post" action="">
                    <h3>Paiement via MoMo</h3>
                    <input type="text" name="tel" placeholder="Numéro de téléphone" required="" autofocus="" autocomplete="off">
                    <input type="text" name="code" placeholder="Numéro d'inscription" required="" autocomplete="off">
                    <input type="hidden" name="montant" value="<?php echo MONTANT_PRE_INSCRIPTION ?>" >
                    <button class="btn btn-primary" type="submit" id="bouton">
                        <span class="glyphicon glyphicon-ok-sign" style="color:#ccff00"></span>Valider
                    </button>
                    <div>
                        Numéro d'inscription oublié ? <a href="reset_passwd.php">Recuperer!</a>
                    </div>
                </form>
            </div>
        </div>
        <!-- <div class="col-md-4 col-sm-6 col-xs-12"></div> -->
    </div>
</div>
<!-- <div id="paiement">
	<div id="s_paiement">
		<form method="post" action="">
            <h3>Paiement via MoMo</h3>
		    <input type="text" name="tel" placeholder="Numéro de téléphone" required="" autofocus="" autocomplete="off">
		    <input type="text" name="code" placeholder="Numéro d'inscription" required="" autocomplete="off">
		    <input type="hidden" name="montant" value="<?php echo MONTANT_PRE_INSCRIPTION ?>" >
		    <button class="btn btn-primary" type="submit" id="bouton"><span class="glyphicon glyphicon-ok-sign"
		        style="color:#ccff00"></span>Valider
		    </button>
	    </form>
	</div>
</div>

 --><?php 
include_once("footer.php");

     if (isset($_POST) && !empty($_POST['tel']) && !empty($_POST['code']) && !empty($_POST['montant'])) {
           include_once("Models/Paiement.class.php");
         
        $paiement = new Paiement();
        $id_ins = $paiement -> search_id($_POST['code']);
        #Parcourir pour recuperer l'id trouvé   
        $id_inscrip = null;       
            while ($donnee =$id_ins -> fetch()) {
                $id_inscrip = $donnee['id_inscription'];
            }

        if ( strcmp($id_inscrip, "echec") == -1) {
          
            $montant = $_POST['montant'];
            $telephone = $_POST['tel'];
            
            /* Recupération des informations json liées au statut de la transaction MoMo 
               '@' permet d'empecher les messages d'érreur de php à l'utilisateur (au cas ou quelque chose ne fonctionne pas bien)
            */
            $json = @file_get_contents("https://developer.mtn.cm/OnlineMomoWeb/faces/transaction/transactionRequest.xhtml?idbouton=2&typebouton=PAIE&_amount=$montant&_tel=$telephone&_clP=&_email=granttiwa0@gmail.com&submit.x=104&submit.y=70");

            # Tranposition de la chaine json dns une variable php
            $json_decode = json_decode($json);

            /* Test du statusCode de la transaction
               '@' permet d'empecher les messages d'érreur de php à l'utilisateur (au cas ou quelque chose ne fonctionne pas bien)
            */
            if (@$json_decode -> StatusCode == '01') {

                # Sauvegarde des informtions relatives à la transaction
                $paie = $paiement -> sauvegarde_paiement( $id_inscrip, $_POST['montant'], date('Y-m-d H:m:s'),
                    $json_decode -> SenderNumber, $json_decode -> TransactionID);

                 echo '<script type="text/javascript">alert("Paiement effectuer");</script>';

            } else if (@$json_decode -> StatusCode == '529'){
                echo '<script type="text/javascript">alert("Echec Paiement! Votre solde est insuffissant");</script>';
            }

        } else {
            echo "<script type='text/javascript'>alert('Numéro d\'inscription incorrect! ');</script>";
        }
     }
?> 