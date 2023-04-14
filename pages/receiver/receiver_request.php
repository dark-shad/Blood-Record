<?php
include('../../assets/login_receiver_navbar.php');
// Include database connection file
require('../../config/dbconn.php');


session_start();
if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
    header('location:receiver_login_page.php'); 
    exit();
}      

// Prepare and execute SQL query
$sql = "SELECT r.hospital_id, r.blood_grp, h.hospital_name
        FROM request r
        INNER JOIN hospital h ON r.hospital_id = h.hospital_id
        WHERE r.receiver_id = {$_SESSION['id']}";

$result = mysqli_query($dbconn, $sql);

// Display data in table
echo '<div class="container">';
if (mysqli_num_rows($result) > 0) {
    echo '<table class="table table-striped">';
    echo '<thead class="thead-dark">';
    echo '<tr>';
    echo '<th scope="col">Hospital Name</th>';
    echo '<th scope="col">Blood Group</th>';
    echo '</tr>';
    echo '</thead>';

    // Output data rows
    echo '<tbody>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['hospital_name'] . '</td>';
        echo '<td>' . $row['blood_grp'] . '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
} else {
    echo '<p class="lead">No results found.</p>';
}
echo '</div>';

// Close database connection
mysqli_close($dbconn);
?>
