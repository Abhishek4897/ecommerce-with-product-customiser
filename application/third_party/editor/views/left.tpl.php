<?php
    global $lumise;
    $this_main = $lumise;
	$comps = $this_main->cfg->settings['components'];
	
	if (is_string($this_main->cfg->settings['components']))
		$comps = explode(',', $this_main->cfg->settings['components']);
	
	$menus = $this_main->cfg->editor_menus;
    $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
	$is_tab = (is_numeric(strpos($ua, "ipad")) || is_numeric(strpos($ua, "tablet"))); // || is_numeric(strpos($ua, "macintosh")) 
    // $isMob = is_numeric(strpos($ua, "mobile"));
?>
<div id="designer-left">
    <div class="row bottom_bar">
            <div class="col-md-3 col-lg-3 col-xl-3 col-sm-3 d-none d-sm-none d-md-none <?= ($is_tab)?'d-lg-none':'d-lg-block'?>"  php="<?php print_r($ua); ?>" id="product_area" style="display:none;">
               
					<header class="product-name">
						<name></name>
					</header>
					
					<div id="designer-cart-wrp" data-view="attributes" class="smooth">
						<div class="designer-cart-options">
							<div class="designer-cart-attributes" id="designer-cart-attributes"></div>
						</div>
					</div>
					 <header style="display:none;">
					     <mcs style="color: #fff;"></mcs>
					   </header>
            </div>
            <div class="col-sm-12 col-md-12 <?= ($is_tab)?'col-lg-12 col-xl-12':'col-lg-9 col-xl-9' ?>" style="padding-left:0px;">
                <div class="designer-left-nav-wrp" >
            	    <?php $temp_id;?>
            		<ul class="designer-left-nav" id="main-editor-nav">
            			<li data-tab="design" style="display:none;">
            				<i class="fa fa-paint-brush"></i>
            				<?php echo $this_main->lang('Design'); ?>
            			</li>
            			<?php 
            		
            				for ($i = 0; $i < count($comps); $i++) {
            					if($comps[$i]=="templates" && $_SESSION['designer_login']==true && defined('DESIGNER_EDITOR_ACTIVATED'))
            					    continue;
            					if (isset($menus[$comps[$i]])) {
            						
            						$attrs = array('data-tab="'.$comps[$i].'"');
            				// 		echo $attrs['0'];
            						
            						if (isset($menus[$comps[$i]]['load']) && !empty($menus[$comps[$i]]['load']))
            							array_push($attrs, 'data-load="'.$menus[$comps[$i]]['load'].'"');
            						
            						if (isset($menus[$comps[$i]]['callback']) && !empty($menus[$comps[$i]]['callback']))
            							array_push($attrs, 'data-callback="'.$menus[$comps[$i]]['callback'].'"');
            							
            						 $paid_design=($comps[$i]=="templates")?'paid_design':'';
            						 $customown=($comps[$i]!="qr_code" || $comps[$i]!="text")?'customown':'';
            						 $customfill=($comps[$i]=="qr_code" || $comps[$i]=="text")?'customfill':'';
            							
            						echo '<li '.implode(' ', $attrs).' class="'.$paid_design .' '. $customown .' '. $customfill.'">';
            						
            						if(
            							isset($menus[$comps[$i]]['icon']) && 
            							!empty($menus[$comps[$i]]['icon'])
            						) echo '<i class="'.$menus[$comps[$i]]['icon'].'"></i>';
            					
            						if($menus[$comps[$i]]['label']=="Templates"){ echo '<span data-toggle="modal" id="tmpModel" data-target="#tmpprice">Premium Designs<span class="ptag badge badge-danger" style="margin-left: 10px;">New</span></span>';}
            						else{
            						    echo (isset($menus[$comps[$i]]['label']) ? '<span>'.$menus[$comps[$i]]['label'].'</span>' : '');
            				        // echo (isset($menus[$comps[$i]]['label']) ? $menus[$comps[$i]]['label'] : '');
            						};
            						
            						echo '</li>';
            						
            					}
            					
            				}
            			
            			?>
            			
            			<?php if ($this_main->cfg->settings['report_bugs'] != 0) { ?>
            			<li data-tab="bug" title="<?php echo $this_main->lang('Report bugs'); ?>">
            				<i class="fa fa-bug"></i>
            			</li>
            			<?php } ?>
            		</ul>

            	</div>
	
            	<?php 
            		
            		$first = true;
            				
            		for ($i = 0; $i < count($comps); $i++) {
            			
            			if (isset($menus[$comps[$i]])) {
            				
            				$claz = 'designer-tab-body-wrp';
            					
            				if (isset($menus[$comps[$i]]['class']) && !empty($menus[$comps[$i]]['class']))
            					$claz .= ' '.$menus[$comps[$i]]['class'];
            				// 	print_r($comps[$i]);
            				$ext = "designer-";
            				$des_comp = array("product");
            				if(in_array($comps[$i], $des_comp))
            				    $ext = "designer-";
            				echo '<div id="'.$ext.$comps[$i].'" class="'.$claz.'">';
            				if (isset($menus[$comps[$i]]['content']) && !empty($menus[$comps[$i]]['content']))
            					echo $menus[$comps[$i]]['content'];
            				echo '</div>';
            				
            			}
            			
            		}
            	
            	?>
	
            	<?php if ($this_main->cfg->settings['report_bugs'] != 0) { ?>
            	<div id="designer-bug" class="designer-tab-body-wrp designer-left-form">
            		<bug>
            			<h3><?php echo $this_main->lang('Bug Reporting'); ?></h3>
            			<p><?php echo $this_main->lang('Please let us know if you find any bugs on this design tool or just your opinion to improve the tool.'); ?></p>
            			<textarea placeholder="<?php echo $this_main->lang('Bug description (min 30 - max 1500 characters)'); ?>" maxlength="1500" data-id="report-content"></textarea>
            			<button class="designer-btn submit">
            				<?php echo $this_main->lang('Send now'); ?> <i class="fa fa-paper-plane"></i>
            			</button>
            			<p data-view="tips">
            				<?php echo $this_main->lang('Tips: If you want to send content with screenshots or videos, you can upload them to'); ?> 
            				<a href="https://imgur.com" target=_blank>imgur.com</a> 
            				<?php echo $this_main->lang('or any drive services and put links here.'); ?>
            			</p>
            			<center><i class="fa fa-bug"></i></center>
            		</bug>
            	</div>
            	<?php } ?>
            	<div id="designer-x-thumbn-preview">
            		<header></header>
            		<div></div>
            		<footer></footer>
            	</div>
	        </div>
    </div>
    
</div>