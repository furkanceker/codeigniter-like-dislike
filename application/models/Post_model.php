<?php

class Post_model extends CI_Model {
    public $table;
    public function __construct(){
        parent::__construct();
        $this->table = "posts";
    }

    public function get($where){

        return $this->db->where($where)->get($this->table)->row();

    }

    public function get_all(){

        return $this->db->get($this->table)->result();

    }
}