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
						<li class="breadcrumb-item"><a href="#!">Add Accountant</a>
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
											<h4>Add  Accountant</h4>
											</div>
												<div class="col-4">
												
												</div>
									    </div>
									
								</div>
                                <div class="card-block">
                                    <form method="post" action="" class="form-material">
                                        <div class="row">

                                            <div class="col-md-6 mt-2">
                                                <div class="form-group form-default mt-2">
                                                    <input type="text" name="name" class="form-control" required>
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Name</label>
                                                </div> 
                                            </div>
                                             <div class="col-md-6 mt-2">
                                                <div class="form-group form-default mt-2">
                                                    <input type="email" name="email" class="form-control" required>
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Email</label>
                                                </div> 
                                                </div>
                                             <div class="col-md-6 mt-2">
                                                <div class="form-group form-default mt-2">
                                                    <input type="text" name="mobile"class="form-control mob_no" data-mask="9999-999-999"required>
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Mobile</label>
                                                </div> 
                                                </div>
                                                <div class="col-md-6 mt-2">
                                                <div class="form-group form-default mt-2">
                                                    <input type="text" name="password"class="form-control mob_no" required>
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Password</label>
                                                </div> 
                                                </div>
                                                <button type="submit" class="btn btn-success" name="add" value="1">Add</button> 
                                                 <button type="reset" class="btn btn-danger">Cancel</button> 
                                             
                                            </div>
                                    </form>
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
</div>
<script>
    function preview(image){
		if (image.files && image.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e){
					$('#image')
						.attr('src', e.target.result)
						.width(200)
						.height(120);
				};
				reader.readAsDataURL(image.files[0]);
		}
	}
</script>

	<?php
$this->load->view('admin/includes/footer');
?>
