<?php
	class Berita_model extends CI_Model{

		public function get_semua_berita(){
			$sql = 'SELECT * FROM berita';
			$query = $this->db->query($sql);

			return $query->result_array();
		}



		public function tambah_berita($gambar_berita){
			// $slug = url_title($this->input->post('title'));

			$data = array(
				'judul' => $this->input->post('judul'),
				'isi' => $this->input->post('isi'),
				'gambar' => $gambar_berita
			);

			return $this->db->insert('berita', $data);
		}

		public function get_berita($id){
			//get isi pesan
			$sql = 'SELECT * FROM berita WHERE id = '.$id.';';
			$query = $this->db->query($sql);

			return $query->row_array();
		}

		public function update_berita($gambar_berita){
			//Create an array of new coworking spaces data
			$data = array(
				'judul' => $this->input->post('judul'),
				'isi' => $this->input->post('isi'),
				'gambar' => $gambar_berita
			);

			$this->db->where('id', $this->input->post('id'));
			//Change the data
			return $this->db->update('berita', $data);
		}

		public function hapus_berita($id){
			$this->db->where('id', $id);
			$this->db->delete('berita');
			return true;
		}
	}