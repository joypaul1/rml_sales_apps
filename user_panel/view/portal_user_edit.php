<?php
include_once('../../_helper/2step_com_conn.php');
$user_table_id = $_REQUEST['emp_id'];
$sql = "SELECT id,name,emp_id,email,password,created_date,status,created_by FROM tbl_users WHERE id='$user_table_id'";
$rs = mysqli_query($conn, $sql);
$getUserRow = mysqli_fetch_assoc($rs);
?>

<!--start page wrapper -->
<!--********* Content body start ************-->
<div class="content-body default-height">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <i class="flaticon-381-diploma"></i>
                            Portal User List
                        </div>
                    </div>
                    <?php
                    if (isset($_POST['user_id'])) {
                        $user_name = $_REQUEST['user_name'];
                        $user_mail = $_REQUEST['user_mail'];
                        $user_status = $_REQUEST['user_status'];
                        $original_password = $_REQUEST['user_password'];

                        if (strlen($original_password) > 0) {
                            $new_password = md5($_REQUEST['user_password']);
                            $sql = "UPDATE tbl_users set
                                        name='$user_name',
                                        email='$user_mail',
                                        created_by='$emp_session_id',
                                        password='$new_password',
                                        status='$user_status'
                                        where id=$user_table_id";
                        } else {
                            $sql = "UPDATE tbl_users set
                                        name='$user_name',
                                        email='$user_mail',
                                        created_by='$emp_session_id',
                                        status='$user_status'
                                        where id=$user_table_id";
                        }

                        if (mysqli_query($conn, $sql)) {
                    ?>
                            <div class="alert alert-success alert-dismissible fade show">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                                    <polyline points="9 11 12 14 22 4"></polyline>
                                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                </svg>
                                <strong>Success!</strong> Updated successfully.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                </button>
                            </div>
                        <?php  } else {
                            $lastError = error_get_last();
                            $error = $lastError ? "" . $lastError["message"] . "" : "";
                        ?>
                            <div class="alert alert-danger alert-dismissible fade show">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                                    <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                    <line x1="15" y1="9" x2="9" y2="15"></line>
                                    <line x1="9" y1="9" x2="15" y2="15"></line>
                                </svg>
                                <strong>Error!</strong> <?= $error ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                </button>
                            </div>


                    <?php }
                    }
                    ?>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row justify-content-center">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="title">User ID:</label>
                                        <input type="text" required="" name="user_id" value="<?php echo $getUserRow['emp_id']; ?>" class="form-control" id="title" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="title">User Name:</label>
                                        <input type="text" required="" value="<?php echo $getUserRow['name']; ?>" name="user_name" class="form-control" id="title">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="title">User Mail:</label>
                                        <input type="text" required="" value="<?php echo $getUserRow['email']; ?>" name="user_mail" class="form-control" id="title">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="title">Created By:</label>
                                        <input type="text" value="<?php echo $getUserRow['created_by']; ?>" class="form-control" id="title" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="title">Created Date:</label>
                                        <input type="text" value="<?php echo $getUserRow['created_date']; ?>" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="title">Employee Status:</label>
                                        <select name="user_status" class="form-control">
                                            <?php
                                            if ($getUserRow['status'] == '1') {
                                            ?>
                                                <option selected value="1">Active</option>
                                                <option value="0">In-Active</option>
                                            <?php
                                            } else {
                                            ?>
                                                <option selected value="0">In-Active</option>
                                                <option value="1">Active</option>
                                            <?php
                                            }
                                            ?>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="title">Password:</label>
                                        <input type="text" name="user_password" class="form-control" id="title">

                                    </div>
                                </div>
                                <!--  -->
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary" type="submit" value="Load Data">
                                    Update Data
                                </button>
                            </div>


                        </form>
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
