<?php
    session_start();
    include('../../config/dbconn.php');
    include('../../assets/navbar.php');
    if (isset($_SESSION['id'])){
        header('Location:hosptal_index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blood Bank</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form class="form" method="POST" action="receiver_login.php">
                    <h3 class="text-center mb-3">User Login</h3>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="now-ui-icons users_circle-08"></i>
                            </span>
                            <input type="text" name="user_name" class="form-control" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="now-ui-icons ui-1_lock-circle-open"></i>
                            </span>
                            <input type="password" name="password" placeholder="Password" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between">
                            <a href="receiver_register_page.php" class="link">Create User Account</a>
                            <a href="" class="link">Forgot Password?</a>
                        </div>
                    </div>
                </form>
                <?php
                if (isset($_SESSION['msg'])){
                    echo '<div class="alert alert-danger mt-3">'.$_SESSION['msg'].'</div>';
                    unset($_SESSION['msg']);
                }
                ?>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php include('../../assets/footer.php'); ?>

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi4jq7" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNS"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="
