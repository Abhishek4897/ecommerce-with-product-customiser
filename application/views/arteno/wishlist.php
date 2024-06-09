<?php include('includes/header.php')?>
<!-- =====================================
   ==== Start Header -->
   
<style>
/*<!--  ==== For Ipad -->*/
 @media (min-width: 768px) and (max-width: 1023px){

 .custum-wishlist .wish-card-body {
     padding: .10rem!important;
     }
     .wishlist-card {
      height: 305px !important;
     }
    .custum-wishlist  .wishlist-img-top {
          width: 100% !important;
          height: 140px !important;
      }
     .custum-wishlist  .wish-product-name {
    font-size: 15px !important;
    white-space:nowrap;
   }
   .custum-wishlist .wishlist-detail {
    font-size: 15px !important;
   }

   .sizes {
    height: 22px !important;
    width: 22px !important;
    padding: 3px !important;

   } 
.counter-btn {
    margin-left: 6px !important;
    margin-right: 6px;
    height: 20px !important;
    width: 20px !important;
    cursor: pointer;
    padding: 5px !important;
    padding-top: 4px !important;
    border: 1px solid lightgrey;
    border-radius: 50% !important;
    font-size: 9px !important;
    vertical-align: middle;
    text-align: center;
}

.input-counter input {
width:40px !important;
}

.btn-group-lg>.btn, .btn-lg {
    padding: .2rem 1rem !important;
}

.swal-overlay {
    position: fixed;
    top: -289px !important;
    bottom: 307px !important;
}
 }
 
/*for iPad pro tablet */
@media only screen and (min-width: 992px) {

}
.main-content{
    min-height:calc(100vh-200px);
}

.shoppingCartModal .modal-content .modal-body .product-cart-subtotal {
    overflow: visible !important; 
    margin-bottom: 15px;
}
.wishlist-button {
    background:black !important;
    color:white !important;
}
.no_item{
    height:240px;
}

.ewish{
    height: 45%;
}
.others-option .option-item a {
  
    color: white !important;
  
}
.cartmodal .cart-control{
    display: flex!important;
    margin-right: 10px!important;
}
.cartmodal .cart-control i{
margin-right:4px!important;
}
.cartmodal .removecart{
 margin-left:10px!important;
}
.main-content{
    /*min-height:500px!important;*/
}
.cartmodal .close {
    line-height:10px!important;
}

@media only screen and (max-width: 600px) {
    .main-content{
        min-height:70% !important;
    }
    .sizes {
        padding:3px !important;
    }
    .wishlist-detail {
    font-size: 14px !important;
    }
    
}

   /*.main-content {*/
  
   /*background: #ffffff!important*/
   /*}*/
   .wishlist-blank-image{
   background-size:cover;
   object-fit:cover;
   background-position:middle;
   height:300px;
   width:300px;
   }
   .wishlist-section{
   padding-top:80px!important;
   padding-bottom:80px!important;
   padding-bottom:80px!important;
   }
   .login-button{
   width:300px;
   }
   .wishlist-item-img{
   height:100px;
   width:100px;
   }
   .wishlist-content{
   margin-top:8px;
   }
   .wishlist-content,.product-price{
   float:left;
   }
   .btn-edit{
   padding: 5px 15px;
   border-radius: 20px!important;
   font-size: 12px;
   width:70%!important;
   }
   .btn-edit-design {
   height: 35px!important;
   width: 35px;
   padding-left: 9px;
   border-radius:50%;
   background:black;
   color:white;
   border:none!important;
   font-weight:bold;
   }
   .btn-wish{
   margin-top:-6px!important;
   }
   .p-name{
   float:left;
   }
   .p-50{
   padding-left:60px;
   padding-right:60px;
   padding-bottom:60px;
   }
   button:active{
   border:none!important;
   }
   .close:focus{
   border:none!important;
   }
   .close{
   width: 25px;
   font-size: 15px;
   height: 25px;
   position: absolute;
   border-radius: 50%;
   top: 5px;
   right: 15px;
   cursor: pointer;
   box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px 0px;
   background-color: rgb(255, 255, 255)!important;
   padding: 4px!important;
   margin-bottom: 10px!important;
   border: 1px solid lightgrey;
   }
   .add-dot{
   white-space: normal;
   overflow: hidden !important;
   text-overflow: ellipsis;
   }
   .mr-24{
   margin-right:24px;
   }
   .close-icon{
   width: 25px;
   height: 25px;
   position: absolute;
   border-radius: 50%;
   top: 8px;
   right: 8px;
   cursor: pointer;
   }
   .wish-body{
   padding:5px!important;
   }
   select{
   width:100px;
   }
   .active-menu{
   font-weight:bold;
   border-left:5px solid red;
   }
   @media only screen and (max-width: 600px) {
   .mr-24{
   margin-right:5px;
   }
   .active-menu{
   font-weight:bold;
   border-left:none!important;
   border-bottom:5px solid red!important;
   }
   .info .row .col-md-8{
   /*display:flex;*/
   }
   .info .row .col-md-8 input{
   width:auto!important;
   }
   .p-50{
   padding-left:0px;
   padding-right:0px;
   padding-bottom:10px; 
   }
   .mobile-container{
   padding-left:2px;
   padding-right:2px;
   overflow:hidden;
   }
   .clear-wishlist{
   height: 40px!important;
   width: 40px!important;
   position: absolute;
   z-index: 99!important;
   float: right;
   right: 0!important;
   }
   }
