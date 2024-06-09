<?php
@session_start();
	global $lumise;
// 	require_once('includes/main.php');
	if($lumise->is_app()) :
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title><?php echo $lumise->cfg->settings['title']; ?></title>
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport" />
		<script src="https://kit.fontawesome.com/3c4d0cb5a7.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" media="only screen and (min-width: 1024px)" href="<?php echo $lumise->apply_filters('editor/app.css', $lumise->cfg->assets_url.'assets/css/app.css?version='.LUMISE); ?>">
        <link rel="stylesheet"  href="<?php echo $lumise->apply_filters('editor/custom.css', $lumise->cfg->assets_url.'assets/css/custom.css?version='.LUMISE); ?>">
        <link rel="stylesheet" media="only screen and (max-width: 1024px)" href="<?php echo $lumise->apply_filters('editor/app_mobile.css', $lumise->cfg->assets_url.'assets/css/app_mobile.css?version='.LUMISE); ?>">
		<link rel="stylesheet" media="only screen and (max-width: 1024px)" href="<?php echo $lumise->apply_filters('editor/responsive.css', $lumise->cfg->assets_url.'assets/css/responsive.css?version='.LUMISE); ?>">
		<link rel="icon" type="image/png" href="<?= base_url()?>assets/images/shareimagefavicon.png">
   <style>
   @media (min-width: 1024px){
div#designer-main {
    top: 135px!important;
}
}
   .image_area_share{
       background:#ebeced!important;
   }
   </style>
<?php 
	if (is_file($lumise->cfg->upload_path.'user_data'.DS.'custom.css')) { 
?> <link rel="stylesheet" href="<?php echo $lumise->cfg->upload_url; ?>user_data/custom.css?version=<?php echo $lumise->cfg->settings['last_update']; ?>"><?php 
} 
$lumise->do_action('editor-header'); 
?>
<style>
.footer-area{
    display:none!important;
}
@media (min-width: 576px){
.modal-artenoheader {
    max-width: 400px!important;
    margin: 1.75rem auto;
}
}

body{
    background:#ebeced!important;
}
::-webkit-scrollbar {
  width: 5px!important;
}
</style>
<style>
@media only screen and (min-width: 768px) {
.loader
{
  height: 5px;
  max-width: 500px; 
  border: 0px solid #dbb258;
  border-radius: 20px;
  font-weight: 300;
  position: absolute; 
  left: 0; 
  right: 0;
  margin : auto; 
}
.load-content-area{
    margin-top:15%;
}
}
@media only screen and (max-width: 768px) {
.loader
{
  height: 5px;
  max-width: 500px; 
  border: 0px solid #dbb258;
  border-radius: 20px;
  font-weight: 300;
  position: absolute; 
  left: 20px; 
  right: 20px;
  margin : auto; 
}
.load-content-area{
    margin-top:50%;
}
}
    .preloader-wrap {
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0; 
  bottom: 0;
  background: rgba(0,0,0,1);
  z-index :999999999999999; 
}

.percentage {
  z-index: 100;
  border: 1px solid #ccc;
  text-align:center;
  color: #fff;
  line-height: 20px;
  font-size : 18px;
}

.percentage{
  height: 30px;
  max-width: 500px; 
  border:none!important;
  border-radius: 20px;
  font-weight: 300;
  color:#dbb258;
  margin : auto; 
}
.loader:after,
.percentage:after {
  content: "";
  display: block;
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
}

.trackbar {
  width: 100%;
  height: 100%;
  border-radius: 20px;
  color: #fff;
  text-align: center;
  line-height: 30px;
  overflow: hidden;
  position: relative;
  opacity: 0.99;
}

.loadbar {
  width: 0%;
  height: 100%;
  /*background: repeating-linear-gradient(*/
  /*45deg, */
  /*  #008737, */
  /*  #008737 10px, */
  /*  #69AF23 10px,*/
  /*  #69AF23 20px*/
  /*); */
  /* Stripes Background Gradient */
   background:#dbb258;
  box-shadow: 0px 0px 14px 1px #dbb258; 
  position: absolute;
  top: 0;
  left: 0;
  animation: flicker 5s infinite;
  overflow: hidden;
}

