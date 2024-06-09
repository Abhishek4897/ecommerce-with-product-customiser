<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    // Log in Admin
    
    public function __construct()
        {
            parent::__construct();
            $this->load->helper('sms_helper');
            $this->load->helper('logo_helper');
        }
	public function index()
	{
        $data['title'] = 'Admin Login';
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() === FALSE){
		    $this->session->set_flashdata('danger', validation_errors());
			$this->load->view('admin/login', $data);
		
		}else{
		    
			// get email and Encrypt Password
			$email = $this->input->post('email');
			$encrypt_password = md5($this->input->post('password'));
			$user_id = $this->Admin_model->adminLogin($email, $encrypt_password);
           
			if ($user_id) {
			   redirect('login/verify_mobile');
			 
			} else {
				$this->session->set_flashdata('danger', 'Login Credentials is invalid!');
				$this->load->view('admin/login', $data);
				//redirect('login');
			}
		}
	}
	
	public function verify_mobile()
	{ 
      if($this->input->post('submit'))
        {
			// get email and Encrypt Password
			$mobile_id = $this->input->post('mobile');
			$mobile_details = $this->Admin_model->admin_mobilebyid($mobile_id);
			$mobile=$mobile_details->mobile_no;
			$otp = '111111';//($this->input->post('otp'))?$this->input->post('otp'):rand(100000, 999999);
			$user_id = $this->Admin_model->mobile_verify($mobile);
		    $mobile_data=count($user_id);
			if ($mobile_data==1) {
                    $check_otp=$this->db->query("select * from tblOtp where mobile='".$mobile."' and type='a'");
                    if($check_otp->num_rows()>0) {
                        $q2=$this->db->query("update tblOtp set otp='".$otp."' where mobile='".$mobile."' and type='a'");
                    } else {
                        $q2=$this->db->query("insert into tblOtp (otp,type,mobile) values ('".$otp."','a','".$mobile."') ");
                    }
                    //$q2=$this->db->query("insert into tblOtp (otp,user_id,type) values ('$otp','$id','f') ");
                    if($q2) {
                        $msg = "Your Arteno One Time Password (OTP) is {$otp}. Don't share it with anyone. We don't call/email you to verify OTP. OTP is valid for 15 mins.";
                        $data["responce"] = true;
                        @send_sms($mobile, $msg,'verify_otp');
                        redirect('Login/verify_OTP/'.$mobile);
                    } else {
                        return false;
                    }
			} else {
				$this->session->set_flashdata('danger', 'Login Credentials is invalid!');
				redirect('login/index');
				//redirect('login');
			}
		}
	     
	    $data['mobile'] = $this->Admin_model->admin_mobile();
		$this->load->view('admin/login_withmobile', $data);
	}
	
	public function verify_OTP($mobile)
	{
	    $data['mobile']=$mobile;
	    if($this->input->post('otp_verify'))
	    {
	         $otp = $this->input->post('otp');
	        
	          $check_otp=$this->db->query("select * from tblOtp where mobile='$mobile' and type='a'");
                                if($check_otp->num_rows()>0)
                                {
                                   
                                    $rw= $check_otp->row();
                                    $db_otp=$rw->otp;
                                    
                                     
                                    if($otp==$db_otp)
                                    {
                                        
                                        
                 $user_id = $this->Admin_model->login_admin();
              //	Create Session
				$user_data = array(
					'admin_id' => $user_id->id,
	 				'email' => $user_id->email,
	 				'login' => true
			 	);
			 	$this->session->set_userdata($user_data);

				//Set Message
				$this->session->set_flashdata('success', 'Welcome to administrator Dashboard.');
				redirect('admin/index');
                                    }
                                     
	                             }
	                             
	    }
	   $this->load->view('admin/verify_otp',$data);      
	}
	
	public function resend_otp($mobile)
	{     
	    $otp = ($this->input->post('otp'))?$this->input->post('otp'):rand(000000, 999999);
			
    	           $check_otp=$this->db->query("select * from tblOtp where mobile='".$mobile."' and type='a'");
                                if($check_otp->num_rows()>0)
                                {
                                $q2=$this->db->query("update tblOtp set otp='".$otp."' where mobile='".$mobile."' and type='a'");
                                    
                                }
                                else
                                {
                                $q2=$this->db->query("insert into tblOtp (otp,type,mobile) values ('".$otp."','a','".$mobile."') ");
                                    
                                }
                                //$q2=$this->db->query("insert into tblOtp (otp,user_id,type) values ('$otp','$id','f') ");
                                if($q2)
                                {
                                $msg = "Your Arteno One Time Password (OTP) is {$otp}. Don't share it with anyone. We don't call/email you to verify OTP. OTP is valid for 15 mins.";
                                $data["responce"] = true;
                                send_sms($mobile, $msg,'resend_otp');
                                
                                redirect('Login/verify_OTP/'.$mobile);
                                }
                                else
                                {
                                     return false;
                                }
			
	}

	public function logout()
	{
		// unset user data
		$this->session->unset_userdata('admin_data');
		$this->session->unset_userdata('login');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('admin_id');

		//Set Message
		$this->session->set_flashdata('danger', 'You are logged out.');
	    redirect('login/index');
// 		redirect(base_url("/"));
	}

	public function forgot_pass(){
		$this->load->view('admin/forgot_pass');
	}
	public function designer_logout()
	{
		// unset user data
		$this->session->unset_userdata('designer_login');
		$this->session->unset_userdata('designer_email');
		$this->session->unset_userdata('designer_id');

		//Set Message
		$this->session->set_flashdata('danger', 'You are logged out.');
	    redirect('Home/login_designer');
	}

	public function inventory_login()
	{
        $data['title'] = 'Administrator Login';
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() === FALSE){
		    $this->session->set_flashdata('danger', validation_errors());
			$this->load->view('ims/login', $data);
		
		}else{
			// get email and Encrypt Password
			$email = $this->input->post('email');
			$encrypt_password = md5($this->input->post('password'));
			$user_id = $this->Ims_model->adminLogin($email, $encrypt_password);
			$account_id = $this->Ims_model->accountantLogin($email, $encrypt_password);

			if ($user_id) {// && $user_id->role_id == 1
				//Create Session
				$user_data = array(
					'admin_id' => $user_id->id,
	 				'login' => true
			 	);
			 	$this->session->set_userdata($user_data);

				//Set Message
				$this->session->set_flashdata('success', 'Welcome to administrator Dashboard.');
				redirect('ims/index');
			}
			else if($account_id){
			    $user_data = array(
					'admin_id' => $account_id->id,
	 				'login' => true
			 	);
			 	$this->session->set_userdata($user_data);

				//Set Message
				$this->session->set_flashdata('success', 'Welcome to administrator Dashboard.');
				redirect('ims/index');
			}
			else {
				$this->session->set_flashdata('danger', 'Login Credentials is invalid!');
				$this->load->view('ims/login', $data);
				//redirect('login');
			}
		}
	}

	public function inventory_logout()
	{
		// unset user data
		$this->session->unset_userdata('admin_data');
		$this->session->unset_userdata('login');
		$this->session->unset_userdata('user_id');

		//Set Message
		$this->session->set_flashdata('danger', 'You are logged out.');
	redirect('login/inventory_login');
// 		redirect(base_url("/"));
	}
}