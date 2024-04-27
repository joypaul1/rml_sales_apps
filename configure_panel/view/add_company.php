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
                            Company List & Create
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="title">Company Name:</label>
                                        <input type="text" required="" name="department_name" class="form-control" id="title">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="title">Company Status:</label>
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
                    // $emp_session_id = $_SESSION['emp_id'];
                    @$department_name = $_REQUEST['department_name'];
                    @$department_status = $_REQUEST['department_status'];

                    if (isset($_POST['department_status'])) {

                        $strSQL  = oci_parse(
                            $objConnect,
                            "INSERT INTO SALL_COMPANY (
                            COMPANY_NAME,
                            CREATED_BY,
                            CREATED_DATE,
                            IS_ACTIVE)
                            VALUES (
                            '$department_name'  ,
                            '$emp_session_id',
                            SYSDATE,
                            '$department_status')"
                        );

                        if (@oci_execute($strSQL)) {
                    ?>

                            <div class="container-fluid">
                                <div class="md-form mt-5">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            Company is created successfully.
                                        </li>
                                    </ol>
                                </div>
                            </div>
                            <?php
                        } else {
                            $lastError = error_get_last();
                            $error = $lastError ? "" . $lastError["message"] . "" : "";
                            // echo $error;
                            if (strpos($error, '(CONSTRAINT_FOLDER_NAME)') !== false) {
                            ?>
                                <div class="container-fluid">
                                    <div class="md-form mt-5">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <?php echo $error ?>
                                            </li>
                                        </ol>
                                    </div>
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
                                        <th scope="col">Company Name</th>
                                        <th scope="col">Created Date</th>
                                        <th scope="col">Created By</th>
                                        <th scope="col">Company Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    @$attn_status = $_REQUEST['attn_status'];
                                    @$attn_start_date = date("d/m/Y", strtotime($_REQUEST['start_date']));
                                    @$attn_end_date = date("d/m/Y", strtotime($_REQUEST['end_date']));

                                    $strSQL  = oci_parse($objConnect, "SELECT ID,
						                                            COMPANY_NAME,
																	CREATED_BY,
																	CREATED_DATE,
																	IS_ACTIVE 
															from SALL_COMPANY
															order by COMPANY_NAME");



                                    oci_execute($strSQL);
                                    $number = 0;


                                    while ($row = oci_fetch_assoc($strSQL)) {
                                        $number++;
                                    ?>
                                        <tr>
                                            <td><?php echo $number; ?></td>
                                            <td><?php echo $row['COMPANY_NAME']; ?></td>
                                            <td><?php echo $row['CREATED_BY']; ?></td>
                                            <td><?php echo $row['CREATED_DATE']; ?></td>
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
include_once('../../_includes/footer_info.php');
include_once('../../_includes/footer.php');
?>