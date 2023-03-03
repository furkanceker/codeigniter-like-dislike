<?php

class Post_model extends CI_Model {
    public $table;
    public function __construct(){
        parent::__construct();
        $this->table = "posts";
    }

    public function get_all($where){

        return $this->db->where($where)->get($this->table)->result();

    }
}