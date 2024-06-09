<?php include('includes/header.php')?>
<?php
    $d_id = $this->session->userdata('designer_id');
    $designer = designer_profile($d_id);
    $d_slug = ($designer->slug!="")?$designer->slug:$designer->id;
    $designer_share_url = base_url($_SERVER['REQUEST_URI']);
    $fb_designer_share_url = "https://www.facebook.com/sharer/sharer.php?u=".urlencode($designer_share_url);
    $telegram_designer_share_url = "https://telegram.me/share/?url=".urlencode($designer_share_url);
    $twitter_designer_share_url = "https://twitter.com/share?url=".urlencode($designer_share_url);
    $whatsapp_designer_share_url = "https://web.whatsapp.com/send?text=".urlencode($designer_share_url);
    $instagram_designer_share_url = "https://www.instagram.com/arteno_official/?hl=en";
     
?>
<!--<link rel="stylesheet" href="<?= base_url() ?>assets/css/categorypage.css">-->
 <link href="<?= base_url()?>assets/fonts/proximanova-bold_Sy8qqBKTN.otf?family=ProximaNova&display=swap" rel="stylesheet">
  <style>
   .modal-open{
      padding-right:0px !important;
      overflow-y:scroll !important;
      overflow-x:hidden;
      display:block;
  }
  .modal-open ::-webkit-scrollbar {
    width: 20px;
  height: 8px;
  background-color: transparent; /* or add it to the track */
}
 .modal-open::-webkit-scrollbar-thumb {
    background: transparent;
}
  #loginotpmodal .card-body{
      background:white !important;
  }
  #guestloginotpmodal .card-body {
    background: white !important;
  }
  .btn-wishlist.bottom-wish{
      margin-top:0px!important;
  }
  .mt-60{
      margin-top:60px;
  }
  .product-page-gallery-preview .item img {
    width: 80px!important;
}
.size-chart{
    font-size:14px !important;
    line-height:35px;
}

  }
  .share_modal_top{
    width: 380px!important;
   
}
#share-image-product{
height: 300px;
width:100%;    
}
#tempsize,.input-counter{
    margin-top:10px;
    margin-left: -6px;
}

.visible-xs{
    display:none!important;
}
.variation-area .varialtion-size{
    margin-right:10px;
}
del{
    color: lightgrey!important; font-size: 18px!important; font-weight: normal!important;
}

 @font-face {
        font-family:'ProximaNova';
        font-style:normal;
        font-weight:400;
        font-display: swap;
        src:url('<?=base_url()?>assets/fonts/Proxima-Nova-Regular_rJLcqSYpV.otf') format('opentype')
    }
    @font-face {
        font-family:'ProximaNova';
        font-style:normal;
        font-weight:700;
        font-display: swap;
        src:url('<?=base_url()?>assets/fonts/proximanova-bold_Sy8qqBKTN.otf') format('opentype')
    }
  @font-face {
        font-family:'ProximaNova', sans-serif!important;
        font-style:normal;
        font-weight:400;
        font-display: swap;
        src:url('<?=base_url()?>assets/fonts/Proxima-Nova-Regular_rJLcqSYpV.otf') format('opentype')
    }
    @font-face {
        font-family:'ProximaNova', sans-serif!important;
        font-style:normal;
        font-weight:700;
        font-display: swap;
        src:url('<?=base_url()?>assets/fonts/proximanova-bold_Sy8qqBKTN.otf') format('opentype')
    }
  .share_modal_content {
        border-radius: 40px!important;
        border: none!important;
        width: 370px;
        left: 80px;
        }
  .share_modal_content .modal-body{
        padding-bottom:40px;
        }
        
   
	.product-page-gallery-preview .slick-list{
	    margin-left:5px;
	 
	}

