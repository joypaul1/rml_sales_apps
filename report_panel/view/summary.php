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
                            <i class="flaticon-381-diploma"></i> LEAD REPORT
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="title">Select Brand:</label>
                                        <select required name="product_brand" id="product_brand" class="form-control" data-live-search="true">
                                            <?php
                                            if ($emp_session_brand == "MM") {
                                                renderOption('Mahindra', 'Mahindra');
                                                renderOption('Eicher', 'Eicher');
                                                renderOption('Dongfeng', 'DONGFENG');
                                            }
                                            elseif ($emp_session_brand == "EICHER") {
                                                renderOption('Eicher', 'Eicher');
                                                renderOption('Mahindra', 'Mahindra');
                                                renderOption('Dongfeng', 'DONGFENG');
                                            }
                                            elseif ($emp_session_brand == "ALL") {
                                                renderOption('Eicher', 'Eicher');
                                                renderOption('Mahindra', 'Mahindra');
                                                renderOption('Dongfeng', 'DONGFENG');
                                            }

                                            function renderOption($label, $value)
                                            {
                                                $selected = isset($_POST['product_brand']) && $_POST['product_brand'] == $value ? 'selected="selected"' : '';
                                                echo '<option value="' . $value . '" ' . $selected . '>' . $label . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <label for="title">Entry From:</label>
                                    <div class="input-group">
                                        <input required="" class="form-control" type='date' name='start_date'
                                            value='<?php echo isset($_POST['start_date']) ? date('Y-m-d', strtotime($_POST['start_date'])) : ''; ?>' />

                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <label for="title">Entry To:</label>
                                    <div class="input-group">
                                        <input required="" class="form-control" type='date' name='end_date'
                                            value='<?php echo isset($_POST['end_date']) ? date('Y-m-d', strtotime($_POST['end_date'])) : ''; ?>' />
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="title">Select Product:</label>
                                        <select name="product_type" id="product_type" class="form-control"></select>
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
                    <?php
                    if (isset($_POST['start_date'])) {
                        $V_INTERESTED_BRAND = $_REQUEST['product_brand'];
                        $v_user_tag         = '';
                        if ($V_INTERESTED_BRAND == "Eicher")
                            $v_user_tag = "EICHER";
                        else if ($V_INTERESTED_BRAND == "Mahindra")
                            $v_user_tag = "MM";
                        else if ($V_INTERESTED_BRAND == "DONGFENG")
                            $v_user_tag = "DONGFENG";

                        $v_product_type = $_REQUEST['product_type'];
                        $v_start_date   = date("d/m/Y", strtotime($_REQUEST['start_date']));
                        $v_end_date     = date("d/m/Y", strtotime($_REQUEST['end_date']));
                        ?>


                        <div class="card card-body ">
                            <div class="row col-12 col-sm-12 cpl-md-12">
                                <table class="small table-bordered">
                                    <thead class="table-success">
                                        <tr>
                                            <th class="bg-primary text-white" colspan="20">
                                                <center>PH Wise Inquiry Summary</center>
                                            </th>
                                        </tr>
                                        <tr>

                                            <th>
                                                <center>PH</center>
                                            </th>
                                            <th scope="col">
                                                <center>PW</center>
                                            </th>
                                            <th scope="col">
                                                <center>Q0</center>
                                            </th>
                                            <th scope="col">
                                                <center>Q1</center>
                                            </th>
                                            <th scope="col">
                                                <center>Q2</center>
                                            </th>
                                            <th scope="col">
                                                <center>NI</center>
                                            </th>
                                            <th scope="col">
                                                <center>WIN</center>
                                            </th>
                                            <th scope="col">
                                                <center>LOST</center>
                                            </th>
                                            <th scope="col">
                                                <center>Total</center>
                                            </th>
                                            <th scope="col">
                                                <center>TODAY-FOLLOW-UP</center>
                                            </th>
                                            <th scope="col">
                                                <center>FOLLOW-UP-MISSING</center>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $strSQL = oci_parse(
                                            $objConnect,
                                            "SELECT INTERESTED_MODEL,
								PH_ID RML_ID,
								RML_COLL_ID_TO_NAME(PH_ID)  EMP_NAME,
								SAL_LEADS_COUNT_FINAL_UPDATED (PH_ID,TO_DATE('$v_start_date','DD/MM/YYYY'),TO_DATE('$v_end_date','DD/MM/YYYY'), 'PH','Q0',INTERESTED_MODEL,'$v_user_tag','$v_product_type') AS  HOT,
								SAL_LEADS_COUNT_FINAL_UPDATED (PH_ID,TO_DATE('$v_start_date','DD/MM/YYYY'),TO_DATE('$v_end_date','DD/MM/YYYY'), 'PH','Q1',INTERESTED_MODEL,'$v_user_tag','$v_product_type') AS WORM,
								SAL_LEADS_COUNT_FINAL_UPDATED (PH_ID,TO_DATE('$v_start_date','DD/MM/YYYY'),TO_DATE('$v_end_date','DD/MM/YYYY'), 'PH','Q2',INTERESTED_MODEL,'$v_user_tag','$v_product_type') AS COLD,
								SAL_LEADS_COUNT_FINAL_UPDATED (PH_ID,TO_DATE('$v_start_date','DD/MM/YYYY'),TO_DATE('$v_end_date','DD/MM/YYYY'), 'PH','Not Interested',INTERESTED_MODEL,'$v_user_tag','$v_product_type') AS NI,
								SAL_LEADS_COUNT_FINAL_2023 (PH_ID,TO_DATE('$v_start_date','DD/MM/YYYY'),TO_DATE('$v_end_date','DD/MM/YYYY'), 'PH','WIN',INTERESTED_MODEL) AS  WIN,
								SAL_LEADS_COUNT_FINAL_2023 (PH_ID,TO_DATE('$v_start_date','DD/MM/YYYY'),TO_DATE('$v_end_date','DD/MM/YYYY'), 'PH','LOST',INTERESTED_MODEL) AS  LOST,
								SAL_LEADS_COUNT_FINAL_2023 (PH_ID,TO_DATE('$v_start_date','DD/MM/YYYY'),TO_DATE('$v_end_date','DD/MM/YYYY'), 'PH','FOLLOW_UP',INTERESTED_MODEL) AS TODAY_FOLLOW_UP,
								SAL_LEADS_COUNT_FINAL_2023 (PH_ID,TO_DATE('$v_start_date','DD/MM/YYYY'),TO_DATE('$v_end_date','DD/MM/YYYY'), 'PH','FOLLOW_UP_MISS',INTERESTED_MODEL) AS  FOLLOW_UP_MISS	
									 FROM
									 (SELECT  A.INTERESTED_MODEL,
												(SELECT MAX(SS.PH_ID) FROM SAL_ZH_SETUP SS WHERE SS.ZH_ID=SAL_MM_ZH_ID AND SS.BRAND_NAME='$v_user_tag')PH_ID
									  FROM SAL_LEADS_GEN A, RML_COLL_APPS_USER B
										   WHERE A.ENTRY_BY = B.RML_ID 
										   AND A.INTERESTED_BRAND = '$V_INTERESTED_BRAND'
										   AND ('$v_product_type' IS NULL OR A.PRODUCT_TYPE='$v_product_type')
										   --AND B.USER_FOR='$v_user_tag'
										   AND TRUNC (ENTRY_DATE) BETWEEN TO_DATE ('$v_start_date', 'dd/mm/yyyy') AND TO_DATE ('$v_end_date', 'dd/mm/yyyy')
										 GROUP BY INTERESTED_MODEL,SAL_MM_ZH_ID
										 )
										 GROUP BY  INTERESTED_MODEL,PH_ID
										 ORDER BY RML_ID"
                                        );

                                        oci_execute($strSQL);
                                        $number   = 0;
                                        $v_RML_ID = 0;

                                        $V_HOT             = 0;
                                        $V_WORM            = 0;
                                        $V_COLD            = 0;
                                        $V_NI              = 0;
                                        $V_WIN             = 0;
                                        $V_LOST            = 0;
                                        $V_TODAY_FOLLOW_UP = 0;
                                        $V_FOLLOW_UP_MISS  = 0;


                                        $IS_MATCH = 0;
                                        $IS_M     = 0;


                                        while ($row = oci_fetch_assoc($strSQL)) {
                                            $number++;
                                            if ($IS_M == 0) {
                                                $IS_MATCH = $row['RML_ID'];
                                            }
                                            $IS_M++;


                                            if ($IS_M >= 1 && $IS_MATCH != $row['RML_ID']) {
                                                $IS_MATCH = $row['RML_ID'];
                                                $IS_M     = 0;

                                                ?>
                                                <tr class="p-3 mb-2 bg-success text-white">
                                                    <td align="center"></td>
                                                    <td align="center">Total=</td>
                                                    <td align="center"><?php echo $V_HOT; ?></td>
                                                    <td align="center"><?php echo $V_WORM; ?></td>
                                                    <td align="center"><?php echo $V_COLD; ?></td>
                                                    <td align="center"><?php echo $V_NI; ?></td>
                                                    <td align="center"><?php echo $V_WIN; ?></td>
                                                    <td align="center"><?php echo $V_LOST; ?></td>
                                                    <td align="center"><?php echo ($V_HOT + $V_WORM + $V_COLD + $V_NI); ?></td>
                                                    <td align="center"><?php echo $V_TODAY_FOLLOW_UP; ?></td>
                                                    <td align="center"><?php echo $V_FOLLOW_UP_MISS; ?></td>
                                                </tr>
                                                <?php
                                                $V_HOT             = 0;
                                                $V_WORM            = 0;
                                                $V_COLD            = 0;
                                                $V_NI              = 0;
                                                $V_WIN             = 0;
                                                $V_LOST            = 0;
                                                $V_TODAY_FOLLOW_UP = 0;
                                                $V_FOLLOW_UP_MISS  = 0;
                                            }
                                            ?>
                                            <tr>
                                                <?php
                                                if ($row['RML_ID'] == $v_RML_ID) {
                                                    ?>
                                                    <td class="noborder"></td>

                                                    <?php
                                                }
                                                else {
                                                    ?>
                                                    <td align="center">
                                                        <a target="_blank"
                                                            href="ph_dtls.php?want_id=<?php echo $row['RML_ID'] . '&start_date=' . $v_start_date . '&end_date=' . $v_end_date . '&brand=' . $V_INTERESTED_BRAND . '&product_type=' . $v_product_type ?>">
                                                            <?php echo $row['EMP_NAME'] . '-' . $row['RML_ID'];
                                                            $v_RML_ID = $row['RML_ID']; ?>
                                                        </a>
                                                    </td>
                                                    <?php
                                                }
                                                ?>



                                                <td align="center">
                                                    <?php echo $row['INTERESTED_MODEL']; ?>
                                                </td>
                                                <td align="center"><?php echo $row['HOT'];
                                                $V_HOT = $V_HOT + $row['HOT']; ?></td>
                                                <td align="center"><?php echo $row['WORM'];
                                                $V_WORM = $V_WORM + $row['WORM']; ?></td>
                                                <td align="center"><?php echo $row['COLD'];
                                                $V_COLD = $V_COLD + $row['COLD']; ?></td>
                                                <td align="center"><?php echo $row['NI'];
                                                $V_NI = $V_NI + $row['NI']; ?></td>
                                                <td align="center"><?php echo $row['WIN'];
                                                $V_WIN = $V_WIN + $row['WIN']; ?></td>
                                                <td align="center"><?php echo $row['LOST'];
                                                $V_LOST = $V_LOST + $row['LOST']; ?></td>
                                                <td align="center"><?php echo ($row['HOT'] + $row['WORM'] + $row['COLD'] + $row['NI']); ?></td>
                                                <td align="center"><?php echo $row['TODAY_FOLLOW_UP'];
                                                $V_TODAY_FOLLOW_UP = $V_TODAY_FOLLOW_UP + $row['TODAY_FOLLOW_UP']; ?></td>
                                                <td align="center"><?php echo $row['FOLLOW_UP_MISS'];
                                                $V_FOLLOW_UP_MISS = $V_FOLLOW_UP_MISS + $row['FOLLOW_UP_MISS']; ?></td>

                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        <tr class="p-3 mb-2 bg-success text-white">
                                            <td align="center"></td>
                                            <td align="center">Total=</td>
                                            <td align="center"><?php echo $V_HOT; ?></td>
                                            <td align="center"><?php echo $V_WORM; ?></td>
                                            <td align="center"><?php echo $V_COLD; ?></td>
                                            <td align="center"><?php echo $V_NI; ?></td>
                                            <td align="center"><?php echo $V_WIN; ?></td>
                                            <td align="center"><?php echo $V_LOST; ?></td>
                                            <td align="center"><?php echo ($V_HOT + $V_WORM + $V_COLD + $V_NI); ?></td>
                                            <td align="center"><?php echo $V_TODAY_FOLLOW_UP; ?></td>
                                            <td align="center"><?php echo $V_FOLLOW_UP_MISS; ?></td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                            <div class="row col-12 col-sm-12 col-md-12 mt-3">
                                <table class="small table-bordered table-responsive">
                                    <thead class="table-success">
                                        <tr>
                                            <th class="bg-primary text-white" colspan="20">
                                                <center>Inquiry Summary Till Date</center>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="col">
                                                <center>PW</center>
                                            </th>
                                            <th scope="col">
                                                <center>Q0</center>
                                            </th>
                                            <th scope="col">
                                                <center>Q1</center>
                                            </th>
                                            <th scope="col">
                                                <center>Q2</center>
                                            </th>
                                            <th scope="col">
                                                <center>NI</center>
                                            </th>
                                            <th scope="col">
                                                <center>WIN</center>
                                            </th>
                                            <th scope="col">
                                                <center>LOST</center>
                                            </th>
                                            <th scope="col">
                                                <center>TOTAL</center>
                                            </th>
                                            <th scope="col">
                                                <center>TODAY-FOLLOW-UP</center>
                                            </th>
                                            <th scope="col">
                                                <center>FOLLOW-UP-MISSING</center>
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>


                                        <?php
                                        $strSQLZone = oci_parse(
                                            $objConnect,
                                            "SELECT 
								INTERESTED_MODEL,
								SAL_LEADS_COUNT_FINAL_UPDATED('$emp_session_id',TO_DATE ('$v_start_date', 'dd/mm/yyyy'),TO_DATE ('$v_end_date', 'dd/mm/yyyy'),'BH','Q0',INTERESTED_MODEL,'$v_user_tag','$v_product_type') HOT,
                                SAL_LEADS_COUNT_FINAL_UPDATED('$emp_session_id',TO_DATE ('$v_start_date', 'dd/mm/yyyy'),TO_DATE ('$v_end_date', 'dd/mm/yyyy'),'BH','Q1',INTERESTED_MODEL,'$v_user_tag','$v_product_type') WORM,
                                SAL_LEADS_COUNT_FINAL_UPDATED('$emp_session_id',TO_DATE ('$v_start_date', 'dd/mm/yyyy'),TO_DATE ('$v_end_date', 'dd/mm/yyyy'),'BH','Q2',INTERESTED_MODEL,'$v_user_tag','$v_product_type') COLD,
                                SAL_LEADS_COUNT_FINAL_UPDATED('$emp_session_id',TO_DATE ('$v_start_date', 'dd/mm/yyyy'),TO_DATE ('$v_end_date', 'dd/mm/yyyy'),'BH','Not Interested',INTERESTED_MODEL,'$v_user_tag','$v_product_type') NI,
                                SAL_LEADS_COUNT_FINAL_2023('$emp_session_id',TO_DATE ('$v_start_date', 'dd/mm/yyyy'),TO_DATE ('$v_end_date', 'dd/mm/yyyy'),'BH','WIN',INTERESTED_MODEL) WIN,
                                SAL_LEADS_COUNT_FINAL_2023('$emp_session_id',TO_DATE ('$v_start_date', 'dd/mm/yyyy'),TO_DATE ('$v_end_date', 'dd/mm/yyyy'),'BH','LOST',INTERESTED_MODEL) LOST,
                                SAL_LEADS_COUNT_FINAL_2023('$emp_session_id',TO_DATE ('$v_start_date', 'dd/mm/yyyy'),TO_DATE ('$v_end_date', 'dd/mm/yyyy'),'BH','LOST',INTERESTED_MODEL) LOST,
								SAL_LEADS_COUNT_FINAL_2023('$emp_session_id',TO_DATE ('$v_start_date', 'dd/mm/yyyy'),TO_DATE ('$v_end_date', 'dd/mm/yyyy'),'BH','FOLLOW_UP',INTERESTED_MODEL) AS TODAY_FOLLOW_UP,
								SAL_LEADS_COUNT_FINAL_2023('$emp_session_id',TO_DATE ('$v_start_date', 'dd/mm/yyyy'),TO_DATE ('$v_end_date', 'dd/mm/yyyy'),'BH','FOLLOW_UP_MISS',INTERESTED_MODEL) AS  FOLLOW_UP_MISS,
								 COUNT (INTERESTED_MODEL) MODEL_COUNT
							FROM SAL_LEADS_GEN a, RML_COLL_APPS_USER b
						   WHERE     A.ENTRY_BY = b.RML_ID
								 AND B.USER_FOR='$v_user_tag'
								 AND A.INTERESTED_BRAND = '$V_INTERESTED_BRAND'
								 AND ('$v_product_type' IS NULL OR A.PRODUCT_TYPE='$v_product_type')
								 AND TRUNC (ENTRY_DATE) BETWEEN TO_DATE ('$v_start_date', 'dd/mm/yyyy')
															AND TO_DATE ('$v_end_date', 'dd/mm/yyyy')
						GROUP BY INTERESTED_MODEL"
                                        );


                                        oci_execute($strSQLZone);
                                        $number = 0;

                                        $V_HOT             = 0;
                                        $V_WORM            = 0;
                                        $V_COLD            = 0;
                                        $V_NI              = 0;
                                        $V_WIN             = 0;
                                        $V_LOST            = 0;
                                        $V_TODAY_FOLLOW_UP = 0;
                                        $V_FOLLOW_UP_MISS  = 0;

                                        while ($row = oci_fetch_assoc($strSQLZone)) {
                                            $number++;
                                            ?>
                                            <tr>
                                                <td align="center"><?php echo $row['INTERESTED_MODEL']; ?></td>
                                                <td align="center"><?php echo $row['HOT'];
                                                $V_HOT = $V_HOT + $row['HOT']; ?></td>
                                                <td align="center"><?php echo $row['WORM'];
                                                $V_WORM = $V_WORM + $row['WORM']; ?></td>
                                                <td align="center"><?php echo $row['COLD'];
                                                $V_COLD = $V_COLD + $row['COLD']; ?></td>
                                                <td align="center"><?php echo $row['NI'];
                                                $V_NI = $V_NI + $row['NI']; ?></td>
                                                <td align="center"><?php echo $row['WIN'];
                                                $V_WIN = $V_WIN + $row['WIN']; ?></td>
                                                <td align="center"><?php echo $row['LOST'];
                                                $V_LOST = $V_LOST + $row['LOST']; ?></td>
                                                <td align="center"><?php echo ($row['HOT'] + $row['WORM'] + $row['COLD'] + $row['NI']); ?></td>
                                                <td align="center"><?php echo $row['TODAY_FOLLOW_UP'];
                                                $V_TODAY_FOLLOW_UP = $V_TODAY_FOLLOW_UP + $row['TODAY_FOLLOW_UP']; ?></td>
                                                <td align="center"><?php echo $row['FOLLOW_UP_MISS'];
                                                $V_FOLLOW_UP_MISS = $V_FOLLOW_UP_MISS + $row['FOLLOW_UP_MISS']; ?></td>
                                            </tr>
                                            <?php
                                        }

                                        ?>
                                        <tr class="p-3 mb-2 bg-success text-white ">
                                            <td align="center">Total=</td>
                                            <td align="center"><?php echo $V_HOT; ?></td>
                                            <td align="center"><?php echo $V_WORM; ?></td>
                                            <td align="center"><?php echo $V_COLD; ?></td>
                                            <td align="center"><?php echo $V_NI; ?></td>
                                            <td align="center"><?php echo $V_WIN; ?></td>
                                            <td align="center"><?php echo $V_LOST; ?></td>
                                            <td align="center"><?php echo ($V_HOT + $V_WORM + $V_COLD + $V_NI); ?></td>
                                            <td align="center"><?php echo $V_TODAY_FOLLOW_UP; ?></td>
                                            <td align="center"><?php echo $V_FOLLOW_UP_MISS; ?></td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <?php
                    }
                    ?>

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
    document.addEventListener("DOMContentLoaded", function () {
        const productBrandSelector = '#product_brand';
        const productTypeSelector = '#product_type';

        $(productBrandSelector).on('change', function () {
            updateProductTypeOptions();
        });

        function updateProductTypeOptions() {
            const selectedBrand = $(productBrandSelector).val();
            const productTypeSelect = $(productTypeSelector);

            // Clear existing options using Bootstrap Select method
            productTypeSelect.empty();
            productTypeSelect.selectpicker('refresh');
            switch (selectedBrand) {
                case 'Mahindra':
                    addProductTypeOption(productTypeSelect, '', 'ALL');
                    addProductTypeOption(productTypeSelect, 'Human Huler', 'Human Huler');
                    addProductTypeOption(productTypeSelect, '3 Wheeler', '3 Wheeler');
                    addProductTypeOption(productTypeSelect, 'PICUK UP', 'PICUK UP');
                    break;
                case 'Eicher':
                    addProductTypeOption(productTypeSelect, '', 'ALL');
                    addProductTypeOption(productTypeSelect, 'Bus', 'Bus');
                    addProductTypeOption(productTypeSelect, 'Truck', 'Truck');
                    break;
                // Add cases for other brands if needed
                case 'DONGFENG':
                    addProductTypeOption(productTypeSelect, '', 'ALL');
                    addProductTypeOption(productTypeSelect, 'Captain', 'Captain');
                    break;
                // Add cases for other brands if needed
                default:
                    // Handle unknown brand
                    break;
            }

            // Refresh Bootstrap Select plugin after updating options
            productTypeSelect.selectpicker('refresh');
        }

        function addProductTypeOption(selectElement, inValue, inText) {
            // Add new option using Bootstrap Select method

            selectElement.append($('<option>', {
                value: inValue,
                text: inText
            }));
        }

        // Call the function initially
        updateProductTypeOptions();
    });
</script>