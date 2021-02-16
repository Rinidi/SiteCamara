<?php
	class Sessoes_camara_model extends CI_Model {
		
		public function __construct()
			{
				$this->load->database();
			}

		public function get_sessao(){
			$this->db->select('*');
			$this->db->order_by("sessao", "desc");
			return $this->db->get('sessoes')->result_array();
		}	

 		public function get_ano(){
 			$query = $this->db->query("SELECT YEAR(p.data) as ano FROM sessoes p GROUP BY 1 ORDER by 1 desc");
 			return $query->result_array();
 		}
		public function countAll(){
			return $this->db->count_all('sessoes');
		}
	}
?>