.customer-love .luxury-img {
    border-radius: 50% !important;
    
}
	.heading-title1 {
    font-size: 2rem!important;
}
  .body{
      background:white;
  }
  .p-80{
      margin-top:60px;
      padding:80px;
  }
  .products-col-item{
      padding-left:0px;
  }
  .btn-light{
      box-shadow:0px!important;
}
.social{
    padding-left: 0;
    list-style-type: none;
    margin-bottom: 0;
    margin-top: 15px;
}
.social li {
    display: inline-block;
    margin-right: 4px;
}
.social li a i {
    margin-top: 10px;
}
.social li a {
    color: white;
    border: 1px solid #eee;
    width: 35px;
    height: 35px;
    font-size: 13px;
    line-height: 35px;
    text-align: center;
    border-radius: 50%;
}
    .single-product-box .product-content .btn-edit {
	    padding: 3px 15px !important;
		border-radius: 20px!important;
		font-size: 12px;
		text-transform:uppercase;
		text-align:center !important;
		font-weight:500;
		border:1px black !important;
	}
	.btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active, .show>.btn-primary.dropdown-toggle {
        background-color: transparent ;
        color: #222;
        border-color: #222 !important;
    }
    .btn-primary:hover, .btn-primary:focus {
        /* -webkit-box-shadow: unset; */
        /* box-shadow: unset; */
        background-color: transparent;
        color: #111;
        border-color: #111;
    }

 @media only screen and (min-width: 767px){
      
      .cart{
        /*min-width: 115px;*/
        /*width: 115px!important;*/
        /* height: 34px;*/
      }
      .btn-light{
          font-size:10px;
      }
    
 }
  @media only screen and (max-width: 767px){
      .share_modal_top{
      margin-top: 68%!important;
      }
      .slick-dots {
          bottom:0px!important;
      }
      .customer-love{
          font-size: 16px;
        margin-bottom: 6px;
        color:#666;
      }
      .slick-list{
	    margin-left:0px !important;
	}
	.products-page-gallery .product-page-gallery-preview .slick-slide{
	    width:60px !important;
	}
.products-collections-listing .products-col-item {
    padding-left: 5px;
    padding-right:5px;
    margin-top: 0px;
}
    .products-collections-listing {
    margin-left: 10px;
    margin-right: 10px;
}
  }
  
  /*common all size screen css*/
   .wishlist-compare-btn .d-flex .btn-wishlist{
        height:45px;
        width:45px;
        font-size: 20px!important;
    }
    .wishlist-compare-btn .d-flex .btn-wish{
        margin-top:5px;
    }
  .products-details-area{
    margin-top:100px;  
  }
   .why-love li {
        font-weight: 500;
        line-height: 30px;
    }
    .why-love ul {
    	  list-style-image: url('<?= base_url()?>assets/images/61222.png');
    }
    .card-header {
        	font-size: 20px;
        	font-weight: 600;
    }
    
    .variation-value {
        	font-weight: 500;
        	font-size: 15px;
    }
    
    .box {
        	box-shadow: 0px 0 25px 0 rgba(0, 0, 0, 0.1);
        	padding: 20px 30px;
        	transition: all ease-in-out 0.4s;
        	background: #fff;
        	border: 1px solid rgb(212, 212, 212);
    }
    .cart{
        min-width:121px;
        
    }
    .top-text h6 {
        	color: rgb(153, 150, 150);
        	font-size: 20px;
    }
    --root{
        --font-family
    }
    
    .size-list ul {
    	    list-style: none;
    }
    
    .size-list ul li {
        	display: inline-block;
        	padding: 10px;
    }
    
    #si {
        	font-size: 20px;
        	color: #000;
    }
    
    .size-list ul li a {
        	color: rgb(70, 68, 68);
        	border: 1px solid rgb(112, 110, 110);
        	border-radius: 50%;
        	padding: 10px 14px;
        	text-decoration: none;
        	font-size: 10px;
    }
    
    .size-list ul .active a {
        	color: #fff;
        	background-color: #000;
    }
    
    .size-list ul li:hover a {
        	color: #fff;
        	background-color: rgb(36, 35, 35);
    }
    
    .quantity-list ul {
    	    list-style: none;
    }
    
    .quantity-list ul li {
        	display: inline-block;
        	padding: 15px;
    }
    
    .quantity-list ul li a {
        	color: rgb(70, 68, 68);
        	border: 1px solid rgb(112, 110, 110);
        	border-radius: 50%;
        	padding: 10px 16px;
        	text-decoration: none;
        	font-size: 12px;
    }
    
    .quantity-list ul .active a {
        	color: #fff;
        	background-color: #000;
    }
    
    .quantity-list ul li:hover a {
        	color: #fff;
        	background-color: rgb(36, 35, 35);
    }
    
    #one {
        	color: #fff;
        	border: 1px solid rgb(112, 110, 110);
        	border-radius: 20%;
        	padding: 10px 16px;
        	text-decoration: none;
        	font-size: 12px;
        	background-color: rgb(27, 27, 27);
    }
    
    .box-img {
        	width: 100%;
    }
    
    .box-img img {
    	    width: 100%;
    }
    
    .btn a {
        	color: rgb(66, 66, 66);
        	font-weight: bold;
        	text-decoration: none;
    }
    
    .mt-10 {
    	    margin-top: 80px !important;
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
            	height: 25px;
            	color: #222;
            	outline: 0;
            	display: block;
            	border: none;
            	background-color: #f8f8f8;
            	text-align: center;
            	width: 55px;
            	font-size: 17px;
            	margin-left:2px;
            	font-weight: 600;
            	margin-top: 3px;
    }
    
   
    
    input[type="radio"] {
        	height: 0px;
        	width: 0px;
        	visibility: hidden;
    }
    
    input[type="radio"]:checked+label {
        	background: black;
        	transition: .3s;
        	color: white!important;
        	background:black!important;
        	font-weight: 600;
    }
    
    
    
    .form-group {
    	    margin-bottom: 0px;
    }
    .sizes {
            height: 30px;
            width: 30px;
            border: 1px solid lightgrey;
            border-radius: 50%;
            text-align: center;
            vertical-align: middle;
            padding: 5px;
            font-size: 12px;
        }
    .counter-btn{
    margin-left: 10px;
    margin-right: 10px;
    height: 30px;
    width: 30px;
    padding: 9px;
    padding-top:7px;
    border: 1px solid lightgrey;
    border-radius: 50%;
    font-size: 12px;
    vertical-align: middle;
    text-align: center;
    }
    .form-group .xxl-size {
    padding: 2px!important;
    padding-top: 5px!important;
}
    
    
    .b-right {
    	    border-right: 2px solid lightgray;
    }
    
    
    /
    
    .cart-primary {
    	    font-weight: 600;
    }
    .form-control:focus{
            box-shadow:none!important;
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
    .p-detail table {
        
        	border: 1px solid lightgrey;
        	margin: auto;
    }

    .p-detail table th,
    td {
    	    padding: 8px;
    }
    
    .p-detail table td p {
    	    color: black;
    }
    .variation-data-header{
        display:flex;
    }
    .product-card {
    	    /*background:;*/
    }
    
    .product-page-gallery-main .item img {
    	    height: 350px;
    }
    
    .product-page-gallery-preview .item img {
        	height: 90pximportant;
        	/*width: 90px!important;*/
    }
    
    .nav_items {
        	color: #666!important;
        	line-height: 1.8;
        	font-size: 14px;
        	display: inline;
    }
    
    .price-custum-margin {
    	    margin-top: 40px;
    }
    
    
    
    input[type="radio"] {
        	height: 0px;
        	width: 0px;
        	visibility: hidden;
    }
    
    
    input[type="radio"]:checked+label {
    background: black!important;
    transition: .3s;
    color: white!important;
    font-weight: 600;
}
    
    .labelsize {
    	height: 60px;
    	width: 70px;
    	border-radius: 5px;
    	padding: 8px;
    }
    
    
    
    .btn-wishlist {
    	/*height: 25px;*/
    }
    .nice-select .option:hover,
    .nice-select .option.focus,
    .nice-select .option.selected.focus {
    	background-color: transparent;
    }
    
    .btn-heart {
    	border-radius: 50%;
    	background: none;
    	border: 1px solid rgb(144, 161, 181);
    	padding: 7px 5px 5px 7px;
    	font-size: 23px;
    	height: 40px;
    	width: 40px;
    	box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075)!important;
    }
    
    .fa-star {
    	color: #f1ed6c;
    }
    
    .mt-10 {
    	margin-top: 10px;
    }
    
    .mt-20 {
    	margin-top: 20px;
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
    	width: 190px;
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
    .product-details-content .wishlist-compare-btn{
        margin-top:45px;
        float:right;
        padding-right:12px;
    }
    
    .red_label {
    	font-size: 10px;
    }
    
    .slick-track {
    	display: flex !important;
    }
    
    .slick-slide {
    	height: inherit !important;
    }
   
    
    .table-width {
    	width: 230px !important;
    }
    
    .productDetail .p-detail-price{
        font-size: 40px!important;
        line-height: 42px;
        color: black;
        margin-top: 20px;
        display: inline-block;
        font-weight: bold;
        font-family:var(--font-family);
    }
    .productDetail .p-detail-price,.p-detail-del-price,.p-detail-offer-price{
        font-family:var(--font-family);
    }
    .p-detail-offer-price{
        font-size: 18px;
        font-weight: normal;
        line-height: 42px;
        color: rgb(174, 3, 3)!important;
    }
    .productDetail span{
        font-family:var(--font-family);
    }
    
    .wishlist-color {
    	color: rgb(144, 161, 181) !important;
    	font-size: 13px;
    }
    
    .wishlist-button {
    	border-radius: 50%;
    	background: none;
    	border: 1px solid rgb(144, 161, 181);
    	padding: 6px 6px 5px 5px;
    	font-size: 23px;
    	height: 25px;
    	width: 25px;
    	box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075)!important;
    }
    
    
    /*custum button css*/
    .btn-wishlist{
    /*height:32px!important;*/
    height: 42px!important;
    width:40px!important;
    }
    .single-product-box .product-content .btn-wish .btn-wishlist{
        height:32px !important;
        font-size:20px !important;
    }
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
    
    .custum-radio input[type='radio']:checked+label {
    	background: black;
    	color: white;
    	/*padding:20px;*/
    }
    
    .custum-radio input[type='radio'] {
    	display: none;
    }
    
    .custum-select-radio1 {
    	margin-left: 0px;
    	border: 1px solid #f5f5f5;
    	padding: 11px 20px;
    	font-size: 14px;
    }
    
    .custum-radio1 input[type='radio']:checked+label {
    	background: black;
    	color: white;
    	/*padding:20px;*/
    }
    
    .custum-radio1 input[type='radio'] {
    	display: none;
    }
    
    @media only screen and (max-width: 600px) {
        .single-product-box .product-content .btn-wish .btn-wishlist{
        height:28px !important;
        font-size:18px !important;
    }
    .tablet-hidden-wish-button{
        display:none;
    }
    
        .mobilecart{
            height:18px!important;
            width:18px!important;
        }
        .product-page-gallery-preview {
            display:none;
        }
        .productDetail .p-detail-price{
        font-size: 20px!important;
            
            
        }
        .detail-bg-image{
            height: inherit!important;
        }
        .variation-area .varialtion-size{
            margin-right:0px;
        }
        .variation-value{
            margin-left:20px;
        }
        .visible-xs{
            display:block;
        }
        .luxury-img{
            height:80px;
            width:80px;
        }
        
        .products-page-gallery .product-page-gallery-main .slick-slide img{
            width:80%!important;
            margin:auto!important;
        }
        .insta_actions {
            text-align: center;
            padding: 10px;
            margin-bottom: 30px;
            padding-bottom: 40px;
        }
        .products-page-gallery{
            background:#ebeced!important;
        }
        .insta_actions .btn {
            padding: 10px 10px!important;
            font-size: 12px!important;
        }
        .input-counter span {
            position: relative;
            background-color: transparent;
            cursor: pointer;
            color: #000000;
            padding: 9px;
            width: 30px;
            font-size: 11px;
            height: 30px;
            line-height: 50px;
            -webkit-transition: .5s;
            transition: .5s;
        }
        
        .slick-dots li button:before{
            font-size: 12px!important;
        }
        .slick-dots li.slick-active button:before {
            opacity: .75;
            font-size: 15px!important;
            color: #000;
        }
    	.desktop-border-right {
    		border-right: 0px;
    	}
    	
        #tempsize{
            margin-top:3px;
        }
    	.sizes {
            height: 30px;
            width: 30px;
            border: 1px solid lightgrey;
            border-radius: 50%;
            text-align: center;
            vertical-align: middle;
            padding: 5px!important;
            font-size: 12px;
        }
        .input-counter input {
            height: 30px!important;
            margin-top: 3px;
            margin-top: 3px;
            
        }
    }
  
   
   
   
    .variation-value {
        font-weight: 500;
        font-size: 20px;
    }
    	.mobil-padding-0 {
    		padding: 0px!important;
    	}
    	.custum-select-radio1 {
    		padding: 5px 10px;
    		font-size: 12px;
    	}
    }
    
    .share-button {
    	padding: 1px 8px 8px 15px;
    	border-radius: 50%;
    	background: #fff;
    }
    
    .share-button img {
    	border: 1px solid lightgrey;
    	height: 35px;
    	/*font-size:12px;*/
    	width: 35px;
    	border-radius: 50%;
    	cursor: pointer;
    	padding:4px;
    }
    
    .share-button-mobile {
    	border-radius: 50%;
    	
    }
    
    .share-button-mobile img {
    	border: 1px solid lightgrey;
    	height: 35px;
    	/*font-size:12px;*/
    	width: 35px;
    	border-radius: 50%;
    	cursor: pointer;
    	padding:8px;
    }
    
    .wish-button {
    	height: 35px;
    	width: 35px;
    	border: 1px solid lightgray;
    	border-radius: 50%;
    	/*padding: 7px 9px;*/
    	/*padding:9px 7px;*/
    	padding: 7px;
    	vertical-align: middle;
    	text-align: center;
    	/*font-size: 15px;*/
    	font-size:19px;
    	cursor: pointer;
    }
    .stock-btn{
      color: green;
        font-size: 18px;
        margin-bottom: 5px;
    }
    .single-product-box .product-content h3 a{
        font-size: 14px;
        color: black;
        line-height: 15px;
        text-overflow: ellipsis;
        overflow: hidden;
        height: 20px;
        text-transform: capitalize;
        font-weight: bold;
        margin: 0px;
        /*font-family: ProximaNova600;*/
    }
    .single-product-box .designer_area{
        bottom:105px;
    }
 /* Extra small devices (phones, 600px and down) */
  @media only screen and (max-width: 600px) {
     
    
   
      .main_product{
            font-size: 26px!important;
            line-height: 28px!important;
            margin-bottom: 5px;
            margin-top:-5px;
        }
        .form-group .xxl-size {
            padding: 3px!important;
            padding-top: 6px!important;
            font-size: 11px!important;
        }
      .productDetail .p-detail-price{
                font-size: 25px!important;
                line-height: 28px!important;
                margin-top: 0px!important;
        }
    .wishlist-compare-btn .btn-wish{
        width: 100%!important;
        float: left;
    }
     .partner-area .container{
    padding-left: 4px !important;
    padding-right: 16px !important;
    overflow: hidden;
  }
 
  .bg-text {
    position: relative !important;
     top: 0 !important; 
     left: 0 !important; 
     transform: translate(0%, 0%)!important; 
     z-index: 2; 
    width: 100% !important;
    margin-top: 39px;
}
    .p-80{
        padding:0px;
    }
    .container-fluid{
      padding-left:0px;   
      padding-right:0px;   
    }
    .product-page-gallery-preview {
        
    }
    .product-page-gallery-main .item img {
        height: 300px!important;
    }
    .cart-primary {
        font-size: 12px!important;
    }
    .single-footer-widget {
        margin-left: 30px;
    }
	.price-custum-margin {
		margin-top: 10px;
	}
	.size-box .col-md-2 {
		padding-right: 5px;
		padding-left: 5px;
	}
	.banner-bg1 .container .card .card-body {
		padding-left: 5px!important;
		padding-right: 5px!important;
	}
	.product-card .product-content {
		margin-top: 0px;
		padding: 8px;
	}
	.red_label {
		top: 3px;
	}

	
	.container,
	.card-body {
		padding-left: 0px !important;
		padding-right: 0px !important;
		overflow: hidden;
	}
	.btn-wishlist {
        border-radius: 50%;
        background: 0 0;
        border: 1px solid #d3d3d3;
        padding: 0px 0px 0px 0px!important;
        font-size: 16px!important;
    }
	.single-product-box .product-content .btn-edit {
	    padding: 2px 15px !important;
		border-radius: 20px!important;
		font-size: 10px;
		text-align:center !important;
		font-weight:500;
	}
	
	.mobile-display {
		display: none;
	}
	.custum-category-padding .col-6 {
		/*border-left: 0.5px solid rgb(212, 213, 217);*/
		/*border-right: 0.5px solid rgb(212, 213, 217);*/
		/*border-bottom: 0.5px solid rgb(212, 213, 217);*/
	}
	.footer-area {
		display: none;
	}
	
}
.card{
    border:none!important;
}
/* Small devices (portrait tablets and large phones, 600px and down) */
@media only screen and (max-width: 600px) {
 
    .mobile-three-dots {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    }
    .shadow-sm,.bg-shadow{
    box-shadow:none!important;
    }
    .product-details-content{
        /*margin-top:50px;*/
        padding-left:15px;
        padding-right:15px;
    }
    .mobile-right-no{
        margin-right: 0px;
        margin-left: -6px;
    }
    .luxury-design-text {
        font-size: 11px;
        font-weight: 700;
        color: black;
    }
    
    .mobile-share-icon img{
        height: 45px;
        width: 45px!important;
        border-radius: 50%;
        cursor: pointer;
        margin-top:0px;
    }
}
/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {
    .product-details-content{
        margin-top:8px;
    }
    .mobile-share-icon img{
        
        height: 50px;
        width: 50px!important;
        border-radius: 50%;
        cursor: pointer;
        margin-top: -7px;
    }
    .single-product-box .product-content .product-price {
        margin-top: 4px;
        margin-bottom: 3px;
    }
}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {
    .product-details-content{
        margin-top:50px;
    }
    .no-gutter{
        padding-left:0px;
        padding-right:0px;
    }
}

