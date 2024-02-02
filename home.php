<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user_name'])) {



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="Main.css">
    <script type="text/javascript" src="Main.js"></script>
<style>
  body{
    background-position: center;
    font-family: serif;
    font-size: 18px;
    
}
.container{
    background-color:#006666 ;
    padding: 10px;
    border-style: outset;
}
.container-fluid{
    padding-top: 2px;
    background-color: #006666;
    
    
    
}
.img-thumbnail{
    background-color:#006666 ;
    display: block;
  margin-left: auto;
  margin-right: auto;
    
}
.container-Info{
    background-color: #d3d3d3;
    border-radius: 20px;
    border-style:ridge;
    padding: 5px;
    padding-top: 0px;
}




.container-SD,.container-PD,.container-AD,.container-ED,.container-CR{
    background-color:white;
    padding: 30px;
    padding-top: 40px;
    
    
}


.sslc,.hsc{
    text-align: center;
    font-size: 18px;
 
}


.title{
    font-size: 15px;
    display: flex;
    justify-content: center; /* Centering Horizantly */
    align-items: center;
    padding: 5px;
}
h2{
    font-size:20px;
}


@media (min-width: 1024px) {
    body{
        font-size: 20px;
        
    }
     .container{
        background-color: #006666;
        width: 700px;
        

     }

     .title{
        font-size: x-large;
     }
     .container-Info{
        background-color: #d3d3d3;
        border-radius: 15px;
        border-style:ridge;
        padding: 5px;
        padding-top: 0px;
        width: 600px;
        margin-left: auto;
    margin-right: auto;
        
    }
    .container{
        width: 800px;
    }

    .form-control{
        width: 400px;
    }

   
     

    

}
@media (max-width:400px) {
    body{
        font-size:12px;
    }
    .img-thumbnail{
        width: 500px;
        height: 60px;
    }
    .title{
        font-size:12px;
        font-style:solid;
    }
    
    
}
</style>
     

</head>

<body>
  <!--scroll text lines-->
    <marquee onmouseover="this.setAttribute('scrollamount', 0, 0);this.stop();" onmouseout="this.setAttribute('scrollamount',3, 0);this.start();" direction="left" scrollamount="3" width="100%" height="30"> 

        
      <a href="https://enrollonline.co.in/Registration/Apply/mscas" target="_blank"> <strong>ONLINE APPLICATION PG(2022-2023)</strong><img src="new.gif"></a>						
                                 
      <a href="http://feepayr.com/" class="bg1" target="_blank"><strong> ADMISSION SUPPORT</strong><img src="new.gif"></a>                                  
       
                                               
       
      </marquee>
      <!--Main Container-->
<div class="container">
  
  <!--logo image-->
  <img src="https://muhilanproj.online/Project/log.png" class="img-thumbnail" alt="Cinque Terre">
    <br>

<!--info container-->
<div class="container-Info">
  <form action="Main.php" method="post" >
  <!--title -->
  <h1 class="title">Admission 2022-2023 for Undergraduate Courses<img src="https://muhilanproj.online/Project/new.gif" alt="gif"></h1>
  <!--personal detail container-->
<div class="container-PD">
  <h2>1.Personal Details</h2>
  <!--form ---->
  
    <!-------------------first name----------->
  <div class="fname">
    <label for="firstname" class="form-label">First Name:</label>
    <input type="text" class="form-control" id="fn" placeholder="Enter FirstName" name="Fname" required>
  </div>
  <br>
  <!--------------------------last name--------------->
  <div class="lname">
    <label for="lastname" class="form-label">Last Name:</label>
    <input type="text" class="form-control" id="ln" placeholder="Enter Last Name" name="Lname"  required>
  </div>
  <br>
  <!--------------------------date----------------->
  <div class="Date">
    <label for="dob" class="form-label">Date of Birth:</label>
    <input type="date" class="form-control" id="DOB" name="birthday" placeholder="Enter your DOB" required>
  </div>
  <br>
  <!-----------------------gender--------------->
  <div class="Gender">
    <label for="Gender" class="form-label">Gender:</label><br>
                
    <label class="radio-inline"><input type="radio" name="optradio" checked> Male</label>
    <label class="radio-inline"><input type="radio" name="optradio"> Female</label>
    <label class="radio-inline"><input type="radio" name="optradio" >Others</label>
  </div>
  <br>
  <!--------------------------caste------------------------>
  <div class="Caste">
    <label for="Caste" class="form-label">Caste:</label><br>

    <label class="radio-inline"><input type="radio" name="optradio1" checked> MBC</label>
    <label class="radio-inline"><input type="radio" name="optradio1" > BC</label>
    <label class="radio-inline"><input type="radio" name="optradio1" > SC</label>
    <label class="radio-inline"><input type="radio" name="optradio1" > ST</label>
    <label class="radio-inline"><input type="radio" name="optradio1" > Others</label>
  </div>
  <br>
  <!----------------------------------email------------->
  <div class="Email">
    <label for="Email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="Em" placeholder="Enter Your Email" name="Email"  required>
  </div>
  <br>
  <!-----------------------------------phone number------------------->
  <div class="SMnumb">
    <label for="StudentPhoneNumber" class="form-label">Student Mobile No:</label>
    <input type="number" class="form-control" id="SMN" placeholder="Enter Your Mobile Number" name="number" maxlength="14" required>
  </div>
  <br>
  <!-----------------------student image attach---------------->
  <div>
    <label class="form-label" for="file">Student Image:</label>
    <input type="file" class="form-control"  onchange="validateSize(this)" id="Stimage" required>
  </div>
