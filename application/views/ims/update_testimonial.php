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
							<a href="<?= base_url()?>admin/index"> <i class="fa fa-home"></i> </a>
						</li>
						<li class="breadcrumb-item"><a href="#!">Dashboard</a>
						</li>
						<li class="breadcrumb-item"><a href="#!">Testimonial</a>
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
											<h4>Edit testimonial</h4>
											</div>
												<div class="col-4">
												
												</div>
									    </div>
									
								</div>
								<div class="card-block">
									<form action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="title">Client name</label>
                                            <input type="text"  class="form-control" name="name" value="<?=$list->name;?>" id="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="title">Designation </label>
                                            <input type="text"  class="form-control" name="designation" value="<?=$list->designation;?>" id="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="title">Client say's </label>
                                            <!--<input type="text"  class="form-control" name="description" value="<?//=$list->description;?>" id="" required>-->
                                        <textarea id="editor1" class="form-control" name="description" id="" required > <?=$list->description;?> </textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="file" value=""  class="hidden-field" name="image" id="slider" onchange="preview(this)" required>
                                            <img src="<?=$list->image;?>" alt="" id="image" style="height:150px;">
                                            <label for="slider"><span class="dashed-border"><i class="fa fa-picture-o"></i> Add image</span></label>
                                            
                                        </div>
                                        <button type="submit" class="btn btn-primary"  name="update" value="<?=$list->id;?>">Update</button>
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
