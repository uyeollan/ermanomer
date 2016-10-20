<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Personal extends CI_Controller {

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
        $this->load->view('template/head');
        $this->load->view('personal/navtop');

        $this->load->view('personal/index');
        $this->load->view('template/bottom');
    }

    public function addperssonal() {
        $this->load->model('personal_m', 'personal');
        $this->personal->addPerson();
    }

    public function login($index=null) {
        $this->load->view('template/head');
        $this->load->view('personal/login');
        if($index==1){
            $message['msg_fail']='Wrong Password or Username';
            $this->load->view('template/msg_fail',$message);
        }
        $this->load->view('template/bottom');
    }

    public function personal_login() {
        $this->load->model('Personal_m', 'personal');
        $data['personal'] = $this->personal->personalLogin();
        if (count($data['personal']) == 1) {
            $info['id'] = $data['personal'][0]->id;
            $info['username'] = $data['personal'][0]->username;
            $info['password'] = $data['personal'][0]->password;
            $info['name'] = $data['personal'][0]->name;
            $info['surname'] = $data['personal'][0]->surname;
            $info['phone'] = $data['personal'][0]->phone;
            $info['log'] = TRUE;
            $info['type'] = 'personal';
            $this->session->set_userdata($info);
            redirect('Personal/');
        }else{
            redirect('Personal/login/1');
        }
    }

}
