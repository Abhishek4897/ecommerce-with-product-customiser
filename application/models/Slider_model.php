<?php 

    class Slider_model extends CI_Model{        
        public function add_slider(){
                
            $data['name']              =   $this->input->post('name');
            $data['url']        =   $this->input->post('url');
            $data['image']         =   base_url().'uploads/no_image.jpg';
            $data['status']        =   1;          
            
            $this->db->insert('slider', $data);
            $insert_id = $this->db->insert_id();
            if(isset($_FILES['image']) && $_FILES['image']['name']!=''){
                move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/sliders/sliders-'.$insert_id.'.jpg');
                $data['image']     =       base_url().'uploads/sliders/sliders-'.$insert_id.'.jpg';
            }
            $this->db->where('id', $insert_id);
            $this->db->update('slider', $data);
            
        	return $ref;
            
        }
        public function update_slider($id){
            
            $data['name']              =   $this->input->post('name');
            $data['url']        =   $this->input->post('url');
          if(isset($_FILES['image']) && $_FILES['image']['name']!=''){
                move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/sliders/sliders-'.time().$id.'.jpg');
                $data['image']     =       base_url().'uploads/sliders/sliders-'.time().$id.'.jpg';
            }
            $this->db->where('id', $id);
            $this->db->update('slider', $data);
            
        }
        
        public function slider($id=FALSE){
                if($id){
                $q = $this->db->query("Select * from slider where id= '$id'");
                return $q->row();
            }else{
                $q = $this->db->query("Select * from slider where status!= 2");
                return $q->result();
            }
        }
        
        public function add_banner(){
                $title= $this->input->post('name');
            $query = $this->db->get_where('banner', array('name' => $title));
            $count = $query->num_rows();
            if ($count === 0) {
            $data['name']              =   $this->input->post('name');
            $data['url']        =   $this->input->post('url');
            $data['image']         =   base_url().'uploads/no_image.jpg';
            $data['status']        =   1;          
            
            $this->db->insert('banner', $data);
            $insert_id = $this->db->insert_id();
            if(isset($_FILES['image']) && $_FILES['image']['name']!=''){
                move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/sliders/banner-'.$insert_id.'.jpg');
                $data['image']     =       base_url().'uploads/sliders/banner-'.$insert_id.'.jpg';
            }
            $this->db->where('id', $insert_id);
            $this->db->update('banner', $data);
            }
            else{
              $ref= "add";
        	    $this->session->set_flashdata('fail', 'Banner Name already Exist.');
        	}
        	return $ref;
            
        }
        public function update_banner($id){
            
            $data['name']              =   $this->input->post('name');
            $data['url']        =   $this->input->post('url');
          if(isset($_FILES['image']) && $_FILES['image']['name']!=''){
                move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/sliders/banner-'.time().$id.'.jpg');
                $data['image']     =       base_url().'uploads/sliders/banner-'.time().$id.'.jpg';
            }
            $this->db->where('id', $id);
            $this->db->update('banner', $data);
            
        }
        
        public function banner($id=FALSE){
                if($id){
                $q = $this->db->query("Select * from banner where id= '$id'");
                return $q->row();
            }else{
                $q = $this->db->query("Select * from banner where status!= 2");
                return $q->result();
            }
        }
       
    }
?>