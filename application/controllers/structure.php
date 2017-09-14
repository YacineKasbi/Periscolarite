<?php

class structure extends CI_Controller
{
	private $data;
	public function __construct()
	{
		//	Obligatoire
		parent::__construct();
		/*
		if( ! isAdmin())
			exit("Vous n'avez pas le droit de voir cette page."); // Permettra de gérer les accès en fonctions du type d'utilisateur(admin, client, intervenant)
		*/														 // Ne pas mettre ici(juste un exemple), a mettre probablement dans une future classe 'admin','intervenant'...
		
		//	Maintenant, ce code sera exécuté chaque fois que ce contrôleur sera appelé.
		global $data;
		$data = array();
		
		$data['description'] = "Site de garde d'enfant";
		$data['keywords'] = "garde scolaire nounou nourisse peri";
		
		
	}
	
	public function index()
	{
		//	Charge par défault la vue accueil
		$this->accueil();
	}
	
	public function accueil()
	{
		global $data;
		$data['title'] = 'Acceuil - Périscolarité';
		$data['contents'] = "page_contenu_view";
		$this->load->view('templates/template', $data);
	}

	public function auth()
	{
		global $data;
		$data['title'] = 'Se connecter - Périscolarité';
		$data['contents'] = "auth";
		$this->load->view('templates/template', $data);
	}

	public function subscribe()
	{
		global $data;
		$data['title'] = "S'inscrire - Périscolarité";
		$data['contents'] = "subscribe";
		$this->load->view('templates/template', $data);
	}

	public function tarifs()
	{
		global $data;
		$data['title'] = "Les tarifs";
		$data['contents'] = "tarifs";
		$this->load->view('templates/template', $data);
	}
}
?>