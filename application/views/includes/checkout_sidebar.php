<style>
  
    .modal-width{
       width:500px!important;
   }
       .header-bg-black, .footer-area {
       display: none;
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
<div class="cart-sidebar">
               <div class=" cart-sidebar-box">
                  <div>
                     <div class="cart-box">
                        <div class="cart-title" style="border-bottom: 1px solid rgba(206, 206, 206, 0.6); line-height: 35px; margin-bottom: 0px;">CART ITEMS</div>
                        <div style="background: rgb(240, 240, 240);">
                           <div class=" cart-item">
                              
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
                              <div class=" cart-itembox">
                                 <div style="display: flex;">
                                    <div style="flex: 1 1 0%;">
                                       <div class=" cart-box-img">
                                          <?= $img?>
                                       </div>
                                    </div>
                                    <div style="flex: 2 1 0%; padding-left: 10px; position: relative;">
                                       <div class=" item-name"><?= $cart->product_name?></div>
                                       <div class=" item-size"><?= $c->size?></div>
                                       <div class=" item-size">Qty <?= $c->qty?></div>
                                       <div class=" item-price"><?= $p->base?></div>
                                    </div>
                                 </div>
                              </div>
                             <?php 
                             $designer_charge = $designer_charge + $p->template * $c->qty;
                             $total = $total + $p->total;
                             $qty = $qty + $c->qty;
                             endforeach;?>
                              
                           </div>
                        </div>
                     </div>
                     <div style="margin-bottom: 20px; border-top: 1px solid rgba(112, 112, 112, 0.2);"></div>
                  </div>
                    <div class="">
                       <div class="">
                          <h6><img src="<?= base_url()?>assets/img/coupon.webp" style="height:25px;"> <b>COUPON</b></h6>
                            <div id="info">  
                           <?php if(!isset($_SESSION['discount_price'])){?>
                          <p>Have a coupon code or a gift card? See available offers.</p>
                         <button class="btn btn-primary  text-uppercase text-center view_more"  data-toggle="modal" data-target="#coupon_code_sidebar" style="padding: 7px 20px;  margin-bottom: 10px;" type="button">APPLY</button>
                       <div id="alert"></div>
                       <?php }else{?>
                 <?= '<p style="color:green; font-size:15px;">    '.$_SESSION["coupon_name"].' is Applied Successfully! <button class="btn btn-warning btn-sm  text-uppercase text-center  remove ml-1 rounded-pill" style="padding: 7px 20px;  margin-bottom: 10px;">Remove</button></p>'?>
                      <?php }?>
                       </div>
                       </div>
                    </div>
                    <hr class="mt-0">
           
                  <div style="font-size: 16px; font-weight: bold; color: rgb(0, 0, 0); margin-bottom: 10px;">PRICE DETAILS</div>
                  <div class=" price">Cart Total (inc. designer charge)<span style="float: right;"> Rs. <?= $total?></span></div>
                  <div class=" price">Designer Charge (all)<span style="float: right;"> Rs. <?= $designer_charge;?></span></div>
                  <div class=" price">Total Gst<span style="float: right;"> Rs. <?=$totalgst;?></span></div>
                  <!--<div class=" price">Shipping <span style="font-size: 10px; color: rgb(214, 20, 20);">(Standard Delivery)</span> <span style="float: right;">Rs.<?php  $shipping = $qty*$charge ; echo $shipping?></span></div>-->
                  <!--<div class=" price">Cod Charge  <span style="float: right;" id="delivery">Rs. 0/- </span></div>-->
                 <div id="extracharge"></div>
                  <div class=" gOaIfF" style="margin: 15px 0px 0px; border-width: 0.3px; border-style: solid none none; border-top-color: rgba(112, 112, 112, 0.2); border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image: initial;"></div>
                 <?php if(isset($_SESSION['discount_price'])){
                              $discount = $_SESSION['discount'];
                        $total = $total-$discount; 
                        $grand_total = $total+$totalgst;
                 }else{
                $grand_total = $total + $totalgst;
                $total = $total + $totalgst;
                 }?>
            <div class=" total-item-price">Total <strong style="float: right;">Rs. <span id="displaytotal"><?= $grand_total?></span></strong></div>
                 <input type="hidden" id="total" name="total_price" value="<?= $total?>">
                 <input type="hidden" id="shipping" name="shipping" value="<?= $shipping?>">
                  <input type="hidden" id="total_gst" name="total_gst" value="<?= $totalgst?>">
                 <input type="hidden"  id="location" name="location" value=" <?= $loactionid ?>">
                 <input type="hidden"  id="gdtotal" name="gdtotal" value=" <?= $grand_total ?>">
               
               </div>
            </div>
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
  ///remove coupon////
            </script>
            <!--Apply coupon code sidebar-->