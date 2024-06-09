<?php include('includes/header.php')?>
<!-- =====================================
   ==== Start Header -->
<style>
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
        height: 25px;
        position: absolute;
        border-radius: 50%;
        top: 5px;
        right: 15px;
        cursor: pointer;
        box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px 0px;
        background-color: rgb(255, 255, 255)!important;
        padding: 1px!important;
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
   display: flex;
   height: 153px;
   margin-bottom: 3px;
   position: relative;
   border: 1px solid rgba(198, 198, 198, 0.6);
   box-shadow: rgba(0, 0, 0, 0.1) 0px 2px 4px 0px;
   }
   .wishlist-img-top{
   width: 100%; height: 100%;
   }
   .wishlist-close {
   width: 20px;
   height: 20px;
   position: absolute;
   border-radius: 50%;
   top: -9px;
   right: 13px;
   cursor: pointer;
   font-weight: bold;
   font-size: 14px;
   border-radius: 50%;
   padding: 0px 0px -1px 4px;
   text-align: center;
   vertical-align: middle;
   transform: scale(1.5);
   box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
   }
   .active-menu {
    font-weight: bold;
    border-left: 5px solid red;
}
   .wishlist-detail {
   font-size: 15px;
   font-weight: bold;
   margin-top: 18px;
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
   font-size: 15px;
   font-weight: bold;
   margin-top: 18px;
   padding-left: 10px;
   }
   .wishlist-button {
   line-height: 30px;
   text-align: center;
   border: 1px solid rgb(203, 203, 203);
   border-radius: 15px;
   cursor: pointer;
   font-size: 14px;
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
    font-size: 35px;
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
    font-size: 40px;
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
    font-size: 11px;
    line-height: 20px;
    color: black;
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
    padding: 16px;
    background: black;
    width: 100%;
    bottom: -300px;
    right: 0px;
    z-index: 100000;
    transition: all 0.5s ease 0s;
    position: fixed;

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
   font-size: 15px;
   font-weight: bold;
   margin-top: 18px;
   padding-left: 10px;
   }
   .wishlist-detail {
   font-size: 15px;
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
   padding-left:0px;
   padding-right:0px;
   }
   .wishlist-normal-menu {
   font-size: 16px;
   padding: 14px 0px 10px 10px;
   }
   .pt-60 {
   padding-top: 0px;
   }
   }
</style>
<?php
$d = 1;
$c=1;
?>
<!--mobile header start-->
<section class="d-sm-block d-xs-block d-md-none d-lg-none" style="margin-top: 55px!important; height: 50px;">
   <div class="container">
      <div class="wishlist-menu">
         <div class="row">
            <div class="col-6">
               <div class="wishlist-normal-menu mobile-menu-font  active-menu" id="designmenu1" onclick="designWishlist()" style="border-bottom: 0px;" ><span>Designer Design (<?= count_wishlist('designer')?>)</span></div>
            </div>
            <div class="col-6">
               <div class="wishlist-normal-menu mobile-menu-font" id="customizemenu1"  onclick="customWishlist()" style="border-bottom: 0px;"><span>Custom Design (<?= count_wishlist('custom')?>)</span></div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--mobile header end -->
