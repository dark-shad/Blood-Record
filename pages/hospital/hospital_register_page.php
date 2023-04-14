<?php
    session_start();
    include('..\..\config\dbconn.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blood Bank</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <?php include('../../assets/navbar.php'); ?>

    <div class="container mt-4">
        <form class="form" method="post" action="hospital_register.php">
            <h2 class="text-center mb-4">Sign up as Hospital</h2>

            <div class="form-group">
                <div class="input-group">
                    <input type="text" name="hospital_name" placeholder="Name of Hospital" required class="form-control">
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <input type="text" name="email" placeholder="Email" required class="form-control">
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <input type="text" name="address" placeholder="Complete address" required class="form-control">
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <input type="text" name="contact" placeholder="Contact info" required class="form-control">
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <input type="text" id="username" name="user_name" placeholder="Username" required class="form-control">
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <input type="password" id="password" name="password" placeholder="Password"  required class="form-control">
                </div>
            </div>

            <div class="form-group text-center">
                <button type="submit" id="submit" name="submit" class="btn btn-primary">
                    Create account
                </button>
            </div>
        </form>
    </div>

    <?php include('../../assets/footer.php'); ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.
