<?php
	class Vereador_model extends CI_Model {
		
		public function __construct()
			{
				$this->load->database();
			}

		    public function get_vereador(){
				$query = $this->db->query("Select v.*, p.imagem as imagem_partido from vereadores v inner join partidos p on v.partido = p.id
			  where v.ativo=1 order  by nome asc");
		      return $query->result();
		 
		    }
		    //Consulta que retorna quais vereadores estão ligados em cada pedido
		public  function  get_dados_ligados_vereador_pedidosById($id){
			$query = $this->query("SELECT * FROM vereador_pedido vp INNER JOIN vereadores v on v.id = vp.id_vereador WHERE vp.id_pedido = $id");
			return $query->result_array();
		}
		public function get_providencia($Ids){
			$query = $this->db->query("SELECT p.nome as nome_pedido, p.data_publicacao, year(p.data_publicacao) as ano, p.arquivo, v.nome as nome_vereador from pedidos p INNER JOIN vereador_pedido vp on p.id = vp.id_pedido INNER JOIN vereadores v on v.id = vp.id_vereador WHERE v.id =".$Ids." order by p.nome desc");
			return $query->result_array();
		}
 		public function get_vereadorByid($id1){
 			$this->db->select("*");
 			$this->db->where("id", $id1);
 			return $this->db->get("vereadores")->result();
 		}
 		//para os pedidos por vereadores

 		public function get_ano(){
 			$query = $this->db->query("SELECT YEAR(p.data_publicacao) as ano FROM pedidos p GROUP BY 1 ORDER by 1 desc");
 			return $query->result_array();
 		}
	}

?>
