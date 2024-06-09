<?php
@session_start();
	global $lumise;
// 	require_once('includes/main.php');
	if($lumise->is_app()) :
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title><?php echo $lumise->cfg->settings['title']; ?></title>
		<!--<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport" />-->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=0"/>
		<script src="https://kit.fontawesome.com/3c4d0cb5a7.js" crossorigin="anonymous"></script>
		<link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" media="only screen and (min-width: 1024px)" href="<?php echo $lumise->apply_filters('editor/app.css', $lumise->cfg->assets_url.'assets/css/app.css?version='.LUMISE); ?>">
        <link rel="stylesheet" media="only screen and (min-width: 1024px)" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet"  href="<?php echo $lumise->apply_filters('editor/custom.css', $lumise->cfg->assets_url.'assets/css/custom.css?version='.LUMISE); ?>">
        <link rel="stylesheet" media="only screen and (max-width: 1024px)" href="<?php echo $lumise->apply_filters('editor/app_mobile.css', $lumise->cfg->assets_url.'assets/css/app_mobile.css?version='.LUMISE); ?>">
        <!--<link rel="stylesheet" href="<?php //echo $lumise->apply_filters('editor/max600.css.css', $lumise->cfg->assets_url.'assets/css/max600.css.css?version='.LUMISE); ?>">-->
		<link rel="stylesheet" media="only screen and (max-width: 1024px)" href="<?php echo $lumise->apply_filters('editor/responsive.css', $lumise->cfg->assets_url.'assets/css/responsive.css?version='.LUMISE); ?>">
		<link rel="icon" type="image/png" href="<?= base_url()?>assets/images/shareimagefavicon.png">
   <style>
   .header-bg-black .main-nav .navbar .navbar-nav .nav-item:hover {
        border-top: 4px solid #dbb258!important;
        margin-top: -4px;
        transition: none!important;
        transform: none!important;
    }
    .header-bg-black .main-nav .navbar .navbar-nav .nav-item:hover a {
        color: #dbb258!important;
        transition: none!important;
        transform: none!important;
    }
    .header-bg-black .main-nav .navbar .navbar-nav .header-nav-active {
        border-top: 4px solid #dbb258!important;
        margin-top: -4px;
        transition: none!important;
        transform: none!important;
    }
    .header-bg-black .main-nav .navbar .navbar-nav .header-nav-active a {
        color: #dbb258!important;
        transition: none!important;
        transform: none!important;
    }
    .header-bg-black .main-nav .navbar .navbar-nav .nav-item a {
        font-weight: 600;
        font-family: ProximaNova, sans-serif !important;
    }
   [data-func="show-categories"] {
     display: block!important; 
}
.checkout-button,#designer-manualcart,#designer-cart-action{
    border-radius: 30px!important;
}
   @media only screen and (max-width: 600px) {
       #lumise-color-picker-sld{
       display:none!important;
   }
   .arteno_cart_action li:not(:last-child){
       margin-top:5px;
       margin-left:2px;
   }
   .designer_form_group select,#quantity_details{
       border-radius: 30px!important;
   }
   #lumise-color-picker-btn,#lumise-color-picker-sldO,#lumise-color-picker-sldM,#lumise-color-picker-sldBO{
       display:none!important;
   }
   #lumise-color-picker-boxB{
        position: absolute!important;
        left: 77px!important;
        top: 259px!important;
   }
   #lumise-color-picker-box{
      height: 135px!important;
      width: 257px!important;
       
   }
   #lumise-color-picker-header{
       width: 260px!important;
      
   }   
   }
   @media only screen and (min-width: 600px) {
     #lumise-color-picker-sld{
       display:none!important;
   }
   #lumise-color-picker-btn,#lumise-color-picker-sldO,#lumise-color-picker-sldM,#lumise-color-picker-sldBO{
       display:none!important;
   }
  #lumise-color-picker-boxB{
       left: 380.5px!important;
       top: 215px!important;
   }
   #lumise-color-picker-box{
       height: 135px!important;
       width: 254px!important;
       
   }
   #lumise-color-picker-header{
       width: 260px!important;
      
   } 
   }
   
   /*#fill-ops-sub{*/
   /*    display:none!important;*/
   /*}*/
   /*#fill-ops-sub{*/
   /*    display:block!important;*/
   /*}*/
   .show_hide{
       top:20px!important;
   }
   ul{
       list-style-type: none!important;
   }
   .font_share {
    border-radius: 10px;
    width: 100%;
}
/*** Styles added to fix the issue with zoom in on iphone ***/
/* iPhone < 5: */
@media screen and (device-aspect-ratio: 2/3) {
    select, textarea, input[type="text"], input[type="password"],
    input[type="datetime"], input[type="datetime-local"],
    input[type="date"], input[type="month"], input[type="time"],
    input[type="week"], input[type="number"], input[type="email"],
    input[type="url"
    ]{ font-size: 16px;
     text-align: center!important;
  text-align-last: center!important;
        
    }
}

/* iPhone 5, 5C, 5S, iPod Touch 5g */
@media screen and (device-aspect-ratio: 40/71) {
    select, textarea, input[type="text"], input[type="password"],
    input[type="datetime"], input[type="datetime-local"],
    input[type="date"], input[type="month"], input[type="time"],
    input[type="week"], input[type="number"], input[type="email"],
    input[type="url"]{ font-size: 16px;
     text-align: center!important;
  text-align-last: center!important;
        
    }
}

/* iPhone 6, iPhone 6s, iPhone 7 portrait/landscape */
@media screen and (device-aspect-ratio: 375/667) {
    select, textarea, input[type="text"], input[type="password"],
    input[type="datetime"], input[type="datetime-local"],
    input[type="date"], input[type="month"], input[type="time"],
    input[type="week"], input[type="number"], input[type="email"],
    input[type="url"]{ font-size: 16px;
     text-align: center!important;
  text-align-last: center!important;
        
    }
}

/* iPhone 6 Plus, iPhone 6s Plus, iPhone 7 Plus portrait/landscape */
@media screen and (device-aspect-ratio: 9/16) {
    select, textarea, input[type="text"], input[type="password"],
    input[type="datetime"], input[type="datetime-local"],
    input[type="date"], input[type="month"], input[type="time"],
    input[type="week"], input[type="number"], input[type="email"],
    input[type="url"]{ font-size: 16px;
     text-align: center!important;
  text-align-last: center!important;
        
    }
}
select, textarea, input[type="text"], input[type="password"],
    input[type="datetime"], input[type="datetime-local"],
    input[type="date"], input[type="month"], input[type="time"],
    input[type="week"], input[type="number"], input[type="email"],
    input[type="url"]{ 
        font-size: 16px;
     text-align: center!important;
  text-align-last: center!important;
        
    }
   select {
  text-align: center!important;
  text-align-last: center!important;
  /* webkit*/
}
option {
  text-align: left!important;
  /* reset to left*/
}
   .moile-menu-link{
       text-align:left!important;
   }
  .link_icon{
     padding: 10px 5px 10px 5px;
    font-size: 20px;
  }
   .share_title{
       font-weight:600;
   }
   .modal-backdrop.show {
            opacity: 0!important;
        }
   input[type=radio]:checked + label li{
  background:#dbb258!important;
  color:#111!important;
}
   .size_attribute{
       visibility: hidden;
       height: 0px;
        width: 0px;
   }
   .image_area_share{
       height:200px;
       /*background:#ebeced!important;*/
   }
   </style>
