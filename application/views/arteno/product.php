<?php include('includes/header.php'); ?>
<!--<link rel="stylesheet" href="<?= base_url() ?>assets/css/categorypage.css">-->
<style>
.custom-checkbox-designer {
    display: block;
    vertical-align: top;
    line-height: 26px;
    font-size: 16px;
    font-weight: 500;
    margin-left: 11px;
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
.checkmark {
    position: absolute;
    top: 3px;
    left: 0;
    height: 18px;
    width: 18px;
    border: 1px solid lightgrey;
    border-radius: 5px;
    background: white;
}



/* When the checkbox is checked, add a blue background */
.custom-checkbox-designer input:checked ~ .checkmark {
  background-color:black;
}
/*css added by 06-02*/
.checkmark i{
    display:none;
    margin-top: 3px;
    margin-left: 4px;
    font-size:10px;
}
.custom-checkbox-designer input:checked ~ .checkmark i {
    display: block;
    color:white;
}

/* Create the checkmark/indicator (hidden when not checked) */
/*.checkmark:after {*/
/*  content: "";*/
/*  position: absolute;*/
/*  display: none;*/
/*}*/

/* Show the checkmark when checked */
/*.custom-checkbox-designer input:checked ~ .checkmark:after {*/
/*  display: block;*/
/*}*/
/*.designer-search-checkbox{*/
/*    visibility:hidden;*/
/*}*/
/* Style the checkmark/indicator */

.custom-checkbox-designer .checkmark:after {
    left: 5px;
    top: 1px;
    width: 7px;
    height: 10px;
    border: solid white;
    border-width: 0 2.8px 2.8px 0;
    -webkit-transform: rotate( 
49deg
);
    -ms-transform: rotate(49deg);
    transform: rotate( 
50deg
);
}
 @media (min-width: 768px) and (max-width: 1023px){
    .filter-category-desktop{
        max-height: 600px!important;
    }
 }
 
 @media (min-width: 992px) and (max-width: 1300px){
    .single-product-box .product-content .product-price .new-price {
    font-size: 14px !important; 
 }
.btn-wishlist,.btn-wishlist.wished { 
    font-size:20px !important;
}



.card{
    background-color:#f5f5f5!important;
}
@media (min-width: 775px) {
  .left-scroller {
   max-height:500px!important;
   
   overflow-y:scroll!important;

}}



@media only screen and (max-width: 600px) {
    .btn-wishlist,.btn-wishlist.wished{
   
    font-size: 18px!important;
}
.modal-content .list-item {
    /* font-size: 22px; */
    display: inline-block !important;
    vertical-align: top !important;
    line-height: 25px !important;
    font-size: 16px !important;
    font-weight: 500 !important;
     padding-bottom: 0px !important;
    padding-top: 0px !important;
    /*margin-left: 30px;*/
}
.mmt{
    /*margin-top:-5px !important;*/
}

.form-control:focus{
            box-shadow:none!important;
}
.half-rounded{
    width:80%!important;
}
.form-check-label.list-item{
    display:inline!important;
}

.form-check-input {
    /* position: absolute; */
    /* margin-top: .3rem; */
    /* margin-left: -1.25rem; */
    /* border: 2px solid lightgrey; */
    position: absolute !important;
    height: 17px !important;
    width: 17px !important;
    margin-left: -15px !important;
    margin-top: 11px !important;
    border: 2px solid lightgrey !important;
    border-radius: 5px !important;
    background: white!important;
    display:flex !important;
   
}
.single-product-box .product-content .product-price{
    /*margin-bottom:0px !important;*/
}
}


     .button-line{
       /* background: black !important;*/
       /* border: 2px solid black;*/
      
       /* width: 15%;*/
       /*display: inline-block;*/
       
       /* margin-top: 44px;*/
       /* position: fixed;*/
    
       /*margin-left: -15.8%;*/
     }
     
    /*  .button-background:hover {*/
    /*      background: black !important;*/
    /*border-bottom: 2px solid #d1a355;*/
    /* transition: width .3s;*/
     /*content: '';*/
     /*       display: block;*/
     /*       width: 0;*/
            /*height: 2px;*/
        }
     
       /*label:hover {*/
           
       /*  border-bottom: 2px solid #d1a355;  */
       /* }*/
        
        label::after {
            content: '';
            display: block;
            width: 0;
            height: 2px;
            
        }
        
    input[type="checkbox"]{
        border:1px solid lightgrey!important;    
    }
     
    
    .sidenav{
        border-right: 1px solid rgb(237, 235, 239);
    }
      @font-face {
        font-family:'ProximaNova';
        font-style:normal;
        font-weight:400;
        font-display: swap;
        src:url('<?= base_url()?>/assets/p-fonts/Proxima-Nova-Regular_rJLcqSYpV.otf') format('opentype')
    }
    @font-face {
        font-family:'ProximaNova';
        font-style:normal;
        font-weight:700;
        font-display: swap;
        src:url('<?= base_url()?>/assets/p-fonts/proximanova-bold_Sy8qqBKTN.otf') format('opentype')
    }
    .collapse-widget-title {
        font-size: 19px;
        line-height: 16px;
        font-weight: bold;
        font-family: ProximaNova, sans-serif!important;
        
    }
    .custom-control-label:before{
        background-color:red!important;;
    }
    .custom-checkbox .custom-control-input:checked~.custom-control-label::before{
      background-color:black!important;
      background-color:black!important;
    }
/*common css for all screen size*/
    .card-header {
        padding:0px!important;
        margin-bottom: 0;
         background-color: rgba(0,0,0,0); 
         border-bottom: 0px; 
    }

    
    @media only screen and (max-width: 600px){
    /*    .button-line{*/
    /*      background: black !important;*/
    /*     border: 1px solid black;*/
  
    /*    width: 27%;*/
    /*    display: inline-block;*/
    /*     margin-top: 27px;*/
    /*       position: fixed;*/
    /*    margin-left: -27.4%;*/
    /*}*/
        }
        .shop_text {
            font-size: 25px !important;
        }
        .data-content .row {
            padding-left: 12px!important;
            padding-right: 12px!important;
        }
        .mpt-48 {
            padding-top: 48px !important;
        }
    }
    .not-found {
        width: 100%;
    }
    label {
        cursor: pointer;
    }
    hr {
        margin-top: 0px;
    }
    
    .woocommerce-sidebar-area .collapse-widget .collapse-widget-title i {
        float: right;
    }
    .dropdown-item.active,.dropdown-item:active {
        color: #fff;
        text-decoration: none;
        background-color: black;
    }
    .woocommerce-sidebar-area .collapse-widget .collapse-widget-title {
        font-size: 14px;
        font-weight: 500;
    }
    .custum-category-padding {
        margin: 20px;
        padding-left: 25px!important;
        padding-right: 25px!important;
    }
    .nice-select .option {
        cursor: pointer;
        width: 153px;
    }
    .woocommerce-sidebar-area .collapse-widget .selected-filters-wrap-list ul li {
        display: block;
    }
    .dropdown-toggle::after {
        margin-top: 7px;
    }
    .red_label {
        font-size: 10px;
    }
    .collapse-widget .selected-filters-wrap-list ul li {
        display: block;
    }
    .designer {
        height: 16px;
        width: 16px;
    }
    .category {
        visibility: hidden;
        height: 0px;
        width: 0px;
    }
    .product-section {
       position: fixed;
       width: 79%;
       left: 20%;
       height: 100%;
       overflow-y: scroll;
       overflow-x: hidden;
    }
    section {
        padding-top: 0px!important;
    }
        
    ::-webkit-scrollbar {
        width: 0px;
        height: 8px;
        background-color: white;
    }
        
    ::-webkit-scrollbar-thumb {
        background: white;
    }
    .single-product-box .product-content .btn-edit {
        padding: 5px 15px !important;
    }
    
    input[name='category']:checked+label {
    border: 5px darkgoldenrod !important;
    /*font-weight: bold;*/
    /* border-bottom: 0px solid grey; */
    /* display: block; */
}
/* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {
    .sidenav{
        display:none;
    }
    .main{
        margin-left:0px;
    }
    body{
        overflow-y:scroll;
    }

}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {
    body{
        overflow-y:scroll;
    }
}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {
    
}
@media only screen and (min-width: 1400px) {
    .filter-content{
        max-height:700px!important;
        overflow-y:scroll;
        /*padding-bottom:100px;*/
    }
}
/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
    .product-main{
        /*margin-top:80px;*/
    }
   
	.sidenav {
      height: 100%;
      width: 25%;
      position: fixed;
      z-index: 1;
      left: 10;
      overflow: hidden;
      padding-top: 10px;
    }
    .main {
      margin-left: 23%; /* Same as the width of the sidebar */
      padding: 0px 10px;
    }
    .filter-content{
        max-height:600px;
        overflow-y:scroll;
        /*padding-bottom:350px;*/
    }
    .filter-category-desktop{
        max-height:500px;
        overflow-y:scroll;
        /*padding-bottom:350px;*/
    }
    body{
        overflow-y:hidden;
    }
    footer {
        display: none;
    }
}

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
      
	.sidenav {
      height: 100%;
      width: 23%;
      position: fixed;
      z-index: 1;
      left: 10;
      overflow: hidden;
      padding-top: 10px;
    }
    .main {
      margin-left: 23%; /* Same as the width of the sidebar */
      padding: 0px 10px;
    }
    .filter-content{
        max-height:600px;
        overflow-y:scroll;
        /*padding-bottom:200px;*/
    }
    .filter-category-desktop{
        max-height:800px;
        overflow-y:scroll;
        /*padding-bottom:80px;*/
    }
    body{
        overflow-y:hidden;
    }
    .product-main{
        /*margin-top:80px;*/
    }
}

    

