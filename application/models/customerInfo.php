<?php
    class CustomerInfo extends CI_Model
    {
        protected $tbl_customerinfo = 'customerinfo';
        function __construct() { 
            parent::__construct(); 
        } 

        public function insert($data) { 
            // if ($this->db->insert('customerInfo', $data)) {
            //     return true; 
            // } 
            $this->db->insert('customerInfo', $data);   
        } 

        // public function delete($id) { 
        //     if ($this->db->delete("customerInfo", "id = ".$id)) { 
        //         return true; 
        //     } 
        // }

        // public function update($data,$id) { 
        //     $this->db->set($data); 
        //     $this->db->where("id", $id); 
        //     $this->db->update("customerInfo", $data); 
        // } 

        public function getList(){
            return $this->db->select('*')-> from($this->tbl_customerinfo)->get()->result_array();
        }
    }
?>