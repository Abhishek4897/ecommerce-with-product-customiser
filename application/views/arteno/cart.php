<?php include('includes/header.php')?>
<style>
.main-content{
       background:white!important;
       /*background:#f3f2ed!important;*/
    }
    .custom-container .card-footer{
    background-color: rgba(0,0,0,.03)!important;
    }
   /*custom checkbox whole css*/
   /*.main-content{*/
   /*    background:white!important;*/
   /*}*/
   .cart-items .card .card-footer{
        background:rgba(0,0,0,.03)!important;
   }
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

.product-name,.section-title h1, h2, h3, h4, h5, h6 {
    font-family: ProximaNova, sans-serif !important
}

.product-name{
    margin-bottom:10px;
}
@media (min-width: 992px) and (max-width: 1300px){
    .main-content{
        min-height: 75%;
    }
}
@media only screen and (max-width: 600px) {
    
}
.cart-control i{
    margin-right: 5px;
    margin-top: 4px;
}
.form-check{
  padding-left:0rem !important;
}
.modal-body ,.p-4{
    /*padding:2.5rem ;*/
}
.custom-checkbox-designer {
    display: block;
    vertical-align: top;
    line-height: 26px;
    font-size: 14px;
    font-weight: 500;
    margin-left: 15px;
}
@media only screen and (max-width: 600px) {
    .variation-value{
     /*margin-left: 85px ;   */
     margin-left: auto !important;
    }
    .checkmark {
 position: absolute;
  top: 4;
  left: -4%;
        
    }
}
@media only screen and (min-width: 768px) {
       .checkmark {
 position: absolute;
  top: 4;
  left: -4%;
        
    }
.size .variation-value{
   margin-left:83px !important; 
}
.cart-items{
 /*overflow-y:scroll;*/
 /*min-height:600px;*/
}
.cart-items::-webkit-scrollbar{
  /*   display: block;*/
  /*width: 2em;*/
  /*overflow: auto;*/
  /*height: 2em;*/
    width: 3px;
  height: 8px;
  background-color: lightgray;
 
}
/*.cart-items::-webkit-scrollbar-thumb{*/
/*    background: #F5F5F5;*/
/*}*/
}

  /*.variation-value{*/
    
  /*   margin-left: auto !important;*/
  /*  }*/
.emptycart{
    height: 48%;
}
.text-black{
    color:black!important;
}
  .product-name h5{
       font-weight:600;
       font-size:20px;
       margin-bottom:15px;
   text-transform: capitalize!important;
   }
.product-name h6{
   font-weight:600;
   font-size:20px;
   margin-bottom:15px;
   text-transform: capitalize!important;
   }
