<?php

include_once('../../_helper/2step_com_conn.php');
include_once('../../_config/sqlConfig.php');
$data = [];
$edit_id = $_SESSION['USER_INFO']["id"];
$query   = "SELECT * FROM tbl_users UP WHERE UP.id = '$edit_id'";
$strSQL = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($strSQL);

?>

<!--start page wrapper -->
<div class="content-body default-height">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Your Password Change
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row justify-content-center">
                                <div class="col-sm-4">
                                    <input required="" type="text" class="form-control" id="title" placeholder="Enter New Password" name="new_password" minlength="6" maxlength="10" size="10">
                                </div>
                                <div class="col-sm-4">
                                    <input required="" type="text" class="form-control" id="title" placeholder="Enter New Password Again" name="new_password_again" minlength="6" maxlength="10" size="10">
                                </div>
                                <div class="col-sm-4">
                                    <input required="" type="text" class="form-control" id="title" placeholder="Enter Old Password" name="old_password" minlength="6" maxlength="10" size="10">
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mt-2">
                                <div class="text-end">
                                    <button class="btn btn-primary" type="submit">
                                        Change Password
                                    </button>
                                </div>
                            </div>

                        </form>
                        <?php
                        @$new_password          = $_REQUEST['new_password'];
                        @$new_password_again    = $_REQUEST['new_password_again'];
                        @$old_password          = $_REQUEST['old_password'];

                        if (isset($_POST['new_password'])) {
                            if ($new_password == $new_password_again) {
                                $md5NewPassword = md5($new_password);
                                $md5OldPassword = md5($old_password);

                                $sqlPass = "SELECT password from tbl_users where emp_id = '$emp_session_id' and password='$md5OldPassword'";
                                $rsPass = mysqli_query($conn, $sqlPass);
                                $getNumRowsPass = mysqli_num_rows($rsPass);

                                if ($getNumRowsPass == 1) {
                                    $sql = "UPDATE tbl_users set password='$md5NewPassword'  where emp_id = '$emp_session_id' and password='$md5OldPassword'";
                                    $rs = mysqli_query($conn, $sql);
                                    if ($rs) {
                                        $auditsql = "INSERT INTO tbl_password_history (changed_date, changed_by) VALUES (CURDATE(), '$emp_session_id')";
                                        mysqli_query($conn, $auditsql);
                                        echo 'You have successfully changed your password.';
                                    } else {
                                        echo 'Fail to change your password. Please contact to IT Department.';
                                    }
                                } else {
                                    echo 'Old Password Mismatched!. Please Try again';
                                }
                            } else {
                                echo 'New Password Mismatched!. Please Try again';
                            }
                        }
                        ?>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<!--end page wrapper -->
<?php
include_once('../../_includes/footer_info.php');
include_once('../../_includes/footer.php');
?>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'

        $('.typeChange').on('click', function() {

            // Your code to toggle password visibility goes here
            var passwordInput = $('#password');
            var icon = $(this).find('i');
            if (passwordInput.attr('type') === 'password') {
                passwordInput.attr('type', 'text');
                icon.removeClass('bxs-low-vision').addClass('bxs-show');
            } else {
                passwordInput.attr('type', 'password');
                icon.removeClass('bxs-show').addClass('bxs-low-vision');
            }

        });

    })();
</script>