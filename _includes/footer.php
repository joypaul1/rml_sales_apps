
<!--plugins-->
<script src="<?php echo $basePath ?>/assets/vendor/global/global.min.js"></script>
<script src="<?php echo $basePath ?>/assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="<?php echo $basePath ?>/assets/vendor/chart-js/chart.bundle.min.js"></script>
<script src="<?php echo $basePath ?>/assets/vendor/owl-carousel/owl.carousel.js"></script>
<script src="<?php echo $basePath ?>/assets/vendor/peity/jquery.peity.min.js"></script>
<script src="<?php echo $basePath ?>/assets/vendor/apexchart/apexchart.js"></script>
<script src="<?php echo $basePath ?>/assets/js/dashboard/dashboard-1.js"></script>
<script src="<?php echo $basePath ?>/assets/js/custom.min.js"></script>
<script src="<?php echo $basePath ?>/assets/js/deznav-init.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.8/sweetalert2.min.js" integrity="sha512-7x7HoEikRZhV0FAORWP+hrUzl75JW/uLHBbg2kHnPdFmScpIeHY0ieUVSacjusrKrlA/RsA2tDOBvisFmKc3xw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--app JS-->

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script src="<?php echo $basePath ?>/assets/js/app.js"></script>
<?php if (isset($dynamic_link_js) && count($dynamic_link_js) > 0) {
    foreach ($dynamic_link_js as $key => $linkJs) {
        echo "<script src='$linkJs'></script>";
    }
} ?>

<?php
if (!empty($_SESSION['noti_message'])) {
    if ($_SESSION['noti_message']['status'] == 'false') {
        echo "<script>toastr.warning('{$_SESSION['noti_message']['text']}');</script>";
    }
    if ($_SESSION['noti_message']['status'] == 'true') {
        echo "<script>toastr.success('{$_SESSION['noti_message']['text']}');</script>";
    }
    unset($_SESSION['noti_message']);
}
?>
</body>

</html>