@media screen and (min-width: 991px) {
	.button-background {
		background-image: url('<?=base_url()?>/assets/black-marble.jpg') !important;
		color: white !important;
		background-size: cover;
		font-weight: 600;
		width: 20%;
		padding: 10px 15px !important;
	}

	
	
	
}

    

@media screen and (max-width: 992px) {
	.product-section {
		position: fixed;
		width: 100%;
		left: 0%;
		height: 100%;
		overflow-y: scroll;
	}
	.button-background {
		background-image: url('<?= base_url() ?>/assets/black-marble.jpg') !important;
		color: white !important;
		background-size: cover;
		font-weight: 600;
		width: 31%;
		font-size: 9px;
		padding: 8px !important;
	}
	

	
}
/*css for ipad*/
@media only screen and (device-width: 768px) {
  .card-sidebar-tablet{
       padding: 0.25rem;
   }
}

@media (min-width: 768px) and (max-width: 1023px){
   .card-sidebar-tablet{
       padding: 0.25rem;
   }
 }
/*css for ipad*/
/*css for ipad pro*/
/*for iPad pro tablet */
@media only screen and (min-width: 992px) {
.card-sidebar-tablet{
        padding: 0.25rem;
    }
    .card-sidebar-tablet .collapse-widget-title {
        margin-bottom: 15px;
    }
    .product-page{
        width:100%;
        min-height: 100%;
    }
    .left-scroller {
        max-height: 100%!important;
    }
    .filter-content {
        max-height: 100%;
    }
    .designer_area a{
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .single-product-box .product-content h3 {
        padding-bottom: 0px;
        padding-top: 10px;
    }
    .single-product-box .designer_area {
        position: absolute;
        bottom: 115px;
    }
}
/*css for ipad pro*/
  @media only screen and (max-width: 600px) {
     	.button-background {
            width: 30%!important;
            font-size: 8px!important;
            padding: 5px 5px!important;
	   }
	   
	   
	 .product-image img {
            height: 150px!important;
        }
        .modal-content .list-item {
          font-size: 22px;
        }
        .designer {
            height: 20px;
            width: 16px;
        }
    }

.custum-category-padding {
	padding: 20px;
	/* padding-right: 0px!important; */
}


/*.product-section {*/


/*    position: fixed;*/


/*    width: 80%;*/


/*    left: 20%;*/


/*    height: 100%;*/


/*    overflow-y: scroll;*/


/*}*/

    .carousel-indicators {
        bottom: 11px;
    }
    .sidebar-section {
        position: fixed;
        width: 20%;
        height: 100%;
        overflow-y: scroll;
        overflow-x: hidden;
    }
        
    .designer-group {
        list-style-type: none;
    }
   .list-item {
    font-size: 15px;
    margin-top: 7px;
    font-weight: 500;
    cursor: pointer;
    display: inline;
    font-family: ProximaNova, sans-serif;
    color: inherit;
    text-decoration: none;
    /* color: black!important; */
    padding-top: 4px;
    padding-bottom: 0px;
    padding-left: 12px;
    padding-right: 0px;
    /* border-bottom: 1px solid #eeeeee; */
    /* font-size: 14px; */
    /* font-weight: 700; */
    /* font-style: normal; */
    /* letter-spacing: 1.4px; */
    line-height: normal;
    /* border-bottom: 1px solid #eeeeee; */
    /* margin-bottom: 10px; */
}
    .filter-content.form-group {
        /*margin-bottom: 12px;*/
    }
    .product-custum-slider {
      margin-left: 10px;
      margin-bottom: 10px;
      margin-top: 23px;
    }
    .btn-wishlist {
        border-radius: 50%;
        background: 0 0;
        border: 1px solid #d3d3d3;
        padding: 5px 5px 3px;
    }
    .btn-wishlist {
      	height: 27px;
        width: 27px;
    }
    .product-card .btn {
        padding: 5px 15px;
        font-size: 12px;
        border-radius: 20px!important;
    }
    .heading-section h4 {
        font-size: 18px;
    }
    .shoppingCartModal .modal-title.mt2{
            margin-top: -9px!important;
    }
    
        
        .product-section .form-control {
        	background-color: #f5f5f5;
        	/*width: 34%;*/
        	margin-top: 20px;
        	height: 30px;
        	padding: 5 15px;
        	border-radius: 50%;
        	font-size: 14px;
        	line-height: initial;
        	color: #222;
        	border: none;
        	border-radius: 12px;
        	-webkit-transition: .5s;
        	transition: .5s;
        }
        
        .btn-primary {
        	border-radius: 0px!important;
        }
        
        /*.category-section ::-webkit-scrollbar-thumb {*/
        /*	background: white!important;*/
        /*}*/
        
        /*.category-section ::-webkit-scrollbar {*/
        /*	width: 0px;*/
        /*}*/
        
        .btngroup button {
        	margin-right: 30px;
        	width: 100%;
        }

@media only screen and (max-width: 600px) {
    .custom-padding-row{
        padding-left:15px;
        padding-right:15px;
    }
    .data-content {
        padding-left:15px!important; 
        padding-right:15px!important;
        padding-top:0px!important;
        padding-bottom:0px!important;
        
    }
	.border-left {
		border-left: 1px solid #F6F6F6;
		border-bottom: 1px solid #F6F6F6;
	}
	.border-right {
		border-right: 1px solid #F6F6F6;
		border-bottom: 1px solid #F6F6F6;
	}
	.red_label {
		margin-top: -6px;
	}
	.btngroup button {
		margin-right: 0px;
		width: auto;
	}
	.custum-category-padding {
		margin: 0px;
	}
	.product-card .btn {
		padding: 5px 10px!important;
		border-radius: 20px!important;
	}
	.btn-wish .btn-wishlist {
		height: 26px;
	}
	.single-product-box .product-image {
		margin-top: 10px;
	}
	.detail-modal img {
		height: 22px;
	}
	.custum-category-padding {
		padding-left: 8px!important;
		padding-right: 4px!important;
	}
	
	.col-xs-6 {
		padding-left:5px !important;
		padding-right: 5px;
	}
}

#search {
	position: absolute;
	top: 4px;
	right: 0;
	left: 4px;
	font-size: 20px;
}

