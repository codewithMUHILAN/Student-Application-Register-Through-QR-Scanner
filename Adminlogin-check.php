<?php
session_start();
include "Admin_db_conn.php";

if (isset($_POST['Uname']) && isset($_POST['Pass'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $Uname = validate($_POST['Uname']);
    $Pass = validate($_POST['Pass']);

    if (empty($Uname)) {
        header("Location: Adminlogin.php?error=User Name is required");
        exit();
    }else if(empty($Pass)){
        header("Location: Adminlogin.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM admin_data where  user_name='$Uname' AND password='$Pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)) {
            $row =mysqli_fetch_assoc($result);

            if ($row['user_name'] === $Uname &&  $row['password'] === $Pass){
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: Admin.php");
                exit();
                
            }else{
                            header("Location: Adminlogin.php?error=Incorrect Username or Password");
                       exit();
            }
        }else{
            header("Location: Adminlogin.php?error=Incorrect Username or Password");
        exit();
        }
    }
}else{
    header("Location: Adminlogin.php");
    exit();
}