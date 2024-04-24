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
                <li>
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-networking"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/index">Dashboard</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/index_2">Dashboard Dark<span class="badge badge-xs badge-danger ms-1">New</span></a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/workout_statistic">Workout Statistic</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/workout_plan">Workout Plan</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/distance_map">Distance Map</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/food_menu">Diet Food Menu</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/personal_record">Personal Record</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-television"></i>
                        <span class="nav-text">Apps</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/app_profile">Profile</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/post_details">Post Details</a></li>
                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                            <ul aria-expanded="false">
                                <li><a href="https://gymove.dexignzone.com/codeigniter/demo/email_compose">Compose</a></li>
                                <li><a href="https://gymove.dexignzone.com/codeigniter/demo/email_inbox">Inbox</a></li>
                                <li><a href="https://gymove.dexignzone.com/codeigniter/demo/email_read">Read</a></li>
                            </ul>
                        </li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/app_calender">Calendar</a></li>
                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                            <ul aria-expanded="false">
                                <li><a href="https://gymove.dexignzone.com/codeigniter/demo/ecom_product_grid">Product Grid</a></li>
                                <li><a href="https://gymove.dexignzone.com/codeigniter/demo/ecom_product_list">Product List</a></li>
                                <li><a href="https://gymove.dexignzone.com/codeigniter/demo/ecom_product_details">Product Details</a></li>
                                <li><a href="https://gymove.dexignzone.com/codeigniter/demo/ecom_product_order">Order</a></li>
                                <li><a href="https://gymove.dexignzone.com/codeigniter/demo/ecom_checkout">Checkout</a></li>
                                <li><a href="https://gymove.dexignzone.com/codeigniter/demo/ecom_invoice">Invoice</a></li>
                                <li><a href="https://gymove.dexignzone.com/codeigniter/demo/ecom_customers">Customers</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-compact-disc-1"></i>
                        <span class="nav-text">Icons<span class="badge badge-danger badge-xs ms-1">NEW</span></span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/flat_icons">Flaticons</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/svg_icons">SVG Icons</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/feather_icons">Feather Icons</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-briefcase"></i>
                        <span class="nav-text">CMS<span class="badge badge-danger badge-xs ms-1">NEW</span></span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/content">Content</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/add_content">Add Content</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/menu">Menus</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/email_template">Email Template</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/add_email">Add Email</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/blog">Blog</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/add_blog">Add Blog</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/blog_category">Blog Category</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-controls-3"></i>
                        <span class="nav-text">Charts</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/flot">Flot</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/morris">Morris</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/chartjs">Chartjs</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/chartist">Chartist</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/sparkline">Sparkline</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/peity">Peity</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-internet"></i>
                        <span class="nav-text">Bootstrap</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/accordion">Accordion</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/alert">Alert</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/badge">Badge</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/button">Button</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/modal">Modal</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/button_group">Button Group</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/list_group">List Group</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/media_object">Media Object</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/card">Cards</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/carousel">Carousel</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/dropdown">Dropdown</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/popover">Popover</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/progressbar">Progressbar</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/tab">Tab</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/typography">Typography</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/pagination">Pagination</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/grid">Grid</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-heart"></i>
                        <span class="nav-text">Plugins</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/select2">Select 2</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/nestable">Nestable</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/noui_slider">Noui Slider</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/sweetalert">Sweet Alert</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/toastr">Toastr</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/map_jqvmap">Jqv Map</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/lightgallery">Light Gallery</a></li>
                    </ul>
                </li>
                <li><a href="https://gymove.dexignzone.com/codeigniter/demo/widget_basic" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-settings-2"></i>
                        <span class="nav-text">Widget</span>
                    </a>
                </li>
                <li>
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-notepad"></i>
                        <span class="nav-text">Forms</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/form_element">Form Elements</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/form_wizard">Wizard</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/form_editor">Editor</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/form_pickers">Pickers</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/form_validation_jquery">Form Validate</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-network"></i>
                        <span class="nav-text">Table</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/table_bootstrap">Bootstrap</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/table_datatable">Datatable</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-layer-1"></i>
                        <span class="nav-text">Pages</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/page_register">Register</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/page_login">Login</a></li>
                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                            <ul aria-expanded="false">
                                <li><a href="https://gymove.dexignzone.com/codeigniter/demo/page_error_400">Error 400</a></li>
                                <li><a href="https://gymove.dexignzone.com/codeigniter/demo/page_error_403">Error 403</a></li>
                                <li><a href="https://gymove.dexignzone.com/codeigniter/demo/page_error_404">Error 404</a></li>
                                <li><a href="https://gymove.dexignzone.com/codeigniter/demo/page_error_500">Error 500</a></li>
                                <li><a href="https://gymove.dexignzone.com/codeigniter/demo/page_error_503">Error 503</a></li>
                            </ul>
                        </li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/page_lock_screen">Lock Screen</a></li>
                        <li><a href="https://gymove.dexignzone.com/codeigniter/demo/page_empty">Empty Page</a></li>
                    </ul>
                </li>
            </ul>
            <div class="add-menu-sidebar">
                <img src="https://gymove.dexignzone.com/codeigniter/demo/public/assets/images/calendar.png" alt="" class="me-3">
                <a href="https://gymove.dexignzone.com/codeigniter/demo/workout_plan" class="font-w500 mb-0">Create Workout Plan Now</a>
            </div>
            <div class="copyright">
                <p><strong>Gymove Fitness Admin Dashboard</strong> © 2023 All Rights Reserved</p>
                <p>Made with <span class="heart"></span> by DexignZone</p>
            </div>
        </div>
    </div>
    <!--******** Sidebar end *************-->