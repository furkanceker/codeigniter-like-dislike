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
			redirect('user/login_form');
		}else{
			echo "ok";
		}

	}
}