.card-body{
    padding:.75rem !important;
}

  .variation-value {
    border: 0px solid #eee;
    margin-left: 86px;
    border-radius: 50%;
    padding-top: 1px !important;
    padding: 11px;
    padding-bottom: 1px !important;
    margin-bottom: 3px;
}
.rupess{
    font-size:18px;
}
@media only screen and (max-width: 600px) {
    .emptycart{
       height: 30%!important;
    }
    span.cart-primary{
        font-size:12px!important;
    } 
   .product-name h5{
       margin-bottom:10px;
   }
   .product-name h6{
       margin-bottom:10px;
   }
   .product-name span{
   margin-left:4px;
   }
   .text-black{
       color:black;
   }
   .text-success{
       color:green !important;
   }
   .variation-value{
   /*border: 1px solid #eee;*/
   /*margin-left: 88px;*/
   /*border-radius: 50%;*/
   /* padding: 4px; */
   /*padding-top: 3px !important;*/
   /*padding: 10px;*/
   /*padding-bottom: 3px !important;*/
   /*margin-bottom:3px;*/
   }
   .variation-value {
    border: 0px solid #eee;
    margin-left: 86px;
    border-radius: 50%;
    padding-top: 2px !important;
    padding: 11px;
    padding-bottom: 2px !important;
    margin-bottom: 3px;
}
   .variation-name{
   margin:3px;  
   }
   .variation-value, span,.variation-name{
   font-weight:600;
   font-size:14px;
   }
   .mt-5{
   margin-top:0px !important;
   }
}
   @media only screen and (max-width: 600px) {
   .cart-primary{
   font-size:12px!important;
   }
   }
   .card-header{
   font-size: 20px;
   font-weight: 600;
   }
   .variation-value, span,.variation-name{
   font-weight:600;
   }
   .box{
   box-shadow: 0px 0 25px 0 rgba(0, 0, 0, 0.1);
   padding: 20px 30px;
   transition: all ease-in-out 0.4s;
   background: #fff;
   border: 1px solid rgb(212, 212, 212);
   }
   .top-text h6{
   color: rgb(153, 150, 150);
   font-size: 20px;
   }
   .size-list ul{
   list-style: none;
   }
   .size-list ul li{
   display: inline-block;
   padding: 10px;
   }
   #si{
   font-size: 20px;
   color: #000;
   }
   .size-list ul li a{
   color: rgb(70, 68, 68);
   border: 1px solid rgb(112, 110, 110);
   border-radius: 50%;
   padding: 10px 14px;
   text-decoration: none;
   font-size: 10px;
   }
   .size-list ul .active a{
   color: #fff;
   background-color: #000;
   }
   .size-list ul li:hover a{
   color: #fff;
   background-color: rgb(36, 35, 35);
   }
   .quantity-list ul{
   list-style: none;
   }
   .quantity-list ul li{
   display: inline-block;
   padding: 15px;
   }
   .quantity-list ul li a{
   color: rgb(70, 68, 68);
   border: 1px solid rgb(112, 110, 110);
   border-radius: 50%;
   padding: 10px 16px;
   text-decoration: none;
   font-size: 12px;
   }
   .quantity-list ul .active a{
   color: #fff;
   background-color: #000;
   }
   .quantity-list ul li:hover a{
   color: #fff;
   background-color: rgb(36, 35, 35);
   }
   #one{
   color: #fff;
   border: 1px solid rgb(112, 110, 110);
   border-radius: 20%;
   padding: 10px 16px;
   text-decoration: none;
   font-size: 12px;
   background-color: rgb(27, 27, 27);
   }
   .box-img{
   width: 100%;
   }
   .box-img img{
   width: 100%;
   }
   .btn a{
   color: rgb(66, 66, 66);
   font-weight: bold;
   text-decoration: none;
   }
   .mt-10{
   margin-top:80px !important; 
   }
   .input-counter {
   max-width: 130px;
   min-width: 130px;
   margin-right: 10px;
   text-align: center;
   display: inline-block;
   position: relative;
   }
  
   .input-counter input {
   height: 30px;
   color: #222;
   outline: 0;
   display: block;
   border: none;
   background-color: #f8f8f8;
   text-align: center;
   width: 70px;
   font-size: 17px;
   font-weight: 600;
   }
   .input-counter span {
   position: relative;
   background-color: transparent;
   cursor: pointer;
   color: #000000;
   width: 30px;
   height: 30px;
   line-height: 50px;
   -webkit-transition: .5s;
   transition: .5s;
   }
   input[type="radio"]{
   height:0px;
   width:0px;
   visibility:hidden;
   }
   input[type="radio"]:checked+label{
   background:black;
   transition:.3s;
   color:white;
   font-weight:600;
   }
   .counter-btn{
   margin-left: 10px;
   margin-right: 10px;
   padding: 10px;
   border: 1px solid lightgrey;
   border-radius: 50%;
   font-size: 10px;
   vertical-align: middle;
   text-align: center;
   }
   .variation-data{
   display:flex;
   }
   .form-group{
   margin-bottom:0px;
   }
   .sizes{
   height:30px;
   width:30px;
   border:1px solid lightgrey;
   border-radius:50%;
   text-align:center;
   vertical-align:middle;
   padding:4px;
   }
   .b-right{
   border-right: 2px solid lightgray;
   }
   /*.variation-data label{*/
   /*    font-size:10px;*/
   /*}*/
   .cart-primary{
   font-weight:600;
   }
   ul {
   display: block;
   list-style-type: disc;
   margin-block-start: 0em !important;
   margin-block-end: 0em !important;
   margin-inline-start: 0px;
   margin-inline-end: 0px;
   padding-inline-start: 0px !important;
   }
   .removecartsession , .removecart,.movewish:hover{
   cursor: pointer;
   }
   .custum-modal-padding{
        padding:2.5rem !important;
   }
   .fd{
        font-family: ProximaNova, sans-serif !important;
    }
   @media only screen and (max-width: 600px) {
     .main-content {
        min-height: 70%;
       }
        .custum-modal-padding{
            padding:25px!important;
       }
    }
   
   .price {
        min-height: 25px!important;
       }  
        @media (min-width: 768px) and (max-width: 1023px){
           .main-content {
             min-height: 85%;
            }
         }
      /*css for ipad*/
    /*for iPad pro tablet */
    @media only screen and (min-width: 992px) {
    .main-content {
         min-height: 85%;
        }
    }
