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
							<a href="<?=base_url()?>admin/index"> <i class="fa fa-home"></i> </a>
						</li>
						<li class="breadcrumb-item"><a href="<?=base_url()?>admin/index">Dashboard</a>
						</li>
						<li class="breadcrumb-item"><a href="#!"> Categories</a>
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
											<h4>Category</h4>
											</div>
											<div class="col-md-4 col-4 col-xs-4">
											<a href="<?php echo base_url()?>Admin/add_category"  class="float-right"><button class="btn btn-primary">+ Add Category</button></a>
											</div>
												
									    </div>
									    
									    </div>
								<div class="card-block">
								    
									<div class="dt-responsive table-responsive">
                                    <table id="order-table" class="table table-striped table-bordered">
											<thead>
												<tr>
													<th>#</th>
													<th>Name</th>
													<th>Parent</th>
												
													<th>Thumbnail</th>
													
													<th>Order</th>
													<th>Status</th>
													
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
											    <?php $i=1; foreach($list as $l):?>
												<tr>
													<td><?=$i;?></td>
													<td><?=$l->name?></td>
													
													<td><?=$l->parent?></td>
													<td><img class="user-thumbnail" src="<?=$l->thumbnail_url ?>" alt=""> </td>
												
													<td><?=$l->order?></td>
													<!--<td><a href="<?//php echo base_url()?>Admin/vieworder"><i class="fa fa-eye"></i> 20</a></td>-->
													
													<td><a href=""><button
																class="btn btn-primary btn-sm">Active</button></a></td>
													
													<td>
															  <form action="" method="post" class="del_button">
													          <input type="hidden" name="id" value="<?=$l->id?>">
														 <button
														  class="btn waves-effect waves-light btn-danger btn-xs btn-icon btn-custom" type="submit" onclick="return confirm('Are you sure to delete ?')" name="delete" value="tblcategories"><i
															  class="fa fa-trash b1"></i></button>
															  </form>
													</td>
												</tr>
												<?php $i++; endforeach;?>



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
