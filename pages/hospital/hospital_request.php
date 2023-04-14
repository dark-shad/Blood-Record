<?php
// Include database connection file
include('../../assets/login_hospital_navbar.php');
require('../../config/dbconn.php');

session_start();
if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
    header('location:hospital_login_page.php'); 
    exit();
    }      

// Prepare and execute SQL query
$sql = "SELECT * FROM request WHERE hospital_id = " . $_SESSION['id'];
$result = mysqli_query($dbconn, $sql);

// Display data in table
echo '<table>';
if (mysqli_num_rows($result) > 0) {
    // Output header row
    echo '<tr>';
    while ($fieldinfo = mysqli_fetch_field($result)) {
        echo '<th>' . $fieldinfo->name . '</th>';
    }
    echo '</tr>';

    // Output data rows
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        foreach ($row as $cell) {
            echo '<td>' . $cell . '</td>';
        }
        echo '</tr>';
    }
} else {
    echo '0 results';
}
echo '</table>';

// Close database connection
mysqli_close($dbconn);
?>