<div class="bg-dark pt-60">
   <div class="container">
        <div class="row">
        <div class="col-md-3 col-xs-12 col-12 mobile-padding">
            <div class="wishlist-menu d-none d-lg-block d-md-block">
               <div class="wishlist-normal-menu" id="designmenu" onclick="designWishlist()" ><span>Designer Design (<?= count_wishlist('designer')?>)</span></div>
               <div class="wishlist-normal-menu" id="customizemenu"  onclick="customWishlist()"><span>Custom Design (<?= count_wishlist('custom')?>)</span></div>
            </div>
        </div>
        <div class="col-md-9 mt-4">
            <div class="card mobile-card">
               <div class="card-body wish-card-body">
                    <div id="designwishlistpanel">
                     <div class="row commondata" id="designerdata">
                         
                        <?php 
                       if(count_wishlist('designer')>0){
                          $ds = json_decode($wishdata->cart_data);
                        foreach($wishdata as $w): 
                            
                            if($w->type == "designer"){ 
                                           $cart_data=json_decode($w->cart_data);
                                            $price=json_decode($w->custom_price);
                                            $temp_id = json_decode($cart_data->template_id);
                                            $tem_id = $temp_id[0]; 
                                            $discount = (($w->mrp - $price->total)/$w->mrp)*100;
                                            $discount = floor($discount);
                                            $currency = "Rs";
                            ?>
                        <?php
                        //  $t = related_product($w->temp_id);
                         $d =  json_decode(t_shirt_price($t->color,$t->product_base,$t->id));
                        ?>    
                            <div class="col-md-6 mt-2 pr-10">
                                <div class="wishlist-card">
                                    <div style="flex: 1 1 0%;">
                                        <img src="<?=$cart_data->screenshots->front?>" class="wishlist-img-top" >
                                      </div>
                                    <div style="flex: 1.2 1 0%; background: white;">
                                         <div style="position: relative;">
                                            <div class="wishlist-close"><a href="<?= base_url()?>/Home/removeWish/<?= $w->id?>"><span class="cart-close">&times;</span></a></div>
                                             <div class="wish-product-name mb-4 mr-3"><?= $cart_data->product_name?></div>
                                          <div class="wishlist-detail" style="margin-top: 5px;"><?= $currency?> <?= $price->total?> <del style="color: rgb(185, 160, 160);"><span
                                                   class="gXpSQf"><?= $currency?> <?= $w->mrp?> </span></del> <span style="color: rgb(214, 20, 20);"><span class="gXpSQf">(<?= $discount ?> %
                                                   OFF)</span></span>
                                                </div>
                                            <div style="display: flex; padding: 3px 10px 0px;">
                                               <div style="flex: 1 1 0%; padding-right: 10px;">
                                                  <div class="wishlist-button visible-lg"  data-toggle="modal"  data-target="#exampleModalLong<?= $w->id?>" class="wishlist-button">MOVE TO CART</div>
                                                 <div class="wishlist-button hidden-lg"  onclick="move_cart_mobile('<?= $w->id?>')" class="wishlist-button">MOVE TO CART</div>
                                               </div>
                                               <div style="width: 30px; height: 30px;">
                                                  <div class="edit-btn"><i class="fas fa-edit"></i></div>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                </div>
                            </div>
                        <!--desktop modal move to cart start-->
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
                                                <h1 class="hkmYEP"><?= $w->name?><span class="top-selling-label">Top Selling<span class="gAwDtz"></span></span></h1> 
                                                 <input type ="hidden" id="wishid" value=" <?= $w->id?>">
                                                 <input type ="hidden" id="tempid" value=" <?= $w->temp_id?>">
                                                <div class="kLenIb">
                                                        <span>  
                                                            <span style="display: inline-block; direction: ltr;">
                                                                <span style="cursor: inherit; display: inline-block; position: relative;">
                                                                    <div class="product-name"><span style="color: black;"><?= $currency?><?= $price->total?></span> <del
                                                                        style="color: lightgrey; font-size: 18px; font-weight: normal;"><?= $currency?><?= $price->base?></del> <span
                                                                        style="font-size: 18px; font-weight: normal;">(<?= $discount; ?>% off)</span></div>
                                                                    <div style="font-size: 14px; line-height: 20px; color: lightgrey;">inclusive of all taxes</div>
                                                                    <div class="wishbox-content" style="bottom: 0px;">
                                                                    <div class="row">
                                                                        <?php if($w->base_id == 2 ){?>
                                                                        <div class="col-md-6">
                                                                            <div class="wishbox-variation">SELECT SIZE</div>
                                                                            <select name="" id="size<?= $w->id?>">
                                                                                <option value="S">S</option>
                                                                                <option value="M">M</option>
                                                                                <option value="L">L</option>
                                                                                <option value="XL">XL</option>
                                                                                <option value="XXL">XXL</option>
                                                                            </select>
                                                                        </div>
                                                                        <?php }?>
                                                                        <div class="col-md-6">
                                                                            <div class="wishbox-variation">SELECT QUANTITY</div>
                                                                            <select name="" id="qty<?= $w->id?>">
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <a  data-toggle="modal" data-target="#sizechart" style="cursor:pointer"><u><p>Size Chart</p></u></a>
                                                                    
                                                                </div>
                                                                    <center><button class="btn btn-primary  movebtn mt-3 text-uppercase text-center follow_insta" data-wishid="<?= $w->id?>" data-tempid="<?=$w->temp_id?>" data-base="<?= $w->base_id?>" >Add to Cart</button>
                                                                        
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
                        <!--desktop modal move to cart end-->
                        <!--mobile move to cart start-->
                        <div class="bodsCA" id="mobile_move_cart<?= $w->id?>" style="bottom: 0px;">
                            <div class="row">
                        <i class="fa fa-times" style="color:#fff;"></i>
            <?php if($w->base_id == 2){?>
            <div class="col-xs-6 col-6">
                <div class="wishbox-variation text-white">SELECT SIZE</div>
                    <select name="" id="size<?= $w->id?>">
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                </select>
            </div>
            <?php }?>
            <div class="col-xs-6 col-6">
                <div class="wishbox-variation text-white">SELECT QUANTITY</div>
                <select name="" id="qty<?= $w->id?>">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
        </div>
                            <a  data-toggle="modal" data-target="#sizechart" style="cursor:pointer"><u><p class="text-white">Size Chart</p></u></a>
                            <button class="hlnFiA movebtn" data-wishid="<?= $w->id?>" data-tempid="<?=$w->temp_id?>" data-base="<?= $w->base_id?>">ADD TO CART</button>
                        </div>
                        <!--mobile move to cart end-->
        <?php }  $d++; 
                        
                        endforeach; }else{?>
                        <div class="col-md-12">
                            <center>
                                <img src="<?=base_url('assets/images/no_wishlist.png')?>" class="no_item"><br/>
                                <p><strong>No items in your wishlist</strong></p>
                               <a href="<?=base_url()?>"> <button class="btn btn-primary">Continue Shopping</button></a>
                            </center>
                        </div>
                        <?php }?>
                        
                     </div>
                  </div>
                    <div id="customwishlistpanel" style="display:none">
                        <div class="row commondata" id="coustomdata" >
                          <?php  if(count_wishlist('custom') > 0){
                                    foreach($wishdata as $w):
                                        if($w->type != "designer"){
                                            $cart_data=json_decode($w->cart_data);
                                            $price=json_decode($w->custom_price);
                                            $temp_id = json_decode($cart_data->template_id);
                                            $tem_id = $temp_id[0]; 
                                            $discount = (($w->mrp - $price->total)/$w->mrp)*100;
                                            $discount = floor($discount);
                                            $currency = "Rs";
                                        ?>
                                        <div class="col-md-6 mt-2 pr-10">
                                            <div class="wishlist-card">
                                          <div style="flex: 1 1 0%;">
                                            <img src="<?=$cart_data->screenshots->front?>" class="wishlist-img-top" >
                                          </div>
                                          <div style="flex: 1.2 1 0%; background: white;">
                                             <div style="position: relative;">
                                                <div class="wishlist-close"><a href="<?= base_url()?>/Home/removeWish/<?= $w->id?>"><span class="cart-close">&times;</span></a></div>
                                                <div class="wish-product-name mb-4 mr-3"><?= $cart_data->product_name?></div>
                                                <div class="wishlist-detail" style="margin-top: 5px;"><?= $currency?> <?= $price->total?> <del style="color: rgb(185, 160, 160);"><span
                                                   class="gXpSQf"><?= $currency?> <?= $w->mrp?> </span></del> <span style="color: rgb(214, 20, 20);"><span class="gXpSQf">(<?= $discount ?> %
                                                   OFF)</span></span>
                                                </div>
                                                <div style="display: flex; padding: 3px 10px 0px;">
                                                   <div style="flex: 1 1 0%; padding-right: 10px;">
                                                    <div class="wishlist-button visible-lg"  data-toggle="modal"  data-target="#exampleModalLong<?= $w->id?>" class="wishlist-button">MOVE TO CART</div>
                                                  <div class="wishlist-button hidden-lg"  onclick="move_cart_mobile('<?= $w->id?>')" class="wishlist-button">MOVE TO CART</div>
                                                   </div>
                                                   <div style="width: 30px; height: 30px;">
                                                      <a href="<?=base_url('customizer')?>?product=<?=$w->base_id;?>&wishlist=<?=$w->id;?>"><div class="edit-btn"><i class="fas fa-edit"></i></div></a>
                                                   </div>
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
                                                    <h1 class="hkmYEP"><?= $w->name?></h1> 
                                                     <input type ="hidden" id="wishid" value=" <?= $w->id?>">
                                                    <div class="kLenIb">
                                                        <span>  
                                                            <span style="display: inline-block; direction: ltr;">
                                                                <span style="cursor: inherit; display: inline-block; position: relative;">
                                                                    <div class="product-name"><span style="color: black;"><?= $currency?><?= $w->price?></span> <del
                                                                        style="color: lightgrey; font-size: 18px; font-weight: normal;"><?= $currency?><?= $w->price?></del> <span
                                                                        style="font-size: 18px; font-weight: normal;">(<?= $discount; ?>% off)</span></div>
                                                                    <div style="font-size: 14px; line-height: 20px; color: lightgrey;">inclusive of all taxes</div>
                                                                    <div class="wishbox-content" style="bottom: 0px;">
                                                                    <div class="row">
                                                                      <?php if($w->base_id == 2){?>
                                                                        <div class="col-md-6">
                                                                            <div class="wishbox-variation">SELECT SIZE</div>
                                                                            <select name="" id="size<?= $w->id?>">
                                                                                <option value="S">S</option>
                                                                                <option value="M">M</option>
                                                                                <option value="L">L</option>
                                                                                <option value="XL">XL</option>
                                                                                <option value="XXL">XXL</option>
                                                                            </select>
                                                                        </div>
                                                                        <?php }?>
                                                                        <div class="col-md-6">
                                                                            <div class="wishbox-variation">SELECT QUANTITY</div>
                                                                            <select name="" id="qty<?= $w->id?>">
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <a  data-toggle="modal" data-target="#sizechart" style="cursor:pointer"><u><p>Size Chart</p></u></a>
                                                                    
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
                                        <!--mobile move to cart start-->
                                        <div class="bodsCA" id="mobile_move_cart<?= $w->id?>" style="bottom: 0px;">
                            <div class="row">
                                                <input type="hidden" id="name" value="<?= $w->name?>">
                                                     
                                                     <input type ="hidden" id="wishid" value=" <?= $w->id?>">
           <?php if($w->base_id == 2){ ?>
            <div class="col-xs-6 col-6">
                <div class="wishbox-variation text-white">SELECT SIZE</div>
                    <select name="" id="size<?= $w->id?>">
                    <option value="S"></option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                </select>
            </div>
            <?php }?>
            <div class="col-xs-6 col-6">
                <div class="wishbox-variation text-white">SELECT QUANTITY</div>
                <select name="" id="qty<?= $w->id?>">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
        </div>
                            <a  data-toggle="modal" data-target="#sizechart" style="cursor:pointer"><u><p class="text-white">Size Chart</p></u></a>
                            <button class="hlnFiA movebtn" data-wishid="<?= $w->id?>" data-tempid="<?=$w->temp_id?>" data-base="<?= $w->base_id?>">ADD TO CART</button>
                        </div>
                                        <!--mobile move to cart end-->
                                    <?php } endforeach; } else{?>
                                       <div class="col-md-12">
                                            <center>
                                                <img src="<?=base_url('assets/images/no_wishlist.png')?>" class="no_item"><br/>
                                                <p><strong>No items in your wishlist</strong></p>
                                                <a href="<?=base_url()?>"><button class="btn btn-primary">Start Shopping</button></a>
                                            </center>
                                        </div>
                                    <?php }?>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div><br>
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
   var designwishlistpanel=document.getElementById('designwishlistpanel');
   var customwishlistpanel=document.getElementById('customwishlistpanel');
   var activemenu= document.getElementsByClassName("mobile-menu-active");
   document.getElementById("designmenu").classList.add("active-menu");
   document.getElementById("designmenu1").classList.add("active-menu");
   // document.getElementById("customizemenu").style.borderBottom = "thick solid red";
   
   
   
   
   
   function designWishlist(){
       designwishlistpanel.style.display="block";
       customwishlistpanel.style.display="none";
       document.getElementById("designmenu").classList.add("active-menu"); 
       document.getElementById("customizemenu").classList.remove("active-menu");
       document.getElementById("designmenu1").classList.add("active-menu"); 
       document.getElementById("customizemenu1").classList.remove("active-menu");
   }
   function customWishlist(){
       designwishlistpanel.style.display="none";
       customwishlistpanel.style.display="block";
       document.getElementById("designmenu").classList.remove("active-menu"); 
       document.getElementById("customizemenu").classList.add("active-menu");
       document.getElementById("designmenu1").classList.remove("active-menu"); 
       document.getElementById("customizemenu1").classList.add("active-menu");
       
   }
</script>

<?php include('includes/footer.php')?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
function move_cart_mobile(value){
    var id= value;
    $('#mobile_move_cart'+id).css("display","block")
    
}
  wishcount();
$(document).on("click",".movebtn",function(){
       var temp_id = $(this).data("tempid");
       var base = $(this).data("base");
       var wishid = $(this).data("wishid");
       var size1 = $("#size"+wishid).val();
       var qty = $("#qty"+wishid).val();
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
                
                // console.log(r);
                location.reload();
                    wishcount();
                swal("Product is moved to cart ",{
                             position: 'top-end',                     
                             icon: "success",
                             button: false,
                             timer: 1200,
                     });
                  
             }
        });   
            
     });
</script>