<?php
    $form_data = array(
        "wishid" => "",
        "qty" => "",
        "size" => "",
        "base_id" => "",
        "temp_id" => ""
    );
?>
<form action="https://arteno6.anshuwap.com/Front/movecart/" method="post">
    <?php foreach($form_data as $key => $val): ?>
        <input type="text" name="<?= $key ?>" value="<?= $val ?>" />
    <?php endforeach; ?>
    <input type="submit" value=1>
</form>