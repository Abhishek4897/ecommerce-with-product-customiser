<?php include('includes/header.php')?>
<style>
/*custom checkbox whole css*/
   
    .custom-checkbox-designer {
        display: block;
        vertical-align: top;
        line-height: 26px;
        font-size: 16px;
        font-weight: 500;
        margin-left: 11px;
    }
    .custom-checkbox-designer .checkmark i {
        display: none;
        margin-top: 3px;
        margin-left: 4px;
        font-size: 10px;
    }
    /* When the checkbox is checked, add a blue background */
    .custom-checkbox-designer input:checked ~ .checkmark {
        background-color:black;
    }
    /* Hide the browser's default checkbox */
    .custom-checkbox-designer input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
      height: 0;
      width: 0;
    }

    /* Create a custom checkbox */
    .custom-checkbox-designer .checkmark {
        position: absolute;
        top: 3px;
        left: 0;
        height: 18px;
        width: 18px;
        border: 1px solid lightgrey;
        border-radius: 5px;
        background: white;
    }

    .custom-checkbox-designer input:checked ~  .checkmark i {
        display: block;
        color:white;
    }
    /*custom checkbox whole css*/
    @media (min-width: 576px){
    
    }
    
    @media only screen and (max-width: 600px) {
    .checkout-page-section .card-header{
        font-size:16px;
    }
   .mobile-three-dots {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
    }
    .checkout-page-section .modal-header{
        padding: .5rem 1rem;
    }
    .checkout-page-section .modal-header h4{
        font-size:17px;
    }
    .section-title h1, h2, h3, h4, h5, h6 {
    font-family: ProximaNova, sans-serif!important;
    letter-spacing: 1 !important;
}
    .form-row .form-control:focus {
    box-shadow: 0px 0px 0px 0px #ffffff !important;
    }
    .fd{
        font-family: ProximaNova, sans-serif !important;
    }
    
    input[type="checkbox"],input[type="radio"]{
       height:20px;
       width:20px;
    }
   .order-scroll{
   height: 180px;
   overflow-y: scroll;
   overflow-x:hidden;
   }
   h4{
   font-weight: 600;
   }
   .form-row h6{
       margin-left:10px;
       font-weight:600;
   }
    .checkout-button-main{
       width:70%!important;
       margin:auto!important;
       border-radius:30px!important;
       margin-top:15px!important;
       margin-bottom:15px!important;
    }
   .btn a{
   text-decoration: none;
   border: none;
   font-weight: bold;
   font-size: 14px;
   color: #000;
   }
   .card-header {
   padding: .75rem 1.25rem;
   margin-bottom: 0;
   background-color: rgba(0,0,0,.03);
   border-bottom: 1px solid rgba(0,0,0,.125);
   font-size: 20px;
   font-weight: 600;
   }
   .card-body{
   background:white !important;
   }
   .action-lists{
       list-style-type:none;
   }
   .action-lists li{
      display:inline-block;
   }
   .mt-6{
   margin-top:10px;
   }
   .checkout-button{
   
   color: b78b2a !important;
   font-size: 15px;
   font-weight: 700;
   color: black;
   background-color: #111 !important;
   }
   .product_img{
   width: 150px;
   height: 150px;
   padding: 20px;
   }
   .form-control{
   background:white !important;
   border: 2px solid #bfbebe;
   border-radius:5px;
   }
   .nice-select ,.nice-select:active, .nice-select.open, .nice-select:focus {
   border-color: #999;
   line-height: 40px;
   }
   .nice-select .list {
   width:100%;
   }
</style>
<style>

   .modal-width{
   width:500px!important;
   }
   .header-bg-black, .footer-area {
   display: block !important;
   }
   .coupon-card{
   box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 6px 0px; 
   padding: 25px 25px 25px 50px;
   background: white; width: 100%;
   margin: auto auto 10px;
   position: relative;
   border-radius: 8px;
   overflow: hidden;
   }
   /*.section-bg{*/
   /*    background:white;*/
   /*    padding-bottom:0px;*/
   /*}*/
   .modal-width{
   width:500px;
   }
   .coupon-header-padding{
   padding:40px; 
   }
   .checkout-button{
       padding:8px;
   }
   @media only screen and (max-width: 600px) {
       .price-summary-card h6{
           font-size:14px!important;
       }
       .font-15{
           font-size:14px !important;
       }
       .mobile-padding-0{
           padding:6px!important;
       }
   .checkout-button{
       padding:5px;
       font-size:13px!important;
   }
   .modal-width{
   width:80%!important;
   }
   .coupon-header-padding{
   padding:20px 10px; 
   }
   .card-body{
   padding:12px !important;
   }
   .card-header {
   padding: 5px 5px 5px 5px;
   }
   }
</style>
<style>
.font-15{
    font-size:15px;
}
   .form-control {
   background-color: transparent; 
   border: 1px solid rgb(221, 227, 232);
   }
   .ml-30{
   margin-left:30px;
   }
   @media only screen and (min-width: 900px) {
   #row{
   margin-left:8px !important;
   margin-right:8px !important;
   }
   }
   ul li.active{
   background:black !important;
   color:white !important;
   border-radius:30px;
   padding:10px;
   }
   ul li.active a{
   color:white !important;
   }
   .mt-20{
   margin-top:20px;
   }
   .variation{
   font-size:13px;
   }
   .variation-value{
   padding: 0px 10px;
   width: 60px; 
   border: 1px solid rgb(144, 161, 181);
   border-radius: 4px; line-height: 30px;
   text-align:center;
   }
   .variation-name{
   font-size: 9px; color: rgb(144, 161, 181);
   }
   .mt-5{
   margin-top:5px!important;
   }
   ::-webkit-scrollbar {
   height:4px;
   }
   ::-webkit-scrollbar-track {
   background:  rgba(206, 206, 206, 0.6);
   }
   ::-webkit-scrollbar-corner {
   background:lightgrey;
   }
   ::-webkit-scrollbar-thumb {
   background:lightgrey;
   }
   ::-webkit-scrollbar-thumb:hover {
   background: lightgrey;
   }
   
   
    
