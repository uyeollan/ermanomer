<?php

class Product_m extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    public function displayPersonal(){
        
        
    }

    









    //--------------------------------
            
     public function getAllPurchase() {
        return $this->db->get('purchase')->result();
    }
    public function getSell() {
       
        return $this->db->get('sale')->result();
    }
   
    public function getSaleByID($index) {
        $this->db->where('id', $index);
        return $this->db->get('sale')->result();
    }
    public function getPurchaseByID($index) {
        $this->db->where('id',$index);
        return $this->db->get('purchase')->result();
    }
     public function updateOneStock($data) {
        $this->db->where('name',$data['']);
         $this->db->update('stock',$data);
    }
    public function getStockByName($index) {
        $this->db->where('name',$index);
        return $this->db->get('stock')->result();
    }
    public function getStockByNameUnit($name,$unit) {
        $this->db->where('name',$name);
        $this->db->where('unit_type',$unit);
        return $this->db->get('stock')->result();
    }
    public function getAllStock() {
        return $this->db->get('stock')->result();
    }
    public function addPurchase($data) {
        return $this->db->insert('purchase', $data);
    }
    public function addStock($data){
        return $this->db->insert('stock',$data);
    }
    public function updatePurchase($index=null) {
        $datos['purchase']=  $this->getPurchaseByID($index);
        $data['name'] = $this->input->post('name');
        $data['unit_type'] = $this->input->post('unit_type');
        $value['stock']=  $this->getStockByNameUnit($data['name'],$data['unit_type']);
        $data['amount'] = $this->input->post('amount');
        $data['unit_price'] = $this->input->post('unit_price');
        $data['price'] = $this->input->post('price');
        $data['supplier'] = $this->input->post('supplier');
        $this->db->where('id',$index);
        if ($this->db->update('purchase', $data)) {
            $new_amount=$data['amount']-$datos['purchase'][0]->amount;
                $value['stock'][0]->amount = $value['stock'][0]->amount + $new_amount;
                $value['stock'][0]->unit_type = $data['unit_type'];
                $value['stock'][0]->unit_price = $data['unit_price'];
                $value['stock'][0]->name = $data['name'];
                 
                $this->updateStockFromPurchase($value);
            
        } else {
           
        }
    }

    public function deletePurchase($index=null) {
        
       $data['deleted']= $this->getPurchaseByID($index);
       $datos['stock']= $this->getStockByNameUnit($data['deleted'][0]->name,$data['deleted'][0]->unit_type);
       $this->db->where('id',$index);
       if($this->db->delete('purchase')){
           if(count($datos['stock'])!=0){
           $new_amount=$datos['stock'][0]->amount-$data['deleted'][0]->amount;
           $datos['stock'][0]->amount=$new_amount;
           $this->updateStockFromPurchase($datos);
           }else{
               redirect('Admin/urun_ekle');
           }
       }
       

    }
    public function deleteSell($index = null) {

        $data['deleted'] = $this->getSaleByID($index);
        $datos['stock'] = $this->getStockByNameUnit($data['deleted'][0]->name, $data['deleted'][0]->unit_type);
        $this->db->where('id', $index);
        if ($this->db->delete('sale')) {
            if (count($datos['stock']) != 0) {
                $new_amount = $datos['stock'][0]->amount - $data['deleted'][0]->amount;
                $datos['stock'][0]->amount = $new_amount;
                $this->updateStockFromSell($datos);
            } else {
                redirect('Admin/urun_satis');
            }
        }
    }
    public function isExist($data){
        
        $this->db->where('name',$data['name']);
        $this->db->where('unit_type',$data['unit_type']);
        $datos['stock']=  $this->db->get('stock')->result();
        if(count($datos['stock'])>0){
           return true;
        }else{
            return false;
            }
    }
    public function updateStockFromPurchase($data) {

        $datos['amount'] = $data['stock'][0]->amount;
        //echo $datos['amount'].' '.$data['stock'][0]->name;
        $this->db->where('name', $data['stock'][0]->name);
        $this->db->where('unit_type', $data['stock'][0]->unit_type);
        if ($datos['amount'] != 0) {
            if ($this->db->update('stock', $datos)) {
                redirect('Admin/urun_ekle');
            }
        }else{
            $this->db->delete('stock');
        }
    }
    public function sell($data){
        $data['amount']=-1*$data['amount'];
        $this->updateStock($data);
    }
    

    public function updateStock($data) {//new add
        $this->db->where('name', $data['name']);
        $this->db->where('unit_type', $data['unit_type']);
        $value['stock']=  $this->db->get('stock')->result();
        $this->db->where('name',$data['name']);
        $this->db->where('unit_type',$data['unit_type']);
        $amount1=$value['stock'][0]->amount+$data['amount'];
        $data['amount']=$amount1;
        if ($data['amount'] != 0) {
            if ($this->db->update('stock', $data)) {
                redirect('Admin/urun_satis');
            }
        }else{
            $this->db->delete('stock');
             redirect('Admin/urun_satis');
        }
    
    }
     
    

}
