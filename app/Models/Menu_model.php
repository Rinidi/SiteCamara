<?php
		class Menu_model extends CI_Model {
		
		public function __construct()
			{
				$this->load->database();
			}

		public function get_menu(){
			$this->db->select('*');
			return $this->db->get('menu')->result();
		}	
}
?>