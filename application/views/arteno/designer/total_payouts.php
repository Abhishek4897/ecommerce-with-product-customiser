<?php 
include(__DIR__.'../../includes/header.php');
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
   .wishlist-img-top {
    /*height: 100% !important;*/
    height: 100px !important;
    width: 100px!important;
    margin-top:15%;
}
   
   
   .wishlist-card {
       height:auto;
   }
    .d-flex input[type="checkbox"]{
        height:24px;
        width:24px;
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
   .wishlist-card {
   display: flex;
   /*height: 165px;*/
   height:auto;
   
   position: relative;
   border: 1px solid rgba(198, 198, 198, 0.6);
   box-shadow: rgba(0, 0, 0, 0.1) 0px 2px 4px 0px;
   }
    .wishlist-img-top {
        /*height: 100%;*/
        /*width:225px*/
        height: 100px;
        width: 100px;
        /*width: 150px;*/
        /*margin-top: 5%;*/
        margin: 5%;
        margin-right:30px;
    }
   
   }
   .wishlist-close {
   width: 20px;
   height: 20px;
   position: absolute;
   border-radius: 50%;
   top: -9px;
   right: 13px;
   cursor: pointer;
   font-weight: bold;
   font-size: 14px;
   border-radius: 50%;
   padding: 0px 0px -1px 4px;
   text-align: center;
   vertical-align: middle;
   transform: scale(1.5);
   box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
   }
   .active-menu {
    font-weight: bold;
    border-left: 5px solid red;
}
   .wishlist-detail {
   font-size: 15px;
   font-weight: bold;
   margin-top: 18px;
   padding-left: 10px;
   }
   .gOnJqW {
   font-size: 25px;
   line-height: 25px;
   color: rgb(174, 3, 3);
   margin-top: 6px;
   display: block;
   min-height: 25px;
   padding-left: 10px;
   }
   .mb-4, .my-4 {
    margin-bottom: 2rem!important;
}
   .wish-product-name {
   font-size: 15px;
   font-weight: bold;
  
   padding-left: 10px;
   }
   .wishlist-button {
   line-height: 30px;
   text-align: center;
   border: 1px solid rgb(203, 203, 203);
   border-radius: 15px;
   cursor: pointer;
   font-size: 14px;
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
<?php  $invoice = invoice();?>
<section class="second mt-50">
    <div class="container">
        <center>
            <!--<button class="btn btn-primary  btn-block">-->
            <h5 class="navigate" style="font-weight: 500;font-size: 30px;">
                TOTAL EARNING
                </h5>
                <!--</button>-->
                </center>
     <div class="row">
         <?php 
            
            $d_id=$this->session->userdata('designer_id');
                $payout=payout($d_id);
                if(count($payout)>0){
                foreach($payout as $pay):
                $templates=$this->Designer_model->templates($pay->template_id);
                
              ?>
         <div class="col-md-8 col-lg-8 mt-10 offset-md-2">
             
                 
             
             <div class="card shadow-sm border-0 mt-2">
                 
                 
                <!--<div class="card-body">-->
                    <div class="wishlist-card">
                        <div style="">
                            <img src="<?= $templates->screenshot ?>" class="wishlist-img-top" style="">
                        </div>
                        <div class="mt-2" style="flex: 1.2 1 0%; background: white;">
                            <div style="position: relative;margin-left:15px">
                                <div class="wish-product-name"><b><?= $templates->name ?></b></div>
                                <div class="wish-product-name">Quantity: <?= $pay->qty; ?></div>
                                <div class="wish-product-name">Your earning: <?= $pay->payout ?></div>
                                <!--<div style="display:none" class="d-block1 d-sm-block1 d-md-none d-lg-none d-none">-->
                                <!--<?php if($pay->status==1){?>-->
                                <!--    <a class="" style="border-radius:20px; padding: 6px 13px; font-size: 12px; color:blue;">Pending</a>-->
                                <!--<?php } else if($pay->status==2){ ?>-->
                                <!--    <a class="" style="border-radius:20px; padding: 6px 13px; font-size: 12px; color:yellow;">Requested</a>-->
                                <!--<?php } else if($pay->status==3){?>-->
                                <!--    <a class="" style="border-radius:20px; padding: 6px 13px; font-size: 12px; color:green;">COMPLETED</a>-->
                                <!--<?php }?>-->
                                <!--</div>-->
                                </div>
                                
                                <!--<div class="wish-product-name"><b>Total</b>: 500</div>-->
                                <!--<div class="d-none d-sm-none d-md-block d-lg-block" style="float:right;    margin: 22px; margin-top:-46px;">-->
                                <!--<?php if($pay->status==1){?>-->
                                <!--    <button class="btn btn-primary checkout-button" style="border-radius:20px; padding: 11px 23px; font-size: 12px;">Pending</button>-->
                                <!--<?php } else if($pay->status==2){ ?>-->
                                <!--    <button class="btn btn-warning checkout-button" style="border-radius:20px; padding: 11px 23px; font-size: 12px; ">Requested</button>-->
                                <!--<?php } else if($pay->status==3){?>-->
                                <!--    <button class="btn btn-success checkout-button" style="border-radius:20px; padding: 11px 23px; font-size: 12px; ">COMPLETED</button>-->
                                <!--<?php }?>-->
                                <!--</div>-->
                                <div style="display: flex; padding: 3px 10px 0px;">
                                    
                                </div>
                            <!--</div>-->
                        </div>
                    </div>
                 <!--<span class="shipping_name"></span><br>-->
                    <!--<div class="row">-->
                    <!--    <div class="col-md-2 col-sm-6 col-6">-->
                    <!--        <div class="product-thumbnail">-->
                    <!--            <a href="#">-->
                                
                    <!--            </a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--    <div class="col-md-3 col-sm-6 col-6">-->
                    <!--        <div class="product-name">-->
                    <!--            <a href="#" class="shipping_name"><?//= $templates->name." (".$pay->template_id.")"?></a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--    <div class="col-md-3 col-sm-6 col-6">-->
                    <!--         <span class="shipping_address"><strong>Payout Price:</strong> <?= site_setting()->currency;?> <?=$pay->payout?></span>-->
                    <!--         <?php //if($pay->status==3){?>-->
                    <!--         <span class="shipping_address" data-toggle="modal" data-target="#payout_response<?= $pay->id?>" style="cursor:pointer;"><strong><i class="fa fa-file"></i> Payout response</strong></span>-->
                    <!--        <?php //}?>-->
                    <!--      </div>-->
                    <!--    <div class="col-md-4 col-sm-6 col-6 text-center">-->
                    <!--        <?php //if($pay->status==1){?>-->
                           <!--<a href="<?//=base_url('Designer/add_request/'.$pay->id)?>"><button class="btn btn-info checkout-button" style="border-radius:20px;">Send Request</button></a>  -->
                    <!--       <?php //} else if($pay->status==2){ ?>-->
                    <!--       <button class="btn btn-warning  checkout-button" style="border-radius:20px;">Requested</button>  -->
                    <!--       <?php //} else if($pay->status==3){?>-->
                    <!--       <button class="btn btn-success checkout-button" style="border-radius:20px;">Completed</button>-->
                            
                           <?php //}?>
                           <!--tracking modal start-->
            <!--        <div class="modal fade" id="payout_response<?=$pay->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
            <!--  <div class="modal-dialog" role="document">-->
            <!--    <div class="modal-content">-->
            <!--      <div class="modal-header">-->
            <!--        <h5 class="modal-title" id="exampleModalLabel"> Payout Response</strong></h5>-->
            <!--        <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
            <!--          <span aria-hidden="true">&times;</span>-->
            <!--        </button>-->
            <!--      </div>-->
            <!--      <div class="modal-body text-center">-->
            <!--          <div class="row">-->
            <!--              <div class="col-md-12">-->
            <!--                  <img src="<?=$pay->payment_screenshot;?>"  alt="..." style="height:140px;" >-->
            <!--                  <br>-->
            <!--                  <?php if($pay->note){?>-->
            <!--                  <p><?=$pay->note;?></p>-->
            <!--                  <?php }?>-->
            <!--                  </div>-->
            <!--              </div>-->
                      
                        
            <!--      </div>-->
            <!--      <div class="modal-footer">-->
            <!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                    
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->
                    <!--tracking modal end-->
                    <!--    </div>-->
                    <!--</div>-->
            <!--</div>-->
            
            
            </div>
            
         </div>
         <?php endforeach; }else{?>
         </div>
         <center><img src="<?= base_url()?>assets/img/no-payout.png" class="not-found" style=""></center>
         <center><p>No Earnings available</p></center>
         <?php } ?>
        
      <!--<img src="<?= base_url()?>assets/order-not-found.png" class="not-found" style="background-size:cover;background-repeat: no-repeat; background-position: center;">-->
       
       <?php //}?> 
         
        
     

            </div>
            </section>
            <br>
            <script>
                var cvalue=0;
                function ordercounter(value){
                        
                        if(value==true){
                           var count = $("[type='checkbox']:checked").length;
                            $('#ordercounter').html(cvalue); 
                        }
                        
                        
                    }
                
                
            </script>
<?php include(__DIR__.'../../includes/footer.php');?>