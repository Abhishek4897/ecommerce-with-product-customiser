<?php
    // include (THEME_PATH.'core/index.php');
    if(isset($_SESSION['designer_id'])) {
        include ('designer_editor_tool.php');
    } else {
        redirect(base_url());
    }
?>