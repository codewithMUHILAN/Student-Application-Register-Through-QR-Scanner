<?php
//database connect
$servername = "localhost";
$database = "u883356064_test_db";
$username = "u883356064_test_db";
$password = "Muhilanswe#66196";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$birthday = $_POST['birthday'];
$gender = $_POST['gender'];
$caste = $_POST['caste'];
$Email = $_POST['Email'];
$number = $_POST['number'];
$Stimage = $_POST['Stimage'];
$FTname = $_POST['FTname'];
$FTnumb = $_POST['FTnumb'];
$FToccu = $_POST['FToccu'];
$MTname = $_POST['MTname'];
$MTnumb = $_POST['MTnumb'];
$MToccu = $_POST['MToccu'];
$ADDRESS = $_POST['ADDRESS'];
$CITY = $_POST['CITY'];
$STATE = $_POST['STATE'];
$PINCODE = $_POST['PINCODE'];
$SCHOOLNAME = $_POST['SCHOOLNAME'];
$SSLCMARKS = $_POST['SSLCMARKS'];
$SSLCPASSED = $_POST['SSLCPASSED'];
$sslc-file = $_POST['sslc-file'];
$HSCSHLNAME = $_POST['HSCSHLNAME'];
$HSCMARKS = $_POST['HSCMARKS'];
$HSCPASSED = $_POST['HSCPASSED'];
$hsc-file = $_POST['hsc-file'];
$courses = $_POST['courses'];
$courses1 = $_POST['courses1'];
$courses2 = $_POST['courses2'];



$sql = "INSERT INTO `Application_Form`(`First Name`, `Last Name`, `dob`, `Gender`, `Caste`, `Email`, `stmobno`, `stimg`, `Father Name`, `Father Number`, `Father occupation`, `Mother Name`, `Mother Number`, `Mother occupation`, `Addres`, `City`, `State`, `Pincode`, `SSLC School Name`, `SSLC Marks Scored`, `SSLC Year Of Passed`, `SSLC Marksheet`, `HSC School Name`, `HSC Marks Scored`, `HSC Year Of Passed`, `HSC Marksheet`, `Computer Science`, `Accounting & Finance`, `Life science`) values
('$Fname','$Lname','$birthday','$gender','$caste','$Email','$number','$Stimage','$FTname','$FTnumb','$FToccu','$MTname','$MTnumb','$MToccu','$ADDRESS','$CITY','$STATE','$PINCODE','$SCHOOLNAME','$SSLCMARKS','$SSLCPASSED','$sslc-file','$HSCSHLNAME','$HSCMARKS','$HSCPASSED','$hsc-file','$courses','$courses1','$courses2')";

// insert in database 
$rs = mysqli_query($conn, $sql);

echo "Connected successfully";
mysqli_close($conn);

?>