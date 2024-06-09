<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Designer extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
 		if(!$this->session->userdata('designer_id')):
 			$this->session->set_flashdata('userloginmessage', '<div class="alert alert-danger alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
            <button class="close" data-dismiss="alert" aria-label="Close">&times;</button>Login first.</div>');
            redirect(base_url());
        endif;
	}
	public function dashboard($page=''){
	    $data['page']=$page;
	    $data['page_name'] = "designer";
	    $this->load->view('designer/dashboard',$data);
	}
	public function mobile_panel(){
	     $data['page_name'] = "designer";
	    $this->load->view('designer/mobile_panel',$data);
	}
	public function e_shop(){
	     if(isset($_SESSION['designer_id'])){
	        $id =  $_SESSION['designer_id'];
	    $offset = $this->input->post('offset');
	     $data['store'] = $this->Designer_model->storeproducts($id,$offset);
	     
	    }
	     $data['page_name'] = "designer";
	    $this->load->view('arteno/designer/liveshop',$data);
	}

	
	public function account_details()
	{    
	   // $data['page']="account_details";
	    $d_id=$this->session->userdata('designer_id');
	    if($this->input->post('update'))
	    {         
	            $this->Designer_model->manage_payment_details($d_id);
	            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>Account details updated successfully.</div>');
             redirect(base_url('account_details'));
         }
	    $data['payment']=$this->Designer_model->payment_details($d_id);
	   $d_id=$this->session->userdata('designer_id');
       $data['designer']=designer_profile($d_id);
        $data['page_name'] = "designer";
	$this->load->view('arteno/designer/personal_info',$data);
	}
	public function start_design(){
	    $data['page']='start_design';
	     $data['page_name'] = "designer";
	    $this->load->view('arteno/designer/designer_dashboard',$data);
	}
	public function my_design(){
	     $d_id=$this->session->userdata('designer_id');
	     $data['products']=$this->Home_model->products();
	     if($this->input->post('search'))
	    {         
          $p_id=$this->input->post('search');
          $data['p_id']=$p_id;
            $data['design']=design($d_id,$p_id);
        } else {
	    $data['design']=design($d_id);
        }
         $data['page_name'] = "designer";
	    $this->load->view('arteno/designer/mydesigns', $data);
	}

	public function sortable_design(){
	     $d_id=$this->session->userdata('designer_id');
	     $data['products']=$this->Home_model->products();
	     if($this->input->post('search'))
	    {         
          $p_id=$this->input->post('search');
          $data['p_id']=$p_id;
            $data['design']=design($d_id,$p_id);
        } else {
	    $data['design']=design($d_id);
        }
         $data['page_name'] = "designer";
	    $this->load->view('arteno/designer/sortable_design', $data);
	}

	public function save_mysortable_design(){
        $d_id = $this->session->userdata('designer_id');
        $design_orders = json_decode($_POST['design_order']);//["design_order33", "design_order36", "design_order37"];
        foreach($design_orders as $key => $design_order):
            $design_id = explode("design_order", $design_order)[1];
            $this->db->update("templates", ["design_order" => $key+1], ["id" => $design_id, "designed_by" => $d_id]);
            //UPDATE `templates` SET `design_order` = '1' WHERE `templates`.`id` = 37;
        endforeach;
        //print_r(json_decode($_POST['design_order']));
        echo "success";
        return true;
	}

	///delete  MY design//
	function delete_design($id){
	  $this->db->where('id', $id);
      if($this->db->delete('templates')){
          $this->session->set_flashdata('design','<script> swal({
            text:"Design deleted !",
            icon:"success",
            button:false,
            timer:1500
          })</script>');
          redirect(base_url('my_design'));
      }else{
          $this->session->set_flashdata('design','<script> swal({
            text:"Please try again !",
            icon:"error",
            button:false,
            timer:1500
          })</script>');
          redirect(base_url('my_design'));
      } 
	}
	public function my_store(){
	    $data['page']='my_store';
	     $data['page_name'] = "designer";
	    $this->load->view('designer/dashboard',$data);
	}
	public function payouts(){
	    $data['page']='payouts';
	     $data['page_name']='payout';
	      $data['page_name'] = "designer";
	    $this->load->view('arteno/designer/payouts',$data);
	}
	public function total_payouts(){
	    $data['page']='payouts';
	     $data['page_name']='payout';
	      $data['page_name'] = "designer";
	    $this->load->view('arteno/designer/total_payouts',$data);
	}
	public function add_request(){
	    if($this->Designer_model->add_payout()){
	        redirect(base_url('wallet'));
	    }
	}
	public function reset_password()
	{    
	    if($this->input->post('update')!=""){
	             $this->load->library('form_validation');
                 $this->form_validation->set_rules('password', 'Password', 'required');
                 $this->form_validation->set_rules('new_password', 'New password', 'required');
                if ($this->form_validation->run() == FALSE)
                {       $this->session->set_flashdata('message','<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Please Enter Correct Details.</div>');
                         redirect('update_password');
                }
                else{
                    $password= md5($this->input->post('password'));
                    $newpassword= md5($this->input->post('new_password'));
                    $userdata = $this->Designer_model->designer_profile($this->session->userdata('designer_id'));
                    if($userdata->user_password==$password){
                        $data = array(
                         'user_password'=>$newpassword
                         ); 
                        
                        if($this->Designer_model->designerdataupdate($data)){
                            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
                            Password updated successfully!.</div>');
                        redirect('update_password');
                    }
                        else{
                        $this->session->set_flashdata('message','<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Please Enter Correct Details.</div>');
                        redirect('update_password');
                    }
                    }
                    else {
                        $this->session->set_flashdata('message','<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Please Enter Correct Details.</div>');
                        redirect('update_password');
                    }
                     
                }
	     }
	    $data['page']="reset_password";
		$this->load->view('arteno/designer/update_password',$data);
	}
	
	////store data//////
	function storedata(){
	    if(isset($_SESSION['designer_id'])){
	        $id =  $_SESSION['designer_id'];
	    $offset = $this->input->post('offset');
	     $data = $this->Designer_model->storeproducts($id,$offset);
	     echo json_encode($data);
	    }
	}
	function active($id){
	    $data =['active'=>1];
	    if($this->Designer_model->updatestatus($id,$data)){
	        $this->session->set_flashdata('infoactive',"Your design is published.");
	        redirect(base_url('my_design'));
	    }
	}
	
	function deactive($id){
	    $data =['active'=>0];
	    if($this->Designer_model->updatestatus($id,$data)){
	        $this->session->set_flashdata('infoactive',"Designed is unpublished");
	    
	        redirect(base_url('my_design'));
	    }
	}
	
	//'update profile picture'
	function update_picture(){
	    if($this->input->post('update')){
	       $id=$this->session->userdata('designer_id');
	       $this->Home_model->update_profile_image($id);
	       redirect($_SERVER['HTTP_REFERER']);
	   }
	}
	
	function update_cover(){
	 $d_id= $this->session->userdata('designer_id');
	  if(isset($_FILES['cover']) && $_FILES['cover']['name']!=''){
                move_uploaded_file($_FILES['cover']['tmp_name'], 'uploads/users/designer_cover-'.time().$id.'.jpg');
                $data['cover_image']     =       base_url().'uploads/users/designer_cover-'.time().$id.'.jpg';
            }
            $this->db->where('id', $d_id);
            $this->db->update('users', $data);
            $current = $_SERVER['HTTP_REFERER'];
            redirect($current);
	}
	
