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
                    <a class="ai-icon" href="<?php echo isActive('/home/dashboard.php') ?>" aria-expanded="false">
                        <span class="nav-text"><?= $_SESSION['USER_INFO']['user_role'] ?> Dashboard</span>
                    </a>
                </li>
                <li class="">
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
                </li>
            </ul>

        </div>
    </div>
    <!--******** Sidebar end *************-->