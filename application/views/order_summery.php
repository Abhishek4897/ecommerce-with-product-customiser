<?php include('includes/header.php')?>
<style>
.header-bg-black, .footer-area {
    display: none;
}
 .checkout-summery-card{
        display: flex; border-top: 1px solid rgba(112, 112, 112, 0.2); padding: 10px 15px 0px; margin-top: 10px;
    }
    .summery-card-body{
        flex: 1 1 0%; display: flex; flex-direction: column; padding-left: 15px; padding-top: 9px; padding-bottom: 3px;
    }
    .summery-product-name{
        font-size: 15px; line-height: 22px; font-weight: bold;
    }
    .summery-product-variation{
        flex: 1 1 0%; font-size: 14px; color: rgb(124, 127, 131);
    }
    .summery-product-price{
        font-size: 15px; line-height: 22px; color: rgb(124, 127, 131); text-align: right;
        float:right;
    }
    .summery-header-title{
        font-size: 15px; line-height: 15px; font-weight: bold; padding-bottom: 0px; padding-left: 15px;
    }
    .summery-price-card{
        padding: 30px; background: white; margin-top: 10px; box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 6px 0px;
    }
    .price-title{
        font-size: 15px; font-weight: bold; line-height: 15px; margin-bottom: 15px;
    }
    .price-details{
        font-size: 14px; color: rgba(0, 0, 0, 0.6); line-height: 14px; margin-bottom: 10px;
    }
    .total-count{
        font-size: 14px; color: rgb(0, 0, 0); line-height: 14px; margin-top: 15px; padding-top: 15px; border-top: 1px solid rgba(112, 112, 112, 0.2);
    }
    .shipping-card{
    padding: 30px 20px; background: white; margin: 10px 0px; box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 6px 0px;
}
.shipping-card-title{
    font-size: 15px; font-weight: bold; padding-bottom: 8px; padding-left: 15px;
}
.summery-card-content{
    padding: 20px; border-top: 1px solid rgba(112, 112, 112, 0.2);
}
.shipping-addr{
    color: rgba(64, 64, 64, 0.6); font-size: 14px;
}
.gBiDST {
    position: fixed;
    width: 100%;
    bottom: 0px;
    left: 0px;
    padding: 10px;
    z-index: 100;
    background: white; border-top: 1px solid rgba(112, 112, 112, 0.2);
}
.hSGSUh {
    font-size: 18px;
    line-height: 40px;
    font-weight: bold;
    display: inline-block;
}
.cooyQV {
    display: block;
    text-align: center;
    padding: 0px 25px;
    line-height: 50px;
    width: 75%;
    border-radius: 25px;
    margin-bottom: 13px;
    font-size: 16px;
}
.chckout-mobile-header{
    background:white;
}

