<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class google_model extends CI_Model { 
     
    function __construct() { 
        $this->tableName = 'users'; 
    } 
     
    public function checkUser($data = array()){ 
        $this->db->select('id'); 
        $this->db->from($this->tableName); 
         
        $con = array( 
            'id' => $data['oauth_uid'] 
        ); 
        $this->db->where($con); 
        $query = $this->db->get(); 
         
        $check = $query->num_rows(); 
        if($check > 0){ 
            // Get prev user data 
            $result = $query->row_array(); 
             
            // Update user data 
            $update = $this->db->update($this->tableName, $data, array('id' => $result['id'])); 
             
            // Get user ID 
            $userID = $result['id']; 
        }else{ 
            // Insert user data 
            $insert = $this->db->insert($this->tableName, $data); 
             
            // Get user ID 
            $userID = $this->db->insert_id(); 
        } 
         
        // Return user ID 
        return $userID?$userID:false; 
    } 
 
}?>