</style>
<style>
   .cart{
   box-shadow: rgba(0, 0, 0, 0.1) 0px 2px 4px 0px; background-color: rgb(255, 255, 255)!important; padding: 5px!important; margin-bottom: 10px!important;
   border: 1px solid lightgrey;
   }
   a{
   color:black;
   }
   .cart .cart-image{
   overflow: hidden; position: relative; border-radius: 12px;
   }
   .cart .cart-image .cart-pic{
   width: 100%; transform: scale(1.3); object-fit: cover;
   }
   .cart .cart-body{
   flex: 3 1 0%; padding: 0px 15px; position: relative;
   }
   .cart .cart-body .cart-close{
   height: 35px; width: 35px; position: absolute;
   top: -18px;
   right: -5px; padding: 12px;
   font-size:20px;
   }
   .cart .cart-body .cart-content{
   display: block; flex-direction: column; height: 100%;
   }
   .cart .cart-body .cart-content .cart-wrapper{
   flex: 1 1 0%; display: flex; flex-direction: column; justify-content: center;
   }
   .cart .cart-body .cart-content .cart-wrapper .cart-price{
   font-size: 14px; line-height: 20px; margin-top: 5px; padding-left: 4px;
   }
   .cart .cart-body .cart-content .cart-wrapper .cart-variation{
   font-size: 14px; line-height: 20px; padding-left: 4px;
   }
   .cart .cart-body .cart-content .cart-wrapper .cart-name{
   font-size: 15px; font-weight: bold!important; line-height: 20px; padding-left: 4px;
   }
   .cart-pic{
   width: 120px!important;
   transform:object-fit: cover;
   height:90px;
   }
   .pt-60{
   padding-top:80px;
   }
   .wishbutton{
   height: 35px; border-top: 1px solid rgba(0, 0, 0, 0.07); text-align: center; color: rgb(212, 23, 22); font-size: 12px; line-height: 38px;
   }
   a,a:hover{
   color:black;
   }
   .wish-card-body{
   padding: 2.25rem!important;
   }
   .pr-10{
   padding-right:8px!important;
   padding-left:8px!important;
   }
   .wishlist-normal-menu {
   font-size: 16px;
   padding: 20px 0px 20px 20px;
   line-height: 16px;
   text-decoration: none;
   display: block;
   color: black;
   cursor: pointer;
   border-bottom: 1px solid lightgrey;
   }
   .wishlist-card {
   /*display: flex;*/
   height: 430px;
   margin-bottom: 3px;
   position: relative;
   margin-bottom: 10px!important;
   height: 300px
   border: 1px solid rgba(198, 198, 198, 0.6);
   box-shadow: rgba(0, 0, 0, 0.1) 0px 2px 4px 0px;
   -webkit-box-shadow: rgba(0, 0, 0, 0.1) 0px 2px 4px 0px;
   background: transparent;
   }
   .wishlist-img-top{
    width: 100%;
    height:250px;
   }
   .wishlist-close {
    width: 15px;
    height: 15px;
    position: absolute;
    border-radius: 50%;
    top: 10px;
    right: 11px;
    cursor: pointer;
    font-weight: bold;
    font-size: 8px;
    padding-top: 2px;
    border-radius: 0%;
    padding: 0px 0px -1px 4px;
    text-align: center;
    vertical-align: middle;
    transform: scale(1.5);
    box-shadow: rgb(0 0 0 / 16%) 0px 1px 4px;
   }
   .active-menu {
   font-weight: bold;
   border-left: 5px solid red;
   }
   .wishlist-detail {
   font-size: 12px;
   font-weight: bold;
   margin-top: 18px;
   margin-bottom:2px;
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
   /*font-size: 15px;*/
   font-weight: bold;
   margin-top: 5px;
   padding-left: 10px;
   }
   
   
   .wishlist-button{
   text-align: center;
   border: 1px solid rgb(203, 203, 203);
   border-radius: 15px;
   cursor: pointer;
   font-size: 14px;
   color: black;
       background: transparent;
   }
   .edit-btn {
   background: black;
   border-radius: 50%;
   padding: 7px 9px;
   color:white;
   height: 100%;
   cursor: pointer;
   }
   .mobile-menu-font{
   font-size:14px;
   }
   .wishbox {
   width: 100%;
   position: relative;
   background: white;
   display: flex;
   }
   .hwejdT{
   color:white!important;
   }
   .gcmLeW {
   width: 25px;
   height: 25px;
   position: absolute;
   border-radius: 50%;
   top: 18px;
   right: 18px;
   cursor: pointer;
   }
   .wishbox-main {
   position: absolute;
   width: 100%;
   top: 0px;
   left: 0px;
   height: 100%;
   object-fit: cover;
   z-index: 0;
   }
   .hkmYEP {
   font-size: 20px;
   line-height: 35px;
   margin-bottom: 10px;
   font-weight: bold;
   margin-top: 0px;
   display: flex;
   -webkit-box-align: center;
   align-items: center;
   }
   .wishbox-img {
   width: 100%;
   height: 420px;
   position: relative;
   }
   .gAwDtz {
   width: 0px;
   height: 0px;
   border-top: 11px solid transparent;
   border-bottom: 11px solid transparent;
   border-right: 11px solid white;
   position: absolute;
   top: 0px;
   right: 0px;
   }
   .kLenIb {
   font-size: 25px;
   line-height: 25px;
   color: rgb(174, 3, 3);
   margin-top: 6px;
   display: block;
   min-height: 25px;
   }
   .product-name {
   line-height: 42px;
   margin-top: 20px;
   display: inline-block;
   font-weight: bold;
   }
   .jsLivY {
   font-size: 18px;
   border: 1px solid rgb(144, 161, 181);
   padding: 7px 17px;
   min-width: 150px;
   border-radius: 5px;
   margin-top: 5px;
   color: black;
   }
   .hlnFiA {
   color: white;
   background-color: rgb(214, 20, 20);
   font-size: 20px;
   line-height: 20px;
   font-weight: bold;
   padding: 15px;
   text-align: center;
   width: 100%;
   margin-bottom: 8px;
   border-radius: 28px;
   cursor: pointer;
   }
   .wishbox-variation {
   font-size: 16px;
   line-height: 20px;
   margin-bottom: 10px;
   }
   .nice-select{
   width:80%!important;
   }
   .bodsCA{
   display:none;
   }
   .top-selling-label {
   font-size: 14px;
   background: rgb(200, 21, 23);
   color: white;
   line-height: 22px;
   height: 22px;
   display: inline-block;
   padding: 0px 30px 0px 10px;
   margin-left: 10px;
   border-top-left-radius: 3px;
   border-bottom-left-radius: 3px;
   position: relative;
   }
   .bodsCA {
   /*padding-top:20px;*/
   padding: 16px;
   background: black;
   width: 100%;
   bottom: -300px;
   right: 0px;
   /*z-index: 100000;*/
   z-index: 10000073 !important;
   transition: all 0.5s ease 0s;
   position: fixed;
   height: 259px;
   }
   .hlnFiA {
   color: white;
   background-color: rgb(214, 20, 20);
   font-size: 20px;
   line-height: 20px;
   font-weight: bold;
   padding: 15px;
   text-align: center;
   width: 75%;
   margin-bottom: 8px;
   border-radius: 28px;
   cursor: pointer;
   }
   .modal-lg{
   width: 850px!important;
   }
   @media only screen and (max-width: 600px) {
   .wish-card-body{
   padding: 0px!important;
   }
   .wishlist-menu .col-6{
   padding-left:0px;
   padding-right:0px;
   }
   .wish-product-name {
   font-size: 12px;
   font-weight: bold;
   margin-top: 8px;
   padding-left: 10px;
   }
   .wishlist-detail {
   font-size: 12px;
   font-weight: bold;
   margin-top: 18px;
   padding-left: 10px;
   }
    
   .mobile-card{
   background:none;
   border:none;
   }
   .cart {
   height:153px
   box-shadow: rgba(0, 0, 0, 0.1) 0px 2px 4px 0px;
   background-color: rgb(255, 255, 255)!important;
   padding: 5px!important;
   margin-bottom: 0px!important; 
   border: 1px solid lightgrey;
   }
   .mt-2, .my-2 {
   margin-top:0!important; 
   }
   .wishlist-normal-menu {
   display: inline;
   background:white;
   width:50%!important;
   }
   .mobile-padding{
   padding-left:0px!important;
   padding-right:0px!important;
  
   }
   .wishlist-normal-menu {
   font-size: 16px;
   padding: 14px 0px 10px 10px;
   }
   .pt-60 {
   padding-top: 0px;
   }
   }
   .wishlist-icon{
       font-size:30px;
   }
   input[type="radio"]:checked+label {
        background: black;
        transition: .3s;
        color: white;
        font-weight: 600;
    }
    .custum-wishlist{
           padding-top:10px!important;
       }
       .bg-dark {
            background: white!important;
        }
   @media only screen and (max-width: 600px) {
         .custum-mb-margin{
             margin-right: -5px;
              margin-left: -5px;
         }
          .ewish {
             height: 50% !important;
        }
      .wishlist-img-top {
            width: 100%;
            height: 135px;
        }
        .wishlist-card {
            /* display: flex; */
            height: 300px;
           margin-top: 10px;
        }
        .pr-10 {
            padding-right: 8px!important;
            padding-left: 8px!important;
        }
        .wishlist-icon{
           padding-top:20px;
       }
       .custum-wishlist{
           padding-top: 85px!important;
       }
        
        .custum-container {
            padding-right: 15px!important;
            padding-left: 15px!important;
        }
        .input-counter input {
           width: 29px!important;
           font-size:11px!important;
        }
        .counter-btn {
            margin-left: 4px!important;
            margin-right: 4px!important;
            height: 22px!important;
            /* padding-top: 1px; */
            width: 22px!important;
            cursor: pointer;
            padding: 6px;
            padding-top: 6px;
            border: 1px solid lightgrey;
            border-radius: 50%;
            font-size: 8px!important;
         }
          .sizes {
            height: 18px!important;
            width: 18px!important;
            border: 1px solid lightgrey;
            border-radius: 50%;
            text-align: center;
            /*padding: 1px!important;*/
            font-size: 7px!important;
            margin-left: 1px;
            cursor: pointer;
        }
    }
    
    /*select bx css*/
    input[type="radio"] {
        height: 0px;
        width: 0px;
        visibility: hidden;
    }
    .wish-product-name{
        padding-top:10px;
    font-size: 18px !important;
    color: black !important;
    line-height: 15px !important;
    text-overflow: ellipsis !important;
    overflow: hidden !important;
    height: 40px !important;
    text-transform: capitalize !important;
    font-weight: 600 !important;
    margin: 0px !important;
    font-family: ProximaNova, sans-serif !important;
}
.wishlist-detail{
    font-size: 20px;
    color: black;
    font-weight: bold;
    line-height: 23px;
    margin-top: 15px;
    font-family: ProximaNova, sans-serif !important;
}
.wishlist-detail del{
    font-size: 12px;
    color: lightgrey;
    font-weight: 500;
    line-height: 23px;
    margin-top: 15px;
    font-family: ProximaNova, sans-serif !important;
}
.wishlist-detail .gXpSQf{
    font-size: 12px;
    color: red;
    font-weight: 500;
    line-height: 23px;
    margin-top: 15px;
    font-family: ProximaNova, sans-serif !important;
}
   .sizes {
        height: 25px;
        width: 25px;
        border: 1px solid lightgrey;
        border-radius: 50%;
        text-align: center;
        vertical-align: middle;
        padding: 4px;
        font-size: 9px;
        margin-left: 2px;
        cursor: pointer;
    }
    .form-group {
        margin-bottom: 0px;
    }
    .input-counter {
        max-width: 130px;
        min-width: 130px;
        margin-right: 10px;
        text-align: center;
        display: inline-block;
        position: relative;
        cursor: pointer;
        padding-left: 8px;
    }
           .counter-btn {
                margin-left: 6px;
                margin-right: 6px;
                height: 23px;
                /* padding-top: 1px; */
                width: 24px;
                cursor: pointer;
                padding: 7px;
                padding-top: 6px;
                border: 1px solid lightgrey;
                border-radius: 50%;
                font-size: 9px;
                vertical-align: middle;
                text-align: center;
            }
           .input-counter input {
            height: 23px;
            color: #222;
            outline: 0;
            display: block;
            border: none;
            background-color: #f8f8f8;
            text-align: center;
            width: 60px;
            font-size: 13px;
            font-weight: 600;
        }
        .custum-container{
            padding-right: 30px;
            padding-left: 30px;
        }
        .wish-body{
            padding: 6px 8px;
        }
    /*select bx css*/
