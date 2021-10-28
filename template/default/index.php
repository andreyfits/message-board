<?php
require_once "header.tpl.php";
require_once "menu.tpl.php";
?>
    <div id="center">
        <div id="side_bar">
            <?php require_once "sideBar.tpl.php"; ?>
        </div>
        <div id="content">
            <?= $content ?>
        </div>
        <div style="clear:both;"></div>
    </div>

<?php require_once "footer.tpl.php"; ?>
