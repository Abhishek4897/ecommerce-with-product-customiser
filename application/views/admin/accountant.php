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
						<h5 class="m-b-10">Admin dasboard</h5>
						<p class="m-b-0">Welcome to Admin dashboard</p>
					</div>
				</div>
				<div class="col-md-4">
					<ul class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="<?= base_url()?>admin/index"> <i class="fa fa-home"></i> </a>
						</li>
						<li class="breadcrumb-item"><a href="<?= base_url()?>admin/index">Dashboard</a>
						</li>
						<li class="breadcrumb-item"><a href="#!">Accountant Management</a>
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
											<h4>Manage Accountant</h4>
											</div>
												<div class="col-4">
												<a href="<?php echo base_url()?>Admin/add_accountant"><button class="btn btn-square btn-primary waves-effect waves-light" style="float:right">+ Add</button></a>
												</div>
									    </div>
								</div>
								 <?= $this->session->flashdata('added') ?>
								 <?= $this->session->flashdata('message') ?>
								<div class="card-block">
									<div class="dt-responsive table-responsive">
                                    <table id="order-table" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="order-table_info">
											<thead>
												<tr>
													<th>#</th>
													<th>Name</th>
													<th>Phone</th>
													<th> Email</th>
													
													
													<th>Status</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
											    <?php $i=1; foreach($list as $l):
											    
											   
											    ?>
												<tr>
													<td><?=$i;?></td>
													<td class="text-center">
														<img class="img-fluid img-circle user-thumbnail-profile" src="<?php echo $l->image ;?>" alt=""><br><strong style="font-size:18px;"><?=$l->name;?></strong></td>
													
														<td><a href="tel:='<?=$l->mobile;?>'"><button class="btn btn-success btn-ellipse btn-sm"><?=$l->mobile;?></button></a></td>
													<td><a href="mailto:='<?=$l->email;?>'"><button class="btn btn-primary btn-ellipse btn-sm"><?=$l->email;?></button></a></td>
												
													
													 <?php if($l->status==1){?>
                                                        
                                                         <td>
                                                           <form action="" method="post">
													          <input type="hidden" name="id" value="<?=$l->id?>">
                                                        <button
														  class="btn waves-effect waves-light btn-success btn-sm  btn-custom" type="submit" onclick="return confirm('Are you sure to Deactive ?')" name="deactive" value="accountant">Active</button>
													  </form>  
                                                         </td>
                                                        <?php } else {?>

                                                            <td>
                                                           <form action="" method="post">
													          <input type="hidden" name="id" value="<?=$l->id?>">
                                                        <button
														  class="btn waves-effect waves-light btn-info btn-sm  btn-custom" type="submit" onclick="return confirm('Are you sure to Active ?')" name="active" value="accountant">Deactive</button>
													  </form>  
                                                         </td>
                                                        <?php }?>
                                                   
									                 
													  <td>
													      <a href="<?php echo base_url() ?>Admin/accoutant_profile/<?=$l->id?>"><button
														  class="btn waves-effect waves-light btn-primary btn-xs btn-icon btn-custom"><i
															  class="fa fa-pencil b1"></i></button>
													      </a>
													      <form action="" method="post" class="del_button">
													          <input type="hidden" name="id" value="<?=$l->id?>">
                                                        <button
														  class="btn waves-effect waves-light btn-danger btn-xs btn-icon btn-custom" type="submit" onclick="return confirm('Are you sure to delete ?')" name="delete" value="accountant"><i
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
