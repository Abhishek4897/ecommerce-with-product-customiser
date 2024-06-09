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
						<li class="breadcrumb-item"><a href="">Template</a>
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
											
											</div>
												
									    </div>
									    
									    </div>
								<div class="card-block">
									<div class="dt-responsive table-responsive">
                                    <table id="order-table" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="order-table_info">
											<thead>
											    
												<tr>
													<th>#</th>
													<th>Id</th>
													<th>Title</th>
												    <th>Description</th>
												    <th>Link</th>
												    <th>Price</th>
													<th>Availability </th>
													<th>Image link</th>
													<th>Addition image</th>
													<th>Brand</th>
												</tr>
											</thead>
											<tbody>
											<?php   $counter=0;
											        foreach($templates as $template){
											        $counter++;
											        $price_data=t_shirt_price($template->color,$template->product_base,$template->id);
											        $price=json_decode($price_data);
										    ?>
											<tr>
													<td><?= $counter ?></td>
													<td><?= $template->id ?></td>
													<td><?=$template->name;?></td>
													<td><?=$template->description;?></td>
													<td><?= base_url(get_productbase($template->product_base)->slug.'/'.$template->slug); ?></td>
													<td>INR <?=$price->actual_price;?></td>
													<td>Instock</td>
													<td>
                                                        <?php
                                                            if($template->side == "both") {
                                                                $screen = json_decode($template->screenshot);
                                                                echo $screen->front;
                                                            } else {
                                                                echo $template->screenshot;
                                                            }
                                                            // echo base_url("/uploads/templates/src/temp_src".$template->id.".png");
                                                        ?>
										            </td>
													<td>---</td>
													<td>Arteno</td>
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

<?php $this->load->view('admin/includes/footer');?>