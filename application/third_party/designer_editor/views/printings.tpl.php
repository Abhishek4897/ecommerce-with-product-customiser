<?php
    global $lumise;
    $this_main = $lumise;
?>
<div class="lumise-prints lumise-cart-field">
    <div class="lumise-add-cart-heading">
        <?php echo $this_main->lang('Print Technologies'); ?>
    </div>
	<div class="lumise_radios lumise_form_content">
        <?php
        $rules = array();
        // $items = $this->get_prints();
        $items = $this_main->views->get_prints();
        $default = $i = 0;
        if(count($items) >0){

            foreach($items as $print):
                if($i == 0)
                    $default = $print['id'];
                $rules[$print['id']] = array(
                    'calc' => json_decode($print['calculate']),
                    'type' => $print['type']
                );

            ?>
        <div class="lumise-radio">
            <input type="radio" name="printing" value="<?php echo $print['id'];?>" id="lumise-print-<?php echo $print['id'];?>"/>
            <label for="lumise-print-<?php echo $print['id'];?>">
            <?php echo $print['title'];?>
            <div class="check"></div>
            </label>
            <em class="lumise-printing-desc">
                <?php echo $print['description'];?>
            </em>
        </div>

            <?php
            $i++;
            endforeach;

        }
        else {
			echo $this_main->lang('This product do not have printing options.');
        }
        ?>
	</div>
</div>