<?php

include_once('../../_helper/2step_com_conn.php');


?>

<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-12">
                <div class="card rounded-4">
                    <?php
                    $headerType    = 'Create';
                    $leftSideName  = 'User Create';
                    $rightSideName = 'User List';
                    $routePath     = 'user_module/view/index.php';
                    include('../../_includes/com_header.php');

                    ?>
                    <div class="card-body">
                        <div class="p-4 border rounded">
                            <form method="post" action="<?php echo ($basePath . '/user_module/action/self_panel.php') ?>" class="row g-3 needs-validation" enctype="multipart/form-data" novalidate="">
                                <input type="hidden" name="actionType" value="create">
                                <div class="col-sm-12 col-md-4">
                                    <label for="validationCustom01" class="form-label">User Name <span class="text-danger">*</span></label>
                                    <input type="text" autocomplete="off" name="USER_NAME" class="form-control" id="validationCustom01" required="">
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-sm-12  col-md-4">
                                    <label for="validationCustom02" class="form-label">User Mobile (Login ID) <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57' autocomplete="off" autocomplete="off" name="USER_MOBILE" id="validationCustom02" required="">
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-sm-12  col-md-4">
                                    <label for="validationCustom08" class="form-label">User Password <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="USER_PASSWORD" autocomplete="off" id="validationCustom08" required="">
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-sm-12  col-md-4">
                                    <label for="validationCustom09" class="form-label">User RML ID </label>
                                    <input type="text" class="form-control" name="RML_ID" autocomplete="off" id="validationCustom09">
                                    <div class="valid-feedback">Looks good!</div>
                                </div>


                                <div class="col-sm-12  col-md-4">
                                    <label for="validationCustom06" class="form-label">User Type <span class="text-danger">*</span></label>
                                    <select class="form-select " id="validationCustom06" name="USER_TYPE_ID" required="">
                                        <option hidden value="<?php echo Null ?>"><- Select Type -></option>
                                        <?php
                                        $typeRow = [];
                                        $query   = "SELECT ID,TITLE FROM USER_TYPE WHERE STATUS ='1'";
                                        $strSQL  = @oci_parse($objConnect, $query);

                                        @oci_execute($strSQL);
                                        while ($typeRow = @oci_fetch_assoc($strSQL)) {
                                        ?>
                                            <option value="<?php echo $typeRow['ID'] ?>">
                                                <?php echo $typeRow['TITLE'] ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                    <div class="invalid-feedback">Please select a User Type.</div>
                                </div>
                                <div class="col-sm-12  col-md-4">
                                    <label for="validationCustom04" class="form-label">User Brand <span class="text-danger">*</span> </label>
                                    <select class="form-select" id="validationCustom04" name="USER_BRAND_ID" required="">
                                        <option hidden value="<?php echo Null ?>"><- Select Brand -></option>
                                        <?php
                                        $brandRow = [];
                                        $query    = "SELECT ID,TITLE FROM USER_BRAND WHERE STATUS ='1'";
                                        $strSQL   = @oci_parse($objConnect, $query);

                                        @oci_execute($strSQL);
                                        while ($brandRow = @oci_fetch_assoc($strSQL)) {
                                        ?>
                                            <option value="<?php echo $brandRow['ID'] ?>">
                                                <?php echo $brandRow['TITLE'] ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                    <div class="invalid-feedback">Please select a User Brand.</div>
                                </div>
                                <div id="addResponsiableData"></div>

                                <div class="col-12">
                                    <label for="" class="form-label">User Profile Image</label>
                                    <input type="file" name="IMAGE_LINK" class="dropify" />
                                    <!-- <div class="valid-feedback">Looks good!</div> -->

                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </div>
                            </form>
                        </div>
                    </div>
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
    const url = "<?php echo ($basePath . '/user_module/action/drop_down_panel.php') ?>";
    const $user_type_id = $('select[name="USER_TYPE_ID"]');
    const $user_brand_id = $('select[name="USER_BRAND_ID"]');

    $('select[name="USER_TYPE_ID"], select[name="USER_BRAND_ID"]').on('change', function() {
        getVerifyData();
    });

    function getVerifyData() {
        const userTypeId = $user_type_id.val();
        const userBrandId = $user_brand_id.val();
        $('#addResponsiableData').empty();
        if (userTypeId && userBrandId) {
            switch (parseInt(userTypeId)) {
                case 2:
                    get_hod();
                    break;
                case 3:
                    get_cod();
                    break;
                case 4:
                    get_selExc();
                    break;
                case 5:
                    get_mec();
                    break;
                default:
                    // Handle other cases if needed
                    break;
            }
        }
    }

    function get_hod() {
        $.ajax({
            type: "GET",
            url: url,
            dataType: "json",
            data: {
                brand_ID: $user_brand_id.val(),
                type_ID: 1,
            },
            success: function(res) {
                let htmlTag = `<div class="col-sm-12 col-md-4">
                        <label for="validationCustom10_hod" class="form-label">Responsible HOD <span class="text-danger">*</span></label>
                        <select class="form-select single-select" name="RESPONSIBLE_ID" id="validationCustom10_hod" required><option  hidden value="<?php echo Null ?>"> <- Selecte HOD -></option>`;
                if (res.status) {
                    (res.data).forEach(element => {
                        htmlTag += '<option value="' + element.ID + '"> ' + element.USER_NAME + ' </option>';
                    });
                }
                htmlTag += `</select></div>`;
                $('#addResponsiableData').append(htmlTag);

                // Initialize Select2 for the appended dropdown element
                $('#addResponsiableData').find('#validationCustom10_hod').select2({
                    theme: 'bootstrap4',
                    width: '100%', // Set the width as needed
                    placeholder: 'Select HOD', // Set the placeholder text
                    allowClear: true, // Enable clearing the selection
                });
            }

        })
    };

    function get_cod() {
        $.ajax({
            type: "GET",
            url: url,
            dataType: "json",
            data: {
                brand_ID: $user_brand_id.val(),
                type_ID: 2,
            },
            success: function(res) {
                let htmlTag = `<div class="col-sm-12 col-md-4">
                            <label for="validationCustom10_coord" class="form-label">Responsible COORDINATOR <span class="text-danger">*</span></label>
                            <select class="form-select" id="validationCustom10_coord" name="RESPONSIBLE_ID" required>
                            <option  hidden value="<?php echo Null ?>"> <- Selecte Coordinator -></option>`;
                if (res.status) {
                    (res.data).forEach(element => {
                        htmlTag += '<option value="' + element.ID + '"> ' + element.USER_NAME + ' </option>';
                    });

                }
                htmlTag += `</select></div>`;
                $('#addResponsiableData').append(htmlTag);
                // Initialize Select2 for the appended dropdown element
                $('#addResponsiableData').find('#validationCustom10_coord').select2({
                    theme: 'bootstrap4',
                    width: '100%', // Set the width as needed
                    placeholder: 'Select Coordinator', // Set the placeholder text
                    allowClear: true, // Enable clearing the selection
                });
            }
        });

    }

    function get_mec() {
        $.ajax({
            type: "GET",
            url: url,
            dataType: "json",
            data: {
                brand_ID: $user_brand_id.val(),
                type_ID: 3,
            },
            success: function(res) {
                let htmlTag = `<div class="col-sm-12 col-md-4">
                            <label for="validationCustom10_ret" class="form-label">Responsible RETAILER <span class="text-danger">*</span></label>
                            <select class="form-select single-select"name="RESPONSIBLE_ID" id="validationCustom10_ret" required>
                            <option  hidden value="<?php echo Null ?>"> <- Selecte Retailer -></option>`;
                if (res.status) {
                    (res.data).forEach(element => {
                        htmlTag += '<option value="' + element.ID + '"> ' + element.USER_NAME + ' </option>';
                    });

                }
                htmlTag += `</select></div>`;
                $('#addResponsiableData').append(htmlTag);
                // Initialize Select2 for the appended dropdown element
                $('#addResponsiableData').find('#validationCustom10_ret').select2({
                    theme: 'bootstrap4',
                    width: '100%', // Set the width as needed
                    placeholder: 'Select Retailer', // Set the placeholder text
                    allowClear: true, // Enable clearing the selection
                });
            }
        });

    }

    function get_selExc() {
        $.ajax({
            type: "GET",
            url: url,
            dataType: "json",
            data: {
                brand_ID: $user_brand_id.val(),
                type_ID: 4,
            },
            success: function(res) {
                let htmlTag = `<div class="col-sm-12 col-md-4">
                            <label for="validationCustom10_sale" class="form-label">Responsible SALE EXECUTIVE <span class="text-danger">*</span></label>
                            <select class="form-select single-select" name="RESPONSIBLE_ID" id="validationCustom10_sale" required>
                            <option  hidden value="<?php echo Null ?>"> <- Selecte Sale Excutive -></option>`;
                if (res.status) {
                    (res.data).forEach(element => {
                        htmlTag += '<option value="' + element.ID + '"> ' + element.USER_NAME + ' </option>';
                    });
                }
                htmlTag += `</select></div>`;
                $('#addResponsiableData').append(htmlTag);
                // Initialize Select2 for the appended dropdown element
                $('#addResponsiableData').find('#validationCustom10_sale').select2({
                    theme: 'bootstrap4',
                    width: '100%', // Set the width as needed
                    placeholder: 'Select Sale Excutive', // Set the placeholder text
                    allowClear: true, // Enable clearing the selection
                });
            }
        });

    }

    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'
        $('.dropify').dropify({
            messages: {
                'default': 'Select User Profile Image',
                'replace': 'Replace User Profile Image',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            });
    })();
</script>