<?php
session_start();
if (!isset($_SESSION['SALES_USER_INFO'])) {
    $currentScriptPath = __FILE__;
    $directoryPath     = dirname($currentScriptPath);
    $includeFilePath   = $directoryPath . '../../config_file_path.php';
    $realIncludePath   = realpath($includeFilePath);
    require($includeFilePath);
    header("Location:" . $basePath);
    exit;
}
include_once('../../_config/connoracle.php');
include_once('../../_config/sqlConfig.php');
$basePath = $_SESSION['basePath'];
$emp_session_id  = $_SESSION['SALES_USER_INFO']['emp_id'];
$emp_session_band  = $_SESSION['SALES_USER_INFO']['brand'];

include_once('../../_includes/header.php');
include_once('../../_includes/top_header.php');
?>

<body>

    <!--****** Main wrapper start ******-->
    <div id="main-wrapper">

        <?php
        if ($_SESSION['SALES_USER_INFO']['user_role_id'] == 2) {
            include_once('../../_includes/adm_sidebar.php');
        } else if ($_SESSION['SALES_USER_INFO']['user_role_id'] == 3) {
            include_once('../../_includes/ph_sidebar.php');
        } else if ($_SESSION['SALES_USER_INFO']['user_role_id'] == 4) {
            include_once('../../_includes/zh_sidebar.php');
        }
        ?>