<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&display=swap');
:root {
    --font-style: 'Nunito Sans', sans-serif:
}

* {
    box-sizing: border-box;
}

body{
    background-color: #131315;
    font-family: var(--font-style);
    
}

.login-box{
    position: absolute;
    top: 50%;
    left: 50%;
    width: 400px;
    height: auto;
    padding: 40px;
    transform: translate(-50%, -50%);
    background: #242026;
    box-shadow: 0 15px 25px rgba(143, 124, 236, 0.7);
    border-radius: 10px;
    margin-top: 50px;
    
}

.login-box h2{
    margin: 0 0 30px;
    padding: 0;
    color: #fff;
    text-align: center;
}

.login-box .user-box input{
    position: relative;
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    margin-bottom: 30px;
    border: none;
    border-bottom: 1px solid #fff;
    outline: none;
    background: transparent;
}

.login-box .user-box label {
    position: relative;
    left: 0;
    top: -60px;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    pointer-events: none;
    transition: .5s;
}

.login-box .user-box input:focus~label,
.login-box .user-box input:valid~label {
    top: -85px;
    left: 0;
    color: #8F7CEC;
    font-size: 12px;
}

#submit{
    padding: 10px 20px;
    color: #CBBDDB;
    font-size: 16px;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    transition: .5S;
    letter-spacing: 4PX;
    border: 1PX solid #8F7CEC;
    margin: auto
}

#submit:hover {
    background: #8F7CEC;
    color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 5px #8F7CEC, 0 0 25px #8F7CEC, 0 0 50px #8F7CEC, 0 0 100px #8F7CEC;
}

.button-form {
    display: flex;
    flex-direction: row;
    margin-top: 20px;
}

#register{
    font-size: 14px;
    text-decoration: none;
    color: #CBBDDB;
    margin: auto;
    width: 60%;
    text-align: center;
}
#register a{
    margin: auto;
    color: #8F7CEC;
    text-decoration: none;
}

button{
    background-color: #8F7CEC;
    
}

.error{
    background: #F2DEDE;
    color:#A94442;
    padding: 10px;
    width: 95%;
    border-radius: 5px;
}

.error{
    background: #D4EDDA;
    color: #40754c;
    padding: 10px;
    width: 95%;
    border-radius: 5px;
}
    </style>
</head>
<body>
    
<div class="login-box">
    <h2>SIGN UP</h2>
    <form action="signup-check.php" method="POST">

  <?php if (isset($_GET['error'])) { ?>           
            <p class="error"><?php echo $_GET['error']; ?></p>
           <?php } ?>

           <?php if (isset($_GET['Success'])) { ?>           
            <p class="Success"><?php echo $_GET['Success']; ?></p>
           <?php } ?>
        
    <div class="user-box">
        <input type="text" name="Fname" >
        <label>Full Name</label>
        </div>

    <div class="user-box">
    <input type="text" name="Uname" >
    <label>Username</label>
    </div>

    <div class="user-box">
        <input type="number" name="Pnum" >
        <label>Phone Number</label>
    </div>

    <div class="user-box">
    <input type="password" name="Pass" >
    <label>Password</label>
    </div>

    <div class="user-box">
        <input type="password" name="CPass" >
        <label>Confirm Password</label>
        </div>

    <div class="button-form">
    
    <button type="submit" id="submit">Sign Up</button>

    <div id="register">
    Already have an account ?
    <a href="loginpage.php">Register</a>
    </div>
    </div>

</form>
   
</div>
</body>
</html>