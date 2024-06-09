<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
 		if(!$this->session->userdata('user_id')):
 			$this->session->set_flashdata('userloginmessage', '<div class="alert alert-danger alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
            <button class="close" data-dismiss="alert" aria-label="Close"></button>Login first.</div>');
            redirect(base_url());
        endif;
	}
    public function dashboard()
	{   //user details update///
	    if($this->input->post('user_details')!=""){
	             $this->load->library('form_validation');
                 $this->form_validation->set_rules('name', 'Name', 'required');
                 $this->form_validation->set_rules('email', 'Email', 'required');
                //  $this->form_validation->set_rules('mobile', 'Mobile', 'required');
                 $this->form_validation->set_rules('city', 'City', 'required');
                 $this->form_validation->set_rules('address', 'Address', 'required');
                 $this->form_validation->set_rules('state', 'State', 'required');
                 $this->form_validation->set_rules('pincode', 'Pincode', 'required');
                if ($this->form_validation->run() == FALSE) {
                    $this->session->set_flashdata('user','<div class="alert alert-warning alert-dismissible fade show" role="alert"> Please enter correct details. </div>');
                    redirect('User/user_details');
                } else {
                    $name = $this->input->post('name');
                    $slug = url_title($name, 'dash', TRUE);
                    $data = array(
                        'user_fullname'=>$name,
                        // 'user_phone'=>$this->input->post('mobile'),
                        // 'user_email'=>$this->input->post('email'),
                        'pincode'=>$this->input->post('pincode'),
                        'house_no'=>$this->input->post('address'),
                        'state'=>$this->input->post('state'),
                        'city'=>$this->input->post('city')
                    );
                    $mobile = $this->input->post('mobile');
                    $userData = $this->User_model->userdata();
                    $mobile_rows = $this->db->get_where('users', array('user_phone' => $mobile))->num_rows();
                    if($userData->user_phone=="" && $mobile_rows==0)
                        $data['user_phone'] = $mobile;
                    if($userData->user_fullname!=$name)
                        $data['slug'] = validate_slug1($slug, "users");

                    if($this->User_model->userdataupdate($data)) {
                        $this->session->set_flashdata('user','<div class="alert alert-success alert-dismissible fade show" role="alert">
                            Details updated successfully.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>');
                        redirect('User/user_details');
                    } else {
                        $this->session->set_flashdata('user','<div class="alert alert-warning alert-dismissible fade show" role="alert">
                            Please enter correct details to update.
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>');
                        if(isset($_SESSION['ref'])){
                            redirect($_SESSION['ref']);
                            $this->session->unset_userdata('ref');
                        }else{
                         redirect('User/user_details');
                        }
                         }
                }
	     }
	    
	    $data['page']="dashboard";
	    $data["userdata"] = $this->User_model->userdata();
		$this->load->view('arteno/user/dashboard',$data);
	}
    public function dashboard1()
	{   //user details update///
	    if($this->input->post('user_details')!=""){
	             $this->load->library('form_validation');
                 $this->form_validation->set_rules('name', 'Name', 'required');
                 $this->form_validation->set_rules('email', 'Email', 'required');
                 $this->form_validation->set_rules('mobile', 'Mobile', 'required');
                 $this->form_validation->set_rules('city', 'City', 'required');
                 $this->form_validation->set_rules('address', 'Address', 'required');
                 $this->form_validation->set_rules('state', 'State', 'required');
                 $this->form_validation->set_rules('pincode', 'Pincode', 'required');
                if($this->form_validation->run() == FALSE) {
                    $this->session->set_flashdata('user','<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Please enter correct details.
                        </div>');
                    redirect($_SERVER['HTTP_REFERER']);
                } else {
                    $slug = url_title($this->input->post('name'), 'dash', TRUE);
                    
                     $data = array(
                         'user_fullname'=>$this->input->post('name'),
                        //  'user_phone'=>$this->input->post('mobile'),
                         'user_email'=>$this->input->post('email'),
                         'pincode'=>$this->input->post('pincode'),
                         'house_no'=>$this->input->post('address'),
                         'state'=>$this->input->post('state'),
                         'city'=>$this->input->post('city')
                         );
                         $data['slug'] =  validate_slug1($slug,"users");

                         if($this->User_model->userdataupdate($data)){
                             $this->session->set_flashdata('user','<div class="alert alert-success alert-dismissible fade show" role="alert">
                            Details updated successfully.
                        </div>');
                            redirect($_SERVER['HTTP_REFERER']);
                        }else{
                            $this->session->set_flashdata('user','<div class="alert alert-warning alert-dismissible fade show" role="alert">
                            Please enter correct details.
                        </div>');
                        if(isset($_SESSION['ref'])){
                            redirect($_SESSION['ref']);
                            $this->session->unset_userdata('ref');
                        } else {
                            redirect($_SERVER['HTTP_REFERER']);
                        }
                    }
                }
	        }

	    $data['page']="dashboard";
	    $data["userdata"] = $this->User_model->userdata();
		$this->load->view('user/dashboard1',$data);
	}
	public function user_details()
	{    
	    $data['page']="user_details";
		$this->load->view('arteno/user/dashboard',$data);
	}
	
	public function cancel_order($orderid){
        $request= $this->User_model->cancel_order($orderid);
        if($request=="add"){
            $this->session->set_flashdata('order_notify','<script>swal("Order cancellation request submitted successfully.",{
                icon: "success",
                button: false,
                timer: 2000,
            })</script>');
        }
        redirect($_SERVER['HTTP_REFERER']);
	}
	
	public function update_profile(){
	   if($this->input->post('update')){
	       $id=$this->session->userdata('user_id');
	       $this->Home_model->update_profile_image($id);
	       redirect($_SERVER['HTTP_REFERER']);
	   }
	}
	
	public function shipping_details()
	{    
	    if($this->input->post('save')!=""){
	      $this->load->library('form_validation');
                $this->form_validation->set_rules('city', 'City', 'required');
                $this->form_validation->set_rules('address', 'Address', 'required');
                $this->form_validation->set_rules('state', 'State', 'required');
                $this->form_validation->set_rules('pincode', 'Pincode', 'required');
                if ($this->form_validation->run() == FALSE)
                {       $this->session->set_flashdata('location','<script>swal("Please Enter Correct Details.",{
                          icon: "warning",
                          button: false,
                          timer: 1200,
                        })</script>');
                         redirect($_SERVER['HTTP_REFERER']);
                }
                else{
                     $data = array(
                         'u_id'=>$_SESSION['user_id'],
                         'pincode'=>$this->input->post('pincode'),
                         'house_no'=>$this->input->post('address'),
                         'state'=>$this->input->post('state'),
                         'city'=>$this->input->post('city')
                         );   
                       
                         if($this->User_model->addloaction($data)){
                             $this->session->set_flashdata('location','<script>swal("Shipping address added successfully.",{
                          icon: "success",
                          button: false,
                          timer: 1200,
                        })</script>');
                        redirect($_SERVER['HTTP_REFERER']);
                         }else{
                             $this->session->set_flashdata('location','<script>swal("Please enter correct details.",{
                          icon: "warning",
                          button: false,
                          timer: 1200,
                        })</script>');
                         redirect($_SERVER['HTTP_REFERER']);
                         }
                }
     	}  
	    if($this->input->post('update')!=""){
	        $id = $this->input->post('update');
	            $this->load->library('form_validation');
                $this->form_validation->set_rules('city', 'City', 'required');
                $this->form_validation->set_rules('address', 'Address', 'required');
                $this->form_validation->set_rules('state', 'State', 'required');
                $this->form_validation->set_rules('pincode', 'Pincode', 'required');
                if ($this->form_validation->run() == FALSE)
                {       $this->session->set_flashdata('location','<script>swal("Please enter correct details.",{
                          icon: "warning",
                          button: false,
                          timer: 1200,
                        })</script>');
                         redirect($_SERVER['HTTP_REFERER']);
                }
                else{
                     $data = array(
                         'u_id'=>$_SESSION['user_id'],
                         'pincode'=>$this->input->post('pincode'),
                         'house_no'=>$this->input->post('address'),
                         'state'=>$this->input->post('state'),
                         'city'=>$this->input->post('city')
                         );   
                         if($this->User_model->updateuserlocation($data,$id)){
                             $this->session->set_flashdata('location','<script>swal("Shipping address updated successfully",{
                          icon: "success",
                          button: false,
                          timer: 1200,
                        })</script>');
                        redirect($_SERVER['HTTP_REFERER']);
                         }else{
                             $this->session->set_flashdata('location','<script>swal("Please enter correct details.",{
                          icon: "warning",
                          button: false,
                          timer: 1200,
                        })</script>');
                         redirect($_SERVER['HTTP_REFERER']);
                         }
                }
	    }
	    $data['page']="shipping_details";
	    $data["location"] = $this->User_model->userlocation();
	    $this->load->view('arteno/user/dashboard',$data);
	}
	
	public function billing_details()
	{    
	    if($this->input->post('save')!=""){
	      $this->load->library('form_validation');
                $this->form_validation->set_rules('city', 'City', 'required');
                $this->form_validation->set_rules('address', 'Address', 'required');
                $this->form_validation->set_rules('state', 'State', 'required');
                $this->form_validation->set_rules('pincode', 'Pincode', 'required');
                if ($this->form_validation->run() == FALSE)
                {       $this->session->set_flashdata('billlocation','<script>swal("Please enter correct details.",{
                          icon: "warning",
                          button: false,
                          timer: 1200,
                        })</script>');
                         redirect($_SERVER['HTTP_REFERER']);
                }
                else{
                      $data = array(
                         'pincode'=>$this->input->post('pincode'),
                         'house_no'=>$this->input->post('address'),
                         'state'=>$this->input->post('state'),
                         'city'=>$this->input->post('city')
                         );   
                         if($this->User_model->userbillingaddress($data)){
                             $this->session->set_flashdata('billlocation','<script>swal("Billing address updated successfully.",{
                          icon: "success",
                          button: false,
                          timer: 1300,
                        })</script>');
                        redirect($_SERVER['HTTP_REFERER']);
                         }else{
                             $this->session->set_flashdata('billlocation','<script>swal("Please enter correct details.",{
                          icon: "warning",
                          button: false,
                          timer: 1200,
                        })</script>');
                         redirect($_SERVER['HTTP_REFERER']);
                         }
                }
     	}  
	   
	}
	//delete loaction
	public function deleteloaction($id){
	     if($this->User_model->deletedata($id,"user_location")){
                             $this->session->set_flashdata('location','<script>swal("Location removed successfully.",{
                          icon: "success",
                          button: false,
                          timer: 1200,
                        })</script>');
                        redirect(base_url('User/shipping_details'));
                         }else{
                             $this->session->set_flashdata('location','<script>swal("Please try again later.",{
                          icon: "warning",
                          button: false,
                          timer: 1200,
                        })</script>');
                         redirect(base_url('User/shipping_details'));
                         }
	}
	public function my_orders()
	{    
	    $data['page']="my_orders";
	    $data['myorder'] = $this->User_model->orderdata();
		$this->load->view('arteno/user/dashboard',$data);
	}
	public function order_details($id="")
	{    
	    $data['page']="order_details";
	    $data['order'] = $this->User_model->orderdata($id);
	    $data["order_details"] = $this->User_model-> orderdetails($id);
	    if(!$data['order'] || !$data["order_details"])
	        redirect(base_url('my_orders'));
		$data['orderId'] = $id;
		$this->load->view('arteno/user/dashboard',$data);
	}
	public function user_panel()
	{   
		$this->load->view('user/mobile_user_sidebar');
	}
	public function reset_password()
	{    
	    if($this->input->post('update')!=""){
	             $this->load->library('form_validation');
                 $this->form_validation->set_rules('password', 'Password', 'required');
                 $this->form_validation->set_rules('new_password', 'New password', 'required');
                if ($this->form_validation->run() == FALSE)
                {       $this->session->set_flashdata('message','<script>swal("Please Enter Correct Details.",{
                          icon: "warning",
                          button: false,
                          timer: 1200,
                        })</script>');
                         redirect('reset_password');
                }
                else{
                    $password= md5($this->input->post('password'));
                    $newpassword= md5($this->input->post('new_password'));
                    $userdata = $this->User_model->userdata();
                    if($userdata->user_password==$password){
                        $data = array(
                         'user_password'=>$newpassword
                         );   
                        if($this->User_model->userdataupdate($data)){
                            $this->session->set_flashdata('message','<script>swal("Password updated successfully.",{
                          icon: "success",
                          button: false,
                          timer: 1200,
                        })</script>');
                        redirect('reset_password');
                    }
                        else{
                        $this->session->set_flashdata('message','<script>swal("Please Enter Correct Details.",{
                          icon: "warning",
                          button: false,
                          timer: 1200,
                        })</script>');
                        redirect('reset_password');
                    }
                    }
                    else {
                        $this->session->set_flashdata('message','<script>swal("Please Enter Correct Details.",{
                          icon: "warning",
                          button: false,
                          timer: 1200,
                        })</script>');
                        redirect('reset_password');
                    }
                     
                }
	     }
	    $data['page']="reset_password";
		$this->load->view('arteno/user/dashboard',$data);
	}
}
