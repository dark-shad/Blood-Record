<?php
    session_start();
    include('..\..\config\dbconn.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blood Bank</title>
</head>

<body>
<?php
    include('../../assets/navbar.php');
    ?>
    <div>
        <form class="form" method="post" action="hospital_register.php">
            <div>
                    Sign in
            </div>
            <div>
                <span class="input-group-addon">
                    <i class="now-ui-icons users_circle-08"></i>
                </span>
                <input type="text" name="hospital_name" placeholder="Name of Hospital" required>
            </div>
            <div>
                <span class="input-group-addon">
                    <i class="now-ui-icons ui-1_email-85"></i>
                </span>
                <input type="text" name="email" placeholder="Email" required>
            </div>
            <div>
                <span class="">
                    <i class=""></i>
                </span>
                <input type="text" name="address" placeholder="Complete address" required>
            </div>
            <div>
                <span class="input-group-addon">
                    <i class="now-ui-icons tech_mobile"></i>
                </span>
                <input type="text" name="contact" placeholder="Contact info" required>
            </div>
            <div>
                <span>
                    <i></i>
                </span>
                <input type="text" id="username" name="user_name" placeholder="Username" required>
            </div>
            <div>
                <span>
                    <i></i>
                </span>
                <input type="password" id="password" name="password" placeholder="Password"  required>
            </div>
            <div>
                <button type="submit" id="submit" name="submit">
                     Create account
                <span></span>
                </button>
            </div>
        </form>
    </div>
    <?php
    include('../../assets/footer.php');
    ?>
</body>
</html>