.glow {
  width: 0%;
  height: 0%;
  border-radius: 20px;
  box-shadow: 0px 0px 60px 10px #dbb258;
  position: absolute;
  bottom: -5px;
  animation: animation 5s infinite;
}

@keyframes animation {
  10% {
    opacity: 0.9;
  }
  30% {
    opacity: 0.86;
  }
  60% {
    opacity: 0.8;
  }
  80% {
    opacity: 0.75;
  }
}

</style>
<!--loader with percentage css-->
<style>
/*#overlay{*/
/*  position:relative;*/
/*  z-index:99999;*/
/*  top:0;*/
/*  left:0;*/
/*  bottom:0;*/
/*  right:0;*/
/*  background:rgba(0,0,0,0.9);*/
/*  transition: 1s 0.4s;*/
/*}*/
/*#progress{*/
/*  height:4px;*/
/*  background:#dbb258;*/
/*  position:absolute;*/
/*  width:0;*/
/*  top:50%;*/
/*}*/
/*#progstat{*/
/*  font-size:0.7em;*/
/*  letter-spacing: 3px;*/
/*  position:absolute;*/
/*  top:50%;*/
/*  margin-top:-40px;*/
/*  width:100%;*/
/*  text-align:center;*/
/*  color:#fff;*/
/*}*/
.loader-content{
    margin-top: 3%;
}
.loader-content h3{
    color:white;
}
.loader-image{
    height: auto;
    width: auto;
    margin: auto;  
    margin-bottom:20px;
}

</style>
</head>
<body>
     <div class="preloader-wrap" id="loader_print_data" style="display:none;">
        <div class="load-content-area">
            <center>
                <img src="<?= base_url()?>assets/images/mainloader.gif" class="loader-image">
            </center>
            <div class="percentage" id="precent"></div>
            <div class="loader">
                <div class="trackbar">
                  <div class="loadbar"></div>
                </div>
                <div class="glow"></div>
            </div>
            
        </div>
    </div>
<style>
#designer-left{
    display:none!important;
}
.hide{
    display:none!important;
}

