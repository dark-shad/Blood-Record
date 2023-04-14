<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
  </head>
  <body>
    <h1>Select Login Type</h1>
    <form action="#" method="post">
      <button type="submit" name="hospital">Login as Hospital</button>
      <button type="submit" name="receiver">Login as User</button>
    </form>
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
  </body>
</html>