<?php 
	if (is_file($lumise->cfg->upload_path.'user_data'.DS.'custom.css')) { 
?> <link rel="stylesheet" href="<?php echo $lumise->cfg->upload_url; ?>user_data/custom.css?version=<?php echo $lumise->cfg->settings['last_update']; ?>"><?php 
} 
$lumise->do_action('editor-header'); 
?>
<style>
 :root {
    --input-padding-x: 1.5rem;
    --input-padding-y: .75rem
}

.section-title h2, h4, h1, h3, h6 ,span,p ,body{
    font-family:Montserrat, sans-serif !important;
}
.card-signin {
    border: 0!important;
    border-radius: 0rem!important;
}

.card-signin .card-title {
    margin-bottom: 2rem!important;
    font-weight: 300!important;
    font-size: 1.5rem!important;
}

.card-signin .card-body {
    padding: .5rem !important;
}

.form-signin {
    width: 100%!important;
}

.form-signin .btn {
    font-size: 91%!important;
    border-radius: 0rem!important;
    letter-spacing: .1rem!important;
    font-weight: bold!important;
    padding: 1rem!important;
    transition: all 0.2s!important;
}

.form-label-group {
    position: relative!important;
    margin-bottom: 1rem!important;
}

.form-label-group input {
    height: auto!important;
}

.form-label-group>input,
.form-label-group>label {
    padding: var(--input-padding-y) var(--input-padding-x)
}

.form-label-group>label {
    position: absolute!important;
    top: 0!important;
    left: 0!important;
    display: block!important;
    width: 100%!important;
    margin-bottom: 0!important;
    line-height: 1.5!important;
    color: #495057!important;
    border: 1px solid transparent!important;
    border-radius: .25rem!important;
    transition: all .1s ease-in-out!important
    font-size:20px!important;
}

.form-control{
    background:white !important;
    border: 2px solid #eee!important;
}

.form-control:focus {
    box-shadow: 10px 0px 0px 0px #ffffff !important
}

.btn-google {
    color: white!important;
    background-color: #ea4335!important;
}

.btn-facebook {
    color: white!important;
    background-color: #3b5998!important;
}

.border{
    border:1px solid black!important;
}
label {
    display: inline-block!important;
    margin-bottom: .5rem!important;
    font-weight: 600!important;
}
.checkout-button{
      border-radius: 0px !important;
    color: #b78b2a !important;
    font-size: 17px!important;
    font-weight: 700!important;
    background-color: #111 !important;
}
.form-control{
    background:white !important;
    border: 2px solid #bfbebe!important;
    border-radius:5px!important;
}
@media only screen and (min-width: 900px) {
 .padding-left{
        padding-left:11.5rem!important;
    }
}

@media only screen and (max-width: 600px) {
    .padding-left{
        padding-left:4.5rem!important;
    }
    
    .form-signin .btn {
        font-size:86% !important;
    }
}
</style>
<style>
.footer-area{
    display:none!important;
}
@media (min-width: 576px){
.modal-artenoheader {
    max-width: 400px!important;
    margin: 1.75rem auto;
}
}

body{
    background:#ebeced!important;
}
::-webkit-scrollbar {
  width: 5px!important;
}
</style>
<style>
@media only screen and (min-width: 768px) {
.loader
{
  height: 5px;
  max-width: 500px; 
  border: 0px solid #dbb258;
  border-radius: 20px;
  font-weight: 300;
  position: absolute; 
  left: 0; 
  right: 0;
  margin : auto; 
}
.load-content-area{
    margin-top:15%;
}
}
@media only screen and (max-width: 768px) {
.loader
{
  height: 5px;
  max-width: 500px; 
  border: 0px solid #dbb258;
  border-radius: 20px;
  font-weight: 300;
  position: absolute; 
  left: 20px; 
  right: 20px;
  margin : auto; 
}
.load-content-area{
    margin-top:50%;
}
}
    .preloader-wrap {
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0; 
  bottom: 0;
  background: rgba(0,0,0,1);
  z-index :99999999; 
}

.percentage {
  z-index: 100;
  border: 1px solid #ccc;
  text-align:center;
  color: #fff;
  line-height: 20px;
  font-size : 18px;
}

.percentage{
  height: 30px;
  max-width: 500px; 
  border:none!important;
  border-radius: 20px;
  font-weight: 300;
  color:#dbb258;
  margin : auto; 
}
.loader:after,
.percentage:after {
  content: "";
  display: block;
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
}

.trackbar {
  width: 100%;
  height: 100%;
  border-radius: 20px;
  color: #fff;
  text-align: center;
  line-height: 30px;
  overflow: hidden;
  position: relative;
  opacity: 0.99;
}

.loadbar {
  width: 0%;
  height: 100%;
  /*background: repeating-linear-gradient(*/
  /*45deg, */
  /*  #008737, */
  /*  #008737 10px, */
  /*  #69AF23 10px,*/
  /*  #69AF23 20px*/
  /*); */
  /* Stripes Background Gradient */
   background:#dbb258;
  box-shadow: 0px 0px 14px 1px #dbb258; 
  position: absolute;
  top: 0;
  left: 0;
  animation: flicker 5s infinite;
  overflow: hidden;
}

.glow {
  width: 0%;
  height: 0%;
  border-radius: 20px;
  box-shadow: 0px 0px 60px 10px #dbb258;
  position: absolute;
  bottom: -5px;
  animation: animation 5s infinite;
}

@keyframes animation {
  10% {
    opacity: 0.9;
  }
  30% {
    opacity: 0.86;
  }
  60% {
    opacity: 0.8;
  }
  80% {
    opacity: 0.75;
  }
}

</style>
<!--loader with percentage css-->
<style>
/*#overlay{*/
/*  position:relative;*/
/*  z-index:99999;*/
/*  top:0;*/
/*  left:0;*/
/*  bottom:0;*/
/*  right:0;*/
/*  background:rgba(0,0,0,0.9);*/
/*  transition: 1s 0.4s;*/
/*}*/
/*#progress{*/
/*  height:4px;*/
/*  background:#dbb258;*/
/*  position:absolute;*/
/*  width:0;*/
/*  top:50%;*/
/*}*/
/*#progstat{*/
/*  font-size:0.7em;*/
/*  letter-spacing: 3px;*/
/*  position:absolute;*/
/*  top:50%;*/
/*  margin-top:-40px;*/
/*  width:100%;*/
/*  text-align:center;*/
/*  color:#fff;*/
/*}*/
.loader-content{
    margin-top: 3%;
}
.loader-content h3{
    color:white;
}
.loader-image{
    height: auto;
    width: auto;
    margin: auto;  
    margin-bottom:20px;
}
div#designer-top-tools{
    10px 0px 10px 0px!important
}

