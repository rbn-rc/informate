<?php
	class Candidatos extends CI_Model {
		
		public function __construct(){
			$this->load->database();
		}

		public function get_votos_gob(){
			$this->db->select('nombre, votos');
			$this->db->from('gobernadores');
			$query = $this->db->get();

			if($query->num_row()>=1){
				return $query->result();
			}else{
				return 0;
			}
		}

		public function get_votos_mun(){
			$this->db->select('nombre, votos');
			$this->db->from('municipales');
			$query = $this->db->get();

			if($query->num_row()>=1){
				return $query->result();
			}else{
				return 0;
			}
		}

		public function is_log_mun($user){
			$query = $this->db->select('twitter_id')
							  ->from('users')
							  ->where('voto_mun', 1)
							  ->where('twitter_id', $user);

			$data = array('voto_num' => 1);
			if (empty($query)) {
				$this->db->where('twitter_id',$user)
				$this->db->update('usuarios', $data);
				return 0;
			}else{
				return "Usted ya ha votado";
			}
		}

		public function is_log_gob($user){
			$query = $this->db->select('twitter_id')
							  ->from('users')
							  ->where('voto_gob', 1)
							  ->where('twitter_id', $user);
							  
			$data = array('voto_gob' => 1);
			if (empty($query)) {
				$this->db->where('twitter_id',$user)
				$this->db->update('usuarios', $data);
			}else{
				return "Usted ya ha votado";
			}
		}
	} 
?>