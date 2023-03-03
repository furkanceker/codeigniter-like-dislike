<?php 

class Post extends CI_Controller {
    public function __construct(){

        parent::__construct();

        $this->load->model('post_model');

        $user = $this->session->userdata("user");

        if(!$user){
            redirect(base_url('giris-yap'));
        }
    }

    public function index(){
        $viewData["user"] = $this->session->userdata("user");
        $viewData["posts"] = $this->post_model->get_all();
        $this->load->view("post_list",$viewData);
    }


    public function vote(){
        $post_id = $this->input->post('post_id');
        $vote_status = $this->input->post('vote_status');
        $user_id = $this->session->userdata("user")->id;

        $this->load->model('vote_model');
        $data = [
            "user_id" => $user_id,
            "post_id" => $post_id,
            "vote_status" => $vote_status
        ];
        $insert = $this->vote_model->insert($data);
        echo $insert;
    }
}