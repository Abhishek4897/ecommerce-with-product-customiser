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
						<li class="breadcrumb-item"><a href="#!">Update Address</a>
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
											<div class="col-md-8 col-4 col-xs-8">
											<h4>Address</h4>
											</div>
											<div class="col-md-4 col-4 col-xs-4">
											<a href="<?php echo base_url() ?>admin/add_address/<?=$id;?>" class="float-right"><button class="btn btn-primary">+ Add</button></a>
											</div>
												
									    </div>
									    
									    </div>
                                <div class="card-block">
                                    <div class="row">
                                    <?php 
                                    if($lists){
                                    $i=1; foreach($lists as $list):?>
                                    <div class="col-md-6">
                                    <form method="post" action="" class="form-material" enctype="multipart/form-data">
                                        
                                        <div class="row">
                                            
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header"><h5> Address <?=$i?></h5></div>
                                                    <div class="card-body">
                                                        <div class="form-group form-default mt-2">
                                                            <input type="text" name="house_no" class="form-control"  value="<?=$list->house_no;?>">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">House No/Apartment/Area</label>
                                                        </div>
                                                        <div class="form-group form-default mt-2">
                                                            <input type="text" name="city" class="form-control"  value="<?=$list->city?>">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">City</label>
                                                        </div> 
                                                      <div class="form-group form-default mt-2">
                                                                                                                       <select class="form-control" name="state" id="state" required>
                              <option value="">Select State</option>
                              <option value="Andaman & Nicobar Islands" <?php if($list->state=='Andaman & Nicobar Islands'){echo'selected';}?>>Andaman & Nicobar Islands</option>
                              <option value="Andhra Pradesh" <?php if($list->state=='Andhra Pradesh'){echo'selected';}?>>Andhra Pradesh</option>
                              <option value="Arunachal Pradesh" <?php if($list->state=='Arunachal Pradesh'){echo'selected';}?>>Arunachal Pradesh</option>
                              <option value="Assam" <?php if($list->state=='Assam'){echo'selected';}?>>Assam</option>
                              <option value="Bihar" <?php if($list->state=='Bihar'){echo'selected';}?>>Bihar</option>
                              <option value="Chandigarh" <?php if($list->state=='Chandigarh'){echo'selected';}?>>Chandigarh</option>
                              <option value="Chhattisgarh" <?php if($list->state=='Chhattisgarh'){echo'selected';}?>>Chhattisgarh</option>
                              <option value="Dadra Nagar Haveli & Daman Diu" <?php if($list->state=='Dadra Nagar Haveli & Daman Diu'){echo'selected';}?>>Dadra Nagar Haveli & Daman Diu</option>
                              <option value="Delhi" <?php if($list->state=='Delhi'){echo'selected';}?>>Delhi</option>
                              <option value="Goa" <?php if($list->state=='Goa'){echo'selected';}?>>Goa</option>
                              <option value="Gujarat" <?php if($list->state=='Gujarat'){echo'selected';}?>>Gujarat</option>
                              <option value="Haryana" <?php if($list->state=='Haryana'){echo'selected';}?>>Haryana</option>
                              <option value="Himachal Pradesh" <?php if($list->state=='Himachal Pradesh'){echo'selected';}?>>Himachal Pradesh</option>
                              <option value="Jammu and Kashmir" <?php if($list->state=='Jammu and Kashmir'){echo'selected';}?>>Jammu and Kashmir</option>
                              <option value="Jharkhand" <?php if($list->state=='Jharkhand'){echo'selected';}?>>Jharkhand</option>
                              <option value="Karnataka" <?php if($list->state=='Karnataka'){echo'selected';}?>>Karnataka</option>
                              <option value="Kerala" <?php if($list->state=='Kerala'){echo'selected';}?>>Kerala</option>
                              <option value="Ladakh" <?php if($list->state=='Ladakh'){echo'selected';}?>>Ladakh</option>
                              <option value="Lakshadweep" <?php if($list->state=='Lakshadweep'){echo'selected';}?>>Lakshadweep</option>
                              <option value="Madhya Pradesh" <?php if($list->state=='Madhya Pradesh'){echo'selected';}?>>Madhya Pradesh</option>
                              <option value="Maharashtra" <?php if($list->state=='Maharashtra'){echo'selected';}?>>Maharashtra</option>
                              <option value="Manipur" <?php if($list->state=='Manipur'){echo'selected';}?>>Manipur</option>
                              <option value="Meghalaya" <?php if($list->state=='Meghalaya'){echo'selected';}?>>Meghalaya</option>
                              <option value="Mizoram" <?php if($list->state=='Mizoram'){echo'selected';}?>>Mizoram</option>
                              <option value="Nagaland" <?php if($list->state=='Nagaland'){echo'selected';}?>>Nagaland</option>
                              <option value="Odisha" <?php if($list->state=='Odisha'){echo'selected';}?>>Odisha</option>
                              <option value="Puducherry" <?php if($list->state=='Puducherry'){echo'selected';}?>>Puducherry</option>
                              <option value="Punjab" <?php if($list->state=='Punjab'){echo'selected';}?>>Punjab</option>
                              <option value="Rajasthan" <?php if($list->state=='Rajasthan'){echo'selected';}?>>Rajasthan</option>
                              <option value="Sikkim" <?php if($list->state=='Sikkim'){echo'selected';}?>>Sikkim</option>
                              <option value="Tamil Nadu" <?php if($list->state=='Tamil Nadu'){echo'selected';}?>>Tamil Nadu</option>
                              <option value="Telangana" <?php if($list->state=='Telangana'){echo'selected';}?>>Telangana</option>
                              <option value="Tripura" <?php if($list->state=='Tripura'){echo'selected';}?>>Tripura</option>
                              <option value="Uttar Pradesh" <?php if($list->state=='Uttar Pradesh'){echo'selected';}?>>Uttar Pradesh</option>
                              <option value="Uttarakhand" <?php if($list->state=='Uttarakhand'){echo'selected';}?>>Uttarakhand</option>
                              <option value="West Bengal" <?php if($list->state=='West Bengal'){echo'selected';}?>>West Bengal</option>
                           </select>
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">State</label>
                                                        </div>
                                                        <div class="form-group form-default mt-2">
                                                            <input type="text" name="pincode" min="0"  onKeyPress="if(this.value.length==6) return false;"  class="form-control mob_no" data-mask="9999-999-999"  value="<?=$list->pincode?>">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Pincode</label>
                                                        </div> 
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>   
                                        <button type="submit" class="btn btn-success" name="update" value="<?=$list->id?>">Update</button> 
                                        <button type="reset" class="btn btn-danger">Cancel</button> 
                                    </form>
                                    </div>
                                    <?php $i++; endforeach; }
                                    else{?>
                                      <h4 class="text-center" style="text-align:center;"> Nothing To show please add address.</h4>  
                                   <?php }
                                    ?>
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
