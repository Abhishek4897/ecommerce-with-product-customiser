<?php 
$this->load->view('admin/includes/header');
$this->load->view('admin/includes/sidebar');
?>
<style>
    /*.br-widget{*/
    /*    float:right;*/
    /*}*/
    .product-detail .br-wrapper {
    margin: 0px 0;
}
.br-wrapper {
    margin: 0px 0 5px;
}
</style>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets1/bower_components/jquery-bar-rating/css/css-stars.css">
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets1/bower_components/jquery-bar-rating/css/fontawesome-stars.css">
	      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets1/bower_components/jquery-bar-rating/css/fontawesome-stars-o.css">
<div class="pcoded-content">
	<div class="page-header">
		<div class="page-block">
			<div class="row align-items-center">
				<div class="col-md-8">
					<div class="page-header-title">
						<h5 class="m-b-10"> Admin dashboard</h5>
						<p class="m-b-0">Welcome to Admin dashboard</p>
					</div>
				</div>
				<div class="col-md-4">
					<ul class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="<?=base_url()?>admin/index"> <i class="fa fa-home"></i> </a>
						</li>
						<li class="breadcrumb-item"><a href="#!">Dashboard</a>
						</li>
						<li class="breadcrumb-item"><a href="#!">Dashboard Ecommerce</a>
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
						<div class="col-md-12">
							<div class="card product-detail-page">
								<div class="card-block">
									<div class="row">
										<div class="col-lg-5 col-xs-12">
											<div class="port_details_all_img row">
												<div class="col-lg-12 m-b-15">
													<div id="big_banner" class="slick-initialized slick-slider">
														<div class="slick-list draggable">
															<div class="slick-track" style="opacity: 1; width: 3283px;">
																<div class="port_big_img slick-slide"
																	data-slick-index="0" aria-hidden="true"
																	style="width: 469px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"
																	tabindex="-1">
																	<img class="img img-fluid"
																		src="<?php echo base_url()?>/assets1/images/product-detail/pro-d-l-1.jpg"
																		alt="Big_ Details">
																</div>
																<div class="port_big_img slick-slide slick-current slick-active"
																	data-slick-index="1" aria-hidden="false"
																	style="width: 469px; position: relative; left: -469px; top: 0px; z-index: 999; opacity: 1;"
																	tabindex="0">
																	<img class="img img-fluid"
																		src="<?php echo base_url()?>/assets1/images/product-detail/pro-d-l-2.jpg"
																		alt="Big_ Details">
																</div>
																<div class="port_big_img slick-slide"
																	data-slick-index="2" aria-hidden="true"
																	style="width: 469px; position: relative; left: -938px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"
																	tabindex="-1">
																	<img class="img img-fluid"
																		src="<?php echo base_url()?>/assets1/images/product-detail/pro-d-l-3.jpg"
																		alt="Big_ Details">
																</div>
																<div class="port_big_img slick-slide"
																	data-slick-index="3" aria-hidden="true"
																	style="width: 469px; position: relative; left: -1407px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"
																	tabindex="-1">
																	<img class="img img-fluid"
																		src="<?php echo base_url()?>/assets1/images/product-detail/pro-d-l-4.jpg"
																		alt="Big_ Details">
																</div>
																<div class="port_big_img slick-slide"
																	data-slick-index="4" aria-hidden="true"
																	style="width: 469px; position: relative; left: -1876px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"
																	tabindex="-1">
																	<img class="img img-fluid"
																		src="<?php echo base_url()?>/assets1/images/product-detail/pro-d-l-5.jpg"
																		alt="Big_ Details">
																</div>
																<div class="port_big_img slick-slide"
																	data-slick-index="5" aria-hidden="true"
																	style="width: 469px; position: relative; left: -2345px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"
																	tabindex="-1">
																	<img class="img img-fluid"
																		src="<?php echo base_url()?>/assets1/images/product-detail/pro-d-l-6.jpg"
																		alt="Big_ Details">
																</div>
																<div class="port_big_img slick-slide"
																	data-slick-index="6" aria-hidden="true"
																	style="width: 469px; position: relative; left: -2814px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"
																	tabindex="-1">
																	<img class="img img-fluid"
																		src="<?php echo base_url()?>/assets1/images/product-detail/pro-d-l-7.jpg"
																		alt="Big_ Details">
																</div>
															</div>
														</div>






													</div>
												</div>
												<div class="col-lg-12 product-right">
													<div id="small_banner" class="slick-initialized slick-slider">
														<button class="slick-prev slick-arrow" aria-label="Previous"
															type="button" style="">Previous</button>
														<div class="slick-list draggable" style="padding: 0px 50px;">
															<div class="slick-track"
																style="opacity: 1; width: 1767px; transform: translate3d(-372px, 0px, 0px);">
																<div class="slick-slide slick-cloned"
																	data-slick-index="-5" aria-hidden="true"
																	style="width: 93px;" tabindex="-1">
																	<img class="img img-fluid"
																		src="<?php echo base_url()?>/assets1/images/product-detail/pro-d-s-3.jpg"
																		alt="small-details">
																</div>
																<div class="slick-slide slick-cloned"
																	data-slick-index="-4" aria-hidden="true"
																	style="width: 93px;" tabindex="-1">
																	<img class="img img-fluid"
																		src="<?php echo base_url()?>/assets1/images/product-detail/pro-d-s-4.jpg"
																		alt="small-details">
																</div>
																<div class="slick-slide slick-cloned"
																	data-slick-index="-3" aria-hidden="true"
																	style="width: 93px;" tabindex="-1">
																	<img class="img img-fluid"
																		src="<?php echo base_url()?>/assets1/images/product-detail/pro-d-s-5.jpg"
																		alt="small-details">
																</div>
																<div class="slick-slide slick-cloned"
																	data-slick-index="-2" aria-hidden="true"
																	style="width: 93px;" tabindex="-1">
																	<img class="img img-fluid"
																		src="<?php echo base_url()?>/assets1/images/product-detail/pro-d-s-6.jpg"
																		alt="small-details">
																</div>
																<div class="slick-slide slick-cloned slick-active"
																	data-slick-index="-1" aria-hidden="false"
																	style="width: 93px;" tabindex="-1">
																	<img class="img img-fluid"
																		src="<?php echo base_url()?>/assets1/images/product-detail/pro-d-s-7.jpg"
																		alt="small-details">
																</div>
																<div class="slick-slide slick-active"
																	data-slick-index="0" aria-hidden="false"
																	style="width: 93px;" tabindex="-1">
																	<img class="img img-fluid"
																		src="<?php echo base_url()?>/assets1/images/product-detail/pro-d-s-1.jpg"
																		alt="small-details">
																</div>
																<div class="slick-slide slick-current slick-active slick-center"
																	data-slick-index="1" aria-hidden="false"
																	style="width: 93px;" tabindex="0">
																	<img class="img img-fluid"
																		src="<?php echo base_url()?>/assets1/images/product-detail/pro-d-s-2.jpg"
																		alt="small-details">
																</div>
																<div class="slick-slide slick-active"
																	data-slick-index="2" aria-hidden="false"
																	style="width: 93px;" tabindex="0">
																	<img class="img img-fluid"
																		src="<?php echo base_url()?>/assets1/images/product-detail/pro-d-s-3.jpg"
																		alt="small-details">
																</div>
																<div class="slick-slide slick-active"
																	data-slick-index="3" aria-hidden="false"
																	style="width: 93px;" tabindex="0">
																	<img class="img img-fluid"
																		src="<?php echo base_url()?>/assets1/images/product-detail/pro-d-s-4.jpg"
																		alt="small-details">
																</div>
																<div class="slick-slide" data-slick-index="4"
																	aria-hidden="true" style="width: 93px;"
																	tabindex="0">
																	<img class="img img-fluid"
																		src="<?php echo base_url()?>/assets1/images/product-detail/pro-d-s-5.jpg"
																		alt="small-details">
																</div>
																<div class="slick-slide" data-slick-index="5"
																	aria-hidden="true" style="width: 93px;"
																	tabindex="-1">
																	<img class="img img-fluid"
																		src="<?php echo base_url()?>/assets1/images/product-detail/pro-d-s-6.jpg"
																		alt="small-details">
																</div>
																<div class="slick-slide" data-slick-index="6"
																	aria-hidden="true" style="width: 93px;"
																	tabindex="-1">
																	<img class="img img-fluid"
																		src="<?php echo base_url()?>/assets1/images/product-detail/pro-d-s-7.jpg"
																		alt="small-details">
																</div>
																<div class="slick-slide slick-cloned"
																	data-slick-index="7" aria-hidden="true"
																	style="width: 93px;" tabindex="-1">
																	<img class="img img-fluid"
																		src="<?php echo base_url()?>/assets1/images/product-detail/pro-d-s-1.jpg"
																		alt="small-details">
																</div>
																<div class="slick-slide slick-cloned"
																	data-slick-index="8" aria-hidden="true"
																	style="width: 93px;" tabindex="-1">
																	<img class="img img-fluid"
																		src="<?php echo base_url()?>/assets1/images/product-detail/pro-d-s-2.jpg"
																		alt="small-details">
																</div>
																<div class="slick-slide slick-cloned"
																	data-slick-index="9" aria-hidden="true"
																	style="width: 93px;" tabindex="-1">
																	<img class="img img-fluid"
																		src="<?php echo base_url()?>/assets1/images/product-detail/pro-d-s-3.jpg"
																		alt="small-details">
																</div>
																<div class="slick-slide slick-cloned"
																	data-slick-index="10" aria-hidden="true"
																	style="width: 93px;" tabindex="-1">
																	<img class="img img-fluid"
																		src="<?php echo base_url()?>/assets1/images/product-detail/pro-d-s-4.jpg"
																		alt="small-details">
																</div>
																<div class="slick-slide slick-cloned"
																	data-slick-index="11" aria-hidden="true"
																	style="width: 93px;" tabindex="-1">
																	<img class="img img-fluid"
																		src="<?php echo base_url()?>/assets1/images/product-detail/pro-d-s-5.jpg"
																		alt="small-details">
																</div>
																<div class="slick-slide slick-cloned"
																	data-slick-index="12" aria-hidden="true"
																	style="width: 93px;" tabindex="-1">
																	<img class="img img-fluid"
																		src="<?php echo base_url()?>/assets1/images/product-detail/pro-d-s-6.jpg"
																		alt="small-details">
																</div>
																<div class="slick-slide slick-cloned"
																	data-slick-index="13" aria-hidden="true"
																	style="width: 93px;" tabindex="-1">
																	<img class="img img-fluid"
																		src="<?php echo base_url()?>/assets1/images/product-detail/pro-d-s-7.jpg"
																		alt="small-details">
																</div>
															</div>
														</div>






														<button class="slick-next slick-arrow" aria-label="Next"
															type="button" style="">Next</button>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-7 col-xs-12 product-detail" id="product-detail">
											<div class="row">
												<div>
													<div class="col-lg-12">
														<span class="txt-muted d-inline-block">Product Code: <a
																href="#!"> PRDT1234 </a> </span>
														<span class="f-right">Availablity : <a href="#!"> In Stock </a>
														</span>
													</div>
													<div class="col-lg-12">
														<h4 class="pro-desc">Athena Black &amp; Red Polyester Georgette
															Maxi Dress</h4>
													</div>
													<div class="col-lg-12">
														<span class="txt-muted"> Brand : Denim </span>
													</div>
													
													<div class="col-lg-12">
														<span class="text-primary product-price"> &#8377;  80.00</span>
														<span class="done-task txt-muted">&#8377;  90.59</span>
														<style>
														    .rating-star{
														        visibility:hidden!important;
														        height:0px!important;
														        width:0px!important;
														    }
														    
														</style>
													
														
														<hr>
														<p>Lorem Ipsum is simply dummy text of the printing and
															typesetting industry. Lorem Ipsum has been the industry's
															standard dummy text ever since the 1500s, when an unknown
															printer
															took a galley of type and scrambled it to make a type
															specimen book. It has survived not only five centuries.
														</p>
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
						    	<div class="card shadow-none" style="display:none">
														    <div class="card-header">
														        <h5>Reviews & Rating</h5>
														    </div>
									 	                    <div class="card-body">
									 	                        <div class="row">
									 	                            <div class="col-md-2">
									 	                                 <div class="col-md-12 col-12">
                                                                                <img src="<?php echo base_url()?>assets1/images/avatar-4.jpg" style="height:50px; width:50px; border-radius:50%;">
                                                                                  <span style="font-size: 16px; font-weight: 500;">User</span>
                                                                         </div>
                                                                           
									 	                            </div>
									 	                            <div class="col-md-2">
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
									 	                            <div class="col-md-6">
									 	                                 <p class="m-b-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
									 	                                 <div style="float:right">
									 	                                     __<span>05:00pm</span>&nbsp;&nbsp;<span>30/05/2020</span>
									 	                                 </div>
									 	                            </div>
									 	                            <div class="col-md-2">
									 	                                <a href="<?php echo base_url()?>/Admin/update_review_rating">
									 	                                    <button class="btn waves-effect waves-light btn-primary btn-sm">
									 	                                     <i class="fa fa-pencil" aria-hidden="true"></i>
									 	                                    </button>
									 	                                </a>
									 	                                 <button class="btn waves-effect waves-light btn-danger btn-sm">
									 	                                     <i class="fa fa-trash" aria-hidden="true"></i>
									 	                                 </button>
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

   <script>
         $(document).ready(function() {
             $('[data-toggle="popover"]').popover({
                 html: true,
                 content: function() {
                     return $('#primary-popover-content').html();
                 }
             });
         });
      </script>
<?php
$this->load->view('admin/includes/footer');
?>
