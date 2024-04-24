<?php
session_start();
session_regenerate_id(TRUE);
require_once('./_config/sqlConfig.php');
include_once('./config_file_path.php');

if (isset($_POST['login_submit'])) {

    if (!empty($_POST['user_rml_id']) && !empty($_POST['password'])) {
        $v_user_rml_id = trim($_POST['user_rml_id']);
        $v_password   = trim($_POST['password']);
        $md5Password  = md5($v_password);

        $sql = "SELECT * FROM tbl_users WHERE emp_id = '" . $v_user_rml_id . "' and password = '" . $md5Password . "'";
        $rs = mysqli_query($conn, $sql);
        $getNumRows = mysqli_num_rows($rs);

        if ($getNumRows == 1) {
            $getUserRow = mysqli_fetch_assoc($rs);
            unset($getUserRow['password']);

            $_SESSION['USER_INFO'] = $getUserRow;
            $_SESSION['basePath']  = $basePath;

            // For Separation Dashbord
            $USER_ROLE = getUserAccessRoleByID($_SESSION['USER_INFO']['user_role_id']);
            // echo $USER_ROLE;
            // die();
            // if ($USER_ROLE == "IT") {
            // 	header('location:dashboard_it.php');
            // } else if ($USER_ROLE == "ADM") {
            // 	header('location:dashboard.php');
            // } else if ($USER_ROLE == "ZH") {
            // 	header('location:dashboard_zh.php');
            // } else if ($USER_ROLE == "PH") {
            // 	header('location:dashboard_ph.php');
            // } else if ($USER_ROLE == "BH") {
            // 	header('location:dashboard_bh.php');
            // } else {
            // 	header('location:dashboard.php');
            // }
            header('location:home/dashboard.php');
            // For Separation Dashbord End
            exit;
        } else {
            $errorMsg = "Wrong EMP-ID or password";
        }
    }
}

if (isset($_GET['logout_hr']) && $_GET['logout_hr'] == true) {
    $basePath    = $_SESSION['basePath'];
    $rs_img_path = $_SESSION['rs_img_path'];
    session_start();
    session_unset();
    session_destroy();
    session_write_close();
    setcookie(session_name(), '', 0, '/');
    session_regenerate_id(true);
    header("location:" . $basePath . "/index.php");
    exit;
}

?>




<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <!-- Title -->
    <title>SALES APPS | RML </title>
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png">

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="">

    <meta name="keywords" content="admin, admin dashboard, admin template, bootstrap, bootstrap 5, bootstrap 5 admin template, fitness, fitness admin, modern, responsive admin dashboard, codeigniter dashboard, sass, ui kit, web app">
    <meta name="description" content="Discover Gymove, the ultimate fitness solution that is designed to help you achieve a healthier lifestyle with its cutting-edge features and personalized programs. Gymove is a fully mobile-responsive admin dashboard template that provides the perfect blend of exercise, nutrition, and motivation. Begin your fitness journey today with Gymove and visit DexignZone for more information.">

    <meta property="og:title" content="Gymove  - CodeIgniter Fitness Admin Dashboard Template">
    <meta property="og:description" content="Discover Gymove, the ultimate fitness solution that is designed to help you achieve a healthier lifestyle with its cutting-edge features and personalized programs. Gymove is a fully mobile-responsive admin dashboard template that provides the perfect blend of exercise, nutrition, and motivation. Begin your fitness journey today with Gymove and visit DexignZone for more information.">
    <meta property="og:image" content="https://gymove.dexignzone.com/codeigniter/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <link href="assets/vendor/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <img src="assets/images/logo-img.png" width="200" alt="">

                                    </div>
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                                        <div class="form-group">
                                            <label for="inputEmailAddress" class="form-label">USER RML-ID :</label>
                                            <input type="text" name="user_rml_id" class="form-control rounded-5" id="inputEmailAddress" autocomplete="off" placeholder="EX : RML-01260">
                                            <!-- <label class="mb-1 form-label"> USER RML-ID</label>
                                            <input type="email" class="form-control" value="hello@example.com"> -->
                                        </div>
                                        <div class="mb-4 position-relative">
                                            <label class="mb-1 form-label">Password</label>
                                            <input type="password" placeholder="Enter Your Password" id="dz-password" name="password" class="form-control rounded-5">
                                            <span class="show-pass eye">
                                                <i class="fa fa-eye-slash"></i>
                                                <i class="fa fa-eye"></i>
                                            </span>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="login_submit" class="btn btn-primary light btn-block">Sign Me In</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
	Scripts
***********************************-->
    <!-- Required vendors -->
    <script src="assets/vendor/global/global.min.js"></script>
    <script src="assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/js/deznav-init.js"></script>
    <script src="assets/js/custom.min.js"></script>
</body>

</html>