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
    <!--wrapper-->
    <div class="wrapper">

        <!--sidebar wrapper -->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <!-- <div>
                    <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                </div> -->
                <div>
                    <h4 class="logo-text">COLLECTION APPS</h4>
                </div>
                <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li class="<?php echo isActive('/home/dashboard_zh.php'); ?>">
                    <a href="<?php echo $basePath ?>/home/dashboard_zh.php">
                        <div class="parent-icon"><i class="bx bx-home-circle"></i>
                        </div>
                        <div class="menu-title">ZH Dashboard</div>
                    </a>
                </li>
				
				 <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='bx bx-message-rounded-dots'></i>
                        </div>
                        <div class="menu-title">Information Module </div>
                    </a>
                    <ul>
                        <li> 
						<a href="<?php echo $basePath ?>/zh_module/view/concern_list.php"><i class='bx bxs-arrow-to-right'></i></i>Concern List</a>
                        </li>
						<li> 
						<a href="<?php echo $basePath ?>/zh_module/view/image_view.php"><i class='bx bxs-arrow-to-right'></i></i>Image View</a>
                        </li>
                       
                    </ul>
                </li>

                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='bx bx-bookmark-alt-plus'></i>
                        </div>
                        <div class="menu-title">Visit Assign Module </div>
                    </a>
                    <ul>
                        <li> 
						<a href="<?php echo $basePath ?>/zh_module/view/visit_approval_list.php"><i class='bx bxs-arrow-to-right'></i></i>Visit Approval List</a>
                        </li>
						<li> 
						<a href="<?php echo $basePath ?>/zh_module/view/visit_assign_report.php"><i class='bx bxs-arrow-to-right'></i></i>Visit Assign Report</a>
                        </li>
                    </ul>
                </li>
               <li>  <a href="javascript:;" class="has-arrow">

                        <div class="parent-icon"><i class='bx bx-group'></i>
                        </div>
                        <div class="menu-title">Code Module[Testing]</div>
                    </a>
                    <ul>
                        <li> <a href="<?php echo $basePath ?>/code_module/view/create.php"><i class='bx bxs-arrow-to-right'></i></i>Code Location</a>
                        </li>
                    </ul>
                </li> 

            </ul>
            <!--end navigation-->
        </div>
        <!--end sidebar wrapper -->