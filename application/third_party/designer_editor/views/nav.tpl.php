<style>
@media only screen and (max-width: 600px) {
    #backtohome{
        display:block!important;
    }
}
/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {
    #backtohome{
        display:none!important;
    }
}

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
    #backtohome{
        display:none!important;
    }
}
    .logo{
     object-fit: cover;
    transform: scale(1.3);
    }
    #backtohome{
        display:none;
    }
    ul.designer-product-color li:nth-child(1){
        display:none!important;
    }
</style>

<?php
    $base_url='https://arteno5.anshuwap.com/';
    global $lumise;
    $this_main = $lumise;
    

    $deigner_id = $_SESSION['designer_id'];
    $admin_id = $_SESSION['admin_id'];
    
	$cfg = $this_main->cfg;
	$logo = $cfg->settings['logo'];
	
	if (empty($logo))
		$logo ='';
		
	$components = $cfg->settings['components'];
	
	if (is_string($cfg->settings['components']))
		$components = explode(',', $cfg->settings['components']);
	
	if (
		isset($cfg->settings['back_link']) && 
		!empty($cfg->settings['back_link'])
	)
		$back_link = $cfg->settings['back_link'];
	else 
		$back_link = $cfg->settings['logo_link'];
		
	$logo = $this_main->apply_filters('logo-nav', '<a data-view="logo" href="'.$cfg->settings['logo_link'].'"><img class="logo" title="Back to website" src="'.$logo.'" /></a>');
	
	echo $logo;
	

