<!doctype html>
<html lang="en" class="color-sidebar sidebarcolor4  headercolor8">

<head>
    <title>SALES-APPS | RML</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="expires" content="0">

    <!--favicon-->
    <link rel="icon" href="<?php echo $basePath ?>/assets/images/favicon-32x32.png" type="image/png">
    <!--plugins-->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $basePath ?>/assets/images/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="<?php echo $basePath ?>/assets/vendor/chartist/css/chartist.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $basePath ?>/assets/vendor/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $basePath ?>/assets/vendor/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $basePath ?>/assets/vendor/bootstrap-datepicker-master/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $basePath ?>/assets/css/style.css" rel="stylesheet" type="text/css" />

    <!-- loader-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.8/sweetalert2.min.css" integrity="sha512-y4S4cBeErz9ykN3iwUC4kmP/Ca+zd8n8FDzlVbq5Nr73gn1VBXZhpriQ7avR+8fQLpyq4izWm0b8s6q4Vedb9w==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <?php
    if (isset($dynamic_link_css) && count($dynamic_link_css) > 0) {
        foreach ($dynamic_link_css as $key => $linkCss) {
            echo "<link rel='stylesheet' type='text/css' href='$linkCss'>";
        }
    }
    ?>
    <script src="<?php echo $basePath ?>/assets/js/jquery.min.js"></script>
</head>