<?php

class Catalog_m extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function addCatalog() {
        $data['catalog_id'] = $this->input->post('catalog_id');
        $data['name'] = $this->input->post('name');
        return $this->db->insert('catalog', $data);
    }

    public function getCatalog() {
       return $this->db->get('catalog')->result();        
    }

}
