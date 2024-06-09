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
						<h5 class="m-b-10">  Dashboard</h5>
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
						<li class="breadcrumb-item"><a href="#">Order Feedback</a>
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
											<div class="col-12">
											<h4>Enquiry Management</h4>
											</div>
											
									    </div>
																		    <?= $this->session->flashdata('message') ?>
								</div>
								<div class="card-block">
									<div class="dt-responsive table-responsive">
										<table id="order-table" class="table table-striped table-bordered nowrap">
											<thead>
												<tr>
													<th>#</th>
													<th>Name</th>
													<th>Phone</th>
													<th>Email</th>
													<th>Subject</th>
													<th>Message</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
											    <?php  $i=0;foreach($list as $l):$i++;?>
												<tr>
													<td><?=$i;?></td>
                                                    <td><?=$l->name;?></td>
                                                    <td><a href="tel:<?=$l->mobile_no;?>"><?=$l->mobile_no;?></a></td>
                                                    <td><a href="mailto:<?=$l->email;?>"><?=$l->email;?></a></td>
                                                    <td><?=$l->subject;?></td>
                                                    <td><?=$l->msg;?></td>
                                                    <td>
                                                         <form action="" method="post" class="del_button">
													          <input type="hidden" name="id" value="<?=$l->id?>">
                                                        <button
														  class="btn waves-effect waves-light btn-danger btn-xs btn-icon btn-custom" type="submit" onclick="return confirm('Are you sure to delete ?')" name="delete" value="suggestion"><i
															  class="fa fa-trash b1"></i></button>
													  </form>
                                                        </td>
												</tr>
												<?php endforeach;?>



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
