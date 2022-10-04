<?php
include_once("Connection.class.php");
# include_once("Etudiant.class.php");

class Inscription
{
	public function inscrire($etudiant){

		$connect = new Connection();
		$pdo = $connect -> connect_pdo();

		$request = $pdo ->prepare('INSERT INTO inscription VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');

		if($request -> execute(array(null, $etudiant -> getNom(), $etudiant -> getPrenom(), $etudiant -> getDate_naissance(), $etudiant -> getLieu(), $etudiant -> getPays(), $etudiant -> getCni(), $etudiant -> getTelephone(), $etudiant -> getEmail(), $etudiant -> getPere(), $etudiant -> getMere(), $etudiant -> getContact_parent(), $etudiant -> getDiplome(), $etudiant -> getOption_diplome(), $etudiant -> getFiliere1(), $etudiant -> getSp1(), $etudiant -> getFiliere2(), $etudiant -> getSp2(), $etudiant -> getFiliere3(), $etudiant -> getSp3(), $etudiant -> getCode_inscription())))
		{
			return 0;
		} else{
			return 1;
		}

	}

	public function inscrire_newsletter($email){
		$connect = new Connection();
		$pdo = $connect -> connect_pdo();

		$request = $pdo -> prepare('INSERT INTO newsletter VALUES(:id, :mail)');
		$request -> execute(array('id' => null, 'mail' => $email));

		if ($request) {
			return 0;
		} else {
			return 1;
		}

	}
}