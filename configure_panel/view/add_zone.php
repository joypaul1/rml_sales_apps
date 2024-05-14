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
                            Zone List & Create
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="title">Zone Name:</label>
                                        <input type="text" required="" name="zone_name" class="form-control" id="title">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="title">Zone Status:</label>
                                        <select required="" name="zone_status" class="form-control">
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
                                    <!-- <div class="form-group">
                                        <label for="title">Zone Status:</label>

                                    </div> -->
                                </div>
                            </div>

                        </form>
                    </div>

                    <?php
                    // $emp_session_id = $_SESSION['emp_id'];
                    @$zone_name = $_REQUEST['zone_name'];
                    @$zone_status = $_REQUEST['zone_status'];

                    if (isset($_POST['zone_status'])) {

                        $strSQL = oci_parse($objConnect, "INSERT INTO SALL_ZONE_TREE (
																		 LABEL, 
																		 LINK,
                                                                         PARENT,
                                                                         SORT,
                                                                         CREATED_BY,																		 
																		 CREATED_DATE,
                                                                         FLAG,																		 
																		 IS_ACTIVE) 
																VALUES ( 
																		'$zone_name' ,
                                                                         '#',
																		 '0',
																		 '',
																		'$emp_session_id',
																		 SYSDATE,
																		'ZONE',
																	   '$zone_status')");

                        if (@oci_execute($strSQL)) {
                            ?>

                            <div class="container-fluid">
                                <div class="md-form mt-5">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            Zone is created successfully.
                                        </li>
                                    </ol>
                                </div>
                            </div>
                            <?php
                        }
                        else {
                            $lastError = error_get_last();
                            $error     = $lastError ? "" . $lastError["message"] . "" : "";
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
                                        <th scope="col">Zone Name</th>
                                        <th scope="col">Created Date</th>
                                        <th scope="col">Created By</th>
                                        <th scope="col">Zone Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    @$attn_status = $_REQUEST['attn_status'];
                                    @$attn_start_date = date("d/m/Y", strtotime($_REQUEST['start_date']));
                                    @$attn_end_date = date("d/m/Y", strtotime($_REQUEST['end_date']));

                                    $strSQL = oci_parse($objConnect, "select ID,LABEL AS ZONE_NAME,CREATED_BY,CREATED_DATE,IS_ACTIVE from SALL_ZONE_TREE
                                                                where PARENT=0 order by LABEL");



                                    oci_execute($strSQL);
                                    $number = 0;


                                    while ($row = oci_fetch_assoc($strSQL)) {
                                        $number++;
                                        ?>
                                        <tr>
                                            <td><?php echo $number; ?></td>
                                            <td><?php echo $row['ZONE_NAME']; ?></td>
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
include_once ('../../_includes/footer_info.php');
include_once ('../../_includes/footer.php');
?>