?>
<!-- Avalable filters: logo-nav -->
<ul data-block="left" data-resp="file">

	<!-- Avalable hook: nav-left-before -->
	<?php 
		$this_main->do_action('nav-left-before');
		ob_start();
	?>

	<li data-tool="file" data-view="list" style="display:none;">
		<span><?php echo $this_main->lang('File'); ?></span>
		<ul data-view="sub" id="designer-file-nav">
			<li data-func="import">
				<span><?php echo $this_main->lang('Import file'); ?></span><small>(Ctrl+O)</small>
				<input type="file" id="designer-import-json" />
			</li>
			<li data-func="clear">
				<span><?php echo $this_main->lang('Clear all'); ?></span><small>(Ctrl+E)</small>
			</li>
			<li data-view="sp"></li>
			<li data-func="save">
				<span><?php echo $this_main->lang('Save to My Designs'); ?></span><small>(Ctrl+S)</small>
			</li>
			<?php 
				if ($this_main->connector->is_admin() || 
					$this_main->cfg->settings['user_download'] == '1'
				) {
			?>
				<li data-func="saveas">
					<span><?php echo $this_main->lang('Save as file'); ?></span><small>(Ctrl+Shift+S)</small>
				</li>
			<?php } ?>
		</ul>
	</li>
	<?php 
		$file_nav = ob_get_contents();
		ob_end_clean();
		echo $this_main->apply_filters('file-nav', $file_nav);
	?>
	<!-- Avalable filters: file-nav -->
	<?php ob_start(); ?>
	<li data-tool="designs" data-callback="designs" style="display:none;">
		<span><?php echo $this_main->lang('Designs'); ?></span>
		<ul data-view="sub">
			<header>
				<h3>
					<?php echo $this_main->lang('My designs'); ?>
					<span id="designer-designs-search">
						<input type="search" placeholder="<?php echo $this_main->lang('Search designs'); ?>" />
					</span>
				</h3>
				<i class="fa fa-times close" title="<?php echo $this_main->lang('Close'); ?>"></i>
			</header>
			<li>
				<ul id="designer-designs-category">
					<li data-active="true">
						<text><i class="fa fa-arrow-right"></i> <?php echo $this_main->lang('All Categories'); ?></text>
					</li>
					<li>
						<text><i class="fa fa-arrow-right"></i> Category #1</text>
						<func>
							<i class="fa fa-pencil" title="<?php echo $this_main->lang('Edit Category'); ?>"></i>
							<i class="fa fa-trash" title="<?php echo $this_main->lang('Delete Category'); ?>"></i>
						</func>
					</li>
					<li data-func="add"><i class="fa fa-plus"></i> <?php echo $this_main->lang('New Category'); ?></li>
				</ul>
				<ul id="designer-saved-designs">
					<p class="empty"><?php 
						echo $this_main->lang('You have not saved any designs yet!'); 
						echo '<br>';
						echo $this_main->lang('After designing, press Ctrl+S to save your designs in here.'); ?>
					</p>
				</ul>
			</li>
		</ul>
	</li>
	<!-- Avalable filters: design-nav -->
	<?php 
		
	$design_nav = ob_get_contents();
	ob_end_clean();
	
	echo $this_main->apply_filters('design-nav', $design_nav);?>
	

	<?php if ($this_main->connector->is_admin() || $this_main->cfg->settings['share'] == '1') { ?>
	<?php ob_start(); ?>
	<?php 
	$share_design=1;
	if($share_design==1){
	?>
	<li data-tool="share" style="display:none;">
		<span>
			<?php echo $this_main->lang('Share'); ?>
		</span>
		<ul data-view="sub" class="designer-tabs-nav" data-align="center" id="designer-shares-wrp" data-nav="link">
			<header>
				<h3>
					<span data-tna="link"><?php echo $this_main->lang('Share Your Design'); ?></span>
					<span data-tna="history">
						<a href="#" data-func="nav" data-nav="link">
							<i class="fa fa-arrow-left" data-func="nav" data-nav="link"></i> 
							<?php echo $this_main->lang('Share'); ?>
						</a>
					</span>
				</h3>
				<i class="fa fa-times close" title="Close"></i>
			</header>
			<li data-view="link" data-active="true">
				<p data-phase="1" class="mb1">
					<?php echo $this_main->lang('Create the link to share your current design for everyone'); ?>
				</p>
				<p data-view="link" class="mb1" data-phase="1">
					<input type="text" placeholder="<?php echo $this_main->lang('Enter the title of design'); ?>" id="designer-share-link-title" />
				</p>
				<p data-phase="1">
					<button class="designer-btn right" data-func="create-link">
						<?php echo $this_main->lang('Create link'); ?>
					</button>
					<button class="designer-btn right white mr1"  data-nav="history" data-func="nav">
						<?php echo $this_main->lang('View history'); ?>
					</button>
				</p>
				<p class="notice success" data-phase="2">
					<?php echo $this_main->lang('Your link has been created successfully'); ?>
				</p>
				<p data-view="link-share" data-phase="2" data-func="copy" data-msg="<?php 
					echo $this_main->lang('The link was copied'); 
				?>" title="<?php 
					echo $this_main->lang('Click to copy the link'); 
				?>"></p>
				<p class="mt1 mb1 right" data-phase="2">
					<b><?php echo $this_main->lang('Share to'); ?>:</b>
					<button data-network="facebook">
						<i class="fa fa-facebook"></i> Facebook
					</button>
					<button data-network="pinterest">
						<i class="fa fa-pinterest"></i> Pinterest
					</button>
					<button data-network="twitter">
						<i class="fa fa-twitter"></i> Twitter
					</button>
				</p>
				<p class="mt1" data-phase="2">
					<button class="designer-btn right gray" data-func="do-again">
						<?php echo $this_main->lang('Create another'); ?>
					</button>
					<button class="designer-btn right white mr1"  data-nav="history" data-func="nav"><?php echo $this_main->lang('View history'); ?></button>
				</p>
			</li>
			<li data-view="history"></li>
		</ul>
	</li>
	<?php }?>
	<?php 
		$share_nav = ob_get_contents();
		ob_end_clean();
		echo $this_main->apply_filters('share-nav', $share_nav);
	?>
	<!-- Avalable filters: share-nav -->
	<?php } ?>
	<?php ob_start(); ?>

	<!--<li data-tool="help">-->
	<!--	<span>-->
	<!--		<?php echo $this_main->lang('Measurement'); ?>-->
	<!--	</span>-->
	<!--	<ul data-view="sub" class="lumise-tabs-nav">-->
	<!--		<li data-view="header">-->
	<!--			<h3 data-view="title">Measurement Instruction</h3>-->
	<!--			<i class="lumisex-android-close close" title="<?php echo $this_main->lang('Close'); ?>"></i>-->
	<!--			<div class="content"  data-active="true">-->
	<!--			    <table border="1" style="border-collapse:collapse; width:100%;background:white">-->
	<!--			        <tr>-->
	<!--			            <th>#</th>-->
	<!--			            <th>Size</th>-->
	<!--			            <th>Printing Area/ Inch</th>-->
	<!--			        </tr>-->
	<!--			        <tr>-->
	<!--			            <td>1</td>-->
	<!--			            <td>SM Small size (26)</td>-->
	<!--			            <td>10.5 x 12</td>-->
	<!--			        </tr>-->
	<!--			        <tr>-->
	<!--			            <td>2</td>-->
	<!--			            <td>M Medium size (27)</td>-->
	<!--			            <td>11 x 12</td>-->
	<!--			        </tr>-->
	<!--			        <tr>-->
	<!--			            <td>3</td>-->
	<!--			            <td>L Large size (28)</td>-->
	<!--			            <td>11 x 13</td>-->
	<!--			        </tr>-->
	<!--			        <tr>-->
	<!--			            <td>4</td>-->
	<!--			            <td>XL Extra large size (29)</td>-->
	<!--			            <td>11.5 x 13.5</td>-->
	<!--			        </tr>-->
	<!--			        <tr>-->
	<!--			            <td>5</td>-->
	<!--			            <td>2 XL Double extra large size (30)</td>-->
	<!--			            <td>11.5 x 14</td>-->
	<!--			        </tr>-->
	<!--			    </table><br>-->
	<!--			</div>-->
				
	<!--		</li>-->
	<!--		<?php echo $tab_body; ?>-->
	<!--	</ul>-->
	<!--</li>-->
	<li data-tool="help" style="display:none;">
		<span>
			<?php echo $this_main->lang('Help'); ?>
		</span>
		<ul data-view="sub" class="designer-tabs-nav">
			<li data-view="header">
				<h3 data-view="title"><?php echo $this_main->cfg->settings['help_title']; ?></h3>
				<i class="fa fa-times close" title="<?php echo $this_main->lang('Close'); ?>"></i>
				<nav>
					<?php

						$tabs = @json_decode($this_main->cfg->settings['helps']);

						$tab_body = '';
						if ($tabs === null || !is_array($tabs) || count($tabs) === 0) {
							$tabs = array();
						}
						
						$about = new stdClass();
				// 		$about->title = $this_main->lang('Measurement');
				// 		$about->content = '<div data-sub="about" style="display:block">'.
				// 							stripslashes($this_main->cfg->settings['about']).
				// 						  '</div>';
						
						array_push($tabs, $about);
						
						$tab_index = 1;
										
						foreach ($tabs as $tab) {

							if (
								isset($tab->title) &&
								isset($tab->content) &&
								!empty($tab->content)
							) {
								
								if (empty($tab->title))
									$tab->title = 'Untitled';
									
								echo '<span'.(empty($tab_body) ? ' data-active="true"' : '' ).
									 ' data-nav="tab-'.$tab_index.'" data-func="nav">'.
									 $this_main->lang($tab->title).'</span>';

								$tab_body .= '<li class="smooth" data-view="tab-'.$tab_index.
											 '" '.(empty($tab_body) ? ' data-active="true"' : '' ).'>'.
											 $this_main->lang(stripslashes($tab->content)).
											 '</li>';
								$tab_index++;
							}
						}
					?>
				</nav>
			</li>
			<?php echo $tab_body; ?>
		</ul>
	</li>
	
	<?php 
		$help_nav = ob_get_contents();
		ob_end_clean();
		echo $this_main->apply_filters('help-nav', $help_nav);
		$this_main->do_action('nav-left-after');
	?>
	<!-- Avalable filters: help-nav -->
	<!-- Avalable hook: nav-left-after -->
	<?php
	if (in_array('back', $components)){
		?>
	<li class="back_mobile">
		<a href="<?php echo $back_link;?>">Home</a>
	</li>
	<?php } ?>
	<li data-view="sp"></li>
