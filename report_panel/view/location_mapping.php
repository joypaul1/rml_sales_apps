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
                            Location Mapping Report
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-sm-3">
                                    <select required="" name="emp_id" data-live-search="true" style="width:100%;">
                                        <option selected value="">Select Executive</option>
                                        <!-- <option value="ALL">ALL</option> -->
                                        <?php
                                        $strSQL = oci_parse($objConnect, "SELECT RML_ID,EMP_NAME from RML_COLL_APPS_USER         
													  where ACCESS_APP= 'RML_SAL'    
													  and IS_ACTIVE=1     
													  and LEASE_USER='SE'   
													  order by  EMP_NAME ");
                                        oci_execute($strSQL);
                                        while ($row = oci_fetch_assoc($strSQL)) {
                                            ?>
                                            <option value="<?php echo $row['RML_ID']; ?>"><?php echo $row['EMP_NAME']; ?></option>
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
										<th> <center>Location </center> </th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php
                                    if (isset($_POST['emp_id'])) {

                                        $emp_id          = $_REQUEST['emp_id'];
                                        $lead_mode       = $_REQUEST['lead_mode'];
                                        $start_date = date("d/m/Y", strtotime($_REQUEST['start_date']));
                                        $end_date   = date("d/m/Y", strtotime($_REQUEST['start_date']));
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
                                                 TO_CHAR(ENTRY_DATE,'dd/mm/yyyy HH24:MI:SS AM') ENTRY_DATE,
                                                SOURCE_OF_ENQ,
                                                aa.UPAZELA_NAME,
                                                CONTACT_MODE,MODE_TYPE,USES_SEGMENT,
                                                FOLLOW_UP_METHOD,
                                                STATUS,
                                                (select count(ID) from SAL_LEADS_FOLLOWUP mm where mm.SAL_LEADS_GEN_ID=AA.ID) LEAD_NEW_OLD,
                                                aa.INTERESTED_BRAND,aa.LAT,aa.LANG
                                            FROM SAL_LEADS_GEN aa,RML_COLL_APPS_USER bb
                                            WHERE aa.ENTRY_BY=bb.RML_ID
                                            AND aa.ENTRY_BY='$emp_id'
                                            AND ('$lead_mode' is null OR MODE_TYPE='$lead_mode')
                                            AND trunc(ENTRY_DATE) between to_date('$start_date','dd/mm/yyyy') and to_date('$end_date','dd/mm/yyyy')"
                                        );
                                        ini_set('max_execution_time', 0);
                                        set_time_limit(1800);
                                        ini_set('memory_limit', '-1');
                                        oci_execute($strSQL);
                                        $number = 0;
                                        while ($row = oci_fetch_assoc($strSQL)) {
                                            $number++;
                                            ?>
                                            <tr>
                                                <td><?php echo $number; ?>
                                                <img src="https://maps.googleapis.com/maps/api/staticmap?center=New+York,NY&zoom=12&size=400x400
                                                &markers=color:red%7Clabel:A%7C40.702147,-74.015794
                                                &markers=color:blue%7Clabel:B%7C40.711614,-74.012318
                                                &markers=color:green%7Clabel:C%7C40.718217,-73.998284
                                                &key=AIzaSyBDQDOeUoFxB8GptvYRk9f_lR1UFRawVO0" alt="Map of New York City"> </td>
                                                <td class='text-center'>
                                                <a class="btn btn-sm text-info" 
                                                    href="http://www.google.com/maps/place/<?php echo $row['LAT'] ?>,<?php echo $row['LANG'] ?>" 
                                                    target="_blank">
                                                    <i class="flaticon-381-map-2"></i>
                                                </a>
                                            <?php
                                        }
                                    }
                                    ?>
                                </tbody>

                            </table>
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