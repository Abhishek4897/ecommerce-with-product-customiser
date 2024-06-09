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
						<h5 class="m-b-10"> Dashboard</h5>
						<p class="m-b-0">Welcome to Admin dashboard</p>
					</div>
				</div>
				<div class="col-md-4">
					<ul class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="index-2.html"> <i class="fa fa-home"></i> </a>
						</li>
						<li class="breadcrumb-item"><a href="#!">Dashboard</a>
						</li>
						<li class="breadcrumb-item"><a href="#!">List Products</a>
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
											<div class="col-12">
											<h4>Manage Product base</h4>
											</div>
											
									    </div>
									
								</div>
								<div class="card-block">
									<div class="dt-responsive table-responsive">
										<table id="order-table" class="table table-striped table-bordered nowrap">
											<thead>
												<tr>
													<th>#</th>
													<th>Name</th>
													<th>Description</th>
													<th>Stages</th>
													<th>Status</th>
													<th>Action</th>
													
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
                                                    <td>Shirt</td>
                                                    <td>Describtion content show here</td>
                                                    <td><img src="https://admin.anshuwap.com/arteno/uploads/setting/profile-1602092544.jpg" style="height:70px;"></td>
                                                    <td><button class="btn btn-sm btn-primary">Active</button></td>
                                                    <td><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
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