</ul>
<svg id="designer-nav-file" class="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve" fill="#eee"><g xmlns="http://www.w3.org/2000/svg" id="__m">
<path d="M491.318,235.318H20.682C9.26,235.318,0,244.577,0,256s9.26,20.682,20.682,20.682h470.636    c11.423,0,20.682-9.259,20.682-20.682C512,244.578,502.741,235.318,491.318,235.318z"/><path d="M491.318,78.439H20.682C9.26,78.439,0,87.699,0,99.121c0,11.422,9.26,20.682,20.682,20.682h470.636    c11.423,0,20.682-9.26,20.682-20.682C512,87.699,502.741,78.439,491.318,78.439z"/><path d="M491.318,392.197H20.682C9.26,392.197,0,401.456,0,412.879s9.26,20.682,20.682,20.682h470.636    c11.423,0,20.682-9.259,20.682-20.682S502.741,392.197,491.318,392.197z"/>
</g><g xmlns="http://www.w3.org/2000/svg" style="display:none;transform:scale(.85) translateY(3px);" id="__x"><path xmlns="http://www.w3.org/2000/svg" d="M505.943,6.058c-8.077-8.077-21.172-8.077-29.249,0L6.058,476.693c-8.077,8.077-8.077,21.172,0,29.249    C10.096,509.982,15.39,512,20.683,512c5.293,0,10.586-2.019,14.625-6.059L505.943,35.306    C514.019,27.23,514.019,14.135,505.943,6.058z"/><path d="M505.942,476.694L35.306,6.059c-8.076-8.077-21.172-8.077-29.248,0c-8.077,8.076-8.077,21.171,0,29.248l470.636,470.636    c4.038,4.039,9.332,6.058,14.625,6.058c5.293,0,10.587-2.019,14.624-6.057C514.018,497.866,514.018,484.771,505.942,476.694z"/></g></svg>
<ul data-block="left" data-resp="undo-redo" style="display:none;">
	<li  title="Back to Home" class="homeback" id="backtohome">&emsp;<a href="https://arteno.in"><img src="https://arteno.in/assets/logo.png" style="height:30px;width:30px;border-radius:5px;margin-top:-5px"></a> &emsp;</li>
	<li id="designer-design-undo" title="Ctrl+Z" class="disabled"><?php echo $this_main->lang('Undo'); ?></li>
	<li id="designer-design-redo" title="Ctrl+Shift+Z" class="disabled"><?php echo $this_main->lang('Redo'); ?></li>
