<?php
session_start();
include "db_conn.php";

if (isset($_POST['Fname']) && isset($_POST['Uname']) 
  && isset($_POST['Pnum']) && isset($_POST['Pass']) 
  && isset($_POST['CPass'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $Fname = validate($_POST['Fname']);
    $Uname = validate($_POST['Uname']);
    $Pnum = validate($_POST['Pnum']);
    $Pass = validate($_POST['Pass']);
    $CPass = validate($_POST['CPass']);
   

    $user_data = 'Uname='. $Uname. '&Fname='. $Fname;

 

    if(empty($Fname)){
        header("Location: signup.php?error=Full Name is required &$user_data");
        exit();

    }else if (empty($Uname)) {
        header("Location: signup.php?error=User Name is required &$user_data");
        exit();

    }else if(empty($Pnum)){
        header("Location: signup.php?error=Phone Number is required &$user_data");
        exit();

    }else if(empty($Pass )){
        header("Location: signup.php?error=Password is Required &$user_data");
        exit();

    }else if(empty($CPass == $Pass)){
        header("Location: signup.php?error=The Confirm Password does not match &$user_data");
        exit();
    }
    
    else{

        $Pass = md5($Pass);
        $sql = "SELECT * FROM users WHERE user_name='$Uname'";
        $result = mysqli_query($conn, $sql);
     
        if (mysqli_num_rows($result) > 0)  {
            header("Location: signup.php?error=The user name is taken try another &$user_data");
        exit();
        }else{
            $sql2 = "INSERT INTO users(name,user_name, phone, pass) VALUES('$Fname', '$Uname', '$Pnum', '$CPass')";
            $result2 = mysqli_query($conn, $sql2);
            if ($result2) {
                header("Location: signup.php?Success=Your Account has been Created Successfully...");
        exit();
            }else{
                header("Location: signup.php?error=Unknown error Occurred & $user_data");
                exit();
            }
        }

    }
}else{
    header("Location: signup.php");
    exit();
}