<!----------------script for file sizing----------------->
  <script>
    function validateSize(input) {
    const fileSize = input.files[0].size / 1024 / 1024; // in MiB
    if (fileSize > 2) {
    alert('File size Is More 2 MiB');
    
    } else {
      //proceed
    }
    }
  </script><br>

   
</div>

<br>

<div class="container-PD">
<!------------------parent details-------->
<h2>2.Parents Details</h2>

<div class="fathername">
  <label for="ftname" class="form-label">Father Name:</label>
  <input type="text" class="form-control"  name="FTname" id="FTN" placeholder="Enter your Father Name" required>
</div>
<br>
<div class="fathernumber">
  <label for="ftnumber" class="form-label">Father Number:</label>
  <input type="number" name="FTnumb" class="form-control" id="FTNUM" placeholder="Enter your Father Number"required>
</div>
<br>
<div class="fatheroccupation">
  <label for="fatheroccu" class="form-label">Occupation:</label>
  <input type="text" name="FToccu" class="form-control" id="FTO" placeholder="Enter your Father Occupation" required>
</div>
<br>
<div class="mothername">
  <label for="mtrname" class="form-label">Mother Name:</label>
  <input type="text" name="MTname" class="form-control" id="MTN" placeholder="Enter your Mother Name" required>
</div>
<br>
<div class="mothernumber">
  <label for="mtnumber" class="form-label">Mother Number:</label>
  <input type="number" class="form-control" name="MTnumb" id="FTNUM" placeholder="Enter Your Mother Number" required>
</div>
<br>
<div class="motheroccupation">
  <label for="mtoccu" class="form-label">Occupation:</label>
  <input type="text" class="form-control" name="MToccu" id="MTO" placeholder="Enter Your Occupation" required>
</div>
</div><br>
<div class="container-AD">
  <h2>3.Address Details</h2>
  <div class="address">
    <label for="Address">Addres:</label>
    <input type="address" name="ADDRESS" id="ADD" class="form-control" placeholder="Enter Your Address"  style="height:80px ;" required>
  </div>
  <br>
  <div class="city">
    <label for="City" class="form-label">City:</label>
    <input type="text" class="form-control" name="CITY" id="CTY" placeholder="Enter Your City" required>
  </div>
  <br>
  <div class="state">
    <label for="State" class="form-label">State:</label>
    <input type="text" name="STATE" class="form-control" id="STE" placeholder="Enter Your City" required>
  </div>
  <br>
  <div class="pincode">
    <label for="Pindoce" class="form-label">Pincode:</label>
    <input name="PINCODE" type="number" class="form-control" id="PNCD" placeholder="Enter Your Pincode"  maxlength="6" required>
  </div>
  
</div>
<br>
<div class="container-ED">
  <h2>4.Education Details</h2><br>
  <h3 class="sslc">(SSLC Details)</h3>
  <div class="schoolname">
    <label for="Schoolname" class="form-label">School Name:</label>
    <input type="text" name="SCHOOLNAME" class="form-control" id="SHN" placeholder="Enter Your School Name" required>
  </div>
  <br>
  <div class="sslcmarks">
    <label for="SSLCMarks" class="form-label">Marks Scored:</label>
    <input type="number" class="form-control" name="SSLCMARKS" id="SSLCMRK" placeholder="Enter Your SSLC Marks" required>
  </div>
  <br>
  <div class="sslcpassed">
    <label for="SSLCpassed" class="form-label">Year Of Passed:</label>
    <input type="number" class="form-control" name="SSLCPASSED" id="SSLCPSD" placeholder="Etner Your Year of Passed" required>
  </div><br>
   <!-----------------------student image attach---------------->
   <div>
    <label class="form-label" for="file">SSLC Marksheet:</label>
    <input type="file" class="form-control"  onchange="validateSize(this)" id="SSLCMRK" required>
  </div>
