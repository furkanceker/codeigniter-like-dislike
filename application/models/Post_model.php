<?php

class Post_model extends CI_Model {
    public $table;
    public function __construct(){
        parent::__construct();
        $this->table = "posts";
    }

    public function get_all(){

        return $this->db->get($this->table)->result();

    }

    public function post_list(){
        $user = $this->session->userdata("user");
        $sql = "SELECT p.*, v.vote_status,
                (SELECT count(*) FROM like_tables WHERE vote_status = 1 AND post_id = p.id) as like_count,
                (SELECT count(*) FROM like_tables WHERE vote_status = -1 AND post_id = p.id) as dislike_count FROM posts p
                LEFT JOIN like_tables v ON p.id = v.post_id AND v.user_id = $user->id";
        return $this->db->query($sql)->result();
    }
}