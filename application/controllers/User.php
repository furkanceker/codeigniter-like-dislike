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
		echo "giriş yaptınız";
	}
}