</style>
<style>
  #desktop .card .row .product-name h5{
      text-transform: capitalize!important;
   }
  }
   /*.my-order-product{*/
   /*    font-size:18px;*/
   /*}*/
    @media (min-width: 576px){
    
    }
   .mobile-checkout{
   display: flex;
   width: 100%;
   flex-direction: column;
   -webkit-box-pack: center;
   justify-content: center;
   padding:20px;
   }
   .mobile-title {
   font-size: 16px;
   line-height: 20px;
   padding: 10px 0px 0px;
   color: rgb(27, 33, 37);
   font-weight: bold;
   }
   .checkout-page {
   width: 80%;
   margin: auto;
   }
   .checkout-title {
   display: flex;
   width: 100%;
   }
   .xFzRD {
   font-size: 16px;
   font-weight: bold;
   line-height: 50px;
   border-bottom: 1px solid rgb(234, 234, 234);
   }
   .checkout-title-img {
   height: 14px;
   margin: -3px 0px 0px 5px;
   }
   .checkout-input {
   display: flex;
   }
   .eUMvxR {
   flex: 1 1 0%;
   }
   .checkout-input-label {
   font-size: 11px;
   line-height: 11px;
   color: rgb(144, 161, 181);
   padding: 30px 0px 10px;
   min-height: 51px;
   font-weight:500;
   }
   .checkout-inputype {
   width: 100%;
   padding: 10px;
   font-size: 16px;
   line-height: 20px;
   background-color: white;
   border: 1px solid rgb(221, 227, 232);
   border-radius: 3px;
   }
   button, input {
   overflow: visible;
   }
   .checkout-input {
   display: flex;
   }
   .cart-sidebar-box {
   margin: auto;
   }
   .cart-box {
   padding: 10px 0px;
   margin-bottom: 20px;
   }
   .cart-title {
   color: rgb(27, 33, 37);
   font-size: 14px;
   line-height: 14px;
   cursor: pointer;
   position: relative;
   z-index: 150;
   font-weight: bold;
   margin-bottom: 15px;
   }
   .cart-item {
   overflow: scroll hidden;
   white-space: nowrap;
   padding: 10px 0px;
   margin: 0px 10px;
   }
   .cart-box-start{
   background-color: white;
   width: 80%;
   display: inline-block;
   margin-right: 10px;
   padding: 5px;
   }
   .cart-box-img {
   position: relative;
   height: 75px;
   width: 75px;
   }
   .cart-img {
   position: absolute;
   width: 100%;
   height: 100%;
   top: 0px;
   left: 0px;
   object-fit: cover;
   }
   .cart-itembox {
   background-color: white;
   width: 80%;
   display: inline-block;
   margin-right: 10px;
   padding: 5px;
   }
   .item-name {
   font-size: 12px;
   font-weight: bold;
   white-space: pre-wrap;
   }
   .item-size {
   color: rgb(120, 137, 149);
   font-size: 11px;
   width: calc(100% - 10px);
   top: 5px;
   left: 10px;
   line-height: 1.71;
   }
   .item-price {
   color: rgb(120, 137, 149);
   font-size: 11px;
   position: absolute;
   width: calc(100% - 10px);
   bottom: 5px;
   left: 10px;
   line-height: 1.71;
   }
   .price {
   color: rgba(0, 0, 0, 0.6);
   padding-top: 10px;
   font-size: 14px;
   z-index: 50;
   }
   .total-item-price {
   color: rgb(0, 0, 0);
   padding-top: 15px;
   }
   .footer-area {
   /*visibility: hidden; */
   /*display: none;*/
   }
   .mobile-bottom-fixed-button {
   left: 8.5% !important;
   }
   .my-order-section h6{
       font-family: ProximaNova, sans-serif !important;
        font-size: 15px;
        font-weight: 600;
   }
   .price-summary-card h6{
       font-family: ProximaNova, sans-serif !important;
        font-size: 18px;
        font-weight: 600;
   }
    /*css for ipad*/
    @media (min-width: 768px) and (max-width: 1023px){
        .my-order-section{
             padding-right: 8px;
             padding-left: 8px;
        }
        .p-name-text {
         font-size: 15px !important
        }
         .main-content {
         min-height: 85%;
        }
        .cart-sidebar-tablet .col-8{
            padding-right: 6px;
            padding-left: 6px;
        }
        .cart-sidebar-tablet .col-12{
            padding-right: 6px;
            padding-left: 6px;
        }
        .cart-sidebar-tablet  .col-7{
            padding-right: 6px;
            padding-left: 6px;
        }
        .cart-sidebar-tablet .col-4{
            padding-right: 6px;
            padding-left: 6px;
        }
        .cart-sidebar-tablet .col-5{
            padding-right: 6px;
            padding-left: 6px;
        }
        .price-summary-card h6 {
           font-size: 15px;
         }
         .tablet-left-section{
             max-width: 64%;
         }
         .tablet-right-section{
             
         }
     }
      /*css for ipad*/
    /*for iPad pro tablet */
    @media only screen and (min-width: 992px) {
    	 .my-order-section{
             padding-right: 8px;
             padding-left: 8px;
        }
        .p-name-text {
         font-size: 17px !important
        }
        .main-content {
         min-height: 85%;
        }
        .tablet-mb-rp{
            padding-right:15px;
        }
    }
     /*for iPad pro tablet */
   @media (min-width: 576px){
    
    }