.category-name {
	padding: 8px;
	margin-left: 10px;
	margin-right: 10px;
	width: 26%;
	background: black;
	color: white;
}

body {
	background: #F6F6F6!important;
}

.fa-search {
	transform: rotateZ(79deg);
	/*font-size: 16px;*/
}

.btn-secondary {
	color: #fff;
	background-color: #6c757d !important;
	border-color: #6c757d !important;
	border-radius: 0px;
}


.data-content {
	background: #F6F6F6!important;
	padding-top: 0px;
	padding-left: 20px;
	padding-right: 10px;
	padding-bottom: 0px;
}

.btn {
	padding: 10px 12px !important;
}

.fa-plus {
	color: grey;
}



.mobile-padding-100 {}

@media only screen and (max-width: 600px) {
	.mobil-padding-0 {
		padding: 10px !important;
	}
	.mobile-padding-60 {
		padding-top: 60px;
	}
	section {
		overflow: hidden !important;
		padding-left: 0px !important;
		padding-right: 0px !important;
	}
}

@media only screen and (min-width: 1100px) {
	.col,
	.col-1,
	.col-10,
	.col-11,
	.col-12,
	.col-2,
	.col-3,
	.col-4,
	.col-5,
	.col-6,
	.col-7,
	.col-8,
	.col-9,
	.col-auto,
	.col-lg,
	.col-lg-1,
	.col-lg-10,
	.col-lg-11,
	.col-lg-12,
	.col-lg-2,
	.col-lg-3,
	.col-lg-4,
	.col-lg-5,
	.col-lg-6,
	.col-lg-7,
	.col-lg-8,
	.col-lg-9,
	.col-lg-auto,
	.col-md,
	.col-md-1,
	.col-md-10,
	.col-md-11,
	.col-md-12,
	.col-md-2,
	.col-md-3,
	.col-md-4,
	.col-md-5,
	.col-md-6,
	.col-md-7,
	.col-md-8,
	.col-md-9,
	.col-md-auto,
	.col-sm,
	.col-sm-1,
	.col-sm-10,
	.col-sm-11,
	.col-sm-12,
	.col-sm-2,
	.col-sm-3,
	.col-sm-4,
	.col-sm-5,
	.col-sm-6,
	.col-sm-7,
	.col-sm-8,
	.col-sm-9,
	.col-sm-auto,
	.col-xl,
	.col-xl-1,
	.col-xl-10,
	.col-xl-11,
	.col-xl-12,
	.col-xl-2,
	.col-xl-3,
	.col-xl-4,
	.col-xl-5,
	.col-xl-6,
	.col-xl-7,
	.col-xl-8,
	.col-xl-9,
	.col-xl-auto {
		position: relative;
		width: 100%;
		
	}
}

.product-card {
	background: transparent !important;
}

.btn-secondary {
	color: #fff;
	background-color: black!important;
	border-color: black !important;
	border-radius: 0px;
}


</style>
<!--victoria button css-->
<style>
 @media only screen and (max-width: 600px){
/*     .button-background:hover::after{*/
/*    -webkit-transform: scaleX(1);*/
/*    transform: scaleX(1);*/
/*    left: -5px!important;*/
/*   width: 100px;*/
/*    border-bottom:5px solid darkgrey!important;*/
/*}*/
/*.button-background::after{*/
/*          content: '';*/
/*    display: block;*/
/*    position: relative;*/
/*    bottom: -14px;*/
/*    left: 5px;*/
    
/*    width: 5px;*/
/*    border-bottom: 5px solid darkgrey!important;*/
/*    -webkit-transform: scaleX(1);*/
/*    transform: scaleX(1);*/
/*    -webkit-transform-origin: 50%;*/
/*    transform-origin: 50%;*/
/*    -webkit-transition-property: transform;*/
/*    transition-property: transform;*/
/*    -webkit-transition-duration: 0.3s;*/
/*    transition-duration: 0.3s;*/
/*    -webkit-transition-timing-function: ease-out;*/
/*    transition-timing-function: ease-out;*/
/*}*/
 }
  @media only screen and (min-width: 600px){
/*      .button-background:hover::after{*/
/*    -webkit-transform: scaleX(1);*/
/*    transform: scaleX(1);*/
/*    left:-15px!important;*/
/*   width: 222px;*/
/*    border-bottom:5px solid darkgrey!important;*/
/*}*/
/*.button-background::after{*/
/*          content: '';*/
/*    display: block;*/
/*    position: relative;*/
/*    bottom: -17px;*/
/*    left: 9px;*/
/*    width: 5px;*/
/*    border-bottom: 5px solid darkgrey!important;*/
/*    -webkit-transform: scaleX(1);*/
/*    transform: scaleX(1);*/
/*    -webkit-transform-origin: 50%;*/
/*    transform-origin: 50%;*/
/*    -webkit-transition-property: transform;*/
/*    transition-property: transform;*/
/*    -webkit-transition-duration: 0.3s;*/
/*    transition-duration: 0.3s;*/
/*    -webkit-transition-timing-function: ease-out;*/
/*    transition-timing-function: ease-out;*/
/*}*/
  }

    .hvr-shutter-out-horizontal {
    position: absolute;
    top: 40%;
    margin-left: -225px;
    display: inline-block;
    vertical-align: middle;
    min-height: 10px;
    min-width: 12px;
    -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    box-shadow: 0 0 1px rgb(0 0 0 / 0%);
    position: abh;
    background: #e1e1e1;
    -webkit-transition-property: color;
    transition-property: color;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    } 
    .hvr-shutter-out-horizontal:hover, .hvr-shutter-out-horizontal:focus, .hvr-shutter-out-horizontal:active {
    color: white;
}
.hvr-shutter-out-horizontal:hover:before, .hvr-shutter-out-horizontal:focus:before, .hvr-shutter-out-horizontal:active:before {
    -webkit-transform: scaleX(1);
    transform: scaleX(1);
    width:221px;
}
.hvr-shutter-out-horizontal:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    width:10px;
    background: #2098D1;
    -webkit-transform: scaleX(0);
    transform: scaleX(0);
    -webkit-transform-origin: 50%;
    transform-origin: 50%;
    -webkit-transition-property: transform;
    transition-property: transform;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out;
}
/*extra css*/
    div.checkRadioContainer > label > input {
	visibility: hidden;
}
/* Create a custom checkbox */


