<?php
class Pages extends CI_Controller {

	public function index(){

		$data['semua_berita'] = $this->berita_model->get_semua_berita();

		$this->load->view('pages/index', $data);
	}

	public function pesan_masuk(){
		$this->pesan_model->pesan_masuk();
		redirect('');
	}
}
