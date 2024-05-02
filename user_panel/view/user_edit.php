<?php
include_once('../../_helper/2step_com_conn.php');
$user_id = $_REQUEST['user_id'];
$strSQL  = oci_parse($objConnect, "SELECT ID,
                                RML_ID,
                                EMP_NAME,
                                MOBILE_NO,
                                CREATED_DATE,
                                LEASE_USER,
                                IS_ACTIVE,
                                USER_FOR,
                                AREA_ZONE,
                                IEMI_NO,SAL_MM_ZH_ID																  
                                from RML_COLL_APPS_USER
                                where ID='$user_id'
                                AND ACCESS_APP='RML_SAL'");

oci_execute($strSQL);
$row = oci_fetch_assoc($strSQL);

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
                            User Edit
                        </div>

                    </div>
                    <div class="alert alert-warning alert-dismissible fade show">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                            <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                            <line x1="12" y1="9" x2="12" y2="13"></line>
                            <line x1="12" y1="17" x2="12.01" y2="17"></line>
                        </svg>
                        <strong>You will be respondible if you update anything here!</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                    <?php

                    if (isset($_POST['form_iemi_no'])) {

                        $emp_form_name = $_REQUEST['emp_form_name'];
                        $emp_mobile = $_REQUEST['emp_mobile'];
                        $form_iemi_no = $_REQUEST['form_iemi_no'];
                        $user_brand = $_REQUEST['user_brand'];

                        $form_emp_status = $_REQUEST['emp_status'];
                        $form_zone_name = $_REQUEST['form_zone_name'];
                        $form_user_role = $_REQUEST['form_user_role'];
                        $v_zh_id = $_REQUEST['zh_id'];


                        $v_USER_ID = $_REQUEST['form_rml_id'];

                        $setUpRole = '';

                        if ($form_user_role == "ZH") {
                            $setUpRole = "Zonal Head";
                        } else if ($form_user_role == "PH") {
                            $setUpRole = "Product Head";
                        } else {
                        }

                        $strSQL  = oci_parse($objConnect, "UPDATE RML_COLL_APPS_USER SET
                                                        EMP_NAME='$emp_form_name',
                                                        MOBILE_NO='$emp_mobile',									
                                                        IEMI_NO='$form_iemi_no',
                                                        AREA_ZONE='$form_zone_name',
                                                        IS_ACTIVE='$form_emp_status',
                                                        USER_FOR='$user_brand',
                                                        UPDATED_BY='$emp_session_id',
                                                        LEASE_USER='$form_user_role',
                                                        SAL_MM_ZH_ID='$v_zh_id'
                                                where ID='$user_id'");

                        if (oci_execute($strSQL)) {
                    ?>
                            <div class="alert alert-success alert-dismissible fade show">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                                    <polyline points="9 11 12 14 22 4"></polyline>
                                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                </svg>
                                <strong>Success!</strong> Information  Updated Successfully.
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
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="title">Emp ID:</label>
                                        <input type="text" class="form-control" id="title" name="form_rml_id" value="<?php echo $row['RML_ID']; ?>" readonly>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="title">Name:</label>
                                        <input type="text" name="emp_form_name" class="form-control" id="title" value="<?php echo $row['EMP_NAME']; ?>" required="">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="title">Mobile:</label>
                                        <input type="text" name="emp_mobile" class="form-control" id="title" value="<?php echo $row['MOBILE_NO']; ?>" required="">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="title">User Created Date:</label>
                                        <input type="text" class="form-control" id="title" name="form_res2_id" value="<?php echo $row['CREATED_DATE']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="title">IEMI NO-1:</label>
                                        <input type="text" class="form-control" id="title" name="form_iemi_no" value="<?php echo $row['IEMI_NO']; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="title">Employee Status:</label>
                                        <select name="emp_status" class="form-control">
                                            <?php

                                            if ($row['IS_ACTIVE'] == '1') {
                                            ?>
                                                <option selected value="1">Active</option>
                                                <option value="0">In-Active</option>
                                            <?php
                                            } else {
                                            ?>
                                                <option value="1">Active</option>
                                                <option selected value="0">In-Active</option>
                                            <?php
                                            }

                                            ?>

                                        </select>

                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="title">User Brand:</label>
                                        <select required="" name="user_brand" class="form-control">
                                            <?php

                                            if ($row['USER_FOR'] == 'MM') {
                                            ?>
                                                <option value="MM">Mahindra</option>
                                                <option value="EICHER">Eicher</option>
                                            <?php
                                            } else {
                                            ?>
                                                <option value="EICHER">Eicher</option>
                                                <option value="MM">Mahindra</option>
                                            <?php
                                            }

                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="title">Area Zone:</label>
                                        <select required="" name="form_zone_name" class="form-control">
                                            <option selected value="">Select Zone</option>
                                            <?php
                                            $strSQLZone  = oci_parse($objConnect, "select ID,LABEL AS ZONE_NAME from SALL_ZONE_TREE
																						where IS_ACTIVE=1
																						AND PARENT=0
																						ORDER BY LABEL");
                                            oci_execute($strSQLZone);
                                            while ($rowZ = oci_fetch_assoc($strSQLZone)) {
                                                if ($rowZ['ZONE_NAME'] == $row['AREA_ZONE']) {
                                            ?>
                                                    <option selected value="<?php echo $rowZ['ZONE_NAME']; ?>"><?php echo $rowZ['ZONE_NAME']; ?></option>
                                                <?php
                                                } else {
                                                ?>
                                                    <option value="<?php echo $rowZ['ZONE_NAME']; ?>"><?php echo $rowZ['ZONE_NAME']; ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="title">Select User Role:</label>
                                        <select required="" name="form_user_role" class="form-control">
                                            <option selected value="">User Role</option>
                                            <?php
                                            $strSQLZone  = oci_parse($objConnect, "select UNIQUE(LEASE_USER) USER_ROLE from RML_COLL_APPS_USER
																										 where IS_ACTIVE=1
																										AND ACCESS_APP='RML_SAL'");
                                            oci_execute($strSQLZone);
                                            while ($rowZ = oci_fetch_assoc($strSQLZone)) {
                                                if ($rowZ['USER_ROLE'] == $row['LEASE_USER']) {
                                            ?>
                                                    <option selected value="<?php echo $rowZ['USER_ROLE']; ?>"><?php echo $rowZ['USER_ROLE']; ?></option>
                                                <?php
                                                } else {
                                                ?>
                                                    <option value="<?php echo $rowZ['USER_ROLE']; ?>"><?php echo $rowZ['USER_ROLE']; ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="title">ZH ID:</label>
                                        <input type="text" class="form-control" id="title" name="zh_id" value="<?php echo $row['SAL_MM_ZH_ID']; ?>">
                                    </div>
                                </div>

                                <!--  -->
                            </div>
                            <?php if ($_SESSION['SALES_USER_INFO']['user_role_id'] == 2) { ?>
                                <div class="text-center">
                                    <button class="btn btn-primary" type="submit" value="Load Data">
                                        Update Data
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