</style>
	<div class="wrapper">
		<div id="designer" data-site="https://anshuwap.com" data-processing="true" data-msg="<?php echo $lumise->lang('initalizing'); ?>..">
		    <img src="https://www.arteno.in/theme/core/assets/images/2.gif" id="loader_publish" />
		    
    		
    	    <div id="designer-navigations" data-navigation="" style="">
    			     <?php $lumise->display('nav'); ?>
    		</div>
    	    <div id="designer-workspace">
    			    
        	    <div id="designer-main">
        			<div id="designer-no-product">
        				<?php
        					if (!isset($_GET['product'])) {
        						redirect(base_url('customize'));
        					}else if (isset($_GET['product']) && $lumise->cfg->product === null) {
        						echo '<p>'.$lumise->lang('Sorry, the product you selected is not available!').'</p>';
        					}
        				?>
        				<button class="designer-btn" id="designer-select-product">
        					<i class="fa fa-crosshairs"></i> <?php echo $lumise->lang('Select product'); ?>
        				</button>
        			</div>
        		</div>
        	<div id="designer-top-tools" data-navigation="" data-view="standard" style="display:none;">
        			<?php $lumise->display('tool'); ?>
        		</div>

				<?php $lumise->display('left'); ?>
				<div id="nav-bottom-left">
					<div data-nav="colors" id="designer-count-colors" title="<?php echo $lumise->lang('Count colors'); ?>">
						<i>0+</i>
					</div>
				</div>
				<div id="designer-zoom-wrp" style="display:none;">
					<i class="fa fa-minus" data-zoom="out"></i>
					<span><?php echo $lumise->lang('Scroll to zoom'); ?></span>
					<inp data-range="helper" data-value="100%">
						<input type="range" id="designer-zoom" data-value="100%" min="100" max="250" value="100" />
					</inp>
					<i class="fa fa-plus" data-zoom="in"></i>
				</div>
				<div id="designer-zoom-thumbn" style="display:none;">
					<span></span>
				</div>
				<div id="designer-stage-nav">
					<ul></ul>
				</div>
				<div id="designer-notices"></div>
			       <span class="product_information" data-toggle="modal" data-target="#info_model"><i class="fa fa-info-circle"></i></span>
				</div>
		</div>
	</div>
	
	<script>
		function designer(designer) {
			
			designer.data = {
				version: "<?php echo LUMISE; ?>",
				theme_color: "<?php echo explode('@', explode(':', $lumise->cfg->settings['colors'])[0])[0]; ?>",
				stages : {},
				currency : "<?php echo $lumise->cfg->settings['currency']; ?>",
				switch_lang : <?php echo $lumise->cfg->settings['allow_select_lang']; ?>,
				thousand_separator : "<?php echo isset($lumise->cfg->settings['thousand_separator'])? $lumise->cfg->settings['thousand_separator'] : ','; ?>",
				decimal_separator : "<?php echo isset($lumise->cfg->settings['decimal_separator'])? $lumise->cfg->settings['decimal_separator'] : '.'; ?>",
				number_decimals : "<?php echo isset($lumise->cfg->settings['number_decimals'])? $lumise->cfg->settings['number_decimals'] : 2; ?>",
				currency_position : "<?php echo $lumise->cfg->settings['currency_position']; ?>",
				min_upload: <?php echo isset($lumise->cfg->settings['min_upload'])? (int)$lumise->cfg->settings['min_upload'] : 0; ?>,
				max_upload: <?php echo isset($lumise->cfg->settings['max_upload'])? (int)$lumise->cfg->settings['max_upload'] : 0; ?>,
				min_dimensions: <?php echo isset($lumise->cfg->settings['min_dimensions']) ? json_encode(explode('x', $lumise->cfg->settings['min_dimensions'])) : ''; ?>,
				max_dimensions: <?php echo isset($lumise->cfg->settings['max_dimensions']) ? json_encode(explode('x', $lumise->cfg->settings['max_dimensions'])) : ''; ?>,
				min_ppi: '<?php echo isset($lumise->cfg->settings['min_ppi']) ? $lumise->cfg->settings['min_ppi'] : ''; ?>',
				max_ppi: '<?php echo isset($lumise->cfg->settings['max_ppi']) ? $lumise->cfg->settings['max_ppi'] : ''; ?>',
                printings : [],
				url : "<?php echo $lumise->cfg->url; ?>",
				tool_url : "<?php echo $lumise->cfg->tool_url; ?>",
				upload_url : "<?php echo $lumise->cfg->upload_url; ?>",
				checkout_url : "<?php echo $lumise->cfg->checkout_url; ?>",
				ajax : "<?php echo $lumise->cfg->ajax_url; ?>",
				assets : "<?php echo $lumise->cfg->assets_url; ?>",
				jquery : "<?php echo $lumise->cfg->load_jquery; ?>",
				nonce : "<?php echo lumise_secure::create_nonce('LUMISE-SECURITY'); ?>",
				access_core : "<?php echo is_array($lumise->cfg->access_core) ? implode(',', $lumise->cfg->access_core) : $lumise->cfg->access_core; ?>",
				editing: localStorage.getItem('LUMISE-EDITING'),
				design : "<?php echo $lumise->esc_get('design_print'); ?>",
				product : "<?php echo $lumise->esc_get('product'); ?>",
				default_fonts: <?php echo !empty($lumise->cfg->default_fonts) ? stripslashes($lumise->cfg->default_fonts) : '{}'; ?>,
				fonts: <?php echo json_encode($lumise->get_fonts()); ?>,
				js_lang : <?php echo json_encode($lumise->cfg->js_lang); ?>,
				rtl : '<?php echo $lumise->cfg->settings['rtl']; ?>',
				prefix_file : '<?php echo urlencode($lumise->cfg->settings['prefix_file']); ?>',
				text_direction : '<?php echo $lumise->cfg->settings['text_direction']; ?>',
				conditions : '<?php echo (isset($lumise->cfg->settings['conditions']) && !empty($lumise->cfg->settings['conditions'])) ? $lumise->lib->enjson($lumise->cfg->settings['conditions']) : ''; ?>',
				size_default : <?php echo json_encode($lumise->cfg->size_default); ?>,
				print_types : <?php 
					echo json_encode($lumise->lib->get_print_types());
					echo $lumise->lib->product_cfg();
				?>
			};
			
			try {
				designer.attributes_cfg = <?php echo json_encode($lumise->cfg->product_attributes); ?>;
			} catch (ex) {
				designer.attributes_cfg = {};
				alert("<?php echo $lumise->lang('Error: configure the attributes of product'); ?>\n\n"+ex.message);
			}
			
			var real_uri = window.location.href.split('?'),
				reg_uri = designer.data.tool_url.split('?');
			if (real_uri[0] != reg_uri[0]) {
				if (real_uri[1] !== undefined)
					window.location = reg_uri[0]+'?'+real_uri[1];
				else window.location = reg_uri[0];
				return false;
			} else {
				<?php $lumise->do_action('js_init'); ?>
				return true;
			}
			
		};
	</script>
	    <?php if ($lumise->cfg->load_jquery){ ?>
    	<!--<script src="<?php echo $lumise->apply_filters('editor/jquery.min.js', $lumise->cfg->assets_url.'assets/js/jquery.min.js?version='.LUMISE); ?>"></script>-->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<?php } ?>
	<script src="<?php echo $lumise->apply_filters('editor/vendors.js', $lumise->cfg->assets_url.'assets/js/vendors.js?version='.LUMISE); ?>"></script>
	<script src="<?php echo $lumise->apply_filters('editor/app.js', $lumise->cfg->assets_url.'assets/js/app.js?version='.LUMISE); ?>"></script>
	<?php 
		
		$lumise->do_action('editor-footer');
		
		if (!empty($lumise->cfg->settings['custom_js'])) {
			$custom_js = str_replace(
				array('<script', '</script>'),
				array('&lt;script', '&lt;/script&gt;'),
				$lumise->cfg->settings['custom_js']
			);
			echo '<script type="text/javascript">'.stripslashes($custom_js).'</script>';
		}
		
	?>
    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- Modal -->
                        <div class="modal fade" id="share_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="background:#fff;border-radius:20px;">
      <div class="modal-header" style="border-bottom:none!important;">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="border: 1px solid #eee;
    border-radius: 50%;
    padding: 5px 10px 5px 10px;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="share_data text-center">
            <h5>Nice Looking Design</h5>
            <div class="image_area_share">
                <span class="site_title">Arteno Creation</span><span class="site_url">www.arteno.in</span>
                <img src="<?=base_url('assets/img/share_img.jpg')?>" alt="..." class="img_share" id="share_img"/>
            </div>
        </div>
        <div class="row" style="margin-top:10px;">
             <div class="col-md-12 col-xs-12 col-12">
                 <ul class="social-icon-list">
                     <li class="social_icon bg-fb"><a href="https://www.facebook.com/sharer/sharer.php?u=arteno_product_share" target="_blank" class="text-white"><i class="fab fa-facebook-f"></i></a></li>
                     <li class="social_icon bg-tw"><a href="https://twitter.com/share?url=arteno_product_share" target="_blank" class="text-white"><i class="fab fa-twitter"></i></a></li>
                     <li class="social_icon bg-wp"><a href="https://api.whatsapp.com/send?text=arteno_product_share" target="_blank" class="text-white"><i class="fab fa-whatsapp"></i></a></li>
                     <li class="social_icon bg-tl"><a href="" target="_blank" class="text-white"><i class="fab fa-telegram-plane"></i></a></li>
                     <li class="social_icon bg-insta"><a href="" target="_blank" class="text-white"><i class="fab fa-instagram"></i></a></li>
                     <li class="social_icon bg-pint"><a href="" target="_blank" class="text-white"><i class="fab fa-pinterest"></i></a></li>
                     
                 </ul>
             </div>
            <div class="col-md-8 col-xs-8 col-8" style="padding-right: 0px;">
                <input type="text" value=""  class="form-control"  id="put_share_value" readonly/>
            </div>
            <div class="col-md-2 col-xs-2 col-2 text-center" style="padding:0px;font-size:18px;background:#111;" onclick="copy_in_clipboard()">
                <span style="color:#fff;"><i class="fa fa-clone" style="padding-top:12px;"></i></span>
            </div>
            <div class="col-md-2 col-xs-2 col-2"></div>
        </div>
      </div>
    </div>
  </div>
