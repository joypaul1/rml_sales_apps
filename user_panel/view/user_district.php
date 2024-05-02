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
                            User District Assign
                        </div>

                    </div>
                    <?php

                    if (isset($_POST['user_selected_dis'])) {

                        @$user_selected_id = $_REQUEST['user_selected_id'];
                        @$user_selected_dis = $_REQUEST['user_selected_dis'];

                        $strSQL  = oci_parse($objConnect,
                                                        "INSERT INTO SALL_EMP_DISTRICT (
                                                            DISTRICT_NAME,
                                                            CREATED_BY,
                                                            CREATED_DATE,
                                                            IS_ACTIVE,
                                                            CONCERN_ID)
                                                        VALUES (
                                                        TRIM('$user_selected_dis'),
                                                        '$emp_session_id',
                                                        SYSDATE,
                                                        1,
                                                        '$user_selected_id')");

                        if (oci_execute($strSQL)) {
                    ?>
                            <div class="alert alert-success alert-dismissible fade show">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                                    <polyline points="9 11 12 14 22 4"></polyline>
                                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                </svg>
                                <strong>Success!</strong> District is created successfully.
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
                                        <input type="text" class="form-control" id="title" name="user_selected_id" value="<?php echo $user_id; ?>" readonly required>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <label>Select District:</label>
                                    <select required name="user_selected_dis" data-live-search="true"class="form-control">
                                        <option selected value=""><-- Select District --></option>
                                        <?php
                                        $strSQL  = oci_parse($objConnect, "SELECT ID,DISTRICT_NAME from SALL_DISTRICT
												where is_active=1 order by ID");
                                        oci_execute($strSQL);
                                        while ($row = oci_fetch_assoc($strSQL)) {
                                        ?>
                                            <option value="<?php echo $row['DISTRICT_NAME']; ?>" <?php echo (isset($_POST['user_selected_dis']) && $_POST['user_selected_dis'] == $row['DISTRICT_NAME']) ? 'selected="selected"' : ''; ?>><?php echo $row['DISTRICT_NAME']; ?></option>

                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>

                            </div>
                            <?php if ($_SESSION['SALES_USER_INFO']['user_role_id'] == 2) { ?>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary" >
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
                                        <th scope="col">District Name</th>
                                        <th scope="col">Created Date</th>
                                        <th scope="col">Created By</th>
                                        <th scope="col">Concern</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $strSQL  = oci_parse(
                                        $objConnect,
                                        "SELECT
						                                    A.ID,
															A.DISTRICT_NAME,
															A.CREATED_BY,
															A.CREATED_DATE,
															A.CONCERN_ID
															FROM SALL_EMP_DISTRICT a
															WHERE IS_ACTIVE=1
															AND CONCERN_ID='$user_id'"
                                    );
                                    oci_execute($strSQL);
                                    $number = 0;


                                    while ($row = oci_fetch_assoc($strSQL)) {
                                        $number++;
                                    ?>
                                        <tr>
                                            <td><?php echo $number; ?></td>
                                            <td><?php echo $row['DISTRICT_NAME']; ?></td>
                                            <td><?php echo $row['CREATED_BY']; ?></td>
                                            <td><?php echo $row['CREATED_DATE']; ?></td>
                                            <td><?php echo $row['CONCERN_ID']; ?></td>
                                        </tr>
                                    <?php

                                    }
                                    ?>
                                </tbody>


                            </table>
                            <div class='text-end'>
                                <a class="btn btn-success" id="downloadLink" onclick="exportF(this)" style="margin-left:5px;">Export to Excel <i class="flaticon-381-download"></i></a>
                            </div>
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