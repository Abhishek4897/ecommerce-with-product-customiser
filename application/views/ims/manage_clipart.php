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
						<li class="breadcrumb-item"><a href="#!">Clipart</a>
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
											<h4>Clipart</h4>
											</div>
											<div class="col-md-4 col-4 col-xs-4">
											<a href="<?php echo base_url() ?>Admin/add_clipart" class="float-right"><button class="btn btn-primary">+ Add</button></a>
											</div>
												
									    </div>
									    
									    </div>
								<div class="card-block">
									<div class="dt-responsive table-responsive">
                                    <table id="order-table" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="order-table_info">
											<thead>
												<tr>
													<th>#</th>
													<th>Name</th>
													<th>Price</th>
													<th>Categories</th>
													<th>Tag</th>
													<th>Design File</th>
													<th>Featured</th>
													<th>Order</th>
													<th>Used</th>
													<th>Active</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
											     <?php
											    $counter=0;
											    foreach($cliparts as $clipart){
											        $counter++;
											    
											    ?>
												<tr>
													<td><?= $counter ?></td>
													<td><?= $clipart->name ?></td>
													<td><?= $clipart->price?></td>
													<td><?= $clipart->upload ?></td>
													<td><?= $clipart->tags ?></td>
													<td><img class="img-fluid img-circle user-thumbnail" src="<?= $clipart->thumbnail_url;?>" alt=""> </td>
													<td><?= $clipart->featured ?></td>
													<td><?= $clipart->order ?></td>
													<td><?= $clipart->use_count ?></td>
												
													
													<?php if($clipart->active==1){?>
                                                        
                                                         <td>
                                                           <form action="" method="post">
													          <input type="hidden" name="id" value="<?=$clipart->id ?>">
                                                        <button
														  class="btn waves-effect waves-light btn-success btn-sm  btn-custom" type="submit" onclick="return confirm('Are you sure to Deactive ?')" name="deactive" value="cliparts">Active</button>
													  </form>  
                                                         </td>
													
													  <?php } else {?>
													  
													   
                                                        
                                                            <td>
                                                           <form action="" method="post">
													          <input type="hidden" name="id" value="<?=$clipart->id ?>">
                                                        <button
														  class="btn waves-effect waves-light btn-info btn-sm  btn-custom" type="submit" onclick="return confirm('Are you sure to Active ?')" name="active" value="cliparts">Deactive</button>
													  </form>  
                                                         </td>
                                                        <?php }?>
													
													<td>
													    <a href="<?php echo base_url()?>Admin/update_clipart">
														<button
														  class="btn waves-effect waves-light btn-primary btn-xs btn-icon btn-custom"><i
															  class="fa fa-pencil b1"></i></button>
															  </a>
														 <button
														  class="btn waves-effect waves-light btn-danger btn-xs btn-icon btn-custom" type="submit" onclick="return confirm('Are you sure to delete ?')" name="delete" value="testimonial"><i
															  class="fa fa-trash b1"></i></button>
													</td>
												</tr>

                                             <?php }?>

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
