<?php
	class Mesa_diretora_model extends CI_Model {
		
		public function __construct()
			{
				$this->load->database();
			}

		public function get_vereador_cargo(){
			$query = $this->db->query("SELECT v.nome as nome_vereador, v.foto, v.partido, c.nome as nome_cargo, p.imagem as imagem_partido FROM vereadores v
			LEFT JOIN mesa_diretora md ON v.id = md.id_vereador
 			LEFT JOIN cargos c ON md.cargo = c.id
 			INNER JOIN partidos p ON p.id = v.partido where v.ativo=1");
			return $query->result_array();
		}
	}
?>
