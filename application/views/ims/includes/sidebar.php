<?php   $admin_id= $this->session->userdata('admin_id');

   if($admin_id==1){
  $q=$this->db->query("Select * from admin where id='$admin_id' ")->row();
   }
   else{
      $q=$this->db->query("Select * from accountant where id='$admin_id' ")->row(); 
   }
               
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
											<a href="<?php echo base_url()?>Ims/my_profile"><i class="ti-user"></i>View Profile</a>
											
											<a href="<?php echo base_url()?>Login/inventory_logout"><i
													class="ti-layout-sidebar-left"></i>Logout</a>
										</li>
									</ul>
								</div>
							</div>
							
							<div class="pcoded-navigation-label pt-15"></div>
							<ul class="pcoded-item pcoded-left-item">
								<li class="active" style="margin-bottom:10px;">
									<a href="<?php echo base_url()?>Ims/index" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
										<span class="pcoded-mtext">Dashboard</span>
										<span class="pcoded-mcaret"></span>
									</a>
									
								</li>
							<?php if($admin_id==1){	?>
								<li class="">
									<a href="<?php echo base_url()?>admin/index" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-user-circle" aria-hidden="true" style="font-size: 20px;"></i><b></b></span>
										<span class="pcoded-mtext">Admin Panel</span>
										<span class="pcoded-mcaret"></span>
									</a>
									
								</li>
								<?php }?>
							
								<li class="pcoded-hasmenu" dropdown-icon="style3" subitem-icon="style7">
									<a href="javascript:void(0)" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-pencil-alt"></i><b></b></span>
										<span class="pcoded-mtext">Stock Management</span>
										<span class="pcoded-mcaret"></span>
									</a>
									<ul class="pcoded-submenu" style="display: none;">
										<li class=" ">
											<a href="<?php echo base_url()?>Ims/manage_stock" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">Manage Stock</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<li class=" ">
											<a href="<?php echo base_url()?>Ims/add_stock" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">Add New Stock</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										
									
									</ul>
								</li>
								
									<li class="pcoded-hasmenu" dropdown-icon="style3" subitem-icon="style7">
									<a href="javascript:void(0)" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-money"></i><b></b></span>
										<span class="pcoded-mtext">Expenses</span>
										<span class="pcoded-mcaret"></span>
									</a>
									<ul class="pcoded-submenu" style="display: none;">
										<li class=" ">
											<a href="<?php echo base_url()?>Ims/stock_expenses" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">Stock Expenses</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<li class=" ">
											<a href="<?php echo base_url()?>Ims/designer_expenses" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">Designer Expenses</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<li class=" ">
											<a href="<?php echo base_url()?>Ims/other_expenses" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">Other Expenses</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										
									
									</ul>
								</li>
								<li class="pcoded-hasmenu" dropdown-icon="style3" subitem-icon="style7">
									<a href="javascript:void(0)" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-money"></i><b></b></span>
										<span class="pcoded-mtext">Income</span>
										<span class="pcoded-mcaret"></span>
									</a>
									<ul class="pcoded-submenu" style="display: none;">
										<li class=" ">
											<a href="<?php echo base_url()?>Ims/income" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">Income</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<li class=" ">
											<a href="<?php echo base_url()?>Ims/stock_return" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext">Debit Note</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										
									
									</ul>
								</li>
							
								<li class="">
									<a href="<?php echo base_url()?>Ims/orders" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-shopping-cart" aria-hidden="true"></i><b></b></span>
										<span class="pcoded-mtext">Orders</span>
										<span class="pcoded-mcaret"></span>
									</a>
									
								</li>
							  <li class="">
									<a href="<?php echo base_url()?>Ims/reports" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="fa fa-file" aria-hidden="true"></i><b></b></span>
										<span class="pcoded-mtext"> Report</span>
										<span class="pcoded-mcaret"></span>
									</a>
									
								</li>
								
									<li class="">
									<a href="<?php echo base_url()?>Login/inventory_logout" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-layout-sidebar-left" aria-hidden="true"></i><b></b></span>
										<span class="pcoded-mtext">Logout</span>
										<span class="pcoded-mcaret"></span>
									</a>
									
								</li>
								
								
							</ul>
							
						
						</div>
					</nav>