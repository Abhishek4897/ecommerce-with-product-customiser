<?php 
$this->load->view('admin/includes/header');
$this->load->view('admin/includes/sidebar');
?>
 <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script src="https://cdn.ckeditor.com/[version.number]/[distribution]/ckeditor.js"></script>
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
						<li class="breadcrumb-item"><a href="#!">Blog</a>
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
											<h4>Edit Blog</h4>
											</div>
												<div class="col-4">
												
												</div>
									    </div>
									
								</div>
								<div class="card-block">
									<form action="" method="post" enctype="multipart/form-data">
                                        
                                        <div class="form-group">
                                            <input type="file"  class="hidden-field" name="image" id="slider" onchange="preview(this)">
                                            <img src="<?=$list->image;?>" alt="" id="image" style="height:150px;">
                                            <label for="slider"><span class="dashed-border"><i class="fa fa-picture-o"></i> Poster image</span></label>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text"  class="form-control" name="title" id="" value="<?=$list->title;?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="title">Short Description</label>
                                            <input type="text"  class="form-control" name="short_desc" id="" value="<?=$list->short_description;?>" required>
                                        </div>
                                        <div class="form-group">
                                            <!--<label for="title"> Description</label>-->
                                            <!--<input type="text"  class="form-control" name="desc" id="" value="<?//=$list->description;?>" required>-->
                                       <textarea name="desc" id="editor1" rows="10" cols="80" name="desc" required>
                                              <?=$list->description;?> 
                                               </textarea>
                                       
                                        </div>
                                       
                                        <button type="submit" class="btn btn-primary" name="update" value="<?=$list->id;?>"> Update</button>
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
             CKEDITOR.replace( 'editor1' );
         </script>
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
