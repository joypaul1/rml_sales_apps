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
                        <span class="nav-text"> <?= $_SESSION['SALES_USER_INFO']['user_role'] ?> Dashboard</span>
                    </a>
                </li>

                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-network"></i>
                        <span class="nav-text">Lead Report Panel </span>
                    </a>
                    <ul aria-expanded="false" class="mm-collapse">
                        <li><a href="<?php echo $basePath ?>/report_panel/view/summary.php">Report Summary</a></li>
                        <li><a href="<?php echo $basePath ?>/report_panel/view/dse_leave_report.php">DSE Lead Report </a></li>
                        <li><a href="<?php echo $basePath ?>/report_panel/view/win_lost_report.php">Win Lost Report </a></li>
                    </ul>
                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-television"></i>
                        <span class="nav-text">Distributor Panel</span>
                    </a>
                    <ul aria-expanded="false" class="mm-collapse">
                        <li><a href="<?php echo $basePath ?>/distributor_panel/view/report.php">Distributor Report </a></li>
                        <li><a href="<?php echo $basePath ?>/distributor_panel/view/district_assign_report.php">District Assign Report </a></li>
                    </ul>
                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-bookmark"></i>
                        <span class="nav-text">Configure Panel</span>
                    </a>
                    <ul aria-expanded="false" class="mm-collapse">
                        <li><a href="<?php echo $basePath ?>/configure_panel/view/product_list.php">Product List </a></li>
                        <li><a href="<?php echo $basePath ?>/configure_panel/view/add_zone.php">Zone List </a></li>
                        <li><a href="<?php echo $basePath ?>/configure_panel/view/add_application.php">Application List </a></li>
                        <li><a href="<?php echo $basePath ?>/configure_panel/view/add_company.php">Company List </a></li>
                    </ul>
                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-network"></i>
                        <span class="nav-text">Apps User Panel </span>
                    </a>
                    <ul aria-expanded="false" class="mm-collapse">
                        <li><a href="<?php echo $basePath ?>/user_panel/view/dse_list.php">DSE Report</a></li>
                        <li><a href="<?php echo $basePath ?>/user_panel/view/user.php">Apps User List </a></li>
                        <li><a href="<?php echo $basePath ?>/user_panel/view/portal_user.php">Portal User Report </a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
    <!--******** Sidebar end *************-->