<?php
	class Controlador extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->model('candidatos');
		}

		public function index($page = 'estadisticas'){
			$data['votos_gob'] = $this->candidatos->get_votos_gob();
			$data['votos_mun'] = $this->candidatos->get_votos_mun();

			$this->load->view('pages/'.$page,$data);
		}
	}
?>