<?php include(__DIR__.'/../includes/header.php');
   $this->load->view('arteno/includes/designer_header.php');
   ?>
<style>
   .sale_title{
   font-size: 18px;
   font-weight: 500;
   }
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
   .payout_card{
   background-color:#111;
   color:#b78b2a;
   height:100px;
   border-color:2px solid #b78b2a;
   }
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
    .sale_title{
   font-size: 14px;
   font-weight: 500;
   }
   .d-flex input[type="checkbox"]{
   height:24px;
   width:24px;
   }
   .btn {
   /*padding: 11px 23px;*/
   font-size: 10px;
   height:45px;
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
   .disabled{
   background-color:darkgrey!important; 
   border-color:darkgrey!important;
   color:#fff!important;
   }
   .upilist{
       list-style-type:none!important;
   }
   .upilimage{
       width:auto;
       height:25px!important;
   }
   .upilist input[input='radio']{
       height:0px;
       width:0px;
       position:absoute;
       visibility:hidden!important;
   }
   .puiinputfield{
      height:25px;
       width:25px;
        
   }
   .upilist label{
       float:left;
   }
   
   .uncheck{
    height:15px;
    width:15px;
    float:right;
    display:block!important;
   }
   .check{
        display:none;
   }
   .check, .uncheck{
        
        right: 0!important;
        position: absolute;
        right: 8px;
        right: 50px!important;
        top: 13px;
        height: 20px;
        width: 20px;
   }
 
   input[name='upiselection']:checked + label ~ .card{
       border:1px solid blue;
   }
</style>
<style>
    /*radio checked css*/
     div.checkRadioContainer > label > input {
	visibility: hidden;
}

div.checkRadioContainer {
	max-width: 100%;
    padding-left: 0px!important;
    
}
div.checkRadioContainer label{
	
    margin-bottom:1px!important;
}
div.checkRadioContainer > label {
	display: block;
	/* border: 2px solid grey; */
	
	cursor: pointer;
	padding-bottom: 30px;
}

div.checkRadioContainer > label:hover {
	background-color: AliceBlue;
}

div.checkRadioContainer > label > span {
	display: inline-block;
	vertical-align: top;
	line-height: 2em;
}

div.checkRadioContainer > label > input + i {
	visibility: visible;
	color: lightgrey;
	border:1px solid lightgrey;
	padding:5px ;
	margin-left: -0.5em;
	margin-right: 0.2em;
	border-radius:50%;
	margin-right:15%;
	float:right;
}

div.checkRadioContainer > label > input:checked + i {
	visibility: visible;
	color: green;
	border:1px solid green;
	padding:5px ;
	margin-left: -0.5em;
	margin-right: 0.2em;
	border-radius:50%;
	padding:5px ;
    margin-right:15%;
	float:right;
}
div.checkRadioContainer > label{
	
	border:1px solid grey;
	
}

.upilabel{
   
    padding-top:9px;
    padding-bottom: 17px;
    padding-left: 10px;
}
.upilabelspan{
        margin-top: 5px;
    font-size: 18px;
    margin-left: 10px;
}

.upiicons{
    height:35px!important;
    width:35px!important;
}
</style>
<?php
   $invoice = invoice();
   $d_id=$this->session->userdata('designer_id');
   $inwallet=wallet_amt($d_id)->total_qty;
   $payouts_slab=array(1,5,10,20,30,40,50);
   ?>
<section class="second mt-50">
   <div class="container">
       <div class="section-title bb">
         <h2 class="heading-title1 text-uppercase" style="font-family: 'Bebas Neue', cursive !important;font-size:30px!important">Select Sales for payout</h2>
      </div>
      
      <div class="row" style="margin:10px;">
         <?php foreach($payouts_slab as $slab):
            $payout_data=(object)payout_data($d_id,$slab);
            ?>
         <div class="col-md-3 col-sm-2 col-4 mt-4">
            <?php if($inwallet>=$slab): ?>
            <button class="btn btn-primary" data-toggle="modal" data-target="#payout_details_<?=$slab?>">
            <?php else: ?>
            <button class="btn btn-primary disabled" disabled>
                <i class="fa fa-lock"></i>
            <?php endif; ?>
             <span class="sale_title"> <?=$slab;?> <?=($slab==1)?'Sale':'Sales'?></span>
            </button>
         </div>
         <!--tracking modal start-->
         <div class="modal fade" id="payout_details_<?=$slab?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
               <div class="modal-content">
                  <div class="modal-header" style="display:block!important">
                    <h5>Withdraw fund</h5>
                    <h5 style="float:left;display:inline"><b>Sale<?= ($slab==1)?"":"s" ?>: <?=$slab?></b></h5>
                    <h5 style="float:right;display:inline"><b>Payout: Rs <?= $payout_data->total_payout ?></b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position:absolute;top:10;right:10">
                        <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="<?=base_url('designer/add_request')?>" method="post">
                     <div class="modal-body text-center" style="padding:0px">
                         <h5 style="margin: 10px 0px -20px 0px;">How do you want to withdraw funds?</h5>
                         <div class="card" id="upicard">
                             <div class="card-header d-flex" style="cursor:pointer;" onclick="paymentSelector('upi')">
                                <i class="fa fa-chevron-left" style="font-size: 19px;margin-top: 5px"></i><img src="<?= base_url()?>assets/img/upi.png" style="height:30px;width:30px"><h6 style="margin-top:6px;margin-left:5px">UPI</h6>

                                 </div>
                                 
                                 <div class="card-body" style="background-color: rgba(98, 106, 116, 0.03);">
                                    <div class="checkRadioContainer" style="max-height:300px;overflow-x:hidden;overflow-y:scroll">
                                    <label class="upilabel">
                                       <input type="radio" name="upimethod" value="PhonePe" />
                                        <i class="fa fa-check"></i>
                                        <div style="display:inline-flex;float:left">
                                            <img src="<?= base_url()?>assets/upiicons/phonepe.png" class="upiicons"> <span class="upilabelspan">PhonePe</span>
                                        </div>
                                    </label>
                                    <label class="upilabel">
                                       <input type="radio" name="upimethod" value="mobikwik" />
                                        <i class="fa fa-check"></i>
                                        <div style="display:inline-flex;float:left">
                                            <img src="<?= base_url()?>assets/upiicons/mobikwik.png" class="upiicons"> <span class="upilabelspan">mobikwik</span>
                                        </div>
                                    </label>
                                    <label class="upilabel">
                                       <input type="radio" name="upimethod" value="freecharge" />
                                        <i class="fa fa-check"></i>
                                        <div style="display:inline-flex;float:left">
                                            <img src="<?= base_url()?>assets/upiicons/freecharge.png" class="upiicons"> <span class="upilabelspan">freecharge</span>
                                        </div>
                                    </label>
                                    <label class="upilabel">
                                       <input type="radio" name="upimethod" value="Airtel Money" />
                                        <i class="fa fa-check"></i>
                                        <div style="display:inline-flex;float:left">
                                            <img src="<?= base_url()?>assets/upiicons/airtelmoney.png" class="upiicons"> <span class="upilabelspan">Airtel Money</span>
                                        </div>
                                    </label>
                                    <label class="upilabel">
                                       <input type="radio" name="upimethod" value="Olamoney"/>
                                        <i class="fa fa-check"></i>
                                        <div style="display:inline-flex;float:left">
                                            <img src="<?= base_url()?>assets/upiicons/olamoney.png" class="upiicons"> <span class="upilabelspan">Olamoney</span>
                                        </div>
                                    </label>
                                    <label class="upilabel">
                                       <input type="radio" name="upimethod" value="JioMoney" />
                                        <i class="fa fa-check"></i>
                                        <div style="display:inline-flex;float:left">
                                            <img src="<?= base_url()?>assets/upiicons/jiomoney.png" class="upiicons"> <span class="upilabelspan">JioMoney</span>
                                        </div>
                                    </label>
                                    <label class="upilabel">
                                       <input type="radio" name="upimethod"  value="PayZapp" />
                                        <i class="fa fa-check"></i>
                                        <div style="display:inline-flex;float:left">
                                            <img src="<?= base_url()?>assets/upiicons/payzapp.png" class="upiicons"> <span class="upilabelspan">PayZapp</span>
                                        </div>
                                    </label>
                                    <label class="upilabel">
                                       <input type="radio" name="upimethod" value="Sbi Buddy" />
                                        <i class="fa fa-check"></i>
                                        <div style="display:inline-flex;float:left">
                                            <img src="<?= base_url()?>assets/upiicons/sbibuddy.png" class="upiicons"> <span class="upilabelspan">Sbi Buddy</span>
                                        </div>
                                    </label>
                                    
                                </div>
                                <div class="form-group" id="upiselectedmethod" style="display:none">
                                    <label class="mt-3">Mobile no.</label>
                                    <input type="number" class="form-control" name="upiid" onchange="validateSubmit()">
                                </div>
                                </div>
                         </div>
                         <div class="card" style="" id="bankcard">
                             <div class="card-header d-flex" onclick="paymentSelector('bank')" style="cursor:pointer;">
                                 <i class="fa fa-chevron-left" style="font-size: 19px;margin-top: 5px"></i><img src="<?= base_url()?>assets/img/newbank.png" style="height:30px;width:30px"><h6 style="margin-top:6px;margin-left:10px">Bank account detail</h6></div>
                                 
                                 <div class="card-body" style="background-color: rgba(98, 106, 116, 0.03);">
                                   
                                <ul style="list-style-type:none;float:left">
                                   
                                       <li class="d-flex"><b>Bank name:</b><span> <?=$payment->bank_name;?></span></li>
                                       <li><b>Account number:</b> <?=$payment->account_no;?></li>
                                       <li><b>IFSC Code:</b> <?=$payment->ifsc_code ;?></li>
                                       <li><b>Account Holder Name:</b> <?=$payment->name_on_bank ;?></li>
                                       <li><b>Branch Address:</b><?=$payment->branch_address ;?></li>
                                      
                                </ul>
                                   
                                 </div>
                         </div>
                         
                        <div class="row">
                           <input type="hidden" name="tshirt_sale" value="<?=$payout_data->tshirt_sale?>">
                           <input type="hidden" name="mug_sale" value="<?=$payout_data->mug_sale?>">
                           <input type="hidden" name="mask_sale" value="<?=$payout_data->mask_sale?>">
                           <input type="hidden" name="payout" value="<?=$payout_data->payout?>">
                           <input type="hidden" name="extras" value="<?=$payout_data->extras?>">
                           <input type="hidden" name="total_qty" value="<?=$slab?>">
                           
                           <div class="col-md-12">
                              
                               <div class="" style="padding:10px" id="paymentMethodbox" >
                                   <div class="card-body" >
                                         <div class="card mt-2">
                                               <a <?= ($payment->account_no)?'onclick="paymentMethod()"':'href='.base_url().'account_details'?> >
                                                   <div class="card-body">
                                                       <div class="d-flex">
                                                          <img src="<?= base_url()?>assets/img/newbank.png" style="height:40px;width:45px"> 
                                                            <h5 style="color:black;margin-top:10px;margin-left:10px">  Bank Account</h5>
                                                       </div>
                                                    
                                                </div>
                                                </a>
                                       </div>
                               <div class="card mt-2" onclick="paymentMethod('upi')">
                                   <div class="card-body">
                                       <div class="d-flex">
                                           <img src="<?= base_url()?>assets/img/upi.png" style="height:40px;width:45px">
                                            <h5 style="color:black;margin-top:8px;margin-left:10px">UPI ID</h5>
                                       </div>
                                      
                                   </div>
                               </div>
                                   </div>
                               </div>
                               
                           </div>
                           <!--<div class="col-md-6 mt-4">-->
                           <!--   <label style="text-align: left;"></label>-->
                           <!--   
                           <!--</div>-->
                           <style>
                              #pay_bank_<?=$slab?>,#pay_gpay_<?=$slab?>,#pay_phonepay_<?=$slab?>,#pay_paytm_<?=$slab?>,#pay_upi_<?=$slab?>{
                              display:none;
                              }
                           </style>
                           <div class="col-md-6 mt-4" style="text-align: left;">
                              <span id="pay_bank_<?=$slab?>">
                                 <label style="text-align: left;">Bank details</label>
                                 <div class="form-group mt-2">
                                    <label style="text-align: left;">Bank Name</label>
                                    <input type="text" name="p_value[]" class="form-control" value="<?=$payment->bank_name;?>" readonly>
                                 </div>
                                 <div class="form-group mt-2">
                                    <label style="text-align: left;">Account holder name</label>
                                    <input type="text" name="p_value[]" class="form-control" value="<?=$payment->name_on_bank ;?>" readonly>
                                 </div>
                                 <div class="form-group mt-2">
                                    <label style="text-align: left;">IFSC code</label>
                                    <input type="text" name="p_value[]" class="form-control" value="<?=$payment->ifsc_code ;?>" readonly>
                                 </div>
                                 <div class="form-group mt-2">
                                    <label>Branch address</label>
                                    <input type="text" name="p_value[]" class="form-control" value="<?=$payment->branch_address ;?>" readonly>
                                 </div>
                              </span>
                             
                           </div>
                        </div>
                     </div>
                   
                     <div class="modal-footer" style="padding:0px;display:block;border-top:0px">
                         <input type="hidden" name="paymenttpe" value="" required />
                        <center><button class="btn btn-primary" type="submit" name="submit" value="1" disabled="disabled" style="font-weight:600">Request payout</button></center>
                     </div>
                   </form>
               </div>
            </div>
         </div>
         <!--tracking modal end-->
         <?php endforeach;?>
      </div>
   </div>
   <style>
       
   </style>
