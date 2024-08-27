<?php
include_once('../../_helper/2step_com_conn.php');

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
                            User Create
                        </div>

                    </div>
                    <div class="alert alert-warning alert-dismissible fade show">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                            fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                            <path
                                d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z">
                            </path>
                            <line x1="12" y1="9" x2="12" y2="13"></line>
                            <line x1="12" y1="17" x2="12.01" y2="17"></line>
                        </svg>
                        <strong>You will be respondible if you create anything here!</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                    <?php


                    if (isset($_POST['sall_user_id']) && isset($_POST['sall_user_name']) && isset($_POST['emp_mobile'])) {

                        $sall_user_id = $_REQUEST['sall_user_id'];
                        $sall_user_name = $_REQUEST['sall_user_name'];
                        $emp_mobile = $_REQUEST['emp_mobile'];
                        $user_brand = $_REQUEST['user_brand'];
                        $user_type = $_REQUEST['user_type'];
                        $zone_name = $_REQUEST['zone_name'];
                        $strSQL = oci_parse(
                            $objConnect,
                            "INSERT INTO RML_COLL_APPS_USER (
                                            EMP_NAME,
                                            PASS_MD5,
                                            IS_ACTIVE,
                                            RML_ID,
                                            MOBILE_NO,
                                            CREATED_DATE,
                                            LEASE_USER,
                                            USER_FOR,
                                            ACCESS_APP,
                                            AREA_ZONE,
                                            UPDATED_BY)
                                            VALUES (
                                                '$sall_user_name ',
                                                '15DE21C670AE7C3F6F3F1F37029303C9',
                                                1,
                                                '$sall_user_id',
                                                '$emp_mobile',
                                                SYSDATE,
                                                '$user_type',
                                                '$user_brand',
                                                'RML_SAL',
                                                '$zone_name',
                                                '$emp_session_id')"
                        );

                        if (oci_execute($strSQL)) {
                            ?>
                            <div class="alert alert-success alert-dismissible fade show">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                                    <polyline points="9 11 12 14 22 4"></polyline>
                                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                </svg>
                                <strong>Success!</strong> IUser is Created successfully.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                </button>
                            </div>
                        <?php } else {
                            $lastError = error_get_last();
                            $error = $lastError ? "" . $lastError["message"] . "" : "";
                            ?>
                            <div class="alert alert-danger alert-dismissible fade show">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                                    <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                                    </polygon>
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
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="title">USER ID:</label>
                                        <input type="text" class="form-control" id="title" name="sall_user_id"
                                            placeholder="000773" required="">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="title">Full Name:</label>
                                        <input type="text" class="form-control" id="title" name="sall_user_name"
                                            placeholder="Syad Maruf Ahmed" required="">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="title">Office Mobile No:</label>
                                        <input type="text" class="form-control" id="title" name="emp_mobile" required=""
                                            placeholder="01993338317">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="title">Select Brand:</label>
                                        <select name="user_brand" class="form-control" required="">
                                            <option selected value="">--</option>
                                            <option value="EICHER">Eicher</option>
                                            <option value="MM">Mahindra</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="title">User Type:</label>
                                        <select name="user_type" class="form-control" required="">
                                            <option value="">--</option>
                                            <option value="SE">Sales Executive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="title">Select Zone:</label>
                                        <select name="zone_name" class="form-control" id="zone_name" required="">
                                            <option value="">--</option>
                                            <?php
                                            $strSQL = oci_parse($objConnect, "select ID AS ZONE_ID,LABEL AS ZONE_NAME from SALL_ZONE_TREE where PARENT=0 and is_active=1 order by label");
                                            oci_execute($strSQL);
                                            while ($row = oci_fetch_assoc($strSQL)) {
                                                ?>
                                                <option value="<?php echo $row['ZONE_NAME']; ?>" <?php echo (isset($_POST['zone_name']) && $_POST['zone_name'] == $row['ZONE_NAME']) ? 'selected="selected"' : ''; ?>><?php echo $row['ZONE_NAME']; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <!--  -->
                            </div>
                            <?php if ($_SESSION['SALES_USER_INFO']['user_role_id'] == 2) { ?>
                                <div class="text-center">
                                    <button class="btn btn-primary" type="submit" value="Load Data">
                                        Create & Save Data
                                    </button>
                                </div>
                            <?php } ?>


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