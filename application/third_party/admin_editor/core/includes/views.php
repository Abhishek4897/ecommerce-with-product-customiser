<?php
/**
*
*	(p) package: AnshuWap main.php
*	(c) author:	Anshu Gupta
*	(i) website: https://www.anshuwap.com
*
*/

class lumise_views extends lumise_lib {

	public function __construct($lumise) {
		$this->main = $lumise;
	}

	public function nav(){
	    load_views_tpl('nav');
	}

	public function tool(){
	    load_views_tpl('tool');
	}

	public function left() {
	    load_views_tpl('left');
	}

    public function printings()
    {
        load_views_tpl('printings');
    }

	public function detail_header($args = array()) {

		global $lumise_router, $lumise_helper;

		echo '<div class="lumise_header">';
		
		if (!isset($args['pages']))
			$args['pages'] = $args['page'].'s';
			
		if (!empty($_GET['id'])) {
			echo '<h2><a href="'.$lumise_router->getURI().'lumise-page='.$args['pages'].(isset($args['type']) ? '&type='.$args['type'] : '').'">'.$args['pages'].'</a> <i class="fa fa-angle-right"></i> '.$args['edit'].'</h2>'.
					'<a href="'.$lumise_router->getURI().'lumise-page='.$args['page'].(isset($args['type']) ? '&type='.$args['type'] : '').(isset($_GET['callback']) ? '&callback=edit-cms-product' : '').'" class="add_new"><i class="fa fa-plus"></i> '.
					$args['add'].
					'</a>';
		} else {
			echo '<h2><a href="'.$lumise_router->getURI().'lumise-page='.$args['pages'].(isset($args['type']) ? '&type='.$args['type'] : '').'">'.$args['pages'].'</a> <i class="fa fa-angle-right"></i> '.$args['add'].'</h2>';
		}

		echo $lumise_helper->breadcrumb(isset($_GET['lumise-page']) ? $_GET['lumise-page'] : '');

		echo '</div>';

		$this->header_message();

	}

	public function header_message(){

		$lumise_msg = $this->main->connector->get_session('lumise_msg');

		if (isset($lumise_msg['status']) && $lumise_msg['status'] == 'error' && is_array($lumise_msg['errors'])) { ?>

			<div class="lumise_message err">

				<?php foreach ($lumise_msg['errors'] as $val) {
					echo '<em class="lumise_err"><i class="fa fa-times"></i>  ' . $val . '</em>';
					$lumise_msg = array('status' => '');
					$this->main->connector->set_session('lumise_msg', $lumise_msg);
				} ?>

			</div>

		<?php }
		
		if (isset($lumise_msg['status']) && $lumise_msg['status'] == 'warn' && is_array($lumise_msg['errors'])) {
			?>
			<div class="lumise_message warn">

				<?php
				echo '<em class="lumise_msg">'.(isset($lumise_msg['msg'])? $lumise_msg['msg'] : $this->main->lang('Your data has been successfully saved')).'</em>';
				
				if( isset($lumise_msg['errors']) ) {
					foreach ($lumise_msg['errors'] as $val) {
						echo '<em class="lumise_err"><i class="fa fa-times"></i>  ' . $val . '</em>';
						$lumise_msg = array('status' => '');
						$this->main->connector->set_session('lumise_msg', $lumise_msg);
					}
				}
				$lumise_msg = array('status' => '');
				?>
			</div>

		<?php }

		if (isset($lumise_msg['status']) && $lumise_msg['status'] == 'success') {

		?>
			<div class="lumise_message">
				<?php
					echo '<em class="lumise_suc"><i class="fa fa-check"></i> '.(isset($lumise_msg['msg'])? $lumise_msg['msg'] : $this->main->lang('Your data has been successfully saved')).'</em>';
					$lumise_msg = array('status' => '');
					$this->main->connector->set_session('lumise_msg', $lumise_msg);
				?>
			</div>
		<?php

		}
	}

    public function tabs_render($args, $tabs_id = '') {
	    
		global $lumise;
	    
	    if (isset($args['tabs'])) {

		    echo '<div class="lumise_tabs_wrapper lumise_form_settings" data-id="'.$tabs_id.'">';
		    echo '<ul class="lumise_tab_nav">';
		    
		    foreach (array_keys($args['tabs']) as $label) {
				$str_att = explode(':', $label);
				$label = (count($str_att) > 1)? $str_att[1]: $label;
				echo '<li>';
				echo '<a href="#lumise-tab-'.((count($str_att) > 1)? $str_att[0]: $this->slugify($label)).'">'.$label.'</a>';
				echo '</li>';
			}
			echo '</ul>';
			echo '<div class="lumise_tabs">';

		    foreach ($args['tabs'] as $label => $fields) {
				$str_att = explode(':', $label);
				$label = (count($str_att) > 1)? $str_att[1]: $label;				
			    echo '<div class="lumise_tab_content" id="lumise-tab-'.((count($str_att) > 1)? $str_att[0]: $this->slugify($label)).'">';

			    $this->fields_render($fields);
			    echo '</div>';
		    }

		    echo '</div>';
		    echo '</div>';

	    }else $this->fields_render($args);

	    if (isset($_GET['id'])) {
	    	echo '<input name="id" value="'.$_GET['id'].'" type="hidden" />';
	    }
		echo '<input type="hidden" name="' . $lumise->cfg->security_name . '" value="'.$lumise->cfg->security_code.'">';
	    echo '<input name="save_data" value="true" type="hidden" />';

    }

    public function fields_render($fields) {
	    if (is_array($fields)) {
		    foreach ($fields as $field) {
		    	if (isset($field['type'])) {
		    		$this->field_render($field);
		    	}
		    }
	    }
    }

    public function field_render ($args = array()) {
	    
	    global $lumise;
	    
	   if ($args['type'] !== 'tabs' && isset($args['value']) && is_string($args['value']))
	    	$args['value'] = htmlentities(stripslashes($args['value']));
	   
	   if (isset($args['type_input']) && $args['type_input'] == 'hidden') {
			if (method_exists($this, 'field_'.$args['type']))
				$this->{'field_'.$args['type']}($args);
		} else {
			
			if (isset($args['label']) && !empty($args['label'])) { ?>
				<div class="lumise_form_group lumise_field_<?php echo $args['type']; ?>">
					<span><?php
						echo (isset($args['label']) ? $args['label']: '');
						echo (isset($args['required']) && $args['required'] === true ? '<em class="required">*</em>' : '');
					?></span>
					<div class="lumise_form_content">
						<?php
	
							$this->field_render_content($args);
	
							if (isset($args['desc']) && !empty($args['desc']))
								echo '<em class="notice">'.$args['desc'].'</em>';
						?>
					</div>
				</div>
			<?php
			}else{ 
			
				$this->field_render_content($args);
				
			}
		} ?>
	<?php
    }

	public function field_render_content ($args) {
		
		global $lumise;
		
		$lumise->do_action('before_field', $args);
		
		if (method_exists($this, 'field_'.$args['type'])) {
			ob_start();
			$this->{'field_'.$args['type']}($args);
			$content = ob_get_contents();
			ob_end_clean();
		} else $content = 'Field not exist: '.$args['type'];
		
		echo $lumise->apply_filters('render_field_'.$args['type'], $content, $args);
		
		$lumise->do_action('after_field', $args);
		
	}

    public function field_input ($args) {
	?><input <?php
		$value = ((isset($args['value']) && !empty($args['value'])) ? $args['value']: (isset($args['default']) ? $args['default']: ''));
		if(
			isset($args['numberic'])
		){
			switch ($args['numberic']) {
				case 'int':
					$value = intval($value);
					break;
				
				case 'float':
					$value = floatval($value);
					break;
			}
		}
		if (isset($args['readonly']) && $args['readonly'] === true)
			echo 'readonly="true"';
	?> type="<?php
				echo (isset($args['type_input']) ? $args['type_input']: 'text');
			?>" name="<?php
				echo (isset($args['name']) ? $args['name']: '');
			?>" placeholder="<?php
				echo (isset($args['placeholder']) ? $args['placeholder']: '');
			?>" value="<?php
				echo $value;
			?>" <?php
				echo (isset($args['type_input']) && $args['type_input'] == 'password' ? 'autocomplete="new-password"' : '');
			?> />
	<?php
    }
    
