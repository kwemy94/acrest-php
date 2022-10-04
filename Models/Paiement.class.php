<?php
include_once("Connection.class.php");

class Paiement {

	public function search_id($code_inscription){
		$con = new Connection();
		$pdo = $con -> connect_pdo();

		$request = $pdo -> prepare("SELECT id_inscription FROM inscription WHERE code_inscription = :code");

     	if($request -> execute(array('code' => $code_inscription))){
     		return $request;
     	} else {
     		return "echec";
     	}

	}

	public function sauvegarde_paiement($id_etud, $montant, $date_p, $sender_number, $transaction_id){
		$con = new Connection();
		$pdo = $con -> connect_pdo();

		$request = $pdo -> prepare('INSERT INTO paiement VALUES(:id, :id_ins, :montant, :jour, :sender_number, :transaction_id)') or die(print_r($pdo -> errorInfo()));
		$request -> execute(array(
                'id' => null, 
                'id_ins' => $id_etud, 
                'montant' => $montant, 
                'jour' => $date_p,
                'sender_number' => $sender_number,
                'transaction_id' => $transaction_id
            ));

		if ($request) {
			return 0;
		} else{
			return -1;
		}
	}
}