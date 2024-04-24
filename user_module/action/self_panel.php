<?php
session_start();
require_once('../../config_file_path.php');
//require_once('../../_config/connoracle.php');
require_once('../../_config/sqlConfig.php');

$basePath   = $_SESSION['basePath'];
$folderPath = $rs_img_path;
ini_set('memory_limit', '2560M');
$valid_formats = array( "jpg", "png", "gif", "bmp", "jpeg", "PNG", "JPG", "JPEG", "GIF", "BMP" );
$log_user_id   = $_SESSION['USER_INFO']['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && trim($_POST["actionType"]) == 'profileUpdate') {
    $editId        = $_POST['editId'];
    $USER_NAME     = $_POST['user_name'];
    $USER_PASSWORD = $_POST['user_password'];
    $IMAGE_LINK    = $_FILES['user_image'];
	
    if ($IMAGE_LINK) {
        $imagename = $IMAGE_LINK['name'];
        $size      = $IMAGE_LINK['size'];

        if (strlen($imagename)) {
            $ext = strtolower(getExtension($imagename));
            if (in_array($ext, $valid_formats)) {
                $imgStorePath = '../../user_profile_image/';

                pathExitOrCreate($imgStorePath); // check if folder exists or create

                $actual_image_name = 'user_' . $editId . '_' . time() . "." . $ext;
                $uploadedfile      = $IMAGE_LINK['tmp_name'];
                //Re-sizing image. 
                $width    = 150; //You can change dimension here.
                $height   = 100; //You can change dimension here.
                $filename = compressImage($ext, $uploadedfile, $imgStorePath, $actual_image_name, $width, $height);
                $insert   = false; //

                if ($filename) {
                    // delet previous image
                    $query  = "SELECT UP.id,UP.image_link FROM tbl_users UP WHERE id = $editId";
                    $strSQL = mysqli_query($conn, $query);
                    $data   = mysqli_fetch_assoc($strSQL);

                    if ($data['image_link']) {
                        $file = '../../user_profile_image/' . $data['image_link'];
                        if (file_exists($file)) {
                            unlink($file); // delete image if exist
                        }
                    }  // end delet previous image
                    // update image  link
                    $query = "UPDATE tbl_users SET image_link = '$filename' WHERE ID = $editId";
                    if (mysqli_query($conn, $query)) {
                    }
                    else {
                        $message = [
                            'text'   => 'Something Went wrong in update Image SQL',
                            'status' => 'false',
                        ];
                        $_SESSION['noti_message'] = $message;
                        echo "<script> window.location.href = '{$basePath}/user_module/view/profile.php?id={$editId}&actionType=profileEdit'</script>";
                    }
                }
                else {

                    $imageStatus              = "Something went wrong file uploading!";
                    $_SESSION['noti_message'] = $imageStatus;
                    echo "<script> window.location.href = '{$basePath}/user_module/view/profile.php?id={$editId}&actionType=profileEdit'</script>";
                    exit();
                }
            }
            else {
                $imageStatus              = 'Sorry, only JPG, JPEG, PNG, BMP,GIF, & PDF files are allowed to upload!';
                $_SESSION['noti_message'] = $imageStatus;
                echo "<script> window.location.href = '{$basePath}/user_module/view/profile.php?id={$editId}&actionType=profileEdit'</script>";
            }
        }


    }
   $md5Password  = md5($USER_PASSWORD);
   
    if ($USER_PASSWORD) {
        // Prepare the SQL statement
        $query = "UPDATE tbl_users SET 
        user_name       = '$USER_NAME',
        password   		= '$md5Password',
        password_hint	= '$USER_PASSWORD'
        WHERE id        = $editId";
    }
    else {
        $query = "UPDATE tbl_users SET 
        user_name       = '$USER_NAME'
        WHERE id        = $editId";
    }


    // Execute the query
    if (mysqli_query($conn, $query)) {
        $message = [
            'text'   => 'Data Saved successfully.',
            'status' => 'true',
        ];

        $_SESSION['noti_message'] = $message;
        echo "<script> window.location.href = '{$basePath}/user_module/view/profile.php?id={$editId}&actionType=profileEdit'</script>";
    }
    else {
        $message                  = [
            'text'   => 'Something Went wrong in SQL',
            'status' => 'false',
        ];
        $_SESSION['noti_message'] = $message;
        echo "<script> window.location.href = '{$basePath}/user_module/view/profile.php?id={$editId}&actionType=profileEdit'</script>";
    }
}

function pathExitOrCreate($folderPath)
{
    if (!file_exists($folderPath)) {
        mkdir($folderPath, 0777, true);
    }
}
function getExtension($str)
{
    $i = strrpos($str, ".");
    if (!$i) {
        return "";
    }
    $l   = strlen($str) - $i;
    $ext = substr($str, $i + 1, $l);
    return $ext;
}

function compressImage($ext, $uploadedfile, $path, $actual_image_name, $newwidth, $newheight)
{
    if ($ext == "jpg" || $ext == "jpeg") {
        $src = imagecreatefromjpeg($uploadedfile);
    }
    else if ($ext == "png") {
        $src = imagecreatefrompng($uploadedfile);
    }
    else if ($ext == "gif") {
        $src = imagecreatefromgif($uploadedfile);
    }
    else {
        $src = imagecreatefrombmp($uploadedfile);
    }
    list( $width, $height ) = getimagesize($uploadedfile);
    if (!$newheight) {
        $newheight = ($height / $width) * $newwidth;
    }
    $tmp = imagecreatetruecolor($newwidth, $newheight);
    imagecopyresampled($tmp, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
    $filename = $path . $actual_image_name; //PixelSize_TimeStamp.jpg
    imagejpeg($tmp, $filename, 100);
    imagedestroy($tmp);
    return str_replace('../', '', $filename);
}

function random_strings($length_of_string)
{
    // String of all alphanumeric character
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    // Shuffle the $str_result and returns substring
    // of specified length
    return substr(
        str_shuffle($str_result),
        0,
        $length_of_string
    );
}
