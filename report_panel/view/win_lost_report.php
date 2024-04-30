<?php
include_once('../../_helper/2step_com_conn.php');
$emp_session_band = $_SESSION['brand'];
$product_band = "Mahindra";
if ($emp_session_band == "EICHER")
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
                            Lead Win Lost Report
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="title">SE ID</label>
                                    <div class="input-group">
                                        <input class="form-control" placeholder="SE ID" type='text' name='se_id' value='<?php echo isset($_POST['se_id']) ? $_POST['se_id'] : ''; ?>' />
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <label for="title"> From Date:</label>

                                    <div class="input-group">
                                        <input required class="form-control" type='date' name='start_date' value='<?php echo isset($_POST['start_date']) ? $_POST['start_date'] : ''; ?>' />
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <label for="title"> To Date:</label>

                                    <div class="input-group">
                                        <input required class="form-control" type='date' name='end_date' value='<?php echo isset($_POST['end_date']) ? $_POST['end_date'] : ''; ?>' />
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <label for="title">Select Win/Loss:</label>
                                    <select required name="lead_status" class="form-control">
                                        <option value="Win">Win</option>
                                        <option value="Lost">Lost</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mt-2">
                                <div class="text-end">
                                    <button class=" btn btn-primary" type="submit" value="Load Data">
                                        Submit & Load Data
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
                                            <center>SL</center>
                                        </th>
                                        <th scope="col">
                                            <center>SE ID</center>
                                        </th>
                                        <th scope="col">
                                            <center>Product Type</center>
                                        </th>
                                        <th scope="col">
                                            <center>Model</center>
                                        </th>
                                        <th scope="col">
                                            <center>Quantity</center>
                                        </th>
                                        <th scope="col">
                                            <center>Customer Name</center>
                                        </th>
                                        <th scope="col">
                                            <center>Customer Mobile</center>
                                        </th>
                                        <th scope="col">
                                            <center>Customer Address</center>
                                        </th>
                                        <th scope="col">
                                            <center>Source</center>
                                        </th>
                                        <th scope="col">
                                            <center>Leads Mode</center>
                                        </th>
                                        <th scope="col">
                                            <center>Aggread Amount</center>
                                        </th>
                                        <th scope="col">
                                            <center>Aggread Date</center>
                                        </th>
                                        <th scope="col">
                                            <center>Application Type</center>
                                        </th>
                                        <th scope="col">
                                            <center>Leads ID </center>
                                        </th>
                                        <th scope="col">
                                            <center>Leads Status </center>
                                        </th>
                                        <th scope="col">
                                            <center>Win/Loss Date </center>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php



                                    if (isset($_POST['se_id'])) {

                                        $se_id = $_REQUEST['se_id'];
                                        $status = $_REQUEST['lead_status'];
                                        $v_start_date = date("d/m/Y", strtotime($_REQUEST['start_date']));
                                        $v_end_date = date("d/m/Y", strtotime($_REQUEST['end_date']));
                                        $strSQL  = oci_parse($objConnect, "SELECT ID,
                                             ENTRY_BY,
                                             CUST_NAME,
                                             CUST_ADR_1,
                                             CUST_MOBL_1,
                                             ENTRY_DATE,
                                             CONTACT_MODE,
                                             PRODUCT_TYPE,
                                             INTERESTED_MODEL,
                                             INTERESTED_BRAND,
                                             SALES_POTENTIAL,
                                             INTEREST_METHOD,
                                             SOURCE_OF_ENQ,
                                             MODE_TYPE,
                                             CUSTOMER_AGREED_AMOUNT,
                                             CUSTOMER_AGREED_SALES_DATE,
                                             STATUS,
                                             WIN_DATE,
                                             APPLICATION_TYPE
                                            from SAL_LEADS_GEN
                                            where trunc(ENTRY_DATE) between to_date('$v_start_date','dd/mm/yyyy') and to_date('$v_end_date','dd/mm/yyyy')
                                            AND STATUS='$status'
                                            AND INTERESTED_BRAND='$product_band'
                                            and ('$se_id' is null OR ENTRY_BY='$se_id')
                                            ");

                                        oci_execute($strSQL);
                                        $number = 0;
                                        while ($row = oci_fetch_assoc($strSQL)) {
                                            $number++;
                                    ?>
                                            <tr>
                                                <td><?php echo $number; ?></td>
                                                <td align="center"><?php echo $row['ENTRY_BY']; ?></td>
                                                <td align="center"><?php echo $row['PRODUCT_TYPE']; ?></td>
                                                <td align="center"><?php echo $row['INTERESTED_MODEL']; ?></td>
                                                <td align="center"><?php echo $row['SALES_POTENTIAL']; ?></td>
                                                <td><?php echo $row['CUST_NAME']; ?></td>
                                                <td><?php echo $row['CUST_MOBL_1']; ?></td>
                                                <td align="center"><?php echo $row['CUST_ADR_1']; ?></td>

                                                <td><?php echo $row['SOURCE_OF_ENQ']; ?></td>
                                                <td><?php echo $row['MODE_TYPE']; ?></td>
                                                <td><?php echo $row['CUSTOMER_AGREED_AMOUNT']; ?></td>
                                                <td><?php echo $row['CUSTOMER_AGREED_SALES_DATE']; ?></td>
                                                <td><?php echo $row['APPLICATION_TYPE']; ?></td>
                                                <td><?php echo $row['ID']; ?></td>
                                                <td><?php echo $row['STATUS']; ?></td>
                                                <td><?php echo $row['WIN_DATE']; ?></td>

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