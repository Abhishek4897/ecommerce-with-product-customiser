<?php $this->load->view('includes/header');?>
<!--<link rel="stylesheet" href="<?= base_url() ?>assets/css/categorypage.css">-->

<style>
.nav_items{
    color: #666!important;
    line-height: 1.8;
    font-size: 14px;
    display:inline;
}
   .price-custum-margin{
       margin-top:40px;
   }
   .new-price{
        color: #d1a355!important;

    }
    input[type="radio"]{
        height:0px;
        width:0px;
        visibility:hidden;
    }
    input[type="radio"]:checked+label{
        border:2px  grey;
    }
    .labelsize{
        height:60px;
        width:70px;
        border-radius:5px;
        padding:8px;
    }
   @media only screen and (max-width: 600px) {
     .single-footer-widget{
         margin-left:30px;
     }
      .price-custum-margin{
           margin-top:10px;
       }
       .size-box .col-md-2{
           padding-right: 5px;
         padding-left: 5px;
       }
    .banner-bg1 .container .card .card-body{
        padding-left: 5px!important;
        padding-right: 5px!important;
    }
    .product-card .product-content {
            margin-top: 0px;
            padding: 6px;
        }
    .red_label {
        top: 3px;
    }
    .category-product-section{
        border-top: .5px solid rgb(212, 213, 217);
    }
    .product-image img {
        height: 150px!important;
        margin-top:0px!important;
    }
       .container,.card-body{
       padding-left:10px !important;
       padding-right:10px !important;
       overflow:hidden;
       }
       .btn-wishlist {
        height: 25px;
    }
    .single-product-box .product-content .btn-edit {
        padding: 3px 14px;
        border-radius: 20px!important;
        font-size: 12px;
    }
       section{
       margin:0px !important;
       }
       .mobile-display{
           display:none;
       }
       .custum-category-padding .col-6{
           border-left: 0.5px solid rgb(212, 213, 217);
            border-right: 0.5px solid rgb(212, 213, 217);
            border-bottom: 0.5px solid rgb(212, 213, 217);
       }
       
              .footer-area {
    display: none;
}
.products-page-gallery .product-page-gallery-main .slick-slide img {
    margin-top:20px;
}
   }
     .btn-wishlist {
    height: 25px;
}
   /* .banner-bg1{*/
   /*background-image:url(https://cdn.toesmith.com/toesmith/assets/productBackGroundImg_2x_yHPAcO1VF.png?tr=q-60);*/
   /*repeat:no-repeat;*/
   /*width:100%;*/
   /*}*/
   .products-page-gallery .product-page-gallery-preview{
       margin-top:-85px;
   }
   .nice-select .option:hover, .nice-select .option.focus, .nice-select .option.selected.focus {
   background-color:transparent;
   }
   .btn-heart {
   border-radius: 50%;
   background: none;
   border: 1px solid rgb(144, 161, 181);
   padding: 7px 5px 5px 7px;
   font-size: 23px;
   height: 40px;
   width: 40px;
   box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
   }
   .fa-star{
   color:#f1ed6c;
   }
   .mt-10{
   margin-top:10px;
   }
   .mt-20{
   margin-top:20px;
   }
   .rating-stars {
   display: inline-block;
   vertical-align: middle;
   list-style: none;
   margin: 0;
   padding: 0;
   position: relative;
   white-space: nowrap;
   clear: both;
   }
   .nice-select .list {
   width:190px;
   }
   .form-control {
   background-color: #fff;
   width: 100%;
   height: 45px;
   padding: 11px 15px;
   font-size: 18px;
   line-height: initial;
   color: #222;
   border: none;
   border-radius: 0;
   -webkit-transition: .5s;
   transition: .5s;
   border: 1px solid;
   }
   .modal {
   z-index: 999999;
   }
   .product-details-content .product-color-switch ul li a {
   display: inline-block;
   position: relative;
   border: 1px solid transparent;
   width: 35px;
   height: 35px;
   border-radius: 50%;
   }
   .red_label {
    font-size: 10px;
   }
   @media only screen and (min-width: 900px) {
   .banner-bg{
   background-image:url(https://cdn.toesmith.com/toesmith/upload-items/upload_fuQiBfFbq.jpg);
   width:100%;
  
   }
    .banner-bg1{
   background-image:url(https://cdn.toesmith.com/toesmith/assets/productBackGroundImg_2x_yHPAcO1VF.png?tr=q-60);
   repeat:no-repeat;
   width:100%;
   }
   .margin{
    margin-top:80px;
    margin-bottom:50px;
}
   }
   .table-width{
   width:230px !important;
   }
   .product-details-content .price span {
    display: inline-block;
    font-size: 15px;
    color: #222;
}

.wishlist-color{
color:rgb(144, 161, 181) !important;
font-size:13px;
}

.wishlist-button{
        border-radius: 50%;
    background: none;
    border: 1px solid rgb(144, 161, 181);
    padding: 6px 6px 5px 5px;
    font-size: 23px;
    height: 25px;
    width: 25px;
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
} 
/*custum button css*/
.custum-input {
    background: white;
    border: 1px solid #f5f5f5;
    border-radius: 6px;
}
.custum-select-radio {
   margin-left: 6px;
    border: 1px solid #f5f5f5;
    padding: 10px 15px;
    font-size: 13px;
    border-radius: 6px;
    margin-bottom: 10px;
}
.custum-radio input[type='radio']:checked+label{
    background:black;
    color:white;
    /*padding:20px;*/
}
.custum-radio input[type='radio']{
    display:none;
}
.custum-select-radio1{
   margin-left:0px;
    border: 1px solid #f5f5f5;
    padding: 11px 20px;
    font-size: 14px;
}
.custum-radio1 input[type='radio']:checked+label{
    background:black;
    color:white;
    /*padding:20px;*/
}
.custum-radio1 input[type='radio']{
    display:none;
}
@media only screen and (max-width: 600px) {
 .desktop-border-right{
    border-right:0px;
}
.mobil-padding-0{
    padding:0px!important;
}
.custum-select-radio1 {
    padding: 5px 10px;
    font-size: 12px;
}
/*custum button css*/
</style>
<section class="banner-bg">
   <div class="container margin">
    
      <div class="card border-0 shadow-sm">
         <div class="card-body">
               <?php 
          $products =   get_productbase($templete->product_base);
         ?>
<p class="d-none d-sm-none d-md-block d-lg-block"> <a style="display:inline" href="<?= base_url()?><?= $products->slug?>"><?= $products->name;?> </a> > <a style="display:inline" href=""><?= $templete->name?></a></p>
            <div class="row">
               <div class="col-lg-5 col-md-5">
                  <div class="products-page-gallery">
                     <?php  $products =   get_productbase($templete->product_base);?>
                     <div class="product-page-gallery-main">
                        <div class="item">
                           <img src="<?=  $templete->image?>" alt="image">
                        </div>
                       <?php
                       $count =0;
                       if($templete->product_base == 2){
                           $count = 4;
                       }else if($templete->product_base == 3){
                           $count = 3;
                       }else{
                           $count = 2;
                       }
                      for($i =1; $i<$count; $i++){
                          echo '<div class="item"><img src="'.base_url().'uploads/templates/'.$products->slug.'-black-side'.$i.'.png'.'" alt="image"></div>';
                      }
                       
                       
                       ?>
                     </div>
                     <div class="product-page-gallery-preview d-none d-sm-none d-md-block d-lg-block">
                         <?php
                       $count =0;
                       if($templete->product_base == 2){
                           $count = 4;
                       }else if($templete->product_base == 3){
                           $count = 3;
                       }else{
                           $count = 2;
                       }
                      for($i =1; $i<$count; $i++){
                          echo '<div class="item"><img src="'.base_url().'uploads/templates/'.$products->slug.'-black-side'.$i.'.png'.'" alt="image"></div>';
                      }
                       
                       
                       ?>
                       
                     
                        
                     </div>
                  </div>
               </div>
               <div class="col-lg-7 col-md-7">
                  <div class="product-details-content">
                     <h2><?= $templete->name?>
                    <!-- cart data-->
                    <?php $d =  json_decode(t_shirt_price($templete->color,$templete->pid,$templete->id));
                    ?>
                    
                        <input type="hidden" id="tempname" value="<?= $templete->name?>"/>
                         <input type="hidden" id="tembaseprice" value="<?=$d->product_price?>"/>
                        <input type="hidden" id="temprice" value="<?=$d->actual_price?>"/>
                        <input type="hidden" id="temid" value="<?=  $templete->id?>"/>
                        <input type="hidden" id="tempbase" value="<?=  $templete->product_base?>"/>
                        <input type="hidden" id="tempcolor" value="<?=  $templete->color?>"/>
                        <input type="hidden" id="image" value="<?=  $templete->image?>"/>
                     
                    <?php if(isset($_SESSION['user_id'])){ 
                         $wish = check_wish($templete->id,$_SESSION['user_id']);
                         if($wish->temp_id == $templete->id){?>
                       <span class="btn-wish"><button class="btn-wishlist  wished removewish" data-tempid ="<?= $templete->id?>" data-base="<?= $templete->pid?>" data-id="<?= $wish->id?>"><i class="far fa-heart"></i></button></span>
                         <?php }else{ ?>
                        <span class="btn-wish"><button class="btn-wishlist addwish" data-tempid ="<?= $templete->id?>" data-base="<?= $templete->pid?>" data-id="<?= $wish->id?>" ><i class="far fa-heart"></i></button></span>  
                         <?php }
                         }else{?>
                      <span class="btn-wish"><button class="btn-wishlist"   data-toggle="modal" data-target="#loginotpmodal"><i class="far fa-heart"></i></button></span>
                <?php }?>
                     </h2>
                     <div class="price price-custum-margin" style="">
                      <?php $d=  json_decode(t_shirt_price($templete->color,$templete->pid,$templete->id));?> 
             <h6 class="new-price"><b style="font-size:33px;"><?=  $d->price?> </b> <del style="color:red"> <?=  $d->mrp?> </del> <?= $d->off?>
                           <span class="d-none d-sm-none d-md-block d-lg-block" style="float:right !important">
                            <a href="<?= base_url('store/')?><?= $templete->designed_by?>" style="color:black">
                           <span class="d-none d-sm-none d-md-block d-lg-block" style="float:right !important">
                               <?php if($templete->user_image==""){ ?>
                                 <img src="https://cdn.toesmith.com/toesmith/designer-profile/2R7weHHKDkorbZUbAKtmi2_tBhIbL7Et.jpg" class="designer_image" style="height:30px; width:30px;" alt="..."> 
                              <?php }else{?>
                               <img src="<?= $templete->user_image; ?>" class="designer_image" style="height:30px; width:30px;" alt="..."> 
                              <?php } ?>
                             
                               Designed By: <?= $templete->user_fullname?></span></a>
                        </h6>
                        <p>inclusive of all taxes</p>
                     </div>
                     <div class="d-block d-sm-block d-md-none d-lg-none">
                        <p class="d-block d-sm-block d-md-none d-lg-none">Approximately shipped in 4-5 buisness days. The order may get delayed by 2-4 days due to farmer’s protest at the Delhi Haryana border</p>
                        <p class="d-block d-sm-block d-md-none d-lg-none"> <a href="">Free Shipping</a></p>
                        <div class="wishlist-compare-btn text-center" style="display: flex;">
                           <a href="<?=base_url()?>customizer?product=<?=$templete->product_base?>&template=<?=$templete->id;?>" class="btn btn-light btn-edit" style="font-size:15px;padding:15px;width:175px;">Edit Design</a>
                           <a href="#" class="btn btn-light btn-edit"><i class="fas fa-share" style="font-size:24px;"></i></a>
                       
                        </div>
                        <br> 
                        <div style="background: rgb(244, 244, 244); height: 10px; width:100%"> </div>
                        <br>
                      
                        <h6>
                            <?php if($templete->product_base == 2){?>
                           <span >SELECT SIZE</span>
                           <span><a href="#" data-toggle="modal" data-target="#sizeGuideModal" style="float:right;"> 
                           Size Chart </a>
                           </span>
                           <?php }?>
                        </h6>
                        <div class="row size-box">
                      <?php 

                             if($templete->product_base == 2){
                          ?>
                           <form  id="sizeForm">
                              <div class="form-check custum-radio pl-0">
                                <input class="form-check-input" type="radio"  name="sizemobile" value="S" id="ssize"  required="required">
                                <label class="form-check-label custum-select-radio" for="ssize">
                                  S
                                </label>
                                <input class="form-check-input" type="radio" name="sizemobile" value="M" id="inlineRadio2"  required="required">
                                <label class="form-check-label custum-select-radio" for="inlineRadio2">
                                  M
                                </label>
                                <input class="form-check-input" type="radio" name="sizemobile" value="L" id="inlineRadio3"  required="required">
                                <label class="form-check-label custum-select-radio" for="inlineRadio3">
                                    L
                                </label>
                                <input class="form-check-input" type="radio" name="sizemobile" value="XL" id="inlineRadio4"  required="required">
                                <label class="form-check-label custum-select-radio" for="inlineRadio4">
                                   XL
                                </label>
                                 <input class="form-check-input" type="radio" name="sizemobile" value="XXL" id="inlineRadio5"  required="required">
                                <label class="form-check-label custum-select-radio" for="inlineRadio5">
                                   XXL
                                </label>
                            </div>
                            </form>
                            <?php }else{?>
                           <input type="hidden"  id="tempsize" value="">
                           <?php }?>
                           
                        </div>
                    <div>
                <span >Quantity</span>
              <select class="nice-select " id="tempqtymobile" style="border:1px solid; background:white;" class="mb-3">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                           </select>            
                        
                    </div>    
                     </div>
                     <!--<br> -->
                     <div class="product-color-switch d-none d-sm-none d-md-block d-lg-block">
                        <!--<hr>-->
                        <!--<h4>Color Options available for this design</h4>-->
                        <!--<ul>-->
                        <!--   <li><a href="#" title="Black" class="color-black"></a></li>-->
                        <!--   <li><a href="#" title="White" class="color-white"></a></li>-->
                        <!--   <li class="active"><a href="#" title="Green" class="color-green"></a></li>-->
                        <!--   <li><a href="#" title="Yellow Green" class="color-yellowgreen"></a></li>-->
                        <!--   <li><a href="#" title="Teal" class="color-teal"></a></li>-->
                        <!--</ul>-->
                  <hr>
                     </div>
                     <div class="row mb-4">
                           <?php if($templete->product_base == 2){
                          ?>
                        <div class="col-md-4 d-none d-md-block">
                           <h6> Size</h6>
                           <select class="form-control " id="tempsize" style="border:1px solid; background:white;">
                             <option value="S">S</option>
                              <option value="M">M</option>
                              <option value="L">L</option>
                              <option value="XL">XL</option>
                               <option value="XXL">XXL</option>
                           </select>
                        </div>
                        <?php } ?>
                        <div class="col-md-4 d-none d-md-block">
                           <h6>Qty</h6>
                           <select class="form-control" id="tempqty" style="border:1px solid; background:white;" class="mb-3">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                           </select>
                        </div>
                     </div>
                     <!--<br>-->
                       <?php if($templete->product_base == 2){
                          ?>
                     <a href="#" data-toggle="modal" data-target="#sizeGuideModal" class="d-none d-md-block mt-10" > Size Chart <br> </a>
                  <?php }?>
                  </div>
                  <!--<br> <br>-->
                  <div class="d-none d-sm-none d-md-block d-lg-block" class="mt-5">
                     <div class="single-footer-widget float-left">
                        <ul class="social-icon" >
                           <li class="social-item"><a href=""><i class="fab fa-facebook-square" aria-hidden="true" style="color:black !important;font-size:22px;"></i></a></li>
                           <li class="social-item"><a href=""><i class="fab fa-instagram" style="color:black !important;font-size:22px;"></i></a></li>
                           <li class="social-item"><a href=""><i class="fab fa-twitter" style="color:black !important;font-size:22px;"></i></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="wishlist-compare-btn d-none d-sm-none d-md-block d-lg-block" style="float:right!important">
                     <a href="<?=base_url()?>customizer?product=<?=$templete->product_base?>&template=<?=$templete->id;?>" class="btn btn-light" style="background:white !important;color:black !important; border-radius: 0px;">CUSTOMIZE</a>
                     <button class="btn btn-light cart" data-id="<?= $templete->id?>" style="background:black !important;color:white !important; border-radius: 0px;    margin-left: -18px !important;"> ADD TO CART</button>
                  <br> <br>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
  
   <!--</div>-->
</section>
<!--design with data-->

<section class="p-20 d-none d-sm-none d-md-block" >
   <br> <br>
   <div class="container">
      <h2 class="text-center heading-title">DESIGNED FOR COMFORT</h2>
      <br> <br>
      <div class="row ">
         <div class="col-md-3">
            <div class="text-center">
               <img src="<?= base_url()?>assets/images/comfort.webp?tr=w-130,h-130">
               <p>Light weight TPR sole</p>
            </div>
         </div>
         <div class="col-md-3">
            <div class="text-center">
               <img src="<?= base_url()?>assets/images/comfort2.webp?tr=w-130,h-130">
               <p>Memory foam insole - Pillow for your feet</p>
            </div>
         </div>
         <div class="col-md-3">
            <div class="text-center">
               <img src="<?= base_url()?>assets/images/comfort3.webp?tr=w-130,h-130">
               <p>Flexible cementing technology for maximum comfort</p>
            </div>
         </div>
         <div class="col-md-3">
            <div class="text-center">
               <img src="<?= base_url()?>assets/images/comfort4.webp?tr=w-130,h-130">
               <p>Best quality fabric for rough and tough use</p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="d-none d-md-block"  style="background-image:url('<?= base_url()?>assets/images/background.jpg')" >
   <br> <br>
   <div class="container">
      <h2 class="text-center heading-title"  style="color:white;">OUR PROMISE</h2>
      <br> <br>
      <br>
      <div class="row ">
         <div class="col-md-6">
            <div class="text-center">
               <img src="https://cdn.toesmith.com/toesmith/assets/ReturnBox_pg-4z5HD1.png" class="promise-img" style="height:130px; width:130px;">
               <br>
               <h6 style="color:white;">7 days return</h6>
            </div>
         </div>
         <div class="col-md-6">
            <div class="text-center">
               <img src="https://cdn.toesmith.com/toesmith/assets/Return_2x_zIr3AF5_Z.png" class="promise-img"  style="height:130px; width:130px;">
               <br>
               <h6 style="color:white;">6 month warranty</h6>
            </div>
         </div>
      </div>
      <br> <br> <br>
   </div>
   <br> <br>
</section>
<section class="d-block d-md-none" >
   <br> <br>
   <div class="container">
            
      <h5 class="text-center heading-title">ABOUT OUR PRODUCT </h5>
      <br>
      <p class="text-center "><?= $templete->description?></p>
   
      <br>
       <div style="display: flex; justify-content: center;">
               <div style="width: 100px;"><img src="https://cdn.toesmith.com/toesmith/upload-items/upload_tLZzVVqzTuN.jpg" style="width: 100%;"></div>
               <div style="width: 160px; display: flex; flex-direction: column; justify-content: center; padding: 4px;">
                  <div style="font-size: 13px; font-weight: bold; color: rgb(0, 0, 0); letter-spacing: 0.3px;">6 MONTH WARRANTY</div>
                  <div style="font-size: 14px; color: rgb(112, 112, 112); line-height: 16px;">On any manufacturing <br>defect</div>
               </div>
        </div>
        <div style="display: flex; justify-content: center;">
               <div style="width: 100px;"><img src="https://cdn.toesmith.com/toesmith/upload-items/upload_2IwdCQzdV6-.jpg" style="width: 100%;"></div>
               <div style="width: 160px; display: flex; flex-direction: column; justify-content: center; padding: 4px;">
                  <div style="font-size: 13px; font-weight: bold; color: rgb(0, 0, 0); letter-spacing: 0.3px;">7 days return</div>
                  <div style="font-size: 14px; color: rgb(112, 112, 112); line-height: 16px;">On any manufacturing defect</div>
               </div>
        </div>
    
   </div>
  
</section>
<section class="p-20 section-bg" >
   <br> <br>
   <div class="container">
         <?php if($templete->description!=""){?>
      <h2 class="text-center heading-title d-none d-md-block">ABOUT THIS PRODUCT</h2>
      <pre> <?= $templete->description; ?></pre>
      <?php }?>
      <?php if($templete->description!=""){?>
      <h5 class="text-center heading-title d-block d-md-none">PRODUCT DETAILS</h5>
      <br> <br>
      <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-8">
            <!--<div class="card card-body ">-->
            <table class="table table-bordered " style="background:white;">
               <tbody>
                <!-- description for mobile--->
                
                <?= "<pre>" .$templete->description."</pre>"?>
               </tbody>
            </table>
         </div>
      </div>
      <?php }?>
      <!--</div>-->
   </div>
</section>
<section style="background-color: #f5f5f5;">
<div class="instagram-area">
   <!--<br><br>-->
   <h2 class="text-center heading-title d-none d-md-block" style="margin-top:40px;">WE ARE ON INSTAGRAM</h2>
   <h5 class="text-center heading-title d-block d-md-none">CUSTOMER CLICK</h5>
   <br>
   <p class="d-block d-md-none" style="font-size: 15px; line-height: 20px; text-align: center; margin-bottom: 30px;">Post a photo with your product on <br>Instagram and tag us <span style="color: rgb(65, 111, 165);">@Arteno</span><br>to get featured here.</div>
   <br>
   <div class="instagram-slides owl-carousel owl-theme">
      <div class="instagram-box">
         <img src="<?= base_url()?>assets/img/instagram1.jpg" alt="image">
         <div class="icon">
            <i class="fab fa-instagram"></i>
         </div>
         <a href="https://www.instagram.com/" target="_blank"></a>
      </div>
      <div class="instagram-box">
         <img src="<?= base_url()?>assets/img/instagram2.jpg" alt="image">
         <div class="icon">
            <i class="fab fa-instagram"></i>
         </div>
         <a href="https://www.instagram.com/" target="_blank"></a>
      </div>
      <div class="instagram-box">
         <img src="<?= base_url()?>assets/img/instagram3.jpg" alt="image">
         <div class="icon">
            <i class="fab fa-instagram"></i>
         </div>
         <a href="https://www.instagram.com/" target="_blank"></a>
      </div>
      <div class="instagram-box">
         <img src="<?= base_url()?>assets/img/instagram4.jpg" alt="image">
         <div class="icon">
            <i class="fab fa-instagram"></i>
         </div>
         <a href="https://www.instagram.com/" target="_blank"></a>
      </div>
      <div class="instagram-box">
         <img src="<?= base_url()?>assets/img/instagram5.jpg" alt="image">
         <div class="icon">
            <i class="fab fa-instagram"></i>
         </div>
         <a href="https://www.instagram.com/" target="_blank"></a>
      </div>
      <div class="instagram-box">
         <img src="<?= base_url()?>assets/img/instagram6.jpg" alt="image">
         <div class="icon">
            <i class="fab fa-instagram"></i>
         </div>
         <a href="https://www.instagram.com/" target="_blank"></a>
      </div>
      <div class="instagram-box">
         <img src="<?= base_url()?>assets/img/instagram7.jpg" alt="image">
         <div class="icon">
            <i class="fab fa-instagram"></i>
         </div>
         <a href="https://www.instagram.com/" target="_blank"></a>
      </div>
      <div class="instagram-box">
         <img src="<?= base_url()?>assets/img/instagram8.jpg" alt="image">
         <div class="icon">
            <i class="fab fa-instagram"></i>
         </div>
         <a href="https://www.instagram.com/" target="_blank"></a>
      </div>
      <div class="instagram-box">
         <img src="<?= base_url()?>assets/img/instagram9.jpg" alt="image">
         <div class="icon">
            <i class="fab fa-instagram"></i>
         </div>
         <a href="https://www.instagram.com/" target="_blank"></a>
      </div>
   </div>
</div>
  <div class="insta_actions d-none d-md-block">
<button class="btn btn-primary  text-uppercase text-center follow_insta">FOLLOW ARTENO</button>
</div>

 <div class="insta_actions d-block d-md-none">
<button class="btn btn-primary  text-uppercase text-center follow_insta">LOAD MORE</button>
</div>
</section>
<section class="banner-bg1">
   <div class="container">
      <br> <br>
      <div class="card border-0 shadow-sm">
         <div class="card-body">
            <h2 class="text-center heading-title d-none d-md-block">SEE MORE DESIGN BY THIS DESIGNER</h2>
            <h5 class="text-center heading-title d-block d-md-none">VIEW SIMILAR DESIGNS</h5>
            <br>
            <!--<center>-->
            <!-- <p class=" d-none d-lg-block d-md-block"> <img src="https://cdn.toesmith.com/toesmith/designer-profile/2R7weHHKDkorbZUbAKtmi2_tBhIbL7Et.jpg" class="designer_image"  style="height:45px; width:45px;" alt="...">-->
            <!-- </center>-->
            <div id="products-filter" class="products-collections-listing custum-category-padding category-product-section row " style="margin-bottom:65px;">
             <?php $i=0; foreach($related_product as $r): ?>
               <div class="col-lg-3 col-md-3 col-6 col-sm-6  products-col-item">
                  <div class="single-product-box product-card">
                    <div class="product-image" onMouseOver='show_slider("product_slider<?= $r->id?>","product_image<?= $r->id?>")' onMouseOut="hide_slider('product_slider<?= $r->id?>','product_image<?= $r->id?>')">
                      <a href="<?= base_url()?><?= $r->baseslug?>/<?= $r->id?>" id="product_image11">
                        <img src="<?= $r->image?>" alt="image" id="product_image<?= $r->id?>">
                        </a>
                        
                        <div id="product_slider<?= $r->id?>" style="display:none">
                           <div id="carouselExampleIndicators<?= $r->id?>" class="carousel slide " data-ride="carousel">
                              <ol class="carousel-indicators">
                        
                                 <li data-target="#carouselExampleIndicators<?= $r->id?>" data-slide-to="0" class="active"></li>
                                 <li data-target="#carouselExampleIndicators<?= $r->id?>" data-slide-to="1"></li>
                                 <li data-target="#carouselExampleIndicators<?= $r->id?>" data-slide-to="2"></li>
                              </ol>
                              <div class="carousel-inner">
                               <div class="carousel-item active">
                                    <img class="d-block w-100" src="<?= $r->image?>" alt="Second slide">
                                 </div>
                            <div class="carousel-item active">
                                    <img class="d-block w-100" src="<?= $r->image?>" alt="Second slide">
                                 </div>
                              <div class="carousel-item active">
                                    <img class="d-block w-100" src="<?= $r->image?>" alt="Second slide">
                                 </div>
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                     <span style="position: absolute; top: 0px; left: 0px;">
                     <!--<span class="red_label">Top Selling  <span class="label_arrow"></span></span>-->
                     </span>
                     <span style="position: absolute; top: 0px; right: 0px;">
                    
                    <!--<a class="detail-modal d-lg-none d-md-none d-sm-block d-xs-block" data-toggle="modal" data-target="#productQuickView<?= $i?>"><img src="<?= base_url()?>assets/img/mpdetail.webp" style="height:22px;"></a>-->
                      
                   
                     </span>
                     <p class="designer_area d-none d-lg-block d-md-block">
                         <a href="<?= base_url()?>store/<?= $r->designed_by?>" class="text-white">
                         <?php if($r->user_image ==""){?>
                          <img src="https://cdn.toesmith.com/toesmith/designer-profile/2R7weHHKDkorbZUbAKtmi2_tBhIbL7Et.jpg" class="designer_image" alt="...">
                          <?php }else{?>
                           <img src="<?= $r->user_image ?>" class="designer_image" alt="...">
                          <?php }?>
                        <span class="design_title">Designed By:</span> <span class="three-dot designer-name"><?= $r->user_fullname?></span>
                     </a>
                     </p>
                     </br>
                     <div class="product-content text-left">
                        <h3> <a href="<?= base_url()?><?= $r->baseslug?>/<?= $r->id?>" id="product_image11"><?= $r->name?></a></h3>
                                        <?php $d=  json_decode(t_shirt_price($r->color,$r->pid,$r->id)); ?>
                                    <div class="product-price">
                                    <span class="new-price"><?= $d->price?></span>
                                    <span class="old-price"><?= $d->mrp?></span>
                                    <span class="offer-price"><?=$d->off?></span>
                                    </div>
                        <a href="<?=base_url()?>customizer?product=<?=$r->pid?>&template=<?=$r->id;?>" class="btn btn-primary btn-edit">Edit Design</a>
                        <?php if(isset($_SESSION['user_id'])){ 
                         $wish = check_wish($r->id,$_SESSION['user_id']);
                         if($wish->temp_id == $r->id){?>
                       <span class="btn-wish"><button class="btn-wishlist  wished removewish" data-tempid ="<?= $r->id?>" data-base="<?= $r->pid?>" data-id="<?= $wish->id?>"><i class="far fa-heart"></i></button></span>
                         <?php }else{ ?>
                    <span class="btn-wish"><button class="btn-wishlist addwish" data-tempid ="<?= $r->id?>" data-base="<?= $r->pid?>" data-id="<?= $wish->id?>"><i class="far fa-heart"></i></button></span>  
                         <?php }
                         }else{?>
                         <span class="btn-wish"><button class="btn-wishlist"   data-toggle="modal" data-target="#loginotpmodal"><i class="far fa-heart"></i></button></span>
              
                       <?php }?>
                        </div>
                  </div>
               </div>
               <?php $i++; endforeach;?>
               
               <!--product details modal for mobile view-->
               <?php $i=0; foreach($related_product as $r): ?>
               <div class="modal fade productQuickView" id="productQuickView<?= $i?>" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                     <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="right: 0!important; left: auto;">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                        </button>
                        <div class="row align-items-center">
                           <div class="col-lg-12 col-md-12">
                              <div class="product-content">
                                 <h3> <a href="<?= base_url()?><?= $r->baseslug?>/<?= $r->id?>" id="product_image11"><?= $r->name?></a></h3>
                                  <?php $d=  json_decode(t_shirt_price($r->color,$r->pid,$r->id)); ?>
                                    <div class="product-price">
                                    <span class="new-price"><?= $d->price?></span>
                                    <span class="old-price"><?= $d->mrp?></span>
                                    <span class="offer-price"><?=$d->off?></span>
                                    </div>
                                
                              </div>
                              <div class="">
                                   <div class="item">
                                          <img src="<?= $r->image?>" >
                                       </div>
                                 <div class="products-page-gallery">
                                    <div class="product-page-gallery-main">
                                      
                                    
                                    </div>
                                    <div class="product-page-gallery-preview">
                                       <div class="item">
                                          <img src="<?= $r->image ?>" >
                                       </div>
                                    
                                    </div>
                                 </div>
                              </div>
                               <?php if(isset($_SESSION['user_id'])){ 
                         $wish = check_wish($r->id,$_SESSION['user_id']);
                         if($wish->temp_id == $r->id){?>
                        <center><button class="btn btn-primary mt-2  wished removewish" data-tempid ="<?= $r->id?>" data-base="<?= $r->pid?>" data-id="<?= $wish->id?>"><i class="far fa-heart"></i>Add to Wislist</button></center>
                         <?php }else{ ?>
                    <center><button class="btn btn-primary mt-2 addwish" data-tempid ="<?= $r->id?>" data-base="<?= $r->pid?>" data-id="<?= $wish->id?>"><i class="far fa-heart"></i>Add to Wislist</button></center>  
                         <?php }
                         }else{?>
                         <center><button class="btn btn-primary mt-2"   data-toggle="modal" data-target="#loginotpmodal"><i class="far fa-heart"></i>Add to Wislist</button></center>
              
                       <?php }?>
                           <!--   <center><button type="submit" class="btn btn-primary mt-2"><i class="far fa-heart"></i> Add to Wislist</button></center>-->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
             <?php $i++; endforeach;?>  
               
            </div>
         </div>
      </div>
   </div>
   <!--<br> <br>-->
</section>
<div class="modal fade sizeGuideModal" id="sizeGuideModal" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true"><i class="fas fa-times"></i></span>
         </button>
         <div class="modal-sizeguide">
            <h3>Size Guide</h3>
            <p>This is an approximate conversion table to help you find your size.</p>
            <div class="table-responsive">

               <table class="table table-striped">
                  <tr>
                     <th class="tableHead"></th>
                     <th class="tableHead">UK / IN</th>
                     <th class="tableHead">US</th>
                     <th class="tableHead">Euro</th>
                     <th class="tableHead">Inches</th>
                     <th class="tableHead">Cms</th>
                  </tr>
                  <tr>
                     <td class="rowSpanTD" rowspan="5">WOMEN</td>
                     <td class="tableData">4</td>
                     <td class="tableData">6</td>
                     <td class="tableData">36/37</td>
                     <td class="tableData">8 7/8"</td>
                     <td class="tableData">22.5</td>
                  </tr>
                  <tr>
                     <td class="tableData">5</td>
                     <td class="tableData">7</td>
                     <td class="tableData">37/38</td>
                     <td class="tableData">9 1/4"</td>
                     <td class="tableData">23.5</td>
                  </tr>
                  <tr>
                     <td class="tableData">6</td>
                     <td class="tableData">8</td>
                     <td class="tableData">38/39</td>
                     <td class="tableData">9 1/2"</td>
                     <td class="tableData">24.1</td>
                  </tr>
                  <tr>
                     <td class="tableData">7</td>
                     <td class="tableData">9</td>
                     <td class="tableData">39/40</td>
                     <td class="tableData">9 7/8"</td>
                     <td class="tableData">25.1</td>
                  </tr>
                  <tr>
                     <td class="tableData">8</td>
                     <td class="tableData">10</td>
                     <td class="tableData">40/41</td>
                     <td class="tableData">10 3/16"</td>
                     <td class="tableData">25.9</td>
                  </tr>
                  <tr>
                     <td class="rowSpanTD" rowspan="6">MEN</td>
                     <td class="tableData">6</td>
                     <td class="tableData">6.5</td>
                     <td class="tableData">39/40</td>
                     <td class="tableData">9 1/2"</td>
                     <td class="tableData">24.1</td>
                  </tr>
                  <tr>
                     <td class="tableData">7</td>
                     <td class="tableData">7.5</td>
                     <td class="tableData">41</td>
                     <td class="tableData">9 3/4"</td>
                     <td class="tableData">24.8</td>
                  </tr>
                  <tr>
                     <td class="tableData">8</td>
                     <td class="tableData">8.5</td>
                     <td class="tableData">41/42</td>
                     <td class="tableData">10 1/8"</td>
                     <td class="tableData">25.7</td>
                  </tr>
                  <tr>
                     <td class="tableData">9</td>
                     <td class="tableData">9.5</td>
                     <td class="tableData">42/43</td>
                     <td class="tableData">10 7/16"</td>
                     <td class="tableData">27</td>
                  </tr>
                  <tr>
                     <td class="tableData">10</td>
                     <td class="tableData">10.5</td>
                     <td class="tableData">43/44</td>
                     <td class="tableData">10 3/4"</td>
                     <td class="tableData">27.3</td>
                  </tr>
                  <tr>
                     <td class="tableData">11</td>
                     <td class="tableData">11.5</td>
                     <td class="tableData">44/45</td>
                     <td class="tableData">11 1/8"</td>
                     <td class="tableData">28.3</td>
                  </tr>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="wishlist-compare-btn d-block  d-md-none" style="position: sticky; top:0; left:0; right:0; bottom:0; padding:20px;background:white; z-index:9999999; ">
   <button  type="type"  class="btn btn-light btn-rounded btn-block cartmobile" data-id ="<?= $templete->id?>" style="background:black !important;color:white !important;padding:14px;font-size:18px; width:100% "> ADD TO CART</button>
</div>
<?php $this->load->view('includes/footer');?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
cart_item();
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

        $(document).on("click",".cart",function() {
           
        var id = $(this).data("id");
        var id= $("#temid").val();
        var base_price =$("#tembaseprice").val();
        var price =$("#temprice").val();
        var qty = $("#tempqty").val();
        var size = $("#tempsize").val();
        var name = $("#tempname").val();
        var base_id = $("#tempbase").val();
        var color = $("#tempcolor").val();
         var image = $("#image").val();
        fbq('track', 'Purchase', {currency: "INR", value: price});
    if(base_id==2 && size!="" && qty!="" ){
        $.ajax({
             url:"<?= base_url()?>Front/add_cart/",
              method:"POST",
            data:{
            Id :id,
            base_price:base_price,
            Price:price,
            Qty:qty,
            Size:size,
            Name:name,
            base:base_id,
            color:color,
            image:image
            },
            success:function(r){
            if(r.trim()!='0'){
             cart_item();
                  swal("Add  to cart ",{
                  icon: "success",
                  button: false,
                  timer: 1200,
     });
                }else{
                     swal("Product is out of stock",{
                  icon: "warning",
                  button: false,
                  timer: 1200,
     });
                }
            }
        });
        }else if(base_id != 2){
            $.ajax({
             url:"<?= base_url()?>Front/add_cart/",
              method:"POST",
            data:{
            Id :id,
            base_price:base_price,
            Price:price,
            Qty:qty,
            Size:size,
            Name:name,
            base:base_id,
            color:color,
            image:image
            },
            success:function(r){
             if(r.trim()!='0'){
             cart_item();
                  swal("Add  to cart ",{
                  icon: "success",
                  button: false,
                  timer: 1200,
     });
                }else{
                     swal("Product is out of stock",{
                  icon: "warning",
                  button: false,
                  timer: 1200,
     });
                }
            
            }
        });
        }
        else{
                swal("Please select size and Quantity  ",{
                  icon: "alert",
                   button: false,
                   timer: 1200,
     });
        } 
       
        });   

    /mobile view//
      $(document).on("click",".cartmobile",function() {
        var id = $(this).data("id");
      //  var id= $("#temid").val();
         var base_price =$("#tembaseprice").val();
         var price =$("#temprice").val();
         var qty = $("#tempqtymobile").val();
        var name = $("#tempname").val();
        var size =  $('[name="sizemobile"]:checked').val();
         var base_id = $("#tempbase").val();
        var color = $("#tempcolor").val();
        var image = $("#image").val();
        fbq('track', 'Purchase', {currency: "INR", value: price});
        if(base_id=='2' && size!= undefined ){
        $.ajax({
             url:"<?= base_url()?>Front/add_cart/",
              method:"POST",
            data:{
            Id :id,
            base_price:base_price,
            Price:price,
            Qty:qty,
            Size:size,
            Name:name,
            base:base_id,
            color:color,
            image:image
            },
            success:function(r){
                 if(r.trim()!='0'){
             cart_item();
                  swal("Add  to cart ",{
                  icon: "success",
                  button: false,
                  timer: 1200,
     });
                }else{
                     swal("Product is out of stock",{
                  icon: "warning",
                  button: false,
                  timer: 1200,
     });
                }
            
            }
        });
        }else if(base_id != 2){
            $.ajax({
             url:"<?= base_url()?>Front/add_cart/",
              method:"POST",
            data:{
            Id :id,
            base_price:base_price,
            Price:price,
            Qty:qty,
            Size:size,
            Name:name,
            base:base_id,
            color:color,
            image:image
            },
            success:function(r){
              
                if(r.trim()!='0'){
             cart_item();
                  swal("Add  to cart ",{
                  icon: "success",
                  button: false,
                  timer: 1200,
     });
                }else{
                     swal("Product is out of stock",{
                  icon: "warning",
                  button: false,
                  timer: 1200,
     });
                }
            
            }
        });
        }
        else{
                swal("Please select size and Quantity  ",{
                  icon: "warning",
                  button: false,
                  timer: 1200,
     });
        }
       
        });   
  
$(document).on("click",'.addwish',function(){
        var temp_id = $(this).data("tempid");
        var base_id = $(this).data("base");
           $(this).toggleClass("wished");
           $(this).toggleClass("addwish");
            $(this).toggleClass("removewish");
             $.ajax({
            url:"<?= base_url()?>Front/addwishlist/",
             method:"GET",
            data:{temp_id:temp_id,base_id:base_id},
            success:function(r){
               wishcount();
                      swal("Add to wishlist ",{
                  icon: "success",
                   button: false,
                   timer: 1200,
     });
            }
        });
        
   });
    $(document).on("click",".removewish",function(){
            // var id = $(this).data("id");
             var id = $(this).data("tempid");
             var base_id = $(this).data("base");
             $(this).toggleClass("wished");
             $(this).toggleClass("addwish");
             $(this).toggleClass("removewish");
            $.ajax({
            url:"<?= base_url()?>Front/remove_wish/",
            method:"POST",
            data:{Id:id},
            success:function(r){
               wishcount();
             swal("Remove from wishlist ",{
                  icon: "success",
                   button: false,
                   timer: 1200,
     });
             
             }
        });   
            
        });
        
</script>
