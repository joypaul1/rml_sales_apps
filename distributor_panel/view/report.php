<?php
$dynamic_link_css[] = "https://gymove.dexignzone.com/codeigniter/demo/public/assets/vendor/select2/css/select2.min.css";
$dynamic_link_css[] = "https://gymove.dexignzone.com/codeigniter/demo/public/assets/vendor/bootstrap-select/css/bootstrap-select.min.css";
$dynamic_link_js[] = "https://gymove.dexignzone.com/codeigniter/demo/public/assets/vendor/select2/js/select2.full.min.js";
$dynamic_link_js[] = "https://gymove.dexignzone.com/codeigniter/demo/public/assets/js/plugins-init/select2-init.js";
include_once('../../_helper/2step_com_conn.php');
$product_band = "Mahindra";
if ($emp_sesssion_band == "EICHER")
    $product_band = "Eicher";
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
                            Distributor Report
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="title">Select Application:</label>
                                    <select name="application_id" id="application_id" class="form-control">
                                        <option selected value="">--</option>
                                        <?php

                                        $strSQL  = oci_parse($objConnect, "SELECT ID,TITLE
																			FROM SAL_APPLICATION 
																			WHERE IS_ACTIVE=1");
                                        oci_execute($strSQL);
                                        while ($row = oci_fetch_assoc($strSQL)) {
                                        ?>
                                            <option value="<?php echo $row['ID']; ?>" <?php echo (isset($_POST['application_id']) && $_POST['application_id'] == $row['ID']) ? 'selected="selected"' : ''; ?>><?php echo $row['TITLE']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <label for="title">Select District:</label>
                                    <select name="district_name" id="district_name" class="form-control">
                                        <option selected value="">--</option>
                                        <?php

                                        $strSQL  = oci_parse($objConnect, "SELECT ID,DISTRICT_NAME
																				 FROM SALL_DISTRICT 
																		  WHERE IS_ACTIVE=1");
                                        oci_execute($strSQL);
                                        while ($row = oci_fetch_assoc($strSQL)) {
                                        ?>
                                            <option value="<?php echo $row['DISTRICT_NAME']; ?>" <?php echo (isset($_POST['district_name']) && $_POST['district_name'] == $row['DISTRICT_NAME']) ? 'selected="selected"' : ''; ?>><?php echo $row['DISTRICT_NAME']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <label for="title">Select Company:</label>
                                    <select name="company_id" id="company_id" class="form-control">
                                        <option selected value="">--</option>
                                        <?php

                                        $strSQL  = oci_parse($objConnect, "SELECT ID,COMPANY_NAME
																				 FROM SALL_COMPANY 
																		  WHERE IS_ACTIVE=1 ORDER BY COMPANY_NAME");
                                        oci_execute($strSQL);
                                        while ($row = oci_fetch_assoc($strSQL)) {
                                        ?>
                                            <option value="<?php echo $row['ID']; ?>" <?php echo (isset($_POST['company_id']) && $_POST['company_id'] == $row['ID']) ? 'selected="selected"' : ''; ?>><?php echo $row['COMPANY_NAME']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="title">Distributor Type:</label>
                                        <div id="department_id">
                                            <select name="distributor_type" id="distributor_type" class="form-control">
                                                <option selected value="">--</option>
                                                <option value="Exclusive" <?php echo (isset($_POST['distributor_type']) && $_POST['distributor_type'] == 'Exclusive') ? 'selected="selected"' : ''; ?>>Exclusive</option>
                                                <option value="Non Exclusive" <?php echo (isset($_POST['distributor_type']) && $_POST['distributor_type'] == 'Non Exclusive') ? 'selected="selected"' : ''; ?>>Non Exclusive</option>

                                            </select>
                                        </div>
                                    </div>
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
                                        <th scope="col">
                                            <center>Sl No</center>
                                        </th>
                                        <th scope="col">
                                            <center>Executive Name</center>
                                        </th>
                                        <th scope="col">
                                            <center>Zone</center>
                                        </th>
                                        <th scope="col">
                                            <center>Application Name</center>
                                        </th>
                                        <th scope="col">
                                            <center>Distributor Name</center>
                                        </th>
                                        <th scope="col">
                                            <center>Propritor Name</center>
                                        </th>
                                        <th scope="col">
                                            <center>Propritor Mobile</center>
                                        </th>
                                        <th scope="col">
                                            <center>Distributor Type</center>
                                        </th>
                                        <th scope="col">
                                            <center>District Name</center>
                                        </th>
                                        <th scope="col">
                                            <center>Company Name</center>
                                        </th>
                                        <th scope="col">
                                            <center>Distributor Address</center>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php

                                    if (isset($_POST['application_id'])) {
                                        $distributor_type = $_REQUEST['distributor_type'];
                                        $company_id = $_REQUEST['company_id'];
                                        $application_id = $_REQUEST['application_id'];
                                        $district_name = $_REQUEST['district_name'];


                                        $strSQL  = oci_parse($objConnect, "SELECT ID,
																	 (select LABEL from SALL_ZONE_TREE where id=ZONE_ID) ZONE_NAME,
																	 ( select EMP_NAME from RML_COLL_APPS_USER where RML_ID=CREATED_BY) CREATED_BY,
																	 ( select AREA_ZONE from RML_COLL_APPS_USER where RML_ID=CREATED_BY) ZONE_NAME,
																	 DISTRICT_NAME,
																	 (select TITLE from SAL_APPLICATION where id=APPLICATION_ID) APPLICATION_NAME,
																	 (select COMPANY_NAME from SALL_COMPANY where id=COMPANY_ID) COMPANY_NAME,
																	 DISTRIBUTOR_NAME,
																	 PROPRITOR_NAME,
																	 PROPRITOR_PHONE,
																	 DISTRIBUTOR_TYPE,
																	 DISTRIBUTOR_ADDRESS
																FROM SAL_DISTRIBUTOR_LIST 
																  WHERE IS_ACTIVE=1
																  AND ('$distributor_type' is null OR DISTRIBUTOR_TYPE='$distributor_type')
																  AND ('$company_id' is null OR COMPANY_ID='$company_id')
																  AND ('$application_id' is null OR APPLICATION_ID='$application_id')
																  AND ('$district_name' is null OR DISTRICT_NAME='$district_name')
																  ");

                                        oci_execute($strSQL);
                                        $number = 0;
                                        while ($row = oci_fetch_assoc($strSQL)) {
                                            $number++;
                                    ?>
                                            <tr>
                                                <td><?php echo $number; ?></td>
                                                <td align="center"><?php echo $row['CREATED_BY']; ?></td>
                                                <td align="center"><?php echo $row['ZONE_NAME']; ?></td>
                                                <td align="center"><?php echo $row['APPLICATION_NAME']; ?></td>
                                                <td><?php echo $row['DISTRIBUTOR_NAME']; ?></td>
                                                <td><?php echo $row['PROPRITOR_NAME']; ?></td>
                                                <td><?php echo $row['PROPRITOR_PHONE']; ?></td>
                                                <td align="center"><?php echo $row['DISTRIBUTOR_TYPE']; ?></td>

                                                <td><?php echo $row['DISTRICT_NAME']; ?></td>
                                                <td><?php echo $row['COMPANY_NAME']; ?></td>
                                                <td><?php echo $row['DISTRIBUTOR_ADDRESS']; ?></td>

                                            </tr>
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