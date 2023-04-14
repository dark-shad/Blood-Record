<?php
session_start();
require('../../config/dbconn.php');

if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) {
    header('location:receiver_login_page.php');
    exit();
}

function display_available_samples($dbconn)
{
    $sql = "SELECT s.blood_grp, s.units, h.hospital_name, h.hospital_id
            FROM stock s
            INNER JOIN hospital h
            ON s.hospital_id = h.hospital_id";

    $result = mysqli_query($dbconn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo '<div class="table-responsive">';
        echo '<table class="table table-bordered">';
        echo '<thead class="thead-light">';
        echo '<tr>';
        echo '<th>Blood Group</th>';
        echo '<th>Units Available</th>';
        echo '<th>Hospital Name</th>';
        echo '<th>Action</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['blood_grp'] . '</td>';
            echo '<td>' . $row['units'] . '</td>';
            echo '<td>' . $row['hospital_name'] . '</td>';
            echo '<td><form method="post" action="request_sample.php">
                  <button type="submit" id="submit" name="submit" class="btn btn-primary">
                  Request Sample
                  </button>
                  <input type="hidden" name="hospital_id" value="' . $row['hospital_id'] . '">
                  <input type="hidden" name="blood_grp" value="' . $row['blood_grp'] . '">
                  </form>
                  </td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
        echo '</div>';
    } else {
        echo '<p>No results found.</p>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blood Bank</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>

<?php include('../../assets/login_receiver_navbar.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mt-4 mb-4">Available Samples</h2>

            <?php display_available_samples($dbconn); ?>
        </div>
    </div>
</div>

<!-- jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous">
