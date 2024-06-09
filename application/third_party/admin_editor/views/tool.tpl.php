<style>
    #designer-fill,.designer-save-color,.fa-qrcode{
      display:none!important;
  }

</style>
<?php
    global $lumise;
    $this_main = $lumise;
?>
	<ul class="designer-top-nav left" data-mode="default" style="display:none">
		<li id="designer-general-status">
			<span>
				<text><i class="fa fa-exclamation-triangle"></i> <?php echo $this_main->lang('Start designing by adding objects from the left side'); ?></text>
			</span>
		</li>
	</ul>

	<ul class="designer-top-nav left" data-mode="group" data-grouped="false">
		<!-- Avalable hook: before-tool-group -->
		<?php echo $this_main->do_action('before-tool-group'); ?>
		<li data-tool="ungroup" data-callback="group">
			<span data-view="noicon">
				<i class="fa fa-check-circle"></i> 
				<?php echo $this_main->lang('All selected objects are grouped'); ?> | 
				<a href="#ungroup"><?php echo $this_main->lang('Ungroup?'); ?></a>
			</span>
		</li>
		<li data-tool="group" data-callback="group">
			<span data-tip="true" data-pos="bottom" data-view="noicon"> 
				<i class="fa fa-link"></i> 
				<?php echo $this_main->lang('Group objects'); ?>
				<span><?php echo $this_main->lang('Group the position of selected objects'); ?></span>
			</span>
		</li>
		<!-- Avalable hook: after-tool-group -->
		<?php echo $this_main->do_action('after-tool-group'); ?>
	</ul>
	
	<ul class="designer-top-nav left" data-mode="svg">
		<!-- Avalable hook: before-tool-svg -->
		<?php echo $this_main->do_action('before-tool-svg'); ?>
		<li data-tool="svg" id="designer-svg-colors" data-callback="svg">
			<ul data-pos="left" data-view="sub">
				<li data-view="title">
					<h3>
						<span><?php echo $this_main->lang('Fill options'); ?></span>
						<i class="fa fa-times close" title="close"></i>
					</h3>
					<p class="flex<?php echo $this_main->cfg->settings['enable_colors'] == '0' ? ' hidden' : ''; ?>">
						<input type="search" placeholder="click to choose color" id="designer-svg-fill" class="color" />
						<?php if ($this_main->cfg->settings['enable_colors'] != '0') { ?>
						<span class="designer-save-color" data-tip="true" data-target="svg-fill">
							<i class="fa fa-bookmark"></i>
							<span><?php echo $this_main->lang('Save this color'); ?></span>
						</span>
						<?php } ?>
					</p>
					<ul id="designer-color-presets" class="designer-color-presets" data-target="svg-fill"></ul>
				</li>
			</ul>
		</li>
		<!-- Avalable hook: after-tool-svg -->
		<?php echo $this_main->do_action('after-tool-svg'); ?>
	</ul>

	<ul class="designer-top-nav right" data-mode="default">
		<!-- Avalable hook: before-tool-default -->
		<?php echo $this_main->do_action('before-tool-default'); ?>
		<?php if ($this_main->cfg->settings['dis_qrcode'] != '1') { ?>
		<li data-tool="callback" data-callback="qrcode">
			<span data-tip="true">
				<i class="fa fa-qrcode"></i>
				<span><?php echo $this_main->lang('Create QRCode'); ?></span>
			</span>
		</li>
		<?php } ?>
		<?php ob_start(); ?>
		<!--<li data-tool="options">-->
		<!--	<span data-view="noicon"><?php //echo $this_main->lang('Options'); ?></span>-->
		<!--	<ul data-pos="right" data-view="sub">-->
		<!--		<li>-->
		<!--			<label><?php //echo $this_main->lang('Auto snap mode'); ?></label>-->
		<!--			<span class="designer-switch">-->
		<!--				<input id="lumise-auto-alignment" data-name="AUTO-ALIGNMENT" type="checkbox" value="" class="designer-toggle-button"<?php if ($this_main->cfg->settings['auto_snap'] == '1')echo ' checked';?>>-->
		<!--				<span class="designer-toggle-label" data-on="ON" data-off="OFF"></span>-->
		<!--				<span class="designer-toggle-handle"></span>-->
		<!--			</span>-->
		<!--			<tip>-->
		<!--				<i></i>-->
		<!--				<text><?php //echo $this_main->lang('Automatically align the position of <br>the active object with other objects'); ?> </text>-->
		<!--			</tip>-->
		<!--		</li>-->
		<!--		<li>-->
		<!--			<label>-->
		<!--				<?php //echo $this_main->lang('Template append'); ?> -->
		<!--			</label>-->
		<!--			<span class="designer-switch">-->
		<!--				<input id="lumise-template-append" data-name="TEMPLATE-APPEND" type="checkbox" value="" class="designer-toggle-button"<?php //if ($this_main->cfg->settings['template_append'] == '1')echo ' checked';?>>-->
		<!--				<span class="designer-toggle-label" data-on="ON" data-off="OFF"></span>-->
		<!--				<span class="designer-toggle-handle"></span>-->
		<!--			</span>-->
		<!--			<tip>-->
		<!--				<i></i>-->
		<!--				<text><?php //echo $this_main->lang('ON: Keep all current objects and append the template into<br> OFF: Clear all objects before installing the template'); ?> </text>-->
		<!--			</tip>-->
		<!--		</li>-->
		<!--		<li>-->
		<!--			<label>-->
		<!--				<?php //echo $this_main->lang('Replace image'); ?> -->
		<!--			</label>-->
		<!--			<span class="designer-switch">-->
		<!--				<input id="lumise-replace-image" data-name="REPLACE-IMAGE" type="checkbox" value="" class="designer-toggle-button"<?php //if ($this_main->cfg->settings['replace_image'] == '1')echo ' checked';?>>-->
		<!--				<span class="designer-toggle-label" data-on="ON" data-off="OFF"></span>-->
		<!--				<span class="designer-toggle-handle"></span>-->
		<!--			</span>-->
		<!--			<tip>-->
		<!--				<i></i>-->
		<!--				<text><?php //echo $this_main->lang('Replace the selected image object instead of creating a new one'); ?> </text>-->
		<!--			</tip>-->
		<!--		</li>-->
				<!-- Avalable hook: editor-options -->
				<?php //$this_main->do_action('editor-options'); ?>
		<!--	</ul>-->
		<!--</li>-->
		<?php 
			$options_nav = ob_get_contents();
			ob_end_clean();
			echo $this_main->apply_filters('options-nav', $options_nav);
		?>
		<!-- Avalable filters: options-nav -->
		<!-- Avalable hook: after-tool-default -->
		<?php echo $this_main->do_action('after-tool-default'); ?>
	</ul>

	<ul class="designer-top-nav left" data-mode="image">
		<!-- Avalable hook: before-tool-image -->
		<?php echo $this_main->do_action('before-tool-image'); ?>
		<li data-tool="callback" data-callback="replace">
			<span data-tip="true" data-pos="bottom">
				<i class="fa fa-upload"></i>
				<span><?php echo $this_main->lang('Replace image'); ?></span>
			</span>
		</li>
		<li data-tool="callback" data-callback="crop">
			<span data-tip="true" data-pos="bottom">
				<i class="fa fa-crop"></i>
				<span><?php echo $this_main->lang('Crop'); ?></span>
			</span>
		</li>
		<li data-tool="masks" data-callback="select_mask">
			<span data-tip="true" data-pos="bottom">
				<i class="fa fa-star-o"></i>
				<span><?php echo $this_main->lang('Mask'); ?></span>
			</span>
			<ul data-view="sub" data-pos="right">
				<li data-view="title">
					<h3>
						<span><?php echo $this_main->lang('Select mask layer'); ?></span>
						<i class="fa fa-times close" title="close"></i>
					</h3>
				</li>
				<li data-view="list"></li>
				<li class="bttm">
					<button><i class="fa fa-times"></i> <?php echo $this_main->lang('Clear Mask'); ?></button>
				</li>
			</ul>
		</li>
		<li data-tool="filter">
			<span data-tip="true">
				<i class="fa fa-flask"></i>
				<span><?php echo $this_main->lang('Remove background'); ?></span>
			</span>
			<ul data-view="sub">
				<li data-view="title">
					<h3>
						<span><?php echo $this_main->lang('Remove background'); ?></span>
						<i class="fa fa-times close" title="close"></i>
					</h3>
				</li>
				<li>
					<h3 class="nob">
						<span><?php echo $this_main->lang('Deep'); ?>: </span>
						<inp data-range="helper" data-value="0">
							<input class="nol" type="range" id="designer-image-fx-deep" data-value="0" min="0" max="200" value="0" data-image-fx="deep" data-view="designer" />
						</inp>
					</h3>
				</li>
				<li>
					<h3 class="nob">
						<span><?php echo $this_main->lang('Mode'); ?>: </span>
						<select id="designer-image-fx-mode" data-fx="mode">
							<option value="light"><?php echo $this_main->lang('Light Background'); ?></option>
							<option value="dark"><?php echo $this_main->lang('Dark Background'); ?></option>
						</select>
					</h3>
				</li>
			</ul>
		</li>
		<li data-tool="advanced">
			<span data-tip="true">
				<i class="fa fa-magic"></i>
				<span><?php echo $this_main->lang('Filters'); ?></span>
			</span>
			<ul data-view="sub">
				<li data-view="title">
					<h3>
						<span><?php echo $this_main->lang('Filters'); ?></span>
						<i class="fa fa-times close" title="close"></i>
					</h3>
				</li>
				<li data-tool="filters">
					<h3 class="nob">
						<ul id="designer-image-fx-fx"><li data-fx="" style="background-position: 0px 0px;"><span>Original</span></li><li data-fx="bnw" style="background-position: -92px 0px;"><span>B&amp;W</span></li><li data-fx="satya" style="background-position: -184px 0px;"><span>Satya</span></li><li data-fx="doris" style="background-position: -276px 0px;"><span>Doris</span></li><li data-fx="sanna" style="background-position: -368px 0px;"><span>Sanna</span></li><li data-fx="vintage" style="background-position: -460px 0px;"><span>Vintage</span></li><li data-fx="gordon" style="background-position: 0px -92px;"><span>Gordon</span></li><li data-fx="carl" style="background-position: -92px -92px;"><span>Carl</span></li><li data-fx="shaan" style="background-position: -184px -92px;"><span>Shaan</span></li><li data-fx="tonny" style="background-position: -276px -92px;"><span>Tonny</span></li><li data-fx="peter" style="background-position: -368px -92px;"><span>Peter</span></li><li data-fx="greg" style="background-position: -460px -92px;"><span>Greg</span></li><li data-fx="josh" style="background-position: 0px -184px;"><span>Josh</span></li><li data-fx="karen" style="background-position: -92px -184px;"><span>Karen</span></li><li data-fx="melissa" style="background-position: -184px -184px;"><span>Melissa</span></li><li data-fx="salomon" style="background-position: -276px -184px;"><span>Salomon</span></li><li data-fx="sophia" style="background-position: -368px -184px;"><span>Sophia</span></li><li data-fx="adrian" style="background-position: -460px -184px;"><span>Adrian</span></li><li data-fx="roxy" style="background-position: 0px -276px;"><span>Roxy</span></li><li data-fx="singe" style="background-position: -92px -276px;"><span>Singe</span></li><li data-fx="borg" style="background-position: -184px -276px;"><span>Borg</span></li><li data-fx="ventura" style="background-position: -276px -276px;"><span>Ventura</span></li><li data-fx="andy" style="background-position: -368px -276px;"><span>Andy</span></li><li data-fx="vivid" style="background-position: -460px -276px;"><span>Vivid</span></li><li data-fx="purple" style="background-position: 0px -368px;"><span>Purple</span></li><li data-fx="thresh" style="background-position: -92px -368px;"><span>Thresh</span></li><li data-fx="aqua" style="background-position: -184px -368px;"><span>Aqua</span></li><li data-fx="edgewood" style="background-position: -276px -368px;" data-selected="true"><span>Edge wood</span></li><li data-fx="aladin" style="background-position: -368px -368px;"><span>Aladin</span></li><li data-fx="amber" style="background-position: -460px -368px;"><span>Amber</span></li><li data-fx="anne" style="background-position: 0px -460px;"><span>Anne</span></li><li data-fx="doug" style="background-position: -92px -460px;"><span>Doug</span></li><li data-fx="earl" style="background-position: -184px -460px;"><span>Earl</span></li><li data-fx="kevin" style="background-position: -276px -460px;"><span>Kevin</span></li><li data-fx="polak" style="background-position: -368px -460px;"><span>Polak</span></li><li data-fx="stan" style="background-position: -460px -460px;"><span>Stan</span></li></ul>
					</h3>
				</li>
				<li>
					<h3 class="nob">
						<span><?php echo $this_main->lang('Brightness'); ?>: </span>
						<inp data-range="helper" data-value="0">
							<input type="range" id="designer-image-fx-brightness" class="nol" data-value="0" min="-50" max="50" value="0" data-image-fx="brightness" data-view="designer" data-range="0" data-between="true" />
						</inp>
					</h3>
				</li>
				<li>
					<h3 class="nob">
						<span><?php echo $this_main->lang('Saturation'); ?>: </span>
						<inp data-range="helper" data-value="100">
							<input type="range" id="designer-image-fx-saturation" class="nol" data-value="100" min="0" max="100" value="100" data-image-fx="saturation" data-view="designer" />
						</inp>
					</h3>
				</li>
				<li>
					<h3 class="nob">
						<span><?php echo $this_main->lang('Contrast'); ?>: </span>
						<inp data-range="helper" data-value="0">
							<input type="range" id="designer-image-fx-contrast" class="nol" data-value="0" min="-50" max="50" value="0" data-image-fx="contrast" data-view="designer" data-range="0" data-between="true" />
						</inp>
					</h3>
				</li>
			</ul>
		</li>
		<li data-tool="callback" data-callback="imageFXReset">
			<span data-view="noicon"><?php echo $this_main->lang('Clear Filters'); ?></span>
		</li>
		<!-- Avalable hook: after-tool-image -->
		<?php echo $this_main->do_action('after-tool-image'); ?>
	</ul>

	<ul class="designer-top-nav left" data-mode="drawing">
		<!-- Avalable hook: before-tool-drawing -->
		<?php echo $this_main->do_action('before-tool-drawing'); ?>
		<li>
			<button id="designer-discard-drawing" class="red mr1">
				<i class="fa fa-times"></i> <?php echo $this_main->lang('Discard drawing (ESC)'); ?>
			</button>
			<?php echo $this_main->lang('Click then drag the mouse to start drawing.'); ?>
			<b>Ctrl+Z</b> = undo, <b>Ctrl+Shift+Z</b> = redo
		</li>
	</ul>

	<ul class="designer-top-nav left" data-mode="standard">
		<!-- Avalable hook: before-tool-standard-left -->
		<?php echo $this_main->do_action('before-tool-standard-left'); ?>
		<li data-tool="qrcode-text">
			<span data-tip="true">
				<i class="fa fa-qrcode"></i>
				<span><?php echo $this_main->lang('QRCode text'); ?></span>
				<input type="text" class="nol designer-edit-text" id="designer-qrcode-text" placeholder="<?php echo $this_main->lang('Enter your text'); ?>" />
			</span>
		</li>
		<!-- Avalable hook: after-tool-standard-left -->
		<?php echo $this_main->do_action('after-tool-standard-left'); ?>
	</ul>

	<ul class="designer-top-nav right" data-mode="standard">
		<!-- Avalable hook: before-tool-standard-right -->
		<?php echo $this_main->do_action('before-tool-standard-right'); ?>
		<li data-tool="fill">
			<span data-tip="true">
				<i class="fa fa-paint-brush"></i>
				<span><?php echo $this_main->lang('Fill options'); ?></span>
			</span>
			<ul data-pos="center" data-view="sub" id="fill-ops-sub">
				<li data-view="title">
					<h3>
						<span><?php echo $this_main->lang('Fill options'); ?></span>
						<i class="fa fa-times close" title="close"></i>
					</h3>
					<p style="display:none" class="1flex<?php echo $this_main->cfg->settings['enable_colors'] == '0' ? ' hidden' : ''; ?>">
						<input type="search" placeholder="click to choose color" id="designer-fill" class="color" data-pos="#fill-ops-sub" />
						<?php if ($this_main->cfg->settings['enable_colors'] != '0') { ?>
						<span class="designer-save-color" data-tip="true" data-target="fill">
							<i class="fa fa-bookmark"></i>
							<span><?php echo $this_main->lang('Save this color'); ?></span>
						</span>
						<?php } ?>
					</p>
					<ul id="designer-color-presets" class="designer-color-presets" data-target="fill"></ul>
				</li>
				<li data-view="transparent">
					<h3 class="nob">
						<span><?php echo $this_main->lang('Transparent'); ?>: </span>
						<inp data-range="helper" data-value="100%">
							<input type="range" class="nol" id="designer-transparent" data-value="100%" min="0" max="100" value="100" data-unit="%" data-ratio="0.01" data-action="opacity" />
						</inp>
					</h3>
				</li>
				<li data-view="stroke">
					<h3 class="nob">
						<span><?php echo $this_main->lang('Stroke width'); ?>: </span>
						<inp data-range="helper" data-value="0">
							<input type="range" class="nol" id="designer-stroke-width" data-action="strokeWidth" data-unit="px" data-value="0" min="0" max="100" value="0" />
						</inp>
					</h3>
				</li>
				<li data-view="stroke" style="display:none;">
					<h3 class="nob" >
						<!--<span><?php echo $this_main->lang('Stroke color'); ?>: </span>-->
						<input type="search" class="color<?php echo $this_main->cfg->settings['enable_colors'] == '0' ? ' hidden' : ''; ?>" placeholder="<?php echo $this_main->lang('Select a color'); ?>"  data-pos="#fill-ops-sub" id="designer-stroke" />
					</h3>
					<?php if ($this_main->cfg->settings['enable_colors'] == '0') {
						$colors = explode(':', $this_main->cfg->settings['colors']);
						if (isset($colors[1])) {
							$colors = explode(',', $colors[1]);
							echo '<ul id="designer-stroke-fix-colors">';
							foreach ($colors as $k => $v) {
								$v = explode('@', $v);
								echo '<li style="background: '.$v[0].'" title="'.(
									isset($v[1]) ? urldecode($v[1]) : $v[0]
								).'" data-color="'.$v[0].'"></li>';
							}
							echo '</ul>';
						}
					}
					?>
				</li>
			</ul>
		</li>
		<li data-tool="un-group" data-callback="ungroup">
			<span data-tip="true">
				<i class="fa fa-link"></i>
				<span><?php echo $this_main->lang('Ungroup position'); ?></span>
			</span>
		</li>
		<li data-tool="arrange">
			<span data-tip="true">
				<i class="fa fa-clone"></i>
				<span><?php echo $this_main->lang('Arrange layers'); ?></span>
			</span>
			<ul data-pos="right" data-view="sub">
				<li class="flex">
					<button data-arrange="back">
						<i class="fa fa-minus"></i>
						<?php echo $this_main->lang('Back'); ?>
					</button>
					<button data-arrange="forward" class="last">
						<i class="fa fa-plus"></i>
						<?php echo $this_main->lang('Forward'); ?>
					</button>
				</li>
			</ul>
		</li>
		<li data-tool="position">
			<span data-tip="true">
				<i class="fa fa-align-justify"></i>
				<span><?php echo $this_main->lang('Position'); ?></span>
			</span>
			<ul data-pos="right" data-view="sub" id="designer-position-wrp">
				<li data-view="title">
					<h3>
						<?php echo $this_main->lang('Object position'); ?>
						<i class="fa fa-times close" title="close"></i>
					</h3>
					<p class="lock-postion">
						<?php echo $this_main->lang('Lock object position'); ?>: 
						<span class="designer-switch" style="float: none;">
							<input id="designer-lock-position" type="checkbox" value="" class="designer-toggle-button">
							<span class="designer-toggle-label" data-on="YES" data-off="NO"></span>
							<span class="designer-toggle-handle"></span>
						</span>
					</p>
				</li>

				<li data-position="cv" data-tip="true">
					<p><i class="fa fa-arrows-v"></i></p>
					<span><?php echo $this_main->lang('Center vertical'); ?></span>
				</li>

				<li data-position="tl" data-tip="true">
					<p><i class="fa fa-arrow-up _45deg"></i></p>
					<span><?php echo $this_main->lang('Top left'); ?></span>
				</li>
				<li data-position="tc" data-tip="true">
					<p><i class="fa fa-arrow-up"></i></p>
					<span><?php echo $this_main->lang('Top center'); ?></span>
				</li>
				<li data-position="tr" data-tip="true" class="mirX">
					<p><i class="fa fa-arrow-down _135deg"></i></p>
					<span><?php echo $this_main->lang('Top right'); ?></span>
				</li>


				<li data-position="ch" data-tip="true" class="rota">
					<p><i class="fa fa-arrows-h"></i></p>
					<span><?php echo $this_main->lang('Center Horizontal'); ?></span>
				</li>

				<li data-position="ml" data-tip="true">
					<p><i class="fa fa-arrow-left"></i></p>
					<span><?php echo $this_main->lang('Middle left'); ?></span>
				</li>
				<li data-position="mc" data-tip="true">
					<p><i class="fa fa-circle-thin"></i></p>
					<span><?php echo $this_main->lang('Middle center'); ?></span>
				</li>
				<li data-position="mr" data-tip="true">
					<p><i class="fa fa-arrow-right"></i></p>
					<span><?php echo $this_main->lang('Middle right'); ?></span>
				</li>

				<li data-position="" data-tip="true">
					<i class="fa fa-info-circle"></i>
					<span>
						<?php echo $this_main->lang('Press &leftarrow; &uparrow; &rightarrow; &downarrow; to move 1 px, <br>Hit simultaneously SHIFT key to move 10px'); ?>
					</span>
				</li>
				<li data-position="bl" data-tip="true" class="mirX">
					<p><i class="fa fa-arrow-up _135deg"></i></p>
					<span><?php echo $this_main->lang('Bottom left'); ?></span>
				</li>
				<li data-position="bc" data-tip="true">
					<p><i class="fa fa-arrow-down"></i></p>
					<span><?php echo $this_main->lang('Bottom center'); ?></span>
				</li>
				<li data-position="br" data-tip="true">
					<p><i class="fa fa-arrow-down _45deg"></i></p>
					<span><?php echo $this_main->lang('Bottom right'); ?></span>
				</li>
			</ul>
		</li>
		<li data-tool="transform">
			<span data-tip="true">
				<i class="fa fa-exchange"></i>
				<span><?php echo $this_main->lang('Transforms'); ?></span>
			</span>
			<ul data-pos="right" data-view="sub">
				<li>
					<h3 class="nob">
						<span><?php echo $this_main->lang('Rotate'); ?>: </span>
						<inp data-range="helper" data-value="0º">
							<input type="range" id="designer-rotate" data-value="0º" min="0" max="360" value="0" data-unit="º" data-range="0, 45, 90, 135, 180, 225, 270, 315" data-action="angle" />
						</inp>
					</h3>
				</li>
				<li>
					<h3 class="nob">
						<span><?php echo $this_main->lang('Skew X'); ?>: </span>
						<inp data-range="helper" data-value="0">
							<input class="nol" type="range" id="designer-skew-x" data-value="0" min="-30" max="30" value="0" data-unit="" data-action="skewX" data-range="0" data-between="true" />
						</inp>
					</h3>
				</li>
				<li>
					<h3 class="nob">
						<span><?php echo $this_main->lang('Skew Y'); ?>: </span>
						<inp data-range="helper" data-value="0">
							<input class="nol" type="range" id="designer-skew-y" data-value="0" min="-30" max="30" value="0" data-unit="" data-action="skewY" data-range="0" data-between="true" />
						</inp>
					</h3>
				</li>
				<li class="center">
					<?php echo $this_main->lang('Flip X'); ?>:
					<div class="designer-switch mr2">
						<input id="designer-flip-x" type="checkbox" value="" class="designer-toggle-button">
						<span class="designer-toggle-label" data-on="ON" data-off="OFF"></span>
						<span class="designer-toggle-handle"></span>
					</div>

					<?php echo $this_main->lang('Flip Y'); ?>:
					<div class="designer-switch">
						<input id="designer-flip-y" type="checkbox" value="" class="designer-toggle-button">
						<span class="designer-toggle-label" data-on="ON" data-off="OFF"></span>
						<span class="designer-toggle-handle"></span>
					</div>
					<p class="blockinl">
						<i class="fa fa-lightbulb-o"></i>
						<?php echo $this_main->lang('Free transform by press SHIFT+&#10529;'); ?>
						<br>
						<button id="designer-reset-transform">
							<i class="arrows-v"></i>
							<?php echo $this_main->lang('Reset all transforms'); ?>
						</button>
					</p>
				</li>
			</ul>
		</li>
		<!-- Avalable hook: before-tool-standard-right -->
		<?php echo $this_main->do_action('before-tool-standard-right'); ?>
	</ul>

	<ul class="designer-top-nav left" data-mode="text" id="designer-text-tools">
		<!-- Avalable hook: before-tool-text -->
		<?php echo $this_main->do_action('before-tool-text'); ?>
		<li data-tool="font">
			<span>
				<button class="dropdown">
					<font style="font-family:Arial">Arial</font>
				</button>
			</span>
			<ul data-pos="center" data-func="fonts" data-view="sub">
				<li class="scroll smooth" id="designer-fonts"></li>
				<?php if ($this_main->connector->is_admin() || $this_main->cfg->settings['user_font'] !== '0') { ?>
				<li class="bttm">
					<button class="designer-more-fonts"><i class="fa fa-external-link"></i> Get more fonts</button>
				</li>
				<?php } ?>
			</ul>
		</li>
		<li data-tool="spacing">
			<span data-tip="true">
				<i class="fa fa-text-height"></i>
				<span><?php echo $this_main->lang('Edit text'); ?></span>
			</span>
			<ul data-pos="right" data-view="sub">
				<li data-view="title">
					<h3>
						<?php echo $this_main->lang('Edit text'); ?>
						<i class="fa fa-times close" title="Close"></i>
					</h3>
				</li>
				<li>
					<h3 class="nob">
						<textarea type="text" class="nol designer-edit-text" placeholder="Enter your text"></textarea> <button data-func="update-text-fx"><?php echo $this_main->lang('UPDATE TEXT'); ?></button><span onclick="view_more_text()" id="view_more_text"> View more</span><span onclick="view_less_text()" id="view_less_text" style="display:none;"> View less</span></li>
					</h3> 
						<li>
				</li>
				<li class="text_editing hide ">
					<h3 class="nob">
						<span><?php echo $this_main->lang('Font size'); ?>: </span>
						<inp data-range="helper" data-value="16">
							<input type="range" class="nol" id="designer-font-size" data-action="fontSize" data-unit="px" data-value="16" min="6" max="144" value="16" />
						</inp>
					</h3>
				</li>
				<li class="text_editing hide">
					<h3 class="nob">
						<span class="min100"><?php echo $this_main->lang('Letter spacing'); ?> </span>
						<inp data-range="helper" data-value="100%">
							<input type="range" class="nol" id="designer-letter-spacing" data-value="100%" min="0" max="1000" value="100" data-unit="" data-action="charSpacing" />
						</inp>
					</h3>
				</li>
				<li class="text_editing hide">
					<h3 class="nob">
						<span class="min100"><?php echo $this_main->lang('Line height'); ?> </span>
						<inp data-range="helper" data-value="10">
							<input type="range" class="nol" id="designer-line-height" data-value="10" min="1" max="50" value="10"  data-action="lineHeight" data-unit="px" data-ratio="0.1" />
						</inp>
					</h3>
				</li>
			
			</ul>
		</li>
		<li data-tool="text-effect">
			<span data-tip="true">
				<i class="fa fa-code-fork"></i>
				<span><?php echo $this_main->lang('Text Effects'); ?></span>
			</span>
			<ul data-pos="right" data-view="sub">
				<li data-view="title">
					<h3>
						<?php echo $this_main->lang('Text effects'); ?>
						<i class="fa fa-times close" title="Close"></i>
					</h3>
				</li>
				<li id="designer-text-effect">
					<h3 class="nob mb1">
						<textarea type="text" class="nol ml0 designer-edit-text" placeholder="<?php echo $this_main->lang('Enter your text'); ?>"></textarea>
						<button data-func="update-text-fx"><?php echo $this_main->lang('UPDATE TEXT'); ?></button>
					</h3>
					<span data-sef="images">
						<img data-effect="normal" src="<?php echo $this_main->cfg->assets_url; ?>assets/images/text-effect-normal.png" height="80" data-selected="true" />
						<img data-effect="curved" src="<?php echo $this_main->cfg->assets_url; ?>assets/images/text-effect-curved.png" height="80" />
						<img data-effect="bridge" src="<?php echo $this_main->cfg->assets_url; ?>assets/images/text-effect-bridge.png" height="80" />
						<img data-effect="oblique" src="<?php echo $this_main->cfg->assets_url; ?>assets/images/text-effect-oblique.png" height="80" />
					</span>
					<span onclick="view_more_effects()" id="view_more_effects"> View more</span><span onclick="view_less_effects()" id="view_less_effects" style="display:none;"> View less</span>
					<div class="designer-switch" style="display: none;">
						<input id="designer-curved" type="checkbox" value="" class="designer-toggle-button">
						<span class="designer-toggle-label" data-on="ON" data-off="OFF"></span>
						<span class="designer-toggle-handle"></span>
					</div>
				</li>
				<li class="arteno_text_effects hide" data-func="curved">
					<h3 class="nob">
						<span><?php echo $this_main->lang('Radius'); ?> </span>
						<inp data-range="helper" data-value="80">
							<input type="range" class="nol" id="designer-curved-radius" data-action="radius" data-value="80" min="-300" max="300" value="80" />
						</inp>
					</h3>
				</li>
				<li class="arteno_text_effects hide" data-func="curved">
					<h3 class="nob">
						<span><?php echo $this_main->lang('Spacing'); ?> </span>
						<inp data-range="helper" data-value="0">
							<input type="range" class="nol" id="designer-curved-spacing" data-action="spacing" data-value="0" min="0" max="100" value="0" />
						</inp>
					</h3>
				</li>
				<li class="arteno_text_effects hide" data-func="text-fx">
					<h3 class="nob">
						<span><?php echo $this_main->lang('Curve'); ?> </span>
						<inp data-range="helper" data-value="0">
							<input type="range" class="nol" id="designer-text-fx-curve" data-callback="textFX" data-fx="curve" data-value="0" min="-100" max="100" data-ratio="0.1" value="0" />
						</inp>
					</h3>
				</li>
				<li class="arteno_text_effects hide" data-func="text-fx">
					<h3 class="nob">
						<span><?php echo $this_main->lang('Height'); ?> </span>
						<inp data-range="helper" data-value="100">
							<input type="range" class="nol" id="designer-text-fx-bottom" data-callback="textFX" data-fx="bottom" data-value="100" min="1" max="150" data-ratio="0.1" value="100" />
						</inp>
					</h3>
				</li>
				<li class="arteno_text_effects hide" data-func="text-fx">
					<h3 class="nob">
						<span><?php echo $this_main->lang('Offset'); ?> </span>
						<inp data-range="helper" data-value="50">
							<input type="range" class="nol" id="designer-text-fx-offsety" data-callback="textFX" data-fx="offsetY" data-value="50" min="1" max="100" data-ratio="0.01" value="50" />
						</inp>
					</h3>
				</li>
				<li class="arteno_text_effects hide" data-func="text-fx">
					<h3 class="nob">
						<span><?php echo $this_main->lang('Trident'); ?> </span>
						<div class="designer-switch">
							<input id="designer-text-fx-trident" data-fx="trident" type="checkbox" value="" class="designer-toggle-button">
							<span class="designer-toggle-label" data-on="ON" data-off="OFF"></span>
							<span class="designer-toggle-handle"></span>
						</div>
					</h3>
				</li>
			</ul>
		</li>
		<li class="sp"></li>
		<li data-tool="text-align">
			<span data-tip="true">
				<i class="fa fa-align-center" id="designer-text-align"></i>
				<span><?php echo $this_main->lang('Text align'); ?></span>
			</span>
			<ul data-pos="center" data-view="sub">
				<li>
					<i class="fa fa-align-left text-format" data-align="left" title="<?php echo $this_main->lang('Text align left'); ?>"></i>
					<i class="fa fa-align-center text-format" data-align="center" title="<?php echo $this_main->lang('Text align center'); ?>"></i>
					<i class="fa fa-align-right text-format" data-align="right" title="<?php echo $this_main->lang('Text align right'); ?>"></i>
					<i class="fa fa-align-justify text-format" data-align="justify" title="<?php echo $this_main->lang('Text align justify'); ?>"></i>
				</li>
			</ul>
		</li>
		<li class="text-format" data-format="upper">
			<span data-tip="true">
				<i class="fa fa-font"></i>
				<span><?php echo $this_main->lang('Uppercase / Lowercase'); ?></span>
			</span>
		</li>
		<li class="text-format" data-format="bold">
			<span data-tip="true">
				<i class="fa fa-bold"></i>
				<span><?php echo $this_main->lang('Font weight bold'); ?></span>
			</span>
		</li>
		<li class="text-format" data-format="italic">
			<span data-tip="true">
				<i class="fa fa-italic"></i>
				<span><?php echo $this_main->lang('Text style italic'); ?></span>
			</span>
		</li>
		<li class="text-format" data-format="underline">
			<span data-tip="true">
				<i class="fa fa-underline"></i>
				<span><?php echo $this_main->lang('Text underline'); ?></span>
			</span>
		</li>
		<!-- Avalable hook: after-tool-text -->
		<?php echo $this_main->do_action('after-tool-text'); ?>
	</ul>