/* Font size */
t, .buy_now, .designer-cart-field-label {
    font-weight: 600 !important;
}
</style>
</head>
<body>
    <div class="preloader-wrap">
        <div class="load-content-area">
            <center>
                <img src="<?= base_url()?>assets/images/mainloader.gif" class="loader-image">
                <div class="percentage" id="precent"></div>
            <div class="loader">
                <div class="trackbar">
                  <div class="loadbar"></div>
                </div>
                <div class="glow"></div>
            </div>
            </center>
            
        </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    var width = 100,
    perfData = window.performance.timing, // The PerformanceTiming interface represents timing-related performance information for the given page.
    EstimatedTime = (perfData.responseEnd - perfData.navigationStart), //EstimatedTime = (perfData.loadEventEnd - perfData.navigationStart),
    time = parseInt((EstimatedTime/1000)%60)*100*40; //Static added.
    // time = parseInt((EstimatedTime/1000)%60)*100*20; //Static added.
    
    // Percentage Increment Animation
    var PercentageID = $("#precent"),
        start = 0,
        end = 100,
        durataion = time;
        animateValue(PercentageID, start, end, durataion);

        // // Loadbar Animation
        // $(".loadbar").animate({
        //   width: width + "%"
        // }, time);
        
        // // Loadbar Glow Animation
        // $(".glow").animate({
        //   width: width + "%"
        // }, time);

    function animateValue(id, start, end, duration) {
      
      var range = end - start,
          current = start,
          increment = end > start? 1 : -1,
          stepTime = Math.abs(Math.floor(duration / range)),
          obj = $(id);
        
      var timer = setInterval(function() {
        current += increment;
        $(".loadbar").css("width", current + "%");
        $(".glow").css("width", current + "%");
        $(obj).text(current + "%");
          //obj.innerHTML = current;
        if (current == end) {
            clearInterval(timer);
            // Fading Out Loadbar on Finised
            setTimeout(function(){
              $('.preloader-wrap').fadeOut(300);
            });
        }
      }, stepTime);
    }
</script>
<style>
#loader_publish_design{
    display:none;
    z-index: 9999999999999!important;
    position: absolute;
    left: 0px;
    top: 9px!important;
}
.hide{
    display:none!important;
}
.designer_size{
    display: flex;
    padding: 0px;
    list-style-type: none;
    margin-left: -6%;
    margin-bottom: 0px;
}
.designer_option{
    padding: 5px 10px 5px 10px;
    border: 1px solid #dbb258;
    border-radius: 20px;
    margin-left:10px;
    color:#dbb258;
}

