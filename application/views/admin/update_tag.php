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
						<h5 class="m-b-10">Dashboard Ecommerce</h5>
						<p class="m-b-0">Welcome to Mega Able</p>
					</div>
				</div>
				<div class="col-md-4">
					<ul class="breadcrumb">
						<li class="breadcrumb-item">
							<a href=""> <i class="fa fa-home"></i> </a>
						</li>
						<li class="breadcrumb-item"><a href="#!">Dashboard</a>
						</li>
						<li class="breadcrumb-item"><a href="#!">Dashboard Ecommerce</a>
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
                                <div class="card-block">
                                    <form method="post" action="" class="form-material">
                                        <div class="row">
                                            <div class="col-md-5 mt-2">
                                                <center><img class="card-img-top profile"  id="image" src="<?php echo base_url()?>assets/images/user-profile/user-img.jpg" alt="">
                                                <input type="file" class="hidden-field" onchange="preview(this)" name="" id="pselect">
                                                <label for="pselect"><h4><i class="fa fa-picture-o"></i></h4></label>
                                                </center>
                                            </div>
                                            <div class="col-md-7 mt-2">
                                                                               
                                                <div class="form-group form-default mt-2">
                                                    <input type="text" name="tag" class="form-control"  value="New">
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Tag name</label>
                                                </div>                                            
                                                                                            
                                            </div>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary" name="update">Update</button> 
                                        <button type="reset" class="btn btn-danger">Cancel</button> 
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
