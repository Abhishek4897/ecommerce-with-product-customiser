<html lang="en">
   <head>
      <title>Admin Panel</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="author" content="Binplus Technologies Pvt. Ltd." />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
      <!--<link rel="shortcut icon" href="<?php echo base_url()?>assets/images/artenologo.png" />-->
      <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/shareimagefavicon.png" />
      <link rel="stylesheet" href="<?php echo base_url() ?>assets1/pages/waves/css/waves.min.css" type="text/css"
         media="all">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets1/bower_components/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets1/icon/themify-icons/themify-icons.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
      <link rel="stylesheet" href="<?php echo base_url() ?>assets1/bower_components/switchery/css/switchery.min.css" type="text/css" media="all">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets1/icon/themify-icons/themify-icons.css">
      <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets1/css/jquery.mCustomScrollbar.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets1/plugins/switchery/dist/switchery.min.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets1/bower_components/jquery-bar-rating/css/bars-1to10.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets1/bower_components/jquery-bar-rating/css/bars-horizontal.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets1/bower_components/jquery-bar-rating/css/bars-movie.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets1/bower_components/jquery-bar-rating/css/bars-pill.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets1/bower_components/jquery-bar-rating/css/bars-reversed.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets1/bower_components/jquery-bar-rating/css/bars-square.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets1/bower_components/jquery-bar-rating/css/css-stars.css">
      <link rel="stylesheet" href="<?php echo base_url() ?>assets1/bower_components/c3/css/c3.css" type="text/css" media="all">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets1/bower_components/slick-carousel/css/slick.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets1/bower_components/slick-carousel/css/slick-theme.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets1/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
      <!-- <link rel="stylesheet" type="text/css" href="<?php //echo base_url() ?>assets1/assets1/pages/data-table/css/buttons.dataTables.min.css"> -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets1/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
      <link rel="stylesheet" href="<?php echo base_url() ?>assets1/pages/chart/radial/css/radial.css" type="text/css" media="all">
      <link rel="stylesheet" href="<?php echo base_url() ?>assets1/plugins/select-picker/css/bootstrap-select.min.css" type="text/css" media="all">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" type="text/css" media="all">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets1/bower_components/jquery.steps/css/jquery.steps.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets1/css/style.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets1/plugins/jqueryui/jquery-ui.css">
      
      <style>
         .card-footer .row{
         display:none!important;
         }
         #styleSelector ul li .btn-success{
         display:none!important;
         }
         #styleSelector ul li .btn-primary{
         display:none!important;
         }
         #styleSelector ul li .m-b-15{
         display:none!important;
         }
         #styleSelector ul li .btn-facebook{
         display:none!important;
         }
         #styleSelector ul li .btn-twitter{
         display:none!important;
         }
         @media only screen and (max-width: 992px){
         .header-navbar .navbar-wrapper .navbar-logo .mobile-menu {
         right: auto;
         left: 0;
         top: 10 !important;
         width: 60px;
         }}
         .pcoded[layout-type=dark] .table-bordered td, .pcoded[layout-type=dark] .table-bordered th,td {
         border: 1px solid #4c626d;
         color: grey;
         }
         .hidden-field{
         visibility:hidden!important;
         height:0px;
         width:0px;
         }
         .important{
         color:red;
         }
         .profile{
         height:200px;
         width:200px;
         border-radius:50%;
         }
         .del_button{
         display:inline!important;
         }
         .user-thumbnail {
         height: 75px!important;
         width: 75px!important;
         border-radius: 10%!important;
         }
         .user-thumbnail-profile {
         height: 75px!important;
         width: 75px!important;
         border-radius: 50%!important;
         }
         .dashed-border{
         padding:10px;
         border:1px dashed grey;
         cursor:pointer;
         }
         .user-thumbnail{
         height:40px;
         width:40px;
         border-radius:50%;
         }
         .multiple_image{
         height:100px;
         width:200px;
         display:inline-block;
         }
         #styleSelector ul li .btn-primary{
         display:none;
         }
         #styleSelector ul li .btn-success{
         display:none;
         }
         #styleSelector ul li .btn-facebook{
         display:none;
         }
         /*#styleSelector ul li span{*/
         /*    display:none;*/
         /*}*/
      </style>
   </head>
   <body>
      <div class="theme-loader">
         <div class="loader-track">
            <div class="preloader-wrapper">
               <div class="spinner-layer spinner-blue">
                  <div class="circle-clipper left">
                     <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                     <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                     <div class="circle"></div>
                  </div>
               </div>
               <div class="spinner-layer spinner-red">
                  <div class="circle-clipper left">
                     <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                     <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                     <div class="circle"></div>
                  </div>
               </div>
               <div class="spinner-layer spinner-yellow">
                  <div class="circle-clipper left">
                     <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                     <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                     <div class="circle"></div>
                  </div>
               </div>
               <div class="spinner-layer spinner-green">
                  <div class="circle-clipper left">
                     <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                     <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                     <div class="circle"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="pcoded" class="pcoded">
      <div class="pcoded-overlay-box"></div>
      <div class="pcoded-container navbar-wrapper">
      <nav class="navbar header-navbar pcoded-header">
         <div class="navbar-wrapper">
            <div class="navbar-logo">
               <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
               <i class="ti-menu"></i>
               </a>
               <a href="">
                  <!--<img class="img-fluid" src="<?php echo base_url() ?>assets1/images/logo.png"-->
                  <!--	alt="Theme-Logo" />-->
                  <h5>Admin</h5>
               </a>
               <a class="mobile-options waves-effect waves-light">
                  <!--<i class="ti-more"></i>-->
               </a>
            </div>
            <div class="navbar-container container-fluid">
               <ul class="nav-left">
                  <li>
                     <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a>
                     </div>
                  </li>
               </ul>
               <!--<ul class="nav-right">-->
               <!--	<li class="">-->
               <!--		<a href="<?php echo base_url()?>Deign/select_product" class="">-->
               <!--			<span>Start Desigining</span>-->
               <!--	   </a>-->
               <!--	</li>-->
               <!--	<li class="user-profile header-notification">-->
               <!--		<a href="#!" class="waves-effect waves-light">-->
               <!--			<img src="<?php echo base_url() ?>assets1/images/avatar-4.jpg" class="img-radius"-->
               <!--				alt="User-Profile-Image">-->
               <!--			<span>John Doe</span>-->
               <!--			<i class="ti-angle-down"></i>-->
               <!--		</a>-->
               <!--		<ul class="show-notification profile-notification">-->
               <!--			<li class="waves-effect waves-light">-->
               <!--				<a href="#!">-->
               <!--					<i class="ti-settings"></i> Change Password-->
               <!--				</a>-->
               <!--			</li>-->
               <!--			<li class="waves-effect waves-light">-->
               <!--				<a href="">-->
               <!--					<i class="ti-layout-sidebar-left"></i> Logout-->
               <!--				</a>-->
               <!--			</li>-->
               <!--		</ul>-->
               <!--	</li>-->
               <!--</ul>-->
            </div>
         </div>
      </nav>