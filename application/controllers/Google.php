<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
   session_start();
class Google extends CI_Controller { 
   
    function __construct(){ 
        parent::__construct(); 
         
        // Load google oauth library 
        $this->load->library('google'); 
         $this->load->library('session'); 
         
        // Load user model 
        $this->load->model('google_model'); 
    } 
     
    public function index(){ 
        // // Redirect to profile page if the user already logged in 
        // if($this->session->userdata('loggedIn') == true){ 
        //     redirect('user_authentication/profile/'); 
        // } 
         
        if(isset($_GET['code'])){ 
             
            // Authenticate user with google 
            if($this->google->getAuthenticate()){ 
             
                // Get user info from google 
                $gpInfo = $this->google->getUserInfo(); 
                 
                // Preparing data for database insertion 
                $userData['id']         = $gpInfo['id']; 
                $userData['email']             = $gpInfo['email']; 
                $userID = $this->user->checkUser($userData); 
                 
                // Store the status and user profile info into session 
                $this->session->set_userdata('loggedIn', true); 
                $this->session->set_userdata('userData', $userData); 
                prinr_r($userID);
                die();
            } 
        }
         
        // Google authentication url 
        $data['loginURL'] = $this->google->loginURL(); 
         
        // Load google login view 
        $this->load->view('googleLogin',$data); 
    } 
     
    public function logout(){ 
        // Reset OAuth access token 
        $this->google->revokeToken(); 
         
        // Remove token and user data from the session 
        $this->session->unset_userdata('loggedIn'); 
        $this->session->unset_userdata('userData'); 
         
        // Destroy entire session data 
        $this->session->sess_destroy(); 
         
        // Redirect to login page 
        redirect('/user_authentication/'); 
    } 
     
}?>