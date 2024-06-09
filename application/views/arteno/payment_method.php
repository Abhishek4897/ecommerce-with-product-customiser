<?php include('includes/header.php')?>
<style>
   @media screen and (min-width: 991px){
   .we-acceptimg{
   width: 69%;
   }
   .button-background{
   background-image:url('<?=base_url()?>assets/black-marble.jpg') !important;
   color:white !important;
   background-size: cover;
   font-weight: 600;
   padding: 12px 20px!important;
   }
   .cool-link {
            transition: width .3s;
        }
        
        .cool-link:hover{
            width: 15%;
             background: #111!important;
            transition: width .3s;
        }
   }
   .order-scroll{
   height: 180px;
   overflow-y: scroll;
   }
   body{
   background:#f5f5f5 !important;
   }
   /*input[name='payment']:checked+label {*/
   /*border-left: 2px darkgoldenrod !important;*/
   /*font-weight: bold;*/
   /*border-bottom: 0px solid grey; */
   /*display: block; */
   /*}*/
   /*input[name='payment']+label {*/
   /*padding-left: 5px;*/
   /*background:transparent; */
   /*}*/
   .price {
   color: black;
   padding-top: 10px;
   font-size: 1rem;
   z-index: 50;
   font-weight: 500;
   }
   .button-css{
   border: 2px solid #eee !important;
   color: black !important;
   font-size: 16px;
   padding-left: 10px;
   padding-right: 10px;
   padding-top:5px;
   padding-bottom:5px;
   }
   .payment-css{
   font-size: 20px;
   font-weight: 600;
   }
   h4 {
   font-size: 22px;
   font-weight: 600;
   }
   .card-header {
   padding: .75rem 1.25rem;
   margin-bottom: 0;
   background-color: rgba(0,0,0,.03);
   border-bottom: 1px solid rgba(0,0,0,.125);
   font-size: 20px;
   font-weight: 600;
   }
   .card-footer {
   padding: .75rem 1.25rem;
   background-color: rgba(0,0,0,.03);
   border-top: 1px solid rgba(0,0,0,.125);
   }
   .card-body{
   background:white !important;
   }
   .mt-6{
   margin-top:10px;
   }
   .payment-card{
   width:500px;
   height:220px;
   }
   section ,.container-fluid, .row{
   overflow:hidden !important;
   }
   .checkout-button{
   border-radius: 0px !important;
   color: b78b2a !important;
   font-size: 17px;
   font-weight: 700;
   color: black;
   background-color: #111 !important;
   }
   .container-fluid{
   padding-left: 30px ;
   }
   @media only screen and (max-width: 600px) {
   .payment-css{
   font-size: 18px;
   } 
   .payment-card{
   width:100%;
   height:auto !important;
   }
   .container-fluid{
   padding-left: 15px ;
   }
       .title_address {
        font-weight: 600!important;
        font-size: 14px!important;
        text-transform: capitalize;
    }
    .title_address1 {
        font-weight: 500!important;
        font-size: 14px!important;
    }
   }
   .product_img{
   width: 150px;
   height: 150px;
   padding: 20px;
   }
   .price-summary-card h6{
       font-family: ProximaNova, sans-serif !important;
        font-size: 18px;
        font-weight: 600;
   }
</style>
<style>
   .button-background {
   background-image: url(<?= base_url()?>assets/black-marble.jpg) !important;
   color: white !important;
   background-size: cover;
   padding: 5px 20px;
   }
   .title_address{
   font-weight: 600!important;
   font-size: 17px;
   }
   .title_address1{
   font-weight: 500!important;
   font-size: 17px;
   }
   .pament-method{
   padding: 16px 10px 12px 10px;
   }
   #onlinetab{
   display:none;
   }
   .pament-lists{
   list-style-type:none;
   }
   input[type='radio']{
   height:0px;
   width:0px;
   visibility:hidden;
   }
   .address-class{
   font-size: 20px
   }
   .my-order-section h6{
       font-family: ProximaNova, sans-serif !important;
        font-size: 15px;
        font-weight: 600;
   }
   @media only screen and (max-width: 600px) {
   .mobile-payment-tab {
   padding:left:5px;
   padding:right:5px;
   }
   .price-summary-card h6{
       font-size: 16px;
   }
   .btn {
   padding: 10px 12px;
   font-size: 14px;
   }
   .address-class{
   font-size: 16px
   }
   .pament-lists{
   margin-left:-40px;
   }
   .button-background{
       font-size:14px!important;
   }
   }
   label{
   display:block;
   }
   input[name='payment']+label{
   /*padding-left:5px;*/
   /*background:#F2F1E8;*/
   }
   input[name='payment']:checked+label{
   /*border-left:5px solid red;*/
   /*font-weight:bold;*/
   /*border-bottom:3px solid grey;*/
   /*display:block;*/
   }
   .payment-card .card-body label{
       width:100%!important;
   }
   
    .grand_total_span {
       
       letter-spacing: 1 !important;
    }
     @media (min-width: 768px) and (max-width: 1023px){
       .main-content {
         min-height: 80%;
        }
           .tablet-left-section{
             max-width: 60%;
         }
           .tablet-right-section{
             max-width: 45%;
            flex: 38%;
            padding-right: 15px;
            padding-left: 10px;
         }
     }
      /*css for ipad*/
    /*for iPad pro tablet */
    @media only screen and (min-width: 992px) {
    	.main-content {
         min-height: 80%;
        }
        /* .tablet-mb-rp{*/
        /*    padding-right:15px;*/
        /*}*/
    }
