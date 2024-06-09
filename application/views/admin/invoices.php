<?php 
   $this->load->view('admin/includes/header');
   $this->load->view('admin/includes/sidebar');
   $site_setting=$this->db->where('id',1)->get('invoice-details')->row();
   ?>     
<style>
   .pad{
   padding: 10px 50px 50px 51px !important;
   }
</style>
<div class="pcoded-content">
   <div class="pcoded-inner-content">
      <div class="main-body">
         <div class="page-wrapper">
            <div class="page-body">
               <div class="container">
                  <div>
                     <div class="card" id="printableArea">
                        <div class="row invoice-contact">
                           <div class="col-md-12">
                              <div class="invoice-box row">
                                 <div class="col-sm-12">
                                     <table  class="table" cellspacing="0" width="100%" style="width:100%background:#fff;" border="1">
                                            <thead>
                                                <tr>
                                                    <th colspan="4" class="text-center"> <center><img src="<?=$site_setting->invoicelogo;?>" alt="" style="height:90px;"></center></th>
                                                    
                                                    <!--th class="text-center" style="width: 100px;"> Action</th-->
                                           <tbody>
                                                <tr>
                                                    <td colspan="4">
                                                        <table class="table" border="0">
                                                            <tr>
                                                                <td valign="top">
                                                                    
                                                                     <strong> Invoice No. #Arteno_IN_<?=$orderlists->id?></strong>
                                                                     <br>
                                                                <strong> Order Id : #Arteno_IN_<?=$orderlists->id?></strong>
                                                                <br />

                                                                <strong>Order Date : <?=date("d-M-Y", strtotime($orderlists->created))?></strong>
                                                                
                                                                <br />
                                                         <strong>Payment method : : <?=$orderlists->payment?></strong>
                                                                </td>
                                                                <td>
                                                                    <strong>Delivery Details :</strong><br />
                                                                    <strong>Contact :<?=$user->user_fullname?> <br/>Contact : <?=$user->user_phone?><br/>E-mail : <?=$user->user_email?></strong>
                                                                    <br />
                                                                    <strong>Address :</strong>
                                                                    <address>
                                                                        <?=$add->house_no?><br> <?=$add->city?><br><?=$add->state?><br> <?=$add->pincode?>
                                                                    </address>
                                                                    
                                                                 </td>
                                                                
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                    
                                                    <th>Product Name</th>
                                                    <th>Quantity</th>
                                                    <th>GST</th>
                                                    <th>Amount</th>
                                                </tr>
                                                <?php $i=1; 
                                             $total=0;
                                                foreach($myorders as $pro){
                                                    $total=$total + $pro->product_price;
                                                     
                                                }
                                                foreach($myorders as $pro):
                                                
                                                $variation= json_decode($pro->variations);
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
                                             ?>
                                          <tr>
                                             <td>
                                                <h6><?=$pro->product_name?></h6>
                                                <br/><br/>
                                                <?php if($variation[0]!=null) {?>
                                                <button class="badge badge-default" style="background-color:<?=$variation[0]?>;border-color:<?=$variation[0]?>;"><?=$variation[0]?></button>
                                                <?php } else {?>
                                                <button class="badge badge-default">Base Color</button>
                                                <?php }?>
                                                <br/><br/>
                                                <?php if($variation[1]=='S' || $variation[1]=='M' || $variation[1]=='XL' || $variation[1]=='XXL') {?>
                                                <span class=""> SIZE : <?=$variation[1]?></span>
                                                <?php } ?>
                                             </td>
                                             <td><?=$pro->qty?></td>
                                             <td>Rate: <?= $gst ?> % <br/>
                                                &#8377;<?php $gst_price=$pro->product_price * $gst /100;
                                                   echo number_format( $gst_price,2); ?>
                                             </td>
                                             <td><?=$pro->currency?> <?=$pro->product_price?></td>
                                          </tr>
                                          <?php $i++; endforeach;?>
                                                
                                                <tr>
                                                    <td colspan="2"><strong class="pull-right">Sub Total :</strong></td>
                                                    <td colspan="2">
                                                        <strong class="text-center"> ₹ <?= number_format($total ,2);?> </strong>
                                                    </td>
                                                </tr>
                                                    <tr>
                                                    <td colspan="2"><strong>Shipping Charge(all) :</strong></td>
                                                    <td colspan="2"><strong><?= $orderlists->currency;?><?=number_format($orderlists->shipping_charge + $orderlists->cod_charge ,2) ; ?></strong></td>
                                                    </tr>
                                                    <tr>
                                                    <td colspan="2"><strong>GST</strong></td>
                                                    <td colspan="2"><strong><?= $orderlists->currency;?><?= number_format($orderlists->total_gst ,2);  ?></strong></td>
                                                    </tr>
                                                    <tr>
                                                    <td colspan="2"><strong>Thanks card :</strong></td>
                                                    <td colspan="2"><strong><?= $orderlists->currency;?><?= number_format(0 ,2);  ?></strong></td>
                                                    </tr>
                                                <tr>
                                                    <td colspan="2"><strong class="pull-right">Total :</strong></td>
                                                    <td colspan="2">
                                                        <strong class="text-center">₹ <?=  number_format($total + $orderlists->total_gst + $orderlists->shipping_charge + $orderlists->cod_charge ,2) ;?></strong>
                                                    </td>
                                                </tr>
                                                
                                               
                                            </tbody>
                                        </table>
                                                                
                                                                
                               
                                    
                              </div>
                           </div>
                           
                        </div>
                     </div>
                     <div class="row text-center">
                        <div class="col-sm-12 invoice-btn-group text-center">
                           <button type="button" class="btn btn-primary btn-print-invoice m-b-10 btn-sm waves-effect waves-light m-r-20" onclick="printDiv('printableArea')">Print</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="styleSelector"></div>
   </div>
</div>
<script type="text/javascript">  
   function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
   
    document.body.innerHTML = printContents;
   
    window.print();
   
    document.body.innerHTML = originalContents;
   }
</script>
<?php 
   $this->load->view('admin/includes/footer');
   ?>