</div>
                        <div class="modal fade" id="info_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content" style="background:#fff;border-radius:20px;">
                              <div class="modal-header" style="border-bottom:none!important;">
                                  <h5>Product Description</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="border: 1px solid #eee;
                            border-radius: 50%;
                            padding: 5px 10px 5px 10px;">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body" id="product_details" style="max-height:400px;overflow-y:scroll;">
                                            
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal fade" id="attributes_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content" style="background:#fff;border-radius:20px;">
                              <div class="modal-header" style="border-bottom:none!important;">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="border: 1px solid #eee;
                            border-radius: 50%;
                            padding: 5px 10px 5px 10px;">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body" id="product_size_qty" style="min-height:150px;">
                                    <div id="designer-cart-wrp" data-view="attributes" class="smooth">
                        						<div class="designer-cart-options">
                        							<div class="designer-cart-attributes" id="designer-cart-attributes-qty"></div>
                        						</div>
                        					</div>        
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--mobile sidebar-->
                       <!-- enter mobile number Modal -->
        <div class="modal fade" id="loginotpmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-md custum-modal-height modal-artenoheader" role="document">
                            <div class="modal-content">
                              <!--<div class="modal-header">-->
                                <!--<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>-->
                                
                              <!--</div>-->
                              <div class="modal-body">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                      </button>
                                      <div class="p-3">
                                            <center>
                                                 <img src="<?= base_url()?>assets/logo/logo.png" style="height:60px;">
                                             </center>
                                             <center><p class="mt-3" style="font-size: 15px; line-height: 19px;"><b>Customize your T-shirt Cup Mask, connect with designers and browse designer prints!</b></p></center>
                                             <form  method="post" id="get_otp">
                                                 <div class="form-group mt-4 mb-4">
                                                    <label for="mobil">Enter Mobile</label>
                                                    <input type="number" name="mobile" class="form-control custum-input" id="mobile_number" value="" required>
                                                  </div>
                                                 
                                                  <center><p class="mt-3" style="font-size: 14px; line-height: 18px;">By logging in, you are agreeing to Arteno’s privacy policy and terms of use</p></center>
                                                   <br>
                                                  <button type="submit"  class="btn btn-primary btn-block" style="border-radius:0px; font-size: 16px;">Login</button>
                                                  
                                             </form>
                                      </div>
                                    
                              </div>
                              <!--<div class="modal-footer">-->
                              <!--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                              <!--  <button type="button" class="btn btn-primary">Save changes</button>-->
                              <!--</div>-->
                            </div>
                          </div>
                        </div>
        <!-- enter mobile number Modal -->
        <!-- otp verification Modal -->
        <div class="modal fade" id="otpverificationmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-md custum-modal-height modal-artenoheader" role="document" style="">
                            <div class="modal-content">
                              <div class="modal-body">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                      </button>
                                      <div class="p-3">
                                            <center>
                                                 <img src="<?= base_url()?>assets/logo/logo.png" style="height:60px;">
                                             </center>
                                             <center><p class="mt-3" style="font-size: 15px; line-height: 19px;"><b>Customize your T-shirt Cup Mask, connect with <br> designers and browse designer prints!</b></p></center>
                                             <form method="post" id="verify_otp">
                                                 <p class="text-center mt-2 mb-2">Enter OTP sent to <span id="sent_otp_number"></span></p>
                                                 <div class="form-group mt-4 mb-4">
                                                    <label for="mobil">Enter OTP</label>
                                                    <input type="hidden" id="mob_otp">
                                                    <input type="number" class="form-control" name="otp" id="otp_value" value="">
                                                  </div>
                                                   
                                                    <a style="text-align: center;margin-top: 12px;color: red;" onclick="resend_otp()">Resend OTP</a>
                                                  <center><p class="mt-3" style="">By logging in, you are agreeing to Arteno’s privacy policy and terms of use</p></center>
                                                   <br>
                                                  <button type="submit" name="submit"   class="btn btn-primary btn-block"  id="verify_otp_button" style="border-radius:0px; font-size: 16px;">Login</button>
                                             </form>
                                      </div>
                                    
                              </div>
                            </div>
                          </div>
                        </div>
        <!-- otp verification Modal -->
        <!-- register modal if user not register modal -->
        <div class="modal fade" id="registermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" style="overflow-y: scroll;">
                          <div class="modal-dialog modal-dialog-centered modal-md custum-modal-height modal-artenoheader" role="document" style="">
                            <div class="modal-content" role="document">
                              <div class="modal-body">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                      </button>
                                      <div class="p-3">
                                            <center>
                                                 <img src="<?= base_url()?>assets/logo/logo.png" style="height:60px;">
                                             </center>
                                             <center><p class="mt-3" style="font-size: 15px; line-height: 19px;"><b>Customize your T-shirt Cup Mask, connect with designers and browse designer prints!</b></p></center>
                                             <form action="<?=base_url('home/user_register')?>" method="post">
                                                 <div class="mt-4 mb-4">
                                                      <div class="form-group">
                                                        <label for="name">Enter Name</label>
                                                        <input type="text" class="form-control custum-input" name="name" id="name" value="" required>
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="email">Enter Email</label>
                                                        <input type="email" class="form-control custum-input" name="email" id="email" value="" required>
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="mobile">Enter Mobile</label>
                                                        <input type="number" class="form-control custum-input" name="mobile" id="mobile" value="" required>
                                                      </div>
                                                      
                                                 </div>
                                                 <center><p class="mt-3" style="font-size: 14px; line-height: 18px;">By logging in, you are agreeing to Arteno’s privacy policy and terms of use</p></center>
                                                   <br>
                                                  <button type="submit"  name="register" value="1" class="btn btn-primary btn-block" style="border-radius:0px; font-size: 16px;">Submit</button></a>
                                             </form>
                                      </div>
                                    
                              </div>
                            </div>
                          </div>
                        </div>
        <!-- register modal if user not register modal-->
