<?php  $invoice = invoice();?>
<style>
.btn-primary {
    color: #fff;
    background-color: #007bff!important;
    border-color: #007bff!important;
}
.invoice{
    color: #111!important;
    font-size: 18px!important;
    font-weight: 500!important;
}
</style>
<style>
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
<div class="col-lg-8 col-md-12">
  <div class="login-content">
      <div class="row d-block d-xs-block d-sm-none d-md-none d-lg-none d-xl-none">
            <div class="col-md-12 text-center">
                <span class="navigate_header"> <a href="<?=base_url('user/user_panel')?>" class="text-black"><i class="fas fa-chevron-left"></i>&nbsp;&nbsp; My orders </a> </span>
            </div>
        </div>
         <?php if(count($myorder)>0){
              foreach($myorder as $o):
                 $location =  $this->db->where("id",$o->location_id)->get("user_location")->row();
              ?>
        <div class="card shadow-sm mt-4">
            <div class="card-body">
             
               <div class="row mt-4">
            <div class="col-md-6 ">
                <span class="shipping_name">Order ID: <?=$invoice->order_prefix;?><?= $o->id?></span><br>
                <span class="shipping_address"><strong>Shipping Address:</strong> <?= $location->house_no."  ".$location->city." ".$location->state." ".$location->pincode    ?> </span></br>
                <span class="shipping_address"><strong>Payment :</strong> <?= $o->payment?></span> </br>
                 
            </div>
            <div class="col-md-6">
                 <span class="order_date">Order date: <?= $o->order_date?></span><br>
                 <span class="order_date">Order Amount: Rs <?= $o->total?></span></br>
                 
            </div>
            
            <div class="col-md-6 col-sm-6 col-6 mt-15">
                <?php if($o->awb_code==''){if($o->status=="cancelled") {?>
                       <span class="badge badge-success" style="text-transform:capitalize;font-size: 16px;border-radius:20px;"><?= $o->status?></span>
                       <?php } else {?>
                <span class="badge badge-success" style="text-transform:capitalize;font-size: 16px;border-radius:20px;"><?= $o->status?></span>
                 <?php } } else if($o->status=="cancelled"){?>
                 <span class="badge badge-danger" style="text-transform:capitalize;font-size: 16px;border-radius:20px;"><?= $o->status?></span>
                 <?php } else {?>
                 <span  class="badge badge-info" data-toggle="modal" data-target="#order_status<?= $o->id?>" onclick="get_status('<?=$o->awb_code?>')" style="text-transform:capitalize;font-size: 16px;border-radius:20px;cursor: pointer;">Track here</span>
                 <?php }?>
               
            </div>
             <div class="col-md-6 col-sm-6 col-6 mt-15">
               <a href="<?=base_url('User/order_details')?>/<?= $o->id?>"><button class="btn btn-light" style="float:right;">Details</button></a>
            </div>
            
        </div>
            </div>
        </div>
        <!--tracking modal start-->
        <div class="modal fade" id="order_status<?= $o->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> <strong><?= $invoice->order_prefix . $o->id ?></strong></h5>
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
       <?= " <h1> No order Available </h1> "?>
       
       <?php }?>
        
        
    
  </div>
</div>
<script>
   
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