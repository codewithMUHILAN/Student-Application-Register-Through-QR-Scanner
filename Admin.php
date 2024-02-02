<?php

/*require_once('config/db.php');
$query = "select * from Application_Form";
$result = mysqli_query($conn,$query);
*/

require_once 'config/db.php';
require_once 'config/function.php';

$result = display_data();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Data From Database</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta3/js/bootstrap.min.js" integrity="sha512-mp3VeMpuFKbgxm/XMUU4QQUcJX4AZfV5esgX72JQr7H7zWusV6lLP1S78wZnX2z9dwvywil1VHkHZAqfGOW7Nw==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta3/css/bootstrap.min.css" integrity="sha512-N415hCJJdJx+1UBfULt+i+ihvOn42V/kOjOpp1UTh4CZ70Hx5bDlKryWaqEKfY/8EYOu/C2MuyaluJryK1Lb5Q==" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Data View</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white" >
                                <td> First Name </td>
                                <td> Last Name </td>
                                <td> Dob </td>
                                <td> Gender </td>
                                <td> Caste </td>
                                <td> Email </td>
                                <td> stmobno </td>
                                <td> stimg </td>
                                <td> Father Name </td>
                                <td> Father Number </td>
                                <td> Father occupation	</td>
                                <td> Mother Name</td>
                                <td> Mother Number	 </td>
                                <td> Mother occupation	 </td>
                                <td> Addres </td>
                                <td> City</td>
                                <td> State </td>
                                <td> Pincode </td>
                                <td> SSLC School Name </td>
                                <td> SSLC Marks Scored </td>
                                <td> SSLC Year Of Passed </td>
                                <td> SSLC Marksheet </td>
                                <td> HSC School Name </td>
                                <td> HSC Marks Scored </td>
                                <td> HSC Year Of Passed </td>
                                <td> HSC Marksheet</td>
                                <td> Computer Science </td>
                                <td> Accounting & Finance</td>
                                <td> Life science </td>
                                <td> Edit </td>
                                <td> Delete </td>
                                
                            </tr>
                            <tr>
                                <?php

                                while($row = mysqli_fetch_assoc($result)){
                                    ?>
                                    <td><?php echo $row['First Name'] ?></td>
                                    <td><?php echo $row['user_name'] ?></td>
                                    <td><?php echo $row['phone'] ?></td>
                                    <td><?php echo $row['pass'] ?></td>
                                    <td><?php echo $row['pass'] ?></td>
                                    <td><?php echo $row['pass'] ?></td>
                                    <td><?php echo $row['pass'] ?></td>
                                    <td><?php echo $row['pass'] ?></td>
                                    <td><?php echo $row['pass'] ?></td>
                                    <td><?php echo $row['pass'] ?></td>
                                    <td><?php echo $row['pass'] ?></td>
                                    <td><?php echo $row['pass'] ?></td>
                                    <td><?php echo $row['pass'] ?></td>
                                    <td><?php echo $row['pass'] ?></td>
                                    <td><?php echo $row['pass'] ?></td>
                                    <td><?php echo $row['pass'] ?></td>
                                    <td><?php echo $row['pass'] ?></td>
                                    <td><?php echo $row['pass'] ?></td>
                                    <td><?php echo $row['pass'] ?></td>
                                    <td><?php echo $row['pass'] ?></td>
                                    <td><?php echo $row['pass'] ?></td>
                                    <td><?php echo $row['pass'] ?></td>
                                    <td><?php echo $row['pass'] ?></td>
                                    <td><?php echo $row['pass'] ?></td>
                                    <td><?php echo $row['pass'] ?></td>
                                    <td><?php echo $row['pass'] ?></td>
                                    <td><?php echo $row['pass'] ?></td>
                                    <td><?php echo $row['pass'] ?></td>
                                    <td><?php echo $row['pass'] ?></td>
                                    <td><a href="#" class="btn btn-primary">Edit</a></td>
                                    <td><a href="#" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>