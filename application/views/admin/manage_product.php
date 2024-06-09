<?php 
$this->load->view('admin/includes/header');
$this->load->view('admin/includes/sidebar');
?>
<div class="pcoded-content">

     <div class="page-header">
		<div class="page-block">
			<div class="row align-items-center">
				<div class="col-md-8">
					<div class="page-header-title">
						<h5 class="m-b-10"> Admin dashboard</h5>
						<p class="m-b-0">Welcome to Admin dashboard</p>
					</div>
				</div>
				<div class="col-md-4">
					<ul class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="<?php echo base_url() ?>/Admin/index"> <i class="fa fa-home"></i> </a>
						</li>
						<li class="breadcrumb-item"><a href="#!">Dashboard</a>
						</li>
						<li class="breadcrumb-item"><a href="#!">Manage Product</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	 </div>

	<div class="pcoded-inner-content">

		<div class="main-body">
			<div class="page-wrapper">
				<div class="page-body">
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
										<div class="row">
											<div class="col-8">
											<h4>Manage products</h4>
											</div>
												<div class="col-4">
												<a href="<?php echo base_url()?>/Admin/add_product"><button class="btn btn-square btn-primary waves-effect waves-light" style="float:right">+ Add</button></a>
												</div>
									    </div>
									
								</div>
								<div class="card-block">
									<div class="dt-responsive table-responsive">
										<table id="order-table" class="table table-striped table-bordered nowrap">
											<thead>
												<tr>
													<th>#</th>
													<th>Product</th>
													<th>Category/Parent category</th>
													<th>Price/unit</th>
													<th>Status</th>
													<th>Stock status</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td><a href="<?php echo base_url() ?>/Admin/product_detail">
															<img class="img-fluid img-circle user-thumbnail"
																src="<?php echo base_url() ?>assets1/images/user-profile/user-img.jpg"
																alt=""> Groccery (किराना) </a>
													</td>
													<td>Groccery/Vegetables</td>
													<td>Rs. 200/KG</td>

													<td> 
        
                                                         <input type="checkbox" class="js-single" checked="" data-switchery="true" style="display: none;">
                                                         

													</td>
													<td><a href=""><button class="btn btn-primary btn-sm"><i
																	class="fa fa-pencil"></i> 12</button></a></td>
													<td>
													  
													  <a href="<?php echo base_url()?>Admin/update_product"><button
														  class="btn waves-effect waves-light btn-primary btn-xs btn-icon btn-custom"><i
															  class="fa fa-pencil b1"></i></button>
													  </a>
													  <a href=""><button
														  class="btn waves-effect waves-light btn-danger btn-xs btn-icon btn-custom"><i
															  class="fa fa-trash b1"></i></button>
													  </a>
												  </td>
												</tr>



											</tbody>
										
										</table>
									</div>
								</div>
							</div>



						</div>
					</div>
				</div>
			</div>
			<div id="styleSelector">
			</div>
		</div>
	</div>
</div>


<?php
$this->load->view('admin/includes/footer');
?>
