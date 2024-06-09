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
						<li class="breadcrumb-item"><a href="#!">User Management</a>
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
								 <?= $this->session->flashdata('message') ?>
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
													
													<th>Status</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
											    <?php $i=1; foreach($list as $l):
											    $q = $this->db->query("Select * from orders where user_id= '$l->id;'");
											    $num = $q->num_rows();
                                                 
                                             
											    ?>
												<tr>
													<td><?=$i;?></td>
													<td class="text-center"><a href="<?php echo base_url()?>Admin/user_profile/<?=$l->id;?>">
														<img class="img-fluid img-circle user-thumbnail-profile" src="<?php if($l->user_image){echo $l->user_image ;} else { echo base_url('uploads/users/default.png');}?>" alt=""><br><strong style="font-size:18px;"><?=$l->user_fullname;?></strong></td>
														</a>
														<td><a href="tel:='<?=$l->user_phone;?>'"><button class="btn btn-success btn-ellipse btn-sm"><?=$l->user_phone;?></button></a></td>
													<td><a href="mailto:='<?=$l->user_email;?>'"><button class="btn btn-primary btn-ellipse btn-sm"><?=$l->user_email;?></button></a></td>
													
													<td><a href="<?php echo base_url()?>Admin/vieworder/<?=$l->id?>"><i class="fa fa-shopping-cart"></i> <?=$num?></a></td>

													 <?php if($l->status==1){?>
                                                        
                                                         <td>
                                                           <form action="" method="post">
													          <input type="hidden" name="id" value="<?=$l->id?>">
                                                        <button
														  class="btn waves-effect waves-light btn-success btn-sm  btn-custom" type="submit" onclick="return confirm('Are you sure to Deactive ?')" name="deactive" value="users">Active</button>
													  </form>  
                                                         </td>
                                                        <?php } else {?>

                                                            <td>
                                                           <form action="" method="post">
													          <input type="hidden" name="id" value="<?=$l->id?>">
                                                        <button
														  class="btn waves-effect waves-light btn-info btn-sm  btn-custom" type="submit" onclick="return confirm('Are you sure to Active ?')" name="active" value="users">Deactive</button>
													  </form>  
                                                         </td>
                                                        <?php }?>
                                                   
									                 
													  <td>
													      <a href="<?php echo base_url() ?>Admin/user_profile/<?=$l->id?>"><button
														  class="btn waves-effect waves-light btn-primary btn-xs btn-icon btn-custom"><i
															  class="fa fa-pencil b1"></i></button>
													      </a>
													      <form action="" method="post" class="del_button">
													          <input type="hidden" name="id" value="<?=$l->id?>">
                                                        <button
														  class="btn waves-effect waves-light btn-danger btn-xs btn-icon btn-custom" type="submit" onclick="return confirm('Are you sure to delete ?')" name="delete" value="users"><i
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
