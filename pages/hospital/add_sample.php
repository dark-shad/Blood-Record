<?php
    session_start();
    include('../../assets/login_hospital_navbar.php');
    include('../../config/dbconn.php');
    if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
        header('location:hospital_login_page.php'); 
        exit();
    }      
    
    if(isset($_POST['submit'])){
        $group_type=$_POST['group_type'];
        $units=$_POST['units'];
        
        // checking empty fields
        if(empty($group_type) || empty($units)){    
            if(empty($group_type)) {
                $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Enter the Blood group type</div>";
            }
                
            if(empty($units)) {
                $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Number of Unit field is empty!</div>";
            }
        } else {    
            $query = "INSERT INTO stock (blood_grp, units, hospital_id) VALUES ('$group_type', '$units', '{$_SESSION['id']}')";
            $result = mysqli_query($dbconn,$query);
              
            //redirecting to the display page.
            header("Location: hospital_display.php");
        }   
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blood Bank</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-md-6">
                <form class="form" method="POST">
                    <div class="card">
                        <div class="card-header">
                            Add Sample
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Blood Group Type</label>
                                <input type="text" name="group_type" class="form-control" placeholder="Enter blood type">
                            </div>
                            <div class="form-group">
                                <label>No. of Units</label>
                                <input type="text" name="units" class="form-control" placeholder="Enter number of units">
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
                <br>
                <?php
                    if (isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                ?>
            </div>
        </div>
    </div>
</body>

</html>
                    