.copy{
    border-top-left-radius: 0px!important;
    border-top-right-radius: 10px!important;
    border-bottom-left-radius: 0px!important;
    border-bottom-right-radius: 10px!important;
}
</style>
<?php
if($this->session->userdata('designer_id')){
?>
<style>
ul{
       list-style-type: none!important;
   }
[data-id="size"] {
    display: none!important;
}
[data-id="quantity"] {
    display:none!important;
}
.spinner-wrapper{
    display:none!important;
}
@media only screen and (max-width: 600px){
.buy_icon {
    right: 18px!important;
}
.arteno_cart_action{
     padding:70px!important;
}
.product_information {
    top: 35%;
}
}
@media only screen and (min-width: 600px){
.arteno_cart_action{
    padding:80px!important;
}
.product_information {
    top: 175px;
}
}
@media only screen and (min-width: 1024px){
    div#designer-main {
        /*top: 150px!important;*/
        top: 100px !important;
    }
}
.product_information {
    display: none;
}
</style>
<?php } ?>
	<div class="wrapper">
		<div id="designer" data-site="https://anshuwap.com" data-processing="true" data-msg="">
		    <img src="<?=base_url('theme/core/assets/images/2.gif')?>" id="loader_publish" />
		    <img src="<?=base_url('theme/core/assets/images/2.gif')?>" id="loader_publish_design" />
    		<div id="arteno_navbar" style="display:none;">
    		    <?php $lumise->display('nav'); ?>
    		</div>
    	    <div id="designer-navigations" data-navigation="" style="">
    	        <?php
    	         $page="editor";
    	        include(__DIR__.'../../arteno/includes/header.php')?>
    		</div>
    	    <div id="designer-workspace">
    			    
        	    <div id="designer-main">
        			<div id="designer-no-product">
        				<?php
        					if (!isset($_GET['product'])) {
        						redirect(base_url('customize'));
        					}else if (isset($_GET['product']) && $lumise->cfg->product === null) {
        				// 		redirect(base_url('customize'));
        						echo '<p>Sorry, the product you selected is not available!</p>';
        					}
        				?>
        				<!--<button class="designer-btn" id="designer-select-product">-->
        				<!--	<i class="fa fa-crosshairs"></i> <?php echo $lumise->lang('Select product'); ?>-->
        				<!--</button>-->
        			</div>
        		</div>
        		<div id="designer-top-tools" data-navigation="" data-view="standard">
        			<?php $lumise->display('tool'); ?>
        		</div>

				<?php $lumise->display('left'); ?>
				<div id="nav-bottom-left">
					<div data-nav="colors" id="designer-count-colors" title="<?php echo $lumise->lang('Count colors'); ?>">
						<i>0+</i>
					</div>
				</div>
				<div id="designer-zoom-wrp">
					<i class="fa fa-minus" data-zoom="out"></i>
					<span><?php echo $lumise->lang('Scroll to zoom'); ?></span>
					<inp data-range="helper" data-value="100%">
						<input type="range" id="designer-zoom" data-value="100%" min="100" max="250" value="100" />
					</inp>
					<i class="fa fa-plus" data-zoom="in"></i>
				</div>
				<div id="designer-zoom-thumbn" style="display:none;">
					<span></span>
				</div>
				<div id="designer-stage-nav">
					<ul></ul>
				</div>
				<div id="designer-notices"></div>
				<span class="prev_color_mobile d-block d-xs-block d-sm-none d-md-none d-lg-none d-xl-none" onclick="Slider_color_prev()"><i class="fa fa-chevron-circle-left"></i></span>
		        <span class="next_color_mobile d-block d-xs-block d-sm-none d-md-none d-lg-none d-xl-none" onclick="Slider_color_next()"><i class="fa fa-chevron-circle-right"></i></span>
				<span class="prev_color d-none d-xs-none d-sm-block d-md-block d-lg-block d-xl-block" onclick="upSlider()" style="margin-top: -9px"><i class="fa fa-chevron-circle-up"></i></span>
		        <span class="next_color d-none d-xs-none d-sm-block d-md-block d-lg-block d-xl-block" onclick="downSlider()"><i class="fa fa-chevron-circle-down"></i></span>
				<div id="designer-cart-wrp" data-view="attributes" class="product_custom_color">
		               
						<div class="designer-cart-options">
							<div class="designer-cart-attributes" id="designer-cart-attributes-color">
								
							</div>
						</div>
					</div>
				<!--<span class="product_attributes" data-toggle="modal" data-target="#attributes_model">Choose Attributes  <i class="fa fa-bars"></i></span>-->
				<span class="product_information" data-toggle="modal" data-target="#info_model"><i class="fa fa-info-circle"></i></span>
				<div class="arteno_power_ation">
                <ul class="arteno_cart_action">
                    
                       <?php 
				if(!$this->session->userdata('designer_id')){
				if(isset($_SESSION['user_id'])){
				if(isset($_GET['wishlist'])){
				    $product=$_GET['product'];
				    $wish_id=$_GET['wishlist'];
				    $wish_value=is_wishlist($wish_id);
				    if($wish_value == 1){ ?>
				    <li class="wishlist_icon">
				        <i class="far fa-heart icon_height_wished"  onclick="remove_wishlist(<?=$wish_id;?>,<?=$product?>)"></i> 
				        </li>
				        <!--<span class="wishlist-button" style="background:#c4141b;" onclick="remove_wishlist(<?//=$wish_id;?>,<?//=$product?>)"><i class="fa fa-heart" class="icon_height" id="remove_wishlist" /></i> </span> -->
				   <?php } else {?>
				   <li class="wishlist_icon" id="wishlist-button">
				        <span><i class="far fa-heart icon_height"></i></span>  
				    </li>
				    <?php }?>
			    <?php	} else { ?>
			    <li class="wishlist_icon" id="wishlist-button">
				        <span><i class="far fa-heart icon_height"></i></span>
				</li>
			    <?php  } } else {?>
			    <li class="wishlist_icon">
				    <span  data-toggle="modal" data-target="#loginotpmodal"><i class="far fa-heart icon_height" ></i></span>
				</li>
		    	<?php }?> 
                    <li class="share_icon">
                      <span id="share-button" data-toggle="modal" data-target="#share_modal"><img src="<?=base_url()?>assets/images/icons/share.png" class="icon_height" /></span>  
                    </li>
                    <li class="buy_icon" style="z-index:100;">
                        <button class="btn btn-primary buy_now checkout-button" id="designer-cart-action" data-action="update-cart" style="text-transform:capitalize;color:#dbb258;!important"> Buy <span class="product-currency">Rs. <span class="designer-price designer-product-price counter_price" data-from="0" data-to="0" data-time="1000"> 0.00</span></span></button>
                    </li>
                    <?php } else {?>
                    <li class="buy_icon" id="publish_action" style="z-index:100;">
                        <button class="btn btn-primary buy_now checkout-button" id="designer-publish-design" style="text-transform:capitalize;color:#dbb258;!important"> Publish </button>
			            <input type="hidden"  value="" id="product_base">
                    </li>
                    <li class="buy_icon" id="publish_loader" style="z-index:100;display:none;">
                        <button class="btn btn-primary buy_now checkout-button"  style="text-transform:capitalize;color:#dbb258;!important;"><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span></button>
                    </li>
                    <?php }?>
                </ul>
			</div>
				
			</div>
		</div>
	</div>
	
	<script>
		function designer(designer) {
			designer.data = {
				version: "<?php echo LUMISE; ?>",
				theme_color: "<?php echo explode('@', explode(':', $lumise->cfg->settings['colors'])[0])[0]; ?>",
				stages : {},
				currency : "<?php echo $lumise->cfg->settings['currency']; ?>",
				switch_lang : <?php echo $lumise->cfg->settings['allow_select_lang']; ?>,
				thousand_separator : "<?php echo isset($lumise->cfg->settings['thousand_separator'])? $lumise->cfg->settings['thousand_separator'] : ','; ?>",
				decimal_separator : "<?php echo isset($lumise->cfg->settings['decimal_separator'])? $lumise->cfg->settings['decimal_separator'] : '.'; ?>",
				number_decimals : "<?php echo isset($lumise->cfg->settings['number_decimals'])? $lumise->cfg->settings['number_decimals'] : 2; ?>",
				currency_position : "<?php echo $lumise->cfg->settings['currency_position']; ?>",
				min_upload: <?php echo isset($lumise->cfg->settings['min_upload'])? (int)$lumise->cfg->settings['min_upload'] : 0; ?>,
				max_upload: <?php echo isset($lumise->cfg->settings['max_upload'])? (int)$lumise->cfg->settings['max_upload'] : 0; ?>,
				min_dimensions: <?php echo isset($lumise->cfg->settings['min_dimensions']) ? json_encode(explode('x', $lumise->cfg->settings['min_dimensions'])) : ''; ?>,
				max_dimensions: <?php echo isset($lumise->cfg->settings['max_dimensions']) ? json_encode(explode('x', $lumise->cfg->settings['max_dimensions'])) : ''; ?>,
				min_ppi: '<?php echo isset($lumise->cfg->settings['min_ppi']) ? $lumise->cfg->settings['min_ppi'] : ''; ?>',
				max_ppi: '<?php echo isset($lumise->cfg->settings['max_ppi']) ? $lumise->cfg->settings['max_ppi'] : ''; ?>',
                printings : [],
				url : "<?php echo $lumise->cfg->url; ?>",
				tool_url : "<?php echo $lumise->cfg->tool_url; ?>",
				upload_url : "<?php echo $lumise->cfg->upload_url; ?>",
				checkout_url : "<?php echo $lumise->cfg->checkout_url; ?>",
				ajax : "<?php echo $lumise->cfg->ajax_url; ?>",
				assets : "<?php echo $lumise->cfg->assets_url; ?>",
				jquery : "<?php echo $lumise->cfg->load_jquery; ?>",
				nonce : "<?php echo lumise_secure::create_nonce('LUMISE-SECURITY'); ?>",
				access_core : "<?php echo is_array($lumise->cfg->access_core) ? implode(',', $lumise->cfg->access_core) : $lumise->cfg->access_core; ?>",
				editing: localStorage.getItem('LUMISE-EDITING'),
				design : "<?php echo $lumise->esc_get('design_print'); ?>",
				product : "<?php echo $lumise->esc_get('product'); ?>",
				default_fonts: <?php echo !empty($lumise->cfg->default_fonts) ? stripslashes($lumise->cfg->default_fonts) : '{}'; ?>,
				fonts: <?php echo json_encode($lumise->get_fonts()); ?>,
				js_lang : <?php echo json_encode($lumise->cfg->js_lang); ?>,
				rtl : '<?php echo $lumise->cfg->settings['rtl']; ?>',
				prefix_file : '<?php echo urlencode($lumise->cfg->settings['prefix_file']); ?>',
				text_direction : '<?php echo $lumise->cfg->settings['text_direction']; ?>',
				conditions : '<?php echo (isset($lumise->cfg->settings['conditions']) && !empty($lumise->cfg->settings['conditions'])) ? $lumise->lib->enjson($lumise->cfg->settings['conditions']) : ''; ?>',
				size_default : <?php echo json_encode($lumise->cfg->size_default); ?>,
				print_types : <?php 
					echo json_encode($lumise->lib->get_print_types());
					echo $lumise->lib->product_cfg();
				?>
			};
			
			try {
				designer.attributes_cfg = <?php echo json_encode($lumise->cfg->product_attributes); ?>;
			} catch (ex) {
				designer.attributes_cfg = {};
				alert("<?php echo $lumise->lang('Error: configure the attributes of product'); ?>\n\n"+ex.message);
			}
			
			var real_uri = window.location.href.split('?'),
				reg_uri = designer.data.tool_url.split('?');
			if (real_uri[0] != reg_uri[0]) {
				if (real_uri[1] !== undefined)
					window.location = reg_uri[0]+'?'+real_uri[1];
				else window.location = reg_uri[0];
				return false;
			} else {
				<?php $lumise->do_action('js_init'); ?>
				return true;
			}
			
		};
	</script>
	    <?php if ($lumise->cfg->load_jquery){ ?>
    	<!--<script src="<?php echo $lumise->apply_filters('editor/jquery.min.js', $lumise->cfg->assets_url.'assets/js/jquery.min.js?version='.LUMISE); ?>"></script>-->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<?php } ?>
	<script src="<?php echo $lumise->apply_filters('editor/vendors.js', $lumise->cfg->assets_url.'assets/js/vendors.js?version='.LUMISE); ?>"></script>
	<script src="<?php echo $lumise->apply_filters('editor/app.js', $lumise->cfg->assets_url.'assets/js/app_designer.js?version='.LUMISE); ?>"></script>
	<?php 
		
		$lumise->do_action('editor-footer');
		
		if (!empty($lumise->cfg->settings['custom_js'])) {
			$custom_js = str_replace(
				array('<script', '</script>'),
				array('&lt;script', '&lt;/script&gt;'),
				$lumise->cfg->settings['custom_js']
			);
			echo '<script type="text/javascript">'.stripslashes($custom_js).'</script>';
		}
		
	?>
    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- Modal -->
                        <div class="modal fade" id="share_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="overflow-y: hidden!important;">
  <div class="modal-dialog modal-dialog custom_modal_share" role="document">
    <div class="modal-content" style="background:#fff;border-radius:10px;padding:15px;">
      <div class="modal-header" style="border-bottom:none!important;padding:0px;">
        <button type="button" class="close modal_remove_button" data-dismiss="modal" aria-label="Close" style="padding: 5px 10px 5px 10px;">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="padding:0px;">
          <center> <h5 class="share_title text-center">Share Your Design</h5></center>
        <div class="share_data text-center" style="padding-top: 15px;">
            <div class="image_area_share">
                <!--<span class="site_title">Arteno Creation</span><span class="site_url">www.arteno.in</span>-->
                <img src="<?=base_url('theme/core/assets/images/2.gif')?>" height="100%"  alt="..." class="img_share" id="share_img"/>
                <!--<img src="<?=base_url('theme/core/assets/images/2.gif')?>" height="100%" alt="..." class="img_share1" id="share_img1"/>-->
            </div>
        </div>
        <div class="row" id="share_link_section" style="margin-top:10px; display:none;">
             <div class="col-md-12 col-xs-12 col-12">
                <ul class="social-icon-list">
                    <li class="social_icon bg-insta"><a href="" target="_blank" class="text-white" id="instagram_share_url"><i class="fab fa-instagram"></i></a></li>
                     <li class="social_icon bg-fb" style="padding: 10px 19px 10px 19px!important;"><a href="" target="_blank" class="text-white" id="fb_share_url"><i class="fab fa-facebook-f"></i></a></li>
                     <li class="social_icon bg-wp"><a href="" target="_blank" class="text-white" id="whatsapp_share_url"><i class="fab fa-whatsapp"></i></a></li>
                     <li class="social_icon bg-tw"><a href="" target="_blank" class="text-white" id="twitter_share_url"><i class="fab fa-twitter"></i></a></li>
                     
                </ul>
             </div>
             <div class="col-md-5 col-xs-5 col-5"><hr></div>
             <div class="col-md-2 col-xs-2 col-2" style="padding: 10px;">OR</div>
             <div class="col-md-5 col-xs-5 col-5"><hr></div>
             <div class="col-md-12 col-xs-12 col-12"><label class="text-center" style="text-transform:uppercase;">Copy Link</label></div>
              <div class="col-md-1 col-xs-1 col-1 text-center" style="padding:0;"><i class="fa fa-link link_icon"></i></div>
            <div class="col-md-8 col-xs-8 col-8" style="padding: 0px;">
                <input type="text" value="" class="form-control"  id="put_share_value" style="border-radius: 0px!important;background:#ebeced!important;border:2px solid #ebeced!important;border-top-left-radius: 10px!important;border-top-right-radius: 0px!important;border-bottom-left-radius: 10px!important;border-bottom-right-radius: 0px!important;" readonly/>
            </div>
            <div class="col-md-3 col-xs-3 col-3 text-center" style="padding-left: 0px;" onclick="copy_in_clipboard()">
                <div class="copy" style="background:#ddd;padding: 10px 10px 12px 10px;">
                <span style="color:#111;font-size:16px;font-weight:600;">Copy</span>
                </div>
            </div>
            
        </div>
      </div>
    </div>
  </div>
