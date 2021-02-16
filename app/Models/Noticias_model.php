<?php
class Noticias_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_noticias($page = false)
	{
		$limit = $page * ITENS_POR_PAGINA;
		$inicio = $limit - ITENS_POR_PAGINA;
		$step = ITENS_POR_PAGINA;

		$pagination = " LIMIT ".$inicio.",".$step;
		if ($page === false) {
			$pagination = "";
		}

		$query = $this->db->query("
		select (select count(*) from noticias) AS Size, id, titulo, texto, data, foto, url_facebook, descricao
		from noticias order by id desc ".$pagination."");
		
		return $query->result_array();
	}

	public function get_noticias_inicial($limit)
	{
		$query = $this->db->query("
		select *
		from noticias order by id desc limit ".$limit."");
		
		return $query->result_object();	
	}

	public function countAll()
	{
		return $this->db->count_all('noticias');
	}
}
?>
