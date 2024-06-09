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
						<h5 class="m-b-10"> Ecommerce Dashboard</h5>
						<p class="m-b-0">Welcome to Admin dashboard</p>
					</div>
				</div>
				<div class="col-md-4">
					<ul class="breadcrumb">
						<li class="breadcrumb-item">
							<a href=""> <i class="fa fa-home"></i> </a>
						</li>
						<li class="breadcrumb-item"><a href="#!">Dashboard</a>
						</li>
						<li class="breadcrumb-item"><a href="#!">Update Product</a>
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
					<div class="card">
						<div class="card-header">
							<h4>Update Product</h4>
						
							<div class="card-header-right">
								<ul class="list-unstyled card-option">
									<li><i class="fa fa fa-wrench open-card-option"></i></li>
									<li><i class="fa fa-window-maximize full-card"></i></li>
									<li><i class="fa fa-minus minimize-card"></i></li>
									<li><i class="fa fa-refresh reload-card"></i></li>
									<li><i class="fa fa-trash close-card"></i></li>
								</ul>
							</div>
						</div>
						<div class="card-block table-border-style">
							<form method="post" action="" enctype="multipart/form-data">
								<div class="row">
									<div class="col-md-4 mt-2">
									<input class="form-control hidden-field" type="file" name="product" id="product" onchange="preview(this)" requird>
									
									<img src="" alt="" id="image">
									<label for="product"><i class="fa fa-picture-o"></i> Product image <span class="important">*</span></label>
									</div>
									<div class="col-md-4 mt-2">
										<label for="name">Product name <span class="important">*</span></label>
										<input type="text" name="name" class="form-control" id="name" requird>
									</div>
									<div class="col-md-4 mt-2">
										<label for="hname">Product Hindi name</label>
										<input type="text" name="hname" class="form-control" id="hname" placeholder="Optional"> 
									</div>
									<div class="col-md-4 mt-2">
									<label for="hname">Select categories <span class="important">*</span></label><br/>
										<select name="category" data-live-search="true" multiple id="category" requird  data-width="100%">
										<option value="Beauty">Beauty products</option>
										<option value="Groccery">Groccery</option>
										</select>
									</div>
									<div class="col-md-4 mt-2">
										<label for="mrp">MRP  <span class="important">*</span></label>
										<input type="text" class="form-control autonumber"  id="mrp" name="mrp">
									</div>
									<div class="col-md-4 mt-2">
										<label for="mrp">Price  (Price must be less or eqal to MRP)<span class="important">*</span></label>
										<input type="text" class="form-control autonumber"  id="price" name="mrp">
										<small class="text-danger mt-2" id="price_alert"></small>
									</div>
									<div class="col-md-4 mt-2">
										<label for="qty">QTY  <span class="important">*</span></label>
										<input type="text" class="form-control autonumber"  id="qty" name="qty">
									</div>
									<div class="col-md-4 mt-2">
										<label for="unit">Unit  <span class="important">*</span></label>
										<select name="unit" data-live-search="true"  id="unit" requird title="Select unit"  data-width="100%">
										<option value="kg">KG</option>
										<option value="piece">Piece</option>
										<option value="dozen">Dozen</option>
										<option value="litre">Liter</option>
										</select>
									</div>
									<div class="col-md-4 mt-2">
										<label for="stock">Stock  <span class="important">*</span></label>
										<input type="text" class="form-control autonumber"  id="stock" name="stock">
									</div>
									<div class="col-md-12 mt-2">
										<label for="desc">Description <span class="important">*</span></label>
										<textarea name="description" class="summernote form-control" required></textarea>
									</div>
									<div class="col-md-12 mt-2">
									  <input type="file" class="hidden-field" id="upload_file" name="upload_file[]" onchange="preview_image();" multiple/>
									  <label for="upload_file">Secondary image</label>
									  <div id="image_preview"></div>
									</div>
									<div class="col-md-12 mt-2">
									  <div class="custom-control custom-checkbox custom-control-inline">
										  <input id="my-input" class="custom-control-input" type="checkbox" name="" value="true">
										  <label for="my-input" class="custom-control-label">Add varients</label>
									  </div>
									    <div class="card" id="appendform">
											<div class="card-body">
												<div class="row">
													<div class="col-md-10">
													<div class="row">
														<div class="col-md-3">
														<input type="text" class="form-control autonumber"   placeholder="Quantity*" name="qty1[]">
														</div>
														<div class="col-md-3">
														<input type="text" class="form-control autonumber"   placeholder="MRP*" name="mrp1[]"></div>
														<div class="col-md-3">
														<input type="text" class="form-control autonumber"   placeholder="Price*" name="price1[]"></div>
														<div class="col-md-3">
														<input type="text" class="form-control autonumber"   placeholder="Stock*" name="stock1[]"></div>
													</div>
													</div>
													<div class="col-md-2">
														<button class="btn btn-success" id="appendformclick"  >+</button>
													</div>
												</div>
											</div>	
										</div>
									    </div>
										
									</div>

								</div>
							</form>
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
var appenddata='<div class="card-body"><div class="row"><div class="col-md-10"><div class="row"><div class="col-md-3"><input type="text" class="form-control autonumber"   placeholder="Quantity*" name="qty1[]"></div><div class="col-md-3"><input type="text" class="form-control autonumber"   placeholder="MRP*" name="mrp1[]"></div><div class="col-md-3"><input type="text" class="form-control autonumber"   placeholder="Price*" name="price1[]"></div><div class="col-md-3"><input type="text" class="form-control autonumber"   placeholder="Stock*" name="stock1[]"></div></div></div><div class="col-md-2"><button class="btn btn-success" id="appendformclick">+</button></div></div></div>';
function Appendvarient(){
	var select = document.getElementById('appendform');
	select.append(appenddata);
}
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
	function preview_image(){
		
			var total_file=document.getElementById("upload_file").files.length;
			for(var i=0;i<total_file;i++)
			{
			$('#image_preview').append("<img  class='multiple_image' src='"+URL.createObjectURL(event.target.files[i])+"'>");
			}
		}
</script>

<?php
$this->load->view('admin/includes/footer');
?>
