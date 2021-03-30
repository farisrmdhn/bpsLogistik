<?php
	class Pesan_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		
		public function pesan_masuk(){
			$data = array(
				'nama' => $this->input->post('nama'),
				'nama_perusahaan' => $this->input->post('nama_perusahaan'),
				'alamat_perusahaan' => $this->input->post('alamat_perusahaan'),
				'email' => $this->input->post('email'),
				'no_telepon' => $this->input->post('no_telepon'),
				'pesan' => $this->input->post('pesan')
			);

			return $this->db->insert('pesan', $data);
		}
	}