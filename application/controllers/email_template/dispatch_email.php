<?php
    $order_id=  $order['order_id'];
    $user_id=  $order['user_data'];
    $order_data=  $order['order_data'];
    $products=  $order['products'];
    $pro=count($products);
    $shipping_charge = $order_data['shipping_charge'];
    $charges = $shipping_charge + $order_data['cod_charge'];
    $subtotal = $order_data['total'] - $charges - $order_data['total_gst'];
    $user=$this->db->where('id',$user_id)->get('users')->row();
    $user_loc=$this->db->where('id',$order_data['location_id'])->get('user_location')->row();
    $site_setting=$this->db->where('id',1)->get('invoice-details')->row();
    $products_gst=json_decode($site_setting->gstp);
    $pro_duct=$products_gst[1];
    
    $msg='<div style="background-color:rgb(242,242,242)">
        
        
      <div style="background-color:rgb(242,242,242)">
        <div style="padding-top:5px"></div>
      
      
    
      
      <div style="margin:0px auto;border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;max-width:600px;background-color:rgb(237,48,49)">
        
        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%;border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;background-color:#000;">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:0px;text-align:center">
                
            
      <div style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
        
      <table border="0" cellpadding="0" cellspacing="0" style="vertical-align:top" width="100%">
        
            <tbody><tr>
              <td align="center" style="font-size:0px;padding:5px;word-break:break-word">
                
      <table border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-spacing:0px">
        <tbody>
          <tr>
            <td style="width:67px">
              
        <a href="https://arteno.in/" target="_blank" >
          
      <img height="auto" src="'.$site_setting->invoicelogo.'" style="transform:scale(2.8)!important;border:0px;display:block;outline:none;text-decoration:none;height:70x;width:100%;font-size:13px" width="67" class="CToWUd">
    
        </a>
      
            </td>
          </tr>
        </tbody>
      </table>
    
              </td>
            </tr>
          
      </tbody></table>
    
      </div>
    
          
              </td>
            </tr>
          </tbody>
        </table>
        
      </div>
    
      
      
    
      
      <div style="margin:0px auto;max-width:600px;background-color:white">
        
        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%;background-color:white">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:10px 5px;text-align:center">
                
    
      
      
      
      <div style="margin:0px auto;max-width:590px">
        <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
          <tbody><tr style="vertical-align:top">
            
          <td style="padding:0px 0px 10px;vertical-align:top;background-color:rgb(255,255,255);background-position:center center;background-repeat:no-repeat no-repeat" height="-10">
            
      
      <div style="margin:0px auto">
        <table border="0" cellpadding="0" cellspacing="0" style="width:100%;margin:0px">
          <tbody><tr>
            <td>
               <center>
                    <br>
            <img src="'.$status_img.'" style="width:100%;height:120px">
            <br><br>
              <table border="0" cellpadding="0" cellspacing="0" style="width:100%;margin:0px">
                
                    <tbody>
                      <td align="left" style="font-size:0px;padding:0px 10px;word-break:break-word">
                        <div style="font-family:&quot;Source Sans Pro&quot;,sans-serif;font-size:14px;line-height:21px;text-align:left;color:rgb(40,44,63)">
                         Hi there! Guess what? Your order ('.$site_setting->order_prefix.$order_id.') has been dispatched! Kindly be aware of certain delays with your placed order due to limited courier options shipment via road transport. Thank you for understanding and bearing with us during these times. We appreciate your constant support!
                            <br/>
                           To track your order, click this link: <a href="'.base_url().'my_orders">Track order</a>
                        </div>
                        <br><br>
                    </td>
                    </tr>
                  
              </tbody></table>
            </td>
          </tr>
        </tbody></table>
      </div>
    
          </td>
        
          </tr>
      </tbody></table>
    </div>
    
    
      
      <div style="margin:0px auto;max-width:590px;background-color:white">
        
        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%;background-color:white">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:0px;text-align:center">
                
            
      <div style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
        
      <table border="0" cellpadding="0" cellspacing="0" style="vertical-align:top" width="100%">
        
            <tbody><tr>
              <td align="left" style="font-size:0px;padding:3px 10px;word-break:break-word">
                
      <div style="font-family:&quot;Source Sans Pro&quot;,sans-serif;font-size:14px;line-height:21px;text-align:left;color:rgb(40,44,63)"><span style="font-weight:700;font-family:&quot;Source Sans Pro&quot;,sans-serif">ORDER ID: </span>'.$site_setting->order_prefix.$order_id.'<br>
            <span style="font-weight:700;font-family:&quot;Source Sans Pro&quot;,sans-serif">ORDER DATE: </span> '.$order_data['created'].' <br>
            <span style="font-weight:700;font-family:&quot;Source Sans Pro&quot;,sans-serif">DELIVERY TIME: </span> 3-7 business days</div>
    
              </td>
            </tr>
          
          
      </tbody></table>
    
      </div>
    
          
              </td>
            </tr>
          </tbody>
        </table>
        
      </div>
    
      
      
      <div style="margin:0px auto;max-width:590px">
        <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
          <tbody><tr style="vertical-align:top">
            
          <td style="padding:15px 0px;vertical-align:top;background-color:rgb(255,255,255);background-position:center center;background-repeat:no-repeat no-repeat" height="-30">
            
      
      <div style="margin:0px auto">
        <table border="0" cellpadding="0" cellspacing="0" style="width:100%;margin:0px">
          <tbody><tr>
            <td>
              <table border="0" cellpadding="0" cellspacing="0" style="width:100%;margin:0px">
                
                    <tbody><tr>
                      <td style="font-size:0px;padding:0px;word-break:break-word">
                        
      <p style="border-top-width:1px;border-top-style:solid;font-size:1px;margin:0px auto;width:100%;border-top-color:rgb(243,243,243)">
      </p>
      
      
    
    
                      </td>
                    </tr>
                  
              </tbody></table>
            </td>
          </tr>
        </tbody></table>
      </div>
      
    
          </td>
        
          </tr>
      </tbody></table>
    </div>
    
    
      
      <div style="margin:0px auto;max-width:590px;background-color:white">
        
        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%;background-color:white">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:0px;text-align:center">
                
            
      <div style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
        
      <table border="0" cellpadding="0" cellspacing="0" style="vertical-align:top" width="100%">
        
            <tbody><tr>
              <td align="left" style="font-size:0px;padding:0px 10px;word-break:break-word">
                
      <div style="font-family:&quot;Source Sans Pro&quot;,sans-serif;font-size:14px;font-weight:700;line-height:1;text-align:left;color:rgb(40,44,63)">ORDER DETAILS:</div>
    
              </td>
            </tr>
          
      </tbody></table>
    
      </div>
    
          
              </td>
            </tr>
          </tbody>
        </table>
        
      </div>';
                        $total = 0;
                                     $pindex = $index = 0;
                                    foreach($products as $item){
                                        $pindex++;
                                
                                      $designer_charge_product= $item['total_price']/$item['qty'] - $item['product_price'];    
                                          
                         $msg.='
      <div style="margin:0px auto;max-width:590px;background-color:white">
        
        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%;background-color:white">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:0px;text-align:center">
                
            
      <div style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
        
      <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tbody>
          <tr>
            <td style="vertical-align:top;padding:0px 10px">
              
      <table border="0" cellpadding="0" cellspacing="0" width="100%">
        
            <tbody><tr>
              <td align="left" style="font-size:0px;padding:10px 0px;word-break:break-word">
                
      <table cellpadding="0" cellspacing="0" width="100%" border="0" style="font-family:&quot;Source Sans Pro&quot;,sans-serif;font-size:14px;line-height:22px;table-layout:auto;width:100%;border:none;color:rgb(40,44,63)">
        <tbody style="font-family:&quot;Source Sans Pro&quot;,sans-serif"><tr style="font-family:&quot;Source Sans Pro&quot;,sans-serif">
              <td align="left" rowspan="6" width="25%" style="padding-right:15px;padding-left:0px;font-family:&quot;Source Sans Pro&quot;,sans-serif">';
                $iii = 0;
                if(count(json_decode($item['screenshots']))> 0):
                    foreach(json_decode($item['screenshots']) as $image):
                    
               $msg.='<img width="80px" src="'.base_url().'uploads/orders/'.$image.'" class="CToWUd">';
              endforeach;
               endif;
             $msg.=' </td>
            </tr>
            <tr style="padding:0px;font-family:&quot;Source Sans Pro&quot;,sans-serif">
              <td colspan="2" style="font-weight:600;text-transform:capitalize;font-family:&quot;Source Sans Pro&quot;,sans-serif;color:rgb(40,44,63)">'.$item['product_name'].'</td>
            </tr>

            
            <tr style="font-family:&quot;Source Sans Pro&quot;,sans-serif">

              <td style="text-align:left;text-transform:capitalize;font-family:&quot;Source Sans Pro&quot;,sans-serif"> Qty: '.$item['qty'].'</td>

              <td style="text-align:right;text-transform:capitalize;font-family:&quot;Source Sans Pro&quot;,sans-serif"></td>

            </tr>
            <tr style="font-family:&quot;Source Sans Pro&quot;,sans-serif">
              <td style="text-transform:capitalize;font-family:&quot;Source Sans Pro&quot;,sans-serif">Price</td>
              <td style="text-align:right;text-transform:capitalize;font-family:&quot;Source Sans Pro&quot;,sans-serif">Rs '.$item['total_price'].'</td>
            </tr>
                        <tr style="font-family:&quot;Source Sans Pro&quot;,sans-serif">
              <td style="text-transform:capitalize;font-family:&quot;Source Sans Pro&quot;,sans-serif">Designer Charge(inc. in Price)</td>
              <td style="text-align:right;text-transform:capitalize;font-family:&quot;Source Sans Pro&quot;,sans-serif">Rs '.$designer_charge_product.'</td>
            </tr>';
            $designer_charge = '<tr style="font-family:&quot;Source Sans Pro&quot;,sans-serif">
              <td style="text-transform:capitalize;font-family:&quot;Source Sans Pro&quot;,sans-serif">Designer Charge</td>
              <td style="text-transform:capitalize;text-align:right;font-family:&quot;Source Sans Pro&quot;,sans-serif">Rs '.$item['product_price'].'</td>
            </tr>';
            foreach($products_gst[0] as $key=>$p_id){
                                    if($item['product_id']== $p_id){
                                    $gst=$pro_duct[$key];
                                    }
                                    }
                                    $gst_price=$item['total_price']*$gst/100;
                                   $total_price_product= $item['total_price']+$gst_price;
            $msg.='<tr style="font-family:&quot;Source Sans Pro&quot;,sans-serif">
              <td style="font-family:&quot;Source Sans Pro&quot;,sans-serif">GST '.$gst.'%</td>
              <td style="text-align:right;font-family:&quot;Source Sans Pro&quot;,sans-serif">Rs '.$gst_price.'</td>
            </tr>
          <tr style="font-family:&quot;Source Sans Pro&quot;,sans-serif;border-top: 2px solid red;/* padding: 51px; */">
    <td></td>
              <td style="text-transform:capitalize;font-family:&quot;Source Sans Pro&quot;,sans-serif"> Total</td>
              <td style="text-transform:capitalize;text-align:right;font-family:&quot;Source Sans Pro&quot;,sans-serif">Rs '.$total_price_product.'</td>
            </tr>
           
      </tbody></table>
    
              </td>
            </tr>
             
          
      </tbody></table>
    
            </td>
          </tr>
        </tbody>
      </table>
    
      </div>
    
          
              </td>
            </tr>
          </tbody>
        </table>
        
      </div>
    
      
      
    
          
      <div style="margin:0px auto;max-width:590px">
        <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
          <tbody><tr style="vertical-align:top">
            
          <td style="padding:0px;vertical-align:top;background-color:rgb(255,255,255);background-position:center center;background-repeat:no-repeat no-repeat" height="0">
            
      
      <div style="margin:0px auto">
        <table border="0" cellpadding="0" cellspacing="0" style="width:100%;margin:0px">
          <tbody><tr>
            <td>
              <table border="0" cellpadding="0" cellspacing="0" style="width:100%;margin:0px">
                
                    <tbody><tr>
                      <td style="font-size:0px;padding:0px;word-break:break-word">
                        
      <p style="border-top-width:1px;border-top-style:dashed;font-size:1px;margin:0px auto;width:100%;border-top-color:rgb(237,237,237)">
      </p>
      
      
    
    
                      </td>
                    </tr>
                  
              </tbody></table>
            </td>
          </tr>
        </tbody></table>
      </div>
      
    
          </td>
        
          </tr>
      </tbody></table>
    </div>';
                          } 
                                        
                         $msg.='
      <div style="margin:0px auto;max-width:590px;background-color:white">
        
        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%;background-color:white">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:0px;text-align:center">
                
            
      <div style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
        
      <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tbody>
          <tr>
            <td style="vertical-align:top;padding:0px 10px">
              
      <table border="0" cellpadding="0" cellspacing="0" width="100%">
        
            <tbody><tr>
              <td align="left" style="font-size:0px;padding:10px 0px;word-break:break-word">
                
      <table cellpadding="0" cellspacing="0" width="100%" border="0" style="font-family:&quot;Source Sans Pro&quot;,sans-serif;font-size:14px;line-height:22px;table-layout:auto;width:100%;border:none;color:rgb(40,44,63)">
        <tbody style="font-family:&quot;Source Sans Pro&quot;,sans-serif"><tr style="font-family:&quot;Source Sans Pro&quot;,sans-serif">
              <td align="left" rowspan="6" width="25%" style="padding-right:15px;padding-left:0px;font-family:&quot;Source Sans Pro&quot;,sans-serif">';
               
               $msg.='<img width="80px" src="'.$site_setting->invoicelogo.'" class="CToWUd" style="background: #111;">';
             
             $msg.=' </td>
            </tr>
            <tr style="padding:0px;font-family:&quot;Source Sans Pro&quot;,sans-serif">
              <td colspan="2" style="font-weight:600;text-transform:capitalize;font-family:&quot;Source Sans Pro&quot;,sans-serif;color:rgb(40,44,63)">Welcome Note</td>
            </tr>

            
            <tr style="font-family:&quot;Source Sans Pro&quot;,sans-serif">

              <td style="text-align:left;text-transform:capitalize;font-family:&quot;Source Sans Pro&quot;,sans-serif"> Qty: 1</td>

              <td style="text-align:right;text-transform:capitalize;font-family:&quot;Source Sans Pro&quot;,sans-serif"></td>

            </tr>
            <tr style="font-family:&quot;Source Sans Pro&quot;,sans-serif">
              <td style="text-transform:capitalize;font-family:&quot;Source Sans Pro&quot;,sans-serif">Price</td>
              <td style="text-align:right;text-transform:capitalize;font-family:&quot;Source Sans Pro&quot;,sans-serif">Rs 0.00</td>
            </tr>
                        <tr style="font-family:&quot;Source Sans Pro&quot;,sans-serif">
              <td style="text-transform:capitalize;font-family:&quot;Source Sans Pro&quot;,sans-serif">Designer Charge(inc. in Price)</td>
              <td style="text-align:right;text-transform:capitalize;font-family:&quot;Source Sans Pro&quot;,sans-serif">Rs 0.00</td>
            </tr>';
            $designer_charge = '<tr style="font-family:&quot;Source Sans Pro&quot;,sans-serif">
              <td style="text-transform:capitalize;font-family:&quot;Source Sans Pro&quot;,sans-serif">Designer Charge</td>
              <td style="text-transform:capitalize;text-align:right;font-family:&quot;Source Sans Pro&quot;,sans-serif">Rs 0.00</td>
            </tr>';
            $msg.='<tr style="font-family:&quot;Source Sans Pro&quot;,sans-serif">
              <td style="font-family:&quot;Source Sans Pro&quot;,sans-serif">GST </td>
              <td style="text-align:right;font-family:&quot;Source Sans Pro&quot;,sans-serif">Rs 0.00</td>
            </tr>
          <tr style="font-family:&quot;Source Sans Pro&quot;,sans-serif;border-top: 2px solid red;/* padding: 51px; */">
    <td></td>
              <td style="text-transform:capitalize;font-family:&quot;Source Sans Pro&quot;,sans-serif"> Total</td>
              <td style="text-transform:capitalize;text-align:right;font-family:&quot;Source Sans Pro&quot;,sans-serif">Rs 0.00</td>
            </tr>
           
      </tbody></table>
    
              </td>
            </tr>
             
          
      </tbody></table>
    
            </td>
          </tr>
        </tbody>
      </table>
    
      </div>
    
          
              </td>
            </tr>
          </tbody>
        </table>
        
      </div>
    
      
      
    
          
      <div style="margin:0px auto;max-width:590px">
        <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
          <tbody><tr style="vertical-align:top">
            
          <td style="padding:0px;vertical-align:top;background-color:rgb(255,255,255);background-position:center center;background-repeat:no-repeat no-repeat" height="0">
            
      
      <div style="margin:0px auto">
        <table border="0" cellpadding="0" cellspacing="0" style="width:100%;margin:0px">
          <tbody><tr>
            <td>
              <table border="0" cellpadding="0" cellspacing="0" style="width:100%;margin:0px">
                
                    <tbody><tr>
                      <td style="font-size:0px;padding:0px;word-break:break-word">
                        
      <p style="border-top-width:1px;border-top-style:dashed;font-size:1px;margin:0px auto;width:100%;border-top-color:rgb(237,237,237)">
      </p>
      
      
    
    
                      </td>
                    </tr>
                  
              </tbody></table>
            </td>
          </tr>
        </tbody></table>
      </div>
      
    
          </td>
        
          </tr>
      </tbody></table>
    </div>';
                          
    $msg .= '<div style="margin:0px auto;max-width:590px">
    
        <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
          <tbody><tr style="vertical-align:top">
            
          <td style="padding:0px;vertical-align:top;background-color:rgb(255,255,255);background-position:center center;background-repeat:no-repeat no-repeat" height="0">
            
      
      <div style="margin:0px auto">
        <table border="0" cellpadding="0" cellspacing="0" style="width:100%;margin:0px">
          <tbody><tr>
            <td>
                <table border="0" cellpadding="0" cellspacing="0" style="width:100%;margin:0px">
                    <tbody><tr>
                     <td align="left" style="font-size:0px;padding:0px 10px 3px;word-break:break-word">
                     <div style="font-family:&quot;Source Sans Pro&quot;,sans-serif;font-size:14px;font-weight:700;line-height:1;text-align:left;color:rgb(40,44,63)">Delivery Address</div>
                    </td>
                    </tr>
                  
                    <tr>
                      <td align="left" style="font-size:0px;padding:3px 10px 0px;word-break:break-word">
                        
                   <div style="font-family:&quot;Source Sans Pro&quot;,sans-serif;font-size:14px;line-height:21px;text-align:left;color:rgb(40,44,63)"><strong><i>'.$user->user_fullname.'</strong></i></div>
    
                      </td>
                    </tr>
                  
                    <tr>
                      <td align="left" style="font-size:0px;padding:0px 10px;word-break:break-word">
                        
                       <div style="font-family:&quot;Source Sans Pro&quot;,sans-serif;font-size:14px;line-height:21px;text-align:left;color:rgb(40,44,63)">'.$user_loc->house_no.'</div>
    
                      </td>
                    </tr>
                  
                    <tr>
                      <td align="left" style="font-size:0px;padding:0px 10px;word-break:break-word">
                        
                   <div style="font-family:&quot;Source Sans Pro&quot;,sans-serif;font-size:14px;line-height:21px;text-align:left;color:rgb(40,44,63)">'.$user_loc->city.'</div>
    
                      </td>
          </tr>
          <tr>
                      <td align="left" style="font-size:0px;padding:0px 10px;word-break:break-word">
                        
                     <div style="font-family:&quot;Source Sans Pro&quot;,sans-serif;font-size:14px;line-height:21px;text-align:left;color:rgb(40,44,63)">'.$user_loc->state.'</div>
    
                      </td>
                    </tr>
                  
                    <tr>
                      <td align="left" style="font-size:0px;padding:0px 10px;word-break:break-word">
                        
                   <div style="font-family:&quot;Source Sans Pro&quot;,sans-serif;font-size:14px;line-height:21px;text-align:left;color:rgb(40,44,63)">'.$user_loc->pincode.'</div>
    
                      </td>
                    </tr>
        </tbody></table>
      </div>
        <p style="border-top-width:1px;border-top-style:dashed;font-size:1px;margin:0px auto;width:100%;border-top-color:rgb(237,237,237)"><br>

      <div style="margin:0px auto;max-width:590px;margin-top:10px"><br>
      <table border="0" cellpadding="0" cellspacing="0" style="width:100%;margin:0px">
                    <tbody><tr>
                     <td align="left" style="font-size:0px;padding:0px 10px 3px;word-break:break-word">
                     <div style="font-family:&quot;Source Sans Pro&quot;,sans-serif;font-size:14px;font-weight:700;line-height:1;text-align:left;color:rgb(40,44,63)">Billing details</div>
                    </td>
                    </tr>
                  
                    <tr>
                      <td align="left" style="font-size:0px;padding:3px 10px 0px;word-break:break-word">
                        
                   <div style="font-family:&quot;Source Sans Pro&quot;,sans-serif;font-size:14px;line-height:21px;text-align:left;color:rgb(40,44,63)"><strong><i>'.$user->user_fullname.'</strong></i></div>
    
                      </td>
                    </tr>
                  
                    <tr>
                      <td align="left" style="font-size:0px;padding:0px 10px;word-break:break-word">
                        
                       <div style="font-family:&quot;Source Sans Pro&quot;,sans-serif;font-size:14px;line-height:21px;text-align:left;color:rgb(40,44,63)">'.$user->house_no.'</div>
    
                      </td>
                    </tr>
                  
                    <tr>
                      <td align="left" style="font-size:0px;padding:0px 10px;word-break:break-word">
                        
                   <div style="font-family:&quot;Source Sans Pro&quot;,sans-serif;font-size:14px;line-height:21px;text-align:left;color:rgb(40,44,63)">'.$user->city.'</div>
    
                      </td>
            
                    </tr>
                  
                    <tr>
                      <td align="left" style="font-size:0px;padding:0px 10px;word-break:break-word">
                        
                     <div style="font-family:&quot;Source Sans Pro&quot;,sans-serif;font-size:14px;line-height:21px;text-align:left;color:rgb(40,44,63)">'.$user->state.'</div>
    
                      </td>
                    </tr>
                  
                    <tr>
                      <td align="left" style="font-size:0px;padding:0px 10px;word-break:break-word">
                        
                   <div style="font-family:&quot;Source Sans Pro&quot;,sans-serif;font-size:14px;line-height:21px;text-align:left;color:rgb(40,44,63)">'.$user->pincode.'</div>
    
                      </td>
                    </tr>
                  
                    
                    <tr>
                      <td align="left" style="font-size:0px;padding:0px 10px;word-break:break-word">
                        
                        <div style="font-family:&quot;Source Sans Pro&quot;,sans-serif;font-size:14px;line-height:21px;text-align:left;color:rgb(40,44,63)">Contact No.: '.$user->user_phone.'</div>
    
                      </td>
                    </tr>
                  
              </tbody></table>
      </div>
    
          </td>
        
          </tr>
      </tbody></table>
    </div>
    
      <div style="margin:0px auto;max-width:590px">
        <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
          <tbody><tr style="vertical-align:top">
            
          <td style="padding:15px 0px;vertical-align:top;background-color:rgb(255,255,255);background-position:center center;background-repeat:no-repeat no-repeat" height="-30">
            
      
      <div style="margin:0px auto">
        <table border="0" cellpadding="0" cellspacing="0" style="width:100%;margin:0px">
          <tbody><tr>
            <td>
              <table border="0" cellpadding="0" cellspacing="0" style="width:100%;margin:0px">
                
                    <tbody><tr>
                      <td style="font-size:0px;padding:0px;word-break:break-word">
                        
      <p style="border-top-width:1px;border-top-style:solid;font-size:1px;margin:0px auto;width:100%;border-top-color:rgb(243,243,243)">
      </p>
      
      
    
    
                      </td>
                    </tr>
                  
              </tbody></table>
            </td>
          </tr>
        </tbody></table>
      </div>
      
    
          </td>
        
          </tr>
      </tbody></table>
    </div>
    
    
      
      <div style="margin:0px auto;max-width:590px;background-color:white">
        
        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%;background-color:white">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:0px;text-align:center">
                
            
           <div style="font-size:0px;line-height:0;text-align:left;display:inline-block;width:100%;direction:ltr">
        
                
      <div style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
        
      <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tbody>
          <tr>
            <td style="vertical-align:top;padding-bottom:0px">
              
      <table border="0" cellpadding="0" cellspacing="0" width="100%">
        
            <tbody>
            
            
          
            <tr>
              <td align="left" style="font-size:0px;padding:0px 10px;word-break:break-word">
                
      <table cellpadding="0" cellspacing="0" width="100%" border="0" style="font-family:&quot;Source Sans Pro&quot;,sans-serif;font-size:14px;line-height:22px;table-layout:auto;width:100%;border:none;color:rgb(40,44,63)">
        <tbody style="font-family:&quot;Source Sans Pro&quot;,sans-serif"><tr style="font-family:&quot;Source Sans Pro&quot;,sans-serif">
                <td style="font-family:&quot;Source Sans Pro&quot;,sans-serif">Sub-total (inc. Designer charge)</td>
                <td style="text-align:right;font-family:&quot;Source Sans Pro&quot;,sans-serif">Rs '.$subtotal.'</td>
              </tr>
              <tr style="font-family:&quot;Source Sans Pro&quot;,sans-serif">
                <td style="font-family:&quot;Source Sans Pro&quot;,sans-serif">Shipping Charges</td>
                <td style="text-align:right;font-family:&quot;Source Sans Pro&quot;,sans-serif;">Rs '.$shipping_charge.' </td>
              </tr>';
              if($order_data['cod_charge']>0):
                  $msg .= '<tr style="font-family:&quot;Source Sans Pro&quot;,sans-serif">
                    <td style="font-family:&quot;Source Sans Pro&quot;,sans-serif">COD Charges</td>
                    <td style="text-align:right;font-family:&quot;Source Sans Pro&quot;,sans-serif;">Rs '.$order_data['cod_charge'].' </td>
                  </tr>';
              endif;
              $msg .= '
              <tr style="font-family:&quot;Source Sans Pro&quot;,sans-serif">
                <td style="font-family:&quot;Source Sans Pro&quot;,sans-serif">Applicable Taxes(GST)</td>
                <td style="text-align:right;font-family:&quot;Source Sans Pro&quot;,sans-serif">Rs '.$order_data['total_gst'].'</td>
              </tr>
              <tr style="font-family:&quot;Source Sans Pro&quot;,sans-serif">
                <td style="font-family:&quot;Source Sans Pro&quot;,sans-serif">Thank you card</td>
                <td style="text-align:right;font-family:&quot;Source Sans Pro&quot;,sans-serif;">Rs 0.00 </td>
              </tr>


              
              
              
              
      </tbody></table>
    
              </td>
            </tr>
          
      </tbody></table>
    
            </td>
          </tr>
        </tbody>
      </table>
    
      </div>
    
              
      </div>
    
          
              </td>
            </tr>
          </tbody>
        </table>
        
      </div>
    
      
      
      <div style="margin:0px auto;max-width:590px">
        <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
          <tbody><tr style="vertical-align:top">
            
          <td style="padding:15px 0px 0px;vertical-align:top;background-color:rgb(255,255,255);background-position:center center;background-repeat:no-repeat no-repeat" height="-15">
            
      
      <div style="margin:0px auto">
        <table border="0" cellpadding="0" cellspacing="0" style="width:100%;margin:0px">
          <tbody><tr>
            <td>
              <table border="0" cellpadding="0" cellspacing="0" style="width:100%;margin:0px">
                
                    <tbody><tr>
                      <td style="font-size:0px;padding:0px;word-break:break-word">
                        
      <p style="border-top-width:1px;border-top-style:solid;font-size:1px;margin:0px auto;width:100%;border-top-color:rgb(243,243,243)">
      </p>
      
      
    
    
                      </td>
                    </tr>
                  
              </tbody></table>
            </td>
          </tr>
        </tbody></table>
      </div>
      
    
          </td>
        
          </tr>
      </tbody></table>
    </div>
    
    
      
      <div style="margin:0px auto;max-width:590px;background-color:white">
        
        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%;background-color:white">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:0px;text-align:center">
                
            
      <div style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
        
      <table border="0" cellpadding="0" cellspacing="0" style="vertical-align:top" width="100%">
        
            <tbody><tr>
              <td align="left" style="font-size:0px;padding:10px;word-break:break-word">
                
      <table cellpadding="0" cellspacing="0" width="100%" border="0" style="font-family:&quot;Source Sans Pro&quot;,sans-serif;font-size:14px;line-height:22px;table-layout:auto;width:100%;border:none;color:rgb(40,44,63)">
        <tbody style="font-family:&quot;Source Sans Pro&quot;,sans-serif"><tr style="font-family:&quot;Source Sans Pro&quot;,sans-serif">
              <td style="font-weight:bold;font-family:&quot;Source Sans Pro&quot;,sans-serif;color:rgb(40,44,63)">Grand Total</td>
              <td style="text-align:right;font-weight:bold;font-family:&quot;Source Sans Pro&quot;,sans-serif;color:rgb(40,44,63)">Rs '.$order_data['total'].'</td>
            </tr>
      </tbody></table>
    
              </td>
            </tr>
          
      </tbody></table>
    
      </div>
    
          
              </td>
            </tr>
          </tbody>
        </table>
        
      </div>
    
      
      
      <div style="margin:0px auto;max-width:590px">
        <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
          <tbody><tr style="vertical-align:top">
            
          <td style="padding:0px;vertical-align:top;background-color:rgb(255,255,255);background-position:center center;background-repeat:no-repeat no-repeat" height="0">
            
      
      <div style="margin:0px auto">
        <table border="0" cellpadding="0" cellspacing="0" style="width:100%;margin:0px">
          <tbody><tr>
            <td>
              <table border="0" cellpadding="0" cellspacing="0" style="width:100%;margin:0px">
                
                    <tbody><tr>
                      <td style="font-size:0px;padding:0px;word-break:break-word">
                        
      <p style="border-top-width:1px;border-top-style:solid;font-size:1px;margin:0px auto;width:100%;border-top-color:rgb(243,243,243)">
      </p>
      
      
    
    
                      </td>
                    </tr>
                  
              </tbody></table>
            </td>
          </tr>
        </tbody></table>
      </div>
      
    
          </td>
        
          </tr>
      </tbody></table>
    </div>
    
    
      
      <div style="margin:0px auto;max-width:590px">
        
        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:0px;text-align:center">
                
            
      <div style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
        
      <table border="0" cellpadding="0" cellspacing="0" style="vertical-align:top" width="100%">
        
            <tbody><tr>
              <td align="left" style="font-size:0px;padding:10px 10px 20px;word-break:break-word">
                
      <table cellpadding="0" cellspacing="0" width="100%" border="0" style="font-family:&quot;Source Sans Pro&quot;,sans-serif;font-size:14px;line-height:22px;table-layout:auto;width:100%;border:none;color:rgb(40,44,63)">
        <tbody style="font-family:&quot;Source Sans Pro&quot;,sans-serif"><tr style="font-family:&quot;Source Sans Pro&quot;,sans-serif">
              <td style="font-weight:600;font-family:&quot;Source Sans Pro&quot;,sans-serif;color:rgb(40,44,63)">Mode of Payment</td>
              <td style="text-align:right;font-weight:600;font-family:&quot;Source Sans Pro&quot;,sans-serif;color:rgb(40,44,63)">'.strtoupper($order_data['payment']).'</td>
            </tr>
      </tbody></table>
    
              </td>
            </tr>
          
      </tbody></table>
    
      </div>
    
          
              </td>
            </tr>
          </tbody>
        </table>
        
      </div>
    
      
      
    
      
      <div style="margin:0px auto;max-width:590px">
        
        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:0px;text-align:center">
                
            
      <div style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
        
      <table border="0" cellpadding="0" cellspacing="0" style="vertical-align:top" width="100%">
        
            <tbody><tr>
              <td align="left" style="font-size:0px;padding:0px 10px;word-break:break-word">
                
      <div style="font-family:&quot;Source Sans Pro&quot;,sans-serif;font-size:14px;line-height:1;text-align:left;color:rgb(0,0,0)">Have a wonderful day! <br/>
