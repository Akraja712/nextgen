<?php
header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json");
header("Expires: 0");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
date_default_timezone_set('Asia/Kolkata');
include_once('../includes/crud.php');

$db = new Database();
$db->connect();

if (empty($_POST['name'])) {
    $response['success'] = false;
    $response['message'] = "Name is Empty";
    print_r(json_encode($response));
    return false;
}
if (empty($_POST['mobile'])) {
    $response['success'] = false;
    $response['message'] = "Mobilenumber is Empty";
    print_r(json_encode($response));
    return false;
}
if (empty($_POST['age'])) {
    $response['success'] = false;
    $response['message'] = "Age is Empty";
    print_r(json_encode($response));
    return false;
}
if (empty($_POST['city'])) {
    $response['success'] = false;
    $response['message'] = "City is Empty";
    print_r(json_encode($response));
    return false;
}
if (empty($_POST['gender'])) {
    $response['success'] = false;
    $response['message'] = "Gender is Empty";
    print_r(json_encode($response));
    return false;
}
if (empty($_POST['referred_by'])) {
    $response['success'] = false;
    $response['message'] = "Refer code is empty";
    print_r(json_encode($response));
    return false;
}
if (empty($_POST['password'])) {
    $response['success'] = false;
    $response['message'] = "Password is empty";
    print_r(json_encode($response));
    return false;
}

$name = $db->escapeString($_POST['name']);
$mobile = $db->escapeString($_POST['mobile']);
$referred_by = $db->escapeString($_POST['referred_by']);
$age = $db->escapeString($_POST['age']);
$city = $db->escapeString($_POST['city']);
$gender = $db->escapeString($_POST['gender']);
$password = $db->escapeString($_POST['password']);
$datetime = date('Y-m-d H:i:s');

if (!empty($_POST['referred_by'])) {
    $sql = "SELECT id FROM users WHERE refer_code='$referred_by'";
    $db->sql($sql);
    $res = $db->getResult();
    $num = $db->numRows($res);
    if ($num == 0) {
        $response['success'] = false;
        $response['message'] = "Invalid Referred By";
        print_r(json_encode($response));
        return false;
    }
}

$sql = "SELECT * FROM users WHERE mobile='$mobile'";
$db->sql($sql);
$res = $db->getResult();
$num = $db->numRows($res);
if ($num >= 1) {
    $response['success'] = false;
    $response['message'] = "Mobile Number Already Registered";
    print_r(json_encode($response));
    return false;
}

// Insert the user without the refer_code
$sql = "INSERT INTO users (`mobile`, `name`, `referred_by`, `age`, `city`, `registered_datetime`, `password`, `gender`) 
        VALUES ('$mobile', '$name', '$referred_by', '$age', '$city', '$datetime', '$password', '$gender')";
$db->sql($sql);

// Get the ID of the inserted user
$sql = "SELECT id FROM users WHERE mobile = '$mobile'";
$db->sql($sql);
$res = $db->getResult();
$userId = $res[0]['id'];

// Generate refer code based on user ID
$refer_code = 'NG' . str_pad($userId, 2, '0', STR_PAD_LEFT);

// Update the refer code for the user
$sql = "UPDATE users SET refer_code = '$refer_code' WHERE id = '$userId'";
$db->sql($sql);

// Fetch the updated user data
$sql = "SELECT * FROM users WHERE mobile = '$mobile'";
$db->sql($sql);
$res = $db->getResult();

$response['success'] = true;
$response['message'] = "Successfully Registered";
$response['data'] = $res;
print_r(json_encode($response));
?>