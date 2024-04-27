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
                            Zone List & Create
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row justify-content-center">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="title">Zone Name:</label>
                                        <input type="text" required="" name="zone_name" class="form-control" id="title">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="title">Zone Status:</label>
                                        <select required="" name="zone_status" class="form-control">
                                            <option selected value="">Select Status</option>
                                            <option value="1">Active</option>
                                            <option value="0">In-Active</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <button class="btn btn-primary" type="submit" value="Load Data">
                                        Search Data
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>



                    <div class="card card-body ">
                        <div class="row col-12 col-sm-12 cpl-md-12">
                            <table class="table table-bordered">
                                <thead class="bg-light">
                                    <tr>
                                        <th scope="col">Sl</th>
                                        <th scope="col">Emp Name</th>
                                        <th scope="col">District Name</th>
                                        <th scope="col">Created By</th>
                                        <th scope="col">Created Date</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    @$user_selected_id = $_REQUEST['user_selected_id'];

                                    if (isset($_POST['user_selected_id'])) {

                                        $strSQL  = oci_parse($objConnect, "SELECT ID,
                                                                    (select EMP_NAME || ' ('||RML_ID || ')' from RML_COLL_APPS_USER where RML_ID=CONCERN_ID )EMP_NAME,
						                                            DISTRICT_NAME,
																	CREATED_BY,
																	CREATED_DATE,
																	IS_ACTIVE,
																	CONCERN_ID 
						                                       from SALL_EMP_DISTRICT
															   where CONCERN_ID='$user_selected_id'");

                                        oci_execute(@$strSQL);
                                        $number = 0;

                                        while ($row = oci_fetch_assoc($strSQL)) {
                                            $number++;
                                    ?>
                                            <tr>
                                                <td><?php echo $number; ?></td>
                                                <td><?php echo $row['EMP_NAME']; ?></td>
                                                <td><?php echo $row['DISTRICT_NAME']; ?></td>
                                                <td><?php echo $row['CREATED_BY']; ?></td>
                                                <td><?php echo $row['CREATED_DATE']; ?></td>
                                                <td><?php

                                                    if ($row['IS_ACTIVE'] == '1')
                                                        echo 'Active';
                                                    else
                                                        echo 'In-Active';
                                                    ?></td>
                                            </tr>
                                            <?php
                                        }
                                    } else {

                                        $allDataSQL  = oci_parse($objConnect, "SELECT ID,
						                                            DISTRICT_NAME,
																	CREATED_BY,
																	CREATED_DATE,
																	IS_ACTIVE,
																	(select EMP_NAME || ' ('||RML_ID || ')' from RML_COLL_APPS_USER where RML_ID=CONCERN_ID )EMP_NAME
						                                       from SALL_EMP_DISTRICT");

                                        $number = 0;
                                        if (@oci_execute(@$allDataSQL)) {
                                            while ($row = oci_fetch_assoc($allDataSQL)) {
                                                $number++;
                                            ?>
                                                <tr>
                                                    <td><?php echo $number; ?></td>
                                                    <td><?php echo $row['EMP_NAME']; ?></td>
                                                    <td><?php echo $row['DISTRICT_NAME']; ?></td>
                                                    <td><?php echo $row['CREATED_BY']; ?></td>
                                                    <td><?php echo $row['CREATED_DATE']; ?></td>
                                                    <td><?php

                                                        if ($row['IS_ACTIVE'] == '1')
                                                            echo 'Active';
                                                        else
                                                            echo 'In-Active';
                                                        ?></td>
                                                </tr>
                                    <?php
                                            }
                                        }
                                    }
                                    ?>
                                </tbody>

                            </table>
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
    document.addEventListener("DOMContentLoaded", function() {
        const productBrandSelector = '#product_brand';
        const productTypeSelector = '#product_type';

        $(productBrandSelector).on('change', function() {
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