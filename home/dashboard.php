<?PHP include_once('../_helper/com_conn.php') ?>
<!--********* Content body start ************-->
<div class="content-body default-height">
    <div class="container-fluid">
        <!-- row -->
        <?php if ($_SESSION['SALES_USER_INFO']['user_role_id'] == 2) {
            include_once('dashboard_adm.php');
        }else if($_SESSION['SALES_USER_INFO']['user_role_id'] == 3){
            include_once('dashboard_ph.php');
        }else if($_SESSION['SALES_USER_INFO']['user_role_id'] == 4){
            include_once('dashboard_zh.php');

        } ?>
    </div>
</div>
<!--********** Content body end ************-->

<?php
include_once('../_includes/footer_info.php');
include_once('../_includes/footer.php');
?>
<!--********** Main wrapper end **********-->