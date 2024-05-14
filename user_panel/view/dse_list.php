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
                            DSE User List
                        </div>
                    </div>
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
                                            <th scope="col">User Name</th>
                                            <th scope="col">Sales Apps<br> Login ID</th>
                                            <th scope="col">Access<br> Hr User</th>
                                            <th scope="col">Collection Apps<br> Login ID</th>
                                            <th scope="col">Access<br> Hr User</th>
                                            <th scope="col">Zone</th>
                                            <th scope="col">Role</th>
                                            <th scope="col">Action</th>
                                            <th scope="col">Boss ID</th>

                                        </tr>
                                    </thead>

                                    <tbody>

                                        <?php

                                        if (isset($_POST['sall_emp_id'])) {

                                            $sall_emp_id = $_REQUEST['sall_emp_id'];
                                            $strSQL      = oci_parse(
                                                $objConnect,
                                                "SELECT ID,
                                                EMP_NAME,
                                                RML_ID,
                                                AREA_ZONE,
                                                LEASE_USER,SAL_MM_ZH_ID,
                                                ( SELECT(SELECT RML_ID
                                                        FROM RML_HR_APPS_USER
                                                            WHERE ID = RML_HR_APPS_USER_ID
                                                        )
                                                FROM HR_EMP_APPS_ACCESS
                                                WHERE APPS_NAME = 'RML_SAL'
                                                AND USE_ID = RML_ID
                                                ) HR_USER,
                                                CASE APPS_USER_CREATE_CHACK(TO_CHAR(TO_NUMBER(RML_ID)),'RML_COLL')
                                                        WHEN 'YES' THEN TO_CHAR(TO_NUMBER(RML_ID))
                                                        WHEN 'NO'  THEN 'NO USER'
                                                END
                                                COLLECTION_USER_ID,
                                                ( SELECT(SELECT RML_ID
                                                            FROM RML_HR_APPS_USER
                                                            WHERE ID = RML_HR_APPS_USER_ID
                                                        )
                                                FROM HR_EMP_APPS_ACCESS
                                                WHERE APPS_NAME = 'RML_COLL'
                                                AND USE_ID = TO_CHAR(TO_NUMBER(RML_ID))
                                                ) HR_USER_COLL
                                            FROM RML_COLL_APPS_USER
                                                where ACCESS_APP='RML_SAL'
                                                and USER_FOR='$emp_session_brand'
                                                AND RML_ID='$sall_emp_id'"
                                            );
                                            oci_execute(@$strSQL);
                                            $number = 0;

                                            while ($row = oci_fetch_assoc($strSQL)) {
                                                $number++;
                                                ?>
                                                <tr>
                                                    <td><?= $number; ?></td>
                                                    <td><?= $row['EMP_NAME']; ?></td>
                                                    <td><?= $row['RML_ID']; ?></td>

                                                    <td>
                                                        <?php
                                                        if ($row['HR_USER'] == '') {
                                                            ?>
                                                            <a target="_blank"
                                                                href="access_point.php?user_id=<?= $row['RML_ID'] . '&apps_name=RML_SAL' ?>"><button
                                                                    class="btn btn-primary edit-user">Access Page</button>
                                                            </a>
                                                            <?php
                                                        }
                                                        else {
                                                            echo $row['HR_USER'];
                                                        }

                                                        ?>
                                                    </td>

                                                    <td><?= $row['COLLECTION_USER_ID']; ?></td>
                                                    <td>
                                                        <?php
                                                        if ($row['HR_USER_COLL'] == '' && $row['COLLECTION_USER_ID'] != 'NO USER') {
                                                            ?>
                                                            <a href="access_point.php?user_id=<?= $row['COLLECTION_USER_ID'] . '&apps_name=RML_COLL' ?>">
                                                                <button class="btn btn-primary edit-user">Access Page</button>
                                                                ?>
                                                            </a>
                                                            <?php
                                                        }
                                                        else {
                                                            echo $row['HR_USER_COLL'];
                                                        }

                                                        ?>
                                                    </td>


                                                    <td><?= $row['AREA_ZONE']; ?></td>
                                                    <td><?= $row['LEASE_USER']; ?></td>

                                                    <td align="center">
                                                        <a target="_blank" href="user_edit.php?user_id=<?= $row['ID'] ?>"><button
                                                                class="btn btn-primary edit-user">Info. Edit <i class="flaticon-381-edit"></i></button>
                                                        </a>
                                                        <a target="_blank" href="user_district.php?user_id=<?= $row['RML_ID'] ?>"><button
                                                                class="btn btn-info user_district">D. Ass. <i class="flaticon-381-add"></i></button>
                                                        </a>
                                                    </td>
                                                    <td><?= $row['SAL_MM_ZH_ID']; ?></td>
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
                                                LEASE_USER,SAL_MM_ZH_ID,
                                                (SELECT(SELECT RML_ID FROM RML_HR_APPS_USER
                                                WHERE ID = RML_HR_APPS_USER_ID)
                                                FROM HR_EMP_APPS_ACCESS
                                                WHERE APPS_NAME = 'RML_SAL'
                                                AND USE_ID = RML_ID
                                                ) HR_USER,
                                                CASE APPS_USER_CREATE_CHACK(TO_CHAR(TO_NUMBER(RML_ID)),'RML_COLL')
                                                    WHEN 'YES' THEN TO_CHAR(TO_NUMBER(RML_ID))
                                                    WHEN 'NO'  THEN 'NO USER'
                                                END
                                                COLLECTION_USER_ID,
                                                ( SELECT(SELECT RML_ID FROM RML_HR_APPS_USER WHERE ID = RML_HR_APPS_USER_ID )
                                                FROM HR_EMP_APPS_ACCESS
                                                WHERE APPS_NAME = 'RML_COLL'
                                                AND USE_ID = TO_CHAR(TO_NUMBER(RML_ID))
                                                ) HR_USER_COLL
                                                FROM RML_COLL_APPS_USER
                                                where ACCESS_APP='RML_SAL'
                                                and IS_ACTIVE=1
                                                and USER_FOR='$emp_session_brand'
                                                and LEASE_USER='SE'
                                                order by AREA_ZONE"
                                            );

                                            $number = 0;
                                            if (oci_execute($allDataSQL)) {
                                                while ($row = oci_fetch_assoc($allDataSQL)) {
                                                    $number++;
                                                    ?>
                                                    <tr>
                                                        <td><?= $number; ?></td>
                                                        <td><?= $row['EMP_NAME']; ?></td>
                                                        <td><?= $row['RML_ID']; ?></td>

                                                        <td>
                                                            <?php
                                                            if ($row['HR_USER'] == '') {
                                                                ?>
                                                                <a target="_blank"
                                                                    href="access_point.php?user_id=<?= $row['RML_ID'] . '&apps_name=RML_SAL' ?>"><button
                                                                        class="btn btn-primary edit-user">Access Page</button>
                                                                </a>
                                                                <?php
                                                            }
                                                            else {
                                                                echo $row['HR_USER'];
                                                            }

                                                            ?>
                                                        </td>

                                                        <td><?= $row['COLLECTION_USER_ID']; ?></td>
                                                        <td>
                                                            <?php
                                                            if ($row['HR_USER_COLL'] == '' && $row['COLLECTION_USER_ID'] != 'NO USER') {
                                                                ?>
                                                                <a href="access_point.php?user_id=<?= $row['COLLECTION_USER_ID'] . '&apps_name=RML_COLL' ?>"><button
                                                                        class="btn btn-primary edit-user">Access Page</button>
                                                                </a>
                                                                <?php
                                                            }
                                                            else {
                                                                echo $row['HR_USER_COLL'];
                                                            }

                                                            ?>
                                                        </td>


                                                        <td><?= $row['AREA_ZONE']; ?></td>
                                                        <td><?= $row['LEASE_USER']; ?></td>

                                                        <td class="d-flex gap-2">
                                                            <a target="_blank" href="user_edit.php?user_id=<?= $row['ID'] ?>"><button
                                                                    class="btn btn-primary edit-user">Info. Edit <i class="flaticon-381-edit"></i></button>
                                                            </a>
                                                            <a target="_blank" href="user_district.php?user_id=<?= $row['RML_ID'] ?>"><button
                                                                    class="btn btn-info user_district">Dis. Ass. <i class="flaticon-381-add"></i></button>
                                                            </a>
                                                        </td>
                                                        <td><?= $row['SAL_MM_ZH_ID'] ?></td>
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