@media only screen and (max-width: 600px) {
    .coupon-body{
        height:500px;
        overflow-y:scroll;
    }
    
}
</style>
<?php  
$cpage='order';
include('includes/checkout_header.php');
?>
<section class="checkout-area bg-dark" style="padding:0px">
            <!--<---------------- MOBILE VIEW STEPER ------------->
        <div class="d-block d-md-none">
            <div class="chckout-mobile-header">
                <div class="row">
                    <div class="col-sm-7 col-7">
                       <h6 style="display:flex;">  <a href="<?= base_url()?>checkout" style="color:black;"><i class="fas fa-chevron-left" style="width:37px"></i> </a> <span class="ml-30">Order Summery </span> </h6>
                    </div>
                    <div class="col-sm-5 col-5">
                       <span class="text-muted text-right" style="float:right !important;">Step 3/4</span>
                    </div>
                </div>
            </div>
        </div>
   <div class="card mt-2">
       
       <div class="card-body"><br><br>
           <h6>CART ITEMS</h6>

           <?php  foreach( $datacart as $c):
        //   $img = related_product($c->temp_id);
        //   $image = $img->image;
                 $price = $c->price;
                  $p = json_decode($price);
                  $cart_data = $c->cart_data;
                  $cart = json_decode($cart_data);
                  $product = related_base($cart->id);
                  $slug = $product->slug;
                 $t_id = json_decode($cart->template_id);
                             $totalgst=0;
                             $total = 0;
                             $designer_charge = 0;
                             $invoice = invoice();
                              $charge = $invoice->shipping;
                             $gst = json_decode($invoice->gstp);
	                         $g = array_combine($gst[0],$gst[1]);
	                         $shipping = 0;
	                         $qty =0;
            //   $img = related_product($items->temp_id);
               $img ='';
               foreach($cart->screenshots as $image){
                   
                    $img = $img .'<img src="'.$image.'" style="width: 100%;" >';
               }
               if($items["size"]!=""){
                   $size = '<div class="summery-product-variation">Size:'. $items["size"].'</div>';
               }
           
           $gstcharge=0;
	                   foreach($g as $k =>$kvalue){
	                       if($k == $cart->id){
	                           
	                           $gstcharge  =  (($p->total * $kvalue)/100)+ $gstcharge;
	                       }
	                   }
	                        $totalgst = $totalgst+$gstcharge;
           ?>
            <div class="checkout-summery-card">
                <div style="width: 100px;">
                    <?= $img?>
                </div>
                <div class="summery-card-body">
                   <div class="summery-product-name"><?= $cart->product_name?></div>
                   <?= $size?>
                   <div class="summery-product-variation">Quantity:<?= $c->qty?></div>
                   <div style="font-size: 15px; line-height: 22px; color: rgb(124, 127, 131); text-align: right;"> Rs. <?= $p->total?></div>
                </div>
             </div>
            <?php 
             $designer_charge = $designer_charge + $p->template * $c->qty;
            $total = $total+$p->total;
            $qty = $qty + $c->qty;
            endforeach;?> 
          <!----  <div class="checkout-summery-card">
                <div style="width: 100px;">
                    <img src="https://cdn.toesmith.com/toesmith/product-images/uqrFPUEzCfDbtLEHcDPT9Q/Kitty Love _T-YeBNW2c9W.jpg?tr=n-crop_product" style="width: 100%;">
                </div>
                <div class="summery-card-body">
                   <div class="summery-product-name">Kitty Love </div>
                   <div class="summery-product-variation">MEN UK-7</div>
                   <div style="font-size: 15px; line-height: 22px; color: rgb(124, 127, 131); text-align: right;">MRP Rs. 2199</div>
                </div>
             </div>
             
            <div class="checkout-summery-card">
                <div style="width: 100px;">
                    <img src="https://cdn.toesmith.com/toesmith/product-images/uqrFPUEzCfDbtLEHcDPT9Q/Kitty Love _T-YeBNW2c9W.jpg?tr=n-crop_product" style="width: 100%;">
                </div>
                <div class="summery-card-body">
                   <div class="summery-product-name">Kitty Love </div>
                   <div class="summery-product-variation">MEN UK-7</div>
                   <div style="font-size: 15px; line-height: 22px; color: rgb(124, 127, 131); text-align: right;">MRP Rs. 2199</div>
                </div>
             </div>-->
             
       </div>
       
   </div>
       <div class="card mt-2 card-body coupon-cart mb-2">
                <div class="row">
                    <div class="col-2">
                        <img src="<?= base_url()?>assets/img/coupon.webp" style="height:30px; margin-top:10px;"> 
                    </div>
                    <div class="col-8">
                        <a  data-toggle="modal" data-target="#coupon_code_sidebar"><h6><b>COUPON</b></h6></a>
                         
                           <?php if(!isset($_SESSION['discount_price'])){?>
                          <p>Have a coupon code or a gift card? See available offers.</p>
                         <button class="btn btn-primary  text-uppercase text-center view_more"  data-toggle="modal" data-target="#coupon_code_sidebar" style="padding: 7px 20px;  margin-bottom: 10px;">APPLY</button>
                     
                       <?php }else{?>
                <?= '<p style="color:green; font-size:18px;">'.$_SESSION["coupon_name"].' is Applied Successfully! <button class="btn btn-warning btn-sm  text-uppercase text-center  remove ml-1 rounded-pill" style="padding: 7px 20px;  margin-bottom: 10px;">Remove</button></p>'?>
                      <?php }?>
                   
                        
                    </div>
                    
                   <br>
                </div>
       </div>
      <?php  if($_SESSION['discount_price']){
       $total =  $_SESSION['discount_price']+$totalgst;
      }else{
       $total = cart_total()+$totalgst;
      }?>
   <div class="summery-price-card">
             <div class="price-title">PRICE DETAILS</div>
             <?= $charge->shipping;?>
             <div class="price-details">Cart Total <span style="float: right;">Rs. <?= cart_total()?></span></div>
             <div class="price-details">Delivery Charges (Standard) <span style="float: right;">Rs.<?php  $shipping = $qty*$shipping ; echo $shipping;?></span></div>
             <div class="price-details">Total gst <span style="float: right;">Rs.<?=  $totalgst?></span></div>
             <div class="price-details">Designer Charge <span style="float: right;">Rs.<?=  $designer_charge?></span></div>
              <?php if($_SESSION['discount_price']){?>
             <div class="price-details">Discount<span style="float: right;">Rs.<?= $_SESSION['discount']?></span></div>
             <?php }?>
             <div class="total-count">Order Total <span style="float: right; font-weight: bold;">Rs. <?= $total+ $shipping?></span></div>
    </div>
    <div class="shipping-card">
          <div class="shipping-card-title">SHIPPING DETAILS</div>
          <a href="<?= base_url()?>shipping" style="text-decoration: none;">
             <div class="summery-card-content">
                <div class="shipping-addr" style="font-weight: bold; color: rgb(27, 33, 37);"><?= $location->Name?> <span style="float: right;">EDIT</span></div>
                <div class="shipping-addr"><?= $location->house_no?></div>
                <div class="shipping-addr"> <?= $location->city?></div>
                <div class="shipping-addr"><?= $location->state?></div>
                <div class="shipping-addr">Tel: <?= $location->Phone?></div>
             </div>
          </a>
          <div style="padding: 20px; border-top: 1px solid rgba(112, 112, 112, 0.2);">
             <strong>Standard Delivery</strong>
             <div class="shipping-addr" style="color: rgba(64, 64, 64, 0.6); font-size: 14px;">Shipped in 3-5 days.</div>
          </div>
       </div>
       
       <div class="gBiDST">
          
          <div class="wishlist-compare-btn d-block  d-md-none" style="position: sticky; top:0; left:0; right:0; bottom:0; padding:20px;background:white; z-index:999999999 !important; ">
              <?php  if($_SESSION['discount_price']){
       $total =  $_SESSION['discount_price']+$shipping;
      }else{
       $total = cart_total()+$shipping;
      }?>
              <div class=" hSGSUh" style="color: black; font-weight: normal; font-size: 16px; padding-left: 17px;">Total (<?= cart_count();?> Items) : <span style="color: black;">Rs. <?= $total+$totalgst+$shipping?></span></div>