div.checkRadioContainer {
    max-width: 100%;
    padding-left: 0px!important;
}
div.checkRadioContainer > label {
	display: block;
	/* border: 2px solid grey; */
	margin-bottom: -2px;
	cursor: pointer;
}

/*div.checkRadioContainer > label:hover {*/
/*	background-color: AliceBlue;*/
/*}*/

div.checkRadioContainer > label > span {
	display: inline-block;
    vertical-align: top;
    line-height: 35px;
    font-size: 16px;
    font-weight: 500;
    margin-left: 30px;
}
.box {
   border: 1px solid lightgrey; 
   position: absolute;
    height: 18px;
    width: 18px;
    /* padding: 0px; */
    margin-left: 1px;
    margin-top: 8px;
    /*border: 1px solid #111;*/
    border-radius: 5px;
    background:white;
}
.box[checked='checked']{
    background:black!important;
}
span[font='bold'],label[font='bold'] {
    font-weight:800!important;
}

div.checkRadioContainer > label > input + i {
   visibility: hidden;
    color: white;
    /* margin-left: -0.5em; */
    margin-right: 16px;
    margin-top: 12px;
    margin-left: 5px;
    position: absolute;
    font-size: 10px;
    /* width: 20px; */
    font-weight: 600;
}
div.checkRadioContainer > label > input:checked + i {
	visibility: visible;
}


/*css added by 06-02*/
/*extra css*/
</style>
<input type="hidden" id="slug" value="<?= $slug ?>">
<div class="modal right fade shoppingCartModal" id="filtersidebarModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document" style="width:80%;">
         <div class="modal-content" style="overflow-x: hidden;">
            <div class="modal-header" style="border-bottom: 0px solid #dee2e6;background:url('<?= base_url()?>assets/img/shadow.PNG')">
               <h5 class="modal-title mb-2">Filters</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="font-size:30px; color:black !important; top:10px;">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span-->
            <!--        aria-hidden="true">&times;</span></button>-->
            <div class="modal-body p-0">
               <!--<h3>Arteno</h3>-->
               <div class="product-cart-content mobile-sidebar">
                  <div class="modal-body" style="padding:0px;">
                     <div class="card border-0 " style="background-color: transparent!important;">
                          <div class="card-body pt-0">
                         <!--<form action="">-->
                            <div class="input-group input-sm search-desginer mb-3">
                                <div class="input-group-prepend" style="height:34px;">
                                    <button class="btn btn-secondary btn-sm designerLoader"><i class="fa fa-search"></i></button>
                                </div>
                                <input type="name" class="half-rounded shadow-sm" id="" onchange="search_designer1(this.value)" placeholder="SEARCH BY DESIGNER" aria-describedby="inputGroupPrepend2" style="height:34px;outline: 0px; background:#eee;padding-left:8px; border:0px; border-radius: 5px;" required>
                            </div>
                        <!--</form>-->
                        <div class="mdsearch">
                        <?php  $i = 1; foreach($designer as $design):?>
                        <div class="form-group mb-0 mmt" style="margin-bottom: 0rem;">
                            
                           <div class="form-check">
                              <label class="custom-checkbox-designer" for="mdesigner<?= $design->id?>" style=""><?= $design->user_fullname?>

                              <input class="designer-search-checkbox designers"  onclick ="category_data(slug1,scroll='inactive',offset=0)" type="checkbox" id="mdesigner<?= $design->id?>" value="<?= $design->id?>"/>
                           <span class="checkmark"><i class="fa fa-check"></i></span>
                            </label>
                            </div>
                        </div>
                        <?php $i++; endforeach;?>
                        </div>
                         <h6 class="collapse-widget-title mt-2" style="letter-spacing: 1.6px;padding-top: 10px; padding-bottom: 10px;">FILTER BY CATEGORY</h6>
                        <div class="filter-category">
                         <?php $i=1; foreach($category as $cat): ?>
                        <div class="form-group mb-0">
                             <div class="form-check checkRadioContainer">
                                 <label for="cat<?= $cat->slug ?>1">
                                    <div id="mcat<?= $cat->slug ?>1" class="box"></div>
                                    <input class="form-check-input designer categories" name="category"  id="cat<?= $cat->slug ?>1" onclick="category_data(this.value, scroll='inactive', offset=0, this.checked, true)" type="radio" value="<?= $cat->slug?>" />
                                    <i class="fa fa-check"></i>
                                    <span id="mcatspan<?= $cat->slug ?>1" class="catspan"><?= $cat->name;?></span>
                                </label>
                            </div>
                        </div>
                      <?php $i++; endforeach;?>
                      </div>
                      </div>
                      </div>
                  </div>
               </div>
               
               <!--<div class="product-cart-subtotal">-->
               <!--    <span>Subtotal</span>-->
               <!--    <span class="subtotal">$500.00</span>-->
               <!--</div>-->
            </div>
         </div>
      </div>
   </div>
   <style>
       /*.filter-category{*/
       /*    min-height:300px;*/
       /*    max-height:700px;*/
       /*    overflow-y:scroll;*/
       /*}*/
       
   </style>
<section class="product-main mpt-48">
    <div class="container">
        <center><h4 class="mt-4"><b style="font-size:40px!important;" class="shop_text">SHOP</b></h4>
            <div class="btngroup row custom-padding-row">
                <div class="col-md-3"></div>
                <?php $i=1;
                    foreach($category1 as $cat): ?>
                    <div class="col-md-2 button-background" style="margin:5px">
                    <input type="radio" id="mcat<?=$cat->slug?>" onchange="category_data(slug1, scroll='inactive', offset=0)" class="category" name="product" <?= ($cat->slug==$slug)?"checked":"" ?> value="<?=$cat->slug?>" />
                    <a href="<?= base_url().$cat->slug ?>" style="color:white"><?= $cat->name;?></a>
                    <!--<label for="mcat<?= $cat->slug ?>" ><?= $cat->name;?></label>-->
                     <!--<div class="button-line"> </div>-->
                </div>
                <?php $i++; endforeach;?>
               <div class="col-md-3"></div>
            </div>
            
            
        </center>
    </div>
</section>
<hr>
<section class="d-lg-none d-md-block d-sm-block d-xs-block shadow-sm filter-header" >
   <div class="container">
      <a data-toggle="modal" class="p-1" data-target="#filtersidebarModal"><span style="font-size:20px;margin-top:8px"><i class="fa fa-filter" aria-hidden="true"></i> Filter 
      <!--<span class="cart-value">1</span>-->
      </span></a>
   </div>
   <!--mobil filter sidebar-->
   
   <!--mobil filter sidebar-->
</section>

