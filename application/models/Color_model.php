<?php 
/**
 * Sms Model
 */
class Color_model extends CI_Model
{
	function __construct(){
		$this->load->database();
	}
	
	public function getColor($color_code){
	    return $this->db->select('color')->where('color_code', $color_code)->get('colors')->row();
	}

}