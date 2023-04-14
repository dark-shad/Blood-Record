<?php
    include('../../assets/login_hospital_navbar.php');
    session_start();
    if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
        header('location:hospital_login_page.php'); 
        exit();
    }
?>
