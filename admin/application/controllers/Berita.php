<?php
class Berita extends CI_Controller {
	public function index(){
		if(!$this->session->userdata('logged_in')){
			redirect('admin/login');
		}

		$data['semua_berita'] = $this->berita_model->get_semua_berita();

		$this->load->view('templates/header');
		$this->load->view('berita/index', $data);
		$this->load->view('templates/footer');
	}

	public function baca($id){
		if(!$this->session->userdata('logged_in')){
			redirect('admin/login');
		}

		$data['berita'] = $this->berita_model->get_berita($id);
		
		$this->load->view('templates/header');
		$this->load->view('berita/baca', $data);
		$this->load->view('templates/footer');
	}

	public function tambah(){
		if(!$this->session->userdata('logged_in')){
			redirect('admin/login');
		}
		

		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header');
			$this->load->view('berita/tambah');
			$this->load->view('templates/footer');
		} else{
			//upload image
			$config['upload_path'] ='/home/bpsb5683/public_html/assets/images';
			$config['allowed_types'] = 'gif|jpeg|png|jpg';
			$config['max_size'] = '1000000';
			$config['max_width'] = '1000000';
			$config['max_height'] = '1000000';
			$config['file_name'] = url_title($_FILES['gambar']['name'],'-', TRUE);

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('gambar')){
				$error = array('error' => $this->upload->display_errors());
				$gambar_berita = 'noimage.jpg';
			} else {
				$data = array('upload_data' => $this->upload->data());
				$gambar_berita = $this->upload->data('file_name');
			}
			$this->berita_model->tambah_berita($gambar_berita);

			redirect('berita/index');
		};
	}

	public function edit($id){
		if(!$this->session->userdata('logged_in')){
			redirect('admin/login');
		}

		$data['berita'] = $this->berita_model->get_berita($id);

		$this->load->view('templates/header');
		$this->load->view('berita/edit', $data);
		$this->load->view('templates/footer');
	}

	public function update(){
		if(!$this->session->userdata('logged_in')){
			redirect('admin/login');
		}

		$config['upload_path'] = '/home/bpsb5683/public_html/assets/images';
		$config['allowed_types'] = 'gif|jpeg|png|jpg';
		$config['max_size'] = '1000000';
		$config['max_width'] = '1000000';
		$config['max_height'] = '1000000';
		$config['file_name'] = url_title($_FILES['gambar']['name'],'-', TRUE);

		$this->load->library('upload', $config);

		//If the image falied to upload, replace with noimage.jpg
		if(!$this->upload->do_upload('gambar')){
			$error = array('error' => $this->upload->display_errors());
			$gambar_berita = $this->input->post('gambar_asli');
		} else {
			$data = array('upload_data' => $this->upload->data());
			$gambar_berita = $this->upload->data('file_name');
		}

		//Update the coworking spaces data to db via model
		$this->berita_model->update_berita($gambar_berita);

		redirect('berita/index');
	}

	public function hapus($id){
		if(!$this->session->userdata('logged_in')){
			redirect('admin/login');
		}

		$this->berita_model->hapus_berita($id);

		redirect('berita/index');

	}
}
