   <style>
        /*.navbar{*/
        /*    display:none!important;*/
        /*}*/
        /*.header-navbar .pcoded-header .iscollapsed{*/
        /*    display:none!important;*/
        /*}*/
        .custom-color{
            color:#fff;
        }
        .color{
            height:30px;
            width:30px;
            border-radius:50%;
            border:2px solid white;
            display:inline-block;
         }
         .pcoded .pcoded-navbar .pcoded-item:after {
             display:none;
         }
  .pcoded[theme-layout=vertical][vertical-placement=left][vertical-nav-type=expanded][vertical-effect=shrink] .pcoded-content {
    margin-left: 350px;
   }
   .pcoded-inner-navbar .main-menu .mCustomScrollbar ._mCS_1{
    width:300px;
}
@media only screen and (max-width: 600px) {
   .pcoded-inner-navbar .main-menu .mCustomScrollbar ._mCS_1{
    width:250px!important;
}
}
.nav-right{
    display:none;
}
.w-100{
    width:100%!important;
}
.custom-file-input::-webkit-file-upload-button {
  visibility: hidden;
}
input[type="radio"] {
    visibility: hidden;
    height: 0px;
    width: 0px;
}
.shadow-sm {
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
}
.file-width{
    width:160px;
}
    </style>
    <!--only use for this page-->
    <style>
      @media only screen and (max-width: 992px){
.header-navbar .navbar-wrapper .navbar-logo .mobile-options {
    display:none;
}
}
    </style>
    <!--only use for this page-->
      <div id="sidebar" class="users p-chat-user showChat">
				<div class="had-container">
					<div class="card card_main p-fixed users-main">
						<div class="user-box">
							<div class="chat-search-box">
								<a class="back_friendlist">
									<i class="fa fa-chevron-left"></i>
								</a>
								<div class="right-icon-control">
									<form class="form-material">
										<div class="form-group form-primary">
											<input type="text" name="footer-email" class="form-control"
												id="search-friends" required="">
											<span class="form-bar"></span>
											<label class="float-label"><i class="fa fa-search m-r-10"></i>Search
												Friend</label>
										</div>
									</form>
								</div>
							</div>
							<div class="main-friend-list">
								<div class="media userlist-box waves-effect waves-light" data-id="1"
									data-status="online" data-username="Josephin Doe" data-toggle="tooltip"
									data-placement="left" title="Josephin Doe">
									<a class="media-left" href="#!">
										<img class="media-object img-radius img-radius"
											src="<?php echo base_url() ?>assets1/images/avatar-3.jpg"
											alt="Generic placeholder image ">
										<div class="live-status bg-success"></div>
									</a>
									<div class="media-body">
										<div class="f-13 chat-header">Josephin Doe</div>
									</div>
								</div>
								<div class="media userlist-box waves-effect waves-light" data-id="2"
									data-status="online" data-username="Lary Doe" data-toggle="tooltip"
									data-placement="left" title="Lary Doe">
									<a class="media-left" href="#!">
										<img class="media-object img-radius"
											src="<?php echo base_url() ?>assets1/images/avatar-2.jpg"
											alt="Generic placeholder image">
										<div class="live-status bg-success"></div>
									</a>
									<div class="media-body">
										<div class="f-13 chat-header">Lary Doe</div>
									</div>
								</div>
								<div class="media userlist-box waves-effect waves-light" data-id="3"
									data-status="online" data-username="Alice" data-toggle="tooltip"
									data-placement="left" title="Alice">
									<a class="media-left" href="#!">
										<img class="media-object img-radius"
											src="<?php echo base_url() ?>assets1/images/avatar-4.jpg"
											alt="Generic placeholder image">
										<div class="live-status bg-success"></div>
									</a>
									<div class="media-body">
										<div class="f-13 chat-header">Alice</div>
									</div>
								</div>
								<div class="media userlist-box waves-effect waves-light" data-id="4"
									data-status="online" data-username="Alia" data-toggle="tooltip"
									data-placement="left" title="Alia">
									<a class="media-left" href="#!">
										<img class="media-object img-radius"
											src="<?php echo base_url() ?>assets1/images/avatar-3.jpg"
											alt="Generic placeholder image">
										<div class="live-status bg-success"></div>
									</a>
									<div class="media-body">
										<div class="f-13 chat-header">Alia</div>
									</div>
								</div>
								<div class="media userlist-box waves-effect waves-light" data-id="5"
									data-status="online" data-username="Suzen" data-toggle="tooltip"
									data-placement="left" title="Suzen">
									<a class="media-left" href="#!">
										<img class="media-object img-radius"
											src="<?php echo base_url() ?>assets1/images/avatar-2.jpg"
											alt="Generic placeholder image">
										<div class="live-status bg-success"></div>
									</a>
									<div class="media-body">
										<div class="f-13 chat-header">Suzen</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			

			<div class="pcoded-main-container">
				<div class="pcoded-wrapper">
					<nav class="pcoded-navbar">
						<div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
						<div class="pcoded-inner-navbar main-menu" style="width:350px; background:#455a64;">
							<div class="">
								<div class="main-menu-header text-left pl-3 w-100">
								    <div class="user-details">
									    <h5 class="custom-color">Design Your Product</h5>
										<span id="more-details">Max file size of 50MB</span>
										<div class="row mt-3">
										    <div class="col-5">
										        <form>
										            <span>
										                <input type="file" class="btn btn-sm waves-effect waves-light hor-grd btn-grd-primary file-width" style="">
										            </span>
										            <!--<input type="file" placeholder="add file">-->
										            <!--<button  class="btn btn-sm waves-effect waves-light hor-grd btn-grd-primary "><i class="fa fa-picture-o" aria-hidden="true"></i>Add image</button>-->
										        </form>
										        
										   </div>
										    <div class="col-4">
										        <button class="btn p-2 waves-effect waves-light hor-grd btn-grd-primary "><i class="fa fa-pencil" aria-hidden="true"></i>Add text</button>
										        
										   </div>
									</div>
								</div>
							
							</div>
							
							<!--<div class="pcoded-navigation-label pt-15"></div>-->
							<ul class="pcoded-item pcoded-left-item p-2">
								<li class="p-2">
									<h6 class="heading-caption text-white">Choose Product Colors</h6>
									<span class="text-white">Select multiple background
									 colors to offer</span>
									 
									 <!--<span class="color" style="background:black;"></span>-->
								</li>
							     <li class="p-2">
							         <input type="radio" name="fabric" value="" id="red">
							         <label for="red">
                                           <span class="color" style="background:red;"></span>
                                    </label>
							         <input type="radio" name="fabric" value="" id="black">
							         <label for="black">
                                           <span class="color" style="background:black;"></span>
                                    </label>
							         <input type="radio" name="fabric" value="" id="blue">
							         <label for="blue">
                                           <span class="color" style="background:blue;"></span>
                                    </label>
									 <!--<span class="color" style="background:black;"></span>-->
								</li>
							    <hr>
								<li class="p-2">
									<h6 class="heading-caption text-white">Set Your Price</h6>
									<span class="text-white">Price for products fulfilled from the  US</span>
									<div class="row  mt-4">
									    <div class="col-3">
									        <button class="btn btn-mat waves-effect waves-light btn-inverse ">₹ 200</button>
									    </div>
									    <div class="col-6 text-right mt-2 text-white">
									       ₹12.17 profit/sale 
									    </div>
									</div>
									 
									 <!--<span class="color" style="background:black;"></span>-->
								</li>
							    <hr>
								<li class="p-2">
									<!--<h6>Set Your Price</h6>-->
									<span class="text-white">Price for products fulfilled from  the ₹</span>
									<div class="row  mt-4">
									    <div class="col-3">
									        <button class="btn btn-mat waves-effect waves-light btn-inverse ">₹ 200</button>
									    </div>
									    <div class="col-6 text-right mt-2 text-white">
									       ₹12.17 profit/sale 
									    </div>
									</div>
									 
									 <!--<span class="color" style="background:black;"></span>-->
								</li>
							    <hr>
								<li class="p-2">
									<div class="row">
									    <div class="col-3">
									        <a href="<?php echo base_url()?>Design/select_product" class="btn waves-effect waves-light btn-danger text-white shadow-sm" style=" width: 118px;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
									    </div>
									    <div class="col-6 text-right">
									        <a href="<?php echo base_url()?>Design/product_options" class="btn waves-effect waves-light btn-primary text-white shadow-sm">Continue <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
									    </div>
									    
									</div>
									 
									 <!--<span class="color" style="background:black;"></span>-->
								</li>
							    
							</ul>
							
						
						</div>
						</div>
					</nav>
				
					