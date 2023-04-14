<?php
    session_start();
    include('../../assets/login_receiver_navbar.php');
    include('../../config/dbconn.php');
    if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
        header('location:receiver_login_page.php'); 
        exit();
        }      
    
        if(isset($_POST['submit'])){

            $group_type=$_POST['group_type'];
            $units=$_POST['units'];
        
             // checking empty fields
            if(empty($group_type) || empty($units)){    
                    
                if(empty($group_type)) {
                    echo "<font color='red'>Enter the Blood group type</font><br/>";
                }
                
                if(empty($units)) {
                    echo "<font color='red'>Number of Unit field is empty!</font><br/>";
                }
        
            } else {    
        
                $query = "INSERT INTO request (blood_grp, units, hospital_id) VALUES ('$group_type', '$units', '{$_SESSION['id']}')";
        
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
</head>

<body>
    <div>
                    <form class="form" method="POST">
                        <div>
                            Add Sample
                        </div><br>
                        <div>
                            <div>
                                Blood Group Type
                                <input type="text" name="group_type" placeholder="blood type">
                            </div>
                            <div>
                                No. of Units
                                <input type="text" name="units" placeholder="Number of units" />
                            </div>
                        </div>
                        <div class="footer text-center">
                            <button type="submit" name="submit" id="submit">Submit</button>
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