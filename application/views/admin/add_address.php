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
						<h5 class="m-b-10">  Admin Dashboard</h5>
						<p class="m-b-0">Welcome to Admin Dashboard</p>
					</div>
				</div>
				<div class="col-md-4">
					<ul class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="<?= base_url()?>user/index"> <i class="fa fa-home"></i> </a>
						</li>
						<li class="breadcrumb-item"><a href="<?= base_url()?>admin/index">Dashboard</a>
						</li>
						<li class="breadcrumb-item"><a href="">Add Address</a>
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
											<h4>Add  Address</h4>
											</div>
												<div class="col-4">
												
												</div>
									    </div>
									
								</div>
								<div class="card-block">
									<form action="" method="post" enctype="multipart/form-data">
                                        
                                        
                                        <div class="form-group">
                                            <label for="title">House No/Apartment/Area</label>
                                            <input type="text"  class="form-control" name="house_no" id="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="title">City</label>
                                            <input type="text"  class="form-control" name="city" id="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="title">State</label>
                                            <select class="form-control" name="state" id="state" required>
                              <option value="">Select State</option>
                              <option value="Andaman & Nicobar Islands">Andaman & Nicobar Islands</option>
                              <option value="Andhra Pradesh">Andhra Pradesh</option>
                              <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                              <option value="Assam">Assam</option>
                              <option value="Bihar">Bihar</option>
                              <option value="Chandigarh">Chandigarh</option>
                              <option value="Chhattisgarh">Chhattisgarh</option>
                              <option value=" Dadra Nagar Haveli & Daman Diu">Dadra Nagar Haveli & Daman Diu</option>
                              <option value="Delhi">Delhi</option>
                              <option value="Goa">Goa</option>
                              <option value="Gujarat">Gujarat</option>
                              <option value="Haryana">Haryana</option>
                              <option value="Himachal Pradesh">Himachal Pradesh</option>
                              <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                              <option value="Jharkhand">Jharkhand</option>
                              <option value="Karnataka">Karnataka</option>
                              <option value="Kerala">Kerala</option>
                              <option value="Ladakh">Ladakh</option>
                              <option value="Lakshadweep">Lakshadweep</option>
                              <option value="Madhya Pradesh">Madhya Pradesh</option>
                              <option value="Maharashtra">Maharashtra</option>
                              <option value="Manipur">Manipur</option>
                              <option value="Meghalaya">Meghalaya</option>
                              <option value="Mizoram">Mizoram</option>
                              <option value="Nagaland">Nagaland</option>
                              <option value="Odisha">Odisha</option>
                              <option value="Puducherry">Puducherry</option>
                              <option value="Punjab">Punjab</option>
                              <option value="Rajasthan">Rajasthan</option>
                              <option value="Sikkim">Sikkim</option>
                              <option value="Tamil Nadu">Tamil Nadu</option>
                              <option value="Telangana">Telangana</option>
                              <option value="Tripura">Tripura</option>
                              <option value="Uttar Pradesh">Uttar Pradesh</option>
                              <option value="Uttarakhand">Uttarakhand</option>
                              <option value="West Bengal">West Bengal</option>
                           </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="title">Pincode</label>
                                            <input type="number"  class="form-control" min="0"  onKeyPress="if(this.value.length==6) return false;" name="pincode" id="" required>
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
