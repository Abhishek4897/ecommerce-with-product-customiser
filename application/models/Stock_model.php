<?php 
/**
 * Sms Model
 */
class Stock_model extends CI_Model
{
	function __construct(){
		$this->load->database();
	}
	
	public function calculate_stock($p_id="", $color="", $size=""){
	 
	    $color_code = $this->db->select('color_code')->where('color', $color)->get('colors')->row();
	   
	    if(($size!="" || $size!=NULL) && $color!=""){
	       
	        $original_stock     = $this->db->select('qty')->where('product', $p_id)->where('size', $size)->where('color', $color_code->color_code)->get('stock')->row();
	    if(!empty($original_stock)){
		    $saled_stock        = $this->db->query("Select variations from order_products where (status='pending' or status='confirmed' or status='dispatched') and product_id ='$p_id' and (variations like ('%".$color."%')) and (variations like ('%".$size."%'))");
		    $stock              = $saled_stock->result();
		    $tot                = 0;
		    if(!empty($stock)){
		        foreach($stock as $s){
    		        $var = json_decode($s->variations);
                    $tot += (int)$var[2];
		        }
		    }
		    $available_stock = $original_stock->qty-$tot;
	    }
	    else{
	        $available_stock=0;
	    }
	    }
	    else{
	        if($color!=""){
		        $original_stock     = $this->db->select('qty')->where('product', $p_id)->where('color', $color_code->color_code)->get('stock')->row();
		        if(!empty($original_stock)){
        		    $saled_stock        = $this->db->query("Select variations from order_products where (status='pending' or status='confirmed' or status='dispatched') and product_id ='$p_id' and (variations like ('%".$color."%'))");
        		    $stock              = $saled_stock->result();
        		    $tot                = 0;
        		    if(!empty($stock)){
        		        foreach($stock as $s){
            		        $var = json_decode($s->variations);
                            $tot += (int)$var[1];
        		        }
        		    }
        		    $available_stock = $original_stock->qty-$tot;
    		    }
    		    else{
    		        $available_stock=0;
    		    }
	        }
	        else{
	            $original_stock     = $this->db->select('qty')->where('product', $p_id)->get('stock')->row();
		        if(!empty($original_stock)){
        		    $saled_stock        = $this->db->query("Select variations from order_products where (status='pending' or status='confirmed' or status='dispatched') and product_id ='$p_id'");
        		    $stock              = $saled_stock->result();
        		    $tot                = 0;
        		    if(!empty($stock)){
        		        foreach($stock as $s){
            		        $var = json_decode($s->variations);
                            $tot += (int)$var[1];
        		        }
        		    }
        		    $available_stock = $original_stock->qty-$tot;
    		    }
    		    else{
    		        $available_stock=0;
    		    }
	        }
	    }
	    
	    $available_stock = 750;//temp. added. 
	    return $available_stock;
	}

}