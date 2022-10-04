<?php
include_once("Connection.class.php");

class Liste
{
	public function liste_inscription(){
		$connect = new Connection();
		$pdo = $connect -> connect_pdo();

		$request = $pdo -> query('SELECT nom, prenom, date_naissance, lieu, pays, telephone, email, diplome, option_diplome, filiere1, filiere2, filiere3, specialite_1, specialite_2, specialite_3 FROM inscription ins INNER JOIN paiement paie ON ins.id_inscription = paie.id_inscription');

		return $request;
	}

    # Cette fonction prend en paramètre une filière et retourne l'ensembe des étudiants qui y sont inscrit
	public function liste_par_filiere($filiere){
		$connect = new Connection();
		$pdo = $connect -> connect_pdo();

		$request = $pdo -> query("SELECT nom, prenom, date_naissance, lieu, pays, telephone, email, diplome, option_diplome, filiere FROM inscription ins INNER JOIN paiement paie ON ins.id_inscription = paie.id_inscription WHERE filiere = $filiere ORDER BY nom") or die(print_r($pdo -> errorInfo()));

		return $request;
	}
	
    # Cette fonction retourne le nombre de filière enregistré dans la base de donnée
	// public function compte_filiere(){
	// 	$connect = new Connection();
 //        $pdo = $connect -> connect_pdo();

 //        $req = $pdo -> query('SELECT COUNT(DISTINCT filiere) AS nb_filiere FROM inscription')
 //        $donnee = $req ->fetch();

 //        return $donnee['nb_filiere'];
	// }
}