// 	editor publish templates start
    public function publish_cart_ajax()
	{
        $data = $this->input->post('data');
        $designed_side = $this->input->post('designed_side');
        $total_side = $this->input->post('total_side');
        $sides = ["front", "back"];
        foreach($data as $key => $ndata) {
            if(!isset(json_decode(urldecode($ndata))->stages->lumise)) continue;
            if($total_side==1)
                $side = $designed_side;
            else
                $side = $sides[$key];
            $items_cart = json_decode(urldecode($ndata))->stages->lumise->data->screenshot;
            $color = json_decode(urldecode($ndata))->stages->lumise->data->product_color;
            $screenshot = json_decode(urldecode($ndata))->stages->lumise->screenshot;
            $name = explode('.', end(explode('/', json_decode(urldecode($ndata))->stages->lumise->image)))[0];
            $cart_data[$side] = array(
                'items' => $items_cart,
                'screenshot' => $screenshot,
                'data'  => $ndata,
                'name' => $name,
                'total_side' => $total_side,
                'designed_side' => $designed_side,
                'color' => $color
            );
        }
        $this->session->set_userdata('designer_cart', $cart_data);
        return true;
	}

    public function publish($product_base) {
        if(!$this->session->userdata('designer_cart'))
            redirect(base_url('my_design'));
        // print_r($this->session->userdata('designer_cart'));exit;
	    $data['categories'] = $this->db->where('type','templates')->where('active',1)->get('categories')->result();
	    $data['product_base']=$product_base;
	    if($this->input->post('publish_template')){
	        $d_id=$this->session->userdata('designer_id');
            $this->Designer_model->publish_template($d_id,$product_base);
            // $this->session->unset_userdata('designer_cart');
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>Design Added Successfully.</div>');
            redirect(base_url('my_design'));
	    }
		$this->load->view('arteno/designer/publish', $data);
	}
	public function count_order(){
        $d_id=$this->session->userdata('designer_id');
        $data= $this->Designer_model->total_order($d_id);
        // print_r($data);
        // exit;
        return $data;
	}
	
	public function wallet(){
	    $data['page']='wallet';
	    $this->load->view('arteno/designer/wallet',$data);
	}
	
	public function withdraw_amount() {
        $data['page']='withdraw_amount';
        $d_id=$this->session->userdata('designer_id');
        $data['payment']=$this->Designer_model->payment_details($d_id);
        $data['designer']=designer_profile($d_id);
        $this->load->view('arteno/designer/withdraw_amount',$data);
	}
	
	public function total_orders(){
	    $data['page']='total_orders';
	    $data['page_name']='payout';
	    $this->load->view('arteno/designer/total_orders',$data);
	}
	public function update_template() {
	    if($this->input->post('submitbtn')){
            $this->Designer_model->update_template();
            // $this->session->unset_userdata('designer_cart');
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br>Design Updated Successfully.</div>');
            redirect(base_url('my_design'));
	    }
	}
	
	
}
