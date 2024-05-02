<?php
include_once('../../_helper/2step_com_conn.php');
$user_id = $_REQUEST['user_id'];


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
                    <?php

                    if (isset($_POST['user_selected_product'])) {

                        @$employee_id = $_REQUEST['employee_id'];
                        @$user_selected_product = $_REQUEST['user_selected_product'];
                        @$user_zh_id = $_REQUEST['user_zh'];

                        $strSQL  = oci_parse($objConnect, "BEGIN RML_SAL_PRODUCT_ASSIGN('$employee_id','$user_selected_product','$user_zh_id'); END");

                        if (oci_execute($strSQL)) {
                    ?>
                            <div class="alert alert-success alert-dismissible fade show">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                                    <polyline points="9 11 12 14 22 4"></polyline>
                                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                </svg>
                                <strong>Success!</strong> Product Assign is created successfully.
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
                                        <label for="title">Emp ID:</label>
                                        <input type="text" class="form-control" id="title" name="employee_id" value="<?php echo $user_id; ?>" readonly>
                                    </div>
                                </div>


                                <div class="col-sm-4">
                                    <label>Select Product:</label>
                                    <select required="" name="user_selected_product" class="form-control" data-live-search="true">
                                        <option selected value="">Select Product</option>
                                        <?php
                                        $strSQL  = oci_parse($objConnect, "SELECT DISTINCT(PRODUCT_TYPE) AS PRODUCT_TYPE
																				from SAL_EMP_SETUP_TT
																				where DESIGNATION IS NOT NULL
																				and PRODUCT_TYPE not in ('Earth Master')");
                                        oci_execute($strSQL);
                                        while ($row = oci_fetch_assoc($strSQL)) {
                                        ?>
                                            <option value="<?php echo $row['PRODUCT_TYPE']; ?>" <?php echo (isset($_POST['user_selected_product']) && $_POST['user_selected_product'] == $row['PRODUCT_TYPE']) ? 'selected="selected"' : ''; ?>><?php echo $row['PRODUCT_TYPE']; ?></option>

                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <label>Select Boss:</label>
                                    <select required="" name="user_zh" class="form-control" data-live-search="true">
                                        <option selected value="">Select Boss</option>
                                        <?php
                                        $strSQL  = oci_parse($objConnect, "SELECT DISTINCT(EMPLOYEE_ID) AS EMPLOYEE_ID,(EMPLOYEE_NAME||'-'||DESIGNATION) AS EMPLOYEE_NAME
																			from SAL_EMP_SETUP_TT
																			where DESIGNATION IS NOT NULL
																			and PRODUCT_TYPE not in ('Earth Master')
																			AND DESIGNATION IN ('Zonal Head','Product Head')
																			GROUP BY EMPLOYEE_ID,EMPLOYEE_NAME,DESIGNATION");
                                        oci_execute($strSQL);
                                        while ($row = oci_fetch_assoc($strSQL)) {
                                        ?>
                                            <option value="<?php echo $row['EMPLOYEE_ID']; ?>" <?php echo (isset($_POST['user_zh']) && $_POST['user_zh'] == $row['EMPLOYEE_ID']) ? 'selected="selected"' : ''; ?>><?php echo $row['EMPLOYEE_NAME']; ?></option>

                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>

                            </div>
                            <?php if ($_SESSION['SALES_USER_INFO']['user_role_id'] == 2) { ?>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">
                                        Submit & Create Data
                                    </button>
                                </div>
                            <?php } ?>


                        </form>
                    </div>
                    <div class="card card-body ">
                        <div class="row col-12 table-responsive">
                            <table class="table  table-bordered table-sm" id="table" cellspacing="0" width="100%">
                                <thead class="table-success">
                                    <tr>
                                        <th scope="col">Sl</th>
                                        <th scope="col">Product Type</th>
                                        <th scope="col">Boss ID</th>
                                        <th scope="col">Boss Name</th>
                                        <th scope="col">Brand</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $strSQL  = oci_parse(
                                        $objConnect,
                                        "SELECT DISTINCT(PRODUCT_TYPE) AS PRODUCT_TYPE,
                                                    RESPONSIBLE_HEAD_EMPLOYEE_ID AS ZH_ID,
                                                    RESPONSIBLE_HEAD_EMPLOYEE_NAME AS ZH_NAME,
                                                    BRAND_NAME,
                                                    DESIGNATION,
                                                    IS_ACTIVE
                                            FROM SAL_EMP_SETUP_TT
                                            where EMPLOYEE_ID='$user_id'
                                            and DESIGNATION IS NOT NULL
                                            GROUP BY PRODUCT_TYPE,RESPONSIBLE_HEAD_EMPLOYEE_ID,RESPONSIBLE_HEAD_EMPLOYEE_NAME,BRAND_NAME,DESIGNATION,IS_ACTIVE"
                                    );
                                    oci_execute($strSQL);
                                    $number = 0;


                                    while ($row = oci_fetch_assoc($strSQL)) {
                                        $number++;
                                    ?>
                                        <tr>
                                            <td><?php echo $number; ?></td>
                                            <td><?php echo $row['PRODUCT_TYPE']; ?></td>
                                            <td><?php echo $row['ZH_ID']; ?></td>
                                            <td><?php echo $row['ZH_NAME']; ?></td>
                                            <td><?php echo $row['BRAND_NAME']; ?></td>
                                            <td><?php echo $row['IS_ACTIVE']; ?></td>
                                        </tr>
                                    <?php

                                    }
                                    ?>
                                </tbody>


                            </table>
                        </div>

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