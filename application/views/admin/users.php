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
						<h5 class="m-b-10">Admin Dashboard</h5>
						<p class="m-b-0">Welcome to Admin Dashboard</p>
					</div>
				</div>
				<div class="col-md-4">
					<ul class="breadcrumb">
						<li class="breadcrumb-item">
							<a href=""> <i class="fa fa-home"></i> </a>
						</li>
						<li class="breadcrumb-item"><a href="#!">Dashboard</a>
						</li>
						<li class="breadcrumb-item"><a href="#!">Dashboard Ecommerce</a>
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
									<h4>Users</h4>
								</div>
								<div class="card-block">
									<div class="dt-responsive table-responsive">
                                    <table id="order-table" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="order-table_info">
											<thead>
												<tr>
													<th>#</th>
													<th>Name</th>
													<th>Phone</th>
													<th>User Email</th>
													<th>Total Orders</th>
													<th>Total Amount</th>
													<th>Status</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td><img class="img-fluid img-circle user-thumbnail" src="<?php echo base_url() ?>assets1/images/user-profile/user-img.jpg" alt=""> Jitendra kumar saroj</td>
													<td><a href="tel:+917054936897"><button class="btn btn-success btn-ellipse btn-sm">+917054936897</button></a></td>
													<td><a href="mailto:xyz@gmail.com"><button class="btn btn-primary btn-ellipse btn-sm">xyz@gmail.com</button></a></td>
													<td><a href="<?php echo base_url()?>Admin/vieworder"><i class="fa fa-eye"></i> 20</a></td>
													<td>Rs. 320,800</td>
													<td><a href=""><button
																class="btn btn-primary btn-sm">Active</button></a></td>
													
													<td>
														<button
															class="btn waves-effect waves-light btn-primary btn-icon"><i
																class="fa fa-ellipsis-v"></i></button>
														<!-- <button class="btn waves-effect waves-dark btn-primary btn-outline-primary btn-icon"><i class="fa fa-ellipsis-v"></i></button> -->
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