<section>
    <div class="product-page">
        <div class="sidenav">
            <div class="card bg-dark border-0 ">
                        <div class="card-header bg-none"stye="padding:0px!important">
                           
                        </div>
                        <div class="card-body left-scroller card-sidebar-tablet">
                             <h3 class="collapse-widget-title d-none d-md-block">SEARCH BY DESIGNER </h3>
                         <!--<form action="" method="post" class="mt-4" id="searchForm">-->
                                <div class="input-group input-sm search-desginer">
                                    <div class="input-group-prepend" style="height:34px;">
                                        <button class="btn btn-secondary btn-sm designerLoader"><i class="fa fa-search"></i></button>
                                      <!--<span class="input-group-text" id="inputGroupPrepend2">@</span>-->
                                    </div>
                                    <input type="name" id="searchText" name="search_designer" value="<?= $search_designer ?>" class="half-rounded search-designer  shadow-sm" onchange="search_designer1(this.value)"  placeholder="SEARCH BY DESIGNER" aria-describedby="inputGroupPrepend2" style="height:34px; background:#eee;padding-left:8px; border:0px; border-radius: 5px;width:80%" required>
                                    <div class="input-group-prepend" style="height:34px;">
                                        <span id="designerLoader"></span>
                                    </div>
                                </div>
                            <!--</form>-->
                            <div class="">
                             <div class="ddsearch mt-2" style="max-height: 200px; overflow-y: scroll;">
                                 
                             
                            <?php  $i = 1; foreach($designer as $design):?>
                            <div class="form-group" style="margin-bottom: 0rem;">
                                
                                
                               <div class="form-check">
                                   <label class="custom-checkbox-designer" for="desktop<?= $design->id ?>"><?= $design->user_fullname ?>
                                  <input class="designer-search-checkbox designers" id="desktop<?= $design->id  ?>" onchange="category_data(slug1,scroll='inactive',offset=0)" type="checkbox"  value="<?= $design->id?>"/>
                                   <span class="checkmark"><i class="fa fa-check"></i></span>
                                   </label>
                                </div>
                            </div>
                            <?php $i++; endforeach;?>
                             </div> 
                            <br>
                             <h6 class="collapse-widget-title d-none d-md-block" style="letter-spacing: 1.6px;display:none;">FILTER BY CATEGORY</h6>
                            <div class="filter-category-desktop" id="cat_filter">
                             <?php $i=1; foreach($category as $cat): ?>
                             
                             <div class="form-group mb-0">
                                 <div class="form-check checkRadioContainer">
                                     <label for="filter<?= $cat->slug ?>1">
                                        <div id="mlaptop<?= $cat->slug ?>" class="box"></div>
                                        <input class="form-check-input designer categories" name="category" id="filter<?= $cat->slug ?>1" onclick="category_data(this.value,scroll='inactive',offset=0,this.checked, true)" type="radio"  value="<?= $cat->slug?>" />
                                        <i class="fa fa-check"></i>
                                        <span id="mlaptopspan<?= $cat->slug ?>" class="catspan"><?= $cat->name; ?></span>
                                    </label>
                                </div>
                            </div>
                          <?php $i++; endforeach;?>
                          </div>
                            </div>
                          </div>
                     </div>
        </div>
        <script>
                       function unCheckFilter(newobj){
                           
                           console.
                           alert(radioid);
                           var attr = $('#'+radioid).attr('checked');
                            if (typeof attr !== 'undefined' && attr !== false) {
                                alert('cheked');
                            }
                           
                           
                       }
                   </script>
        <div class="main filter-content slider-content">
            <div class="data-content mt-2" id="product_list_area">
                <div class="row" id="products-filter">
                    <div style="text-align:center" id="nodata"></div>
                </div>
                <div class="justify-content-center" id="product_loader" style="margin-left:40%;display:none;">
                    <img src="<?= get_url('main_spinner') ?>" style="position:absoulte;left:40%; height:80px; width:80px"/>
                </div>
                <div id="product_more_loader" style="scroll-behavior: smooth;">&nbsp;</div>
            </div>
        </div>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<?php include('includes/footer.php'); ?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>

// alert(<?= $currency?>);
var currency = "Rs";
$(document).ready(function() {
    // var scroller = $(".slider-content");
    // scroller.on("scroll", function(){
    //     // alert("Scroll start 1");
    //     if(scroller.scrollTop + scroller.offsetHeight >= scroller.scrollHeight) {
    //         alert("Scrolling...");
    //         get_more();
    //     }
    // });
});


$(document).on("click",'.addwish',function(){
        var temp_id = $(this).data("tempid");
        var base_id = $(this).data("base");
            $(this).toggleClass("wished");
            $(this).toggleClass("addwish");
            $(this).toggleClass("removewish");
             loader_all('wishLoader'+temp_id, '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>',true);
           
           $.ajax({
            url:"<?= base_url()?>Front/addwishlist/",
             method:"GET",
            data:{temp_id:temp_id,base_id:base_id},
            success:function(r){
                 loader_all('wishLoader'+temp_id, '<i class="wished1 fa fa-heart"></i>',false);
                wishcount();
             swal("Added to wishlist ",{
                      icon: "success",
                       button: false,
                       timer: 1200,
                       
     });
            }
        });
        
   });

    $(".slider-content").scroll(function() { //detact scroll in desktop
        // alert("Scrolling...");
		if($(".slider-content").scrollTop() + $(window).height() >= $("#products-filter").height()){ 
		    
		    //scrolled to bottom of the page
 			// $(document).on("scroll",".slider-content",function(){
                if(scrolling == "stop")
                    get_more();
            // });
		}
	});
    $(".slider-content").on("touchmove", function() { //detact scroll in mobile
		if($(".slider-content").scrollTop() + $(window).height() >= $("#products-filter").height()){ //scrolled to bottom of the page
 			// $(document).on("scroll",".slider-content",function(){
                if(scrolling == "stop")
                    get_more();
            // });
		}
	});
    $(document).on("click",".removewish",function(){
        // var id = $(this).data("id");
        var id = $(this).data("tempid");
        var base_id = $(this).data("base");
        $(this).toggleClass("wished");
        $(this).toggleClass("addwish");
        $(this).toggleClass("removewish");
        loader_all('wishLoader'+id, '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>',true);

        $.ajax({
            url:"<?= base_url()?>Front/remove_wish/",
            method:"POST",
            data:{Id:id},
            success:function(r) {
                loader_all('wishLoader'+id, '<i class="far fa-heart"></i>',false);
                wishcount();
                swal("Removed from wishlist ", {
                    icon: "success",
                    button: false,
                    timer: 1200,
                });
            }
        });   
            
    });
    offset = 0;
    scroll = 'inactive';
    cat_slug = '<?= $slug ?>';
    selected_slug1 = "";
    slug1 = "";
//  function price_data(price)
//     {   
//         $("#products-filter").html('<div class="justify-content-center" style="position:absoulte;left:40%;"><img src=" <?=base_url()?>assets/img/unnamed.gif" style="position:absoulte;left:40%; height:80px; width:80px"/></div>');
//         $(".cat" + slug).attr('checked', true);
//         var slug = get_slug("category");
//         var designer = get_filter("designer");
//          var log_id = "<?= $_SESSION['user_id']?>";
//          $.ajax({
//         url:"<?= base_url()?>Front/category_data/",
//         method:"POST",
//         data:{'Slug':slug,'Design':designer,'Price':price},
//         dataType:"json",
//         success:function(e){
//             $("#product_loader").hide();
//             var data1 = e;
//             var num = data1.length;
//             if(num > 0){
//              $.each(data1,function( key, data ) {
//           if(data.user_image!=""){
//             var icon = data.user_image;
//         }else{
//             var icon = "<?= default_designer_image() ?>";
//         }
//      var extra = (data.extras)?JSON.parse(data.extras):"";
//         if(extra!= ""){
//             if($.inArray(data.color,extra.color)!==-1){
                
