<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

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
        $this->load->model('Personal_m','person');
        $data['person']=$this->person->getPerson();
        $this->load->view('template/headSearch');
        $this->load->view('template/module');
        $this->load->view('test/test',$data);
    }
     
    

    
    public function add(){
        $data['username']=  $this->input->post('username');
        $data['password']=md5($this->input->post('password'));
        $data['name']=  $this->input->post('name');
        $data['surname']=  $this->input->post('surname');
        $this->db->insert('admin',$data);
    }

}
