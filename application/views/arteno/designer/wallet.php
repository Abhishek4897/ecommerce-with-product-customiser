<?php include(__DIR__.'../../includes/header.php')?>
<?php $this->load->view('arteno/includes/designer_header.php') ?>
<?php
    $invoice = invoice();
    $d_id=$this->session->userdata('designer_id');
    $payout=all_payout_requests($d_id);
?>
<style>
 @media (min-width: 768px) and (max-width: 1023px){
.amonut-section-margin .btn{
  padding:7px 2px !important;
  font-size:10px !important;
}
}
   #how{
   display:none;
   }
   .amonut-section-margin{
       margin-top:10%;
   }
   .wallet-img-height{
       height:200px;
   }
   .amount-img-height{
       height:220px;
       margin-top:6px;
   }
   .total-payout{
       font-size:18px;
       font-weight:600;
   }
   @media only screen and (max-width: 600px) {
   .btn {
   padding: 6px 12px!important;
   font-size: 12px!important;
   }
     .wallet-img-height{
       height: 131px;
      padding-left: 10px;
   }
   .amount-img-height{
       height:150px;
       margin-top:6px;
   }
   .wallet-btn .btn-group .btn{
       /*padding: 10px 2px!important;*/
       /*font-size:10px!important;*/
       padding: 10px 0px!important;
        font-size: 9px!important;
        width: 33%;
   }
   }
</style>
<?php
   $d_id=$this->session->userdata('designer_id');
   $wallet_amt = wallet_amt($d_id);
   $next_target = next_payout_target($d_id);
   ?>
