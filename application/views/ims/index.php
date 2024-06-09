<?php 
   $this->load->view('ims/includes/header');
   $this->load->view('ims/includes/sidebar');
   ?>
<div class="pcoded-content">
   <div class="page-header">
      <div class="page-block">
         <div class="row align-items-center">
            <div class="col-md-8">
               <div class="page-header-title">
                  <h5 class="m-b-10"> Ims Dashboard</h5>
                  <p class="m-b-0">Welcome to Ims dashboard</p>
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
                  <div class="col-xl-4 col-md-6">
                     <div class="card">
                        <div class="card-block">
                           <div class="row align-items-center">
                              <div class="col-8">
                                 <h4 class="text-c-purple"> ₹ <?=$expenses?></h4>
                                 <h6 class="text-muted m-b-0">Expenses</h6>
                              </div>
                              <div class="col-4 text-right">
                                 <i class="fa fa-money f-28"></i>
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
                  <div class="col-xl-4 col-md-6">
                     <div class="card">
                        <div class="card-block">
                           <div class="row align-items-center">
                              <div class="col-8">
                                 <h4 class="text-c-green"> ₹ <?= $total_income= $incomes + $return_stock?></h4>
                                 <h6 class="text-muted m-b-0">Income</h6>
                              </div>
                              <div class="col-4 text-right">
                                 <i class="fa fa-money f-28"></i>
                              </div>
                           </div>
                        </div>
                        <div class="card-footer bg-c-green">
                           <div class="row align-items-center">
                              <div class="col-9">
                                 <p class="text-white m-b-0"><strong> GST Included ₹<?=$income_gst?> </strong></p>
                              </div>
                              <div class="col-3 text-right">
                                 <i class="fa fa-money text-white f-16"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  	<div class="col-xl-4 col-md-6">
										<div class="card">
											<div class="card-block">
												<div class="row align-items-center">
												<div class="col-8">
													<h4 class="text-c-red"> ₹ <?=$stock_expense + $stock_expense_gst;?></h4>
													<h6 class="text-muted m-b-0"> Stock Expenses</h6>
												</div>
												<div class="col-4 text-right">
													<i class="fa fa-money f-28"></i>
												</div>
												</div>
											</div>
											<div class="card-footer bg-c-red">
												<div class="row align-items-center" style="display: flex!important;">
												<div class="col-9">
													<p class="text-white m-b-0"> <strong> GST Included ₹<?=$stock_expense_gst?> </strong></p>
												</div>
												<div class="col-3 text-right">
													<i class="fa fa-line-chart text-white f-16"></i>
												</div>
												</div>
											</div>
										</div>
									</div>
					<div class="col-xl-4 col-md-6">
										<div class="card">
											<div class="card-block">
												<div class="row align-items-center">
												<div class="col-8">
													<h4 class="text-c-blue"> ₹ <?=$designer_expense?></h4>
													<h6 class="text-muted m-b-0"> Designers Expenses</h6>
												</div>
												<div class="col-4 text-right">
													<i class="fa fa-money f-28"></i>
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
					<div class="col-xl-4 col-md-6">
                     <div class="card">
                        <div class="card-block">
                           <div class="row align-items-center">
                              <div class="col-8">
                                 <h4 class="text-c-purple"> ₹ <?=$other_expense?></h4>
                                 <h6 class="text-muted m-b-0">Other Expenses</h6>
                              </div>
                              <div class="col-4 text-right">
                                 <i class="fa fa-money f-28"></i>
                              </div>
                           </div>
                        </div>
                        <div class="card-footer bg-c-purple">
                           <div class="row align-items-center">
                              <div class="col-9">
                                 <p class="text-white m-b-0">% change</p>
                              </div>
                              <div class="col-3 text-right">
                                 <i class="fa fa-money text-white f-16"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-6">
                     <div class="card">
                        <div class="card-block">
                           <div class="row align-items-center">
                              <div class="col-8">
                                 <h4 class="text-c-green"> ₹ <?= $incomes?></h4>
                                 <h6 class="text-muted m-b-0">Order Income</h6>
                              </div>
                              <div class="col-4 text-right">
                                 <i class="fa fa-money f-28"></i>
                              </div>
                           </div>
                        </div>
                        <div class="card-footer bg-c-green">
                           <div class="row align-items-center">
                              <div class="col-9">
                                 <p class="text-white m-b-0"><strong> GST Included ₹<?=$income_gst?> </strong></p>
                              </div>
                              <div class="col-3 text-right">
                                 <i class="fa fa-money text-white f-16"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  	<div class="col-xl-4 col-md-6">
										<div class="card">
											<div class="card-block">
												<div class="row align-items-center">
												<div class="col-8">
													<h4 class="text-c-red"> ₹ <?=$return_stock;?></h4>
													<h6 class="text-muted m-b-0"> Debit Note</h6>
												</div>
												<div class="col-4 text-right">
													<i class="fa fa-money f-28"></i>
												</div>
												</div>
											</div>
											<div class="card-footer bg-c-red">
												<div class="row align-items-center">
												<div class="col-9">
													<p class="text-white m-b-0"> <strong> </strong></p>
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
                                           <td><?= $user_location->house_no;?>,<?= $user_location->city;?>,<?= $user_location->pincode;?></td>
                                           <td><?= $user->user_phone;?></td>
                                            <td><?= date("d-M-Y", strtotime($myorder->created)) ;?></td>
                                             <td> <?= $myorder->currency;?><?= $myorder->total;?></td>
                                           <td> <?= $myorder->payment ?></td>
                                       
                                       <td>
                                           <?php
                if($myorder->status=='confirmed'){
                ?>
                <label  class="badge badge-primary btn-rounded">Confirmed</label></td>
                <?php
                } else if($myorder->status=='dispached'){
                ?>
                <label  class="badge badge-success btn-rounded">Dispached</label><br/>
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
                                          <a href="<?=base_url()?>ims/order_details/<?= $myorder->id?>"> <button class="btn btn-primary btn-sm" type="button"><i class="fa fa-list"></i> Details</button></a>
                                          
                                       </td>
                                    </tr>
                                    
                                <?php   } ?>
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
   $this->load->view('ims/includes/footer');
   ?>