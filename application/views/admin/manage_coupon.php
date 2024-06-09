<?php 
$this->load->view('admin/includes/header');
$this->load->view('admin/includes/sidebar');
?>
<style>
    #discount_value{
        display:none;
    }
    #discount_value1{
        display:none;
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
							<a href="<?= base_url()?>"> <i class="fa fa-home"></i> </a>
						</li>
						<li class="breadcrumb-item"><a href="<?= base_url()?>">Dashboard</a>
						</li>
						<li class="breadcrumb-item"><a href="#">Manage Coupons</a>
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
      <!--                  <div class="col-sm-5">-->
						<!--	<div class="card">-->
      <!--                      <div class="card-header">-->
						<!--				<div class="row">-->
						<!--					<div class="col-12">-->
						<!--					<h5>Society</h5>-->
						<!--					</div>-->
												
						<!--			    </div>-->
									
						<!--		</div>-->
      <!--                          <div class="card-block">-->
      <!--                              <form method="post" action="" class="form-material">-->
      <!--                                  <div class="row">-->
      <!--                                      <div class="col-md-12 mt-2">-->
      <!--                                          <div class="form-group form-default mt-2">-->
      <!--                                              <input type="text" name="name" class="form-control"  value="">-->
      <!--                                              <span class="form-bar"></span>-->
      <!--                                              <label class="float-label">Society Name</label>-->
      <!--                                          </div>                                            -->
      <!--                                          <div class="form-group form-default mt-2">-->
      <!--                                              <input type="text" name="hname" class="form-control"  value="">-->
      <!--                                              <span class="form-bar"></span>-->
      <!--                                              <label class="float-label">Pincode / Area code / Zip :</label>-->
      <!--                                          </div>                                            -->
      <!--                                          <div class="form-group form-default mt-2">-->
      <!--                                              <input type="text" name="tag" class="form-control"  value="">-->
      <!--                                              <span class="form-bar"></span>-->
      <!--                                              <label class="float-label">Delivery Charge</label>-->
      <!--                                          </div>                                   -->
                                                                                            
      <!--                                      </div>-->
      <!--                                  </div>-->
                                        
      <!--                                  <button type="submit" class="btn btn-primary" name="update">+ Add</button> -->
                                        <!-- <button type="reset" class="btn btn-danger">Cancel</button>  -->
      <!--                              </form>-->
      <!--                          </div>-->
      <!--                      </div>-->
						<!--</div>-->
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
										<div class="row">
											<div class="col-md-8 col-8">
										     	<h5>Manage Coupon Code</h5>
											</div>
											<div class="col-md-4 col-4 d-none d-lg-block d-md-block">
										       <div class="text-right"><button class="btn btn-primary" data-toggle="modal" data-target="#addmodal">+ Add</button></div>
										    </div>
											<div class="col-md-4 col-4  d-lg-none d-md-none d-sm-block d-xs-block">
											    <div class="text-right">
											        	<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addmodal">+ Add</button>
											    </div>
										     
											</div>
											
									    </div>
								</div>
								<div class="card-block">
									<div class="dt-responsive table-responsive">
										<table id="order-table" class="table table-striped table-bordered nowrap">
											<thead>
												<tr>
													<th>#</th>
													<th>Coupon name</th>
													<th>Coupon code </th>
													<th>Discount Type</th>
													<th>Discount Value</th>
													<th>Start Date</th>
													<th>End Date</th>
													<th>NO of Uses</th>
													<!--<th>Describtion</th>-->
													<th>Status</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
												    <td>1.</td>
													<td>Arteno New</td>
													<td>#5542</td>
                                                    <td>Percentage</td>
                                                    <td>50%</td>
                                                    <td>01/01/2021</td>
                                                    <td>10/01/2021</td>
                                                    <td>Unlimited</td>
                                                   	<td><button class="btn btn-primary btn-sm">Active</button></td>
													<td>
													  
													  <button data-toggle="modal" data-target="#updatemodal" class="btn waves-effect waves-light btn-primary btn-xs btn-icon btn-custom"><i class="fa fa-pencil b1"></i></button>
													  <a href=""><button
														  class="btn waves-effect waves-light btn-danger btn-xs btn-icon btn-custom"><i
															  class="fa fa-trash b1"></i></button>
													  </a>
												  </td>
												</tr>
                                                     <!--UPDATE coupon modal-->
                                                        <div class="modal fade" id="updatemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                          <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Update Coupon </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                                </button>
                                                              </div>
                                                               <form method="post" action="" class="">
                                                                       <div class="modal-body">
                                                                              <div class="form-group">
                                                                                    <label for="coupon_name1">Coupon Name</label>
                                                                                    <input type="text" class="form-control" id="coupon_name1" value="" name="">
                                                                              </div>
                                                                              <div class="form-group">
                                                                                    <label for="coupon_code1">Coupon Code</label>
                                                                                    <input type="text" class="form-control" id="coupon_code1" value="" name="">
                                                                              </div>
                                                                              <div class="form-group">
                                                                                <label for="discount_type1">Select Discount Type</label>
                                                                                    <select class="form-control" id="discount_type1" onchange="myFunction1()" name="">
                                                                                      <option class="form-control" value="Percentage	">Percentage</option>
                                                                                      <option class="form-control" value="Fixed price">Fixed Price</option>
                                                                                    </select>
                                                                              </div>
                                                                              <div id="discount_value1">
                                                                                  <div class="form-group">
                                                                                        <label for="discount_price1">Discount Value (<span id="dis_value1"></span>)</label>
                                                                                        <input type="number" class="form-control" id="discount_price1" value="" name="">
                                                                                  </div>
                                                                              </div>
                                                                              <label for="">Coupon Duration</label>
                                                                              <div class="row">
                                                                                  <div class="col-md-6">
                                                                                      <div class="form-group">
                                                                                            <label for="datepicker2">Start Date</label>
                                                                                            <input type="" class="form-control" id="datepicker2" value="" name="">
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-6">
                                                                                      <div class="form-group">
                                                                                            <label for="datepicker3">End Date</label>
                                                                                            <input type="date" class="form-control" id="datepicker3" value="" name="">
                                                                                      </div>
                                                                                  </div>
                                                                              </div>
                                                                              <div class="form-group">
                                                                                    <label for="no_of_uses1">Number Of uses</label>
                                                                                    <input type="number" class="form-control" id="no_of_uses1" value="" name="">
                                                                              </div>
                                                                              <!--<div class="form-group">-->
                                                                              <!--      <label for="Describtion">Describtion</label>-->
                                                                              <!--      <textare  class="form-control" id="Describtion" value="" name="" rows="3"></textare>-->
                                                                              <!--</div>-->
                                                                               <div class="form-check form-check-inline">
                                                                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                                                  <label class="form-check-label" for="inlineRadio1">Active</label>
                                                                                </div>
                                                                                <div class="form-check form-check-inline">
                                                                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                                  <label class="form-check-label" for="inlineRadio2">Inactive</label>
                                                                                </div>
                                                                        </div>
                                                                      <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="Submit" name="" class="btn btn-primary" value="">Submit</button>
                                                                      </div>
                                                                </form>
                                                            </div>
                                                          </div>
                                                        </div>
                                                         <!--update coupon modal-->
											</tbody>
										
										</table>
									</div>
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
<!--add coupon modal-->
<div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Coupon </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form method="post" action="" class="">
               <div class="modal-body">
                      <div class="form-group">
                            <label for="coupon_name">Coupon Name</label>
                            <input type="text" class="form-control" id="coupon_name" value="" name="">
                      </div>
                      <div class="form-group">
                            <label for="coupon_code">Coupon Code</label>
                            <input type="text" class="form-control" id="coupon_code" value="" name="">
                      </div>
                      <div class="form-group">
                        <label for="discount_type">Select Discount Type</label>
                            <select class="form-control" id="discount_type" onchange="myFunction()" name="">
                              <option class="form-control" value="Percentage	">Percentage</option>
                              <option class="form-control" value="Fixed price">Fixed Price</option>
                            </select>
                      </div>
                      <div id="discount_value">
                          <div class="form-group">
                                <label for="discount_price">Discount Value (<span id="dis_value"></span>)</label>
                                <input type="number" class="form-control" id="discount_price" value="" name="">
                          </div>
                      </div>
                      <label for="">Coupon Duration</label>
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                    <label for="datepicker4">Start Date</label>
                                    <input type="text" class="form-control" id="datepicker4" value="" name="">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                    <label for="datepicker1">End Date</label>
                                    <input type="date" class="form-control" id="datepicker1" value="" name="">
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                            <label for="no_of_uses">Number Of uses</label>
                            <input type="number" class="form-control" id="no_of_uses" value="" name="">
                      </div>
                      <!--<div class="form-group">-->
                      <!--      <label for="Describtion">Describtion</label>-->
                      <!--      <textare  class="form-control" id="Describtion" value="" name="" rows="3"></textare>-->
                      <!--</div>-->
                       <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio" value="option1">
                          <label class="form-check-label" for="inlineRadio">Active</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option2">
                          <label class="form-check-label" for="inlineRadio3">Inactive</label>
                        </div>
                </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="Submit" name="" class="btn btn-primary" value="">Submit</button>
              </div>
        </form>
    </div>
  </div>
</div>
<!--add coupon modal-->
<script>

 function myFunction() {
      var x = document.getElementById("discount_value");
       var y = document.getElementById("discount_type").value;
      document.getElementById("dis_value").innerHTML = y;
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "block";
      }
}
    function myFunction1() {
      var x1 = document.getElementById("discount_value1");
       var y1 = document.getElementById("discount_type1").value;
      document.getElementById("dis_value1").innerHTML = y1;
      if (x1.style.display === "none") {
        x1.style.display = "block";
      } else {
        x1.style.display = "block";
      }
}
</script>
<?php
$this->load->view('admin/includes/footer');
?>
