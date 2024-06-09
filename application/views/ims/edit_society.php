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
							<a href="index-2.html"> <i class="fa fa-home"></i> </a>
						</li>
						<li class="breadcrumb-item"><a href="#!">Dashboard</a>
						</li>
						<li class="breadcrumb-item"><a href="#!">Society</a>
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
											<div class="col-12">
											<h4> Update Society</h4>
											</div>
												
									    </div>
									
								</div>
                                <div class="card-block">
                                    <form method="post" action="" class="form-material">
                                        <div class="row">
                                            <div class="col-md-12 mt-2">
                                                <div class="form-group form-default mt-2">
                                                    <input type="text" name="name" class="form-control"  value="">
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Society Name</label>
                                                </div>                                            
                                                <div class="form-group form-default mt-2">
                                                    <input type="text" name="hname" class="form-control"  value="">
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Pincode / Area code / Zip :</label>
                                                </div>                                            
                                                <div class="form-group form-default mt-2">
                                                    <input type="text" name="tag" class="form-control"  value="">
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Delivery Charge</label>
                                                </div>                                            
                                                                                            
                                            </div>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary" name="update">Update</button> 
                                        <!-- <button type="reset" class="btn btn-danger">Cancel</button>  -->
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


<?php
$this->load->view('admin/includes/footer');
?>