</ul>

<ul data-block="right">
    <?php 	$alwd = '';
	
	if (
		!$this_main->connector->is_admin() && 
		$this_main->cfg->settings['user_print'] != '1' &&
		isset($_GET['design_print']) && 
		is_file($this_main->cfg->upload_path.'designs'.DS.$_GET['design_print'].'.lumi')
	) {
		$this_main->cfg->settings['user_print'] = '1';
		$alwd = ' data-alwd="'.urlencode($_GET['design_print']).'"';
	}
// 		&& $this_main->cfg->settings['user_print'] != '1'
	if (!isset($admin_id))
		$alwd = ' style="display:none;"';

	ob_start(); 
	 
	?><li data-tool="print"<?=$alwd;?>>
	<button   class="designer-btn-primary" style="margin-top: 10px;margin-right: 20px;background:#111;border-color:#111;"><?php echo $this_main->lang('Print'); ?></button>
		<ul data-view="sub" id="designer-print-nav" data-align="center">
			<header>
				<h3>
					<?php echo $this_main->lang('Print design'); ?>
				</h3>
				<i class="fa fa-times close" title="<?php echo $this_main->lang('Close'); ?>"></i>
			</header>
			<li data-row="format" style="display:none!important">
				<label><?php echo $this_main->lang('Select format'); ?>:</label>
				<span>
					<div class="designer_radios">
						<div class="designer-radio">
							<input type="radio" data-dp="format" class="doPrint" data-format="png" name="print-format" checked id="print-format-png">
							<label class="designer-cart-option-label" for="print-format-png">
								PNG <em class="check"></em>
							</label>
						</div>
						<div class="designer-radio">
							<input type="radio" data-dp="format" class="doPrint" data-format="svg" name="print-format" id="print-format-svg">
							<label class="designer-cart-option-label" for="print-format-svg">
								SVG <em class="check"></em>
							</label>
						</div>
						<div class="designer-radio">
							<input type="radio" data-dp="format" class="doPrint" data-format="pdf" name="print-format" id="print-format-pdf">
							<label class="designer-cart-option-label" for="print-format-pdf">
								PDF <em class="check"></em>
							</label>
						</div>
					</div>
				</span>
			</li>
			<li data-row="size" style="display:none!important">
				<label><?php echo $this_main->lang('Paper Size'); ?>:</label>
				<!-- Avalable filters: print-sizes -->
				<select name="select-size" class="doPrint" data-dp="size">
					<?php
						
						$size = '21 x 29.7';
						
						foreach ($this_main->cfg->size_default as $s => $v) {
							echo '<option value="'.$v['cm'].'"'.(
								$size == $v['cm'] || strtolower($v['cm']) == $size ? ' selected' : ''
								).'>'.$s.'</option>';
						}
						
					?>
				</select>
			</li>
			<li data-row="csize" style="display:none!important" >
				<label><?php echo $this_main->lang('Custom size'); ?>:</label>
				<input type="text" class="doPrint" data-dp="csize" name="size" value="21 x 29.7" />
			</li>
			<li data-row="unit" style="display:none!important">
				<input type="radio" data-dp="unit" class="doPrint" name="print-unit" id="print-unit-cm" checked data-unit="cm" />
				<label for="print-unit-cm">Centimet</label>
				<input type="radio" data-dp="unit" class="doPrint" name="print-unit" id="print-unit-inch" data-unit="inch" />
				<label for="print-unit-inch"> Inch</label>
				<input type="radio" data-dp="unit" class="doPrint" name="print-unit" id="print-unit-px" data-unit="px" />
				<label for="print-unit-px"> Pixel</label>
			</li>
			<li data-row="orien" style="display:none!important">
				<label><?php echo $this_main->lang('Orientation'); ?>:</label>
				<select name="orientation" class="doPrint" data-dp="orien">
					<option value="portrait"><?php 
						echo $this_main->lang('Portrait');
					?></option>
					<option value="landscape"><?php 
						echo $this_main->lang('Landscape'); 
					?></option>
				</select>
			</li>
			<li data-row="base">
				<label><?php echo $this_main->lang('Include base?'); ?></label>
				<div class="designer-switch">
					<input data-dp="base" id="designer-print-base" type="checkbox" value="" class="designer-toggle-button doPrint">
					<span class="designer-toggle-label" data-on="YES" data-off="NO"></span>
					<span class="designer-toggle-handle"></span>
				</div>
			</li>
			<li data-row="overflow">
				<label><?php echo $this_main->lang('Hide overflow?'); ?></label>
				<div class="designer-switch">
					<input data-dp="overflow" id="designer-print-overflow" type="checkbox" value="" class="designer-toggle-button doPrint">
					<span class="designer-toggle-label" data-on="YES" data-off="NO"></span>
					<span class="designer-toggle-handle"></span>
				</div>
			</li>
			<li data-row="cropmarks" style="display: none;">
				<label><?php echo $this_main->lang('Crop marks & bleed?'); ?></label>
				<div class="designer-switch">
					<input data-dp="cropmarks" id="designer-print-cropmarks" type="checkbox" value="" class="designer-toggle-button doPrint">
					<span class="designer-toggle-label" data-on="YES" data-off="NO"></span>
					<span class="designer-toggle-handle"></span>
				</div>
			</li>
			<li data-row="full" style="display: none;">
				<label><?php echo $this_main->lang('Export all pages?'); ?></label>
				<div class="designer-switch">
					<input data-dp="all_pages" id="designer-print-full" type="checkbox" value="" class="designer-toggle-button doPrint">
					<span class="designer-toggle-label" data-on="YES" data-off="NO"></span>
					<span class="designer-toggle-handle"></span>
				</div>
			</li>
			<li>
				<!--<button class="designer-btn doPrint" data-dp="print" data-func="print">-->
				<!--	<?php //echo $this_main->lang('Print Now'); ?> -->
				<!--	<i class="lumisex-printer"></i>-->
				<!--</button>-->
				<button class="designer-btn gray doPrint" data-dp="download" data-func="download">
					<?php echo $this_main->lang('Download'); ?> 
					<i class="fa fa-download"></i>
				</button>
			</li>
		</ul>
	</li>
	<?php 
	 
		$print_nav = ob_get_contents();
		ob_end_clean();
	
		echo $this_main->apply_filters('print-nav', $print_nav);
	 
	?>
	<!-- Avalable filters: print-nav -->
    <li style="margin-top: 10px;">
	   <a href="<?=base_url('admin/orders')?>"> 
	   <button   class="designer-btn-primary">
		 <span>Back To Orders</span> 
			<i class="fa fa-arrow-right"></i>
	    </button></a>
	</li>
	<!-- To add your code here, use the hook $lumise->add_action('before_language', function(){}) -->
	<!-- Avalable hook: before_language -->
	<?php
	
	$this_main->do_action('before_language');
		
	$active_lang = $this_main->cfg->active_language;
	
	$get_langs = $this_main->get_langs();
	
	/* Start language component */	
	if (count($get_langs) > 0 && $this_main->cfg->settings['allow_select_lang'] == '1') {

		$langs = $this_main->langs();
		array_unshift($get_langs, 'en');

	?>
	<?php ob_start(); ?>
	<li data-tool="languages" data-view="list" style="display:none;">
		<span>
			<img src="<?php echo $this_main->cfg->assets_url; ?>assets/flags/<?php echo $active_lang; ?>.png" height="20" />
			<!--text><?php echo $this_main->lang('Languages'); ?></text-->
		</span>
		<ul id="designer-languages" data-view="sub" data-align="right">
			<header>
				<h3><?php echo $this_main->lang('Languages'); ?></h3>
			</header>
			<?php foreach ($get_langs as $code) { ?>
				<?php if (
						(
							!empty($code) &&
							is_array($this_main->cfg->settings['activate_langs']) &&
							in_array($code, $this_main->cfg->settings['activate_langs'])
						) ||
						$code == 'en'
					) { ?>
				<li data-id="<?php echo $code; ?>">
					<span><img src="<?php echo $this_main->cfg->assets_url; ?>assets/flags/<?php echo $code; ?>.png" height="20" />
					<?php echo $langs[$code]; ?></span>
					<?php if ($code == $active_lang) {
						echo '<i class="fa fa-check-circle"></i>';
					}?>
				</li>
				<?php } ?>
			<?php } ?>
		</ul>
	</li>
	<?php 
		$lang_nav = ob_get_contents();
		ob_end_clean();
		echo $this_main->apply_filters('lang-nav', $lang_nav);
	?>
	<!-- Avalable filters: lang-nav -->
	<!-- Avalable hook: after_language -->
	<?php 
		
		$this_main->do_action('after_language');
		
		if (in_array('shop', $components))
			echo '<li data-view="sp"></li>';
	
	} 
	/* End language component */
	$this_main->do_action('before_cart');
	/* Start shop component */	
	if (in_array('shop', $components)) {
	
	?>
	<!-- Avalable hook: before_cart -->
	<?php
	    ob_start();
	    if(!isset($deigner_id)) {
	 ?>
	<li style="display:none;">
		<span class="designer-price designer-product-price">0.0 &emsp;</span>
	</li>
	<li data-tool="cart" id="designer-cart-options" style="display:none;">
		<button id="designer-addToCart" title="<?php echo $this_main->lang('My cart'); ?>" style="display:none;">
		    <i class="fa fa-shopping-bag" style="font-size:20px;"></i>
			
		</button>
		<div data-view="sub" data-align="right" id="designer-cart-items">
			<header>
				<h3><?php echo $this_main->lang('My Cart'); ?></h3>
				<i class="fa fa-times close" title="close"></i>
			</header>
			<ul data-view="items"></ul>
			<footer>
				<a href="#details" data-func="details" data-view="cart-details">
					<?php echo $this_main->lang('Cart details'); ?> <i class="fa fa-external-link"></i>
				</a>
				<a href="#checkout" data-func="checkout" class="designer-btn-primary">
					<?php echo $this_main->lang('Checkout'); ?>
					<i class="fa fa-arrow-right"></i>
				</a>
			</footer>
		</div>
	</li>
	<?php }?>
	<?php 
		$cart_nav = ob_get_contents();
		ob_end_clean();
		echo $this_main->apply_filters('cart-nav', $cart_nav);
	?>
	<!-- Avalable filters: cart-nav -->
	<?php ob_start(); ?>
	
	<?php
		
		$components = $cfg->settings['components'];
		
		if (is_string($cfg->settings['components']))
			$components = explode(',', $cfg->settings['components']);
			
		if (in_array('product', $components)) {
		    if(isset($deigner_id)) {
	?>
	<style>
	    [data-id="quantity"] {
            display:none!important;
        }
        
	</style>
	
	<li id="designer-proceed" style="margin-top: 10px;" style="display:none;">
	    <button id="designer-publish-action"  class="designer-btn-primary" data-add="<?php echo $this_main->lang('Publish Templete'); ?>" data-update="<?php echo $this_main->lang('Update Template'); ?>" data-action="update-template">
		
			<span>Publish Template</span> 
			<i class="fa fa-arrow-right"></i>
	    </button>
	</li>
	<input type="hidden"  value="" id="product_base">
	
	    <?php } else{ ?>
	    
	<!--<li id="designer-proceed">-->
	<!--	<button id="designer-cart-action" class="designer-btn-primary" data-add="<?php echo $this_main->lang('Add to cart'); ?>" data-update="<?php echo $this_main->lang('Update cart'); ?>" data-action="update-cart">-->
	<!--		<span><?php echo $this_main->lang('Add to cart'); ?></span> -->
	<!--	<i class="fa fa-shopping-cart"></i>-->
	<!--	</button>-->
	<!--</li>-->
	<?php		
		} } else {
			
	?>
	<li data-tool="proceed" data-callback="proceed" id="designer-proceed" style="display:none;">
		<span>
			<button id="designer-continue-btn">
				<?php echo $this_main->lang('Proceed'); ?> 
				<i class="fa fa-arrow-right"></i>
			</button>
		</span>
		<div data-view="sub" data-align="right" id="designer-product-attributes">
			<header>
				<h3><?php echo $this_main->lang('Proceed to the next step'); ?></h3>
				<i class="fa fa-times close" title="close"></i>
			</header>
			<div id="designer-cart-wrp" data-view="attributes" class="smooth">
				<div class="designer-cart-options">
					<div class="designer-prints"></div>
					<div class="designer-cart-attributes" id="designer-cart-attributes"></div>
				</div>
			</div>
			<footer>
				<strong class="designer-product-price-wrp">
					<?php echo $this_main->lang('Total:'); ?> <span class="designer-product-price"></span>
				</strong>
				<button id="designer-cart-action" class="designer-btn-primary" data-add="<?php echo $this_main->lang('Add to cart'); ?>" data-update="<?php echo $this_main->lang('Update cart'); ?>" data-action="update-cart">
					<?php echo $this_main->lang('Add to cart'); ?> 
					<img src="<?php echo $this_main->cfg->assets_url; ?>assets/images/cart.svg" />
				</button>
			</footer>
		</div>
	</li>
	<style>
	    .designer-cart-field{
            display:none!important;
        }
	</style>
	<?php 
	
	}
		
		$proceed_nav = ob_get_contents();
		ob_end_clean();
		echo $this_main->apply_filters('proceed-nav', $proceed_nav);
	?>
	<!-- Avalable filters: proceed-nav -->
	
	<!-- Avalable hook: after_cart -->
    <?php 
    	
    	} 
    	/* End shop component */ 
    	$this_main->do_action('after_cart');
    ?>
    </ul>