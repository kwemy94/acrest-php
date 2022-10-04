<?php
class Etudiant
{
	private $nom;
	private $prenom;
	private $date_naissance;
	private $lieu;
	private $pays;
	private $cni;
	private $telephone;
	private $email;

	private $pere;
	private $mere;
	private $contact_parent;

	private $diplome;
	private $option_diplome;
	private $domaine;
	private $filiere1;
	private $filiere2;
	private $filiere3;

    /* spécialités*/
	private $sp1;
	private $sp2;
	private $sp3;

	private $code_insciption;

	public function setNom($nom){
		$this -> nom =$nom;
	}
	public function setPrenom($prenom){
		$this -> prenom = $prenom;
	}
	public function setDate_naissance($date_n){
		$this -> date_naissance = $date_n;
	}
	public function setLieu($lieu){
		$this -> lieu = $lieu;
	}
	public function setPays($pays){
		$this -> pays = $pays;
	}
	public function setCni($cni){
		$this -> cni = $cni;
	}
	public function setTelephone($tel){
		$this -> telephone = $tel;
	}
	public function setEmail($email){
		$this -> email = $email;
	}

	public function setPere($pere){
		$this -> pere = $pere;
	}
	public function setMere($mere){
		$this -> mere = $mere;
	}
	public function setContact_parent($cont){
		$this -> contact_parent = $cont;
	}

	public function setDiplome($diplome){
		$this -> diplome = $diplome;
	}
	public function setOption_diplome($option_diplome){
		$this -> option_diplome = $option_diplome;
	}
	public function setFiliere1($filiere1){
		$this -> filiere1 = $filiere1;
	}
	public function setFiliere2($filiere2){
		$this -> filiere2 = $filiere2;
	}
	public function setFiliere3($filiere3){
		$this -> filiere3 = $filiere3;
	}

	public function setSp1($sp1){
		$this -> sp1 =$sp1;
	}
	public function setSp2($sp2){
		$this -> sp2 =$sp2;
	}
	public function setSp3($sp3){
		$this -> sp3 =$sp3;
	}

	public function setCode_inscription($code_insciption){
		$this -> code_insciption = $code_insciption;
	}


	public function getNom(){
		return $this -> nom;
	}
	public function getPrenom(){
		return $this -> prenom;
	}
	public function getDate_naissance(){
		return $this -> date_naissance;
	}
	public function getLieu(){
		return $this -> lieu;
	}
	public function getPays(){
		return $this -> pays;
	}
	public function getCni(){
		return $this -> cni;
	}
	public function getTelephone(){
		return $this -> telephone;
	}
	public function getEmail(){
		return $this -> email;
	}

	public function getPere(){
		return $this -> pere;
	}
	public function getMere(){
		return $this -> mere;
	}
	public function getContact_parent(){
		return $this -> contact_parent;
	}

    public function getDiplome(){
		return $this -> diplome;
	}
	public function getOption_diplome(){
		return $this -> option_diplome;
	}
	public function getFiliere1(){
		return $this -> filiere1;
	}
	public function getFiliere2(){
		return $this -> filiere2;
	}
	public function getFiliere3(){
		return $this -> filiere3;
	}

	public function getSp1(){
		return $this -> sp1;
	}
	public function getSp2(){
		return $this -> sp2;
	}
	public function getSp3(){
		return $this -> sp3;
	}


	public function getCode_inscription(){
		return $this -> code_insciption;
	}
}