</style>
<?php  
   // $cpage='checkout';
   // include('includes/checkout_header.php');
?>
<?php
    $list_of_states = getListOfStates();
?>

<section style="margin-top:10px;">
   <div class="container-fluid checkout-page-section" style="overflow: hidden;">
      <div class="row text-left mt-5 mb-4">
         <div class="col-12 mt-3">
            <h4 style="margin-top:55px!important;">MY INFORMATION</h4>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-8 col-md-8 col-12 tablet-left-section">
            <form action="" style="margin-bottom:.5rem !important;" >
               <div class="form-row">
                  <div class="col-lg-6 col-md-6 col-12">
                     <h6>Name<span style="color:red;">*</span></h6>
                     <input autocomplete="no" type="text" class="form-control my-3 p-2 checkout-inputype" value="<?= $userdata->user_fullname?>" readonly>
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                     <h6>Phone number<span style="color:red;">*</span></h6>
                     <input <?= ($userdata->user_phone=="")?'id="updateMobileSection"':"" ?> autocomplete="no" <?= ($userdata->user_phone!="")?'readonly=""':"" ?> type="text" <?= ($userdata->user_phone=="")?'onkeyup="updateMobile(this.value)"':'' ?> class="form-control my-3 p-2 checkout-inputype" value="<?= ($userdata->user_phone!='')?$userdata->user_phone:'' ?>" pattern="[6-9]{1}[0-9]{9}" minlength="10" maxlength="10" style="background-color: rgb(234, 234, 234); <?= ($userdata->user_phone!="")?'cursor: not-allowed;':"" ?>" required>
                     <x id="updateMobileSectionError" style="display: none;color: red;">Mobile no already exist.</x>
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                     <h6>Email<span style="color:red;">*</span></h6>
                     <input autocomplete="no" type="email" class="form-control my-3 p-2 checkout-inputype" value="<?= $userdata->user_email?>" readonly  required>
                  </div>
               </div>
            </form>
            <div class="row mb-3">
                <div class="col-12 mobile-padding-0" style="margin-top:0px;margin-bottom:5px;">
                  <div class="card">
                    
                      <?php $check_billing_address=get_address();?>
                     <div class="card-header">
                        BILLING ADDRESS 
                        <?php if($check_billing_address!=1){?>
                        <button class="btn btn-primary checkout-button" data-toggle="modal" data-target="#addbilladdress" style=" float:right!important; padding:8px !important;">Add Billing Address</button>
                       <?php } else {?>
                       <button class="btn btn-primary checkout-button" data-toggle="modal" data-target="#addbilladdress" style=" float:right!important; padding:8px !important;letter-spacing: 1;"><i class="fa fa-pencil-alt"></i></button>
                       <?php }?>
                        
                        <!--<div class="pl-2 pr-2 pt-2" style="font-size: 16px;">-->
                         <?//= $this->session->flashdata('billlocation')?>
                        <!-- </div>-->
                     </div>
                     <div class="card-body billing-addr">
                         <?php 
                         $check_billing_address=get_address();
                         if($check_billing_address==1){
                         ?>
                        <span class="font-15" style="display:flex;  font-weight:600;"><?= $userdata->user_fullname?> &emsp;</span>
                        <!--&emsp; -->
                        <?= $userdata->user_phone?>
                        <p><?= $userdata->house_no.', '.$userdata->city.'<br>'.$userdata->state.', '.$userdata->pincode ?></p>
                        <input type="hidden" name="is_bill" value="1" id="is_bill" >
                        
                        <div class="form-group mb-0">
                        <div class="form-check">
                            <label class="custom-checkbox-designer" for="billing">Shipping address same as Billing address
                                <input class="designer-search-checkbox designers" type="checkbox" name="biling"  checked  id="billing" value="<?= $userdata->id?>">
                                <span class="checkmark"><i class="fa fa-check"></i></span>
                            </label>
                        </div>
                    </div>
                        
                         
                     <?php } else {?>
                      <input type="hidden" name="is_bill" value="0" id="is_bill">
                      <center>
                       <!--<img src="<?//= base_url()?>assets/images/no-shiiping-address.png" style="height:200px; width:250px;">-->
                       <!--<br>-->
                     <p style="text-align: center;font-size: 14px;margin: 0px 0px;font-weight: bold;color:black">Please Add Billing Address</p>
                  </center>
                     <?php }?>
                      <div class="modal fade" id="addbilladdress" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered modal-lg " role="document" style="">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4>BILLING ADDRESS</h4>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                             
                            </div>
                           <div class="modal-body">
                             
                              <form action="<?base_url()?>User/billing_details/" method="post">
                                 <div class="form-row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                       <h6>Address<span style="color:red;">*</span></h6>
                                       <textarea class="form-control my-3 pt-2" rows="2" cols="5" name="address" required><?= ($userdata->house_no)?$userdata->house_no:'' ?></textarea>
                                    </div>
                                    <!--  <div class="col-lg-6 col-md-6 col-12">-->
                                    <!--     <h6>Address Line 2<span style="color:red;">*</span></h6> -->
                                    <!--<textarea class="form-control my-3" rows="3" cols="5" name="address"  required></textarea>-->
                                    <!-- </div>   -->
                                    <div class="col-lg-6 col-md-6 col-12">
                                       <h6>Pincode<span style="color:red;">*</span></h6>
                                       <input type="text" class="form-control my-3 p-2" max-length="6" min-length="6" value="<?=($userdata->pincode)?$userdata->pincode:''?>" pattern="[0-9]{1}[0-9]{5}"  name="pincode" onkeyup="fetchdata_bypincode(this.value,<?=$userdata->id?>)"   required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                       <h6>City or District<span style="color:red;">*</span></h6>
                                       <input type="text" class="form-control my-3 p-2" value="<?=($userdata->city)?$userdata->city:''?>" id="city_<?=$userdata->id?>" name="city"  required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                       <div class="form-group mt-2">
                                          <h6 for="exampleFormControlSelect1">State<span style="color:red;">*</span></h6>
                                          <select name="state" id="state_<?=$userdata->id?>" class="form-control" required>
                                            <option value=" ">Select State</option>
                                            <?php foreach($list_of_states as $state): ?>
                                                <option value="<?= $state ?>" <?= ($userdata->state==$state)? 'selected' : '' ?>><?= $state ?></option>
                                            <?php endforeach; ?>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-6 col-md-6 col-12">
                                      <?php if($check_billing_address!=1){?>
                                    <button class="btn btn-primary" value="2" name="save">Add Address</button>
                                    <?php } else {?>
                                    <button class="btn btn-primary" value="2" name="save">Update Address</button>
                                    <?php }?>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                     </div>
                  </div>
               </div>
