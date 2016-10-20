<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
    
    public function addPurchase(){
        $data['name'] = $this->input->post('name');
        $data['unit_type'] = $this->input->post('unit_type');
        $data['amount'] = $this->input->post('amount');
        $data['unit_price'] = $this->input->post('unit_price');
        $data['price']= $this->input->post('price');
        $data['supplier']= $this->input->post('supplier');
        $this->load->model('Product_m','purchase');
        
        //redirect('erman'.count($data));
       
         $stock['name']= $data['name'] ;
         $stock['unit_type']=$data['unit_type']; 
         $stock['amount']=$data['amount'];
         $stock['unit_price']=$data['unit_price'];
        if($this->purchase->addPurchase($data)){
            if( $this->purchase->isExist($data)){  
                $this->purchase->updateStock($stock);
                redirect('Admin/urun_ekle');
            }else{
                $this->purchase->addStock($stock);
                 redirect('Admin/urun_ekle');
            }
            
        }
    }
    public function getPurchase(){
        $this->load->model('Product_m', 'product');
        $data['purchase'] = $this->product->getAllPurchase();
        return $data;
    }
    public function getStock(){
        $this->load->model('Product_m', 'product');
        $data['stock'] = $this->product->getAllStock();
        return $data;
    }

    public function addColor() {
        $this->load->model('renk_ekle_m', 'color');
        if ($this->color->addColor()){
            redirect('Admin/renk_ekle');
        }
    }
    public function update_purchase($index=null){
        $this->load->model('Product_m','product');
        $this->product->updatePurchase($index);
           
    }
     public function deletePurchase($index=null){
        $this->load->model('Product_m','product');
       if( $this->product->deletePurchase($index)){
           redirect('Admin/urun_ekle');
       }
    }
    public function deleteSell($index = null) {
        $this->load->model('Product_m', 'product');
        if ($this->product->deleteSell($index)) {
            redirect('Admin/urun_satis');
        }
    }
    public function productSell(){
        $data['name'] = $this->input->post('name');
        $data['unit_type'] = $this->input->post('unit_type');
        $data['amount'] = $this->input->post('amount');
        $data['unit_price'] = $this->input->post('unit_price');
       //redirect('erman/'.$data['amount']);
        //satış tablosuna ekleme bubrdan başlıyor!
        $datos['personel_name'] = $this->session->userdata['name'];
        $datos['customer_name'] = $this->input->post('customer_name');
        $datos['product_name'] = $this->input->post('product_name');
        $datos['unit_type'] = $this->input->post('unit_type');
        $datos['amount'] = $this->input->post('amount');
        $datos['price'] = $this->input->post('unit_price') * $this->input->post('amount');
        $str = date("Y-m-d H:i:s");
        $datos['date'] = date($str);
        if ($this->db->insert('sale', $datos)) {
            $this->load->model('Product_m','sell');
       $this->sell->sell($data);
        }
       // $data['price']= $this->input->post('price');
       
    }

    
    public function getSell(){
        $this->load->model('product_m','sale');
        $data['sale']=  $this->product->getSell();
        return $data;
    }
   

     public function add_sale() {
        $this->load->model('sale_m', 'sale');
        if ($this->sale->addSale()) {
            redirect('Admin/sale');
        }
    }

    public function get_sale() {
        $this->load->model('sale_m', 'sale');
        $data['sale'] = $this->sale->getSale();
        return $data;
    }
    public function add_manufacturer() {
        $this->load->model('manufacturer_m', 'manufacturer');
        if ($this->manufacturer->addManufacturer()) {
            redirect('Admin/manufacturer');
        }
    }

    public function get_manufacturer() {
        $this->load->model('manufacturer_m', 'manufacturer');
        $data['manufacturer'] = $this->manufacturer->getManufacturer();
        return $data;
    }
    public function verification(){
        if($this->session->userdata('log')==false){
            redirect('Admin/login');
        }
    }
    public function logout(){
        //$this->verification();
        $this->session->sess_destroy();
        redirect('Admin/login');
    }
    public function admin_login(){
       $this->load->model('Admin_m','admin');
       $data['admin']=  $this->admin->adminLogin();   
       if(count($data['admin'])==1){
           $info['id'] = $data['admin'][0]->id;
           $info['username'] = $data['admin'][0]->username;
           $info['password'] = $data['admin'][0]->password;
           $info['name'] = $data['admin'][0]->name;
           $info['surname'] = $data['admin'][0]->surname;
           $info['log'] = TRUE;
           $info['type'] = 'admin';
           $this->session->set_userdata($info);
           redirect('Admin');
       }else{
           redirect('Admin/login/1');
       }
     }
    public function add_personal() {
        //$this->verification();
        $this->load->model('personal_m', 'personal');
        $this->personal->addPerson();
    }

    public function add_customer($index=null) {
        //$this->verification();
        $this->load->model('customer_m','customer');
       if( $this->customer->addCustomer()){
           if($index==null){
           redirect('Admin/musteri');
           }else{
               redirect('Admin/urun_satis');
           }
       }
           
    }
    public function get_customer(){
        //$this->verification();
        $this->load->model('customer_m','customer');
        $data['customers']=$this->customer->getCustomer();
        return $data;
    }
    public function get_person(){
        //$this->verification();
        $this->load->model('personal_m','personal');
        $data['person']=$this->personal->getPerson();
        return $data;
        //redirect('Admin/'.count($data));
    }

    public function manufacturer() {
        $datos = $this->get_manufacturer();
        $this->load->view('template/head');
        $this->load->view('template/navtop');
        $this->load->view('template/navleft');
        $this->load->view('admin/manufacturer', $datos);
        $this->load->view('template/bottom');
    }
    public function index() {
       // $this->verification();
        $this->load->view('template/head');
        $this->load->view('template/navtop');
        $this->load->view('template/navleft');
        $this->load->view('admin/index');
        $this->load->view('template/bottom');
        $this->load->view('template/color_visibility');
        //redirect('Admin/renk_ekle');
    }
    public function urun_satis() {
        $this->verification();
        $this->load->model('Customer_m','customer');
        $data['person']=$this->customer->getCustomer();
        $this->load->model('Product_m','product');
        $data['product']=$this->product->getAllStock();
        $this->load->view('template/head');
        $data['sale']=$this->product->getSell();
        
        $this->load->view('template/navtop');
        $this->load->view('template/navleft');
        $this->load->view('admin/urun_satis',$data);
        $this->load->view('template/bottom');
        //redirect('Admin/renk_ekle');
    }

    

    public function personel_ayarlari() {
        //$this->verification();
        $datos=$this->get_person();
        $this->load->view('template/head');
        $this->load->view('template/navtop');
        $this->load->view('template/navleft');
        $this->load->view('admin/personel_ayarlari',$datos);
        $this->load->view('template/bottom');
    }

    

    public function boya_yap() {
        //$this->verification();
        $this->load->view('template/head');
        $this->load->view('template/navtop');
        $this->load->view('template/navleft');
        $this->load->view('admin/boya_yapma');
        $this->load->view('template/bottom');
    }

    public function musteri() {
        //$this->verification();
         $datos=  $this->get_customer();
        $this->load->view('template/head');
        $this->load->view('template/navtop');
        $this->load->view('template/navleft');
        $this->load->view('admin/musteri',$datos);
        $this->load->view('template/bottom');
    }

   
    public function urun_ekle() {
        $datos=  $this->getPurchase();
        //$this->verification();
        $this->load->view('template/head');
        $this->load->view('template/navtop');
        $this->load->view('template/navleft');
        $this->load->view('admin/urun_ekle',$datos);
        $this->load->view('template/bottom');
        
    }
    public function stok_gor() {
        $datos=  $this->getStock();
        //$this->verification();
        $this->load->view('template/head');
        $this->load->view('template/navtop');
        $this->load->view('template/navleft');
        $this->load->view('admin/stok_gor',$datos);
        $this->load->view('template/bottom');
        
    }
    public function personel_ayarları() {
       //$this->verification();
        $this->load->model('personal_m','personal');
        $data['custom']=$this->personal->getPerson();
        $this->load->view('template/head');
        $this->load->view('template/navtop');
        $this->load->view('template/navleft');
        $this->load->view('admin/personel_ayarları',$data);
        $this->load->view('template/bottom');
    }

    public function empty_page() {
        //$this->verification();
        $this->load->view('template/head');
        $this->load->view('template/navtop');
        $this->load->view('template/navleft');
        $this->load->view('admin/empty_page');
        $this->load->view('template/bottom');
    }
    public function updatePurchase($index=null) {
        //$this->verification();
        $this->db->where('id',$index);
        $data['purchase']=$this->db->get('purchase')->result();
        $this->load->view('template/head');
        $this->load->view('template/navtop');
        $this->load->view('template/navleft');
        $this->load->view('admin/updatePurchase',$data);
        $this->load->view('template/bottom');
    }

    public function login($index=null) {
        $this->load->view('template/head');
        $this->load->view('admin/login');
        if($index==1){
             $message['msg_fail']='Wrong Password or Username ';
                $this->load->view('template/msg_fail',$message);
        }
        $this->load->view('template/bottom');
    }
   

}
