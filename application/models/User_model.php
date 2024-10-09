<?php
class User_model extends CI_Model
{

    public function getAll()
    {
        $sql = "SELECT * FROM users";
        $result = $this->db->query($sql)->result();
        return $result;
    }

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert_user($data)
    {
        return $this->db->insert('users', $data);
    }
}
