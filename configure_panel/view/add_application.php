<?php
include_once ('../../_helper/2step_com_conn.php');
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
                            Application List & Create
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="title">Application name:</label>
                                        <input type="text" required="" name="department_name" class="form-control" id="title">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="title">Application Status:</label>
                                        <select required="" name="department_status" class="form-control">
                                            <option selected value="">Select Status</option>
                                            <option value="1">Active</option>
                                            <option value="0">In-Active</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <!-- <label for="title"> &nbsp;  </label> -->
                                        <input class="btn btn-primary btn pull-right" type="submit" value="Submit to Create">
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>

                    <?php
                    @$department_name = $_REQUEST['department_name'];
                    @$department_status = $_REQUEST['department_status'];

                    if (isset($_POST['department_status'])) {

                        $strSQL = oci_parse($objConnect, "INSERT INTO SAL_APPLICATION (
																		TITLE,
																		CREATED_BY,
																		CREATED_DATE,
																		IS_ACTIVE)
																VALUES (
																		'$department_name'  ,
																		'$emp_session_id',
																		SYSDATE,
																	   '$department_status')");

                        if (@oci_execute($strSQL)) {
                            ?>

                            <div class="alert alert-success alert-dismissible fade show">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" class="me-2">
                                    <polyline points="9 11 12 14 22 4"></polyline>
                                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                </svg>
                                <strong>Success!</strong> Application is created successfully..
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                </button>
                            </div>
                            <?php
                        }
                        else {
                            $lastError = error_get_last();
                            $error     = $lastError ? "" . $lastError["message"] . "" : "";
                            if (strpos($error, '(DEVELOPERS.TITLE_NAME)') !== false) {
                                ?>
                                <div class="alert alert-danger alert-dismissible fade show">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" class="me-2">
                                        <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                        <line x1="15" y1="9" x2="9" y2="15"></line>
                                        <line x1="9" y1="9" x2="15" y2="15"></line>
                                    </svg>
                                    <strong>Error!</strong>This Application is already created.You can not create duplicate Application.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    </button>
                                </div>
                                <?php
                            }
                        }
                    }
                    ?>

                    <div class="card card-body ">
                        <div class="row col-12 col-sm-12 cpl-md-12">
                            <table class="table table-bordered">
                                <thead class="table-success">
                                    <tr>
                                        <th scope="col">Sl</th>
                                        <th scope="col">Application Name</th>
                                        <th scope="col">Created Date</th>
                                        <th scope="col">Created By</th>
                                        <th scope="col">Application Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    @$attn_status = $_REQUEST['attn_status'];
                                    @$attn_start_date = date("d/m/Y", strtotime($_REQUEST['start_date']));
                                    @$attn_end_date = date("d/m/Y", strtotime($_REQUEST['end_date']));

                                    $strSQL = oci_parse($objConnect, "SELECT ID,
                                                            TITLE,
                                                            CREATED_BY,
                                                            CREATED_DATE,
                                                            IS_ACTIVE
                                                            from SAL_APPLICATION
                                                            order by TITLE");

                                    oci_execute($strSQL);
                                    $number = 0;

                                    while ($row = oci_fetch_assoc($strSQL)) {
                                        $number++;
                                        ?>
                                        <tr>
                                            <td><?php echo $number; ?></td>
                                            <td><?php echo $row['TITLE']; ?></td>
                                            <td><?php echo $row['CREATED_DATE']; ?></td>
                                            <td><?php echo $row['CREATED_BY']; ?></td>
                                            <td><?php
                                            if ($row['IS_ACTIVE'] == 1)
                                                echo 'Active';
                                            else
                                                echo 'In-Active';

                                            ?></td>

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
include_once ('../../_includes/footer_info.php');
include_once ('../../_includes/footer.php');
?>