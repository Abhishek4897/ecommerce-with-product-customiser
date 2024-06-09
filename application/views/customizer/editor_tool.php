<?php
@session_start();
	global $lumise;
	$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
	    $is_tab = (is_numeric(strpos($ua, "ipad")) || is_numeric(strpos($ua, "tablet")));
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
        <link rel="stylesheet" media="only screen and (max-width: 736px)" href="<?php echo $lumise->apply_filters('editor/app_mobile.css', $lumise->cfg->assets_url.'assets/css/app_mobile.css?version='.LUMISE); ?>">
        <link rel="stylesheet" media="only screen and (min-width: 768px) and (max-width: 1023px)" href="<?php echo $lumise->apply_filters('editor/app_tab.css', $lumise->cfg->assets_url.'assets/css/app_tab.css?version='.LUMISE); ?>">
       
        <link rel="stylesheet" media="only screen and (min-width: 1024px)" href="<?php echo $lumise->apply_filters('editor/app.css', $lumise->cfg->assets_url.'assets/css/app.css?version='.LUMISE); ?>">
        <link rel="stylesheet" media="only screen and (min-width: 1024px)" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet"  href="<?php echo $lumise->apply_filters('editor/custom.css', $lumise->cfg->assets_url.'assets/css/custom.css?version='.LUMISE); ?>">
         <!--<link rel="stylesheet" media="only screen and (min-width: 992px) and (max-width: 1300px)" href="<?php echo $lumise->apply_filters('editor/custom_ipadpro.css', $lumise->cfg->assets_url.'assets/css/custom_ipadpro.css?version='.LUMISE); ?>">-->
        <!--<link rel="stylesheet" href="<?php //echo $lumise->apply_filters('editor/max600.css.css', $lumise->cfg->assets_url.'assets/css/max600.css.css?version='.LUMISE); ?>">-->
		<link rel="stylesheet" media="only screen and (max-width: 1024px)" href="<?php echo $lumise->apply_filters('editor/responsive.css', $lumise->cfg->assets_url.'assets/css/responsive.css?version='.LUMISE); ?>">
		<link rel="icon" type="image/png" href="<?= base_url()?>assets/images/shareimagefavicon.png">
   
   <style>
         .hamburger { cursor: pointer; padding: 15px 35px 16px 0px; }
.hamburger span, .hamburger span:before, .hamburger span:after {
  cursor: pointer;
  border-radius: 1px;
  height: 3px;
  width: 25px;
  margin-left: -12px;
  background: white;
  position: absolute;
  display: inline-block;
  content: '';
}
.hamburger span:before {
  top: -8px; 
}
.hamburger span:after {
  bottom: -8px;
}
/*
#hamburger span, #hamburger span:before, #hamburger span:after {
  transition: all 200ms ease-in-out;
}
*/
.hamburger span, .hamburger span:before, .hamburger span:after {
-webkit-transition: all 300ms cubic-bezier(0.645, 0.045, 0.355, 1.000); 
   -moz-transition: all 300ms cubic-bezier(0.645, 0.045, 0.355, 1.000); 
     -o-transition: all 300ms cubic-bezier(0.645, 0.045, 0.355, 1.000); 
        transition: all 300ms cubic-bezier(0.645, 0.045, 0.355, 1.000); /* easeInOutCubic */
}
.hamburger.active span {
  background-color: transparent;
}
.hamburger.active span:before, .hamburger.active span:after {
  top: 0;
}
.hamburger.active span:before {
  transform: rotate(45deg);
}
.hamburger.active span:after {
  transform: translateY(-10px) rotate(-45deg);
  top: 10px;
} 
   /*for lablet view of editor panel*/
   /*css for tablet view*/
   /* @media (min-width: 768px) and (max-width: 1023px){*/
   /*     .shoppingCartModal.modal.right .modal-dialog{*/
   /*        width:320px !important;*/
   /*     }*/
   /*     .container{*/
   /*         max-width:1000px;*/
   /*     }*/
   /*     .prev_color,.next_color {*/
   /*         display:none!important;*/
   /*     }*/
   /*     .custom_quantity {*/
   /*         position: fixed;*/
   /*         left: 5px;*/
   /*         bottom: 125px;*/
   /*         width: auto!important;*/
   /*     }*/
   /*     .custom_size {*/
   /*     position: fixed;*/
   /*     right: 5px;*/
   /*     bottom: 120px;*/
   /*     width: auto!important;*/
   /* }*/
   /*     .div#designer div#designer-left{*/
   /*         width:100%!important;*/
   /*     }*/
   /*     div#designer div#designer-left>div.row>div.col-md-9>div.designer-left-nav-wrp {*/
   /*         position: initial;*/
   /*         left: 0;*/
   /*         top: 100vh;*/
   /*         transform: translateY(-100%);*/
   /*         width: 1000px;*/
   /*         height: 40px;*/
   /*         min-height: 40px;*/
   /*         z-index: 1000000;*/
   /*     }*/
        
   /* }*/
    /*for iPad pro tablet */
   /* @media only screen and (min-width: 992px) {*/
   /* 	.prev_color.d-sm-block,.next_color.d-sm-block {*/
   /*         display:none!important;*/
   /*     }*/
   /*     div#designer div#designer-left>div.row>div.col-md-9>div.designer-left-nav-wrp {*/
   /*         position: initial;*/
   /*         left: 0;*/
   /*         top: 100vh;*/
   /*         transform: translateY(-100%);*/
   /*         width: 1000px;*/
   /*         height: 300px;*/
   /*         min-height: 40px;*/
   /*         z-index: 1000000;*/
   /*     }*/
   /*     .designer-product-color{*/
   /*         max-height:400px!important;*/
   /*         height:380px!important;*/
   /*         left: 12px;*/
   /*     }*/
   /*     ul.designer-product-color li[data-color] {*/
   /*         width: 45px;*/
   /*         height: 45px;*/
   /*         margin-top: 15px;*/
   /*         left:10px;*/
   /*     }*/
   /*     .arteno_cart_action .share_icon{*/
   /*         height: 45px;*/
   /*         padding: 10px 10px 10px 9px!important;*/
   /*         width: 45px;*/
   /*     }*/
   /*     .arteno_cart_action{*/
   /*         padding: 25px;*/
   /*     }*/
   /*     div#designer div#designer-workspace{*/
   /*         margin: 0px 0 0;*/
            /*margin-left: 8%!important;*/
   /*     }*/
   /*     .div#designer-stage-nav[data-pos="right"]{*/
   /*         bottom: calc(50% + 110px);*/
   /*     }*/
   /*     div#designer-stage-nav[data-pos="right"] {*/
   /*         top: calc(3% + 85px)!important;*/
   /*     }*/
   /*     div#designer div#designer-left {*/
   /*         width:100%!important;*/
   /*     }*/
   /*     div#designer div#designer-left {*/
   /*         width: 100%;*/
   /*         background: #111;*/
   /*         position: fixed;*/
   /*         height: 130px;*/
   /*         bottom: 0;*/
   /*         border-top: 1px solid lightgrey;*/
   /*         z-index: 10;*/
   /*     }*/
   /*     div#designer div#designer-left>div.row>div.col-md-9>div.designer-left-nav-wrp>ul.designer-left-nav, div#designer div#designer-left>div.row>div.col-md-9>div.designer-left-nav-wrp {*/
   /*         list-style: none;*/
   /*         margin: 0!important;*/
   /*         padding: 0;*/
   /*         width: 100%;*/
   /*         float: left;*/
   /*         display: inline-flex!important;*/
            /* background: #111; */
   /*     }*/
   /*     div#designer div#designer-left>div.row>div.col-md-9>div.designer-left-nav-wrp {*/
   /*         background: #111;*/
   /*         min-height: 40px;*/
   /*         border-bottom: 1px solid #dbb258;*/
   /*         position: initial;*/
   /*     }*/
   /*     div#designer div#designer-left>div.row>div.col-md-9 .designer-tab-body-wrp {*/
   /*         width: 100%;*/
   /*         color: #111;*/
   /*         text-align: center;*/
            /* overflow-x: scroll; */
   /*         position: initial;*/
   /*         height: auto;*/
   /*         box-sizing: border-box;*/
   /*         right: 0;*/
   /*         background: #fff!important;*/
   /*     }*/
   /*     div#designer div#designer-left>div.row>div.col-md-9 .designer-tab-body-wrp:not(.active) {*/
   /*         display: none;*/
   /*     }*/
   /*     #designer-left #designer-x-thumbn-preview {*/
   /*         position: absolute;*/
   /*         left: calc(100% + 1px);*/
   /*         top: 0;*/
   /*         z-index: 1000;*/
   /*         background: #fff;*/
   /*         box-shadow: 5px 5px 8px 0 rgb(0 0 0 / 35%);*/
   /*         border-bottom-right-radius: 5px;*/
   /*         display: none;*/
   /*     }*/
        
        
        
   /* }*/
            
            
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
.checkout-button,#designer-manualcart,#designer-buynow-action{
    border-radius: 30px!important;
}
   @media only screen and (max-width: 1023px) {
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
       left: 380.5px;
       top: 215px;
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
    /*border-radius: 0rem!important;*/
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
    time = parseInt((EstimatedTime/1000)%60)*100*50;//30 //Static added.
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
.img_share{
    height:300px;
}
#share_link_section{
    margin-top:110px;
}
.social-icon-list{
    padding:0px!important;
    margin-left:15%;
}
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
<!--<style>-->
<!--[data-id="size"] {-->
<!--   display: none!important;-->
<!--}-->
    
