<?php

class web extends CI_Controller
{
	public function index()
	{
		
		$data = array();
		$data['title'] = 'Acceuil - Périscolarité';
		$data['description'] = "Site de garde d'enfant";
		$data['keywords'] = "garde scolaire nounou nourisse peri";
		$data['contents'] = "page_contenu_view";
		
		//	Maintenant, les variables sont disponibles dans la vue
		$this->load->view('templates/template', $data);
	}
}

?>