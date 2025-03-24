<?php
include_once('includes/connection.php');
session_start();
ob_start();

$refer_code = isset($_GET['refer_code']) ? htmlspecialchars($_GET['refer_code']) : ''; 
$isReferCodeSet = !empty($refer_code);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ajax']) && $_POST['ajax'] === 'true') {
    $response = ['success' => false, 'message' => 'Unknown error'];

    $mobile = $_POST["mobile"] ?? '';
    $password = $_POST["password"] ?? '';
    $confirmPassword = $_POST["confirm_password"] ?? '';
    $name = $_POST["name"] ?? '';
    $city = $_POST["city"] ?? '';
    $age = $_POST["age"] ?? '';
    $gender = $_POST["gender"] ?? '';
    $referred_by = $_POST["referred_by"] ?? '';

    if ($password !== $confirmPassword) {
        $response['message'] = 'Password and Confirm Password do not match.';
    } else {
        $data = [
            "mobile" => $mobile,
            "password" => $password,
            "name" => $name,
            "city" => $city,
            "age" => $age,
            "gender" => $gender,
            "referred_by" => $referred_by,
        ];

        $apiUrl = API_URL . "register.php";
        $curl = curl_init($apiUrl);

        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $responseData = json_decode(curl_exec($curl), true);
        curl_close($curl);

        if ($responseData && isset($responseData['success']) && $responseData['success']) {
            $_SESSION['id'] = $responseData['data'][0]['id'];
            $response = ['success' => true, 'redirect' => 'index.php'];
        } else {
            $response['message'] = $responseData['message'] ?? 'Registration failed. Please try again.';
        }
    }

    echo json_encode($response);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" href="admin_v1/dist/img/money.jpeg" type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', Arial, sans-serif;
            background: #f5f5f5;
            color: #333;
        }
       
        .form-wrapper {
            width: 500px;
            margin: 50px auto;
            background: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }
        .form-group label {
            font-weight: 500;
        }
        .btn-custom {
            width: 100%;
            background-color: #3eb3a8;
            color: #fff;
            border-radius: 10px;
            transition: all 0.3s ease;
        }
        .btn-custom:hover {
            background-color: #33998c;
        }
        .error-msg {
            color: red;
            font-size: 14px;
        }
        @media (max-width: 576px) {
            .form-wrapper {
                padding: 30px 20px;
            }
        }
    </style>
</head>

<body>
<div class="container d-flex justify-content-center align-items-center">
    <div class="form-wrapper">
        <h2 class="text-center mb-4">Register</h2>
        <form id="registerForm">
            <div class="form-group">
                <label for="mobile">Mobile Number:</label>
                <input type="number" class="form-control" id="mobile" name="mobile" required>
            </div>

            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                <small id="passwordError" class="error-msg"></small>
            </div>

            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" class="form-control" id="age" name="age" required>
            </div>

            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" class="form-control" id="city" name="city" required>
            </div>

            <div class="form-group">
                <label for="referred_by">Referral Code (Optional):</label>
                <input type="text" class="form-control" id="referred_by" name="referred_by">
            </div>

            <button type="submit" class="btn btn-custom">Register</button>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#registerForm').on('submit', function(e) {
        e.preventDefault();

        let password = $('#password').val();
        let confirmPassword = $('#confirm_password').val();

        if (password !== confirmPassword) {
            $('#passwordError').text('Passwords do not match!');
            return;
        } else {
            $('#passwordError').text('');
        }

        let formData = $(this).serializeArray();
        formData.push({name: 'ajax', value: 'true'});

        $.ajax({
            url: '', 
            type: 'POST',
            data: $.param(formData),
            success: function(response) {
                let jsonResponse = JSON.parse(response);
                if (jsonResponse.success) {
                    window.location.href = jsonResponse.redirect;
                } else {
                    alert(jsonResponse.message);
                }
            },
            error: function() {
                alert('An error occurred. Please try again.');
            }
        });
    });
});
</script>
</body>
</html>
