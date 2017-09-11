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
		$data['title'] = 'Acceuil - Périscolarité';
		$data['description'] = "Site de garde d'enfant";
		$data['keywords'] = "garde scolaire nounou nourisse peri";
		$data['contents'] = "page_contenu_view";
		
	}
	
	public function index()
	{
		//	Charge par défault la vue accueil
		$this->accueil();
	}
	
	public function accueil()
	{
		global $data;
		$this->load->view('templates/template', $data);
	}

		public function auth()
	{
		global $data;
		$this->load->view('templates/header', $data);
		$this->load->view('auth');
		$this->load->view('templates/footer');
	}

	public function subscribe()
	{
		global $data;
		$this->load->view('templates/header', $data);
		$this->load->view('subscribe');
		$this->load->view('templates/footer');
		$this->load->view('templates/template', $data);		
	}
}
?>