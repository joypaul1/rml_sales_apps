<?php
include_once('../../_helper/2step_com_conn.php');

$v_want_id = $_GET['want_id'];
$v_start_date = $_GET['start_date'];
$v_end_date = $_GET['end_date'];


$product_band = $_GET['brand'];
$v_product_type = $_GET['product_type'];

$v_user_tag = '';
if ($product_band == "Eicher") {
    $v_user_tag = "EICHER";
} else if ($product_band == "Mahindra") {
    $v_user_tag = "MM";
} else if ($product_band == "Donging") {
    $v_user_tag = "Donging";
}
?>

<!--start page wrapper -->
<!--********* Content body start ************-->
<div class="content-body default-height">
    <div class="container-fluid">
        <div class="row mt-3 mt-2">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="md-form">
                            <div class=" d-flex flex-column flex-md-row">
                                <table class="small table-bordered">
                                    <thead class="bg-light">
                                        <tr>
                                            <th>
                                                <center>ZH Wise Inquiry Summary</center>
                                            </th>
                                        </tr>
                                        <tr>

                                            <th>
                                                <center>ZH</center>
                                            </th>
                                            <th scope="col">
                                                <center>PW</center>
                                            </th>
                                            <th scope="col">
                                                <center>H</center>
                                            </th>
                                            <th scope="col">
                                                <center>W</center>
                                            </th>
                                            <th scope="col">
                                                <center>COLD</center>
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
                                        $strSQL  = oci_parse(
                                            $objConnect,
                                            "SELECT 
								RML_COLL_ID_TO_NAME(SAL_MM_ZH_ID) EMP_NAME,
								SAL_MM_ZH_ID RML_ID,
								INTERESTED_MODEL,
								SUM(MODEL_COUNT) MODEL_COUNT,
								SAL_LEADS_COUNT_FINAL_UPDATED (SAL_MM_ZH_ID,TO_DATE('$v_start_date','DD/MM/YYYY'),TO_DATE('$v_end_date','DD/MM/YYYY'), 'ZH','Hot',INTERESTED_MODEL,'$v_user_tag','$v_product_type') AS  HOT,
								SAL_LEADS_COUNT_FINAL_UPDATED (SAL_MM_ZH_ID,TO_DATE('$v_start_date','DD/MM/YYYY'),TO_DATE('$v_end_date','DD/MM/YYYY'), 'ZH','Warm',INTERESTED_MODEL,'$v_user_tag','$v_product_type') AS WORM,
								SAL_LEADS_COUNT_FINAL_UPDATED (SAL_MM_ZH_ID,TO_DATE('$v_start_date','DD/MM/YYYY'),TO_DATE('$v_end_date','DD/MM/YYYY'), 'ZH','Cold',INTERESTED_MODEL,'$v_user_tag','$v_product_type') AS COLD,
								SAL_LEADS_COUNT_FINAL_UPDATED (SAL_MM_ZH_ID,TO_DATE('$v_start_date','DD/MM/YYYY'),TO_DATE('$v_end_date','DD/MM/YYYY'), 'ZH','Not Interested',INTERESTED_MODEL,'$v_user_tag','$v_product_type') AS NI,
								SAL_LEADS_COUNT_FINAL_2023 (SAL_MM_ZH_ID,TO_DATE('$v_start_date','DD/MM/YYYY'),TO_DATE('$v_end_date','DD/MM/YYYY'), 'ZH','WIN',INTERESTED_MODEL) AS  WIN,
								SAL_LEADS_COUNT_FINAL_2023 (SAL_MM_ZH_ID,TO_DATE('$v_start_date','DD/MM/YYYY'),TO_DATE('$v_end_date','DD/MM/YYYY'), 'ZH','LOST',INTERESTED_MODEL) AS  LOST,
								SAL_LEADS_COUNT_FINAL_2023 (SAL_MM_ZH_ID,TO_DATE('$v_start_date','DD/MM/YYYY'),TO_DATE('$v_end_date','DD/MM/YYYY'), 'ZH','FOLLOW_UP',INTERESTED_MODEL) AS TODAY_FOLLOW_UP,
								SAL_LEADS_COUNT_FINAL_2023 (SAL_MM_ZH_ID,TO_DATE('$v_start_date','DD/MM/YYYY'),TO_DATE('$v_end_date','DD/MM/YYYY'), 'ZH','FOLLOW_UP_MISS',INTERESTED_MODEL) AS  FOLLOW_UP_MISS					
										 FROM
										 (
										  SELECT
												 b.SAL_MM_ZH_ID,
												 INTERESTED_MODEL,
												 COUNT (INTERESTED_MODEL) MODEL_COUNT
											FROM SAL_LEADS_GEN a, RML_COLL_APPS_USER b
										   WHERE A.ENTRY_BY = b.RML_ID 
												  AND b.SAL_MM_ZH_ID IN  (SELECT ZH_ID FROM SAL_ZH_SETUP WHERE PH_ID = '$v_want_id' and BRAND_NAME='$v_user_tag')
												  AND a.INTERESTED_BRAND = '$product_band'
												  AND ('$v_product_type' IS NULL OR A.PRODUCT_TYPE='$v_product_type')
												 AND TRUNC (ENTRY_DATE) BETWEEN TO_DATE ('$v_start_date', 'dd/mm/yyyy')
																			AND TO_DATE ('$v_end_date', 'dd/mm/yyyy')
										GROUP BY INTERESTED_MODEL, b.RML_ID,b.SAL_MM_ZH_ID
										)
										GROUP BY SAL_MM_ZH_ID,INTERESTED_MODEL
										order by EMP_NAME
										"
                                        );


                                        oci_execute($strSQL);
                                        $number = 0;
                                        $v_RML_ID = 0;

                                        $V_HOT = 0;
                                        $V_WORM = 0;
                                        $V_COLD = 0;
                                        $V_NI = 0;
                                        $V_WIN = 0;
                                        $V_LOST = 0;
                                        $V_TODAY_FOLLOW_UP = 0;
                                        $V_FOLLOW_UP_MISS = 0;


                                        $IS_MATCH = 0;
                                        $IS_M = 0;


                                        while ($row = oci_fetch_assoc($strSQL)) {
                                            $number++;
                                            if ($IS_M == 0) {
                                                $IS_MATCH = $row['RML_ID'];
                                            }
                                            $IS_M++;


                                            if ($IS_M >= 1 && $IS_MATCH != $row['RML_ID']) {
                                                $IS_MATCH = $row['RML_ID'];
                                                $IS_M = 0;

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
                                                $V_HOT = 0;
                                                $V_WORM = 0;
                                                $V_COLD = 0;
                                                $V_NI = 0;
                                                $V_WIN = 0;
                                                $V_LOST = 0;
                                                $V_TODAY_FOLLOW_UP = 0;
                                                $V_FOLLOW_UP_MISS = 0;
                                            }
                                            ?>
                                            <tr>
                                                <?php
                                                if ($row['RML_ID'] == $v_RML_ID) {
                                                ?>
                                                    <td class="noborder"></td>

                                                <?php
                                                } else {
                                                ?>
                                                    <td align="center">
                                                        <a target="_blank" href="dashboard_zh_dtls.php?want_id=<?php echo $row['RML_ID'] . '&start_date=' . $v_start_date . '&end_date=' . $v_end_date . '&brand=' . $product_band . '&product_type=' . $v_product_type ?>">
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
                        </div>
                    </div>



                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="">
                            <div class="d-flex flex-column flex-md-row">
                                <table class="small table-bordered table-responsive">
                                    <thead class="">
                                        <tr>
                                            <th class="bg-success text-white" colspan="20">
                                                <center>Inquiry Summary Till Date</center>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="col">
                                                <center>PW</center>
                                            </th>
                                            <th scope="col">
                                                <center>H</center>
                                            </th>
                                            <th scope="col">
                                                <center>W</center>
                                            </th>
                                            <th scope="col">
                                                <center>C</center>
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
                                        $strSQLZone  = oci_parse(
                                            $objConnect,
                                            "SELECT 
								INTERESTED_MODEL,
								SAL_LEADS_COUNT_FINAL_UPDATED('$v_want_id',TO_DATE ('$v_start_date', 'dd/mm/yyyy'),TO_DATE ('$v_end_date', 'dd/mm/yyyy'),'PH','Hot',INTERESTED_MODEL,'$v_user_tag','$v_product_type') HOT,
                                SAL_LEADS_COUNT_FINAL_UPDATED('$v_want_id',TO_DATE ('$v_start_date', 'dd/mm/yyyy'),TO_DATE ('$v_end_date', 'dd/mm/yyyy'),'PH','Warm',INTERESTED_MODEL,'$v_user_tag','$v_product_type') WORM,
                                SAL_LEADS_COUNT_FINAL_UPDATED('$v_want_id',TO_DATE ('$v_start_date', 'dd/mm/yyyy'),TO_DATE ('$v_end_date', 'dd/mm/yyyy'),'PH','Cold',INTERESTED_MODEL,'$v_user_tag','$v_product_type') COLD,
                                SAL_LEADS_COUNT_FINAL_UPDATED('$v_want_id',TO_DATE ('$v_start_date', 'dd/mm/yyyy'),TO_DATE ('$v_end_date', 'dd/mm/yyyy'),'PH','Not Interested',INTERESTED_MODEL,'$v_user_tag','$v_product_type') NI,
                                SAL_LEADS_COUNT_FINAL_2023('$v_want_id',TO_DATE ('$v_start_date', 'dd/mm/yyyy'),TO_DATE ('$v_end_date', 'dd/mm/yyyy'),'PH','WIN',INTERESTED_MODEL) WIN,
                                SAL_LEADS_COUNT_FINAL_2023('$v_want_id',TO_DATE ('$v_start_date', 'dd/mm/yyyy'),TO_DATE ('$v_end_date', 'dd/mm/yyyy'),'PH','LOST',INTERESTED_MODEL) LOST,
                                SAL_LEADS_COUNT_FINAL_2023('$v_want_id',TO_DATE ('$v_start_date', 'dd/mm/yyyy'),TO_DATE ('$v_end_date', 'dd/mm/yyyy'),'PH','LOST',INTERESTED_MODEL) LOST,
								SAL_LEADS_COUNT_FINAL_2023('$v_want_id',TO_DATE ('$v_start_date', 'dd/mm/yyyy'),TO_DATE ('$v_end_date', 'dd/mm/yyyy'),'PH','FOLLOW_UP',INTERESTED_MODEL) AS TODAY_FOLLOW_UP,
								SAL_LEADS_COUNT_FINAL_2023('$v_want_id',TO_DATE ('$v_start_date', 'dd/mm/yyyy'),TO_DATE ('$v_end_date', 'dd/mm/yyyy'),'PH','FOLLOW_UP_MISS',INTERESTED_MODEL) AS  FOLLOW_UP_MISS,
								COUNT (INTERESTED_MODEL) MODEL_COUNT
							FROM SAL_LEADS_GEN a, RML_COLL_APPS_USER b
						   WHERE     A.ENTRY_BY = b.RML_ID
								 and b.SAL_MM_ZH_ID IN(SELECT ZH_ID FROM SAL_ZH_SETUP WHERE PH_ID = '$v_want_id' and BRAND_NAME='$v_user_tag')
								 AND a.INTERESTED_BRAND = '$product_band'
								 AND ('$v_product_type' IS NULL OR A.PRODUCT_TYPE='$v_product_type')
								 AND TRUNC (ENTRY_DATE) BETWEEN TO_DATE ('$v_start_date', 'dd/mm/yyyy')
															AND TO_DATE ('$v_end_date', 'dd/mm/yyyy')
						GROUP BY INTERESTED_MODEL"
                                        );


                                        oci_execute($strSQLZone);
                                        $number = 0;

                                        $V_HOT = 0;
                                        $V_WORM = 0;
                                        $V_COLD = 0;
                                        $V_NI = 0;
                                        $V_WIN = 0;
                                        $V_LOST = 0;
                                        $V_TODAY_FOLLOW_UP = 0;
                                        $V_FOLLOW_UP_MISS = 0;

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