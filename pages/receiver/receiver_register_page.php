<?php
    session_start();
    include('../../config/dbconn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blood Bank</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.1/css/bootstrap.min.css">

</head>
<body>
    <?php include('../../assets/navbar.php'); ?>

    <div class="container mt-4">
        <form class="row g-3" method="post" action="receiver_register.php">
            <div class="col-md-12 text-center mb-4">
                <h2>Sign up as User</h2>
            </div>
            <div class="col-md-4">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First name" required>
            </div>
            <div class="col-md-4">
                <label for="middlename" class="form-label">Middle Name</label>
                <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Middle name" required>
            </div>
            <div class="col-md-4">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last name" required>
            </div>
            <div class="col-md-12">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="col-md-12">
                <label for="address" class="form-label">Complete Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Complete address" required>
            </div>
            <div class="col-md-12">
                <label for="contact" class="form-label">Contact Info</label>
                <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact info" required>
            </div>
            <div class="col-md-6">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password"  required>
            </div>
            <br><br><br><br><br>
            <div class="col-12 text-center">
                <button type="submit" id="submit" name="submit" class="btn btn-primary">
                    Create Account
                </button>
            </div>
            <br><br><br><br><br>
        </form>
    </div>

    <?php include('../../assets/footer.php'); ?>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.1/js/bootstrap.min.js"></script>
</body>
</html>
