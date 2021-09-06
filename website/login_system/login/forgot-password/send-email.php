<?php
$email_found = true;
if(isset($_POST['submit'])){
    // connection to database
    include '../../connect-to-database.php';

    // first lets get all the varibles
    $email = $_POST['email'];

    // sql query to check if there is such an email
    $sql = "SELECT * FROM users WHERE email = '$email'";

    // run the query
    $result = mysqli_query($conn, $sql);

    // check the number of rows
    $count = mysqli_num_rows($result);

    if($count == 1){
        // email avaliable
        $email_found = true;
    }else{
        // email not found
        $email_found = false;
    }
}