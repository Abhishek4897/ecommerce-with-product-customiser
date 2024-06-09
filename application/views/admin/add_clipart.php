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
						<li class="breadcrumb-item"><a href="<?= base_url()?>admin/index">Dashboard</a>
						</li>
						<li class="breadcrumb-item"><a href="#!">Cliparts</a>
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
											<h4>Add  Clipart</h4>
											</div>
												<div class="col-4">
												
												</div>
									    </div>
									
								</div>
								<div class="card-block">
									<form action="" method="post" enctype="multipart/form-data">
									    <div class="row">
									        <div class="col-md-6">
									            <div class="form-group">
                                            <label for="title">Name</label>
                                            <input type="text"  class="form-control" name="name" id="" required>
                                        </div>
									        </div>
									        <div class="col-md-6">
									            <div class="form-group">
                                            <label for="title">Price</label>
                                            <input type="number" min="0"  class="form-control" name="price" id="" required>
                                        </div>
									        </div>
									        <div class="col-md-6">
									            <div class="form-group">
                                            <label for="title">Categories</label>
                                            <!--<input type="text"  class="form-control" name="price" id="" required>-->
                                            <select class="form-control" name="category" id="" required>
                                                <?php foreach($list as $l):?>
                                                <option value="<?=$l->id?>"><?=$l->name?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
									        </div>
									        <div class="col-md-6">
									            <div class="form-group">
                                            <label for="title">Tag</label>
                                            <!--<input type="text"  class="form-control" name="price" id="" required>-->
                                            <select class="form-control" name="tag" id="" required>
                                                <?php foreach($tag as $t):?>
                                                <option value="<?=$t->id?>"><?=$t->name?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
									        </div>
									        <div class="col-md-6">
									            <div class="form-group">
                                            <input type="file"  class="hidden-field" name="image" id="slider" onchange="preview(this)">
                                            <img src="" alt="" id="image">
                                            <label for="slider"><span class="dashed-border"><i class="fa fa-picture-o"></i> Design File</span></label>
                                            
                                        </div>
                                        </div>
                                       
									        <div class="col-md-6">
									           <div class="form-group">
                                            <label for="title">Featured</label>
                                            
                                        <select class="form-control" name="featured" id="" required>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                            
                                        </div> 
									        </div>
									        <div class="col-md-6">
									            <div class="form-group">
                                            <label for="title">Order</label>
                                            <input type="number" min="0"  class="form-control" name="order" id="" required>
                                        </div>
									        </div>
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
	function preview1(image){
		if (image.files && image.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e){
					$('#image1')
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
