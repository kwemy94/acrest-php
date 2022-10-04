<?php
class Connection
{
	public function connect_pdo(){
		try{
			$pdo = new PDO('mysql:host=localhost;dbname=acrest_polytechnique', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			return $pdo;
		} catch(Exception $e){
			die('Erreur d connection bd : '.$e -> getMessage());
		}
	}
}