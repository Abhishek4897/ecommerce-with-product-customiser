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
							<a href="<?= base_url()?>admin/index"> <i class="fa fa-home"></i> </a>
						</li>
						<li class="breadcrumb-item"><a href="<?= base_url()?>admin/index">Dashboard</a>
						</li>
						<li class="breadcrumb-item"><a href="">Payout Response</a>
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
											<h4>Payout Response</h4>
											</div>
												<div class="col-4">
												
												</div>
									    </div>
									
								</div>
								<div class="card-block">
									<form action="" method="post" enctype="multipart/form-data">
                                        
                                        <div class="row">
                                            
                                            
                                            <div class="col-md-12">
                                               <div class="form-group form-default mt-2">
                                            <input type="file"  class="hidden-field" name="image" id="slider" onchange="preview(this)" required>
                                            <img src="" alt="" id="image">
                                            <label for="slider"><span class="dashed-border"><i class="fa fa-picture-o"></i>  Payment ScreenShot</span></label>
                                            
                                        </div>  
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group form-default mt-2">
                                                            <label class="float-label">Note</label>
                                                            <textarea  name="note"class="form-control" rows="5"></textarea>
                                                           
                                                            
                                                        </div> 
                                            </div>
                                            
                                            </div>
                                                                                               
                                                                                                 
                                                        
                                                        
                                                       
                                                                                                   
                                                       
                                                       
                                        <button type="submit" class="btn btn-primary" name="submit" value="1">Submit</button>
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
