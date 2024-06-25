<?php
include_once ('../../_helper/2step_com_conn.php');
$user_id   = $_REQUEST['user_id'];
$apps_name = $_REQUEST['apps_name'];


// $emp_session_id = $_SESSION['emp_id'];
$remarks      = 'Access Provider =' . $emp_session_id;
$V_USER_BRAND = $emp_session_brand;
// emp_session_brand
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
                            Provide Acces on Hr Apps Dashboard
                        </div>
                    </div>
                    <?php

                    if (isset($_POST['hr_rml_id'])) {
                        $hr_rml_id = $_REQUEST['hr_rml_id'];
                        $apps_name = $_REQUEST['apps_name'];
                        $strSQL    = oci_parse($objConnect, "begin
															RML_APPS_ACCESS ('$hr_rml_id', '$user_id','$apps_name','$remarks','$emp_session_id');
															end;");

                        if (@oci_execute($strSQL)) {
                            echo '<div class="alert alert-success alert-dismissible fade show">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                                    <polyline points="9 11 12 14 22 4"></polyline>
                                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                </svg>
                                <strong>Success!</strong> Updated successfully.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                </button>
                            </div>';
                        }
                    }
                    ?>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row justify-content-center">
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <!-- <label for="title">Emp ID:</label> -->
                                        <input required="" placeholder="Emp ID Here.." class="form-control" type='text' name='sall_emp_id'
                                            value='<?= isset($_POST['sall_emp_id']) ? $_POST['sall_emp_id'] : ''; ?>' />
                                    </div>
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
                        <div class="row ">
                            <div class="table-responsive">
                                <table class="table table-bordered table-lg" id="table" cellspacing="0" width="100%">
                                    <thead class="table-success text-center">
                                        <tr>
                                            <th scope="col">Sl</th>
                                            <th scope="col">Employee Info</th>
                                            <th scope="col">Access Hr User</th>
                                            <th scope="col">Boss ID</th>

                                        </tr>
                                    </thead>

                                    <tbody>

                                        <?php

                                        $strSQL = @oci_parse($objConnect, "SELECT ID,
                                                                EMP_NAME,
                                                                RML_ID,
                                                                SAL_MM_ZH_ID,
                                                                (SELECT(SELECT RML_ID
                                                                            FROM RML_HR_APPS_USER
                                                                            WHERE ID = RML_HR_APPS_USER_ID
                                                                        )
                                                                FROM HR_EMP_APPS_ACCESS
                                                                WHERE APPS_NAME = '$apps_name'
                                                                AND USE_ID = RML_ID
                                                                ) HR_USER
                                                            from RML_COLL_APPS_USER
                                                                where ACCESS_APP='$apps_name'
                                                                AND RML_ID='$user_id'
                                                            ");
                                        //  and USER_FOR='$V_USER_BRAND'
                                        oci_execute($strSQL);
                                        $number = 0;


                                        while ($row = oci_fetch_assoc($strSQL)) {
                                            $number++;
                                            ?>
                                            <tr>
                                                <td><?php echo $number; ?></td>
                                                <td><?php echo $row['EMP_NAME']; ?></td>
                                                <td><?php echo $row['HR_USER']; ?></td>
                                                <td><?php echo $row['SAL_MM_ZH_ID']; ?></td>
                                            </tr>
                                            <?php

                                        }
                                        ?>
                                    </tbody>

                                </table>

                            </div>
                            <div class='text-end'>
                                <a class="btn btn-success" id="downloadLink" onclick="exportF(this)" style="margin-left:5px;">Export to Excel</a>
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
include_once ('../../_includes/footer_info.php');
include_once ('../../_includes/footer.php');
?>
<script>
    function exportF(elem) {
        var table = document.getElementById("table");
        var html = table.outerHTML;
        var url = 'data:application/vnd.ms-excel,' + escape(html); // Set your html table into url 
        elem.setAttribute("href", url);
        elem.setAttribute("download", "Lead_Info.xls"); // Choose the file name
        return false;
    }
</script>