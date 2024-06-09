<?php include('includes/header.php')?>
  <style>
  .order-scroll{
      height: 300px;
    overflow-y: scroll;
  }
    
       h4{
       font-weight: 600;
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
.mt-6{
    margin-top:10px;
}

  .checkout-button{
      border-radius: 0px !important;
    color: b78b2a !important;
    font-size: 17px;
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
   @media only screen and (max-width: 600px) {
       .modal-width{
           width:80%!important;
       }
       .coupon-header-padding{
          padding:20px 10px; 
       }
    }
  
</style>
<style>
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
</style>
<?php  
// $cpage='checkout';
// include('includes/checkout_header.php');
?>
<section style="margin-top:80px;">
<div class="container-fluid" style="overflow: hidden;">

    <div class="row text-left mt-5 mb-4">
        <div class="col-12">
            <h4 style="margin-top:55px!important;">MY INFORMATION</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 col-md-8 col-12">

            <form action="">
                <div class="form-row">

                    <div class="col-lg-6 col-md-6 col-12">
                       <h6>Name<span style="color:red;">*</span></h6> 
                        <input autocomplete="no" type="text" class="form-control my-3 p-2 checkout-inputype" value="<?= $userdata->user_fullname?>">
                    </div>

                    <div class="col-lg-6 col-md-6 col-12">
                       <h6>Phone number<span style="color:red;">*</span></h6> 
                       <input autocomplete="no" readonly="" type="text" class="form-control my-3 p-2  checkout-inputype" value="<?= $userdata->user_phone?>" style="background-color: rgb(234, 234, 234); cursor: not-allowed;">
                    </div>

                    <div class="col-lg-6 col-md-6 col-12">
                       <h6>Email<span style="color:red;">*</span></h6> 
                       <input autocomplete="no" type="email" class="form-control my-3 p-2 checkout-inputype" value="<?= $userdata->user_email?>"  required>
                    </div>

                </div>
            </form>

            <div class="row mt-4 mb-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header"> <h4>BILLING ADDRESS </h4> 
                      </div>
                        <div class="card-body">
                              <span><input type="checkbox" name="biling" checked  id="billing" value="<?= $userdata->id?>">
                              <label for="billing" style="font-size:16px;margin-left:10px;font-weight:600;">Billing address as shipping address</label></span>
                            <h5><?= $userdata->user_fullname?> &emsp; <?= $userdata->user_phone?></h5>
                            <p><?= $userdata->house_no.','.$userdata->city.','.$userdata->state.','.$userdata->pincode ?></p>
                        </div>
                    </div>
                    </div>
                <div class="col-12" style="margin-top:10px;">
                    
                    <div class="card">
                        <div class="card-header"> <h4>SHIPPING ADDRESS</h4></div>
                             <?= $this->session->flashdata('location')?>
                        <?php 
                     
                        if(count($location)>0){
                        foreach($location as $loc){
                        ?>
                        <div class="card-body">
                            
                            <h5> <input type="radio" name="shippingloaction"  id="loaction<?= $loc->Id?>" value="<?= $loc->Id?>">  <label for="loaction<?= $loc->Id?>">&emsp; <?= $loc->Name?> &emsp; <?= $loc->Phone?></h5>
                            <p><?= $loc->house_no.','.$loc->city.','.$loc->state.','.$loc->pincode ?></p>
                            </label>
                        </div>
                        <?php } ?>
                    </div>
                <?php }else{?>
                <img src="<?= base_url()?>uploads/no address.png" style="height:auto;width:50%;margin-left:20%">
                 <br>
        <center>
            <p>Please Add Shipping Address.</p>
        </center>
                <?php }?>
                <button class="btn btn-primary checkout-button" data-toggle="modal" data-target="#addaddress" style="margin:30px !important;">Add New Address</button>
                
                 <div class="modal fade" id="addaddress" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-lg " role="document" style="">
                            <div class="modal-content">
                             
                              <div class="modal-body">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                      </button>
                                        <h4>HOME ADDRESS</h4>
                       
                                    <form action="<?base_url()?>/User/shipping_details/" method="post">
                             <div class="form-row">

                    <div class="col-lg-6 col-md-6 col-12">
                        <h6>Address<span style="color:red;">*</span></h6> 
                       <textarea class="form-control my-3 " rows="3" cols="5" name="address"  required>  </textarea>
                      </div>
                            
                   <!--  <div class="col-lg-6 col-md-6 col-12">-->
                   <!--     <h6>Address Line 2<span style="color:red;">*</span></h6> -->
                        
                   <!--<textarea class="form-control my-3" rows="3" cols="5" name="address"  required></textarea>-->
                      
                   <!-- </div>   -->
                    
                    <div class="col-lg-6 col-md-6 col-12">
                        <h6>Pincode<span style="color:red;">*</span></h6>
                        <input type="text" class="form-control my-3 p-2" max-length="6" min-length="6" pattern="[0-9]{1}[0-9]{5}"  name="pincode"  required>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12">
                        <h6>City or District<span style="color:red;">*</span></h6> 
                        <input type="text" class="form-control my-3 p-2" name="city"  required>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">State<span style="color:red;">*</span></label>
                            <select name="state" id="state" class="form-control" required>
                              <option value=" ">Select State</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
</select>
                          </div>
                    </div>

                </div>
                    <div class="col-lg-6 col-md-6 col-12">
                      <button class="btn btn-primary" value="2" name="save">Submit</button>
                    </div>
            </form> 
                                  
                              </div>
                            </div>
                          </div>
                        </div>
            </div>
             </div>

        
        </div>

        <div class="col-lg-4 col-md-4 col-12">

            <div class="row">
                <div class="col-12">
                    <div class="card bg-light mb-3" style="max-width: 100%;">
                        <div class="card-header">MY ORDER</div>
                       <div class="card-body order-scroll" >
                           <?php 
                             $totalgst=0;
                             $total = 0;
                             $designer_charge = 0;
                             $charge = $charge->shipping;
                             $qty = 0;
                             $invoice = invoice();
                             $gst = json_decode($invoice->gstp);
	                         $g = array_combine($gst[0],$gst[1]);
	                         $shipping = 0;
                             foreach($cart as $c):
                                  $price = $c->price;
                                  $p = json_decode($price);
                                  $cart_data = $c->cart_data;
                                  $cart = json_decode($cart_data);
                                  $product = related_base($cart->id);
                                  $slug = $product->slug;
                                  $img ='';
                                  foreach($cart->screenshots as $image){
                                  $img = $img .'<img src="'.$image.'" alt="item" >';
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
                            <div class="row">

                                <div class="col-lg-4 col-md-4 col-4 mb-3">
                                    <div class="order-img">
                                        <!--<img class="product_img" src="https://admin.anshuwap.com/demo_arteno/assets/img/img2.jpg" style="width: 100%;" alt="">-->
                                     <?= $img?>
                                    </div>
                                </div>

                                <div class="col-lg-8 col-md-8 col-8">

                                    <div class="row">

                                        <div class="col-12">
                                            <h6><?= $cart->product_name?></h6>
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
                                            <h6>Price</h6>
                                        </div>

                                        <div class="col-6 mt-6">
                                            <h6><?= $p->base?></h6>
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
                             $designer_charge = $designer_charge + $p->template * $c->qty;
                             $total = $total + $p->total;
                             $qty = $qty + $c->qty;
                             endforeach;?>
                        </div>
                    </div>
                  
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                     <div class="card bg-light " style="max-width: 100%;">
                        <div class="card-header">PRICE SUMMARY</div>
                        <div class="card-body">

                            <div class="row mt-3">
                                <div class="col-8 text-left">
                                    <h6>Total MRP (incl. of Tax)</h6>
                                </div>
                                <div class="col-4 text-right">
                                    <h6>Rs. <?= $total?></h6>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-6 text-left">
                                    <h6>Designer Charge (all)</h6>
                                </div>
                                <div class="col-6 text-right">
                                    <h6> Rs. <?= $designer_charge;?></h6>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-6 text-left">
                                    <h6>Total Gst</h6>
                                </div>
                                <div class="col-6 text-right">
                                    <h6>Rs. <?=$totalgst;?></h6>
                                </div>
                            </div>
                             <div id="extracharge">
                                 
                             </div>
                                <?php if(isset($_SESSION['discount'])){?>
                <div class="row mt-3">
                    <div class="col-6 text-left">
                      <h6>Discount</h6>
                    </div>
                    <div class="col-6 text-right"  style="color:green;">
                      <h6> - Rs.<?= $_SESSION['discount']?></h6>
                  </div>
                </div>
<?php }?>
                            <div class="row mt-3">
                                 <?php if(isset($_SESSION['discount_price'])){
                              $discount = $_SESSION['discount'];
                        $total = $total-$discount; 
                        $grand_total = $total+$totalgst;
                 }else{
                $grand_total = $total + $totalgst;
                $total = $total + $totalgst;
                 }?>
                                <div class="col-6 text-left">
                                    <h6>Total</h6>
                                </div>
                                <div class="col-6 text-right">
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
                                    <button type="button" onclick="payment()" class="btn btn-primary  btn-lg btn-block checkout-button">PROCEED</button>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-body">
                    
                     <div class="">
                          <h6><img src="<?= base_url()?>assets/img/coupon.webp" style="height:25px;"> <b>COUPON</b></h6>
                            <div id="info">  
                           <?php if(!isset($_SESSION['discount_price'])){?>
                          <p>Have a coupon code or a gift card? See available offers.</p>
                         <button class="btn btn-primary  text-uppercase text-center btn-lg checkout-button"  data-toggle="modal" data-target="#coupon_code_sidebar" style="padding: 7px 20px;  margin-bottom: 10px;" type="button">APPLY</button>
                       <div id="alert"></div>
                       <?php }else{?>
                 <?= '<p style="color:green; font-size:15px;">    '.$_SESSION["coupon_name"].' is Applied Successfully! <button class="btn btn-warning btn-sm  text-uppercase text-center  remove ml-1 rounded-pill" style="padding: 7px 20px;  margin-bottom: 10px;">Remove</button></p>'?>
                      <?php }?>
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
                              <div>
                                 <input class="search-input" name="search" id="couponcode" placeholder="Enter coupon  code" type="text" style="padding: 8px 20px; border-radius: 6px 0px 0px 6px; border: 2px solid lightgrey;">
                                 <button class="search-button couponcheck" type="button"  style="padding: 8px 20px; background: rgb(162, 162, 162); color: white; margin-left: -3px;  border: 2px solid rgb(162, 162, 162); border-radius: 0px 8px 8px 0px;">APPLY</button>
                              </div>
                           
                          
                           <!-- Cart status Shows here-->
                          
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
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
                             '<strong style="color: rgb(195, 22, 24); cursor: pointer; float: right; font-size: 15px;" class="coupons" data-code="'+value.code+'">APPLY</strong></div>'+
                          '</div>';
                          $("#coupon").append(c);
                   });
                  }else{
                      $("#coupon").html('<p>Coupon is not Available</p>');
                  }
          }
        });
    }    
    $(document).on("click",".remove",function(){
        event.preventDefault();
                   var result = confirm("Are sure you want to remove coupon ");
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
             swal("coupon is applied successfully ",{
  icon: "success",
   button: false,
   timer: 1200,
     });
   }
     });
     
  });
  
  function payment(){
    var shipping = $("input[name='shippingloaction']:checked").val();
    var bill = $("input[name='biling']:checked").val();
  if(bill!=undefined || shipping!=undefined){
if(bill!=undefined){
    window.location.href = "<?= base_url()?>Checkout/payment_method/"+bill;
}else{
    window.location.href = "<?= base_url()?>Checkout/payment_method/"+shipping;
}

}else{
  event.preventDefault();
     swal("Please Select Billing and Shipping Address ",{
  icon: "warning",
   button: false,
   timer: 1300,
     });
  }
  }
  ///remove coupon////
            </script>
            <!--Apply coupon code sidebar-->
<?php include('includes/footer.php')?>
<!--<---------------- MOBILE VIEW BUTTON ------------->

<!--class="wishlist-compare-btn d-block  d-md-none mobile-bottom-fixed-button"-->
<!--<div class="wishlist-compare-btn d-block  d-md-none mobile-bottom-fixed-button" >-->
<!--   <center >-->
<!--     <a href="<?= base_url()?>shipping" class="btn btn-light btn-rounded btn-block view_more" style="background:black !important;color:white !important;padding:14px;font-size:21px;  "> CONTINUE</a>-->
<!--   </center>-->
<!--</div>-->