//             var mrp = data.mrp;
//             var price = parseInt(data.price)+parseInt(extra.amount)+parseInt(data.designerCharge);
//             var discount =Math.floor(parseInt(((mrp-price)/mrp)*100));
//             }
//             else{
//             var mrp = data.mrp;
//             var price = parseInt(data.price)+parseInt(data.designerCharge);;
//             var discount = Math.floor(parseInt(((mrp-price)/mrp)*100));
//             } 
//         }
//         else{
//             var mrp = data.mrp;
//             var price = parseInt(data.price)+parseInt(data.designerCharge);;
//             var discount = Math.floor(parseInt(((mrp-price)/mrp)*100));
//             } 
                
//               if(log_id!=""){
//           if(data.wishproduct == data.id ){
//                 var w=' <span class="btn-wish"><button class="btn-wishlist  wished removewish" data-tempid ="'+data.id+'" data-base="'+data.pid+'" data-id="'+data.w_id+'"><i class="far fa-heart"></i></button></span>'; 
                
//               }else{
//              var w = ' <span class="btn-wish"><button class="btn-wishlist addwish" data-tempid ="'+data.id+'" data-base="'+data.pid+'" data-id="'+data.w_id+'"><i class="far fa-heart"></i></button></span>';
//           }
//       }else{
//          var w = ' <span class="btn-wish"><button class="btn-wishlist"   data-toggle="modal" data-target="#loginotpmodal"><i class="far fa-heart"></i></button></span>';
              
//       } 

//           var d = '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">'+
//                     '<div class="single-product-box product-card">'+
//                   '<div class="product-image" onMouseOver="show_slider(\'product_slider'+data.id+'\',\'product_image'+data.id+'\')" onMouseOut="hide_slider(\'product_slider'+data.id+'\',\'product_image'+data.id+'\')">'+
//                       '<a href="<?= base_url()?>' + data.baseslug + '/'+ data.id+'" id="product_image'+data.id+'">'+
//                      '<img src="'+data.image+'" alt="image" >'+
//                     '</a>'+
//                   '<div id="product_slider'+data.id+'" style="display:none">'+
//                   '<div id="carouselExampleIndicators'+data.id+'" class="carousel slide " data-ride="carousel">'+
//                  '<ol class="carousel-indicators">';
//                  for( var i=1; i< counter(data.pid); i++){
//                   if(i==1){
//                     var st = "active";}else{
//                         var st = "";
//                     }
//               d   =   d +  '<li data-target="#carouselExampleIndicators'+data.id+'" data-slide-to="'+i+'" class="'+st+'"></li>';
             
//               } 
                
               
//              d = d + '</ol>'+
//               '<div class="carousel-inner">';
//               for( var i=1; i< counter(data.pid); i++){
//                   if(i==1){
//                     st = "active";
//                   }else{
//                       st ="";
//                   }
//               d   =   d+  '<div class="carousel-item '+st+'">'+
//                                   '<img class="d-block w-100" src="<?=base_url()?>uploads/templates/' + data.baseslug+'-'+"black"+'-side'+i+'.png" alt="First slide">'+
//                                  '</div>';
             
//               } 
             
//           d = d +
//               '</div>'+
//               '</div>'+
//             '</div>'+
//             '</div>'+
//          '<span style="position: absolute; top: 0px; left: 0px;">'+
//       ' </span>'+
//      '   </span>'+
//     '<p class="designer_area"><a href ="<?= base_url()?>Designer/'+data.designer_id+'" style="color:white"> <img src="'+ icon +'" class="designer_image" alt="...">'+
//     '<span class="design_title">Designed By:</span> <span class="three-dot designer-name">'+data.user_fullname+'</span></a></p>'+
//     '<div class="product-content text-left">'+
//     '<h3><a href="<?= base_url()?>'+ data.baseslug+'/'+data.id+'" id="product_image11">'+ data.name+'</a></h3>'+
//     '<div class="product-price" >'+
//   '<span class="new-price" id="actual_price'+data.id+'">'+ currency +" " +   price   +  '</span>'+" "+
//     '<span class="old-price" id="oldactual_price'+data.id+'">'+ currency+ " " +  mrp  + '</span>'+" "+
//     '<span class="offer-price" id="actual_priceoff'+data.id+'"> (' + discount + "%" +" off" +')</span>'+
//                             '</div>'+
//     '<a href="<?=base_url('customizer')?>?product='+ data.pid +'&template='+data.id+'" class="btn btn-light btn-edit">Edit Design</a>'+
//     w+
//     '</div>'+
//     '</div>'+
//     '</div>';
    
//       $(".name").html(data.catname +"("+ num +")");
      
//       if(offset == 0)
//          $("#products-filter").html('');
//       else
//         $("#products-filter").append(d);
//     });
//         } else {
//             $(".name").html("");
            
            
//             var notfounddata="<div class='not-found'><center><img src='<?= base_url()?>assets/premade.gif'><p>No design found</p></center></div>";
//           $("#products-filter").html(notfounddata);

