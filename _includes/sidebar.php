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
    <div class="deznav" style="background-color: #eadbc859;">
        <div class="deznav-scroll">
            <ul class="metismenu" id="menu">
                <li >
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-networking"></i>
                        <span class="nav-text"><?= $_SESSION['SALES_USER_INFO']['user_role'] ?> Dashboard</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="demo/index">Dashboard</a></li>
                    </ul>
                </li>
            </ul>
            
        </div>
    </div>
    <!--******** Sidebar end *************-->