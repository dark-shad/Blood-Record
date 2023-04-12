<?php
    session_start();
    include('../config/dbconn.php');
    
    if (isset($_SESSION['id'])){
        header('Location:user_index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" sizes="76x76" href="../assets/img/icon.png">
    <link rel="icon" type="image/png" href="../assets/img/icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Blood Bank</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    
    <link href="../assets/css/demo.css" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="navbar-translate">
                <a href="../index.php" class="navbar-brand" rel="tooltip" title="PlantZone" data-placement="bottom">
                   Blood Bank
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/" target="_blank">
                            <i class="fa fa-twitter"></i>
                            <p class="d-lg-none d-xl-none">Twitter</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/" target="_blank">
                            <i class="fa fa-facebook-square"></i>
                            <p class="d-lg-none d-xl-none">Facebook</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/" target="_blank">
                            <i class="fa fa-instagram"></i>
                            <p class="d-lg-none d-xl-none">Instagram</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="page-header" filter-color="green">
        <div class="page-header-image" style="background-image:url(../assets/img/homepage.jpg)"></div>
        <div class="container">
            <div class="col-md-4 content-center">
                <div class="card card-login card-plain">
                    <form class="form" method="POST" action="user_login.php">
                        <div class="header header-primary text-center">
                            Customer Login
                        </div><br>
                        <div class="content">
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </span>
                                <input type="text" name="username" class="form-control" placeholder="Username">
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                </span>
                                <input type="password" name="password" placeholder="Password" class="form-control" />
                            </div>
                        </div>
                        <div class="footer text-center">
                            <button type="submit" class="bbtn btn-primary btn-round btn-lg btn-block" name="submit">Login</button>
                        </div>
                        <div class="pull-left">
                            <h6>
                                <a href="user_signup.php" class="link">Create User Account</a>
                            </h6>
                        </div>
                        <div class="pull-right">
                            <h6>
                                <a href="" class="link">Forgot Password?</a>
                            </h6>
                        </div>
                    </form>
                    <br>
                    <?php

                                    if (
                                        isset($_SESSION['msg'])){
                                        echo $_SESSION['msg'];
                                        unset($_SESSION['msg']);

                                    }
                                    ?>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <div class="copyright">
                    <a href="admin_login_page.php">&copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>,</a> FCRIT Project.
                </div>
            </div>
        </footer>
    </div>
</body>
</html>