<?php

class Customer_m extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function addCustomer() {
        $data['name'] = $this->input->post('name');
        $data['phone'] = $this->input->post('phone');
        $data['address'] = $this->input->post('address');
        return $this->db->insert('customer', $data);
    }

    public function getCustomer() {
        //$this->db->select('*');
        return $this->db->get('customer')->result();
    }

    public function getCustomerById($index = null) {
        $this->db->where('id', $index);
        return $this->db->get('customer')->result();
    }

    public function addPayment($data) {
        if($this->db->insert('payment',$data)){
            redirect('başarılı');
        }
    }
    public function displayPayment(){
        $this->db->select('*');
        $this->db->from('customer');
        $this->db->join('payment', 'customer.id = payment.customer_id');
        return $this->db->get()->result();

    }
    public function displayPaymentTest(){
        $this->db->select('p.customer_id as cid,p.payment as payment,p.date as pdate,c.name as cname,c.phone as cphone,c.address caddress,per.name as personal_name');
        $this->db->from('customer as c');
        $this->db->join('payment as p', 'c.id = p.customer_id');
        $this->db->join('personal as per', 'per.id = p.personal_id');
        return $this->db->get()->result();

    }

}