<script>

    function view_more_text(){
        $("#view_more_text").hide();
        $("#view_less_text").show();
    	$( ".text_editing" ).removeClass( 'hide');
    }
    function view_less_text(){
        $("#view_more_text").show();
        $("#view_less_text").hide();
    	$( ".text_editing" ).addClass( 'hide');
    }
    function view_more_effects(){
        $("#view_more_effects").hide();
        $("#view_less_effects").show();
    	$( ".arteno_text_effects" ).removeClass( 'hide');
    }
    function view_less_effects(){
        $("#view_more_effects").show();
        $("#view_less_effects").hide();
    	$( ".arteno_text_effects" ).addClass( 'hide');
    }

    //text_editing
    $('#info_model').modal({
        backdrop: 'static',
        keyboard: false,
        show:false
    })
    $('#attributes_model').modal({
        backdrop: 'static',
        keyboard: false,
        show:false
    })
    $('#loginotpmodal').modal({
        backdrop: 'static',
        keyboard: false,
        show:false
    })
    $('#otpverificationmodal').modal({
        backdrop: 'static',
        keyboard: false,
        show:false
    })
    $('#registermodal').modal({
        backdrop: 'static',
        keyboard: false,
        show:false
    })
    $("#get_otp").submit(function(e){
    e.preventDefault();
    var mobno= $("#mobile_number").val();
    if(mobno.length!=10){
        alert('please fill valid Mobile no.');
      return false;
    }
    $('#loginotpmodal').modal('hide');
    $('#otpverificationmodal').modal({show:true});
    $('#sent_otp_number').html(mobno);
        $.ajax({
        url:"<?= base_url()?>home/login_with_otp",
        method:"POST",
        data:{'mobile':mobno},
        success:function(res){
           if(res==0){
             alert('Something Went Wrong Try again later');
           }
           else{
            $('#mob_otp').val(res.trim());
           }
        }
        });
  });
    $("#verify_otp").submit(function(e){
    e.preventDefault();
    $('#verify_otp_button').attr("disabled", "disabled");
    $("#verify_otp_button").css("background-color", "grey");
    var mobileno= $("#mob_otp").val();
    var otp_value= $("#otp_value").val();
        $.ajax({
        url:"<?= base_url()?>home/verify_otp",
       method:"POST",
        data:{'mobile':mobileno,'otp':otp_value},
        success:function(res){
           if(res.trim()=="success"){
             alert('login Successfully');
             $('#otpverificationmodal').modal('hide');
             location.reload();
           }
           else if(res.trim()=="register"){
               $('#registermodal').modal({show:true});
                $('#mobile').val(mobileno);
           }
           else{
           alert('OTP Not Matched');
           }
        }
        });
  });
    function resend_otp(){
    var mobno= $("#mob_otp").val();
    $('#sent_otp_number').html(mobno);
    document.getElementById('verify_otp_button').disabled = false;
    $("#verify_otp_button").css("background-color", "#111");
        $.ajax({
        url:"<?= base_url()?>home/resend_otp",
        method:"POST",
        data:{'mobile':mobno},
        success:function(res){
           if(res==0){
             alert('Something Went Wrong Try again later');
           }
           else{
            $('#mob_otp').val(res.trim());
           }
        }
        });
    }
    function leftSlider(){
        var elmt = document.getElementById('designer-list-items');
        elmt.scrollLeft -= 200;
    }
    function rightSlider(){
        var elmt = document.getElementById('designer-list-items');
        elmt.scrollLeft += 200;
        
    }
    function leftSlide_upload(){
        var elmt = document.getElementById('upload_list_items');
        elmt.scrollLeft -= 200;
    }
    function rightSlide_upload(){
        var elmt = document.getElementById('upload_list_items');
        elmt.scrollLeft += 200;
    }
    function leftSlide_fonts(){
        var elmt = document.getElementById('designer-text-ext');
        elmt.scrollLeft -= 200;
    }
    function rightSlide_fonts(){
        var elmt = document.getElementById('designer-text-ext');
        elmt.scrollLeft += 200;
    }
    
    (function ($){
  $.fn.counter = function() {
    const $this = $(this),
    numberFrom = parseInt($this.attr('data-from')),
    numberTo = parseInt($this.attr('data-to')),
    delta = numberTo - numberFrom,
    deltaPositive = delta > 0 ? 1 : 0,
    time = parseInt($this.attr('data-time')),
    changeTime = 10;
    
    let currentNumber = numberFrom,
    value = delta*changeTime/time;
    var interval1;
    const changeNumber = () => {
      currentNumber += value;
      $(".counter_price").css("font-size", "18px");
      $(".product-currency").css("font-size", "18px");
      //checks if currentNumber reached numberTo
      (deltaPositive && currentNumber >= numberTo) || (!deltaPositive &&currentNumber<= numberTo) ? currentNumber=numberTo : currentNumber;
      this.text(parseInt(currentNumber));
      currentNumber == numberTo ? clearInterval(interval1) : currentNumber;  
      if(currentNumber == numberTo) {
        $(".counter_price").css("font-size", "16px");
        $(".product-currency").css("font-size", "16px");
        $this.attr('data-from', numberTo);
      }
    
    }
    interval1 = setInterval(changeNumber,changeTime);
  }
}(jQuery));

$(document).ready(function(){
    $('.counter_price').counter();
});
function copy_in_clipboard() {
  var copyText = document.getElementById("put_share_value");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
 function remove_wishlist(wishid,base_id){
    var r = confirm("Are you sure you want to remove from wishlist?");
        if (r == true) {
            var p_id=base_id;
            $.ajax({
        url:"<?= base_url()?>editor/remove_wishlist",
        method:"POST",
        data:{'wishid':wishid},
        success:function(res){
           if(res.trim()=="success"){
             window.location.href ='<?= base_url("customizer")?>?product='+p_id;
           }
           else{
            alert('something went wrong');
           }
        }
        });
        } 
     
 }
</script>

</body>
</html>
<?php endif;
