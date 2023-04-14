<?php
    session_start();
    include('../../assets/navbar.php');
    include('../../config/dbconn.php');
    
    if (isset($_SESSION['id'])){
        header('Location:hosptal_index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blood Bank</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <form class="form" method="POST" action="hospital_login.php">
            <h2 class="text-center">Hospital Login</h2>
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
            <div class="row">
                <div class="col-6">
                    <a href="hospital_register.php" class="link">Create User Account</a>
                </div>
                <div class="col-6">
                    <a href="" class="link float-right">Forgot Password?</a>
                </div>
            </div>
            <?php
                if (isset($_SESSION['msg'])){
                    echo '<div class="alert alert-danger mt-3">'.$_SESSION['msg'].'</div>';
                    unset($_SESSION['msg']);
                }
            ?>
        </form>
    </div>
</body>
</html>
