<?php
session_start();
include('connect.php');

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$address = $_POST['address'];
$role = $_POST['role'];

// Protect against SQL injection
$name = mysqli_real_escape_string($connect, $name);
$mobile = mysqli_real_escape_string($connect, $mobile);
$password = mysqli_real_escape_string($connect, $password);
$cpassword = mysqli_real_escape_string($connect, $cpassword);
$address = mysqli_real_escape_string($connect, $address);
$role = mysqli_real_escape_string($connect, $role);

if ($password == $cpassword) {
    // Example: You may hash the password before storing in production
    $insert = mysqli_query($connect, "INSERT INTO user (name, mobile, address, password, role, status, votes) VALUES ('$name', '$mobile', '$address', '$password', '$role', 0, 0)");

    if ($insert) {
        echo '<script>alert("Registration Successful"); window.location = "../index.html";</script>';
    } else {
        echo '<script>alert("Some error occurred!"); window.location = "../routes/register.html";</script>';
    }
} else {
    echo '<script>alert("Password and confirm password do not match!"); window.location = "../routes/register.html";</script>';
}
?>
