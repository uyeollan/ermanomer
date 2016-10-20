<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->model('Customer_m','customer');
        $data['customer']=$this->customer->getCustomer();
        $data['payment']=$this->customer->displayPaymentTest();
        $this->load->view('template/head');
        $this->load->view('template/navtop');
        $this->load->view('template/navleft');
        $this->load->view('admin/odeme_ekle',$data);
        $this->load->view('template/bottom');
    }

    public function addPayment() {

        $data['customer_id'] = $this->input->post('customer_id');
        $data['payment'] = $this->input->post('payment');
        $data['personal_id'] = $this->session->userdata('id');
        $data['date'] = $this->input->post('date');
        $this->load->model('Customer_m','customer');
        $this->customer->addPayment($data);
    }

    public function payment() {
        $this->load->model('Customer_m','customer');
        $data['payment']=$this->customer->displayPayment();
         
    }
    public function paymentTest() {
        $this->load->model('Customer_m','customer');
        $data['payment']=$this->customer->displayPayment();
         
    }

}
