<?php
include_once('../_helper/com_conn.php');


// $DATE_INFO_QUARRY = "SELECT START_DATE,END_DATE FROM COLL_TARGET_DATE_SETUP WHERE STATUS=1";
// $strSQLDATE = @oci_parse($objConnect, $DATE_INFO_QUARRY);
// @oci_execute($strSQLDATE);
// $dataforDate = @oci_fetch_assoc($strSQLDATE);
// $v_start_date = date("d/m/Y", strtotime($dataforDate['START_DATE']));
// $v_end_date = date("d/m/Y", strtotime($dataforDate['END_DATE']));

// $V_MONTH_START_DAY   = date('t/m/Y');
// $V_MONTH_END_DAY = date('01/m/Y');
// $ZONE_WISECOLL_DATA = []; // Initialize the array to store fetched data

// // Assuming $objConnect is your Oracle connection object and $ZONEWISECOLL_INFO_QUARRY is the SQL query

// $ZONEWISECOLL_INFO_QUARRY = "SELECT K.ZONE_NAME,
// (
// SELECT SUM (AMOUNT) TOTAL_AMOUNT
//     FROM RML_COLL_MONEY_COLLECTION A, RML_COLL_APPS_USER B
//         WHERE     A.RML_COLL_APPS_USER_ID = B.ID
//         AND B.AREA_ZONE = K.ZONE_NAME
//             AND TRUNC (A.CREATED_DATE) BETWEEN TO_DATE ('01/04/2024','dd/mm/yyyy') AND TO_DATE ('30/04/2024','dd/mm/yyyy')
//             AND A.BRAND = 'MAHINDRA'
//             AND B.USER_TYPE='C-C'
// )MM_TOTAL
// FROM COLL_EMP_ZONE_SETUP K
// WHERE K.IS_ACTIVE = 1
// AND K.USER_TYPE='C-C'
// ORDER BY K.ZONE_NAME";

// $ZONEWISECOLLSQL = oci_parse($objConnect, $ZONEWISECOLL_INFO_QUARRY); // Parse the SQL query

// oci_execute($ZONEWISECOLLSQL); // Execute the parsed query

// while ($data = oci_fetch_assoc($ZONEWISECOLLSQL)) { // Fetch each row as an associative array
//     $ZONE_WISECOLL_DATA[] = array(
//         'ZONE_NAME' => $data['ZONE_NAME'],
//         'MM_TOTAL' => $data['MM_TOTAL']
//     );
// }
// print_r( $_SESSION['USER_INFO']);
?>

<!--start page wrapper -->
<div class="row">
    <div class="col-xl-6 col-xxl-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    REPORT
                </div>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="title">Select Brand:</label>
                                <select required="" name="product_brand" class="form-control">
                                    <?php
                                    if ($emp_sesssion_band == "EICHER") {
                                    ?>
                                        <option selected value="Eicher">Eicher</option>
                                        <option value="Mahindra">MM</option>
                                    <?php
                                    }
                                    if ($emp_sesssion_band == "MM") {
                                    ?>
                                        <option selected value="Mahindra">MM</option>
                                        <option value="Eicher">Eicher</option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label for="title">Entry From:</label>
                            <div class="input-group">
                                <input required="" class="form-control" type='date' name='start_date' value='<?php echo isset($_POST['start_date']) ? $_POST['start_date'] : ''; ?>' />
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label for="title">Entry To:</label>
                            <div class="input-group">
                                <input required="" class="form-control" type='date' name='end_date' value='<?php echo isset($_POST['end_date']) ? $_POST['end_date'] : ''; ?>' />
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="title">Select Product:</label>
                                <select name="product_type" class="form-control">
                                    <option value="">....</option>
                                    <?php
                                    if ($emp_sesssion_band == "EICHER") {
                                    ?>

                                        <option value="Bus">BUS</option>
                                        <option value="Truck">TRUCK</option>
                                    <?php
                                    }
                                    if ($emp_sesssion_band == "MM") {
                                    ?>
                                        <option value="Human Huler">Human Huler</option>
                                        <option value="3 Wheeler">3 Wheeler</option>
                                        <option value="PICUK UP">PICUK UP</option>
                                    <?php
                                    }
                                    ?>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-9"></div>
                        <div class="col-sm-3">
                            <input class="form-control btn btn-primary" type="submit" value="Load Data">
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
    <!--end page wrapper -->

    <?php

    include_once('../_includes/footer_info.php');
    include_once('../_includes/footer.php');
    ?>