    public function field_admin_login ($args) {
	?>
		<div class="lumise_form_group lumise_field_input">
			<span><?php echo $this->main->lang('Admin email'); ?></span>
			<div class="lumise_form_content">
				<input type="text" name="admin_email" value="<?php echo $this->main->cfg->settings['admin_email']; ?>">
				<em class="notice"><?php echo $this->main->lang('Admin email to login and receive important emails'); ?></em>
			</div>
		</div>
		<div class="lumise_form_group lumise_field_input">
			<span><?php echo $this->main->lang('Admin password'); ?></span>
			<div class="lumise_form_content">
				<input type="password" placeholder="<?php echo $this->main->lang('Enter new password'); ?>" name="admin_password" value="" />
			</div>
		</div>
		<div class="lumise_form_group lumise_field_input">
			<span> &nbsp; </span>
			<div class="lumise_form_content">
				<input type="password" placeholder="<?php echo $this->main->lang('Re-Enter new password'); ?>" name="re_admin_password" value="" />
			</div>
		</div>
	<?php
    }

    public function field_text ($args) {
	?>
		<textarea name="<?php
			echo (isset($args['name']) ? $args['name']: '');
		?>"><?php
			echo (isset($args['value']) ? $args['value']: (isset($args['default']) ? $args['default']: ''));
		?></textarea>
	<?php
    }

    public function field_toggle ($args) {
	?>
		<div class="lumise-toggle">
			<input type="checkbox" name="<?php echo $args['name']; ?>" <?php
				if (
					$args['value'] === 1 || 
					$args['value'] == '1' || 
					(
						!isset($args['value']) || (isset($args['value']) && !is_numeric($args['value'])) && $args['default'] == 'yes')
					)
					echo 'checked="true"';
			?> value="1" />
			<span class="lumise-toggle-label" data-on="Yes" data-off="No"></span>
			<span class="lumise-toggle-handle"></span>
		</div>
	<?php
    }

    public function field_parent ($args) {

    	global $lumise_admin, $lumise_router;
    	if (isset($args['id'])){
			$data = $lumise_admin->get_row_id($args['id'], 'categories');
    	}
		$cates = $lumise_admin->get_categories($args['cate_type']);

   	?>
    	<select name="parent">
			<option value="0"><?php echo $this->main->lang('None'); ?></option>
			<?php

				if ($args['id']) {
					$arr_temp = array($data['id']);
					foreach ($cates as $value) {

						$select = '';
						if (isset($data) && $value['id'] != $data['id']) {

							if ($value['id'] == $data['parent'])
								$select = 'selected';

							if (in_array($value['parent'], $arr_temp)) {
								$arr_temp[] = $value['id'];
							} else {
								if ($value['id'] != $data['id']) {
									echo '<option value="'.$value['id'].'"'.$select.'>'.str_repeat('&mdash;', $value['lv']).' '.$value['name'].'</option>';
								}
							}

						}

					}

				} else {

					foreach ($cates as $value) {
						$select = '';
						echo '<option value="'.$value['id'].'"'.$select.'>'.str_repeat('-', $value['lv']).' '.$value['name'].'</option>';
					}

				}

			?>
		</select>
	<?php
    }

	public function field_categories ($args) {

		global $lumise_admin, $lumise_router;

		$cates = $lumise_admin->get_categories($args['cate_type']);

		if (count($cates) > 0) {

			$dt = $lumise_admin->get_category_item($args['id'], $args['cate_type']);
			$dt_id = array();

			foreach ($dt as $value) {
				$dt_id[] = $value['id'];
			}

			echo '<ul class="list-cate">';

			foreach ($cates as $value) {

				$pd = 20*$value['lv'].'px';
				$checked = '';

				if (isset($dt_id)) {
					if (in_array($value['id'], $dt_id)) {
						$checked = 'checked';
					}
				}
			?>
				<li style="padding-left: <?php echo $pd; ?>">
					<div class="lumise_checkbox sty2 <?php echo $checked; ?>">
							<input type="checkbox" name="<?php
								echo isset($args['name']) ? $args['name'].'[]' : '';
							?>" class="action_check" value="<?php
								echo $value['id'];
							?>" class="action" id="lumise-cate-<?php
								echo $value['id'];
							?>" <?php
								echo $checked;
							?> />
							<label for="lumise-cate-<?php echo $value['id']; ?>">
								<?php echo $value['name']; ?>
								<em class="check"></em>
							</label>
					</div>
				</li>
			<?php } ?>
			</ul>
			<input type="checkbox" name="<?php echo $args['name']; ?>[]" checked="true" style="display:none;" value="" />
			<a href="<?php echo $lumise_router->getURI(); ?>lumise-page=category&type=<?php echo $args['cate_type']; ?>" target=_blank class="lumise_add_cate">
				<?php echo $this->main->lang('Add Category'); ?>
			</a>
		<?php } else { ?>
			<p class="no-data"><?php echo $this->main->lang('You have not created any category yet'); ?>. </p>
			<a href="<?php echo $lumise_router->getURI();?>lumise-page=category&type=<?php echo $args['cate_type']; ?>" target=_blank  class="add-new">
				<?php echo $this->main->lang('Create new category'); ?>
			</a>
		<?php }
    }

    public function field_tags($args = array()) {

	    global $lumise_admin, $lumise_router;

	?>
		<div class="list-tag">
			<?php

				$dt_name = array();
				if (isset($args['id'])) {

					$dt = $lumise_admin->get_tag_item($args['id'], $args['tag_type']);

					foreach ($dt as $value) {
						$dt_name[] = $value['name'];
					}

				}

			?>
			<input id="tags" type="text" name="<?php
				echo isset($args['name']) ? $args['name'] : '';
			?>" value="<?php echo implode(', ', $dt_name); ?>" />
		</div>
		<script type="text/javascript"><?php

			$tags = $lumise_admin->get_rows_custom(array ("id", "name", "slug", "type"),'tags');

			// Autocomplete Tag
			function js_str($s) {
			    return '"' . addcslashes($s, "\0..\37\"\\") . '"';
			}

			function js_array($array) {
			    $temp = array_map('js_str', $array);
			    return '[' . implode(',', $temp) . ']';
			}

			if (isset($tags) && count($tags) > 0) {
				$values = array();
				foreach ($tags as $value) {

					if ($value['type'] == $args['tag_type'])
						$values[] = $value['name'];

				}
				echo 'var lumise_tag_values = ', js_array($values), ';';
			}
		?></script>
	<?php
    }

    public function field_radios($args = array()) {
	    if ($args['options']) {
		    echo '<div class="lumise_radios">';
		    foreach ($args['options'] as $option => $value) {
				if (empty($args['value']) && empty($option))
					unset($args['default']);
			}
		    foreach ($args['options'] as $option => $value) {
			?>
			<div class="radio">
				<input type="radio" name="<?php
					echo isset($args['name']) ? $args['name'] : ''
				?>" id="lumise-radios-<?php echo (isset($args['name']) ? $args['name'] : '').'-'.$option; ?>" <?php
					if ((empty($args['value']) && isset($args['default']) && $args['default'] == $option) || (isset($args['value']) && $args['value'] == $option))
						echo 'checked="true"';
				?> value="<?php echo $option; ?>">
				<label for="lumise-radios-<?php echo (isset($args['name']) ? $args['name'] : '').'-'.$option; ?>">
					<?php echo $value; ?> <em class="check"></em>
				</label>
			</div>
			<?php
			}
			echo '</div>';
		}else echo 'missing options';
    }


    public function field_checkboxes($args = array()) {

	    if (isset($args['value'])) {
	    	if (is_string($args['value']))
	    		$args['value'] = explode(',', $args['value']);
		}else
			$args['value'] = array();

	    if (isset($args['options'])) {
		    echo '<div class="lumise_checkboxes">';
		    $options = array_replace(array_flip($args['value']), $args['options']);
		    foreach ($options as $option => $value) {
			    if (isset($args['options'][$option])) {
			?>
				<div class="lumise_checkbox sty2 ">
					<input type="checkbox" name="<?php
						echo isset($args['name']) ? $args['name'].'[]' : ''
					?>" class="action_check" value="<?php echo $option; ?>" <?php
						if (in_array($option, $args['value']) || (!isset($args['value']) && $args['default'] == $option))
							echo 'checked="true"';
					?> id="lumise-checkboxes-<?php echo $option; ?>" />
						<label for="lumise-checkboxes-<?php echo $option; ?>">
							<?php echo $value; ?> <em class="check"></em>
						</label>
				</div>
			<?php }} ?>
				<input type="checkbox" name="<?php echo $args['name']; ?>[]" checked="true" style="display:none;" value="" />
			</div>
		<?php }else echo 'missing options';
    }


