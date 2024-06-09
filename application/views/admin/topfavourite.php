<?php 
$this->load->view('admin/includes/header');
$this->load->view('admin/includes/sidebar');
?>
<style>
    .hidden-btn{
        visibility:hidden!important;
        height:0px;
        width:0px;
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
							<a href=""> <i class="fa fa-home"></i> </a>
						</li>
						<li class="breadcrumb-item"><a href="#!">Dashboard</a>
						</li>
						<li class="breadcrumb-item"><a href="#!">Template</a>
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
											<h4>Template</h4>
											</div>
											<div class="col-md-4 col-4 col-xs-4">
											<!--<a href="<?php echo base_url() ?>Admin/add_template" class="float-right"><button class="btn btn-primary">+ Add</button></a>-->
											</div>
												
									    </div>
									    
									    </div>
								<div class="card-block">
								    <br>
								    <?= $this->session->flashdata('message') ?>
								    <?= $this->session->flashdata('favmessage') ?>
								    <br>
									<div class="dt-responsive table-responsive">
                                    <table id="order-table" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="order-table_info">
											<thead>
											    
												<tr>
													<th>#</th>
													<th>Name</th>
													<!--<th>Order</th>-->
												    <th>Categories</th>
												    <th>Screenshot</th>
													<th>Featured_By </th>
													<th>Designed By</th>
													<th>Sales</th>
													<th>Status</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
											    
											    <?php
											    $counter=0;
											   
											    foreach($favourite as $template){
											        $counter++;
											         $designer = $this->db->where('id',$template->designed_by)->get('users')->row();
											    ?>
											    
												<tr>
													<td><?= $counter ?></td>
													<td>
													   
													   <?=$template->name;?>
													</td>
													<!--<td>Order :<?= $template->order ?>-->
													<!--    <form action="" method="post">-->
             <!--                                             <input type="text" name="order" class="form-control" style="width:60px" value="<?=$template->order;?>">-->
             <!--                                             <input type="submit"  class="hidden-btn" name="uorder"  value="<?= $template->id ?>" value="Submit">-->
             <!--                                            </form>-->
													   
													<!--</td>-->
												<?php   $result = $this->db->where('item_id',$template->id)->where('type','templates')->get('categories_reference')->row();
												   $cat = $this->db->where('id',$result->category_id)->get('categories')->row();
												   
												   
												   ?>
													<td><?= $cat->name; ?></td>
											<td>
											   <?php  
											   if($template->side == "both"){ 
											   $screen = json_decode($template->screenshot);
											   $img = '<img class="img-fluid img-circle user-thumbnail"	src="'.$screen->front.'"alt="">'; 
											   $img .= '<img class="img-fluid img-circle user-thumbnail"	src="'.$screen->back.'"alt="">';  
											   ?>
											   <?= $img ?>
											       
											   <?php }else{
											   ?>
											    <img class="img-fluid img-circle user-thumbnail"	src="<?= $template->screenshot;?>"alt="">
												<?php }?>
												</td>
												<td>
                                            <div class="btn-group dropright ">
                                                <button  class="btn btn-secondary  btn-sm dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                             Change featured 
                                                </button>
                                                <div class="dropdown-menu">
                                                    <form action="<?= base_url()?>Admin/featured_template" method="post" >
                                                    <button type ="submit" class="dropdown-item" name="topProduct" onclick="return confirm('Are you sure you want to change ')" value="<?= $template->id ?>" <?= ($template->top_in_products!=1)?"":"disabled"?>>Top in products (Total: <?= validate_featured()?>)  </button>
                                                    <button type ="submit"  class="dropdown-item" name="topCategory" onclick="return confirm('Are you sure you want to change ')" value="<?= $template->id ?>" <?= ($template->top_in_category!=1)?"":"disabled"?> >Top in category  (Total: <?= validate_featuredCategory()?>) </button>
                                                    <button  type ="submit" class="dropdown-item" name="favourites" onclick="return confirm('Are you sure you want to change ')" value="<?= $template->id ?>" <?=((($template->top_in_products == 1 && $template->favourite == 1 ) || ($template->top_in_products == 1 && $template->favourite == 1 ) || $template->favourite == 0 ) )?"":"disabled"?>>After top 5 pages</button>
                                                    <button  type ="submit" class="dropdown-item" name="none" onclick="return confirm('Are you sure you want to change ')" value="<?= $template->id ?>">None</button>
                                                    </form>
                                                </div>
                                            </div>
                                            </br>
                                            <?php 
                                            if($template->top_in_products==1 && $template->favourite==1){
                                                 echo '<h4 class="mt-2" style="font-size:20px"><span class="badge badge-success"> Featured in top products </span></h4>';
                                            }else if( $template->top_in_category==1 && $template->favourite==1){
                                                echo '<h4 class="mt-2" style="font-size:20px"><span class="badge badge-success"> Featured in top Category </span></h4>'; 
                                            }else if($template->favourite==1){
                                                 echo '<h4 class="mt-2" style="font-size:20px" ><span class="badge badge-success"> Featured in after top 5 Page </span></h4>';
                                            }else{
                                                 echo '<h4 class="mt-2" style="font-size:20px"><span class="badge badge-success"> Not featured </span></h4>';
                                            }
                                            
                                            ?>
                						 	</td>
												
													<td><?= $designer->user_fullname ?></td>
													<td><?= get_ordersBytemplates($template->id);?></td>
													<!--<td><img class="img-fluid img-circle user-thumbnail" src="<?//php echo base_url() ?>assets1/images/user-profile/user-img.jpg" alt=""> </td>-->
												
													<?php if($template->active==1){?>
                                                        
                                                         <td>
                                                           <form action="" method="post">
													          <input type="hidden" name="id" value="<?=$template->id ?>">
                                                        <button
														  class="btn waves-effect waves-light btn-success btn-sm  btn-custom" type="submit" onclick="return confirm('Are you sure to Deactive ?')" name="deactive" value="templates">Active</button>
													  </form>  
                                                         </td>
													
													  <?php } else {?>
                                                        
                                                            <td>
                                                           <form action="" method="post">
													          <input type="hidden" name="id" value="<?=$template->id ?>">
                                                        <button
														  class="btn waves-effect waves-light btn-info btn-sm  btn-custom" type="submit" onclick="return confirm('Are you sure to Active ?')" name="active" value="templates">Deactive</button>
													  </form>  
                                                         </td>
                                                        <?php }?>
													<!--<td><a href=""><button-->
													<!--			class="btn btn-primary btn-sm">Active</button></a></td>-->
													
													<td>
													  <form action="" method="post" class="del_button">
													          
                                                        <button
														  class="btn btn-custom" type="submit" onclick="return confirm('Are you sure to Remove ?')" name="remove" value="<?=$template->id ?>">Remove</button>
													  </form>
													</td>
												</tr>

                                             	<?php } ?>

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
