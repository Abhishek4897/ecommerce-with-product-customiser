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
													<th>Order</th>
												    <th>Categories</th>
												    <th>Products</th>
												    <th>Screenshots</th>
													<th>Featured_By </th>
													<th>Designed By</th>
													<th>Sales</th>
													<th>Status</th>
													<?php if(!isset($no_remove) || $no_remove!=true): ?>
													<th>Action</th>
													<?php endif; ?>
												</tr>
											</thead>
											<tbody>
											    
											    <?php
											    $counter=0;
											   
											    foreach($templates as $template){
											        $counter++;
											         $designer = $this->db->where('id',$template->designed_by)->get('users')->row();
											    ?>
											    
												<tr>
													<td><?= $counter ?></td>
													<td>
													   
													   <?=$template->name;?>
													</td>
													<td>Order :<s id="old_<?= $template->id ?>"><?= $template->order ?></s>
													    <form action="" method="post">
                                                            <input type="text" name="order" class="form-control"   id='order_<?= $template->id ?>' style="width:60px" value="<?=$template->order;?>" onchange="change_order(this.value, '<?= $template->id ?>')">
                                                            <input type="submit"  class="hidden-btn" name="uorder"  value="<?= $template->id ?>" value="Submit">
                                                        </form>
													</td>
												<?php $result = $this->db->where('item_id',$template->id)->where('type','templates')->get('categories_reference')->row();
												   $cat = $this->db->where('id',$result->category_id)->get('categories')->row();
												?>
												<td><?= $cat->name; ?></td>
												<td><?= get_productbase($template->product_base)->name; ?></td>
											<td>
                                                <?php
                                                if($template->side == "both") {
                                                    $screen = json_decode($template->screenshot);
                                                    $img = '<img class="img-fluid img-circle user-thumbnail" src="'.$screen->front.'" alt="Front Design">';
                                                    $img .= '<img class="img-fluid img-circle user-thumbnail" src="'.$screen->back.'" alt="Back Design">';
                                                ?>
                                                <?= $img ?>
                                                <?php } else { ?>
                                                <img class="img-fluid img-circle user-thumbnail" src="<?= $template->screenshot;?>"alt="">
										        <?php }?>
										        <br>
										        Designer's template data.
								            </td>
												<td>
                                            <div class="btn-group dropright ">
                                                <button  class="btn btn-secondary  btn-sm dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                             Change featured 
                                                </button>
                                                <div class="dropdown-menu">
                                                    <!--<form action="<?= base_url()?>Admin/featured_template" method="post" >-->
                                                        <input type="hidden" name="prod_id" value="<?= $template->product_base ?>"/>
                                                        <input type="hidden" name="cat_id" value="<?= $result->category_id ?>"/>
                                                        <button type="button" class="dropdown-item" name="topProduct" onclick="change_featured(this.value,'<?= $template->product_base ?>','<?= $result->category_id ?>','topProduct')" value="<?= $template->id ?>" <?= ($template->top_in_products!=1)?"":"disabled"?>>Top in products (Total:  <span id="span_<?=$template->id?>"><?= validate_featured($template->product_base)?></span>)  </button>
                                                        <button type="button" class="dropdown-item" name="topCategory" onclick="change_featured(this.value,'<?= $template->product_base ?>','<?= $result->category_id ?>','topCategory')" value="<?= $template->id ?>" <?= ($template->top_in_category!=1)?"":"disabled"?> >Top in category  (Total: <span id="span_1<?=$template->id?>"><?= validate_featuredCategory($template->product_base, $result->category_id)?> </span>) </button>
                                                        <button type="button" class="dropdown-item" name="favourites" onclick="change_featured(this.value,'<?= $template->product_base ?>','<?= $result->category_id ?>','favourites')" value="<?= $template->id ?>" <?=((($template->top_in_category == 1 && $template->favourite == 1 ) || ($template->top_in_products == 1 && $template->favourite == 1 ) || $template->favourite == 0 ) )?"":"disabled"?>>After top 5 pages</button>
                                                        <button type="button" class="dropdown-item" name="none" onclick="change_featured(this.value,'<?= $template->product_base ?>','<?= $result->category_id ?>','none')" value="<?= $template->id ?>">Not featured.</button>
                                                    <!--</form>-->
                                                </div>
                                            </div>
                                            </br>
                                            <div  id="status_<?= $template->id ?>">
                                            <?php 
                                            if($template->top_in_products==1 && $template->favourite==1){
                                                 echo '<h4 class="mt-2" style="font-size:20px"><span class="badge badge-success"> Featured in top products </span></h4>';
                                            }else if( $template->top_in_category==1 && $template->favourite==1){
                                                echo '<h4 class="mt-2" style="font-size:20px"><span class="badge badge-success"> Featured in top Category </span></h4>'; 
                                            }else if($template->favourite==1){
                                                 echo '<h4 class="mt-2" style="font-size:20px" ><span class="badge badge-success"> Featured after top 5 pages </span></h4>';
                                            }else{
                                                 echo '<h4 class="mt-2" style="font-size:20px"><span class="badge badge-success"> Not featured</span></h4>';
                                            }
                                            
                                            ?>
                                            </div>
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
													<?php if(!isset($no_remove) || $no_remove!=true): ?>
													<td>
													    
													    <form action="" method="post" class="del_button">
													          <input type="hidden" name="id" value="<?=$template->id?>">
                                                        <button
														  class="btn waves-effect waves-light btn-danger btn-xs btn-icon btn-custom" type="submit" onclick="return confirm('Are you sure to delete ?')" name="delete" value="templates"><i
															  class="fa fa-trash b1"></i></button>
													  </form>
													  <?php endif; ?>
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
<script src=
"https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js">
  </script>
<script>
    function change_order(order, temp_id) {
        var url = "<?= base_url('admin/manage_template_ajax') ?>";
        $.post(url, {uorder: temp_id, order: order}, function(result) {
            
            $("#old_"+temp_id).val(result);
            swal({
            title: "Success",
            text: "Proceed successfully!",
            icon: "success",
            buttons: false,
            timer:1200
            });
        });
    }
    // 
    function change_featured(temp_id,prodId,catId,name) {
        var cnf = confirm("Are you sure you want to change");
        if(cnf){
            
        var url = "<?= base_url('admin/featured_template1') ?>";
        $.post(url, {id:temp_id, prod_id:prodId,cat_id:catId,name:name}, function(result) {
            
            $("#status_"+temp_id).html(result);
             swal({
            title: "Success",
            text: "Proceed successfully!",
            icon: "success",
            buttons: false,
            timer:1200
            });
        });
    }
        
    }
</script>