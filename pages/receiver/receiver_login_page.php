<?php
    session_start();
    include('../../config/dbconn.php');
    
    if (isset($_SESSION['id'])){
        header('Location:hosptal_index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blood Bank</title>
</head>

<body>
    <div>
                    <form class="form" method="POST" action="receiver_login.php">
                        <div>
                            Hospital Login
                        </div><br>
                        <div class="content">
                            <div>
                                <span class="input-group-addon">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </span>
                                <input type="text" name="user_name" class="form-control" placeholder="Username">
                            </div>
                            <div>
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                </span>
                                <input type="password" name="password" placeholder="Password" class="form-control" />
                            </div>
                        </div>
                        <div class="footer text-center">
                            <button type="submit" name="submit">Login</button>
                        </div>
                        <div class="pull-left">
                            <h6>
                                <a href="receiver_register.php" class="link">Create User Account</a>
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
    </div>
</body>
</html>