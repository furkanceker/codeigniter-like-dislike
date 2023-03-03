<?php 

class Post extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->model('post_model');
        $viewData["user"] = $this->session->userdata("user");
        $viewData["posts"] = $this->post_model->get_all();
        $this->load->view("post_list",$viewData);
    }
}