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
						<li class="breadcrumb-item"><a href="#!">Update Payment Details</a>
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
											<h4>Payment Details</h4>
											</div>
											<div class="col-md-4 col-4 col-xs-4">
											     <?php 
                                    if(!$lists){?>
											<a href="<?php echo base_url() ?>admin/add_payment_details/<?=$id;?>" class="float-right"><button class="btn btn-primary">+ Add</button></a>
										<?php }?>
											</div>
												
									    </div>
									    
									    </div>
                                <div class="card-block">
                                    <div class="row">
                                    <?php 
                                    if($lists){
                                    $i=1; foreach($lists as $list):?>
                                    <div class="col-md-12">
                                    <form method="post" action="" class="form-material" enctype="multipart/form-data">
                                        
                                        <div class="row">
                                            
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header"><h5> Payment Details</h5></div>
                                                    <div class="card-body">
                                                        <div class="form-group form-default mt-2">
                                                            <input type="text" name="bank_name" class="form-control"  value="<?=$list->bank_name;?>">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Bank Name</label>
                                                        </div>
                                                        <div class="form-group form-default mt-2">
                                                            <input type="text" name="account_no" class="form-control"  value="<?=$list->account_no?>">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Account No.</label>
                                                        </div>                                            
                                                        <div class="form-group form-default mt-2">
                                                            <input type="text" name="ifsc_code"class="form-control mob_no" data-mask="9999-999-999"  value="<?=$list->ifsc_code?>">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">IFSC CODE</label>
                                                        </div>
                                                        
                                                        <div class="form-group form-default mt-2">
                                                            <input type="text" name="name_on_bank" class="form-control"  value="<?=$list->name_on_bank;?>">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Name ON Bank</label>
                                                        </div>
                                                        <div class="form-group form-default mt-2">
                                                            <input type="text" name="branch_address" class="form-control"  value="<?=$list->branch_address?>">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Branch Address</label>
                                                        </div>                                            
                                                        <div class="form-group form-default mt-2">
                                                            <input type="text" name="upi_id"class="form-control mob_no" data-mask="9999-999-999"  value="<?=$list->upi_id?>">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">UPI ID</label>
                                                        </div>
                                                        <div class="form-group">
                                            <input type="file"  class="hidden-field" name="image" id="slider" onchange="preview(this)">
                                            <img src="<?=$list->qr_code?>" alt="" id="image">
                                            <label for="slider"><span class="dashed-border"><i class="fa fa-picture-o"></i>  QR CODE</span></label>
                                            
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
                                      <h4 class="text-center" style="text-align:center;"> Nothing To show please add payment details.</h4>  
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
