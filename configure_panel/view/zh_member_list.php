<?php
include_once('../../_helper/2step_com_conn.php');
$V_USER_BRAND = $_SESSION['SALES_USER_INFO']['brand'];
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
                            <i class="flaticon-381-diploma"></i> Member List
                        </div>
                    </div>


                    <div class="card card-body ">
                        <div class="row col-12 table-responsive">
                            <table class="table  table-bordered table-sm" id="table" cellspacing="0" width="100%">
                                <thead class="table-success">
                                    <tr>
                                        <th scope="col">Sl</th>
                                        <th scope="col">Concern Name</th>
                                        <th scope="col">Concern ID</th>
                                        <th scope="col">Mobile</th>
                                        <th scope="col">Zone</th>
                                        <th scope="col">Brand</th>
                                        <!-- <th scope="col">ETB</th> -->
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php

                                    // @$attn_status = $_REQUEST['attn_status'];
                                    // @$attn_start_date = date("d/m/Y", strtotime($_REQUEST['start_date']));
                                    // @$attn_end_date = date("d/m/Y", strtotime($_REQUEST['end_date']));
                                    $strSQL = oci_parse($objConnect, "SELECT ID,EMP_NAME,
                                            RML_ID,
                                            MOBILE_NO,
                                            IS_ACTIVE,
                                            AREA_ZONE,
                                            IEMI_NO,
                                            CREATED_DATE,USER_FOR,USER_FOR_EBT
                                            from RML_COLL_APPS_USER
                                            where ACCESS_APP='RML_SAL'
                                            and IS_ACTIVE=1
                                            and LEASE_USER='SE'
                                            and SAL_MM_ZH_ID='$emp_session_id'");
                                    oci_execute($strSQL);
                                    $number = 0;


                                    while ($row = oci_fetch_assoc($strSQL)) {
                                        $number++;
                                        ?>
                                        <tr>
                                            <td><?php echo $number; ?></td>
                                            <td><?php echo $row['EMP_NAME'];?></td>
                                            <td><?php echo $row['RML_ID'];?></td>
                                            <td><?php echo $row['MOBILE_NO'];?></td>
                                            <td><?php echo $row['AREA_ZONE'];?></td>
                                            <td><?php echo $row['USER_FOR'];?></td>
                                            <!-- <td><?php echo $row['USER_FOR_EBT'];?></td> -->

                                        </tr>
                                        <?php

                                    }
                                    ?>
                                </tbody>

                            </table>
                            <div class='text-end'>
                                <a class="btn btn-success" id="downloadLink" onclick="exportF(this)"
                                    style="margin-left:5px;">Export to Excel</a>
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