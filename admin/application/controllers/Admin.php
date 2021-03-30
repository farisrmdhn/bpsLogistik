<?php
class Admin extends CI_Controller {
	public function login(){
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('admin/login');
		}else{
			//Get Username
			$input_username = $this->input->post('username');
			//Get and encrypt the password
			$input_password = md5($this->input->post('password'));

			$username = 'admin@bpslogistik';
			//passwordbpslogistik
			$password = '9a1090e8f90eb2a1abcc79566b47fc05';

			if(($input_username == $username)&&($input_password == $password)){
				//Create session
				$user_data = array(
					'logged_in' => true
				);

				$this->session->set_userdata($user_data);

				redirect('pesan_belum_terbaca');
			} else{
				redirect('admin/login');
			}

			
		}
	}

	public function logout(){
		$this->session->unset_userdata('logged_in');
		redirect('admin/login');
	}
}
