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
							<a href="<?= base_url()?>design/index"> <i class="fa fa-home"></i> </a>
						</li>
						<li class="breadcrumb-item"><a href="<?= base_url()?>admin/index">Dashboard</a>
						</li>
						<li class="breadcrumb-item"><a href="#!"> Payment Details</a>
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
											   <a href="<?=base_url()?>admin/payout_request"><button type="button" class="btn btn-primary"> Payout Request Page</button></a>  
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
                                                            <input type="text" name="bank_name" class="form-control"  value="<?=$list->bank_name;?>" readonly>
                                                            <span class="form-bar"></span>
                                                            <label class="-label">Bank Name</label>
                                                        </div>
                                                        <div class="form-group form-default mt-2">
                                                            <input type="text" name="account_no" class="form-control"  value="<?=$list->account_no?>" readonly>
                                                            <span class="form-bar"></span>
                                                            <label class="-label">Account No.</label>
                                                        </div>                                            
                                                        <div class="form-group form-default mt-2">
                                                            <input type="text" name="ifsc_code"class="form-control mob_no" data-mask="9999-999-999"  value="<?=$list->ifsc_code?>" readonly>
                                                            <span class="form-bar"></span>
                                                            <label class="-label">IFSC CODE</label>
                                                        </div>
                                                        
                                                        <div class="form-group form-default mt-2">
                                                            <input type="text" name="name_on_bank" class="form-control"  value="<?=$list->name_on_bank;?>" readonly>
                                                            <span class="form-bar"></span>
                                                            <label class="-label">Name ON Bank</label>
                                                        </div>
                                                        <div class="form-group form-default mt-2">
                                                            <input type="text" name="branch_address" class="form-control"  value="<?=$list->branch_address?>" readonly>
                                                            <span class="form-bar"></span>
                                                            <label class="-label">Branch Address</label>
                                                        </div>                                            
                                                        <div class="form-group form-default mt-2">
                                                            <input type="text" name="upi_id"class="form-control mob_no" data-mask="9999-999-999"  value="<?=$list->upi_id?>" readonly>
                                                            <span class="form-bar"></span>
                                                            <label class="-label">UPI ID</label>
                                                        </div>
                                                        <div class="form-group">
                                            
                                            <img src="<?=$list->qr_code?>" alt="" id="image">
                                            
                                            
                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>   
                                        
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
