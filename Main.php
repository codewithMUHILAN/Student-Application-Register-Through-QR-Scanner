<?php
//database connect
$servername = "localhost";
$database = "u883356064_review";
$username = "u883356064_review1";
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
$HSCSHLNAME = $_POST['HSCSHLNAME'];
$HSCMARKS = $_POST['HSCMARKS'];
$HSCPASSED = $_POST['HSCPASSED'];
$courses = $_POST['courses'];



$sql = "INSERT INTO `project`(`First Name`, `Last Name`, `DoB`, `gender`, `caste`, `Email`, `Student Mobile No`, `student image`, `father name`, `father number`, `father occupation`, `mother name`, `mother number`, `mother occupation`, `address`, `city`, `state`, `pincode`, `sslc school name`, `sslc mark`, `sslc passed`, `hsc school name`, `hsc mark`, `hsc passed`, `course`) values
('$Fname','$Lname','$birthday','$gender','$caste','$Email','$number','$Stimage','$FTname','$FTnumb','$FToccu','$MTname','$MTnumb','$MToccu','$ADDRESS','$CITY','$STATE','$PINCODE','$SCHOOLNAME','$SSLCMARKS','$SSLCPASSED','$HSCSHLNAME','$HSCMARKS','$HSCPASSED','$courses')";

// insert in database 
$rs = mysqli_query($conn, $sql);

echo "Connected successfully";
mysqli_close($conn);

?>