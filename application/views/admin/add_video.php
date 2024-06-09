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
						<li class="breadcrumb-item"><a href="#!">Video</a>
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
											<h4>Add  Video</h4>
											</div>
												<div class="col-4">
												
												</div>
									    </div>
									
								</div>
								<div class="card-block">
									<form action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="title">Youtube Link</label>
                                            <input type="url"  class="form-control" name="link" id="" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text"  class="form-control" name="title" id="" required>
                                        </div>
                                       <div class="form-group">
                                            <input type="file"  class="hidden-field" name="image" id="slider" onchange="preview(this)">
                                            <img src="" alt="" id="image">
                                            <label for="slider"><span class="dashed-border"><i class="fa fa-picture-o"></i> Poster image</span></label>
                                            
                                        </div>
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
