<?php
class Pesan extends CI_Controller {
	public function pesan_belum_terbaca(){
		if(!$this->session->userdata('logged_in')){
			redirect('admin/login');
		}

		$data['semua_pesan'] = $this->pesan_model->get_pesan_belum_terbaca();
		$data['jumlah_pesan'] = $this->pesan_model->get_jumlah_pesan_belum_terbaca();
		$data['jumlah_semua_pesan'] = $this->pesan_model->get_jumlah_semua_pesan();

		$this->load->view('templates/header');
		$this->load->view('pesan/pesan_belum_terbaca', $data);
		$this->load->view('templates/footer');
	}

	public function semua_pesan(){
		if(!$this->session->userdata('logged_in')){
			redirect('admin/login');
		}

		$data['semua_pesan'] = $this->pesan_model->get_semua_pesan();
		$data['jumlah_pesan_belum_terbaca'] = $this->pesan_model->get_jumlah_pesan_belum_terbaca();
		$data['jumlah_semua_pesan'] = $this->pesan_model->get_jumlah_semua_pesan();

		$this->load->view('templates/header');
		$this->load->view('pesan/semua_pesan', $data);
		$this->load->view('templates/footer');
	}

	public function baca($id){
		if(!$this->session->userdata('logged_in')){
			redirect('admin/login');
		}

		$data['pesan'] = $this->pesan_model->baca_pesan($id);
		$data['jumlah_pesan_belum_terbaca'] = $this->pesan_model->get_jumlah_pesan_belum_terbaca();
		$data['jumlah_semua_pesan'] = $this->pesan_model->get_jumlah_semua_pesan();

		$this->load->view('templates/header');
		$this->load->view('pesan/baca', $data);
		$this->load->view('templates/footer');
	}

	public function hapus($id){
		if(!$this->session->userdata('logged_in')){
			redirect('admin/login');
		}

		$this->pesan_model->hapus($id);

		redirect('semua_pesan');

	}
}
