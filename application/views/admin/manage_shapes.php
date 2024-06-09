<?php 
$this->load->view('admin/includes/header');
$this->load->view('admin/includes/sidebar');
?>
<style>
svg{
    height:70px;
}
</style>
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
							<a href="<?= base_url()?>admin/index"> <i class="fa fa-home"></i> </a>
						</li>
						<li class="breadcrumb-item"><a href="<?= base_url()?>admin/index">Dashboard</a>
						</li>
						<li class="breadcrumb-item"><a href="">Shapes</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<?= $this->session->flashdata('message') ?>
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
											<h4>Shapes</h4>
											</div>
											<div class="col-md-4 col-4 col-xs-4">
											<a href="<?php echo base_url() ?>Admin/add_shapes" class="float-right"><button class="btn btn-primary">+ Add</button></a>
											</div>
												
									    </div>
									    
									    </div>
								<div class="card-block">
									<div class="dt-responsive table-responsive">
                                    <table id="order-table" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="order-table_info">
											<thead>
												<tr>
													<th>#</th>
													<th>Shape name</th>
													<th>Preview</th>
												    <th>Status</th>
													
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
											    <?php
											    $counter=1;
											    foreach($shapes as $shape){
											    ?>
												<tr>
												    


													<td><?= $counter ?></td>
													<td><?= $shape->name ?></td>
													<td><div class="content"><?= $shape->content ?></div></td>
													<?php if($shape->active==1){?>
                                                        
                                                         <td>
                                                           <form action="" method="post">
													          <input type="hidden" name="id" value="<?=$shape->id ?>">
                                                        <button
														  class="btn waves-effect waves-light btn-success btn-sm  btn-custom" type="submit" onclick="return confirm('Are you sure to Deactive ?')" name="deactive" value="shapes">Active</button>
													  </form>  
                                                         </td>
                                                        <?php } else {?>
                                                        
                                                            <td>
                                                           <form action="" method="post">
													          <input type="hidden" name="id" value="<?=$shape->id ?>">
                                                        <button
														  class="btn waves-effect waves-light btn-info btn-sm  btn-custom" type="submit" onclick="return confirm('Are you sure to Active ?')" name="active" value="shapes">Deactive</button>
													  </form>  
                                                         </td>
                                                        <?php }?>
												
													
													
													
													
													<td>
													    <a href="<?php echo base_url() ?>Admin/update_shapes/<?=$shape->id?>">
														<button
														  class="btn waves-effect waves-light btn-primary btn-xs btn-icon btn-custom"><i
															  class="fa fa-pencil b1"></i></button>
															  </a>
															  <form action="" method="post" class="del_button">
													          <input type="hidden" name="id" value="<?=$shape->id?>">
														 <button
														  class="btn waves-effect waves-light btn-danger btn-xs btn-icon btn-custom" type="submit" onclick="return confirm('Are you sure to delete ?')" name="delete" value="shapes"><i
															  class="fa fa-trash b1"></i></button>
															  </form>
													</td>
												</tr>
												<?php  $counter++; } ?>



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