//         }
//     }     
//     });
//     } 
    function set_filter_font(class_name, val)
    {
        $('.'+class_name+':checked').each(function(){
            $(this).parent().attr("font", val);
        });
        return true;
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    } 
    
    function get_slug(class_name)
    {
        var slug = '';
        $('.'+class_name+':checked').each(function(){
            slug = $(this).val();
        });
        return slug;
    }    
    
    function set_slug(class_name, val)
    {
        $('.'+class_name+':checked').each(function(){
            this.checked = val;
        });
        return true;
    }
    
    function counter(base){
        if(base == 2){
            return 2;//4;
        }else if(base == 3){
            return 2;
        }else if(base == 4){
            return 2;
        }else{
           return 3; 
        }
    }
    function sides_array(base){
        
        if(base == 2){
        var side_arrayas = ["front","back","left","right"];    
            return side_arrayas;
        }else if(base == 3){
            var side_arrayas = ["front","back","side"];
            return side_arrayas;
        }else{
            var side_arrayas = ["front","left","right"];
            return side_arrayas;
        }
    }
    
   var stop ="0";
      function isJson(str) {
    try {
        JSON.parse(str);
    } catch (e) {
        return false;
    }
    return true;
}
function bothdata(key){
var callback_data = "";
  $.ajax({
          url:"<?= base_url()?>Front/bothData/",
          method:"POST",
          dataType:"json",
           async: false,
          data:{'key':key},
          success:function(r){
              callback_data =r.d;
          }
      });
    return callback_data;
}

    function category_data_load() {
        // alert("Loading...");
        return category_data(slug1,scroll='inactive',offset=0);
    }

    function category_data(slug2,scroll,offsets, set_checked, is_cat){
        slug1 = slug2;
        // alert(scroll + "  " + offset );
        //condition scrolling
        scrolling = "start";
        var price = "";
        if(offsets==undefined)
            offset = 0;
        else
            offset = offsets;
        var reset_list = 0;
        if(offset == 0 && scroll != 'active') {
            reset_list = 1;
            $("#products-filter").html('');
            $("#product_loader").html('<img src="<?= get_url('main_spinner') ?>" style="position:absoulte;left:40%; height:80px; width:80px"/>');
        }
        $("#product_loader").show();

        if(slug1!="" && scroll=="inactive" && (set_checked || is_cat)) {
            $(".box").attr('checked', false);
            $(".catspan").attr('font', '');
            // alert("clicked");
            if(selected_slug1 == slug1) {
                $("#mcat"+slug1+"1").attr('checked', false);
                // $("#cat"+slug1+"1").attr('checked', false);
                $("#mlaptop"+slug1).attr('checked', false);
                slug1 = "";
                set_slug("categories", false);
                // set_slug("category", false);
            } else {
                $("#mcat"+slug1+"1").attr('checked', true);
                // $("#cat"+slug1+"1").attr('checked', true);
                $("#mlaptop"+slug1).attr('checked', true);

                $("#mcatspan"+slug1+"1").attr('font', 'bold');
                $("#mlaptopspan"+slug1).attr('font', 'bold');                  
            }
            selected_slug1 = slug1;
        }
        var product_slug = $('[name="product"]:checked').val();
        
        var slug = get_slug("categories");
        
        var designer = get_filter("designers");
        $(".custom-checkbox-designer").attr("font", "");
        set_filter_font("designers", "bold");
        var log_id = "<?= $_SESSION['user_id']?>";
        var data = {'Slug':slug,'Design':designer,'offset':offset,'price':price,'product_slug':product_slug};
        $.ajax({
            url:"<?= base_url()?>Front/category_data/",
            method:"POST",
            data:data,
            dataType:"json",
            success:function(e) {
                scrolling = "stop";
                $("#product_loader").hide();
                var data1 = e.data;
                var num = data1.length;
                if(num > 0) {
                    if(offset == 0) offset = offset+8;
                    if(reset_list == 1)
                        $("#products-filter").html("");
                    $.each(data1,function( key, data ) {
                      var side_array = sides_array(data.pid);
                        if((data.user_image!="") && (data.user_image!=null)) {
                            var icon = data.user_image;
                        } else {
                            var icon = "<?= default_designer_image() ?>";
                        }
                        var extra = (data.extras)?JSON.parse(data.extras):"";
                        var backside_charge = (data.no_of_stages>1)?(data.backCharge):0; //Back side charge mannualy added. 150//
                        var sides = data.side;
                           var screenshots = isJson(data.screenshot)?JSON.parse(data.screenshot):data.screenshot;
                        if(extra != "") {
                            if($.inArray(data.color,extra.color)!==-1) {
                                var extra_from_product = parseInt(extra.amount)+(parseInt(data.designerCharge)*parseInt(data.no_of_stages))+parseInt(backside_charge);
                                var mrp = parseInt(data.mrp)+parseInt(extra_from_product);
                                var price = parseInt(data.price)+parseInt(extra_from_product);
                                var discount =Math.floor(parseInt(((mrp-price)/mrp)*100));
                            } else {
                                var extra_from_product = (parseInt(data.designerCharge)*parseInt(data.no_of_stages))+parseInt(backside_charge);
                                var mrp = parseInt(data.mrp)+parseInt(extra_from_product);
                                var price = parseInt(data.price)+parseInt(extra_from_product);
                                var discount = Math.floor(parseInt(((mrp-price)/mrp)*100));
                            }
                        } else {
                            var extra_from_product = (parseInt(data.designerCharge)*parseInt(data.no_of_stages))+parseInt(backside_charge);
                            var mrp = parseInt(data.mrp)+parseInt(extra_from_product);
                            var price = parseInt(data.price)+parseInt(extra_from_product);
                            var discount = Math.floor(parseInt(((mrp-price)/mrp)*100));
                        }
                        if(log_id!="") {
                            if(data.wishproduct == data.id) {
                                var w = '<span class="btn-wish"><button class="btn-wishlist  wished removewish" data-tempid ="'+data.id+'" data-base="'+data.pid+'" data-id="'+data.w_id+'" id="wishLoader'+data.id+'"><i class="fa fa-heart"></i></button></span>';
                            } else {
                                var w = '<span class="btn-wish"><button class="btn-wishlist addwish" data-tempid ="'+data.id+'" data-base="'+data.pid+'" data-id="'+data.w_id+'" id="wishLoader'+data.id+'"><i class="far fa-heart"></i></button></span>';
                            }
                        } else {
                            var w = '<span class="btn-wish"><button class="btn-wishlist" data-toggle="modal" data-target="#loginotpmodal"><i class="far fa-heart"></i></button></span>';
                        }

                        var d = '<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-6">'+
                            '<div class="single-product-box product-card">'+
                            '<div class="product-image" onMouseOver="show_slider(\'product_slider'+data.id+'\',\'product_image'+data.id+'\')" onMouseOut="hide_slider(\'product_slider'+data.id+'\',\'product_image'+data.id+'\')">'+
                            '<a href="<?= base_url()?>' + data.baseslug + '/'+ data.tempSlug+'" id="product_image'+data.id+'">'+
                            '<img src="'+data.image+'" alt="image" >'+
                            '</a>'+
                            '<div id="product_slider'+data.id+'" style="display:none">'+
                            '<div id="carouselExampleIndicators'+data.id+'" class="carousel slide " data-ride="carousel">'+
                            '<ol class="carousel-indicators">';
                        if(data.pid != 4){
                             for( var i=0; i< counter(data.pid); i++){
                            if(i==0) {
                                var st = "active";
                            } else {
                                var st = "";
                            }
                            d = d + '<li data-target="#carouselExampleIndicators'+data.id+'" data-slide-to="'+i+'" class="'+st+'"></li>';
                        }        
                        }
                        

             d = d + '</ol>'+
              '<div class="carousel-inner">';
              if(data.pid != 4){
            for( var i=1; i< counter(data.pid); i++){
               
                
                
                if(isJson(data.screenshot)){
                         if(i == 1  &&  sides == "both"){
                            
                            if(data.template_ids!=""){
                            var bothData = [data.front_screenshot, data.back_screenshot];//bothdata(data.template_ids);

                            for(var j =0; j<bothData.length;j++){
                              var both = bothData[j];
                              
                              var ac;
        
                             if(j==0){
                                 ac = "active";
                            }
                                 d   =   d+  '<div class="carousel-item '+ac+'">'+
                                    '<a href="<?= base_url()?>' + data.baseslug + '/'+ data.tempSlug+'" id="product_image"><img class="d-block w-100" src="'+both+'" alt="Front slide"></a>'+
                                    '</div>';
                                     d   =   d+  '<div class="carousel-item ">'+
                                    '<a href="<?= base_url()?>' + data.baseslug + '/'+ data.tempSlug+'" id="product_image"><img class="d-block w-100" src="'+bothData[1]+'" alt="Back slide"></a>'+
                                    '</div>';
                             j++;
                            
                             }
                             
                            
                            }else{
                                d   =   d+  '<div class="carousel-item active">'+
                                    '<a href="<?= base_url()?>' + data.baseslug + '/'+ data.tempSlug+'" id="product_image"><img class="d-block w-100" src="'+screenshots.front+'" alt="Front slide"></a>'+
                                    '</div>';
                                    d   =   d+  '<div class="carousel-item ">'+
                                    '<a href="<?= base_url()?>' + data.baseslug + '/'+ data.tempSlug+'" id="product_image"><img class="d-block w-100" src="'+screenshots.back+'" alt="Back slide"></a>'+
                                    '</div>';
                                    
                            }
                        }
                        else if(i == 1){
                            if( i==1  && sides == "front"){
                                d   =   d+'<div class="carousel-item active">'+
                                    '<a href="<?= base_url()?>' + data.baseslug + '/'+ data.tempSlug+'" id="product_image"><img class="d-block w-100" src="'+screenshots.front+'" alt="Front slide"></a>'+
                                    '</div>'; 
                                    
                            }
                            else{
                                   d=   d+'<div class="carousel-item active">'+
                                        '<a href="<?= base_url()?>' + data.baseslug + '/'+ data.tempSlug+'" id="product_image"><img class="d-block w-100" src="'+data.image+'" alt="Front slide"></a>'+
                                        '</div>';
                            }    
                         }
                         else if( i==2 ){
                           if( i == 2 && sides == "back"){
                                 d   =   d+  '<div class="carousel-item ">'+
                                    '<a href="<?= base_url()?>' + data.baseslug + '/'+ data.tempSlug+'" id="product_image"><img class="d-block w-100" src="'+screenshots.back+'" alt="Back slide"></a>'+
                                    '</div>';
                            
                         }else{
                                     d   =   d+  '<div class="carousel-item">'+
                                      '<a href="<?= base_url()?>' + data.baseslug + '/'+ data.tempSlug+'" id="product_image"><img class="d-block w-100" src="<?=base_url()?>assets/mockups/sides/' + data.pid+"/"+side_array[i]+'.png" style="background-color:'+ data.color+' " alt="First slide"></a>'+
                                    '</div>';
                         }
                         }
                         else{
                               d   =   d+  '<div class="carousel-item">'+
                                      '<a href="<?= base_url()?>' + data.baseslug + '/'+ data.tempSlug+'" id="product_image"><img class="d-block w-100" src="<?=base_url()?>assets/mockups/sides/' + data.pid+"/"+side_array[i]+'.png" style="background-color:'+ data.color+' " alt="First slide"></a>'+
                                    '</div>';
                         }
                    }else{
                          if(i==1){
                                    st = "";
                                    d   =   d+  '<div class="carousel-item active">'+
                                    '<a href="<?= base_url()?>' + data.baseslug + '/'+ data.tempSlug+'" id="product_image"><img class="d-block w-100" src="'+data.image+'" alt="First slide"></a>'+
                                    '</div>';
                            }
                                   d   =   d+  '<div class="carousel-item '+st+'">'+
                                     '<a href="<?= base_url()?>' + data.baseslug + '/'+ data.tempSlug+'" id="product_image"><img class="d-block w-100" src="<?=base_url()?>assets/mockups/sides/' + data.pid+"/"+side_array[i]+'.png" style="background-color:'+ data.color+' " alt="First slide"></a>'+
                                    '</div>';
                     }
             
              } 
              }else{
                    d   =   d+  '<div class="carousel-item active">'+
                                    '<a href="<?= base_url()?>' + data.baseslug + '/'+ data.tempSlug+'" id="product_image"><img class="d-block w-100" src="'+data.image+'" alt="First slide"></a>'+
                                    '</div>';
              }
          d = d +
              '</div>'+
              '</div>'+
            '</div>'+
            '</div>'+
         '<span style="position: absolute; top: 0px; left: 0px;">'+
      ' </span>'+
     '   </span>'+
    '<p class="designer_area"><a href ="<?= base_url()?>Designer/'+data.Uslug+'" style="color:white"> <img src="'+ icon +'" class="designer_image" alt="...">'+
    '<span class="design_title">Designed By:</span> <span class="three-dot designer-name">'+data.user_fullname+'</span></a></p>'+
    '<div class="product-content text-left">'+
    '<h3 class="product-title"><a href="<?= base_url()?>'+ data.baseslug+'/'+data.tempSlug+'" id="product_image11">'+ data.name+'</a></h3>'+
    '<div class="product-price" >'+
  '<span class="new-price" id="actual_price'+data.id+'">'+ currency +" " +   price   +  '</span>'+" "+
    '<span class="old-price" id="oldactual_price'+data.id+'">'+ currency+ " " +  mrp  + '</span>'+" "+
    '<span class="offer-price" id="actual_priceoff'+data.id+'"> (' + discount + "%" +" off" +')</span>'+
                            '</div>'+
    '<a href="<?=base_url('customizer')?>?product='+ data.pid +'&template='+data.id+'" class="btn btn-primary btn-edit">Customise</a>'+
    w+
    '</div>'+
    '</div>'+
    '</div>';
                        $(".name").html(data.catname +"("+ num +")");
                        $("#products-filter").append(d);
                        load_sliding_carousel();
                    });
                } else {
                  if((offset != 0 ) && num == 0){//offset != 8 && 
                            $(".name").append("");
                            // var notfounddata1="<div class='not-found'><center><img src='<?= base_url()?>assets/premade.gif'><p>No more data found</p></center></div>";
                            // $("#products-filter").append(notfounddata1);
                            $("#product_loader").html(""); 
                        }else{
                            if(offset == 0) offset = 8;
                            // $('#product_list_area').css({'padding-left': '0px', 'padding-right' : '0px','margin-top':'0px'});
                        var notfounddata1="<div class='not-found' style='margin:auto'><center><img src='<?= base_url()?>assets/no_product_found321.jpg'><p>No design found.</p></center></div>";
                        $("#products-filter").html(notfounddata1);
                  }
                }
            }
        });
        if(offset != 0) offset = offset+8;
        console.log(offset);
    }
    offset = 0;
    // category_data(cat_slug);
    // offset = 8;
    // scrolling = "start";
    scrolling = "stop";
    get_more();

    function get_more(){
        if(scrolling==undefined)
            scrolling = "stop";
        if(scrolling!="start") {
            scrolling = "start";
            var scroll = "active";
            category_data(slug1, scroll, offset);
            // offset = offset+8;
        }
    }
   function search_designer1(search){
       event.preventDefault();
       
       $(".designerLoader").html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');
    // var search = $("#validationDefaultUsername").val();
    $(".ddsearch").html('');
     $(".mdsearch").html('');
    $.ajax({
        cache: false,
	    headers: { "cache-control": "no-cache" },
        url:"<?= base_url()?>Front/designerList/",
        dataType:"json",
        method:"POST",
        data:{'search_designer':search},
        success:function(r){
            $(".ddsearch").html(r.data);
            $(".mdsearch").html(r.mdata);
            $(".designerLoader").html('<i class="fa fa-search"></i>');
            calculateScrollHeight();
        }
    }); 
   } 
</script>
<script>
    function calculateScrollHeight() {
        setTimeout(function() {
            var sx = document.getElementById("cat_filter").offsetTop;
            // alert(sx);
        }, 3000);
    }
    calculateScrollHeight();
</script>