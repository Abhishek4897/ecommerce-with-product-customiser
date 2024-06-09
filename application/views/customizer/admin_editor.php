<?php
    // include (THEME_PATH.'core/index.php');
    if(isset($_SESSION['admin_id'])) {
        include ('admin_editor_tool.php');
    } else {
        redirect(base_url());
    }
?>