<?php include('includes/header.php')?>


  <style>
  .variation-value{
      border: 1px solid #eee;
    margin-left: 86px;
    border-radius: 50%;
    /* padding: 4px; */
    padding-top: 3px !important;
    padding: 10px;
    padding-bottom: 3px !important;
    margin-bottom:3px;
  }
  .variation-name{
      margin:3px;  
  }
   .variation-value, span,.variation-name{
        font-weight:600;
    }
  .mt-5{
      margin-top:10px !important;
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

.btn-primary{
    border-radius:5px!important;
    color:#dbb258;
    font-weight:600;
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

    </style>
    
    <style>
   /*.designer_image{*/
   /*width: 100%;*/
   /*height: 100%;*/
   /*object-fit: cover;*/
   /*z-index: 2;*/
   /*}*/
   /*.visible-sm{*/
   /*display:none;*/
   /*}*/
   /*.mobile-bottom-fixed-button-cart{*/
   /*position: fixed;*/
   /*bottom: 0;*/
   /*width: 100%;*/
   /*margin: auto;*/
   /* left: 13%; */
   /*line-height: 50px;*/
   /*color: white;*/
 
   /*font-size: 16px;*/
   /*font-weight: bold;*/
   /*text-align: center;*/
   /*z-index: 99;*/
   /*background: white;*/
   /*padding: 20px;*/
   /*left: 0;*/
   /*right: 0;*/
   /*}*/
   /*@media only screen and (max-width: 600px) {*/
   /*.unvisible-sm{*/
   /*visibility:hidden!important; */
   /*}*/
   /*.footer-area{*/
   /* display:none;*/
   /*}*/
   /*.custom-container{*/
   /*width:96%!important;*/
   /*padding-left:2px;*/
   /*padding-right:2px;*/
   /*}*/
   /*.visible-sm{*/
   /*display:block;*/
   /*}*/
   /*.cart-pic{*/
   /*height:115px!important;*/
   /*}*/
   /*}*/
   /*.sizeclass{*/
   /*border: 1px solid grey;*/
   /*padding: 5px 5px 5px 12px;*/
   /*border-radius: 4px;*/
   /*width: 50px;*/
   /*display:inline;*/
   /*}*/
   /*.variation{*/
   /*font-size:13px;*/
   /*}*/
   /*.variation-value{*/
   /*padding: 0px 10px;*/
   /*width: 60px; */
   /*border: 1px solid rgb(144, 161, 181);*/
   /*border-radius: 4px; line-height: 30px;*/
   /*text-align:center;*/
   /*}*/
   /*.variation-name{*/
   /*font-size: 9px; color: rgb(144, 161, 181);*/
   /*}*/
   /*.image_area{*/
   /*width: 80px;*/
   /*height: 80px;*/
   /*border-radius: 50%;*/
   /*overflow: hidden;*/
   /*position: relative;*/
   /*}*/
   /*#profile_pic{*/
   /*visibility: hidden;*/
   /*height: 0px;*/
   /*width: 0px;*/
   /*}*/
   /*.pro_pic{*/
   /*position: absolute;*/
   /*bottom: 0px;*/
   /*width: 100%;*/
   /*height: 50%;*/
   /*display: flex;*/
   /*-webkit-box-align: center;*/
   /*align-items: center;*/
   /*-webkit-box-pack: center;*/
   /*justify-content: center;*/
   /*background: rgba(0, 0, 0, 0.6);*/
   /*flex-direction: column;*/
   /*cursor: pointer;*/
   /*right: 0px;*/
   /*z-index: 3;*/
   /*margin-bottom:0px!important;*/
   /*}*/
   /*.f-16{*/
   /*font-size:16px!important;*/
   /*}*/
   /*.ml-15{*/
   /*margin-left: 15px!important;*/
   /*}*/
   /*.mock-up-image{*/
   /*padding: 10px;*/
   /*height: 230px;*/
   /*}*/
   /*.border_single{*/
   /*border:1px solid #eee!important;*/
   /*}*/
   /*.border_none{*/
   /*border:none!important;*/
   /*}*/
   /*.sidebar_top_title{*/
   /*font-size:25px!important;*/
   /*}*/
   /*.border-radius{*/
   /*border-top-left-radius:20px!important;*/
   /*border-top-right-radius:20px!important;*/
   /*}*/
   /*.mt-35{*/
   /*margin-top:35px!important;*/
   /*}*/
   /*.mt-40{*/
   /*margin-top:40px!important;*/
   /*}*/
   /*.widget-area .widget_recent_comments ul li::before {*/
   /*background: #222;*/
   /*height: 7px;*/
   /*width: 7px;*/
   /*content: '';*/
   /*left: 0;*/
   /*display:none!important;*/
   /*top: 50%;*/
   /*-webkit-transform: translateY(-50%);*/
   /*transform: translateY(-50%);*/
   /*position: absolute*/
   /*}*/
   /*.widget-area .widget_recent_comments ul li:active,*/
   /*.widget-area .widget_recent_comments ul li:focus,*/
   /*.widget-area .widget_recent_comments ul li:hover{*/
   /*border-left:4px solid #d1a36a;*/
   /*}*/
   /*.close-button{*/
   
   /*}*/
   /*.sidebar_active{*/
   /*border-left:4px solid #d1a36a;*/
   /*}*/
   /*.widget-area .widget_recent_comments ul li{*/
   /*border-bottom: 2px dashed #eee;*/
   /*}*/
   /*.sidebar_title{*/
   /*font-size: 18px;*/
   /*color:#111;*/
   /*font-weight: 500;*/
   /*}*/
   /*.p-7{*/
   /*padding: 7px;*/
   /*}*/
   /*.label_details{*/
   /*font-size: 16px;*/
   /*font-weight: 600;*/
   /*text-transform:capitalize!important;*/
   /*}*/
   /*.custom-lg {*/
   /*width: 90%!important;*/
   /*margin:auto;*/
   /*}*/
   /*.navigate{*/
   /*font-size: 20px;*/
   /*font-weight: 500;*/
   /*}*/
   /*.mt-15{*/
   /*margin-top: 15px;*/
   /*}*/
   /*.shipping_name{*/
   /*font-size: 14px;*/
   /*text-transform: Uppercase;*/
   /*color:#111;*/
   /*line-height: 36px;*/
   /*}*/
   /*.cart-control{*/
   /*font-size: 14px; color: rgb(214, 20, 20); cursor: pointer;*/
   /*}*/
   /*.color-small{*/
   /*color:rgb(148, 148, 148)!important;*/
   /*}*/
   /*.shipping_address{*/
   /*font-size: 16px;*/
   /*text-transform: capitalize;*/
   /*line-height: 30px;*/
   /*}*/
   /*.stick-mobile-footer{*/
   /*}*/
   /*.mb-25{*/
   /*margin-bottom:25px!important;*/
   /*}*/
   /*.custom-container{*/
   /*width:80%;*/
   /*}*/
   /*.card{*/
   /*border-radius: 20px;*/
   /*border: none;*/
   /*}*/
   /*.order_id{*/
   /*font-size: 16px;*/
   /*text-transform: capitalize;*/
   /*font-weight: 600;*/
   /*color:#111;*/
   /*line-height: 36px;*/
   /*}*/
   /*.variation-data{*/
   /*display:inline;*/
   /*}*/
   /*a,a:hover{*/
   /*color:black;*/
   /*}*/
   /*.mt-5{*/
   /*margin-top:5px!important;*/
   /*}*/
   /*mobile view cart card css*/
   /*.cart{*/
   /*border-radius: 12px!important; box-shadow: rgba(0, 0, 0, 0.04) 0px 3px 6px 0px!important; background-color: rgb(255, 255, 255)!important; padding: 5px!important; margin-bottom: 10px!important;*/
   /*}*/
   /*.cart .cart-image{*/
   /*overflow: hidden; position: relative; border-radius: 12px;*/
   /*}*/
   /*.mobile-cart-text{*/
   /*text-align: center;*/
   /*font-size: 18px;*/
   /*font-weight: bold;*/
   /*line-height: 20px;*/
   /*}*/
   /*.cart .cart-image .cart-pic{*/
   /*width: 100%; transform: scale(1.3); object-fit: cover;*/
   /*}*/
   /*.cart .cart-body{*/
   /*flex: 3 1 0%; padding: 0px 15px; position: relative;*/
   /*}*/
   /*.cart .cart-body .cart-close{*/
   /*height: 35px; width: 35px; position: absolute;*/
   /*top: -18px;*/
   /*right: -5px; padding: 12px;*/
   /*font-size:20px;*/
   /*}*/
   /*.cart-total-counter{*/
   /*font-size: 16px; text-align: center; color: rgb(131, 131, 131); line-height: 20px;*/
   /*}*/
   /*.cart .cart-body .cart-content{*/
   /*display: flex; flex-direction: column; height: 100%;*/
   /*}*/
   /*.cart .cart-body .cart-content .cart-wrapper{*/
   /*height:84px!important;*/
   /*flex: 1 1 0%; display: flex; flex-direction: column; justify-content: center;*/
   /*}*/
   /*.cart .cart-body .cart-content .cart-wrapper .cart-price{*/
   /*font-size: 14px; line-height: 20px; margin-top: 5px; padding-left: 4px;*/
   /*}*/
   /*.cart .cart-body .cart-content .cart-wrapper .cart-variation{*/
   /*font-size: 14px; line-height: 20px; padding-left: 4px;*/
   /*}*/
   /*.cart .cart-body .cart-content .cart-wrapper .cart-name{*/
   /*font-size: 15px; font-weight: bold!important; line-height: 20px; padding-left: 4px;*/
   /*}*/
   /*.cart-pic{*/
   /*width: 100%; transform:object-fit: cover;*/
   /*height:90px;*/
   /*}*/
   /*.view_more{*/
   /*font-size:13px!important;*/
   /*}*/
   /*.wishbutton{*/
   /*height: 35px; border-top: 1px solid rgba(0, 0, 0, 0.07); text-align: center; color: rgb(212, 23, 22); font-size: 12px; line-height: 38px;*/
   /*}*/
  
   /*copun css*/
   /*.modal-width{*/
   /*    width:500px!important;*/
   /*}*/
   /*.coupon-card{*/
   /*    box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 6px 0px; */
   /*    padding: 25px 25px 25px 50px;*/
   /*    background: white; width: 100%;*/
   /*    margin: auto auto 10px;*/
   /*    position: relative;*/
   /*    border-radius: 8px;*/
   /*    overflow: hidden;*/
   /*}*/
   /*.pt-30{*/
   /*    padding-top:30px;*/
   /*}*/
   /*.section-bg{*/
   /*    background:white;*/
   /*    padding-bottom:0px;*/
   /*}*/
   /*.card-total-detail{*/
   /*    font-size: 14px;*/
   /*     color: rgba(0, 0, 0, 0.6);*/
   /*     font-weight: 400;*/
   /*}*/
   /* .modal-width{*/
   /*        width:500px;*/
   /*    }*/
   /*    .coupon-header-padding{*/
   /*       padding:40px; */
   /*    }*/
   /*@media only screen and (max-width: 600px) {*/
   /*    .section-bg{*/
   /*   background:#f5f5f5!important;*/
   /*    padding-bottom:15px;*/
   /*   }*/
   /*      .modal-width{*/
   /*        width:80%!important;*/
   /*    }*/
   /*    .coupon-header-padding{*/
   /*       padding:20px 10px; */
   /*    }*/
   /* }*/
  
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
<section class="news-area ptb-60" style="overflow-x:hidden;">
   <div class="container custom-container">
         <h3 style="margin:30px !important;margin-bottom: -10px;">MY CART <span class="cart-value1"><?= cart_count(); ?></span> ITEM(S)</h3>
      <div class="row">
         <div class="col-lg-8 col-md-12 pr-0">
         
            <!--mobile view cart end here-->
            
            <!--desktop view cart start here-->
            <div class=" pr-3 cart-items" id="desktop">
               
             
              
               <br><br>
            </div>
            <!--desktop view cart start here-->
         </div>
         <div class="col-lg-4 col-md-12 " >
    
            <div class="card user_sidebar mb-2">
               <!--<div class="">-->
                   <div class="card-header">PRICE SUMMARY</div>
                                   <div class="card-body bg-white">
                  <div class="row mt-3">
                      <div class="col-8 text-left">
                        <h6>Total MRP (incl. of Tax)</h6>
                      </div>
                      <div class="col-4 text-right">
                        <h6>Rs. <?= $total?> yes</h6>
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

                <!--<div class="row mt-3">-->
                <!--    <div class="col-6 text-left">-->
                <!--      <h6>Discount</h6>-->
                <!--    </div>-->
                <!--    <div class="col-6 text-right">-->
                <!--      <h6>Rs. 999</h6>-->
                <!--  </div>-->
                <!--</div>-->

                <div class="row mt-3">
                    <div class="col-6 text-left">
                      <h6>Subtotal</h6>
                    </div>
                    <div class="col-6 text-right">
                      <h6>Rs. <?= $total?></h6>
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
                        <td class="text-right price couponprice">Rs.<span class="price " id=""><?= $total?>/-</span>
                           <input type="hidden" id="total" value="<?= cart_total() ?> ">
                           </td>
                        </tr>
                     </tbody>
                  </table>
                  <div class="card-footer">
                      <?php if(isset($_SESSION['user_id'])){?>
                  <a href="<?= base_url()?>checkout">
                      <center>
                     <button type="button" class="btn btn-primary  btn-lg btn-block">CHECK OUT</button>
                     </center>
                     </a>
                      <?php }else{?>
                   <a data-toggle="modal" data-target="#loginotpmodal">
                     <center> <button type="button" class="btn btn-primary  btn-lg btn-block">CHECK OUT</button></center>
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
                  <h6><img src="<?= base_url()?>assets/img/coupon.webp" style="height:25px;"> <b>COUPON</b></h6>
                   <div id="info">  
                           <?php if(!isset($_SESSION['discount_price'])){?>
                          <p>Have a coupon code or a gift card? See available offers.</p>
                      
                         <button class="btn btn-primary  text-uppercase text-center view_more"  data-toggle="modal" data-target="#coupon_code_sidebar" style="padding: 7px 20px;  margin-bottom: 10px;">APPLY</button>
                      
                         <!--<button class="btn btn-primary  text-uppercase text-center view_more"  data-toggle="modal" data-target="#loginotpmodal"  style="padding: 7px 20px;  margin-bottom: 10px;">APPLY</button>-->
                       
                      
                       <div id="alert"></div>
                       <?php }else{?>
                       <?= '<p style="color:green; font-size:18px;">    '.$_SESSION["coupon_name"].' is Applied Successfully! <button class="btn btn-warning btn-sm  text-uppercase text-center  remove ml-1 rounded-pill" style="padding: 7px 20px;  margin-bottom: 10px;">Remove</button></p>'?>
                      <?php }?>
                       </div>
               <br>
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
                              <div>
                                 <input class="search-input" name="search" id="couponcode" placeholder="Enter coupon  code" type="text" style="padding: 8px 20px; border-radius: 6px 0px 0px 6px; border: 2px solid lightgrey;">
                           
                         <button class="btn btn-primary   text-uppercase text-center view_more couponcheck"  type="button" data-toggle="modal" data-target="#coupon_code_sidebar" style="padding: 7px 20px;  margin-bottom: 10px;">APPLY</button>
                   
                         <!--<button class="btn btn-primary  text-uppercase text-center view_more"  data-toggle="modal" data-target="#loginotpmodal"  style="padding: 7px 20px;  margin-bottom: 10px;">APPLY</button>-->
                   
                              </div>
                              
                           </form>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
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
        <div>
            <center>
            <img class="mt-4" src="<?= base_url()?>assets/img/icn_no_cart.png" style="height:auto;width:40%" ><br>
            <a href="<?= base_url()?>/Home "class="btn btn-primary">Add Products</a>
            </center>
            </div>

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
   <div class="wishlist-compare-btn d-block  d-md-none mobile-bottom-fixed-button-cart">
      <center><a href="<?= base_url()?>checkout" class="btn btn-light btn-rounded btn-block" style="background:black !important;color:white !important;padding:14px;font-size:21px;  "> GO TO CHECKOUT</a></center>
   </div>
   <?php }?> 
</center>
<?php }?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
function cart_item(){
        $.ajax({
            method:"POST",
            url:"<?= base_url()?>Front/cart_item/",
            success:function(r){
                $(".cart-value").html(r);
                $(".cart-value1").html(r);
            }
        });
    }
   $( document ).ready(function() {
        $(document).on("click",".removecart",function() {
        
        var id = $(this).data("rowid");
        var cart_id = $(this).data("cart_id");
          var result = confirm("Are sure you want to remove product f5gtrtf ");
          if(result){
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
                    $("desktop").html("");
                }
                 if(r<1){
                location.reload();
                }
                 cart_item();
                 cart_price();
     swal("Product is removed ",{
  icon: "success",
   button: false,
   timer: 1200,
     });
                
            }
        });
          }
            
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
             $(".price").html(r);
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
                      $("#coupon").html('<p>Coupon is not Available</p>');
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
             swal("coupon is applied successfully ",{
  icon: "success",
   button: false,
   timer: 1200,
     });
                 location.reload();
               
         }
     });
     
  });
   $(document).on("click",".movewish",function(){
              var base = $(this).data("base");
              var cart_id =$(this).data("cart_id");
             
              var result = confirm("Are sure you want to move product ");
if (result) {
                 $.ajax({
             url:"<?= base_url()?>Front/movewish/",
              method:"POST",
              data:{
              cart_id:cart_id,
              base_id:base,
            },
             success:function(r){
                 swal("Product is moved to wish ",{
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
     
         $(document).on("click",".removecartsession",function(){
            var index  = $(this).data("id");
            var result = confirm("Are sure you want to move product ");
            if(result){
           $.ajax({
                url:"<?= base_url()?>/Front/removesessioncart/",
                method:"POST",
                data:{'index':index},
                success:function(r){
                    if(r.trim()<1){
                     location.reload();
                    $("#mobile").html('<div>'+
            '<center>'+
            '<img src="<?= base_url()?>assets/img/icn_no_cart.png" class="mt-4" style="height:auto;width:40%" ><br>'+
            '<a href="<?= base_url()?>/Home "class="btn btn-primary">Add Products</a>'+
            '</center>'+
            '</div>');
                    $("desktop").html('<div>'+
            '<center>'+
            '<img src="<?= base_url()?>assets/img/icn_no_cart.png" class="mt-4" style="height:auto;width:40%" ><br>'+
            '<a href="<?= base_url()?>/Home "class="btn btn-primary">Add Products</a>'+
            '</center>'+
            '</div>');
            
                }
  swal("Product is removed ",{
  icon: "success",
   button: false,
   timer: 1200,
     });
             
                    cart_lists();
                   cart_price();
                  
                }
                
            });
            }
         });
         
           $(document).on("click",".remove",function(){
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
    
</script>    