<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function login_form(){
		$this->load->view('login_form');
	}
	public function login(){

		$this->load->library('form_validation');

		$this->form_validation->set_rules("username","Kullanıcı Adı ","required|trim");
		$this->form_validation->set_rules("password","Şifre","required|trim");

		$error_messages = [
			'required' => "<strong>{field}</strong> Boş Olamaz"
		];

		$this->form_validation->set_message($error_messages);

		if($this->form_validation->run() === FALSE){
			$this->session->set_flashdata("error",validation_errors());
			redirect(base_url('giris-yap'));
		}else{
			$this->load->model('user_model');
			$user = $this->user_model->get_user([
				'username' => $this->input->post("username"),
				'password' => md5($this->input->post("password")),
			]);

			if($user){
				
				$this->session->set_userdata("user",$user);
				redirect(base_url('yazi-listesi'));

			}else{
				$this->session->set_flashdata("error","Kullanıcı Bulunamadı");
				redirect(base_url('giris-yap'));
			}
		}

	}
}
