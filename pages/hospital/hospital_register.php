<?php
// including the database connection file
include("../../config/dbconn.php");
if(isset($_POST['submit']))
{   
    $name=$_POST['hospital_name'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $username=$_POST['user_name'];
    $password=$_POST['password'];

    $pass1=md5($password);
    $salt="a1Bz20ydqelm8m1wql";
    $pass1=$salt.$pass1;

    // checking empty fields
    if(empty($name) || empty($address) || empty($email) || empty($contact) || empty($username) || empty($password)) {    
            
        if(empty($firstname)) {
            echo "<font color='red'>Firstname field is empty!</font><br/>";
        }

        if(empty($address)) {
            echo "<font color='red'>Address field is empty!</font><br/>";
        }

        if(empty($email)) {
            echo "<font color='red'>Email field is empty!</font><br/>";
        }

        if(empty($contact)) {
            echo "<font color='red'>Contact field is empty!</font><br/>";
        }
        
        if(empty($username)) {
            echo "<font color='red'>Username field is empty!</font><br/>";
        }    

        if(empty($password)) {
            echo "<font color='red'>Password field is empty!</font><br/>";
        }    
    } else {    
        //updating the table
        $query = "INSERT INTO hospital (hospital_name, contact, address, email, user_name, password) 
                VALUES ('$name','$contact','$address','$email','$username','$pass1')";

        $result = mysqli_query($dbconn,$query);  
        
        if($result){
            //redirecting to the display page
        header("Location: ../../index.php");
        }
        
    }
}
?>
