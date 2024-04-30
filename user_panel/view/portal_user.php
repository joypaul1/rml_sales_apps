<?php
include_once('../../_helper/2step_com_conn.php');
// 
// $product_band = "Mahindra";
// if ($emp_session_brand == "EICHER")
//     $product_band = "Eicher";
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
                            Portal User List
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row justify-content-center">
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <input class="form-control" placeholder="User Id (EX: RML-00000)" type='text' name='user_id' value='<?php echo isset($_POST['user_id']) ? $_POST['user_id'] : ''; ?>' />
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
                        <div class="row col-12 table-responsive">
                            <table class="table  table-bordered table-sm" id="table" cellspacing="0" width="100%">
                                <thead class="table-success">
                                    <tr>
                                        <th scope="col">Sl</th>
                                        <th scope="col">Employee Info</th>
                                        <th scope="col">User Role</th>
                                        <th scope="col">User Brand</th>
                                        <th scope="col">Status</th>
                                        <th style="text-align:center">Action</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php


                                    if (isset($_POST['user_id'])) {

                                        $user_id = $_REQUEST['user_id'];
                                        $selectsql = "SELECT
                                                    a.id,
                                                    a.name,
                                                    a.emp_id,
                                                    b.user_role,
                                                    a.brand,
                                                    a.email,
                                                    a.password,
                                                    a.status
                                                    FROM tbl_users a,tbl_user_role b
                                                    where a.user_role_id=b.id
                                                    and a.brand='$emp_session_brand'
                                                    and a.emp_id='$user_id'";
                                        $rs = mysqli_query($conn, $selectsql);
                                        $number = 0;

                                        while ($row = $rs->fetch_assoc()) {
                                            $number++;
                                    ?>
                                            <tr>
                                                <td><?php echo $number; ?></td>
                                                <td><?php echo $row['name'] . '-' . $row['emp_id']; ?></td>
                                                <td><?php echo $row['user_role']; ?></td>
                                                <td><?php echo $row['brand']; ?></td>
                                                <td><?php if ($row['status'] == '1') echo 'Active'; ?></td>
                                                <td align=" center">
                                                    <?php if ($row['emp_id'] != 'RML-00955' && $row['emp_id'] != 'IT') {
                                                    ?>
                                                        <a target="_blank" href="user_portal_edit.php?emp_id=<?php echo $row['id'] ?>"><?php echo '<button class="btn btn-primary">update</button>' ?>
                                                        </a>
                                                    <?php
                                                    }
                                                    ?>
                                                </td>

                                            </tr>
                                        <?php
                                        }
                                    } else {
                                        $selectsql = "SELECT
                                                    a.id,
                                                    a.name,
                                                    a.emp_id,
                                                    b.user_role,
                                                    a.brand,
                                                    a.email,
                                                    a.password,
                                                    a.status
                                                    FROM tbl_users a,tbl_user_role b
                                                    where a.user_role_id=b.id
                                                    and a.status=1
                                                    and a.brand='$emp_session_brand'
                                                    order by user_role";
                                        $rs = mysqli_query($conn, $selectsql);
                                        $number = 0;

                                        while ($row = $rs->fetch_assoc()) {
                                            $number++;
                                        ?>
                                            <tr>
                                                <td><?php echo $number; ?></td>
                                                <td><?php echo $row['name'] . '-' . $row['emp_id']; ?></td>
                                                <td><?php echo $row['user_role']; ?></td>
                                                <td><?php echo $row['brand']; ?></td>
                                                <td><?php if ($row['status'] == '1') echo 'Active'; ?></td>

                                                <td align="center">
                                                    <?php if ($row['emp_id'] != 'RML-00955' && $row['emp_id'] != 'IT') {
                                                    ?>
                                                        <a target="_blank" href="user_portal_edit.php?emp_id=<?php echo $row['id'] ?>"><?php echo '<button class="btn btn-primary">update</button>' ?>
                                                        </a>
                                                    <?php
                                                    }
                                                    ?>
                                                </td>


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