Cheers!
</div>
    
              </td>
            </tr>
          
            <tr>
              <td align="left" style="font-size:0px;padding:5px 10px;word-break:break-word">
                
      <div style="font-family:&quot;Source Sans Pro&quot;,sans-serif;font-size:14px;line-height:1;text-align:left;color:rgb(40,44,63)">Team Arteno</div>
    
              </td>
            </tr>
          
      </tbody></table>
    
      </div>
    
          
              </td>
            </tr>
          </tbody>
        </table>
        
      </div>
    
      
      
              </td>
            </tr>
          </tbody>
        </table>
        
      </div>
    
      
      
    
      
      
      <div style="margin:0px auto;max-width:600px">
        <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
          <tbody><tr style="vertical-align:top">
            
          <td style="padding:0px;vertical-align:top;background-color:rgb(242,242,242);background-position:center center;background-repeat:no-repeat no-repeat" height="0">
            
      
      <div style="margin:0px auto">
        <table border="0" cellpadding="0" cellspacing="0" style="width:100%;margin:0px">
          <tbody><tr>
            <td>
              <table border="0" cellpadding="0" cellspacing="0" style="width:100%;margin:0px">
                
                    <tbody>
                   <tr>
                                             <td align="center" style="font-size:0px;padding:10px 0px;word-break:break-word">
                                                <div style="font-family:&quot;Source Sans Pro&quot;,sans-serif;font-size:10px;font-weight:600;line-height:1;text-align:center;text-transform:uppercase;color:rgb(40,44,63)">Want to stay in the loop?</div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td align="center" style="font-size:0px;padding:0px;word-break:break-word">
                                                <table cellpadding="0" cellspacing="0" width="100%" border="0" style="font-family:&quot;Source Sans Pro&quot;,sans-serif;font-size:13px;line-height:22px;table-layout:auto;width:100%;border:none;color:rgb(0,0,0)">
                                                   <tbody style="font-family:&quot;Source Sans Pro&quot;,sans-serif">
                                                      <tr style="font-family:&quot;Source Sans Pro&quot;,sans-serif">
                                                         <th style="font-family:&quot;Source Sans Pro&quot;,sans-serif">
                                                            <a href="https://www.facebook.com/Arteno-100223201838813" style="text-decoration:none;font-family:&quot;Source Sans Pro&quot;,sans-serif" target="_blank" data-saferedirecturl="https://www.facebook.com/Arteno-100223201838813">
                                                            <img width="25px" src="https://ci5.googleusercontent.com/proxy/A_9U7rETw5jyJGSZIaDeh1V-exw3W9XRJfRLDdLULWgnr4uJiYogykFDF41x-syhMBx7rdEoQ7yq-EmeGfy2vk6AKVspObV0c5UYmWz-JcG2XsiTICMLMISThH4=s0-d-e1-ft#https://img.thesouledstore.com/public/theSoul/storage/mailer/Facebook.png" alt="facebook" style="margin:0px 12px;font-family:&quot;Source Sans Pro&quot;,sans-serif" class="CToWUd">
                                                            </a>
                                                             <a href="https://www.facebook.com/Arteno-100223201838813" style="text-decoration:none;font-family:&quot;Source Sans Pro&quot;,sans-serif" target="_blank" data-saferedirecturl="https://www.facebook.com/Arteno-100223201838813">
                                                            <img width="29" src="https://pngimg.com/uploads/linkedIn/linkedIn_PNG38.png" alt="facebook" style="margin: -2px 12px;font-family:&quot;Source Sans Pro&quot;,sans-serif;transform: scale(1.3);" class="CToWUd">
                                                            </a>
                                                            
                                                            <a href="https://www.instagram.com/arteno_official/?igshid=1d6y4qxyagwjf" style="text-decoration:none;font-family:&quot;Source Sans Pro&quot;,sans-serif" target="_blank" data-saferedirecturl="https://www.instagram.com/arteno_official/?igshid=1d6y4qxyagwjf">
                                                            <img width="25px" src="https://ci6.googleusercontent.com/proxy/5K1SrspRTC0i4YnTbnVtgg5n2yw9nyQJe52z2_hAhf4zuJIjTp3es7yaM3VDwzQLoIM99FmW19ZG1qUgX1BvnMO-4C5sYHKBAprcFI69m3EdZauJszj--mw=s0-d-e1-ft#https://img.thesouledstore.com/public/theSoul/storage/mailer/Insta.png" alt="instagram" style="margin:0px 12px;font-family:&quot;Source Sans Pro&quot;,sans-serif" class="CToWUd">
                                                            </a>
                                                            
                                                         </th>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </td>
                                          </tr>
                   
                  
                    <tr>
                      <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word">
                        
      <div style="font-family:&quot;Source Sans Pro&quot;,sans-serif;font-size:12px;line-height:21px;text-align:center;color:rgb(104,107,120)">'.$site_setting->cname.', '.$site_setting->caddress.' ,<br> <strong>Phone</strong> '.$site_setting->cmobile.',<br> <strong>E-mail </strong>'.$site_setting->cemail.'</div>

                      </td>
                    </tr>
                  
              </tbody></table>
            </td>
          </tr>
        </tbody></table>
      </div>
      
    
          </td>
        
          </tr>
      </tbody></table>
    </div>
    
    
      </div>
    
      <p>&nbsp;<br></p>

</div>';
?>