<!----------------script for file sizing----------------->
  <script>
    function validateSize(input) {
    const fileSize = input.files[0].size / 1024 / 1024; // in MiB
    if (fileSize > 2) {
    alert('File size Is More 2 MiB');
    
    } else {
      //proceed
    }
    }
  </script><br>
  <h3 class="hsc">(HSC Details)</h3>
  <div class="hscschoolname">
    <label for="HSCSchoolname" class="form-label">School Name:</label>
    <input type="text" class="form-control" name="HSCSHLNAME" id="HSCSHN" placeholder="Enter Your School Name" required>
  </div><br>
  <div class="hscmarks">
    <label for="HSCMarks" class="form-label">Marks Scored:</label>
    <input type="number" class="form-control" name="HSCMARKS" id="HSCMRK" placeholder="Enter Your HSC Marks" required>
  </div>
  <br>
  <div class="hscpassed">
    <label for="HSCpassed" class="form-label">Year Of Passed:</label>
    <input type="number" class="form-control" name="HSCPASSED" id="HSCPSD" placeholder="Etner Your Year of Passed" required>
  </div><br>
   <!-----------------------student image attach---------------->
   <div>
    <label class="form-label" for="file">HSC Marksheet:</label>
    <input type="file" class="form-control"  onchange="validateSize(this)" id="HSCMRK" required>
  </div>
<!----------------script for file sizing----------------->
  <script>
    function validateSize(input) {
    const fileSize = input.files[0].size / 1024 / 1024; // in MiB
    if (fileSize > 2) {
    alert('File size Is More 2 MiB');
    
    } else {
      //proceed
    }
    }
  </script><br>
</div>
<br>
<div class="container-CR">
  <h2>5. Courses Offered</h2>
  <div class="computerscience">
    <label for="ComputerScience" class="form-label">(Computer Science)</label>

    <select onchange={disableSelect(this)} name="courses" class="form-control" id="CS"  >

      <option>Types Of Courses</option>
      <option>Bachelor of Science (BCA)</option>
      <option>Bachelor of Science (Computer Science)</option>
      <option>Bachelor of Science ( Visual Communication)</option>
      <option>Bachelor of Science ( Electronic Science)</option>
                  
    </select><br>
  </div>

    <div class="accounting&finance">
      <label for="Accounting&Finance" class="form-label" >(Accounting & Finance)</label>
      <select class="form-control" id="AC"  name="courses1">

        <option>Types Of Courses</option>
        <option>Bachelor of Accounts(General)</option>
        <option>Bachelor of Accounts(Accounting&Finance)</option>
        <option>Bachelor of Accounts(Computer)</option>
        <option>Bachelor of Accounts(Corporation secretaryship)</option>
        <option>Bachelor of Accounts(Bank Management)</option>
             
      </select><br>
  </div>

  <div class="lifescience">
    <label for="LifeScience" class="from-label" >(Life science)</label>

    <select class="form-control" id="FI" name="courses2" >

      <option>Types Of Courses</option>
      <option>Bachelor of Science(Computer Science)</option>
      <option>Bachelor of Science(Biochemistry)</option>
      <option>Bachelor of Science(Microbiology)</option>
      <option>Bachelor of Science(Biotechnology)</option>
      <option>Bachelor of Science(Mathematics)</option>
      <option>Bachelor of Science(Chemistry)</option>
  
    </select><br>
  </div>
  <script>
     $(document).ready(function(){
    $("#CS").change(function(){
      disableSelect(this);
    });
    $("#AC").change(function(){
      disableSelect(this);
    });
    $("#FI").change(function(){
      disableSelect(this);
    });
  })

  
  function disableSelect (ctrl) {
    if (ctrl.value != "Types Of Courses" && ctrl.id == "CS") {
        $("#AC")[0].disabled = true;
        $("#FI")[0].disabled = true;

    } else if(ctrl.id == "CS") {
        $("#AC")[0].disabled = false;
        $("#FI")[0].disabled = false;  
    }

    if (ctrl.value != "Types Of Courses" && ctrl.id == "AC") {
        $("#FI")[0].disabled = true;
        $("#CS")[0].disabled = true;

    } else if(ctrl.id == "AC") {
        $("#FI")[0].disabled = false;
        $("#CS")[0].disabled = false;
    }

    if (ctrl.value != "Types Of Courses" && ctrl.id == "FI") {
        $("#CS")[0].disabled = true;
        $("#AC")[0].disabled = true;

    } else if(ctrl.id == "FI") {
        $("#CS")[0].disabled = false;
        $("#AC")[0].disabled = false;
    }
}
  </script>
  <input type="submit" value="Submit" />
</div><br>

</form>

</div>
</div>
<center>
 <h1>hello, <?php echo $_SESSION['name']; ?></h1>
    <a href="logout.php">Logout</a>
</center>
</body>
</html>

<?php

}else{
    header("Location: login.php");
    exit();
}

?>