<?php

class Vote_model extends CI_Model {
    public $table;
    public function __construct(){
        parent::__construct();
        $this->table = "like_tables";
    }

    public function get($where){

        return $this->db->where($where)->get($this->table)->row();

    }

    public function insert($data){
        return $this->db->insert($this->table,$data);
    }
    public function update($data,$where){
        return $this->db->where($where)->update($this->table,$data);
    }
}