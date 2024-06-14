<?php
session_start();
date_default_timezone_set('Africa/lagos');

require 'Database.php';
require 'User.php';
require 'JobUser.php';
require 'JobListing.php';
require 'Record.php';
require 'Sector.php';
require 'Settings.php';
require 'email.php';

$database = new Database();

$user = new User($database);

$jobUser = new JobUser($database);

$jobListing = new JobListing($database);

$record = new Record($database);

$sector = new Sector($database);

$settings = new Settings($database);

// Check for User Access using ID

if (isset($_SESSION['user_data']['userId'])) {
    $userAccess = $record->getRecord('users', $_SESSION['user_data']['userId'])['access'];
}

// Check for User Access using Access Token

if (isset($_SESSION['user_data']['token'])) {
    $userAccessViaToken = $record->getRecordByColumn('job_users', 'token', $_SESSION['user_data']['token'])['access'];
}

// WEB ADMIN Authorization Checks

function authCheck()
{
    global $userAccess;

    if (!isset($_SESSION['user_data']['fullName']) && !isset($_SESSION['user_data']['email'])) {
        $_SESSION['message'] = "You are not authorized to access this page. Please Login";
        header("location: login.php");
        exit(0);
    } else if ($userAccess == "1") {
        $_SESSION['message'] = "Your account has been suspended! Please contact admin";
        header("location: ./login.php");
        exit(0);
    } else if ($_SESSION['user_data']['role'] == "0") {
        $_SESSION['message'] = "You are not authorized to access this page. Not an Admin!";
        header("location: ../index.php");
        exit(0);
    }
};
function authCheckUser()
{
    global $userAccess;

    if (!isset($_SESSION['user_data']['fullName']) && !isset($_SESSION['user_data']['email'])) {
        $_SESSION['userErrorMessage'] = "You are not authorized to access this page. Please Login";
        header("location: ./login.php");
        exit(0);
    } else if ($userAccess == "1") {
        $_SESSION['message'] = "Your account has been suspended! Please contact admin";
        header("location: ./login.php");
        exit(0);
    }
};

function authCheckUserBySlug($slug, $page)
{
    global $userAccess;

    if (!isset($_SESSION['user_data']['fullName']) && !isset($_SESSION['user_data']['email'])) {
        $_SESSION['userErrorMessage'] = "You are not authorized to access this page. Please Login";
        header("location: ./login.php");
        exit(0);
    } else if ($userAccess == "1") {
        $_SESSION['message'] = "Your account has been suspended! Please contact admin";
        header("location: ./login.php");
        exit(0);
    } else if (!isset($slug) || ($slug == "")) {
        $_SESSION['errorMessage'] = "You are not authorized to access this page! No Event ID Found.";
        header("location: $page.php");
        exit(0);
    }
};

function authCheckById($id, $page)
{
    global $userAccess;

    if (!isset($_SESSION['user_data']['fullName']) && !isset($_SESSION['user_data']['email'])) {
        $_SESSION['message'] = "You are not authorized to access this page. Please Login";
        header("location: login.php");
        exit(0);
    } else if ($userAccess == "1") {
        $_SESSION['message'] = "Your account has been suspended! Please contact admin";
        header("location: ./login.php");
        exit(0);
    } else if ($_SESSION['user_data']['role'] == "0") {
        $_SESSION['message'] = "You are not authorized to access this page. Not an Admin!";
        header("location: ../index.php");
        exit(0);
    } else if (!isset($id) || ($id == "")) {
        $_SESSION['errorMessage'] = "You are not authorized to access this page! No ID Found.";
        header("location: $page.php");
        exit(0);
    }
};

function adminAuth()
{
    global $userAccess;

    if (!isset($_SESSION['user_data']['fullName']) && !isset($_SESSION['user_data']['email'])) {
        $_SESSION['message'] = "You are not authorized to access this page. Please Login";
        header("location: login.php");
        exit(0);
    } else if ($userAccess == "1") {
        $_SESSION['message'] = "Your account has been suspended! Please contact admin";
        header("location: ./login.php");
        exit(0);
    } else if ($_SESSION['user_data']['role'] == "0") {
        $_SESSION['message'] = "You are not authorized to access this page. Not an Admin!";
        header("location: ../index.php");
        exit(0);
    } else if ($_SESSION['user_data']['role'] == "1") {
        $_SESSION['message'] = "You are not authorized to access this page. Not a Super Admin!";
        header("location: index.php");
        exit(0);
    }
}

// Job Dashboard Authorization Checks

