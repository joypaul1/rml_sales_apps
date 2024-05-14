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
                            Apps User List
                        </div>
                        <div class="card-title">
                            <a href="user_add.php" class="btn btn-sm btn-primary">Create User <i class="flaticon-381-add-2"></i></a>
                        </div>

                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row justify-content-center">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Emp ID:" type='text' name='sall_emp_id'
                                            value='<?php echo isset($_POST['sall_emp_id']) ? $_POST['sall_emp_id'] : ''; ?>' />
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <select name="form_user_role" class="form-control">
                                            <option selected value="">User Role</option>
                                            <?php
                                            $strSQLZone = oci_parse($objConnect, "SELECT UNIQUE(LEASE_USER) USER_ROLE from RML_COLL_APPS_USER  where IS_ACTIVE=1 AND ACCESS_APP='RML_SAL'");
                                            oci_execute($strSQLZone);
                                            while ($rowZ = oci_fetch_assoc($strSQLZone)) {
                                                ?>
                                                <option value="<?php echo $rowZ['USER_ROLE']; ?>" <?php echo (isset($_POST['form_user_role']) && $_POST['form_user_role'] == $rowZ['USER_ROLE']) ? 'selected="selected"' : ''; ?>>
                                                    <?php echo $rowZ['USER_ROLE']; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
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
                                            <th scope="col">Zone</th>
                                            <th scope="col">Role</th>
                                            <th scope="col">Action</th>
                                            <th scope="col">Boss ID</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <?php

                                        if (isset($_POST['form_user_role'])) {

                                            $sall_emp_id    = $_REQUEST['sall_emp_id'];
                                            $form_user_role = $_REQUEST['form_user_role'];

                                            $strSQL = oci_parse(
                                                $objConnect,
                                                "SELECT ID,
															EMP_NAME,
															RML_ID,
															AREA_ZONE,
															LEASE_USER,SAL_MM_ZH_ID
															from RML_COLL_APPS_USER
															where ACCESS_APP='RML_SAL'
															and USER_FOR='$emp_session_brand'
															and IS_ACTIVE=1
															AND ('$sall_emp_id' is null OR RML_ID='$sall_emp_id')
															and ('$form_user_role' is null or LEASE_USER='$form_user_role')"
                                            );
                                            oci_execute(@$strSQL);
                                            $number = 0;

                                            while ($row = oci_fetch_assoc($strSQL)) {
                                                $number++;
                                                ?>
                                                <tr>
                                                    <td><?php echo $number; ?></td>
                                                    <td><?php echo $row['EMP_NAME'] . '[' . $row['RML_ID'] . ']'; ?></td>
                                                    <td><?php echo $row['AREA_ZONE']; ?></td>
                                                    <td><?php echo $row['LEASE_USER']; ?></td>

                                                    <td align="center">
                                                        <a target="_blank" href="user_edit.php?user_id=<?php echo $row['ID'] ?>"><button
                                                                class="user_edit">Information Update</button>
                                                        </a>
                                                        <a target="_blank" href="user_district.php?user_id=<?php echo $row['RML_ID'] ?>"><button
                                                                class="user_district">District Assign</button>
                                                        </a>
                                                        <a target="_blank" href="user_setup.php?user_id=<?php echo $row['RML_ID'] ?>"><button
                                                                class="user_setup">Produc Information</button>
                                                        </a>
                                                    </td>
                                                    <td><?php echo $row['SAL_MM_ZH_ID']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else {
                                            $allDataSQL = oci_parse(
                                                $objConnect,
                                                "SELECT ID,
                                                EMP_NAME,
                                                RML_ID,
                                                AREA_ZONE,
                                                LEASE_USER,SAL_MM_ZH_ID
                                                from RML_COLL_APPS_USER
                                                where ACCESS_APP='RML_SAL'
                                                and IS_ACTIVE=1
                                                and USER_FOR='$emp_session_brand'
                                                order by AREA_ZONE"
                                            );

                                            $number = 0;
                                            if (oci_execute($allDataSQL)) {
                                                while ($row = oci_fetch_assoc($allDataSQL)) {
                                                    $number++;
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $number; ?></td>
                                                        <td><?php echo $row['EMP_NAME'] . '[' . $row['RML_ID'] . ']'; ?></td>
                                                        <td><?php echo $row['AREA_ZONE']; ?></td>
                                                        <td><?php echo $row['LEASE_USER']; ?></td>

                                                        <td align="center">
                                                            <a target="_blank" class='mb-2' href="user_edit.php?user_id=<?php echo $row['ID'] ?>"><button
                                                                    class="btn btn-sm btn-warning">Information Update <i class="flaticon-381-edit"></i></button>
                                                            </a>
                                                            <a target="_blank" class='mb-2' href="user_district.php?user_id=<?php echo $row['RML_ID'] ?>"><button
                                                                    class="btn btn-sm btn-primary">District Assign <i class="flaticon-381-edit"></i></button>
                                                            </a>
                                                            <a target="_blank" href="user_setup.php?user_id=<?php echo $row['RML_ID'] ?>">
                                                                <button class="btn btn-sm btn-info">Produc Information <i class="flaticon-381-edit"></i></button>

                                                            </a>
                                                        </td>
                                                        <td><?php echo $row['SAL_MM_ZH_ID']; ?></td>
                                                    </tr>
                                                    <?php
                                                }
                                            }
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