</style>
<?php
//   $d = 1;
   $c=1;
   ?>
<!--mobile header start-->
<!--<section class="d-sm-block d-xs-block d-md-none d-lg-none" style="margin-top: 74px!important;height: 30px;background:white">-->
<!--   <div class="container">-->
<!--      <div class="wishlist-menu">-->
<!--         <div class="row">-->
<!--            <div class="col-6">-->
<!--               <div class="wishlist-normal-menu mobile-menu-font  active-menu" id="designmenu1" onclick="designWishlist()" style="border-bottom: 0px;" ><span>Designer Design (<?= count_wishlist('designer')?>)</span></div>-->
<!--            </div>-->
<!--            <div class="col-6">-->
<!--               <div class="wishlist-normal-menu mobile-menu-font" id="customizemenu1"  onclick="customWishlist()" style="border-bottom: 0px;"><span>Custom Design (<?= count_wishlist('custom')?>)</span></div>-->
<!--            </div>-->
<!--         </div>-->
<!--      </div>-->
<!--   </div>-->
<!--</section>-->
<!--mobile header end -->
<div class="bg-main pt-60">
   <div class="container-fluid custum-container">
      <div class="row">
         <div class="col-md-12">
            <div class="mobile-card">
                <div class="custum-wishlist p-2 mobile-padding">
                     <center>
                               <span class="wishlist-icon mb-2"><i class="fa fa-heart"></i></span>
                               <h2>My Wishlist</h2>
                     </center>
                     <hr>
                    
                    
               <div class="card-body wish-card-body" style="padding-top:0px!important">
                 <?php
                 if((count_wishlist('designer')+count_wishlist('custom'))>0){
                 ?>  
                  <div id="designwishlistpanel">
                       <hr>
                       
                      <div class="row mt-2 commondata custum-mb-margin" id="designerdata">
                           
                        <?php 
                           $ds = json_decode($wishdata->cart_data);
                              
                            foreach($wishdata as $w){ 
                         
                                $t = related_product($w->temp_id);
                              $pro_detail=get_product_details($w->base_id);
                                $d =  json_decode(t_shirt_price($t->color,$t->product_base,$t->id));
                              $profit_amount=$pro_detail->mrp - $pro_detail->price;
                    
                                // if($w->type == "designer"){ 
                                                $cart_data=json_decode($w->cart_data);
                                                $price=json_decode($w->custom_price);
                                                $actual_price=$price->base + $price->template +$price->side_charge;
                                                $actual_mrp=$actual_price+$profit_amount;
                                                $temp_id = json_decode($cart_data->template_id);
                                                $tem_id = $temp_id[0]; 
                                                $discount = (($actual_mrp -$actual_price)/$actual_mrp)*100;
                                                $currency = "Rs";
                                ?>
                         
                          
                        <div class="col-md-3 col-6 mt-2 pr-10">
                           <div class="wishlist-card">
                              <div style="">
                                  <?php  
                                  if($cart_data->screenshots->front){
                                     $img = $cart_data->screenshots->front;
                                  }else{
                                     $img = $cart_data->screenshots->back;
                                  }?>
                                 <img src="<?=$img?>" class="wishlist-img-top" >
                              </div>
                              <div style="background: transparent;">
                                 <div style="">
                                     <?php
                                        // print_r($w);
                                     ?>
                                    <div class="wishlist-close"><a href="" onclick="removeProduct('<?= $w->id?>')"><span class="cart-close"><i class="fa fa-trash" aria-hidden="true"></i></span></a></div>
                                    <div class="wish-product-name"><?= ucwords(strtolower($cart_data->product_name))?></div>
                                    <div class="wishlist-detail" style="margin-top: 5px;"><?= $currency?> <?= $actual_price?> 
                                    <del><?= $currency?><?= $actual_mrp?></del> 
                                       <span class="gXpSQf">(<?= ceil($discount); ?>% OFF)
                                       </span>
                                    </div>
                                    <div style="height:60px;">
                                        <?php if($w->base_id==2){?>
                                       <div style="display:flex; padding: 0px 7px;" >
                                             <span>Size</span>
                                                <div class="form-group">
                                                  <input type="radio" name="size<?= $w->id?>" value="S" id="sizes<?= $w->id?>">
                                                  <label class="sizes" for="sizes<?= $w->id?>">S</label>
                                                </div>
                                                <div class="form-group">
                                                 <input type="radio" name="size<?= $w->id?>" value="M" id="sizem<?= $w->id?>">
                                                 <label class="sizes" for="sizem<?= $w->id?>">M</label>
                                                </div>
                                                <div class="form-group">
                                                   <input type="radio" name="size<?= $w->id?>" value="L" id="sizel<?= $w->id?>">
                                                    <label class="sizes" for="sizel<?= $w->id?>">L</label>
                                                 </div>
                                                <div class="form-group">
                                                  <input type="radio" name="size<?= $w->id?>" value="XL" id="sizexl<?= $w->id?>">
                                                  <label class="sizes" for="sizexl<?= $w->id?>">XL</label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="radio" name="size<?= $w->id?>" value="XXL" id="sizexxl<?= $w->id?>">
                                                    <label class="sizes xxl-size" for="sizexxl<?= $w->id?>">XXL</label>
                                                </div>
                                        </div>
                                        <?php }?>
                                        <div class="input-counter" style="display:flex;margin-bottom:4px">
                                            <span>Quantity</span>
                                           <span class="minus-btn counter-btn minus-btn" data-id="<?= $w->id?>"><i class="fas fa-minus"></i></span>
                                           <input type="text" value="1" id="qty<?= $w->id?>" class="tempqty" id1="tempqty_product" max="5" min="1" disabled="">
                                           <span class="plus-btn counter-btn  plus-btn" data-id="<?= $w->id?>"><i class="fas fa-plus"></i></span>
                                        </div>
                                    </div>
                                    <div style="padding: 3px 10px 0px;">
                                       <div style="">
                                          <div type="button" class="wishlist-button btn-lg visible-lg movebtn"  data-wishid="<?= $w->id?>" data-tempid="<?=$w->temp_id?>" data-base="<?= $w->base_id?>" >Add to cart</div>
                                          <div type="button" class="wishlist-button hidden-lg movebtn" class="wishlist-button" data-wishid="<?= $w->id?>" data-tempid="<?=$w->temp_id?>" data-base="<?= $w->base_id?>">Add to cart</div>
                                       </div>
                                       <!--<div style="width: 30px; height: 30px;">-->
                                       <!--   <div class="edit-btn"><i class="fas fa-edit"></i></div>-->
                                       <!--</div>-->
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--desktop modal Add to cart start-->
                        <div class="modal fade" id="exampleModalLong<?= $w->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                           <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                 <div class="modal-body">
                                    <div class="wishbox">
                                       <div style="flex: 1 1 0%;">
                                          <div class="wishbox-img" style="height: 350px;"><img
                                             src="<?=$cart_data->screenshots->front?>"
                                             class="wishbox-main"></div>
                                       </div>
                                       <div style="flex: 1 1 0%; padding-left: 20px;">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                          </button>
                                          <h1 class="hkmYEP">
                                             <?= $w->name?>
                                             <!--<span class="top-selling-label">Top Selling<span class="gAwDtz"></span></span>-->
                                          </h1>
                                          <input type ="hidden" id="wishid" value=" <?= $w->id?>">
                                          <input type ="hidden" id="tempid" value=" <?= $w->temp_id?>">
                                          <div class="kLenIb">
                                             <span>
                                                <span style="display: inline-block; direction: ltr;">
                                                   <span style="cursor: inherit; display: inline-block; position: relative;">
                                                      <div class="product-name"><span style="color: black;"><?= $currency?><?= $actual_price?></span> <del
                                                         style="color: lightgrey; font-size: 18px; font-weight: normal;"><?= $d->mrp?></del> <span
                                                         style="font-size: 18px; font-weight: normal;"><?= $discount; ?></span></div>
                                                      <div class="wishbox-content" style="bottom: 0px;">
                                                         <div class="row">
                                                            <?php if($w->base_id == 2 ){?>
                                                            <div class="col-md-6">
                                                               <div class="wishbox-variation">SIZE</div>
                                                               <select name="" id="size<?= $w->id?>x">
                                                                  <option value="S">S</option>
                                                                  <option value="M">M</option>
                                                                  <option value="L">L</option>
                                                                  <option value="XL">XL</option>
                                                                  <option value="XXL">XXL</option>
                                                               </select>
                                                            </div>
                                                            <?php }?>
                                                            <div class="col-md-6">
                                                               <div class="wishbox-variation">QUANTITY</div>
                                                               <select name="" id="qty<?= $w->id?>x">
                                                                  <option value="1">1</option>
                                                                  <option value="2">2</option>
                                                                  <option value="3">3</option>
                                                                  <option value="4">4</option>
                                                                  <option value="5">5</option>
                                                               </select>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <center><button class="btn btn-primary movebtn mt-3 text-uppercase text-center follow_insta" data-wishid="<?= $w->id?>" data-tempid="<?=$w->temp_id?>" data-base="<?= $w->base_id?>" >Add to Cart</button>
                                                      </center>
                                                   </span>
                                                </span>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--desktop modal Add to cart end-->
                        <!--mobile Add to cart start-->
                        <div class="bodsCA" id="mobile_move_cart<?= $w->id?>" style="bottom: 0px;margin:auto">
                           <i class="fa fa-times close-mobile-modal" onclick="closeMobile('mobile_move_cart<?= $w->id?>')" style="color:#fff; float:right;"></i>
                           <br> <br>
                           <center>
                              <div class="row">
                                 <?php if($w->base_id == 2){?>
                                 <div class="col-xs-6 col-6">
                                    <div class="wishbox-variation text-white">SELECT SIZE</div>
                                    <select name="" class="form-control" id="size<?= $w->id?>">
                                       <option value="S">S</option>
                                       <option value="M">M</option>
                                       <option value="L">L</option>
                                       <option value="XL">XL</option>
                                       <option value="XXL">XXL</option>
                                    </select>
                                 </div>
                                 <?php } ?>
                                 <div class="col-xs-<?= ($w->base_id == 2)? '6':'12' ?> col-<?= ($w->base_id == 2)? '6':'12' ?>">
                                    <div class="wishbox-variation text-white">SELECT QUANTITY</div>
                                    <select name="" class="form-control" id="qty<?= $w->id?>">
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                    </select>
                                 </div>
                              </div>
                              <br> <br>
                              <button class="hlnFiA movebtn" data-wishid="<?= $w->id?>" data-tempid="<?=$w->temp_id?>" data-base="<?= $w->base_id?>">ADD TO CART1</button>
                        </div>
                        </center>
                        <!--mobile Add to cart end-->
                        <?php 
                           };?>
                        
                     </div>
                  </div>
                  <?php }else{?>
                  <center><br><br>
                                  <img src="<?=base_url('assets/images/no_wishlist.png')?>" class="no_item"><br/>
                                  <p><strong>Make a wish from Arteno</strong></p>
                                  <a class="margin-bottom40" href="<?=base_url()?>"><button class="btn btn-primary  checkout-button">Explore</button></a>
                               </center><br><br>
                  <?php } ?>
                      <div id="customwishlistpanel" style="display:none">
                          <?php  if(count_wishlist('custom') > 0){ ?>
                         <div class="row commondata" id="coustomdata" >
                            <?php  
                               foreach($wishdata as $w){
                                   if($w->type != "designer"){
                                       $cart_data=json_decode($w->cart_data);
                                       $price=json_decode($w->custom_price);
                                        $actual_price=$price->base+$price->template;
                                       $temp_id = json_decode($cart_data->template_id);
                                       $tem_id = $temp_id[0]; 
                                       $discount = (($w->mrp - $actual_price)/$w->mrp)*100;
                                       $discount = floor($discount);
                                       $currency = "Rs";
                                   ?>
                            <div class="col-md-4 col-6 mt-2 pr-10">
                               <div class="wishlist-card">
                                  <div style="">
                                     <img src="<?=$cart_data->screenshots->front?>" class="wishlist-img-top" >
                                  </div>
                                  <div style="background: white;">
                                     <div class="wish-body" style="">
                                        <div class="wishlist-close"><a href="" onclick="removeProduct('<?= $w->id?>')"><span class="cart-close"><i class="fa fa-trash" aria-hidden="true"></i></span></a></div>
                                        <div class="wish-product-name"><?= $cart_data->product_name?></div>
                                        <div class="wishlist-detail" style="margin-top: 5px;"><?= $currency?> <?= $actual_price?> <del style="color: rgb(185, 160, 160);"><span
                                           class="gXpSQf"><?= $currency?> <?= $w->mrp?></span></del> <span style="color: rgb(214, 20, 20);"><span class="gXpSQf">(<?= $discount ?>%
                                           OFF)</span></span>
                                        </div>
                                        <div style="display:flex; padding: 0px 7px;" >
                                             <span>Size</span>
                                                <div class="form-group">
                                                  <input type="radio" name="size" value="S" id="sizes1">
                                                  <label class="sizes" for="sizes1">S</label>
                                                </div>
                                                <div class="form-group">
                                                 <input type="radio" name="size" value="M" id="sizem1">
                                                 <label class="sizes" for="sizem1">M</label>
                                                </div>
                                                <div class="form-group">
                                                   <input type="radio" name="size" value="L" id="sizel1">
                                                    <label class="sizes" for="sizel1">L</label>
                                                 </div>
                                                <div class="form-group">
                                                  <input type="radio" name="size" value="XL" id="sizexl1">
                                                  <label class="sizes" for="sizexl1">XL</label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="radio" name="size" value="XXL" id="sizexxl1">
                                                    <label class="sizes xxl-size" for="sizexxl1">XXL</label>
                                                </div>
                                        </div>
                                        <div style="">
                                           <div style="padding: 3px 10px 0px;">
                                              <div class="wishlist-button visible-lg"  data-toggle="modal"  data-target="#exampleModalLong<?= $w->id?>" class="wishlist-button">Add to cart1</div>
                                              <div class="wishlist-button hidden-lg"  onclick="move_cart_mobile('<?= $w->id?>')" class="wishlist-button">Add to cart1</div>
                                           </div>
                                           <!--<div style="width: 30px; height: 30px;">-->
                                           <!--   <a href="<?=base_url('customizer')?>?product=<?=$w->base_id;?>&wishlist=<?=$w->id;?>"><div class="edit-btn"><i class="fas fa-edit"></i></div></a>-->
                                           <!--</div>-->
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="modal fade" id="exampleModalLong<?= $w->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                               <div class="modal-dialog modal-lg" role="document">
                                  <div class="modal-content">
                                     <div class="modal-body">
                                        <div class="wishbox">
                                           <div style="flex: 1 1 0%;">
                                              <div class="wishbox-img" style="height: 350px;"><img
                                                 src="<?=$cart_data->screenshots->front?>"
                                                 class="wishbox-main"></div>
                                           </div>
                                           <div style="flex: 1 1 0%; padding-left: 20px;">
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                              </button>
                                              <h1 class="hkmYEP"><?= $cart_data->product_name?></h1>
                                              <input type ="hidden" id="wishid" value=" <?= $w->id?>">
                                              <div class="kLenIb">
                                                 <span>
                                                    <span style="display: inline-block; direction: ltr;">
                                                       <span style="cursor: inherit; display: inline-block; position: relative;">
                                                          <div class="product-name"><span style="color: black;"><?= $currency?><?= $actual_price?></span> <del
                                                             style="color: lightgrey; font-size: 18px; font-weight: normal;"><?= $currency?><?= $w->mrp?></del> <span
                                                             style="font-size: 18px; font-weight: normal;">(<?= $discount; ?>% off)</span></div>
                                                          <div class="wishbox-content" style="bottom: 0px;">
                                                             <div class="row">
                                                                <?php if($w->base_id == 2){?>
                                                                <div class="col-md-6">
                                                                   <div class="wishbox-variation">SIZE</div>
                                                                   <select name="" id="size<?= $w->id?>" required>
                                                                      <option value=""> select size</option>
                                                                      <option value="S">S</option>
                                                                      <option value="M">M</option>
                                                                      <option value="L">L</option>
                                                                      <option value="XL">XL</option>
                                                                      <option value="XXL">XXL</option>
                                                                   </select>
                                                                </div>
                                                                <?php }?>
                                                                <div class="col-md-6">
                                                                   <div class="wishbox-variation">QUANTITY</div>
                                                                   <select name="" id="qty<?= $w->id?>" required>
                                                                      <option value="1">1</option>
                                                                      <option value="2">2</option>
                                                                      <option value="3">3</option>
                                                                      <option value="4">4</option>
                                                                      <option value="5">5</option>
                                                                   </select>
                                                                </div>
                                                             </div>
                                                          </div>
                                                          <center><button class="btn btn-primary  movebtn mt-3 text-uppercase text-center follow_insta" data-wishid="<?= $w->id?>" data-tempid="<?=$w->temp_id?>" data-base="<?= $w->base_id?>" >Add to Cart</button></center>
                                                       </span>
                                                    </span>
                                                 </span>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <!--mobile Add to cart start-->
                            <div class="bodsCA" id="mobile_move_cart<?= $w->id?>" style="bottom: 0px;">
                               <i class="fa fa-times close-mobile-modal" onclick="closeMobile('mobile_move_cart<?= $w->id?>')" style="color:#fff; float:right;"></i>
                               <br> <br>
                               <center>
                                  <div class="row">
                                     <input type="hidden" id="name" value="<?= $w->name?>">
                                     <input type ="hidden" id="wishid" value=" <?= $w->id?>">
                                     <?php if($w->base_id == 2){ ?>
                                     <div class="col-xs-6 col-6">
                                        <div class="wishbox-variation text-white">SELECT SIZE</div>
                                        <select name="" class="form-control" id="size<?= $w->id?>">
                                           <option value="">Select Size</option>
                                           <option value="M">M</option>
                                           <option value="L">L</option>
                                           <option value="XL">XL</option>
                                           <option value="XXL">XXL</option>
                                        </select>
                                     </div>
                                     <?php }?>
                                     <div class="col-xs-6 col-6">
                                        <div class="wishbox-variation text-white">SELECT QUANTITY</div>
                                        <select name="" class="form-control" id="qty<?= $w->id?>">
                                           <option value="1">1</option>
                                           <option value="2">2</option>
                                           <option value="3">3</option>
                                           <option value="4">4</option>
                                           <option value="5">5</option>
                                        </select>
                                     </div>
                                  </div>
                                  <br> <br>
                                  <button class="hlnFiA movebtn " data-wishid="<?= $w->id?>" data-tempid="<?=$w->temp_id?>" data-base="<?= $w->base_id?>">ADD TO CART1</button>
                               </center>
                            </div>
                            <!--mobile Add to cart end-->
                           
                            </div>
                             <?php  } } }else{?>
                               <center>
                                  <img src="<?=base_url('assets/images/no_wishlist.png')?>" class="no_item"><br/>
                                  <p><strong>Make a wish from Arteno</strong></p>
                                  <a class="margin-bottom40" href="<?=base_url()?>"><button class="btn btn-primary  checkout-button">Explore</button></a>
                               </center>
                            
                            <?php }?>
                         </div>
                      </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   
