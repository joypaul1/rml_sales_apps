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
                            <i class="flaticon-381-diploma"></i> District Assign Report
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row justify-content-center">
                                <div class="col-sm-4">
                                    <select required="" name="user_selected_id" class="form-control selectpicker show-menu-arrow">
                                        <option selected value="">Select User</option>
                                        <?php

                                        $strSQL = oci_parse($objConnect, "SELECT EMP_NAME,RML_ID as USER_ID 
																		   from RML_COLL_APPS_USER 
																	   where IS_ACTIVE=1
																	   and ACCESS_APP='RML_SAL'
																	   and LEASE_USER='SE'
																	   and USER_TYPE IS NULL
																	 order by EMP_NAME");
                                        oci_execute($strSQL);
                                        while ($row = oci_fetch_assoc($strSQL)) {
                                            ?>
                                            <option value="<?php echo $row['USER_ID']; ?>" <?php echo (isset($_POST['user_selected_id']) && $_POST['user_selected_id'] == $row['USER_ID']) ? 'selected="selected"' : ''; ?>>
                                                <?php echo $row['EMP_NAME'] . '(' . $row['USER_ID'] . ')'; ?></option>

                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <button class="btn btn-primary" type="submit" value="Load Data">
                                        Search Data
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>



                    <div class="card card-body ">
                        <div class="row col-12 col-sm-12 cpl-md-12">
                            <table class="table table-bordered">
                                <thead class="table-success">
                                    <tr>
                                        <th scope="col">Sl</th>
                                        <th scope="col">Emp Name</th>
                                        <th scope="col">District Name</th>
                                        <th scope="col">Created By</th>
                                        <th scope="col">Created Date</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    @$user_selected_id = $_REQUEST['user_selected_id'];

                                    if (isset($_POST['user_selected_id'])) {

                                        $strSQL = oci_parse($objConnect, "SELECT
                                                                SMD.ID,
                                                                COLLUSER.EMP_NAME || ' (' || COLLUSER.RML_ID || ')' AS EMP_NAME,
                                                                SMD.DISTRICT_NAME,
                                                                SMD.CREATED_BY,
                                                                SMD.CREATED_DATE,
                                                                SMD.IS_ACTIVE,
                                                                SMD.CONCERN_ID
                                                            FROM
                                                                SALL_EMP_DISTRICT SMD
                                                            INNER JOIN
                                                                RML_COLL_APPS_USER COLLUSER
                                                                ON COLLUSER.RML_ID = SMD.CONCERN_ID
                                                                AND COLLUSER.USER_TYPE IS NULL
                                                                AND COLLUSER.IS_ACTIVE = 1
                                                            WHERE
                                                                SMD.CONCERN_ID = '$user_selected_id'");

                                        oci_execute(@$strSQL);
                                        $number = 0;

                                        while ($row = oci_fetch_assoc($strSQL)) {
                                            $number++;
                                            ?>
                                            <tr>
                                                <td><?php echo $number; ?></td>
                                                <td><?php echo $row['EMP_NAME']; ?></td>
                                                <td><?php echo $row['DISTRICT_NAME']; ?></td>
                                                <td><?php echo $row['CREATED_BY']; ?></td>
                                                <td><?php echo $row['CREATED_DATE']; ?></td>
                                                <td><?php

                                                if ($row['IS_ACTIVE'] == '1')
                                                    echo 'Active';
                                                else
                                                    echo 'In-Active';
                                                ?></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else {

                                        $allDataSQL = oci_parse($objConnect, "SELECT SMD.ID,
                                                        SMD.DISTRICT_NAME,
                                                        SMD.CREATED_BY,
                                                        SMD.CREATED_DATE,
                                                        SMD.IS_ACTIVE,
                                                        (SELECT EMP_NAME || ' (' || RML_ID || ')'
                                                            FROM RML_COLL_APPS_USER
                                                            WHERE     RML_ID = SMD.CONCERN_ID
                                                                AND USER_TYPE IS NULL
                                                                AND IS_ACTIVE = 1)
                                                            EMP_NAME
                                                    FROM SALL_EMP_DISTRICT SMD
                                                    INNER  JOIN RML_COLL_APPS_USER COLLUSER ON COLLUSER.RML_ID = SMD.CONCERN_ID
                                                    AND COLLUSER.USER_TYPE  IS NULL
                                                    AND COLLUSER.IS_ACTIVE = 1");

                                        $number = 0;
                                        if (@oci_execute(@$allDataSQL)) {
                                            while ($row = oci_fetch_assoc($allDataSQL)) {
                                                $number++;
                                                ?>
                                                <tr>
                                                    <td><?php echo $number; ?></td>
                                                    <td><?php echo $row['EMP_NAME']; ?></td>
                                                    <td><?php echo $row['DISTRICT_NAME']; ?></td>
                                                    <td><?php echo $row['CREATED_BY']; ?></td>
                                                    <td><?php echo $row['CREATED_DATE']; ?></td>
                                                    <td><?php

                                                    if ($row['IS_ACTIVE'] == '1')
                                                        echo 'Active';
                                                    else
                                                        echo 'In-Active';
                                                    ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
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