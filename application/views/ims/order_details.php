<?php 
   $this->load->view('ims/includes/header');
   $this->load->view('ims/includes/sidebar');
   ?>
<style>

   .steps .step {
   display: block;
   width: 100%;
   margin-bottom: 35px;
   text-align: center
   }
   .steps .step .step-icon-wrap {
   display: block;
   position: relative;
   width: 100%;
   height: 80px;
   text-align: center
   }
   .steps .step .step-icon-wrap::before,
   .steps .step .step-icon-wrap::after {
   display: block;
   position: absolute;
   top: 50%;
   width: 50%;
   height: 3px;
   margin-top: -1px;
   background-color: #e1e7ec;
   content: '';
   z-index: 1
   }
   .steps .step .step-icon-wrap::before {
   left: 0
   }
   .steps .step .step-icon-wrap::after {
   right: 0
   }
   .steps .step .step-icon {
   display: inline-block;
   position: relative;
   width: 80px;
   height: 80px;
   border: 1px solid #e1e7ec;
   border-radius: 50%;
   background-color: #f5f5f5;
   color: #374250;
   font-size: 38px;
   line-height: 81px;
   z-index: 5
   }
   .steps .step .step-title {
   margin-top: 16px;
   margin-bottom: 0;
   color: #606975;
   font-size: 14px;
   font-weight: 500
   }
   .steps .step:first-child .step-icon-wrap::before {
   display: none
   }
   .steps .step:last-child .step-icon-wrap::after {
   display: none
   }
   .steps .step.completed .step-icon-wrap::before,
   .steps .step.completed .step-icon-wrap::after {
   background-color: #0da9ef
   }
   .steps .step.completed .step-icon {
   border-color: #0da9ef;
   background-color: #0da9ef;
   color: #fff
   }
   @media (max-width: 576px) {
   .flex-sm-nowrap .step .step-icon-wrap::before,
   .flex-sm-nowrap .step .step-icon-wrap::after {
   display: none
   }
   }
   @media (max-width: 768px) {
   .flex-md-nowrap .step .step-icon-wrap::before,
   .flex-md-nowrap .step .step-icon-wrap::after {
   display: none
   }
   }
   @media (max-width: 991px) {
   .flex-lg-nowrap .step .step-icon-wrap::before,
   .flex-lg-nowrap .step .step-icon-wrap::after {
   display: none
   }
   }
   @media (max-width: 1200px) {
   .flex-xl-nowrap .step .step-icon-wrap::before,
   .flex-xl-nowrap .step .step-icon-wrap::after {
   display: none
   }
   }
   .bg-faded, .bg-secondary {
   background-color: #f5f5f5 !important;
   }
   .mt-20{
   margin-top: 20px;
   }
</style>
<div class="pcoded-content">
   <div class="page-header">
      <div class="page-block">
         <div class="row align-items-center">
            <div class="col-md-8">
               <div class="page-header-title">
                  <h5 class="m-b-10"> Order-Details</h5>
                  <!--<p class="m-b-0">Welcome to ims dashboard</p>-->
               </div>
            </div>
            
         </div>
      </div>
   </div>
   <div class="pcoded-inner-content">
      <div class="main-body">
         <div class="page-wrapper">
            <div class="page-body">
              
               <div class="row">
                  <div class="col-sm-12">
                     <div class="card">
                        <div class="card-header">
                           <div class="row">
                              <div class="col-8">
                                  <?php  $other_charge=$orderlists->shipping_charge + $orderlists->cod_charge + $orderlists->total_gst;
                                  $product_amount= $orderlists->total - $other_charge;
                                  $order_delivery=$orderlists->shipping_charge + $orderlists->cod_charge;
                                  ?>
                                <h4> Order Id: <?= $invoice_data->order_prefix ?><?= $id ?></h4>
                                <h6> Total Amount: <?= $orderlists->currency;?><?=  number_format($orderlists->total ,2) ?></h6>
                                
                                <h6> Shipping Charges(inc. all) : <?= $orderlists->currency;?><?= number_format($order_delivery ,2); ?></h6>
                                <h6>  Total GST: <?= $orderlists->currency;?><?=  number_format($orderlists->total_gst ,2); ?></h6>
                              </div>
                              <div class="col-4">
                                
                                 <a href="<?=base_url()?>Invoice/generate/<?= $id?>"><button class="btn btn-info" ><i class="fa fa-file"></i> Generate Invoice</button></a>
                              </div>
                           </div>
                        </div>
                        	<?= $this->session->flashdata('message') ?>
                        <div class="card-block">
                           
                            
                           <div class="dt-responsive table-responsive">
                              <table id="order-table" class="table table-striped table-bordered nowrap">
                                 <thead>
                                    <tr>
                                       <th>#</th>
                                      
                                       <th>Product</th>
                                       <th>Product name</th>
                                       <th>Quantity</th>
                                       <th>GST</th>
                                       <th>Product Price</th>
                                       <th>Price (with Designer Charge.)</th>
                                      
                                    </tr>
                                 </thead>
                                 <tbody>
                                     <?php
                                     $ocounter=0;
                                    
                                     foreach($myorders as $myorder){
                                       
                                         $ocounter++;
                                        $images= json_decode($myorder->screenshots);
                                        $variation= json_decode($myorder->variations);
                                        $this->db->where('id',1);
            $q = $this->db->get('invoice-details');
             $setting_data= $q->row();
             $products_gst=json_decode($setting_data->gstp);
            $pro_duct=$products_gst[1];
            foreach($products_gst[0] as $key=>$p_id){
             if($myorder->product_id== $p_id){
              $gst=$pro_duct[$key];
             }
            }
                                     ?>
                                    <tr>
                                       <td><?= $ocounter ?></td>
                                       
                                       <td>
                                           <?php
                                           foreach($images as $image){
                                            
                                           ?>
                                           <img class="img-fluid img-circle user-thumbnail" src="<?php echo base_url() ?>uploads/orders/<?= $image ?>" alt="" style="height:80px;width:80px;border-radius:0%" data-toggle="modal" data-target="#image<?=$myorder->id?>">
                                 
                                           <?php }?>
                                           </td>
                                           <td><?= $myorder->product_name?>
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
                                           <td><?= $myorder->qty ?></td>
                                           <td>Rate: <?= $gst ?> % <br/>
                                           &#8377;<?= number_format($myorder->product_price * $gst /100 ,2) ?>
                                           </td>
                                           <td>&#8377; <?= $myorder->product_price ?></td>
                                       <td>&#8377; <?= $myorder->total_price ?></td>
                                       
                                           
                                       
                                    </tr>
                                     <div class="modal fade" id="image<?=$myorder->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <?php
                                           foreach($images as $image){
                                            
                                           ?>
       <center><img class="img-fluid img-circle user-" src="<?php echo base_url() ?>uploads/orders/<?= $image ?>" alt="" style="height:auto;width:100%;border-radius:0%"></center>
      <?php }?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
                                   
                                <?php   } ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="styleSelector">
         </div>
      </div>
   </div>
</div>
<!-- The Modal -->

<?php
   $this->load->view('ims/includes/footer');
   ?>