</style>
<section style="margin-top:80px !important;">
   <div class="container-fluid">
       <!--<form action="<?=base_url()?>Checkout/place_order/" id="myform" method="post">-->
      <div class="row">
    
          <div class="col-md-8 col-12 tablet-left-section">
                <?= $this->session->flashdata('location')?>
                <?= $this->session->flashdata('user') ?>
                <div class="card" style="margin: auto;">
                   <div class="card-header">
                      <span class="address-class" style="color:black; font-weight:600;">YOUR ADDRESS   </span>
                      <a href="<?= base_url() ?>checkout" style="display:inline;float:right"><button class="btn btn-primary btn-sm" style="float:right">CHANGE</button></a>
                   </div>
                   
                   <div class="card-body">
                      <div class="">
                        <?php
                            $location = $this->db->where(['u_id'=>$_SESSION['user_id'],'Id'=>$loactionid])->get("user_location")->row();
                        ?>
                        <?php if(count($location)>0){ ?>
                         <span class="title_address"><?= $userdata->user_fullname?>  (Tel-<?= $userdata->user_phone?>) </span><br>
                         <span class="title_address1">
                            <?= $location->house_no ?>, <?= $location->city ?><br>
                            <?= $location->state ?> - <?= $location->pincode ?>
                         </span>
                        <?php } else { ?>
                         <span  class="title_address"><?= $userdata->user_fullname?> (Tel-<?= $userdata->user_phone?>) </span><br>
                         <span class="title_address1">
                            <?= $userdata->house_no ?>, <?= $userdata->city ?><br>
                            <?= $userdata->state ?> - <?= $userdata->pincode ?>
                         </span>
                        <?php } ?>
                      </div>
                   </div>
                </div>
                <hr>
                <br>
                 <form action="<?=base_url()?>Checkout/place_order/" id="myform" method="post">
                <h3>PAYMENT TYPE</h3>
                <div class="row">
                   <div class="col-md-6">
                      <div class="card payment-card  border-0" style=" text-align:center; background:transparent !important;">
                         <center>
                            <div class="card-body" style="background:transparent !important;">
                               <div>
                               <input type="radio" onclick="paymentWay('online')" name="payment" value="1" id="online">
                               <label for="online">
                               <a class="payment-css button-background" id="online_payment" style="width:100%!important;border:2px solid #111;">
                               <!--ONLINE PAYMENT-->
                               PAY NOW
                               </a>
                               </label>
                               </div>
                               <!--<br>-->
                               <center><span class="" style="color:#111; font-size:22px;">OR</span></center>
                               <!--<br> -->
                               <div>
                               <input type="radio" onclick="paymentWay('cod')" name="payment"  value="0" id="cod">
                               <label for="cod" class="mt-2"> 
                               <a class="payment-css  button-background" id="cod_payment" style="width:100%!important;border:2px solid #111;">
                               CASH ON DELIVERY
                               <!--PAY LATER-->
                               </a>
                               </label> 
                               </div>
                            </div>
                         </center>
                      </div>
                   </div>
                </div>
                <br>
                <!--<div class=" card border-0 we-acceptimg " style="">-->
                <img src="<?= base_url()?>assets/images/p-method.png" style="padding-bottom:30px;height: 72px;">
                <br> <br>
         </div>
         <div class="col-lg-4 col-md-4 col-12 tablet-mb-rp tablet-right-section">
            <div class="row">
               <div class="col-12">
                  <div class="card bg-light mb-3" style="max-width: 100%;">
                     <div class="card-header">MY ORDER</div>
                     <div class="card-body order-scroll" >
                        <?php 
                           $totalgst=0;
                           $total = 0;
                           $designer_charge = 0;
                           $doubleside_charge = 0;
                           $qty = 0;
                           $invoice = invoice();
                           $charge = $invoice->shipping;
                           $cod_charge = $invoice->cod;
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
                                if($k == $cart->id) {
                                    $gstcharge  =  number_format((($p->total * $kvalue)/100)+ $gstcharge, 2, ".", "");
                                    // $gstcharge  =  (($p->total * $kvalue)/100)+ $gstcharge;
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
                              <div class="col-lg-8 col-md-8 col-8 my-order-section">
                                 <div class="row">
                                    <div class="col-12">
                                       <h4 class="my-order-product p-name-text"><?= ucwords(strtolower($cart->product_name))?></h4>
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
                                       <h6><?=$invoice->currency;?> <?= $p->base?></h6>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!--<hr style="margin-bottom:.5rem !important;">-->
                           <!-- <div class="row text-center">-->
                           <!--    <div class="col-6 col-sm-6" style="border-right: 2px solid lightgrey;">-->
                           <!--    <a href="#" style="color:black;font-weight:600;">REMOVE</a>-->
                           <!--   </div>-->
                           <!--   <div class="col-5 col-sm-5">-->
                           <!--   <a href="#" style="color:black;font-weight:600;">EDIT</a>-->
                           <!--    </div>-->
                           <!--</div>-->
                           <hr style="margin-bottom:.5rem !important;">
                        </div>
                        <?php 
                           $designer_charge = $designer_charge + $p->template * $c->qty;
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
                           <div class="col-6 text-left">
                              <h6>Total Price</h6>
                           </div>
                           <div class="col-6 text-right">
                              <h6>Rs. <?= $total-$designer_charge-$doubleside_charge ?></h6>
                           </div>
                        </div>
                        <div class="row mt-2">
                           <div class="col-6 text-left">
                              <h6>Designer Charge </h6>
                           </div>
                           <div class="col-6 text-right">
                              <h6> Rs. <?= $designer_charge;?></h6>
                           </div>
                        </div>
                        <?php if($doubleside_charge>0): ?>
                        <div class="row mt-2">
                           <div class="col-6 text-left">
                              <h6>Double-side Charges </h6>
                           </div>
                           <div class="col-6 text-right">
                              <h6> Rs. <?= $doubleside_charge;?></h6>
                           </div>
                        </div>
                        <?php endif; ?>
                        <div class="row mt-2">
                           <div class="col-6 text-left">
                              <h6>Total GST</h6>
                           </div>
                           <div class="col-6 text-right">
                              <h6>Rs. <?=$totalgst;?></h6>
                           </div>
                        </div>
                        <div id="extracharge">
                        </div>
                        <?php if(isset($_SESSION['discount'])){?>
                        <div class="row mt-2">
                           <div class="col-6 text-left">
                              <h6>Discount</h6>
                           </div>
                           <div class="col-6 text-right"  style="color:green;">
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
                           <div class="col-6 text-left">
                              <h6>Total</h6>
                           </div>
                           <div class="col-6 text-right">
                              <h6>Rs. <span id="displaytotal" class="grand_total_span"><?= $grand_total?></span></h6>
                           </div>
                           <!--<form action="<?=base_url()?>Checkout/place_order/" id="myform" method="post">-->
                              <input type="hidden" id="total" name="total_price" value="<?= $total?>">
                              <input type="hidden" id="shipping" name="shipping" value="<?= $charge*$qty?>">
                              <input type="hidden" id="cod_charge" name="cod_charge" value="<?= $cod_charge ?>">
                              <input type="hidden" id="total_gst" name="total_gst" value="<?= $totalgst?>">
                              <input type="hidden"  id="location" name="location" value=" <?= $loactionid ?>">
                              <input type="hidden"  id="gdtotal" name="gdtotal" value=" <?= $grand_total ?>">
                           <!--</form>-->
                        </div>
                        <div class="row text-center mt-2">
                           <div class="col-12">
                              <!--<a href="<?= base_url()?>Checkout/payment_method">-->
                              <!--<button type="button" class="btn btn-primary  btn-lg btn-block checkout-button">PROCEED</button>-->
                              <!--</a>-->
                              <!--<button class="btn btn-primary text-uppercase text-center btn-lg btn-block checkout-button  order_last order_place_button" style="margin-top:29px;" id="placeOrder1">PLACE ORDER</button>-->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card">
               <!--<div class="card-body">-->
               <!--     <div class="">-->
               <!--          <h6><img src="<?= base_url()?>assets/img/coupon.webp" style="height:25px;"> <b>COUPON</b></h6>-->
               <!--            <div id="info">  -->
               <!--           <?php if(!isset($_SESSION['discount_price'])){?>-->
               <!--          <p>Have a coupon code or a gift card? See available offers.</p>-->
               <!--         <button class="btn btn-primary  text-uppercase text-center btn-lg checkout-button"  data-toggle="modal" data-target="#coupon_code_sidebar" style="padding: 7px 20px;  margin-bottom: 10px;" type="button">APPLY</button>-->
               <!--       <div id="alert"></div>-->
               <!--       <?php }else{?>-->
               <!-- <?= '<p style="color:green; font-size:15px;">    '.$_SESSION["coupon_name"].' is Applied Successfully! <button class="btn btn-warning btn-sm  text-uppercase text-center  remove ml-1 rounded-pill" style="padding: 7px 20px;  margin-bottom: 10px;">Remove</button></p>'?>-->
               <!--      <?php }?>-->
               <!--       </div>-->
               <!--       </div>-->
               <!--</div>-->
            </div>
         </div>
      </form>
      </div>
         
   </div>
</section>
<!-------------MODEL----------------->
<?php   $location = $this->db->where(['u_id'=>$_SESSION['user_id'],'Id'=>$loactionid])->get("user_location")->row();
   $bill = $this->db->where(['id'=>$loactionid])->get("users")->row();
   
   ?>
<div class="modal fade" id="changeaddress" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg " role="document" style="">
      <div class="modal-content">
         <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <h4>SHIPPING ADDRESS</h4>
            <?php if(count($location)>0){?>
            <form action="<?= base_url()?>User/shipping_details" class="needs-validation" novalidate method="post">
               <div class="form-row">
                  <div class="col-lg-6 col-md-6 col-12">
                     <h6>Name<span style="color:red;">*</span></h6>
                     <input class="form-control my-3 " rows="3" cols="5" name="name" value="<?= $userdata->user_fullname?>" readonly   required> 
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                     <h6>Mobile<span style="color:red;">*</span></h6>
                     <input class="form-control my-3 " rows="3" cols="5" name="contact_number" value="<?= $userdata->user_phone?>"  readonly required> 
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                     <h6>Address<span style="color:red;">*</span></h6>
                     <textarea class="form-control my-3 " rows="3" cols="5" name="address" value="<?= $location->house_no?>" required> <?= $location->house_no?>  </textarea>
                  </div>
                  <!--  <div class="col-lg-6 col-md-6 col-12">-->
                  <!--     <h6>Address Line 2<span style="color:red;">*</span></h6> -->
                  <!--<textarea class="form-control my-3" rows="3" cols="5" name="address"   required></textarea>-->
                  <!-- </div>   -->
                  <div class="col-lg-6 col-md-6 col-12">
                     <h6>Pincode<span style="color:red;">*</span></h6>
                     <input type="text" class="form-control my-3 p-2" max-length="6" min-length="6" pattern="[0-9]{1}[0-9]{5}"  name="pincode" value="<?= $location->pincode?>"  required>
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                     <h6>City or District<span style="color:red;">*</span></h6>
                     <input type="text" class="form-control my-3 p-2" name="city" value="<?= $location->city?>" required>
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                     <div class="form-group mt-2">
                        <h6 for="exampleFormControlSelect1">State<span style="color:red;">*</span></h6>
                        <select name="state" id="state" class="form-control" required>
                           <option value="<?= $userdata->state?> "><?= $location->state?></option>
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
               <div class="col-md-6">
                  <button  type="submit"value="<?= $location->id?>" name="update" class="btn btn-primary checkout-button">Update</button>
               </div>
            </form>
            <?php }else{?>
            <form action="<?= base_url()?>User/dashboard1" method="post">
               <div class="form-row">
                  <div class="col-lg-6 col-md-6 col-12">
                     <h6>Name<span style="color:red;">*</span></h6>
                     <input class="form-control my-3 " rows="3" cols="5" name="name" value="<?= $userdata->user_fullname?>"   readonly required> 
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                     <h6>Mobile<span style="color:red;">*</span></h6>
                     <input class="form-control my-3 " rows="3" cols="5" name="mobile" value="<?= $userdata->user_phone?>" readonly required> 
                     <input type="hidden" value=" <?= $userdata->user_email?>" name="email">
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                     <h6>Address<span style="color:red;">*</span></h6>
                     <textarea class="form-control my-3 " rows="3" cols="5" name="address" value="<?= $userdata->house_no?>"  required> <?= $userdata->house_no?>  </textarea>
                  </div>
                  <!--  <div class="col-lg-6 col-md-6 col-12">-->
                  <!--     <h6>Address Line 2<span style="color:red;">*</span></h6> -->
                  <!--<textarea class="form-control my-3" rows="3" cols="5" name="address"   required></textarea>-->
                  <!-- </div>   -->
                  <div class="col-lg-6 col-md-6 col-12">
                     <h6>Pincode<span style="color:red;">*</span></h6>
                     <input type="text" class="form-control my-3 p-2" max-length="6" min-length="6" pattern="[0-9]{1}[0-9]{5}"  name="pincode" value="<?= $userdata->pincode?>"  required>
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                     <h6>City or District<span style="color:red;">*</span></h6>
                     <input type="text" class="form-control my-3 p-2" name="city" value="<?= $userdata->city?>" required>
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                     <div class="form-group mt-2">
                        <h6 for="exampleFormControlSelect1">State<span style="color:red;">*</span></h6>
                        <select name="state" id="state" class="form-control" required>
                           <option value="<?= $userdata->state?> "><?= $userdata->state?></option>
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
               <div class="col-md-6">
                  <button  type="submit" name="user_details" value="1"class="btn btn-primary checkout-button">Update</button>
               </div>
            </form>
            <?php } ?> 
         </div>
      </div>
   </div>
</div>
<!---- model-->
<div id="myModal" class="modal fade" tabindex="-1">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header" style="border-bottom: 0px">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <div class="modal-body">
            <h4 style="text-align:center">We are launching soon!</h4>
            <h4 style="text-align:center">Please choose another option</h4>
         </div>
      </div>
   </div>
</div>
<!--condition modal-->
<div id="condition_model" class="modal fade" tabindex="-1">
   <div class="modal-dialog">
      <div class="modal-content">
         <!--<div class="modal-header" style="border-bottom: 0px">-->
         <!--   <button type="button" class="close modal_remove_button" data-dismiss="modal">&times;</button>-->
         <!--</div>-->
         <div class="modal-body">
                <h4>Things to Check for: </h4>
                <ul>
                 <li>Text size Is legible and color stands out against background.</li>
                 <li>Nothing is overlapping or too close to the margins.</li>
                 <li>Information is accurate and spelled correctly.</li>
                 <li>Images are clear and don't appear blurry.</li>
                </ul>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="condition_verify" required>
                    <label class="form-check-label" for="condition_verify">I have reviewed and approved my design.</label>
                </div>
                <button class="btn btn-primary text-uppercase text-center btn-lg btn-block view_more checkout-button submitbtn" style="margin-top:29px;" id="placeOrder2">PLACE ORDER</button>
                <button type="button" class="close modal_remove_button" data-dismiss="modal">&times;</button>
         </div>
      </div>
   </div>
</div>
</div>
<script>
   var gdtotal = parseFloat(document.getElementById('gdtotal').value).toFixed(2);
   var shipping = parseFloat(document.getElementById('shipping').value).toFixed(2);
   var cod_charge = parseFloat(document.getElementById('cod_charge').value).toFixed(2);
   var total = parseFloat(parseFloat(gdtotal)+parseFloat(shipping)).toFixed(2);
    var paymentWayClicked = false;
     function paymentWay(value1){
        if(paymentWayClicked==true) {
           return false;
        }
     if(value1=='cod'){
         $("#cod_payment").css("border", "2px solid darkgoldenrod");
          $("#online_payment").css("border", "2px solid #111");
         $("button.view_more").removeClass("openModel");
          $( "button.view_more" ).removeClass( "submitbtn" ).addClass( "formsubmit" );
          $( "button.order_last" ).removeClass( "order_place_button" ).addClass( "order_submit_button" );
            var extra_charge_html = '';
            if(shipping>0)
                extra_charge_html += '<div class="price row"><div class="col-6 text-left"><h6>Shipping <span style="font-size: 10px; color: rgb(214, 20, 20);">(Standard Delivery)</span></h6></div> <div class="col-6 text-right"><h6 style="float: right;">Rs. '+ shipping+'</h6></div></div>';
            if(cod_charge>0)
                extra_charge_html += '<div class="price row"><div class="col-6 text-left"><h6>Cod Charge </h6></div> <div class="col-6 text-right"><h6 style="float: right;" id="delivery">Rs.  '+cod_charge+ ' </h6></div></div>';
            document.getElementById('extracharge').innerHTML = extra_charge_html;
            document.getElementById('displaytotal').innerHTML = parseFloat(total)+parseFloat(cod_charge);
            // document.getElementById('displaytotal').innerHTML = parseFloat(parseFloat(total)+25).fixed(2);
         
     } else if(value1=='online'){
         $("#online_payment").css("border", "2px solid darkgoldenrod");
         $("#cod_payment").css("border", "2px solid #111");
          $( "button.view_more" ).removeClass( "submitbtn" );
        //  $( "button.view_more" ).removeClass( "formsubmit" ).addClass( "openModel");
         $( "button.view_more" ).removeClass( "submitbtn" ).addClass( "formsubmit" );
         $( "button.order_last" ).removeClass( "order_place_button" ).addClass( "order_submit_button" );
            //  document.getElementById('extracharge').innerHTML = '<div class="price"><h6>Shipping <span style="font-size: 10px; color: rgb(214, 20, 20);">(Standard Delivery)</span> <span style="float: right;">Rs. '+ shipping+'</span></h6></div>';
            var extra_charge_html = '';
            if(shipping>0)
                extra_charge_html = '<div class="price row"><div class="col-6 text-left"><h6>Shipping <span style="font-size: 10px; color: rgb(214, 20, 20);">(Standard Delivery)</span></h6></div> <div class="col-6 text-right"><h6 style="float: right;">Rs. '+ shipping+'</h6></div></div>';
            document.getElementById('extracharge').innerHTML = extra_charge_html;
            //  document.getElementById('displaytotal').innerHTML = parseFloat(total).fixed(2);
            document.getElementById('displaytotal').innerHTML = total;
         
         }
        $("#online_payment").attr("disabled", "disabled");
        $("#cod_payment").attr("disabled", "disabled");
        if(paymentWayClicked==false) {
            paymentWayClicked = true;
            document.getElementById("myform").submit();
        }
     }
   
</script>
<?php include('includes/footer.php')?>
<!--<---------------- MOBILE VIEW BUTTON ------------->
<div class="wishlist-compare-btn d-block  d-md-none mobile-bottom-fixed-button" style="display:none;">
   <!--<center>-->
   <!--   <button type="button"  class="btn btn-light btn-rounded btn-block view_more submitbtn" style="background:black !important;color:white !important;padding:14px;font-size:21px;display:none;" id="placeOrder3"> PLACE ORDER</a>-->
   <!--</center>-->
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    checkoutClicked = false;
    $(document).on("click",".formsubmit",function(e){
        // loader_all('placeOrder1', 'PLACE ORDER1', true);
        // loader_all('placeOrder2', 'PLACE ORDER1', true);
        // loader_all('placeOrder3', 'PLACE ORDER1', true);
        if(checkoutClicked == false)
            document.getElementById("myform").submit();
        else
            event.preventDefault(e);
        checkoutClicked = true;
        // document.getElementById("myform").disabled = true;
   });
   $(document).on("click",".order_place_button",function(e){
       event.preventDefault(e);
          swal("Please select payment method",{
                            position: 'top-end',                     
                            icon: "warning",
                            button: false,
                            timer: 1200,
                    });
   });
   
    $(document).ready(function () {
        $("#myform").submit(function () {
            $(".order_submit_button").attr("disabled", true);
            return true;
        });
    });
    $(document).on("click",'.order_submit_button',function(){
        if(checkoutClicked == false)
            document.getElementById("myform").submit();
        else
            event.preventDefault(e);
        checkoutClicked = true;
        // loader_all('placeOrder1', 'PLACE ORDER', true);
        // loader_all('placeOrder2', 'PLACE ORDER', true);
        // loader_all('placeOrder3', 'PLACE ORDER', true);
    });
</script>
<script>
    fbq('track', 'AddPaymentInfo');
</script>