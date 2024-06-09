<?php include(__DIR__.'/../includes/header.php');
$this->load->view('arteno/includes/designer_header.php');
?>
<style>
.not-found{
    height:400px;
    width:500px;
    margin:auto;
}
    .shipping_name{
        color:#111;
        font-weight:600;
    }
    span{
        font-weight:500;
    }
     .checkout-button{
      border-radius: 30px !important;
    color: b78b2a !important;
    font-size: 17px;
    font-weight: 700;
    color: black;
    background-color: #111 !important;
}
</style>

<style>
.d-flex input[type="checkbox"]{
    height:24px;
    width:24px;
}
.mt-60{
    margin-top:50px;
    margin-left:10px;
}
@media only screen and (max-width: 600px) {
    .not-found{
        height:auto;
        width:100%;
        margin:auto;
    } 
    .d-flex input[type="checkbox"]{
        height:24px;
        width:24px;
    }
    .btn {
    /*padding: 11px 23px;*/
    font-size: 10px;
}
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
<?php
    $invoice = invoice();
    $d_id=$this->session->userdata('designer_id');
    $payout=all_payout_requests($d_id);
?>
<section class="second mt-50">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-1"></div>
            <div class="col-md-6 col-10">
                <?php if(count($payout)>0){?>
                <button class="btn btn-primary offset-md-2" onclick="request_bulk_payout()" id="request_button">Request payout for selected orders</button> <span id="ordercounter"></span>
                <button class="btn btn-primary offset-md-2" id="disable_button" onclick="show_alert()" style="display:none;background:darkgrey!important;">Request payout for selected orders</button>
                <?php } ?>
            </div>
        </div>
     <div class="row">
         <?php 
                // $d_id=$this->session->userdata('designer_id');
                // $payout=payout($d_id);
                if(count($payout)>0){
                foreach($payout as $pay):
                $templates=$this->Designer_model->templates($pay->template_id);
              ?>
         <div class="col-md-8 col-lg-8 mt-10 offset-md-2">

             <div class="card shadow-sm border-0">
                 <div class="d-flex">
                 <?php if($pay->status==1){ ?>
                    <input type="checkbox" onchange='ordercounter(this.checked)' class="select_payout mt-60" name="prequest[]" id="" value="<?= $pay->id?>">
                 <?php } else { ?>
                    <input type="hidden" class="mt-60">
                 <?php } ?>
            <div class="card-body">
                 <!--<span class="shipping_name">Order ID: <?= site_setting()->order_prefix . $pay->order_id;?></span><br>-->
                    <div class="row">
                        <div class="col-md-2 col-sm-6 col-6">
                            <div class="product-thumbnail">
                                <a href="#">
                                <img src="<?=$templates->screenshot?>" alt="item" style="height:70px;">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-6">
                            <div class="product-name">
                                <a href="#" class="shipping_name"><?= $templates->name." (".$pay->template_id.")"?></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-6">
                             <span class="shipping_address"><strong>Payout Price:</strong> <?= site_setting()->currency;?> <?=$pay->payout + $pay->extras?></span>
                             
                             <?php if($pay->status==3){?>
                             <span class="shipping_address" data-toggle="modal" data-target="#payout_response<?= $pay->id?>" style="cursor:pointer;"><strong><i class="fa fa-file"></i> Payout response</strong></span>
                            <?php }?>
                          </div>
                        <div class="col-md-4 col-sm-6 col-6 text-center">
                            <?php if($pay->status==1){?>
                           <a href="<?=base_url('Designer/add_request/'.$pay->id)?>" class="add_request_button"><button class="btn btn-info checkout-button" style="border-radius:20px;">Send Request</button></a>
                           <button class="btn btn-info checkout-button add_disable_button" onclick="show_alert()"  style="border-radius:20px;background:darkgrey!important;color:#fff!important;display:none;">Send Request</button>  
                           <?php } else if($pay->status==2){ ?>
                           <button class="btn btn-warning  checkout-button" style="border-radius:20px;">Requested</button>
                           <?php } else if($pay->status==3){?>
                           <button class="btn btn-success checkout-button" style="border-radius:20px;">Completed</button>
                           <?php }?>
                           <!--tracking modal start-->
                    <div class="modal fade" id="payout_response<?=$pay->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Payout Response</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body text-center">
                      <div class="row">
                          <div class="col-md-12">
                              <img src="<?=$pay->payment_screenshot;?>"  alt="..." style="height:140px;" >
                              <br>
                              <?php if($pay->note){?>
                              <p><?=$pay->note;?></p>
                              <?php }?>
                              </div>
                          </div>
                      
                        
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    
                  </div>
                </div>
              </div>
            </div>
                    <!--tracking modal end-->
                        </div>
                    </div>
            </div>
            
            </div>
            </div>
            
         </div>
         <?php endforeach; }else{?>
         
      <img src="<?= base_url()?>assets/order-not-found.png" class="not-found" style="background-size:cover;background-repeat: no-repeat; background-position: center;">
       
       <?php }?> 
         
        
     </div>

            </div>
            </section>
            
            <script>
            $(document).ready(function(){
                <?php $check_payment=payment_details($d_id);?>
                var validate_payment=<?=($check_payment)?1:0;?>;
                if(validate_payment==0){
                   swal({
                      title: "Please fill payment details first?",
                      icon: "warning",
                      buttons: true,
                      dangerMode: true,
                    })
                    .then((willDelete) => {
                      if (willDelete) {
                             window.location.href="<?=base_url('account_details')?>";
                      } else {
                        
                      }
                    });
                    
                        $('#request_button').hide();
                        $('#disable_button').show();
                        $('.add_request_button').hide();
                        $('.add_disable_button').show();
                }else {
                    $('#request_button').show();
                    $('#disable_button').hide();
                    $('.add_request_button').show();
                    $('.add_disable_button').hide();
                }
            });
            
            function show_alert(){
                swal({
                      title: "Please fill payment details first?",
                      icon: "warning",
                      buttons: true,
                      dangerMode: true,
                    })
                    .then((willDelete) => {
                      if (willDelete) {
                             window.location.href="<?=base_url('account_details')?>";
                      } else {
                        
                      }
                    });
            }
              
                var cvalue=0;
                function ordercounter(value){
                    if(value==true){
                       var count = $("[type='checkbox']:checked").length;
                        // $('#ordercounter').html(cvalue); 
                    }
                }
                function request_bulk_payout() {
                    var count = $('.select_payout:checked').length;
                    if(count>0){
                        // $(".spinner-wrapper").show();
                        // var payout_ids = [];
                  		$(".select_payout:checked").each(function(){    
                  		// 	payout_ids.push($(this).val());
                      		$.get("<?=base_url('Designer/add_request/')?>"+$(this).val(), function(data, status){
                            });
                  		});
                  		// $(".spinner-wrapper").hide();
                  		alert("Bulk payout requested.");
                  		location.reload();
                    } else {
                        alert("Please select any pending orders.");
                    }
                }
                
                
            </script>
<?php include(__DIR__.'/../includes/footer.php');?>