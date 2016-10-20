<?php

class Manufacturer_m extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function addManufacturer() {
        $data['id'] = $this->input->post('id');
        $data['name'] = $this->input->post('name');
        
        return $this->db->insert('manufacturer', $data);
    }

    public function getManufacturer() {
        return $this->db->get('manufacturer')->result();
    }

}