<!--</style>-->
<?php } ?>
	<div class="wrapper">
		<div id="designer" data-site="https://anshuwap.com" data-processing="true" data-msg="">
		    <!--<img src="<?=base_url()?>assets/img/unnamed.gif" id="loader_publish" />-->
		    <!--<img src="<?=base_url()?>assets/img/unnamed.gif" id="loader_publish_design" />-->
    		<div id="arteno_navbar" style="display:none;">
    		    <?php $lumise->display('nav'); ?>
    		</div>
    	    <div id="designer-navigations" data-navigation="" style="">
    	        
    	        <?php 
    	        $page="editor";
    	        include(__DIR__.'/../arteno/includes/header.php');
    	        include(__DIR__.'/../arteno/includes/cart_sidebar.php')
    	        ?>
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
				<!--<div id="designer-zoom-wrp">-->
				<!--	<i class="fa fa-minus" data-zoom="out"></i>-->
				<!--	<span> Scroll to zoom</span>-->
				<!--	<inp data-range="helper" data-value="100%">-->
				<!--		<input type="range" id="designer-zoom" data-value="100%" min="100" max="250" value="100" />-->
				<!--	</inp>-->
				<!--	<i class="fa fa-plus" data-zoom="in"></i>-->
				<!--</div>-->
				<!--<div id="designer-zoom-thumbn" style="display:none;">-->
				<!--	<span></span>-->
				<!--</div>-->
				<div id="designer-stage-nav">
					<ul id="navigations_around"></ul>
				</div>
				<div id="designer-notices"></div>
				<!--<span class="prev_color_mobile d-block d-xs-block d-sm-none d-md-none d-lg-none d-xl-none" onclick="Slider_color_prev()"><i class="fa fa-chevron-circle-up"></i></span>-->
		        <!--<span class="next_color_mobile d-block d-xs-block d-sm-none d-md-none d-lg-none d-xl-none" onclick="Slider_color_next()"><i class="fa fa-chevron-circle-down"></i></span>-->
				<span class="prev_color d-none d-xs-none d-sm-none d-md-none d-lg-block d-xl-block" onclick="upSlider()" style="margin-top: -9px"><i class="fa fa-chevron-circle-up"></i></span>
		        <span class="next_color d-none d-xs-none d-sm-none d-md-none d-lg-block d-xl-block" onclick="downSlider()"><i class="fa fa-chevron-circle-down"></i></span>
				<div id="designer-cart-wrp" data-view="attributes" class="product_custom_color">
		               
						<div class="designer-cart-options">
							<div class="designer-cart-attributes color_scoller" id="designer-cart-attributes-color">
								
							</div>
						</div>
					</div>
					 <div  id="product_size_qty">
                                    <div id="designer-cart-wrp" data-view="attributes" class="product_custom_size" style="overflow:hidden!important;">
                        						<div class="designer-cart-options">
                        							<div class="designer-cart-attributes" id="designer-cart-attributes-qty"></div>
                        						</div>
                        					</div>        
                              </div>
				<span class="product_attributes" data-toggle="modal" data-target="#attributes_model" style="display:none;">Choose Attributes  <i class="fa fa-bars"></i></span>
				<span class="product_information" data-toggle="modal" data-target="#info_model"><i class="fa fa-info-circle"></i></span>
            <div class="arteno_power_ation">
                <ul class="arteno_cart_action">
                    
                       <?php 
				//if(!$this->session->userdata('designer_id')){
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
				    <span onclick="add_wishlist()"><i class="far fa-heart icon_height" ></i></span>
				</li>
				<li id="wishlist-button" style="display:none"></li>
		    	<?php }?> 
		    	<li  class="wishlist_icon" id="wishlist-loader" style="display:none;"><span><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span></span></li>
                    <li class="share_icon">
                      <span id="share-button" data-toggle="modal" data-target="#share_modal"><img src="<?=base_url()?>assets/images/icons/share.png" class="icon_height" /></span>  
                    </li>
                    <?php $cart_id=$_GET['cart_id'];
                    if(isset($cart_id)){
                        if(!is_cart_exist($cart_id))
                            redirect(site_url("customizer?product=".$_GET['product']));
                    ?>
                    <li class="buy_icon" style="">
                         <a id="buy_now_action">
                            <button class="btn btn-primary buy_now checkout-button" id="designer-buynow-action" data-action="update-cart" style="text-transform:uppercase;color:#dbb258!important;font-size: 15px!important;border-radius:30px!important; margin-top: 4px!important;margin-left: 10px!important;width: 150px"> <span style="font-size:11px">Update</span> <span class="product-currency" style="font-size:11px">RS. <span class="designer-price designer-product-price counter_price" data-from="0" data-to="0" data-time="1000"> 0.00</span></span></button>
                        </a>
                         <a id="buy_now_loader" style="display:none;">
                            <button class="btn btn-primary buy_now checkout-button"  style="text-transform:uppercase;color:#dbb258!important;font-size: 12px!important;border-radius:30px!important; margin-top: 4px!important;margin-left: 10px!important;width: 150px"><span class="spinner-border spinner-border-sm" style="height: 16px!important;width: 16px!important;" role="status" aria-hidden="true"></span></button>
                        </a>
                    </li>
                    <?php } else {?>
                    <li class="buy_icon"  style="">
                        <a id="buy_now_action">
                            <button class="btn btn-primary buy_now checkout-button" id="designer-buynow-action" data-action="update-cart" style="text-transform:uppercase;color:#dbb258!important;font-size: 15px!important;border-radius:30px!important; margin-top: 4px!important;margin-left: 4px!important;width: 130px"><span style="font-size:11px">Buy</span>  <span class="product-currency" style="font-size:11px">RS. <span class="designer-price designer-product-price counter_price" data-from="0" data-to="0" data-time="1000"> 0.00</span></span></button>
                        </a>
                        <a id="buy_now_loader" style="display:none;">
                            <button class="btn btn-primary buy_now checkout-button"  style="text-transform:uppercase;color:#dbb258!important;font-size: 15px!important;border-radius:30px!important; margin-top: 4px!important;margin-left: 10px!important;width: 130px;"><span class="spinner-border spinner-border-sm" style="height: 15px!important;" role="status" aria-hidden="true"></span></button>
                        </a>
                        <a id="addtocart_action">
                            <button class="btn btn-primary buy_now checkout-button" id="designer-manualcart" data-action="update-cart" style="text-transform:uppercase;color:#dbb258!important;font-size: 15px!important;border-radius:30px!important; margin-top: 4px!important;margin-left: 10px!important;width: 130px"> <span style="font-size:11px">Add to cart</span> </button>
                        </a>
                        <a  id="addtocart_loader" style="display:none;">
                            <button class="btn btn-primary buy_now checkout-button"  style="text-transform:uppercase;color:#dbb258!important;font-size: 15px!important;border-radius:30px!important; margin-top: 4px!important;margin-left: 10px!important;width: 130px"><span class="spinner-border spinner-border-sm" style="height: 15px!important;" role="status" aria-hidden="true"></span></button>
                        </a>
                    </li>
                   
                    <?php }?>
                    
                     
                </ul>
			</div>
				   
				        
				    
				        
				   
			<?php //} else {?>
			    <!--<button class="btn btn-primary buy_now checkout-button" id="designer-publish-design" style="text-transform:capitalize;color:#dbb258;!important"> Publish </button>-->
			    <!--<input type="hidden"  value="" id="product_base">-->
			    <?php //}?>
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
	<script src="<?php echo $lumise->apply_filters('editor/app.js', $lumise->cfg->assets_url.'assets/js/app.js?version='.LUMISE); ?>"></script>
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


