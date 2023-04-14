<!DOCTYPE html>
<html>
  <head>
    <title>Signup Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <?php
    include('../assets/navbar.php');
    ?>
    <div class="container mt-5">
      <div class="text-center">
        <h1>Select Signup Type</h1>
        <form action="#" method="post">
          <button type="submit" class="btn btn-primary mt-3" name="individual">Signup as Hospital</button>
          <button type="submit" class="btn btn-primary mt-3" name="business">Signup as User</button>
        </form>
        <?php
          if (isset($_POST['individual'])) {
            header("Location: hospital/hospital_register_page.php");
            exit();
          }
          elseif (isset($_POST['business'])) {
            header("Location: receiver/receiver_register_page.php");
            exit();
          }
        ?>
      </div>
    </div>
  </body>
</html>