<style>
    .shipping-addr label{
        width:100%;
    }
    .billing-addr .font-15 a,.shipping-addr label a{
        color:black;
        display:inline;
    }
</style>
                <div class="col-12 mobile-padding-0">
                  <div class="card shipping-addr">
                     <div class="card-header">
                    SHIPPING ADDRESS
                           <button class="btn btn-primary checkout-button" data-toggle="modal" data-target="#addaddress" style=" float:right!important;">Add New Address</button>
                        
                     </div>
                     <div class="pl-2 pr-2 pt-2">
                         <?= $this->session->flashdata('location')?>
                     </div>
                      <?php if($check_billing_address==1){?>
                      <div id="shipaddress_as_bill">
                       <div class="card-body pt-2" >
                            <div>
                           <span style="display:flex; font-size: 1rem; font-weight:600;">
                              <input type="radio" name="view_data"  id="billdata" value="<?= $userdata->Id?>"  style="margin-right:10px; margin-top:3px;" checked>
                              <label for="billdata">
                                 <?= $userdata->user_fullname?> 
                              </label>     
                           </span>
                           <?= $userdata->user_phone?>
                           <p><?= $userdata->house_no.', '.$userdata->city ?><br>
                           <?= $userdata->state.' - '.$userdata->pincode ?>
                           <!--<br><strong><?= $loc->Phone?></strong>-->
                           </p>
                           
                        </div>
                     </div><hr/>
                      </div>
                      <?php }?>
                     <?php 
                        if(count($location)>0){
                        foreach($location as $loc){
                     ?>
                     <div class="card-body pt-2">
                         
                        <div>
                           <h4>
                               <button class="btn checkout-button" data-toggle="modal" data-target="#editaddress<?= $loc->Id?>" style="float:right!important;padding:8px !important;letter-spacing: 1; "> <i class="fa fa-pencil-alt" style="font-size:16px;"></i> </button> </h4>
                           <span style="display:flex; font-size: 1rem; font-weight:600;">
                              <input type="radio" name="shippingloaction"  id="loaction<?= $loc->Id?>" value="<?= $loc->Id?>" class="shipping_address" style="margin-right:10px; margin-top:3px;">
                              <label for="loaction<?= $loc->Id?>">
                                 <?= $loc->Name?> 
                              </label>     
                           </span>
                           <?= $loc->Phone?>
                           <p><?= $loc->house_no.', '.$loc->city ?><br>
                           <?= $loc->state.' - '.$loc->pincode ?>
                           <!--<br><strong><?= $loc->Phone?></strong>-->
                           </p>
                           
                        </div>
                     </div>
                     <hr>
                     <div class="modal fade" id="editaddress<?= $loc->Id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg " role="document" style="">
                           <div class="modal-content">
                               <div class="modal-header">
                                   <h4>UPDATE SHIPPING ADDRESS</h4> 
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                               </div>
                              <div class="modal-body">
                                 
                                
                                 <form action="<?base_url()?>/User/shipping_details/" method="post">
                                    <div class="form-row">
                                       <div class="col-lg-6 col-md-6 col-12">
                                          <h6>Address<span style="color:red;">*</span></h6>
                                          <textarea class="form-control my-3 pt-2 " rows="2" cols="5" name="address" required><?= $loc->house_no ?></textarea>
                                       </div>
                                       <!--  <div class="col-lg-6 col-md-6 col-12">-->
                                       <!--     <h6>Address Line 2<span style="color:red;">*</span></h6> -->
                                       <!--<textarea class="form-control my-3" rows="3" cols="5" name="address"  required></textarea>-->
                                       <!-- </div>   -->
                                       <div class="col-lg-6 col-md-6 col-12">
                                          <h6>Pincode<span style="color:red;">*</span></h6>
                                          <input type="text" class="form-control my-3 p-2" max-length="6" min-length="6" pattern="[0-9]{1}[0-9]{5}"  name="pincode" onkeyup="fetchdata_bypincode(this.value,<?=$loc->Id?>)" value="<?= $loc->pincode ?>"  required>
                                       </div>
                                       <div class="col-lg-6 col-md-6 col-12">
                                          <h6>City or District<span style="color:red;">*</span></h6>
                                          <input type="text" class="form-control my-3 p-2" id="city_<?=$loc->Id?>" name="city"  value="<?= $loc->city?>" required>
                                       </div>
                                       <div class="col-lg-6 col-md-6 col-12">
                                          <div class="form-group mt-2">
                                             <h6 for="exampleFormControlSelect1">State<span style="color:red;">*</span></h6>
                                             <select name="state" id="state_<?=$loc->Id?>" class="form-control" value="<?= $loc->state ?>" required>
                                                <option value="">Select State</option>
                                                <?php foreach($list_of_states as $state): ?>
                                                    <option <?= ($loc->state==$state)? 'selected' : '' ?> value="<?= $state ?>"><?= $state ?></option>
                                                <?php endforeach; ?>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                       <button class="btn btn-primary" value="<?= $loc->Id?>" name="update">Update Address</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     <?php } ?>
                  
                  <?php }else{?>
                 
                  <center id="no_shipping_add_img">
                       <!--<img src="<?//= base_url()?>assets/images/no-shiiping-address.png" style="height:200px; width:250px;">-->
                    
                     <p style="text-align: center;font-size: 14px;margin: 0px 0px;font-weight: bold;color:black">Please Add Shipping Address.</p><br>
                  </center>
                  <?php } ?>
                  </div>
                  <br>
                  <!--<button class="btn btn-primary checkout-button" data-toggle="modal" data-target="#addaddress" style="margin:30px !important;">Add New Address</button>-->
                  <div class="modal fade" id="addaddress" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered modal-lg " role="document" style="">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4>SHIPPING ADDRESS</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                           <div class="modal-body">
                              
                              <form action="<?base_url()?>/User/shipping_details/" method="post">
                                 <div class="form-row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                       <h6>Address<span style="color:red;">*</span></h6>
                                       <textarea class="form-control my-3 pt-2 " rows="2" cols="5" name="address" required></textarea>
                                    </div>
                                    <!--  <div class="col-lg-6 col-md-6 col-12">-->
                                    <!--     <h6>Address Line 2<span style="color:red;">*</span></h6> -->
                                    <!--<textarea class="form-control my-3" rows="3" cols="5" name="address"  required></textarea>-->
                                    <!-- </div>   -->
                                    <div class="col-lg-6 col-md-6 col-12">
                                       <h6>Pincode<span style="color:red;">*</span></h6>
                                       <input type="text" class="form-control my-3 p-2" max-length="6" min-length="6" pattern="[0-9]{1}[0-9]{5}"  name="pincode" onkeyup="fetchdata_bypincode(this.value)"  required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                       <h6>City or District<span style="color:red;">*</span></h6>
                                       <input type="text" class="form-control my-3 p-2" name="city" id="city"  required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                       <div class="form-group mt-2">
                                          <h6 for="exampleFormControlSelect1">State<span style="color:red;">*</span></h6>
                                          <select name="state" id="state" class="form-control" required>
                                            <option value=" ">Select State</option>
                                            <?php foreach($list_of_states as $state): ?>
                                                <option value="<?= $state ?>"><?= $state ?></option>
                                            <?php endforeach; ?>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-6 col-md-6 col-12">
                                    <button class="btn btn-primary" value="2" name="save">Add Address</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-4 col-12  tablet-right-section tablet-mb-rp">
           <div class="cart-sidebar-tablet">
                <div class="row">
                   <div class="col-12">
                      <div class="card bg-light cart-sidebar-tablet  mb-3" style="max-width: 100%;">
                         <div class="card-header">MY ORDER (<?= cart_count() ?>) ITEM<?= (cart_count()>1)?'S':'' ?></div>
                         <div class="card-body order-scroll" >
                            <?php 
                               $totalgst=0;
                               $total = 0;
                               $designer_charge = 0;
                               $doubleside_charge = 0;
                               $charge = $charge->shipping;
                               $qty = 0;
                               $invoice = invoice();
                               $gst = json_decode($invoice->gstp);
                               $g = array_combine($gst[0],$gst[1]);
                               $shipping = 0;
                               foreach($cart as $c):
                                //   print_r(array_keys($c));
                                    $price = $c->price;
                                    $p = json_decode($price);
                                    $cart_data = $c->cart_data;
                                    $cart = json_decode($cart_data);
                                    $product = related_base($cart->id);
                                    $slug = $product->slug;
                                      $t_id = json_decode($cart->template_id);
                                    $img ='';
                                 if($t_id[0]!="" && $t_id[0]!=null){
                         $key = related_product($t_id[0])->template_ids;
                         $data = json_decode($key);
                         $ids = [$data->front,$data->back];
                         $ds = $this->db->select('image')->from("templates")->where_in('templates.id',$ids)->get()->result();
                         if($key!="" && $key != null ){
                             foreach($ds as $image){
                              $img = $img .'<img src="'.$image->image.'" alt="item" >';
                              }    
                        }else{
                          foreach($cart->screenshots as $image){
                             $img = $img .'<img src="'.$image.'" alt="item" >';
                              }
                        }
                        
                   }else{
                   foreach($cart->screenshots as $image){
                        $img = $img .'<img src="'.$image.'" alt="item" >';
                   }
            }
                               
                               $gstcharge=0;
                               foreach($g as $k =>$kvalue){
                               if($k == $cart->id){
                               
                               $gstcharge  =  (($p->total * $kvalue)/100)+ $gstcharge;
                               }
                               }
                               $totalgst = $totalgst+$gstcharge;
                               ?> 
                            <div style="padding-top:10px;">
                               <div class="row" id="cart<?=$c->id?>">
                                  <div class="col-lg-4 col-md-4 col-4 mb-3">
                                     <div class="order-img">
                                        <!--<img class="product_img" src="https://admin.anshuwap.com/demo_arteno/assets/img/img2.jpg" style="width: 100%;" alt="">-->
                                        <?= $img?>
                                     </div>
                                  </div>
                                  <div class="col-lg-8 col-md-8 col-8 my-order-section">
                                     <div class="row">
                                        <div class="col-12">
                                            <h4 class="my-order-product p-name-text mobile-three-dots"><?= ucwords(strtolower($cart->product_name))?> 
                                                <span class="float-right" style="position: absolute;top: 0;right:5">
                                                    <a href="<?= base_url().'customizer?product='.$cart->id.'&cart_id='.$c->id ?>" class="d-inline"><i class="text-success fas fa-edit"></i></a>
                                                    <!--&nbsp;-->
                                                    <i data-cart_id ="<?=$c->id?>" data-rowid="<?=$t_id[0]?>" style="color:red;cursor:pointer" class="removecart fas fa-trash-alt"></i>
                                                </span>
                                                </h4>
                                            
                                        </div>
                                        <div class="col-6 mt-6">
                                           <h6>Quantity</h6>
                                        </div>
                                        <div class="col-6 mt-6">
                                           <h6><?= $c->qty?></h6>
                                        </div>
                                        <?php if($c->size!=""){?>
                                        <div class="col-6 mt-6">
                                           <h6>Size</h6>
                                        </div>
                                        <div class="col-6 mt-6">
                                           <h6><?= $c->size?></h6>
                                        </div>
                                        <?php }?>
                                        <div class="col-6 mt-6">
                                           <h6>Unit Price</h6>
                                        </div>
                                        <div class="col-6 mt-6">
                                           <h6><?=$invoice->currency;?> <?= $p->base?></h6>
                                        </div>
                                        
                                     </div>
                                  </div>
                               </div>
                               <!--<hr style="margin-bottom:.5rem !important;">-->
                               <!--<div class="row text-center">-->
                               <!--    <div class="col-4">-->
                               <!--<div class="btn">-->
                               <!--            <a href="#" style="color:black;font-weight:600;">REMOVE</a>-->
                               <!--</div>-->
                               <!--    </div>-->
                               <!--    <div class="col-4">-->
                               <!--<div class="btn"  >-->
                               <!--            <a href="#" style="border-left: 2px solid lightgrey;color:black; font-weight:600;">EDIT</a>-->
                               <!--</div>-->
                               <!--    </div>-->
                               <!--    <div class="col-4">-->
                               <!--<div class="btn" style="border-left: 2px solid lightgrey;">-->
                               <!--            <a href="#" style="border-left: 2px solid lightgrey;color:black;font-weight:600;">SELECT</a>-->
                               <!--</div>-->
                               <!--    </div>-->
                               <!--</div>-->
                               <hr style="margin-bottom:.5rem !important;">
                            </div>
                            <?php 
                                // print_r($p);
                               $designer_charge = $designer_charge + ($p->template) * $c->qty;
                               $doubleside_charge += $p->side_charge*$c->qty;
                               $total = $total + $p->total;
                               $qty = $qty + $c->qty;
                               endforeach;?>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="row">
                   <div class="col-12">
                      <div class="card bg-light price-summary-card" style="max-width: 100%;">
                         <div class="card-header">PRICE SUMMARY</div>
                         <div class="card-body">
                            <div class="row">
                               <div class="col-7 text-left">
                                  <h6>Total Price</h6>
                               </div>
                               <div class="col-5 text-right">
                                  <h6>Rs. <?= $total-$designer_charge-$doubleside_charge ?></h6>
                               </div>
                            </div>
                            <?php if($designer_charge>0): ?>
                                <div class="row mt-2">
                                   <div class="col-7 text-left">
                                      <h6>Designer Charges </h6>
                                      <!--<h6>Designer Charge (Incl. in Total Price)</h6>-->
                                   </div>
                                   <div class="col-5 text-right">
                                      <h6> Rs. <?= $designer_charge;?></h6>
                                   </div>
                                </div>
                            <?php endif; ?>
                            <?php if($doubleside_charge>0): ?>
                                <div class="row mt-2">
                                   <div class="col-7 text-left">
                                      <h6>Double-side Charges </h6>
                                   </div>
                                   <div class="col-5 text-right">
                                      <h6> Rs. <?= $doubleside_charge;?></h6>
                                   </div>
                                </div>
                            <?php endif; ?>
                            <div class="row mt-2">
                               <div class="col-7 text-left">
                                  <h6>Total GST</h6>
                               </div>
                               <div class="col-5 text-right">
                                  <h6>Rs. <?=$totalgst;?></h6>
                               </div>
                            </div>
                            <div id="extracharge">
                            </div>
                            <?php if(isset($_SESSION['discount'])){?>
                            <div class="row mt-2">
                               <div class="col-7 text-left">
                                  <h6>Discount</h6>
                               </div>
                               <div class="col-7 text-right"  style="color:green;">
                                  <h6> - Rs.<?= $_SESSION['discount']?></h6>
                               </div>
                            </div>
                            <?php }?>
                            <div class="row mt-2">
                               <?php if(isset($_SESSION['discount_price'])){
                                  $discount = $_SESSION['discount'];
                                  $total = $total-$discount; 
                                  $grand_total = $total+$totalgst;
                                  }else{
                                  $grand_total = $total + $totalgst;
                                  $total = $total + $totalgst;
                                  }?>
                               <div class="col-7 text-left">
                                  <h6>Total</h6>
                               </div>
                               <div class="col-5 text-right">
                                  <h6>Rs. <span id="displaytotal"><?= $grand_total?></span></h6>
                               </div>
                               <input type="hidden" id="total" name="total_price" value="<?= $total?>">
                               <input type="hidden" id="shipping" name="shipping" value="<?= $shipping?>">
                               <input type="hidden" id="total_gst" name="total_gst" value="<?= $totalgst?>">
                               <input type="hidden"  id="location" name="location" value=" <?= $loactionid ?>">
                               <input type="hidden"  id="gdtotal" name="gdtotal" value=" <?= $grand_total ?>">
                            </div>
                            <div class="row text-center mt-5">
                               <div class="col-12">
                                  <a >
                                  <button type="button" onclick="payment()" class="btn btn-primary  btn-lg btn-block checkout-button checkout-button-main">PROCEED</button>
                                  </a>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="card mt-2 mb-2">
                   <div class="card-body">
                      <div class="">
                         <h6><img src="<?= base_url()?>assets/img/coupon.png" style="height:25px;"> <b class="fd">COUPON</b></h6>
                         <div id="info">
                            <?php if(!isset($_SESSION['discount_price'])){?>
                            <p>Have a coupon code or a gift card?</p>
                            <input type="text" name="copupancode" class="form-control">
                            <button class="btn btn-primary  text-uppercase text-center btn-lg  mt-2"  data-toggle="modal" data-target="#coupon_code_sidebar" style="padding: 7px 20px; cursor:pointer; margin-bottom: 10px;" type="button" disabled>APPLY</button>
                            <div id="alert"></div>
                            <?php }else{?>
                            <?= '<p style="color:green; font-size:15px;">    '.$_SESSION["coupon_name"].' is Applied! <button class="btn btn-warning btn-sm  text-uppercase text-center  remove ml-1 rounded-pill" style="padding: 7px 20px;  margin-bottom: 10px;">Remove</button></p>'?>
                            <?php }?>
                         </div>
                      </div>
                   </div>
                </div>
           </div>
         </div>
      </div>
   </div>
