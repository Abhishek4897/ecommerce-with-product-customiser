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
							<a href="index-2.html"> <i class="fa fa-home"></i> </a>
						</li>
						<li class="breadcrumb-item"><a href="#!">Dashboard</a>
						</li>
						<li class="breadcrumb-item"><a href="#!">Page</a>
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
											<h4> Update Page</h4>
											</div>
												
									    </div>
									
								</div>
                                <div class="card-block">
                                    <form method="post" action="" class="form-material">
                                        <div class="row">
                                            <div class="col-md-12 mt-2">
                                                <div class="form-group form-default mt-2">
                                                    <input type="text" name="title" class="form-control"  value="<?=$list->title?>">
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Page Title</label>
                                                </div>                                            
                                                <div class="form-group form-default mt-2">
                                                    <textarea  class="form-control" id="editor1" name="description"><?=$list->description?></textarea>
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Description:</label>
                                                </div>                                            
                                                                                         
                                                                                            
                                            </div>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary" name="update" value="<?=$list->id?>">Update</button> 
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
