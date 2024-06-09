<?php   $admin_id= $this->session->userdata('admin_id');
  $q=$this->db->query("Select * from admin where id='$admin_id' ")->row();
               
?>
<div class="pcoded-main-container">
				<div class="pcoded-wrapper">
					<nav class="pcoded-navbar">
						<div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
						<div class="pcoded-inner-navbar main-menu">
							<div class="">
								<div class="main-menu-header">
									<img class="img-80 img-radius"
										src="<?=$q->image?>"
										alt="User-Profile-Image">
									<div class="user-details">
										<span id="more-details"><?=$q->name?><i class="fa fa-caret-down"></i></span>
									</div>
								</div>
								<div class="main-menu-content">
									<ul>
										<li class="more-details">
											<a href="<?php echo base_url()?>Admin/admin_profile"><i class="ti-user"></i>View Profile</a>
											
											<a href="<?php echo base_url()?>Login/logout"><i
													class="ti-layout-sidebar-left"></i>Logout</a>
										</li>
									</ul>
								</div>
							</div>
							
							<div class="pcoded-navigation-label pt-15"></div>
							<ul class="pcoded-item pcoded-left-item">
								<li class="active" style="margin-bottom:10px;">
									<a href="<?php echo base_url()?>Admin/index" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
										<span class="pcoded-mtext">Dashboard</span>
										<span class="pcoded-mcaret"></span>
									</a>
									
								</li>
								<li  style="margin-bottom:10px;">
									<a href="<?php echo base_url()?>Ims/index" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>D</b></span>
										<span class="pcoded-mtext">Inventory Panel</span>
										<span class="pcoded-mcaret"></span>
									</a>
									
								</li>
								<li class="">
									<a href="<?php echo base_url()?>Admin/orders" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-shopping-cart" aria-hidden="true"></i><b></b></span>
										<span class="pcoded-mtext">Orders</span>
										<span class="pcoded-mcaret"></span>
									</a>
									
								</li>
								<li class="pcoded-hasmenu" dropdown-icon="style3" subitem-icon="style7">
									<a href="javascript:void(0)" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-money" aria-hidden="true"></i><b></b></span>
										<span class="pcoded-mtext">Manage payouts </span>
										<span class="pcoded-mcaret"></span>
									</a>
									<ul class="pcoded-submenu" style="display: none;">
									    <li class=" ">
											<a href="<?php echo base_url()?>Admin/payouts" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">All Payouts</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>

										<li class="">
											<a href="<?php echo base_url()?>Admin/payout_request" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">Payout (Requested)</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<li class="" style="display:none;">
											<a href="<?php echo base_url()?>Admin/Complete_payout" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">Payout (Completed)</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
									</ul>
								</li>
								<!--<li class="pcoded-hasmenu" dropdown-icon="style3" subitem-icon="style7">-->
								<!--	<a href="javascript:void(0)" class="waves-effect waves-dark">-->
								<!--		<span class="pcoded-micon"><i class="ti-image"></i><b></b></span>-->
								<!--		<span class="pcoded-mtext">Manage Slider </span>-->
								<!--		<span class="pcoded-mcaret"></span>-->
								<!--	</a>-->
								<!--	<ul class="pcoded-submenu" style="display: none;">-->
								<!--		<li class=" ">-->
								<!--			<a href="<?php echo base_url()?>Slider/manage_slider" class="waves-effect waves-dark">-->
								<!--				<span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
								<!--				<span class="pcoded-mtext">Total Slider</span>-->
								<!--				<span class="pcoded-mcaret"></span>-->
								<!--			</a>-->
								<!--		</li>-->
								<!--		<li class=" ">-->
								<!--			<a href="<?php echo base_url()?>Slider/add_slider" class="waves-effect waves-dark">-->
								<!--				<span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
								<!--				<span class="pcoded-mtext">Add Slider</span>-->
								<!--				<span class="pcoded-mcaret"></span>-->
								<!--			</a>-->
								<!--		</li>-->
								<!--	</ul>-->
								<!--</li>-->
								<!--<li class="pcoded-hasmenu" dropdown-icon="style3" subitem-icon="style7">-->
								<!--	<a href="javascript:void(0)" class="waves-effect waves-dark">-->
								<!--		<span class="pcoded-micon"><i class="ti-image"></i><b></b></span>-->
								<!--		<span class="pcoded-mtext">Manage banner </span>-->
								<!--		<span class="pcoded-mcaret"></span>-->
								<!--	</a>-->
								<!--	<ul class="pcoded-submenu" style="display: none;">-->
								<!--		<li class=" ">-->
								<!--			<a href="<?php echo base_url()?>Slider/manage_banner" class="waves-effect waves-dark">-->
								<!--				<span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
								<!--				<span class="pcoded-mtext">Total Banner</span>-->
								<!--				<span class="pcoded-mcaret"></span>-->
								<!--			</a>-->
								<!--		</li>-->
								<!--		<li class=" ">-->
								<!--			<a href="<?php echo base_url()?>Slider/add_banner" class="waves-effect waves-dark">-->
								<!--				<span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
								<!--				<span class="pcoded-mtext">Add Banner</span>-->
								<!--				<span class="pcoded-mcaret"></span>-->
								<!--			</a>-->
								<!--		</li>-->
								<!--	</ul>-->
								<!--</li>-->
									<li class="pcoded-hasmenu" dropdown-icon="style3" subitem-icon="style7">
									<a href="javascript:void(0)" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-quote-left" aria-hidden="true"></i><b></b></span>
										<span class="pcoded-mtext">Manage Testimonial  </span>
										<span class="pcoded-mcaret"></span>
									</a>
									<ul class="pcoded-submenu" style="display: none;">
										<li class=" ">
											<a href="<?php echo base_url()?>Admin/testimonial" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">Total Testimonial</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<li class=" ">
											<a href="<?php echo base_url()?>Admin/add_testimonial" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">Add Testimonial</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
									</ul>
								</li>
							<li class="">
									<a href="<?php echo base_url()?>Admin/manage_accountant" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-user"></i><b></b></span>
										<span class="pcoded-mtext">Manage Accountant</span>
										<span class="pcoded-mcaret"></span>
									</a>
									
								</li>
								<li class="">
									<a href="<?php echo base_url()?>Admin/manage_user" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-user"></i><b></b></span>
										<span class="pcoded-mtext">Manage Users</span>
										<span class="pcoded-mcaret"></span>
									</a>
									
								</li>
								
								<li class="">
									<a href="<?php echo base_url()?>Admin/manage_designer" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-user"></i><b></b></span>
										<span class="pcoded-mtext">Manage Designers</span>
										<span class="pcoded-mcaret"></span>
									</a>
									
								</li>
								<!--<li class="pcoded-hasmenu" dropdown-icon="style3" subitem-icon="style7">-->
								<!--	<a href="javascript:void(0)" class="waves-effect waves-dark">-->
								<!--		<span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b></b></span>-->
								<!--		<span class="pcoded-mtext">Manage Categories</span>-->
								<!--		<span class="pcoded-mcaret"></span>-->
								<!--	</a>-->
								<!--	<ul class="pcoded-submenu" style="display: none;">-->
								<!--		<li class=" ">-->
								<!--			<a href="<?php echo base_url()?>Admin/categories" class="waves-effect waves-dark">-->
								<!--				<span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
								<!--				<span class="pcoded-mtext">Total Categories</span>-->
								<!--				<span class="pcoded-mcaret"></span>-->
								<!--			</a>-->
								<!--		</li>-->
								<!--		<li class=" ">-->
								<!--			<a href="<?php echo base_url()?>Admin/add_category" class="waves-effect waves-dark">-->
								<!--				<span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
								<!--				<span class="pcoded-mtext">Add Category</span>-->
								<!--				<span class="pcoded-mcaret"></span>-->
								<!--			</a>-->
								<!--		</li>-->
										
								<!--	</ul>-->
								<!--</li>-->
								
								<!--<li class="pcoded-hasmenu" dropdown-icon="style3" subitem-icon="style7">-->
								<!--	<a href="javascript:void(0)" class="waves-effect waves-dark">-->
								<!--		<span class="pcoded-micon"><i class="fa fa-video-camera" aria-hidden="true"></i><b></b></span>-->
								<!--		<span class="pcoded-mtext">Manage Video  </span>-->
								<!--		<span class="pcoded-mcaret"></span>-->
								<!--	</a>-->
								<!--	<ul class="pcoded-submenu" style="display: none;">-->
								<!--		<li class=" ">-->
								<!--			<a href="<?php echo base_url()?>Admin/video" class="waves-effect waves-dark">-->
								<!--				<span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
								<!--				<span class="pcoded-mtext">Total Video</span>-->
								<!--				<span class="pcoded-mcaret"></span>-->
								<!--			</a>-->
								<!--		</li>-->
								<!--		<li class=" ">-->
								<!--			<a href="<?php echo base_url()?>Admin/add_video" class="waves-effect waves-dark">-->
								<!--				<span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
								<!--				<span class="pcoded-mtext">Add Video</span>-->
								<!--				<span class="pcoded-mcaret"></span>-->
								<!--			</a>-->
								<!--		</li>-->
								<!--	</ul>-->
								<!--</li>-->
								
								<!--<li class="pcoded-hasmenu" dropdown-icon="style3" subitem-icon="style7">-->
								<!--	<a href="javascript:void(0)" class="waves-effect waves-dark">-->
								<!--		<span class="pcoded-micon"><i class="fa fa-camera" aria-hidden="true"></i><b></b></span>-->
								<!--		<span class="pcoded-mtext">Manage Blog  </span>-->
								<!--		<span class="pcoded-mcaret"></span>-->
								<!--	</a>-->
								<!--	<ul class="pcoded-submenu" style="display: none;">-->
								<!--		<li class=" ">-->
								<!--			<a href="<?php echo base_url()?>Admin/blog" class="waves-effect waves-dark">-->
								<!--				<span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
								<!--				<span class="pcoded-mtext">Total blog</span>-->
								<!--				<span class="pcoded-mcaret"></span>-->
								<!--			</a>-->
								<!--		</li>-->
								<!--		<li class=" ">-->
								<!--			<a href="<?php echo base_url()?>Admin/add_blog" class="waves-effect waves-dark">-->
								<!--				<span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
								<!--				<span class="pcoded-mtext">Add Blog</span>-->
								<!--				<span class="pcoded-mcaret"></span>-->
								<!--			</a>-->
								<!--		</li>-->
								<!--	</ul>-->
								<!--</li>-->
								<!--<li class="pcoded-hasmenu" dropdown-icon="style3" subitem-icon="style7">-->
								<!--	<a href="javascript:void(0)" class="waves-effect waves-dark">-->
								<!--		<span class="pcoded-micon"><i class="fa fa-tag" aria-hidden="true"></i><b></b></span>-->
								<!--		<span class="pcoded-mtext">Manage Tag</span>-->
								<!--		<span class="pcoded-mcaret"></span>-->
								<!--	</a>-->
								<!--	<ul class="pcoded-submenu" style="display: none;">-->
								<!--		<li class=" ">-->
								<!--			<a href="<?php echo base_url()?>/Admin/tag" class="waves-effect waves-dark">-->
								<!--				<span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
								<!--				<span class="pcoded-mtext">Total Tag</span>-->
								<!--				<span class="pcoded-mcaret"></span>-->
								<!--			</a>-->
								<!--		</li>-->
								<!--		<li class=" ">-->
								<!--			<a href="<?php echo base_url()?>/Admin/add_tag" class="waves-effect waves-dark">-->
								<!--				<span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
								<!--				<span class="pcoded-mtext">Add tag</span>-->
								<!--				<span class="pcoded-mcaret"></span>-->
								<!--			</a>-->
								<!--		</li>-->
										
								<!--	</ul>-->
								<!--</li>-->
								<li class="pcoded-hasmenu" dropdown-icon="style3" subitem-icon="style7" style="display:none;">
									<a href="javascript:void(0)" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-shopping-bag" aria-hidden="true"></i><b></b></span>
										<span class="pcoded-mtext">Manage Products</span>
										<span class="pcoded-mcaret"></span>
									</a>
									<ul class="pcoded-submenu" style="display: none;">
										<li class=" ">
											<a href="<?php echo base_url()?>Admin/manage_product" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">Total Products</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<li class=" ">
											<a href="<?php echo base_url()?>Admin/add_product" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">Add Products</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										
									</ul>
								</li>
								
								<li class="pcoded-hasmenu" dropdown-icon="style3" subitem-icon="style7">
									<a href="javascript:void(0)" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-file" aria-hidden="true"></i><b></b></span>
										<span class="pcoded-mtext">Manage Templates</span>
										<span class="pcoded-mcaret"></span>
									</a>
									<ul class="pcoded-submenu" style="display: none;">
										<li class=" ">
											<a href="<?php echo base_url()?>Admin/manage_template" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">Total Templates</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<li class=" ">
											<a href="<?php echo base_url()?>Admin/Topproduct" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">Top In Product Templates</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<li class=" ">
											<a href="<?php echo base_url()?>Admin/TopCategory" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">Top In Category Templates</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<li class=" ">
											<a href="<?php echo base_url()?>Admin/Topfavourite" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">After Top In Category Templates</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<li class=" ">
											<a href="<?php echo base_url()?>Admin/Nonfavourite" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">Not-featured Templates</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<!--<li class=" ">-->
										<!--	<a href="<?php echo base_url()?>Admin/add_template" class="waves-effect waves-dark">-->
										<!--		<span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
										<!--		<span class="pcoded-mtext">Add Template</span>-->
										<!--		<span class="pcoded-mcaret"></span>-->
										<!--	</a>-->
										<!--</li>-->
										
										<!--<li class=" ">-->
										<!--	<a href="<?php echo base_url()?>Admin/template_categories" class="waves-effect waves-dark">-->
										<!--		<span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
										<!--		<span class="pcoded-mtext">Categories</span>-->
										<!--		<span class="pcoded-mcaret"></span>-->
										<!--	</a>-->
										<!--</li>-->
										
										<!--<li class=" ">-->
										<!--	<a href="<?php echo base_url()?>Admin/template_tag" class="waves-effect waves-dark">-->
										<!--		<span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
										<!--		<span class="pcoded-mtext">Tag</span>-->
										<!--		<span class="pcoded-mcaret"></span>-->
										<!--	</a>-->
										<!--</li>-->
									</ul>
								</li>
								
								<!--<li class="pcoded-hasmenu" dropdown-icon="style3" subitem-icon="style7">-->
								<!--	<a href="javascript:void(0)" class="waves-effect waves-dark">-->
								<!--		<span class="pcoded-micon"><i class="fa fa-paint-brush" aria-hidden="true"></i><b></b></span>-->
								<!--		<span class="pcoded-mtext">Manage Clipart  </span>-->
								<!--		<span class="pcoded-mcaret"></span>-->
								<!--	</a>-->
								<!--	<ul class="pcoded-submenu" style="display: none;">-->
								<!--		<li class=" ">-->
								<!--			<a href="<?php echo base_url()?>Admin/manage_clipart" class="waves-effect waves-dark">-->
								<!--				<span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
								<!--				<span class="pcoded-mtext">Total Clipart</span>-->
								<!--				<span class="pcoded-mcaret"></span>-->
								<!--			</a>-->
								<!--		</li>-->
								<!--		<li class=" ">-->
								<!--			<a href="<?php echo base_url()?>Admin/add_clipart" class="waves-effect waves-dark">-->
								<!--				<span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
								<!--				<span class="pcoded-mtext">Add Clipart</span>-->
								<!--				<span class="pcoded-mcaret"></span>-->
								<!--			</a>-->
								<!--		</li>-->
										
								<!--		<li class=" ">-->
								<!--			<a href="<?php echo base_url()?>Admin/clipart_categories" class="waves-effect waves-dark">-->
								<!--				<span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
								<!--				<span class="pcoded-mtext">Categories</span>-->
								<!--				<span class="pcoded-mcaret"></span>-->
								<!--			</a>-->
								<!--		</li>-->
										
								<!--		<li class=" ">-->
								<!--			<a href="<?php echo base_url()?>Admin/clipart_tag" class="waves-effect waves-dark">-->
								<!--				<span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
								<!--				<span class="pcoded-mtext">Tag</span>-->
								<!--				<span class="pcoded-mcaret"></span>-->
								<!--			</a>-->
								<!--		</li>-->
								<!--	</ul>-->
								<!--</li>-->
								
								<!--<li class="pcoded-hasmenu" dropdown-icon="style3" subitem-icon="style7">-->
								<!--	<a href="javascript:void(0)" class="waves-effect waves-dark">-->
								<!--		<span class="pcoded-micon"><i class="fa fa-circle" aria-hidden="true"></i><b></b></span>-->
								<!--		<span class="pcoded-mtext">Manage Shapes </span>-->
								<!--		<span class="pcoded-mcaret"></span>-->
								<!--	</a>-->
								<!--	<ul class="pcoded-submenu" style="display: none;">-->
								<!--		<li class=" ">-->
								<!--			<a href="<?php echo base_url()?>Admin/manage_shapes" class="waves-effect waves-dark">-->
								<!--				<span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
								<!--				<span class="pcoded-mtext">Total Shapes</span>-->
								<!--				<span class="pcoded-mcaret"></span>-->
								<!--			</a>-->
								<!--		</li>-->
								<!--		<li class=" ">-->
								<!--			<a href="<?php echo base_url()?>Admin/add_shapes" class="waves-effect waves-dark">-->
								<!--				<span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
								<!--				<span class="pcoded-mtext">Add Shapes</span>-->
								<!--				<span class="pcoded-mcaret"></span>-->
								<!--			</a>-->
								<!--		</li>-->
										
									
								<!--	</ul>-->
								<!--</li>-->
								
								<!--<li class="pcoded-hasmenu" dropdown-icon="style3" subitem-icon="style7" style="display:none;">-->
								<!--	<a href="javascript:void(0)" class="waves-effect waves-dark">-->
								<!--		<span class="pcoded-micon"><i class="fa fa-pencil" aria-hidden="true"></i><b></b></span>-->
								<!--		<span class="pcoded-mtext">Manage Fonts </span>-->
								<!--		<span class="pcoded-mcaret"></span>-->
								<!--	</a>-->
								<!--	<ul class="pcoded-submenu" style="display: none;">-->
								<!--		<li class=" ">-->
								<!--			<a href="<?php echo base_url()?>Admin/manage_fonts" class="waves-effect waves-dark">-->
								<!--				<span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
								<!--				<span class="pcoded-mtext">All Fonts</span>-->
								<!--				<span class="pcoded-mcaret"></span>-->
								<!--			</a>-->
								<!--		</li>-->
								<!--		<li class=" ">-->
								<!--			<a href="<?php echo base_url()?>Admin/add_fonts" class="waves-effect waves-dark">-->
								<!--				<span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
								<!--				<span class="pcoded-mtext">Add Fonts</span>-->
								<!--				<span class="pcoded-mcaret"></span>-->
								<!--			</a>-->
								<!--		</li>-->
										
									
								<!--	</ul>-->
								<!--</li>-->
								
								<!--<li class="" style="display:none;">-->
								<!--	<a href="<?php echo base_url()?>Admin/manage_society" class="waves-effect waves-dark">-->
								<!--		<span class="pcoded-micon"><i class="fa fa-map-marker" aria-hidden="true"></i><b></b></span>-->
								<!--		<span class="pcoded-mtext">Manage Society</span>-->
								<!--		<span class="pcoded-mcaret"></span>-->
								<!--	</a>-->
									
								<!--</li>-->
								<!--<li class="" style="display:none;">-->
								<!--	<a href="javascript:void(0)" class="waves-effect waves-dark">-->
								<!--		<span class="pcoded-micon"><i class="ti-pencil-alt"></i><b></b></span>-->
								<!--		<span class="pcoded-mtext">Stock Update</span>-->
								<!--		<span class="pcoded-mcaret"></span>-->
								<!--	</a>-->
									
								<!--</li>-->
								
								<li class="pcoded-hasmenu" dropdown-icon="style3" subitem-icon="style7" style="display:none;">
									<a href="javascript:void(0)" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-file"></i><b></b></span>
										<span class="pcoded-mtext">Pages</span>
										<span class="pcoded-mcaret"></span>
									</a>
									<ul class="pcoded-submenu" style="display: none;">
										<li class=" ">
											<a href="<?php echo base_url()?>/Admin/pages" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">List</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
									</ul>
								</li>
								<li class="" style="display:none;">
									<a href="<?php echo base_url()?>Admin/order_limit_setting" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-settings"></i><b></b></span>
										<span class="pcoded-mtext">Order Limit setting</span>
										<span class="pcoded-mcaret"></span>
									</a>
									
								</li>
								<li class="" style="display:none;">
									<a href="<?php echo base_url()?>Admin/stock" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-clipboard"></i><b></b></span>
										<span class="pcoded-mtext">Stock </span>
										<span class="pcoded-mcaret"></span>
									</a>
								
								</li>
								<li class="" style="display:none;">
									<a href="<?php echo base_url()?>Admin/order_notification" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-bell"></i><b></b></span>
										<span class="pcoded-mtext">Notification </span>
										<span class="pcoded-mcaret"></span>
									</a>
								
								</li>
								<li class="" >
									<a href="<?php echo base_url()?>Admin/enquiry" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-comments-o" aria-hidden="true"></i><b></b></span>
										<span class="pcoded-mtext">Enquiry </span>
										<span class="pcoded-mcaret"></span>
									</a>
								
								</li>
								
									<li class="" style="display:none;">
									<a href="<?php echo base_url()?>Admin/general" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-settings" aria-hidden="true"></i><b></b></span>
										<span class="pcoded-mtext">Setting </span>
										<span class="pcoded-mcaret"></span>
									</a>
								
								</li>
									
										<li class="pcoded-hasmenu" dropdown-icon="style3" subitem-icon="style7">
									<a href="javascript:void(0)" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-settings"></i><b></b></span>
										<span class="pcoded-mtext">Settings </span>
										<span class="pcoded-mcaret"></span>
									</a>
									<ul class="pcoded-submenu">
										<li class=" ">
											<a href="<?php echo base_url()?>Admin/general" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">General Setting</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<!--<li class=" ">-->
										<!--	<a href="<?php echo base_url()?>/Admin/pages" class="waves-effect waves-dark">-->
										<!--		<span class="pcoded-micon"><i class="ti-angle-right"></i></span>-->
										<!--		<span class="pcoded-mtext">Pages Setting</span>-->
										<!--		<span class="pcoded-mcaret"></span>-->
										<!--	</a>-->
										<!--</li>-->
									</ul>
								</li>
								
									
									<li class="pcoded-hasmenu" dropdown-icon="style3" subitem-icon="style7" style="display:none;">
									<a href="javascript:void(0)" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-user"></i><b></b></span>
										<span class="pcoded-mtext">Clients </span>
										<span class="pcoded-mcaret"></span>
									</a>
									<ul class="pcoded-submenu" style="display: none;">
										<li class=" ">
											<a href="<?php echo base_url()?>Admin/client" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">Total Clients</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<li class=" ">
											<a href="<?php echo base_url()?>Admin/add_client" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">Add clients</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
									</ul>
								</li>
        <!--                        <li class="">-->
								<!--	<a href="" class="waves-effect waves-dark">-->
								<!--		<span class="pcoded-micon"><i class="ti-settings"></i><b></b></span>-->
								<!--		<span class="pcoded-mtext">General Setting </span>-->
								<!--		<span class="pcoded-mcaret"></span>-->
								<!--	</a>-->
								
								<!--</li>-->
								
							</ul>
							
						
						</div>
					</nav>