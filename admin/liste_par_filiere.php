<?php
session_start();
?>
<?php 
if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {
	include_once("../Models/Liste.class.php");
    $liste = new Liste();
?>
<link rel="stylesheet" type="text/css" href="../css/bootstrap-3.3.7-dist/css/bootstrap.min.css">

<div style="text-align: center; padding: 10px 10px;">
	<a href="../polytechnique.php">Retour</a>
	<a href="#" >Imprimer</a>
</div>
<div >
    <table class="table table-bordered table-striped" >
    	<thead >
    		<tr>
    			<th>#</th>
    			<th>NOM</th>
    			<th>PRENOM</th>
    			<th>DATE DE NAISSANCE</th>
    			<th>LIEU DE NAISSANCE</th>
    			<th>PAYS</th>
    			<th>CONTACT</th>
    			<th>EMAIL</th>
    			<th>DIPLOME</th>
    			<th>OPTION DU DIPLOME</th>
    			<th>DOMAINE </th>
    			<th>FILIERE</th>
    		</tr>
    		<tr><td colspan="6"></td></tr>
    	</thead>
    	<tbody>
    		<?php
            $request = $liste -> liste_inscription();
            $compteur = 0;
            while ($donnee = $request -> fetch()) {
            ?>
            <tr>
            	<td>
                 <div class="custom-control custom-checkbox">
                     <input type="checkbox" class="custom-control-input" name="">
                     <label class="custom-control-label" ><?php echo ++$compteur; ?> </label>
                 </div>
                </td>
            	<td><?php echo htmlspecialchars( $donnee['nom']); ?></td>
            	<td><?php echo htmlspecialchars($donnee['prenom']); ?></td>
            	<td><?php echo htmlspecialchars($donnee['date_naissance']); ?></td>
            	<td><?php echo htmlspecialchars($donnee['lieu']); ?></td>
            	<td><?php echo htmlspecialchars($donnee['pays']); ?></td>
            	<td><?php echo htmlspecialchars($donnee['telephone']); ?></td>
            	<td><?php echo htmlspecialchars($donnee['email']); ?></td>
            	<td><?php echo htmlspecialchars($donnee['diplome']); ?></td>
            	<td><?php echo htmlspecialchars($donnee['option_diplome']); ?></td>
            	<td><?php echo htmlspecialchars($donnee['domaine']); ?></td>
            	<td><?php echo htmlspecialchars($donnee['filiere']); ?></td>
            </tr>
        <?php } ?>
    	</tbody>
    </table>
	
</div>
<?php } else{
	header('location: /a');
} ?>