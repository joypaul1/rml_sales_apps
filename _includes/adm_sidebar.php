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
                <li class="">
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-network"></i>
                        <span class="nav-text">Report Panel </span>
                    </a>
                    <ul aria-expanded="false" class="mm-collapse" style="height: 10px;">
                        <li><a href="<?php echo $basePath ?>/report_panel/view/summary.php">Report Summary</a></li>
                    </ul>
                </li>
                <!-- <li class="">
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-networking"></i>
                        <span class="nav-text"> Apps User Panel </span>
                    </a>
                    <ul aria-expanded="false">
                        <li class="">
                            <a class="" href="<?php echo $basePath ?>/home/dashboard.php"> Apps DSE List
                            </a>
                        </li>
                        <li class="">
                            <a class="" href="<?php echo $basePath ?>/home/dashboard.php"> Portal User List
                            </a>
                        </li>
                        <li class="">
                            <a class="" href="<?php echo $basePath ?>/home/dashboard.php"> Change Password
                            </a>
                        </li>
                    </ul>
                </li> -->
            </ul>

        </div>
    </div>
    <!--******** Sidebar end *************-->