<!--premium template price modal-->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="extraqtymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="border-radius: 30px;">
      
      <div class="modal-body">
          <button type="button" class="close modal_remove_button" data-dismiss="modal" aria-label="Close" style="background:white;border:none">
          <span aria-hidden="true">&times;</span>
        </button>
          <center>
              <h5 class="share_title text-center">For Bulk order </h5>
          <!--<br>-->
          </center><br>
          <!--<br>-->
          <img src="<?=base_url('assets/images/Gift Gif.gif')?>" class="card-img-top img-fluid img-responsive premium_product_design bulk_order_image">
          <p style="font-family: 'Nunito', sans-serif!important;font-size: 16px!important;font-weight: 600!important;margin-top: 15px!important;text-align: justify!important;">Use the premium designs crafted by our premium designers to uplift your products and take them to a new level. 
          For bulk order please contact us-:
          </p>
            <ul class="contact_list_head">
                <li class="contact_list_item"><i class="fas fa-phone" style="transform:rotate(115deg);"></i> &nbsp;Call Us:  &nbsp;<a href="tel:+91129-4015046 " style="color:#666;">+91 129-4015046 </a></li>
                <li class="contact_list_item"><i class="far fa-envelope"></i> &nbsp; Email Us: &nbsp;<a href="mailto:customersupport@arteno.in?Subject=Hello%20World" style="color:#666;">customersupport@arteno.in </a></li>
            </ul>
          <br>
        
       </div>
    </div>
  </div>
</div>
<!--extraqtymodal modal-->
<!--tmpprice modal start-->

<div class="modal fade" id="tmpprice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content premium_modal">
      
      <div class="modal-body">
          <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
          <!--<span aria-hidden="true">&times;</span>-->
        </button>
          <center>
              <h5 class="share_title text-center">INTRODUCING PREMIUM DESIGN </h5>
          <!--<br>-->
          </center><br>
          <!--<br>-->
          <img src="<?=base_url()?>assets/gif/<?= getTempPrice($_GET['product']); ?>.gif" class="card-img-top img-fluid img-responsive premium_product_design">
          <p style="font-family: 'Nunito', sans-serif!important;font-size: 16px!important;font-weight: 600!important;margin-top: 15px!important;">Use the premium designs crafted by our premium designers to uplift your products and take them to a new level. Starting from Rs
              <?= getTempPrice($_GET['product']); ?>
          </p><br>
          <!--<br>-->
          <button type="button" data-dismiss="modal" onclick="disable_tmp_model()" class="btn btn-primary">Sure</button>
       </div>
    </div>
  </div>
</div>
<!--tmpprice modal end -->

