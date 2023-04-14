<?php
// Include database connection file
require('../../config/dbconn.php');

session_start();
if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) {
    header('location:receiver_login_page.php');
    exit();
}

// Get hospital_id  from the URL parameters
$hospital_id = $_GET['hospital_id'];
$blood_grp = $_GET['blood_grp'];

if (isset($_POST['submit'])) {
    // Sanitize input data to prevent SQL injection
    $receiver_id = mysqli_real_escape_string($dbconn, $_SESSION['id']);
    $hospital_id1 = mysqli_real_escape_string($dbconn, $_POST['hospital_id']);
    $blood_grp1 = mysqli_real_escape_string($dbconn, $_POST['blood_grp']);

    // Prepare and execute SQL query to insert a new blood sample request
    $sql = "INSERT INTO request (hospital_id, blood_grp, receiver_id) VALUES ('$hospital_id1', '$blood_grp1', '$receiver_id')";
    $result = mysqli_query($dbconn, $sql);    
    if($result){
        // Redirect to page after successful request
        header("Location: receiver_request.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($dbconn);
    }
}
?>