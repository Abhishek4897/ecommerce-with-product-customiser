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
							<a href="<?=base_url()?>admin/index"> <i class="fa fa-home"></i> </a>
						</li>
						<li class="breadcrumb-item"><a href="<?=base_url()?>admin/index">Dashboard</a>
						</li>
						<li class="breadcrumb-item"><a href="#!"> Add Template Tag</a>
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
											<h4> Add Template Tag</h4>
											</div>
										
												
									    </div>
									    
									    </div>
								<div class="card-block">
								<form action="" method="post">
<div class="form-group row">
<label class="col-sm-12 col-form-label">Name</label>
<div class="col-sm-12">
<input type="text" class="form-control" name="name" required>
</div>
</div>


<input type="hidden" class="form-control" name="type" value="templates">
<button type="submit" class="btn btn-primary" name="add" value="1">+ Add</button>
<button type="reset" class="btn btn-danger">Cancel</button>
</form>
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