/* Large devices (laptops/desktops, 992px and up) */
/*for iphone pro tablet */
@media only screen and (min-width: 992px) {
    .product-details-content{
        margin-top:50px;
    }
    .custom-padding-m{
        padding-right:0px;
    }
    .tablet-content-detail{
        max-width:53.333333%!important;
    }
    .only-tablet-size{
        display:none!important;
    }
    .products-page-gallery{
        margin-left: 13px!important;
    }
}

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
    .product-details-content{
        margin-top:50px;
    }
    .products-page-gallery {
        max-width:500px;
        width:400px;
        border:1px solid #ddd;
        margin:auto;
        
    }
    .card,.card-body{
        background:#f5f5f5!important;
    }
    .container-fluid{
        padding-left:40px;
        padding-right:40px;
    }
    .no-gutter{
        padding-left:12px;
        padding-right:12px;
    }
    .detailed-content{
        margin-right:15px;
    }
}
@media (min-width: 1200px){
.only-tablet-size{
    display:none!important;
}
}
@media (min-width: 1100px){
.only-tablet-size{
    display:none!important;
}
}
.product-page-gallery-preview .slick-current img{
    border: 2px solid black;
}           
/*.btn-edit {*/
/*    border-radius: 5px!important;*/
    /*color: #dbb258;*/
/*    text-align:center;*/
/*    font-weight: 600;*/
/*}*/
.btn-primary:hover, .btn-primary:focus {
    /*background-color: black;*/
    /*color: #111;*/
    /*border-color: #111;*/
}
</style>
<?php 
 $ss_image = "";
            $screen_shots = json_decode($templete->screenshot);
            if($templete->no_of_stages==2){
                $ss_image = $screen_shots->front;
            }else{
                 $ss_image = $templete->screenshot;
            }
            
    $leftm="0";
    if($templete->product_base==4){
        $leftm="-20%";
    }elseif($templete->product_base==3){
        $leftm="-8%";
    }elseif($templete->product_base==2){
        $leftm="-8%";
    }
?>

<style>

.main-product-name{
        font-size: 35px;
    line-height: 35px;
    margin-bottom: 10px;
    font-weight: bold;
    margin-top: 0px;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
}
.product-background{
    background-image:url('<?=$ss_image ?>');
    object-fit: cover;
    z-index: 0;
    background-color:<?=$templete->color?>;
    
    width:100%;
    background-position: center center;
    background-repeat: repeat;
    background-size: cover;
}
.iLKqfz {
    position: absolute;
    width: 100%;
    top: 0px;
    left: 0px;
    object-fit: cover;
    z-index: 0;
    filter: blur(15px);
    opacity: 0.8;
    height: 100%;
    background-position: center center;
    background-repeat: repeat;
    background-size: cover;
    transform: scale(1.5);
}
.percentage-off{
        line-height: 42px;
    color: rgb(174, 3, 3)!important;
    font-size: 18px;
    font-weight: normal;
}
body{
    overflow-x:hidden!important

}
 .bg-image {
    /*background-image: url("https://cdn.toesmith.com/toesmith/upload-items/upload_EOCAE5zV.jpg");*/
    background-image: url("<?= $ss_image ?>"); 
    width: 100%!important;
    top: 0px;
    height:500px!important;
    left: 0px;
    object-fit: cover;
    z-index: 0;
    filter: blur(15px);
    opacity: 0.8;
    height: 100%;
    
    background-position: top;
    background-repeat: repeat;
    background-size: cover;
    transform: scale(1.5)!important;
    overflow:hidden!important;
    /*filter: blur(8px);*/
    /*-webkit-filter: blur(8px);*/
    /*width: 100%;*/
    /*top: 0px;*/
    /*left: 0px;*/
    /*background-size:cover!important;*/
    /*object-fit:inherit!important;*/
    /*z-index: 0;*/
    /*opacity: 0.8;*/
    /*height: 100%;*/
    /*background-repeat: no-repeat;*/
}
.social-icon-list {
    list-style-type: none;
    display: flex;
     margin-left: 25%;
    padding: 0px!important;
}
.social_icon {
    padding: 10px 15px 10px 15px;
    border-radius: 50%;
    margin-right: 20px;
    color: #f95
    font-size: 18px;
}
.bg-text {
 position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 85%;
 
}
@media only screen and (min-width:1200px){
  .bg-text {
      width:100%;
  }   
}
@media  (min-width:1500px){
    .bg-text {
        width:85%;
    }
}
.varialtion-quantity{
    margin-left:5px;
    
}
.products-page-gallery .product-page-gallery-preview {
    margin-top: 10px;
    left: -20%!important;
    margin-bottom: 8px;
}
.slick-dotted.slick-slider{
    margin-bottom:0px!important;
}
.product-page-gallery-preview .slick-track{
    width:auto!important;
    left:<?= $leftm ?>!important;
}
.product-page-gallery-preview .slick-list.draggable{
    padding: 0px!important;
}
.variation-value {
    font-weight: 500;
    font-size: 20px;
    font-family: ProximaNova, sans-serif !important;
}
.bg-shadow{
    /*-webkit-box-shadow: inset 0px -2px 15px 7px rgba(0,0,0,0.75);*/
    /*-moz-box-shadow: inset 0px -2px 15px 7px rgba(0,0,0,0.75);*/
    /*box-shadow: inset 0px -2px 15px 7px rgba(0,0,0,0.75);*/
    
   box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.46);
    -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.46);
    -moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.46);
}

