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
            if ($USER_ROLE == "SC") {
                header('location:home/dashboard_sc.php');
            } else if ($USER_ROLE == "IT") {
                header('location:home/dashboard_it.php');
            } else if ($USER_ROLE == "ZH") {
                header('location:home/dashboard_zh.php');
            } else if ($USER_ROLE == "TT") {
                header('location:home/dashboard_tt.php');
            } else if ($USER_ROLE == "AH") {
                header('location:home/dashboard_ah.php');
            } else if ($USER_ROLE == "ADM") {
                header('location:home/dashboard_adm.php');
            } else if ($USER_ROLE == "AUDIT") {
                header('location:dashboard_audit.php');
            } else if ($USER_ROLE == "SERVICE") {
                header('location:home/dashboard_service.php');
            } else if ($USER_ROLE == "SEIZED") {
                header('location:dashboard_seized.php');
            } else if ($USER_ROLE == "RMWL") {
                header('location:home/dashboard_rmwl.php');
            } else if ($USER_ROLE == "CALL SERVICE") {
                header('location:home/dashboard_service.php');
            } else if ($USER_ROLE == "Accounts") {
                header('location:home/dashboard_accounts.php');
            } else if ($USER_ROLE == "CCD_CALL") {
                header('location:home/dashboard_ccd_call.php');
            } else if ($USER_ROLE == "SALE") {
                header('location:home/dashboard_sale.php');
            } else {
                header('location:dashboard.php');
            }
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



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="expires" content="0">
    <title>COLLECTION-APPS| RML</title>
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png">
    <!--plugins-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet">
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet">
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet">
    <script src="assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="../../../css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
</head>

<body class="bg-login">
    <!--wrapper-->
    <div class="wrapper">
        <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col mx-auto">
                        <div class="card rounded-4">
                            <div class="card-body">
                                <div class="border p-4 rounded-4">
                                    <div class="text-center mb-5">
                                        <img src="assets/images/logo-img.png" width="200" alt="">
                                        <h5 class="mt-3 mb-0"><u> COLLECTION - APPS </u></h5>

                                    </div>

                                    <div class="form-body">
                                        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="row g-3">
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">USER RML-ID :</label>
                                                <input type="text" name="user_rml_id" class="form-control rounded-5" id="inputEmailAddress" autocomplete="off" placeholder="">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">PASSWORD : </label>

                                                <input type="password" name="password" class="form-control rounded-5" id="inputChoosePassword" autocomplete="off" placeholder="">
                                            </div>


                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" name="login_submit" class="btn btn-gradient-info rounded-5">
                                                        <i class="bx bxs-lock-open"></i>Sign in
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-12 text-center">
                                                <p class="mb-0">New on our platform? Contract With <strong><u>RML IT & ERP</u></strong>.</p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
    <!--end wrapper-->
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <!--Password show & hide js -->
    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bx-hide");
                    $('#show_hide_password i').removeClass("bx-show");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bx-hide");
                    $('#show_hide_password i').addClass("bx-show");
                }
            });
        });
    </script>
    <!--app JS-->
    <script src="assets/js/app.js"></script>
</body>

</html>