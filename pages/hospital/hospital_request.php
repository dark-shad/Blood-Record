<?php
// Include database connection file
include('../../assets/login_hospital_navbar.php');
require('../../config/dbconn.php');

session_start();
if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) {
    header('location:hospital_login_page.php');
    exit();
}

// Define the column names as an array
$columns = array('Blood Group', 'Receiver Name');

// Prepare and execute SQL query
$sql = "SELECT r.blood_grp, rcv.firstname
FROM request r
INNER JOIN receiver rcv ON r.receiver_id = rcv.receiver_id
WHERE r.hospital_id = {$_SESSION['id']}";

$result = mysqli_query($dbconn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blood Bank</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fyqdjZf5Pga/Pa/nb5gmdi9Q8D4Ju1qZbootstrapcdn.com/twbs/bootstrap/v4.0.0/css/bootstrap.min.css"
    crossorigin="anonymous">
    </head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <h3>Request List</h3>
                <table class="table table-bordered table-hover">
                    <thead class="thead-light">
                        <tr>
                            <?php foreach ($columns as $column) : ?>
                            <th scope="col"><?php echo $column; ?></th>
                            <?php endforeach; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (mysqli_num_rows($result) > 0) : ?>
                        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                        <tr>
                            <?php foreach ($row as $cell) : ?>
                            <td><?php echo $cell; ?></td>
                            <?php endforeach; ?>
                        </tr>
                        <?php endwhile; ?>
                        <?php else : ?>
                        <tr>
                            <td colspan="<?php echo count($columns); ?>">No results found.</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