<script>
    function disable_tmp_model() {
        $("#tmpModel").html("Premium Designs");
        $("#tmpModel").removeAttr("data-toggle");
    }
    $('#tmpprice').modal({
        backdrop: 'static',
        keyboard: false,
        show:false
    })
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<div class="modal fade" id="share_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="overflow-y: hidden!important;">
  <div class="modal-dialog modal-dialog custom_modal_share" role="document">
    <div class="modal-content" style="background:#fff;border-radius:10px;padding:15px;">
      <div class="modal-header" style="border-bottom:none!important;padding:0px;">
        <button type="button" class="close modal_remove_button" data-dismiss="modal" aria-label="Close" style="padding: 5px 10px 5px 10px;background:white;border:none">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="padding:0px;"id="sharemodel">
          <center> <h5 class="share_title text-center">Share Your Design</h5></center>
        <div class="share_data text-center" style="padding-top: 15px;">
            <div class="image_area_share">
                <img src="<?= base_url()?>/assets/images/shareimage.png" id="shareimage-logo" alt="logo" style="">
                <img src="<?=base_url('assets/img/share-loader.gif')?>"   class="img_share" id="share_img"/>
                <span class="webname">www.arteno.in</span>
                <img src="<?=base_url('assets/img/share-loader.gif')?>"  class="img_share" id="share_img1"/>
            </div>
        </div>
        
        <div id="share_link_section" style="display:none;">
             <!--<div class="col-md-12 col-xs-12 col-12">-->
               <center><ul class="social-icon-list">
                    <li class="social_icon" style="padding-left: 0px!important;padding-right: 0px!important;"><a href="" target="_blank" class="text-white" id="fb_share_url">
                       <div style="width: 30px; height: 30px;"><svg viewBox="0 0 64 64" width="30" height="30" class="social-icon social-icon--facebook "><g><circle cx="32" cy="32" r="31" fill="#3b5998"></circle></g><g><path d="M34.1,47V33.3h4.6l0.7-5.3h-5.3v-3.4c0-1.5,0.4-2.6,2.6-2.6l2.8,0v-4.8c-0.5-0.1-2.2-0.2-4.1-0.2 c-4.1,0-6.9,2.5-6.9,7V28H24v5.3h4.6V47H34.1z" fill="white"></path></g></svg></div>
                        </a></li>
                    <li class="social_icon" style="padding-left: 0px!important;padding-right: 0px!important;"><a href="" target="_blank" data-action="share/whatsapp/share"   class="text-white" id="whatsapp_share_url">
                         <div style="width: 30px; height: 30px;"><svg viewBox="0 0 64 64" width="30" height="30" class="social-icon social-icon--whatsapp "><g><circle cx="32" cy="32" r="31" fill="#2cb742"></circle></g><g><path d="m42.32286,33.93287c-0.5178,-0.2589 -3.04726,-1.49644 -3.52105,-1.66732c-0.4712,-0.17346 -0.81554,-0.2589 -1.15987,0.2589c-0.34175,0.51004 -1.33075,1.66474 -1.63108,2.00648c-0.30032,0.33658 -0.60064,0.36247 -1.11327,0.12945c-0.5178,-0.2589 -2.17994,-0.80259 -4.14759,-2.56312c-1.53269,-1.37217 -2.56312,-3.05503 -2.86603,-3.57283c-0.30033,-0.5178 -0.03366,-0.80259 0.22524,-1.06149c0.23301,-0.23301 0.5178,-0.59547 0.7767,-0.90616c0.25372,-0.31068 0.33657,-0.5178 0.51262,-0.85437c0.17088,-0.36246 0.08544,-0.64725 -0.04402,-0.90615c-0.12945,-0.2589 -1.15987,-2.79613 -1.58964,-3.80584c-0.41424,-1.00971 -0.84142,-0.88027 -1.15987,-0.88027c-0.29773,-0.02588 -0.64208,-0.02588 -0.98382,-0.02588c-0.34693,0 -0.90616,0.12945 -1.37736,0.62136c-0.4712,0.5178 -1.80194,1.76053 -1.80194,4.27186c0,2.51134 1.84596,4.945 2.10227,5.30747c0.2589,0.33657 3.63497,5.51458 8.80262,7.74113c1.23237,0.5178 2.1903,0.82848 2.94111,1.08738c1.23237,0.38836 2.35599,0.33657 3.24402,0.20712c0.99159,-0.15534 3.04985,-1.24272 3.47963,-2.45956c0.44013,-1.21683 0.44013,-2.22654 0.31068,-2.45955c-0.12945,-0.23301 -0.46601,-0.36247 -0.98382,-0.59548m-9.40068,12.84407l-0.02589,0c-3.05503,0 -6.08417,-0.82849 -8.72495,-2.38189l-0.62136,-0.37023l-6.47252,1.68286l1.73463,-6.29129l-0.41424,-0.64725c-1.70875,-2.71846 -2.6149,-5.85116 -2.6149,-9.07706c0,-9.39809 7.68934,-17.06155 17.15993,-17.06155c4.58253,0 8.88029,1.78642 12.11655,5.02268c3.23625,3.21036 5.02267,7.50812 5.02267,12.06476c-0.0078,9.3981 -7.69712,17.06155 -17.14699,17.06155m14.58906,-31.58846c-3.93529,-3.80584 -9.1133,-5.95471 -14.62789,-5.95471c-11.36055,0 -20.60848,9.2065 -20.61625,20.52564c0,3.61684 0.94757,7.14565 2.75211,10.26282l-2.92557,10.63564l10.93337,-2.85309c3.0136,1.63108 6.4052,2.4958 9.85634,2.49839l0.01037,0c11.36574,0 20.61884,-9.2091 20.62403,-20.53082c0,-5.48093 -2.14111,-10.64081 -6.03239,-14.51915" fill="white"></path></g></svg></div>
                    </li>
                    <li class="social_icon" style="padding-left: 0px!important;padding-right: 0px!important;"><a href="" target="_blank" class="text-white" id="telegram_share_url">
                         <div style="width: 30px; height: 30px;"><svg viewBox="0 0 64 64" width="30" height="30" class="social-icon social-icon--telegram"><g><circle cx="32" cy="32" r="31" fill="#37aee2"></circle></g><g><path d="m45.90873,15.44335c-0.6901,-0.0281 -1.37668,0.14048 -1.96142,0.41265c-0.84989,0.32661 -8.63939,3.33986 -16.5237,6.39174c-3.9685,1.53296 -7.93349,3.06593 -10.98537,4.24067c-3.05012,1.1765 -5.34694,2.05098 -5.4681,2.09312c-0.80775,0.28096 -1.89996,0.63566 -2.82712,1.72788c-0.23354,0.27218 -0.46884,0.62161 -0.58825,1.10275c-0.11941,0.48114 -0.06673,1.09222 0.16682,1.5716c0.46533,0.96052 1.25376,1.35737 2.18443,1.71383c3.09051,0.99037 6.28638,1.93508 8.93263,2.8236c0.97632,3.44171 1.91401,6.89571 2.84116,10.34268c0.30554,0.69185 0.97105,0.94823 1.65764,0.95525l-0.00351,0.03512c0,0 0.53908,0.05268 1.06412,-0.07375c0.52679,-0.12292 1.18879,-0.42846 1.79109,-0.99212c0.662,-0.62161 2.45836,-2.38812 3.47683,-3.38552l7.6736,5.66477l0.06146,0.03512c0,0 0.84989,0.59703 2.09312,0.68132c0.62161,0.04214 1.4399,-0.07726 2.14229,-0.59176c0.70766,-0.51626 1.1765,-1.34683 1.396,-2.29506c0.65673,-2.86224 5.00979,-23.57745 5.75257,-27.00686l-0.02107,0.08077c0.51977,-1.93157 0.32837,-3.70159 -0.87096,-4.74991c-0.60054,-0.52152 -1.2924,-0.7498 -1.98425,-0.77965l0,0.00176zm-0.2072,3.29069c0.04741,0.0439 0.0439,0.0439 0.00351,0.04741c-0.01229,-0.00351 0.14048,0.2072 -0.15804,1.32576l-0.01229,0.04214l-0.00878,0.03863c-0.75858,3.50668 -5.15554,24.40802 -5.74203,26.96472c-0.08077,0.34417 -0.11414,0.31959 -0.09482,0.29852c-0.1756,-0.02634 -0.50045,-0.16506 -0.52679,-0.1756l-13.13468,-9.70175c4.4988,-4.33199 9.09945,-8.25307 13.744,-12.43229c0.8218,-0.41265 0.68483,-1.68573 -0.29852,-1.70681c-1.04305,0.24584 -1.92279,0.99564 -2.8798,1.47502c-5.49971,3.2626 -11.11882,6.13186 -16.55882,9.49279c-2.792,-0.97105 -5.57873,-1.77704 -8.15298,-2.57601c2.2336,-0.89555 4.00889,-1.55579 5.75608,-2.23009c3.05188,-1.1765 7.01687,-2.7042 10.98537,-4.24067c7.94051,-3.06944 15.92667,-6.16346 16.62028,-6.43037l0.05619,-0.02283l0.05268,-0.02283c0.19316,-0.0878 0.30378,-0.09658 0.35471,-0.10009c0,0 -0.01756,-0.05795 -0.00351,-0.04566l-0.00176,0zm-20.91715,22.0638l2.16687,1.60145c-0.93418,0.91311 -1.81743,1.77353 -2.45485,2.38812l0.28798,-3.98957" fill="white"></path></g></svg></div>
                    </a></li>
                    <li class="social_icon" style="padding-left: 0px!important;padding-right: 0px!important;"><a target="_blank" class="text-white" href="https://www.instagram.com/arteno_official/?hl=en" id="instagram_share_url">
                        <div style="width: 30px; height: 30px;"><img src="https://toppng.com/uploads/preview/instagram-logo-circle-11549679754rhbcorxntv.png" alt="">
                    </a></li>
                    <li class="social_icon" style="padding-left: 0px!important;padding-right: 0px!important;"><a href="" target="_blank" class="text-white" id="twitter_share_url">
                        <div style="width: 30px; height: 30px;"><svg viewBox="0 0 64 64" width="30" height="30" class="social-icon social-icon--twitter "><g><circle cx="32" cy="32" r="31" fill="#00aced"></circle></g><g><path d="M48,22.1c-1.2,0.5-2.4,0.9-3.8,1c1.4-0.8,2.4-2.1,2.9-3.6c-1.3,0.8-2.7,1.3-4.2,1.6 C41.7,19.8,40,19,38.2,19c-3.6,0-6.6,2.9-6.6,6.6c0,0.5,0.1,1,0.2,1.5c-5.5-0.3-10.3-2.9-13.5-6.9c-0.6,1-0.9,2.1-0.9,3.3 c0,2.3,1.2,4.3,2.9,5.5c-1.1,0-2.1-0.3-3-0.8c0,0,0,0.1,0,0.1c0,3.2,2.3,5.8,5.3,6.4c-0.6,0.1-1.1,0.2-1.7,0.2c-0.4,0-0.8,0-1.2-0.1 c0.8,2.6,3.3,4.5,6.1,4.6c-2.2,1.8-5.1,2.8-8.2,2.8c-0.5,0-1.1,0-1.6-0.1c2.9,1.9,6.4,2.9,10.1,2.9c12.1,0,18.7-10,18.7-18.7 c0-0.3,0-0.6,0-0.8C46,24.5,47.1,23.4,48,22.1z" fill="white"></path></g></svg></div>
                    </a></li>
                </ul></center>
                <!--<center><ul class="social-icon-list">-->
                <!--    <li class="social_icon bg-fb" style="padding: 10px 19px 10px 19px!important;"><a href="" target="_blank" class="text-white" id="fb_share_url"><i class="fab fa-facebook-f"></i></a></li>-->
                <!--     <li class="social_icon bg-wp"><a href="" target="_blank" class="text-white" id="whatsapp_share_url"><i class="fab fa-whatsapp"></i></a></li>-->
                <!--     <li class="social_icon bg-tw"><a href="" target="_blank" class="text-white" id="twitter_share_url"><i class="fab fa-twitter"></i></a></li>-->
                <!--     <li class="social_icon bg-insta"><a href="" target="_blank" class="text-white" id="instagram_share_url"><i class="fab fa-instagram"></i></a></li>-->
                     
                <!--</ul></center>-->
             <!--</div>-->
             <style>
             
             label{
                 float:left!important;
             }
            @media only screen and (min-width: 600px){
                .icon_height {
                    height: 20.9px;
                    width: 21.9px;
                    transform: scale(1.5);
                    padding: 3px;
            }  
            
                .social-icon-list{
                    margin-left:15%;
                    /*margin-left:25%;*/
                }
            }
                @media only screen and (max-width: 600px) {
                    
                    #shareimage-logo{
                        height: 30px;
                        position: absolute;
                        left: 2%;
                        width: 30px;
                        top: 10%;
                    }
                        .webname{
                            color: black !important;
                            position: relative;
                            bottom: 15%;
                            font-size: 12px;
                            left: 34%;
                        }
                }
                 @media only screen and (min-width: 600px) {
                #shareimage-logo{
                    height: 30px;
                    position: absolute;
                    left: 2%;
                    width: 30px;
                    top: 10%;
                }
                .webname{
                    color:black !important; 
                    position:absolute;
                    bottom: 35%;
                    font-size: 12px;
                    right: 3%;
                }
                 }
             </style>
             <!--<div class="col-md-5 col-xs-5 col-5"><hr></div>-->
             <!--<div class="col-md-2 col-xs-2 col-2" style="padding: 10px;">OR</div>-->
             <!--<div class="col-md-5 col-xs-5 col-5"><hr></div>-->
             <!--<div class="col-md-12 col-xs-12 col-12"><label class="text-center" style="text-transform:uppercase;">Copy Link</label></div>-->
              <!--<div class="col-md-1 col-xs-1 col-1 text-center" style="padding:0;"><i class="fa fa-link link_icon"></i></div>-->
              <center><span id="copydata" style="color:green"></span></center>
              <div class="" style="padding: 15px;display: flex;">
                
                <input type="text" value="" class="form-control"  id="put_share_value" style="border-radius: 0px!important;border:1px solid #ebeced!important;padding-right:0px!important;font-size:18px;" readonly/>
                <div class="input-group-prepend" style="background:#ebeced!important">
                  <div class="input-group-text" onclick="copy_in_clipboard()" style="background:black; color:white;"><i class="fa fa-clone" style="font-weight:600" aria-hidden="true"></i></div>
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
                            padding: 5px 10px 5px 10px;background:white;border:none">
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
                            padding: 5px 10px 5px 10px;background:white;border:none">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body" id="product_size_qty" style="min-height:150px;">
                                    <div id="designer-cart-wrp" data-view="attributes" class="smooth" style="overflow:hidden!important;">
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
                                    <button class="btn btn-lg btn-facebook btn-block text-uppercase" onclick="fbLogin()"  type="button" style="color:white !important;border-radius:5px;" id="fbLoginLoader"><i class="fab fa-facebook-f mr-2"></i> Continue with Facebook</button>
                                    <!--<a href="<?=base_url('user_checkout')?>"><button class="btn btn-block text-uppercase border mt-2" type="button"  style="border-radius:5px;"> <i class="fas fa-user  mr-2"></i> Continue As Guest User</button></a>-->
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
        <div class="modal fade" id="guestloginotpmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                
                                <form class="form-signin" method="post" id="get_questlogin">
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
                                        <input type="email" id="questemail" class="form-control" placeholder="Email address" required autofocus> 
                                    </div>
                                    <div class="form-group"> 
                                        <label for="password">Password</label>
                                        <input type="password" id="questpassword" class="form-control" placeholder="Password" required> 
                                    </div>
                                    <div style="display:flex !important;">
                                        <a class="mt-2" href="<?=base_url('forgot_password')?>" style="font-size:12px;color:black;font-weight:600">Forgot your Password ?</a>
                                        <div class="custom-control custom-checkbox mb-3 padding-left" style="float:right !important; font-size:10px;"> 
                                            <!--<input type="checkbox" class="custom-control-input" id="customCheck1"> <label class="custom-control-label" for="customCheck1">Remember password?</label> -->
                                        </div>
                                    </div>
                                    <center> <button class="btn btn-md btn-primary  text-uppercase checkout-button" type="submit" id="questloginLoader">login</button></center>
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
                            <center><img src="<?= base_url()?>assets/logo/logo-min-3.png" alt="logo" style="height:35px; text-align:center; /* margin-bottom:12px */"></center>
                        </div>
                        <button type="button" data-dismiss="modal"  class="modal_remove_button" aria-label="Close"><span aria-hidden="true" style="font-size: 22px">&times;</span></button>
                    </div>
                    <div class="modal-body" style="padding: 0.6rem;">
                        
                        <div class="card card-signin" style="padding:0px;background:white!important">
                            <div class="card-body">
                                
                                <form  method="post" id="get_otp">
                                    <div class="col-auto">
                                          <label for="mobil">Enter Mobile Number</label>
                                          <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                              <div class="input-group-text">+91</div>
                                            </div>
                                            <input type="number" onkeypress="if(this.value.length>9)return false;" name="mobile" pattern="[6-9]{1}[0-9]{9}" title="Please enter valid Number" class="half-rounded form-control" id="mobile_number" minlength="10" maxlength="10" value="" required>
                                          </div>
                                          <span class="float-right" data-toggle="modal" data-dismiss="modal"   data-target="#loginotpmodal" style="cursor:pointer;font-weight:bold">Login with Email</span>
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
                            <center><img src="<?= base_url()?>assets/logo/logo-min-3.png" alt="logo" style="height:35px; text-align:center; /* margin-bottom:12px */"></center>
                        </div>
                        <button type="button" data-dismiss="modal" class="modal_remove_button" aria-label="Close"><span aria-hidden="true" style="font-size: 22px">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="card card-signin" style="background:white!important">
                            <div class="card-body" style="padding:0px">
                                
                                <form method="post" id="verify_otp" class="digit-group" data-group-name="digits" data-autosubmit="false" autocomplete="off">
                                    <p class="text-center  mb-2">Enter OTP sent to <span id="sent_otp_number"></span><span style="margin-left: 15px;font-size: 18px;" onclick="update_mobno()"><i class="fa fa-pencil-alt"></i></span></p>
                                    <label for="mobile">Enter OTP</label>
                                    <div class="form-group  mb-4" >
                                        
                                        <input type="hidden" id="mob_otp">
                                        <input type="number" id="digit-1" name="digit-1" data-next="digit-2" />
                                        <input type="number" id="digit-2" name="digit-2" data-next="digit-3" data-previous="digit-1" />
                                        <input type="number" id="digit-3" name="digit-3" data-next="digit-4" data-previous="digit-2" />
                                        <input type="number" id="digit-4" name="digit-4" data-next="digit-5" data-previous="digit-3" />
                                        <input type="number" id="digit-5" name="digit-5" data-next="digit-6" data-previous="digit-4" />
                                        <input type="number" id="digit-6" name="digit-6" data-next="digit-7" data-previous="digit-5" />
                                        <!--<input type="number" class="form-control" name="otp" id="otp_value" onkeypress="if(this.value.length>5)return false;" value="">-->
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
        <!-- otp verification Modal -->
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
                                
                                <form method="post" id="verifyemail_otp" class="digit-group" data-group-name="digits" data-autosubmit="false" autocomplete="off">
                                    <p class="text-center  mb-2">Enter OTP sent to <span id="email_value"></span></p>
                                    <label for="mobile">Enter OTP</label>
                                    <div class="form-group  mb-4" >
                                        
                                        <input type="hidden" id="email_otp">
                                        <input type="number" id="emaildigit-1" name="emaildigit-1" data-next="emaildigit-2" />
                                        <input type="number" id="emaildigit-2" name="emaildigit-2" data-next="emaildigit-3" data-previous="emaildigit-1" />
                                        <input type="number" id="emaildigit-3" name="emaildigit-3" data-next="emaildigit-4" data-previous="emaildigit-2" />
                                        <input type="number" id="emaildigit-4" name="emaildigit-4" data-next="emaildigit-5" data-previous="emaildigit-3" />
                                        <input type="number" id="emaildigit-5" name="emaildigit-5" data-next="emaildigit-6" data-previous="emaildigit-4" />
                                        <input type="number" id="emaildigit-6" name="emaildigit-6" data-next="emaildigit-7" data-previous="emaildigit-5" />
                                        <!--<input type="number" class="form-control" name="email_otp" id="email_otp_value" onkeypress="if(this.value.length>5)return false;" value="">-->
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
   <style>
       .close-mobile-popup{
           cursor:pointer;
       }
       
      
   </style>      
