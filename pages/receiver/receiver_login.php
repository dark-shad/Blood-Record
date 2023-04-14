<?php
session_start();
include('../../config/dbconn.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_unsafe = $_POST['user_name'];
    $pass_unsafe = $_POST['password'];

    $user = mysqli_real_escape_string($dbconn, $user_unsafe);
    $pass1 = mysqli_real_escape_string($dbconn, $pass_unsafe);

    $pass = md5($pass1);
    $salt = "a1Bz20ydqelm8m1wql";
    $pass1 = $salt.$pass;

    date_default_timezone_set('Asia/Manila');
    $date = date("Y-m-d H:i:s");            

    $query = mysqli_query($dbconn, "SELECT * FROM `receiver` WHERE username='$user' AND password='$pass1'");
    $res = mysqli_fetch_array($query);

    if (mysqli_num_rows($query) < 1) {
        $_SESSION['msg'] = "Login Failed, User not found!";
        header('Location: receiver_login_page.php');
        exit();
    } else {
        $_SESSION['id'] = $res['receiver_id'];
        header('Location: receiver_index.php');
        exit();
    }
}
?>
