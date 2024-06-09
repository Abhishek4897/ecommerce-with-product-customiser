<style>
 @media (min-width: 768px) and (max-width: 1023px){
 .shipping_name{
       font-size:12px !important;
   }
   .order_date{
       font-size:10px !important;
   }
   .suser{
       font-size:15px !important;
   }
  center .checkout-button {
   font-size: 11px!important;
    padding: 7px 3px !important;
    width: 106px !important;
}
 }
   span{
   font-weight:500;
   }
   .checkout-button{
   border-radius: 30px !important;
   color: b78b2a !important;
   font-size: 13px!important;
   font-weight: 700;
   color: black;
   background-color: #111 !important;
   }
   .margin{
   margin:20px !important;
   }
   @media only screen and (max-width: 600px) {
   .btn{
   font-size: 8px!important;
   }
   .modal-header .close {
   font-size: 16px;
   }
   }
</style>
<style>
   .no-order {
   height: 50%;
   margin:auto;
   }
   ul.timeline {
   list-style-type: none;
   position: relative;
   }
   ul.timeline:before {
   content: ' ';
   background: #d4d9df;
   display: inline-block;
   position: absolute;
   left: 29px;
   width: 2px;
   height: 100%;
   z-index: 400;
   }
   ul.timeline > li {
   margin: 20px 0px 0px 20px;
   padding-left: 20px;
   }
   ul.timeline > li:before {
   content: ' ';
   background: white;
   display: inline-block;
   position: absolute;
   border-radius: 50%;
   border: 3px solid #22c0e8;
   left: 20px;
   width: 20px;
   height: 20px;
   z-index: 400;
   }
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
   .mobile-padding{
   padding-left:0px !important;
   padding-right:0px !important;
   overflow:hidden !important;
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
   .checkout-button {
   font-size: 16px;
   padding: 6px 5px;
   }
   .suser{
       font-size:18px;
   }
</style>
<?php 
$colummobile='';
$invoice = invoice();
   echo $this->session->flashdata('order_notify');
   ?>
<section class="second mt-50">
   <div class="container">
      <div class="row">
         <?php if(count($myorder)>0){
            foreach($myorder as $o):
                $check_cancel=check_cancel_order($o->id);
               $location =  $this->db->where("id",$o->location_id)->get("user_location")->row();
               $userdata =  $this->db->where("id",$_SESSION['user_id'])->get("users")->row();
            ?>
         <div class="col-md-6 col-sm-12 mt-10 mb-2">
            <div class="card shadow-sm border-0">
               <div class="card-body">
                  <div class="row">
                     <div class="col-md-7">
                        <?php if($o->is_shipping==1){?>
                        <h5 class="shipping_name ff"> <b>Order ID:<?=$invoice->order_prefix;?><?= $o->id?> </b></h5>
                        <!--<br>-->
                        <!--<span class="shipping_name ff suser"><b><?=$userdata->user_fullname?></b></span> <br>-->
                        <!--<span class="shipping_address onlyff"><strong>Shipping Address:</strong> <?= $userdata->house_no."  ".$userdata->city." ".$userdata->state." ".$userdata->pincode    ?></span><br>-->
                        <!--<span class="shipping_address onlyff"><strong>Payment :</strong> <?= ucwords($o->payment) ?></span> <br>-->
                        <?php } else { ?>
                        <h5 class="shipping_name ff"><b>Order ID: <?=$invoice->order_prefix;?><?= $o->id?></b></h5>
                        <!--<br>-->
                        <!--<span class="shipping_address onlyff"><strong>Shipping Address:</strong> <?= $location->house_no."  ".$location->city." ".$location->state." ".$location->pincode    ?></span><br>-->
                        <!--<span class="shipping_address onlyff"><strong>Payment :</strong> <?= ucwords($o->payment) ?></span> <br>-->
                        <?php }?>
                     </div>
                     <div class="col-md-5" style="padding-right:0px;">
                        <span class="order_date onlyff"><strong>Order date:</strong> <?= date("d M, Y", strtotime($o->order_date))?></span><br>
                        <span class="order_date onlyff"><strong>Order Amount:</strong> <?=$invoice->currency;?> <?= $o->total?></span><br>
                       
                     </div>
                     <div class="col-md-12">
                        <?php if($o->is_shipping==1){?>
                        <!--<h5 class="shipping_name ff"> <b>Order ID:<?=$invoice->order_prefix;?><?= $o->id?> </b></h5>-->
                        <!--<br>-->
                        <span class="shipping_name ff suser"><b><?=$userdata->user_fullname?></b></span> <br>
                        <span class="shipping_address onlyff"><strong>Shipping Address:</strong> <?= $userdata->house_no."  ".$userdata->city." ".$userdata->state." ".$userdata->pincode    ?></span><br>
                        <span class="shipping_address onlyff"><strong>Payment :</strong> <?= ucwords($o->payment) ?></span> <br>
                        <?php } else { ?>
                        <!--<h5 class="shipping_name ff"><b>Order ID: <?=$invoice->order_prefix;?><?= $o->id?></b></h5>-->
                        <!--<br>-->
                        <span class="shipping_name ff suser"><b></b></span> <br>
                        <span class="shipping_address onlyff"><strong>Shipping Address:</strong> <?= $location->house_no."  ".$location->city." ".$location->state." ".$location->pincode    ?></span><br>
                        <span class="shipping_address onlyff"><strong>Payment :</strong> <?= ucwords($o->payment) ?></span> <br>
                        <?php }?>
                     </div>
                     
                     
                     <div class="col-md-<?= ($check_cancel ||  $o->status=="cancelled")?'6':'4' ?> col-xs-<?= ($check_cancel ||  $o->status=="cancelled")?'6':'4' ?> col-<?= ($check_cancel ||  $o->status=="cancelled")?'6':'4' ?>">
                        <br>
                        <?php if($check_cancel){ ?>
                        <button class="btn btn-primary checkout-button" tyle="text-transform:capitalize;">Requested for cancel</button> 
                        <?php } else {
                           if($o->awb_code==''){
                               if($o->status=="cancelled") {
                           ?>
                        <button class="btn btn-primary checkout-button" tyle="text-transform:capitalize;"><?= $o->status ?></button>
                        <?php } else { ?>
                        <button class="btn btn-primary checkout-button" tyle="text-transform:capitalize;"><?= $o->status ?></button>
                        <?php }
                           } else if($o->status=="cancelled"){ ?>
                        <button class="btn btn-primary checkout-button" tyle="text-transform:capitalize;"><?= $o->status?></button>
                        <?php } else { ?>
                        <button class="btn btn-primary checkout-button" data-toggle="modal" data-target="#order_status<?= $o->id?>" onclick="get_status('<?=$o->awb_code?>')" tyle="text-transform:capitalize;">Track here</button>
                        <?php }
                           } ?>
                     </div>
                     
                     
                          <?php 
                           if($o->status=="pending" || $o->status=="confirmed"){
                               if(!$check_cancel) {
                             $create_time = strtotime($o->created);
                             //  after 12 hours
                             $new_time = date('Y-m-d H:i:s', strtotime($o->created.'+12 hour'));
                             $current_time = date("Y-m-d H:i:s");
                             $cancellation_time=strtotime($new_time);
                             $real_time=strtotime($current_time);
                             
                             if($create_time<=$real_time && $cancellation_time>=$real_time) {
                                 $colummobile=4;
                           ?>
                           <div class="col-md-4 col-xs-4 col-4 mt-15" style="margin-top: 20px;">
                        <center><button class="btn btn-primary checkout-button" onclick="cancel_order(<?= $o->id?>)"><i class="fa fa-times"></i> Cancel Order</button></center>
                          </div>
                        <?php }elseif($check_cancel || $o->status=="cancelled"){
                                 $colummobile=6;
                            
                                }else{
                                    $colummobile=8;
                                }
                                   
                               }
                           }
                           ?>
                   
                     
                     <div class="col-md-<?= ($check_cancel || $o->status=="cancelled")?'6':$colummobile ?> col-xs-<?= ($check_cancel || $o->status=="cancelled")?'6':$colummobile ?> col-<?= ($check_cancel || $o->status=="cancelled")?'6':$colummobile ?> mt-15">
                        <br>
                        <a href="<?=base_url('User/order_details')?>/<?= $o->id?>"><button class="btn btn-light checkout-button" style="float:right;">Details</button></a>
                     </div>
                     <!--<div class="col-md-4 col-xs-4 col-4 mt-15 d-block d-xs-block d-sm-none d-md-none d-lg-none" style="margin-top: 10px;">-->
                          <?php 
                        //   if($o->status=="pending" || $o->status=="confirmed"){
                        //       if(!$check_cancel) {
                        //      $create_time = strtotime($o->created);
                        //      //  after 12 hours
                        //      $new_time = date('Y-m-d H:i:s', strtotime($o->created.'+12 hour'));
                        //      $current_time = date("Y-m-d H:i:s");
                        //      $cancellation_time=strtotime($new_time);
                        //      $real_time=strtotime($current_time);
                        //      if($create_time<=$real_time && $cancellation_time>=$real_time) {
                           ?>
                        
                        <!--<button class="btn btn-primary checkout-button d-block d-xs-block d-sm-none d-md-none d-lg-none" onclick="cancel_order(<?= $o->id?>)"><i class="fa fa-times"></i> Cancel Order</button>-->
                        <?php //} }
                         //  }
                           ?>
                     <!--</div>-->
                  </div>
               </div>
            </div>
         </div>
         <!--tracking modal start-->
         <div class="modal fade" id="order_status<?= $o->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title ff" id="exampleModalLabel"> <strong><?= $invoice->order_prefix . $o->id ?></strong></h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body text-center" style="height:300px;overflow-y:scroll;">
                     <img src="<?=base_url()?>uploads/load.gif" id="order_stuatus_loader<?=$o->awb_code?>">
                     <h3 id="new_track_status<?=$o->awb_code?>"> </h3>
                     <h4 id="current_status<?=$o->awb_code?>"></h4>
                     <h4 id="update_date<?=$o->awb_code?>"></h4>
                     <ul class="timeline" id="order_timeline<?=$o->awb_code?>">
                     </ul>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div>
         <!--tracking modal end-->
         <?php endforeach; }else{?>
      </div>
      <center>
         <img src="<?= base_url()?>assets/images/no-order.png" class="no-order">
         <p style="text-align: center;font-size: 14px;margin: 20px 0px;font-weight: bold;color:black">No order found</p>
         <a href="<?= base_url()?>"> <button class="btn btn-primary">CONTINUE SHOPPING</button></a>
      </center>
      <?php }?> 
      <div class="modal fade" id="order_status1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"> <strong>ORDER STATUS</strong></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body text-center mobile-overflow">
                  <div class="steps">
                     <!--<div class="steps-header">-->
                     <!--    <div class="progress">-->
                     <!--        <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>-->
                     <!--    </div>-->
                     <!--</div>-->
                     <div class="steps-body" style="display:flex;">
                        <div class="">
                           <img src="<?= base_url()?>assets/order_gif.gif">
                           <br> <br>
                           <strong>Order Status : Processing</strong>
                        </div>
                        <!--<div class="step step-completed"><span class="step-indicator">-->
                        <!--    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>-->
                        <!--    </span>-->
                        <!--    <span class="step-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg></span> confirmed</div>-->
                        <!--<div class="step step-completed"><span class="step-indicator"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></span><span class="step-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></span>Processing </div>-->
                        <!--<div class="step step-active"><span class="step-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg></span>Quality check</div>-->
                        <!--<div class="step"><span class="step-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-truck"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg></span> Dispatched</div>-->
                        <!--<div class="step"><span class="step-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></span>Delivered</div>-->
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<br>
<script>
   function cancel_order(value) {
       event.preventDefault();
       var order_id=value;
       swal({
           title: "",
           text: "Are you sure to cancel this order?",
           icon: "warning",
           buttons: true,
           dangerMode: true,
       })
       .then((willDelete) => {
           if (willDelete) {
               window.location.href = "<?=base_url('cancel_order/')?>"+order_id;
           } else {
               return false;
           }
       });
   }
   
   function get_status(value){
    $("#order_stuatus_loader"+awb).show();
      var awb=value;
      $.ajax({
       url: "<?=base_url()?>home/getDeliveryStatus/"+awb,
       type: "GET",
       success: function(jd) {
           $("#order_stuatus_loader"+awb).hide();
           // document.getElement/ById("new_loader_order").style.display = "none";
            var obj = JSON.parse(jd);
           console.log(obj);
           if(obj.tracking_data && obj.tracking_data.track_status==0){
              
               document.getElementById("new_track_status"+awb).innerHTML = "Current Status: Placed";
           }
            else{
               document.getElementById("new_track_status"+awb).innerHTML = "Current Status: "+ obj.current_status;
               // $('#current_status'+awb).html(' Current Status: ' + obj.current_status + '');
                  $('#update_date'+awb).html(' Date: ' + obj.etd + '');
               //   $('#order_id'+awb).html(' Order Id :  ' + obj.order_id + '');
                  $('#order_timeline'+awb).html('');
                  $.each(obj.scans, function( index, jd_array ) {
                      $('#order_timeline'+awb).append('<li><a target="" href=""> ' + jd_array.location + '</a><a href="#" class="float-right">' + jd_array.date+ '</a><p>'+jd_array.activity +'</p>');
                  });
           
       }
       
       }
       
      });
   }
</script>