<script>
$('.close-mobile-popup').click(function(){
    $('.button-template-append').removeClass('custom-button-height');
    $('#template-view-show').hide();
})
$('#tmpModel').click(function(){
   $('#template-view-show').show();  
})
    $(document).on('click','.lumisex-android-close', function(){
     $('#lumise-color-picker-boxB').hide();
    //your code here

 });
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
    $('#guestloginotpmodal').modal({
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
//   function validate_quantity(){
//   var qty = $('#quantity_details').val();
//   var total_qty=parseInt(qty) +1;
//   alert(parseInt(total_qty));
//   var qty_total= parseInt(total_qty);
//   var validate_value=qty_total-1;
//   if(parseInt(total_qty)>5){
//       swal("Quantity limit is full",{
//                           icon: "warning",
//                           button: false,
//                           timer: 1200,
//                         });
//     $("#quantity_details").attr("value",validate_value);
//   }
//     }

    function add_wishlist(){
         $('#loginotpmodal').modal({show:true});
         $("#type").val('wishlist');
         $("#mobiletype").val('wishlist');
    }
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
                     $('#guestloginotpmodal').modal('hide');
                     
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
                                    document.getElementById('loginLoader').disabled = false;
                                    $("#loginLoader").html('LOG IN');
                                    
                                    $('#loginotpmodal').modal('hide');
                                    $('#guestloginotpmodal').modal('hide');
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
          $("#get_questlogin").submit(function(e){
            e.preventDefault();
            
            var email= $("#questemail").val();
            var password= $("#questpassword").val();
            var current_url='<?=$currentURL?>';
            document.getElementById('questloginLoader').disabled = true;
            $("#questloginLoader").html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');
            //   alert(email);
                $.ajax({
                url:"<?= base_url()?>home/login_with_email",
                method:"POST",
                data:{'email':email,'password':password},
                success:function(res){
                    if(res.trim()=="success"){
                        document.getElementById('questloginLoader').disabled = false;
                        $("#questloginLoader").html('LOG IN');
                         swal("Login successful.",{
                          icon: "success",
                          button: false,
                          timer: 1200,
                        });
                     
                     $('#loginotpmodal').modal('hide');
                     $('#guestloginotpmodal').modal('hide');
                     
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
                                   $('#guestloginotpmodal').modal('hide');
                                $('#emailotpverificationmodal').modal({show:true});
                                $('#email_value').html(res.trim());
                                $('#email_otp').val(res.trim());
                               }
                            }
                            });
                   }
                   else{
                       document.getElementById('questloginLoader').disabled = false;
                        $("#questloginLoader").html('LOG IN');
                         
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
            var digit_1=$("#emaildigit-1").val();
             var digit_2=$("#emaildigit-2").val();
             var digit_3=$("#emaildigit-3").val();
             var digit_4=$("#emaildigit-4").val();
             var digit_5=$("#emaildigit-5").val();
             var digit_6=$("#emaildigit-6").val();
             var get_email_otp_value=digit_1 + digit_2 + digit_3 + digit_4 +  digit_5 + digit_6;
            // var mobileno= $("#mob_otp").val();
            var otp_value= get_email_otp_value;
            //  alert(otp_value);
            var current_url='<?=$currentURL?>';
                $.ajax({
                url:"<?= base_url()?>home/verifyemail_otp",
               method:"POST",
                data:{'email':email,'otp':otp_value},
                success:function(res){
                    // alert(res);
                   if(res.trim()=="success"){
                        $('#emailotpverificationmodal').modal('hide');
                        window.location.href ='<?=base_url('sign_up')?>';
                     
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
             var digit_1=$("#digit-1").val();
             var digit_2=$("#digit-2").val();
             var digit_3=$("#digit-3").val();
             var digit_4=$("#digit-4").val();
             var digit_5=$("#digit-5").val();
             var digit_6=$("#digit-6").val();
             var get_otp_value=digit_1 + digit_2 + digit_3 + digit_4 +  digit_5 + digit_6;
            var mobileno= $("#mob_otp").val();
            var otp_value= get_otp_value;
            // alert(otp_value);
            var current_url='<?=$currentURL?>';
                $.ajax({
                url:"<?= base_url()?>home/verify_otp",
               method:"POST",
                data:{'mobile':mobileno,'otp':otp_value},
                success:function(res){
                    // alert(res);
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
                        window.location.href ='<?=base_url('sign_up')?>';
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
            // alert(mobno);
            $('#sent_otp_number').html(mobno);
            document.getElementById('verify_otp_button').disabled = false;
            $("#verify_otp_button").css("background-color", "#111");
                $.ajax({
                url:"<?= base_url()?>home/resend_otp",
                method:"POST",
                data:{'mobile':mobno},
                success:function(res){
                    // alert(res);
                   if(res==0){
                       swal("Something Went Wrong Try again later",{
                              icon: "error",
                              button: false,
                              timer: 1200,
                        });
                     
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
                $('#guestloginotpmodal').modal('hide');
                $('#mobileloginotpmodal').modal({show:true});
            }
            window.checkformobile = function() {
                  let mobilecheck = false;
                  (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
                  return mobilecheck; 
                }
               var ismobile=window.checkformobile();
               
            
                    var scrollvala=100;
                    var scrollvalb=100;
                    var scrollvalc=60;
                    var scrollvald=60;
                    var scrollvalx=0;
                    var scrollval_margin = 305;
                     var scrollval_margin_m = 150;
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
        //   scrollHeight = $(".designer-product-color").height()-scrollval_margin_m;
        // if(scrollvalx<=0)
        //     scrollvalx = scrollHeight;
        // else
        //     scrollvalx-=scrollvalc;
        // $("#mobile-scroller").animate({ scrollTop:scrollvalx }, "slow");
        scrollHeight = $(".designer-product-color").height()+scrollval_margin_m;
        if(scrollvalx<=0)
            scrollvalx = scrollHeight;
        else
            scrollvalx-=scrollvalc;
        $(".designer-product-color").animate({ scrollTop:scrollvalx }, "slow");
     }
     function Slider_color_next(){
        //   scrollHeight = $(".designer-product-color").height()-scrollval_margin_m;
        // //   alert(scrollHeight);
        // if(scrollvalx>=scrollHeight)
        //     scrollvalx = 0;
        // else
        //     scrollvalx+=scrollvald;
        // $("#mobile-scroller").animate({ scrollTop:scrollvalx }, "slow");

        scrollHeight = $(".designer-product-color").height()+scrollval_margin_m;
        if(scrollvalx>=scrollHeight)
            scrollvalx = 0;
        else
            scrollvalx += scrollvald;
        $(".designer-product-color").animate({ scrollTop:scrollvalx }, "slow");
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
      $(".counter_price").css("font-size", "12px");
      $(".product-currency").css("font-size", "12px");
      //checks if currentNumber reached numberTo
      (deltaPositive && currentNumber >= numberTo) || (!deltaPositive &&currentNumber<= numberTo) ? currentNumber=numberTo : currentNumber;
      this.text(parseInt(currentNumber));
      currentNumber == numberTo ? clearInterval(interval1) : currentNumber;  
      if(currentNumber == numberTo) {
        $(".counter_price").css("font-size", "11px");
        $(".product-currency").css("font-size", "11px");
        $this.attr('data-from', numberTo);
      }
    
    }
    interval1 = setInterval(changeNumber,changeTime);
  }
}(jQuery));

$(document).ready(function(){
    $('.counter_price').counter();
   
});
function close_model(){
    
    $('[data-pos="right"]').hide();
}
function copy_in_clipboard() {
  var copyText = document.getElementById("put_share_value");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  $('#copydata').html('Copied');
//   alert("Copied the text: " + copyText.value);
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
<!--Social login script start here-->
<script>

// Check user data to social login
function setSocialLogin(social_name, social_email){
    var current_url=window.location.search;
    $.post('<?= base_url()?>/home/process_login', {social_name: social_name, social_email: social_email}, function(res){
        document.getElementById('fbLoginLoader').disabled = false;
        document.getElementById('googleLoginLoader').disabled = false;
        $("#googleLoginLoader").html('<img width="20px" style="margin-bottom:3px; margin-right:5px;" alt="Google sign-in" src="https://www.arteno.in/assets/images/googlelogo.png"> Continue With Google');
        $("#fbLoginLoader").html('<i class="fab fa-facebook-f mr-2"></i> Continue with Facebook');
        if(res.trim()=="success"){
            swal("Login successful.", {
                icon: "success",
                button: false,
                timer: 1200,
            });
        window.location.href=window.location.search;
            
        } else {
            // swal("User not registered, Register first.",{
            //     icon: "error",
            //     button: false,
            //     timer: 1200,
            // });
            window.location.href ='<?=base_url('sign_up')?>';
        }
        return true;
    });
}
</script>
<script src="https://apis.google.com/js/api:client.js"></script>
<script>
  var googleUser = {};
  var startApp = function() {
    gapi.load('auth2', function(){
      // Retrieve the singleton for the GoogleAuth library and set up the client.
      auth2 = gapi.auth2.init({
        client_id: '1030813337250-m3et7v2p29a8dagrv5b5lv18p4s48e8e.apps.googleusercontent.com',
        cookiepolicy: 'single_host_origin',
        // Request scopes in addition to 'profile' and 'email'
        //scope: 'additional_scope'
      });
      attachSignin(document.getElementById('googleLoginLoader'));
    });
  };

  function attachSignin(element) {
    
    auth2.attachClickHandler(element, {},
        function(googleUser) {
            document.getElementById('googleLoginLoader').disabled = true;
            $("#googleLoginLoader").html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');
            setSocialLogin(googleUser.getBasicProfile().getName(), googleUser.getBasicProfile().getEmail());
        }, function(error) {
        //   alert(JSON.stringify(error, undefined, 2));
        });
  }
  startApp();
</script>
<!-- google login script end here here-->
<!--facebook login script start here-->
<!-- Initialize the JavaScript SDK -->
<script>
window.fbAsyncInit = function() {
    // FB JavaScript SDK configuration and setup
    FB.init({
      appId      : '5345967422144568', // FB App ID
      cookie     : true,  // enable cookies to allow the server to access the session
      xfbml      : true,  // parse social plugins on this page
      version    : 'v3.2' // use graph api version 2.8
    });
};

// Load the JavaScript SDK asynchronously
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

// Facebook login with JavaScript SDK
function fbLogin() {
    FB.login(function (response) {
        if (response.authResponse) {
            // Get and display the user profile data
            FB.api('/me', {locale: 'en_US', fields: 'id,first_name,last_name,email,link,gender,locale,picture'}, function (response) { 
                document.getElementById('fbLoginLoader').disabled = true;
                $("#fbLoginLoader").html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');
                setSocialLogin(response.first_name+' '+response.last_name, response.email);
            });
        } else {
            // alert("Something went wrong with Facebook Login.");
        }
    }, {scope: 'email'});
}
</script>
<!--facebook login script end here here-->
<script>
//         (function(){
//   function id(v){return document.getElementById(v); }
//   function loadbar() {
//     var ovrl = id("overlay"),
//         prog = id("progress"),
//         stat = id("progstat"),
//         img = document.images,
//         c = 0;
//         tot = img.length;

//     function imgLoaded(){
//       c += 1;
//       var perc = ((100/tot*c) << 0) +"%";
//       prog.style.width = perc;
//       stat.innerHTML = "Loading "+ perc;
//       if(c===tot) return doneLoading();
//     }
//     function doneLoading(){
//       ovrl.style.opacity = 0;
//       setTimeout(function(){ 
//         ovrl.style.display = "none";
//       }, 1200);
//     }
//     for(var i=0; i<tot; i++) {
//       var tImg     = new Image();
//       tImg.onload  = imgLoaded;
//       tImg.onerror = imgLoaded;
//       tImg.src     = img[i].src;
//     }    
//   }
//   document.addEventListener('DOMContentLoaded', loadbar, false);
// }());
    </script>
    <script>
            // function onLoad() { 
            //     var now = new Date().getTime();
            //     var page_load_time = now - performance.timing.navigationStart;
            //     console.log("User-perceived page loading time: " + page_load_time);
            // }
//             var width = 100; // width of a progress bar in percentage
//             var now = new Date().getTime();
//             // perfData = window.performance.timing, // The PerformanceTiming interface
//             var EstimatedTime = now - performance.timing.navigationStart; // Calculated Estimated Time of Page Load which returns negative value.
//             var time = parseInt((EstimatedTime/1000)%60)*100; //Converting EstimatedTime from miliseconds to seconds.

//             // Loadbar Animation
//             $(".loadbar").animate({
//                 width: width + "%"
//             }, time);

//             // Loadbar Glow Animation
//             $(".glow").animate({
//                 width: width + "%"
//             }, time);

//             // Percentage Increment Animation
//             var PercentageID = $("#precent"),
//             start = 0,
//             end = 100,
//             durataion = time;
//             animateValue(PercentageID, start, end, durataion);
//             function animateValue(id, start, end, duration) {
//             if(loader_running)
//                 return false;
//     var range = end - start,
//       current = start,
//       increment = end > start? 1 : -1,
//       stepTime = Math.abs(Math.floor(duration / range)),
//       obj = $(id);

//     var timer = setInterval(function() {
//         current += increment;
//         $(obj).text(current + "%");
//       //obj.innerHTML = current;
//         if (current == end) {
//             clearInterval(timer);
//         }
//     }, stepTime);
// }
        </script>
<script>
 function callColorpicker(){
    $('#designer-fill').blur();
    $('#designer-fill').trigger('click');
    
   
     
    
 }
  $( function() {
      
    $( "#fill-ops-sub" ).draggable();
  } );
  	
  </script>
<style>

.modal-open .modal, .modal.show {
    overflow-x: hidden;
    overflow-y: scroll!important;
}
.ui-draggable{
    cursor: move!important;
}
#fill-ops-sub{
    cursor: move!important;
}
/*    .main-content {*/
/*    min-height: 0%;*/
/*    background: #f5f5f5!important;*/
/*}*/

</style>
<script>
    $("div#designer-text-ext > span").click(function(){
        alert("hello");
        $(".colorFiller").show();
        
    });
    $(".fa-qrcode").click(function(){
         $('.colorFiller').show();
    });
    
</script>
<script>
window.addEventListener('load', function () {
if($('[data-tab="uploads"]').hasClass("active")){
    $('[data-tool="fill"]').hide();
}else{
    $('[data-tool="fill"]').show();
}
});



function select_cat($id) {
    // alert($id);
    document.getElementById("selected_category").value = $id;
    // alert(document.getElementById("selected_category").value);
}

window.mobileCheck1 = function() {
  let check = false;
  (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
  return check;
}
    
var is_mobile_device = window.mobileCheck1();
if(is_mobile_device) {
    // setInterval(function(){
    //     $(".custom_label_quantity").html("Qty: ");
    //     $(".custom_label_quantity").css("min-width", "45px !important");
    // }, 1);
    // setTimeout(function() {
    //     // alert("P");
    //     $(".custom_label_quantity").html("QTY: ");
    //     $(".custom_label_quantity").css("min-width", "45px !important");
    // }, 350);
}
</script>

<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->
<!--<script>-->
<!--    $('.owl-carousel').owlCarousel({-->
<!--        items:5,-->
<!--        loop:true,-->
<!--        margin:10,-->
<!--        merge:true,-->
<!--        responsive:{-->
<!--            678:{-->
<!--                mergeFit:true-->
<!--            },-->
<!--            1000:{-->
<!--                mergeFit:false-->
<!--            }-->
<!--        }-->
<!--    });-->
<!--</script>-->
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links with the class scroll
  $("ul.designer-product-color").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('.designer-product-color').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
<script>
    $(function(){
	
	var $window = $('#mobile-scroller');		//Window object
	
	var scrollTime = 1.2;			//Scroll time
	var scrollDistance = 600;		//Distance. Use smaller value for shorter scroll and greater value for longer scroll
		
	$window.on("mousewheel DOMMouseScroll", function(event){
		
		event.preventDefault();	
										
		var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
		var scrollTop = $window.scrollTop();
		var finalScroll = scrollTop - parseInt(delta*scrollDistance);
			
		TweenMax.to($window, scrollTime, {
			scrollTo : { y: finalScroll, autoKill:true },
				ease: Power1.easeOut,	//For more easing functions see https://api.greensock.com/js/com/greensock/easing/package-detail.html
				autoKill: true,
				overwrite: 5							
			});
					
	});
	
});
$(document).bind(
   'touchmove',
   function(e) {
     e.preventDefault();
   }
);

</script>
<script>
$('.hamburger').click(function() {
  $( this ).toggleClass( "active" );
});
    $('#closemainmenu').click(function(){
        
       $('.hamburger').removeClass( "active");
    })
   
</script>
        <!--script for otp field-->
      <script>
        $('.digit-group').find('input').each(function() {
	$(this).attr('maxlength', 1);
	$(this).on('keyup', function(e) {
		var parent = $($(this).parent());
		
		if(e.keyCode === 8 || e.keyCode === 37) {
			var prev = parent.find('input#' + $(this).data('previous'));
			
			if(prev.length) {
				$(prev).select();
			}
		} else if((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 65 && e.keyCode <= 90) || (e.keyCode >= 96 && e.keyCode <= 105) || e.keyCode === 39) {
			var next = parent.find('input#' + $(this).data('next'));
			
			if(next.length) {
				$(next).select();
			} else {
				if(parent.data('autosubmit')) {
					parent.submit();
				}
			}
		}
	});
});
        $('.emaildigit-group').find('input').each(function() {
	$(this).attr('maxlength', 1);
	$(this).on('keyup', function(e) {
		var parent = $($(this).parent());
		
		if(e.keyCode === 8 || e.keyCode === 37) {
			var prev = parent.find('input#' + $(this).data('previous'));
			
			if(prev.length) {
				$(prev).select();
			}
		} else if((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 65 && e.keyCode <= 90) || (e.keyCode >= 96 && e.keyCode <= 105) || e.keyCode === 39) {
			var next = parent.find('input#' + $(this).data('next'));
			
			if(next.length) {
				$(next).select();
			} else {
				if(parent.data('autosubmit')) {
					parent.submit();
				}
			}
		}
	});
});

    </script>

<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>

<input type="hidden" id="selected_category" value="0" />
</body>
</html>
<?php endif;