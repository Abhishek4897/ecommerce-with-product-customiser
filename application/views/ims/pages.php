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
						<h5 class="m-b-10"> Admin Dashboard</h5>
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
						<li class="breadcrumb-item"><a href="#!">Pages</a>
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
											<h4>All Pages</h4>
											</div>
												<div class="col-4">
												
												</div>
									    </div>
									
								</div>
								<div class="card-block">
									<div class="dt-responsive table-responsive">
										<table id="order-table" class="table table-striped table-bordered nowrap">
											<thead>
												<tr>
													<th>#</th>
													<th>Title</th>
													
													<th>Description</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
											    <?php $i=1; foreach($list as $l):?>
												<tr>
													<td><?=$i;?></td>
												    <td><?=$l->title;?></td>
													
                                                    <td><?=$l->description;?></td>
                                                    <td>
													  <a href="<?php echo base_url()?>Admin/edit_page/<?=$l->id;?>"><button
														  class="btn waves-effect waves-light btn-primary btn-xs btn-icon btn-custom"><i
															  class="fa fa-pencil b1"></i></button>
													  </a>
													  
												  </td>
												  <?php $i++; endforeach;?>
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