    public function field_dropbox($args = array()) {
	    if (isset($args['options'])) {
		    echo '<select name="'.(isset($args['name']) ? $args['name'] : '').'" class="'.(isset($args['class']) ? $args['class'] : '').'">';
		    foreach ($args['options'] as $option => $value) {
			    echo '<option'.(((!isset($args['value']) && $args['default'] == $option) || (isset($args['value']) && $args['value'] == $option)) ? ' selected="true"' : '').' value="'.$option.'">'.$value.'</option>';
			}
			echo '</select>';
		}else echo 'missing options';
    }

    public function field_printing($args = array()) {

		$prints = $this->main->views->get_prints();
		$inp_val = json_decode(rawurldecode($args['value']), true);
		
		if (count($prints) > 0) {
			
			echo '<div class="lumise_checkboxes">';	
			
			if (isset($inp_val) && !empty($inp_val) && $inp_val !== null) {
				$keys = array_flip(array_keys($inp_val));
				for ($i = count($prints)-1; $i >= 0; $i--) {
					if (isset($keys['_'.$prints[$i]['id']])) {
						array_splice($prints, $keys['_'.$prints[$i]['id']], 0, array_splice($prints, $i, 1));
					}
				}
			}
			foreach ($prints as $print) {
				$calc = $this->main->lib->dejson($print['calculate']);
		?>
			<div class="lumise_checkbox sty2 ui-sortable-handle" data-type="<?php echo $calc->type; ?>">
				<input type="checkbox" name="helper-<?php 
					echo $args['name']; 
				?>[]" class="action_check" value="<?php echo $print['id']; ?>" <?php
					echo (
						is_array($inp_val) && (
							isset($inp_val[$print['id']]) || 
							isset($inp_val['_'.$print['id']]))
						) ? ' checked' : '';
				?> id="lumise-checkboxes-<?php echo $args['name'] . '-'. $print['id']; ?>">
				<label for="lumise-checkboxes-<?php echo $args['name'] . '-'. $print['id']; ?>">
					<?php echo $print['title']; ?> <em class="check"></em>
				</label>
				<?php
					if (is_object($calc) && isset($calc->type) && $calc->type == 'size') {
					
						$first_obj = array_values((Array)$calc->values);
						
						if (count($first_obj) > 0) {
							echo '<div class="lumise_radios field_children display_inline" data-parent="'.$print['id'].'">';
							$sizes = (Array)$first_obj[0];
							$sizes = array_values($sizes);
							$sizes = array_shift($sizes);
							foreach ($sizes as $key => $val) {
								echo '<div class="radio">
										<input type="radio"'.(
												is_array($inp_val) && 
												((
													isset($inp_val[$print['id']]) &&
													$inp_val[$print['id']] == $key
												) ||
												(
													isset($inp_val['_'.$print['id']]) &&
													$inp_val['_'.$print['id']] == $key
												)
												) ? ' checked' : ''
											).' 
											name="print-sizes-'.$args['name'].'-'.$print['id'].'" 
											id="print-size-'.$print['id'].'-'.$args['name'].'-'.$key.'" 
											value="'.$key.'"
										 /> 
										<label for="print-size-'.$print['id'].'-'.$args['name'].'-'.$key.'">'.
										strtoupper(urldecode($key)).'
										<em class="check"></em></label>
									</div>';
							}
							echo '</div>';
						}
					}
				?>
			</div>
			<?php
			}
			
			echo '</div>';
			
		} else {
			echo '<p>'.
				$this->main->lang('You have not created any prints type yet').
			'</p><input type="hidden" name="'.$args['name'].'[]" />';
		}
		
