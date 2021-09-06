<?php
require '../../connect-to-database.php';

if(isset($_POST['submit']))
{
  $logged;
  $show_error;

  $username = $_POST['name'];
  $password = $_POST['password'];

  // sql query to check the given data with database
  $sql = "Select * From users Where name = '$username' And password='$password';";

  // exequte the query
  $result = mysqli_query($conn, $sql);
  // check the number of rows
  $num_of_rows = mysqli_num_rows($result);
  // grab the data
  $fetch = mysqli_fetch_assoc($result);

  if($num_of_rows == 1){
    // user avaliable
      $logged = true;
      $show_error = false;

    // start a session
    session_start();
    $_SESSION['username'] = $fetch['name'];
    $_SESSION['loggedin'] = true;
    // redirect to home
    header('location: ../../index/index.php'); 
  }
  else{
    $logged = false;
    $show_error = true;
  }

  $conn->close();
}

?>