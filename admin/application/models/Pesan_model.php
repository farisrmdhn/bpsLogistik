<?php
	class Pesan_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_pesan_belum_terbaca(){
			$sql = 'SELECT id, nama, nama_perusahaan, email, pesan, tanggal FROM pesan WHERE terbaca = 0';
			$query = $this->db->query($sql);

			return $query->result_array();
		}

		public function get_semua_pesan(){
			$sql = 'SELECT id, nama, nama_perusahaan, email, pesan, tanggal, terbaca FROM pesan';
			$query = $this->db->query($sql);

			return $query->result_array();
		}

		public function get_jumlah_pesan_belum_terbaca(){
			$sql = 'SELECT COUNT(id) as jumlah FROM pesan WHERE terbaca = 0';
			$query = $this->db->query($sql)->row_array();

			return $query['jumlah'];
		}

		public function get_jumlah_semua_pesan(){
			$sql = 'SELECT COUNT(id) as jumlah FROM pesan';
			$query = $this->db->query($sql)->row_array();

			return $query['jumlah'];
		}

		public function baca_pesan($id){
			//ganti value terbaca
			$sql = 'UPDATE pesan SET terbaca = 1 WHERE id = '.$id.';';
			$this->db->query($sql);

			//get isi pesan
			$sql = 'SELECT * FROM pesan WHERE id = '.$id.';';
			$query = $this->db->query($sql);

			return $query->row_array();
		}

		public function hapus($id){
			$this->db->where('id', $id);
			$this->db->delete('pesan');
			return true;
		}
	}