<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
 		if(!$this->session->userdata('admin_id')){
 		redirect(base_url("Login/index"));
 		}
 		
	}
    public function manage_slider(){
        if($this->input->post('delete'))
         { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('delete');
	            if($this->Common_model->delete($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close"></button><strong>Well done!</strong><br> Record deleted Successfully.</div>');
                                    redirect('Slider/manage_slider');
	                
	            }
      }
      if($this->input->post('active'))
         {  
                 $id= $this->input->post('id');
                 $table=$this->input->post('active');
	            if($this->Common_model->activate($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close"></button><strong>Well done!</strong><br> Status Updated Successfully.</div>');
                                    redirect('Slider/manage_slider');
	                
	            }
      }
      if($this->input->post('deactive'))
         { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('deactive');
	            if($this->Common_model->deactivate($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close"></button><strong>Well done!</strong><br> Status Updated Successfully.</div>');
                                    redirect('Slider/manage_slider');
	                
	            }
      }
        $data['sliders']= $this->Slider_model->slider();
		$this->load->view('admin/slider',$data);
	}
	

	public function add_slider()
	{
	    if($this->input->post('add_slider')){
	        $this->Slider_model->add_slider();
	        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
            <button class="close" data-dismiss="alert" aria-label="Close"></button><strong>Well done!</strong><br>Slider added successfully.</div>');
            redirect('slider/manage_slider');
	    }
		$this->load->view('admin/add_slider');
	}
	
	public function update_slider($id)
	{
	    if($this->input->post('update_slider')){
	        $this->Slider_model->update_slider($this->input->post('update_slider'));
	        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
            <button class="close" data-dismiss="alert" aria-label="Close"></button><strong>Well done!</strong><br>Slider Updated successfully.</div>');
            redirect('slider/manage_slider');
	    }
	    $data['slider']= $this->Slider_model->slider($id);
		$this->load->view('admin/update_slider',$data);
	}
	
	
	public function manage_banner(){
        if($this->input->post('delete'))
         { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('delete');
	            if($this->Common_model->delete($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close"></button><strong>Well done!</strong><br> Record deleted Successfully.</div>');
                                    redirect('Slider/manage_banner');
	                
	            }
      }
      if($this->input->post('active'))
         {  
                 $id= $this->input->post('id');
                 $table=$this->input->post('active');
	            if($this->Common_model->activate($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close"></button><strong>Well done!</strong><br> Status Updated Successfully.</div>');
                                    redirect('Slider/manage_banner');
	                
	            }
      }
      if($this->input->post('deactive'))
         { 
                 $id= $this->input->post('id');
                 $table=$this->input->post('deactive');
	            if($this->Common_model->deactivate($id, $table)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close"></button><strong>Well done!</strong><br> Status Updated Successfully.</div>');
                                    redirect('Slider/manage_banner');
	                
	            }
      }
        $data['sliders']= $this->Slider_model->banner();
		$this->load->view('admin/banner',$data);
	}
	

	public function add_banner()
	{
	    if($this->input->post('add_banner')){
	        $this->Slider_model->add_banner();
	        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
            <button class="close" data-dismiss="alert" aria-label="Close"></button><strong>Well done!</strong><br>Banner added successfully.</div>');
            redirect('slider/manage_banner');
	    }
		$this->load->view('admin/add_banner');
	}
	
	public function update_banner($id)
	{
	    if($this->input->post('update_banner')){
	        $this->Slider_model->update_banner($this->input->post('update_banner'));
	        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
            <button class="close" data-dismiss="alert" aria-label="Close"></button><strong>Well done!</strong><br>Banner Updated successfully.</div>');
            redirect('slider/manage_banner');
	    }
	    $data['slider']= $this->Slider_model->banner($id);
		$this->load->view('admin/update_banner',$data);
	}

}
?>
