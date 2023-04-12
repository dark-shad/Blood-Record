<?php
    session_start();
    include('../../config/dbconn.php');
    if($_SERVER["REQUEST_METHOD"] == "POST"){
            
        $user_unsafe=$_POST['user_name'];
        $pass_unsafe=$_POST['password'];

        $user = mysqli_real_escape_string($dbconn,$user_unsafe);
        $pass1 = mysqli_real_escape_string($dbconn,$pass_unsafe);

        $pass=md5($pass1);
        $salt="a1Bz20ydqelm8m1wql";
        $pass=$salt.$pass;


        date_default_timezone_set('Asia/Manila');
        $date = date("Y-m-d H:i:s");            


        $query=mysqli_query($dbconn,"SELECT * FROM `hospital` WHERE user_name='$user' AND password='$pass'");
        $res=mysqli_fetch_array($query);
        $id=$res['user_id'];

        if (mysqli_num_rows($query)<1){
            $_SESSION['msg']="Login Failed, User not found!";
            header('Location:hospital_login_page.php');
        }

        else{
            $res=mysqli_fetch_array($query);
            $_SESSION['id']=$res['user_id'];
            header('Location: hospital_index.php');
            }
        }
?>