		echo '<input type="hidden" class="field-value" name="'.$args['name'].'" value="'.$args['value'].'" />';

    }

	public function field_color($args) {
	?>
	<div class="lumise-field-color-wrp">
		<ul class="lumise-field-color<?php echo (isset($args['selection']) && $args['selection'] === false) ? ' unselection' : ''; ?>">
		<?php

			if (!isset($args['value']) || empty($args['value'])) {
				if (isset($args['default']))
					$args['value'] = $args['default'];
				else $args['value'] = '#3fc7ba:#546e7a,#757575,#6d4c41,#f4511e,#fb8c00,#ffb300,#fdd835,#c0cA33,#a0ce4e,#7cb342,#43a047,#00897b,#00acc1,#3fc7ba,#039be5,#3949ab,#5e35b1,#8e24aa,#d81b60,#eeeeee,#3a3a3a';
			}

			$colors = explode(':', $args['value']);
			$value = $colors[0];
			$colors = explode(',', isset($colors[1]) ? $colors[1] : '');

			foreach ($colors as $color) {
				
				$color = explode('@', $color);
				$label = isset($color[1]) ? $color[1] : $color[0];
				
				echo '<li data-label="'.(!empty($label) ? $label : $color[0]).'" data-color="'.strtolower($color[0]).
					'" title="'.(!empty($label) ? str_replace('"', '', urldecode($label)) : strtolower($color[0])).
					'" '.($color[0] == $value ? 'class="choosed"' : '').
					' style="background:'.$color[0].'">'.
					'<i class="fa fa-times" data-color="delete"></i>'.
					'</li>';
			}
		?>
		</ul>
		<input type="hidden" data-el="hide" value="<?php echo isset($args['value']) ? $args['value']: $args['default']; ?>" name="<?php
			echo isset($args['name']) ? $args['name'] : '';
		?>" />
		<button data-func="create-color">
			<?php echo $this->main->lang('Add new color'); ?>
		</button>
		<button data-btn data-func="clear-color">
			<?php echo $this->main->lang('Clear all'); ?>
		</button>
	</div>
	<?php
	}

	public function field_upload($attr = array()){

		if (isset($attr['file']) && $attr['file'] == 'font') {
			
		?>
			<h1 id="lumise-<?php echo $attr['name']; ?>-preview" contenteditable="true" style="display: none;"></h1>
			<div class="img-preview">
				<?php if (!empty($attr['value'])) { ?>
					<input type="hidden" name="old-<?php echo $attr['name']; ?>" value="<?php echo $attr['value'] ?>">
				<?php } ?>
				<input type="file" id="lumise-<?php echo $attr['name']; ?>-file-upload" accept=".<?php echo $attr['file_type']; ?>" data-file-select="font" data-file-preview="#lumise-<?php echo $attr['name']; ?>-preview" data-file-input="#lumise-<?php echo $attr['name']; ?>-input" />

				<input type="hidden" name="<?php
					echo $attr['name'];
				?>" id="lumise-<?php
					echo $attr['name'];
				?>-input" value="<?php
					echo !empty($attr['value']) ? $attr['value'] : '';
				?>" />

				<label for="lumise-<?php echo $attr['name']; ?>-file-upload">
					<i class="fa fa-cloud-upload"></i> <?php echo $this->main->lang('Choose file'); ?> 
					(*.<?php echo $attr['file_type']; ?>)
				</label>
				
				<button data-btn="true" data-file-delete="true"  data-file-preview="#lumise-<?php
					echo $attr['name'];
				?>-preview" data-file-input="#lumise-<?php
					echo $attr['name'];
				?>-input" data-file-thumbn="#lumise-<?php
					echo $attr['name'];
				?>-thumbn">
					<i class="fa fa-trash"></i> <?php echo $this->main->lang('Remove file'); ?>
				</button>
			
			</div>
			<script type="text/javascript">

				<?php if (!empty($attr['value']) && !empty($attr['name'])) {
					echo 'jQuery(document).ready(function() {lumise_font_preview("'.$attr['name'].'", "url('.(!empty($attr['value']) ? $this->main->cfg->upload_url.str_replace(TS, '/', $attr['value']) : '').')", "#lumise-'.$attr['name'].'-preview", "'.$attr['file_type'].'");})';
				} ?>

			</script>
		<?php

		return;

		}
		?>
		
		
		<?php
			if (isset($attr['file']) && $attr['file'] == 'design') {
		?>
			<div class="img-preview">
				<?php if (!empty($attr['value'])) { ?>
					<img src="<?php
					echo isset($attr['thumbn_value']) ? $attr['thumbn_value'] : $this->main->cfg->upload_url.'/'.$attr['value'];
				?>" class="img-upload" id="lumise-<?php echo $attr['name']; ?>-preview" />
					<input type="hidden" id="lumise-<?php echo $attr['name']; ?>-input-old" name="old-<?php echo $attr['name']; ?>" value="<?php echo $attr['value'] ?>">
				<?php }else{ ?>
					<img src="<?php echo $this->main->cfg->assets_url; ?>admin/assets/images/img-none.png" class="img-upload" id="lumise-<?php echo $attr['name']; ?>-preview">
				<?php } ?>
				<input type="file" id="lumise-<?php echo $attr['name']; ?>-file-upload" accept=".json,.lumi,.mytpl" data-file-select="design" data-file-preview="#lumise-<?php echo $attr['name']; ?>-preview" data-file-input="#lumise-<?php echo $attr['name']; ?>-input" />

				<input type="hidden" class="lumise-upload-helper-inp" accept=".json,.lumi,.mytpl" name="<?php
					echo $attr['name'];
				?>" id="lumise-<?php
					echo $attr['name'];
				?>-input" data-file-preview="#lumise-<?php
					echo $attr['name'];
				?>-preview" value="<?php
					echo !empty($attr['value']) ? $attr['value'] : '';
				?>" data-path="<?php echo !empty($attr['path']) ? $attr['path'] : ''; ?>" />
				
				<?php if (isset($attr['thumbn']) && isset($attr['thumbn_value'])) { ?>

					<input type="hidden" name="old-<?php echo $attr['thumbn']; ?>" value="<?php
						echo isset($attr['thumbn_value']) ? $attr['thumbn_value'] : '';
					?>" />
	
				<?php } ?>
			
				<label for="lumise-<?php echo $attr['name']; ?>-file-upload">
					<i class="fa fa-cloud-upload"></i> <?php echo $this->main->lang('Choose a file'); ?>
				</label>
				<button data-btn="true" data-file-delete="true"  data-file-preview="#lumise-<?php
					echo $attr['name'];
				?>-preview" data-file-input="#lumise-<?php
					echo $attr['name'];
				?>-input" data-file-thumbn="#lumise-<?php
					echo $attr['name'];
				?>-thumbn">
					<i class="fa fa-trash"></i> <?php echo $this->main->lang('Remove file'); ?>
				</button>
			</div>
		<?php

			return;

			}
		?>

		<div class="img-preview">
			<?php if (isset($attr['value']) && !empty($attr['value'])) { ?>

				<img src="<?php
					echo isset($attr['thumbn_value']) ?
						$attr['thumbn_value'] : 
						(
							(strpos($attr['value'], '://') === false) ? 
							$this->main->cfg->upload_url.$attr['value'] : 
							$attr['value']
						);
					
				?>" class="img-upload" id="lumise-<?php echo $attr['name']; ?>-preview" />

				<input type="hidden" id="lumise-<?php
				echo $attr['name'];
			?>-input-old" name="old-<?php echo $attr['name']; ?>" value="<?php
					echo !empty($attr['value']) ? $attr['value'] : '';
				?>" />

			<?php } else { ?>
				<img src="<?php echo $this->main->cfg->assets_url; ?>admin/assets/images/img-none.png" class="img-upload" id="lumise-<?php echo $attr['name']; ?>-preview">
			<?php } ?>

			<input type="file" accept="<?php
				echo isset($attr['accept']) ? $attr['accept'] : 'image/png,image/gif,image/jpeg,image/svg+xml';
			?>" class="lumise-file-upload" id="<?php
				echo $attr['name'];
			?>_file_upload" data-file-select="true" data-file-preview="#lumise-<?php
				echo $attr['name'];
			?>-preview" data-file-input="#lumise-<?php
				echo $attr['name'];
			?>-input" <?php
				if (!isset($attr['thumbn_width']) && !isset($attr['thumbn_height']))
					echo 'data-file-thumbn-width="320"';
				else if (isset($attr['thumbn_width']))
					echo 'data-file-thumbn-width="'.$attr['thumbn_width'].'"';
				else if (isset($attr['thumbn_height']))
					echo 'data-file-thumbn-height="'.$attr['thumbn_height'].'"';
			?> />


			<input type="hidden" name="<?php
				echo $attr['name'];
			?>" id="lumise-<?php
				echo $attr['name'];
			?>-input" value="<?php
				echo !empty($attr['value']) ? $attr['value'] : '';

			?>" class="lumise-upload-helper-inp" data-path="<?php echo !empty($attr['path']) ? $attr['path'] : ''; ?>" />

			<?php if (isset($attr['thumbn']) && isset($attr['thumbn_value'])) { ?>

				<input type="hidden" name="old-<?php echo $attr['thumbn']; ?>" value="<?php
					echo isset($attr['thumbn_value']) ? $attr['thumbn_value'] : '';
				?>" />

			<?php } ?>

			<label for="<?php echo $attr['name']; ?>_file_upload">
				<?php echo isset($attr['button_text']) ? $attr['button_text'] : $this->main->lang('Choose a file'); ?>
			</label>
			<button data-btn="true" data-file-delete="true"  data-file-preview="#lumise-<?php
				echo $attr['name'];
			?>-preview" data-file-input="#lumise-<?php
				echo $attr['name'];
			?>-input" data-file-thumbn="#lumise-<?php
				echo $attr['name'];
			?>-thumbn">
				<?php echo $this->main->lang('Remove file'); ?>
			</button>
		</div>

	<?php
	}
	
	public function field_stages($args) {
		
		global $lumise;
		
		$data = $this->dejson($args['value']);
		
		if (isset($data->stages))
			$stages = $data->stages;
		else $stages = $this->dejson($args['value']);
		
		unset($stages->{'colors'});
		
	?>
	<div class="lumise_form_group nomargin">
		<h3><?php echo $lumise->lang('Configure designs'); ?></h3>
		<p><?php echo $lumise->lang('Upload your product images, configure stages, edit zones. You can create new stage, change stage\'s name and arrange stages.'); ?></p>
		<div class="lumise_tabs_wrapper lumise-stages-wrp" id="lumise-stages-wrp" data-id="stages">
			<div class="lumise_tab_nav_wrap">
				<i data-move="left" class="fa fa-chevron-left"></i>
				<div class="lumise_tab_nav_inner">
					<ul class="lumise_tab_nav">
						<?php
						if (count(array_keys((Array)$stages)) === 0) {
							$id = $lumise->generate_id();
							$stages = array();
							$stages[$id] = json_decode('{"edit_zone":{"height":270,"width":170,"left":-1,"top":12.5,"radius":"5"},"url":"products\/basic_tshirt_front.png","source":"raws","overlay":true,"product_width":400,"product_height":475,"template":{},"label":"Start stage"}');
						}		
						foreach ($stages as $key => $stage) {
							
							$label = isset($stage->label) ? rawurldecode($stage->label) : 'Untitled';
						?>
						<li>
							<a href="#lumise-stage-<?php echo $key; ?>" data-label="<?php echo rawurlencode($label); ?>">
								<?php
									if (isset($stage->thumbnail) && !empty($stage->thumbnail)) {
										echo '<span>';
										echo '<img src="'.$this->main->cfg->upload_url.$stage->thumbnail.'" data-url="'.$stage->thumbnail.'" data-func="upload-thumbn">';
										echo '<i data-func="delete-thumbn" class="fa fa-times"></i>';
										echo '</span>';
									}
								?>
								<!--i class="fa fa-image" data-edit="thumbnail" title="<?php echo $lumise->lang('Upload thumbnail'); ?>"></i-->
								<text><?php echo str_replace(array('<', '>'), array('&lt;', '&gt;'), $label); ?></text>
								<svg data-func="remove" height="16px" width="16px" viewBox="-75 -75 370 370">
									<path data-func="remove"  d="M131.804,106.491l75.936-75.936c6.99-6.99,6.99-18.323,0-25.312   c-6.99-6.99-18.322-6.99-25.312,0l-75.937,75.937L30.554,5.242c-6.99-6.99-18.322-6.99-25.312,0c-6.989,6.99-6.989,18.323,0,25.312   l75.937,75.936L5.242,182.427c-6.989,6.99-6.989,18.323,0,25.312c6.99,6.99,18.322,6.99,25.312,0l75.937-75.937l75.937,75.937   c6.989,6.99,18.322,6.99,25.312,0c6.99-6.99,6.99-18.322,0-25.312L131.804,106.491z"></path>
								</svg>
							</a>
						</li>
						<?php } ?>
						<li data-add="tab">
							<a href="#add-stage" title="<?php echo $lumise->lang('Add new stage'); ?>">
								<i data-func="add-stage" class="fa fa-plus"></i>
							</a>
						</li>
					</ul>
				</div>
				<i data-move="right" class="fa fa-chevron-right"></i>
			</div>
			<div class="lumise_tabs">
			<?php
				
				$source = '';
				$overlay = '';
				$i = 0;
				
				foreach ($stages as $stage => $sdata) {
	
					if ($stage != 'colors') {
	
						if (isset($sdata->url)) {
							$url = $sdata->url;
							$source = $sdata->source;
						}else if ($i++ == 0){
							$url = 'products/basic_tshirt_front.png';
							$source = 'raws';
						}else $url = '';
						
						$overlay = isset($sdata->overlay) ? $sdata->overlay : true;
						
						if (isset($sdata->edit_zone) && isset($sdata->url)) {
							$limit = ' style="height: '.$sdata->edit_zone->height.'px;';
							$limit .= 'width: '.$sdata->edit_zone->width.'px;';
							$limit .= 'left: '.($sdata->edit_zone->left+($sdata->product_width/2)-($sdata->edit_zone->width/2)).'px;';
							$limit .= 'top: '.($sdata->edit_zone->top+($sdata->product_height/2)-($sdata->edit_zone->height/2)).'px;';
							if (isset($sdata->edit_zone->radius) && !empty($sdata->edit_zone->radius))
								$limit .= 'border-radius: '.$sdata->edit_zone->radius.'px;';
							$limit .= '"';
						}else $limit = '';
						
						if (isset($sdata->template) && isset($sdata->template->id)) {
							
							$design = $lumise->lib->get_template($sdata->template->id);
							if (
								$this->main->connector->platform == 'php' &&
								(!is_array($design) || !isset($design['id']))
							)
								$design = null;
								
						}else $design = null;
					
				?>
					<div class="lumise_tab_content<?php
						if ($i++ === 0)echo " active";
					?>" id="lumise-stage-<?php echo $stage; ?>" data-stage="<?php echo $stage; ?>">
						<div class="lumise-stage-settings lumise-product-design<?php
							echo (!empty($url) ? ' stage-enabled' : ' stage-disabled'); ?>" id="lumise-product-design-<?php echo $stage; ?>">
							<?php
								$is_mask = 'false';
								if ($overlay == '1')
									$is_mask = 'true';
							?>
							<div class="lumise-stage-body" data-is-mask="<?php echo $is_mask; ?>">
								<div class="lumise_form_content">
									<div class="lumise-toggle">
										<input type="checkbox" name="is_mask" <?php
											echo ($is_mask == 'true' ? 'checked="true"' : '');
										?> />
										<span class="lumise-toggle-label" data-on="Yes" data-off="No"></span>
										<span class="lumise-toggle-handle"></span>
									</div>
									<label data-view="mask-true">
										<?php echo $this->main->lang('Use as a mask layer'); ?>.
										<a href="https://docs.lumise.com/product-mask-image/" target=_blank class="tip">
											<?php echo $this->main->lang('What is this'); ?> 
											<i class="fa fa-question-circle"></i>
											<span>
												<?php echo $this->main->lang('Display the product image as a mask layer to be able to change the color, Click for more detail.'); ?>
											</span>
										</a>
									</label>
								</div>
								<div class="lumise-stage-design-view" <?php
									if (isset($sdata->edit_zone)) {
										echo ' data-info="scale ratio: '.$sdata->edit_zone->width.'x'.$sdata->edit_zone->height.'"';
									}
								?>>
									<img src="<?php 
										if (!empty($url)) {
											echo (
												$source == 'raws' ? 
												$this->main->cfg->assets_url.'raws/' : 
												$this->main->cfg->upload_url
											).$url;
										}
									?>" data-url="<?php echo $url; ?>" data-source="<?php echo $source; ?>" class="lumise-stage-image" data-svg="<?php echo (strpos($url, '.svg') !== false); ?>" />
									<div class="lumise-stage-editzone"<?php echo $limit; ?>>
										<?php if ($this->main->connector->platform == 'php') { ?>
											<div class="editzone-funcs">
												<button data-func="select-design" data-label="<?php echo $this->main->lang('Select Design Template'); ?>">
													<i class="fa fa-plus"></i>
												</button>
												<button data-func="clear-design" <?php if (!isset($design) || $design === null)echo 'style="display:none;"'; ?> data-label="<?php echo $this->main->lang('Clear Design Template'); ?>">
													<i class="fa fa-eraser"></i>
												</button>
												<button data-func="move" data-label="<?php echo $this->main->lang('Drag to move the edit zone'); ?>">
													<i class="fa fa-arrows"></i>
												</button>
											</div>
										<?php
											} else {
												echo '<div class="editzone-gui">';
												echo '<strong>';
												echo '<svg width="100%" height="100%" viewBox="0 -120 1000 300" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><text font-size="120" fill="black" x="80">'.$this->main->lang('Drag to move').'</text><text font-size="80" fill="#555" y="120" x="30%">'.$this->main->lang('Design area').'</text></svg>';
												echo '</strong>';
												echo '</div>';
											}
											
										?>
										<i class="fa fa-expand" data-func="resize" title="<?php 
											echo $this->main->lang('Resize the edit zone'); 
										?>"></i>
										<?php
											
											if ($this->main->connector->platform == 'php') {
												if (isset($design) && $design !== null) {
													echo '<div class="design-template-inner" '.(
														(isset($sdata->edit_zone->radius) && !empty($sdata->edit_zone->radius)) ? 
														'style="border-radius: '.$sdata->edit_zone->radius.'px"' : 
														'' 
													).' data-id="'.$design['id'].'">';
													echo '<img style="'.$sdata->template->css.'" src="'.$design['screenshot'].'">';
													echo '</div>';
												}else{
													echo '<button data-func="select-design" class="design-template-btn">';
													echo '<i class="fa fa-paint-brush"></i> ';
													echo $this->main->lang('Design Template');
													echo '</button>';
												}
											}
											
										?>
										
									</div>
									
									<div class="editzone-ranges">
										<?php if ($this->main->connector->platform == 'php') { ?>
										<div class="edr-row design-scale"<?php if(!isset($design) || $design === null)echo ' style="display: none;"';?>>
											<label><?php echo $this->main->lang('Design scale'); ?>:</label>
											<input type="range" min="10" max="200" value="<?php
												if (isset($sdata->template) && isset($sdata->template->scale))
													echo $sdata->template->scale; 
											?>" />
										</div>
										<?php } ?>
										<div class="edr-row editzone-radius">
											<label><?php echo $this->main->lang('Editzone radius'); ?>:</label>
											<input type="range" min="0" max="500" value="<?php
												if (isset($sdata->edit_zone->radius) && !empty($sdata->edit_zone->radius))
													echo $sdata->edit_zone->radius;
												else echo 0; 
											?>" />
										</div>
										<div class="edr-row" data-row="sizes">
											<label><?php echo $this->main->lang('Size for printing'); ?>:</label>
											<select data-name="sizes">
												<option value=""> === <?php echo $this->main->lang('Select Size'); ?> === </option>
												<option<?php 
													if (isset($sdata->size) && is_object($sdata->size)) 
														echo ' selected'; 
												?> value="custom"><?php echo $this->main->lang('Custom'); ?></option>
											<?php
												foreach ($this->main->cfg->size_default as $s => $v) {
													echo '<option value="'.$v['cm'].'"'.(
														isset($sdata->size) && $sdata->size == $v['cm'] ? ' selected' : ''
														).'>'.$s.'</option>';
												}		
											?></select>
											<a href="#tip" class="tip">
												<i class="fa fa-question-circle"></i>
												<span><?php echo $this->main->lang('Select the size of design area for printing, or you can customize it by your size'); ?></span>
											</a>
										</div>
										<div class="edr-row" <?php
											if (!isset($sdata->size) || !is_object($sdata->size))
												echo 'style="display:none"';	
										?> data-row="values">
											<label><?php echo $this->main->lang('Size values'); ?>:</label>
											<span>
												<input value="<?php 
												echo isset($sdata->size) && isset($sdata->size->width) ? $sdata->size->width : ''; 
												?>" type="text" data-name="width" placeholder="Width" />
												<span class="constrain-aspect-ratio<?php
													if (!isset($sdata->size->contrain) || $sdata->size->contrain === true)
														echo ' active';
												?>" title="<?php echo $this->main->lang('Constrain aspect ratio'); ?>">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="30px" height="30px" viewBox="0 0 950 950" xml:space="preserve"><path d="M226.1,702.799H414.2c11.5,0,20.899-9.299,20.899-20.898V564.4H331.3V597.1H226.1c-66.5,0-120.3-53.9-120.3-120.301v-3.5    c0-66.5,53.9-120.3,120.3-120.3h105.2v32.7h103.8V268c0-11.5-9.3-20.9-20.899-20.9H226.1c-60.4,0-117.2,23.5-159.9,66.2    C23.5,356,0,412.799,0,473.2v3.5C0,537.1,23.5,593.9,66.2,636.6C108.9,679.299,165.7,702.799,226.1,702.799z"></path><path d="M723.899,247.2H531.8c-11.5,0-20.9,9.3-20.9,20.9v117.6H618.7V353h105.199c66.5,0,120.301,53.9,120.301,120.3v3.5    c0,66.5-53.9,120.301-120.301,120.301H618.7V564.4H510.899V682c0,11.5,9.301,20.9,20.9,20.9h192.1c60.4,0,117.2-23.5,159.9-66.201    c42.7-42.699,66.2-99.5,66.2-159.9v-3.5c0-60.399-23.5-117.2-66.2-159.9S784.3,247.2,723.899,247.2z"></path><path d="M331.3,425H300c-27.6,0-50,22.4-50,50c0,27.6,22.4,50,50,50h31.3h103.8H511h107.8h31.3c27.601,0,50-22.4,50-50    c0-27.6-22.399-50-50-50h-31.3h-107.9H435H331.3z"></path></svg>
												</span>
												<input value="<?php 
												echo isset($sdata->size) && isset($sdata->size->height) ? $sdata->size->height : ''; 
												?>" type="text" data-name="height" placeholder="Height" />
											</span>
											<a href="#tip" class="tip">
												<i class="fa fa-question-circle"></i>
												<span><?php echo $this->main->lang('The real size width x height, which will be used for export & printing'); ?></span>
											</a>
										</div>
										<div class="edr-row" <?php
											if (!isset($sdata->size) || !is_object($sdata->size))
												echo 'style="display:none"';	
										?> data-row="unit">
											<label><?php echo $this->main->lang('Size unit'); ?>:</label>
											<select data-name="unit">
												<option <?php
													if (
														isset($sdata->size) && 
														isset($sdata->size->unit) && 
														$sdata->size->unit == 'cm'
													) echo 'selected';
												?> value="cm">Centimet</option>
												<option <?php
													if (
														isset($sdata->size) && 
														isset($sdata->size->unit) && 
														$sdata->size->unit == 'inch'
													) echo 'selected';
												?> value="inch">Inch</option>
												<option <?php
													if (
														isset($sdata->size) && 
														isset($sdata->size->unit) && 
														$sdata->size->unit == 'px'
													) echo 'selected';
												?> value="px">Pixel</option>
											</select>
										</div>
										<div class="edr-row">
											<label><?php echo $this->main->lang('Print orientation'); ?>:</label>
											<select data-name="orientation">
												<option <?php
													if (
														isset($sdata->orientation) && 
														$sdata->orientation == 'portrait'
													) echo 'selected';
												?> value="portrait">Portrait</option>
												<option <?php
													if (
														isset($sdata->orientation) && 
														$sdata->orientation == 'landscape'
													) echo 'selected';
												?> value="landscape">Landscape</option>
											</select>
										</div>
									</div>
										
								</div>
								<div class="lumise-stage-btn">
									<button type="button" class="lumise-button lumise-button-large" data-func="select">
										<i class="fa fa-th"></i>
									<?php echo $this->main->lang('Select product image'); ?>
									</button>
									<button type="button" class="lumise-button lumise-button-large" data-func="reset">
										<i class="fa fa-refresh"></i>
										<?php echo $this->main->lang('Clear'); ?>
									</button>
								</div>
							</div>
						</div>
					</div>
				<?php 
					} 
				}
				?>
			</div>
		</div>
		<textarea style="display: none;" id="lumise-field-stages-inp" class="stages-field" name="<?php echo isset($args['name']) ? $args['name'] : ''; ?>"><?php
			echo isset($args['value']) ? $args['value'] : '';
		?></textarea>
		<div id="lumise-popup" class="lumise_form_group lumise_content">
			<div class="lumise-popup-content">
				<header>
					<h3>
						<span><?php echo $this->main->lang('Select image for product base'); ?></span>
						<button class="lumise-btn" data-act="samples">
							<i class="fa fa-th"></i> 
							<?php echo $this->main->lang('Lumise samples'); ?>
						</button>
						<button class="lumise-btn hidden" data-act="uploaded">
							<i class="fa fa-arrow-left"></i> 
							<?php echo $this->main->lang('My Uploaded'); ?>
						</button>
						<?php
							if (!$lumise->caps('lumise_can_upload')) {
						?>
						<button class="lumise-btn-primary" style="background-color: #bfbfbf !important;cursor: no-drop;" data-act="upload">
							<i class="fa fa-cloud-upload"></i> 
							<?php echo $this->main->lang('Upload new image'); ?>
						</button>
						<small style="color:red"><?php echo $this->main->lang('Sorry, You are not allowed to upload files. Please ask the administrator for permission'); ?></small>
						<?php } else { ?>
						<button class="lumise-btn-primary" data-act="upload">
							<i class="fa fa-cloud-upload"></i> 
							<?php echo $this->main->lang('Upload new image'); ?>
						</button>
						<small><?php echo $this->main->lang('Accept file type: .jpg, .png, .svg (1KB -> 5MB)'); ?></small>
						<input type="file" class="hidden" id="lumise-product-upload-input" />
						<?php } ?>
					</h3>
					<span class="close-pop"><svg enable-background="new 0 0 32 32" height="32px" id="close" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M17.459,16.014l8.239-8.194c0.395-0.391,0.395-1.024,0-1.414c-0.394-0.391-1.034-0.391-1.428,0  l-8.232,8.187L7.73,6.284c-0.394-0.395-1.034-0.395-1.428,0c-0.394,0.396-0.394,1.037,0,1.432l8.302,8.303l-8.332,8.286  c-0.394,0.391-0.394,1.024,0,1.414c0.394,0.391,1.034,0.391,1.428,0l8.325-8.279l8.275,8.276c0.394,0.395,1.034,0.395,1.428,0  c0.394-0.396,0.394-1.037,0-1.432L17.459,16.014z" fill="#121313" id="Close"></path><g></g><g></g><g></g><g></g><g></g><g></g></svg></span>
				</header>
				<div id="lumise-base-images">
					<p class="lumise-notice"><?php 
						echo $this->main->lang('Notice: If you want the upload product image have the ability to change color on the editor.'); 
						echo ' <a href="https://docs.lumise.com/product-mask-image/" target="_blank">';
						echo $this->main->lang('Read more Mask Image');
						echo ' <i class="fa fa-arrow-circle-o-right"></i>';
						echo '</a>';
					?></p>
					<ul class="lumise-stagle-list-base" id="lumise-uploaded-bases">
						<li data-act="load-more" data-start="0"><?php echo $this->main->lang('Load more'); ?></li>
					</ul>
					<ul class="lumise-stagle-list-base hidden" id="lumise-sample-bases">
						<?php
							foreach($this->main->cfg->base_default as $item) {
								echo '<li><img data-act="base" data-src="products/'.$item.'" data-source="raws" src="'.$this->main->cfg->assets_url.'raws/products/'.$item.'" />';
								echo '<span>'.str_replace(array('_', '.png'), array(' ', ''), $item).'</span>';
								echo '</li>';
							}
						?>
					</ul>
				</div>
			</div>
		</div>
		<input type="file" id="lumise-stages-upload-helper" style="display: none;" />
	</div>
	<script type="text/javascript">
		
		var lumise_upload_url = '<?php echo $this->main->cfg->upload_url; ?>',
			lumise_assets_url = '<?php echo $this->main->cfg->assets_url; ?>';
				
		document.lumiseconfig = {
			main: 'product',
			ce: '<?php echo $this->main->lang('The color has exist, please select another'); ?>',
			hs: '<?php echo $this->main->lang('No stages configured, please select image with Edit Area for a minimum of one stage in tab Product Design'); ?>',
			sm: '<?php echo $this->main->lang('The size of image is too small (50KB - 10000KB)'); ?>',
			lg: '<?php echo $this->main->lang('The size of image is too large (50KB - 10000KB)'); ?>',
			tp: '<?php echo $this->main->lang('Only accept image type *.jpg, *.png or *.svg'); ?>',
			ru: '<?php echo $this->main->lang('Your upload is '); ?>',
			bases: <?php echo json_encode($this->main->cfg->base_default); ?>,
			max_stages: <?php echo $this->main->cfg->max_stages; ?>,
			noc : '<?php echo $this->main->lang('Error, you can not create multiple attributes of this type'); ?>'
		};
	</script>
	<?php
	}
	
	
	public function field_variations($args) {
	?>
		<div id="lumise-variations">
			<div class="lumise-att-layout">
				<div class="lumise-att-layout-default hidden">
					<strong>Default Form Values:</strong>
					<div class="att-layout-conditions"></div>
				</div>
				<div class="lumise-att-layout-create">
					<button class="lumise-button" style="display: none;" data-act="add_variation">
						<i class="fa fa-plus" data-act="add_variation"></i> 
						<?php echo $this->main->lang('Add new variation'); ?>
					</button>
					<a href="#close" style="display: none;" data-act="close"><?php echo $this->main->lang('Close'); ?></a>
					<a data-act="sp" style="display: none;">/</a>
					<a href="#expand" style="display: none;" data-act="expand"><?php echo $this->main->lang('Expand'); ?></a>
					<p data-view="notice">
						<?php echo $this->main->lang('Before you can add a variation you need to add some variation attributes on the Attributes tab.'); ?> <a href="https://docs.lumise.com/backend-management/product-base/variables/?utm_source=clients&amp;utm_medium=links&amp;utm_campaign=client-site&amp;utm_term=attributes&amp;utm_content=<?php echo $this->main->connector->platform; ?>" target="_blank"><?php echo $this->main->lang('Learn more'); ?> &rarr;</a>
					</p>
				</div>
				<div id="lumise-field-variations-items" class="lumise-field-layout-items"></div>
				<div class="lumise-att-layout-tmpl hidden">
					<div class="lumise-att-layout-item">
						<div class="att-layout-headitem" data-act="toggle">
							<div class="att-layout-conditions">
								<strong data-act="toggle">#1</strong>
							</div>
							<div class="att-layout-funcs">
								<a title="Arrange variables" href="#arrange" data-act="arrange">
									<i class="fa fa-bars" data-act="arrange"></i>
								</a>
								<a title="Delete variable" href="#delete" data-act="delete">
									<i class="fa fa-trash" data-act="delete"></i>
								</a>
								<a title="Expand/close" href="#toggle" data-act="toggle">
									<i class="fa fa-caret-down" data-act="toggle"></i>
								</a>
							</div>
						</div>
						<div class="att-layout-body">
							<div class="att-layout-body-field third-left">
								<label><?php echo $this->main->lang('Regular price'); ?></label>
								<input type="text" data-name="price" placeholder="Variation price (required)" />
							</div>
							<div class="att-layout-body-field third-midle">
								<label><?php echo $this->main->lang('Min Quantity'); ?></label>
								<input data-name="min-qty" type="text" />
							</div>
							<div class="att-layout-body-field third-right">
								<label><?php echo $this->main->lang('Max Quantity'); ?></label>
								<input data-name="max-qty" type="text" />
							</div>
							<div class="att-layout-body-field full">
								<label><?php echo $this->main->lang('Description'); ?></label>
								<textarea data-name="description"></textarea>
							</div>
							<div class="att-layout-body-field full pdtop">
								<label><?php echo $this->main->lang('Configure printing techniques'); ?>:</label>
								<div class="lumise-toggle">
									<input type="checkbox" data-name="cfgprinting" data-cfgprinting="true" value="1">
									<span class="lumise-toggle-label" data-on="Yes" data-off="No"></span>
									<span class="lumise-toggle-handle"></span>
								</div>
								<span class="tip">
									<i class="fa fa-question-circle"></i>
									<span><?php echo $this->main->lang('You can configure the printing to change the pricing for this variable'); ?></span>
								</span>
								<div class="att-layout-cfgprinting" style="display: none;"></div>
							</div>
							<div class="att-layout-body-field full pdtop">
								<label><?php echo $this->main->lang('Custom designs configuration'); ?>:</label>
								<div class="lumise-toggle">
									<input type="checkbox" data-name="cfgstages" data-cfgstages="true" value="1">
									<span class="lumise-toggle-label" data-on="Yes" data-off="No"></span>
									<span class="lumise-toggle-handle"></span>
								</div>
								<span class="tip">
									<i class="fa fa-question-circle"></i>
									<span><?php echo $this->main->lang('You can configure product images, edit zones and stages for this variable'); ?></span>
								</span>
								<div class="att-layout-cfgstages" style="display: none;"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<textarea style="display: none;" id="lumise-field-variations-inp" class="stages-field" name="<?php echo isset($args['name']) ? $args['name'] : ''; ?>"><?php
			echo isset($args['value']) ? $args['value'] : '';
		?></textarea>
	<?php
	}
	
	
	public function field_shape($args) {
	?><div id="lumise_shape_preview"></div><br />
		<textarea name="<?php echo isset($args['name']) ? $args['name'] : ''; ?>" id="lumise_shape_content"><?php echo !empty($args['value']) ? $args['value'] : '&lt;svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0,0,100,100"&gt;&lt;polygon points="50 0, 0 100, 100 100"&gt;&lt;/polygon&gt;&lt;/svg&gt;' ?></textarea>
		<script type="text/javascript">
			window.onload = function() {

				jQuery('#lumise_shape_content').on('input', function(e) {
					jQuery('#lumise_shape_preview').html(this.value);
				}).trigger('input');

			};
		</script>
	<?php
	}

	public function field_print($args) {
		
		global $lumise;
		
		$printing_types = $args['prints_type'];
		$prices = isset($args['value'])? $this->dejson($args['value']) : json_decode('{"type":"multi", "multi" : "true"}');

		$print_type = isset($prices->type)? $prices->type : 'multi';

		if (isset($printing_types[$print_type]) && isset($prices->values)) {
        	$printing_types[$print_type]['values'] = $prices->values;
        }
        
		?>
		<div data-view="multi">
			<div class="lumise-toggle">
				<input type="checkbox" data-func="multi" <?php echo ((isset($prices->multi) && $prices->multi) ? 'checked' : ''); ?> value="1">
				<span class="lumise-toggle-label" data-on="Yes" data-off="No"></span>
				<span class="lumise-toggle-handle"></span>
			</div>
			<em class="notice"><?php echo $this->main->lang('Allow setup price for each stage?'); ?></em>
		</div>
		<?php foreach ($printing_types as $type => $calcs) { ?>
		<div class="lumise_radios">
			<div class="radio">
				<input type="radio" data-func="type" name="lumise-printing-<?php echo $args['name']; ?>" id="lumise-radio-<?php echo $type; ?>" value="<?php echo $type; ?>" <?php if($type == $print_type) echo 'checked'; ?>>
				<label for="lumise-radio-<?php echo $type; ?>">
					<?php echo $calcs['label']; ?>
					<div class="check"></div>
				</label>
				<em class="notice">
					<?php echo $calcs['desc']; ?>
				</em>
			</div>
            <div class="lumise_radio_content" data-type="<?php echo $type; ?>"></div>
		</div>
		<?php } ?>
		<input type="hidden" name="<?php echo $args['name']; ?>" data-func="data-saved" value="<?php echo isset($args['value']) ? $args['value'] : ''; ?>" />
		<p data-view="multi"></p>
		<?php echo $this->main->lang('If you need to understand more about the printing cost calculator'); ?>. <a href="https://docs.lumise.com/printing-cost-calculator/?utm_source=clients&utm_medium=links&utm_campaign=client-site&utm_term=attributes&utm_content=<?php echo $this->main->connector->platform; ?>" target=_blank><?php echo $this->main->lang('Click for more details'); ?></a>
		<script>
			document.lumiseconfig = {
				main: 'printing',
				ops: {
					data: <?php echo json_encode( (object) $printing_types ); ?>,
			   		multi: <?php echo (isset($printing_types['multi_sides']) && $printing_types['multi_sides'] == 1)? 'true' : 'false'; ?>,
			   		show_detail: '<?php echo isset($prices->show_detail) ? $prices->show_detail : ''; ?>',
			   		current_type: '<?php echo ($type ? $type : 'multi'); ?>',
			   		langs: {
			    		aqr: '<?php echo $this->main->lang('Add Quantity Range'); ?>',
			    		qr: '<?php echo $this->main->lang('Quantity Range'); ?>',
			    		nd: '<?php echo $this->main->lang('You can not remove all items, must have at least one option for printing method.'); ?>'
					},
					max_stages: <?php echo $this->main->cfg->max_stages; ?>
				}
			}
		</script>
		<?php
	}

	public function field_tabs($args) {

		if (!isset($args['tabs'])) {
			echo 'Missing option tabs';
			return;
		}
		
		if(is_array($args['value']) && !count($args['value']))
			$args['value'] = $args['default'];
			
		if (is_string($args['value']))
			$value = @json_decode($args['value']);
		else $value = $args['value'];

		if ($value === null)
			$value = array();

		$tabs = array();

		for ($i=0; $i<$args['tabs']; $i++) {
			$tabs['Tab '.($i+1)] = array(
				array(
					'type' => 'input',
					'name' => $args['name'].'['.$i.'][title]',
					'label' => $this->main->lang('Title'),
					'value' => isset($value[$i]) ? $value[$i]->title : ''
				),
				array(
					'type' => 'text',
					'name' => $args['name'].'['.$i.'][content]',
					'label' => $this->main->lang('Content'),
					'value' => isset($value[$i]) ? stripslashes($value[$i]->content) : ''
				),
			);
		}

		$this->tabs_render(array(
			'tabs' => $tabs
		));

	}

	public function field_google_fonts($args) {
	?>
	<div class="lumise-field-google_fonts">
		<ul>
			<?php
				
				$fonts = json_decode(htmlspecialchars_decode(trim($args['value'])), true);
				
				if (is_array($fonts) && count($fonts) > 0) {
					foreach ($fonts as $name => $font) {
						
						$txt = str_replace(' ', '+', urldecode($name)).':'.$font[1];
						echo '<li data-n='.$name.' data-f="'.$font[0].'" data-s="'.$font[1].'">';
						echo '<link rel="stylesheet" href="//fonts.googleapis.com/css?family='.$txt.'" />';
						echo '<font style="font-family: '.urldecode($name).';">'.urldecode($name).'</font>';
						echo '<delete data-act="delete">'.$this->main->lang('Delete').'</delete>';
						echo '</li>';
					} 
				} else {
					echo '<p class="lumise-notice">'.$this->main->lang('No items found').'</p>';
				}
			?>
		</ul>
		<p>
			<button data-btn="primary" data-act="add">
				<i class="fa fa-plus"></i> <?php echo $this->main->lang('Add new google font'); ?>
			</button>
		</p>
		<textarea data-func="value" style="display: none;" name="<?php echo isset($args['name']) ? $args['name'] : ''; ?>"><?php 
			echo isset($args['value']) ? $args['value'] : ''; 
		?></textarea>
	</div>
	<?php
	}
	
	public function field_attributes($args) {
	?>
	<div class="lumise_form_content">
		<div class="lumise-att-layout">
			<div class="lumise-att-layout-create">
				<button class="lumise-button" data-act="add_attribute">
					<i class="fa fa-plus" data-act="add_attribute"></i> 
					<?php echo $this->main->lang('Add new attribute'); ?>
				</button>
				<a href="#close" data-act="close"><?php echo $this->main->lang('Close'); ?></a>
				<a>/</a>
				<a href="#expand" data-act="expand"><?php echo $this->main->lang('Expand'); ?></a>
			</div>
			<div id="lumise-field-attributes-items" class="lumise-field-layout-items"><?php

				$attrs = $this->dejson($args['value']);

				
			?></div>
			<div class="lumise-att-layout-tmpl hidden">
				<div class="lumise-att-layout-item">
					<div class="att-layout-headitem" data-act="toggle">
						<strong data-name=""></strong>
						<div class="att-layout-funcs">
							<a title="Arrange variables" href="#arrange" data-act="arrange">
								<i class="fa fa-bars" data-act="arrange"></i>
							</a>
							<a title="Delete variable" href="#delete" data-act="delete">
								<i class="fa fa-trash" data-act="delete"></i>
							</a>
							<a title="Expand/close" data-act="toggle" href="#toggle">
								<i class="fa fa-caret-up" data-act="toggle"></i>
							</a>
						</div>
					</div>
					<div class="att-layout-body">
						<div class="att-layout-body-field one-third">
							<label><?php echo $this->main->lang('Name'); ?></label>
							<input type="text" data-name="name" />
							<p data-field="type">
								<select data-name="type">
									<option value=""> === <?php echo $this->main->lang('Select layout render'); ?> === </option>
									<?php
										$values_render = array();
										foreach ($this->main->cfg->product_attributes as $name => $data) {
											if (!isset($data['hidden']) || $data['hidden'] !== true) {
												echo '<option value="'.$name.'"'.(isset($data['unique']) && $data['unique'] === true ? ' data-unique="true"' : '').(isset($data['use_variation']) && $data['use_variation'] === true ? ' data-use-variation="true"' : '').'>'.$data['label'].'</option>';
											}
											if (isset($data['values'])) {
												$values_render[$name] = trim($data['values']);
											}
										}
									?>
								</select> 
								&nbsp; 
								<span class="tip">
									<i class="fa fa-question-circle"></i>
									<span>
										<?php echo $this->main->lang('Select the layout to display this attribute on the editor. You can be personalized it by built addons'); ?>
									</span>
								</span>
							</p>
							<p data-field="use_variation">
								<input id="" data-name="use_variation" type="checkbox" />
								<label for=""><?php echo $this->main->lang('Used for variations'); ?></label>
							</p>
						</div>
						<div class="att-layout-body-field two-third" data-field="values"></div>
					</div>
				</div>
			</div>
			<textarea data-func="value" id="lumise-field-attributes-inp"  style="display: none;" name="<?php echo isset($args['name']) ? $args['name'] : ''; ?>"><?php echo isset($args['value']) ? $args['value'] : ''; ?></textarea>
			<script type="text/javascript">window.lumise_attribute_values_render = <?php 
				
				$values_render['_values'] = <<<EOF
		
					var el = $('<label>{$this->main->lang('Value(s)')}&nbsp;'+
						'<span class="tip">'+
							'<i class="fa fa-question-circle"></i>'+
							'<span>{$this->main->lang('Enter some text, or some attributes by break line separating values.')}</span>'+
						'</span>'+
					'</label>'+
					'<textarea data-name="values" placeholder="value_1 | {$this->main->lang('Label (option)')}&#10;value_2 | {$this->main->lang('Label (option)')}&#10;value_3 | {$this->main->lang('Label (option)')}">'+(values !== undefined ? values : '')+'</textarea>');
					wrp.html('').append(el);
			
EOF;
				$values_render['_values'] = trim($values_render['_values']);
				echo json_encode($values_render); 
				
			?></script>
		</div>
	</div>
	<?php
	}
		
	public function field_template($args) {
		
		if (isset($args['value']) && !empty($args['value'])) {
			
			$db = $this->main->get_db();
			$db->where ('id', $args['value']);
			$template = $db->getOne ('templates');
			
		}
		
	?><div id="lumise_template"><?php
		if (isset($template['screenshot'])) {
			echo '<img src="'.$template['screenshot'].'" style="max-width: 250px;" /><br><a class="button" href="#delete"><i class="fa fa-times"></i></a>';
		}
	?></div>
		<button data-btn="" id="lumise_template_btn" style="margin-left: 0px;">
			<i class="fa fa-th"></i>
			<?php echo $this->main->lang('Select template'); ?>
		</button>
		<br />
		<input type="hidden" name="<?php echo isset($args['name']) ? $args['name'] : ''; ?>" id="lumise_template_inp" value="<?php 
			echo !empty($args['value']) ? $args['value'] : '';
		?>" />
		<?php if (!empty($args['value'])) { ?>
			<input type="hidden" name="old-<?php echo $args['name']; ?>" value="<?php echo $args['value'] ?>">
			<input type="hidden" name="old-<?php echo $attr['thumbn']; ?>" value="<?php
				echo isset($attr['thumbn_value']) ? $attr['thumbn_value'] : '';
			?>" />
		<?php } ?>
	<?php
	}
	
	public function order_statuses($current = '', $submit = false){
		
		global $lumise;
		
		$statuses = $lumise->connector->statuses();
		
		$current
	?>
	<select id="lumise_order_statuses" class="lumise_order_statuses" name="order_status">
        <?php
            foreach ($statuses as $key => $value) {
            ?>
            <option value="<?php echo $key;?>"<?php echo ($current == $key)? ' selected="selected"' : '';?>><?php echo $value;?></option>
            <?php
            }
        ?>
    </select>
	<?php
	if($submit):
	?>
	<input class="lumise_submit" type="submit" name="submit" value="<?php echo $this->main->lang('Change'); ?>">
	<?php
	endif;
	}

}