</style>
 
 
<br> <br>
<?php 
   $c = cart_count() ;
   $total =  cart_total();
   if( $c > 0){?>
<?php if(isset($_SESSION['discount_price'])){
   $total =  $total-$_SESSION['discount'];
   }else{
   $total =  cart_total();
   }?>
<section class="news-area" style="overflow-x:hidden;">
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <div class="container custom-container">
      <h3 style="margin: 30px 30px 10px 0px !important;">MY CART ITEM<?= ($c>1)?'S':'' ?>(<span class="cartCount" style="font-size: 1.25rem;"><?= $c; ?></span>)</h3>
      <div><?= $this->session->flashdata('valid');?></div>
      <div class="row">
         <div class="col-lg-8 col-md-12 pr-0">
            
            <div class=" pr-3 cart-items" id="desktop">
               <br><br>
            </div>
            <!--desktop view cart start here-->
            <br>
         </div>
         <div class="col-lg-4 col-md-12 " >
            <div class="card user_sidebar mb-2">
               <!--<div class="">-->
               <div class="card-header">PRICE SUMMARY</div>
               <div class="card-body bg-white">
                  <div class="row">
                     <div class="col-6 text-left">
                        <h6><b>Total Price</b></h6>
                     </div>
                     <div class="col-6 text-right">
                        <h6 class="price"><b>Rs. <?= cart_total()?></b></h6>
                     </div>
                  </div>
                  <!--  <div class="row mt-3">-->
                  <!--    <div class="col-6 text-left">-->
                  <!--      <h6>Delivery</h6>-->
                  <!--    </div>-->
                  <!--    <div class="col-6 text-right">-->
                  <!--      <h6>Rs. 999</h6>-->
                  <!--  </div>-->
                  <!--</div>-->
                  <?php if(isset($_SESSION['discount'])){?>
                  <div class="row mt-3">
                     <div class="col-6 text-left">
                        <h6><b>Discount</b></h6>
                     </div>
                     <div class="col-6 text-right"  style="color:green;">
                        <h6> <b>- Rs. <?= $_SESSION['discount']?></b></h6>
                     </div>
                  </div>
                  <?php }?>
                  <div class="row mt-3">
                     <div class="col-6 text-left">
                        <h6><b>Subtotal</b></h6>
                     </div>
                     <div class="col-6 text-right">
                        <h6 class="price"><b>Rs. <?= $total?></b></h6>
                     </div>
                  </div>
               </div>
               <table class="table" style="display:none;">
                  <tbody>
                     <tr>
                        <th class="text-left card-total-detail">Cart Total</th>
                        <td class="text-right card-total-detail " >Rs. <span class="price"><?= $total?></span> /-</td>
                        <input type="hidden" id="cart_amount" value="<?= cart_total()?>">
                     </tr>
                     <tr>
                        <th class="text-left">Total</th>
                        <div id="couponDiscount"></div>
                        <td class="text-right price couponprice">Rs. <span class="price " id=""><?= $total?>/-</span>
                           <input type="hidden" id="total" value="<?= cart_total() ?> ">
                        </td>
                     </tr>
                  </tbody>
               </table>
               <div class="card-footer">
                  <?php if(isset($_SESSION['user_id'])){?>
                   
                  <a data-toggle="modal" data-target="#condition_model">
                     <center>
                        <button type="button"  class="btn btn-primary  btn-lg btn-block" style="width: 80%;">CHECKOUT</button>
                     </center>
                  </a>
                  <?php }else{?>
                  <a data-toggle="modal" data-target="#guestloginotpmodal">
                     <center> <button type="button" class="btn btn-primary  btn-lg btn-block" style="width: 80%;">CHECKOUT</button></center>
                  </a>
                  <?php }?>
               </div>
               <?php if(isset($_SESSION['user_id'])){?>
               <!--<a href="<?= base_url()?>checkout">-->
               <!--   <center><button class="btn btn-primary  text-uppercase text-center view_more custom-lg ">PROCESS TO CHECKOUT </button></center>-->
               <!--</a>-->
               <?php }else{?>
               <!-- <a data-toggle="modal" data-target="#loginotpmodal">-->
               <!--   <center><button class="btn btn-primary  text-uppercase text-center view_more custom-lg ">PROCESS TO CHECKOUT </button></center>-->
               <!--</a>-->
               <?php }?>
               <!--</div>-->
            </div>
            <!--<hr class="mt-0">-->
            <div class="card user_sidebar mb-2">
               <div class=" card-body">
                  <h6><img src="<?= base_url()?>assets/img/coupon.png" style="height:25px;"> <b class="fd">COUPON</b></h6>
                  <div id="info">
                     <?php if(!isset($_SESSION['discount_price'])){?>
                     <p>Have a coupon code or a gift card? </p>
                     <input type="text" name="copupancode" class="form-control">
                     <button class="btn btn-primary  text-uppercase text-center view_more mt-2"  data-toggle="modal" data-target="#coupon_code_sidebar" style="cursor:pointer;padding: 7px 20px;  margin-bottom: 10px;" disabled>APPLY</button>
                     <!--<button class="btn btn-primary  text-uppercase text-center view_more"  data-toggle="modal" data-target="#loginotpmodal"  style="padding: 7px 20px;  margin-bottom: 10px;">APPLY</button>-->
                     <div id="alert"></div>
                     <?php }else{?>
                     <?= '<p style="color:green; font-size:18px;">    '.$_SESSION["coupon_name"].' is applied successfully! <button class="btn btn-warning btn-sm  text-uppercase text-center  remove ml-1 rounded-pill" style="padding: 7px 20px;  margin-bottom: 10px;">Remove</button></p>'?>
                     <?php }?>
                  </div>
               </div>
            </div>
         </div>
         <!--Apply coupon code sidebar-->
         <div class="modal right fade shoppingCartModal" id="coupon_code_sidebar" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-width" role="document" style="">
               <div class="modal-content" style="overflow-x: hidden;">
                  <div class="modal-header coupon-header-padding" style="">
                     <div class="search-box">
                        <form class="search-form">
                           <div>
                              <p class="mb-2">Have coupon code or gift card?</p>
                           </div>
                           <div style="display:flex;">
                              <input class="search-input" name="search" id="couponcode" placeholder="Enter coupon  code" type="text" style="padding: 8px 20px; border-radius: 6px 0px 0px 6px; border: 2px solid lightgrey; width:204px; height:38px;">
                              <button class="btn btn-primary   text-uppercase text-center view_more couponcheck"  type="button" data-toggle="modal" data-target="#coupon_code_sidebar" style="padding: 4px 20px;  margin-bottom: 10px; height:38px; border-radius:0px !important;" disabled>APPLY</button>
                              <!--<button class="btn btn-primary  text-uppercase text-center view_more"  data-toggle="modal" data-target="#loginotpmodal"  style="padding: 7px 20px;  margin-bottom: 10px;">APPLY</button>-->
                           </div>
                        </form>
                     </div>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true" style="font-size:16px;">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body p-0" style="background: rgb(244, 244, 244);">
                     <div class="product-cart-content mobile-sidebar">
                        <div class="modal-body">
                           <p>Available offers</p>
                           <div class="row">
                              <div class="col-md-9" id="coupon">
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
      </div>
   </div>
</section>
<?php }else{?>
<center>
      <img class="mt-4 emptycart" src="<?= base_url()?>assets/images/deafult/emptycart.gif"><br>
      <p style="text-align: center;font-size: 14px;margin: 20px 0px;font-weight: bold;color:black">Your cart is empty</p>
      <a href="<?=base_url()?>"><button class="btn btn-primary">Explore</button></a><br>
   </center>


<?php }?>
<!--<section class="unvisible-sm">-->
<?php include('includes/footer.php')?>
<!--</section>-->
<!--<div class="wishlist-compare-btn d-block  d-md-none stick-mobile-footer" style="position: sticky; top:0; left:0; right:0; bottom:0; padding:20px;background:white; z-index:9999999; ">-->
<!--<a href="https://admin.anshuwap.com/demo_arteno/order_status" class="btn btn-light btn-rounded btn-block" style="background:black !important;color:white !important;padding: 12px;font-size: 16px;  "> PROCEED TO CHECKOUT</a>-->
<!--</div>-->
<?php if(isset($_SESSION['user_id'])){?>
<center>
   <?php 
      if(cart_count()>0){
      ?>
   <div class="wishlist-compare-btn d-block  d-md-none mobile-bottom-fixed-button-cart"  style="display:none;">
      <center><a data-toggle="modal" data-target="#condition_model" class="btn btn-light btn-rounded btn-block" style="background:black !important;color:white !important;padding:14px;font-size:21px;display:none; "> GO TO CHECKOUT</a></center>
   </div>
   <?php }?> 
</center>
<?php }?>


