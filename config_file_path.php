<?php
$baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://") . $_SERVER['HTTP_HOST'];
// $basePath =  $baseUrl . '/rml_apps'; // --> live server
$basePath    = $baseUrl . '/sale_apps'; //--> test server
// $rs_img_path = "../resale_product_image/";  // --> live server
$rs_img_path    = $baseUrl . '/sale_apps/uploads'; //--> test server 
?>