</section>
<!--Apply coupon code sidebar-->
<div class="modal right fade shoppingCartModal" id="coupon_code_sidebar" tabindex="-1" role="dialog">
   <div class="modal-dialog modal-width" role="document" style="">
      <div class="modal-content" style="overflow-x: hidden;">
         <div class="modal-header coupon-header-padding" style="">
            <div class="search-box">
               <div>
                  <p class="mb-2">Have coupon code or gift card?</p>
               </div>
               <div  style="display:flex;">
                  <input class="search-input" name="search" id="couponcode" placeholder="Enter coupon  code" type="text" style="padding: 8px 20px; border-radius: 6px 0px 0px 6px; border: 2px solid lightgrey;width:204px; height:38px;" required>
                  <button class="btn btn-primary   text-uppercase text-center checkout-button couponcheck"  type="button"  style="padding: 4px 20px;  margin-bottom: 10px; height:38px; border-radius:0px !important;" disabled >APPLY</button>
               </div>
               <!-- Cart status Shows here-->
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" style="font-size:16px;">&times;</span>
            </button>
         </div>
         <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span-->
         <!--        aria-hidden="true">&times;</span></button>-->
         <div class="modal-body p-0" style="background: rgb(244, 244, 244);">
            <div class="product-cart-content mobile-sidebar">
               <div class="modal-body">
                  <p>Available offers</p>
                  <div class="row">
                     <div class="col-md-9" id="coupon">
                        <!-- COUPON SHOws Here -->  
                     </div>
                     <div class="col-md-3"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?= $this->session->flashdata('billlocation'); ?>