<center>
    <input type="hidden" id="cart_total" value="<?= $total?>">
<a href="<?= base_url()?>payment_method/<?= $location_id?>" class="btn btn-light btn-rounded btn-block" style="    background: black !important;
    color: white !important;
    padding: 10px;
    font-size: 16px;background:black !important;color:white !important;padding:14px;font-size:21px;  ">PLACE ORDER </a>
</center>
</div>
       </div>
       <br><br><br><br><br>
   
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
                           <form class="search-form">
                             <div style="display:flex;">
                                 <input class="search-input" id="couponcode" name="search" placeholder="Enter coupon  code" type="text" style="padding: 8px 8px; border-radius: 6px 0px 0px 6px; border: 2px solid lightgrey;">
                                 <button class="search-button couponcheck" type="button" style="padding: 8px 8px; background: rgb(162, 162, 162); color: white; margin-left: -3px;  border: 2px solid rgb(162, 162, 162); border-radius: 0px 8px 8px 0px;">APPLY</button>
                              <br>
                           
                              </div>
                           </form>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                     <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span-->
                     <!--        aria-hidden="true">&times;</span></button>-->
                     <div class="modal-body p-0" style="background: rgb(244, 244, 244);">
                        <div class="product-cart-content mobile-sidebar">
                           <div class="modal-body coupon-body">
                              <p>Available offers</p>
                               <div class="row">
                                   <div class="col-md-9" id="coupon">
                                      <!--coupon code card start here-->
                                        <!--<div style="box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 6px 0px; padding: 25px 25px 25px 50px; background: white; width: 100%; margin: auto auto 10px; position: relative; border-radius: 8px; overflow: hidden;">-->
                                        <!--     <div style="height: 100px; width: 100px; border-radius: 50%; background: rgb(244, 244, 244); position: absolute; top: calc(50% - 50px); left: -80px;"></div>-->
                                        <!--     <div style="font-size: 16px; font-weight: bold; line-height: 16px;">ARTENO10</div>-->
                                        <!--     <div>-->
                                        <!--        <div style="color: rgb(64, 64, 64); font-size: 14px; margin-top: 6px;">Get 10% off on your total cart value</div>-->
                                        <!--        <p style="font-size:12px;">You need 1 more item in your cart to apply this coupon</p>-->
                                        <!--     </div>-->
                                        <!--     <div style="padding-top: 12px; margin-top: 12px; border-top: 1px solid rgba(112, 112, 112, 0.2); font-size: 14px; line-height: 17px;"><span>You save <span style="color: rgb(3, 166, 135);">Rs. 190.0</span></span>-->
                                        <!--        <strong style="color: rgb(185, 185, 185);  cursor: not-allowed; float: right; font-size: 15px;">APPLY</strong>-->
                                        <!--     </div>-->
                                        <!--  </div>-->
                                      <!--coupon code card start here-->
                                      <!--coupon code card start here-->
                                        <!--<div style="box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 6px 0px; padding: 25px 25px 25px 50px; background: white; width: 100%; margin: auto auto 10px; position: relative; border-radius: 8px; overflow: hidden;">-->
                                        <!--     <div style="height: 100px; width: 100px; border-radius: 50%; background: rgb(244, 244, 244); position: absolute; top: calc(50% - 50px); left: -80px;"></div>-->
                                        <!--     <div style="font-size: 16px; font-weight: bold; line-height: 16px;">ARTENO10</div>-->
                                        <!--     <div>-->
                                        <!--        <div style="color: rgb(64, 64, 64); font-size: 14px; margin-top: 6px;">Get 10% off on your total cart value</div>-->
                                                <!--<p style="font-size:12px;">You need 1 more item in your cart to apply this coupon</p>-->
                                        <!--     </div>-->
                                        <!--     <div style="padding-top: 12px; margin-top: 12px; border-top: 1px solid rgba(112, 112, 112, 0.2); font-size: 14px; line-height: 17px;"><span>You save <span style="color: rgb(3, 166, 135);">Rs. 190.0</span></span>-->
                                        <!--        <strong style="color: rgb(185, 185, 185);  cursor: not-allowed; float: right; font-size: 15px;">APPLY</strong>-->
                                        <!--     </div>-->
                                        <!--  </div>-->
                                      <!--coupon code card start here-->
                                   </div>
                                   <div class="col-md-3"></div>
                               </div>
                                 
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--Apply coupon code sidebar-->
<?php include('includes/footer.php')?>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
     //coupon///
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
      coupon_list();
       $(document).on("click",'.coupons',function(){
        var code = $(this).data("code");
                 $("#couponcode").val(code);
                 
    });
  $(document).on("click",".couponcheck",function(){
     var code = $("#couponcode").val();
     var cart_amount = $("#cart_total").val();
    //  alert(code+cart_amount);
     $.ajax({
         url:"<?= base_url()?>/Front/varify/",
         method:"POST",
         dataType:"json",
         data:{'code':code,cart_total:cart_amount},
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
   $(document).on("click",".remove",function(){
        event.preventDefault();
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
    });
</script>