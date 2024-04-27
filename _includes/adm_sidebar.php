<body>

    <?php
    $v_active      = 'mm-active';
    $v_active_open = 'mm-active';
    $currentUrl    = $_SERVER['REQUEST_URI'];
    function isActive($url)
    {
        global $currentUrl;
        return strpos($currentUrl, $url) !== false ? 'mm-active' : '';
    }
    ?>
    <!--********* Sidebar start **************-->
    <div class="deznav">
        <div class="deznav-scroll">
            <ul class="metismenu" id="menu">
                <li class="<?php echo isActive('/home/dashboard.php') ?>">
                    <a href="<?php echo $basePath ?>/home/dashboard.php" class="ai-icon <?php echo isActive('/home/dashboard.php') ?>" aria-expanded="false">
                        <i class="flaticon-381-home"></i>
                        <span class="nav-text"> <?= $_SESSION['USER_INFO']['user_role'] ?> Dashboard</span>
                    </a>
                </li>
                <li class="<?php echo isActive('/report_panel/view/ph_dtls.php') ?><?php echo isActive('/report_panel/view/dse_leave_report.php') ?>">
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-network"></i>
                        <span class="nav-text">Lead Report Panel </span>
                    </a>
                    <ul aria-expanded="false" class="mm-collapse" style="height: 10px;">
                        <li><a href="<?php echo $basePath ?>/report_panel/view/summary.php">Report Summary</a></li>
                        <li><a href="<?php echo $basePath ?>/report_panel/view/dse_leave_report.php">DSE Lead Report </a></li>
                    </ul>
                </li>
                <li class="<?php echo isActive('/distributor_panel/view/ph_dtls.php') ?>">
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-network"></i>
                        <span class="nav-text">Distributor Panel </span>
                    </a>
                    <ul aria-expanded="false" class="mm-collapse" style="height: 10px;">
                        <li><a href="<?php echo $basePath ?>/distributor_panel/view/report.php">Distributor Report </a></li>
                        <li><a href="<?php echo $basePath ?>/distributor_panel/view/dse_leave_report.php">District Assign Report </a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
    <!--******** Sidebar end *************-->