</div>
                        <div class="modal fade" id="info_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="overflow-y: hidden!important;">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content" style="background:#fff;border-radius:20px;">
                              <div class="modal-header" style="border-bottom:none!important;">
                                  <h5>Product Description</h5>
                                  <button type="button" class="close modal_remove_button" data-dismiss="modal" aria-label="Close" style="border: 1px solid #eee;
                            border-radius: 50%;
                            padding: 5px 10px 5px 10px;">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body" id="product_details" style="max-height:400px;overflow-y:scroll;">
                                            
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal fade" id="attributes_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="overflow-y: hidden!important;">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content" style="background:#fff;border-radius:20px;">
                              <div class="modal-header" style="border-bottom:none!important;">
                                  <button type="button" class="close modal_remove_button" data-dismiss="modal" aria-label="Close" style="border: 1px solid #eee;
                            border-radius: 50%;
                            padding: 5px 10px 5px 10px;">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body" id="product_size_qty" style="min-height:150px;">
                                    <div id="designer-cart-wrp" data-view="attributes" class="smooth">
                        						<div class="designer-cart-options">
                        							<div class="designer-cart-attributes" id="designer-cart-attributes-qty"></div>
                        						</div>
                        					</div>        
                              </div>
                            </div>
                          </div>
                        </div>
                     <div class="modal fade" id="loginotpmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div style="margin:auto !important">
                            <center><img src="<?= base_url()?>assets/logo/logo-min-3.png" alt="logo" style="height:35px; text-align:center; /* margin-bottom:12px */"></center>
                        </div>
                        <button type="button" data-dismiss="modal" class="modal_remove_button" aria-label="Close"><span aria-hidden="true" style="font-size: 22px">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        
                        <div class="card card-signin" style="background:white!important">
                            <div class="card-body">
                                
                                <form class="form-signin" method="post" id="get_login">
    <!--                                <a class="btn btn-outline-dark" href="/users/googleauth" role="button" style="text-transform:none">-->
    <!--  <img width="20px" style="margin-bottom:3px; margin-right:5px" alt="Google sign-in" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />-->
    <!--  Login with Google-->
    <!--</a>-->
    <!--<i class="fab fa-google mr-2"></i> -->
                                    
                                    <button class="btn btn-block text-uppercase border mt-2" type="button"  id="googleLoginLoader" style=" border-radius:5px;padding: 15px; "> <img width="15px" style="margin-bottom:0px; margin-right:5px;" alt="Google sign-in" src="<?= base_url()?>assets/images/googlelogo.png" />Continue With Google</button>
                                    <!--<button class="btn btn-lg btn-facebook btn-block text-uppercase" onclick="fbLogin()"  type="button" style="color:white !important;border-radius:5px;" id="fbLoginLoader"><i class="fab fa-facebook-f mr-2"></i> Continue with Facebook</button>-->
                                    <a href="<?=base_url('user_checkout')?>"><button class="btn btn-block text-uppercase border mt-2" type="button"  style="border-radius:5px;"> <i class="fas fa-user  mr-2"></i> Continue As Guest User</button></a>
                                    <button class="btn btn-block text-uppercase border mt-2 login-mobile" type="button" onclick="mobile_login()" style="border-radius:5px;"> <i class="fas fa-mobile-alt  mr-2"></i> Continue With phone number</button>
                                    
                                    <hr class="my-4"> 
                                    <div class="form-group"> 
                                        <label for="email">Email address</label>
                                        <input type="email" id="email" class="form-control" placeholder="Email address" required autofocus> 
                                    </div>
                                    <div class="form-group"> 
                                        <label for="password">Password</label>
                                        <input type="password" id="password" class="form-control" placeholder="Password" required> 
                                    </div>
                                    <div style="display:flex !important;">
                                        <a class="mt-2" href="<?=base_url('forgot_password')?>" style="font-size:12px;color:black;font-weight:600">Forgot your Password ?</a>
                                        <div class="custom-control custom-checkbox mb-3 padding-left" style="float:right !important; font-size:10px;"> 
                                            <!--<input type="checkbox" class="custom-control-input" id="customCheck1"> <label class="custom-control-label" for="customCheck1">Remember password?</label> -->
                                        </div>
                                    </div>
                                    <center> <button class="btn btn-md btn-primary  text-uppercase checkout-button" type="submit" id="loginLoader">login</button></center>
                                    <hr style="margin-top: 15px!important;margin-bottom: 15px;">
                                    <center>Don't have an account? <br>
                                    <a href="<?=base_url('sign_up')?>"><button class="btn btn-md btn-primary text-uppercase checkout-button" type="button"  style="margin-top:10px;">Signup for Arteno</button></a>
                                    </center>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <!-- enter mobile number Modal -->
        <div class="modal fade" id="mobileloginotpmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md custum-modal-height" role="document" style="">
                <div class="modal-content">
                    <div class="modal-header">
                        <div style="margin:auto !important">
                            <center><img src="<?= base_url()?>assets/logo/logo-min-3.png" alt="logo" style="height:35px; text-align:center;margin-bottom:12px"></center>
                        </div>
                        <button type="button"  data-dismiss="modal" class="modal_remove_button" aria-label="Close" style="background:white;border:none"><span aria-hidden="true" style="font-size: 22px">&times;</span></button>
                    </div>
                    <div class="modal-body" style="padding: 0.6rem;">
                        
                        <div class="card card-signin" style="padding:0px">
                            <div class="card-body">
                                
                                <form  method="post" id="get_otp">
                                    <div class="col-auto">
                                          <label for="mobil">Enter Mobile Number</label>
                                          <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                              <div class="input-group-text">+91</div>
                                            </div>
                                            <input type="number" onkeypress="if(this.value.length>9)return false;" name="mobile" pattern="[6-9]{1}[0-9]{9}" title="Please enter valid Number" class="form-control" id="mobile_number" minlength="10" maxlength="10" value="" style="border-radius:0px!important;text-align: left!important;text-align-last: left!important;" required>
                                          </div>
                                          <button class="float-right" data-toggle="modal" data-dismiss="modal"   data-target="#loginotpmodal" style="cursor:pointer;font-weight:bold;background:white;border:none">Login with Email</button>
                                    </div>
                                    
                                      </div>
                                    <div class="display:flex;">
                                   
                                        <p class="mt-3" style="font-size: 14px; line-height: 18px; text-align:center; ">
                                          <input type="checkbox" name="" checked  id="" value="" required>   
                                            By logging in, you are agreeing to Arteno’s <a href="<?= base_url()?>privacy_policy" target="_blank" style="display:inline-flex; color:black;"> privacy policy </a> and <a href="<?= base_url()?>term_condition" target="_blank" style="display:inline-flex; color:black;">terms </a> of use</p>
                                        </div>
                                       <br>
                                    <button type="submit"  class="btn btn-primary text-uppercase checkout-button btn-block" style="border-radius:0px; font-size: 16px;" id="otpLoader1">Request OTP</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- enter mobile number Modal -->
        <!-- otp verification Modal -->
        <div class="modal fade" id="otpverificationmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md custum-modal-height" role="document" style="">
                <div class="modal-content">
                    <div class="modal-header">
                        <div style="margin:auto !important">
                            <center><img src="<?= base_url()?>assets/logo/logo-min-3.png" alt="logo" style="height:35px; text-align:center;margin-bottom:12px"></center>
                        </div>
                        <button type="button"  data-dismiss="modal" class="modal_remove_button" aria-label="Close" style="background:white;border:none"><span aria-hidden="true" style="font-size: 22px">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="card card-signin">
                            <div class="card-body" style="padding:0px">
                                
                                <form method="post" id="verify_otp">
                                    <input type="hidden" name="mobiletype" id="mobiletype">
                                    <p class="text-center  mb-2">Enter OTP sent to <span id="sent_otp_number"></span><span style="margin-left: 15px;font-size: 18px;" onclick="update_mobno()"><i class="fa fa-pencil-alt"></i></span></p>
                                    <div class="form-group  mb-4" >
                                        <label for="mobile">Enter OTP</label>
                                        <input type="hidden" id="mob_otp">
                                        <input type="number" class="form-control" name="otp" id="otp_value" onkeypress="if(this.value.length>5)return false;" value="" style="text-align: left!important;text-align-last: left!important;">
                                    </div>
                                    <a style="text-align: center;margin-top: 12px;color: red; text-decoration: underline;cursor: pointer;" onclick="resend_otp()">Resend OTP</a>
                                    <center>
                                        <p class="mt-3" style="">
                                            <input type="checkbox" name="" checked  id="" value="" required> 
                                            By logging in, you are agreeing to Arteno’s <a href="<?= base_url()?>privacy_policy" target="_blank" style="display:inline-flex; color:black;"> privacy policy </a> and <a href="<?= base_url()?>term_condition" target="_blank" style="display:inline-flex; color:black;"> terms </a> of use</p>
                                        </center>
                                
                                    <br>
                                    <button type="submit" name="submit"   class="btn btn-primary text-uppercase checkout-button btn-block"  id="verify_otp_button" style="border-radius:0px; font-size: 16px;">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- email otp verification Modal -->
        <div class="modal fade" id="emailotpverificationmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md custum-modal-height" role="document" style="">
                <div class="modal-content">
                    <div class="modal-header">
                        <div style="margin:auto !important">
                            <center><img src="<?= base_url()?>assets/logo/logo-min-3.png" alt="logo" style="height:35px; text-align:center; /* margin-bottom:12px */"></center>
                        </div>
                        <button type="button" data-dismiss="modal" class="modal_remove_button" aria-label="Close"><span aria-hidden="true" style="font-size: 22px">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="card card-signin" style="background:white!important">
                            <div class="card-body" style="padding:0px">
                                
                                <form method="post" id="verifyemail_otp">
                                    <p class="text-center  mb-2">Enter OTP sent to <span id="email_value"></span></p>
                                    <div class="form-group  mb-4" >
                                        <label for="mobile">Enter OTP</label>
                                        <input type="hidden" id="email_otp">
                                        <input type="number" class="form-control" name="email_otp" id="email_otp_value" onkeypress="if(this.value.length>5)return false;" value="">
                                    </div>
                                    <!--<a style="text-align: center;margin-top: 12px;color: red; text-decoration: underline;cursor: pointer;" onclick="resend_otp()">Resend OTP</a>-->
                                    <!--<center>-->
                                    <!--    <p class="mt-3" style="">-->
                                    <!--        <input type="checkbox" name="" checked  id="" value="" required> -->
                                    <!--        By logging in, you are agreeing to Arteno’s <a href="<?= base_url()?>privacy_policy" target="_blank" style="display:inline-flex; color:black;"> privacy policy </a> and <a href="<?= base_url()?>term_condition" target="_blank" style="display:inline-flex; color:black;"> terms </a> of use</p>-->
                                    <!--    </center>-->
                                
                                    <br>
                                    <button type="submit" name="submit"   class="btn btn-primary text-uppercase checkout-button btn-block"  id="verifyemail_otp_button" style="border-radius:0px; font-size: 16px;">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- emailotp verification Modal -->
         
