<?php

class Admin_m extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function adminLogin() {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get('admin')->result();
    }
    

}
