<?php 
$this->load->view('admin/admin/includes/header');
$this->load->view('admin/admin/includes/sidebar');
?>
<div class="pcoded-content">

	<div class="page-header">
		<div class="page-block">
			<div class="row align-items-center">
				<div class="col-md-8">
					<div class="page-header-title">
						<h5 class="m-b-10">Dashboard Ecommerce</h5>
						<p class="m-b-0">Welcome to Mega Able</p>
					</div>
				</div>
				<div class="col-md-4">
					<ul class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="#"> <i class="fa fa-home"></i> </a>
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
									<h4>Manage Stock</h4>
								</div>
								<div class="card-block">
									<div class="dt-responsive table-responsive">
										<table id="order-table" class="table table-striped table-bordered nowrap">
											<thead>
												<tr>
													<th>#</th>
													<th>Product</th>
													<th>Stock status</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td><a href="<?php echo base_url() ?>/Admin/product_detail">
															<img class="img-fluid img-circle user-thumbnail" src="<?php echo base_url() ?>assets/images/user-profile/user-img.jpg" alt=""> Groccery (किराना) </a>
													</td>
							
                                                       
													<td>
                                                    <input type="number" class="form-control" min-length="1" name="stockno" value="10">
                                                    </td>
													<td>
                                                        <button class="btn btn-primary btn-sm"><i
																	class="fa fa-pencil"></i> Update</button></td>
												</tr>



											</tbody>
											<tfoot>
												<tr>
                                                    <th>#</th>
													<th>Product</th>
													<th>Stock status</th>
													<th>Action</th>
												</tr>
											</tfoot>
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
$this->load->view('admin/admin/includes/footer');
?>
