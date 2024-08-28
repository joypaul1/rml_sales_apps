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
                            Sales Executive Wise Lead Information Report
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-sm-3">
                                    <select required="" name="emp_id" data-live-search="true" style="width:100%;">
                                        <option selected value="">Select Executive</option>
                                        <option value="ALL">ALL</option>
                                        <?php

                                        $strSQL = oci_parse($objConnect, "SELECT RML_ID,EMP_NAME from RML_COLL_APPS_USER
													    where ACCESS_APP= 'RML_SAL'
													    and IS_ACTIVE=1
													    and LEASE_USER='SE'
                                                        AND USER_TYPE ='R-U'
													    order by  EMP_NAME ");
                                        oci_execute($strSQL);
                                        while ($row = oci_fetch_assoc($strSQL)) {
                                            ?>

                                            <option value="<?php echo $row['RML_ID']; ?>"><?php echo $row['EMP_NAME']; ?>
                                            </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <input required="" class="form-control" type='date' name='start_date'
                                            value='<?php echo isset($_POST['start_date']) ? $_POST['start_date'] : ''; ?>' />
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <input required="" class="form-control" type='date' name='end_date'
                                            value='<?php echo isset($_POST['end_date']) ? $_POST['end_date'] : ''; ?>' />
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <select name="lead_mode" class="form-control">
                                        <option selected value="">Select Mode</option>
                                        <option value="Q0">Q0</option>
                                        <option value="Q1">Q1</option>
                                        <option value="Q2">Q2</option>
                                        <option value="Q3">Q3</option>
                                    </select>

                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <div class=" text-end">
                                    <button class=" btn btn-primary" type="submit" value="Load Data">
                                        Load Data
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>


                    <div class="card card-body ">
                        <div class="row col-12 table-responsive">
                            <table class="table  table-bordered table-sm" id="table" cellspacing="0" width="100%">
                                <thead class="table-success">
                                    <tr>
                                        <th>
                                            <center>Sl</center>
                                        </th>
                                        <th>
                                            <center>DSE Name</center>
                                        </th>
                                        <th>
                                            <center>DSE ID</center>
                                        </th>
                                        <th>
                                            <center>Zonal Head</center>
                                        </th>
                                        <th>
                                            <center>Customer Name</center>
                                        </th>
                                        <th>
                                            <center>Model</center>
                                        </th>
                                        <th>
                                            <center>Customer Mobile</center>
                                        </th>
                                        <th>
                                            <center>Customer Type</center>
                                        </th>
                                        <th>
                                            <center>Quantity</center>
                                        </th>
                                        <th>
                                            <center>Customer Address</center>
                                        </th>
                                        <th>
                                            <center>District</center>
                                        </th>
                                        <th>
                                            <center>Upazela</center>
                                        </th>
                                        <th>
                                            <center>DSE Zone</center>
                                        </th>
                                        <th>
                                            <center>Entry Date</center>
                                        </th>
                                        <th>
                                            <center>Entry Time</center>
                                        </th>
                                        <th>
                                            <center>Method</center>
                                        </th>
                                        <th>
                                            <center>Contact Mode</center>
                                        </th>
                                        <th>
                                            <center>SOURCE OF ENQ</center>
                                        </th>
                                        <th>
                                            <center>Lead Mode</center>
                                        </th>
                                        <th>
                                            <center>Application Type</center>
                                        </th>
                                        <th>
                                            <center>Reason of Lost</center>
                                        </th>
                                        <th>
                                            <center>Status</center>
                                        </th>
                                        <th>
                                            <center>Next Follow Up</center>
                                        </th>
                                        <th>
                                            <center>Possible Purchases Date</center>
                                        </th>
                                        <th>
                                            <center>Lead Status</center>
                                        </th>
                                        <th>
                                            <center>Brand</center>
                                        </th>
                                        <th>
                                            <center>Lat</center>
                                        </th>
                                        <th>
                                            <center>Lang</center>
                                        </th>
                                        <th>
                                            <center>Lead ID</center>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php
                                    if (isset($_POST['emp_id'])) {

                                        $emp_id = $_REQUEST['emp_id'];
                                        $lead_mode = $_REQUEST['lead_mode'];
                                        $attn_start_date = date("d/m/Y", strtotime($_REQUEST['start_date']));
                                        $attn_end_date = date("d/m/Y", strtotime($_REQUEST['end_date']));
                                        if ($emp_id == "ALL") {
                                            $strSQL = oci_parse(
                                                $objConnect,
                                                "SELECT aa.ID,aa.ENTRY_BY,aa.CUST_TYPE,
                                                aa.ENTRY_BY,
                                                aa.ZONE_NAME,
                                                bb.EMP_NAME,
                                                bb.AREA_ZONE,
                                                CUST_NAME,
                                                APPLICATION_TYPE,
                                                INTERESTED_MODEL,
                                                CUST_MOBL_1,
                                                SALES_POTENTIAL,
                                                CUST_ADR_1,
                                                VISIT_DATE,
                                                INTEREST_METHOD,
                                                CUST_TYPE,
                                                SOURCE_OF_ENQ,
                                                CONTACT_MODE,
                                                MODE_TYPE,
                                                USES_SEGMENT,
                                                TO_DATE(ENTRY_DATE,'dd/mm/YYYY') ENTRY_DATE,
												TO_CHAR(ENTRY_DATE,'HH24:MI:SS AM') ENTRY_TIME,
                                                FOLLOW_UP_METHOD,
                                                PSBL_PURCHASES_DATE,
                                                aa.UPAZELA_NAME,
                                                STATUS,
                                                APPLICATION_TYPE,
                                                REASON_OF_LOST,
                                                SAL_MM_ZH_ID AS ZH,
												(select uu.EMP_NAME from RML_COLL_APPS_USER uu where uu.RML_ID=bb.SAL_MM_ZH_ID) ZH_NAME,
                                                (select count(ID) from SAL_LEADS_FOLLOWUP mm where mm.SAL_LEADS_GEN_ID=AA.ID) LEAD_NEW_OLD,
                                                aa.INTERESTED_BRAND,aa.LAT,aa.LANG
                                            FROM SAL_LEADS_GEN aa,RML_COLL_APPS_USER bb
                                            where aa.ENTRY_BY=bb.RML_ID
                                            AND bb.USER_TYPE ='R-U' 
                                            AND bb.IS_ACTIVE = 1
                                            and ('$lead_mode' is null OR MODE_TYPE='$lead_mode')
                                            and trunc(ENTRY_DATE) between to_date('$attn_start_date','dd/mm/yyyy') and to_date('$attn_end_date','dd/mm/yyyy')"
                                            );
                                        } else {
                                            $strSQL = oci_parse(
                                                $objConnect,
                                                "SELECT aa.ID,aa.ENTRY_BY,aa.CUST_TYPE,
                                                    aa.ENTRY_BY,
                                                    aa.ZONE_NAME,
                                                    bb.EMP_NAME,
                                                    CUST_NAME,
                                                    bb.AREA_ZONE,
                                                    APPLICATION_TYPE,
                                                    REASON_OF_LOST,
                                                    INTERESTED_MODEL,
                                                    PSBL_PURCHASES_DATE,
                                                    CUST_MOBL_1,
                                                    SAL_MM_ZH_ID AS ZH,
													(select uu.EMP_NAME from RML_COLL_APPS_USER uu where uu.RML_ID=bb.SAL_MM_ZH_ID) ZH_NAME,
                                                    SALES_POTENTIAL,
                                                    CUST_ADR_1,
                                                    VISIT_DATE,
                                                    INTEREST_METHOD,
                                                    CUST_TYPE,
													TO_DATE(ENTRY_DATE,'dd/mm/YYYY') ENTRY_DATE,
													 TO_CHAR(ENTRY_DATE,'HH24:MI:SS AM') ENTRY_TIME,
                                                    SOURCE_OF_ENQ,
                                                    aa.UPAZELA_NAME,
                                                    CONTACT_MODE,MODE_TYPE,USES_SEGMENT,
                                                    FOLLOW_UP_METHOD,
                                                    STATUS,
                                                    (select count(ID) from SAL_LEADS_FOLLOWUP mm where mm.SAL_LEADS_GEN_ID=AA.ID) LEAD_NEW_OLD,
                                                    aa.INTERESTED_BRAND,aa.LAT,aa.LANG
                                                FROM SAL_LEADS_GEN aa,RML_COLL_APPS_USER bb
                                                WHERE aa.ENTRY_BY=bb.RML_ID
                                                AND bb.USER_TYPE = 'R-U'
                                                AND aa.ENTRY_BY='$emp_id'
                                                AND ('$lead_mode' is null OR MODE_TYPE='$lead_mode')
                                                AND trunc(ENTRY_DATE) between to_date('$attn_start_date','dd/mm/yyyy') and to_date('$attn_end_date','dd/mm/yyyy')"
                                            );
                                        }

                                        ini_set('max_execution_time', 0);
                                        set_time_limit(1800);
                                        ini_set('memory_limit', '-1');
                                        oci_execute($strSQL);
                                        $number = 0;
                                        while ($row = oci_fetch_assoc($strSQL)) {
                                            $number++;
                                            ?>
                                            <tr>
                                                <td><?php echo $number; ?></td>
                                                <td><?php echo $row['EMP_NAME']; ?></td>
                                                <td><?php echo $row['ENTRY_BY']; ?></td>
                                                <td><?php
                                                echo $row['ZH_NAME'] . '[' . $row['ZH'] . ']';
                                                ?></td>
                                                <td><?php echo $row['CUST_NAME']; ?></td>
                                                <td><?php echo $row['INTERESTED_MODEL']; ?></td>
                                                <td align="center"><?php echo $row['CUST_MOBL_1']; ?></td>
                                                <td align="center"><?php echo $row['CUST_TYPE']; ?></td>
                                                <td align="center"><?php echo $row['SALES_POTENTIAL']; ?></td>
                                                <td><?php echo $row['CUST_ADR_1']; ?></td>
                                                <td><?php echo $row['ZONE_NAME']; ?></td>
                                                <td><?php echo $row['UPAZELA_NAME']; ?></td>
                                                <td><?php echo $row['AREA_ZONE']; ?></td>
                                                <td><?php echo $row['ENTRY_DATE']; ?></td>
                                                <td><?php echo $row['ENTRY_TIME']; ?></td>
                                                <td><?php echo $row['INTEREST_METHOD']; ?></td>
                                                <td><?php echo $row['CONTACT_MODE']; ?></td>
                                                <td><?php echo $row['SOURCE_OF_ENQ']; ?></td>
                                                <td><?php echo $row['MODE_TYPE']; ?></td>
                                                <td><?php echo $row['APPLICATION_TYPE']; ?></td>
                                                <td><?php echo $row['REASON_OF_LOST']; ?></td>
                                                <td><?php echo $row['STATUS']; ?></td>
                                                <td><?php
                                                echo $row['VISIT_DATE'];
                                                ?>
                                                </td>
                                                <td><?php echo $row['PSBL_PURCHASES_DATE']; ?></td>
                                                <td><?php if ($row['LEAD_NEW_OLD'] > 1)
                                                    echo 'Re-Visit [' . $row['LEAD_NEW_OLD'] . ']';
                                                else
                                                    echo 'New';
                                                ?></td>
                                                <td><?php echo $row['INTERESTED_BRAND']; ?></td>
                                                <td><?php echo $row['LAT']; ?></td>
                                                <td><?php echo $row['LANG']; ?></td>
                                                <td><?php echo $row['ID']; ?></td>

                                            </tr>
                                            <?php

                                        }
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