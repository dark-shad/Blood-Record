<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
    <?php
    include('../assets/navbar.php');
    ?>
    <div class="container mt-5">
  <h1 class="text-center">Select Login Type</h1>
  <form class="d-flex justify-content-center mt-4" action="#" method="post">
    <button type="submit" class="btn btn-primary mr-3" name="hospital">Login as Hospital</button>
    <button type="submit" class="btn btn-primary" name="receiver">Login as User</button>
  </form>
</div>

<?php
  if (isset($_POST['hospital'])) {
    header("Location: hospital/hospital_login_page.php");
    exit();
  }
  elseif (isset($_POST['receiver'])) {
    header("Location: receiver/receiver_login_page.php");
    exit();
  }
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html> 