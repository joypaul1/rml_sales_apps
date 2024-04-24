<?php
$dynamic_link_css[] = '../../assets/plugins/select2/css/select2.min.css';
$dynamic_link_css[] = '../../assets/plugins/datetimepicker/css/classic.css';
$dynamic_link_css[] = '../../assets/plugins/datetimepicker/css/classic.date.css';
$dynamic_link_css[] = '../../assets/plugins/select2/css/select2-bootstrap4.css';
$dynamic_link_js[]  = '../../assets/plugins/select2/js/select2.min.js';
$dynamic_link_js[]  = '../../assets/plugins/datetimepicker/js/picker.js';
$dynamic_link_js[]  = '../../assets/plugins/datetimepicker/js/picker.date.js';
$dynamic_link_js[]  = '../../assets/plugins/bootstrap-material-datetimepicker/js/moment.min.js';
$dynamic_link_js[]  = '../../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.min.js';

include_once('../../_helper/2step_com_conn.php');

//pagination data per page
define('RECORDS_PER_PAGE', 10);
$currentPage  = isset($_GET['page']) ? $_GET['page'] : 1;

?>

<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">


        <div class="row">
            <div class="card rounded-4">
                <div class="card-body">

                    <button class="accordion-button" style="color:#0dcaf0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <strong><i class='bx bx-filter-alt'></i> Filter Data</strong>
                    </button>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">

                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-sm-3"></div>
											<div class="col-sm-3">
                                                <label>Select Your Concern:</label>
                                                <select name="emp_concern" class="form-control single-select">
                                                    <option value="<?php echo null ?>" hidden><- Select Concern -></option>
                                                    <?php
                                                    $strSQL = oci_parse($objConnect, "SELECT CONCERN, RML_ID FROM MONTLY_COLLECTION WHERE IS_ACTIVE=1 AND ZONAL_HEAD='$emp_session_id'");
                                                    oci_execute($strSQL);

                                                    while ($row = oci_fetch_assoc($strSQL)) {
                                                        $selected = (isset($_POST['emp_concern']) && $_POST['emp_concern'] == $row['RML_ID']) ? 'selected' : '';
                                                    ?>
                                                        <option value="<?php echo $row['RML_ID']; ?>" <?php echo $selected; ?>>
                                                            <?php echo $row['CONCERN']; ?>
                                                        </option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>

                                            </div>
                                            <div class="col-sm-3">
                                                <label>Visit Data: </label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar">
                                                        </i>
                                                    </div>
                                                    <input disabled class="form-control"  name="start_date" type="text" value='<?php echo isset($_POST['start_date']) ? $_POST['start_date'] : date('d-m-Y'); ?>'/>
                                                </div>

                                            </div>
                                            <div class="col-sm-3">
                                                <button class="form-control  btn btn-sm btn-gradient-primary mt-4" type="submit">Search Data<i class='bx bx-file-find'></i></button>
                                            </div>



                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="card rounded-4">
                <?php

                $headerType   = 'List';
                $leftSideName = 'Visit Approval List';
                include('../../_includes/com_header.php');
                ?>
                <div class="card-body">
                    <form action="<?php echo ($basePath . '/zh_module/action/self_panel.php'); ?>" method="post">
                        <div class="table-responsive">
                            <table class="table table-sm table-bordered align-middle mb-0">
                                <thead class="table-cust text-uppercase text-center ">
                                    <tr>
                                        <th>SL.</th>
                                        <th>Select</th>
                                        <th>Customer Information</th>
                                        <th>Concern Information </th>
                                        <th>Visit Information</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $v_start_date = date('d/m/Y');
                                    if (isset($_POST['start_date'])) {
                                        $v_start_date = date("d/m/Y", strtotime($_REQUEST['start_date']));
                                    }
                                   

                                    //query statement 
                                    $offset = ($currentPage  - 1) * RECORDS_PER_PAGE;
                                    $approval_time=0;
                                    $query  = "SELECT B.ID, 
									            TO_NUMBER(to_char(SYSDATE, 'hh24')) CURRENT_HOUR,
												 TO_NUMBER(to_char(SYSDATE, 'MI')) CURRENT_MINUTE,
                                                A.REF_ID,
                                                A.ASSIGN_DATE,
                                                A.CREATED_BY CONCERN_ID,C.AREA_ZONE,
                                                C.EMP_NAME CC_NAME,
                                                A.CUSTOMER_REMARKS,
                                                A.CREATED_DATE,
                                                A.VISIT_LOCATION,
                                                A.CUSTOMER_NAME,
                                                A.INSTALLMENT_AMOUNT,
                                                (select NUMBER_OF_DUE from LEASE_ALL_INFO_ERP K where REF_CODE=A.REF_ID) NUMBER_OF_DUE,
                                                (select LAST_PAYMENT_AMOUNT from LEASE_ALL_INFO_ERP where REF_CODE=A.REF_ID) LAST_PAYMENT_AMOUNT,
                                                (select LAST_PAYMENT_DATE from LEASE_ALL_INFO_ERP where REF_CODE=A.REF_ID) LAST_PAYMENT_DATE,
                                                (select PARTY_ADDRESS from LEASE_ALL_INFO_ERP where REF_CODE=A.REF_ID) PARTY_ADDRESS
                                                FROM RML_COLL_VISIT_ASSIGN A,COLL_VISIT_ASSIGN_APPROVAL B,RML_COLL_APPS_USER C
                                                WHERE A.ID=B.RML_COLL_VISIT_ASSIGN_ID
                                                AND A.CREATED_BY=C.RML_ID
                                                AND TRUNC(ASSIGN_DATE) BETWEEN TO_DATE('$v_start_date','DD/MM/YYYY') AND TO_DATE('$v_start_date','DD/MM/YYYY')
                                                AND B.APPROVAL_STATUS IS NULL
                                                AND A.CREATED_BY IN
                                                (
                                                SELECT RML_ID FROM MONTLY_COLLECTION
                                                    WHERE IS_ACTIVE=1
                                                    AND ZONAL_HEAD='$emp_session_id'
                                                )";
                                    
                                    // check emp_concern data exist 
                                    if (isset($_POST['emp_concern'])) {
                                        $emp_concern = $_POST['emp_concern'];
                                        $query .= " AND ('$emp_concern' IS NULL OR RML_ID='$emp_concern')";
                                      
                                    }

                                    $query .= " ORDER BY A.ASSIGN_DATE DESC OFFSET $offset ROWS FETCH NEXT " . RECORDS_PER_PAGE . " ROWS ONLY";
                                
                                    $strSQL = oci_parse($objConnect, $query);
                                    oci_execute($strSQL);

                                    $number = 0;
                                    while ($row = @oci_fetch_assoc($strSQL)) {
                                        $number++;
										$approval_time=$row['CURRENT_HOUR'];
                                    ?>
                                        <tr>
                                            <td class="text-center">
                                                <strong>
                                                    <?php echo $number; ?><br>
                                                </strong>
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" name="check_list[]" value="<?php echo $row['ID']; ?>" style="text-align: center; vertical-align: middle;horiz-align: middle;">
                                            </td>
                                            <td class="customer-info">
                                                <?php
                                                echo 'Customer: ' . $row['CUSTOMER_NAME'] . '<br>';
                                                echo 'Number Of Due: <span class="text-danger fw-bold">' . $row['NUMBER_OF_DUE'] . '</span><br>';
                                                echo 'Last Payment: <span class="text-infos fw-bold">' . number_format($row['LAST_PAYMENT_AMOUNT'], 2) . '</span> TK<br>';
                                                echo 'Last Payment Date: <span class="text-primarys fw-bold">' . $row['LAST_PAYMENT_DATE'] . '</span>.<br>';
                                                echo 'EMI:  <span class="text-success fw-bold">' . number_format($row['INSTALLMENT_AMOUNT'], 2) . '</span> TK';
                                                ?>
                                            </td>
                                            <td class="concern-info">
                                                <?php
                                                echo 'Concern Name: ' . $row['CC_NAME'] . '<br>';
                                                echo 'Concern ID: ' . $row['CONCERN_ID'] . '<br>';
                                                echo 'Zone: ' . $row['AREA_ZONE'] . '<br>';
                                                echo 'Entry Date: ' . $row['CREATED_DATE'];
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                echo 'Code: ' . $row['REF_ID'] . '<br>';
                                                echo 'Assign Visit Location: <span class="fw-bold text-danger">' . $row['VISIT_LOCATION'] . '</span><br>';
                                                echo 'Party Address: <i>' . $row['PARTY_ADDRESS'] . '</i><br>';
                                                echo 'Visit Date: <span>' . $row['ASSIGN_DATE'] . '</span><br>';
                                                echo 'Remarks: <span class="fw-bold text-danger">' . $row['CUSTOMER_REMARKS'] . '</span>';
                                                ?>
                                            </td>

                                        </tr>


                                    <?php } ?>

                                </tbody>

                                <?php
							
								
								if($approval_time<11){
									//$row['CURRENT_MINUTE'];

								?>
                                <tfoot>
                                    <tr>
                                        <td colspan="5">
                                            <div class="d-flex justify-content-center">
                                                <button class="btn btn-sm btn-gradient-info" type="submit" name="submit_approval"><i class='bx bx-save'></i> Save & Approve</button>
                                                <button class="btn btn-sm btn-gradient-danger" type="submit" name="submit_denied"> <i class='bx bx-message-alt-x'></i>Save & Denied</button>
                                            </div>

                                        </td>

                                    </tr>
                                </tfoot>
								<?php
								}
								?>

                            </table>
                            <div class="d-flex justify-content-center mt-3">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination round-pagination">
                                        <?php
                                        $countQuery = "SELECT COUNT(*) AS total FROM RML_COLL_VISIT_ASSIGN A,COLL_VISIT_ASSIGN_APPROVAL B,RML_COLL_APPS_USER C
                                            WHERE A.ID=B.RML_COLL_VISIT_ASSIGN_ID
                                            AND A.CREATED_BY=C.RML_ID
                                            AND TRUNC(ASSIGN_DATE) BETWEEN TO_DATE('$v_start_date','DD/MM/YYYY') AND TO_DATE('$v_start_date','DD/MM/YYYY')
                                            AND B.APPROVAL_STATUS IS NULL
                                            AND A.CREATED_BY IN
                                            (
                                            SELECT RML_ID FROM MONTLY_COLLECTION
                                                WHERE IS_ACTIVE=1
                                                AND ZONAL_HEAD='$emp_session_id'
                                            )";

                                        // check emp_concern data exist 
                                        if (isset($_POST['emp_concern'])) {
                                            $emp_concern = $_POST['emp_concern'];
                                            $countQuery .= " AND ('$emp_concern' IS NULL OR RML_ID='$emp_concern')";
                                        }

                                        $countResult = oci_parse($objConnect, $countQuery);
                                        oci_execute($countResult);
                                        $countData = oci_fetch_assoc($countResult);
                                        $totalRecords = $countData['TOTAL'];


                                        for ($i = 1; $i <= ceil($totalRecords / RECORDS_PER_PAGE); $i++) {
                                            $activeClass = ($i == $currentPage) ? 'active' : '';
                                            echo "<li class='page-item $activeClass'><a class='page-link' href='visit_approval_list.php?page=$i'>$i</a></li>";
                                        }


                                        ?>


                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div><!--end row-->

    </div>
</div>
<!--end page wrapper -->
<?php
include_once('../../_includes/footer_info.php');
include_once('../../_includes/footer.php');
?>
<script>
    //delete data processing

    $('.single-select').select2({
        theme: 'bootstrap4',
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        placeholder: $(this).data('placeholder'),
        allowClear: Boolean($(this).data('allow-clear')),
    });

    $('.datepicker').pickadate({
        selectMonths: true,
        selectYears: true,
        format: 'dd-mm-yyyy' // Specify your desired date format
    });
</script>