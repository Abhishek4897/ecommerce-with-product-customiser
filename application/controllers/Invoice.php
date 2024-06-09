<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
        $this->load->library('pdf');
        $this->load->helper('logo_helper');
        $admin_id = $this->session->userdata("admin_id");
        $user_id = $this->session->userdata('user_id');
        if(!$user_id):
 			$this->session->set_flashdata('userloginmessage', '<div class="alert alert-danger alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
            <button class="close" data-dismiss="alert" aria-label="Close"></button>Login first.</div>');
            if(!$admin_id)
                redirect(base_url());
        endif;
	}
    
    public function generate($id) {
	    $data['orderlists']=$this->Admin_model->order_details($id);
        // $orders=$this->Admin_model->order_details($id);
        $orders = $data['orderlists'];
        $data['user']=$this->Admin_model->list_users($orders->user_id);
        $data['add']=$this->Admin_model->del_address($orders->location_id);

        $morderid=$orders->id;
        
        $neworder=$this->Admin_model->orderdata($morderid);
        $data['myorders']=$neworder;
        $this->pdfdetails($id);
// 		$this->load->view('admin/invoices',$data);
	}
	public function pdfdetails($order_id) {
	    $site_setting=$this->db->where('id',1)->get('invoice-details')->row();
	    $orderlists=$this->Admin_model->order_details($order_id);
	    $invoice_id=$this->Admin_model->get_invoiceID($order_id);
        // $orders=$this->Admin_model->order_details($order_id);
        $orders = $orderlists;
        $user=$this->Admin_model->list_users($orders->user_id);
        $add=$this->Admin_model->del_address($orders->location_id);
        
        $admin_id = $this->session->userdata("admin_id");
        $user_id = $this->session->userdata('user_id');
        if(!$admin_id):
            if($user_id!=$orders->user_id)
                redirect(base_url());
        endif;
         $morderid=$orders->id;

         $neworder=$this->Admin_model->orderdata($morderid);
         $myorders=$neworder;
         $shipping_charge_gst_act = 0;
         $base_state = "Haryana";
         $user_state = $add->state;
         if($orderlists->is_shipping=='1')
            $user_state = $user->state;
        //  if($add->state==$base_state)
         if($user_state==$base_state)
            $user_gst = "UGST";
         else
            $user_gst = "IGST";
$data = file_get_contents($site_setting->invoicelogo);
$base_image = 'data:image/;base64,' . base64_encode($data);
   $this->load->library('pdf');
   $invoice_date = ($orderlists->dispatch_date==NULL)?'':date("d-M-Y", strtotime($orderlists->dispatch_date));
  
   $html_content ='<table  class="table" cellspacing="0" width="100%" style="width:100%background:#fff;" border="1">
                                            
                                                <tr>
                                                    <th colspan="16" class="text-center"> <center><img src="'.$base_image.'" alt="" style="height:90px;"></center>
                                                    </th>
                                                    </tr>
                                                   
                                                    

                                           <tbody>
                                           <tr border="0">
                                                  <td  colspan="16" style="border-right:0px;"><center><strong> Tax invoice</strong></center></td>
                                                 
                                                 </tr>

                                                <tr border="0">
                                                
                                                <td  colspan="8" style="border-right:0px;">
                                                   <strong>  &emsp; Sold By</strong>
                                                                    <br/>
                                                    <strong>'.$site_setting->cname.'</strong><br><span>'.$site_setting->caddress.'<br> Mobile No: '.$site_setting->cmobile.'<br>Email ID: '.$site_setting->cemail.'</span><br>GSTIN: '.$site_setting->gst_no.'</span><br>PAN : '.$site_setting->pan_no.'</span>
                                                                 </td>
                                                    <td  colspan="8" style="border-right:0px;">';
                                                    if($invoice_id){
                                                   $html_content .= '<strong> Invoice No. '.$site_setting->order_prefix.''.$invoice_id.'</strong>
                                                                     <br>'; }
                                                              $html_content .= ' <strong> Order Id : '.$site_setting->order_prefix.''.$orderlists->id.'</strong>
                                                                <br />

                                                                <strong>Order Date : '.date("d-M-Y", strtotime($orderlists->created)).'</strong>
                                                                
                                                                <br />
                                                                <strong>Invoice Date : '.$invoice_date.'</strong>
                                                                
                                                                <br />
                                                         <strong>Payment method :  '.strtoupper($orderlists->payment).'</strong><br>';
                                                         if($orderlists->payment=='cod' && $orderlists->cod_charge>0){
                                                            $html_content .= '<strong>COD Charge : Rs '.$orderlists->cod_charge.'</strong><br/>';
                                                         }
                                                         $html_content .= '<strong>Currency : INR</strong>
                                                                    
                                                                 </td>
                                                                
                                                           
                                                </tr>
                                                
                                                 <tr border="0">
                                                  <td  colspan="8" style="border-right:0px;"><center><strong> Billing  Address</strong></center></td>
                                                  <td  colspan="8" style="border-right:0px;"><center><strong>Shipping  Address</strong></center></td>
                                                 </tr>
                                                <tr border="0">
                                                    <td colspan="8" style="border-right:0px;">
                                                        <strong>'.ucwords($user->user_fullname).' <br />
                                                        '.$user->house_no.',<br />
                                                        '.$user->city.', '.$user->state.'<br />
                                                        INDIA - '.$user->pincode.' <br />
                                                        '.$user->user_email.' <br/>
                                                        Contact : '.$user->user_phone.'</strong>
                                                    </td>';
                                                    if($orderlists->is_shipping=='1'){
                                                    $html_content .= ' <td colspan="8" style="border-right:0px;">
                                                        <strong>'.ucwords($user->user_fullname).' <br />
                                                        '.$user->house_no.',<br />
                                                        '.$user->city.', '.$user->state.'<br />
                                                        INDIA - '.$user->pincode.' <br />
                                                        '.$user->user_email.' <br/>
                                                        Contact : '.$user->user_phone.'</strong>
                                                    </td>';
                                                    } else{
                                                         $html_content .= '
                                                         <td colspan="8" style="border-right:0px;">
                                                        <strong>'.ucwords($user->user_fullname).' <br />
                                                        '.$add->house_no.',<br />
                                                        '.$add->city.', '.$add->state.'<br />
                                                        INDIA - '.$add->pincode.' <br />
                                                        '.$user->user_email.' <br/>
                                                        Contact : '.$user->user_phone.'</strong>
                                                    </td>';
                                                    }
                                                $html_content .= ' </tr>
                                                 <tr>
            <th style="text-align:center" rowspan="2">Sr No.  </th>
            <th style="text-align:center" rowspan="2">Category </th>
            <th style="text-align:center" rowspan="2">HSN</th>
            <th style="text-align:center" rowspan="2">Size </th>
            <th style="text-align:center" rowspan="2">QTY</th>
            <th style="text-align:center" rowspan="2">Unit Price</th>
            <th style="text-align:center" rowspan="2">Discount</th>
            <th style="text-align:center" rowspan="2">Designer Charge</th>
            <th style="text-align:center" rowspan="2">Taxable value </th>
            <th style="text-align:center" style="text-align:center;" colspan="2">CGST</th>
            <th style="text-align:center" style="text-align:center;" colspan="2">SGST/UGST</th>
            <th style="text-align:center" style="text-align:center;" colspan="2">IGST</th>
            <th style="text-align:center" rowspan="2">Total</th>
            
        </tr>
        <tr>
            <th style="text-align:center">Rate</th>
            <th style="text-align:center">Amt</th>
            <th style="text-align:center">Rate</th>
            <th style="text-align:center">Amt</th>
            <th style="text-align:center">Rate</th>
            <th style="text-align:center">Amt</th>
        </tr>';
        $i=1;
                                                 $total_designer_charge=0;
                                            $product_price=0;
                                             $total=0;
                                             $total_shipping=$orderlists->shipping_charge + $orderlists->cod_charge;
                                             $shipping_charge = $orderlists->shipping_charge;
                                    
                                                foreach($myorders as $pro):
                                                    $designer_charge= $pro->total_price/$pro->qty - $pro->product_price;
                                                    $total_designer_charge=$total_designer_charge + $designer_charge;
                                                $variation= json_decode($pro->variations);
                                                 $this->db->where('id',$pro->product_id);
                                             $pr_details = $this->db->get('products');
                                             $product_data= $pr_details->row();
                                                 $this->db->where('id',1);
                                             $q = $this->db->get('invoice-details');
                                             $setting_data= $q->row();
                                             $products_gst=json_decode($setting_data->gstp);
                                             $pro_duct=$products_gst[1];
                                             foreach($products_gst[0] as $key=>$p_id){
                                                 if($pro->product_id== $p_id){
                                                     $gst=$pro_duct[$key];
                                                 }
                                             }
                                             $taxable_value = $pro->total_price;
                                             $ugst = $gst/2;
                                             $shipping_charge_gst = $shipping_charge_gst_act;
                                             $shipping_charge_ugst = $shipping_charge_gst/2;
                                             if($user_gst=="IGST"):
                                                $shipping_charge_ugst = 0;
                                                $ugst = 0; 
                                             else:
                                                $shipping_charge_gst = 0;
                                                $gst = 0;
                                             endif;
                                             $gst_price = ($taxable_value) * $gst /100;
                                             $ugst_price = ($taxable_value) * $ugst /100;
                                             $payable_shipping_charge = $shipping_charge*$shipping_charge_gst/100;
                                             $payable_shipping_charge_u = $shipping_charge*$shipping_charge_ugst/100;
                                             
                                             $payable_cod_charge = $orderlists->cod_charge*$shipping_charge_gst/100;
                                             $payable_cod_charge_u = $orderlists->cod_charge*$shipping_charge_ugst/100;

                                             $hsn = $product_data->hsn;
                                             $discount_ret = 0;
                                             if($variation[0]!=null):
                                                 $variation[0] = (strpos($variation[0], '#') !== false) ? get_colorname($variation[0]) : $variation[0];
                                                //  if($variation[0]==" Black")
                                                //     $discount_ret = 50;
                                             endif;
                                             if($payable_shipping_charge_u>0)
                                                $actual_payable_shipping_charge = $payable_shipping_charge_u + $payable_shipping_charge_u;
                                             else
                                                $actual_payable_shipping_charge = $payable_shipping_charge;
                                             if($payable_cod_charge_u>0)
                                                $actual_payable_cod_charge = $payable_cod_charge_u + $payable_cod_charge_u;
                                             else
                                                $actual_payable_cod_charge = $payable_cod_charge;
                                             
                                       $html_content .= '
            <tr>
               <td style="text-align:center">'.$i.'</td>
               <td style="text-align:center"><span>'.$pro->product_name.'</span>
                                                <br/>';
                                                 if($variation[0]!=null) {
                                               $html_content .= ' <span class=""> COLOR :'.$variation[0].'</span><br>';
                                                 } else {
                                               $html_content .= ' <button class="badge badge-default">Base Color</button>';
                                                 }
                                                 $html_content .= '</td>
                <td style="text-align:center">'.$hsn.'</td>
               
               <td style="text-align:center">';
               if($variation[1]=='S' || $variation[1]=='M' || $variation[1]=='L' || $variation[1]=='XL' || $variation[1]=='XXL') {
                   $html_content .= '<span class=""> '.$variation[1].'</span>';
                }
                $discount = $product_data->mrp - $product_data->price - $discount_ret;
                $mrp = $taxable_value - $designer_charge + $discount; //$product_data->mrp;
                
                $html_content .= '</td>
               <td style="text-align:center">'.$pro->qty.'</td>
               <td style="text-align:center">'.$mrp.'</td>
               <td style="text-align:center">'.$discount.'</td>
               <td style="text-align:center">'. $designer_charge .'</td>
               <td style="text-align:center">'. $taxable_value .'</td>
               
               <td style="text-align:center">'. $ugst .'</td>
               <td style="text-align:center">'.number_format( $ugst_price,3).'</td>
               <td style="text-align:center">'. $ugst .'</td>
               <td style="text-align:center">'.number_format( $ugst_price,3).'</td>
               <td style="text-align:center">'. $gst .'</td>
               <td style="text-align:center">'.number_format( $gst_price,2).'</td>
               
               <td style="text-align:center"><strong>'. number_format($product_total= $taxable_value + $gst_price + $ugst_price + $ugst_price ,2).'</strong></td>';
                $total=$total + $taxable_value;
           $html_content .= ' </tr>
            ';
                                           $i++; endforeach;
            if($shipping_charge>0):
                $html_content .= '
                <tr>
                    <td colspan="8" style="text-align: right;"><strong>Shipping Charge</strong></td>
                    <td style="text-align:center" >'.$shipping_charge.'</td>
                    
                    <td style="text-align:center" >'. $shipping_charge_ugst .'</td>
                    <td style="text-align:center" >'.number_format($payable_shipping_charge_u,3).'</td>
                    <td style="text-align:center" >'. $shipping_charge_ugst .'</td>
                    <td style="text-align:center" >'.number_format($payable_shipping_charge_u,3).'</td>
                    
                    <td style="text-align:center" >'.$shipping_charge_gst.'</td>
                    <td style="text-align:center" >'. number_format($payable_shipping_charge, 2).'</td>
                    <td style="text-align:center" ><strong>'. number_format($actual_payable_shipping_charge + $shipping_charge, 2).'</strong></td>
                </tr>';
            endif;
            $total += $shipping_charge;
            if($orderlists->payment=="cod" && $orderlists->cod_charge>0):
                $html_content .= '<tr>
                    <td colspan="8" style="text-align: right;"><strong>COD Charge</strong></td>
                    <td  style="text-align:center">'.$orderlists->cod_charge.'</td>
                    
                    <td style="text-align:center">'. $shipping_charge_ugst .'</td>
                    <td style="text-align:center">'.number_format($payable_cod_charge_u,3).'</td>
                    <td style="text-align:center">'. $shipping_charge_ugst .'</td>
                    <td style="text-align:center">'.number_format($payable_cod_charge_u,3).'</td>

                    <td style="text-align:center">'.$shipping_charge_gst.'</td>
                    <td style="text-align:center">'. number_format($payable_cod_charge,2).'</td>
                    <td style="text-align:center"><strong>'. number_format($actual_payable_cod_charge + $orderlists->cod_charge, 2).'</strong></td>
                </tr>';
                $total += $orderlists->cod_charge;
            endif;
            $online_discount = 0;
            if($online_discount>0):
                $total -= $online_discount;
                $html_content .= '
                    <tr>
                        <td colspan="8" style="text-align: right;"><strong>Online Discount (10%)</strong></td>
                        <td colspan="8" style="text-align:right;"><strong>'. number_format($online_discount ,2).'</strong></td>
                    </tr>
                ';
            endif;
            $html_content .= '
            <tr>
                <td colspan="8" style="text-align: right;"><strong>Total Amount</strong></td>
                <td colspan="8" style="text-align:right;"><strong>'. number_format($total ,2).'</strong></td>
            </tr>
            <tr>
                <td colspan="8" style="text-align: right;"><strong>Total Tax</strong></td>
                <td colspan="8" style="text-align:right;"><strong>'. number_format($orderlists->total_gst ,2).'</strong></td>
            </tr>';
            
            $html_content .= '
            <tr>
                <td colspan="8" style="text-align: right;"><strong>Thank you card</strong></td>
                <td colspan="8" style="text-align: right;"><strong>'.  number_format(0 ,2).'</strong></td>
            </tr>
            <tr>
                <td colspan="8" style="text-align: right;"><strong>Grand total</strong></td>
                <td colspan="8" style="text-align: right;"><strong>'.number_format($total + $orderlists->total_gst, 2) .'</strong></td>
            </tr>
            <tr>
                
                <td colspan="16" style="text-align:right;font-size:12px;text-align:right;"><strong>Amount in Words : '.convertNumberFromAmt($total + $orderlists->total_gst).'</strong></td>
            </tr>
           
           
                                                
                                            </tbody>
                                        </table>
                                                                
                                                                
                                                                
                            </div>
                            <!--  end card  -->
                        </div>
                        <!-- end col-md-12 -->';
 
 
 
 
 
 
 
  $this->pdf->loadHtml($html_content);
  $this->pdf->render();
  $this->pdf->stream("#Arteno_IN_".$morderid.".pdf", array("Attachment"=>0));
}
	
    public function generate1($id) {
	    $data['orderlists']=$this->Admin_model->order_details($id);
        $orders=$this->Admin_model->order_details($id);
        $data['user']=$this->Admin_model->list_users($orders->user_id);
        $data['add']=$this->Admin_model->del_address($orders->location_id);

        $morderid=$orders->id;
        
        $neworder=$this->Admin_model->orderdata($morderid);
        $data['myorders']=$neworder;
        $this->pdfdetails1($id);
// 		$this->load->view('admin/invoices',$data);
	}
	
	public function pdfdetails1($order_id) {
	    $site_setting=$this->db->where('id',1)->get('invoice-details')->row();
	    $orderlists=$this->Admin_model->order_details($order_id);
	    $invoice_id=$this->Admin_model->get_invoiceID($order_id);
        $orders=$this->Admin_model->order_details($order_id);
        $user=$this->Admin_model->list_users($orders->user_id);
        $add=$this->Admin_model->del_address($orders->location_id);

         $morderid=$orders->id;

         $neworder=$this->Admin_model->orderdata($morderid);
         $myorders=$neworder;
         $shipping_charge_gst = 12;
         $base_state = "Haryana";
         $user_state = $add->state;
         if($orderlists->is_shipping=='1')
            $user_state = $user->state;
        //  if($add->state==$base_state)
        if($user_state==$base_state)
            $user_gst = "UGST";
         else
            $user_gst = "IGST";
$data = file_get_contents($site_setting->invoicelogo);
$base_image = 'data:image/;base64,' . base64_encode($data);
   $this->load->library('pdf');
   $invoice_date = ($orderlists->dispatch_date==NULL)?'':date("d-M-Y", strtotime($orderlists->dispatch_date));
  
   $html_content ='<table  class="table" cellspacing="0" width="100%" style="width:100%background:#fff;" border="1">
                                            
                                                <tr>
                                                    <th colspan="16" class="text-center"> <center><img src="'.$base_image.'" alt="" style="height:90px;"></center>
                                                    </th>
                                                    </tr>
                                                   
                                                    

                                           <tbody>
                                           <tr border="0">
                                                  <td  colspan="16" style="border-right:0px;"><center><strong> Tax invoice</strong></center></td>
                                                 
                                                 </tr>

                                                <tr border="0">
                                                
                                                <td  colspan="8" style="border-right:0px;">
                                                   <strong>  &emsp; Sold By</strong>
                                                                    <br/>
                                                    <strong>'.$site_setting->cname.'</strong><br><span>'.$site_setting->caddress.'<br> Mobile No: '.$site_setting->cmobile.'<br>Email ID: '.$site_setting->cemail.'</span><br>GSTIN: '.$site_setting->gst_no.'</span><br>PAN : '.$site_setting->pan_no.'</span>
                                                                 </td>
                                                    <td  colspan="8" style="border-right:0px;">';
                                                    if($invoice_id){
                                                   $html_content .= '<strong> Invoice No. '.$site_setting->order_prefix.''.$invoice_id.'</strong>
                                                                     <br>'; }
                                                              $html_content .= ' <strong> Order Id : '.$site_setting->order_prefix.''.$orderlists->id.'</strong>
                                                                <br />

                                                                <strong>Order Date : '.date("d-M-Y", strtotime($orderlists->created)).'</strong>
                                                                
                                                                <br />
                                                                <strong>Invoice Date : '.$invoice_date.'</strong>
                                                                
                                                                <br />
                                                         <strong>Payment method :  '.strtoupper($orderlists->payment).'</strong><br>';
                                                         if($orderlists->payment=='cod' && $orderlists->cod_charge>0){
                                                       $html_content .= '<strong>COD Charge : Rs '.$orderlists->cod_charge.'</strong><br/>';
                                                         }
                                                         $html_content .= '<strong>Currency : INR</strong>
                                                                    
                                                                 </td>
                                                                
                                                           
                                                </tr>
                                                
                                                 <tr border="0">
                                                  <td  colspan="8" style="border-right:0px;"><center><strong> Billing  Address</strong></center></td>
                                                  <td  colspan="8" style="border-right:0px;"><center><strong>Shipping  Address</strong></center></td>
                                                 </tr>
                                                <tr border="0">
                                                    <td colspan="8" style="border-right:0px;">
                                                        <strong>'.$user->user_fullname.' <br />
                                                        '.$user->house_no.',<br />
                                                        '.$user->city.', '.$user->state.'<br />
                                                        INDIA - '.$user->pincode.' <br />
                                                        '.$user->user_email.' <br/>
                                                        Contact : '.$user->user_phone.'</strong>
                                                    </td>';
                                                    if($orderlists->is_shipping=='1'){
                                                    $html_content .= ' <td colspan="8" style="border-right:0px;">
                                                        <strong>'.$user->user_fullname.' <br />
                                                        '.$user->house_no.',<br />
                                                        '.$user->city.', '.$user->state.'<br />
                                                        INDIA - '.$user->pincode.' <br />
                                                        '.$user->user_email.' <br/>
                                                        Contact : '.$user->user_phone.'</strong>
                                                    </td>';
                                                    } else{
                                                         $html_content .= '
                                                         <td colspan="8" style="border-right:0px;">
                                                        <strong>'.$user->user_fullname.' <br />
                                                        '.$add->house_no.',<br />
                                                        '.$add->city.', '.$add->state.'<br />
                                                        INDIA - '.$add->pincode.' <br />
                                                        '.$user->user_email.' <br/>
                                                        Contact : '.$user->user_phone.'</strong>
                                                    </td>';
                                                    }
                                                $html_content .= ' </tr>
                                                 <tr>
            <th style="text-align:center" rowspan="2">Sr No.  </th>
            <th style="text-align:center" rowspan="2">Category </th>
            <th style="text-align:center" rowspan="2">HSN</th>
            <th style="text-align:center" rowspan="2">Size </th>
            <th style="text-align:center" rowspan="2">QTY</th>
            <th style="text-align:center" rowspan="2">Unit Price</th>
            <th style="text-align:center" rowspan="2">Discount</th>
            <th style="text-align:center" rowspan="2">Designer Charge</th>
            <th style="text-align:center" rowspan="2">Taxable value </th>
            <th style="text-align:center" style="text-align:center;" colspan="2">CGST</th>
            <th style="text-align:center" style="text-align:center;" colspan="2">SGST/UGST</th>
            <th style="text-align:center" style="text-align:center;" colspan="2">IGST</th>
            <th style="text-align:center" rowspan="2">Total</th>
            
        </tr>
        <tr>
            <th style="text-align:center">Rate</th>
            <th style="text-align:center">Amt</th>
            <th style="text-align:center">Rate</th>
            <th style="text-align:center">Amt</th>
            <th style="text-align:center">Rate</th>
            <th style="text-align:center">Amt</th>
        </tr>';
        $i=1;
                                                 $total_designer_charge=0;
                                            $product_price=0;
                                             $total=0;
                                             $total_shipping=$orderlists->shipping_charge + $orderlists->cod_charge;
                                             $shipping_charge = $orderlists->shipping_charge;
                                    
                                                foreach($myorders as $pro):
                                                    $designer_charge= $pro->total_price - $pro->product_price;
                                                    $total_designer_charge=$total_designer_charge + $designer_charge;
                                                $variation= json_decode($pro->variations);
                                                 $this->db->where('id',$pro->product_id);
                                             $pr_details = $this->db->get('products');
                                             $product_data= $pr_details->row();
                                                 $this->db->where('id',1);
                                             $q = $this->db->get('invoice-details');
                                             $setting_data= $q->row();
                                             $products_gst=json_decode($setting_data->gstp);
                                             $pro_duct=$products_gst[1];
                                             foreach($products_gst[0] as $key=>$p_id){
                                                 if($pro->product_id== $p_id){
                                                     $gst=$pro_duct[$key];
                                                 }
                                             }
                                             $taxable_value = $pro->product_price + $designer_charge;
                                             $ugst = $gst/2;
                                             $shipping_charge_ugst = $shipping_charge_gst/2;
                                             if($user_gst=="IGST"):
                                                $shipping_charge_ugst = 0;
                                                $ugst = 0; 
                                             else:
                                                $shipping_charge_gst = 0;
                                                $gst = 0;
                                             endif;
                                             $gst_price = ($taxable_value) * $gst /100;
                                             $ugst_price = ($taxable_value) * $ugst /100;
                                             $payable_shipping_charge = $shipping_charge*$shipping_charge_gst/100;
                                             $payable_shipping_charge_u = $shipping_charge*$shipping_charge_ugst/100;
                                             
                                             $payable_cod_charge = $orderlists->cod_charge*$shipping_charge_gst/100;
                                             $payable_cod_charge_u = $orderlists->cod_charge*$shipping_charge_ugst/100;

                                             $hsn = $product_data->hsn;
                                             $discount_ret = 0;
                                             if($variation[0]!=null):
                                                 if($variation[0]==" Black")
                                                    $discount_ret = 50;
                                             endif;
                                             if($payable_shipping_charge_u>0)
                                                $actual_payable_shipping_charge = $payable_shipping_charge_u + $payable_shipping_charge_u;
                                             else
                                                $actual_payable_shipping_charge = $payable_shipping_charge;
                                             if($payable_cod_charge_u>0)
                                                $actual_payable_cod_charge = $payable_cod_charge_u + $payable_cod_charge_u;
                                             else
                                                $actual_payable_cod_charge = $payable_cod_charge;
                                             
                                       $html_content .= '
            <tr>
               <td style="text-align:center">'.$i.'</td>
               <td style="text-align:center"><span>'.$pro->product_name.'</span>
                                                <br/>';
                                                 if($variation[0]!=null) {
                                               $html_content .= ' <span class=""> COLOR :'.$variation[0].'</span><br>';
                                                 } else {
                                               $html_content .= ' <button class="badge badge-default">Base Color</button>';
                                                 }
                                                 $html_content .= '</td>
                <td style="text-align:center">'.$hsn.'</td>
               
               <td style="text-align:center">';
               if($variation[1]=='S' || $variation[1]=='M' || $variation[1]=='L' || $variation[1]=='XL' || $variation[1]=='XXL') {
                   $html_content .= '<span class=""> '.$variation[1].'</span>';
                }
                
                $html_content .= '</td>
               <td style="text-align:center">'.$pro->qty.'</td>
               <td style="text-align:center">'. $product_data->mrp.'</td>
               <td style="text-align:center">'. $discount=$product_data->mrp-$product_data->price-$discount_ret.'</td>
               <td style="text-align:center">'. $designer_charge .'</td>
               <td style="text-align:center">'. $taxable_value .'</td>
               
               <td style="text-align:center">'. $ugst .'</td>
               <td style="text-align:center">'.number_format( $ugst_price,3).'</td>
               <td style="text-align:center">'. $ugst .'</td>
               <td style="text-align:center">'.number_format( $ugst_price,3).'</td>
               <td style="text-align:center">'. $gst .'</td>
               <td style="text-align:center">'.number_format( $gst_price,2).'</td>
               
               <td style="text-align:center"><strong>'. number_format($product_total= $taxable_value + $gst_price + $ugst_price + $ugst_price ,2).'</strong></td>';
                $total=$total + $taxable_value;
           $html_content .= ' </tr>
            ';
                                           $i++; endforeach;
            if($shipping_charge>0):
                $html_content .= '
                <tr>
                    <td colspan="8" style="text-align: right;"><strong>Shipping Charge1</strong></td>
                    <td style="text-align:center" >'.$shipping_charge.'</td>
                    
                    <td style="text-align:center" >'. $shipping_charge_ugst .'</td>
                    <td style="text-align:center" >'.number_format($payable_shipping_charge_u,3).'</td>
                    <td style="text-align:center" >'. $shipping_charge_ugst .'</td>
                    <td style="text-align:center" >'.number_format($payable_shipping_charge_u,3).'</td>
                    
                    <td style="text-align:center" >'.$shipping_charge_gst.'</td>
                    <td style="text-align:center" >'. number_format($payable_shipping_charge, 2).'</td>
                    <td style="text-align:center" ><strong>'. number_format($actual_payable_shipping_charge + $shipping_charge, 2).'</strong></td>
                </tr>';
            endif;
            $total += $shipping_charge;
            if($orderlists->payment=="cod" && $orderlists->cod_charge>0):
                $html_content .= '<tr>
                    <td colspan="8" style="text-align: right;"><strong>COD Charge</strong></td>
                    <td  style="text-align:center">'.$orderlists->cod_charge.'</td>
                    
                    <td style="text-align:center">'. $shipping_charge_ugst .'</td>
                    <td style="text-align:center">'.number_format($payable_cod_charge_u,3).'</td>
                    <td style="text-align:center">'. $shipping_charge_ugst .'</td>
                    <td style="text-align:center">'.number_format($payable_cod_charge_u,3).'</td>

                    <td style="text-align:center">'.$shipping_charge_gst.'</td>
                    <td style="text-align:center">'. number_format($payable_cod_charge,2).'</td>
                    <td style="text-align:center"><strong>'. number_format($actual_payable_cod_charge + $orderlists->cod_charge, 2).'</strong></td>
                </tr>';
                $total += $orderlists->cod_charge;
            endif;
            $online_discount = 0;
            if($online_discount>0):
                $total -= $online_discount;
                $html_content .= '
                    <tr>
                        <td colspan="8" style="text-align: right;"><strong>Online Discount (10%)</strong></td>
                        <td colspan="8" style="text-align:right;"><strong>'. number_format($online_discount ,2).'</strong></td>
                    </tr>
                ';
            endif;
            $html_content .= '
            <tr>
                <td colspan="8" style="text-align: right;"><strong>Total Amount</strong></td>
                <td colspan="8" style="text-align:right;"><strong>'. number_format($total ,2).'</strong></td>
            </tr>
            <tr>
                <td colspan="8" style="text-align: right;"><strong>Total Tax</strong></td>
                <td colspan="8" style="text-align:right;"><strong>'. number_format($orderlists->total_gst ,2).'</strong></td>
            </tr>';
            
            $html_content .= '
            <tr>
                <td colspan="8" style="text-align: right;"><strong>Thank you card</strong></td>
                <td colspan="8" style="text-align: right;"><strong>'.  number_format(0 ,2).'</strong></td>
            </tr>
            <tr>
                <td colspan="8" style="text-align: right;"><strong>Grand total</strong></td>
                <td colspan="8" style="text-align: right;"><strong>'.number_format($total + $orderlists->total_gst, 2) .'</strong></td>
            </tr>
            <tr>
                
                <td colspan="16" style="text-align:right;font-size:12px;text-align:right;"><strong>Amount in Words : '.convertNumberFromAmt($total + $orderlists->total_gst).'</strong></td>
            </tr>
           
           
                                                
                                            </tbody>
                                        </table>
                                                                
                                                                
                                                                
                            </div>
                            <!--  end card  -->
                        </div>
                        <!-- end col-md-12 -->';
 
 
 
 
 
 
 
  $this->pdf->loadHtml($html_content);
  $this->pdf->render();
  $this->pdf->stream("#Arteno_IN_".$morderid.".pdf", array("Attachment"=>0));
}
}
?>