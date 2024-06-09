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
						<li class="breadcrumb-item"><a href="#!">Clipart</a>
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
											<h4>Edit Clipart</h4>
											</div>
												<div class="col-4">
												
												</div>
									    </div>
									
								</div>
								<div class="card-block">
									<form action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="title">Name</label>
                                            <input type="text"  class="form-control" name="name" value="name" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="title">Price</label>
                                            <input type="text"  class="form-control" name="price" id="" value="name" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="title">Categories</label>
                                            <!--<input type="text"  class="form-control" name="price" id="" required>-->
                                            <select class="form-control" name="category" id="" value="name" required>
                                                <option value="1">1</option>
                                            </select>
                                        </div>
                                        
                                         <div class="form-group">
                                            <label for="title">Tag</label>
                                            <!--<input type="text"  class="form-control" name="price" id="" required>-->
                                            <select class="form-control" name="Tag" id="" value="name" required>
                                                <option value="1">1</option>
                                            </select>
                                        </div>
                                        
                                       
                                       <div class="form-group">
                                            <input type="file"  class="hidden-field" name="image" id="slider" value="name"  onchange="preview(this)">
                                            <img src="" alt="" id="image">
                                            <label for="slider"><span class="dashed-border"><i class="fa fa-picture-o"></i> Design File</span></label>
                                            
                                        </div>
                                        
                                         <div class="form-group">
                                            <label for="title">Featured</label>
                                            
                                        <select class="form-control" name="featured" id="" value="name" required>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                            
                                        </div>
                                        
                                          <div class="form-group">
                                            <label for="title">Active</label>
                                            
                                        
                                       <input type="checkbox" class="js-single" name="active" value="name" checked="" data-switchery="true" style="display: none;">
                                      
                                            <!--<input type="text"  class="form-control" name="featured" id="" required>-->
                                        </div>
                                        
                                         <div class="form-group">
                                            <label for="title">Order</label>
                                            <input type="text"  class="form-control" name="order" value="name" id="" required>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary" name="add" value="1">Update</button>
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
