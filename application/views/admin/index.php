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
                                       <a href="<?=base_url()?>admin"> <i class="fa fa-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="<?=base_url()?>admin">Dashboard</a></li>
                                    
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
								   <div class="col-xl-3 col-md-6">
										<div class="card">
											<div class="card-block">
												<div class="row align-items-center">
												<div class="col-8">
													<h4 class="text-c-purple"><?=$order_count?></h4>
													<h6 class="text-muted m-b-0">Total orders</h6>
												</div>
												<div class="col-4 text-right">
													<i class="fa fa-cart-plus f-28"></i>
												</div>
												</div>
											</div>
											<div class="card-footer bg-c-purple">
												<div class="row align-items-center">
												<div class="col-9">
													<p class="text-white m-b-0">% change</p>
												</div>
												<div class="col-3 text-right">
													<i class="fa fa-line-chart text-white f-16"></i>
												</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-xl-3 col-md-6">
										<div class="card">
											<div class="card-block">
												<div class="row align-items-center">
												<div class="col-8">
													<h4 class="text-c-green"><?=$order_complete?></h4>
													<h6 class="text-muted m-b-0">Complete Orders</h6>
												</div>
												<div class="col-4 text-right">
													<i class="fa fa-calendar-check-o f-28"></i>
												</div>
												</div>
											</div>
											<div class="card-footer bg-c-green">
												<div class="row align-items-center">
												<div class="col-9">
													<p class="text-white m-b-0">% change</p>
												</div>
												<div class="col-3 text-right">
													<i class="fa fa-line-chart text-white f-16"></i>
												</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-6">
										<div class="card">
											<div class="card-block">
												<div class="row align-items-center">
												<div class="col-8">
													<h4 class="text-c-red"><?=$order_confirm?></h4>
													<h6 class="text-muted m-b-0"> Confirm Orders</h6>
												</div>
												<div class="col-4 text-right">
													<i class="fa fa-shopping-cart f-28"></i>
												</div>
												</div>
											</div>
											<div class="card-footer bg-c-red">
												<div class="row align-items-center">
												<div class="col-9">
													<p class="text-white m-b-0">% change</p>
												</div>
												<div class="col-3 text-right">
													<i class="fa fa-line-chart text-white f-16"></i>
												</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-6">
										<div class="card">
											<div class="card-block">
												<div class="row align-items-center">
												<div class="col-8">
													<h4 class="text-c-blue"><?=$order_dispach?></h4>
													<h6 class="text-muted m-b-0"> Dispatch Orders</h6>
												</div>
												<div class="col-4 text-right">
													<i class="fa fa-shopping-bag f-28"></i>
												</div>
												</div>
											</div>
											<div class="card-footer bg-c-blue">
												<div class="row align-items-center">
												<div class="col-9">
													<p class="text-white m-b-0">% change</p>
												</div>
												<div class="col-3 text-right">
													<i class="fa fa-line-chart text-white f-16"></i>
												</div>
												</div>
											</div>
										</div>
									</div>
																		<div class="col-xl-3 col-md-6">
										<div class="card">
											<div class="card-block">
												<div class="row align-items-center">
												<div class="col-8">
													<h4 class="text-c-purple"><?=$product_count?></h4>
													<h6 class="text-muted m-b-0">All Product</h6>
												</div>
												<div class="col-4 text-right">
													<i class="fa fa-cube f-28"></i>
												</div>
												</div>
											</div>
											<div class="card-footer bg-c-purple">
												<div class="row align-items-center">
												<div class="col-9">
													<p class="text-white m-b-0">% change</p>
												</div>
												<div class="col-3 text-right">
													<i class="fa fa-line-chart text-white f-16"></i>
												</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-6">
										<div class="card">
											<div class="card-block">
												<div class="row align-items-center">
												<div class="col-8">
													<h4 class="text-c-green"><?=$count_user?></h4>
													<h6 class="text-muted m-b-0">Total Users</h6>
												</div>
												<div class="col-4 text-right">
													<i class="fa fa-users f-28"></i>
												</div>
												</div>
											</div>
											<div class="card-footer bg-c-green">
												<div class="row align-items-center">
												<div class="col-9">
													<p class="text-white m-b-0">% change</p>
												</div>
												<div class="col-3 text-right">
													<i class="fa fa-line-chart text-white f-16"></i>
												</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-6">
										<div class="card">
											<div class="card-block">
												<div class="row align-items-center">
												<div class="col-8">
													<h4 class="text-c-red"><?=$count_designer?></h4>
													<h6 class="text-muted m-b-0">Total Designers</h6>
												</div>
												<div class="col-4 text-right">
													<i class="fa fa-file-text-o f-28"></i>
												</div>
												</div>
											</div>
											<div class="card-footer bg-c-red">
												<div class="row align-items-center">
												<div class="col-9">
													<p class="text-white m-b-0">% change</p>
												</div>
												<div class="col-3 text-right">
													<i class="fa fa-line-chart text-white f-16"></i>
												</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-6">
										<div class="card">
											<div class="card-block">
												<div class="row align-items-center">
												<div class="col-8">
													<h4 class="text-c-blue"><?=$count_cliparts?></h4>
													<h6 class="text-muted m-b-0">SMS Record</h6>
												</div>
												<div class="col-4 text-right">
													<i class="fa fa-hand-o-down f-28"></i>
												</div>
												</div>
											</div>
											<div class="card-footer bg-c-blue">
												<div class="row align-items-center">
												<div class="col-9">
													<p class="text-white m-b-0">% change</p>
												</div>
												<div class="col-3 text-right">
													<i class="fa fa-line-chart text-white f-16"></i>
												</div>
												</div>
											</div>
										</div>
									</div>
									
                                    
									<div class="col-sm-12">
										<div class="card">
											<div class="card-header">
													<div class="row">
														<div class="col-8">
														<h4>Recent Orders</h4>
														</div>
														
													</div>
												
											</div>
											<div class="card-block">
												 <div class="dt-responsive table-responsive">
                              <table id="order-table" class="table table-striped table-bordered nowrap">
                                 <thead>
                                    <tr>
                                       <th>#</th>
                                       <th>Customer name</th>
                                       <th>Address</th>
                                       <th>Customer Phone</th>
                                       <th>Order Date</th>
                                       <th>Order Amount</th>
                                       <th>payment Method</th>
                                       <th>Status</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                     <?php
                                     $ocounter=0;
                                     foreach($orderlists as $myorder){
                                         $ocounter++;
                                         $q = $this->db->query("Select * from users where id= '$myorder->user_id'");
                                                 $user= $q->row();
                                                 $ul = $this->db->query("Select * from user_location where id= '$myorder->location_id'");
                                                 $user_location= $ul->row();
                                                                              ?>
                                    <tr>
                                       <td><?= $ocounter ?></td>
                                       <td>
                                          <?= $user->user_fullname;?>
                                           </td>
                                           <td><?php if($myorder->is_shipping==1){?><?=$user->house_no; ?>&nbsp;<?= $user->city;?>&nbsp; <?= $user->state;?> &nbsp;<?= $user->pincode;?><?php } else {?><?=$user_location->house_no; ?>&nbsp;<?= $user_location->city;?>&nbsp; <?= $user_location->state;?> &nbsp;<?= $user_location->pincode;?><?php }?></td>
                                           <td><?= $user->user_phone;?></td>
                                            <td><?= date("d-M-Y", strtotime($myorder->created)) ;?></td>
                                             <td> <?= $myorder->currency;?><?= $myorder->total;?></td>
                                           <td> <?= $myorder->payment ?></td>
                                       
                                       <td>
                                          
                <?php
                 if($myorder->status=='confirmed'){
                ?>
                <label  class="badge badge-success btn-rounded">Confirmed</label><br/>
               
                </td>
                <?php
                } else if($myorder->status=='dispached'){
                ?>
                <label  class="badge badge-success btn-rounded">Dispatched</label><br/>
                <a href="<?=base_url()?>Invoice/generate/<?= $myorder->id?>"><button class="btn btn-info" title="Generate Invoice"><i class="fa fa-file"></i></button>
                </td>
                <?php
                } else if($myorder->status=='completed'){
                ?>
                <label  class="badge badge-success btn-rounded">Completed</label><br/>
                <a href="<?=base_url()?>Invoice/generate/<?= $myorder->id?>"><button class="btn btn-info" title="Generate Invoice"><i class="fa fa-file"></i></button>
                </td>
                <?php
                } else if($myorder->status=='cancelled'){
                ?>
                <label  class="badge badge-danger btn-rounded">Cancelled</label></td>
                <?php } ?>
                                           
                                       <td>
                                          <a href="<?base_url()?>order_details/<?= $myorder->id?>"> <button class="btn btn-primary btn-sm" type="button"><i class="fa fa-list"></i> Details</button></a>
                                          
                                       </td>
                                    </tr>
                                    
                                <?php   } ?>
                                 </tbody>
                              </table>
                           </div>
											</div>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="card">
											<div class="card-header">
													<div class="row">
														<div class="col-8">
														<h4>Recent Register Users</h4>
														</div>
															<div class="col-4">
															</div>
													</div>
												
											</div>
											<div class="card-block">
												<div class="dt-responsive table-responsive" style="overflow-y:scroll;max-height:400px;">
                                    <table id="order-table" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="order-table_info">
											<thead>
												<tr>
													<th>#</th>
													<th>Name</th>
													<th>Phone</th>
													<th>User Email</th>
													<th>Total Orders</th>
													
													<th>Status</th>
													
												</tr>
											</thead>
											<tbody>
											    <?php $i=1; foreach($list as $l):
											    $q = $this->db->query("Select * from orders where user_id= '$l->id;'");
											    $num = $q->num_rows();
                                                 
                                             
											    ?>
												<tr>
													<td><?=$i;?></td>
													<td><a href="<?php echo base_url()?>Admin/user_profile/<?=$l->id;?>">
														<img class="img-fluid img-circle user-thumbnail-profile" src="<?php if($l->user_image){echo $l->user_image ;} else { echo base_url('uploads/users/default.png');}?>" alt="">&emsp;<?=$l->user_fullname;?></td>
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
                                                   
									                 
													  
												</tr>
												<?php $i++; endforeach;?>
											</tbody>
										
										</table>
									</div>
											</div>
										</div>

					            	</div>
                                    
                                  <div class="col-sm-12">
										<div class="card">
											<div class="card-header">
													<div class="row">
														<div class="col-8">
														<h4>Recent Register Designers</h4>
														</div>
															<div class="col-4">
															</div>
													</div>
												
											</div>
											<div class="card-block">
												<div class="dt-responsive table-responsive" style="overflow-y:scroll;max-height:400px;">
                                    <table id="order-table" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="order-table_info">
											<thead>
												<tr>
													<th>#</th>
													<th>Name</th>
													<th>Phone</th>
													<th> Email</th>
													
													<th>Status</th>
													
												</tr>
											</thead>
											<tbody>
											    <?php $i=1; foreach($list_desig as $ld):?>
												<tr>
													<td><?=$i;?></td>
													<td><a href="<?php echo base_url()?>Admin/user_profile/<?=$ld->id;?>">
														<img class="img-fluid img-circle user-thumbnail-profile" src="<?php if($ld->user_image){echo $ld->user_image ;} else { echo base_url('uploads/users/default.png');}?>" alt="">&emsp;<?=$ld->user_fullname;?></td>
														</a>
														<td><a href="tel:='<?=$ld->user_phone;?>'"><button class="btn btn-success btn-ellipse btn-sm"><?=$ld->user_phone;?></button></a></td>
													<td><a href="mailto:='<?=$ld->user_email;?>'"><button class="btn btn-primary btn-ellipse btn-sm"><?=$ld->user_email;?></button></a></td>
													
													 <?php if($ld->status==1){?>
                                                        
                                                         <td>
                                                           <form action="" method="post">
													          <input type="hidden" name="id" value="<?=$ld->id?>">
                                                        <button
														  class="btn waves-effect waves-light btn-success btn-sm  btn-custom" type="submit" onclick="return confirm('Are you sure to Deactive ?')" name="deactive" value="users">Active</button>
													  </form>  
                                                         </td>
                                                        <?php } else {?>

                                                            <td>
                                                           <form action="" method="post">
													          <input type="hidden" name="id" value="<?=$ld->id?>">
                                                        <button
														  class="btn waves-effect waves-light btn-info btn-sm  btn-custom" type="submit" onclick="return confirm('Are you sure to Active ?')" name="active" value="users">Deactive</button>
													  </form>  
                                                         </td>
                                                        <?php }?>
                                                   
									                 
													  
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
                           <div id="styleSelector"></div>
                        </div>
                     </div>
                  </div>
<?php
$this->load->view('admin/includes/footer');
?>
