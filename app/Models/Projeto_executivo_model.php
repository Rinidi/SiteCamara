<?php
	class Projeto_executivo_model extends CI_Model {
		
		public function __construct()
		{
			$this->load->database();
		}
		
		public function get_years()
		{
			$query = $this->db->query("SELECT YEAR(data) AS Ano FROM Projeto_executivo GROUP BY YEAR(data) ORDER BY YEAR(data) DESC");
			return $query->result_array();
		}
		
		public function get_Projeto_executivo()
		{
			$query = $this->db->query("SELECT *, YEAR(data) AS Ano FROM Projeto_executivo ORDER BY YEAR(data) DESC");
			return $query->result_array();
		}
	}

?>
