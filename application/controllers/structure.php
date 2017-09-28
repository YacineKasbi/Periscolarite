<?php
define('PREFIXE_SHA1', 'p8%B;Qdf78'); // /!\changer prefixe !
class structure extends CI_Controller
{	
	public function index()
	{
		//	Charge par défault la vue accueil
		$this->accueil();
	}
	
	public function accueil()
	{
		$data = array();
		$data['title'] = 'Acceuil - Périscolarité';
		$data['contents'] = "page_contenu_view";
		$this->load->view('templates/template', $data);
	}

	public function auth_intervenant()
	{
		$data = array();
		$data['title'] = 'Se connecter - Périscolarité';
		$data['contents'] = "auth_intervenant";
		$this->load->view('templates/template', $data);
	}
	
	public function auth_client()
	{
		$data = array();
		$data['title'] = 'Se connecter - Périscolarité';
		$data['contents'] = "auth_client";
		$this->load->view('templates/template', $data);
	}
	
	public function subscribe_interv()
	{
		$data = array();
		$data['title'] = "S'inscrire - Périscolarité";
		$data['contents'] = "subscribe_interv";
		$this->load->view('templates/template', $data);
	}
	
	public function subscribe_client()
	{
		$data = array();
		$data['title'] = "S'inscrire - Périscolarité";
		$data['contents'] = "subscribe_client";
		$this->load->view('templates/template', $data);
	}

	public function tarifs()
	{
		$data = array();
		$data['title'] = "Les tarifs";
		$data['contents'] = "tarifs";
		$this->load->view('templates/template', $data);
	}
	
	public function valid_intervenant()
	{
		$data = array();
		$data['sucess'] = false;
		//$pwd = $_POST['pwd'];
		$pwd_sha1 = sha1(PREFIXE_SHA1.$_POST['pwd']);
		
		$intervenant = [
			"nom" => $_POST['nom'],
			"prenom" => $_POST['prenom'],
			"sexe" => $_POST['sexe'],
			"date_naissance" => $_POST['dateNaissance'],
			"email" => $_POST['email'],
			"pwd" => $pwd_sha1,
			"adresse" => $_POST['adresse'],
			"ville" => $_POST['ville'],
			"vehicule" => $_POST['vehicule'],
			"code_postale" => $_POST['code_postale'],
			"num_fixe" => $_POST['num_fixe'],
			"num_portable" => $_POST['num_portable'],
			"nationalite" => $_POST['nationalite'],
			"pays_naissance" => $_POST['pays_naissance'],
			"ville_naissance" => $_POST['ville_naissance'],
			"code_postale_naiss" => $_POST['CodePostalNaissance'],
			"type_papier_identite" => $_POST['papier_identite'],
			"date_expiration" => $_POST['expiration'],
			"delivre_par" => $_POST['delivre_par'],
			"dep_papier_identite" => $_POST['departement_obtention'],
			"num_secu" => $_POST['numeroSecuSociale'],
			"situation" => $_POST['situation_pro'],
			"dispo" => $_POST['dispo'],
			"motivations" => $_POST['motivations'],
			"email_parrain" => $_POST['mail_parrain'],
			"connu_par" => $_POST['comment_connu'],
			"admin" => 'false'
		];
		$this->load->database();
		
		
		$done = true;
		foreach ($intervenant as $key=>$value) { // Verif formulaire inscription
			if($key != 'email_parrain') { // champs non obligatoires
				if(isset($value) && trim($value) != '') $done &= true;
				else $done &= false;
			}
		}
		if($done) {
				if($this->db->insert('intervenant', $intervenant)) $data['sucess'] = true;
				else $data['sucess'] = false;
		}
		$this->db->close();
		
		$data['title'] = "Inscription";
		$data['contents'] = "subscribe_success";
		$this->load->view('templates/template', $data);
	}
	
	public function valid_client()
	{
		$data = array();
		$data['sucess'] = false;
		//$pwd = $_POST['pwd'];
		$pwd_sha1 = sha1(PREFIXE_SHA1.$_POST['pwd']);
		
		$client = [
			"nom" => $_POST['nom'],
			"prenom" => $_POST['prenom'],
			"sexe" => $_POST['sexe'],
			"date_naissance" => $_POST['dateNaissance'],
			"email" => $_POST['email'],
			"pwd" => $pwd_sha1,
			"adresse" => $_POST['adresse'],
			"ville" => $_POST['ville'],
			"code_postale" => $_POST['code_postale'],
			"num_fixe" => $_POST['num_fixe'],
			"num_portable" => $_POST['num_portable'],
			"ce" => $_POST['comite'],
			"profession" => $_POST['profession'],
			"email_parrain" => $_POST['mail_parrain'],
			"connu_par" => $_POST['comment_connu'],
			"admin" => 'false'
		];
		$this->load->database();
		
		
		$done = true;
		foreach ($client as $key=>$value) { // Verif formulaire inscription
			if($key != 'email_parrain' && $key != 'ce' && $key != 'profession') { // champs non obligatoires
				if(isset($value) && trim($value) != '') $done &= true;
				else $done &= false;
			}
		}
		if($done) {
				if($this->db->insert('client', $client)) $data['sucess'] = true;
				else $data['sucess'] = false;
		}
		$this->db->close();
		
		$data['title'] = "Inscription";
		$data['contents'] = "subscribe_success";
		$this->load->view('templates/template', $data);
	}
	
	public function login_intervenant()
	{
		$data = array();
		$mail = $_POST['email'];
		$mdp = sha1(PREFIXE_SHA1.$_POST['pwd']); // mot de passe formulaire
		
		$this->load->database();
		$this->db->select('email, pwd, prenom');
		$this->db->from('intervenant');
		$this->db->where(array('email' => $mail));
		$query = $this->db->get();
		$res = array();
		
		foreach ($query->result() as $key=>$row){
			$res['email'] = $row->email;
			$res['pwd'] = $row->pwd;
			$res['prenom'] = $row->prenom;
		}
		
		if(isset($res['pwd']) && $res['pwd'] == $mdp){
			$_SESSION["connected"] = true;
			$_SESSION["prenom"] = $res['prenom'];
			$_SESSION["type"] = "intervenant";
			$this->accueil();
		}else{
			$erreur; //ERREUR A AFFICHER
			$_SESSION["connected"]=false;
			 $this->auth_intervenant();
		}
		$this->db->close();
	}
	
	public function login_client()
	{
		$data = array();
		$mail = $_POST['email'];
		$mdp = sha1(PREFIXE_SHA1.$_POST['pwd']); // mot de passe formulaire
		
		$this->load->database();
		$this->db->select('email, pwd, prenom');
		$this->db->from('client');
		$this->db->where(array('email' => $mail));
		$query = $this->db->get();
		$res = array();
		
		foreach ($query->result() as $key=>$row){
			$res['email'] = $row->email;
			$res['pwd'] = $row->pwd;
			$res['prenom'] = $row->prenom;
		}
		
		if(isset($res['pwd']) && $res['pwd'] == $mdp){
			$_SESSION["connected"] = true;
			$_SESSION["prenom"] = $res['prenom'];
			$_SESSION["type"] = "client";
			$this->accueil();
		}else{
			$erreur; //ERREUR A AFFICHER
			$_SESSION["connected"]=false;
			 $this->auth_intervenant();
		}
		$this->db->close();
	}
	
	public function deco() {
		if(isset($_SESSION["connected"]) && $_SESSION["connected"])
			$_SESSION["connected"] = false;
		$this->accueil();
	}	
	
}
?>