</section>
<script>
function validateSubmit() {
    var upiid = document.getElementsByName("upiid")[0].value;
    if(upiid!="")
        document.getElementsByName("submit")[0].disabled = false;
    else
        document.getElementsByName("submit")[0].disabled = true;
}

$('input:radio[name="upimethod"]').change(
    function(){
        $('#upiselectedmethod').show();
        var selectedvalue= $(this).val();
        
    });
    function paymentMethod(paymenttpe) {
        if(paymenttpe=='upi') {
            $('#upicard').show();
            $('#bankcard').hide();
            $('#paymentMethodbox').hide();
            document.getElementsByName("paymenttpe")[0].value = "upi";
        } else {
            $('#upicard').hide();
            $('#bankcard').show();
            $('#paymentMethodbox').hide();
            document.getElementsByName("paymenttpe")[0].value = "bank";
            document.getElementsByName("submit")[0].disabled = false;
        }
    }
    function paymentSelector(paymentmode) {
        $('#upicard').hide();
        $('#bankcard').hide();
        $('#paymentMethodbox').show();
        document.getElementsByName("paymenttpe")[0].value = "";
        document.getElementsByName("submit")[0].disabled = true;
    }
   $(document).ready(function(){
       $('#upicard').hide();
       $('#bankcard').hide();
      
       <?php $check_payment=payment_details($d_id);?>
       var validate_payment=<?=($check_payment)?1:0;?>;
       if(validate_payment==0){
        //   swal({
        //      title: "Please fill payment details first?",
        //      icon: "warning",
        //      buttons: true,
        //      dangerMode: true,
        //   })
        //   .then((willDelete) => {
        //      if (willDelete) {
        //             window.location.href="<?=base_url('account_details')?>";
        //      } else {
               
        //      }
        //   });
           
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
   function get_method(value,slab){
      
       var method=value;
       $('#pay_gpay_'+slab).hide();
       $('#pay_phonepay_'+slab).hide();
       $('#pay_paytm_'+slab).hide();
       $('#pay_upi_'+slab).hide();
       $('#pay_bank_'+slab).hide();
       
       
       
       if(method=='bank'){
            $('#pay_bank_'+slab).show();
       }
       else if(method=='gpay'){
           
           $('#pay_gpay_'+slab).show();
       }
       else if(method=='phonepay'){
            $('#pay_phonepay_'+slab).show();
       }
       else if(method=='paytm'){
            $('#pay_paytm_'+slab).show();
       }
       else if(method=='upi'){
            $('#pay_upi_'+slab).show();
            $(this).attr("required");

       }
       
   }
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