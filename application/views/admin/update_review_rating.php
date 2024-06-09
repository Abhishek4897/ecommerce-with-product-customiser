<?php 
$this->load->view('admin/includes/header');
$this->load->view('admin/includes/sidebar');
?>
<style>
    .rating-star{
        visibility: hidden;
    height: 0px;
    width: 0px;
    }
</style>
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
						<li class="breadcrumb-item"><a href="#!">Pages</a>
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
											<h4>Update Reviews & Rating</h4>
											</div>
												<div class="col-4">
												
												</div>
									    </div>
									
								</div>
								<div class="card-block">
									<form action="">
                                        <div class="form-group">
                                            <label for="title">Reviews</label>
                                            <input type="text"  class="form-control" value="" name="title" id="">
                                        </div>
                                        <div class="col-md-12">
                									   <div class="stars stars-example-css">
                                                                                      <select id="example-css" class="rating-star" name="rating" autocomplete="off">
                                                                                         <option value="1">1</option>
                                                                                         <option value="2">2</option>
                                                                                         <option value="3">3</option>
                                                                                         <option value="4">4</option>
                                                                                         <option value="5">5</option>
                                                                                      </select>
                                                      </div>
                						 </div>
                                        <button type="submit" class="btn btn-primary" name="submit">Update</button>
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
	
	function Copy(id) {
  /* Get the text field */
  var copyText = document.id;

/* Select the text field */
copyText.select();
copyText.setSelectionRange(0, 99999); /*For mobile devices*/

/* Copy the text inside the text field */
document.execCommand("copy");

/* Alert the copied text */
alert("Copied the text: " + copyText.value);
}
</script>

<?php
$this->load->view('admin/includes/footer');
?>