<script>
   //disabling radio group by using their class as selector
//   if($('#billing').is(':checked'))
//           {
//              $('.shipping_address').prop("checked",false);
//              $('.shipping_address').prop("disabled",true);
//              }
//              else{
//                 $('.shipping_address').prop("checked",true);
//                 $('.shipping_address').prop("disabled",false);
//              }
          $('#billing').change(function(){
          if($('#billing').is(':checked'))
          {
             $('.shipping_address').prop("checked",false);
             $('#shipaddress_as_bill').show();
             $('#no_shipping_add_img').hide();
            //  $('.shipping_address').prop("disabled",true);
             }
             else{
                $('.shipping_address').prop("checked",true);
                $('#shipaddress_as_bill').hide();
                $('#no_shipping_add_img').show();
                // $('.shipping_address').prop("disabled",false);
             }
   });
    $('.shipping_address').change(function(){
          if($('.shipping_address').is(':checked'))
          {
             $('#billing').prop("checked",false);
             $('#shipaddress_as_bill').hide();
            //  $('#billing').prop("disabled",true);
             }
             else{
                $('#billings').prop("checked",true);
                
                // $('#billing').prop("disabled",false);
             }
   });
          
</script>
<script>
   coupon_list();
    function coupon_list(){
   $.ajax({
   url:"<?= base_url()?>Front/counpons/",
    dataType:"json",
    method:"GET",
   success:function(r){
        if(r.length > 0){
            $.each( r, function( key, value ) {
            var c = ' <div class="coupon-card" style="">'+
                   '<div style="height: 100px; width: 100px; border-radius: 50%; background: rgb(244, 244, 244); position: absolute; top: calc(50% - 50px); left: -80px;"></div>'+
                   '<div style="font-size: 16px; font-weight: bold; line-height: 16px;">'+value.name+'</div>'+
                   '<div>'+
                   '<div style="color: rgb(64, 64, 64); font-size: 14px; margin-top: 6px;">'+value.description+'</div>'+
                   '</div>'+
                   '<div style="padding-top: 12px; margin-top: 12px; border-top: 1px solid rgba(112, 112, 112, 0.2); font-size: 14px; line-height: 17px;">'+
                   '<span>You save <span style="color: rgb(3, 166, 135);">Rs. '+value.discount+'</span></span>'+
                  //  '<strong style="color: rgb(195, 22, 24); cursor: pointer; float: right; font-size: 15px;" class="coupons" data-code="'+value.code+'">APPLY</strong></div>'+
                '</div>';
                $("#coupon").append(c);
         });
        }else{
            $("#coupon").html('<p style="color:red;">No Coupons are available</p>');
        }
   }
   });
   }    
   $(document).on("click",".remove",function(){
   event.preventDefault();
         var result = confirm("Are you sure to remove coupon?");
   if(result){
   $.ajax({
   url:"<?= base_url()?>Front/remove_coupon/",
   method:"GET",
   success:function(r){
   if(r!=0){
       location.reload();
           swal('Coupon is removed',{
            icon: 'success',
            button: false,
            timer: 1500
          });
    
   }
   }
   }); 
   }
   });
   
   ///get coupon code//
   $(document).on("click",'.coupons',function(){
   event.preventDefault();
   var code = $(this).data("code");
       $("#couponcode").val(code);
       
   });
   ////verify Coupon///
   $(document).on("click",".couponcheck",function(){
   event.preventDefault();
   var code = $("#couponcode").val();
   var cart_amount = $("#total").val();
   $.ajax({
   url:"<?= base_url()?>/Front/varify/",
   method:"POST",
   dataType:"json",
   data:{code:code,cart_total:cart_amount},
   success:function(r){
   location.reload();
   swal("Coupon is applied successfully.",{
   icon: "success",
   button: false,
   timer: 1200,
   });
   }
   });
   
   });
   $( document ).ready(function() {
        var is_billship = $("input[name='is_bill']").val();
         if(is_billship==1){
            //  $('#shipaddress_as_bill').show();
             $('#no_shipping_add_img').hide();
         }
         else{
            //   $('#shipaddress_as_bill').hide();
              $('#no_shipping_add_img').show();
         }
   });
   
    function payment(){
        var shipping = $("input[name='shippingloaction']:checked").val();
        var bill = $("input[name='biling']:checked").val();
        var is_bill = $("input[name='is_bill']").val();
        
        var mobile_no =<?=($userdata->user_phone)?$userdata->user_phone:0?>;
        if(mobile_no!=0){
            if(is_bill==1){
            if(bill!=undefined || shipping!=undefined) {
            if(bill!=undefined) {
                window.location.href = "<?= base_url()?>Checkout/payment_method/"+bill;
            } else {
                window.location.href = "<?= base_url()?>Checkout/payment_method/"+shipping;
            }
        }
        else {
            event.preventDefault();
            swal("Please select billing and shipping address.",{
                icon: "warning",
                button: false,
                timer: 1300,
            });
        }
        }else {
            event.preventDefault();
            swal("Please add Billing address",{
                icon: "warning",
                button: false,
                timer: 1300,
            });
          
        }
        } else{
            event.preventDefault();
            swal("Please Update Your Mobile No.",{
                icon: "warning",
                button: false,
                timer: 1300,
            });
        }
        
        
    }
    var locationid = "<?= $selected_address ?>";
    if(locationid!="") {
        var loc = document.getElementById("loaction"+locationid);
        if(loc.value!="") {
            $("input[name='is_bill']").val(1);
            $('#billing').prop("checked",false);
            $('.shipping_address').prop("checked",true);
            $('#shipaddress_as_bill').css("display", "none");
            $('#no_shipping_add_img').show();
            loc.checked = true;
        }
    }
   ///remove coupon////