<section class="second mt-50">
   <div class="container">
      <div class="card border-0 wallet-btn" style="background:transparent;">
         <div class="btn-group m-1">
            <button class="btn btn-primary" onclick="multiple('wallet')">ARTENO WALLET</button>
            <button class="btn btn-primary" onclick="multiple('payout')">Payout details</button>
            <button class="btn btn-primary" onclick="multiple('how')"> How to Multiply money</button>
         </div>
         <div class="row p-3">
            <div class="col-md-12 row" id="wallet">
               <br>
               <div class="d-flex col-md-6">
                  <img src="<?= base_url()?>assets/images/wallet.png" class="amount-img-height">
                  <div class="content amonut-section-margin">
                     <br>
                     <h5 class="mb-2">Amount</h5>
                     <h6 class="total-payout">&#8377;  <?=($wallet_amt->total_payout!=0)?$wallet_amt->total_payout:0;?> </h6>
                     <a href="<?=base_url('withdraw_amount')?>"><button class="btn btn-primary">WITHDRAW AMOUNT</button></a>
                     <!--<br>-->
                     <!-- <h5><?= $next_target; ?></h5>-->
                  </div>
               </div>
               <div class="d-flex col-md-6">
                  <img src="<?= base_url()?>assets/img/money-wallet.gif" class="wallet-img-height" style="">
                  <div class="content" style="margin-top:9%">
                    <br>
                      <h5><?= $next_target; ?></h5>
                  </div>
               </div>
             </div>
            <!--   <div class="d-flex col-md-6">-->
                   <!--assets/images/stat_04.gif-->
               <!--   <img src="" style="height:20px;width:100%">-->
                 
                  <!--<div class="content" style="margin-top: 10px">-->
                  <!--  <span style="font-family: 'Bebas Neue', cursive !important; font-size: 19px; margin-left: 1px">-->
                        
                   
                     <!--5 products sold will get 1.5X boost<br>-->
                     <!--10 products sold will get 2X boost<br>-->
                     <!--20 products sold will get 2.5X boost<br>-->
                     <!--30 products sold will get 3X boost<br>-->
                     <!--40 products sold will get 4X boost<br>-->
                     <!--50 products sold will get 5X boost-->
                  <!--  </span>-->
                  <!--</div>-->
               <!--</div>-->
            <!--</div>-->
            <div class="col-md-12" id="how">
               <div class="how-multiply">
                  <br>
                  <h4>How to Multiply Money</h4>
                  <p>Sell your own custom designs online and <b style="color:black;font-weight:900">start earning TODAY!</b> Sell your own custom designs online and start earning TODAY!. Time to elevate your earning through Arteno <b style="color:black;font-weight:900">Revenue Multiplication Perk .</b>
                    Here now you can apply the boost to your payout in accordance to your sales figure. The boost value had been distributed In accordance to different slabs of sales slabs given below:</p>
                <ul xlass="wow fadeInRight mt-3" data-wow-duration="2s" data-wow-delay="1s">  
                    
                    <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s"><p>5 products sold will get 1.5X boost</p></li>
                    <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.5s"><p>10 products sold will get 2X boost</p></li>
                    <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="2s"><p>20 products sold will get 2.5X boost</p></li>
                    <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="2.5s"><p>30 products sold will get 3X boost</p></li>
                    <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="3s"><p>40 products sold will get 4X boost</p></li>
                    <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="3.5s"><p>50 products sold will get 5X boost</p></li>
                </ul>
                <a href="<?= base_url()?>learn-more" class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="4s" style="color:#dca121">for more info click here</a>

 
 

 


                  
               </div>
            </div>
            <div class="col-md-12" id="payout" style="display:none;">
                <div class="row">
         <?php 
                // $d_id=$this->session->userdata('designer_id');
                // $payout=payout($d_id);
                if(count($payout)>0){
                foreach($payout as $pay):
                // $templates=$this->Designer_model->templates($pay->template_id);
              ?>
         <div class="col-md-8 col-lg-8 mt-10 offset-md-2">

             <div class="card shadow-sm border-0">
                 <div class="d-flex">
            <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-6">
                            <div class="product-thumbnail">
                               <span class="shipping_address"><strong>Date :<?=date("d-M-Y", strtotime($pay->date))?></strong></span><br>
                               <span class="shipping_address"><strong>Sale<?= ($pay->qty==1)?"":"s" ?>:</strong> <?=$pay->qty;?></span>
                            </div>
                        </div>
                
                        <div class="col-md-4 col-sm-6 col-6">
                            <span class="shipping_address"><strong>Payout Price:</strong> <?= site_setting()->currency;?> <?=$pay->payout + $pay->extras?></span>
                             <br/>
                             <?php if($pay->status==3){?>
                             <span class="shipping_address" data-toggle="modal" data-target="#payout_response<?= $pay->id?>" style="cursor:pointer;"><strong><i class="fa fa-file"></i> Payout response</strong></span>
                            <?php }?>
                          </div>
                        <div class="col-md-4 col-sm-6 col-6 text-center">
                        <?php  if($pay->status==2){ ?>
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
         <?php endforeach; }else{?></div>
         
     <center> <img src="<?= base_url()?>assets/order-not-found.png" class="not-found" style=""></center>
       
       <?php }?> 
         
        
     </div>
            </div>
         </div>
         <script>
            var wallet=document.getElementById('wallet');
            var how=document.getElementById('how');
            var how=document.getElementById('how');
            var payout=document.getElementById('payout');
                  function multiple(value){
                     if(value=="wallet"){
                        // wallet.style.display="block";
                        wallet.style.display="flex";
                        how.style.display="none";
                        payout.style.display="none";
                      }else if(value=="how"){
                          wallet.style.display="none";
                          how.style.display="block";
                          payout.style.display="none";
                       }
                       else if(value=="payout"){
                           wallet.style.display="none";
                          how.style.display="none";
                          payout.style.display="block";
                       }
                  }
                
         </script>
         <!--        <div class="row nav nav-pills mb-3" id="pills-tab" role="tablist"style="display:flex">-->
         <!--<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">-->
         <!--  <div class=" col-md-6 nav-item" role="presentation">-->
         <!--    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Arteno Wallet</button>-->
         <!--  </div>-->
         <!--  <div class=" col-md-6 nav-item" role="presentation">-->
         <!--    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">How To Multiply Money</button>-->
         <!--  </div>-->
         <!--</ul>-->
         <!--</div>-->
         <!--<div class="tab-content" id="pills-tabContent">-->
         <!--  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">-->
         <!--      <center>-->
         <!--          <img src="https://www.freeiconspng.com/uploads/wallet-icon-5.png" style="height:200px; ">-->
         <!--          <p>No amount Found</p>-->
         <!--      </center>-->
         <!--  </div>-->
         <!--  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">2</div>-->
         <!--</div>-->
      </div>
   </div>
   </div>
   </div>
   </div>
</section>
<script src="<?= base_url()?>assets/css/animate.min.css"></script>
<script src="<?= base_url()?>assets/js/wow.min.js"></script>
<script>
    new WOW().init();
    
</script>
<?php include(__DIR__.'../../includes/footer.php')?>