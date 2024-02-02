<?php

require_once 'db.php';

function display_data(){
    global $conn;
    $query = "select * from  Application_Form";
    $result = mysqli_query($conn,$query);
    return $result;
}

?>