</script>
<script>
    $( document ).ready(function() {
           $(document).on("click",".removecart",function() {
           
           var id = $(this).data("rowid");
           var cart_id = $(this).data("cart_id");
    
            swal({
                  title: "",
                  text: "Are you sure to remove from cart?",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
            $("#cart"+cart_id).remove();
             $.ajax({
               url:"<?= base_url()?>Front/remove_cart/",
               method:"POST",
               data:{
               Id :id,
               cart_id:cart_id
               },
               success:function(r){
                   if(r < 1){
                       $("#mobile").html("");
                       $("#desktop").html("");
                   }
                    if(r<1){
                   location.reload();
                   }
                    cart_item();
                    cart_price();
                    swal("Product removed from cart successfully.",{
                    icon: "success",
                    button: false,
                    timer: 1200,
                    });
                    location.reload();
                   
               }
           });
                  } 
            });
           });
       function cart_price(){
            $.ajax({
                url:"<?= base_url()?>Front/cart_totalprice/",
                 method:"POST",
                success:function(r){
                $(".price").html("Rs. "+r);
                $("#total").val(r);
             }
           });
       }
       });
</script>
    <?php if($userdata->user_phone=="") { ?>
        <script>
            function updateMobile(mob) {
                // alert(mob);
            if(mob.length==10){
                var mobile=mob;
                $('#updateMobileSection').attr('readonly', true);
                 $.ajax({
                    url:"<?= base_url()?>Home/updateMobile/"+mobile,
                    method:"POST",
                    success:function(r){
                        // alert(r);
                        if(r.trim()==0){
                            $("#updateMobileSection").val("");
                            $('#updateMobileSection').attr('readonly', false);
                            $("#updateMobileSectionError").css("display", "block");
                            $("#addbilladdress").modal('hide');
                            $("#addaddress").modal('hide');
                        }else{
                            $("#updateMobileSection").val(mobile);
                            $("#updateMobileSectionError").css("display", "none");
                            location.reload();
                        }
                    }
                });
            } else{
                $('#updateMobileSection').attr('readonly', false);
                $("#updateMobileSectionError").css("display", "none");
            } 
               
            }
        </script>
    <?php } ?>
<!--Apply coupon code sidebar-->
<?php include('includes/footer.php')?>
<script>
    fbq('track', 'InitiateCheckout');
</script>
<!--<---------------- MOBILE VIEW BUTTON ------------->
<!--class="wishlist-compare-btn d-block  d-md-none mobile-bottom-fixed-button"-->
<!--<div class="wishlist-compare-btn d-block  d-md-none mobile-bottom-fixed-button" >-->
<!--   <center >-->
<!--     <a href="<?= base_url()?>shipping" class="btn btn-light btn-rounded btn-block view_more" style="background:black !important;color:white !important;padding:14px;font-size:21px;  "> CONTINUE</a>-->
<!--   </center>-->
<!--</div>-->