</div>
<!-- Modal -->
<div class="modal fade" id="sizechart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-body">
            <h5 class="modal-title" id="exampleModalLongTitle"> Know your T-shirt Size</h5>
            <p>Use your measurements and the chart below to determine your shoe size.</p>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <img src="<?= base_url()?>assets/images/t-shirt-size-chart.jpg" class="card-img-top img-fluid">
         </div>
      </div>
   </div>
</div>
<!--modal end-->
<script>
   function closeMobile(id){
       $('#'+id).hide();
   }
      var designwishlistpanel=document.getElementById('designwishlistpanel');
      var customwishlistpanel=document.getElementById('customwishlistpanel');
      var activemenu= document.getElementsByClassName("mobile-menu-active");
    
   
</script>
<?php include('includes/footer.php')?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
   function move_cart_mobile(value){
       var id= value;
       $('#mobile_move_cart'+id).show();
       
   }
     wishcount();
      $(document).on("click",".movebtn",function(){
          var temp_id = $(this).data("tempid");
          var base = $(this).data("base");
          var wishid = $(this).data("wishid");
        //   $('#exampleModalLong'+wishid).modal('hide');
          var size1 = $('[name="size'+wishid+'"]:checked').val();
          var qty = $("#qty"+wishid).val();
    //   alert(temp_id + " " + base+ " " +  wishid + " " +  size1 + qty ) ;
    if(base==2){
             if(size1!="" && size1!= undefined){
                 swal({
     title: "Are you sure?",
     text: "You want to Add to cart!",
     icon: "warning",
     buttons: true,
     dangerMode: true,
  })
  .then((willDelete) => {
     if (willDelete) {
         $.ajax({
              url:"<?= base_url()?>Front/movecart/",
              method:"POST",
              data:{ 
                  'base_id' :base,
                  'qty':qty,
                  'size':size1,
                  'wishid':wishid,
                  'temp_id':temp_id,
              },
              success:function(r){
                  location.reload();
                      wishcount();
                  swal("Product added to cart ",{
                                position: 'top-end',                     
                                icon: "success",
                                button: false,
                                timer: 1200,
                        });
                     
                }
          }); 
     }
  }); 
             }
             else{
             swal({
             text: "Please select size!",
             icon: "warning",
             button: false,
             timer: 1200
          });
             }
    } else {
         swal({
     title: "Are you sure?",
     text: "You want to Add to cart!",
     icon: "warning",
     buttons: true,
     dangerMode: true,
  })
  .then((willDelete) => {
     if (willDelete) {
         $.ajax({
              url:"<?= base_url()?>Front/movecart/",
              method:"POST",
              data:{ 
                  'base_id' :base,
                  'qty':qty,
                  'size':size1,
                  'wishid':wishid,
                  'temp_id':temp_id,
              },
              success:function(r){
                  location.reload();
                      wishcount();
                  swal("Product added to cart ",{
                                position: 'top-end',                     
                                icon: "success",
                                button: false,
                                timer: 1200,
                        });
                     
                }
          }); 
     }
  }); 
    }
    });
        function removeProduct(id){
            event.preventDefault();
            swal({
             title: "Are you sure?",
             text: " You want to remove from wishlist!",
             icon: "warning",
             buttons: true,
             dangerMode: true,
          })
           .then((willDelete) => {
             if (willDelete) {
                    window.location.href='<?= base_url()?>/Home/removeWish/'+id;
             } else {
               return false;
             }
           });
        }
       $(document).ready(function(){
		    $('#tempqty_product').prop('disabled', true);
   			$(document).on('click','.plus-btn',function(){
   			    var id = $(this).data("id");
   		
   			   var get_value=parseInt($('#qty'+id).val());
   			   if(get_value>=5){
   			       swal("Quantity limit is full.",{
                          icon: "warning",
                          button: false,
                          timer: 1200,
                        });
   			      return false; 
   			   }else{
				$('#qty'+id).val(get_value + 1 );
   			   }
				
    		});
        	$(document).on('click','.minus-btn',function(){
        	    var id = $(this).data("id");

    			$('#qty'+id).val(parseInt($('#qty'+id).val()) - 1 );
    				if ($('#qty'+id).val() == 0) {
						$('#qty'+id).val(1);
					}
    	    	});
 		});
</script>