<!--condition modal-->
<div id="condition_model" class="modal fade" tabindex="-1">
   <div class="modal-dialog  modal-dialog-centered">
      <div class="modal-content">
         <!--<div class="modal-header" style="border-bottom: 0px">-->
         <!--   <button type="button" class="close modal_remove_button" data-dismiss="modal">&times;</button>-->
         <!--</div>-->
         <div class="modal-body p-4 custum-modal-padding" style="" >
                <h4>Things to Check for: </h4>
                <ul>
                 <li>Text size Is legible and color stands out against background.</li>
                 <li>Nothing is overlapping or too close to the margins.</li>
                 <li>Information is accurate and spelled correctly.</li>
                 <li>Images are clear and don't appear blurry.</li>
                </ul>
                <br> <br>
                <!--<div class="form-check" style="margin-left: -20px;">-->
                <!--    <input type="checkbox" class="form-check-input" id="condition_verify" required>-->
                <!--    <label class="form-check-label" for="condition_verify">I have reviewed and approved my design.</label>-->
                <!--</div>-->
                
                 <div class="form-check" >
                   
                    <label class="form-check-label custom-checkbox-designer" for="condition_verify">
                         <input type="checkbox" class="form-check-input" checked="checked" id="condition_verify" required>
                        &emsp;I have reviewed and approved my design.
                       
                        <span class="checkmark"><i class="fa fa-check"></i></span>
                        </label>
                </div>
                <center>
                <a href="<?= base_url()?>checkout"><button class="openModel btn btn-primary text-uppercase text-center btn-lg btn-block view_more checkout-button submitbtn" style="margin-top:10px; width: 80%;">CHECKOUT</button></a>
                </center>
                <button type="button" class="close modal_remove_button" data-dismiss="modal" style="outline: 0px!important;">&times;</button>
         </div>
      </div>
   </div>
