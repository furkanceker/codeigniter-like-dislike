<?php

class Vote_model extends CI_Model {
    public $table;
    public function __construct(){
        parent::__construct();
        $this->table = "like_tables";
    }

    public function insert($data){
        return $this->db->insert($this->table,$data);
    }
}