<script>

    function view_more_text(){
        $("#view_more_text").hide();
        $("#view_less_text").show();
    	$( ".text_editing" ).removeClass( 'hide');
    }
    function view_less_text(){
        $("#view_more_text").show();
        $("#view_less_text").hide();
    	$( ".text_editing" ).addClass( 'hide');
    }
    function view_more_effects(){
        $("#view_more_effects").hide();
        $("#view_less_effects").show();
    	$( ".arteno_text_effects" ).removeClass( 'hide');
    }
    function view_less_effects(){
        $("#view_more_effects").show();
        $("#view_less_effects").hide();
    	$( ".arteno_text_effects" ).addClass( 'hide');
    }

    //text_editing
    $('#info_model').modal({
        backdrop: 'static',
        keyboard: false,
        show:false
    })
    $('#share_modal').modal({
        backdrop: 'static',
        keyboard: false,
        show:false
    })
    
    $('#attributes_model').modal({
        backdrop: 'static',
        keyboard: false,
        show:false
    })
    $('#loginotpmodal').modal({
        backdrop: 'static',
        keyboard: false,
        show:false
    })
    $('#mobileloginotpmodal').modal({
        backdrop: 'static',
        keyboard: false,
        show:false
    })
    $('#otpverificationmodal').modal({
        backdrop: 'static',
        keyboard: false,
        show:false
    })
    $('#registermodal').modal({
        backdrop: 'static',
        keyboard: false,
        show:false
    })
    function check_otp_length(value){
                var otp_length=value.length;
                if(otp_length==6){
                    document.getElementById('verify_otp_button').disabled = false;
                    $("#verify_otp_button").css("background-color", "#111");
                    return true;
                }
                else{
                $('#verify_otp_button').attr("disabled", "disabled");
                $("#verify_otp_button").css("background-color", "grey");
                }
            }
            $("#get_login").submit(function(e){
            e.preventDefault();
            
            var email= $("#email").val();
            var password= $("#password").val();
            var current_url='<?=$currentURL?>';
            document.getElementById('loginLoader').disabled = true;
            $("#loginLoader").html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');
            //   alert(email);
                $.ajax({
                url:"<?= base_url()?>home/login_with_email",
                method:"POST",
                data:{'email':email,'password':password},
                success:function(res){
                    if(res.trim()=="success"){
                        document.getElementById('loginLoader').disabled = false;
                        $("#loginLoader").html('LOG IN');
                         swal("Login successful.",{
                          icon: "success",
                          button: false,
                          timer: 1200,
                        });
                     
                     $('#loginotpmodal').modal('hide');
                       if(current_url=='<?=base_url('cart')?>'){
                        window.location.href ='<?=base_url('checkout')?>';
                       } else{
                            window.location.href ='<?=$currentURL?>';
                       }
                   }
                   else if(res.trim()=="email"){
                       $.ajax({
                            url:"<?= base_url()?>home/login_with_emailotp",
                            method:"POST",
                            data:{'email':email},
                            success:function(res){
                                  if(res.trim()=='0'){
                                   swal("Something Went Wrong Try again later",{
                                    icon: "error",
                                    button: false,
                                    timer: 1200,
                                });
                                 
                               }
                               else{
                                   $('#loginotpmodal').modal('hide');
                                $('#emailotpverificationmodal').modal({show:true});
                                $('#email_value').html(res.trim());
                                $('#email_otp').val(res.trim());
                               }
                            }
                            });
                   }
                   else{
                       document.getElementById('loginLoader').disabled = false;
                        $("#loginLoader").html('LOG IN');
                         
                       swal("Invalid Email or password Try again later",{
                          icon: "error",
                          button: false,
                          timer: 1200,
                        });
                    
                   }
                }
                });
          });
          
          $("#verifyemail_otp").submit(function(e){
            e.preventDefault();
            $('#verifyemail_otp_button').attr("disabled", "disabled");
            $("#verifyemail_otp_button").css("background-color", "grey");
            var email= $("#email_otp").val();
            var otp_value= $("#email_otp_value").val();
            var current_url='<?=$currentURL?>';
                $.ajax({
                url:"<?= base_url()?>home/verifyemail_otp",
               method:"POST",
                data:{'email':email,'otp':otp_value},
                success:function(res){
                   if(res.trim()=="success"){
                        $('#emailotpverificationmodal').modal('hide');
                        window.location.href ='<?=base_url('user_checkout')?>';
                     
                   }
                   else{
                       swal("OTP Not Matched",{
                              icon: "error",
                              button: false,
                              timer: 1200,
                        });
                    document.getElementById('verifyemail_otp_button').disabled = false;
                    $("#verifyemail_otp_button").css("background-color", "#111");
                   }
                }
                });
          });
          
            $("#get_otp").submit(function(e){
            e.preventDefault();
            var mobno= $("#mobile_number").val();
                document.getElementById('otpLoader1').disabled = true;
                $("#otpLoader1").html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');
                if(mobno.length!=10){
                swal("Please enter valid mobile number",{
                    icon: "warning",
                    button: false,
                    timer: 1200,
                });
                        document.getElementById('otpLoader1').disabled = false;
                      $("#otpLoader1").html('REQUEST OTP');
              return false;
            }
            $('#mobileloginotpmodal').modal('hide');
            $('#otpverificationmodal').modal({show:true});
            $('#sent_otp_number').html(mobno);
                $.ajax({
                url:"<?= base_url()?>home/login_with_otp",
                method:"POST",
                data:{'mobile':mobno},
                success:function(res){
                         document.getElementById('otpLoader1').disabled = false;
                        $("#otpLoader1").html('REQUEST OTP');
                      if(res.trim()=='0'){
                       swal("Something Went Wrong Try again later",{
                        icon: "error",
                        button: false,
                        timer: 1200,
                    });
                     
                   }
                //   else if(res.trim()=="2"){
                //         window.location.replace("<?= base_url('sign_up')?>");
                //         swal("Mobile number does not exits Please register first",{
                //         icon: "warning",
                //         button: false,
                //         timer: 1200,
                //     });
               
                   
                //   }
                   else{
                    $('#mob_otp').val(res.trim());
                   }
                }
                });
          });
            $("#verify_otp").submit(function(e){
            e.preventDefault();
            $('#verify_otp_button').attr("disabled", "disabled");
            $("#verify_otp_button").css("background-color", "grey");
            var mobileno= $("#mob_otp").val();
            var otp_value= $("#otp_value").val();
            var current_url='<?=$currentURL?>';
                $.ajax({
                url:"<?= base_url()?>home/verify_otp",
               method:"POST",
                data:{'mobile':mobileno,'otp':otp_value},
                success:function(res){
                   if(res.trim()=="success"){
                        swal("Login successful",{
                              icon: "success",
                              button: false,
                              timer: 1200,
                        });
                     
                     $('#otpverificationmodal').modal('hide');
                     if(current_url=='<?=base_url('cart')?>'){
                        window.location.href ='<?=base_url('checkout')?>';
                       } else{
                            window.location.href ='<?=$currentURL?>';
                       }
                   }
                   else if(res.trim()=="register"){
                        $('#otpverificationmodal').modal('hide');
                        window.location.href ='<?=base_url('user_checkout')?>';
                        // $('#registermodal').modal({show:true});
                        // $('#mobile').val(mobileno);
                   }
                   else{
                       swal("OTP Not Matched",{
                              icon: "error",
                              button: false,
                              timer: 1200,
                        });
                    document.getElementById('verify_otp_button').disabled = false;
                    $("#verify_otp_button").css("background-color", "#111");
                   }
                }
                });
          });
          function update_mobno(){
              $('#otpverificationmodal').modal('hide');
                $('#mobileloginotpmodal').modal({show:true});
          }
            function resend_otp(){
                $("#otploader").show();
            var mobno= $("#mob_otp").val();
            $('#sent_otp_number').html(mobno);
            document.getElementById('verify_otp_button').disabled = false;
            $("#verify_otp_button").css("background-color", "#111");
                $.ajax({
                url:"<?= base_url()?>home/resend_otp",
                method:"POST",
                data:{'mobile':mobno},
                success:function(res){
                   if(res==0){
                     alert('Something Went Wrong Try again later');
                     $("#otploader").hide();
                   }
                   else{
                    $('#mob_otp').val(res.trim());
                    $("#otploader").hide();
                   }
                }
                });
            }
            function mobile_login(){
                $('#loginotpmodal').modal('hide');
                $('#mobileloginotpmodal').modal({show:true});
            }
    var scrollvala=100;
    var scrollvalb=100;
    var scrollvalc=60;
    var scrollvald=60;
    var scrollvalx=0;
    var scrollval_margin = 305;
    var scrollHeight = $(".designer-product-color").height();
    function upSlider(){
        scrollHeight = $(".designer-product-color").height()-scrollval_margin;
        if(scrollvalx<=0)
            scrollvalx = scrollHeight;
        else
            scrollvalx-=scrollvala;
        $(".product_custom_color").animate({ scrollTop:scrollvalx }, "slow");
    }
    function downSlider(){
        scrollHeight = $(".designer-product-color").height()-scrollval_margin;
        if(scrollvalx>=scrollHeight)
            scrollvalx = 0;
        else
            scrollvalx+=scrollvalb;
        $(".product_custom_color").animate({ scrollTop:scrollvalx }, "slow");
    }
     function Slider_color_prev(){
            $(".product_custom_color").animate({ scrollLeft:scrollvalc }, "slow");
     }
     function Slider_color_next(){
         scrollvald+=scrollvald;
             $(".product_custom_color").animate({ scrollLeft:scrollvald }, "slow");
     }
    function leftSlider(){
        var elmt = document.getElementById('designer-list-items');
        elmt.scrollLeft -= 200;
    }
    function rightSlider(){
        var elmt = document.getElementById('designer-list-items');
        elmt.scrollLeft += 200;
        
    }
    function leftSlide_upload(){
        var elmt = document.getElementById('upload_list_items');
        elmt.scrollLeft -= 200;
    }
    function rightSlide_upload(){
        var elmt = document.getElementById('upload_list_items');
        elmt.scrollLeft += 200;
    }
    function leftSlide_fonts(){
        var elmt = document.getElementById('designer-text-ext');
        elmt.scrollLeft -= 200;
    }
    function rightSlide_fonts(){
        var elmt = document.getElementById('designer-text-ext');
        elmt.scrollLeft += 200;
    }
    
    (function ($){
  $.fn.counter = function() {
    const $this = $(this),
    numberFrom = parseInt($this.attr('data-from')),
    numberTo = parseInt($this.attr('data-to')),
    delta = numberTo - numberFrom,
    deltaPositive = delta > 0 ? 1 : 0,
    time = parseInt($this.attr('data-time')),
    changeTime = 10;
    
    let currentNumber = numberFrom,
    value = delta*changeTime/time;
    var interval1;
    const changeNumber = () => {
      currentNumber += value;
      $(".counter_price").css("font-size", "18px");
      $(".product-currency").css("font-size", "18px");
      //checks if currentNumber reached numberTo
      (deltaPositive && currentNumber >= numberTo) || (!deltaPositive &&currentNumber<= numberTo) ? currentNumber=numberTo : currentNumber;
      this.text(parseInt(currentNumber));
      currentNumber == numberTo ? clearInterval(interval1) : currentNumber;  
      if(currentNumber == numberTo) {
        $(".counter_price").css("font-size", "16px");
        $(".product-currency").css("font-size", "16px");
        $this.attr('data-from', numberTo);
      }
    
    }
    interval1 = setInterval(changeNumber,changeTime);
  }
}(jQuery));

$(document).ready(function(){
    $('.counter_price').counter();
});
function copy_in_clipboard() {
  var copyText = document.getElementById("put_share_value");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
 function remove_wishlist(wishid,base_id){
    var r = confirm("Are you sure to remove from wishlist?");
        if (r == true) {
            var p_id=base_id;
            $.ajax({
        url:"<?= base_url()?>editor/remove_wishlist",
        method:"POST",
        data:{'wishid':wishid},
        success:function(res){
           if(res.trim()=="success"){
             window.location.href ='<?= base_url("customizer")?>?product='+p_id;
           }
           else{
            alert('something went wrong');
           }
        }
        });
        } 
     
 }
 
</script>
<script>
  $( function() {
    $( "#fill-ops-sub" ).draggable();
  } );
  </script>
<style>
.ui-draggable{
    cursor: move!important;
}
#fill-ops-sub{
    cursor: move!important;
}
    .main-content {
    min-height: 0%;
    background: #f5f5f5!important;
}
</style>
</body>
</html>
<?php endif;