</div>
<script>
 $(document).on("click",".openModel",function(e){
        event.preventDefault(e);
         if($('#condition_verify').prop("checked") == true){
                window.location.href="<?= base_url()?>checkout";    
        } else { 
                 
                  swal("Please tick conditions checkbox",{
                            position: 'top-end',                     
                            icon: "warning",
                            button: false,
                            timer: 1200,
                    });
                    return false;  
                }
        
   });
   $(document).on("click",".order_submit_button",function(e){
        event.preventDefault(e);
        $("#condition_model").modal('show');
   });
   function cart_item(){
           $.ajax({
               method:"POST",
               url:"<?= base_url()?>Front/cart_item/",
               success:function(r){
                   $(".cartCount").html(r.trim());
               }
           });
       }
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
                   
               }
           });
                  } 
            });
           });   
       });
       function cart_lists(){
            $("#desktop").html('<div class="justify-content-center" style="position:absoulte;left:40%;"><img src=" <?=base_url()?>assets/img/unnamed.gif" style="position:absoulte;left:40%; height:80px; width:80px"/></div>');
               $.ajax({
                url:"<?= base_url()?>Front/cart_list_item/",
                  method:"POST",
                  dataType:"json",
                success:function(r){
                     cart_item();
                   $("#desktop").html(r.desktop);
                   $("#mobile").html(r.mobile);
             }
           });
       }
      
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
                         $("#coupon").html('<p style="color:red;">No Coupons are available.</p>');
                     }
             }
           });
       }
       coupon_list();
       cart_lists();
         $(document).on("click",'.coupons',function(){
           var code = $(this).data("code");
                    $("#couponcode").val(code);
         });
     $(document).on("click",".couponcheck",function(){
        var code = $("#couponcode").val();
        var cart_amount = $("#cart_amount").val();
        $.ajax({
            url:"<?= base_url()?>/Front/varify/",
            method:"POST",
            dataType:"json",
            data:{code:code,cart_total:cart_amount},
            success:function(r){
           
                if(r.r == 'error1'){
                                  swal("Please enter valid coupon code.",{
     icon: "warning",
     button: false,
     timer: 1200,
        });
                } else if(r.r == 'error2'){
                             swal("Please add more products to apply this coupon.",{
     icon: "warning",
     button: false,
     timer: 1200,
        });
                }else if(r.r == 'error3'){
                             swal("Coupon limit has been exceed.",{
     icon: "warning",
     button: false,
     timer: 1200,
        });
                }
                else{
                     swal("Coupon is applied.",{
     icon: "success",
     button: false,
     timer: 1200,
        });
         location.reload();
                }
                  
            }
        });
        
     });
      $(document).on("click",".movewish",function(){
                 var base = $(this).data("base");
                 var cart_id =$(this).data("cart_id");
                 swal({
                title: "",
                text: "Are you sure to move to wishlist?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
.then((willDelete) => {
  if (willDelete) {
         $.ajax({
                url:"<?= base_url()?>Front/movewish/",
                 method:"POST",
                 data:{
                 cart_id:cart_id,
                 base_id:base,
               },
                success:function(r){
                swal("Product moved to wishlist.",{
                        position: 'top-end',                     
                        icon: "success",
                        button: false,
                        timer: 1200,
                });
               if(r!=0){
                    cart_lists();
                     cart_price();
                     wishcount();
                   location.reload();
               }
    
             }
           });
  }
});
            

    
            });
        
            $(document).on("click",".removecartsession",function(){
               var index  = $(this).data("id");
                         swal({
                    title: "",
                    text: "Are you sure to remove from cart?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                          if (willDelete) {
                        $.ajax({
                    url:"<?= base_url()?>/Front/removesessioncart/",
                    method:"POST",
                    data:{'index':index},
                    success:function(r){
                    if(r.trim()<1){
                    location.reload();
                    $("#mobile").html('<div>'+
                    '<center>'+
                    '<img src="<?= base_url()?>assets/images/gif/empty-cart.jpeg" class="mt-4" style="height:auto;width:50%" ><br>'+
                    '<a href="<?= base_url()?>/Home "class="btn btn-primary mt-4">Continue Shopping</a>'+
                    '</center>'+
                    '</div>');
                    $("#desktop").html('<div>'+
                    '<center>'+
                    '<img src="<?= base_url()?>assets/images/gif/empty-cart.jpeg" class="mt-4" style="height:auto;width:50%" ><br>'+
                    '<a href="<?= base_url()?>/Home "class="btn btn-primary mt-4">Continue Shopping</a>'+
                    '</center>'+
                    '</div>');
                    
                    }
                    swal("Product removed from cart successfully.",{
                    icon: "success",
                    button: false,
                    timer: 1200,
                    });
                    cart_item();
                    cart_lists();
                    cart_price();
                    
                    }
                    
                    });
                    } 
                    });
               
             
             
              
            });
            
              $(document).on("click",".remove",function(){
               var result = confirm("Are you sure to remove coupon?");
          if(result){
          $.ajax({
             url:"<?= base_url()?>Front/remove_coupon/",
            method:"GET",
            success:function(r){
                if(r!=0){
                    location.reload();
                        swal('Coupon removed successfully.',{
                         icon: 'success',
                         button: false,
                         timer: 1500
                       });
                 
                }
            }
          }); 
          }
       });
       function checkbilladdress(){
           var bill = "<?= get_address()?>";
           if(bill != 1){
               swal('Please add billing address.',{
                         icon: 'error',
                         button: false,
                         timer: 1500
                       });
           }
       }
</script>