<!DOCTYPE html>
<html>
  <head>
    <title>Signup Page</title>
  </head>
  <body>
    <h1>Select Signup Type</h1>
    <form action="#" method="post">
      <button type="submit" name="individual">Signup as Hospital</button>
      <button type="submit" name="business">Signup as User</button>
    </form>
    <?php
      if (isset($_POST['individual'])) {
        header("Location: hospital/hospital_register_page.php");
        exit();
      }
      elseif (isset($_POST['business'])) {
        header("Location: receiver/reciever_register_page.php");
        exit();
      }
    ?>
  </body>
</html>
