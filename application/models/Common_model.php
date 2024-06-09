<?php
class Common_model extends CI_Model{
    function data_insert($table,$insert_array){
        $this->db->insert($table,$insert_array);
        return $this->db->insert_id();
    }
    function data_update($table,$set_array,$condition){
        $this->db->update($table,$set_array,$condition);
        return $this->db->affected_rows();
    }
    function data_remove($table,$condition){
        $this->db->delete($table,$condition);
    }
    function deleteCategory($id){
		$this->db->query("Delete from product_attribute where id='".$id."'");
		return "success";
	}
	function delete($id,$table){
	    $this->Admin_model->stock_maintain($id);
	    $edit['status']=2;
	    $this->db->update($table,$edit,array("id"=>$id)); 
	
		return "success";
	}
	function cancel_order($id,$table,$note){
	    $this->Admin_model->stock_maintain($id);
	    $edit['status']='cancelled';
	     $edit['note']=$note;
	    $this->db->update($table,$edit,array("id"=>$id)); 
	    
	    $data_cancel = array(
                'status' => 'cancelled',
        );
        
        $this->db->where('order_id', $id);
        $this->db->update('order_products', $data_cancel);
	
		return "success";
	}
	
	function confirm_order($id,$table){
	    $edit['status']='confirmed';
	    $this->db->update($table,$edit,array("id"=>$id)); 
	
		return "success";
	}
	function dispatch_order($id,$table,$awb_code){
	    $edit['status'] = 'dispatched';
	    $edit['awb_code'] = $awb_code;
	    $edit['dispatch_date'] = date("Y-m-d H:i:s");
	    $this->db->update($table,$edit,array("id"=>$id));
		return "success";
	}
	
	function complete_order($id,$table){
	    $edit['status']='completed';
	    $this->db->update($table,$edit,array("id"=>$id)); 
	
		return "success";
	}
	public function complete_order_products($id) {
	    $edit['status']='completed';
	    $this->db->update("order_products",$edit,array("order_id"=>$id));
		return "success";
	}
	function activate($id,$table){
	    $edit['status']=1;
	    $this->db->update($table,$edit,array("id"=>$id)); 
	
		return "success";
	}
	function orderupdate($id,$table){
	    
	   $edit['order']=$this->input->post('order');
	    $this->db->update($table,$edit,array("id"=>$id)); 
	   return "success";
	}
	function deactivate($id,$table){
	    $edit['status']=0;
	    $this->db->update($table,$edit,array("id"=>$id)); 
	
		return "success";
	}
	function tbl_delete($id,$table){
	    $edit['active']=2;
	    $this->db->update($table,$edit,array("id"=>$id)); 
	
		return "success";
	}
		function tbl_activate($id,$table){
	    $edit['active']=1;
	    $this->db->update($table,$edit,array("id"=>$id)); 
	
		return "success";
	}
	function tbl_deactivate($id,$table){
	    $edit['active']=0;
	    $this->db->update($table,$edit,array("id"=>$id)); 
	
		return "success";
	}
	
	function process_dimensions($total_dim=array()) {
	    if(empty($total_dim))
    	    $actual_dim = array("weight" => 0, "length" => 0, "breadth" => 0, "height" => 0);
    	$max_allowed = array(2 => 2, 3 => 1, 12 => 5);
        $total_weight = $total_height = 0;
        $max_length = $max_breadth = 0;
        foreach($total_dim as $prod=>$single_dim):
            $actual_max_allowed = $max_allowed[$prod];
            $total_weight += ($single_dim['qty']*$single_dim['weight']);
            $total_pack = ceil($single_dim['qty']/$actual_max_allowed);
            $total_height += ($total_pack*$single_dim['height']);
            if($single_dim['length']>$max_length)
                $max_length = $single_dim['length'];
            if($single_dim['breadth']>$max_breadth)
                $max_breadth = $single_dim['breadth'];
        endforeach;
	    return array("weight" => $total_weight, "length" => $max_length, "breadth" => $max_breadth, "height" => $total_height);
	}
}
?>