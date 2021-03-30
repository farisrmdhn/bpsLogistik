<?php
	class Berita_model extends CI_Model{

		public function get_semua_berita(){
			$sql = 'SELECT * FROM berita';
			$query = $this->db->query($sql);

			return $query->result_array();
		}
	}