function authCheckJobUser()
{
    global $userAccessViaToken;

    if (!isset($_SESSION['user_data']['fullName']) && !isset($_SESSION['user_data']['email'])) {
        $_SESSION['jobUserWarningMessage'] = "You are not authorized to access this page. Please Login!";
        header("location: ../login.php");
        exit(0);
    } else if ($userAccessViaToken == "1") {
        $_SESSION['jobUserErrorMessage'] = "Your account has been suspended! Please contact admin";
        header("location: ../login.php");
        exit(0);
    }
};

function authRoleCheckJobUser($role, $redirectPage1, $redirectPage2, $message)
{
    global $userAccessViaToken;

    if (!isset($_SESSION['user_data']['fullName']) && !isset($_SESSION['user_data']['email'])) {
        $_SESSION['jobUserWarningMessage'] = "You are not authorized to access this page. Please Login!";
        header("location: $redirectPage1.php");
        exit(0);
    } else if ($userAccessViaToken == "1") {
        $_SESSION['jobUserErrorMessage'] = "Your account has been suspended! Please contact admin";
        header("location: $redirectPage1.php");
        exit(0);
    } else if ($_SESSION['user_data']['role'] == $role) {
        $_SESSION['jobUserWarningMessage'] = $message;
        header("location: $redirectPage2.php");
        exit(0);
    }
};

// End Job Dashboard Authorization Checks

function pageCheckBySlug($slug, $page)
{
    if (!isset($slug) || ($slug == "")) {
        $_SESSION['errorMessage'] = "You are not authorized to access this page! No ID Found.";
        header("location: $page.php");
        exit(0);
    }
}


// function authConfirm()
// {
//     if (isset($_SESSION['user_data']['fullName']) && isset($_SESSION['user_data']['email'])) {
//         $_SESSION['message'] = "You are already logged in!";
//         header("location: index.php");
//         exit(0);
//     } 
// }

function logoutUser()
{
    if (isset($_GET['logout']) == 'true') {
        session_unset();
        session_destroy();
        header('location: login.php');
        exit();
    }
}
function logoutJobUser()
{
    if (isset($_GET['logout']) == 'true') {
        session_unset();
        session_destroy();
        header('location: ../login.php');
        exit();
    }
}

function image_processing($image)
{
    $image_name = $image['name'];

    if ($image_name != null) {
        $image_size = $image['size'];
        $image_tmp_name = $image['tmp_name'];
        $image_extension = pathinfo($image_name, PATHINFO_EXTENSION);
        $filename = uniqid() . '.' . $image_extension;
        $valid_extensions = ['jpg', 'jpeg', 'png'];

        return [
            'image_name' => $image_name,
            'image_size' => $image_size,
            'image_tmp_name' => $image_tmp_name,
            'image_extension' => $image_extension,
            'filename' => $filename,
            'valid_extensions' => $valid_extensions
        ];
    } else {
        return null;
    }
}

function move_image($filename, $image_tmp_name)
{
    $destination = "../../images/events/$filename";
    move_uploaded_file($image_tmp_name, $destination);
}

function unlink_image($old_image, $filename, $image_tmp_name)
{
    $olDestination = "../../images/events/$old_image";

    if (file_exists($olDestination)) {
        unlink($olDestination);
    }

    $destination = "../../images/events/$filename";
    move_uploaded_file($image_tmp_name, $destination);
}

function unlink_image_only($path)
{
    if (file_exists($path)) {
        unlink($path);
    }
}

function textToSlug($text)
{
    // Remove special characters (except hyphens and spaces)
    $text = preg_replace('/[^a-z0-9- ]/i', '', $text);

    // Replace spaces with hyphens
    $text = str_replace(' ', '-', $text);

    // Convert to lowercase
    $text = strtolower($text);

    // Remove consecutive hyphens
    $text = preg_replace('/-+/', '-', $text);

    // Trim hyphens from the beginning and end
    $text = trim($text, '-');

    return $text;
}

function setActivePage($currentPage, $linkPage)
{
    if ($currentPage === $linkPage) {
        return 'active';
    } else {
        return '';
    }
}
function setCurrentPage($currentPage, $linkPage)
{
    if ($currentPage === $linkPage) {
        return 'current';
    } else {
        return '';
    }
}

function setActiveJobReg($key, $value, $class1, $class2)
{
    if ($key == $value) {
        return $class1;
    } else {
        return $class2;
    }
}
function generateUniqId($length = 16)
{
    $uniqueId = uniqid('', true);
    $salt = openssl_random_pseudo_bytes(16);
    $hash = hash('sha256', $uniqueId . $salt);
    $paymentId = substr($hash, 0, $length);

    return $paymentId;
}

function generateToken($length = 16)
{
    $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $charLength = strlen($chars);
    $token = '';

    // Generate random token
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = mt_rand(0, $charLength - 1);
        $token .= $chars[$randomIndex];
    }

    return $token;
}