.product-details-content .price span{
    font-family: ProximaNova, sans-serif !important; 
}
.main_product{
    font-size: 35px;
    line-height: 35px;
    margin-bottom: 10px;
    font-weight: bold;
    margin-top: 0px;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
     font-family: ProximaNova, sans-serif !important;
    
}

.size-chart{
    font-size:20px;
    text-decoration:underline!important;
    cursor:pointer;
}

.detail-bg-card {
            padding: 30px 0px;
            position: relative;
            overflow: hidden;
        }

        .detail-bg-image {
            position: absolute;
            width: 100%;
            top: 0px;
            left: 0px;
            object-fit: cover;
            z-index: 0;
            filter: blur(15px);
            opacity: 0.8;
            height: 100%;
            background-position: center center;
            background-repeat: repeat;
            background-size: cover;
            transform: scale(1.5);
        }

        
.designer-label{
   
    margin-top: 40px;
    margin-left:20px;
    padding-right: 20px;
}


.mt-30{
    margin-top:30px!important;
} 
.ihLkIO {
   text-align: center;
    height: 38px;
    line-height: 34px;
    border-radius: 21px;
    background: black;
    color: white;
    font-size: 16px;
    font-weight: bold;
    padding: 2px 21px;
}
}
.customize-button{
    
}
.slick-dots li button:before {
    font-family: slick;
    font-size: 6px;
    line-height: 20px;
    position: absolute;
    top: 0;
    left: 0;
    width: 20px;
    height: 20px;
    content: '•';
    text-align: center;
    opacity: .25;
    /*color: rgba(0, 0, 0, 0.90)!important;*/
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.variation-value1{
    color:black;
}
.modal-body .size-table th {
    border:1px solid #dee2e6!important;
}
.modal-body .size-table td {
    border:1px solid #dee2e6!important;
}
@media only screen and (max-width: 600px){
.slick-dots li button:before {
    font-size: 7px!important;
}
.card{
        background:#f5f5f5!important;
    }
.variation-area{
    display:block!important;
}
.varialtion-quantity{
    margin-left:0px;
    
}
/*.input-counter{*/
/*    margin-top:3px;*/
/*}*/
.hidden-xs{
    display:none!important;
}
.mt-30{
    margin-top:0px!important;
}
.slick-dots li.slick-active button:before {
    opacity: .75;
    font-size: 10px!important;
    color: #707070;
    
    
}
.slick-dots li{
    margin:0px!important;
}

}
.modal-backdrop {
 z-index: -1!important;
}
.bg-fb {
	background: #3b5998;
}

.bg-tw {
	background: #00aced;
}

.bg-wp {
	background: #2cb742;
}
.bg-insta {
	background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
	background: -webkit-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
	background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
}
#shareimage-logo {
    height: 30px;
    position: absolute;
    left: 7%;
    width: 30px;
    top: 6%;;
}
.modal_remove_button {
    position: absolute;
    top: 25px;
    right: 25px
}
.webname {
    color: black !important;
    position: absolute;
    bottom: 40%;
    font-size: 12px;
    right: 6%;;
}
.modal-body .table td, .table th {
    padding: 10px 5px;{
}
 .btn{
            -webkit-box-shadow: 0 2px 2px 0 rgb(0 0 0 / 14%), 0 3px 1px -2px rgb(0 0 0 / 12%), 0 1px 5px 0 rgb(0 0 0 / 20%)!important;
            -moz-box-shadow: 0 2px 2px 0 rgb(0 0 0 / 14%), 0 3px 1px -2px rgb(0 0 0 / 12%), 0 1px 5px 0 rgb(0 0 0 / 20%)!important;
        }
</style>
<style>
     @media (min-width: 768px) and (max-width: 1023px){
      .detailed-content{
          display:none;
      }
      .tablet-wish .btn-wishlist {
         margin-left: -57px; 
      }
      .add-cart-tablet{
          padding: 15px!important!important;
      }
     }
</style>
<div class="modal fade" id="share_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-right:0px !important;">
  <div class="modal-dialog share_modal_top modal-dialog-centered" role="document">
    <div class="modal-content share_modal_content shadow-sm">
        <center>
            <div class="modal-header">
                <center> <h5 class="share_title text-center">Share Your Design</h5></center>
                <button type="button" class="close modal_remove_button" data-dismiss="modal" aria-label="Close" style="padding: 5px 10px 5px 10px;">
            <span aria-hidden="true">×</span>
        </button>
            </div>
            <div class="modal-body">
                <img src="<?= base_url() ?>assets/images/shareimage.png" id="shareimage-logo" alt="logo" style="">
                <span class="webname" style="">www.arteno.in</span>
                <img src="<?= ($templete->image)?$templete->image:base_url('assets/img/user.png')?>" class="card-img" id="share-image-product">
                <h4 style="color:black !important; text-transform: uppercase;margin-top:15px"><?= ucwords($templete->name) ?></h4>
                <center>
                    <?php include('includes/social_media.php') ?>
                </center>
                <!--<ul class="social" style=" text-align:center;">-->
                <!--    <li class="social_icon"><a href="<?= $fb_designer_share_url ?>" target="_blank" class="bg-fb"><img src="social-media-icons" src="<>"><i class="fab fa-facebook-f"></i></a></li>-->
                <!--    <li class="social_icon"><a href="<?= $whatsapp_designer_share_url ?>" target="_blank" class="bg-wp"><i class="fab fa-whatsapp"></i></a></li>-->
                <!--    <li class="social_icon"><a href="<?= $twitter_designer_share_url ?>" target="_blank" class="bg-tw"><i class="fab fa-twitter"></i></a></li>-->
                <!--    <li class="social_icon"><a href="<?= $instagram_designer_share_url ?>" target="_blank" class="bg-insta"><i class="fab fa-instagram"></i></a></li>-->
                <!--</ul>-->
                 <!--<center><span id="copydata" style="color:green"></span></center>-->
                <div class="row" style="margin-top:10px;">
                    <div class="col-md-10 col-xs-10 col-10" style="padding-right: 0px;">
                        <input type="text" value="<?= $designer_share_url ?>" class="form-control" id="put_share_value" style="border-radius: 0px!important;" readonly="">
                    </div>
                    <div class="col-md-2 col-xs-2 col-2 text-center" style="padding-left: 0px;" onclick="copy_in_clipboard()">
                        <div class="copy" style="background:#111;height:45px;cursor:pointer" title="Click to copy at Clipboard">
                            <span style="color:#fff;font-size:18px;"><i class="fa fa-clone" style="padding-top:12px;" aria-hidden="true"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </center>
        
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Size Chart</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <?php
            if($templete->product_base==2){
          ?>
          <table class="table size-table" border="1" style="border-collapse:collapse; width:100%;background:white; border: 1px solid#dee2e6!important;">
				        <tr>
				            <th>Sr No</th>
				            <th>Size</th>
				            <th>Printing Area/ Inch</th>
				        </tr>
				        <tr>
				            <td>1</td>
				            <td>SM Small size (26)</td>
				            <td>10.5 x 12</td> 
				        </tr>
				        <tr>
				            <td>2</td>
				            <td>M Medium size (27)</td>
				            <td>11 x 12</td>
				        </tr>
				        <tr>
				            <td>3</td>
				            <td>L Large size (28)</td>
				            <td>11 x 13</td>
				        </tr>
				        <tr>
				            <td>4</td>
				            <td>XL Extra large size (29)</td>
				            <td>11.5 x 13.5</td>
				        </tr>
				        <tr>
				            <td>5</td>
				            <td>2 XL Double extra large size (30)</td>
				            <td>11.5 x 14</td>
			        </tr>
				    </table>
          <?php }else{?>
            
        <img src="<?= base_url()?>assets/mask-chart.jpg" style="width:100%">
        <?php } ?>
      </div>
      
    </div>
  </div>
</div>

<!--this section is same design as toesmith uncomment to make like that-->
<style>
/*product main card for laptop/*/
    
    .designer-label-mobile{
        display:none;
    }
    table{
        border:1px solid black!important;
        border-right-color:black!important;
         border-width: 0px 1px 0px 1px
    }
    input[type="text"]:disabled {
        color:black!important;
    }
    input:disabled{
        opacity:1!important;
    }
    .btn-light{
        font-size:10px;
    }
    .detail-bg-data{
        width: 80%;
        margin: auto;
    }
    .price{
        min-height:35px;
        margin-top:35px;
    }
    @media (min-width: 1500px){
        .detail-bg-data {
            width: 1200px;
            margin:auto;
        }
        .btn-light {
            font-size: 9px;
        }
        .products-page-gallery {
            width:450px;
            margin:auto;
        }
        .product-page-gallery-main .item img {
            height: 400px;
        }
    }
    @media (max-width: 1250px){
        .detail-bg-data {
            width: 98%;
            margin:auto;
        }
    }
    
    /*css for product detail after zooming in to 150%/*/
    @media (max-width: 1000px){
        .detail-bg-data {
            width: 95%;
            margin:auto;
        }
        .varialtion-quantity{
            margin-left:-5px;
            
        }
        /*.products-page-gallery {*/
        /*    width:350px;*/
        /*    margin:auto;*/
        /*}*/
        .designer-label a span{
            font-size:7px;
        }
        .designer-label a img{
            height: 20px!important;
            width: 20px!important;
        }
        .product-details-content .wishlist-compare-btn .btn{
            font-size:7px;
        }
        .product-details-content .wishlist-compare-btn {
            margin-top: 25px;
            float: initial;
            padding-right: 0px;
        }
    }
    
    /*product detail for mobile css*/
     @media only screen and (max-width: 600px){
        .detail-bg-card {
          padding:0px!important;
        }
        .designer-label-mobile{
            display:block;
            margin-bottom:10px;
        }
        .detail-bg-data{
          width:100%;
        }
        .detail-bg-data .card-body{
          padding:0px;
        }
        .products-page-gallery{
            width:100%;
        }
        .designer-label{
            display:none;
        }
        
        .laptop-share{
            display:none!important;
        }
    
 }

.product-page-gallery-preview {
    display: none;
}
.product-page-gallery-main .item:nth-child(2n) {
    display: none;
}
.product-page-gallery-preview.slick-initialized {
    display: block !important;
}
.product-page-gallery-main.slick-initialized .item {
    display: block !important;
}
@media only screen and (max-width: 600px) {
    .product-page-gallery-preview.slick-initialized {
        display: none !important;
    }
}
</style>
<section class="mt-60">
     <div class="detail-bg-card">
        <img src="<?= base_url('assets/img/product-image/product_details_background.jpg') ?>" class="detail-bg-image">
        <div class="detail-bg-data card cp-3 shadow-sm">
          <div class="card-body no-gutter">
              
              <div class="row ml-26 tablet-row">
            <?php 
        
          $products =   get_productbase($templete->product_base);
        //   $screen = json_decode($templete->screenshot);
        //   print_r($screen->front);
        ?>
         <div class="col-lg-5 col-md-5 tablet-card mobile-main-card">
             
            <div class="products-page-gallery">
               <div class="product-page-gallery-main">
                    
                       <?php
                      
                       $count =0;
                       if($templete->product_base == 2){
                           $count = 2;
                       }else if($templete->product_base == 3){
                           $count = 2;
                       }
                       else if($templete->product_base == 4){
                           $count = 1;
                       }
                       else{
                           $count = 2;
                       }
                       if($templete->product_base != 4){
                      foreach(product_slider($templete->id) as $img){
                          echo '<div class="item"><img src="'.$img.'" alt="image"></div> ';
                      
                      }
                       }else{
                           $img = product_slider($templete->id)[0] ;
                         echo '<div class="item"><img src="'.$img.'" alt="image"></div> ';  
                       }
                    
                       ?>
                  
               </div>
               <div class="product-page-gallery-preview">
                    
                      <?php
                       $count =0;
                       if($templete->product_base != 4){
                      foreach(product_slider($templete->id) as $img){
                          echo '<div class="item"><img src="'.$img.'" alt="image"></div> ';
                      
                      }
                       }else{
                           $img = product_slider($templete->id)[0] ;
                         echo '<div class="item"><img src="'.$img.'" alt="image"></div> ';  
                       }
                       ?>
               </div>
              
            </div>
         </div>
            <div class="col-lg-7 col-md-7 custom-padding-m tablet-cotent">
                <div class="product-details-content">
                    <div class="row tablet-content-row">
                        <div class="col-md-7 col-lg-7 col-xs-12 col-12 main-card tablet-content-detail">
                           <h2 class="main-product-name main_product" style="text-transform:capitalize"><?= strtolower($templete->name)?></h2>
                            <div class="designer-label-mobile">
                                    <a href="<?= base_url('Designer/')?><?= $templete->Uslug?>" class="mt-2" style="color:black">
                                        <?php if($templete->user_image==""){ ?>
                                            <img src="<?= default_designer_image() ?>" class="designer_image" style="height:30px; width:30px;" alt="..."> 
                                        <?php }else{?>
                                            <img src="<?= $templete->user_image; ?>" class="designer_image" style="height:30px; width:30px;" alt="..."> 
                                        <?php } ?>
                                        <span>Designed By: <span style="font-weight:bold"><?= $templete->user_fullname?></span></span>
                                 </a>
                                </div>
                           <?php $d =  json_decode(t_shirt_price($templete->color,$templete->pid,$templete->id)); ?>
                           <input type="hidden" id="tempname" value="<?= $templete->name?>"/>
                            <input type="hidden" id="tembaseprice" value="<?=$d->product_price?>"/>
                            <input type="hidden" id="temprice" value="<?=$d->actual_price?>"/>
                            <input type="hidden" id="temid" value="<?=  $templete->id?>"/>
                            <input type="hidden" id="tempbase" value="<?=  $templete->product_base?>"/>
                            <input type="hidden" id="tempcolor" value="<?=  $templete->color?>"/>
                            <input type="hidden" id="image" value="<?=  $templete->image?>"/>
                            <div class="price" style="">
                                <div class="productDetail" id="mobilescroll">
                                    <span class="p-detail-price"><?= $d->price?></span>  
                                <del class="p-detail-del-price"><?= $d->mrp ?></del>
                                <span class="p-detail-offer-price"><?= $d->off ?></span></div>
                            </div>
                           
                            <?php include('includes/why_customer_love_this.php') ?>
                            
                            <div class="d-flex mt-3 d-block d-xs-block d-sm-none d-md-none d-lg-none mb-3 table-editor-button">
                                    <!--<div style="bottom: -12px; right: 22px; background-image: url('<?=base_url()?>assets/gif/customize_button.gif'); height: 44px; padding: 3px 0px; border-radius: 21px;width:192px;">-->
                                    <!--     <a href="<?=base_url()?>customizer?product=<?=$templete->product_base?>&template=<?=$templete->id;?>"><div class="ihLkIO"></div></a>-->
                                    <!--</div>-->
                                    <!--<div style="bottom: -12px; right: 22px; padding: 3px 0px;">-->
                                         
                                    <!--</div>-->
                                    <div class="ihLkIO"> <a href="<?=base_url()?>customizer?product=<?=$templete->product_base?>&template=<?=$templete->id;?>" style="color:white">
                                            CUSTOMIZE
                                         </a></div>
                                    <span class="mobile-share-icon share-button-mobile d-block d-sm-none"  style="margin-left:15px;">
                                        <img src="<?= base_url()?>assets/images/share1.png" onclick="mobileShare()" class="icon_height share-button" data-toggle="tooltip" data-placement="top" title="Share">
                                    </span>
                            </div>
                                
                            <div class="variation-area  d-flex tablet-variation">
                                <?php if($templete->product_base == 2){ ?>
                                
                                    <div class="varialtion-size">
                                            <p class="variation-value1" style="display:inline">Size:</p> &emsp;<p style="display:inline" class="only-tablet-size"><a data-toggle="modal" data-target="#exampleModalCenter" class="size-chart" style="display:inline;color:black">Size Chart</a></p>
                                            <div style="display:flex;" id="tempsize">
                                            <div class="form-group">
                                                <input type="radio" name="size" value="S" id="sizes">
                                                <label class="sizes" for="sizes">S</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="radio" name="size"  value="M" id="sizem">
                                                <label class="sizes" for="sizem">M</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="radio" name="size" value="L" id="sizel">
                                                <label class="sizes" for="sizel">L</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="radio" name="size" value="XL" id="sizexl">
                                                <label class="sizes" for="sizexl">XL</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="radio" name="size" value="XXL" id="sizexxl">
                                                <label class="sizes xxl-size" for="sizexxl">XXL</label>
                                            </div>
                                        </div>
                                        </div>
                                <?php } ?>
                                    <div class="varialtion-quantity" >
                                        <p class="variation-value1">Quantity:</p>
                                            <div class="input-counter"  style="display:flex;margin-bottom:2px">
                                                <span class="minus-btn counter-btn"><i class="fas fa-minus"></i></span>
                                                <input type="text" value="1" class="tempqty" id="tempqty_product" min="1" style="color:black!important" readonly>
                                                <span class="plus-btn counter-btn"><i class="fas fa-plus"></i></span>
                                            </div>
                                    </div>
                            </div>
                            <div class="hidden-xs"><?= ($templete->product_base!=3)?'<a data-toggle="modal" data-target="#exampleModalCenter" class="size-chart" style="display:inline">Size Chart</a>':''?></div>
                        </div>
                       
                           <div class="col-md-5 col-lg-5 main-card">
                               <div class="detailed-content">
                                <div style="margin-left:20px;padding-right:20px;display:inline-flex" class="laptop-share">
                                    <span class="share-button" id="share-button" data-toggle="modal" data-target="#share_modal" style="margin-right:5px;">
                                    <img src="<?= base_url()?>assets/images/share1.png" class="icon_height" data-toggle="tooltip" data-placement="top" title="Share" style="display:inline"></span>
                                    <?php if(isset($_SESSION['user_id'])){ 
                                     $wish = check_wish($templete->id,$_SESSION['user_id']);
                                     if($wish->temp_id == $templete->id){?>
                                        <span class="wish-button wished removewish" data-tempid ="<?= $templete->id?>" data-base="<?= $templete->pid?>" data-id="<?= $wish->id?>" id="wishLoader<?= $templete->id?>"><i class="fa fa-heart" class="icon_height" ></i></span>
                                     <?php }else{ ?>
                                        <span class="wish-button  addwish" data-tempid ="<?= $templete->id?>" data-base="<?= $templete->pid?>" data-id="<?= $wish->id?>" id="wishLoader<?= $templete->id ?>"><i class="far fa-heart" ></i></span>
                                    <?php }
                                    }else{?>
                                        <span class="wish-button d-none d-sm-block"   data-toggle="modal" data-target="#loginotpmodal"><i data-toggle="tooltip" data-placement="top" title="Wishlist" class="far fa-heart" class="icon_height"></i></span>
                                    <?php }?>
                                </div>
                                <div class="designer-label">
                                    <a href="<?= base_url('Designer/')?><?= $templete->Uslug?>" class="mt-2" style="color:black">
                                        <?php if($templete->user_image==""){ ?>
                                            <img src="<?= default_designer_image() ?>" class="designer_image" style="height:30px; width:30px;" alt="..."> 
                                        <?php }else{?>
                                            <img src="<?= $templete->user_image; ?>" class="designer_image" style="height:30px; width:30px;" alt="..."> 
                                        <?php } ?>
                                        <span style="font-size:12px">Designed By: <span style="font-weight:600"><?= $templete->user_fullname?></span></span>
                                 </a>
                                </div>
                                
                                <div class="wishlist-compare-btn tablet-cart-button">
                                    <div class="tablet-hidden-wish-button">
                                    <button class="btn btn-light cart" data-id="<?= $templete->id?>"  id="cart<?= $templete->id?>" style="background:black !important;color:b78b2a !important; border-radius: 0px;font-weight:600;"> ADD TO CART</button>
                                    <a href="<?=base_url()?>customizer?product=<?=$templete->product_base?>&template=<?=$templete->id;?>" style="display:inline"><button class="btn btn-light" style="background:white !important;color:black !important;margin-left: -4px !important; border-radius: 0px; font-weight:600;">CUSTOMIZE</button></a>
                                 <?php //include('includes/social_media.php') ?>
                                </div>
                               </div>
                                
                              </div>  
                               
                            </div>
                      
                      
                  </div>
                
                

                     
                        <!--<div class="row">-->
                        <!--    <div class="col-md-4">-->
                        <!--       <p class="ml-2">In Stock</p>-->
                        <!--    </div>-->
                        <!--    <div  class="col-md-8">-->
                        <!--       <?php if($templete->product_base == 2){ ?>-->
                        <!--        <center><a href="#" data-toggle="modal" data-target="#sizeGuideModal" style="color:black" class="d-none d-md-block" > Size Chart</a></center>-->
                        <!--      <?php }?>-->
                                
                        <!--    </div>-->
                        <!--</div>-->
                   
                    
                </div>
                    
         </div>
        
      </div>
          </div>
        </div>
        
    </div>
</section>

<!--<section class="">-->
<!--    <div class="bg-image d-none d-sm-none d-md-block d-lg-block"></div>-->
<!--   <div class="container-fluid no-gutter bg-text">-->
        
<!--   </div>-->
    
<!--</section>-->
<!-- Modal -->
<div class="modal fade" id="extraqtymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="border-radius: 30px;">
      
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
          <center>
              <h5 class="share_title text-center">For Bulk order </h5>
          <!--<br>-->
          </center><br>
          <!--<br>-->
          <img src="<?=base_url('assets/images/Gift Gif.gif')?>" class="card-img-top img-fluid img-responsive premium_product_design bulk_order_image">
          <p style="font-family: 'Nunito', sans-serif!important;font-size: 16px!important;font-weight: 600!important;margin-top: 15px!important;">Use the premium designs crafted by our premium designers to uplift your products and take them to a new level. 
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
<!--design with data-->
<style>
    .custom-customer-love{
        background:#f5f5f5!important;
        box-shadow: -1px -4px 9px -4px rgb(216 216 216 / 50%);
        -webkit-box-shadow:-1px -4px 9px -4px rgb(216 216 216 / 50%);
        -moz-box-shadow:-1px -4px 9px -4px rgb(216 216 216 / 50%);

    }
</style>

<?php include('includes/why_customer_love_this_desktop.php') ?>

<section class="p-20" >
   <br> 
   <div class="container">
        
         <div class="section-title bb">
        <h2 class="text-center heading-title1">ABOUT THIS PRODUCT</h2>
        </div>
      
     
     <div class="p-detail">
          <?php echo $products->description ?>
     </div>
   </div><br>
</section>

<section class="banner-bg1">
   <div class="container">
       <div class="section-title bb">
        <h2 class="text-center heading-title1">SEE MORE DESIGN BY THIS DESIGNER</h2>
        </div>
      
      
      <div class="card border-0">
         <div class="card-body" style="background:#f5f5f5">
            
            <!--<center>-->
            <!-- <p class=" d-none d-lg-block d-md-block"> <img src="" class="designer_image"  style="height:45px; width:45px;" alt="...">-->
            <!-- </center>-->
            <div id="products-filter" class="products-collections-listing custum-category-padding category-product-section row">
             <?php  
             if(count($related_product)>0){
             $i=0; foreach($related_product as $r):
                 if($r->id==$templete->id) continue;
                //  print_r($r);
             ?>
               <div class="col-lg-3 col-md-3 col-6 col-sm-6  products-col-item mt-1">
                  <div class="single-product-box product-card">
                    <div class="product-image" onMouseOver='show_slider("product_slider<?= $r->id?>","product_image<?= $r->id?>")' onMouseOut="hide_slider('product_slider<?= $r->id?>','product_image<?= $r->id?>')">
                      <a href="<?= base_url()?><?= $r->baseslug?>/<?= ($r->slug!="")?$r->slug:$r->id ?>">
                        <img src="<?= $r->image?>" alt="image" id="product_image<?= $r->id?>">
                        </a>
                        
                        
                        <div id="product_slider<?= $r->id?>" style="display:none">
                           <div id="carouselExampleIndicators<?= $r->id?>" class="carousel slide " data-ride="carousel">
                              <ol class="carousel-indicators">
                                <?php
                                  $counter = 0;
                                  $i=0;
                                  if($r->pid == 2){
                                      $counter = 2;
                                  }
                                  else if($r->pid == 2){
                                      $counter = 2;
                                  }else{
                                      $counter = 1;
                                  }
                                  if($r->pid != 4){
                                  for($i=0;$i<$counter;$i++){
                                      
                                      $st = ($i == "0")?"active":"";
                                      echo '<li data-target="#carouselExampleIndicators'.$r->id.'" data-slide-to="'.$i.'" class="'.$st.'"></li>';
                                  }
                                  }
                                  ?>
                              </ol>
                              <div class="carousel-inner">
                               <?php 
                                  $i=0;
                                  $slug = ($r->slug!="")?$r->slug:$r->id;
                                  if($r->pid != 4){
                                  foreach(product_slider($r->id) as $img){
                                      $st = ($i==0)?"active":"";
                                      echo '   <div class="carousel-item '.$st.'">
                                    <a href="'. base_url().$r->baseslug.'/'.$slug.'">
                                    <img class="d-block w-100" src="'.$img.'" alt="Second slide">
                                    </a>
                                 </div>';
                                  
                                      $i++;
                                  }
                                  }else{
                                       $img = product_slider($r->id)[0] ;
                         echo '<a href="'. base_url().$r->baseslug.'/'.$slug.'"><div class="item"><img src="'.$img.'" alt="image"></div></a> ';  
                                  }
                                  ?>
                                 
                                 
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
                     <p class="designer_area">
                         <a href="<?= base_url()?>Designer/<?= $r->Uslug?>" class="text-white">
                         <?php if($r->user_image ==""){?>
                          <img src="<?= default_designer_image() ?>" class="designer_image" alt="...">
                          <?php }else{?>
                           <img src="<?= $r->user_image ?>" class="designer_image" alt="...">
                          <?php }?>
                        <span class="design_title">Designed By:</span> <span class="three-dot designer-name" style="font-weight:600"><?= $r->user_fullname?></span>
                     </a>
                     </p>
                     <!--</br>-->
                     <div class="product-content text-left">
                        <h3 class="mobile-three-dots"> <a href="<?= base_url()?><?= $r->baseslug?>/<?= ($r->slug!="")?$r->slug:$r->id ?>"><?= ucwords(strtolower($r->name)); ?></a></h3>
                                        <?php $d=  json_decode(t_shirt_price($r->color,$r->pid,$r->id)); ?>
                                    <div class="product-price">
                                    <span class="new-price"><?= $d->price?></span>
                                    <span class="old-price"><?= $d->mrp?></span>
                                    <span class="offer-price"><?=$d->off?></span>
                                    </div>
                        <a href="<?=base_url()?>customizer?product=<?=$r->pid?>&template=<?=$r->id;?>" class="btn-primary btn-edit" style="border:1px solid black !important;" >Customise</a>
                        <?php if(isset($_SESSION['user_id'])){ 
                         $wish = check_wish($r->id,$_SESSION['user_id']);
                         if($wish->temp_id == $r->id){?>
                       <span class="btn-wish"><button class="btn-wishlist wished removewish" data-tempid ="<?= $r->id?>" data-base="<?= $r->pid?>" data-id="<?= $wish->id?>" id="wishLoader<?= $r->id?>"><i class="fa fa-heart"></i></button></span>
                         <?php }else{ ?>
                    <span class="btn-wish"><button class="btn-wishlist addwish" data-tempid ="<?= $r->id?>" data-base="<?= $r->pid?>" data-id="<?= $wish->id?>" id="wishLoader<?= $r->id?>"><i class="far fa-heart"></i></button></span>  
                         <?php }
                         }else{?>
                         <span class="btn-wish"><button class="btn-wishlist" data-toggle="modal" data-target="#loginotpmodal"><i class="far fa-heart"></i></button></span>
              
                       <?php }?>
                        </div>
                  </div>
               </div>
               <?php $i++; endforeach;
               } else{
               ?>
               <h3 style="position:absolute; top:0px; left:35%">No similar product found</h3></center>
               <?php }?>
               <!--product details modal for mobile view-->
               <?php $i=0; foreach($related_product as $r):
              
               ?>
               
               <div class="modal fade productQuickView" id="productQuickView<?= $i?>" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                     <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="right: 0!important; left: auto;">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                        </button>
                        <div class="row align-items-center">
                           <div class="col-lg-12 col-md-12">
                              <div class="product-content">
                                 <h3> <a href="<?= base_url()?><?= $r->baseslug?>/<?= ($r->slug!="")?$r->slug:$r->id ?>"><?= $r->name ?></a></h3>
                                  <?php $d=  json_decode(t_shirt_price($r->color,$r->pid,$r->id)); ?>
                                    <div class="product-price">
                                    <span class="new-price"><?= $d->price?></span>
                                    <span class="old-price"><?= $d->mrp?></span>
                                    <span class="offer-price"><?=$d->off?></span>
                                    </div>
                                
                              </div>
                             
                               <?php if(isset($_SESSION['user_id'])){ 
                         $wish = check_wish($r->id,$_SESSION['user_id']);
                         if($wish->temp_id == $r->id){?>
                        <center><button class="btn btn-primary mt-2  wished removewish" data-tempid ="<?= $r->id?>" data-base="<?= $r->pid?>" data-id="<?= $wish->id?>"><i class="fa fa-heart"></i>Add to Wislist</button></center>
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
<style>
    .partner-area{
        background:white!important;
    }
    .spinner-border-sm {
    width: 11px;
    height: 11px;
    border-width: .2em;
}
</style>
<section style="padding-bottom: 40px;">
<?php 

include('includes/instagram.php') ?>
</section>


<div class="wishlist-compare-btn d-block  d-md-none tablet-cart-button" style="position: fixed;  left:0; right:0; bottom:0; padding:20px;background:white; z-index:99;">
    <div class="row">
        <div class="col-9 pr-0">
            <button type="type" class="btn btn-light btn-rounded btn-block cart add-cart-tablet" data-id="<?= $templete->id?>" id="cartmobile<?= $templete->id?>" style="background:black !important;color:white !important;padding:10px!important;font-size:18px!important;width:100% "> ADD TO CART</button>
        </div>
        <div class="col-3 pl-0 tablet-wish">
            <?php if(isset($_SESSION['user_id'])) {
                $wish = check_wish($templete->id,$_SESSION['user_id']);
                if($wish->temp_id == $templete->id) {
            ?>
                           <span class="btn-wish"><button class="btn-wishlist bottom-wish  wished removewish" data-tempid ="<?= $templete->id?>" data-base="<?= $templete->pid?>" data-id="<?= $wish->id?>" id="wishLoader2<?= $templete->id?>" style="font-size:30px!important; margin-top:3px"><i class="fa fa-heart"></i></button></span>
                             <?php }else{ ?>
                        <span class="btn-wish"><button class="btn-wishlist bottom-wish addwish" data-tempid ="<?=$templete->id?>" data-base="<?= $templete->pid?>" data-id="<?= $wish->id?>" id="wishLoader2<?= $templete->id?>" style="font-size:30px!important; margin-top:0px; height: 45px!important;width: 45px !important;"><i class="far fa-heart"></i></button></span>  
                             <?php }
                             }else{?>
                             <span class="btn-wish"><button class="btn-wishlist bottom-wish"  data-toggle="modal" data-target="#loginotpmodal" style="font-size:30px!important; margin-top:3px"><i class="far fa-heart"></i></button></span>
                  
             <?php }?>
       </div>
   </div>
</div>
<style>
.spinner-border-sm{
    height:11px!important;
    width:11px!important;
}
.wishlist-spinner{
    height:18px!important;
    width:18px!important;
}

@media only screen and (min-width: 1000px){
    
    .main-card{
        padding-left:0px;
        padding-right:0px;
    }
    
    
}
}
@media only screen and (max-width: 600px){
    .product-page-gallery-preview {
        display: none;
    }
 
.spinner-border-sm{
    height:18px!important;
    width:18px!important;
}
.slick-track{
    transform:translate3d(0px)!important;
}}

</style>
<?php include('includes/footer.php')?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
window.mobileCheck = function() {
  let check = false;
  (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
  return check;
  
};
window.mobileAndTabletCheck = function() {
  let check = false;
  (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
  return check;
 
};
$('.product-page-gallery-main').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            draggable:mobileAndTabletCheck(),
            swipe:mobileAndTabletCheck(),
            adaptiveHeight: false,
            autoplay: false,
            loop:true,
            dots: true,
            fade: false,
            asNavFor: '.product-page-gallery-preview',
        });
        $('.product-page-gallery-preview').slick({
             slidesToShow:5,
              slidesToScroll:0,
              asNavFor: '.product-page-gallery-main',
            //   dots: true,
              centerMode: true,
              focusOnSelect: true,
            autoplay: false,
        });
         // Remove active class from all thumbnail slides
 $('.product-page-gallery-preview .slick-slide').removeClass('slick-active');

 // Set active class to first thumbnail slides
 $('.product-page-gallery-preview .slick-slide').eq(0).addClass('slick-active');

 // On before slide change match active thumbnail to current slide
 $('.slider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
 	var mySlideNumber = nextSlide;
 	$('.product-page-gallery-preview .slick-slide').removeClass('slick-active');
 	$('.product-page-gallery-preview .slick-slide').eq(mySlideNumber).addClass('slick-active');
});
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
    function copy_in_clipboard() {
  var copyText = document.getElementById("put_share_value");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  $('#copydata').html('Copied');
//   alert("Copied the text: " + copyText.value);
}

       window.mobileCheck = function() {
      let check = false;
      (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| ||a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
      return check;
    }  
    function loader_all2(id, content,status){
        $("#"+id).html(content);
    }
    function loader_all1(id, content,status){
        if(status)
            content = '<span class="spinner-border spinner-border-sm wishlist-spinner"  role="status" aria-hidden="true"></span>';
        $("#"+id).html(content);
    }
    /* Event tracker code start */
    function addToCartEventCalled(products){
        fbq('track', 'AddToCart');
        // Measure adding a product to a shopping cart by using an 'add' actionFieldObject
        // and a list of productFieldObjects.
        dataLayer.push({ ecommerce: null });  // Clear the previous ecommerce object.
        dataLayer.push({
          'event': 'addToCart',
          'ecommerce': {
            'currencyCode': 'INR',
            'add': {                                // 'add' actionFieldObject measures.
              'products': [products]
            }
          }
        });
    }
    function addToWishlistEventCalled(){
        fbq('track', 'AddToWishlist');
    }
    fbq('track', 'ViewContent');
    /* Event tracker code start */
        
    $(document).on("click",".cart",function() {
        var id = $(this).data("id");
        var id= $("#temid").val();
        var base_price =$("#tembaseprice").val();
        var price =$("#temprice").val();
        var qty = $("#tempqty_product").val();
        var size = $('input[name="size"]:checked').val();
        var name = $("#tempname").val();
        var base_id = $("#tempbase").val();
        var color = $("#tempcolor").val();
        var image = $("#image").val();
        loader_all('cart'+id, '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>',true);
        loader_all2('cartmobile'+id, '<span class="spinner-border spinner-border-sm mobilecart"  style="height:22px!important;width:22px!important" role="status" aria-hidden="true"></span>',true);
       if(base_id == 2 && size!=undefined && qty!="" ){
        page_loader();
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
                loader_all('cart'+id, 'ADD TO CART',false);
                loader_all('cartmobile'+id, 'ADD TO CART',false);
                page_loader("stop");
            if(r.trim()!='0'){
                minicartdata_items_loader();
                  cart_item();
                //   minicartdata_items_loader();
                  minicartdata_items();
    //               swal("Added to cart ",{
    //               icon: "success",
    //               button: false,
    //               timer: 1200,
    // });
    
    // location.reload();
    //  adding a product to a shopping cart.
    addToCartEventCalled({ 
        'name': name,
        'id': id,
        'price': base_price,
        'quantity': qty
    });
    setTimeout(function() {
   $('#sidebarModalcart').modal('show');
    }, 2000);
 
    } else {
        swal("Product is out of stock",{
            icon: "warning",
            button: false,
            timer: 1200,
        });

                }
            }
        });
        }else if(base_id != 2){
            page_loader();
            
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
                
                page_loader("stop");
                loader_all('cart'+id, 'ADD TO CART',false);
                loader_all('cartmobile'+id, 'ADD TO CART',false);
             if(r.trim()!='0'){
                 minicartdata_items_loader();
             cart_item();
              minicartdata_items();
              
    //           swal("Added to cart ",{
    //               icon: "success",
    //               button: false,
    //               timer: 1200,
    //  });
     //  adding a product to a shopping cart.
    addToCartEventCalled({ 
        'name': name,
        'id': id,
        'price': base_price,
        'quantity': qty
    });
     setTimeout(function() {
   $('#sidebarModalcart').modal('show');
}, 2000);
      
     
     
    //  location.reload();
    // GTag event added
    /* gtag('event', 'add_to_cart', {
      currency: 'INR',
      items: [{
        id: id,
        name: name,
        price: base_price,
        quantity: qty,
      }],
      value: price
    }); */
                }
                else {
                    loader_all('cart'+id, 'ADD TO CART',false);
                    loader_all('cartmobile'+id, 'ADD TO CART',false);
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
            var windowwidth=$(document).width();
            if(mobileAndTabletCheck()){
                window.location.href="#mobilescroll";
            }
                loader_all('cart'+id, 'ADD TO CART',false);
                loader_all('cartmobile'+id, 'ADD TO CART',false);
                swal("Please select size   ",{
                  icon: "warning",
                   button: false,
                   timer: 1200,
     });
        } 
       
        });   

    //mobile view//
      $(document).on("click",".cartmobile",function() {
        var id = $(this).data("id");
      //  var id= $("#temid").val();
      
         var base_price =$("#tembaseprice").val();
         
         var price =$("#temprice").val();
         var qty = $("#tempqtymobile").val();
        var name = $("#tempname").val();
        var size =  $('[name="sizemobile"]:checked').val();
        // alert(size);
            $("#mobilesize"+ size).attr("checked","checked");
         var base_id = $("#tempbase").val();
        var color = $("#tempcolor").val();
        var image = $("#image").val();
          loader_all('cart'+id, '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>',true);
      
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
                loader_all('cart'+id, 'ADD TO CART',false);
                 if(r.trim()!='0'){
                     minicartdata_items_loader();
             cart_item();
              minicartdata_items();
    //               swal("Added to cart",{
    //               icon: "success",
    //               button: false,
    //               timer: 1200,
    //  });
     //  adding a product to a shopping cart.
    addToCartEventCalled({ 
        'name': name,
        'id': id,
        'price': base_price,
        'quantity': qty
    });
     
    //  location.reload();
     
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
              loader_all('cart'+id, 'ADD TO CART',false);
                if(r.trim()!='0'){
                    minicartdata_items_loader();
                  cart_item();
                  
                   minicartdata_items();
    //               swal("Added to cart",{
    //               icon: "success",
    //               button: false,
    //               timer: 1200,
    //  });
     //  adding a product to a shopping cart.
    addToCartEventCalled({ 
        'name': name,
        'id': id,
        'price': base_price,
        'quantity': qty
    });
     setTimeout(function() {
    $('#sidebarModalcart').modal('show');
}, 2000);
      
    //  location.reload();
     
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
            var windowwidth=$(document).width();
            if(windowwidth< parseInt(600)){
                window.location.href="#mobilescroll";
            }
            loader_all('cart'+id, 'ADD TO CART',false);
            // alert("windowwidth");
            swal("Please select size and quantity.",{
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
        
             loader_all1('wishLoader'+temp_id, '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>',true);
              var is_mobile_device = window.mobileAndTabletCheck();
      if(is_mobile_device){ 
             loader_all1('wishLoader2'+temp_id, '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>',true);
      }
              $.ajax({
            url:"<?= base_url()?>Front/addwishlist/",
             method:"GET",
            data:{temp_id:temp_id,base_id:base_id},
            success:function(r){
            loader_all1('wishLoader'+temp_id, '<i class="fa fa-heart"></i>',false);
              var is_mobile_device = window.mobileAndTabletCheck();
      if(is_mobile_device){ 
             loader_all1('wishLoader2'+temp_id, '<i class="fa fa-heart"></i>',false);
      }
               wishcount();
                swal("Added to wishlist",{
                   icon: "success",
                   button: false,
                   timer: 1200,
     });
     addToWishlistEventCalled();
      
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
              loader_all1('wishLoader'+id, '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>',true);
               var is_mobile_device = window.mobileAndTabletCheck();
      if(is_mobile_device){ 
              loader_all1('wishLoader2'+id, '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>',true);
      }
             $.ajax({
            url:"<?= base_url()?>Front/remove_wish/",
            method:"POST",
            data:{Id:id},
            success:function(r){
                  loader_all1('wishLoader'+id, '<i class="far fa-heart"></i>',false);
                   var is_mobile_device = window.mobileAndTabletCheck();
      if(is_mobile_device){ 
                  loader_all1('wishLoader2'+id, '<i class="far fa-heart"></i>',false);
      }
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
    <script>
        function mobileShare(){
            const shareButton = document.querySelector('.share-button');
            const shareDialog = document.querySelector('.share-dialog');
            const closeButton = document.querySelector('.close-button');
            if (navigator.share) { 
                navigator.share({
                  title: 'Arteno',
                  url: ''
                }).then(() => {
                  console.log('Thanks for sharing!');
                })
                .catch(console.error);
            }else{
                shareDialog.classList.add('is-open');
            }
                closeButton.addEventListener('click', event => {
                shareDialog.classList.remove('is-open');
            });
        }
    </script>