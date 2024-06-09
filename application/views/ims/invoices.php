<?php 
$this->load->view('ims/includes/header');
$this->load->view('ims/includes/sidebar');
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
                                                      <table class="table table-responsive invoice-table table-borderless">
                                                           <thead>
                            <tr style="border:0px;">
                                <th colspan="2" class="text-center pad" style="text-align:center;border:0px;">
                                <img src="<?=$site_setting->invoicelogo;?>" alt="" style="height:90px;">
                                </th>
                                <th colspan="2" class="text-center pad"style="border: 0px;"></th>
                                <th colspan="2" class=" pad" style="border:0px;" >
                                   <span style="font-size:22px; "><?=$site_setting->cname?></span><br> <?=$site_setting->caddress?><br>
                                    Email: <?=$site_setting->cemail?><br/>
                                Mob.No: <?=$site_setting->cmobile?>
                                 <!--<img src="'.$secondimage.'" alt="" style="height:90px;">-->
                                </th>
                                </thead>
                                                         <tbody>
                                                          
                                                        
                                                         </tbody>
                                                      </table>
                                                   </div>
                                                </div>
                                             </div>
                                            
                                          </div>
                                          <div class="card-block">
                                             <div class="row invoive-info">
                                                <div class="col-md-4 col-xs-12 invoice-client-info">
                                                   <h6>Client Information :</h6>
                                                   <h6 class="m-0"><?=$user->user_fullname?></h6>
                                                   <p class="m-0 m-t-10"><?=$add->house_no?>, <?=$add->city?>, <?=$add->pincode?></p>
                                                   <p class="m-0"><?=$user->user_phone?></p>
                                                   <p><a href="mailto:<?=$user->user_email?>"><?=$user->user_email?></a></p>
                                                </div>
                                                <div class="col-md-4 col-xs-12 ">
                                                   
                                                </div>
                                                <div class="col-md-4 col-xs-12">
                                                    <h6 class="m-b-20">Order Date <span><?=date("d-M-Y", strtotime($orderlists->created))?></span></h6>
                                                   <h6 class="m-b-20">Order Id <span>#Arteno_IN_<?=$orderlists->id?></span></h6>
                                                   <h6 class="text-uppercase text-primary">Payment method :
                                                      <span><?=$orderlists->payment?></span>
                                                   </h6>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-sm-12">
                                                   <div class="table-responsive">
                                                      <table class="table  invoice-detail-table">
                                                         <thead>
                                                            <tr class="thead-default">
                                                               <th>Name</th>
                                                               <th>Quantity</th>
                                                               <th>GST</th>
                                                               <th>Amount</th>
                                                              
                                                            </tr>
                                                         </thead>
                                                         <tbody>
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
                                                         </tbody>
                                                      </table>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-sm-12">
                                                   <table class="table table-responsive invoice-table invoice-total">
                                                      <tbody>
                                                         <tr>
                                                            <th>Sub Total :</th>
                                                            <td> ₹ <?= number_format($total ,2);?></td>
                                                         </tr>
                                                         <tr>
                                                            <th> Shipping Charge(all) :</th>
                                                            <td><?= $orderlists->currency;?><?=number_format($orderlists->shipping_charge + $orderlists->cod_charge ,2) ; ?></td>
                                                         </tr>
                                                         <tr>
                                                            <th>GST :</th>
                                                            <td><?= $orderlists->currency;?><?= number_format($orderlists->total_gst ,2);  ?></td>
                                                         </tr>
                                                         <tr>
                                                            <th>Thanks card :</th>
                                                            <td><?= $orderlists->currency;?><?= number_format(0 ,2);  ?></td>
                                                         </tr>
                                                         
                                                         <tr class="text-info">
                                                            <td>
                                                               <hr />
                                                               <h5 class="text-primary">Total :</h5>
                                                            </td>
                                                            <td>
                                                               <hr />
                                                               <h5 class="text-primary">₹ <?=  number_format($total + $orderlists->total_gst + $orderlists->shipping_charge + $orderlists->cod_charge ,2) ;?></h5>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-sm-12">
                                                   <h6>Terms And Condition :</h6>
                                                   <p>Content
                                                   </p>
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
$this->load->view('ims/includes/footer');
?>