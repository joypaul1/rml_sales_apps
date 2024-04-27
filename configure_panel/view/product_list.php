<?php
include_once('../../_helper/2step_com_conn.php');
$V_USER_BRAND = $_SESSION['USER_INFO']['brand'];
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
                            Product List
                        </div>
                    </div>


                    <div class="card card-body ">
                        <div class="row col-12 table-responsive">
                            <table class="table  table-bordered table-sm" id="table" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th scope="col">Sl</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Model Name</th>
                                        <th scope="col">Brand</th>
                                        <th scope="col">Created By</th>
                                        <th scope="col">Created Date</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php

                                    @$attn_status = $_REQUEST['attn_status'];
                                    @$attn_start_date = date("d/m/Y", strtotime($_REQUEST['start_date']));
                                    @$attn_end_date = date("d/m/Y", strtotime($_REQUEST['end_date']));
                                    $strSQL  = oci_parse($objConnect, "SELECT
												ID,
												PRODUCT_NAME,
												MODEL_NAME,
												BUSSINESS_NAME, CREATED_BY,CREATED_DATE,
												STATUS
												FROM SAL_PRODUCT_SETUP
												WHERE BUSSINESS_NAME='$V_USER_BRAND'");
                                    oci_execute($strSQL);
                                    $number = 0;


                                    while ($row = oci_fetch_assoc($strSQL)) {
                                        $number++;
                                    ?>
                                        <tr>
                                            <td><?php echo $number; ?></td>
                                            <td><?php echo $row['PRODUCT_NAME']; ?></td>
                                            <td><?php echo $row['MODEL_NAME']; ?></td>
                                            <td><?php echo $row['BUSSINESS_NAME']; ?></td>
                                            <td><?php echo $row['CREATED_BY']; ?></td>
                                            <td><?php echo $row['CREATED_DATE']; ?></td>
                                            <td><?php
                                                if ($row['STATUS'] == 1)
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