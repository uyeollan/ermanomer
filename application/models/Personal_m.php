<?php

class Personal_m extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function addPerson(){
        $data['name']=$this->input->post('name');
        $data['surname']=$this->input->post('surname');
         $data['phone']=$this->input->post('phone');
        $data['password']=md5($this->input->post('password'));
         $repassword=  md5($this->input->post('repassword'));
         if($repassword==$data['password']){
             return $this->db->insert('personal',$data);
         }else{
             redirect('olmadıyar');
         }
    }
    public function getPerson(){
        return $this->db->get('personal')->result();
    }
    public function personalLogin() {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get('personal')->result();
    }

}
