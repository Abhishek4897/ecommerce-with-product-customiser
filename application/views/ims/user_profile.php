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
						<li class="breadcrumb-item"><a href="#!">Update </a>
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
                                    <form method="post" action="" class="form-material" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-5 mt-2">
                                                <center><img class="card-img-top profile"  id="image" src="<?=$list->user_image?>" alt="">
                                                <input type="file" class="hidden-field" onchange="preview(this)" name="image" id="pselect">
                                                <label for="pselect"><h4><i class="fa fa-picture-o"></i></h4></label>
                                                </center>
                                            </div>
                                            <div class="col-md-7 mt-2">
                                                <div class="form-group form-default mt-2">
                                                    <input type="text" name="name" class="form-control"  value="<?=$list->user_fullname?>">
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Name</label>
                                                </div>                                            
                                                <div class="form-group form-default mt-2">
                                                    <input type="email" name="email" class="form-control"  value="<?=$list->user_email?>">
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Email</label>
                                                </div>                                            
                                                <div class="form-group form-default mt-2">
                                                    <input type="text" name="mobile"class="form-control mob_no" data-mask="9999-999-999"  value="<?=$list->user_phone?>">
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Mobile</label>
                                                </div>  
                                                 <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header"><a href="<?=base_url()?>admin/address/<?=$list->id?>"><h5> Update Address ?Please click here...</h5></a></div>
                                                    
                                                </div>
                                            </div>
                                           
                                        </div>
                                            </div>
                                        </div>
                                      
                                        <button type="submit" class="btn btn-success" name="update" value="<?=$list->id?>">Update</button> 
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
