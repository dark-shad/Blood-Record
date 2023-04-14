<?php
    include('../../assets/login_receiver_navbar.php');
    session_start();
    if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
        header('location:hospital_login_page.php'); 
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Blood Bank</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
</head>
<body>


  <div class="container my-5">
    <div class="row">
      <div class="col-md-8 mx-auto text-center">
        <h1 class="display-4">Blood cannot be manufactured, it can only come from generous donors.</h1>
        <p class="lead">“The blood you donate gives someone another chance at life. One day that someone may be a close relative, a friend, a loved one—or even you"</p>
      </div>
    </div>
  </div>
  <br><br>

  <?php include('../../assets/footer.php'); ?>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
</body>
</html>
