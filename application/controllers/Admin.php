<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
    public function __construct()
	{
        parent::__construct();
        $this->load->library('pdf');
        $this->load->helper('logo_helper');
        $this->load->helper('sms_helper');
        $admin_id=$this->session->userdata("admin_id");
        if($admin_id!=1) {
            redirect(base_url("Login/index"));
        }
	}
	public function mail_test1() {
	    $this->load->model("mail_model");
	    if($this->mail_model->send_mail("anshuwap1@gmail.com", "Email test"))
	        echo "Send";
	    else
	        echo "Some issue";
	    
	}
	public function mail_test() {
	    $this->load->library('email');
    
        //SMTP & mail configuration
        $config = array(
            'protocol'  => 'smtp',
            'smtp_host' => 'mail.goldencrest.in',
            'smtp_port' => 587,
            'smtp_crypto' => 'tls',
            'smtp_user' => 'test@goldencrest.in',
            'smtp_pass' => 'qg,.aYBjU$KE',
            'mailtype'  => 'html',
            'charset'   => 'utf-8'
        );
        $this->email->initialize($config);
        $this->email->set_mailtype("html");
        $this->email->set_newline("\r\n");
        
        //Email content
        $htmlContent = '<h1>Sending email via SMTP server</h1>';
        $htmlContent .= '<p>This email has sent via SMTP server from CodeIgniter application.</p>';
        
        $this->email->to('anshuwap1@gmail.com');
        $this->email->from('customersupport@arteno.in', 'Arteno');
        $this->email->subject('How to send email via SMTP server in CodeIgniter');
        $this->email->message($htmlContent);
        
        //Send email
        echo $this->email->send();
	}

	public function index()
	{     
	      $data['orderlists']=$this->Admin_model->myorder_home();
          $data['list']=$this->Admin_model->list_users_home();
          $data['list_desig']=$this->Admin_model->list_designers_home();
          $data['count_user']=count($this->Admin_model->list_users());
          $data['count_designer']=count($this->Admin_model->list_designers());
          $data['order_count']=$this->Admin_model->total_order();
         
          $data['order_confirm']=$this->Admin_model->count_order('confirmed');
          $data['order_dispach']=$this->Admin_model->count_order('dispatched');
          $data['order_complete']=$this->Admin_model->count_order('completed');
        //   $data['count_cliparts']=count($this->Admin_model->cliparts());
          $data['count_cliparts']=count($this->Admin_model->sms());
          $data['product_count']=$this->Admin_model->count_product();
		$this->load->view('admin/index',$data);
	}

	public function add_accountant(){
      if($this->input->post('add')){
    	        $this->Admin_model->add_accountant();
    	        
                redirect('admin/manage_accountant');
    	    }
		$this->load->view('admin/add_accountant');
	}
	
	public function manage_accountant(){
	     if($this->input->post('delete'))
         { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('delete');
	            if($this->Common_model->delete($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Record deleted Successfully.</div>');
                                    redirect('admin/manage_accountant');
	                
	            }
      }
      if($this->input->post('active'))
         {  
                 $id= $this->input->post('id');
                 $table=$this->input->post('active');
	            if($this->Common_model->activate($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Status Updated Successfully.</div>');
                                    redirect('admin/manage_accountant');
	                
	            }
      }
      if($this->input->post('deactive'))
         { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('deactive');
	            if($this->Common_model->deactivate($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Status Updated Successfully.</div>');
                                    redirect('admin/manage_accountant');
	                
	            }
      }
      $data['list']=$this->Admin_model->accountant_list();
		$this->load->view('admin/accountant',$data);
	}
	
	public function accoutant_profile($id){
	    if($this->input->post('update')) 
      { 
	        if($this->Admin_model->update_accountant_profile($this->input->post('update')))
	           $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>Record Updated Successfully.</div>');
                                    redirect('admin/manage_accountant');
      }
	    $data['list']=$this->Admin_model->accountant_list($id);
		$this->load->view('admin/accountant_profile',$data);
	}
	public function payout_request()
	{
	    $data['order'] = $this->Admin_model->requested_payout();
	    if(isset($data['order'][0]) && $data['order'][0]->id=="")
	        $data['order'] = array();
		$this->load->view('admin/payout_request',$data);
	}
 	public function Complete_payout()
	{
	    $data['order']=$this->Admin_model->Complete_payout();
	    if(isset($data['order'][0]) && $data['order'][0]->id=="")
	        $data['order'] = array();
		$this->load->view('admin/payout_complete',$data);
	}
	public function payouts()
	{
	    $data['order']=$this->Admin_model->all_payouts();
		$this->load->view('admin/payouts',$data);
	}

	public function designer_payment_details($id){
        $data['list']=$this->Designer_model->payment_details($id);
		$this->load->view('admin/designer_payment_details',$data);
	}
	
	public function payout_response(){
	    
	    if($this->input->post('submit')) 
      { 
	        if($this->Admin_model->payout_response($this->input->post('submit')))
	           $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>Response Submitted Successfully.</div>');
                                    redirect('admin/payouts');
      }
	}
	 
	public function product_detail(){
		$this->load->view('admin/product_detail');
	}
	public function add_product()
	{
		$this->load->view('admin/add_product');
	}
	public function manage_product(){
		$this->load->view('admin/manage_product');
	}
	public function users(){
		$this->load->view('admin/users');
	}
	public function add_category(){
	    if($this->input->post('add')) 
	   {  
	
	     if($this->Admin_model->add_category())
	       $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>Record added successfully.</div>');
                                    redirect('admin/categories');
	   }
	   $data['list']= $this->Admin_model->categories();
		$this->load->view('admin/add_category',$data);
	}
	public function update_category(){
	    if($this->input->post('update')) 
	   {  
	
	     if($this->Admin_model->update_category($this->input->post('update')))
	       $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>Record Updated successfully.</div>');
                                    redirect('admin/categories');
	   }
	}
	public function update_product(){
		$this->load->view('admin/update_product');
	}
	public function user_profile($id){
	    if($this->input->post('update')) 
      { 
	        if($this->Admin_model->update_user_profile($this->input->post('update')))
	           $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>Record Updated Successfully.</div>');
                                    redirect('admin/manage_user');
      }
	    $data['list']=$this->Admin_model->list_users($id);
		$this->load->view('admin/user_profile',$data);
	}
	
	public function designer_profile($id){
	    if($this->input->post('update')) 
      { 
	        if($this->Admin_model->update_designer_profile($this->input->post('update')))
	           $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>Record Updated Successfully.</div>');
                                    redirect('admin/manage_designer');
      }
	    $data['list']=$this->Admin_model->list_designers($id);
		$this->load->view('admin/designer_profile',$data);
	}
	
	public function categories(){
	    if($this->input->post('delete'))
         { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('delete');
	            if($this->Common_model->tbl_delete($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Record deleted Successfully.</div>');
                                    redirect('admin/categories');
	                
	            }
      }
	    $data['list']= $this->Admin_model->categories();
		$this->load->view('admin/categories',$data);
	}
	public function vieworder($id){
	
        
        $data['orderlists']=$this->Home_model->myorder($id);
        $orders=$this->Home_model->myorder($id);
        
        $neworder=array();
        foreach($orders as $order){
         $morderid=$order->id;
        
         $neworder[]=$this->Home_model->orderdata($morderid);
          $orderstatus['status']=$order->status;
        }
        $data['myorders']=$neworder;
        
        
         $data['invoice_data']=$this->Home_model->invoice_data();
		$this->load->view('admin/vieworder',$data);
	}
	
	public function order_details($orderid){
	$data['id']=$orderid;
	 $data['orderlists']=$this->Admin_model->orderByid($orderid);
        $data['myorders']=$this->Admin_model->orderdata($orderid);
      $data['invoice_data']=$this->Home_model->invoice_data();
		$this->load->view('admin/order_details',$data);
	}
	
// 	public function test_orders($id) {
// 	    $this->Admin_model->payout_request_entry($id);
// 	}
	public function orders(){
	    
        if($this->input->post('delete'))
        { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('delete');
	            if($this->Common_model->delete($id, $table)){

	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Record deleted Successfully.</div>');
                                    redirect('admin/orders');
	                
	            }
      }
       if($this->input->post('cancel'))
         { 
                 $id= $this->input->post('order_id');
                 $table=$this->input->post('cancel');
                 $note=$this->input->post('note');
	            if($this->Common_model->cancel_order($id, $table,$note)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> order Cancel Successfully.</div>');
                                    redirect('admin/orders');
	                
	            }
      }
      if($this->input->post('dispatch'))
      {
        $id= $this->input->post('order_id');
        $table=$this->input->post('dispatch');
        $awb_code = $this->input->post('awb_code');
        if($this->Common_model->dispatch_order($id, $table, $awb_code)){
            $this->Admin_model->make_invoice($id);
            $order=$this->Admin_model->orderByid_array($id);
            $order_data=$this->Admin_model->orderdata_array($id);
            $invoice_data=$this->Home_model->invoice_data();
            $user=$this->db->where('id',$order['user_id'])->get('users')->row();
            $order_msg = array(
                        'products'=>$order_data,
                        'order_id' => $id,
                        'order_data' => $order,
                        'user_data' => $order['user_id']
                    );
            $msg="Hi there! Guess what? Your order (ID: {$invoice_data->order_prefix}{$id}) has been dispatched! Kindly be aware of certain delays with your placed order due to limited courier options shipment via road transport. Thank you for understanding and bearing with us during these times. We appreciate your constant support!\r\n\r\nTo track your order, click this link: https://www.arteno.in/my_orders\r\n\r\nHave a wonderful day!";
            @send_sms($user->user_phone,$msg,'dispatch_order');
            $this->load->model("Mail_model");
            $this->Mail_model->order_email($order_msg,'dispatch');
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
            <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> order Dispatch Successfully.</div>');
            redirect('admin/orders');
        }
      }
      if($this->input->post('complete'))
         { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('complete');
	            if($this->Common_model->complete_order($id, $table)){
	                $this->Admin_model->make_payout($id);
	                $this->Common_model->complete_order_products($id);
	                $order=$this->Admin_model->orderByid_array($id);
                    $order_data=$this->Admin_model->orderdata_array($id);
	                $invoice_data=$this->Home_model->invoice_data();
	                 $user=$this->db->where('id',$order['user_id'])->get('users')->row();
	                 $order_msg = array(
                        'products'=>$order_data,
                        'order_id' => $id,
                        'order_data' => $order,
                        'user_data' => $order['user_id']
                    );
	                 $msg="Hi there!

We are pleased to notify you that your order has been successfully delivered to you!

Thank you for shopping with us! We hope to see you soon.

Cheers!
Team Arteno";
	                 
                	   @send_sms($user->user_phone,$msg,'complete_order');
                	    $this->load->model("Mail_model");
                        $this->Mail_model->order_email($order_msg,'complete');
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> order completed Successfully.</div>');
                                    redirect('admin/orders');
	                
	            }
      }
        if($this->input->post('shiprocket_deliverability'))
        {
            $order_id=$this->input->post('shiprocket_order_id');
            // $order_id = $post['order_id'];
            // $pickup_location = $post['pickup_location'];
            // $weight = $post['weight'];
            // $length = $post['length'];
            // $breadth = $post['breadth'];
            // $comment = $post['comment'];
            // $pickup_postcode = $post['pickup_postcode'];
            $del_status = $this->Admin_model->order_shippment_process($this->input->post());
            // print_r($del_status);exit;
            
            //#success: Array ( [data] => Array ( [order_id] => 77830177 [shipment_id] => 77460718 [status] => NEW [status_code] => 1 [onboarding_completed_now] => 0 [awb_code] => [courier_company_id] => [courier_name] => ) [delivery_postcode] => 518004 [is_cod] => 1 )

            //#error: Array ( [data] => Array ( [message] => Oops! Invalid Data. [errors] => Array ( [shipping_city] => Array ( [0] => The shipping city may not be greater than 30 characters. ) ) [status_code] => 422 ) [delivery_postcode] => 847133 [is_cod] => 1 )
            // $awb_code = "";
            // if($del_status['awb_assign_status']==1){
            //     $awb_code = $del_status['response']['data']['awb_code'];
            
                if(!isset($del_status['data']['message'])){//$awb_code
                // if(false) {
                    $data = array(
                        'status' => 'placed'
            			//'awb_code' => $awb_code
        		    );
                    $this->db->where('id', $order_id);
                    $this->db->update('orders', $data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                        <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Your order placed successfully.</div>');
                                        redirect('admin/orders');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissable fade show has-icon"><i class="la la-important-circle alert-icon"></i>
                                        <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Oops!</strong><br>'. $del_status['data']['message'] .', please check '.array_key_first($del_status['data']['errors']).'.</div>');
                                        redirect('admin/orders');
                }
            // } else {
            //   $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissable fade show has-icon"><i class="la la-important-circle alert-icon"></i>
            //                         <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Oops!</strong><br> '.$del_status['message'].'</div>');
            //                         redirect('admin/orders'); 
            // }
            
        }
        $data['orderlists']=$this->Admin_model->myorder();
        $orders=$this->Admin_model->myorder();
       
        $neworder=array();
        foreach($orders as $order){
         $morderid=$order->id;
        
         $neworder[]=$this->Admin_model->orderdata($morderid);
          $orderstatus['status']=$order->status;
        }
        $data['myorders']=$neworder;
        $data['invoice_data']=$this->Home_model->invoice_data();
        $data['order_count']=$this->Admin_model->count_order('dispatched');
        $data['order_confirm']=$this->Admin_model->count_order('confirmed');
        $data['order_cancel']=$this->Admin_model->count_order('cancelled');
        $data['order_complete']=$this->Admin_model->count_order('completed');
        
        
        $this->load->view('admin/orders2',$data);
	}

	public function cancel_request_order($id){
	    if($id){
	        $this->Common_model->cancel_request_order($id);
	        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Request cancelled successfully.</div>');
                                    redirect('admin/orders');
	    }
	}

	public function manage_user(){
	     if($this->input->post('delete'))
         { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('delete');
	            if($this->Common_model->delete($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Record deleted Successfully.</div>');
                                    redirect('admin/manage_user');
	                
	            }
      }
      if($this->input->post('active'))
         {  
                 $id= $this->input->post('id');
                 $table=$this->input->post('active');
	            if($this->Common_model->activate($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Status Updated Successfully.</div>');
                                    redirect('admin/manage_user');
	                
	            }
      }
      if($this->input->post('deactive'))
         { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('deactive');
	            if($this->Common_model->deactivate($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Status Updated Successfully.</div>');
                                    redirect('admin/manage_user');
	                
	            }
      }
	    $data['list']=$this->Admin_model->list_users();
		$this->load->view('admin/manage_user',$data);
	}
	
	public function manage_designer(){
	     if($this->input->post('delete'))
         { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('delete');
	            if($this->Common_model->delete($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Record deleted Successfully.</div>');
                                    redirect('admin/manage_designer');
	                
	            }
      }
      if($this->input->post('active'))
         {  
                 $id= $this->input->post('id');
                 $table=$this->input->post('active');
	            if($this->Common_model->activate($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Status Updated Successfully.</div>');
                                    redirect('admin/manage_designer');
	                
	            }
      }
      if($this->input->post('deactive'))
         { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('deactive');
	            if($this->Common_model->deactivate($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Status Updated Successfully.</div>');
                                    redirect('admin/manage_designer');
	                
	            }
      }
       if($this->input->post('featured'))
         { 
                 $id= $this->input->post('id');
                 $data = ['featured'=>1];
                 if($this->Designer_model->featuredDesigner($id,$data)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>Designer is featured successfully.</div>');
                                    redirect('admin/manage_designer');
	                
	            }
      }
       if($this->input->post('unfeatured'))
         { 
                 $id= $this->input->post('id');
                 $data = ['featured'=>0];
                 if($this->Designer_model->featuredDesigner($id,$data)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>Designer is Unfeatured successfully.</div>');
                                    redirect('admin/manage_designer');
	                
	            }
      }
	    $data['list']=$this->Admin_model->list_designers();
		$this->load->view('admin/manage_designer',$data);
	}
	
		public function add_designer(){
	    if($this->input->post('add')) 
	   {  
	
	     if($this->Admin_model->add_designer())
	       $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>Record added successfully.</div>');
                                    redirect('admin/manage_designer');
	   }
		$this->load->view('admin/add_designer');
	}
	
	public function manage_society(){
		$this->load->view('admin/manage_society');
	}
	public function edit_society(){
		$this->load->view('admin/edit_society');
	}
	public function pages(){
	    $data['list']=$this->Admin_model->list_pages();
		$this->load->view('admin/pages',$data);
	}
	public function add_page(){
		$this->load->view('admin/add_page');
	}
	public function edit_page($id){
	     if($this->input->post('update')) 
      { 
	        if($this->Admin_model->update_pages($this->input->post('update')))
	           $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>Record Updated Successfully.</div>');
                                    redirect('admin/pages');
      }
	    $data['list']=$this->Admin_model->list_pages($id);
		$this->load->view('admin/edit_page',$data);
	}
	public function page_detail(){
		$this->load->view('admin/page_detail');
	}
	public function order_feedback(){
		$this->load->view('admin/order_feedback');
	}
	public function enquiry(){
	    if($this->input->post('delete'))
         { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('delete');
	            if($this->Common_model->delete($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Record deleted Successfully.</div>');
                                    redirect('admin/enquiry');
	                
	            }
      }
	   $data['list']= $this->Admin_model->list_enquiry();
		$this->load->view('admin/order_notification',$data);
	}
	public function admin_profile(){
	    $admin_id= $this->session->userdata('admin_id');
        
	    	$admin=$this->Admin_model->admin_profile($admin_id);
	    if($this->input->post('update')) 
      { 
	        if($this->Admin_model->update_profile($this->input->post('update')))
	           $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>Record Updated Successfully.</div>');
                                    redirect('admin/admin_profile');
      }
      if($this->input->post('update_profile')) 
      { 
	        if($this->Admin_model->update_profile_image($this->input->post('update_profile')))
	           $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>Record Updated Successfully.</div>');
                                    redirect('admin/admin_profile');
      }
      
       if($this->input->post('update_password')) 
      {     $current=$admin->password;
            $password= md5($this->input->post('password'));
            if($password==$current){
                $newpassword= $this->input->post('password1');
	        if($this->Admin_model->change_password($newpassword))
	           $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>password Updated Successfully.</div>');
                                    redirect('admin/admin_profile');
      }
      }
	    
	    $data['list']=$admin;
		$this->load->view('admin/admin_profile',$data);
	    	
	}
	
	public function general($id='1'){
	     if($this->input->post('update')){ 
	        if($this->Admin_model->update_setting($this->input->post('update')))
	           $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
               <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>Record Updated Successfully.</div>');
               redirect('admin/general');
        }
        if($this->input->post('uinvoice')){
            if($this->Admin_model->update_invoice()){
               $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
               <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>Invoice Updated Successfully.</div>');
               redirect('admin/general'); 
            }
        }
         if($this->input->post('udimension')){
            if($this->Admin_model->update_dimension()){
               $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
               <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>Dimension Updated Successfully.</div>');
               redirect('admin/general'); 
            }
        }
	    $data['settings']=$this->Admin_model->settings();
	    $data['list']=$this->Admin_model->list_setting($id);
	    $data['products']=$this->Ims_model->products();
	    $data['invoice']=$this->Admin_model->invoicedata();
	    $data['profilt']=$this->Admin_model->profit(); 
		$this->load->view('admin/general',$data);
	}
	public function stock(){
		$this->load->view('admin/stock');
	}
	public function icons(){
		$this->load->view('admin/icons');
	}
	public function tag(){
		$this->load->view('admin/tag');
	}
	public function add_tag(){
		$this->load->view('admin/add_tag');
	}
	public function update_tag(){
		$this->load->view('admin/update_tag');
	}
	public function order_limit_setting(){
		$this->load->view('admin/order_limit_setting');
	}
	
	public function page_setting(){
		$this->load->view('admin/page_setting');
	}
	public function edit_page_setting(){
		$this->load->view('admin/edit_page_setting');
	}
	public function testimonial(){
	    if($this->input->post('delete'))
         { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('delete');
	            if($this->Common_model->delete($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Record deleted Successfully.</div>');
                                    redirect('admin/testimonial');
	                
	            }
      }
      if($this->input->post('active'))
         {  
                 $id= $this->input->post('id');
                 $table=$this->input->post('active');
	            if($this->Common_model->activate($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Status Updated Successfully.</div>');
                                    redirect('admin/testimonial');
	                
	            }
      }
      if($this->input->post('deactive'))
         { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('deactive');
	            if($this->Common_model->deactivate($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Status Updated Successfully.</div>');
                                    redirect('admin/testimonial');
	                
	            }
      }
	   $data['list']=$this->Admin_model->list_testimonial();
		$this->load->view('admin/testimonial',$data);
	}
	
	public function add_testimonial(){
	    if($this->input->post('add')) 
	   {  
	     if($this->Admin_model->add_testimonial())
	       $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>Record added successfully.</div>');
                                    redirect('admin/testimonial');
	   }
		$this->load->view('admin/add_testimonial');
	}
	
	public function update_testimonial($id){
	    if($this->input->post('update')) 
      { 
	        if($this->Admin_model->update_testimonial($this->input->post('update')))
	           $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>Record Updated Successfully.</div>');
                                    redirect('admin/testimonial');
      }
	    $data['list']=$this->Admin_model->list_testimonial($id);
		$this->load->view('admin/update_testimonial',$data);
	}
	
	public function client(){
		$this->load->view('admin/client');
	}
	public function add_client(){
		$this->load->view('admin/add_client');
	}
	
	public function update_client(){
		$this->load->view('admin/update_client');
	}
	
	public function update_review_rating(){
		$this->load->view('admin/update_review_rating');
	}
	
	public function video(){
	    if($this->input->post('delete'))
         { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('delete');
	            if($this->Common_model->delete($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Record deleted Successfully.</div>');
                                    redirect('admin/video');
	                
	            }
      }
      if($this->input->post('active'))
         {  
                 $id= $this->input->post('id');
                 $table=$this->input->post('active');
	            if($this->Common_model->activate($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Status Updated Successfully.</div>');
                                    redirect('admin/video');
	                
	            }
      }
      if($this->input->post('deactive'))
         { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('deactive');
	            if($this->Common_model->deactivate($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Status Updated Successfully.</div>');
                                    redirect('admin/video');
	                
	            }
      }
	   $data['list']=$this->Admin_model->list_video();
		$this->load->view('admin/video',$data);
	}
	
	public function add_video(){
	    if($this->input->post('add')) 
	   {  
	     if($this->Admin_model->add_video())
	       $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>Record added successfully.</div>');
                                    redirect('admin/video');
	   }
		$this->load->view('admin/add_video');
	}
	
	public function update_video($id){
	    if($this->input->post('update')) 
      { 
	        if($this->Admin_model->update_video($this->input->post('update')))
	           $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>Record Updated Successfully.</div>');
                                    redirect('admin/video');
      }
	    $data['list']=$this->Admin_model->list_video($id);
		$this->load->view('admin/update_video',$data);
	}
	
	public function blog(){
	    if($this->input->post('delete'))
         { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('delete');
	            if($this->Common_model->delete($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Record deleted Successfully.</div>');
                                    redirect('admin/blog');
	                
	            }
      }
      if($this->input->post('active'))
         {  
                 $id= $this->input->post('id');
                 $table=$this->input->post('active');
	            if($this->Common_model->activate($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Status Updated Successfully.</div>');
                                    redirect('admin/blog');
	                
	            }
      }
      if($this->input->post('deactive'))
         { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('deactive');
	            if($this->Common_model->deactivate($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Status Updated Successfully.</div>');
                                    redirect('admin/blog');
	                
	            }
      }
	   $data['list']=$this->Admin_model->list_blog();
		$this->load->view('admin/blog',$data);
	}
	
	public function add_blog(){
	    if($this->input->post('add')) 
	   {  
	     if($this->Admin_model->add_blog())
	       $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>Record added successfully.</div>');
                                    redirect('admin/blog');
	   }
		$this->load->view('admin/add_blog');
	}
	
	public function update_blog($id){
	    if($this->input->post('update')) 
      { 
	        if($this->Admin_model->update_blog($this->input->post('update')))
	           $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>Record Updated Successfully.</div>');
                                    redirect('admin/blog');
      }
	    $data['list']=$this->Admin_model->list_blog($id);
		$this->load->view('admin/update_blog',$data);
	}
    public function favourite($id,$status){
        if($this->Admin_model->favourite($id,$status)=='added'){
            $this->session->set_flashdata('favmessage', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button> Template added to  favourite Successfully.</div>');
            // redirect('admin/manage_template');
        }
        elseif($this->Admin_model->favourite($id,$status)=='remove'){
            $this->session->set_flashdata('favmessage', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button>Template removed from  favourite Successfully.</div>');
            // redirect('admin/manage_template');
        }
    }

    public function manage_template_ajax() {
        $id = $this->input->post('uorder');
        $order = $this->input->post('order');
        $table = 'templates';
        if($id && $this->Common_model->orderupdate($id,$table,$order))
         {
             echo $order;
         }
    }
    public function manage_template($prod_id="", $cat_id="", $designer_id=""){
        @set_time_limit(30000000);
        if($this->input->post('active')){  
            $id= $this->input->post('id');
            $table=$this->input->post('active');
	            if($this->Common_model->tbl_activate($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Status Updated Successfully.</div>');
                    // redirect('admin/manage_template');
	            }
       }
        if($this->input->post('uorder')){  
            $id= $this->input->post('uorder');
            $table='templates';
            if($this->Common_model->orderupdate($id,$table)){
                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Template order updated successfully.</strong></div>');
                // redirect('admin/manage_template');
            }
       }
      if($this->input->post('deactive'))
         { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('deactive');
	            if($this->Common_model->tbl_deactivate($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Status Updated Successfully.</div>');
                    // redirect('admin/manage_template');
	                
	            }
      }
      if($this->input->post('delete'))
         { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('delete');
	            if($this->Common_model->tbl_delete($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Record deleted Successfully.</div>');
                    // redirect('admin/manage_template');
	                
	            }
      }
         $data['templates']=$this->Admin_model->alltemplates($prod_id, $cat_id, $designer_id);
	
		$this->load->view('admin/manage_template',$data);
	}
	
	public function excel_template($prod_id="", $cat_id=""){
        $data['templates']=$this->Admin_model->alltemplates_excel($prod_id, $cat_id);
	    $this->load->view('admin/excel_template',$data);
	}
	public function fetch_templates(){
	     $data['templates']=$this->Admin_model->alltemplates();
	     print_r($data['templates']);
	   
	}
	public function add_template(){
	    if($this->input->post('add')) 
	   {  
	
	     if($this->Admin_model->add_template())
	       $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>Record added successfully.</div>');
                                    redirect('admin/manage_template');
	   }
	   $data['tag']=$this->Admin_model->templates_tags();
	    $data['list']= $this->Admin_model->templates_categories();
		$this->load->view('admin/add_template',$data);
	}
	
	public function update_template(){
		$this->load->view('admin/update_template');
	}
	
		public function template_categories(){
		    if($this->input->post('delete'))
         { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('delete');
	            if($this->Common_model->tbl_delete($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Record deleted Successfully.</div>');
                                    redirect('admin/template_categories');
	                
	            }
      }
		  $data['list']= $this->Admin_model->templates_categories();
		$this->load->view('admin/template_categories',$data);
	}
	
		public function add_template_categories(){
		    if($this->input->post('add')) 
	   {  
	
	     if($this->Admin_model->add_category())
	       $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>Record added successfully.</div>');
                                    redirect('admin/template_categories');
	   }
	   $data['list']= $this->Admin_model->templates_categories();
		$this->load->view('admin/add_template_categories',$data);
	}
	
	public function template_tag(){
	       $data['list']=$this->Admin_model->templates_tags();
		$this->load->view('admin/template_tag',$data);
	}
	
		public function add_template_tag(){
		     if($this->input->post('add')) 
	   {  
	
	     if($this->Admin_model->add_tag())
	       $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>Record added successfully.</div>');
                                    redirect('admin/template_tag');
	   }
		$this->load->view('admin/add_template_tag');
	}
	
	public function manage_clipart(){
	    if($this->input->post('delete'))
         { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('delete');
	            if($this->Common_model->tbl_delete($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong></strong><br> Record deleted Successfully.</div>');
                                    redirect('admin/manage_clipart');
	                
	            }
      }
	        if($this->input->post('active'))
         {  
                 $id= $this->input->post('id');
                 $table=$this->input->post('active');
	            if($this->Common_model->tbl_activate($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Status Updated Successfully.</div>');
                                    redirect('admin/manage_clipart');
	                
	            }
      }
      if($this->input->post('deactive'))
         { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('deactive');
	            if($this->Common_model->tbl_deactivate($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Status Updated Successfully.</div>');
                                    redirect('admin/manage_clipart');
	                
	            }
      }
	    $data['cliparts']=$this->Admin_model->cliparts();
		$this->load->view('admin/manage_clipart',$data);
	}
	public function add_clipart(){
	    if($this->input->post('add')) 
	   {  
	
	     if($this->Admin_model->add_clipart())
	       $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>Record added successfully.</div>');
                                    redirect('admin/manage_clipart');
	   }
	   $data['tag']=$this->Admin_model->cliparts_tags();
	    $data['list']= $this->Admin_model->cliparts_categories();
		$this->load->view('admin/add_clipart',$data);
	}
	
	public function update_clipart(){
		$this->load->view('admin/update_clipart');
	}
	
		public function clipart_categories(){
		     if($this->input->post('delete'))
         { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('delete');
	            if($this->Common_model->tbl_delete($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Record deleted Successfully.</div>');
                                    redirect('admin/clipart_categories');
	                
	            }
      }
		  $data['list']= $this->Admin_model->cliparts_categories();
		$this->load->view('admin/clipart_categories',$data);
	}
	
		public function add_clipart_categories(){
		    if($this->input->post('add')) 
	   {  
	
	     if($this->Admin_model->add_category())
	       $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>Record added successfully.</div>');
                                    redirect('admin/clipart_categories');
	   }
	   $data['list']= $this->Admin_model->cliparts_categories();
		$this->load->view('admin/add_clipart_categories',$data);
	}
	
			public function clipart_tag(){
			$data['list']=$this->Admin_model->cliparts_tags();
		$this->load->view('admin/clipart_tag',$data);
	}
	
			public function add_clipart_tag(){
			    if($this->input->post('add')) 
	   {  
	
	     if($this->Admin_model->add_tag())
	       $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>Record added successfully.</div>');
                                    redirect('admin/clipart_tag');
	   }
		$this->load->view('admin/add_clipart_tag');
	}
	
		public function manage_shapes(){
		    if($this->input->post('delete'))
         { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('delete');
	            if($this->Common_model->tbl_delete($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Record deleted Successfully.</div>');
                                    redirect('admin/manage_shapes');
	                
	            }
      }
		    if($this->input->post('active'))
         {  
                 $id= $this->input->post('id');
                 $table=$this->input->post('active');
	            if($this->Common_model->tbl_activate($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Status Updated Successfully.</div>');
                                    redirect('admin/manage_shapes');
	                
	            }
      }
      if($this->input->post('deactive'))
         { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('deactive');
	            if($this->Common_model->tbl_deactivate($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Status Updated Successfully.</div>');
                                    redirect('admin/manage_shapes');
	                
	            }
      }
		    $data['shapes']=$this->Admin_model->list_shapes();
		$this->load->view('admin/manage_shapes',$data);
	}
	public function add_shapes(){
	     if($this->input->post('add')) 
	   {  
	     if($this->Admin_model->add_shapes())
	       $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>Record added successfully.</div>');
                                    redirect('admin/manage_shapes');
	   }
		$this->load->view('admin/add_shapes');
	}
	
	public function update_shapes($id){
	     if($this->input->post('update')) 
      { 
	        if($this->Admin_model->update_shapes($this->input->post('update')))
	           $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>Record Updated Successfully.</div>');
                                    redirect('admin/manage_shapes');
      }
	    $data['list']=$this->Admin_model->list_shapes($id);
		$this->load->view('admin/update_shapes',$data);
	}
	
	
	public function manage_fonts(){
	    
	        if($this->input->post('active'))
         {  
                 $id= $this->input->post('id');
                 $table=$this->input->post('active');
	            if($this->Common_model->activate($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Status Updated Successfully.</div>');
                                    redirect('admin/manage_fonts');
	                
	            }
      }
      if($this->input->post('deactive'))
         { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('deactive');
	            if($this->Common_model->deactivate($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Status Updated Successfully.</div>');
                                    redirect('admin/manage_fonts');
	                
	            }
      }
         
    
         $data['fonts']=$this->Admin_model->fonts();
		$this->load->view('admin/manage_fonts',$data);
	}
	public function add_fonts(){
		$this->load->view('admin/add_fonts');
	}
	
	public function update_fonts(){
	    
		$this->load->view('admin/update_fonts');
	}
	public function forgot_pass(){
		$this->load->view('admin/forgot_pass');
	}
	public function address($id){
	   
	    if($this->input->post('update')) 
      { 
	        if($this->Designer_model->update_address($this->input->post('update')))
	           $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>Record Updated Successfully.</div>');
                                    redirect("admin/address/".$id);
      }
      $data['id']=$id;
        $data['lists']=$this->Designer_model->user_location($id);
		$this->load->view('admin/update_address',$data);
	}
	public function add_address($id){
         if($this->input->post('add')) 
      { 
	        if($this->Designer_model->add_address($id))
	           $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>Record Added Successfully.</div>');
                                    redirect("admin/address/".$id);
      }
      
		$this->load->view('admin/add_address');
	}
	
	public function payment_details($id){
	   
	    if($this->input->post('update')) 
      { 
	        if($this->Designer_model->update_payment($this->input->post('update')))
	           $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>Record Updated Successfully.</div>');
                                    redirect("admin/payment_details/".$id);
      }
      $data['id']=$id;
        $data['lists']=$this->Designer_model->payment_details($id);
		$this->load->view('admin/update_payment',$data);
	}
	public function add_payment_details($id){
	    
         if($this->input->post('add')) 
      { 
	        if($this->Designer_model->add_payment($id))
	           $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>Record Added Successfully.</div>');
                                    redirect("admin/payment_details/".$id);
      }
		$this->load->view('admin/add_payment');
	}
	public function generate_design($orderid){
	    if(!$orderid) {
	        redirect(base_url('admin/orders'));
	    } 
        $data['myorders']=$this->Admin_model->orderproductdetails($orderid);
		$this->load->view('admin/generate_design',$data);
	}
	public function featured_template(){
	    $prod_id = $this->input->post("prod_id");
	    $cat_id = $this->input->post("cat_id");
	    $limit_cat = $limit_prod = 40;
	    if($this->input->post("topProduct")){
	            $id= $this->input->post('topProduct');
                 if(validate_featured($prod_id) < $limit_prod){
                 $data = ['favourite'=>1,'top_in_category'=>0,'top_in_products'=>1];
                 if($this->Admin_model->featuredTemplates($id,$data)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button> Featured By Product</div>');
                                    redirect('admin/manage_template');
                 }
    	    } else {
    	        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                        <button class="close" data-dismiss="alert" aria-label="Close">&times;</button>You have exceed Top limit</div>');
                redirect('admin/manage_template');
    	    }
	    } 
	    if($this->input->post("topCategory")){
	        $id = $this->input->post('topCategory');
	        if(validate_featuredCategory($prod_id, $cat_id) < $limit_cat){
                 $data = ['favourite'=>1,'top_in_category'=>1,'top_in_products'=>0];
                 if($this->Admin_model->featuredTemplates($id,$data)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button> Featured By Category</div>');
                                    redirect('admin/manage_template');
                 }
	        }else{
	             $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button>You have exceed Top limit</div>');
                                    redirect('admin/manage_template');
	        }
                 
	    } 
	    if($this->input->post("none")){
	        $id = $this->input->post('none');
                 $data = ['favourite'=>0,'top_in_category'=>0,'top_in_products'=>0];
                 if($this->Admin_model->featuredTemplates($id,$data)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button>Template is Unfeatured.</div>');
                                    redirect('admin/manage_template');
                 }
	    }
	    if($this->input->post("favourites")){
	        
	        $id = $this->input->post('favourites');
                  $data = ['favourite'=>1,'top_in_category'=>0,'top_in_products'=>0];
                 if($this->Admin_model->featuredTemplates($id,$data)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button>Featured by favourite.</div>');
                                    redirect('admin/manage_template');
                }
	    }
	}
	public function featured_template1(){
	    $prod_id = $this->input->post("prod_id");
	    $cat_id = $this->input->post("cat_id");
	    $id= $this->input->post('id');
	    $limit_cat = $limit_prod = 40;
	    if($this->input->post("name") == "topProduct"){
	            
                 if(validate_featured($prod_id) < $limit_prod){
                 $data = ['favourite'=>1,'top_in_category'=>0,'top_in_products'=>1];
                 if($this->Admin_model->featuredTemplates($id,$data)){
	                echo '<h4 class="mt-2" style="font-size:20px"><span class="badge badge-success"> Featured in top products </span></h4>';
                 }
    	    } else {
    	        echo 0;
    	    }
	    } 
	    if($this->input->post("name") == "topCategory"){
	        if(validate_featuredCategory($prod_id, $cat_id) < $limit_cat){
                 $data = ['favourite'=>1,'top_in_category'=>1,'top_in_products'=>0];
                 if($this->Admin_model->featuredTemplates($id,$data)){
	               echo '<h4 class="mt-2" style="font-size:20px"><span class="badge badge-success"> Featured in top Category </span></h4>'; 
                 }
	        }else{
	            echo 0;
	        }
                 
	    } 
	    if($this->input->post("name") == "none"){
	       
                 $data = ['favourite'=>0,'top_in_category'=>0,'top_in_products'=>0];
                 if($this->Admin_model->featuredTemplates($id,$data)){
	                echo '<h4 class="mt-2" style="font-size:20px"><span class="badge badge-success"> Not featured</span></h4>';
                 }
	    }
	    if($this->input->post("name") == "favourites"){
	        
                  $data = ['favourite'=>1,'top_in_category'=>0,'top_in_products'=>0];
                 if($this->Admin_model->featuredTemplates($id,$data)){
	               echo '<h4 class="mt-2" style="font-size:20px" ><span class="badge badge-success"> Featured after top 5 pages </span></h4>';
                }
	    }
	}
	  public function Topproduct() {
	              if($this->input->post('active')){  
            $id= $this->input->post('id');
            $table=$this->input->post('active');
	            if($this->Common_model->tbl_activate($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Status Updated Successfully.</div>');
                    // redirect('admin/manage_template');
	            }
       }
        if($this->input->post('uorder')){  
            $id= $this->input->post('uorder');
            $table='templates';
            if($this->Common_model->orderupdate($id,$table)){
                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Template order updated successfully.</strong></div>');
                // redirect('admin/manage_template');
            }
       }
      if($this->input->post('deactive'))
      { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('deactive');
	            if($this->Common_model->tbl_deactivate($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Status Updated Successfully.</div>');
                    // redirect('admin/manage_template');
	                
	            }
      }
      if($this->input->post('delete'))
      { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('delete');
	            if($this->Common_model->tbl_delete($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Record deleted Successfully.</div>');
                    // redirect('admin/manage_template');
	                
	            }
      }
	      if($this->input->post('remove')){
	          $id = $this->input->post('remove');
                 $data = ['top_in_products'=>0, 'favourite'=>0];
                 if($this->Admin_model->featuredTemplates($id,$data)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button>Template is  Unfeatured.</div>');
                 } 
	      }
	      
	   //   $data["product"] = $this->Admin_model->featuredProductTemplates();
	   //   $this->load->view('admin/Topproduct',$data);
            $data["templates"] = $this->Admin_model->featuredProductTemplates();
            $this->load->view('admin/manage_template',$data);
            // $this->load->view('admin/Topproduct',$data);
	  }
	  public function TopCategory(){
	    if($this->input->post('active')){  
            $id= $this->input->post('id');
            $table=$this->input->post('active');
	            if($this->Common_model->tbl_activate($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Status Updated Successfully.</div>');
                    // redirect('admin/manage_template');
	            }
       }
        if($this->input->post('uorder')){  
            $id= $this->input->post('uorder');
            $table='templates';
            if($this->Common_model->orderupdate($id,$table)){
                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Template order updated successfully.</strong></div>');
                // redirect('admin/manage_template');
            }
       }
      if($this->input->post('deactive'))
      { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('deactive');
	            if($this->Common_model->tbl_deactivate($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Status Updated Successfully.</div>');
                    // redirect('admin/manage_template');
	                
	            }
      }
      if($this->input->post('delete'))
      { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('delete');
	            if($this->Common_model->tbl_delete($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Record deleted Successfully.</div>');
                    // redirect('admin/manage_template');
	                
	            }
      }
	      if($this->input->post('remove')){
	          $id = $this->input->post('remove');
                 $data = ['top_in_category'=>0, 'favourite'=>0];
                 if($this->Admin_model->featuredTemplates($id,$data)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button>Template is Unfeatured.</div>');
                 } 
	      }
	   //   $data["category"] = $this->Admin_model->featuredCategoryTemplates();
	   //   $this->load->view('admin/TopCategory',$data);
	        $data["templates"] = $this->Admin_model->featuredCategoryTemplates();
	        $this->load->view('admin/manage_template',$data);
	  }
	  function Topfavourite(){
	    if($this->input->post('active')){  
            $id= $this->input->post('id');
            $table=$this->input->post('active');
	            if($this->Common_model->tbl_activate($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Status Updated Successfully.</div>');
                    // redirect('admin/manage_template');
	            }
       }
        if($this->input->post('uorder')){  
            $id= $this->input->post('uorder');
            $table='templates';
            if($this->Common_model->orderupdate($id,$table)){
                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Template order updated successfully.</strong></div>');
                // redirect('admin/manage_template');
            }
       }
      if($this->input->post('deactive'))
      { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('deactive');
	            if($this->Common_model->tbl_deactivate($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Status Updated Successfully.</div>');
                    // redirect('admin/manage_template');
	                
	            }
      }
      if($this->input->post('delete'))
      { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('delete');
	            if($this->Common_model->tbl_delete($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Record deleted Successfully.</div>');
                    // redirect('admin/manage_template');
	                
	            }
      }
	    if($this->input->post('remove')){
	          $id = $this->input->post('remove');
                 $data = ['favourite'=>0];
                 if($this->Admin_model->featuredTemplates($id,$data)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button>Template is  Unfeatured.</div>');
                 } 
	      }
	   //   $data["favourite"] = $this->Admin_model->featuredFavouriteTemplates();
	   //   $this->load->view('admin/topfavourite',$data);
    	   $data["templates"] = $this->Admin_model->featuredFavouriteTemplates();
    	   $this->load->view('admin/manage_template',$data);
	  }

      function Nonfavourite() {
          @set_time_limit(30000000);
        if($this->input->post('active')){  
            $id= $this->input->post('id');
            $table=$this->input->post('active');
	            if($this->Common_model->tbl_activate($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Status Updated Successfully.</div>');
                    // redirect('admin/manage_template');
	            }
       }
        if($this->input->post('uorder')){  
            $id= $this->input->post('uorder');
            $table='templates';
            if($this->Common_model->orderupdate($id,$table)){
                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Template order updated successfully.</strong></div>');
                // redirect('admin/manage_template');
            }
       }
      if($this->input->post('deactive'))
      { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('deactive');
	            if($this->Common_model->tbl_deactivate($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Status Updated Successfully.</div>');
                    // redirect('admin/manage_template');
	                
	            }
      }
      if($this->input->post('delete'))
      { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('delete');
	            if($this->Common_model->tbl_delete($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> Record deleted Successfully.</div>');
                    // redirect('admin/manage_template');
	                
	            }
      }
    	   $data["templates"] = $this->Admin_model->nonfeaturedFavouriteTemplates();
    	   $data['no_remove'] = true;
    	   $this->load->view('admin/manage_template',$data);
	  }

	  public function bulk_invoice(){
	    $admin_id= $this->session->userdata('admin_id');
        
	    	$admin=$this->Admin_model->admin_profile($admin_id);
	    if($this->input->post('update')) 
      { 
	        if($this->Admin_model->update_profile($this->input->post('update')))
	           $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>Record Updated Successfully.</div>');
                                    redirect('admin/admin_profile');
      }
	    
	    $data['list']=$admin;
		$this->load->view('admin/bulk_invoice',$data);
	    	
	}
	
}
?>
