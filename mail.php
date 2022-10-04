<?php


     if (isset($_POST) && !empty($_POST['pseudo_exp']) && !empty($_POST['email_exp']) &&
          !empty($_POST['message'])) {
          
          extract($_POST);
          $destinataire = "granttiwa0@gmail.com";
          $expediteur =$pseudo_exp.' < '.$email_exp.' >';

          $mail = mail($destinataire, $objet, $message, $expediteur .' : patrimgest.com : Mail de test');

          if ($mail) {
               echo "Email envoyée";
          }else{
               echo "Email non envoyée";
          }
     }else{
          echo "Formulaire non soumis ou des champs vides";
     }
?>
<form method="post" action="">
     <input type="text" placeholder="Pseudo" name="pseudo_exp">
     <input type="email" placeholder="Email" name="email_exp">
     <input type="text" placeholder="Objet" name="objet">
     <textarea placeholder="Votre message" name="message"></textarea>
     <input type="submit" value="Send" name="">
</form>