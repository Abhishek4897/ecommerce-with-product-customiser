<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ims extends CI_Controller {
public function __construct()
	{
		parent::__construct();
 		if(!$this->session->userdata('admin_id')){
 		redirect(base_url("Login/inventory_login"));
 		}
 		
	}
	public function index()
	{   $data['orderlists']=$this->Ims_model->myorder_home();
          $se=$this->Ims_model->stock_expenses();
          $de=$this->Ims_model->designer_expenses();
          $oe=$this->Ims_model->other_expenses();
          $income_data=$this->Ims_model->myorder();
          $stock_return=$this->Ims_model->get_stockreturn();
          
          $total_se=0;
          $total_de=0;
          $total_return_stock=0;
          $total_oe=0;
          $income=0;
          $income_gst=0;
          $total_gst=0;
          foreach($se as $s){
             $stock=$this->Ims_model->stock_list($s->stock_id);
             $this->db->where('id',1);
            $q = $this->db->get('invoice-details');
             $setting_data= $q->row();
             $products_gst=json_decode($setting_data->gstp);
            $pro_duct=$products_gst[1];
            foreach($products_gst[0] as $key=>$p_id){
             if($stock->product== $p_id){
              $gst=$pro_duct[$key];
             }
            }
            $total_gst= $total_gst + $s->unit_price * $s->qty * $gst /100;
             $total_se=$total_se + $s->unit_price * $s->qty;
          }
         
          foreach($de as $d){
             $total_de=$total_de + $d->payout;
          }
          foreach($oe as $o){
             $total_oe=$total_oe + $o->price;
          }
          
           foreach($stock_return as $sr){
             $total_return_stock=$total_return_stock + $sr->amount;
          }
          foreach($income_data as $ims){
             $income=$income + $ims->total;
             $income_gst=$income_gst + $ims->total_gst;
          }
          $data['stock_expense']=$total_se;
          $data['stock_expense_gst']=$total_gst;
          $data['designer_expense']=$total_de;
          $data['other_expense']=$total_oe;
          $data['incomes']=$income;
          $data['return_stock']=$total_return_stock;
           $data['income_gst']=$income_gst;
          $data['expenses']=$total_se + $total_de + $total_oe +$total_gst;
		$this->load->view('ims/index',$data);
	}
	
	public function my_profile(){
	    $admin_id= $this->session->userdata('admin_id');
        
	if($admin_id==1){
          $admin=$this->Ims_model->admin_profile($admin_id);
    }
   else{
      $admin=$this->Ims_model->accountant_profile($admin_id);
   }
	    	
	    if($this->input->post('update')) 
      { 
          if($this->input->post('update')==1){
	        if($this->Ims_model->update_profile($this->input->post('update')))
	           $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close"></button><strong>Well done!</strong><br>Record Updated Successfully.</div>');
                                    redirect('ims/my_profile');
      }
      else {
          if($this->Ims_model->update_accountant_profile($this->input->post('update')))
	           $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close"></button><strong>Well done!</strong><br>Record Updated Successfully.</div>');
                                    redirect('ims/my_profile');
          
      }
      }
      if($this->input->post('update_profile')) 
      {  if($this->input->post('update_profile')==1){
	        if($this->Ims_model->update_profile_image($this->input->post('update_profile')))
	           $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close"></button><strong>Well done!</strong><br>Record Updated Successfully.</div>');
                                    redirect('ims/my_profile');
      }
      else{
          if($this->Ims_model->update_accountant_profile_image($this->input->post('update_profile')))
	           $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close"></button><strong>Well done!</strong><br>Record Updated Successfully.</div>');
                                    redirect('ims/my_profile');
      }
      }
      
       if($this->input->post('update_password')) 
      {     $current=$admin->password;
            $password= md5($this->input->post('password'));
            if($password==$current){
                $newpassword= $this->input->post('password1');
                if($this->input->post('update_password')==1){
	        if($this->Ims_model->change_password($newpassword))
	           $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close"></button><strong>Well done!</strong><br>password Updated Successfully.</div>');
               redirect('ims/my_profile');
      }
      else{
          if($this->Ims_model->change_account_password($newpassword))
	           $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close"></button><strong>Well done!</strong><br>password Updated Successfully.</div>');
               redirect('ims/my_profile');
      }
            }
      else{
           $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close"></button><strong>Well done!</strong><br>password Not Matched.</div>');
               redirect('ims/my_profile');
      }
      }
	    
	    $data['list']=$admin;
		$this->load->view('ims/admin_profile',$data);
	    	
	}
	
	public function manage_stock()
	{  
	     if($this->input->post('delete'))
         { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('delete');
	            if($this->Common_model->delete($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close"></button><strong>Well done!</strong><br> Record deleted Successfully.</div>');
                                    redirect('ims/manage_stock');
	                
	            }
      }
      if($this->input->post('active'))
         {  
                 $id= $this->input->post('id');
                 $table=$this->input->post('active');
	            if($this->Common_model->activate($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close"></button><strong>Well done!</strong><br> Status Updated Successfully.</div>');
                                    redirect('ims/manage_stock');
	                
	            }
      }
      if($this->input->post('deactive'))
         { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('deactive');
	            if($this->Common_model->deactivate($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close"></button><strong>Well done!</strong><br> Status Updated Successfully.</div>');
                                    redirect('ims/manage_stock');
	                
	            }
      }
	    $data['lists']=$this->Ims_model->stock_list();
	   	$this->load->view('ims/manage_stock',$data);
	}
	
	public function add_stock()
	{  
	    if($this->input->post('submit')) 
      {  
          $add_stock= $this->Ims_model->add_stock();
	        if($add_stock=='add'){
	           $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close"></button><strong>Well done!</strong><br>Record added Successfully.</div>');
                                    redirect('ims/manage_stock');
	        }
	        else{
	           $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissable fade show has-icon"><i class="la la-important-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close"></button><strong>Oops!</strong><br>Record  Already Exist! Please update Stock.</div>');
                                    redirect('ims/manage_stock'); 
	        }
      }
	    $data['lists']=$this->Ims_model->products();
	   
	   	$this->load->view('ims/add_stock',$data);
	}
		public function fetch_color($pro)
	{
	  $result=$this->Ims_model->fetch_color($pro);
	  $color=json_decode($result->color);
	  	$i=1;  
	  foreach($color as $key=>$c){
	      echo '<option value='.$c.' style="background:'.$c.'" id="colorname'.$i.'">'.$c.'</option>';
	      echo'<script>
        let result = ntc.name('.$c.');
        alert(result[1]);
        document.getElementById("colorname'.$i.'").innerHTML =result[1];
    </script>';
	 $i++;  }
	 
	 
		
	}
	
	public function update_stock()
	{  
	   if($this->input->post('update')) 
      { 
	        if($this->Ims_model->update_stock($this->input->post('update')))
	           $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close"></button><strong>Well done!</strong><br>Record Updated Successfully.</div>');
                                    redirect('ims/manage_stock');
      }	
	}
	
	public function return_stock()
	{  
	   if($this->input->post('update')) 
      { 
	        if($this->Ims_model->return_stock($this->input->post('update')))
	           $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close"></button><strong>Well done!</strong><br>Record Updated Successfully.</div>');
                                    redirect('ims/stock_return');
      }	
	}
	
	public function stock_return(){
	     $data['lists']=$this->Ims_model->get_stockreturn();
	   	$this->load->view('ims/return_stock',$data);
	}
	
	public function stock_expenses()
	{  
	    $data['lists']=$this->Ims_model->stock_expenses();
	   	$this->load->view('ims/expenses_stock',$data);
	}
	
	public function designer_expenses()
	{  
	    $data['order']=$this->Ims_model->designer_expenses();
	   	$this->load->view('ims/expenses_designer',$data);
	}
	
	public function other_expenses()
	{  
	    $data['lists']=$this->Ims_model->other_expenses();
	   	$this->load->view('ims/expenses_other',$data);
	}
	
	public function add_expenses()
	{  
	    if($this->input->post('submit')) 
      {  
	        if($this->Ims_model->add_expenses())
	           $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close"></button><strong>Well done!</strong><br>Record added Successfully.</div>');
                                    redirect('ims/other_expenses');
      }
	    
	   
	   	$this->load->view('ims/add_expenses');
	}
	
	public function update_expenses()
	{  
	   if($this->input->post('update')) 
      { 
	        if($this->Ims_model->update_expenses($this->input->post('update')))
	           $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close"></button><strong>Well done!</strong><br>Record Updated Successfully.</div>');
                                    redirect('ims/other_expenses');
      }	
	}
	
	public function income(){
	   
        $data['orderlists']=$this->Ims_model->myorder();
       $data['invoice_data']=$this->Home_model->invoice_data();
        $this->load->view('ims/income',$data);
	}
	
	public function orders(){
	    
        $data['orderlists']=$this->Ims_model->myorder();
        $orders=$this->Ims_model->myorder();
       
        $neworder=array();
        foreach($orders as $order){
         $morderid=$order->id;
        
         $neworder[]=$this->Ims_model->orderdata($morderid);
          $orderstatus['status']=$order->status;
        }
        $data['myorders']=$neworder;
         $data['invoice_data']=$this->Home_model->invoice_data();
        
        
        
        $this->load->view('ims/orders',$data);
	}
	public function order_details($orderid){
	$data['id']=$orderid;
	$data['orderlists']=$this->Admin_model->orderByid($orderid);
        $data['myorders']=$this->Ims_model->orderdata($orderid);
       $data['invoice_data']=$this->Home_model->invoice_data();
		$this->load->view('ims/order_details',$data);
	}
	
	public function invoices($id){
	    $data['orderlists']=$this->Ims_model->order_details($id);
        $orders=$this->Ims_model->order_details($id);
        $data['user']=$this->Ims_model->list_users($orders->user_id);
        $data['add']=$this->Ims_model->del_address($orders->location_id);
        
        
         $morderid=$orders->id;
        
         $neworder=$this->Ims_model->orderdata($morderid);
          $data['myorders']=$neworder;
		$this->load->view('ims/invoices',$data);
	}
	public function reports()
	{  
	    if($this->input->post('generate')){
	      $type=  $this->input->post('ledger');
	      $from=  $this->input->post('from');
	      $to=  $this->input->post('to');
	      if($type=='stock'){
	          $table='stock_expenses';
	         $stock_report=$this->Ims_model->get_report($table,$from,$to);
	          if($stock_report){
	             $data['stock']=$stock_report;
	         }
	         else{
	            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissable fade show has-icon"><i class="la la-important-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close"></button><strong>OOps!</strong><br>Record not available.</div>'); 
	         }  
	           
	      }
	      else if ($type=='designer'){
	          $table='payout';
	          $status=3;
	         $designer=$this->Ims_model->get_report($table,$from,$to,$status);
	         if($designer){
	             $data['designer']=$designer;
	         }
	         else{
	            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissable fade show has-icon"><i class="la la-important-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close"></button><strong>OOps!</strong><br>Record not available.</div>'); 
	         }
                                   
	      }
	      else if ($type=='other'){
	          $table='other_expenses';
	          $other_report=$this->Ims_model->get_report($table,$from,$to);
	           if($other_report){
	             $data['other']=$other_report;
	         }
	         else{
	            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissable fade show has-icon"><i class="la la-important-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close"></button><strong>OOps!</strong><br>Record not available.</div>'); 
	         }  
	      }
	       else if ($type=='return_stock'){
	          $table='return_stock';
	          $return_stock_report=$this->Ims_model->get_report($table,$from,$to);
	           if($return_stock_report){
	             $data['return_stock']=$return_stock_report;
	         }
	         else{
	            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissable fade show has-icon"><i class="la la-important-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close"></button><strong>OOps!</strong><br>Record not available.</div>'); 
	         }  
	      }
	      else if ($type=='income'){
	          $table='orders';
	          $status='dispatched';
	         $income_report=$this->Ims_model->get_income_report($table,$from,$to,$status);
	          if($income_report){
	             $data['income']=$income_report;
	         }
	         else{
	            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissable fade show has-icon"><i class="la la-important-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close"></button><strong>OOps!</strong><br>Record not available.</div>'); 
	         }                     
	      }
	    }
	     $data['invoice_data']=$this->Home_model->invoice_data();
	   	$this->load->view('ims/reports',$data);
	}
	
	
}
?>
