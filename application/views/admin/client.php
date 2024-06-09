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
						<h5 class="m-b-10"> Ecommerce Dashboard</h5>
						<p class="m-b-0">Welcome to Admin dashboard</p>
					</div>
				</div>
				<div class="col-md-4">
					<ul class="breadcrumb">
						<li class="breadcrumb-item">
							<a href=""> <i class="fa fa-home"></i> </a>
						</li>
						<li class="breadcrumb-item"><a href="#!">Dashboard</a>
						</li>
						<li class="breadcrumb-item"><a href="#!">Manage client</a>
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
											<div class="col-md-8 col-4 col-xs-8">
											<h4>Sliders</h4>
											</div>
											<div class="col-md-4 col-4 col-xs-4">
											<a href="<?php echo base_url() ?>Admin/add_client" class="float-right btn btn-primary">+ Add Client</a>
											</div>
												
									    </div>
									
								</div>
								<div class="card-block">
									<div class="dt-responsive table-responsive">
										<table id="order-table" class="table table-striped table-bordered nowrap">
											<thead>
												<tr>
													<th>#</th>
													<th>Clint logo</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>
															<img class="img-fluid img-circle user-thumbnail"
																src="<?php echo base_url() ?>assets/images/user-profile/user-img.jpg"alt="">
													</td>
												
									
													  <td>
													      <a href="<?php echo base_url() ?>/Admin/update_client" class="btn waves-effect waves-light btn-primary btn-xs btn-icon btn-custom"><i
															  class="fa fa-pencil mt-2 b1"></i>
													     </a>
													      <a href=""><button
														  class="btn waves-effect waves-light btn-danger btn-xs btn-icon btn-custom"><i
															  class="fa fa-trash b1"></i></button>
													  </a>
												  </td>
												</tr>



											</tbody>
											<tfoot>
												<tr>
                                                    <th>#</th>
													<th>Clint logo</th>
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
$this->load->view('admin/includes/footer');
?>
