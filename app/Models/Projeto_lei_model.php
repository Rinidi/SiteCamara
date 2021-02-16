<?php
	class Projeto_lei_model extends CI_Model {
		
		public function __construct()
		{
			$this->load->database();
		}
		
		public function get_years()
		{
			$query = $this->db->query("SELECT YEAR(data) AS Ano FROM projeto_lei GROUP BY YEAR(data) ORDER BY YEAR(data) DESC");
			return $query->result_array();
		}
		
		public function get_projeto_lei()
		{
			$query = $this->db->query("SELECT *, YEAR(data) AS Ano FROM projeto_lei ORDER BY YEAR(data) DESC");
			return $query->result_array();
		}
	}

?>
